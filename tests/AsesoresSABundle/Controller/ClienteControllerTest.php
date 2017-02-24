<?php

namespace AsesoresSABundle\Tests\Controller;

//use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class ClienteControllerTest extends KernelTestCase
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
    
    public function testnuevoClienteAction() {
        
        $aseg = $this->em
                ->getRepository('AsesoresSABundle:Cliente')
                ->findByFilecliente('1908')
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
