<?php

/* JNPlatformBundle:Advert:edit.html.twig */
class __TwigTemplate_c0d8f60a3f11306bc003c0315bea2b013617272cd472a4c621d9a229cd43ca49 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("JNPlatformBundle::layout.html.twig", "JNPlatformBundle:Advert:edit.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'jnplatform_body' => array($this, 'block_jnplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "JNPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_547870a81281b07eba0269e803b95d4f0f923deae7aef90a311320cb87f32101 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_547870a81281b07eba0269e803b95d4f0f923deae7aef90a311320cb87f32101->enter($__internal_547870a81281b07eba0269e803b95d4f0f923deae7aef90a311320cb87f32101_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JNPlatformBundle:Advert:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_547870a81281b07eba0269e803b95d4f0f923deae7aef90a311320cb87f32101->leave($__internal_547870a81281b07eba0269e803b95d4f0f923deae7aef90a311320cb87f32101_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_7a556cdb6d0fb8a5ecf0ff30c8cc1192770839046e00fbb246f86a81b8a64325 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a556cdb6d0fb8a5ecf0ff30c8cc1192770839046e00fbb246f86a81b8a64325->enter($__internal_7a556cdb6d0fb8a5ecf0ff30c8cc1192770839046e00fbb246f86a81b8a64325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "
  Modifier la playlist - ";
        // line 6
        $this->displayParentBlock("title", $context, $blocks);
        echo "

";
        
        $__internal_7a556cdb6d0fb8a5ecf0ff30c8cc1192770839046e00fbb246f86a81b8a64325->leave($__internal_7a556cdb6d0fb8a5ecf0ff30c8cc1192770839046e00fbb246f86a81b8a64325_prof);

    }

    // line 11
    public function block_jnplatform_body($context, array $blocks = array())
    {
        $__internal_cc35c08db97526a93e75273e367dbddfb41d4b5acf814c23da1bc61f1a049add = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc35c08db97526a93e75273e367dbddfb41d4b5acf814c23da1bc61f1a049add->enter($__internal_cc35c08db97526a93e75273e367dbddfb41d4b5acf814c23da1bc61f1a049add_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "jnplatform_body"));

        // line 12
        echo "

  <h2>Modifier une playlist</h2>


  ";
        // line 17
        echo twig_include($this->env, $context, "JNPlatformBundle:Advert:form.html.twig");
        echo "


  <p>

    Vous éditez une musique déjà existante.

  </p>


  <p>

    <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jn_platform_view", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">

      <i class=\"glyphicon glyphicon-chevron-left\"></i>

      Retour à la playlist

    </a>

  </p>


";
        
        $__internal_cc35c08db97526a93e75273e367dbddfb41d4b5acf814c23da1bc61f1a049add->leave($__internal_cc35c08db97526a93e75273e367dbddfb41d4b5acf814c23da1bc61f1a049add_prof);

    }

    public function getTemplateName()
    {
        return "JNPlatformBundle:Advert:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 29,  67 => 17,  60 => 12,  54 => 11,  44 => 6,  41 => 5,  35 => 4,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"JNPlatformBundle::layout.html.twig\" %}


{% block title %}

  Modifier la playlist - {{ parent() }}

{% endblock %}


{% block jnplatform_body %}


  <h2>Modifier une playlist</h2>


  {{ include(\"JNPlatformBundle:Advert:form.html.twig\") }}


  <p>

    Vous éditez une musique déjà existante.

  </p>


  <p>

    <a href=\"{{ path('jn_platform_view', {'id': advert.id}) }}\" class=\"btn btn-default\">

      <i class=\"glyphicon glyphicon-chevron-left\"></i>

      Retour à la playlist

    </a>

  </p>


{% endblock %}
";
    }
}
