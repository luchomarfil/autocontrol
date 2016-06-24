<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


class SecurityController extends Controller
{

    /**
     * @Route("/login", name="login")
     */
    public function loginAction(Request $request)
    {
        if ($request->getSession()->has('id')){ 
            return DefaultController::indexAction($request);        
        }
        return $this->render('security/login.html.twig');  
    }


    /**
     * @Route("/", name="login_check")
     */
    public function checkLoginAction(Request $request)
    {
        try{
            if ($request->getSession()->has('id')){ 
                return DefaultController::indexAction($request);        
            }
            $username = $request->get('username');
            $password = $request->get('password');
            $em = $this->getDoctrine()->getManager();
            $user = $em->getRepository('AppBundle:Usuario')->findOneBy(array("username"=>$username, "password"=>$password));

            if($user){
                $session = $request->getSession();
                $session->set('id', $user->getId());
                $session->set('pass', $user->getPassword());
                $session->set('nombre', $user->getNombre());
                $session->set('rol', $user->getTipoUsuario());
            if ($session->get('rol') == 1) {
                return $this->render('default/index.html.twig', array('s' => $session->get('rol')));
            }
            else
                return $this->render('default/index_sup.html.twig', array('s' => $session->get('rol')));
            }else{
                return $this->render('security/login.html.twig');
            }
        }catch (ORMException $e){
            return $this->render('security/login.html.twig');
        }
    }

    /**
     * @Route("/logout")
     */
    public function logout(Request $request){
        
        $_SESSION = array();
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000, $params["path"], $params["domain"], $params["secure"], $params["httponly"]
            );
        }
        session_destroy();
        return $this->render('security/login.html.twig');
    }
    

}
