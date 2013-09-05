<?php

/* ProyectoPrincipalBundle:Principal:listar.html.twig */
class __TwigTemplate_dbee0d2b84e03032fc64bdb4ff94cb59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("ProyectoPrincipalBundle:Principal:base.html.twig");

        $this->blocks = array(
            'contenido' => array($this, 'block_contenido'),
            'scripts' => array($this, 'block_scripts'),
            'alertanormal' => array($this, 'block_alertanormal'),
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
\t";
        // line 5
        if (((isset($context["slug"]) ? $context["slug"] : $this->getContext($context, "slug")) == "seguros")) {
            // line 6
            echo "
\t\t<h1>listado de seguros!!!</h1>

\t";
        }
        // line 10
        echo "
";
    }

    // line 13
    public function block_scripts($context, array $blocks = array())
    {
    }

    // line 16
    public function block_alertanormal($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "ProyectoPrincipalBundle:Principal:listar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 16,  49 => 13,  44 => 10,  38 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
