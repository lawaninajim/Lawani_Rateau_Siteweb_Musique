<?php

/* JNPlatformBundle:Advert:index.html.twig */
class __TwigTemplate_ffde9d527e0c6957bf852bf24f77b93aefb5fd45135d8b7c2ad105044f8311bb extends Twig_Template
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
        $__internal_c10d924b767a3da54a67d9ea16d1fdf675558e9b49dfea62fdc49098586affb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c10d924b767a3da54a67d9ea16d1fdf675558e9b49dfea62fdc49098586affb7->enter($__internal_c10d924b767a3da54a67d9ea16d1fdf675558e9b49dfea62fdc49098586affb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JNPlatformBundle:Advert:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c10d924b767a3da54a67d9ea16d1fdf675558e9b49dfea62fdc49098586affb7->leave($__internal_c10d924b767a3da54a67d9ea16d1fdf675558e9b49dfea62fdc49098586affb7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d4cb80504e7ef3d2d1355dc320f1c417de3cabe85d81cd0eb6e8680f4138c6ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4cb80504e7ef3d2d1355dc320f1c417de3cabe85d81cd0eb6e8680f4138c6ca->enter($__internal_d4cb80504e7ef3d2d1355dc320f1c417de3cabe85d81cd0eb6e8680f4138c6ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "
  Accueil - ";
        // line 7
        $this->displayParentBlock("title", $context, $blocks);
        echo "

";
        
        $__internal_d4cb80504e7ef3d2d1355dc320f1c417de3cabe85d81cd0eb6e8680f4138c6ca->leave($__internal_d4cb80504e7ef3d2d1355dc320f1c417de3cabe85d81cd0eb6e8680f4138c6ca_prof);

    }

    // line 12
    public function block_jnplatform_body($context, array $blocks = array())
    {
        $__internal_aabd0fcaee97464e68fa6803af14eeaca731e5d5d9b438f41ea4b32f82e507e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aabd0fcaee97464e68fa6803af14eeaca731e5d5d9b438f41ea4b32f82e507e7->enter($__internal_aabd0fcaee97464e68fa6803af14eeaca731e5d5d9b438f41ea4b32f82e507e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "jnplatform_body"));

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
        
        $__internal_aabd0fcaee97464e68fa6803af14eeaca731e5d5d9b438f41ea4b32f82e507e7->leave($__internal_aabd0fcaee97464e68fa6803af14eeaca731e5d5d9b438f41ea4b32f82e507e7_prof);

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
