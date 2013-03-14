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
        echo "\" alt=\"logo\" width=\"430\" height\"430\" />
         <h1>Salut</h1>
                <h2>salut2</h2>
</header>\t

<nav>
";
        // line 14
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

    // line 14
    public function block_nav($context, array $blocks = array())
    {
        // line 15
        echo "        
        
        
        
        
        <ul><li><a class='lien' href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("LamMdlBundle_homepage"), "html", null, true);
        echo "\">Accueil</a></li>
\t<li><a class='lien' href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("LamMdlBundle_formationinformatique"), "html", null, true);
        echo "\" >Les formations informatiques</a></li>
        <li><a class='lien' href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("LamMdlBundle_formationsport"), "html", null, true);
        echo "\" >Les formations sport/médecine</a></li>
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
        return array (  105 => 31,  102 => 30,  95 => 22,  91 => 21,  87 => 20,  80 => 15,  77 => 14,  71 => 6,  55 => 34,  53 => 30,  46 => 25,  44 => 14,  35 => 8,  31 => 7,  27 => 6,  20 => 1,  29 => 4,  26 => 3,);
    }
}
