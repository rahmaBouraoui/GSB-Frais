<?php

/* GsbBundle:VuesVisiteur:vueSaisieFiche.html.twig */
class __TwigTemplate_2ccb34af60415716c0ac7b54af8975494eae2e6dc4570e3ea2c11df22961202a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GsbBundle:VuesVisiteur:vueBaseAvecMenu.html.twig", "GsbBundle:VuesVisiteur:vueSaisieFiche.html.twig", 1);
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
        $__internal_03af78b1f47dc630aeb7b07a0cceacf78bbc9819d624f7761c5a50019be08df1 = $this->env->getExtension("native_profiler");
        $__internal_03af78b1f47dc630aeb7b07a0cceacf78bbc9819d624f7761c5a50019be08df1->enter($__internal_03af78b1f47dc630aeb7b07a0cceacf78bbc9819d624f7761c5a50019be08df1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GsbBundle:VuesVisiteur:vueSaisieFiche.html.twig"));

        // line 3
        $context["varBoucle"] = 1;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03af78b1f47dc630aeb7b07a0cceacf78bbc9819d624f7761c5a50019be08df1->leave($__internal_03af78b1f47dc630aeb7b07a0cceacf78bbc9819d624f7761c5a50019be08df1_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_bfa36273170efa1a53433b8056affbd446173bcf62aa042035530f766cffef5e = $this->env->getExtension("native_profiler");
        $__internal_bfa36273170efa1a53433b8056affbd446173bcf62aa042035530f766cffef5e->enter($__internal_bfa36273170efa1a53433b8056affbd446173bcf62aa042035530f766cffef5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " 
    
    <div class=\"divStyle\">
        <h1 style=\"text-align: center; padding-top: 15px\">";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["titre"]) ? $context["titre"] : $this->getContext($context, "titre")), "html", null, true);
        echo "</h1>
        <div style=\"text-align: center; margin-top: -10px\">Dernière modif : ";
        // line 8
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["derniereModif"]) ? $context["derniereModif"] : $this->getContext($context, "derniereModif")), "d/m/Y"), "html", null, true);
        echo "</div>

        <h2 style=\"padding-top: 20px\">Frais Forfait</h2>
        ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formFrais"]) ? $context["formFrais"] : $this->getContext($context, "formFrais")), 'form_start');
        echo "
        <table class=\"tableFicheFrais\" align=\"center\">
            <tr>
                <td>";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formFrais"]) ? $context["formFrais"] : $this->getContext($context, "formFrais")), "repasMidi", array()), 'label');
        echo "</td>
                <td>";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formFrais"]) ? $context["formFrais"] : $this->getContext($context, "formFrais")), "nuitee", array()), 'label');
        echo "</td>
                <td>";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formFrais"]) ? $context["formFrais"] : $this->getContext($context, "formFrais")), "etape", array()), 'label');
        echo "</td>
                <td>";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formFrais"]) ? $context["formFrais"] : $this->getContext($context, "formFrais")), "km", array()), 'label');
        echo "</td>
            </tr>
            <tr>
                <td>";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formFrais"]) ? $context["formFrais"] : $this->getContext($context, "formFrais")), "repasMidi", array()), 'widget');
        echo "</td>
                <td>";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formFrais"]) ? $context["formFrais"] : $this->getContext($context, "formFrais")), "nuitee", array()), 'widget');
        echo "</td>
                <td>";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formFrais"]) ? $context["formFrais"] : $this->getContext($context, "formFrais")), "etape", array()), 'widget');
        echo "</td>
                <td>";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formFrais"]) ? $context["formFrais"] : $this->getContext($context, "formFrais")), "km", array()), 'widget');
        echo "</td>
                <td>";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formFrais"]) ? $context["formFrais"] : $this->getContext($context, "formFrais")), "annuler", array()), 'widget');
        echo "</td>
                <td>";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formFrais"]) ? $context["formFrais"] : $this->getContext($context, "formFrais")), "miseAJour", array()), 'widget');
        echo "</td>
            </tr>
        </table>
        ";
        // line 28
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formFrais"]) ? $context["formFrais"] : $this->getContext($context, "formFrais")), 'form_end');
        echo "
        <hr>
        
        <h2 style=\"padding-top: 20px\">Hors Forfait</h2>
        ";
        // line 32
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formHorsForfait"]) ? $context["formHorsForfait"] : $this->getContext($context, "formHorsForfait")), 'form_start');
        echo "
        <table id=\"tableFraisHorsForfaits\" align=\"center\" style=\"width: 70%\">
            <tr>
                <th style=\"padding-left: 10px; width: 150px\" colspan=\"4\">Date</th>
                <th style=\"padding-left: 10px\">Libellé</th>
                <th style=\"padding-left: 10px\">Montant</th>
            </tr>
            <tr>
                <td style=\"width: 70px;padding-left: 10px\">";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formHorsForfait"]) ? $context["formHorsForfait"] : $this->getContext($context, "formHorsForfait")), "jour", array()), 'widget');
        echo "</td>
                <td style=\"padding-left: 2px\">/</td>
                <td style=\"width: 65px;padding-left: 2px\">";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formHorsForfait"]) ? $context["formHorsForfait"] : $this->getContext($context, "formHorsForfait")), "mois", array()), 'widget');
        echo "</td>
                <td style=\"padding-left: 4px; width: 60px \">/";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["anneeCourant"]) ? $context["anneeCourant"] : $this->getContext($context, "anneeCourant")), "html", null, true);
        echo "</td>
                <td>";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formHorsForfait"]) ? $context["formHorsForfait"] : $this->getContext($context, "formHorsForfait")), "libelle", array()), 'widget');
        echo "</td>
                <td style=\"width: 20%\">";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formHorsForfait"]) ? $context["formHorsForfait"] : $this->getContext($context, "formHorsForfait")), "montant", array()), 'widget');
        echo "</td>
                <td style=\"padding-left: 15px; width: 100px\">";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formHorsForfait"]) ? $context["formHorsForfait"] : $this->getContext($context, "formHorsForfait")), "ajouter", array()), 'widget');
        echo "</td>
            </tr>
            <tr><td style=\"padding-top: 10px;\"></td></tr>
            ";
        // line 49
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fraisHorsForfaits"]) ? $context["fraisHorsForfaits"] : $this->getContext($context, "fraisHorsForfaits")));
        foreach ($context['_seq'] as $context["_key"] => $context["unFrais"]) {
            // line 50
            echo "                ";
            if ((0 == (isset($context["varBoucle"]) ? $context["varBoucle"] : $this->getContext($context, "varBoucle")) % 2)) {
                // line 51
                echo "                    <tr class=\"trStyle\" style=\"background-color: #999\">
                ";
            } else {
                // line 53
                echo "                    <tr class=\"trStyle\" style=\"background-color: #bbb\">
                ";
            }
            // line 55
            echo "                    <td class=\"tdStyle\" style=\"padding-left: 10px\" colspan=\"4\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["unFrais"], "dateFrais", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                    <td class=\"tdStyle\" style=\"padding-left: 10px\">";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["unFrais"], "libelle", array()), "html", null, true);
            echo "</td>
                    <td class=\"tdStyle\" style=\"padding-right: 10px; text-align: right\">";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["unFrais"], "montant", array()), "html", null, true);
            echo "</td>
                    <td style=\"text-align: center\"><img src=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/gsb/images/icone_supprimer.gif"), "html", null, true);
            echo "\" onCLick=\"supprimerHorsForfait(";
            echo twig_escape_filter($this->env, $this->getAttribute($context["unFrais"], "idLigneFraisHorsForfait", array()), "html", null, true);
            echo ",'";
            echo twig_escape_filter($this->env, $this->getAttribute($context["unFrais"], "libelle", array()), "html", null, true);
            echo "', '";
            echo twig_escape_filter($this->env, $this->getAttribute($context["unFrais"], "montant", array()), "html", null, true);
            echo "', '";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["unFrais"], "dateFrais", array()), "d/m/Y"), "html", null, true);
            echo "', ";
            echo twig_escape_filter($this->env, (isset($context["idFiche"]) ? $context["idFiche"] : $this->getContext($context, "idFiche")), "html", null, true);
            echo ")\" title=\"Supprimer l'hors forfait ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["unFrais"], "libelle", array()), "html", null, true);
            echo " de ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["unFrais"], "montant", array()), "html", null, true);
            echo " euros\"></td>
                </tr>
                ";
            // line 60
            $context["varBoucle"] = ((isset($context["varBoucle"]) ? $context["varBoucle"] : $this->getContext($context, "varBoucle")) + 1);
            // line 61
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unFrais'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "        </table>
        ";
        // line 63
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formHorsForfait"]) ? $context["formHorsForfait"] : $this->getContext($context, "formHorsForfait")), 'form_end');
        echo "
        <hr>
        
        <h2 style=\"padding-top: 20px\">Hors Classification</h2>
        ";
        // line 67
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formHosrClassification"]) ? $context["formHosrClassification"] : $this->getContext($context, "formHosrClassification")), 'form_start');
        echo "
        <table id=\"tableHorsClassification\" align=\"center\">
            <tr>
                <th style=\"padding-left: 10px\">";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formHosrClassification"]) ? $context["formHosrClassification"] : $this->getContext($context, "formHosrClassification")), "nombreJustificatif", array()), 'label');
        echo "</th>
                <th style=\"padding-left: 10px\">";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formHosrClassification"]) ? $context["formHosrClassification"] : $this->getContext($context, "formHosrClassification")), "montantTotal", array()), 'label');
        echo "</th>
            </tr>
            <tr>
                <td style=\"padding-left: 10px\">";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formHosrClassification"]) ? $context["formHosrClassification"] : $this->getContext($context, "formHosrClassification")), "nombreJustificatif", array()), 'widget');
        echo "</td>
                <td style=\"padding-left: 10px\">";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formHosrClassification"]) ? $context["formHosrClassification"] : $this->getContext($context, "formHosrClassification")), "montantTotal", array()), 'widget');
        echo "</td>
            </tr>
            <tr>
                <td colspan=\"2\" align=\"center\" style=\"padding-top: 10px\">";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formHosrClassification"]) ? $context["formHosrClassification"] : $this->getContext($context, "formHosrClassification")), "modifier", array()), 'widget');
        echo "</td>
            </tr>
        </table>
        ";
        // line 81
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formHosrClassification"]) ? $context["formHosrClassification"] : $this->getContext($context, "formHosrClassification")), 'form_end');
        echo "
    </div>
";
        
        $__internal_bfa36273170efa1a53433b8056affbd446173bcf62aa042035530f766cffef5e->leave($__internal_bfa36273170efa1a53433b8056affbd446173bcf62aa042035530f766cffef5e_prof);

    }

    public function getTemplateName()
    {
        return "GsbBundle:VuesVisiteur:vueSaisieFiche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 81,  243 => 78,  237 => 75,  233 => 74,  227 => 71,  223 => 70,  217 => 67,  210 => 63,  207 => 62,  201 => 61,  199 => 60,  180 => 58,  176 => 57,  172 => 56,  167 => 55,  163 => 53,  159 => 51,  156 => 50,  152 => 49,  146 => 46,  142 => 45,  138 => 44,  134 => 43,  130 => 42,  125 => 40,  114 => 32,  107 => 28,  101 => 25,  97 => 24,  93 => 23,  89 => 22,  85 => 21,  81 => 20,  75 => 17,  71 => 16,  67 => 15,  63 => 14,  57 => 11,  51 => 8,  47 => 7,  37 => 4,  30 => 1,  28 => 3,  11 => 1,);
    }
}
