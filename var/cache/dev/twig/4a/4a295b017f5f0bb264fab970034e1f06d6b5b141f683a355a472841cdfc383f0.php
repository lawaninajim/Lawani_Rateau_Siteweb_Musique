<?php

/* JNPlatformBundle::layout.html.twig */
class __TwigTemplate_6f045a1edd17eee2b9c7d81b198a24d3b85f45157c446b8531392d2fb84f931d extends Twig_Template
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
        $__internal_ceca2fa4a84d35d74c93485b3ffa8c4ff55f296810047d168f2097bf9eb4a6f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ceca2fa4a84d35d74c93485b3ffa8c4ff55f296810047d168f2097bf9eb4a6f6->enter($__internal_ceca2fa4a84d35d74c93485b3ffa8c4ff55f296810047d168f2097bf9eb4a6f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JNPlatformBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ceca2fa4a84d35d74c93485b3ffa8c4ff55f296810047d168f2097bf9eb4a6f6->leave($__internal_ceca2fa4a84d35d74c93485b3ffa8c4ff55f296810047d168f2097bf9eb4a6f6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_96828b68d9415155985de22d7784a2a342fa0ddae29085e9fb3a2e687d9f5995 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96828b68d9415155985de22d7784a2a342fa0ddae29085e9fb3a2e687d9f5995->enter($__internal_96828b68d9415155985de22d7784a2a342fa0ddae29085e9fb3a2e687d9f5995_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "
  Musiques - ";
        // line 7
        $this->displayParentBlock("title", $context, $blocks);
        echo "

";
        
        $__internal_96828b68d9415155985de22d7784a2a342fa0ddae29085e9fb3a2e687d9f5995->leave($__internal_96828b68d9415155985de22d7784a2a342fa0ddae29085e9fb3a2e687d9f5995_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_71c36c1c8558c88d925e1fcb776f1be6f659146ee5afeef4373a762ad07da1bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71c36c1c8558c88d925e1fcb776f1be6f659146ee5afeef4373a762ad07da1bc->enter($__internal_71c36c1c8558c88d925e1fcb776f1be6f659146ee5afeef4373a762ad07da1bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_71c36c1c8558c88d925e1fcb776f1be6f659146ee5afeef4373a762ad07da1bc->leave($__internal_71c36c1c8558c88d925e1fcb776f1be6f659146ee5afeef4373a762ad07da1bc_prof);

    }

    // line 25
    public function block_jnplatform_body($context, array $blocks = array())
    {
        $__internal_ca3e93ee80601771274a2c8cbebbe7a5716d4c2660dee8452f2e16aaed7ae1fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca3e93ee80601771274a2c8cbebbe7a5716d4c2660dee8452f2e16aaed7ae1fa->enter($__internal_ca3e93ee80601771274a2c8cbebbe7a5716d4c2660dee8452f2e16aaed7ae1fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "jnplatform_body"));

        // line 26
        echo "
  ";
        
        $__internal_ca3e93ee80601771274a2c8cbebbe7a5716d4c2660dee8452f2e16aaed7ae1fa->leave($__internal_ca3e93ee80601771274a2c8cbebbe7a5716d4c2660dee8452f2e16aaed7ae1fa_prof);

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
