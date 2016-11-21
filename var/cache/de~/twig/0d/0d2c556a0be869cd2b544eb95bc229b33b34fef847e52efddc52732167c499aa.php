<?php

/* base.html.twig */
class __TwigTemplate_8ac6f12f0872afc66c8c2536f302b74e6e1636d1973b669fb61bc43ba06f41df extends Twig_Template
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
        $__internal_db77b6b39bde91130888e82981a7f0516f954602ea13d17d2dcb3d033336330b = $this->env->getExtension("native_profiler");
        $__internal_db77b6b39bde91130888e82981a7f0516f954602ea13d17d2dcb3d033336330b->enter($__internal_db77b6b39bde91130888e82981a7f0516f954602ea13d17d2dcb3d033336330b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_db77b6b39bde91130888e82981a7f0516f954602ea13d17d2dcb3d033336330b->leave($__internal_db77b6b39bde91130888e82981a7f0516f954602ea13d17d2dcb3d033336330b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f1fca6f33abf5b22757d9371c4187578231baebfd652093c4aa03241a0420c65 = $this->env->getExtension("native_profiler");
        $__internal_f1fca6f33abf5b22757d9371c4187578231baebfd652093c4aa03241a0420c65->enter($__internal_f1fca6f33abf5b22757d9371c4187578231baebfd652093c4aa03241a0420c65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f1fca6f33abf5b22757d9371c4187578231baebfd652093c4aa03241a0420c65->leave($__internal_f1fca6f33abf5b22757d9371c4187578231baebfd652093c4aa03241a0420c65_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0da7362de5164e3d32a4a99b86e29e42d7591d85bbc4c9e81effefb646b28f9e = $this->env->getExtension("native_profiler");
        $__internal_0da7362de5164e3d32a4a99b86e29e42d7591d85bbc4c9e81effefb646b28f9e->enter($__internal_0da7362de5164e3d32a4a99b86e29e42d7591d85bbc4c9e81effefb646b28f9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_0da7362de5164e3d32a4a99b86e29e42d7591d85bbc4c9e81effefb646b28f9e->leave($__internal_0da7362de5164e3d32a4a99b86e29e42d7591d85bbc4c9e81effefb646b28f9e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_06831c27bd7ceb303fed149e90aa888d81fbe8775ccfa6cb7ce6a575af6a854d = $this->env->getExtension("native_profiler");
        $__internal_06831c27bd7ceb303fed149e90aa888d81fbe8775ccfa6cb7ce6a575af6a854d->enter($__internal_06831c27bd7ceb303fed149e90aa888d81fbe8775ccfa6cb7ce6a575af6a854d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_06831c27bd7ceb303fed149e90aa888d81fbe8775ccfa6cb7ce6a575af6a854d->leave($__internal_06831c27bd7ceb303fed149e90aa888d81fbe8775ccfa6cb7ce6a575af6a854d_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0d77dcb6addfe06ed6db668afd920df3af35e1e50484b951ab7b9b6c9a1b9b64 = $this->env->getExtension("native_profiler");
        $__internal_0d77dcb6addfe06ed6db668afd920df3af35e1e50484b951ab7b9b6c9a1b9b64->enter($__internal_0d77dcb6addfe06ed6db668afd920df3af35e1e50484b951ab7b9b6c9a1b9b64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_0d77dcb6addfe06ed6db668afd920df3af35e1e50484b951ab7b9b6c9a1b9b64->leave($__internal_0d77dcb6addfe06ed6db668afd920df3af35e1e50484b951ab7b9b6c9a1b9b64_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
