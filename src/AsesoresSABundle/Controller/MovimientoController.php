<?php

namespace AsesoresSABundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use AsesoresSABundle\Entity\Movimiento;
use AsesoresSABundle\Form\MovimientoType;

class MovimientoController extends Controller
{
    /**
     * @Route("/movimiento/listar", name="listarMovimiento")
     */   
    
    public function listarMovimientoAction() {
        
        $em=$this->getDoctrine()->getManager();
	$movimiento=$em->getRepository('AsesoresSABundle:Movimiento')->findAll();
     
        return $this->render(
                "AsesoresSABundle:Default:listarMovimiento.html.twig", array("movimientos"=>$movimiento
                ));
    }
    
    /**
     * @Route("/movimiento/nuevo", name="nuevoMovimiento")
     */ 
    
    public function nuevoMovimientoAction(Request $request) {
        
        $movimiento = new Movimiento();
        
        $form = $this->createForm(new MovimientoType(), $movimiento);
        
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($movimiento);
            $metadata = $em->getClassMetaData(get_class($movimiento));
            $em->flush();
            return $this->redirectToRoute("nuevoMovimiento");
        }
        return $this->render("AsesoresSABundle:Default:movimiento.html.twig", array(
            "form"=>$form->createView()
                ));
    }
    
    /**
     * @Route("/movimiento/editar/{siglamovimiento}", name="editarMovimiento")
     */ 
    
    public function editarMovimientoAction(Request $request, $siglamovimiento) {
        $em = $this->getDoctrine()->getManager();
        $movimiento = $em->getRepository('AsesoresSABundle:Movimiento')->findOneBySiglamovimiento($siglamovimiento);
        
        $form = $this->createForm(new MovimientoType(), $movimiento);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()){
            
            $em->persist($movimiento);
            $metadata = $em->getClassMetaData(get_class($movimiento));
            $em->flush();  
        }
        
        return $this->render(
                "AsesoresSABundle:Default:movimiento.html.twig", array("form"=>$form->createView()
                ));
    }
}
