<?php

namespace Proyecto\PrincipalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tabla2
 *
 * @ORM\Table(name="tabla2")
 * @ORM\Entity
 */
class Tabla2
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
     * @var string
     *
     * @ORM\Column(name="intitucion", type="string", length=30, nullable=false)
     */
    private $intitucion;

    /**
     * @var \Tabla1
     *
     * @ORM\ManyToOne(targetEntity="Tabla1")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cod_tabla1", referencedColumnName="cod_tabla1")
     * })
     */
    private $codTabla1;



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
     * Set intitucion
     *
     * @param string $intitucion
     * @return Tabla2
     */
    public function setIntitucion($intitucion)
    {
        $this->intitucion = $intitucion;
    
        return $this;
    }

    /**
     * Get intitucion
     *
     * @return string 
     */
    public function getIntitucion()
    {
        return $this->intitucion;
    }

    /**
     * Set codTabla1
     *
     * @param \Proyecto\PrincipalBundle\Entity\Tabla1 $codTabla1
     * @return Tabla2
     */
    public function setCodTabla1(\Proyecto\PrincipalBundle\Entity\Tabla1 $codTabla1 = null)
    {
        $this->codTabla1 = $codTabla1;
    
        return $this;
    }

    /**
     * Get codTabla1
     *
     * @return \Proyecto\PrincipalBundle\Entity\Tabla1 
     */
    public function getCodTabla1()
    {
        return $this->codTabla1;
    }
}