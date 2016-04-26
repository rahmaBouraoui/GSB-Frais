<?php

/* GsbBundle:VuesVisiteur:vueMesFiches.html.twig */
class __TwigTemplate_3c901e35f270fef09837335390ab54d4b9eb87d60a12a24c1d0ff8fee84a13ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GsbBundle:VuesVisiteur:vueBaseAvecMenu.html.twig", "GsbBundle:VuesVisiteur:vueMesFiches.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "GsbBundle:VuesVisiteur:vueBaseAvecMenu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5272350cbe7bdeda2e26b6d4fcead89b14e4be0984390eacb38ab41e99ea6329 = $this->env->getExtension("native_profiler");
        $__internal_5272350cbe7bdeda2e26b6d4fcead89b14e4be0984390eacb38ab41e99ea6329->enter($__internal_5272350cbe7bdeda2e26b6d4fcead89b14e4be0984390eacb38ab41e99ea6329_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GsbBundle:VuesVisiteur:vueMesFiches.html.twig"));

        // line 3
        $context["varBoucle"] = 1;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5272350cbe7bdeda2e26b6d4fcead89b14e4be0984390eacb38ab41e99ea6329->leave($__internal_5272350cbe7bdeda2e26b6d4fcead89b14e4be0984390eacb38ab41e99ea6329_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_ce83266e71943d48f916597ae2145fa2d73f5c57f0c008aebde83c52905436b5 = $this->env->getExtension("native_profiler");
        $__internal_ce83266e71943d48f916597ae2145fa2d73f5c57f0c008aebde83c52905436b5->enter($__internal_ce83266e71943d48f916597ae2145fa2d73f5c57f0c008aebde83c52905436b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " 
    <div class=\"divStyle\">
        <h1 style=\"padding-top: 15px\"></h1>
        ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        <div class=\"center\" style=\"width: 140px\">
            ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "datesPossibles", array()), 'widget');
        echo "
        </div>
        ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
        
        <div>
            <h2 align=\"center\">Frais Forfait</h2>
            <table class=\"center\" id=\"tableFraisForfait\">
                <tr> 
                    <th style=\"text-align:center\">Repas midi</th>
                    <th style=\"text-align:center\">Nuitée</th>
                    <th style=\"text-align:center\">Etape</th>
                    <th style=\"text-align:center\">Kilomètre</th>
                    <th style=\"text-align:center\">Situation</th>
                    <th style=\"text-align:center\">Date</th>
                </tr>
                <tr><td style=\"padding-top:6px\"></td></tr>
                <tr class=\"trStyle\" style=\"background-color: #aaa\">
                    <td class=\"tdStyle\">";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fraisForfaits"]) ? $context["fraisForfaits"] : $this->getContext($context, "fraisForfaits")), "nbRepas", array()), "html", null, true);
        echo "</td>
                    <td class=\"tdStyle\">";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fraisForfaits"]) ? $context["fraisForfaits"] : $this->getContext($context, "fraisForfaits")), "nbNuit", array()), "html", null, true);
        echo "</td>
                    <td class=\"tdStyle\">";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fraisForfaits"]) ? $context["fraisForfaits"] : $this->getContext($context, "fraisForfaits")), "nbEtape", array()), "html", null, true);
        echo "</td>
                    <td class=\"tdStyle\">";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fraisForfaits"]) ? $context["fraisForfaits"] : $this->getContext($context, "fraisForfaits")), "nbKm", array()), "html", null, true);
        echo "</td>
                    <td class=\"tdStyle\">";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fraisForfaits"]) ? $context["fraisForfaits"] : $this->getContext($context, "fraisForfaits")), "etatFraisForfait", array()), "html", null, true);
        echo "</td>
                    <td>";
        // line 31
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ficheFrais"]) ? $context["ficheFrais"] : $this->getContext($context, "ficheFrais")), "dateModif", array()), "d/m/Y"), "html", null, true);
        echo "</td>
                </tr>
            </table>
        </div>
        <div>
            <h2 align=\"center\">Frais Hors Forfait</h2>
            <table class=\"center\" id=\"tableFraisHorsForfait\">
                <tr>
                    <th width=\"150px\" style=\"padding-left: 10px; width: 100px\">Date</th>
                    <th style=\"padding-left: 10px; width: 30%\">Libelle</th>
                    <th width=\"170px\" style=\"padding-right: 10px; text-align: right\">Montant</th>
                    <th width=\"150px\" style=\"text-align: right; padding-right: 10px; width: 25%\">Situation</th>
                </tr>
                <tr><td style=\"padding-top:6px\"></td></tr>
                ";
        // line 45
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesHorsForfait"]) ? $context["lesHorsForfait"] : $this->getContext($context, "lesHorsForfait")));
        foreach ($context['_seq'] as $context["_key"] => $context["unHorsForfait"]) {
            // line 46
            echo "                    ";
            if ((0 == (isset($context["varBoucle"]) ? $context["varBoucle"] : $this->getContext($context, "varBoucle")) % 2)) {
                // line 47
                echo "                        <tr class=\"trStyle\" style=\"background-color: #999\">
                    ";
            } else {
                // line 49
                echo "                        <tr class=\"trStyle\" style=\"background-color: #bbb\">
                    ";
            }
            // line 51
            echo "                        <td class=\"tdStyle\" style=\"padding-left: 10px\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["unHorsForfait"], "dateFrais", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                        <td class=\"tdStyle\" style=\"padding-left: 10px\">";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["unHorsForfait"], "libelle", array()), "html", null, true);
            echo "</td>
                        <td class=\"tdStyle\" style=\"padding-right: 10px; text-align: right\">";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["unHorsForfait"], "montant", array()), "html", null, true);
            echo "</td>
                        <td style=\"text-align:right; padding-right: 10px\">";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["unHorsForfait"], "idEtat", array()), "libelle", array()), "html", null, true);
            echo "</td>
                    </tr>
                ";
            // line 56
            $context["varBoucle"] = ((isset($context["varBoucle"]) ? $context["varBoucle"] : $this->getContext($context, "varBoucle")) + 1);
            // line 57
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unHorsForfait'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "            </table>
        </div>
        <div>
            <h2 align=\"center\">Hors Classification</h2>
            <table class=\"center\" id=\"horsClassification\">
                <tr>
                    <th style=\"padding-left: 10px\">Justificatifs</th>
                    <th style=\"padding-left: 10px\">Montant</th>
                </tr>
                <tr><td style=\"padding-top:6px\"></td></tr>
                <tr style=\"background-color: #bbb\">
                    <td class=\"tdStyle\" style=\"padding-left: 10px; text-align: center\">";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ficheFrais"]) ? $context["ficheFrais"] : $this->getContext($context, "ficheFrais")), "nbJustificatifs", array()), "html", null, true);
        echo "</td>
                    <td style=\"padding-right: 10px; text-align: right\">";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ficheFrais"]) ? $context["ficheFrais"] : $this->getContext($context, "ficheFrais")), "montantValide", array()), "html", null, true);
        echo "</td>
                </tr>
            </table>
        </div>
    </div>
";
        
        $__internal_ce83266e71943d48f916597ae2145fa2d73f5c57f0c008aebde83c52905436b5->leave($__internal_ce83266e71943d48f916597ae2145fa2d73f5c57f0c008aebde83c52905436b5_prof);

    }

    public function getTemplateName()
    {
        return "GsbBundle:VuesVisiteur:vueMesFiches.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 70,  166 => 69,  153 => 58,  147 => 57,  145 => 56,  140 => 54,  136 => 53,  132 => 52,  127 => 51,  123 => 49,  119 => 47,  116 => 46,  112 => 45,  95 => 31,  91 => 30,  87 => 29,  83 => 28,  79 => 27,  75 => 26,  57 => 11,  52 => 9,  47 => 7,  37 => 4,  30 => 1,  28 => 3,  11 => 1,);
    }
}
