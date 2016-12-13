<?php

namespace AsesoresSABundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use AsesoresSABundle\Entity\Anexo;
use AsesoresSABundle\Entity\Pago;
use AsesoresSABundle\Entity\Poliza;
use AsesoresSABundle\Entity\Transaccion;
use AsesoresSABundle\Form\AnexoType;
use AsesoresSABundle\Form\PagoType;
use AsesoresSABundle\Form\PolizaType;
use AsesoresSABundle\Form\TransaccionType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class TransaccionController extends Controller
{
    /**
     * @Route("/transaccion/ver", name="verTransaccion")
     */
    public function verTransaccionAction(Request $request) {
        //$em=$this->getDoctrine()->getManager();
	//$cliente=$em->getRepository('AsesoresSABundle:Cliente')->findAll();
        
	        
        return $this->render(
                "AsesoresSABundle:Default:listarTransaccion.html.twig");
    }   
    
}
