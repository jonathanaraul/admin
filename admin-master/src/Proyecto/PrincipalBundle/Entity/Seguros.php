<?php

namespace Proyecto\PrincipalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Seguros
 *
 * @ORM\Table(name="seguros")
 * @ORM\Entity
 */
class Seguros
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
     * @ORM\Column(name="nombre", type="string", length=100, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="poliza", type="string", length=50, nullable=false)
     */
    private $poliza;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="vig_desde", type="date", nullable=false)
     */
    private $vigDesde;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="vig_hasta", type="date", nullable=false)
     */
    private $vigHasta;



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
     * Set nombre
     *
     * @param string $nombre
     * @return Seguros
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    
        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set poliza
     *
     * @param string $poliza
     * @return Seguros
     */
    public function setPoliza($poliza)
    {
        $this->poliza = $poliza;
    
        return $this;
    }

    /**
     * Get poliza
     *
     * @return string 
     */
    public function getPoliza()
    {
        return $this->poliza;
    }

    /**
     * Set vigDesde
     *
     * @param \DateTime $vigDesde
     * @return Seguros
     */
    public function setVigDesde($vigDesde)
    {
        $this->vigDesde = $vigDesde;
    
        return $this;
    }

    /**
     * Get vigDesde
     *
     * @return \DateTime 
     */
    public function getVigDesde()
    {
        return $this->vigDesde;
    }

    /**
     * Set vigHasta
     *
     * @param \DateTime $vigHasta
     * @return Seguros
     */
    public function setVigHasta($vigHasta)
    {
        $this->vigHasta = $vigHasta;
    
        return $this;
    }

    /**
     * Get vigHasta
     *
     * @return \DateTime 
     */
    public function getVigHasta()
    {
        return $this->vigHasta;
    }
}