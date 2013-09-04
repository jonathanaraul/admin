<?php

/* ProyectoPrincipalBundle:Principal:guardar.html.twig */
class __TwigTemplate_074f6e812dbb40b78045be927364e266 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("ProyectoPrincipalBundle:Principal:base.html.twig");

        $this->blocks = array(
            'contenido' => array($this, 'block_contenido'),
            'alertanormal' => array($this, 'block_alertanormal'),
            'alertaespecial' => array($this, 'block_alertaespecial'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ProyectoPrincipalBundle:Principal:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        // line 4
        echo "
";
        // line 5
        if (((isset($context["slug"]) ? $context["slug"] : $this->getContext($context, "slug")) == "seguros")) {
            // line 6
            echo "\t<form id='formulario_seguro'>

\t\tNombre del Seguro:<input type='text' id='nombre_seguro'>    <br>
\t\tPoliza del Seguro:<input type='text' id='poliza_seguro'>    <br>
\t\tVigencia desde:   <input type='text' id='vig_desde_seguro'> <br>
\t\tVigencia hasta:   <input type='text' id='vig_hasta_seguro'> <br>
\t\tCodigo de Seguro: <input type='text' id='codigo_seguro'>    <br>
\t\t\t
\t\t\t<input type='hidden' id='input_seguros_guardar' value='seguros'>

\t\t<input class ='boton_enviar_guardar_seguros' type='button' value='Enviar'>
\t</form>
";
        }
        // line 19
        echo "
";
        // line 20
        if (((isset($context["slug"]) ? $context["slug"] : $this->getContext($context, "slug")) == "direccion")) {
            // line 21
            echo "\t<form id='formulario_direccion'>

\t\tNombre de direccion:<input type='text' id='nombre_direccion'><br>
\t\tNombre de Director(a):<input type='text' id='nombre_director'><br>
\t\tCodigo de Direccion:<input type='text' id='codigo_direccion'><br>

\t\t\t<input type='hidden' id='input_direccion_guardar' value='direccion'>

\t\t<input class='boton_enviar_guardar_direccion' type='button' value='Enviar'>

\t</form>
";
        }
        // line 33
        echo "
";
        // line 34
        if (((isset($context["slug"]) ? $context["slug"] : $this->getContext($context, "slug")) == "responsable")) {
            // line 35
            echo "\t<form id='formulario_responsable'>

\t\tNombre de responsable:<input type='text' id='nombre_responsable'><br>
\t\tCedula Responsable:<input type='text' id='cedula_responsable'><br>
\t\tDescripcion Cargo:<input type='text' id='descripcion_cargo_responsable'><br>
\t\t\t
\t\t\t<input type='hidden' id='input_responsable_guardar' value='responsable'>

\t\t<input class='boton_enviar_guardar_responsable' type='button' value='Enviar'>
\t\t
\t</form>
";
        }
        // line 47
        echo "
";
        // line 48
        if (((isset($context["slug"]) ? $context["slug"] : $this->getContext($context, "slug")) == "coordinacion")) {
            // line 49
            echo "
\t\tNombre de Coordinacion:<input type='text' id='nombre_coordinacion'><br>
\t\tNombre de Coordinador(a):<input type='text' id='nombre_coordinador'><br>
\t\tCodigo de Coordinacion:<input type='text' id='codigo_coordinacion'><br>

\t\t\t<input type='hidden' id='input_coordinacion_guardar' value='coordinacion'>

\t\t<input class='boton_enviar_guardar_coordinacion' type='button' value='Enviar'>

";
        }
        // line 59
        echo "
";
        // line 60
        if (((isset($context["slug"]) ? $context["slug"] : $this->getContext($context, "slug")) == "faltantes")) {
            // line 61
            echo "
\t\tGrupo:<input type='text' id='grupo'><br>
\t\tSubgrupo:<input type='text' id='subgrupo'><br>
\t\tSeccion:<input type='text' id='seccion'><br>
\t\tDescripcion:<input type='text' id='descripcion'><br>
\t\tCantidad:<input type='text' id='cantidad'><br>
\t\tValor unidad:<input type='text' id='valor_unidad'><br>
\t\tDiferencia:<input type='text' id='diferencia'><br>
\t\tObservacion:<input type='text' id='observacion'><br>
\t\tDireccion:<input type='text' id='direccion'><br>
\t\tCoordinacion:<input type='text' id='coordinacion'><br>
\t\tEstado:<input type='text' id='Estado'><br>
\t\tMunicipio:<input type='text' id='municipio'><br>

\t\t\t<input type='hidden' id='input_faltantes_guardar' value='faltantes'>

\t\t<input class='boton_enviar_guardar_faltantes' type='button' value='Enviar'>

";
        }
        // line 80
        echo "
";
        // line 81
        if (((isset($context["slug"]) ? $context["slug"] : $this->getContext($context, "slug")) == "movimientos")) {
            // line 82
            echo "
\t\tDireccion:<input type='text' id='direccion'><br>
\t\tPeriodo:<input type='text' id='subgrupo'><br>
\t\tGrupo:<input type='text' id='grupo'><br>
\t\tSub Grupo:<input type='text' id='subgrupo'><br>
\t\tSeccion:<input type='text' id='seccion'><br>
\t\tConcepto:<input type='text' id='concepto'><br>
\t\tCantidad:<input type='text' id='cantidad'><br>
\t\tResponsable:<input type='text' id='responsable'><br>
\t\tCoordinacion:<input type='text' id='coordinacion'><br>
\t\tEstado:<input type='text' id='estado'><br>
\t\tMunicipio:<input type='text' id='municipio'><br>

\t\t\t<input type='hidden' id='input_movimientos_guardar' value='movimientos'>

\t\t<input class='boton_enviar_guardar_movimientos' type='button' value='Enviar'>

";
        }
        // line 100
        echo "
";
        // line 101
        if (((isset($context["slug"]) ? $context["slug"] : $this->getContext($context, "slug")) == "resumen_cuentas")) {
            // line 102
            echo "
\t\tNombmbre de Resumen de cuentas:<input type='text' id='nombre_rcuentas'><br>

\t\t\t<input type='hidden' id='input_nombre_rcuentas_guardar' value='rcuentas'>

\t\t<input class='boton_enviar_guardar_nombre_rcuentas' type='button' value='Enviar'>

";
        }
        // line 110
        echo "
";
        // line 111
        if (((isset($context["slug"]) ? $context["slug"] : $this->getContext($context, "slug")) == "bienes")) {
            // line 112
            echo "
\t\tNombmbre de Resumen de cuentas:<input type='text' id='nombre_rcuentas'><br>

\t\t\t<input type='hidden' id='input_nombre_rcuentas_bienes' value='bienes'>

\t\t<input class='boton_enviar_guardar_nombre_bienes' type='button' value='Enviar'>

";
        }
        // line 120
        echo "\t<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("portada"), "html", null, true);
        echo "\">Volver</a>

";
    }

    // line 124
    public function block_alertanormal($context, array $blocks = array())
    {
    }

    // line 128
    public function block_alertaespecial($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "ProyectoPrincipalBundle:Principal:guardar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 128,  197 => 124,  189 => 120,  179 => 112,  177 => 111,  174 => 110,  164 => 102,  162 => 101,  159 => 100,  139 => 82,  137 => 81,  134 => 80,  113 => 61,  111 => 60,  108 => 59,  96 => 49,  94 => 48,  91 => 47,  77 => 35,  75 => 34,  72 => 33,  58 => 21,  56 => 20,  53 => 19,  38 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
