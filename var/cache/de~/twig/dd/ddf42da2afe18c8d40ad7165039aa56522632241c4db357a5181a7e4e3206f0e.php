<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_30c3ec13562c65cdebf1aac835f63080ad7bf33209147e531f11a29455289a01 extends Twig_Template
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
        $__internal_7bef8dd1e27c30a403a9bfa1daaddfcbded0fec052c2b5f3967696ff2cea7e70 = $this->env->getExtension("native_profiler");
        $__internal_7bef8dd1e27c30a403a9bfa1daaddfcbded0fec052c2b5f3967696ff2cea7e70->enter($__internal_7bef8dd1e27c30a403a9bfa1daaddfcbded0fec052c2b5f3967696ff2cea7e70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7bef8dd1e27c30a403a9bfa1daaddfcbded0fec052c2b5f3967696ff2cea7e70->leave($__internal_7bef8dd1e27c30a403a9bfa1daaddfcbded0fec052c2b5f3967696ff2cea7e70_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_dbd3cbe305b13875005f6266e17389ced64f967387d7750ca27b7c3b2db2d90f = $this->env->getExtension("native_profiler");
        $__internal_dbd3cbe305b13875005f6266e17389ced64f967387d7750ca27b7c3b2db2d90f->enter($__internal_dbd3cbe305b13875005f6266e17389ced64f967387d7750ca27b7c3b2db2d90f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_dbd3cbe305b13875005f6266e17389ced64f967387d7750ca27b7c3b2db2d90f->leave($__internal_dbd3cbe305b13875005f6266e17389ced64f967387d7750ca27b7c3b2db2d90f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_49a9952fd1dcdb59ea6abc5cf3ef9e5f70fd7c2de5f09cc9d1768917de00d392 = $this->env->getExtension("native_profiler");
        $__internal_49a9952fd1dcdb59ea6abc5cf3ef9e5f70fd7c2de5f09cc9d1768917de00d392->enter($__internal_49a9952fd1dcdb59ea6abc5cf3ef9e5f70fd7c2de5f09cc9d1768917de00d392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_49a9952fd1dcdb59ea6abc5cf3ef9e5f70fd7c2de5f09cc9d1768917de00d392->leave($__internal_49a9952fd1dcdb59ea6abc5cf3ef9e5f70fd7c2de5f09cc9d1768917de00d392_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c49796bdf75e2a66697a2d274b8f0c2c1eee99064ecfdd20fa9ad41660bdf1d9 = $this->env->getExtension("native_profiler");
        $__internal_c49796bdf75e2a66697a2d274b8f0c2c1eee99064ecfdd20fa9ad41660bdf1d9->enter($__internal_c49796bdf75e2a66697a2d274b8f0c2c1eee99064ecfdd20fa9ad41660bdf1d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_c49796bdf75e2a66697a2d274b8f0c2c1eee99064ecfdd20fa9ad41660bdf1d9->leave($__internal_c49796bdf75e2a66697a2d274b8f0c2c1eee99064ecfdd20fa9ad41660bdf1d9_prof);

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
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
