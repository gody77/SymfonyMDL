<?php

/* LamMdlBundle::layout.html.twig */
class __TwigTemplate_e50d16ead2ee03ad8a4e391edff9c9dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'nav' => array($this, 'block_nav'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<meta charset=\"UTF-8\" />
<header>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t\t<link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/LamMdl/css/styles.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
\t\t<img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/LamMdl/images/logo.jpg"), "html", null, true);
        echo "\" alt=\"logo\" width=\"430\"  />
</header>\t

<nav>
";
        // line 12
        $this->displayBlock('nav', $context, $blocks);
        // line 25
        echo "</nav>



<article>
";
        // line 30
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "</article>



\t
<footer>
<p>copyright ©</p>
</footer>
\t
\t
\t
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "La Maison des ligues de Lorraine";
    }

    // line 12
    public function block_nav($context, array $blocks = array())
    {
        // line 13
        echo "        
        
        
        
        
        <ul><li><a class='lien' href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("LamMdlBundle_homepage"), "html", null, true);
        echo "\">Accueil</a></li>
\t<li><a class='lien' href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("LamMdlBundle_formationinformatique"), "html", null, true);
        echo "\" >Les formations informatiques</a></li>
        <li><a class='lien' href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("LamMdlBundle_formationsport"), "html", null, true);
        echo "\" >Les formations sport/médecine</a></li>
        <li><a class='lien' href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("LamMdlBundle_formationsport"), "html", null, true);
        echo "\" >Inscription organisme</a></li>
\t
        
";
    }

    // line 30
    public function block_body($context, array $blocks = array())
    {
        // line 31
        echo "
        
";
    }

    public function getTemplateName()
    {
        return "LamMdlBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 31,  105 => 30,  97 => 21,  93 => 20,  89 => 19,  85 => 18,  78 => 13,  69 => 6,  53 => 34,  51 => 30,  44 => 25,  42 => 12,  35 => 8,  31 => 7,  27 => 6,  20 => 1,  152 => 47,  146 => 46,  143 => 45,  132 => 43,  128 => 42,  125 => 41,  121 => 39,  117 => 37,  114 => 36,  112 => 35,  106 => 32,  102 => 31,  98 => 30,  94 => 29,  90 => 28,  86 => 27,  82 => 26,  79 => 25,  75 => 12,  68 => 20,  64 => 19,  62 => 18,  57 => 16,  52 => 14,  49 => 13,  45 => 12,  37 => 7,  34 => 6,  32 => 5,  29 => 4,  26 => 3,);
    }
}
