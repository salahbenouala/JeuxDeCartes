<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_fffdd4f260e6402d3c1f14b52983689f1733a688633d539672525df4fbfcf344 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_020848c0ddbc3d7362c6c2fc592334591ad5241b80644d5195c81d54c9198a80 = $this->env->getExtension("native_profiler");
        $__internal_020848c0ddbc3d7362c6c2fc592334591ad5241b80644d5195c81d54c9198a80->enter($__internal_020848c0ddbc3d7362c6c2fc592334591ad5241b80644d5195c81d54c9198a80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_020848c0ddbc3d7362c6c2fc592334591ad5241b80644d5195c81d54c9198a80->leave($__internal_020848c0ddbc3d7362c6c2fc592334591ad5241b80644d5195c81d54c9198a80_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a2d7fd49dcc00751ead01becf3b4aa02086acb021d592b9e745da8e653cf0c3e = $this->env->getExtension("native_profiler");
        $__internal_a2d7fd49dcc00751ead01becf3b4aa02086acb021d592b9e745da8e653cf0c3e->enter($__internal_a2d7fd49dcc00751ead01becf3b4aa02086acb021d592b9e745da8e653cf0c3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a2d7fd49dcc00751ead01becf3b4aa02086acb021d592b9e745da8e653cf0c3e->leave($__internal_a2d7fd49dcc00751ead01becf3b4aa02086acb021d592b9e745da8e653cf0c3e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8f92820c71519d95d3d0406c2d5f82b49f7c1701180705037c3c4ca5f9e3e403 = $this->env->getExtension("native_profiler");
        $__internal_8f92820c71519d95d3d0406c2d5f82b49f7c1701180705037c3c4ca5f9e3e403->enter($__internal_8f92820c71519d95d3d0406c2d5f82b49f7c1701180705037c3c4ca5f9e3e403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_8f92820c71519d95d3d0406c2d5f82b49f7c1701180705037c3c4ca5f9e3e403->leave($__internal_8f92820c71519d95d3d0406c2d5f82b49f7c1701180705037c3c4ca5f9e3e403_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b76dcf3b9450354628e6f4148600b41e80d79f89327fb23522246611e7b33b60 = $this->env->getExtension("native_profiler");
        $__internal_b76dcf3b9450354628e6f4148600b41e80d79f89327fb23522246611e7b33b60->enter($__internal_b76dcf3b9450354628e6f4148600b41e80d79f89327fb23522246611e7b33b60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_b76dcf3b9450354628e6f4148600b41e80d79f89327fb23522246611e7b33b60->leave($__internal_b76dcf3b9450354628e6f4148600b41e80d79f89327fb23522246611e7b33b60_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
