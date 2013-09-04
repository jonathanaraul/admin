<?php

namespace Proyecto\PrincipalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ResumenCuentas
 *
 * @ORM\Table(name="resumen_cuentas")
 * @ORM\Entity
 */
class ResumenCuentas
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Estado
     *
     * @ORM\ManyToOne(targetEntity="Estado")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_estd", referencedColumnName="id")
     * })
     */
    private $idEstd;

    /**
     * @var \Municipio
     *
     * @ORM\ManyToOne(targetEntity="Municipio")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_muni", referencedColumnName="id")
     * })
     */
    private $idMuni;



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idEstd
     *
     * @param \Proyecto\PrincipalBundle\Entity\Estado $idEstd
     * @return ResumenCuentas
     */
    public function setIdEstd(\Proyecto\PrincipalBundle\Entity\Estado $idEstd = null)
    {
        $this->idEstd = $idEstd;
    
        return $this;
    }

    /**
     * Get idEstd
     *
     * @return \Proyecto\PrincipalBundle\Entity\Estado 
     */
    public function getIdEstd()
    {
        return $this->idEstd;
    }

    /**
     * Set idMuni
     *
     * @param \Proyecto\PrincipalBundle\Entity\Municipio $idMuni
     * @return ResumenCuentas
     */
    public function setIdMuni(\Proyecto\PrincipalBundle\Entity\Municipio $idMuni = null)
    {
        $this->idMuni = $idMuni;
    
        return $this;
    }

    /**
     * Get idMuni
     *
     * @return \Proyecto\PrincipalBundle\Entity\Municipio 
     */
    public function getIdMuni()
    {
        return $this->idMuni;
    }
}