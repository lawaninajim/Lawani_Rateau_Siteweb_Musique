<?php

/* JNPlatformBundle::layout.html.twig */
class __TwigTemplate_c0d714fc3c7bfe027904709302a909d0e7b5a95ff8b8e53a4df0e12990f5a251 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::layout.html.twig", "JNPlatformBundle::layout.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'jnplatform_body' => array($this, 'block_jnplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8dade989b71bdd73256dc47d2e5dbd61e52e4a1263ab683345d2b7d43deb5681 = $this->env->getExtension("native_profiler");
        $__internal_8dade989b71bdd73256dc47d2e5dbd61e52e4a1263ab683345d2b7d43deb5681->enter($__internal_8dade989b71bdd73256dc47d2e5dbd61e52e4a1263ab683345d2b7d43deb5681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JNPlatformBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8dade989b71bdd73256dc47d2e5dbd61e52e4a1263ab683345d2b7d43deb5681->leave($__internal_8dade989b71bdd73256dc47d2e5dbd61e52e4a1263ab683345d2b7d43deb5681_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9627cddaecc863570729ef62b1ad62dc19ef59ee57651069842f1c0177f69ffe = $this->env->getExtension("native_profiler");
        $__internal_9627cddaecc863570729ef62b1ad62dc19ef59ee57651069842f1c0177f69ffe->enter($__internal_9627cddaecc863570729ef62b1ad62dc19ef59ee57651069842f1c0177f69ffe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "
  Musiques - ";
        // line 7
        $this->displayParentBlock("title", $context, $blocks);
        echo "

";
        
        $__internal_9627cddaecc863570729ef62b1ad62dc19ef59ee57651069842f1c0177f69ffe->leave($__internal_9627cddaecc863570729ef62b1ad62dc19ef59ee57651069842f1c0177f69ffe_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_b15306b0136a6cc8a5ff3dd89012888d3366812abd4b63dca45ac7e104c7e1f3 = $this->env->getExtension("native_profiler");
        $__internal_b15306b0136a6cc8a5ff3dd89012888d3366812abd4b63dca45ac7e104c7e1f3->enter($__internal_b15306b0136a6cc8a5ff3dd89012888d3366812abd4b63dca45ac7e104c7e1f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "

  ";
        // line 16
        echo "
  <h1>Musiques</h1>


  <hr>


  ";
        // line 24
        echo "
  ";
        // line 25
        $this->displayBlock('jnplatform_body', $context, $blocks);
        // line 28
        echo "

";
        
        $__internal_b15306b0136a6cc8a5ff3dd89012888d3366812abd4b63dca45ac7e104c7e1f3->leave($__internal_b15306b0136a6cc8a5ff3dd89012888d3366812abd4b63dca45ac7e104c7e1f3_prof);

    }

    // line 25
    public function block_jnplatform_body($context, array $blocks = array())
    {
        $__internal_fcc77dbf32628eaae6f3f5d6903b453f20f0798332fe8f76d7570cd8ac1957c3 = $this->env->getExtension("native_profiler");
        $__internal_fcc77dbf32628eaae6f3f5d6903b453f20f0798332fe8f76d7570cd8ac1957c3->enter($__internal_fcc77dbf32628eaae6f3f5d6903b453f20f0798332fe8f76d7570cd8ac1957c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "jnplatform_body"));

        // line 26
        echo "
  ";
        
        $__internal_fcc77dbf32628eaae6f3f5d6903b453f20f0798332fe8f76d7570cd8ac1957c3->leave($__internal_fcc77dbf32628eaae6f3f5d6903b453f20f0798332fe8f76d7570cd8ac1957c3_prof);

    }

    public function getTemplateName()
    {
        return "JNPlatformBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 26,  88 => 25,  79 => 28,  77 => 25,  74 => 24,  65 => 16,  61 => 13,  55 => 12,  45 => 7,  42 => 6,  36 => 5,  11 => 2,);
    }
}
/* */
/* {% extends "::layout.html.twig" %}*/
/* */
/* */
/* {% block title %}*/
/* */
/*   Musiques - {{ parent() }}*/
/* */
/* {% endblock %}*/
/* */
/* */
/* {% block body %}*/
/* */
/* */
/*   {# On définit un sous-titre commun à toutes les pages du bundle, par exemple #}*/
/* */
/*   <h1>Musiques</h1>*/
/* */
/* */
/*   <hr>*/
/* */
/* */
/*   {# On définit un nouveau bloc, que les vues du bundle pourront remplir #}*/
/* */
/*   {% block jnplatform_body %}*/
/* */
/*   {% endblock %}*/
/* */
/* */
/* {% endblock %}*/
/* */
/* */
