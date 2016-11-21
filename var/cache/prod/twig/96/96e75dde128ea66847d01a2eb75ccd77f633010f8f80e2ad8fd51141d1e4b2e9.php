<?php

/* JNPlatformBundle::layout.html.twig */
class __TwigTemplate_33f1601c60cc1c989b7a72b9e32634f5f6b81389ae0cc43fbe781f3a13f4ca82 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::layout.html.twig", "JNPlatformBundle::layout.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'jnplatform_body' => array($this, 'block_jnplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2f6037942e6a2d94c585c6689fc20c8fef744c9fb78309c1090d595735406582 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f6037942e6a2d94c585c6689fc20c8fef744c9fb78309c1090d595735406582->enter($__internal_2f6037942e6a2d94c585c6689fc20c8fef744c9fb78309c1090d595735406582_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JNPlatformBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f6037942e6a2d94c585c6689fc20c8fef744c9fb78309c1090d595735406582->leave($__internal_2f6037942e6a2d94c585c6689fc20c8fef744c9fb78309c1090d595735406582_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8fa473b02ddf187ec471c2ba4263b1a249c2d6693d93d51b7faeb7b324d7e722 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fa473b02ddf187ec471c2ba4263b1a249c2d6693d93d51b7faeb7b324d7e722->enter($__internal_8fa473b02ddf187ec471c2ba4263b1a249c2d6693d93d51b7faeb7b324d7e722_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "
  Musiques - ";
        // line 7
        $this->displayParentBlock("title", $context, $blocks);
        echo "

";
        
        $__internal_8fa473b02ddf187ec471c2ba4263b1a249c2d6693d93d51b7faeb7b324d7e722->leave($__internal_8fa473b02ddf187ec471c2ba4263b1a249c2d6693d93d51b7faeb7b324d7e722_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_18f394ae2dc115c556807258f28c6f42e38411e9c022176f1e7e75eed39c1c2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18f394ae2dc115c556807258f28c6f42e38411e9c022176f1e7e75eed39c1c2c->enter($__internal_18f394ae2dc115c556807258f28c6f42e38411e9c022176f1e7e75eed39c1c2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "



  <h1>Musiques</h1>


  <hr>


  ";
        // line 24
        echo "
  ";
        // line 25
        $this->displayBlock('jnplatform_body', $context, $blocks);
        // line 28
        echo "

";
        
        $__internal_18f394ae2dc115c556807258f28c6f42e38411e9c022176f1e7e75eed39c1c2c->leave($__internal_18f394ae2dc115c556807258f28c6f42e38411e9c022176f1e7e75eed39c1c2c_prof);

    }

    // line 25
    public function block_jnplatform_body($context, array $blocks = array())
    {
        $__internal_c585e01787c0c05e53840eea4bb9061c8e84f3f3929fc650636b78b14a4d3eb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c585e01787c0c05e53840eea4bb9061c8e84f3f3929fc650636b78b14a4d3eb8->enter($__internal_c585e01787c0c05e53840eea4bb9061c8e84f3f3929fc650636b78b14a4d3eb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "jnplatform_body"));

        // line 26
        echo "
  ";
        
        $__internal_c585e01787c0c05e53840eea4bb9061c8e84f3f3929fc650636b78b14a4d3eb8->leave($__internal_c585e01787c0c05e53840eea4bb9061c8e84f3f3929fc650636b78b14a4d3eb8_prof);

    }

    public function getTemplateName()
    {
        return "JNPlatformBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 26,  87 => 25,  78 => 28,  76 => 25,  73 => 24,  61 => 13,  55 => 12,  45 => 7,  42 => 6,  36 => 5,  11 => 2,);
    }

    public function getSource()
    {
        return "
{% extends \"::layout.html.twig\" %}


{% block title %}

  Musiques - {{ parent() }}

{% endblock %}


{% block body %}




  <h1>Musiques</h1>


  <hr>


  {# On définit un nouveau bloc, que les vues du bundle pourront remplir #}

  {% block jnplatform_body %}

  {% endblock %}


{% endblock %}

";
    }
}
