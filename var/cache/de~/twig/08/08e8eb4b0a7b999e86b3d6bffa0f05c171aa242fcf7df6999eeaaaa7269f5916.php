<?php

/* JNPlatformBundle:Advert:edit.html.twig */
class __TwigTemplate_f48ff5e4427bc9d3edae75856ec71c60e02036b9a877d9d46f14f54b3b15cab0 extends Twig_Template
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
        $__internal_ae5e3b9805676d08f32462fae1981e56a8472992a22537ca7ddf0507f49675b2 = $this->env->getExtension("native_profiler");
        $__internal_ae5e3b9805676d08f32462fae1981e56a8472992a22537ca7ddf0507f49675b2->enter($__internal_ae5e3b9805676d08f32462fae1981e56a8472992a22537ca7ddf0507f49675b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JNPlatformBundle:Advert:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae5e3b9805676d08f32462fae1981e56a8472992a22537ca7ddf0507f49675b2->leave($__internal_ae5e3b9805676d08f32462fae1981e56a8472992a22537ca7ddf0507f49675b2_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_439e57ac7f63a305f7635c7b75e7b7f87d4b126a5199e931f208abcd152f3065 = $this->env->getExtension("native_profiler");
        $__internal_439e57ac7f63a305f7635c7b75e7b7f87d4b126a5199e931f208abcd152f3065->enter($__internal_439e57ac7f63a305f7635c7b75e7b7f87d4b126a5199e931f208abcd152f3065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "
  Modifier la playlist - ";
        // line 6
        $this->displayParentBlock("title", $context, $blocks);
        echo "

";
        
        $__internal_439e57ac7f63a305f7635c7b75e7b7f87d4b126a5199e931f208abcd152f3065->leave($__internal_439e57ac7f63a305f7635c7b75e7b7f87d4b126a5199e931f208abcd152f3065_prof);

    }

    // line 11
    public function block_jnplatform_body($context, array $blocks = array())
    {
        $__internal_92cd468d6b86f9c3b7767a38cb2034bd044679411070af2d67b31ac446cd9589 = $this->env->getExtension("native_profiler");
        $__internal_92cd468d6b86f9c3b7767a38cb2034bd044679411070af2d67b31ac446cd9589->enter($__internal_92cd468d6b86f9c3b7767a38cb2034bd044679411070af2d67b31ac446cd9589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "jnplatform_body"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("jn_platform_view", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">

      <i class=\"glyphicon glyphicon-chevron-left\"></i>

      Retour à la playlist

    </a>

  </p>


";
        
        $__internal_92cd468d6b86f9c3b7767a38cb2034bd044679411070af2d67b31ac446cd9589->leave($__internal_92cd468d6b86f9c3b7767a38cb2034bd044679411070af2d67b31ac446cd9589_prof);

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
}
/* {% extends "JNPlatformBundle::layout.html.twig" %}*/
/* */
/* */
/* {% block title %}*/
/* */
/*   Modifier la playlist - {{ parent() }}*/
/* */
/* {% endblock %}*/
/* */
/* */
/* {% block jnplatform_body %}*/
/* */
/* */
/*   <h2>Modifier une playlist</h2>*/
/* */
/* */
/*   {{ include("JNPlatformBundle:Advert:form.html.twig") }}*/
/* */
/* */
/*   <p>*/
/* */
/*     Vous éditez une musique déjà existante.*/
/* */
/*   </p>*/
/* */
/* */
/*   <p>*/
/* */
/*     <a href="{{ path('jn_platform_view', {'id': advert.id}) }}" class="btn btn-default">*/
/* */
/*       <i class="glyphicon glyphicon-chevron-left"></i>*/
/* */
/*       Retour à la playlist*/
/* */
/*     </a>*/
/* */
/*   </p>*/
/* */
/* */
/* {% endblock %}*/
/* */
