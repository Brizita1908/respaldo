<?php

namespace AsesoresSABundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Aseguradora
 *
 * @ORM\Table(name="aseguradora", uniqueConstraints={@ORM\UniqueConstraint(name="siglaAseguradora", columns={"siglaAseguradora"})})
 * @ORM\Entity
 */
class Aseguradora
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idAseguradora", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idaseguradora;

    /**
     * @var string
     *
     * @ORM\Column(name="siglaAseguradora", type="string", length=5, nullable=false)
     */
    private $siglaaseguradora;

    /**
     * @var string
     *
     * @ORM\Column(name="nombreAseguradora", type="string", length=50, nullable=true)
     */
    private $nombreaseguradora;

    /**
     * @var string
     *
     * @ORM\Column(name="estadoAseguradora", type="string", length=1, nullable=true)
     */
    private $estadoaseguradora;



    /**
     * Get idaseguradora
     *
     * @return integer 
     */
    public function getIdaseguradora()
    {
        return $this->idaseguradora;
    }

    /**
     * Set siglaaseguradora
     *
     * @param string $siglaaseguradora
     * @return Aseguradora
     */
    public function setSiglaaseguradora($siglaaseguradora)
    {
        $this->siglaaseguradora = $siglaaseguradora;

        return $this;
    }

    /**
     * Get siglaaseguradora
     *
     * @return string 
     */
    public function getSiglaaseguradora()
    {
        return $this->siglaaseguradora;
    }

    /**
     * Set nombreaseguradora
     *
     * @param string $nombreaseguradora
     * @return Aseguradora
     */
    public function setNombreaseguradora($nombreaseguradora)
    {
        $this->nombreaseguradora = $nombreaseguradora;

        return $this;
    }

    /**
     * Get nombreaseguradora
     *
     * @return string 
     */
    public function getNombreaseguradora()
    {
        return $this->nombreaseguradora;
    }

    /**
     * Set estadoaseguradora
     *
     * @param string $estadoaseguradora
     * @return Aseguradora
     */
    public function setEstadoaseguradora($estadoaseguradora)
    {
        $this->estadoaseguradora = $estadoaseguradora;

        return $this;
    }

    /**
     * Get estadoaseguradora
     *
     * @return string 
     */
    public function getEstadoaseguradora()
    {
        return $this->estadoaseguradora;
    }
}
