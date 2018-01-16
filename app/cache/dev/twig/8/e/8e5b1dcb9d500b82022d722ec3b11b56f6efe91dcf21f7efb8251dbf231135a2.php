<?php

/* ::layout.html.twig */
class __TwigTemplate_8e5b1dcb9d500b82022d722ec3b11b56f6efe91dcf21f7efb8251dbf231135a2 extends Twig_Template
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
        $__internal_bdbc71e736b8957964407f156411ab96a6cff747acad5069e7a658ebbafe7fdf = $this->env->getExtension("native_profiler");
        $__internal_bdbc71e736b8957964407f156411ab96a6cff747acad5069e7a658ebbafe7fdf->enter($__internal_bdbc71e736b8957964407f156411ab96a6cff747acad5069e7a658ebbafe7fdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        echo "\t\t<link rel=\"stylesheet\" href=\"/JeuxDeCartes/web/css/style.css\">
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 11
        $this->displayBlock('body', $context, $blocks);
        // line 12
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 13
        echo "    </body>
</html>
";
        
        $__internal_bdbc71e736b8957964407f156411ab96a6cff747acad5069e7a658ebbafe7fdf->leave($__internal_bdbc71e736b8957964407f156411ab96a6cff747acad5069e7a658ebbafe7fdf_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_30142cc4de11ccd5525ef75c72e2eaf05ad81ab6a42cf5ed2beadba3acdfaf1f = $this->env->getExtension("native_profiler");
        $__internal_30142cc4de11ccd5525ef75c72e2eaf05ad81ab6a42cf5ed2beadba3acdfaf1f->enter($__internal_30142cc4de11ccd5525ef75c72e2eaf05ad81ab6a42cf5ed2beadba3acdfaf1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Jeux de Cartes";
        
        $__internal_30142cc4de11ccd5525ef75c72e2eaf05ad81ab6a42cf5ed2beadba3acdfaf1f->leave($__internal_30142cc4de11ccd5525ef75c72e2eaf05ad81ab6a42cf5ed2beadba3acdfaf1f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0b030825772fa6e722fd51bc5d3a8ee788ab5fa63ba8a20461cd2e1f994e9ef7 = $this->env->getExtension("native_profiler");
        $__internal_0b030825772fa6e722fd51bc5d3a8ee788ab5fa63ba8a20461cd2e1f994e9ef7->enter($__internal_0b030825772fa6e722fd51bc5d3a8ee788ab5fa63ba8a20461cd2e1f994e9ef7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_0b030825772fa6e722fd51bc5d3a8ee788ab5fa63ba8a20461cd2e1f994e9ef7->leave($__internal_0b030825772fa6e722fd51bc5d3a8ee788ab5fa63ba8a20461cd2e1f994e9ef7_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_26d100afd05ce0ab6ca47da34bf28dc75b47d55b740b50b60a573f11242e8317 = $this->env->getExtension("native_profiler");
        $__internal_26d100afd05ce0ab6ca47da34bf28dc75b47d55b740b50b60a573f11242e8317->enter($__internal_26d100afd05ce0ab6ca47da34bf28dc75b47d55b740b50b60a573f11242e8317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_26d100afd05ce0ab6ca47da34bf28dc75b47d55b740b50b60a573f11242e8317->leave($__internal_26d100afd05ce0ab6ca47da34bf28dc75b47d55b740b50b60a573f11242e8317_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_43c93bdef17a287aaa57d1d43a8cd201841c8104cf7c72e75203c31b27009b97 = $this->env->getExtension("native_profiler");
        $__internal_43c93bdef17a287aaa57d1d43a8cd201841c8104cf7c72e75203c31b27009b97->enter($__internal_43c93bdef17a287aaa57d1d43a8cd201841c8104cf7c72e75203c31b27009b97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_43c93bdef17a287aaa57d1d43a8cd201841c8104cf7c72e75203c31b27009b97->leave($__internal_43c93bdef17a287aaa57d1d43a8cd201841c8104cf7c72e75203c31b27009b97_prof);

    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 12,  84 => 11,  73 => 6,  61 => 5,  52 => 13,  49 => 12,  47 => 11,  41 => 8,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
