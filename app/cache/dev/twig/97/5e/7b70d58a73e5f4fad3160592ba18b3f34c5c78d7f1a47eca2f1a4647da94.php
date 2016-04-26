<?php

/* GsbBundle:VuesComptable:vueValiderFiche.html.twig */
class __TwigTemplate_975e7b70d58a73e5f4fad3160592ba18b3f34c5c78d7f1a47eca2f1a4647da94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GsbBundle:VuesComptable:vueBaseAvecMenu.html.twig", "GsbBundle:VuesComptable:vueValiderFiche.html.twig", 1);
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
        $__internal_7a8574e8cfda8c1ae13e0a84535a2cfcc35bd36c6e5ebd7265c4b2f00bb54d24 = $this->env->getExtension("native_profiler");
        $__internal_7a8574e8cfda8c1ae13e0a84535a2cfcc35bd36c6e5ebd7265c4b2f00bb54d24->enter($__internal_7a8574e8cfda8c1ae13e0a84535a2cfcc35bd36c6e5ebd7265c4b2f00bb54d24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GsbBundle:VuesComptable:vueValiderFiche.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a8574e8cfda8c1ae13e0a84535a2cfcc35bd36c6e5ebd7265c4b2f00bb54d24->leave($__internal_7a8574e8cfda8c1ae13e0a84535a2cfcc35bd36c6e5ebd7265c4b2f00bb54d24_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a8df4e06c2ac6635d930a099bfc6465467241dba03eac6133d77dab2bcc54f47 = $this->env->getExtension("native_profiler");
        $__internal_a8df4e06c2ac6635d930a099bfc6465467241dba03eac6133d77dab2bcc54f47->enter($__internal_a8df4e06c2ac6635d930a099bfc6465467241dba03eac6133d77dab2bcc54f47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"divStyle\">
        <h1 style=\"text-align: center; padding-top: 15px\">Valider Fiche</h1>
        
        ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        <table align=\"center\">
            <tr>
                <td>";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomVisiteur", array()), 'widget');
        echo "</td>
                <td>";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mois", array()), 'widget');
        echo "</td>
            </tr>
        </table>
        ";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
        
        <div>
            <h2 align=\"center\">Frais Forfait</h2>
            ";
        // line 18
        if (array_key_exists("formFrais", $context)) {
            // line 19
            echo "                ";
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["formFrais"]) ? $context["formFrais"] : $this->getContext($context, "formFrais")), 'form_start');
            echo "
                <table class=\"center\" id=\"tableFraisForfait\">
                    <tr> 
                        <th style=\"text-align:center\">Repas midi</th>
                        <th style=\"text-align:center\">Nuitée</th>
                        <th style=\"text-align:center\">Etape</th>
                        <th style=\"text-align:center\">Kilomètre</th>
                        <th style=\"text-align:center\">Situation</th>
                    </tr>
                    <tr><td style=\"padding-top:6px\"></td></tr>

                    <tr class=\"trStyle\" style=\"background-color: #aaa\">

                        <td class=\"tdStyle\">";
            // line 32
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formFrais"]) ? $context["formFrais"] : $this->getContext($context, "formFrais")), "repasMidi", array()), 'widget');
            echo "</td>
                        <td class=\"tdStyle\">";
            // line 33
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formFrais"]) ? $context["formFrais"] : $this->getContext($context, "formFrais")), "nuitee", array()), 'widget');
            echo "</td>
                        <td class=\"tdStyle\">";
            // line 34
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formFrais"]) ? $context["formFrais"] : $this->getContext($context, "formFrais")), "etape", array()), 'widget');
            echo "</td>
                        <td class=\"tdStyle\">";
            // line 35
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formFrais"]) ? $context["formFrais"] : $this->getContext($context, "formFrais")), "km", array()), 'widget');
            echo "</td>
                        <td>";
            // line 36
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formFrais"]) ? $context["formFrais"] : $this->getContext($context, "formFrais")), "etatFrais", array()), 'widget');
            echo "</td>
                        <td style=\"padding-left: 10px; background-color: #ddd\">";
            // line 37
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formFrais"]) ? $context["formFrais"] : $this->getContext($context, "formFrais")), "annuler", array()), 'widget');
            echo "</td>
                        <td style=\"padding-left: 5px; background-color: #ddd\">";
            // line 38
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formFrais"]) ? $context["formFrais"] : $this->getContext($context, "formFrais")), "miseAJour", array()), 'widget');
            echo "</td>

                    </tr>

                </table>
                ";
            // line 43
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["formFrais"]) ? $context["formFrais"] : $this->getContext($context, "formFrais")), 'form_end');
            echo "
            ";
        }
        // line 45
        echo "        </div>
        
        <div>
            <h2 align=\"center\">Frais Hors Forfait</h2>
            ";
        // line 49
        if (array_key_exists("lesHorsForfait", $context)) {
            // line 50
            echo "                <table class=\"center\" id=\"tableFraisHorsForfait\">
                    <tr>
                        <th width=\"150px\" style=\"padding-left: 10px; width: 100px\">Date</th>
                        <th style=\"padding-left: 10px; width: 30%\">Libelle</th>
                        <th width=\"170px\" style=\"padding-right: 10px; text-align: right\">Montant</th>
                        <th width=\"150px\" style=\"text-align: center; padding-right: 10px; width: 25%\">Situation</th>
                    </tr>
                    <tr><td style=\"padding-top:6px\"></td></tr>
                    ";
            // line 58
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["lesHorsForfait"]) ? $context["lesHorsForfait"] : $this->getContext($context, "lesHorsForfait")));
            foreach ($context['_seq'] as $context["_key"] => $context["unHorsForfait"]) {
                // line 59
                echo "                        <tr class=\"trStyle\">
                                <td style=\"padding-left: 10px\">";
                // line 60
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["unHorsForfait"], "dateFrais", array()), "d-m-Y"), "html", null, true);
                echo "</td>
                                <td class=\"tdStyle\"><input type=\"text\" value=\"";
                // line 61
                echo twig_escape_filter($this->env, $this->getAttribute($context["unHorsForfait"], "libelle", array()), "html", null, true);
                echo "\" class=\"form-control\" id=\"libelle";
                echo twig_escape_filter($this->env, $this->getAttribute($context["unHorsForfait"], "idLigneFraisHorsForfait", array()), "html", null, true);
                echo "\"></td>
                                <td class=\"tdStyle\"><input type=\"money\" value=\"";
                // line 62
                echo twig_escape_filter($this->env, $this->getAttribute($context["unHorsForfait"], "montant", array()), "html", null, true);
                echo "\" class=\"form-control\" id=\"montant";
                echo twig_escape_filter($this->env, $this->getAttribute($context["unHorsForfait"], "idLigneFraisHorsForfait", array()), "html", null, true);
                echo "\"></td>
                                <td>
                                    <select class=\"form-control\" id=\"etat";
                // line 64
                echo twig_escape_filter($this->env, $this->getAttribute($context["unHorsForfait"], "idLigneFraisHorsForfait", array()), "html", null, true);
                echo "\">
                                        <option value=\"5\" ";
                // line 65
                if (($this->getAttribute($this->getAttribute($context["unHorsForfait"], "idEtat", array()), "idEtat", array()) == 5)) {
                    echo " selected ";
                }
                echo ">Enregistré</option> 
                                        <option value=\"4\" ";
                // line 66
                if (($this->getAttribute($this->getAttribute($context["unHorsForfait"], "idEtat", array()), "idEtat", array()) == 4)) {
                    echo " selected ";
                }
                echo ">Validé</option>
                                        <option value=\"1\" ";
                // line 67
                if (($this->getAttribute($this->getAttribute($context["unHorsForfait"], "idEtat", array()), "idEtat", array()) == 1)) {
                    echo " selected ";
                }
                echo ">Remboursé</option>
                                    </select>
                                </td>
                                <td style=\"padding-left: 10px\"><img src=\"";
                // line 70
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/gsb/images/icone_supprimer.gif"), "html", null, true);
                echo "\" onCLick=\"comptableSuppHorsForfait(";
                echo twig_escape_filter($this->env, $this->getAttribute($context["unHorsForfait"], "idLigneFraisHorsForfait", array()), "html", null, true);
                echo ",'";
                echo twig_escape_filter($this->env, $this->getAttribute($context["unHorsForfait"], "libelle", array()), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, $this->getAttribute($context["unHorsForfait"], "montant", array()), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["unHorsForfait"], "dateFrais", array()), "d/m/Y"), "html", null, true);
                echo "', ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["unHorsForfait"], "idFiche", array()), "idFiche", array()), "html", null, true);
                echo ")\" title=\"Refuser l'hors forfait ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["unHorsForfait"], "libelle", array()), "html", null, true);
                echo " de ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["unHorsForfait"], "montant", array()), "html", null, true);
                echo " euros\"></td>
                                <td style=\"padding-left: 10px\"><input type=\"reset\" value=\"Annuler\" class=\"btn btn-danger\"></td>
                                <td style=\"padding-left: 5px\"><input type=\"submit\" value=\"Mise à jour\" class=\"btn btn-primary\" onClick=\"majHorsForfait(";
                // line 72
                echo twig_escape_filter($this->env, $this->getAttribute($context["unHorsForfait"], "idLigneFraisHorsForfait", array()), "html", null, true);
                echo ")\"></td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unHorsForfait'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo "                </table>
            ";
        }
        // line 77
        echo "        </div>
        <div>
            <h2 align=\"center\">Hors Classification</h2>
            ";
        // line 80
        if (array_key_exists("formHorsClassification", $context)) {
            // line 81
            echo "                ";
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["formHorsClassification"]) ? $context["formHorsClassification"] : $this->getContext($context, "formHorsClassification")), 'form_start');
            echo "
                <table class=\"center\" id=\"horsClassification\" style=\"width: 800px\">
                    <tr>
                        <th style=\"padding-left: 10px\">Justificatifs</th>
                        <th style=\"padding-left: 10px\">Montant</th>
                        <th style=\"text-align: center\">Situation</th>
                    </tr>
                    <tr><td style=\"padding-top:6px\"></td></tr>
                    <tr style=\"background-color: #bbb\">

                        <td class=\"tdStyle\" style=\"text-align: center\">";
            // line 91
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formHorsClassification"]) ? $context["formHorsClassification"] : $this->getContext($context, "formHorsClassification")), "nombreJustificatif", array()), 'widget');
            echo "</td>
                        <td style=\"text-align: right\">";
            // line 92
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formHorsClassification"]) ? $context["formHorsClassification"] : $this->getContext($context, "formHorsClassification")), "montantTotal", array()), 'widget');
            echo "</td>
                        <td>";
            // line 93
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formHorsClassification"]) ? $context["formHorsClassification"] : $this->getContext($context, "formHorsClassification")), "etatFraisHorsClassification", array()), 'widget');
            echo "</td>
                        <td style=\"padding-left: 10px; background-color: #ddd\">";
            // line 94
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formHorsClassification"]) ? $context["formHorsClassification"] : $this->getContext($context, "formHorsClassification")), "annuler", array()), 'widget');
            echo "</td>
                        <td style=\"padding-left: 5px; background-color: #ddd\">";
            // line 95
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formHorsClassification"]) ? $context["formHorsClassification"] : $this->getContext($context, "formHorsClassification")), "miseAJour", array()), 'widget');
            echo "</td>

                    </tr>
                </table>
                ";
            // line 99
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["formHorsClassification"]) ? $context["formHorsClassification"] : $this->getContext($context, "formHorsClassification")), 'form_end');
            echo "
            ";
        }
        // line 101
        echo "        </div>
    </div>
";
        
        $__internal_a8df4e06c2ac6635d930a099bfc6465467241dba03eac6133d77dab2bcc54f47->leave($__internal_a8df4e06c2ac6635d930a099bfc6465467241dba03eac6133d77dab2bcc54f47_prof);

    }

    public function getTemplateName()
    {
        return "GsbBundle:VuesComptable:vueValiderFiche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  271 => 101,  266 => 99,  259 => 95,  255 => 94,  251 => 93,  247 => 92,  243 => 91,  229 => 81,  227 => 80,  222 => 77,  218 => 75,  209 => 72,  190 => 70,  182 => 67,  176 => 66,  170 => 65,  166 => 64,  159 => 62,  153 => 61,  149 => 60,  146 => 59,  142 => 58,  132 => 50,  130 => 49,  124 => 45,  119 => 43,  111 => 38,  107 => 37,  103 => 36,  99 => 35,  95 => 34,  91 => 33,  87 => 32,  70 => 19,  68 => 18,  61 => 14,  55 => 11,  51 => 10,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
