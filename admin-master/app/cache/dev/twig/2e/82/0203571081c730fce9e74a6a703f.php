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
\t\t\t\t<li><a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("guardar", array("slug" => "resumen_bienes")), "html", null, true);
        echo "\" class ='agregar_bienes'>Aregar</a></li>
\t\t\t\t<li>Listar</li>
\t\t\t</ul>
\t</li>\t 
\t<li>
\t\t<p>Coordinación</p>
\t\t\t<ul>
\t\t\t\t<li><a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("guardar", array("slug" => "coordinacion")), "html", null, true);
        echo "\" class ='agregar_coordinacion'>Aregar</a></li>
\t\t\t\t<li><a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("listar", array("slug" => "coordinacion")), "html", null, true);
        echo "\" class ='listar_coordinacion'>Listar</a></li>
\t\t\t</ul>
\t</li>
\t<li>
\t\tDirección
\t\t\t<ul>
\t\t\t\t<li><a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("guardar", array("slug" => "direccion")), "html", null, true);
        echo "\" class ='agregar_direccion'>Aregar</a></li>
\t\t\t\t<li><a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("listar", array("slug" => "direccion")), "html", null, true);
        echo "\" class ='listar_direccion'>Listar</a></li>
\t\t\t</ul>
\t</li>
\t<li>
\t\tFaltantes
\t\t\t<ul>
\t\t\t\t<li><a href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("guardar", array("slug" => "faltantes")), "html", null, true);
        echo "\" class ='agregar_faltantes'>Aregar</a></li>
\t\t\t\t<li>Listar</li>
\t\t\t</ul>
\t</li>
\t<li>
\t\tMovimientos
\t\t\t<ul>
\t\t\t\t<li><a href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("guardar", array("slug" => "movimientos")), "html", null, true);
        echo "\" class ='agregar_movimientos'>Aregar</a></li>
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
\t\t<p>Resumen de cuentas</p>
\t\t\t<ul>
\t\t\t\t<li><a href=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("guardar", array("slug" => "resumen_cuentas")), "html", null, true);
        echo "\" class ='agregar_resumen_cuentas'>Aregar</a></li>
\t\t\t\t<li><a href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("listar", array("slug" => "resumen_cuentas")), "html", null, true);
        echo "\" class ='listar_resumen_cuentas'>Listar</a></li>
\t\t\t</ul>
\t</li>
\t<li>
\t\t<p class='tip_letra'>Seguros</p>
\t\t\t<ul>
\t\t\t\t<li><a href=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("guardar", array("slug" => "seguros")), "html", null, true);
        echo "\" class ='agregar_seguros'>Aregar</a></li>
\t\t\t\t<li><a href=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("listar", array("slug" => "seguros")), "html", null, true);
        echo "\" class ='listar_seguros'>Listar</a></li>
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
        return array (  135 => 67,  131 => 66,  122 => 60,  118 => 59,  108 => 52,  98 => 45,  88 => 38,  79 => 32,  75 => 31,  66 => 25,  62 => 24,  52 => 17,  43 => 10,  40 => 9,  35 => 6,  30 => 3,);
    }
}
