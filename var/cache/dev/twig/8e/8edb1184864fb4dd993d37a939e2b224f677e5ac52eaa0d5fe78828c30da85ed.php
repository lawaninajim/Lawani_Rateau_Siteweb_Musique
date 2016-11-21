<?php

/* base.html.twig */
class __TwigTemplate_0ea5e6887ef610000430e2e2137f23e997e9a3cd5065bfdc6cda8a6823ec67fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_21d8807c8fd0f790c8ed0703319794443605ea51ea5a3222a1e11d5e325d161a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21d8807c8fd0f790c8ed0703319794443605ea51ea5a3222a1e11d5e325d161a->enter($__internal_21d8807c8fd0f790c8ed0703319794443605ea51ea5a3222a1e11d5e325d161a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_21d8807c8fd0f790c8ed0703319794443605ea51ea5a3222a1e11d5e325d161a->leave($__internal_21d8807c8fd0f790c8ed0703319794443605ea51ea5a3222a1e11d5e325d161a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d20c07f93e085f0de378437fd9d23a6e5a708d5d96ee131d0452c41bb761aed7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d20c07f93e085f0de378437fd9d23a6e5a708d5d96ee131d0452c41bb761aed7->enter($__internal_d20c07f93e085f0de378437fd9d23a6e5a708d5d96ee131d0452c41bb761aed7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d20c07f93e085f0de378437fd9d23a6e5a708d5d96ee131d0452c41bb761aed7->leave($__internal_d20c07f93e085f0de378437fd9d23a6e5a708d5d96ee131d0452c41bb761aed7_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6bb9dab13197907b63a6245da32f2389271663bfd39a9de34c13d45ba2baa028 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bb9dab13197907b63a6245da32f2389271663bfd39a9de34c13d45ba2baa028->enter($__internal_6bb9dab13197907b63a6245da32f2389271663bfd39a9de34c13d45ba2baa028_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6bb9dab13197907b63a6245da32f2389271663bfd39a9de34c13d45ba2baa028->leave($__internal_6bb9dab13197907b63a6245da32f2389271663bfd39a9de34c13d45ba2baa028_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_41ff3ab93bcc32ba50b9ea875e9c06fb93051b734171b8c85cb1a2481f59da1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41ff3ab93bcc32ba50b9ea875e9c06fb93051b734171b8c85cb1a2481f59da1e->enter($__internal_41ff3ab93bcc32ba50b9ea875e9c06fb93051b734171b8c85cb1a2481f59da1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_41ff3ab93bcc32ba50b9ea875e9c06fb93051b734171b8c85cb1a2481f59da1e->leave($__internal_41ff3ab93bcc32ba50b9ea875e9c06fb93051b734171b8c85cb1a2481f59da1e_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0cb9910d65abcf41927946441602773341b4edf58bbb3a77e8f4d36b5a325436 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cb9910d65abcf41927946441602773341b4edf58bbb3a77e8f4d36b5a325436->enter($__internal_0cb9910d65abcf41927946441602773341b4edf58bbb3a77e8f4d36b5a325436_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_0cb9910d65abcf41927946441602773341b4edf58bbb3a77e8f4d36b5a325436->leave($__internal_0cb9910d65abcf41927946441602773341b4edf58bbb3a77e8f4d36b5a325436_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
";
    }
}
