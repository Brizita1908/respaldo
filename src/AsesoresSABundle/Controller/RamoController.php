<?php

namespace AsesoresSABundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use AsesoresSABundle\Entity\Ramo;
use AsesoresSABundle\Form\RamoType;

class RamoController extends Controller
{
    /**
     * @Route("/ramo/listar", name="listarRamo")
     */   
    
    public function listarRamoAction() {
        
        $em=$this->getDoctrine()->getManager();
	$Ramo=$em->getRepository('AsesoresSABundle:Ramo')->findAll();
        
	        
        return $this->render(
                "AsesoresSABundle:Default:listarRamo.html.twig", array("ramos"=>$Ramo
                ));
        
    }
    
    /**
     * @Route("/ramo/nuevo", name="nuevoRamo")
     */ 
    
    public function nuevoRamoAction(Request $request) {
        $ramo = new Ramo();
        
        $form = $this->createForm(new RamoType(), $ramo);

        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($ramo);
            $metadata = $em->getClassMetaData(get_class($ramo));
            $em->flush();
            return $this->redirectToRoute("nuevoRamo");
        }

        return $this->render(
                "AsesoresSABundle:Default:ramo.html.twig", array("form"=>$form->createView()
                ));
    }
    
    /**
     * @Route("/ramo/editar/{siglaramo}", name="editarRamo")
     */
    
    public function editarRamoAction(Request $request, $siglaramo) {
        $em = $this->getDoctrine()->getManager();
        $ramo = $em->getRepository('AsesoresSABundle:Ramo')->findOneBySiglaramo($siglaramo);
        
        $form = $this->createForm(new RamoType(), $ramo);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()){
            
            $em->persist($ramo);
            $metadata = $em->getClassMetaData(get_class($ramo));
            $em->flush();
        }
        
        return $this->render(
                "AsesoresSABundle:Default:ramo.html.twig", array("form"=>$form->createView()
                ));
    }
}
