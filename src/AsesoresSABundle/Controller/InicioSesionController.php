<?php

namespace AsesoresSABundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use AsesoresSABundle\Form\InicioSesionType;
use AsesoresSABundle\Entity\Usuarios;

class InicioSesionController extends Controller
{ 
    /**
     * @Route("/", name="inicioSesion")
     */
    public function indexAction(Request $request)
    {
            $usuarios = new Usuarios();
        $form = $this->createForm(new InicioSesionType(), $usuarios);
        $form->handleRequest($request);
        
        
        if ($form->isSubmitted() && $form->isValid()){
            $nombre=$usuarios->getNombreusuario();
            $contrasena=$usuarios->getContrasenausuario();
            
            $em=$this->getDoctrine()->getManager();
	    $userfound=$em->getRepository('AsesoresSABundle:Usuarios')->findOneByNombreusuario($nombre);
            
            if($userfound){
                if($userfound->getContrasenausuario() == $contrasena){
                    //return new Response("Usuario y Contraseña encontrados");
                    return $this->redirectToRoute("Bienvenida");
                }
            }
        }
        
        return $this->render('AsesoresSABundle:InicioSesion:index.html.twig', array("form"=>$form->createView()));
   
     }
}
