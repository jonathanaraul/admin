<?php

namespace Proyecto\PrincipalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reponsable
 *
 * @ORM\Table(name="reponsable")
 * @ORM\Entity
 */
class Reponsable
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
     * @ORM\Column(name="ci", type="string", length=25, nullable=false)
     */
    private $ci;

    /**
     * @var string
     *
     * @ORM\Column(name="descr_cargo", type="string", length=30, nullable=false)
     */
    private $descrCargo;



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
     * @return Reponsable
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
     * Set ci
     *
     * @param string $ci
     * @return Reponsable
     */
    public function setCi($ci)
    {
        $this->ci = $ci;
    
        return $this;
    }

    /**
     * Get ci
     *
     * @return string 
     */
    public function getCi()
    {
        return $this->ci;
    }

    /**
     * Set descrCargo
     *
     * @param string $descrCargo
     * @return Reponsable
     */
    public function setDescrCargo($descrCargo)
    {
        $this->descrCargo = $descrCargo;
    
        return $this;
    }

    /**
     * Get descrCargo
     *
     * @return string 
     */
    public function getDescrCargo()
    {
        return $this->descrCargo;
    }
}