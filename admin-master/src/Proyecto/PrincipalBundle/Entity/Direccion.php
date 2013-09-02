<?php

namespace Proyecto\PrincipalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Direccion
 *
 * @ORM\Table(name="direccion")
 * @ORM\Entity
 */
class Direccion
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
     * @ORM\Column(name="nombre", type="string", length=255, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="director", type="string", length=255, nullable=false)
     */
    private $director;

    /**
     * @var integer
     *
     * @ORM\Column(name="cod_dirc", type="integer", nullable=false)
     */
    private $codDirc;



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
     * @return Direccion
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
     * Set director
     *
     * @param string $director
     * @return Direccion
     */
    public function setDirector($director)
    {
        $this->director = $director;
    
        return $this;
    }

    /**
     * Get director
     *
     * @return string 
     */
    public function getDirector()
    {
        return $this->director;
    }

    /**
     * Set codDirc
     *
     * @param integer $codDirc
     * @return Direccion
     */
    public function setCodDirc($codDirc)
    {
        $this->codDirc = $codDirc;
    
        return $this;
    }

    /**
     * Get codDirc
     *
     * @return integer 
     */
    public function getCodDirc()
    {
        return $this->codDirc;
    }
}