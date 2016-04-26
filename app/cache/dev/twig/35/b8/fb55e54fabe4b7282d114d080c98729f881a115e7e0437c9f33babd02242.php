<?php

/* GsbBundle:VuesVisiteur:vueBaseAvecMenu.html.twig */
class __TwigTemplate_35b8fb55e54fabe4b7282d114d080c98729f881a115e7e0437c9f33babd02242 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GsbBundle::base.html.twig", "GsbBundle:VuesVisiteur:vueBaseAvecMenu.html.twig", 1);
        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "GsbBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a4908ad24c5f6908f53f374849210d2634c17d7f19f32a056a979ad2da884997 = $this->env->getExtension("native_profiler");
        $__internal_a4908ad24c5f6908f53f374849210d2634c17d7f19f32a056a979ad2da884997->enter($__internal_a4908ad24c5f6908f53f374849210d2634c17d7f19f32a056a979ad2da884997_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GsbBundle:VuesVisiteur:vueBaseAvecMenu.html.twig"));

        // line 2
        $context["visiteur"] = $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array());
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4908ad24c5f6908f53f374849210d2634c17d7f19f32a056a979ad2da884997->leave($__internal_a4908ad24c5f6908f53f374849210d2634c17d7f19f32a056a979ad2da884997_prof);

    }

    // line 3
    public function block_menu($context, array $blocks = array())
    {
        $__internal_86580945766d0917a200485b5dbd5ae23804bdd97c7777d8ac7a06adac27ae99 = $this->env->getExtension("native_profiler");
        $__internal_86580945766d0917a200485b5dbd5ae23804bdd97c7777d8ac7a06adac27ae99->enter($__internal_86580945766d0917a200485b5dbd5ae23804bdd97c7777d8ac7a06adac27ae99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 4
        echo "    
    <div class=\"center\" id=\"nomVisiteur\">
        ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["visiteur"]) ? $context["visiteur"] : $this->getContext($context, "visiteur")), "get", array(0 => "nom"), "method"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["visiteur"]) ? $context["visiteur"] : $this->getContext($context, "visiteur")), "get", array(0 => "prenom"), "method"), "html", null, true);
        echo " 
    </div>
    
    <table class=\"center\" id=\"tableMenu\">
        <tr>
            <td onClick=\"window.location.replace('saisieFiche')\" class=\"lienMenu\">Saisir fiche de frais</td>
            <td onClick=\"window.location.replace('mesFiches')\" class=\"lienMenu\">Mes fiches de frais</td>
            <td onClick=\"confirmDeco()\" class=\"lienMenu\">Déconnexion</td>
        </tr>
    </table>
";
        
        $__internal_86580945766d0917a200485b5dbd5ae23804bdd97c7777d8ac7a06adac27ae99->leave($__internal_86580945766d0917a200485b5dbd5ae23804bdd97c7777d8ac7a06adac27ae99_prof);

    }

    public function getTemplateName()
    {
        return "GsbBundle:VuesVisiteur:vueBaseAvecMenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 6,  43 => 4,  37 => 3,  30 => 1,  28 => 2,  11 => 1,);
    }
}
