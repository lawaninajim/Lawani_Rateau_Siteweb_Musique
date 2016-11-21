<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_59a26ba60dcf244f3177809668ccd27067f489b76c13d1f4bba1f24c47856230 extends Twig_Template
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
        $__internal_1a89e61a077601db9b4fbcab9047e3a8061a7dcdc2accac9087638ce28bada71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a89e61a077601db9b4fbcab9047e3a8061a7dcdc2accac9087638ce28bada71->enter($__internal_1a89e61a077601db9b4fbcab9047e3a8061a7dcdc2accac9087638ce28bada71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a89e61a077601db9b4fbcab9047e3a8061a7dcdc2accac9087638ce28bada71->leave($__internal_1a89e61a077601db9b4fbcab9047e3a8061a7dcdc2accac9087638ce28bada71_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_065cf98b0e88a4a799376690be087df9da5c23e6681c946673616439a3370bb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_065cf98b0e88a4a799376690be087df9da5c23e6681c946673616439a3370bb7->enter($__internal_065cf98b0e88a4a799376690be087df9da5c23e6681c946673616439a3370bb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_065cf98b0e88a4a799376690be087df9da5c23e6681c946673616439a3370bb7->leave($__internal_065cf98b0e88a4a799376690be087df9da5c23e6681c946673616439a3370bb7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a84a5784833bf8dcd1c106f7f2920d75cf36185ffc7b0ddfac134efef176b9b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a84a5784833bf8dcd1c106f7f2920d75cf36185ffc7b0ddfac134efef176b9b0->enter($__internal_a84a5784833bf8dcd1c106f7f2920d75cf36185ffc7b0ddfac134efef176b9b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a84a5784833bf8dcd1c106f7f2920d75cf36185ffc7b0ddfac134efef176b9b0->leave($__internal_a84a5784833bf8dcd1c106f7f2920d75cf36185ffc7b0ddfac134efef176b9b0_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e6bd653f7a860c7585d6387f6307c29f17b24c7ee4504f2c304ed99b54fff7a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6bd653f7a860c7585d6387f6307c29f17b24c7ee4504f2c304ed99b54fff7a3->enter($__internal_e6bd653f7a860c7585d6387f6307c29f17b24c7ee4504f2c304ed99b54fff7a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_e6bd653f7a860c7585d6387f6307c29f17b24c7ee4504f2c304ed99b54fff7a3->leave($__internal_e6bd653f7a860c7585d6387f6307c29f17b24c7ee4504f2c304ed99b54fff7a3_prof);

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
