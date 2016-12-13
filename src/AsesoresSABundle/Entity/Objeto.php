<?php

namespace AsesoresSABundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Objeto
 *
 * @ORM\Table(name="objeto", indexes={@ORM\Index(name="idAnexo", columns={"idAnexo"})})
 * @ORM\Entity
 */
class Objeto
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idObjeto", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idobjeto;

    /**
     * @var string
     *
     * @ORM\Column(name="codigoObjeto", type="string", length=10, nullable=true)
     */
    private $codigoobjeto;

    /**
     * @var string
     *
     * @ORM\Column(name="valorObjeto", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $valorobjeto;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcionObjeto", type="string", length=100, nullable=true)
     */
    private $descripcionobjeto;

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
     * Get idobjeto
     *
     * @return integer 
     */
    public function getIdobjeto()
    {
        return $this->idobjeto;
    }

    /**
     * Set codigoobjeto
     *
     * @param string $codigoobjeto
     * @return Objeto
     */
    public function setCodigoobjeto($codigoobjeto)
    {
        $this->codigoobjeto = $codigoobjeto;

        return $this;
    }

    /**
     * Get codigoobjeto
     *
     * @return string 
     */
    public function getCodigoobjeto()
    {
        return $this->codigoobjeto;
    }

    /**
     * Set valorobjeto
     *
     * @param string $valorobjeto
     * @return Objeto
     */
    public function setValorobjeto($valorobjeto)
    {
        $this->valorobjeto = $valorobjeto;

        return $this;
    }

    /**
     * Get valorobjeto
     *
     * @return string 
     */
    public function getValorobjeto()
    {
        return $this->valorobjeto;
    }

    /**
     * Set descripcionobjeto
     *
     * @param string $descripcionobjeto
     * @return Objeto
     */
    public function setDescripcionobjeto($descripcionobjeto)
    {
        $this->descripcionobjeto = $descripcionobjeto;

        return $this;
    }

    /**
     * Get descripcionobjeto
     *
     * @return string 
     */
    public function getDescripcionobjeto()
    {
        return $this->descripcionobjeto;
    }

    /**
     * Set idanexo
     *
     * @param \AsesoresSABundle\Entity\Anexo $idanexo
     * @return Objeto
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
