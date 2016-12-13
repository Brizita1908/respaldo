<?php

namespace AsesoresSABundle\Tests\Controller;

//use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class MovimientoControllerTest extends KernelTestCase
{ 
    /**
     * @var \Doctrine\ORM\EntityManager
     */
    private $em;

    /**
     * {@inheritDoc}
     */
    
    protected function setUp()
    {
        self::bootKernel();

        $this->em = static::$kernel->getContainer()
            ->get('doctrine')
            ->getManager();
    }
    
    public function testNuevoMovimiento() {
        
        $aseg = $this->em
                ->getRepository('AsesoresSABundle:Movimiento')
                ->findBySiglamovimiento('EX')
                ;
        $this->assertCount(1, $aseg);
       //$this->assertTrue(is_object($aseg));
    }
    
    /**
     * {@inheritDoc}
     */
    protected function tearDown()
    {
        parent::tearDown();

        $this->em->close();
        $this->em = null; // avoid memory leaks
    }
   
}
