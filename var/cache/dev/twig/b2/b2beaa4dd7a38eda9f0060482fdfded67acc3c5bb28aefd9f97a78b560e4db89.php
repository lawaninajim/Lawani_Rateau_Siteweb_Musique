<?php

/* ::layout.html.twig */
class __TwigTemplate_68b43f18b89ee0e2a30f80d93ebbe607cadaea6d3b1cc671e77f7479a1377616 extends Twig_Template
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
        $__internal_496cfaa9b1d99f6877506d3be654a2ec1eaf7be519a331b3c1cc7b9fb0a89328 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_496cfaa9b1d99f6877506d3be654a2ec1eaf7be519a331b3c1cc7b9fb0a89328->enter($__internal_496cfaa9b1d99f6877506d3be654a2ec1eaf7be519a331b3c1cc7b9fb0a89328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
 
<style>
   body{
     background-color: #FFFCFA;
     }
.jumbotron {
margin-bottom: 0px;
height: 300px;
color: White; 
background-image:url(http://romaric77.fond-ecran-image.com/blog-photo/files/2015/02/IMG_0158-Paris-depuis-pont-Mirabeaun-et-b.jpg);

}
</style>

<div class=\"container-fluid\">

    <div id=\"header\" class=\"jumbotron\">

      <h1>Ma plateforme de musique</h1>

      </div>
 <div class=\"btn-group btn-group-justified\">
    <a class=\"btn btn-default\" href=\"";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jn_platform_home");
        echo "\"><strong>Accueil</strong></a>
    <a class=\"btn btn-default\" href=\"";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jn_platform_add");
        echo "\"><strong>Ajouter une musique</strong></a>
  
</div>
      <div id=\"content\" class=\"col-md-9\">


        ";
        // line 59
        $this->displayBlock('body', $context, $blocks);
        // line 62
        echo "
      </div>

    </div>

 
    <hr>


    <footer>

      <p> Julien RATEAU ET Najim lAWANI © ";
        // line 73
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " and beyond.</p>

    </footer>

  </div>


  ";
        // line 80
        $this->displayBlock('javascripts', $context, $blocks);
        // line 89
        echo "

</body>

</html>
";
        
        $__internal_496cfaa9b1d99f6877506d3be654a2ec1eaf7be519a331b3c1cc7b9fb0a89328->leave($__internal_496cfaa9b1d99f6877506d3be654a2ec1eaf7be519a331b3c1cc7b9fb0a89328_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_2dd2c1ce5921961781f56a0946b5dbe70c83cfe4c5953d9e4d7a4f7ce60b31fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dd2c1ce5921961781f56a0946b5dbe70c83cfe4c5953d9e4d7a4f7ce60b31fe->enter($__internal_2dd2c1ce5921961781f56a0946b5dbe70c83cfe4c5953d9e4d7a4f7ce60b31fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "JN Plateforme";
        
        $__internal_2dd2c1ce5921961781f56a0946b5dbe70c83cfe4c5953d9e4d7a4f7ce60b31fe->leave($__internal_2dd2c1ce5921961781f56a0946b5dbe70c83cfe4c5953d9e4d7a4f7ce60b31fe_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6beb1735ba324dfebb368c397d88aa17219f93d47ad08864dbf8604ede4f09ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6beb1735ba324dfebb368c397d88aa17219f93d47ad08864dbf8604ede4f09ed->enter($__internal_6beb1735ba324dfebb368c397d88aa17219f93d47ad08864dbf8604ede4f09ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 16
        echo "
   

    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-responsive.min.css\">
    <link rel=\"stylesheet\" href=\"site.css\">
     
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  ";
        
        $__internal_6beb1735ba324dfebb368c397d88aa17219f93d47ad08864dbf8604ede4f09ed->leave($__internal_6beb1735ba324dfebb368c397d88aa17219f93d47ad08864dbf8604ede4f09ed_prof);

    }

    // line 59
    public function block_body($context, array $blocks = array())
    {
        $__internal_6a5f7b83cd29433d9d35e83adf62ae31428c5e5107b1bbafc5c2889049cdc844 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a5f7b83cd29433d9d35e83adf62ae31428c5e5107b1bbafc5c2889049cdc844->enter($__internal_6a5f7b83cd29433d9d35e83adf62ae31428c5e5107b1bbafc5c2889049cdc844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 60
        echo "
        ";
        
        $__internal_6a5f7b83cd29433d9d35e83adf62ae31428c5e5107b1bbafc5c2889049cdc844->leave($__internal_6a5f7b83cd29433d9d35e83adf62ae31428c5e5107b1bbafc5c2889049cdc844_prof);

    }

    // line 80
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_002d4fcf5fe05e1d99c8026923061cd99bcc2bb30b2ca29f29fa263d6d1ca4bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_002d4fcf5fe05e1d99c8026923061cd99bcc2bb30b2ca29f29fa263d6d1ca4bc->enter($__internal_002d4fcf5fe05e1d99c8026923061cd99bcc2bb30b2ca29f29fa263d6d1ca4bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 81
        echo "
    ";
        // line 83
        echo "
    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>

    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>

  ";
        
        $__internal_002d4fcf5fe05e1d99c8026923061cd99bcc2bb30b2ca29f29fa263d6d1ca4bc->leave($__internal_002d4fcf5fe05e1d99c8026923061cd99bcc2bb30b2ca29f29fa263d6d1ca4bc_prof);

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
        return array (  184 => 83,  181 => 81,  175 => 80,  167 => 60,  161 => 59,  146 => 16,  140 => 15,  128 => 12,  116 => 89,  114 => 80,  104 => 73,  91 => 62,  89 => 59,  80 => 53,  76 => 52,  47 => 25,  45 => 15,  39 => 12,  26 => 1,);
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
    <link rel=\"stylesheet\" href=\"site.css\">
     
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  {% endblock %}

</head>


<body>
 
<style>
   body{
     background-color: #FFFCFA;
     }
.jumbotron {
margin-bottom: 0px;
height: 300px;
color: White; 
background-image:url(http://romaric77.fond-ecran-image.com/blog-photo/files/2015/02/IMG_0158-Paris-depuis-pont-Mirabeaun-et-b.jpg);

}
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
