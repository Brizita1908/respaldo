<?php

namespace AsesoresSABundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ramo
 *
 * @ORM\Table(name="ramo")
 * @ORM\Entity
 */
class Ramo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idRamo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idramo;

    /**
     * @var string
     *
     * @ORM\Column(name="siglaRamo", type="string", length=5, nullable=true)
     */
    private $siglaramo;

    /**
     * @var string
     *
     * @ORM\Column(name="nombreRamo", type="string", length=50, nullable=true)
     */
    private $nombreramo;

    /**
     * @var string
     *
     * @ORM\Column(name="tipoRamo", type="string", length=1, nullable=true)
     */
    private $tiporamo;

    /**
     * @var string
     *
     * @ORM\Column(name="estadoRamo", type="string", length=1, nullable=true)
     */
    private $estadoramo;



    /**
     * Get idramo
     *
     * @return integer 
     */
    public function getIdramo()
    {
        return $this->idramo;
    }

    /**
     * Set siglaramo
     *
     * @param string $siglaramo
     * @return Ramo
     */
    public function setSiglaramo($siglaramo)
    {
        $this->siglaramo = $siglaramo;

        return $this;
    }

    /**
     * Get siglaramo
     *
     * @return string 
     */
    public function getSiglaramo()
    {
        return $this->siglaramo;
    }

    /**
     * Set nombreramo
     *
     * @param string $nombreramo
     * @return Ramo
     */
    public function setNombreramo($nombreramo)
    {
        $this->nombreramo = $nombreramo;

        return $this;
    }

    /**
     * Get nombreramo
     *
     * @return string 
     */
    public function getNombreramo()
    {
        return $this->nombreramo;
    }

    /**
     * Set tiporamo
     *
     * @param string $tiporamo
     * @return Ramo
     */
    public function setTiporamo($tiporamo)
    {
        $this->tiporamo = $tiporamo;

        return $this;
    }

    /**
     * Get tiporamo
     *
     * @return string 
     */
    public function getTiporamo()
    {
        return $this->tiporamo;
    }

    /**
     * Set estadoramo
     *
     * @param string $estadoramo
     * @return Ramo
     */
    public function setEstadoramo($estadoramo)
    {
        $this->estadoramo = $estadoramo;

        return $this;
    }

    /**
     * Get estadoramo
     *
     * @return string 
     */
    public function getEstadoramo()
    {
        return $this->estadoramo;
    }
}
