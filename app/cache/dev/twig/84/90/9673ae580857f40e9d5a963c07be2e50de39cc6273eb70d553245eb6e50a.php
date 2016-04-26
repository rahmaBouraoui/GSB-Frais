<?php

/* GsbBundle:VuesComptable:vueSuivrePaiement.html.twig */
class __TwigTemplate_84909673ae580857f40e9d5a963c07be2e50de39cc6273eb70d553245eb6e50a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GsbBundle:VuesComptable:vueBaseAvecMenu.html.twig", "GsbBundle:VuesComptable:vueSuivrePaiement.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "GsbBundle:VuesComptable:vueBaseAvecMenu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_629a4146387bcf78aab38b2a719cf4781d748aa8a09137e0cf1fa16eada6e396 = $this->env->getExtension("native_profiler");
        $__internal_629a4146387bcf78aab38b2a719cf4781d748aa8a09137e0cf1fa16eada6e396->enter($__internal_629a4146387bcf78aab38b2a719cf4781d748aa8a09137e0cf1fa16eada6e396_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GsbBundle:VuesComptable:vueSuivrePaiement.html.twig"));

        // line 3
        $context["comptable"] = $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array());
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_629a4146387bcf78aab38b2a719cf4781d748aa8a09137e0cf1fa16eada6e396->leave($__internal_629a4146387bcf78aab38b2a719cf4781d748aa8a09137e0cf1fa16eada6e396_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_c1ee68194b69fbe8fa87fa677f107a2d3d655a2d78ad95bde57f3d3b7567acf5 = $this->env->getExtension("native_profiler");
        $__internal_c1ee68194b69fbe8fa87fa677f107a2d3d655a2d78ad95bde57f3d3b7567acf5->enter($__internal_c1ee68194b69fbe8fa87fa677f107a2d3d655a2d78ad95bde57f3d3b7567acf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    Vue Suivi
";
        
        $__internal_c1ee68194b69fbe8fa87fa677f107a2d3d655a2d78ad95bde57f3d3b7567acf5->leave($__internal_c1ee68194b69fbe8fa87fa677f107a2d3d655a2d78ad95bde57f3d3b7567acf5_prof);

    }

    public function getTemplateName()
    {
        return "GsbBundle:VuesComptable:vueSuivrePaiement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  37 => 4,  30 => 1,  28 => 3,  11 => 1,);
    }
}
