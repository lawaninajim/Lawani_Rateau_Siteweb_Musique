<?php

/* ::layout.html.twig */
class __TwigTemplate_cf5f2af2fdbe0ad5a21ab9183d43af7bff1f56244d70ed826933d56a7729bdee extends Twig_Template
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
        $__internal_db64c1f4af0b8efb0cfbf3c49865e9026d6e1e8d28a0c1713a864d9944444b68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db64c1f4af0b8efb0cfbf3c49865e9026d6e1e8d28a0c1713a864d9944444b68->enter($__internal_db64c1f4af0b8efb0cfbf3c49865e9026d6e1e8d28a0c1713a864d9944444b68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>

<html>

<head>

  <meta charset=\"utf-8\">
 
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">


  <title>";
        // line 12
        $this->displayBlock('title', $context, $blocks);
        echo "</title>


  ";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 25
        echo "
</head>


<body>
 
</style>

<div class=\"container-fluid\">

    <div id=\"header\" class=\"jumbotron\">

      <h1>Ma plateforme de musique</h1>

      </div>
 <div class=\"btn-group btn-group-justified\">
    <a class=\"btn btn-default\" href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jn_platform_home");
        echo "\"><strong>Accueil</strong></a>
    <a class=\"btn btn-default\" href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jn_platform_add");
        echo "\"><strong>Ajouter une musique</strong></a>
  
</div>
      <div id=\"content\" class=\"col-md-9\">


        ";
        // line 48
        $this->displayBlock('body', $context, $blocks);
        // line 51
        echo "
      </div>

    </div>

 
    <hr>


    <footer>

      <p> Julien RATEAU ET Najim lAWANI © ";
        // line 62
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " and beyond.</p>

    </footer>

  </div>


  ";
        // line 69
        $this->displayBlock('javascripts', $context, $blocks);
        // line 78
        echo "

</body>

</html>
";
        
        $__internal_db64c1f4af0b8efb0cfbf3c49865e9026d6e1e8d28a0c1713a864d9944444b68->leave($__internal_db64c1f4af0b8efb0cfbf3c49865e9026d6e1e8d28a0c1713a864d9944444b68_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_6f97ed92e3c021296a7431c9407b5415278fd418369c13e133557c1cdc406f6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f97ed92e3c021296a7431c9407b5415278fd418369c13e133557c1cdc406f6b->enter($__internal_6f97ed92e3c021296a7431c9407b5415278fd418369c13e133557c1cdc406f6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "JN Plateforme";
        
        $__internal_6f97ed92e3c021296a7431c9407b5415278fd418369c13e133557c1cdc406f6b->leave($__internal_6f97ed92e3c021296a7431c9407b5415278fd418369c13e133557c1cdc406f6b_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_be7d32381cc396f3e9989e0688be7b5c6570d475001aaa9c47e4e14556e326c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be7d32381cc396f3e9989e0688be7b5c6570d475001aaa9c47e4e14556e326c4->enter($__internal_be7d32381cc396f3e9989e0688be7b5c6570d475001aaa9c47e4e14556e326c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 16
        echo "
   

    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-responsive.min.css\">
    <link rel=\"stylesheet\" href=\"/opt/lampp/htdocs/symfony/web/site.css\">
     
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  ";
        
        $__internal_be7d32381cc396f3e9989e0688be7b5c6570d475001aaa9c47e4e14556e326c4->leave($__internal_be7d32381cc396f3e9989e0688be7b5c6570d475001aaa9c47e4e14556e326c4_prof);

    }

    // line 48
    public function block_body($context, array $blocks = array())
    {
        $__internal_7c65c050608de52959587972ef93f303795c9f3eb41a68f1b8a8398051a15efa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c65c050608de52959587972ef93f303795c9f3eb41a68f1b8a8398051a15efa->enter($__internal_7c65c050608de52959587972ef93f303795c9f3eb41a68f1b8a8398051a15efa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 49
        echo "
        ";
        
        $__internal_7c65c050608de52959587972ef93f303795c9f3eb41a68f1b8a8398051a15efa->leave($__internal_7c65c050608de52959587972ef93f303795c9f3eb41a68f1b8a8398051a15efa_prof);

    }

    // line 69
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0504b375eb26be9d9f029cd6fbbd3eb11b586084e0b0866301061d1fbc3b1661 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0504b375eb26be9d9f029cd6fbbd3eb11b586084e0b0866301061d1fbc3b1661->enter($__internal_0504b375eb26be9d9f029cd6fbbd3eb11b586084e0b0866301061d1fbc3b1661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 70
        echo "
    ";
        // line 72
        echo "
    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>

    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>

  ";
        
        $__internal_0504b375eb26be9d9f029cd6fbbd3eb11b586084e0b0866301061d1fbc3b1661->leave($__internal_0504b375eb26be9d9f029cd6fbbd3eb11b586084e0b0866301061d1fbc3b1661_prof);

    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 72,  170 => 70,  164 => 69,  156 => 49,  150 => 48,  135 => 16,  129 => 15,  117 => 12,  105 => 78,  103 => 69,  93 => 62,  80 => 51,  78 => 48,  69 => 42,  65 => 41,  47 => 25,  45 => 15,  39 => 12,  26 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>

<html>

<head>

  <meta charset=\"utf-8\">
 
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">


  <title>{% block title %}JN Plateforme{% endblock %}</title>


  {% block stylesheets %}

   

    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-responsive.min.css\">
    <link rel=\"stylesheet\" href=\"/opt/lampp/htdocs/symfony/web/site.css\">
     
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  {% endblock %}

</head>


<body>
 
</style>

<div class=\"container-fluid\">

    <div id=\"header\" class=\"jumbotron\">

      <h1>Ma plateforme de musique</h1>

      </div>
 <div class=\"btn-group btn-group-justified\">
    <a class=\"btn btn-default\" href=\"{{ path('jn_platform_home') }}\"><strong>Accueil</strong></a>
    <a class=\"btn btn-default\" href=\"{{ path('jn_platform_add') }}\"><strong>Ajouter une musique</strong></a>
  
</div>
      <div id=\"content\" class=\"col-md-9\">


        {% block body %}

        {% endblock %}

      </div>

    </div>

 
    <hr>


    <footer>

      <p> Julien RATEAU ET Najim lAWANI © {{ 'now'|date('Y') }} and beyond.</p>

    </footer>

  </div>


  {% block javascripts %}

    {# Ajoutez ces lignes JavaScript si vous comptez vous servir des fonctionnalités du bootstrap Twitter #}

    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>

    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>

  {% endblock %}


</body>

</html>
";
    }
}
