<?php

/* ProyectoPrincipalBundle:Principal:guardar.html.twig */
class __TwigTemplate_be681934ad16e49679c9944bed4bc557 extends Twig_Template
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
\t\t\t\t\t\t  <input type='hidden' id='input_seguros_guardar' value='seguros'>

\t\t<input class ='boton_enviar_guardar_seguros' type='button' value='Enviar'>
\t</form>
";
        }
        // line 18
        echo "
";
        // line 19
        if (((isset($context["slug"]) ? $context["slug"] : $this->getContext($context, "slug")) == "direccion")) {
            // line 20
            echo "\t<form id='formulario_direccion'>

\t\tNombre de direccion:<input type='text' id='nombre_direccion'><br>
\t\tNombre de Director(a):<input type='text' id='nombre_director'><br>
\t\tCodigo de Direccion:<input type='text' id='codigo_direccion'><br>
\t\t<input type='hidden' id='input_direccion_guardar' value='direccion'>

\t\t<input class='boton_enviar_guardar_direccion' type='button' value='Enviar'>

\t</form>
";
        }
        // line 31
        echo "
";
        // line 32
        if (((isset($context["slug"]) ? $context["slug"] : $this->getContext($context, "slug")) == "responsable")) {
            // line 33
            echo "\t<form id='formulario_responsable'>

\t\tNombre de responsable:<input type='text' id='nombre_responsable'><br>
\t\tCedula Responsable:<input type='text' id='cedula_responsable'><br>
\t\t\t\t\t\t   <input type='text' id='descripcion_cargo_responsable'><br>
\t\t\t\t\t\t   <input type='hidden' id='input_responsable_guardar' value='responsale'>

\t\t<input class='boton_enviar_guardar_responsable' type='button' value='Enviar'>
\t\t
\t</form>
";
        }
        // line 44
        echo "
\t<a href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("portada"), "html", null, true);
        echo "\">Volver</a>

";
    }

    // line 49
    public function block_alertanormal($context, array $blocks = array())
    {
    }

    // line 53
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
        return array (  103 => 53,  98 => 49,  91 => 45,  88 => 44,  75 => 33,  73 => 32,  70 => 31,  57 => 20,  55 => 19,  52 => 18,  38 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
