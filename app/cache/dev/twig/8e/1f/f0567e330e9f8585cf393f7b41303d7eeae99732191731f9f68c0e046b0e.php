<?php

/* GsbBundle:VuesComptable:vueBaseAvecMenu.html.twig */
class __TwigTemplate_8e1ff0567e330e9f8585cf393f7b41303d7eeae99732191731f9f68c0e046b0e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GsbBundle::base.html.twig", "GsbBundle:VuesComptable:vueBaseAvecMenu.html.twig", 1);
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
        $__internal_08470e7742dbdaf64806362c3bca4b18b2c4c267975a887617adb66047adf712 = $this->env->getExtension("native_profiler");
        $__internal_08470e7742dbdaf64806362c3bca4b18b2c4c267975a887617adb66047adf712->enter($__internal_08470e7742dbdaf64806362c3bca4b18b2c4c267975a887617adb66047adf712_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GsbBundle:VuesComptable:vueBaseAvecMenu.html.twig"));

        // line 2
        $context["visiteur"] = $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array());
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_08470e7742dbdaf64806362c3bca4b18b2c4c267975a887617adb66047adf712->leave($__internal_08470e7742dbdaf64806362c3bca4b18b2c4c267975a887617adb66047adf712_prof);

    }

    // line 3
    public function block_menu($context, array $blocks = array())
    {
        $__internal_97daace191e7ee92dc6a338066032304d6667c839a7f55b698888270cacf3169 = $this->env->getExtension("native_profiler");
        $__internal_97daace191e7ee92dc6a338066032304d6667c839a7f55b698888270cacf3169->enter($__internal_97daace191e7ee92dc6a338066032304d6667c839a7f55b698888270cacf3169_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 4
        echo "    <div class=\"center\" id=\"nomVisiteur\">
        ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["visiteur"]) ? $context["visiteur"] : $this->getContext($context, "visiteur")), "get", array(0 => "nom"), "method"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["visiteur"]) ? $context["visiteur"] : $this->getContext($context, "visiteur")), "get", array(0 => "prenom"), "method"), "html", null, true);
        echo " 
    </div>
    
    <table class=\"center\" id=\"tableMenu\">
        <tr>
            <td onClick=\"window.location.replace('suivreFicheFrais0-0')\" class=\"lienMenu\">Suivres fiches</td>
            ";
        // line 12
        echo "            <td onClick=\"confirmDeco()\" class=\"lienMenu\">Déconnexion</td>
        </tr>
    </table>
";
        
        $__internal_97daace191e7ee92dc6a338066032304d6667c839a7f55b698888270cacf3169->leave($__internal_97daace191e7ee92dc6a338066032304d6667c839a7f55b698888270cacf3169_prof);

    }

    public function getTemplateName()
    {
        return "GsbBundle:VuesComptable:vueBaseAvecMenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 12,  46 => 5,  43 => 4,  37 => 3,  30 => 1,  28 => 2,  11 => 1,);
    }
}
