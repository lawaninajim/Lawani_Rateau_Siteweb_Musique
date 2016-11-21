<?php

/* JNPlatformBundle:Advert:index.html.twig */
class __TwigTemplate_9d479952ddc3122f27d0291e45db4379cdbe88308d21e65b1d50b065308c709b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("JNPlatformBundle::layout.html.twig", "JNPlatformBundle:Advert:index.html.twig", 2);
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
        $__internal_1362d8299bd9204b3faa9d426a656398fb166791bcbe1b3dd8675f26cf075ef6 = $this->env->getExtension("native_profiler");
        $__internal_1362d8299bd9204b3faa9d426a656398fb166791bcbe1b3dd8675f26cf075ef6->enter($__internal_1362d8299bd9204b3faa9d426a656398fb166791bcbe1b3dd8675f26cf075ef6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JNPlatformBundle:Advert:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1362d8299bd9204b3faa9d426a656398fb166791bcbe1b3dd8675f26cf075ef6->leave($__internal_1362d8299bd9204b3faa9d426a656398fb166791bcbe1b3dd8675f26cf075ef6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9a3a2ca7f3d09554611aa26642ce0ff3e7cfccbd0ace10dc5b6ee2ae68ff0f2d = $this->env->getExtension("native_profiler");
        $__internal_9a3a2ca7f3d09554611aa26642ce0ff3e7cfccbd0ace10dc5b6ee2ae68ff0f2d->enter($__internal_9a3a2ca7f3d09554611aa26642ce0ff3e7cfccbd0ace10dc5b6ee2ae68ff0f2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "
  Accueil - ";
        // line 7
        $this->displayParentBlock("title", $context, $blocks);
        echo "

";
        
        $__internal_9a3a2ca7f3d09554611aa26642ce0ff3e7cfccbd0ace10dc5b6ee2ae68ff0f2d->leave($__internal_9a3a2ca7f3d09554611aa26642ce0ff3e7cfccbd0ace10dc5b6ee2ae68ff0f2d_prof);

    }

    // line 12
    public function block_jnplatform_body($context, array $blocks = array())
    {
        $__internal_6417734eae83f2fefce093b4729f90a9984f462274949314eea761b134413b9a = $this->env->getExtension("native_profiler");
        $__internal_6417734eae83f2fefce093b4729f90a9984f462274949314eea761b134413b9a->enter($__internal_6417734eae83f2fefce093b4729f90a9984f462274949314eea761b134413b9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "jnplatform_body"));

        // line 13
        echo "

  <h2>Liste des annonces</h2>


  <ul>

    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listAdverts"]) ? $context["listAdverts"] : $this->getContext($context, "listAdverts")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 21
            echo "
      <li>

        <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("jn_platform_view", array("id" => $this->getAttribute($context["advert"], "id", array()))), "html", null, true);
            echo "\">

          ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "title", array()), "html", null, true);
            echo "

        </a>

        par ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "author", array()), "html", null, true);
            echo ",

        le ";
            // line 32
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["advert"], "date", array()), "d/m/Y"), "html", null, true);
            echo "

      </li>

    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 37
            echo "
      <li>Pas (encore !) d'annonces</li>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "
  </ul>


";
        
        $__internal_6417734eae83f2fefce093b4729f90a9984f462274949314eea761b134413b9a->leave($__internal_6417734eae83f2fefce093b4729f90a9984f462274949314eea761b134413b9a_prof);

    }

    public function getTemplateName()
    {
        return "JNPlatformBundle:Advert:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 41,  106 => 37,  96 => 32,  91 => 30,  84 => 26,  79 => 24,  74 => 21,  69 => 20,  60 => 13,  54 => 12,  44 => 7,  41 => 6,  35 => 5,  11 => 2,);
    }
}
/* */
/* {% extends "JNPlatformBundle::layout.html.twig" %}*/
/* */
/* */
/* {% block title %}*/
/* */
/*   Accueil - {{ parent() }}*/
/* */
/* {% endblock %}*/
/* */
/* */
/* {% block jnplatform_body %}*/
/* */
/* */
/*   <h2>Liste des annonces</h2>*/
/* */
/* */
/*   <ul>*/
/* */
/*     {% for advert in listAdverts %}*/
/* */
/*       <li>*/
/* */
/*         <a href="{{ path('jn_platform_view', {'id': advert.id}) }}">*/
/* */
/*           {{ advert.title }}*/
/* */
/*         </a>*/
/* */
/*         par {{ advert.author }},*/
/* */
/*         le {{ advert.date|date('d/m/Y') }}*/
/* */
/*       </li>*/
/* */
/*     {% else %}*/
/* */
/*       <li>Pas (encore !) d'annonces</li>*/
/* */
/*     {% endfor %}*/
/* */
/*   </ul>*/
/* */
/* */
/* {% endblock %}*/
/*  */
/* */
/* */
