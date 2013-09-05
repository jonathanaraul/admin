<?php

namespace Proyecto\PrincipalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Security\Core\SecurityContext;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use JMS\SecurityExtraBundle\Annotation\Secure;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Proyecto\PrincipalBundle\Entity\Seguros;
use Proyecto\PrincipalBundle\Entity\Reponsable;
use Proyecto\PrincipalBundle\Entity\Direccion;
use Proyecto\PrincipalBundle\Entity\Bienes;
use Proyecto\PrincipalBundle\Entity\Coordinacion;
use Proyecto\PrincipalBundle\Entity\Faltantes;
use Proyecto\PrincipalBundle\Entity\Municipio;
use Proyecto\PrincipalBundle\Entity\Estado;
use Proyecto\PrincipalBundle\Entity\Movimientos;
use Proyecto\PrincipalBundle\Entity\ResumenCuentas;
use Proyecto\PrincipalBundle\Entity\TiposBienes;


class PrincipalController extends Controller
{
	 public function portadaAction(){

		$em = $this->getDoctrine()->getManager();

	 	return $this->render('ProyectoPrincipalBundle:Principal:portada.html.twig', array());
	 }

	 public function guardarAction($slug){

	 	return $this->render('ProyectoPrincipalBundle:Principal:guardar.html.twig', array('slug' => $slug ));
	 }

