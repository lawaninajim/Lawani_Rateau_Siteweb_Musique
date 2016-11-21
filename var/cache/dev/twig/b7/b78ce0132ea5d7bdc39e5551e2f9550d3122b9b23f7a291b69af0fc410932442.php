<?php

/* JNUserBundle:Security:login.html.twig */
class __TwigTemplate_9afd6ed503ce18ee5102c35ffb5f4916d7266340bfd8ca0bdfebd611ea7f0f04 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("JNPlatformBundle::layout.html.twig", "JNUserBundle:Security:login.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "JNPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_23dafd18d802ea0f5df1dcc941f58ed3482efeb35385b7d156f4df760fb0aaa2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23dafd18d802ea0f5df1dcc941f58ed3482efeb35385b7d156f4df760fb0aaa2->enter($__internal_23dafd18d802ea0f5df1dcc941f58ed3482efeb35385b7d156f4df760fb0aaa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JNUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23dafd18d802ea0f5df1dcc941f58ed3482efeb35385b7d156f4df760fb0aaa2->leave($__internal_23dafd18d802ea0f5df1dcc941f58ed3482efeb35385b7d156f4df760fb0aaa2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_976600603ebffcd0bfd356b2c2d2b2c3181cf125c61932735b276388997be06d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_976600603ebffcd0bfd356b2c2d2b2c3181cf125c61932735b276388997be06d->enter($__internal_976600603ebffcd0bfd356b2c2d2b2c3181cf125c61932735b276388997be06d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "

  ";
        // line 9
        echo "
  ";
        // line 10
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 11
            echo "
    <div class=\"alert alert-danger\">";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "</div>

  ";
        }
        // line 15
        echo "

  ";
        // line 18
        echo "
  <form action=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_check");
        echo "\" method=\"post\">

    <label for=\"username\">Login :</label>

    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />


    <label for=\"password\">Mot de passe :</label>

    <input type=\"password\" id=\"password\" name=\"_password\" />

    <br />

    <input type=\"submit\" value=\"Connexion\" />

  </form>


";
        
        $__internal_976600603ebffcd0bfd356b2c2d2b2c3181cf125c61932735b276388997be06d->leave($__internal_976600603ebffcd0bfd356b2c2d2b2c3181cf125c61932735b276388997be06d_prof);

    }

    public function getTemplateName()
    {
        return "JNUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 23,  65 => 19,  62 => 18,  58 => 15,  52 => 12,  49 => 11,  47 => 10,  44 => 9,  40 => 6,  34 => 5,  11 => 2,);
    }

    public function getSource()
    {
        return "
{% extends \"JNPlatformBundle::layout.html.twig\" %}


{% block body %}


  {# S'il y a une erreur, on l'affiche dans un joli cadre #}

  {% if error %}

    <div class=\"alert alert-danger\">{{ error.message }}</div>

  {% endif %}


  {# Le formulaire, avec URL de soumission vers la route « login_check » comme on l'a vu #}

  <form action=\"{{ path('login_check') }}\" method=\"post\">

    <label for=\"username\">Login :</label>

    <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" />


    <label for=\"password\">Mot de passe :</label>

    <input type=\"password\" id=\"password\" name=\"_password\" />

    <br />

    <input type=\"submit\" value=\"Connexion\" />

  </form>


{% endblock %}
";
    }
}
