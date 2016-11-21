<?php

/* JNPlatformBundle:Advert:view.html.twig */
class __TwigTemplate_f7ec72b423893dd8537523dd6e5604df198991a4550cefa46ac01f790b969efb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("JNPlatformBundle::layout.html.twig", "JNPlatformBundle:Advert:view.html.twig", 1);
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
        $__internal_2385eab03bc9b44a4c859cf6b7d8c2d5a014569d359c38f33e85aef60b7dcafd = $this->env->getExtension("native_profiler");
        $__internal_2385eab03bc9b44a4c859cf6b7d8c2d5a014569d359c38f33e85aef60b7dcafd->enter($__internal_2385eab03bc9b44a4c859cf6b7d8c2d5a014569d359c38f33e85aef60b7dcafd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JNPlatformBundle:Advert:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2385eab03bc9b44a4c859cf6b7d8c2d5a014569d359c38f33e85aef60b7dcafd->leave($__internal_2385eab03bc9b44a4c859cf6b7d8c2d5a014569d359c38f33e85aef60b7dcafd_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_4d74e17086d12bf95181b467eb32d4d3ce8db34bc43b1bad310ecf32a768ae28 = $this->env->getExtension("native_profiler");
        $__internal_4d74e17086d12bf95181b467eb32d4d3ce8db34bc43b1bad310ecf32a768ae28->enter($__internal_4d74e17086d12bf95181b467eb32d4d3ce8db34bc43b1bad310ecf32a768ae28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "
  Lecture d'une annonce - ";
        // line 6
        $this->displayParentBlock("title", $context, $blocks);
        echo "

";
        
        $__internal_4d74e17086d12bf95181b467eb32d4d3ce8db34bc43b1bad310ecf32a768ae28->leave($__internal_4d74e17086d12bf95181b467eb32d4d3ce8db34bc43b1bad310ecf32a768ae28_prof);

    }

    // line 11
    public function block_jnplatform_body($context, array $blocks = array())
    {
        $__internal_6cab5066a4cb8f420ac6fc1c7f05d686815ae721d422b616fb28acc5e00317b5 = $this->env->getExtension("native_profiler");
        $__internal_6cab5066a4cb8f420ac6fc1c7f05d686815ae721d422b616fb28acc5e00317b5->enter($__internal_6cab5066a4cb8f420ac6fc1c7f05d686815ae721d422b616fb28acc5e00317b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "jnplatform_body"));

        // line 12
        echo "

  <h2>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "title", array()), "html", null, true);
        echo "</h2>

  <i>Par ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "author", array()), "html", null, true);
        echo ", le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "date", array()), "d/m/Y"), "html", null, true);
        echo "</i>


  <div class=\"well\">

    ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "content", array()), "html", null, true);
        echo "

  </div>


  <p>

    <a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("jn_platform_home");
        echo "\" class=\"btn btn-default\">

      <i class=\"glyphicon glyphicon-chevron-left\"></i>

      Retour à la liste

    </a>

    <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("jn_platform_edit", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">

      <i class=\"glyphicon glyphicon-edit\"></i>

      Modifier l'annonce

    </a>

    <a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("jn_platform_delete", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger\">

      <i class=\"glyphicon glyphicon-trash\"></i>

      Supprimer l'annonce

    </a>

  </p>


";
        
        $__internal_6cab5066a4cb8f420ac6fc1c7f05d686815ae721d422b616fb28acc5e00317b5->leave($__internal_6cab5066a4cb8f420ac6fc1c7f05d686815ae721d422b616fb28acc5e00317b5_prof);

    }

    public function getTemplateName()
    {
        return "JNPlatformBundle:Advert:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 44,  100 => 36,  89 => 28,  79 => 21,  69 => 16,  64 => 14,  60 => 12,  54 => 11,  44 => 6,  41 => 5,  35 => 4,  11 => 1,);
    }
}
/* {% extends "JNPlatformBundle::layout.html.twig" %}*/
/* */
/* */
/* {% block title %}*/
/* */
/*   Lecture d'une annonce - {{ parent() }}*/
/* */
/* {% endblock %}*/
/* */
/* */
/* {% block jnplatform_body %}*/
/* */
/* */
/*   <h2>{{ advert.title }}</h2>*/
/* */
/*   <i>Par {{ advert.author }}, le {{ advert.date|date('d/m/Y') }}</i>*/
/* */
/* */
/*   <div class="well">*/
/* */
/*     {{ advert.content }}*/
/* */
/*   </div>*/
/* */
/* */
/*   <p>*/
/* */
/*     <a href="{{ path('jn_platform_home') }}" class="btn btn-default">*/
/* */
/*       <i class="glyphicon glyphicon-chevron-left"></i>*/
/* */
/*       Retour à la liste*/
/* */
/*     </a>*/
/* */
/*     <a href="{{ path('jn_platform_edit', {'id': advert.id}) }}" class="btn btn-default">*/
/* */
/*       <i class="glyphicon glyphicon-edit"></i>*/
/* */
/*       Modifier l'annonce*/
/* */
/*     </a>*/
/* */
/*     <a href="{{ path('jn_platform_delete', {'id': advert.id}) }}" class="btn btn-danger">*/
/* */
/*       <i class="glyphicon glyphicon-trash"></i>*/
/* */
/*       Supprimer l'annonce*/
/* */
/*     </a>*/
/* */
/*   </p>*/
/* */
/* */
/* {% endblock %}*/
/* */
