<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_4792e4cff01e4ccfbb2dcc321635dd3f561cdd987f3e549aaec7643fd96ca74b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c5aa8c932318ee4b62d1c251ed1f1f5fc04947e0079c43e366d7a85280f7172c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5aa8c932318ee4b62d1c251ed1f1f5fc04947e0079c43e366d7a85280f7172c->enter($__internal_c5aa8c932318ee4b62d1c251ed1f1f5fc04947e0079c43e366d7a85280f7172c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c5aa8c932318ee4b62d1c251ed1f1f5fc04947e0079c43e366d7a85280f7172c->leave($__internal_c5aa8c932318ee4b62d1c251ed1f1f5fc04947e0079c43e366d7a85280f7172c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8fdeac961f4d06d3ffdbe3a8db474082cb382c783abb65db58baf5b315b47bed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fdeac961f4d06d3ffdbe3a8db474082cb382c783abb65db58baf5b315b47bed->enter($__internal_8fdeac961f4d06d3ffdbe3a8db474082cb382c783abb65db58baf5b315b47bed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_8fdeac961f4d06d3ffdbe3a8db474082cb382c783abb65db58baf5b315b47bed->leave($__internal_8fdeac961f4d06d3ffdbe3a8db474082cb382c783abb65db58baf5b315b47bed_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_59b757b51ca151623e29b60540b9ca5ee7c52169666eda37509dd7625fbac841 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59b757b51ca151623e29b60540b9ca5ee7c52169666eda37509dd7625fbac841->enter($__internal_59b757b51ca151623e29b60540b9ca5ee7c52169666eda37509dd7625fbac841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_59b757b51ca151623e29b60540b9ca5ee7c52169666eda37509dd7625fbac841->leave($__internal_59b757b51ca151623e29b60540b9ca5ee7c52169666eda37509dd7625fbac841_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_057520c8cd6fa80e375c4cf59076af18fc0f9833796c6ea4300ee3f44e543372 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_057520c8cd6fa80e375c4cf59076af18fc0f9833796c6ea4300ee3f44e543372->enter($__internal_057520c8cd6fa80e375c4cf59076af18fc0f9833796c6ea4300ee3f44e543372_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_057520c8cd6fa80e375c4cf59076af18fc0f9833796c6ea4300ee3f44e543372->leave($__internal_057520c8cd6fa80e375c4cf59076af18fc0f9833796c6ea4300ee3f44e543372_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
";
    }
}
