<?php

/* JNPlatformBundle:Advert:add.html.twig */
class __TwigTemplate_0a4cc468c0750fe688719b51bd7f717caeb1968ca9b226fecdf5958489a8454f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("JNPlatformBundle::layout.html.twig", "JNPlatformBundle:Advert:add.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "JNPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c81b6948f64f9e26d4f21266d7cd3f7851b8aed95c105f017ab902cf72659b30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c81b6948f64f9e26d4f21266d7cd3f7851b8aed95c105f017ab902cf72659b30->enter($__internal_c81b6948f64f9e26d4f21266d7cd3f7851b8aed95c105f017ab902cf72659b30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JNPlatformBundle:Advert:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c81b6948f64f9e26d4f21266d7cd3f7851b8aed95c105f017ab902cf72659b30->leave($__internal_c81b6948f64f9e26d4f21266d7cd3f7851b8aed95c105f017ab902cf72659b30_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_c421d7a35d91d6c4e4d9f0de46893298b90782c635db8b8b33b80c3a90668fa1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c421d7a35d91d6c4e4d9f0de46893298b90782c635db8b8b33b80c3a90668fa1->enter($__internal_c421d7a35d91d6c4e4d9f0de46893298b90782c635db8b8b33b80c3a90668fa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "
  Ajouter une musique - ";
        // line 6
        $this->displayParentBlock("title", $context, $blocks);
        echo "

";
        
        $__internal_c421d7a35d91d6c4e4d9f0de46893298b90782c635db8b8b33b80c3a90668fa1->leave($__internal_c421d7a35d91d6c4e4d9f0de46893298b90782c635db8b8b33b80c3a90668fa1_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c3565b902ad9a9bd87522c18ce895eee1aac4eb40d17a6cabf3e8ffbab1959e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3565b902ad9a9bd87522c18ce895eee1aac4eb40d17a6cabf3e8ffbab1959e3->enter($__internal_c3565b902ad9a9bd87522c18ce895eee1aac4eb40d17a6cabf3e8ffbab1959e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "

  <h2>Ajouter une musique</h2>


  ";
        // line 17
        echo twig_include($this->env, $context, "JNPlatformBundle:Advert:form.html.twig");
        echo "


  <p>

    Attention : cette musique sera ajoutée directement

    sur la page d'accueil après validation du formulaire.

  </p>
  
  


";
        
        $__internal_c3565b902ad9a9bd87522c18ce895eee1aac4eb40d17a6cabf3e8ffbab1959e3->leave($__internal_c3565b902ad9a9bd87522c18ce895eee1aac4eb40d17a6cabf3e8ffbab1959e3_prof);

    }

    public function getTemplateName()
    {
        return "JNPlatformBundle:Advert:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 17,  60 => 12,  54 => 11,  44 => 6,  41 => 5,  35 => 4,  11 => 2,);
    }

    public function getSource()
    {
        return "
{% extends \"JNPlatformBundle::layout.html.twig\" %}

{% block title %}

  Ajouter une musique - {{ parent() }}

{% endblock %}


{% block body %}


  <h2>Ajouter une musique</h2>


  {{ include(\"JNPlatformBundle:Advert:form.html.twig\") }}


  <p>

    Attention : cette musique sera ajoutée directement

    sur la page d'accueil après validation du formulaire.

  </p>
  
  


{% endblock %}




";
    }
}
