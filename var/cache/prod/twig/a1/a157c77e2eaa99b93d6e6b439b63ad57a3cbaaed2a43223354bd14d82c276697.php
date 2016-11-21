<?php

/* JNPlatformBundle:Advert:edit.html.twig */
class __TwigTemplate_8698bcb7f4ff9fac90eb168eefac08d17490c7c10c6c01e3da1402cfda12978b extends Twig_Template
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
        $__internal_1fe1cdca8212b3eb18202f52e15d2e907ed2ca7fe8af67ca7472af14973e6940 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fe1cdca8212b3eb18202f52e15d2e907ed2ca7fe8af67ca7472af14973e6940->enter($__internal_1fe1cdca8212b3eb18202f52e15d2e907ed2ca7fe8af67ca7472af14973e6940_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JNPlatformBundle:Advert:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1fe1cdca8212b3eb18202f52e15d2e907ed2ca7fe8af67ca7472af14973e6940->leave($__internal_1fe1cdca8212b3eb18202f52e15d2e907ed2ca7fe8af67ca7472af14973e6940_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_10ce4e9c4ed70b0cc197e5ce77ba693b1655a270987ff47d3af833ca55522f43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10ce4e9c4ed70b0cc197e5ce77ba693b1655a270987ff47d3af833ca55522f43->enter($__internal_10ce4e9c4ed70b0cc197e5ce77ba693b1655a270987ff47d3af833ca55522f43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "
  Modifier la musique - ";
        // line 6
        $this->displayParentBlock("title", $context, $blocks);
        echo "

";
        
        $__internal_10ce4e9c4ed70b0cc197e5ce77ba693b1655a270987ff47d3af833ca55522f43->leave($__internal_10ce4e9c4ed70b0cc197e5ce77ba693b1655a270987ff47d3af833ca55522f43_prof);

    }

    // line 11
    public function block_jnplatform_body($context, array $blocks = array())
    {
        $__internal_111f1ccc3224b2c84d641d2ee20fdc6e1cea666cca81ade0fcb3a543030bdf8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_111f1ccc3224b2c84d641d2ee20fdc6e1cea666cca81ade0fcb3a543030bdf8d->enter($__internal_111f1ccc3224b2c84d641d2ee20fdc6e1cea666cca81ade0fcb3a543030bdf8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "jnplatform_body"));

        // line 12
        echo "

  <h2>Modifier une musique</h2>


  ";
        // line 17
        echo twig_include($this->env, $context, "JNPlatformBundle:Advert:form.html.twig");
        echo "


  


  <p>

    <a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jn_platform_view", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">

      <i class=\"glyphicon glyphicon-chevron-left\"></i>

      Retour à la liste

    </a>

  </p>


";
        
        $__internal_111f1ccc3224b2c84d641d2ee20fdc6e1cea666cca81ade0fcb3a543030bdf8d->leave($__internal_111f1ccc3224b2c84d641d2ee20fdc6e1cea666cca81ade0fcb3a543030bdf8d_prof);

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
        return array (  78 => 25,  67 => 17,  60 => 12,  54 => 11,  44 => 6,  41 => 5,  35 => 4,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"JNPlatformBundle::layout.html.twig\" %}


{% block title %}

  Modifier la musique - {{ parent() }}

{% endblock %}


{% block jnplatform_body %}


  <h2>Modifier une musique</h2>


  {{ include(\"JNPlatformBundle:Advert:form.html.twig\") }}


  


  <p>

    <a href=\"{{ path('jn_platform_view', {'id': advert.id}) }}\" class=\"btn btn-default\">

      <i class=\"glyphicon glyphicon-chevron-left\"></i>

      Retour à la liste

    </a>

  </p>


{% endblock %}
";
    }
}
