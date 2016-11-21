<?php

/* JNPlatformBundle:Advert:add.html.twig */
class __TwigTemplate_a4449b2b39194fc7d8f1324bcb00e30814d13ef960017dbb53511d986746db02 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("JNPlatformBundle::layout.html.twig", "JNPlatformBundle:Advert:add.html.twig", 3);
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
        $__internal_53b12049504bfa2651b577b5d5ecb5f8865572cba54389d5d289f926ab8f6730 = $this->env->getExtension("native_profiler");
        $__internal_53b12049504bfa2651b577b5d5ecb5f8865572cba54389d5d289f926ab8f6730->enter($__internal_53b12049504bfa2651b577b5d5ecb5f8865572cba54389d5d289f926ab8f6730_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JNPlatformBundle:Advert:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_53b12049504bfa2651b577b5d5ecb5f8865572cba54389d5d289f926ab8f6730->leave($__internal_53b12049504bfa2651b577b5d5ecb5f8865572cba54389d5d289f926ab8f6730_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_bae6ce87189d840d8a04633639c760da31cfe4bf75c7cc0ed96ce7752104194c = $this->env->getExtension("native_profiler");
        $__internal_bae6ce87189d840d8a04633639c760da31cfe4bf75c7cc0ed96ce7752104194c->enter($__internal_bae6ce87189d840d8a04633639c760da31cfe4bf75c7cc0ed96ce7752104194c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "
  Ajouter une musique à la playlist - ";
        // line 7
        $this->displayParentBlock("title", $context, $blocks);
        echo "

";
        
        $__internal_bae6ce87189d840d8a04633639c760da31cfe4bf75c7cc0ed96ce7752104194c->leave($__internal_bae6ce87189d840d8a04633639c760da31cfe4bf75c7cc0ed96ce7752104194c_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_d382b6ba47645254fcd646789342773b5df92d058dfe695ad8a2574c223792b2 = $this->env->getExtension("native_profiler");
        $__internal_d382b6ba47645254fcd646789342773b5df92d058dfe695ad8a2574c223792b2->enter($__internal_d382b6ba47645254fcd646789342773b5df92d058dfe695ad8a2574c223792b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "

  <h2>Ajouter une musique</h2>


  ";
        // line 18
        echo twig_include($this->env, $context, "JNPlatformBundle:Advert:form.html.twig");
        echo "


  <p>

    Attention : cette musique sera ajoutée directement

    sur la page d'accueil après validation du formulaire.

  </p>
  
  


";
        
        $__internal_d382b6ba47645254fcd646789342773b5df92d058dfe695ad8a2574c223792b2->leave($__internal_d382b6ba47645254fcd646789342773b5df92d058dfe695ad8a2574c223792b2_prof);

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
        return array (  67 => 18,  60 => 13,  54 => 12,  44 => 7,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* */
/* */
/* {% extends "JNPlatformBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/* */
/*   Ajouter une musique à la playlist - {{ parent() }}*/
/* */
/* {% endblock %}*/
/* */
/* */
/* {% block body %}*/
/* */
/* */
/*   <h2>Ajouter une musique</h2>*/
/* */
/* */
/*   {{ include("JNPlatformBundle:Advert:form.html.twig") }}*/
/* */
/* */
/*   <p>*/
/* */
/*     Attention : cette musique sera ajoutée directement*/
/* */
/*     sur la page d'accueil après validation du formulaire.*/
/* */
/*   </p>*/
/*   */
/*   */
/* */
/* */
/* {% endblock %}*/
/* */
/* */
/* */
/* */
/* */
