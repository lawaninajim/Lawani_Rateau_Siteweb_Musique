<?php

/* JNPlatformBundle:Advert:form.html.twig */
class __TwigTemplate_9bd4a582c02847fdafa8bf223d468d678d2d053857233afb12baa4ef7e2d688a extends Twig_Template
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
        $__internal_871fcf56195baf3abd308ef63f72a1fff55c65a681f44234aa55586c9000b2e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_871fcf56195baf3abd308ef63f72a1fff55c65a681f44234aa55586c9000b2e5->enter($__internal_871fcf56195baf3abd308ef63f72a1fff55c65a681f44234aa55586c9000b2e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JNPlatformBundle:Advert:form.html.twig"));

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
        
        $__internal_871fcf56195baf3abd308ef63f72a1fff55c65a681f44234aa55586c9000b2e5->leave($__internal_871fcf56195baf3abd308ef63f72a1fff55c65a681f44234aa55586c9000b2e5_prof);

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
