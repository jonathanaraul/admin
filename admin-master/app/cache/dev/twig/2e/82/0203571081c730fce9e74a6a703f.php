<?php

/* ProyectoPrincipalBundle:Principal:portada.html.twig */
class __TwigTemplate_2e820203571081c730fce9e74a6a703f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("ProyectoPrincipalBundle:Principal:base.html.twig");

        $this->blocks = array(
            'scripts' => array($this, 'block_scripts'),
            'alertanormal' => array($this, 'block_alertanormal'),
            'contenido' => array($this, 'block_contenido'),
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
    public function block_scripts($context, array $blocks = array())
    {
    }

    // line 6
    public function block_alertanormal($context, array $blocks = array())
    {
    }

    // line 9
    public function block_contenido($context, array $blocks = array())
    {
        // line 10
        echo "

 <ul class = 'lista-portada'>

\t<li>
\t\tBienes
\t\t\t<ul>
\t\t\t\t<li><a >Aregar</a></li>
\t\t\t\t<li>Listar</li>
\t\t\t</ul>
\t</li>\t 
\t<li>
\t\tCoordinación
\t\t\t<ul>
\t\t\t\t<li><a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("guardar", array("slug" => "coordinacion")), "html", null, true);
        echo "\" class ='agregar_coordinacion'>Aregar</a></li>
\t\t\t\t<li>Listar</li>
\t\t\t</ul>
\t</li>
\t<li>
\t\tDirección
\t\t\t<ul>
\t\t\t\t<li><a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("guardar", array("slug" => "direccion")), "html", null, true);
        echo "\" class ='agregar_direccion'>Aregar</a></li>
\t\t\t\t<li>Listar</li>
\t\t\t</ul>
\t</li>
\t<li>
\t\tFaltantes
\t\t\t<ul>
\t\t\t\t<li>Agregar</li>
\t\t\t\t<li>Listar</li>
\t\t\t</ul>
\t</li>
\t<li>
\t\tMovimientos
\t\t\t<ul>
\t\t\t\t<li>Agregar</li>
\t\t\t\t<li>Listar</li>
\t\t\t</ul>
\t</li>
\t<li>
\t\tResponsable
\t\t\t<ul>
\t\t\t\t<li><a href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("guardar", array("slug" => "responsable")), "html", null, true);
        echo "\" class ='agregar_responsable'>Agregar</a></li>
\t\t\t\t<li>Listar</li>
\t\t\t</ul>
\t</li>
\t<li>
\t\tResumen de cuentas
\t\t\t<ul>
\t\t\t\t<li>Agregar</li>
\t\t\t\t<li>Listar</li>
\t\t\t</ul>
\t</li>
\t<li>
\t\t<p class='tip_letra'>Seguros</p>
\t\t\t<ul>
\t\t\t\t<li><a href=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("guardar", array("slug" => "seguros")), "html", null, true);
        echo "\" class ='agregar_seguros'>Aregar</a></li>
\t\t\t\t<li><a href=\"#\">Listar</a></li>
\t\t\t</ul>
\t</li>


</ul> 
";
    }

    public function getTemplateName()
    {
        return "ProyectoPrincipalBundle:Principal:portada.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 66,  93 => 52,  69 => 31,  59 => 24,  43 => 10,  40 => 9,  35 => 6,  30 => 3,);
    }
}
