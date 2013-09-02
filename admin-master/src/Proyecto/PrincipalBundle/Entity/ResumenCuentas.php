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
     * @var integer
     *
     * @ORM\Column(name="cod_rcta", type="integer", nullable=false)
     */
    private $codRcta;

    /**
     * @var \Estado
     *
     * @ORM\ManyToOne(targetEntity="Estado")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cod_estd", referencedColumnName="cod_estd")
     * })
     */
    private $codEstd;

    /**
     * @var \Municipio
     *
     * @ORM\ManyToOne(targetEntity="Municipio")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cod_muni", referencedColumnName="cod_muni")
     * })
     */
    private $codMuni;



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
     * Set codRcta
     *
     * @param integer $codRcta
     * @return ResumenCuentas
     */
    public function setCodRcta($codRcta)
    {
        $this->codRcta = $codRcta;
    
        return $this;
    }

    /**
     * Get codRcta
     *
     * @return integer 
     */
    public function getCodRcta()
    {
        return $this->codRcta;
    }

    /**
     * Set codEstd
     *
     * @param \Proyecto\PrincipalBundle\Entity\Estado $codEstd
     * @return ResumenCuentas
     */
    public function setCodEstd(\Proyecto\PrincipalBundle\Entity\Estado $codEstd = null)
    {
        $this->codEstd = $codEstd;
    
        return $this;
    }

    /**
     * Get codEstd
     *
     * @return \Proyecto\PrincipalBundle\Entity\Estado 
     */
    public function getCodEstd()
    {
        return $this->codEstd;
    }

    /**
     * Set codMuni
     *
     * @param \Proyecto\PrincipalBundle\Entity\Municipio $codMuni
     * @return ResumenCuentas
     */
    public function setCodMuni(\Proyecto\PrincipalBundle\Entity\Municipio $codMuni = null)
    {
        $this->codMuni = $codMuni;
    
        return $this;
    }

    /**
     * Get codMuni
     *
     * @return \Proyecto\PrincipalBundle\Entity\Municipio 
     */
    public function getCodMuni()
    {
        return $this->codMuni;
    }
}