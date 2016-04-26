<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_a22c844780d9251eed777a3fbb74dbfc4ea07a0034af1f212903e048c172611a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4f7cc77c43bb440d8fe8996f05ead687cd42281dc97f6434d2aaffa8de4c9d84 = $this->env->getExtension("native_profiler");
        $__internal_4f7cc77c43bb440d8fe8996f05ead687cd42281dc97f6434d2aaffa8de4c9d84->enter($__internal_4f7cc77c43bb440d8fe8996f05ead687cd42281dc97f6434d2aaffa8de4c9d84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f7cc77c43bb440d8fe8996f05ead687cd42281dc97f6434d2aaffa8de4c9d84->leave($__internal_4f7cc77c43bb440d8fe8996f05ead687cd42281dc97f6434d2aaffa8de4c9d84_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_69edf3f45fa3957951bb2200bc03819c25d1ff6acf21382226d9d9bfd07a678b = $this->env->getExtension("native_profiler");
        $__internal_69edf3f45fa3957951bb2200bc03819c25d1ff6acf21382226d9d9bfd07a678b->enter($__internal_69edf3f45fa3957951bb2200bc03819c25d1ff6acf21382226d9d9bfd07a678b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_69edf3f45fa3957951bb2200bc03819c25d1ff6acf21382226d9d9bfd07a678b->leave($__internal_69edf3f45fa3957951bb2200bc03819c25d1ff6acf21382226d9d9bfd07a678b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_fb94c6c0c10b08e4ddf177c3fb83be9f98f1120005b3a130eae3b9fc824b532c = $this->env->getExtension("native_profiler");
        $__internal_fb94c6c0c10b08e4ddf177c3fb83be9f98f1120005b3a130eae3b9fc824b532c->enter($__internal_fb94c6c0c10b08e4ddf177c3fb83be9f98f1120005b3a130eae3b9fc824b532c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_fb94c6c0c10b08e4ddf177c3fb83be9f98f1120005b3a130eae3b9fc824b532c->leave($__internal_fb94c6c0c10b08e4ddf177c3fb83be9f98f1120005b3a130eae3b9fc824b532c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_7376ac5ae2ef624b07603777df3ecdac472e23a4364c1586f068d20b46ebe8ba = $this->env->getExtension("native_profiler");
        $__internal_7376ac5ae2ef624b07603777df3ecdac472e23a4364c1586f068d20b46ebe8ba->enter($__internal_7376ac5ae2ef624b07603777df3ecdac472e23a4364c1586f068d20b46ebe8ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_7376ac5ae2ef624b07603777df3ecdac472e23a4364c1586f068d20b46ebe8ba->leave($__internal_7376ac5ae2ef624b07603777df3ecdac472e23a4364c1586f068d20b46ebe8ba_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
