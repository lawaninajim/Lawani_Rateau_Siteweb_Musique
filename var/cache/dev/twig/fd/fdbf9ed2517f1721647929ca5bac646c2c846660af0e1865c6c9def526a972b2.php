<?php

/* JNPlatformBundle:Advert:menu.html.twig */
class __TwigTemplate_363b15da15e42c3ab82e307b39d590f0bf75c87071a144de3d11f2c09cebc7f4 extends Twig_Template
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
        $__internal_ae42e5ab778f47861287dc0b8d0a23489ef92172c746b8666829874637f2014b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae42e5ab778f47861287dc0b8d0a23489ef92172c746b8666829874637f2014b->enter($__internal_ae42e5ab778f47861287dc0b8d0a23489ef92172c746b8666829874637f2014b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JNPlatformBundle:Advert:menu.html.twig"));

        // line 1
        echo "<!DOCTYPE HTML>


<ul class=\"nav nav-pills nav-stacked\">

  ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listPlaylists"]) ? $context["listPlaylists"] : $this->getContext($context, "listPlaylists")));
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 7
            echo "
    <li>

      <a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jn_platform_view", array("id" => $this->getAttribute($context["advert"], "id", array()))), "html", null, true);
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
        
        $__internal_ae42e5ab778f47861287dc0b8d0a23489ef92172c746b8666829874637f2014b->leave($__internal_ae42e5ab778f47861287dc0b8d0a23489ef92172c746b8666829874637f2014b_prof);

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

    public function getSource()
    {
        return "<!DOCTYPE HTML>


<ul class=\"nav nav-pills nav-stacked\">

  {% for advert in listPlaylists %}

    <li>

      <a href=\"{{ path('jn_platform_view', {'id': advert.id}) }}\">

        {{ advert.title }}

      </a>

    </li>

  {% endfor %}

</ul>
";
    }
}
