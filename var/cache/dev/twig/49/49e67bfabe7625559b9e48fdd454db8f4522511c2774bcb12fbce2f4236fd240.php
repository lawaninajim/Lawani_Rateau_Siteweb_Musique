<?php

/* JNPlatformBundle:Advert:form.html.twig */
class __TwigTemplate_9db9bcbecdfea7a39ae639db13510d472f1a785786d9c0fc05783f603a25dc3c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d34e46273889c6650e581cc69d809f6d97067fb85812882deebb853f129e6959 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d34e46273889c6650e581cc69d809f6d97067fb85812882deebb853f129e6959->enter($__internal_d34e46273889c6650e581cc69d809f6d97067fb85812882deebb853f129e6959_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JNPlatformBundle:Advert:form.html.twig"));

        // line 1
        echo "


<p class=\"text-warning\">Suivez ces instructions pour ajouter la musique de votre choix!</p>



<div class=\"well\">

 ";
        // line 10
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

</div>

";
        
        $__internal_d34e46273889c6650e581cc69d809f6d97067fb85812882deebb853f129e6959->leave($__internal_d34e46273889c6650e581cc69d809f6d97067fb85812882deebb853f129e6959_prof);

    }

    public function getTemplateName()
    {
        return "JNPlatformBundle:Advert:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 10,  22 => 1,);
    }

    public function getSource()
    {
        return "


<p class=\"text-warning\">Suivez ces instructions pour ajouter la musique de votre choix!</p>



<div class=\"well\">

 {{ form(form) }}

</div>

";
    }
}
