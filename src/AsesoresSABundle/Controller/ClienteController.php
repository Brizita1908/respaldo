<?php

namespace AsesoresSABundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use AsesoresSABundle\Entity\Cliente;
use AsesoresSABundle\Form\ClienteType;

class ClienteController extends Controller
{ 
    /**
     * @Route("/cliente/listar", name="listarCliente")
     */ 
    
    public function listarClienteAction() {
        
        $em=$this->getDoctrine()->getManager();
	$cliente=$em->getRepository('AsesoresSABundle:Cliente')->findAll();
        
	        
        return $this->render(
                "AsesoresSABundle:Default:listarClientes.html.twig", array("clientes"=>$cliente
                ));
    }
    
    
    /**
     * @Route("/cliente/nuevo", name="nuevoCliente")
     */ 
    
    public function nuevoClienteAction(Request $request) {
        
        $cliente = new Cliente();
        
        $form = $this->createForm(new ClienteType(), $cliente);
        
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($cliente);
            $metadata = $em->getClassMetaData(get_class($cliente));
            $em->flush();  
            return $this->redirectToRoute("nuevoCliente");
        }
        
        return $this->render(
                "AsesoresSABundle:Default:cliente.html.twig", array("form"=>$form->createView()
                ));
    }
    
    /**
     * @Route("/cliente/editar/{filecliente}", name="editarCliente")
     */
    
    public function editarClienteAction(Request $request, $filecliente) {
        $em = $this->getDoctrine()->getManager();
        $cliente = $em->getRepository('AsesoresSABundle:Cliente')->findOneByFilecliente($filecliente);
        
        $form = $this->createForm(new ClienteType(), $cliente);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()){
            
            $em->persist($cliente);
            $metadata = $em->getClassMetaData(get_class($cliente));
            $em->flush();  
        }
        
        return $this->render(
                "AsesoresSABundle:Default:cliente.html.twig", array("form"=>$form->createView()
                ));
    }
    
    
}