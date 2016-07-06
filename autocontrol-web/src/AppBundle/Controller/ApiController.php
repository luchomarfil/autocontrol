<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Usuario;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\Validator\Constraints\DateTime;

class ApiController extends Controller
{

	/**
     *
     * @Route("/autoshora", name="autos_hora")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $terminals = $em->getRepository('AppBundle:Terminal')->findAll();

        $hora_actual = date('Y-m-d H:i:s');
		$hora_vieja = date('Y-m-d H:i:s', strtotime('-1 hour'));

		$arreglo_autos = array();

		foreach ($terminals as $terminal) {
			$arreglo_autos[$terminal->getId()] = $this->calcularAutos($hora_vieja, $hora_actual, $terminal);
		}   
     
        return $this->render('terminal/show_car.html.twig', array('terminals' => $terminals, 'autos' 
        	=> $arreglo_autos,
        ));
    }


    private function calcularAutos($hora_vieja, $hora_actual, $terminal)
    {
    	$response = file_get_contents('http://localhost:8081/simulador/api/eventosTerminal/'.$terminal->getId());
        $response = json_decode($response, true);
		$datos = array();
		$datos[0] = 0;
		$datos[1] = 0;

        if ($response == '') {
        	return 0;
        }
	    foreach ($response['eventoTerminal'] as $value) {
		    $hora_evento = date($value['fecha']);
		    if ($hora_vieja < $hora_evento && $hora_evento < $hora_actual) {
		        $datos[0] ++;
		        $datos[1] = $datos[1] + floatval($value['generado']);
		    }
        }
        return $datos;
    }



    /**
     *
     * @Route("/verterminales", name="verterminales")
     * @Method("GET")
     */
    public function verTerminales(){

        $hora_actual = date('Y-m-d H:i:s');
		$hora_vieja = date('Y-m-d H:i:s', strtotime('-1 hour'));

    	$em = $this->getDoctrine()->getManager();
        $terminals = $em->getRepository('AppBundle:Usuario')->findTerminals($_SESSION['_sf2_attributes']['id']);

        $arreglo_ener = array();

        foreach ($terminals as $terminal) {
			$arreglo_ener[$terminal->getId()] = $this->calcularAutos($hora_vieja, $hora_actual, $terminal);
		}

        return $this->render('terminal/show_est_sup.html.twig', array('terminals' => $terminals, 'autos' 
        	=> $arreglo_ener,
        ));    }


            /**
     *
     * @Route("/verterminalesajax", name="verterminalesajax")
     * @Method("GET")
     */
    public function verTerminalesAjax(){

        $hora_actual = date('Y-m-d H:i:s');
        $hora_vieja = date('Y-m-d H:i:s', strtotime('-1 hour'));

        $em = $this->getDoctrine()->getManager();
        $terminals = $em->getRepository('AppBundle:Usuario')->findTerminals($_SESSION['_sf2_attributes']['id']);

        $arreglo_ener = array();

        foreach ($terminals as $terminal) {
            $arreglo_ener[$terminal->getId()] = $this->calcularAutos($hora_vieja, $hora_actual, $terminal);
        }

        return $this->render('terminal/grafico_sup.html.twig', array('terminals' => $terminals, 'autos' 
            => $arreglo_ener,
        ));    
    }
}
