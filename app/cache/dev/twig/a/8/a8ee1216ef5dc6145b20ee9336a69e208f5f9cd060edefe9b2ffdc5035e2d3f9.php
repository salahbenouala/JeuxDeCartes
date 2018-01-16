<?php

/* BenoualaCardBundle:Card:index.html.twig */
class __TwigTemplate_a8ee1216ef5dc6145b20ee9336a69e208f5f9cd060edefe9b2ffdc5035e2d3f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("BenoualaCardBundle::layout.html.twig", "BenoualaCardBundle:Card:index.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BenoualaCardBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c3875e38ffc2afcd6c357168d78dd0bdd3a6eb8379d6200e4e94572b17a46fb4 = $this->env->getExtension("native_profiler");
        $__internal_c3875e38ffc2afcd6c357168d78dd0bdd3a6eb8379d6200e4e94572b17a46fb4->enter($__internal_c3875e38ffc2afcd6c357168d78dd0bdd3a6eb8379d6200e4e94572b17a46fb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenoualaCardBundle:Card:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3875e38ffc2afcd6c357168d78dd0bdd3a6eb8379d6200e4e94572b17a46fb4->leave($__internal_c3875e38ffc2afcd6c357168d78dd0bdd3a6eb8379d6200e4e94572b17a46fb4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_199f0aedfd683178ba58cfd9a03f378d4a911c898df24efed4141f4bdb58f5a2 = $this->env->getExtension("native_profiler");
        $__internal_199f0aedfd683178ba58cfd9a03f378d4a911c898df24efed4141f4bdb58f5a2->enter($__internal_199f0aedfd683178ba58cfd9a03f378d4a911c898df24efed4141f4bdb58f5a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "\t";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Montrer ma main
";
        
        $__internal_199f0aedfd683178ba58cfd9a03f378d4a911c898df24efed4141f4bdb58f5a2->leave($__internal_199f0aedfd683178ba58cfd9a03f378d4a911c898df24efed4141f4bdb58f5a2_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_d6e10740df27ea595116c0276a61ae104ca80138fcda04e1c05de3dcc31fd3c3 = $this->env->getExtension("native_profiler");
        $__internal_d6e10740df27ea595116c0276a61ae104ca80138fcda04e1c05de3dcc31fd3c3->enter($__internal_d6e10740df27ea595116c0276a61ae104ca80138fcda04e1c05de3dcc31fd3c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "\t<section id=\"entete\">
\t\t<p>
\t\t\tImmatriculation : <strong>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cardManager"]) ? $context["cardManager"] : $this->getContext($context, "cardManager")), "candidateId", array()), "html", null, true);
        echo "</strong> <br>
\t\t\tNom complet : <strong>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cardManager"]) ? $context["cardManager"] : $this->getContext($context, "cardManager")), "lastName", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cardManager"]) ? $context["cardManager"] : $this->getContext($context, "cardManager")), "firstName", array()), "html", null, true);
        echo "</strong>
\t\t<p>
\t\t<h1>
\t\t\tExercice :  ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cardManager"]) ? $context["cardManager"] : $this->getContext($context, "cardManager")), "exerciceId", array()), "html", null, true);
        echo "
\t\t</h1>
\t</section>
\t
\t
\t<span class=\"title\">Catégories (Ordre) : </span>
\t\t";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["cardManager"]) ? $context["cardManager"] : $this->getContext($context, "cardManager")), "categoryOrder", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 23
            echo "\t\t\t";
            echo twig_escape_filter($this->env, $context["category"], "html", null, true);
            echo "
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "<br>
\t<span class=\"title\">Valeurs (Ordre) : ";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["cardManager"]) ? $context["cardManager"] : $this->getContext($context, "cardManager")), "valueOrder", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            echo "</span>
\t\t\t";
            // line 26
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "\t\t\t
\t<section id=\"tables\">
\t\t<table>
\t\t\t<tr>
\t\t\t\t<th colspan=\"2\">Cartes Tirées</th>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Catégorie</th><th>Valeur</th>
\t\t\t</tr>
\t\t\t";
        // line 37
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["cardManager"]) ? $context["cardManager"] : $this->getContext($context, "cardManager")), "cards", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
            // line 38
            echo "\t\t\t<tr><td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["card"], "category", array()), "html", null, true);
            echo "</td><td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["card"], "value", array()), "html", null, true);
            echo "</td></tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['card'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "\t\t</table>
\t\t
\t\t
\t\t<table>
\t\t\t<tr>
\t\t\t\t<th colspan=\"2\">Tri par Catégorie</th>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Catégorie</th><th>Valeur</th>
\t\t\t</tr>
\t\t\t";
        // line 50
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["cardManager"]) ? $context["cardManager"] : $this->getContext($context, "cardManager")), "cardsOrderedByCategory", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
            // line 51
            echo "\t\t\t<tr><td class=\"ordered\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["card"], "category", array()), "html", null, true);
            echo "</td><td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["card"], "value", array()), "html", null, true);
            echo "</td></tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['card'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "\t\t
\t\t
\t\t<table>
\t\t\t<tr>
\t\t\t\t<th colspan=\"2\">Tri par Valeur</th>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Catégorie</th><th>Valeur</th>
\t\t\t</tr>";
        // line 61
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["cardManager"]) ? $context["cardManager"] : $this->getContext($context, "cardManager")), "cardsOrderedByValue", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
            // line 62
            echo "\t\t\t<tr><td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["card"], "category", array()), "html", null, true);
            echo "</td><td class=\"ordered\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["card"], "value", array()), "html", null, true);
            echo "</td></tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['card'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "\t\t\t</table>
\t\t</section>
";
        
        $__internal_d6e10740df27ea595116c0276a61ae104ca80138fcda04e1c05de3dcc31fd3c3->leave($__internal_d6e10740df27ea595116c0276a61ae104ca80138fcda04e1c05de3dcc31fd3c3_prof);

    }

    public function getTemplateName()
    {
        return "BenoualaCardBundle:Card:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 64,  179 => 62,  175 => 61,  165 => 53,  154 => 51,  150 => 50,  138 => 40,  127 => 38,  123 => 37,  112 => 28,  104 => 26,  98 => 25,  95 => 24,  86 => 23,  82 => 22,  73 => 16,  65 => 13,  61 => 12,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
