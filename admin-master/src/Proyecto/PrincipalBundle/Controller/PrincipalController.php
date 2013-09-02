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
use Proyecto\PrincipalBundle\Entity\Responsable;
use Proyecto\PrincipalBundle\Entity\Direccion;


class PrincipalController extends Controller
{
	 public function portadaAction(){

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

				$responsable = new Responsable();

///////////////////////////Captura de variables
				$nombre_responsable 			  = $post -> get("nombre_cargo");
				$cedula_responsable    			  = $post -> get("cedula_responsable");
				$descripcion_cargo_responsable    = $post -> get("descripcion_cargo_responsable");

				
/////////////////////Setear variables

				$responsable->setNombre($nombre_responsable);
				$responsable->setCi($cedula_responsable);
				$responsable->setDescrCargo($descripcion_cargo_responsable);


				$em = $this->getDoctrine()->getManager();
			    $em->persist($responsable);
			    $em->flush();

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
			
			default:
				// 
				break;
		}

		$respuesta = new response(json_encode(array()));
	    $respuesta -> headers -> set('content_type', 'aplication/json');
		return $respuesta;
	 }
}

