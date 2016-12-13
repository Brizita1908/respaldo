<?php

namespace AsesoresSABundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Poliza
 *
 * @ORM\Table(name="poliza", indexes={@ORM\Index(name="idAseguradora", columns={"idAseguradora"}), @ORM\Index(name="idCliente", columns={"idCliente"})})
 * @ORM\Entity
 */
class Poliza
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idPoliza", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idpoliza;

    /**
     * @var string
     *
     * @ORM\Column(name="numeroPoliza", type="string", length=10, nullable=true)
     */
    private $numeropoliza;

    /**
     * @var \Aseguradora
     *
     * @ORM\ManyToOne(targetEntity="Aseguradora")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idAseguradora", referencedColumnName="idAseguradora")
     * })
     */
    private $idaseguradora;

    /**
     * @var \Cliente
     *
     * @ORM\ManyToOne(targetEntity="Cliente")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idCliente", referencedColumnName="idCliente")
     * })
     */
    private $idcliente;



    /**
     * Get idpoliza
     *
     * @return integer 
     */
    public function getIdpoliza()
    {
        return $this->idpoliza;
    }

    /**
     * Set numeropoliza
     *
     * @param string $numeropoliza
     * @return Poliza
     */
    public function setNumeropoliza($numeropoliza)
    {
        $this->numeropoliza = $numeropoliza;

        return $this;
    }

    /**
     * Get numeropoliza
     *
     * @return string 
     */
    public function getNumeropoliza()
    {
        return $this->numeropoliza;
    }

    /**
     * Set idaseguradora
     *
     * @param \AsesoresSABundle\Entity\Aseguradora $idaseguradora
     * @return Poliza
     */
    public function setIdaseguradora(\AsesoresSABundle\Entity\Aseguradora $idaseguradora = null)
    {
        $this->idaseguradora = $idaseguradora;

        return $this;
    }

    /**
     * Get idaseguradora
     *
     * @return \AsesoresSABundle\Entity\Aseguradora 
     */
    public function getIdaseguradora()
    {
        return $this->idaseguradora;
    }

    /**
     * Set idcliente
     *
     * @param \AsesoresSABundle\Entity\Cliente $idcliente
     * @return Poliza
     */
    public function setIdcliente(\AsesoresSABundle\Entity\Cliente $idcliente = null)
    {
        $this->idcliente = $idcliente;

        return $this;
    }

    /**
     * Get idcliente
     *
     * @return \AsesoresSABundle\Entity\Cliente 
     */
    public function getIdcliente()
    {
        return $this->idcliente;
    }
}
