<?php

/* base.html.twig */
class __TwigTemplate_871d03b4705ddef0b4bc2261ab461b4effe3bec9779da990e64e84fad56a555e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5785655397911f30f2423c88c085e8b1701ee3f3afc095bab903d71163437141 = $this->env->getExtension("native_profiler");
        $__internal_5785655397911f30f2423c88c085e8b1701ee3f3afc095bab903d71163437141->enter($__internal_5785655397911f30f2423c88c085e8b1701ee3f3afc095bab903d71163437141_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_5785655397911f30f2423c88c085e8b1701ee3f3afc095bab903d71163437141->leave($__internal_5785655397911f30f2423c88c085e8b1701ee3f3afc095bab903d71163437141_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_39d3f13ec06a69bf13c21de7fdc63c27334b668898c1c8c7c295703dd4a94c82 = $this->env->getExtension("native_profiler");
        $__internal_39d3f13ec06a69bf13c21de7fdc63c27334b668898c1c8c7c295703dd4a94c82->enter($__internal_39d3f13ec06a69bf13c21de7fdc63c27334b668898c1c8c7c295703dd4a94c82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_39d3f13ec06a69bf13c21de7fdc63c27334b668898c1c8c7c295703dd4a94c82->leave($__internal_39d3f13ec06a69bf13c21de7fdc63c27334b668898c1c8c7c295703dd4a94c82_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_29cf186ce34f253b100d67aa24432dc05760a6c49aa6163290d5c765fa16b455 = $this->env->getExtension("native_profiler");
        $__internal_29cf186ce34f253b100d67aa24432dc05760a6c49aa6163290d5c765fa16b455->enter($__internal_29cf186ce34f253b100d67aa24432dc05760a6c49aa6163290d5c765fa16b455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_29cf186ce34f253b100d67aa24432dc05760a6c49aa6163290d5c765fa16b455->leave($__internal_29cf186ce34f253b100d67aa24432dc05760a6c49aa6163290d5c765fa16b455_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_81aa2c594f6756e8370a73f976970824d6bbe5817b53e57cbc61102976a2002b = $this->env->getExtension("native_profiler");
        $__internal_81aa2c594f6756e8370a73f976970824d6bbe5817b53e57cbc61102976a2002b->enter($__internal_81aa2c594f6756e8370a73f976970824d6bbe5817b53e57cbc61102976a2002b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_81aa2c594f6756e8370a73f976970824d6bbe5817b53e57cbc61102976a2002b->leave($__internal_81aa2c594f6756e8370a73f976970824d6bbe5817b53e57cbc61102976a2002b_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4aa7b474ae5abccbbdd708144f4c1ffb77abb2e26e92d65b4b11f01171acbbc3 = $this->env->getExtension("native_profiler");
        $__internal_4aa7b474ae5abccbbdd708144f4c1ffb77abb2e26e92d65b4b11f01171acbbc3->enter($__internal_4aa7b474ae5abccbbdd708144f4c1ffb77abb2e26e92d65b4b11f01171acbbc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4aa7b474ae5abccbbdd708144f4c1ffb77abb2e26e92d65b4b11f01171acbbc3->leave($__internal_4aa7b474ae5abccbbdd708144f4c1ffb77abb2e26e92d65b4b11f01171acbbc3_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
