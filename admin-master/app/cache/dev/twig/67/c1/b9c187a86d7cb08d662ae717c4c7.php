<?php

/* ProyectoPrincipalBundle:Principal:base.html.twig */
class __TwigTemplate_67c1b9c187a86d7cb08d662ae717c4c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'alertaespecial' => array($this, 'block_alertaespecial'),
            'alertanormal' => array($this, 'block_alertanormal'),
            'contenido' => array($this, 'block_contenido'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<meta charset=\"utf-8\" />
\t\t<title>Titulo</title>

\t\t<link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/ace.min.css"), "html", null, true);
        echo "\" />
\t\t<link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/ace-responsive.min.css"), "html", null, true);
        echo "\" />
\t\t<link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/ace-skins.min.css"), "html", null, true);
        echo "\" />

\t\t<!--[if lte IE 8]>
\t\t  <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/ace-ie.min.css"), "html", null, true);
        echo "\" />
\t\t<![endif]-->

\t\t<!--inline styles related to this page-->
\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" /></head>

\t<body>


\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
        // line 22
        $this->displayBlock('alertaespecial', $context, $blocks);
        // line 24
        echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
        // line 25
        $this->displayBlock('alertanormal', $context, $blocks);
        // line 27
        echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
        // line 28
        $this->displayBlock('contenido', $context, $blocks);
        // line 30
        echo "\t\t\t\t\t\t\t

\t\t<!--inline scripts related to this page-->
\t\t<script type=\"text/javascript\">
\t\t\t//VARIABLES GLOBALES
\t\t\tvar guardar = '";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("guardarAjax"), "html", null, true);
        echo "';

\t\t</script>
\t\t<script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.7.1.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t\t<script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/sistema/utilidades.js"), "html", null, true);
        echo "\"  type=\"text/javascript\"></script>
\t\t<script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/sistema/generales.js"), "html", null, true);
        echo "\"  type=\"text/javascript\"></script>
\t\t";
        // line 41
        $this->displayBlock('scripts', $context, $blocks);
        // line 43
        echo "\t\t
\t</body>
</html>
";
    }

    // line 22
    public function block_alertaespecial($context, array $blocks = array())
    {
        // line 23
        echo "\t\t\t\t\t\t\t";
    }

    // line 25
    public function block_alertanormal($context, array $blocks = array())
    {
        // line 26
        echo "\t\t\t\t\t\t\t";
    }

    // line 28
    public function block_contenido($context, array $blocks = array())
    {
        // line 29
        echo "\t\t\t\t\t\t\t";
    }

    // line 41
    public function block_scripts($context, array $blocks = array())
    {
        // line 42
        echo "\t\t";
    }

    public function getTemplateName()
    {
        return "ProyectoPrincipalBundle:Principal:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 42,  125 => 41,  121 => 29,  118 => 28,  114 => 26,  111 => 25,  107 => 23,  104 => 22,  97 => 43,  95 => 41,  91 => 40,  87 => 39,  83 => 38,  77 => 35,  70 => 30,  68 => 28,  65 => 27,  63 => 25,  60 => 24,  58 => 22,  45 => 12,  39 => 9,  31 => 7,  23 => 1,  116 => 66,  99 => 52,  89 => 45,  79 => 38,  69 => 31,  59 => 24,  43 => 10,  40 => 9,  35 => 8,  30 => 3,);
    }
}
