<?php

/* ::layout.html.twig */
class __TwigTemplate_b5ecc59f2fb2e10c63d9c514f4ee58f9b0a336a94dbd263e669e31f929fba6e1 extends Twig_Template
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
        $__internal_992a19f13dae7b59b5ab6f61c2469eae908629c176240fa17c2e80c62f36e44e = $this->env->getExtension("native_profiler");
        $__internal_992a19f13dae7b59b5ab6f61c2469eae908629c176240fa17c2e80c62f36e44e->enter($__internal_992a19f13dae7b59b5ab6f61c2469eae908629c176240fa17c2e80c62f36e44e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        // line 22
        echo "
</head>


<body>

  <div class=\"container\">

    <div id=\"header\" class=\"jumbotron\">

      <h1>Ma plateforme de musique</h1>

      <p>
\t\tVeuillez vous inscrire avant de continuer
      </p>

      <p>

        <a class=\"btn btn-primary btn-lg\" href=\"https://openclassrooms.com/courses/developpez-votre-site-web-avec-le-framework-symfony2\">

          S'inscrire »

        </a>

      </p>

    </div>


    <div class=\"row\">

      <div id=\"menu\" class=\"col-md-3\">

        <h3>Les musiques</h3>

        <ul class=\"nav nav-pills nav-stacked\">

          <li><a href=\"";
        // line 59
        echo $this->env->getExtension('routing')->getPath("jn_platform_home");
        echo "\">Accueil</a></li>

          <li><a href=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("jn_platform_add");
        echo "\">Ajouter une musique</a></li>

        </ul>


        <h4>Dernières musiques</h4>

\t 

      ";
        // line 70
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("JNPlatformBundle:Advert:menu", array("limit" => 3)));
        echo "

   \t
      </div>

      <div id=\"content\" class=\"col-md-9\">

        ";
        // line 77
        $this->displayBlock('body', $context, $blocks);
        // line 80
        echo "
      </div>

    </div>


    <hr>


    <footer>

      <p> Julien RATEAU ET Najim lAWANI © ";
        // line 91
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " and beyond.</p>

    </footer>

  </div>


  ";
        // line 98
        $this->displayBlock('javascripts', $context, $blocks);
        // line 107
        echo "

</body>

