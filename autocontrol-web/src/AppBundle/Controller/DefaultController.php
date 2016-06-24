<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{

    public function indexAction(Request $request)
    {
    	if ($request->getSession()->get('rol') == 1) {
        	return $this->render('default/index.html.twig', array('s' => $request->getSession()->get('rol')));
        }
        else{
        	return $this->render('default/index_sup.html.twig', array('s' => $request->getSession()->get('rol')));
        }


    }
}
