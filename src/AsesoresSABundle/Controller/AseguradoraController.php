<?php

namespace AsesoresSABundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use AsesoresSABundle\Entity\Aseguradora;
use AsesoresSABundle\Form\AseguradoraType;

class AseguradoraController extends Controller
{ 
    
    /**
     * @Route("/aseguradora/listar", name="listarAseguradora")
     */
    
    public function listarAseguradoraAction() {
        
        $em=$this->getDoctrine()->getManager();
	$aseguradora=$em->getRepository('AsesoresSABundle:Aseguradora')->findAll();
     
        return $this->render(
                "AsesoresSABundle:Default:listarAseguradora.html.twig", array("aseguradoras"=>$aseguradora
                ));
    }
    
    /**
     * @Route("/aseguradora/nueva", name="nuevaAseguradora")
     */  
    
    public function nuevaAseguradoraAction(Request $request) {
        
        $aseguradora = new Aseguradora();
        
        $form = $this->createForm(new AseguradoraType(), $aseguradora);

        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($aseguradora);
            $metadata = $em->getClassMetaData(get_class($aseguradora));
            $em->flush();
            return $this->redirectToRoute("nuevaAseguradora");
        }
        
        return $this->render(
                "AsesoresSABundle:Default:aseguradora.html.twig", array("form"=>$form->createView()
                ));
    }
    
    /**
     * @Route("/aseguradora/editar/{siglaaseguradora}", name="editarAseguradora")
     */
    
    public function editarAseguradoraAction(Request $request, $siglaaseguradora) {
        $em = $this->getDoctrine()->getManager();
        $aseguradora = $em->getRepository('AsesoresSABundle:Aseguradora')->findOneBySiglaaseguradora($siglaaseguradora);
        
        $form = $this->createForm(new AseguradoraType(), $aseguradora);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()){
            
            $em->persist($aseguradora);
            $metadata = $em->getClassMetaData(get_class($aseguradora));
            $em->flush();  
        }
        
        return $this->render(
                "AsesoresSABundle:Default:aseguradora.html.twig", array("form"=>$form->createView()
                ));
    }
}