</html>
";
        
        $__internal_992a19f13dae7b59b5ab6f61c2469eae908629c176240fa17c2e80c62f36e44e->leave($__internal_992a19f13dae7b59b5ab6f61c2469eae908629c176240fa17c2e80c62f36e44e_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_1e22199d505d461375275c1c58ceffaa79d96a5301e45616b6604c4aba82c38b = $this->env->getExtension("native_profiler");
        $__internal_1e22199d505d461375275c1c58ceffaa79d96a5301e45616b6604c4aba82c38b->enter($__internal_1e22199d505d461375275c1c58ceffaa79d96a5301e45616b6604c4aba82c38b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "JN Plateforme";
        
        $__internal_1e22199d505d461375275c1c58ceffaa79d96a5301e45616b6604c4aba82c38b->leave($__internal_1e22199d505d461375275c1c58ceffaa79d96a5301e45616b6604c4aba82c38b_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_99fbe43fa83af78e773c50a48fc2e47993193c2c29ec0276890e2192e24cd660 = $this->env->getExtension("native_profiler");
        $__internal_99fbe43fa83af78e773c50a48fc2e47993193c2c29ec0276890e2192e24cd660->enter($__internal_99fbe43fa83af78e773c50a48fc2e47993193c2c29ec0276890e2192e24cd660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 16
        echo "
    ";
        // line 18
        echo "
    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">

  ";
        
        $__internal_99fbe43fa83af78e773c50a48fc2e47993193c2c29ec0276890e2192e24cd660->leave($__internal_99fbe43fa83af78e773c50a48fc2e47993193c2c29ec0276890e2192e24cd660_prof);

    }

    // line 77
    public function block_body($context, array $blocks = array())
    {
        $__internal_ad73d364f0d6b4c7b662f0153d651e4b3379ca18bb8efffbc1a865afcc5837dc = $this->env->getExtension("native_profiler");
        $__internal_ad73d364f0d6b4c7b662f0153d651e4b3379ca18bb8efffbc1a865afcc5837dc->enter($__internal_ad73d364f0d6b4c7b662f0153d651e4b3379ca18bb8efffbc1a865afcc5837dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 78
        echo "
        ";
        
        $__internal_ad73d364f0d6b4c7b662f0153d651e4b3379ca18bb8efffbc1a865afcc5837dc->leave($__internal_ad73d364f0d6b4c7b662f0153d651e4b3379ca18bb8efffbc1a865afcc5837dc_prof);

    }

    // line 98
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1856dfd46eea32482135ffc8ae80f17149e979c648fc978ab37425b9aad0bc8c = $this->env->getExtension("native_profiler");
        $__internal_1856dfd46eea32482135ffc8ae80f17149e979c648fc978ab37425b9aad0bc8c->enter($__internal_1856dfd46eea32482135ffc8ae80f17149e979c648fc978ab37425b9aad0bc8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 99
        echo "
    ";
        // line 101
        echo "
    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>

    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>

  ";
        
        $__internal_1856dfd46eea32482135ffc8ae80f17149e979c648fc978ab37425b9aad0bc8c->leave($__internal_1856dfd46eea32482135ffc8ae80f17149e979c648fc978ab37425b9aad0bc8c_prof);

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
        return array (  206 => 101,  203 => 99,  197 => 98,  189 => 78,  183 => 77,  173 => 18,  170 => 16,  164 => 15,  152 => 12,  140 => 107,  138 => 98,  128 => 91,  115 => 80,  113 => 77,  103 => 70,  91 => 61,  86 => 59,  47 => 22,  45 => 15,  39 => 12,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* */
/* <html>*/
/* */
/* <head>*/
/* */
/*   <meta charset="utf-8">*/
/* */
/*   <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* */
/* */
/*   <title>{% block title %}JN Plateforme{% endblock %}</title>*/
/* */
/* */
/*   {% block stylesheets %}*/
/* */
/*     {# On charge le CSS de bootstrap depuis le site directement #}*/
/* */
/*     <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">*/
/* */
/*   {% endblock %}*/
/* */
/* </head>*/
/* */
/* */
/* <body>*/
/* */
/*   <div class="container">*/
/* */
/*     <div id="header" class="jumbotron">*/
/* */
/*       <h1>Ma plateforme de musique</h1>*/
/* */
/*       <p>*/
/* 		Veuillez vous inscrire avant de continuer*/
/*       </p>*/
/* */
/*       <p>*/
/* */
/*         <a class="btn btn-primary btn-lg" href="https://openclassrooms.com/courses/developpez-votre-site-web-avec-le-framework-symfony2">*/
/* */
/*           S'inscrire »*/
/* */
/*         </a>*/
/* */
/*       </p>*/
/* */
/*     </div>*/
/* */
/* */
/*     <div class="row">*/
/* */
/*       <div id="menu" class="col-md-3">*/
/* */
/*         <h3>Les musiques</h3>*/
/* */
/*         <ul class="nav nav-pills nav-stacked">*/
/* */
/*           <li><a href="{{ path('jn_platform_home') }}">Accueil</a></li>*/
/* */
/*           <li><a href="{{ path('jn_platform_add') }}">Ajouter une musique</a></li>*/
/* */
/*         </ul>*/
/* */
/* */
/*         <h4>Dernières musiques</h4>*/
/* */
/* 	 */
/* */
/*       {{ render(controller("JNPlatformBundle:Advert:menu", {'limit': 3})) }}*/
/* */
/*    	*/
/*       </div>*/
/* */
/*       <div id="content" class="col-md-9">*/
/* */
/*         {% block body %}*/
/* */
/*         {% endblock %}*/
/* */
/*       </div>*/
/* */
/*     </div>*/
/* */
/* */
/*     <hr>*/
/* */
/* */
/*     <footer>*/
/* */
/*       <p> Julien RATEAU ET Najim lAWANI © {{ 'now'|date('Y') }} and beyond.</p>*/
/* */
/*     </footer>*/
/* */
/*   </div>*/
/* */
/* */
/*   {% block javascripts %}*/
/* */
/*     {# Ajoutez ces lignes JavaScript si vous comptez vous servir des fonctionnalités du bootstrap Twitter #}*/
/* */
/*     <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>*/
/* */
/*     <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>*/
/* */
/*   {% endblock %}*/
/* */
/* */
/* </body>*/
/* */
/* </html>*/
/* */
