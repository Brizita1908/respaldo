<?php

namespace AsesoresSABundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/inicio", name="Bienvenida")
     */
    public function inicioAction()
    {
        return $this->render('AsesoresSABundle:Default:inicio.html.twig');
    }
    
    /**
     * @Route("/cerrarSesion", name="cerrarSesion")
     */
    public function cerrarsesionAction()
    {
        return $this->redirectToRoute("inicioSesion");
    }
}
