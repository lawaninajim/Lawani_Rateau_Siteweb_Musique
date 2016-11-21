<?php

/* JNPlatformBundle:Advert:view.html.twig */
class __TwigTemplate_7c6b4e285687298a0cef18dad2213437ecd9991101b2696c21add538502f012c extends Twig_Template
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
        $__internal_9d3f8d281db644f7f89d13f1e78106dcb23efbc4d1fc7824619d612199055c0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d3f8d281db644f7f89d13f1e78106dcb23efbc4d1fc7824619d612199055c0f->enter($__internal_9d3f8d281db644f7f89d13f1e78106dcb23efbc4d1fc7824619d612199055c0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JNPlatformBundle:Advert:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d3f8d281db644f7f89d13f1e78106dcb23efbc4d1fc7824619d612199055c0f->leave($__internal_9d3f8d281db644f7f89d13f1e78106dcb23efbc4d1fc7824619d612199055c0f_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_2db4935bb004284642544e044bd6194600a71f64103b5f043c9c4c90fd8b09fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2db4935bb004284642544e044bd6194600a71f64103b5f043c9c4c90fd8b09fa->enter($__internal_2db4935bb004284642544e044bd6194600a71f64103b5f043c9c4c90fd8b09fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "
  Musiques - ";
        // line 6
        $this->displayParentBlock("title", $context, $blocks);
        echo "

";
        
        $__internal_2db4935bb004284642544e044bd6194600a71f64103b5f043c9c4c90fd8b09fa->leave($__internal_2db4935bb004284642544e044bd6194600a71f64103b5f043c9c4c90fd8b09fa_prof);

    }

    // line 11
    public function block_jnplatform_body($context, array $blocks = array())
    {
        $__internal_2b74a3a95ab13ffac032d982e0bfefb51da0ece29ace8d945b11185677ec2e70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b74a3a95ab13ffac032d982e0bfefb51da0ece29ace8d945b11185677ec2e70->enter($__internal_2b74a3a95ab13ffac032d982e0bfefb51da0ece29ace8d945b11185677ec2e70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "jnplatform_body"));

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

  <img 

  src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "image", array()), "webPath", array())), "html", null, true);
        echo "\"

  alt=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "image", array()), "alt", array()), "html", null, true);
        echo "\"
  width = \"370\"
  height = \"310\"

/>
  <p>

    <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jn_platform_home");
        echo "\" class=\"btn btn-default\">

      <i class=\"glyphicon glyphicon-chevron-left\"></i>

      Retour à la liste

    </a>

    <a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jn_platform_edit", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">

      <i class=\"glyphicon glyphicon-edit\"></i>

      Modifier 

    </a>

    <a href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jn_platform_delete", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger\">

      <i class=\"glyphicon glyphicon-trash\"></i>

      Supprimer la musique
    </a>

  </p>


";
        
        $__internal_2b74a3a95ab13ffac032d982e0bfefb51da0ece29ace8d945b11185677ec2e70->leave($__internal_2b74a3a95ab13ffac032d982e0bfefb51da0ece29ace8d945b11185677ec2e70_prof);

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
        return array (  125 => 52,  114 => 44,  103 => 36,  93 => 29,  88 => 27,  79 => 21,  69 => 16,  64 => 14,  60 => 12,  54 => 11,  44 => 6,  41 => 5,  35 => 4,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"JNPlatformBundle::layout.html.twig\" %}


{% block title %}

  Musiques - {{ parent() }}

{% endblock %}


{% block jnplatform_body %}


  <h2>{{ advert.title }}</h2>

  <i>Par {{ advert.author }}, le {{ advert.date|date('d/m/Y') }}</i>


  <div class=\"well\">

    {{ advert.content }}

  </div>

  <img 

  src=\"{{ asset(advert.image.webPath) }}\"

  alt=\"{{ advert.image.alt }}\"
  width = \"370\"
  height = \"310\"

/>
  <p>

    <a href=\"{{ path('jn_platform_home') }}\" class=\"btn btn-default\">

      <i class=\"glyphicon glyphicon-chevron-left\"></i>

      Retour à la liste

    </a>

    <a href=\"{{ path('jn_platform_edit', {'id': advert.id}) }}\" class=\"btn btn-default\">

      <i class=\"glyphicon glyphicon-edit\"></i>

      Modifier 

    </a>

    <a href=\"{{ path('jn_platform_delete', {'id': advert.id}) }}\" class=\"btn btn-danger\">

      <i class=\"glyphicon glyphicon-trash\"></i>

      Supprimer la musique
    </a>

  </p>


{% endblock %}
";
    }
}
