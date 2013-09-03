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

class PrincipalController extends Controller
{
	 public function portadaAction(){
	 	
	 	$em = $this->getDoctrine()->getManager();


		$municipio = new Municipio();
	 	$municipio->setCodMuni(33);
	 	$municipio->setNombre('Nombremunicipio');

	 	$estado = new Estado();
	 	$estado->setCodEstd(4343);
	 	$municipio->setNombre('Nombreestado');

	 	$coordinacion = new Coordinacion();
	 	$coordinacion->setCodCord(134);
	 	$coordinacion->setCoordinador('nombrecordinador')

	 	$direccion = new Direccion();
	 	$direccion->setCodDirc(23323);
	 	$direccion->setDirector('nombredirector');
	 	$direccion->setNombre('Nomre');
	 	
	 		 
	 	$em->persist($municipio);
	 	$em->persist($estado);
	 	$em->persist($coordinacion);
	 	$em->persist($direccion);
		
		$em->flush();

	 	$faltantes = new Faltantes();

	 	$faltantes->setGrupo('Grupo de prueba');
	 	$faltantes->setSubgrupo('Sub grupo de prueba');
	 	$faltantes->setSeccion('Seccion de prueba');
	 	$faltantes->setDescripcion('Descripcion de prueba');
	 	$faltantes->setCantidad(123323);
	 	$faltantes->setValorUni(123232);
	 	$faltantes->setDiferencia(23232);
	 	$faltantes->setObsrvc('Observacion de prueba');
	 	$faltantes->setCodFalt(2233);



	 	$faltantes->setCodMuni($municipio);
	 	$faltantes->setCodEstd($estado);
	 	$faltantes->setCodCord($coordinacion);
	 	$faltantes->setCodDirc($direccion);

		$em->persist($faltantes);

	 	$em->flush();
		/*
	 	$movimientos = new Movimientos();

	 	$movimientos->setDireccion('Grupo de prueba');
	 	$movimientos->setSubgrupo('Sub grupo de prueba');
	 	$movimientos->setSeccion('Seccion de prueba');
	 	$movimientos->setDescripcion('Descripcion de prueba');
	 	$movimientos->setCantidad(123323);
	 	$movimientos->setValorUni(123232);
	 	$movimientos->setDiferencia(23232);
	 	$movimientos->setObsrvc('Observacion de prueba');
	 	$movimientos->setCodFalt(2233);
		*/


	 	$em->flush();



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
				$seguros->setCodSeg($codigo_seguro);

				$em = $this->getDoctrine()->getManager();
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


				$em = $this->getDoctrine()->getManager();
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

				$em = $this->getDoctrine()->getManager();
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
			default:
				// 
				break;
		}

		$respuesta = new response(json_encode(array()));
	    $respuesta -> headers -> set('content_type', 'aplication/json');
		return $respuesta;
	 }
}

