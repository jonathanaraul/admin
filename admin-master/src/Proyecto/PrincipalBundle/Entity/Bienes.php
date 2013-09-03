<?php

namespace Proyecto\PrincipalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bienes
 *
 * @ORM\Table(name="bienes")
 * @ORM\Entity
 */
class Bienes
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
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_adqui", type="datetime", nullable=true)
     */
    private $fechaAdqui;

    /**
     * @var float
     *
     * @ORM\Column(name="num_corr_inv", type="decimal", nullable=true)
     */
    private $numCorrInv;

    /**
     * @var string
     *
     * @ORM\Column(name="serial", type="string", length=40, nullable=true)
     */
    private $serial;

    /**
     * @var string
     *
     * @ORM\Column(name="placa", type="string", length=255, nullable=true)
     */
    private $placa;

    /**
     * @var integer
     *
     * @ORM\Column(name="n_ord_compra", type="integer", nullable=true)
     */
    private $nOrdCompra;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="f_ord_compra", type="datetime", nullable=true)
     */
    private $fOrdCompra;

    /**
     * @var string
     *
     * @ORM\Column(name="np_ord_compra", type="string", length=255, nullable=true)
     */
    private $npOrdCompra;

    /**
     * @var integer
     *
     * @ORM\Column(name="nfac_ord_compr", type="integer", nullable=true)
     */
    private $nfacOrdCompr;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ffac_ord_compr", type="datetime", nullable=true)
     */
    private $ffacOrdCompr;

    /**
     * @var string
     *
     * @ORM\Column(name="em_ord_compr", type="string", length=255, nullable=true)
     */
    private $emOrdCompr;

    /**
     * @var string
     *
     * @ORM\Column(name="imnmu_o_compr", type="string", length=255, nullable=true)
     */
    private $imnmuOCompr;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fadq_o_compr", type="datetime", nullable=true)
     */
    private $fadqOCompr;

    /**
     * @var integer
     *
     * @ORM\Column(name="ncor_o_compr", type="integer", nullable=true)
     */
    private $ncorOCompr;

    /**
     * @var string
     *
     * @ORM\Column(name="ci_n_o_compr", type="string", length=255, nullable=true)
     */
    private $ciNOCompr;

    /**
     * @var string
     *
     * @ORM\Column(name="rif_n_o_comp", type="string", length=255, nullable=true)
     */
    private $rifNOComp;

    /**
     * @var string
     *
     * @ORM\Column(name="ubc_o_compr", type="string", length=255, nullable=true)
     */
    private $ubcOCompr;

    /**
     * @var integer
     *
     * @ORM\Column(name="num_ord_pag", type="integer", nullable=true)
     */
    private $numOrdPag;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fech_ord_pag", type="datetime", nullable=true)
     */
    private $fechOrdPag;

    /**
     * @var integer
     *
     * @ORM\Column(name="prad_ord_pag", type="integer", nullable=true)
     */
    private $pradOrdPag;

    /**
     * @var string
     *
     * @ORM\Column(name="tbn_ord_pag", type="string", length=255, nullable=true)
     */
    private $tbnOrdPag;

    /**
     * @var string
     *
     * @ORM\Column(name="dis_ord_com", type="string", length=255, nullable=true)
     */
    private $disOrdCom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="frm_ord_pag", type="datetime", nullable=true)
     */
    private $frmOrdPag;

    /**
     * @var string
     *
     * @ORM\Column(name="drm_ord_pag", type="string", length=255, nullable=true)
     */
    private $drmOrdPag;

    /**
     * @var string
     *
     * @ORM\Column(name="ofc_dr_o_pag", type="string", length=255, nullable=true)
     */
    private $ofcDrOPag;

    /**
     * @var integer
     *
     * @ORM\Column(name="n_dr_o_pag", type="integer", nullable=true)
     */
    private $nDrOPag;

    /**
     * @var string
     *
     * @ORM\Column(name="t_dr_o_pag", type="string", length=255, nullable=true)
     */
    private $tDrOPag;

    /**
     * @var string
     *
     * @ORM\Column(name="f_dr_o_pag", type="string", length=255, nullable=true)
     */
    private $fDrOPag;

    /**
     * @var string
     *
     * @ORM\Column(name="p_dr_o_pag", type="string", length=255, nullable=true)
     */
    private $pDrOPag;

    /**
     * @var string
     *
     * @ORM\Column(name="tr_dr_o_pag", type="string", length=255, nullable=true)
     */
    private $trDrOPag;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fch_dr_o_pag", type="datetime", nullable=true)
     */
    private $fchDrOPag;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fch_ac_o_pag", type="datetime", nullable=true)
     */
    private $fchAcOPag;

    /**
     * @var integer
     *
     * @ORM\Column(name="mnt_ac_o_pag", type="integer", nullable=true)
     */
    private $mntAcOPag;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_marc", type="string", length=255, nullable=true)
     */
    private $nombreMarc;

    /**
     * @var string
     *
     * @ORM\Column(name="mod_tip_anio", type="string", length=255, nullable=true)
     */
    private $modTipAnio;

    /**
     * @var string
     *
     * @ORM\Column(name="color", type="string", length=255, nullable=true)
     */
    private $color;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_mat", type="string", length=255, nullable=true)
     */
    private $nombreMat;

    /**
     * @var \Seguros
     *
     * @ORM\ManyToOne(targetEntity="Seguros")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_seg", referencedColumnName="id")
     * })
     */
    private $idSeg;

    /**
     * @var \Direccion
     *
     * @ORM\ManyToOne(targetEntity="Direccion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_dirc", referencedColumnName="id")
     * })
     */
    private $idDirc;

    /**
     * @var \Coordinacion
     *
     * @ORM\ManyToOne(targetEntity="Coordinacion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_cord", referencedColumnName="id")
     * })
     */
    private $idCord;

    /**
     * @var \Reponsable
     *
     * @ORM\ManyToOne(targetEntity="Reponsable")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_rspn", referencedColumnName="id")
     * })
     */
    private $idRspn;

    /**
     * @var \Movimientos
     *
     * @ORM\ManyToOne(targetEntity="Movimientos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_mvts", referencedColumnName="id")
     * })
     */
    private $idMvts;

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
     * @var \Estado
     *
     * @ORM\ManyToOne(targetEntity="Estado")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_estd", referencedColumnName="id")
     * })
     */
    private $idEstd;

    /**
     * @var \TiposBienes
     *
     * @ORM\ManyToOne(targetEntity="TiposBienes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tbien", referencedColumnName="id")
     * })
     */
    private $idTbien;

    /**
     * @var \ResumenCuentas
     *
     * @ORM\ManyToOne(targetEntity="ResumenCuentas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_rcta", referencedColumnName="id")
     * })
     */
    private $idRcta;

    /**
     * @var \Faltantes
     *
     * @ORM\ManyToOne(targetEntity="Faltantes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_falt", referencedColumnName="id")
     * })
     */
    private $idFalt;



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
     * Set fechaAdqui
     *
     * @param \DateTime $fechaAdqui
     * @return Bienes
     */
    public function setFechaAdqui($fechaAdqui)
    {
        $this->fechaAdqui = $fechaAdqui;
    
        return $this;
    }

    /**
     * Get fechaAdqui
     *
     * @return \DateTime 
     */
    public function getFechaAdqui()
    {
        return $this->fechaAdqui;
    }

    /**
     * Set numCorrInv
     *
     * @param float $numCorrInv
     * @return Bienes
     */
    public function setNumCorrInv($numCorrInv)
    {
        $this->numCorrInv = $numCorrInv;
    
        return $this;
    }

    /**
     * Get numCorrInv
     *
     * @return float 
     */
    public function getNumCorrInv()
    {
        return $this->numCorrInv;
    }

    /**
     * Set serial
     *
     * @param string $serial
     * @return Bienes
     */
    public function setSerial($serial)
    {
        $this->serial = $serial;
    
        return $this;
    }

    /**
     * Get serial
     *
     * @return string 
     */
    public function getSerial()
    {
        return $this->serial;
    }

    /**
     * Set placa
     *
     * @param string $placa
     * @return Bienes
     */
    public function setPlaca($placa)
    {
        $this->placa = $placa;
    
        return $this;
    }

    /**
     * Get placa
     *
     * @return string 
     */
    public function getPlaca()
    {
        return $this->placa;
    }

    /**
     * Set nOrdCompra
     *
     * @param integer $nOrdCompra
     * @return Bienes
     */
    public function setNOrdCompra($nOrdCompra)
    {
        $this->nOrdCompra = $nOrdCompra;
    
        return $this;
    }

    /**
     * Get nOrdCompra
     *
     * @return integer 
     */
    public function getNOrdCompra()
    {
        return $this->nOrdCompra;
    }

    /**
     * Set fOrdCompra
     *
     * @param \DateTime $fOrdCompra
     * @return Bienes
     */
    public function setFOrdCompra($fOrdCompra)
    {
        $this->fOrdCompra = $fOrdCompra;
    
        return $this;
    }

    /**
     * Get fOrdCompra
     *
     * @return \DateTime 
     */
    public function getFOrdCompra()
    {
        return $this->fOrdCompra;
    }

    /**
     * Set npOrdCompra
     *
     * @param string $npOrdCompra
     * @return Bienes
     */
    public function setNpOrdCompra($npOrdCompra)
    {
        $this->npOrdCompra = $npOrdCompra;
    
        return $this;
    }

    /**
     * Get npOrdCompra
     *
     * @return string 
     */
    public function getNpOrdCompra()
    {
        return $this->npOrdCompra;
    }

    /**
     * Set nfacOrdCompr
     *
     * @param integer $nfacOrdCompr
     * @return Bienes
     */
    public function setNfacOrdCompr($nfacOrdCompr)
    {
        $this->nfacOrdCompr = $nfacOrdCompr;
    
        return $this;
    }

    /**
     * Get nfacOrdCompr
     *
     * @return integer 
     */
    public function getNfacOrdCompr()
    {
        return $this->nfacOrdCompr;
    }

    /**
     * Set ffacOrdCompr
     *
     * @param \DateTime $ffacOrdCompr
     * @return Bienes
     */
    public function setFfacOrdCompr($ffacOrdCompr)
    {
        $this->ffacOrdCompr = $ffacOrdCompr;
    
        return $this;
    }

    /**
     * Get ffacOrdCompr
     *
     * @return \DateTime 
     */
    public function getFfacOrdCompr()
    {
        return $this->ffacOrdCompr;
    }

    /**
     * Set emOrdCompr
     *
     * @param string $emOrdCompr
     * @return Bienes
     */
    public function setEmOrdCompr($emOrdCompr)
    {
        $this->emOrdCompr = $emOrdCompr;
    
        return $this;
    }

    /**
     * Get emOrdCompr
     *
     * @return string 
     */
    public function getEmOrdCompr()
    {
        return $this->emOrdCompr;
    }

    /**
     * Set imnmuOCompr
     *
     * @param string $imnmuOCompr
     * @return Bienes
     */
    public function setImnmuOCompr($imnmuOCompr)
    {
        $this->imnmuOCompr = $imnmuOCompr;
    
        return $this;
    }

    /**
     * Get imnmuOCompr
     *
     * @return string 
     */
    public function getImnmuOCompr()
    {
        return $this->imnmuOCompr;
    }

    /**
     * Set fadqOCompr
     *
     * @param \DateTime $fadqOCompr
     * @return Bienes
     */
    public function setFadqOCompr($fadqOCompr)
    {
        $this->fadqOCompr = $fadqOCompr;
    
        return $this;
    }

    /**
     * Get fadqOCompr
     *
     * @return \DateTime 
     */
    public function getFadqOCompr()
    {
        return $this->fadqOCompr;
    }

    /**
     * Set ncorOCompr
     *
     * @param integer $ncorOCompr
     * @return Bienes
     */
    public function setNcorOCompr($ncorOCompr)
    {
        $this->ncorOCompr = $ncorOCompr;
    
        return $this;
    }

    /**
     * Get ncorOCompr
     *
     * @return integer 
     */
    public function getNcorOCompr()
    {
        return $this->ncorOCompr;
    }

    /**
     * Set ciNOCompr
     *
     * @param string $ciNOCompr
     * @return Bienes
     */
    public function setCiNOCompr($ciNOCompr)
    {
        $this->ciNOCompr = $ciNOCompr;
    
        return $this;
    }

    /**
     * Get ciNOCompr
     *
     * @return string 
     */
    public function getCiNOCompr()
    {
        return $this->ciNOCompr;
    }

    /**
     * Set rifNOComp
     *
     * @param string $rifNOComp
     * @return Bienes
     */
    public function setRifNOComp($rifNOComp)
    {
        $this->rifNOComp = $rifNOComp;
    
        return $this;
    }

    /**
     * Get rifNOComp
     *
     * @return string 
     */
    public function getRifNOComp()
    {
        return $this->rifNOComp;
    }

    /**
     * Set ubcOCompr
     *
     * @param string $ubcOCompr
     * @return Bienes
     */
    public function setUbcOCompr($ubcOCompr)
    {
        $this->ubcOCompr = $ubcOCompr;
    
        return $this;
    }

    /**
     * Get ubcOCompr
     *
     * @return string 
     */
    public function getUbcOCompr()
    {
        return $this->ubcOCompr;
    }

    /**
     * Set numOrdPag
     *
     * @param integer $numOrdPag
     * @return Bienes
     */
    public function setNumOrdPag($numOrdPag)
    {
        $this->numOrdPag = $numOrdPag;
    
        return $this;
    }

    /**
     * Get numOrdPag
     *
     * @return integer 
     */
    public function getNumOrdPag()
    {
        return $this->numOrdPag;
    }

    /**
     * Set fechOrdPag
     *
     * @param \DateTime $fechOrdPag
     * @return Bienes
     */
    public function setFechOrdPag($fechOrdPag)
    {
        $this->fechOrdPag = $fechOrdPag;
    
        return $this;
    }

    /**
     * Get fechOrdPag
     *
     * @return \DateTime 
     */
    public function getFechOrdPag()
    {
        return $this->fechOrdPag;
    }

    /**
     * Set pradOrdPag
     *
     * @param integer $pradOrdPag
     * @return Bienes
     */
    public function setPradOrdPag($pradOrdPag)
    {
        $this->pradOrdPag = $pradOrdPag;
    
        return $this;
    }

    /**
     * Get pradOrdPag
     *
     * @return integer 
     */
    public function getPradOrdPag()
    {
        return $this->pradOrdPag;
    }

    /**
     * Set tbnOrdPag
     *
     * @param string $tbnOrdPag
     * @return Bienes
     */
    public function setTbnOrdPag($tbnOrdPag)
    {
        $this->tbnOrdPag = $tbnOrdPag;
    
        return $this;
    }

    /**
     * Get tbnOrdPag
     *
     * @return string 
     */
    public function getTbnOrdPag()
    {
        return $this->tbnOrdPag;
    }

    /**
     * Set disOrdCom
     *
     * @param string $disOrdCom
     * @return Bienes
     */
    public function setDisOrdCom($disOrdCom)
    {
        $this->disOrdCom = $disOrdCom;
    
        return $this;
    }

    /**
     * Get disOrdCom
     *
     * @return string 
     */
    public function getDisOrdCom()
    {
        return $this->disOrdCom;
    }

    /**
     * Set frmOrdPag
     *
     * @param \DateTime $frmOrdPag
     * @return Bienes
     */
    public function setFrmOrdPag($frmOrdPag)
    {
        $this->frmOrdPag = $frmOrdPag;
    
        return $this;
    }

    /**
     * Get frmOrdPag
     *
     * @return \DateTime 
     */
    public function getFrmOrdPag()
    {
        return $this->frmOrdPag;
    }

    /**
     * Set drmOrdPag
     *
     * @param string $drmOrdPag
     * @return Bienes
     */
    public function setDrmOrdPag($drmOrdPag)
    {
        $this->drmOrdPag = $drmOrdPag;
    
        return $this;
    }

    /**
     * Get drmOrdPag
     *
     * @return string 
     */
    public function getDrmOrdPag()
    {
        return $this->drmOrdPag;
    }

    /**
     * Set ofcDrOPag
     *
     * @param string $ofcDrOPag
     * @return Bienes
     */
    public function setOfcDrOPag($ofcDrOPag)
    {
        $this->ofcDrOPag = $ofcDrOPag;
    
        return $this;
    }

    /**
     * Get ofcDrOPag
     *
     * @return string 
     */
    public function getOfcDrOPag()
    {
        return $this->ofcDrOPag;
    }

    /**
     * Set nDrOPag
     *
     * @param integer $nDrOPag
     * @return Bienes
     */
    public function setNDrOPag($nDrOPag)
    {
        $this->nDrOPag = $nDrOPag;
    
        return $this;
    }

    /**
     * Get nDrOPag
     *
     * @return integer 
     */
    public function getNDrOPag()
    {
        return $this->nDrOPag;
    }

    /**
     * Set tDrOPag
     *
     * @param string $tDrOPag
     * @return Bienes
     */
    public function setTDrOPag($tDrOPag)
    {
        $this->tDrOPag = $tDrOPag;
    
        return $this;
    }

    /**
     * Get tDrOPag
     *
     * @return string 
     */
    public function getTDrOPag()
    {
        return $this->tDrOPag;
    }

    /**
     * Set fDrOPag
     *
     * @param string $fDrOPag
     * @return Bienes
     */
    public function setFDrOPag($fDrOPag)
    {
        $this->fDrOPag = $fDrOPag;
    
        return $this;
    }

    /**
     * Get fDrOPag
     *
     * @return string 
     */
    public function getFDrOPag()
    {
        return $this->fDrOPag;
    }

    /**
     * Set pDrOPag
     *
     * @param string $pDrOPag
     * @return Bienes
     */
    public function setPDrOPag($pDrOPag)
    {
        $this->pDrOPag = $pDrOPag;
    
        return $this;
    }

    /**
     * Get pDrOPag
     *
     * @return string 
     */
    public function getPDrOPag()
    {
        return $this->pDrOPag;
    }

    /**
     * Set trDrOPag
     *
     * @param string $trDrOPag
     * @return Bienes
     */
    public function setTrDrOPag($trDrOPag)
    {
        $this->trDrOPag = $trDrOPag;
    
        return $this;
    }

    /**
     * Get trDrOPag
     *
     * @return string 
     */
    public function getTrDrOPag()
    {
        return $this->trDrOPag;
    }

    /**
     * Set fchDrOPag
     *
     * @param \DateTime $fchDrOPag
     * @return Bienes
     */
    public function setFchDrOPag($fchDrOPag)
    {
        $this->fchDrOPag = $fchDrOPag;
    
        return $this;
    }

    /**
     * Get fchDrOPag
     *
     * @return \DateTime 
     */
    public function getFchDrOPag()
    {
        return $this->fchDrOPag;
    }

    /**
     * Set fchAcOPag
     *
     * @param \DateTime $fchAcOPag
     * @return Bienes
     */
    public function setFchAcOPag($fchAcOPag)
    {
        $this->fchAcOPag = $fchAcOPag;
    
        return $this;
    }

    /**
     * Get fchAcOPag
     *
     * @return \DateTime 
     */
    public function getFchAcOPag()
    {
        return $this->fchAcOPag;
    }

    /**
     * Set mntAcOPag
     *
     * @param integer $mntAcOPag
     * @return Bienes
     */
    public function setMntAcOPag($mntAcOPag)
    {
        $this->mntAcOPag = $mntAcOPag;
    
        return $this;
    }

    /**
     * Get mntAcOPag
     *
     * @return integer 
     */
    public function getMntAcOPag()
    {
        return $this->mntAcOPag;
    }

    /**
     * Set nombreMarc
     *
     * @param string $nombreMarc
     * @return Bienes
     */
    public function setNombreMarc($nombreMarc)
    {
        $this->nombreMarc = $nombreMarc;
    
        return $this;
    }

    /**
     * Get nombreMarc
     *
     * @return string 
     */
    public function getNombreMarc()
    {
        return $this->nombreMarc;
    }

    /**
     * Set modTipAnio
     *
     * @param string $modTipAnio
     * @return Bienes
     */
    public function setModTipAnio($modTipAnio)
    {
        $this->modTipAnio = $modTipAnio;
    
        return $this;
    }

    /**
     * Get modTipAnio
     *
     * @return string 
     */
    public function getModTipAnio()
    {
        return $this->modTipAnio;
    }

    /**
     * Set color
     *
     * @param string $color
     * @return Bienes
     */
    public function setColor($color)
    {
        $this->color = $color;
    
        return $this;
    }

    /**
     * Get color
     *
     * @return string 
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set nombreMat
     *
     * @param string $nombreMat
     * @return Bienes
     */
    public function setNombreMat($nombreMat)
    {
        $this->nombreMat = $nombreMat;
    
        return $this;
    }

    /**
     * Get nombreMat
     *
     * @return string 
     */
    public function getNombreMat()
    {
        return $this->nombreMat;
    }

    /**
     * Set idSeg
     *
     * @param \Proyecto\PrincipalBundle\Entity\Seguros $idSeg
     * @return Bienes
     */
    public function setIdSeg(\Proyecto\PrincipalBundle\Entity\Seguros $idSeg = null)
    {
        $this->idSeg = $idSeg;
    
        return $this;
    }

    /**
     * Get idSeg
     *
     * @return \Proyecto\PrincipalBundle\Entity\Seguros 
     */
    public function getIdSeg()
    {
        return $this->idSeg;
    }

    /**
     * Set idDirc
     *
     * @param \Proyecto\PrincipalBundle\Entity\Direccion $idDirc
     * @return Bienes
     */
    public function setIdDirc(\Proyecto\PrincipalBundle\Entity\Direccion $idDirc = null)
    {
        $this->idDirc = $idDirc;
    
        return $this;
    }

    /**
     * Get idDirc
     *
     * @return \Proyecto\PrincipalBundle\Entity\Direccion 
     */
    public function getIdDirc()
    {
        return $this->idDirc;
    }

    /**
     * Set idCord
     *
     * @param \Proyecto\PrincipalBundle\Entity\Coordinacion $idCord
     * @return Bienes
     */
    public function setIdCord(\Proyecto\PrincipalBundle\Entity\Coordinacion $idCord = null)
    {
        $this->idCord = $idCord;
    
        return $this;
    }

    /**
     * Get idCord
     *
     * @return \Proyecto\PrincipalBundle\Entity\Coordinacion 
     */
    public function getIdCord()
    {
        return $this->idCord;
    }

    /**
     * Set idRspn
     *
     * @param \Proyecto\PrincipalBundle\Entity\Reponsable $idRspn
     * @return Bienes
     */
    public function setIdRspn(\Proyecto\PrincipalBundle\Entity\Reponsable $idRspn = null)
    {
        $this->idRspn = $idRspn;
    
        return $this;
    }

    /**
     * Get idRspn
     *
     * @return \Proyecto\PrincipalBundle\Entity\Reponsable 
     */
    public function getIdRspn()
    {
        return $this->idRspn;
    }

    /**
     * Set idMvts
     *
     * @param \Proyecto\PrincipalBundle\Entity\Movimientos $idMvts
     * @return Bienes
     */
    public function setIdMvts(\Proyecto\PrincipalBundle\Entity\Movimientos $idMvts = null)
    {
        $this->idMvts = $idMvts;
    
        return $this;
    }

    /**
     * Get idMvts
     *
     * @return \Proyecto\PrincipalBundle\Entity\Movimientos 
     */
    public function getIdMvts()
    {
        return $this->idMvts;
    }

    /**
     * Set idMuni
     *
     * @param \Proyecto\PrincipalBundle\Entity\Municipio $idMuni
     * @return Bienes
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

    /**
     * Set idEstd
     *
     * @param \Proyecto\PrincipalBundle\Entity\Estado $idEstd
     * @return Bienes
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
     * Set idTbien
     *
     * @param \Proyecto\PrincipalBundle\Entity\TiposBienes $idTbien
     * @return Bienes
     */
    public function setIdTbien(\Proyecto\PrincipalBundle\Entity\TiposBienes $idTbien = null)
    {
        $this->idTbien = $idTbien;
    
        return $this;
    }

    /**
     * Get idTbien
     *
     * @return \Proyecto\PrincipalBundle\Entity\TiposBienes 
     */
    public function getIdTbien()
    {
        return $this->idTbien;
    }

    /**
     * Set idRcta
     *
     * @param \Proyecto\PrincipalBundle\Entity\ResumenCuentas $idRcta
     * @return Bienes
     */
    public function setIdRcta(\Proyecto\PrincipalBundle\Entity\ResumenCuentas $idRcta = null)
    {
        $this->idRcta = $idRcta;
    
        return $this;
    }

    /**
     * Get idRcta
     *
     * @return \Proyecto\PrincipalBundle\Entity\ResumenCuentas 
     */
    public function getIdRcta()
    {
        return $this->idRcta;
    }

    /**
     * Set idFalt
     *
     * @param \Proyecto\PrincipalBundle\Entity\Faltantes $idFalt
     * @return Bienes
     */
    public function setIdFalt(\Proyecto\PrincipalBundle\Entity\Faltantes $idFalt = null)
    {
        $this->idFalt = $idFalt;
    
        return $this;
    }

    /**
     * Get idFalt
     *
     * @return \Proyecto\PrincipalBundle\Entity\Faltantes 
     */
    public function getIdFalt()
    {
        return $this->idFalt;
    }
}