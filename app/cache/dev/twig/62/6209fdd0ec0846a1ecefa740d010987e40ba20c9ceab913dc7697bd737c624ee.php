<?php

/* frontofficefrontBundle:MatchTennis:MatchtennisShow.html.twig */
class __TwigTemplate_c8b3b83b8c4b932d5fac753fec6037455192dbea5deaedd3cc5ccb1ce86dff7e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("frontofficefrontBundle::MainLayout.html.twig", "frontofficefrontBundle:MatchTennis:MatchtennisShow.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'main' => array($this, 'block_main'),
            'jscript' => array($this, 'block_jscript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "frontofficefrontBundle::MainLayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_header($context, array $blocks = array())
    {
        // line 3
        echo "    <link href= \"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/squadftt/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/squadftt/css/styles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
    }

    // line 8
    public function block_main($context, array $blocks = array())
    {
        echo "   
    <div class=\"top-score-title right-score col-md-9\">
        <div class=\"top-score-title player-vs\">
            <h3>";
        // line 11
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "stadeStade", array())) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "stadeStade", array()), "libelleStade", array()), "html", null, true);
            echo " ";
        }
        echo " - <span>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "tourTour", array()), "evenementEvenement", array()), "libelleEvenement", array()), "html", null, true);
        echo "</span><span class=\"point-little\">.</span></h3>
            <div class=\"main\">
                <div class=\"tabs standard\">
                    <div class=\"tab-content\">
                        <div class=\"effect-color\">
                            <div class=\"tab active\">
                                <div class=\"clear\"></div>
                                <div class=\"col-md-12 player-photo\">
                                    <img class=\"img-face img-mm1\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/joueurs/" . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "joueurs", array()), 0, array(), "array"), "path", array()))), "html", null, true);
        echo "\" width=\"120\" height='114'alt=\"\" />
                                    <img class=\"img-face img-mm2\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/joueurs/" . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "joueurs", array()), 1, array(), "array"), "path", array()))), "html", null, true);
        echo "\" width=\"120\" height='114'alt=\"\" />
                                </div>
                                <div class=\"col-md-12 play-vs\">
                                    <div class=\"result-name\">
                                        <span>";
        // line 24
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "joueurs", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "joueurs", array()), 0, array(), "array"), "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "joueurs", array()), 0, array(), "array"), "prenom", array()), "html", null, true);
        }
        echo "</span> 
                                        <span class=\"txt-vs\">vs</span> 
                                        <span>";
        // line 26
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "joueurs", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "joueurs", array()), 1, array(), "array"), "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "joueurs", array()), 1, array(), "array"), "prenom", array()), "html", null, true);
        }
        echo "</span>
                                        <br>";
        // line 27
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sets", array())) == 0)) {
            // line 28
            echo "                                        <span>Quota :";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["q1"]) ? $context["q1"] : $this->getContext($context, "q1")), 2, ".", ","), "html", null, true);
            echo "</span>
                                        <span>  -  </span>
                                        <span>Quota :";
            // line 30
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["q2"]) ? $context["q2"] : $this->getContext($context, "q2")), 2, ".", ","), "html", null, true);
            echo "</span>
                                        <br>
                                        <span><a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("front_matchtennis_montant", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idMatch", array()), "joueur" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "joueurs", array()), 0, array(), "array"), "cinJoueur", array()))), "html", null, true);
            echo "\">
                                                Parier Sur  ";
            // line 33
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "joueurs", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "joueurs", array()), 0, array(), "array"), "nom", array()), "html", null, true);
            }
            // line 34
            echo "                                            </a>
                                        </span>
                                        <span> - </span>
                                        <span><a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("front_matchtennis_montant", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idMatch", array()), "joueur" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "joueurs", array()), 1, array(), "array"), "cinJoueur", array()))), "html", null, true);
            echo "\">
                                                Parier Sur  ";
            // line 38
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "joueurs", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "joueurs", array()), 1, array(), "array"), "nom", array()), "html", null, true);
            }
            // line 39
            echo "                                            </a>
                                        </span>";
        }
        // line 41
        echo "                                    </div>

                                </div>
                                <div class=\"clear\"></div>
                                <div class=\"result-name\"></div>
                                <div class=\"col-md-12 play-vs\">";
        // line 46
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sets", array())) > 0)) {
            // line 47
            echo "                                    <table id=\"result-table\">
                                        <tr>
                                            <td align=\"center\">Sets</td>
                                            ";
            // line 50
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sets", array())) > 0)) {
                echo "<td class=\"fpt\" align=\"center\">1</td> ";
            }
            // line 51
            echo "                                            ";
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sets", array())) > 1)) {
                echo "<td class=\"fpt\" align=\"center\">2</td> ";
            }
            // line 52
            echo "                                            ";
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sets", array())) > 2)) {
                echo "<td class=\"fpt\" align=\"center\">3</td> ";
            }
            // line 53
            echo "                                            ";
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sets", array())) > 3)) {
                echo "<td class=\"fpt\" align=\"center\">4</td> ";
            }
            // line 54
            echo "                                            ";
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sets", array())) > 4)) {
                echo "<td class=\"fpt\" align=\"center\">5</td> ";
            }
            // line 55
            echo "                                            ";
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sets", array())) > 5)) {
                echo "<td class=\"fpt\" align=\"center\">6</td> ";
            }
            // line 56
            echo "                                            ";
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sets", array())) > 6)) {
                echo "<td align=\"center\">7</td> ";
            }
            // line 57
            echo "                                        <tr>
                                            <td class=\"fpt\" align=\"center\">";
            // line 58
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "joueurs", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "joueurs", array()), 0, array(), "array"), "nom", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "joueurs", array()), 0, array(), "array"), "prenom", array()), "html", null, true);
            }
            echo "</td>
                                            ";
            // line 59
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sets", array())) > 0)) {
                echo "<td class=\"fpt\" align=\"center\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sets", array()), 0, array(), "array"), "scorej1", array()), "html", null, true);
                echo "</td> ";
            }
            // line 60
            echo "                                            ";
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sets", array())) > 1)) {
                echo "<td class=\"fpt\" align=\"center\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sets", array()), 1, array(), "array"), "scorej1", array()), "html", null, true);
                echo "</td> ";
            }
            // line 61
            echo "                                            ";
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sets", array())) > 2)) {
                echo "<td class=\"fpt\" align=\"center\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sets", array()), 2, array(), "array"), "scorej1", array()), "html", null, true);
                echo "</td> ";
            }
            // line 62
            echo "                                            ";
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sets", array())) > 3)) {
                echo "<td class=\"fpt\" align=\"center\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sets", array()), 3, array(), "array"), "scorej1", array()), "html", null, true);
                echo "</td> ";
            }
            // line 63
            echo "                                            ";
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sets", array())) > 4)) {
                echo "<td class=\"fpt\" align=\"center\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sets", array()), 4, array(), "array"), "scorej1", array()), "html", null, true);
                echo "</td> ";
            }
            // line 64
            echo "                                            ";
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sets", array())) > 5)) {
                echo "<td class=\"fpt\" align=\"center\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sets", array()), 5, array(), "array"), "scorej1", array()), "html", null, true);
                echo "</td> ";
            }
            // line 65
            echo "                                            ";
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sets", array())) > 6)) {
                echo "<td  align=\"center\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sets", array()), 6, array(), "array"), "scorej1", array()), "html", null, true);
                echo "</td> ";
            }
            // line 66
            echo "                                        </tr>
                                        <tr>
                                            <td class=\"fpt\" align=\"center\">";
            // line 68
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "joueurs", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "joueurs", array()), 1, array(), "array"), "nom", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "joueurs", array()), 1, array(), "array"), "prenom", array()), "html", null, true);
            }
            echo "</td>
                                            ";
            // line 69
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sets", array())) > 0)) {
                echo "<td class=\"fpt\" align=\"center\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sets", array()), 0, array(), "array"), "scorej2", array()), "html", null, true);
                echo " </td>";
            }
            // line 70
            echo "                                            ";
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sets", array())) > 1)) {
                echo "<td class=\"fpt\" align=\"center\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sets", array()), 1, array(), "array"), "scorej2", array()), "html", null, true);
                echo " </td>";
            }
            // line 71
            echo "                                            ";
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sets", array())) > 2)) {
                echo "<td class=\"fpt\" align=\"center\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sets", array()), 2, array(), "array"), "scorej2", array()), "html", null, true);
                echo " </td>";
            }
            // line 72
            echo "                                            ";
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sets", array())) > 3)) {
                echo "<td class=\"fpt\" align=\"center\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sets", array()), 3, array(), "array"), "scorej2", array()), "html", null, true);
                echo " </td>";
            }
            // line 73
            echo "                                            ";
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sets", array())) > 4)) {
                echo "<td class=\"fpt\" align=\"center\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sets", array()), 4, array(), "array"), "scorej2", array()), "html", null, true);
                echo " </td>";
            }
            // line 74
            echo "                                            ";
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sets", array())) > 5)) {
                echo "<td class=\"fpt\" align=\"center\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sets", array()), 5, array(), "array"), "scorej2", array()), "html", null, true);
                echo " </td>";
            }
            // line 75
            echo "                                            ";
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sets", array())) > 6)) {
                echo "<td align=\"center\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sets", array()), 6, array(), "array"), "scorej2", array()), "html", null, true);
                echo " </td>";
            }
            // line 76
            echo "                                        </tr>
                                        ";
        }
        // line 77
        echo "</table>
                                    </div>
                                </div>   
                                <div>";
        // line 80
        if ((twig_length_filter($this->env, (isset($context["pari"]) ? $context["pari"] : $this->getContext($context, "pari"))) > 0)) {
            // line 81
            echo "                                    <div class=\"col-md-12 play-vs\">
                                        <h3>Top 5 des Mises</h3>
                                        <table id=\"result-table\">
                                            <tr>
                                                <td><b> Utilisateurs </b></td>
                                                <td><b> Montants </b></td>
                                                <td><b> Joueurs </b></td>
                                            </tr>
                                            ";
            // line 89
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pari"]) ? $context["pari"] : $this->getContext($context, "pari")));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 90
                echo "                                                <tr>
                                                    <td class=\"fpt\">";
                // line 91
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "userUser", array()), "nom", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "userUser", array()), "prenom", array()), "html", null, true);
                echo "</td>
                                                    <td class=\"fpt\">";
                // line 92
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "montant", array()), "html", null, true);
                echo "</td>
                                                    <td class=\"fpt\">
                                                        ";
                // line 94
                if (($this->getAttribute($context["p"], "q1", array()) == 0)) {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "joueurs", array()), 1, array(), "array"), "nom", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "joueurs", array()), 1, array(), "array"), "prenom", array()), "html", null, true);
                }
                // line 95
                echo "                                                        ";
                if (($this->getAttribute($context["p"], "q2", array()) == 0)) {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "joueurs", array()), 0, array(), "array"), "nom", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "joueurs", array()), 0, array(), "array"), "prenom", array()), "html", null, true);
                }
                // line 96
                echo "                                                    </td>
                                                </tr>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 99
            echo "                                        </table>
                                    </div>

                                    ";
        }
        // line 103
        echo "                                    </div>
                                </div>
                            </div>                                
                        </div>
                    </div> 
                </div>
            </div><!--Close Top Match-->
            
            <div class=\"row\">
                <div class=\"col-xs-6 col-md-3\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-body easypiechart-panel\">
                            <h4>";
        // line 115
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "joueurs", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "joueurs", array()), 0, array(), "array"), "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "joueurs", array()), 0, array(), "array"), "prenom", array()), "html", null, true);
        }
        echo " </h4>
                            <div class=\"easypiechart\" id=\"easypiechart-orange\" data-percent=\"";
        // line 116
        echo twig_escape_filter($this->env, (isset($context["pj1"]) ? $context["pj1"] : $this->getContext($context, "pj1")), "html", null, true);
        echo "\" ><span class=\"percent\">";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["pj1"]) ? $context["pj1"] : $this->getContext($context, "pj1")), 2, ".", ","), "html", null, true);
        echo "</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-xs-6 col-md-3\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-body easypiechart-panel\">
                            <h4>";
        // line 124
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "joueurs", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "joueurs", array()), 1, array(), "array"), "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "joueurs", array()), 1, array(), "array"), "prenom", array()), "html", null, true);
        }
        echo " </h4>
                            <div class=\"easypiechart\" id=\"easypiechart-blue\" data-percent=\"";
        // line 125
        echo twig_escape_filter($this->env, (isset($context["pj2"]) ? $context["pj2"] : $this->getContext($context, "pj2")), "html", null, true);
        echo "\" ><span class=\"percent\">";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["pj2"]) ? $context["pj2"] : $this->getContext($context, "pj2")), 2, ".", ","), "html", null, true);
        echo "</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-xs-6 col-md-3\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-body easypiechart-panel\">
                            <h4>";
        // line 133
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "joueurs", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "joueurs", array()), 0, array(), "array"), "nom", array()), "html", null, true);
            echo " VS ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "joueurs", array()), 1, array(), "array"), "nom", array()), "html", null, true);
        }
        echo " </h4>
                            <div class=\"easypiechart\" id=\"easypiechart-red\" data-percent=\"";
        // line 134
        echo twig_escape_filter($this->env, (isset($context["pvs"]) ? $context["pvs"] : $this->getContext($context, "pvs")), "html", null, true);
        echo "\" ><span class=\"percent\">";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["pvs"]) ? $context["pvs"] : $this->getContext($context, "pvs")), 2, ".", ","), "html", null, true);
        echo "</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"clear\"></div>

            ";
    }

    // line 145
    public function block_jscript($context, array $blocks = array())
    {
        // line 146
        echo "
                    <script src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/squadftt/js/jquery-1.11.1.min.js"), "html", null, true);
        echo "\"></script>
                    <script src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/squadftt/js/bootstrap.min.js"), "html", null, true);
        echo " \"></script>
                    <script src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/squadftt/js/chart.min.js"), "html", null, true);
        echo "\"></script>
                    <script src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/squadftt/js/chart-data.js"), "html", null, true);
        echo "\"></script>
                    <script src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/squadftt/js/easypiechart.js"), "html", null, true);
        echo "\"></script>
                    <script src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/squadftt/js/easypiechart-data.js"), "html", null, true);
        echo "\"></script>
                    <script src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/squadftt/js/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
                    <script src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/squadftt/js/bootstrap-table.js"), "html", null, true);
        echo "\"></script>


                ";
    }

    public function getTemplateName()
    {
        return "frontofficefrontBundle:MatchTennis:MatchtennisShow.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  480 => 154,  476 => 153,  472 => 152,  468 => 151,  464 => 150,  460 => 149,  456 => 148,  452 => 147,  449 => 146,  446 => 145,  431 => 134,  423 => 133,  410 => 125,  402 => 124,  389 => 116,  381 => 115,  367 => 103,  361 => 99,  353 => 96,  346 => 95,  340 => 94,  335 => 92,  329 => 91,  326 => 90,  322 => 89,  312 => 81,  310 => 80,  305 => 77,  301 => 76,  294 => 75,  287 => 74,  280 => 73,  273 => 72,  266 => 71,  259 => 70,  253 => 69,  245 => 68,  241 => 66,  234 => 65,  227 => 64,  220 => 63,  213 => 62,  206 => 61,  199 => 60,  193 => 59,  185 => 58,  182 => 57,  177 => 56,  172 => 55,  167 => 54,  162 => 53,  157 => 52,  152 => 51,  148 => 50,  143 => 47,  141 => 46,  134 => 41,  130 => 39,  126 => 38,  122 => 37,  117 => 34,  113 => 33,  109 => 32,  104 => 30,  98 => 28,  96 => 27,  88 => 26,  79 => 24,  72 => 20,  68 => 19,  51 => 11,  44 => 8,  38 => 4,  33 => 3,  30 => 2,  11 => 1,);
    }
}
/* {% extends "frontofficefrontBundle::MainLayout.html.twig" %}*/
/* {% block header %}*/
/*     <link href= "{{asset('bundles/squadftt/css/bootstrap.min.css')}}" rel="stylesheet">*/
/*     <link href="{{asset('bundles/squadftt/css/styles.css')}}" rel="stylesheet">*/
/* {% endblock %}*/
/* */
/* */
/* {% block main %}   */
/*     <div class="top-score-title right-score col-md-9">*/
/*         <div class="top-score-title player-vs">*/
/*             <h3>{% if entity.stadeStade %} {{entity.stadeStade.libelleStade}} {% endif %} - <span>{{entity.tourTour.evenementEvenement.libelleEvenement}}</span><span class="point-little">.</span></h3>*/
/*             <div class="main">*/
/*                 <div class="tabs standard">*/
/*                     <div class="tab-content">*/
/*                         <div class="effect-color">*/
/*                             <div class="tab active">*/
/*                                 <div class="clear"></div>*/
/*                                 <div class="col-md-12 player-photo">*/
/*                                     <img class="img-face img-mm1" src="{{ asset('uploads/joueurs/'~entity.joueurs[0].path)}}" width="120" height='114'alt="" />*/
/*                                     <img class="img-face img-mm2" src="{{ asset('uploads/joueurs/'~entity.joueurs[1].path)}}" width="120" height='114'alt="" />*/
/*                                 </div>*/
/*                                 <div class="col-md-12 play-vs">*/
/*                                     <div class="result-name">*/
/*                                         <span>{% if entity.joueurs %}{{ entity.joueurs[0].nom}} {{ entity.joueurs[0].prenom}}{% endif %}</span> */
/*                                         <span class="txt-vs">vs</span> */
/*                                         <span>{% if entity.joueurs %}{{ entity.joueurs[1].nom}} {{ entity.joueurs[1].prenom}}{% endif %}</span>*/
/*                                         <br>{% if entity.sets|length == 0%}*/
/*                                         <span>Quota :{{ q1|number_format(2, '.', ',') }}</span>*/
/*                                         <span>  -  </span>*/
/*                                         <span>Quota :{{ q2|number_format(2, '.', ',') }}</span>*/
/*                                         <br>*/
/*                                         <span><a href="{{ path('front_matchtennis_montant', { 'id': entity.idMatch,'joueur':entity.joueurs[0].cinJoueur}) }}">*/
/*                                                 Parier Sur  {% if entity.joueurs %}{{ entity.joueurs[0].nom}}{% endif %}*/
/*                                             </a>*/
/*                                         </span>*/
/*                                         <span> - </span>*/
/*                                         <span><a href="{{ path('front_matchtennis_montant', { 'id': entity.idMatch,'joueur':entity.joueurs[1].cinJoueur}) }}">*/
/*                                                 Parier Sur  {% if entity.joueurs %}{{ entity.joueurs[1].nom}}{% endif %}*/
/*                                             </a>*/
/*                                         </span>{% endif %}*/
/*                                     </div>*/
/* */
/*                                 </div>*/
/*                                 <div class="clear"></div>*/
/*                                 <div class="result-name"></div>*/
/*                                 <div class="col-md-12 play-vs">{% if entity.sets|length>0 %}*/
/*                                     <table id="result-table">*/
/*                                         <tr>*/
/*                                             <td align="center">Sets</td>*/
/*                                             {% if entity.sets|length>0 %}<td class="fpt" align="center">1</td> {% endif %}*/
/*                                             {% if entity.sets|length>1 %}<td class="fpt" align="center">2</td> {% endif %}*/
/*                                             {% if entity.sets|length>2 %}<td class="fpt" align="center">3</td> {% endif %}*/
/*                                             {% if entity.sets|length>3 %}<td class="fpt" align="center">4</td> {% endif %}*/
/*                                             {% if entity.sets|length>4 %}<td class="fpt" align="center">5</td> {% endif %}*/
/*                                             {% if entity.sets|length>5 %}<td class="fpt" align="center">6</td> {% endif %}*/
/*                                             {% if entity.sets|length>6 %}<td align="center">7</td> {% endif %}*/
/*                                         <tr>*/
/*                                             <td class="fpt" align="center">{% if entity.joueurs %}{{ entity.joueurs[0].nom}} {{ entity.joueurs[0].prenom}}{% endif %}</td>*/
/*                                             {% if entity.sets|length>0 %}<td class="fpt" align="center">{{ entity.sets[0].scorej1}}</td> {% endif %}*/
/*                                             {% if entity.sets|length>1 %}<td class="fpt" align="center">{{ entity.sets[1].scorej1}}</td> {% endif %}*/
/*                                             {% if entity.sets|length>2 %}<td class="fpt" align="center">{{ entity.sets[2].scorej1}}</td> {% endif %}*/
/*                                             {% if entity.sets|length>3 %}<td class="fpt" align="center">{{ entity.sets[3].scorej1}}</td> {% endif %}*/
/*                                             {% if entity.sets|length>4 %}<td class="fpt" align="center">{{ entity.sets[4].scorej1}}</td> {% endif %}*/
/*                                             {% if entity.sets|length>5 %}<td class="fpt" align="center">{{ entity.sets[5].scorej1}}</td> {% endif %}*/
/*                                             {% if entity.sets|length>6 %}<td  align="center">{{ entity.sets[6].scorej1}}</td> {% endif %}*/
/*                                         </tr>*/
/*                                         <tr>*/
/*                                             <td class="fpt" align="center">{% if entity.joueurs %}{{ entity.joueurs[1].nom}} {{ entity.joueurs[1].prenom}}{% endif %}</td>*/
/*                                             {% if entity.sets|length>0 %}<td class="fpt" align="center">{{ entity.sets[0].scorej2}} </td>{% endif %}*/
/*                                             {% if entity.sets|length>1 %}<td class="fpt" align="center">{{ entity.sets[1].scorej2}} </td>{% endif %}*/
/*                                             {% if entity.sets|length>2 %}<td class="fpt" align="center">{{ entity.sets[2].scorej2}} </td>{% endif %}*/
/*                                             {% if entity.sets|length>3 %}<td class="fpt" align="center">{{ entity.sets[3].scorej2}} </td>{% endif %}*/
/*                                             {% if entity.sets|length>4 %}<td class="fpt" align="center">{{ entity.sets[4].scorej2}} </td>{% endif %}*/
/*                                             {% if entity.sets|length>5 %}<td class="fpt" align="center">{{ entity.sets[5].scorej2}} </td>{% endif %}*/
/*                                             {% if entity.sets|length>6 %}<td align="center">{{ entity.sets[6].scorej2}} </td>{% endif %}*/
/*                                         </tr>*/
/*                                         {% endif %}</table>*/
/*                                     </div>*/
/*                                 </div>   */
/*                                 <div>{% if pari|length>0%}*/
/*                                     <div class="col-md-12 play-vs">*/
/*                                         <h3>Top 5 des Mises</h3>*/
/*                                         <table id="result-table">*/
/*                                             <tr>*/
/*                                                 <td><b> Utilisateurs </b></td>*/
/*                                                 <td><b> Montants </b></td>*/
/*                                                 <td><b> Joueurs </b></td>*/
/*                                             </tr>*/
/*                                             {% for p in pari %}*/
/*                                                 <tr>*/
/*                                                     <td class="fpt">{{ p.userUser.nom}} {{ p.userUser.prenom}}</td>*/
/*                                                     <td class="fpt">{{ p.montant}}</td>*/
/*                                                     <td class="fpt">*/
/*                                                         {% if p.q1==0 %}{{ entity.joueurs[1].nom}} {{ entity.joueurs[1].prenom}}{% endif %}*/
/*                                                         {% if p.q2==0 %}{{ entity.joueurs[0].nom}} {{ entity.joueurs[0].prenom}}{% endif %}*/
/*                                                     </td>*/
/*                                                 </tr>*/
/*                                             {% endfor %}*/
/*                                         </table>*/
/*                                     </div>*/
/* */
/*                                     {% endif %}*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>                                */
/*                         </div>*/
/*                     </div> */
/*                 </div>*/
/*             </div><!--Close Top Match-->*/
/*             */
/*             <div class="row">*/
/*                 <div class="col-xs-6 col-md-3">*/
/*                     <div class="panel panel-default">*/
/*                         <div class="panel-body easypiechart-panel">*/
/*                             <h4>{% if entity.joueurs %}{{ entity.joueurs[0].nom}} {{ entity.joueurs[0].prenom}}{% endif %} </h4>*/
/*                             <div class="easypiechart" id="easypiechart-orange" data-percent="{{pj1}}" ><span class="percent">{{pj1|number_format(2, '.', ',')}}</span>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="col-xs-6 col-md-3">*/
/*                     <div class="panel panel-default">*/
/*                         <div class="panel-body easypiechart-panel">*/
/*                             <h4>{% if entity.joueurs %}{{ entity.joueurs[1].nom}} {{ entity.joueurs[1].prenom}}{% endif %} </h4>*/
/*                             <div class="easypiechart" id="easypiechart-blue" data-percent="{{pj2}}" ><span class="percent">{{pj2|number_format(2, '.', ',')}}</span>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="col-xs-6 col-md-3">*/
/*                     <div class="panel panel-default">*/
/*                         <div class="panel-body easypiechart-panel">*/
/*                             <h4>{% if entity.joueurs %}{{ entity.joueurs[0].nom}} VS {{ entity.joueurs[1].nom}}{% endif %} </h4>*/
/*                             <div class="easypiechart" id="easypiechart-red" data-percent="{{pvs}}" ><span class="percent">{{pvs|number_format(2, '.', ',')}}</span>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="clear"></div>*/
/* */
/*             {% endblock %}*/
/* */
/* */
/*                 {% block jscript %}*/
/* */
/*                     <script src="{{asset('bundles/squadftt/js/jquery-1.11.1.min.js')}}"></script>*/
/*                     <script src="{{asset('bundles/squadftt/js/bootstrap.min.js')}} "></script>*/
/*                     <script src="{{asset('bundles/squadftt/js/chart.min.js')}}"></script>*/
/*                     <script src="{{asset('bundles/squadftt/js/chart-data.js')}}"></script>*/
/*                     <script src="{{asset('bundles/squadftt/js/easypiechart.js')}}"></script>*/
/*                     <script src="{{asset('bundles/squadftt/js/easypiechart-data.js')}}"></script>*/
/*                     <script src="{{asset('bundles/squadftt/js/bootstrap-datepicker.js')}}"></script>*/
/*                     <script src="{{asset('bundles/squadftt/js/bootstrap-table.js')}}"></script>*/
/* */
/* */
/*                 {% endblock %}*/
