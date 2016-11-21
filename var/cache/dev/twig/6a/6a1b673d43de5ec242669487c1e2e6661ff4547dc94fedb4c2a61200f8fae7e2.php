<?php

/* JNPlatformBundle:Advert:add.html.twig */
class __TwigTemplate_47b93387206e9a03b5e12a08b2a48464543de33fe5a70f4cf50b9c5f23f23090 extends Twig_Template
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
        $__internal_edc9eadadcda78671b898eb76ae31e3971f3ea977d08dec890b31265ccebdb6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edc9eadadcda78671b898eb76ae31e3971f3ea977d08dec890b31265ccebdb6f->enter($__internal_edc9eadadcda78671b898eb76ae31e3971f3ea977d08dec890b31265ccebdb6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JNPlatformBundle:Advert:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_edc9eadadcda78671b898eb76ae31e3971f3ea977d08dec890b31265ccebdb6f->leave($__internal_edc9eadadcda78671b898eb76ae31e3971f3ea977d08dec890b31265ccebdb6f_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_83190e99a1e66bb225c58667903e220d7f8edbc0d187f8646969b93fe8b53ae7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83190e99a1e66bb225c58667903e220d7f8edbc0d187f8646969b93fe8b53ae7->enter($__internal_83190e99a1e66bb225c58667903e220d7f8edbc0d187f8646969b93fe8b53ae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "
  Ajouter une musique - ";
        // line 6
        $this->displayParentBlock("title", $context, $blocks);
        echo "

";
        
        $__internal_83190e99a1e66bb225c58667903e220d7f8edbc0d187f8646969b93fe8b53ae7->leave($__internal_83190e99a1e66bb225c58667903e220d7f8edbc0d187f8646969b93fe8b53ae7_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f69de9107a67cad2a47bbc1230f2d49c7edeb9fcb5ce91394102d245f3b87e82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f69de9107a67cad2a47bbc1230f2d49c7edeb9fcb5ce91394102d245f3b87e82->enter($__internal_f69de9107a67cad2a47bbc1230f2d49c7edeb9fcb5ce91394102d245f3b87e82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f69de9107a67cad2a47bbc1230f2d49c7edeb9fcb5ce91394102d245f3b87e82->leave($__internal_f69de9107a67cad2a47bbc1230f2d49c7edeb9fcb5ce91394102d245f3b87e82_prof);

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
