<?php

/* JNPlatformBundle:Advert:delete.html.twig */
class __TwigTemplate_56ef157756e3bb94c20e90ec307b40aeb97b2b8bbcf5c5e05bd11cf51daa4a34 extends Twig_Template
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
        $__internal_9c47b0efcb24b5263787e1b16661e3d14a12346578b360c39fdd3a6841007dc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c47b0efcb24b5263787e1b16661e3d14a12346578b360c39fdd3a6841007dc9->enter($__internal_9c47b0efcb24b5263787e1b16661e3d14a12346578b360c39fdd3a6841007dc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JNPlatformBundle:Advert:delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c47b0efcb24b5263787e1b16661e3d14a12346578b360c39fdd3a6841007dc9->leave($__internal_9c47b0efcb24b5263787e1b16661e3d14a12346578b360c39fdd3a6841007dc9_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_f42685d04737b977df6f3c9cab21645d39ed9602b8dbafd28daaceb8b33002b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f42685d04737b977df6f3c9cab21645d39ed9602b8dbafd28daaceb8b33002b4->enter($__internal_f42685d04737b977df6f3c9cab21645d39ed9602b8dbafd28daaceb8b33002b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "
  Supprimer une playlist - ";
        // line 6
        $this->displayParentBlock("title", $context, $blocks);
        echo "

";
        
        $__internal_f42685d04737b977df6f3c9cab21645d39ed9602b8dbafd28daaceb8b33002b4->leave($__internal_f42685d04737b977df6f3c9cab21645d39ed9602b8dbafd28daaceb8b33002b4_prof);

    }

    // line 11
    public function block_jnplatform_body($context, array $blocks = array())
    {
        $__internal_3794804927e768a069d4763f8f435c63b06d562e2fff8ab9a994f06dc7924f8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3794804927e768a069d4763f8f435c63b06d562e2fff8ab9a994f06dc7924f8f->enter($__internal_3794804927e768a069d4763f8f435c63b06d562e2fff8ab9a994f06dc7924f8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "jnplatform_body"));

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
        
        $__internal_3794804927e768a069d4763f8f435c63b06d562e2fff8ab9a994f06dc7924f8f->leave($__internal_3794804927e768a069d4763f8f435c63b06d562e2fff8ab9a994f06dc7924f8f_prof);

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
