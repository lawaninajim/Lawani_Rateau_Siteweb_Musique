<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3e7678a2329ef922b1097f7ce82fe2e2508b987f4e5002c084098401f32614d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_326d0c641da8d2f0ba442fe8645f7370d29c47040cf8d201107c3dcc6ec513f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_326d0c641da8d2f0ba442fe8645f7370d29c47040cf8d201107c3dcc6ec513f2->enter($__internal_326d0c641da8d2f0ba442fe8645f7370d29c47040cf8d201107c3dcc6ec513f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_326d0c641da8d2f0ba442fe8645f7370d29c47040cf8d201107c3dcc6ec513f2->leave($__internal_326d0c641da8d2f0ba442fe8645f7370d29c47040cf8d201107c3dcc6ec513f2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c06f79d4e0c278ba712d336c99439e23609abc4b430ba4fea7a73f80c01c3cae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c06f79d4e0c278ba712d336c99439e23609abc4b430ba4fea7a73f80c01c3cae->enter($__internal_c06f79d4e0c278ba712d336c99439e23609abc4b430ba4fea7a73f80c01c3cae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c06f79d4e0c278ba712d336c99439e23609abc4b430ba4fea7a73f80c01c3cae->leave($__internal_c06f79d4e0c278ba712d336c99439e23609abc4b430ba4fea7a73f80c01c3cae_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2fafadcd589a31121f3e6eebc5466c12c59b3e4a38b9ccf532eb27081f71a708 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fafadcd589a31121f3e6eebc5466c12c59b3e4a38b9ccf532eb27081f71a708->enter($__internal_2fafadcd589a31121f3e6eebc5466c12c59b3e4a38b9ccf532eb27081f71a708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2fafadcd589a31121f3e6eebc5466c12c59b3e4a38b9ccf532eb27081f71a708->leave($__internal_2fafadcd589a31121f3e6eebc5466c12c59b3e4a38b9ccf532eb27081f71a708_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0c8c9b468962c3fc1bb3974eef439b9456c4c4d81b0a0ffd4e59c9229fa4a33b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c8c9b468962c3fc1bb3974eef439b9456c4c4d81b0a0ffd4e59c9229fa4a33b->enter($__internal_0c8c9b468962c3fc1bb3974eef439b9456c4c4d81b0a0ffd4e59c9229fa4a33b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0c8c9b468962c3fc1bb3974eef439b9456c4c4d81b0a0ffd4e59c9229fa4a33b->leave($__internal_0c8c9b468962c3fc1bb3974eef439b9456c4c4d81b0a0ffd4e59c9229fa4a33b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
";
    }
}
