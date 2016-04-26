<?php

/* GsbBundle::vueConnexion.html.twig */
class __TwigTemplate_8483b83960103d097ab22b992b1e5ac54a4a4f735f47730dfc486528b5fde6b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GsbBundle::base.html.twig", "GsbBundle::vueConnexion.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "GsbBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4baf2a55d4e02468677bb45deb82894e00f9247057b60c2fad27e7ab8ae84425 = $this->env->getExtension("native_profiler");
        $__internal_4baf2a55d4e02468677bb45deb82894e00f9247057b60c2fad27e7ab8ae84425->enter($__internal_4baf2a55d4e02468677bb45deb82894e00f9247057b60c2fad27e7ab8ae84425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GsbBundle::vueConnexion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4baf2a55d4e02468677bb45deb82894e00f9247057b60c2fad27e7ab8ae84425->leave($__internal_4baf2a55d4e02468677bb45deb82894e00f9247057b60c2fad27e7ab8ae84425_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_b42846d15c30bd6e08ab999a07836a974475a2ada7d39326219cd1a0c03be998 = $this->env->getExtension("native_profiler");
        $__internal_b42846d15c30bd6e08ab999a07836a974475a2ada7d39326219cd1a0c03be998->enter($__internal_b42846d15c30bd6e08ab999a07836a974475a2ada7d39326219cd1a0c03be998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " 
            ";
        // line 3
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
            <div id=\"divConnexion\">
                ";
        // line 5
        if (((isset($context["etatConnexion"]) ? $context["etatConnexion"] : $this->getContext($context, "etatConnexion")) == "Erreur")) {
            // line 6
            echo "                    <div class=\"erreurConnexion\" id=\"erreurConnexion\" >
                        Echec de connexion
                    </div>
                ";
        }
        // line 10
        echo "                <table class=\"test\" align=\"center\">
                    <tr>
                        <tr>
                            <td>";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "login", array()), 'label');
        echo "</td><td></td><td></td>
                        </tr>
                        <tr>
                            <td colspan=\"3\">";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "login", array()), 'widget');
        echo "</td>
                        </tr>
                    </tr>
                    <tr>
                        <tr>
                            <td class=\"espacement\">";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "motDePasse", array()), 'label');
        echo "</td><td></td><td></td>
                        </tr>
                        <tr>
                            <td colspan=\"3\">";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "motDePasse", array()), 'widget');
        echo "</td>
                        </tr>
                    </tr>
                    <tr>
                        <td class=\"espacement\">";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "annuler", array()), 'widget');
        echo "</td><td></td>
                        <td class=\"espacement\">";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "connexion", array()), 'widget');
        echo "</td>
                    </tr>
                </table>
            </div>
            ";
        // line 33
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                
        ";
        
        $__internal_b42846d15c30bd6e08ab999a07836a974475a2ada7d39326219cd1a0c03be998->leave($__internal_b42846d15c30bd6e08ab999a07836a974475a2ada7d39326219cd1a0c03be998_prof);

    }

    public function getTemplateName()
    {
        return "GsbBundle::vueConnexion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 33,  91 => 29,  87 => 28,  80 => 24,  74 => 21,  66 => 16,  60 => 13,  55 => 10,  49 => 6,  47 => 5,  42 => 3,  34 => 2,  11 => 1,);
    }
}
