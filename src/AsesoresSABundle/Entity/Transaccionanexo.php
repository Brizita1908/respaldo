<?php

namespace AsesoresSABundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Transaccionanexo
 *
 * @ORM\Table(name="transaccionanexo", indexes={@ORM\Index(name="idTransaccion", columns={"idTransaccion"}), @ORM\Index(name="idAnexo", columns={"idAnexo"})})
 * @ORM\Entity
 */
class Transaccionanexo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idTransaccionAnexo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtransaccionanexo;

    /**
     * @var \Transaccion
     *
     * @ORM\ManyToOne(targetEntity="Transaccion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idTransaccion", referencedColumnName="idTransaccion")
     * })
     */
    private $idtransaccion;

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
     * Get idtransaccionanexo
     *
     * @return integer 
     */
    public function getIdtransaccionanexo()
    {
        return $this->idtransaccionanexo;
    }

    /**
     * Set idtransaccion
     *
     * @param \AsesoresSABundle\Entity\Transaccion $idtransaccion
     * @return Transaccionanexo
     */
    public function setIdtransaccion(\AsesoresSABundle\Entity\Transaccion $idtransaccion = null)
    {
        $this->idtransaccion = $idtransaccion;

        return $this;
    }

    /**
     * Get idtransaccion
     *
     * @return \AsesoresSABundle\Entity\Transaccion 
     */
    public function getIdtransaccion()
    {
        return $this->idtransaccion;
    }

    /**
     * Set idanexo
     *
     * @param \AsesoresSABundle\Entity\Anexo $idanexo
     * @return Transaccionanexo
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