	 public function guardarAjaxAction(){

	 	$peticion = $this -> getRequest();
		$doctrine = $this -> getDoctrine();
		$post = $peticion -> request;

		$modulo = $post -> get("modulo");

		$em = $this->getDoctrine()->getManager();

		switch ($modulo) {
			case 'seguros':

				$seguros = new Seguros();

		///////////////////Captura de variables


				$nombre_seguro    = $post -> get("nombre_seguro");
				$poliza_seguro    = $post -> get("poliza_seguro");
				$vig_desde_seguro = $post -> get("vig_desde_seguro");
				$vig_hasta_seguro = $post -> get("vig_hasta_seguro");
				$codigo_seguro    = $post -> get("codigo_seguro");


////////////////////////////Setear en la BD

				$seguros->setNombre($nombre_seguro);
				$seguros->setPoliza($poliza_seguro);
				$seguros->setVigDesde(new \DateTime());
				$seguros->setVigHasta(new \DateTime('11-11-1990'));
				

				
			    $em->persist($seguros);
			    $em->flush();

				break;

			case 'responsable':

				$responsable = new Reponsable();

///////////////////////////Captura de variables
				$nombre_responsable 			  = $post -> get("nombre_responsable");
				$cedula_responsable    			  = $post -> get("cedula_responsable");
				$descripcion_cargo_responsable    = $post -> get("descripcion_cargo_responsable");

				
/////////////////////Setear variables

				$responsable->setNombre($nombre_responsable);
				$responsable->setCi($cedula_responsable);
				$responsable->setDescrCargo($descripcion_cargo_responsable);
				$responsable->setCodRspn(3232);


				
			    $em->persist($responsable);
			    $em->flush();

			    break;
			case 'direccion':
				
				$direccion = new Direccion();

				$nombre_direccion    = $post -> get("nombre_direccion");
				$nombre_director     = $post -> get("nombre_director");	
				$codigo_direccion    = $post -> get("codigo_direccion");	


				$direccion   ->setNombre($nombre_direccion);
				$direccion   ->setDirector($nombre_director);
				$direccion   ->setCodDirc(12345);

				
			    $em->persist($direccion);
			    $em->flush();

				break;
			
			case 'coordinacion':

				$coordinacion = new coordinacion();

				$nombre_coordinacion    = $post -> get("nombre_coordinacion");
				$nombre_coordinador     = $post -> get("nombre_coordinador");	
				$codigo_coordinacion    = $post -> get("codigo_coordinacion");


	 			$coordinacion->setNombre($nombre_coordinacion);
				$coordinacion->setCoordinador($nombre_coordinador);
				$coordinacion->setCodCord(234567);


				$em = $this->getDoctrine()->getManager();
			    $em->persist($coordinacion);
			    $em->flush();
				break;

			case 'faltantes':
	 	
				$faltantes = new Faltantes();

		///////////////////////////////////
			    $municipio = $this->getDoctrine()
			        ->getRepository('ProyectoPrincipalBundle:Municipio')
			        ->find(23);

		/////////////////////////////////
			    $estado = $this->getDoctrine()
			        ->getRepository('ProyectoPrincipalBundle:Estado')
			        ->find(25);
			    // $variableEstado = $estado->getId();
		/////////////////////////////
			    $coordinacion = $this->getDoctrine()
			        ->getRepository('ProyectoPrincipalBundle:Coordinacion')
			        ->find(28);
			    // $variableCoordinacion = $coordinacion->getId();
		/////////////////////////
			    $direccion = $this->getDoctrine()
			        ->getRepository('ProyectoPrincipalBundle:Direccion')
			        ->find(27);
			    // $variableDireccion = $direccion->getId();
		//////////////////////

			 	
			 	$faltantes->setGrupo('Grupo de prueba');
			 	$faltantes->setSubgrupo('Sub grupo de prueba');
			 	$faltantes->setSeccion('Seccion de prueba');
			 	$faltantes->setDescripcion('Descripcion de prueba');
			 	$faltantes->setCantidad(123323);
			 	$faltantes->setValorUni(123232);
			 	$faltantes->setDiferencia(23232);
			 	$faltantes->setObsrvc('Observacion de prueba');

			 	$faltantes->setIdMuni($municipio);
			 	$faltantes->setIdEstd($estado);
			 	$faltantes->setIdCord($coordinacion);
			 	$faltantes->setIdDirc($direccion);

			 	
				$em->persist($faltantes);
			 	$em->flush();

				break;

			case'movimientos':

			 	$movimientos = new Movimientos();

			 	$movimientos->setDireccion('direccion prueba');
			 	$movimientos->setPeriodo(new \DateTime());
			 	$movimientos->setGrupo('grupo prueba');
			 	$movimientos->setSubgrupo('sub grupo prueba');
			 	$movimientos->setSeccion('seccion prueba');
			 	$movimientos->setConcepto('concepto prueba');
			 	$movimientos->setCantidad(3242);


				$responsable = $this->getDoctrine()
				    ->getRepository('ProyectoPrincipalBundle:Reponsable')
				    ->find(1);
				///////////////////////////////////
				$municipio = $this->getDoctrine()
				    ->getRepository('ProyectoPrincipalBundle:Municipio')
				    ->find(23);

				/////////////////////////////////
				$estado = $this->getDoctrine()
				    ->getRepository('ProyectoPrincipalBundle:Estado')
				    ->find(25);
					    // $variableEstado = $estado->getId();
				/////////////////////////////
				$coordinacion = $this->getDoctrine()
				    ->getRepository('ProyectoPrincipalBundle:Coordinacion')
				    ->find(28);
					    // $variableCoordinacion = $coordinacion->getId();
				/////////////////////////
				$direccion = $this->getDoctrine()
				    ->getRepository('ProyectoPrincipalBundle:Direccion')
				    ->find(27);
					    // $variableDireccion = $direccion->getId();
				//////////////////////

			 	$movimientos->setIdRspn($responsable);
			 	$movimientos->setIdMuni($municipio);
				$movimientos->setIdEstd($estado);
				$movimientos->setIdCord($coordinacion);
				$movimientos->setIdDirc($direccion);

				$em = $this->getDoctrine()->getManager();
			 	$em->persist($movimientos);
				$em->flush();

				break;

			case 'resumen_cuentas':

			 	$resumen_cuentas = new ResumenCuentas();

			 	$resumen_cuentas->setNombRcuentas('nombre Resumen Cuentas prueba');

				$municipio = $this->getDoctrine()
				    ->getRepository('ProyectoPrincipalBundle:Municipio')
				    ->find(23);

				$estado = $this->getDoctrine()
				    ->getRepository('ProyectoPrincipalBundle:Estado')
				    ->find(25);


			 	$resumen_cuentas->setIdMuni($municipio);
				$resumen_cuentas->setIdEstd($estado);


			 	$em->persist($resumen_cuentas);
				$em->flush();

				break;

			case 'bienes':

			 	$bienes = new Bienes();

			 	$bienes->setFechaAdqui(new \DateTime());
			 	$bienes->setNumCorrInv(12223);
			 	$bienes->setSerial('12223');
			 	$bienes->setPlaca('placa de prueba');
			 	$bienes->setNOrdCompra(343434);
			 	$bienes->setFOrdCompra(new \DateTime());
			 	$bienes->setNpOrdCompra('Nombre de orden de compra');
			 	$bienes->setNfacOrdCompr(343434);
			 	$bienes->setFfacOrdCompr(new \DateTime());
			 	$bienes->setEmOrdCompr('emisor orden de compra prueba');
			 	$bienes->setImnmuOCompr('inmuebleee');
			 	$bienes->setFadqOCompr(new \DateTime());
			 	$bienes->setNcorOCompr(343434);
			 	$bienes->setCiNOCompr('cinocompra prueba');
			 	$bienes->setRifNOComp('rif no compra');
			 	$bienes->setUbcOCompr('ubs ord compr');
			 	$bienes->setNumOrdPag(343434);
			 	$bienes->setFechOrdPag(new \DateTime());
			 	$bienes->setPradOrdPag(343434);
			 	$bienes->setTbnOrdPag('setTbnOrdPag setTbnOrdPag setTbnOrdPag');
			 	$bienes->setDisOrdCom('setDisOrdCom setDisOrdCom setDisOrdCom');
			 	$bienes->setFrmOrdPag(new \DateTime());
			 	$bienes->setDrmOrdPag('setDrmOrdPag setDrmOrdPag setDrmOrdPag');
			 	$bienes->setOfcDrOPag('setOfcDrOPag setOfcDrOPag');
			 	$bienes->setNDrOPag(43434343);
			 	$bienes->setTDrOPag('setTDrOPag setTDrOPag');
			 	$bienes->setFDrOPag('setFDrOPag setFDrOPag');
			 	$bienes->setPDrOPag('setPDrOPag');
			 	$bienes->setTrDrOPag('setTrDrOPag');
				$bienes->setFchDrOPag(new \DateTime());
				$bienes->setFchAcOPag(new \DateTime());
			 	$bienes->setMntAcOPag(43434343);
			 	$bienes->setNombreMarc('setNombreMarc');
			 	$bienes->setModTipAnio('setModTipAnio');
			 	$bienes->setColor('setColor');
			 	$bienes->setNombreMat('setNombreMat');

				$direccion = $this->getDoctrine()
				    ->getRepository('ProyectoPrincipalBundle:Direccion')
				    ->find(27);

				$coordinacion = $this->getDoctrine()
				    ->getRepository('ProyectoPrincipalBundle:Coordinacion')
				    ->find(27);

				$responble = $this->getDoctrine()
				    ->getRepository('ProyectoPrincipalBundle:Reponsable')
				    ->find(1);

				$movimientos = $this->getDoctrine()
				    ->getRepository('ProyectoPrincipalBundle:Movimientos')
				    ->find(3);

				$municipio = $this->getDoctrine()
				    ->getRepository('ProyectoPrincipalBundle:Municipio')
				    ->find(23);

				$estado = $this->getDoctrine()
				    ->getRepository('ProyectoPrincipalBundle:Estado')
				    ->find(25);

				$tipos_bienes = $this->getDoctrine()
				    ->getRepository('ProyectoPrincipalBundle:TiposBienes')
				    ->find(1);

				$seguros = $this->getDoctrine()
				    ->getRepository('ProyectoPrincipalBundle:Seguros')
				    ->find(1);

				$resumen_cuentas = $this->getDoctrine()
				    ->getRepository('ProyectoPrincipalBundle:ResumenCuentas')
				    ->find(6);

				$faltantes = $this->getDoctrine()
				    ->getRepository('ProyectoPrincipalBundle:Faltantes')
				    ->find(16);


			 	$bienes->setIdMuni($municipio);
				$bienes->setIdEstd($estado);
			 	$bienes->setIdTbien($tipos_bienes);
				$bienes->setIdSeg($seguros);
				$bienes->setIdRcta($resumen_cuentas);
				$bienes->setIdFalt($faltantes);
				$bienes->setIdDirc($direccion);
				$bienes->setIdRspn($responble);
				$bienes->setIdCord($coordinacion);
				$bienes->setIdMvts($movimientos);

			 	$em->persist($bienes);
				$em->flush();

			default:
				echo "No entro a ninguna opcion del case";
				break;
		}

		$respuesta = new response(json_encode(array()));
	    $respuesta -> headers -> set('content_type', 'aplication/json');
		return $respuesta;
	 }
}

