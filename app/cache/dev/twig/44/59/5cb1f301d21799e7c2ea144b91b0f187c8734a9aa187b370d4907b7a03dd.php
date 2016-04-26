<?php

/* GsbBundle::base.html.twig */
class __TwigTemplate_44595cb1f301d21799e7c2ea144b91b0f187c8734a9aa187b370d4907b7a03dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'menu' => array($this, 'block_menu'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b11123f1229c5a478a2a2752a7fbde061515427d143967db8a682930b1a63c25 = $this->env->getExtension("native_profiler");
        $__internal_b11123f1229c5a478a2a2752a7fbde061515427d143967db8a682930b1a63c25->enter($__internal_b11123f1229c5a478a2a2752a7fbde061515427d143967db8a682930b1a63c25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GsbBundle::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"fr\" lang=\"fr\">
    <head>
        <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />
        <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/gsb/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/gsb/css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        <script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/gsb/js/script.js"), "html", null, true);
        echo "\"></script>
    </head>
    <body>
        <div id=\"page\">
            <div id=\"entete\">
                <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/gsb/images/logo.jpg"), "html", null, true);
        echo "\" id=\"logoGSB\" alt=\"Laboratoire Galaxy-Swiss Bourdin\" title=\"Laboratoire Galaxy-Swiss Bourdin\" width=\"200px\"/>
                <h1 id=\"titre\">Suivi du remboursement des frais</h1>
            </div>
            <div id=\"menu\">";
        // line 16
        $this->displayBlock('menu', $context, $blocks);
        echo "</div>
            <div id=\"contenu\">";
        // line 17
        $this->displayBlock('body', $context, $blocks);
        echo "</div>
        </div>
    </body>
</html>


";
        
        $__internal_b11123f1229c5a478a2a2752a7fbde061515427d143967db8a682930b1a63c25->leave($__internal_b11123f1229c5a478a2a2752a7fbde061515427d143967db8a682930b1a63c25_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_9f2131d08ac9954381297628d2b66251aad4f063d58752b04f4e3710e19dce36 = $this->env->getExtension("native_profiler");
        $__internal_9f2131d08ac9954381297628d2b66251aad4f063d58752b04f4e3710e19dce36->enter($__internal_9f2131d08ac9954381297628d2b66251aad4f063d58752b04f4e3710e19dce36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Intranet du Laboratoire Galaxy-Swiss Bourdin ";
        
        $__internal_9f2131d08ac9954381297628d2b66251aad4f063d58752b04f4e3710e19dce36->leave($__internal_9f2131d08ac9954381297628d2b66251aad4f063d58752b04f4e3710e19dce36_prof);

    }

    // line 16
    public function block_menu($context, array $blocks = array())
    {
        $__internal_87e2ec4f5b90120592ab47b366b6ea9e6831b4f4624412e2fde845ea3c8457b6 = $this->env->getExtension("native_profiler");
        $__internal_87e2ec4f5b90120592ab47b366b6ea9e6831b4f4624412e2fde845ea3c8457b6->enter($__internal_87e2ec4f5b90120592ab47b366b6ea9e6831b4f4624412e2fde845ea3c8457b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        echo " ";
        
        $__internal_87e2ec4f5b90120592ab47b366b6ea9e6831b4f4624412e2fde845ea3c8457b6->leave($__internal_87e2ec4f5b90120592ab47b366b6ea9e6831b4f4624412e2fde845ea3c8457b6_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_ae88ab22b524e6b13489bae34b4465713d592d8a3ea1981bc0f8ec1af39d77f1 = $this->env->getExtension("native_profiler");
        $__internal_ae88ab22b524e6b13489bae34b4465713d592d8a3ea1981bc0f8ec1af39d77f1->enter($__internal_ae88ab22b524e6b13489bae34b4465713d592d8a3ea1981bc0f8ec1af39d77f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " ";
        
        $__internal_ae88ab22b524e6b13489bae34b4465713d592d8a3ea1981bc0f8ec1af39d77f1->leave($__internal_ae88ab22b524e6b13489bae34b4465713d592d8a3ea1981bc0f8ec1af39d77f1_prof);

    }

    public function getTemplateName()
    {
        return "GsbBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 17,  87 => 16,  75 => 4,  61 => 17,  57 => 16,  51 => 13,  43 => 8,  39 => 7,  35 => 6,  30 => 4,  25 => 1,);
    }
}
