<?php

/* JNPlatformBundle:Advert:menu.html.twig */
class __TwigTemplate_ddc5e05e799dae5172b92e45b4b4e1627cb1d9227d61ac5b2ba56fc7fb1927c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b215a8d8231b21bedc95c04b3790cad6487c6a298bdb1ee26ff195f6a2a97d88 = $this->env->getExtension("native_profiler");
        $__internal_b215a8d8231b21bedc95c04b3790cad6487c6a298bdb1ee26ff195f6a2a97d88->enter($__internal_b215a8d8231b21bedc95c04b3790cad6487c6a298bdb1ee26ff195f6a2a97d88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JNPlatformBundle:Advert:menu.html.twig"));

        // line 1
        echo "<!DOCTYPE HTML>


<ul class=\"nav nav-pills nav-stacked\">

  ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listAdverts"]) ? $context["listAdverts"] : $this->getContext($context, "listAdverts")));
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 7
            echo "
    <li>

      <a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("jn_platform_view", array("id" => $this->getAttribute($context["advert"], "id", array()))), "html", null, true);
            echo "\">

        ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "title", array()), "html", null, true);
            echo "

      </a>

    </li>

  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "
</ul>
";
        
        $__internal_b215a8d8231b21bedc95c04b3790cad6487c6a298bdb1ee26ff195f6a2a97d88->leave($__internal_b215a8d8231b21bedc95c04b3790cad6487c6a298bdb1ee26ff195f6a2a97d88_prof);

    }

    public function getTemplateName()
    {
        return "JNPlatformBundle:Advert:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 19,  43 => 12,  38 => 10,  33 => 7,  29 => 6,  22 => 1,);
    }
}
/* <!DOCTYPE HTML>*/
/* */
/* */
/* <ul class="nav nav-pills nav-stacked">*/
/* */
/*   {% for advert in listAdverts %}*/
/* */
/*     <li>*/
/* */
/*       <a href="{{ path('jn_platform_view', {'id': advert.id}) }}">*/
/* */
/*         {{ advert.title }}*/
/* */
/*       </a>*/
/* */
/*     </li>*/
/* */
/*   {% endfor %}*/
/* */
/* </ul>*/
/* */
