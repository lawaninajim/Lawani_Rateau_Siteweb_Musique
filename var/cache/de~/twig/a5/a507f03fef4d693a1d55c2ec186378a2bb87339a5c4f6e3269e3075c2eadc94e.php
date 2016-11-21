<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f903fe99925e7625be9c48a83e9181e6b3b32ca5efe8f448bada3f769b5cdf51 extends Twig_Template
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
        $__internal_65f1d69d04ad6f84af53b2638961c75a8641bfb797b9759c5fd2c51e1e612811 = $this->env->getExtension("native_profiler");
        $__internal_65f1d69d04ad6f84af53b2638961c75a8641bfb797b9759c5fd2c51e1e612811->enter($__internal_65f1d69d04ad6f84af53b2638961c75a8641bfb797b9759c5fd2c51e1e612811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65f1d69d04ad6f84af53b2638961c75a8641bfb797b9759c5fd2c51e1e612811->leave($__internal_65f1d69d04ad6f84af53b2638961c75a8641bfb797b9759c5fd2c51e1e612811_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6ee37a6fb0443bd52da1a0f8e333c31928652e15698feb5cd2fc787b3e08a183 = $this->env->getExtension("native_profiler");
        $__internal_6ee37a6fb0443bd52da1a0f8e333c31928652e15698feb5cd2fc787b3e08a183->enter($__internal_6ee37a6fb0443bd52da1a0f8e333c31928652e15698feb5cd2fc787b3e08a183_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6ee37a6fb0443bd52da1a0f8e333c31928652e15698feb5cd2fc787b3e08a183->leave($__internal_6ee37a6fb0443bd52da1a0f8e333c31928652e15698feb5cd2fc787b3e08a183_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4e0fd94ceefcbf8e944a6ceb6ab70f53e8046e56cbdff496d4099cdbbc13a228 = $this->env->getExtension("native_profiler");
        $__internal_4e0fd94ceefcbf8e944a6ceb6ab70f53e8046e56cbdff496d4099cdbbc13a228->enter($__internal_4e0fd94ceefcbf8e944a6ceb6ab70f53e8046e56cbdff496d4099cdbbc13a228_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4e0fd94ceefcbf8e944a6ceb6ab70f53e8046e56cbdff496d4099cdbbc13a228->leave($__internal_4e0fd94ceefcbf8e944a6ceb6ab70f53e8046e56cbdff496d4099cdbbc13a228_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0669f4e8c7c280ddf35404c4bb5600c4d4acfb4b2562473d768cfee06f5a5173 = $this->env->getExtension("native_profiler");
        $__internal_0669f4e8c7c280ddf35404c4bb5600c4d4acfb4b2562473d768cfee06f5a5173->enter($__internal_0669f4e8c7c280ddf35404c4bb5600c4d4acfb4b2562473d768cfee06f5a5173_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0669f4e8c7c280ddf35404c4bb5600c4d4acfb4b2562473d768cfee06f5a5173->leave($__internal_0669f4e8c7c280ddf35404c4bb5600c4d4acfb4b2562473d768cfee06f5a5173_prof);

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
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
