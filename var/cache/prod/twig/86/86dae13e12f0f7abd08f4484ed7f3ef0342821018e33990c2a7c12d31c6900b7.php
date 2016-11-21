<?php

/* JNPlatformBundle:Advert:index.html.twig */
class __TwigTemplate_bdd160eaf23c7e7a62c41401cfda112b90241866cf802ab8edbf01a36b52eab0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("JNPlatformBundle::layout.html.twig", "JNPlatformBundle:Advert:index.html.twig", 2);
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
        $__internal_61d2294e017cfa762983409d0f88932df7e01fad14fe5997c032f952c2729251 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61d2294e017cfa762983409d0f88932df7e01fad14fe5997c032f952c2729251->enter($__internal_61d2294e017cfa762983409d0f88932df7e01fad14fe5997c032f952c2729251_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JNPlatformBundle:Advert:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61d2294e017cfa762983409d0f88932df7e01fad14fe5997c032f952c2729251->leave($__internal_61d2294e017cfa762983409d0f88932df7e01fad14fe5997c032f952c2729251_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4a95e4ff744270c3dbb3c2f09e6737644f4a4ddaa9ee0ed7d1f4ae50a3964e4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a95e4ff744270c3dbb3c2f09e6737644f4a4ddaa9ee0ed7d1f4ae50a3964e4a->enter($__internal_4a95e4ff744270c3dbb3c2f09e6737644f4a4ddaa9ee0ed7d1f4ae50a3964e4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "
  Accueil - ";
        // line 7
        $this->displayParentBlock("title", $context, $blocks);
        echo "

";
        
        $__internal_4a95e4ff744270c3dbb3c2f09e6737644f4a4ddaa9ee0ed7d1f4ae50a3964e4a->leave($__internal_4a95e4ff744270c3dbb3c2f09e6737644f4a4ddaa9ee0ed7d1f4ae50a3964e4a_prof);

    }

    // line 12
    public function block_jnplatform_body($context, array $blocks = array())
    {
        $__internal_23ad2c4dc398099b9c934537c9f1ad5c35091d6837826fa4265e081b3504ef07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23ad2c4dc398099b9c934537c9f1ad5c35091d6837826fa4265e081b3504ef07->enter($__internal_23ad2c4dc398099b9c934537c9f1ad5c35091d6837826fa4265e081b3504ef07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "jnplatform_body"));

        // line 13
        echo "

  <h2>Liste des musiques</h2>


  <ul class=\"list-inline\">

    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listPlaylist"]) ? $context["listPlaylist"] : $this->getContext($context, "listPlaylist")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 21
            echo "      
      <li>

        <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jn_platform_view", array("id" => $this->getAttribute($context["advert"], "id", array()))), "html", null, true);
            echo "\">

           <img 

  src=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($context["advert"], "image", array()), "webPath", array())), "html", null, true);
            echo "\"

  alt=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["advert"], "image", array()), "alt", array()), "html", null, true);
            echo "\"
  width = \"140\"
  height = \"140\"

class=\"img-rounded\"/> <br>
 <p class=\"text-center\">";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "title", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["advert"], "artiste", array())), "html", null, true);
            echo " </p>
        </a>

      </li>


 

       
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 45
            echo "
      <li>Pas (encore !) de playlist </li>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "
  </ul>


";
        
        $__internal_23ad2c4dc398099b9c934537c9f1ad5c35091d6837826fa4265e081b3504ef07->leave($__internal_23ad2c4dc398099b9c934537c9f1ad5c35091d6837826fa4265e081b3504ef07_prof);

    }

    public function getTemplateName()
    {
        return "JNPlatformBundle:Advert:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 49,  116 => 45,  99 => 35,  91 => 30,  86 => 28,  79 => 24,  74 => 21,  69 => 20,  60 => 13,  54 => 12,  44 => 7,  41 => 6,  35 => 5,  11 => 2,);
    }

    public function getSource()
    {
        return "
{% extends \"JNPlatformBundle::layout.html.twig\" %}


{% block title %}

  Accueil - {{ parent() }}

{% endblock %}


{% block jnplatform_body %}


  <h2>Liste des musiques</h2>


  <ul class=\"list-inline\">

    {% for advert in listPlaylist %}
      
      <li>

        <a href=\"{{ path('jn_platform_view', {'id': advert.id}) }}\">

           <img 

  src=\"{{ asset(advert.image.webPath) }}\"

  alt=\"{{ advert.image.alt }}\"
  width = \"140\"
  height = \"140\"

class=\"img-rounded\"/> <br>
 <p class=\"text-center\">{{ advert.title }} - {{ advert.artiste|upper }} </p>
        </a>

      </li>


 

       
    {% else %}

      <li>Pas (encore !) de playlist </li>

    {% endfor %}

  </ul>


{% endblock %}
 

";
    }
}
