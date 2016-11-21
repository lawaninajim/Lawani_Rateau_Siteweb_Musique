<?php

/* JNPlatformBundle:Advert:delete.html.twig */
class __TwigTemplate_9a4a72cdc6a664b7cdfae4e99ced97484825e824080b29e989d3eb055212099b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("JNPlatformBundle::layout.html.twig", "JNPlatformBundle:Advert:delete.html.twig", 1);
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
        $__internal_e2301c3dab4f837b9e80c721601a3f0e337d88faff449539244f9befa7abe54c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2301c3dab4f837b9e80c721601a3f0e337d88faff449539244f9befa7abe54c->enter($__internal_e2301c3dab4f837b9e80c721601a3f0e337d88faff449539244f9befa7abe54c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JNPlatformBundle:Advert:delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2301c3dab4f837b9e80c721601a3f0e337d88faff449539244f9befa7abe54c->leave($__internal_e2301c3dab4f837b9e80c721601a3f0e337d88faff449539244f9befa7abe54c_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_d584b28ba89d6508a393ad27c5a80eb7efc28d617278573e45e00da133eb56c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d584b28ba89d6508a393ad27c5a80eb7efc28d617278573e45e00da133eb56c1->enter($__internal_d584b28ba89d6508a393ad27c5a80eb7efc28d617278573e45e00da133eb56c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "
  Supprimer une playlist - ";
        // line 6
        $this->displayParentBlock("title", $context, $blocks);
        echo "

";
        
        $__internal_d584b28ba89d6508a393ad27c5a80eb7efc28d617278573e45e00da133eb56c1->leave($__internal_d584b28ba89d6508a393ad27c5a80eb7efc28d617278573e45e00da133eb56c1_prof);

    }

    // line 11
    public function block_jnplatform_body($context, array $blocks = array())
    {
        $__internal_8230f00b6b57f2e1b3f090ad753a9b00d2798df33b5ffea04e86c27463bd9d74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8230f00b6b57f2e1b3f090ad753a9b00d2798df33b5ffea04e86c27463bd9d74->enter($__internal_8230f00b6b57f2e1b3f090ad753a9b00d2798df33b5ffea04e86c27463bd9d74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "jnplatform_body"));

        // line 12
        echo "

  <h2>Supprimer une playlist</h2>


  <p>

    Etes-vous certain de vouloir supprimer la playlist \"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "title", array()), "html", null, true);
        echo "\" ?

  </p>


  ";
        // line 25
        echo "
  <form action=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jn_platform_delete", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" method=\"post\">

    <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jn_platform_view", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">

      <i class=\"glyphicon glyphicon-chevron-left\"></i>

      Retour à la playlist

    </a>

    ";
        // line 37
        echo "
    <input type=\"submit\" value=\"Supprimer\" class=\"btn btn-danger\" />

    ";
        // line 41
        echo "
    ";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

  </form>


";
        
        $__internal_8230f00b6b57f2e1b3f090ad753a9b00d2798df33b5ffea04e86c27463bd9d74->leave($__internal_8230f00b6b57f2e1b3f090ad753a9b00d2798df33b5ffea04e86c27463bd9d74_prof);

    }

    public function getTemplateName()
    {
        return "JNPlatformBundle:Advert:delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 42,  101 => 41,  96 => 37,  85 => 28,  80 => 26,  77 => 25,  69 => 19,  60 => 12,  54 => 11,  44 => 6,  41 => 5,  35 => 4,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"JNPlatformBundle::layout.html.twig\" %}


{% block title %}

  Supprimer une playlist - {{ parent() }}

{% endblock %}


{% block jnplatform_body %}


  <h2>Supprimer une playlist</h2>


  <p>

    Etes-vous certain de vouloir supprimer la playlist \"{{ advert.title }}\" ?

  </p>


  {# On met l'id de l'annonce dans la route de l'action du formulaire #}

  <form action=\"{{ path('jn_platform_delete', {'id': advert.id}) }}\" method=\"post\">

    <a href=\"{{ path('jn_platform_view', {'id': advert.id}) }}\" class=\"btn btn-default\">

      <i class=\"glyphicon glyphicon-chevron-left\"></i>

      Retour à la playlist

    </a>

    {# Ici j'ai écrit le bouton de soumission à la main #}

    <input type=\"submit\" value=\"Supprimer\" class=\"btn btn-danger\" />

    {# Ceci va générer le champ CSRF #}

    {{ form_rest(form) }}

  </form>


{% endblock %}
";
    }
}
