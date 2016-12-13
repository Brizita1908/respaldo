<?php

namespace AsesoresSABundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Asegurado
 *
 * @ORM\Table(name="asegurado", indexes={@ORM\Index(name="idAnexo", columns={"idAnexo"})})
 * @ORM\Entity
 */
class Asegurado
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idAsegurado", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idasegurado;

    /**
     * @var string
     *
     * @ORM\Column(name="icASegurado", type="string", length=10, nullable=true)
     */
    private $icasegurado;

    /**
     * @var string
     *
     * @ORM\Column(name="nombresAsegurado", type="string", length=100, nullable=true)
     */
    private $nombresasegurado;

    /**
     * @var string
     *
     * @ORM\Column(name="apellidosASegurado", type="string", length=100, nullable=true)
     */
    private $apellidosasegurado;

    /**
     * @var string
     *
     * @ORM\Column(name="valorAsegurado", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $valorasegurado;

    /**
     * @var \Anexo
     *
     * @ORM\ManyToOne(targetEntity="Anexo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idAnexo", referencedColumnName="idAnexo")
     * })
     */
    private $idanexo;



    /**
     * Get idasegurado
     *
     * @return integer 
     */
    public function getIdasegurado()
    {
        return $this->idasegurado;
    }

    /**
     * Set icasegurado
     *
     * @param string $icasegurado
     * @return Asegurado
     */
    public function setIcasegurado($icasegurado)
    {
        $this->icasegurado = $icasegurado;

        return $this;
    }

    /**
     * Get icasegurado
     *
     * @return string 
     */
    public function getIcasegurado()
    {
        return $this->icasegurado;
    }

    /**
     * Set nombresasegurado
     *
     * @param string $nombresasegurado
     * @return Asegurado
     */
    public function setNombresasegurado($nombresasegurado)
    {
        $this->nombresasegurado = $nombresasegurado;

        return $this;
    }

    /**
     * Get nombresasegurado
     *
     * @return string 
     */
    public function getNombresasegurado()
    {
        return $this->nombresasegurado;
    }

    /**
     * Set apellidosasegurado
     *
     * @param string $apellidosasegurado
     * @return Asegurado
     */
    public function setApellidosasegurado($apellidosasegurado)
    {
        $this->apellidosasegurado = $apellidosasegurado;

        return $this;
    }

    /**
     * Get apellidosasegurado
     *
     * @return string 
     */
    public function getApellidosasegurado()
    {
        return $this->apellidosasegurado;
    }

    /**
     * Set valorasegurado
     *
     * @param string $valorasegurado
     * @return Asegurado
     */
    public function setValorasegurado($valorasegurado)
    {
        $this->valorasegurado = $valorasegurado;

        return $this;
    }

    /**
     * Get valorasegurado
     *
     * @return string 
     */
    public function getValorasegurado()
    {
        return $this->valorasegurado;
    }

    /**
     * Set idanexo
     *
     * @param \AsesoresSABundle\Entity\Anexo $idanexo
     * @return Asegurado
     */
    public function setIdanexo(\AsesoresSABundle\Entity\Anexo $idanexo = null)
    {
        $this->idanexo = $idanexo;

        return $this;
    }

    /**
     * Get idanexo
     *
     * @return \AsesoresSABundle\Entity\Anexo 
     */
    public function getIdanexo()
    {
        return $this->idanexo;
    }
}
