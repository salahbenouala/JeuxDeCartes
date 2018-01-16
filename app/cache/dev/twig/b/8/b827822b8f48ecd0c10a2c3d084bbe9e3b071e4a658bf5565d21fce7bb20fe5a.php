<?php

/* BenoualaCardBundle::layout.html.twig */
class __TwigTemplate_b827822b8f48ecd0c10a2c3d084bbe9e3b071e4a658bf5565d21fce7bb20fe5a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout.html.twig", "BenoualaCardBundle::layout.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4ea726af1747a2f9a8bf7e11e01ea5b9450446a1f35f06873b11e76b2babb86e = $this->env->getExtension("native_profiler");
        $__internal_4ea726af1747a2f9a8bf7e11e01ea5b9450446a1f35f06873b11e76b2babb86e->enter($__internal_4ea726af1747a2f9a8bf7e11e01ea5b9450446a1f35f06873b11e76b2babb86e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenoualaCardBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ea726af1747a2f9a8bf7e11e01ea5b9450446a1f35f06873b11e76b2babb86e->leave($__internal_4ea726af1747a2f9a8bf7e11e01ea5b9450446a1f35f06873b11e76b2babb86e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a8c82910a166a565587d85f1925bfb60ca29bcec482b1305f540b1d9a57ad2fe = $this->env->getExtension("native_profiler");
        $__internal_a8c82910a166a565587d85f1925bfb60ca29bcec482b1305f540b1d9a57ad2fe->enter($__internal_a8c82910a166a565587d85f1925bfb60ca29bcec482b1305f540b1d9a57ad2fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Cartes
";
        
        $__internal_a8c82910a166a565587d85f1925bfb60ca29bcec482b1305f540b1d9a57ad2fe->leave($__internal_a8c82910a166a565587d85f1925bfb60ca29bcec482b1305f540b1d9a57ad2fe_prof);

    }

    public function getTemplateName()
    {
        return "BenoualaCardBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 3,);
    }
}
