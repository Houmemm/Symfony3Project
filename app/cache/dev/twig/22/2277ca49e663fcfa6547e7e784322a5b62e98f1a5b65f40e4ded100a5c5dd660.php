<?php

/* frontofficefrontBundle:Default:tournois.html.twig */
class __TwigTemplate_aa0ce31c4e655d0599f5b92fd79fc6e964c5a59a02f32e6e7b6b34f309a496a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("frontofficefrontBundle::MainLayout.html.twig", "frontofficefrontBundle:Default:tournois.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
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
    public function block_main($context, array $blocks = array())
    {
        // line 3
        echo "
    <section class=\"drawer\">
        <div class=\"col-md-12 size-img back-img\">
            <div class=\"effect-cover\">
                <h3 class=\"txt-advert animated fadeInUp\">2015-2016 FTT Tunisia</h3>
                <p class=\"txt-advert-sub animated\"> Nos meilleurs tournois pour la saison 2015-2016  </p>
            </div>
        </div>
        <section id=\"summary\" class=\"container secondary-page\">
            <div class=\"general general-results tournaments\">

                <div id=\"c-calend\" class=\"top-score-title right-score col-md-9\">
                    <h3>FTT<span>-CALENDRIER</span><span class=\"point-little\">.</span></h3>
                    <div class=\"accordion accordion-open\" id=\"section1\"><i class=\"fa fa-calendar-o\"></i>JANVIER<span></span></div>
                    <div class=\"acc-content\">
                        <div class=\"col-md-1 acc-title\">Photo</div>
                        <div class=\"col-md-2 acc-title\">Date Debut</div>
                        <div class=\"col-md-3 acc-title\">Tournois</div>
                        <div class=\"col-md-2 acc-title\">Emplacement </div>
                        <div class=\"col-md-2 acc-title\"> Nombre  </div>
                        <div class=\"col-md-2 acc-title\">Gagnant</div>
                        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 25
            echo "                            ";
            if ((twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateDebut", array()), "U") < twig_date_format_filter($this->env, "2016-2-1", "U"))) {
                echo " 
                                <div class=\"acc-footer\"></div>
                                <div class=\"col-md-1 timg\"><img src=\"./WT TENNIS_files/atp_img.png\" alt=\"\"></div>
                                <div class=\"col-md-2 t1\"><p> ";
                // line 28
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateDebut", array()), "Y-m-d"), "html", null, true);
                echo "</p></div>
                                <div class=\"col-md-3 t2\"><p>";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "libelleEvenement", array()), "html", null, true);
                echo "</p> </div>
                                <div class=\"col-md-2 t3\"><p>";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "site", array()), "html", null, true);
                echo "</p></div>
                                <div class=\"col-md-2 t4\"><p> ";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nbreJoueur", array()), "html", null, true);
                echo "</p></div>
                                <div class=\"col-md-2 t5\"><p> _ </p></div>

                            ";
            }
            // line 35
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "                    </div>
                    <div class=\"accordion accordion-close\" id=\"section2\"><i class=\"fa fa-calendar-o\"></i>FEVRIER<span></span></div>
                    <div class=\"acc-content\" style=\"display: none;\">
                        <div class=\"col-md-1 acc-title\">Photo</div>
                        <div class=\"col-md-2 acc-title\">Date Debut</div>
                        <div class=\"col-md-3 acc-title\">Tournois</div>
                        <div class=\"col-md-2 acc-title\">Emplacement </div>
                        <div class=\"col-md-2 acc-title\"> Nombre  </div>
                        <div class=\"col-md-2 acc-title\">Gagnant</div>

                        ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 47
            echo "                            ";
            if (((twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateDebut", array()), "U") >= twig_date_format_filter($this->env, "2016-2-1", "U")) && (twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateDebut", array()), "U") < twig_date_format_filter($this->env, "2016-3-1", "U")))) {
                echo " 
                                <div class=\"acc-footer\"></div>
                                <div class=\"col-md-1 timg\"><img src=\"./WT TENNIS_files/atp_img.png\" alt=\"\"></div>
                                <div class=\"col-md-2 t1\"><p> ";
                // line 50
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateDebut", array()), "Y-m-d"), "html", null, true);
                echo "</p></div>
                                <div class=\"col-md-3 t2\"><p>";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "libelleEvenement", array()), "html", null, true);
                echo "</p> </div>
                                <div class=\"col-md-2 t3\"><p>";
                // line 52
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "site", array()), "html", null, true);
                echo "</p></div>
                                <div class=\"col-md-2 t4\"><p> ";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nbreJoueur", array()), "html", null, true);
                echo "</p></div>
                                <div class=\"col-md-2 t5\"><p> _ </p></div>
                            ";
            }
            // line 56
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "                    </div>
                    <div class=\"accordion accordion-close\" id=\"section3\"><i class=\"fa fa-calendar-o\"></i> MARS <span></span></div>
                    <div class=\"acc-content\" style=\"display: none;\">
                        <div class=\"col-md-1 acc-title\">Photo</div>
                        <div class=\"col-md-2 acc-title\">Date Debut</div>
                        <div class=\"col-md-3 acc-title\">Tournois</div>
                        <div class=\"col-md-2 acc-title\">Emplacement </div>
                        <div class=\"col-md-2 acc-title\"> Nombre  </div>
                        <div class=\"col-md-2 acc-title\">Gagnant</div>
                        ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 67
            echo "                            ";
            if (((twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateDebut", array()), "U") >= twig_date_format_filter($this->env, "2016-3-1", "U")) && (twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateDebut", array()), "U") < twig_date_format_filter($this->env, "2016-4-1", "U")))) {
                echo " 
                                <div class=\"acc-footer\"></div>
                                <div class=\"col-md-1 timg\"><img src=\"./WT TENNIS_files/atp_img.png\" alt=\"\"></div>
                                <div class=\"col-md-2 t1\"><p> ";
                // line 70
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateDebut", array()), "Y-m-d"), "html", null, true);
                echo "</p></div>
                                <div class=\"col-md-3 t2\"><p>";
                // line 71
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "libelleEvenement", array()), "html", null, true);
                echo "</p> </div>
                                <div class=\"col-md-2 t3\"><p>";
                // line 72
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "site", array()), "html", null, true);
                echo "</p></div>
                                <div class=\"col-md-2 t4\"><p> ";
                // line 73
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nbreJoueur", array()), "html", null, true);
                echo "</p></div>
                                <div class=\"col-md-2 t5\"><p> _ </p></div>
                            ";
            }
            // line 76
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "                    </div>
                    <div class=\"accordion accordion-close\" id=\"section4\"><i class=\"fa fa-calendar-o\"></i>AVRIL<span></span></div>
                    <div class=\"acc-content\" style=\"display: none;\">
                        <div class=\"col-md-1 acc-title\">Photo</div>
                        <div class=\"col-md-2 acc-title\">Date Debut</div>
                        <div class=\"col-md-3 acc-title\">Tournois</div>
                        <div class=\"col-md-2 acc-title\">Emplacement </div>
                        <div class=\"col-md-2 acc-title\"> Nombre  </div>
                        <div class=\"col-md-2 acc-title\">Gagnant</div>
                        ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 87
            echo "                            ";
            if (((twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateDebut", array()), "U") >= twig_date_format_filter($this->env, "2016-4-1", "U")) && (twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateDebut", array()), "U") < twig_date_format_filter($this->env, "2016-5-1", "U")))) {
                echo " 
                                <div class=\"acc-footer\"></div>
                                <div class=\"col-md-1 timg\"><img src=\"./WT TENNIS_files/atp_img.png\" alt=\"\"></div>
                                <div class=\"col-md-2 t1\"><p> ";
                // line 90
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateDebut", array()), "Y-m-d"), "html", null, true);
                echo "</p></div>
                                <div class=\"col-md-3 t2\"><p>";
                // line 91
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "libelleEvenement", array()), "html", null, true);
                echo "</p> </div>
                                <div class=\"col-md-2 t3\"><p>";
                // line 92
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "site", array()), "html", null, true);
                echo "</p></div>
                                <div class=\"col-md-2 t4\"><p> ";
                // line 93
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nbreJoueur", array()), "html", null, true);
                echo "</p></div>
                                <div class=\"col-md-2 t5\"><p> _ </p></div>
                            ";
            }
            // line 96
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "                    </div>
                    <div class=\"accordion accordion-close\" id=\"section5\"><i class=\"fa fa-calendar-o\"></i>MAI<span></span></div>
                    <div class=\"acc-content\" style=\"display: none;\">
                        <div class=\"col-md-1 acc-title\">Photo</div>
                        <div class=\"col-md-2 acc-title\">Date Debut</div>
                        <div class=\"col-md-3 acc-title\">Tournois</div>
                        <div class=\"col-md-2 acc-title\">Emplacement </div>
                        <div class=\"col-md-2 acc-title\"> Nombre  </div>
                        <div class=\"col-md-2 acc-title\">Gagnant</div>
                        ";
        // line 106
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 107
            echo "                            ";
            if (((twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateDebut", array()), "U") >= twig_date_format_filter($this->env, "2016-5-1", "U")) && (twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateDebut", array()), "U") < twig_date_format_filter($this->env, "2016-6-1", "U")))) {
                echo " 
                                <div class=\"acc-footer\"></div>
                                <div class=\"col-md-1 timg\"><img src=\"./WT TENNIS_files/atp_img.png\" alt=\"\"></div>
                                <div class=\"col-md-2 t1\"><p> ";
                // line 110
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateDebut", array()), "Y-m-d"), "html", null, true);
                echo "</p></div>
                                <div class=\"col-md-3 t2\"><p>";
                // line 111
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "libelleEvenement", array()), "html", null, true);
                echo "</p> </div>
                                <div class=\"col-md-2 t3\"><p>";
                // line 112
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "site", array()), "html", null, true);
                echo "</p></div>
                                <div class=\"col-md-2 t4\"><p> ";
                // line 113
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nbreJoueur", array()), "html", null, true);
                echo "</p></div>
                                <div class=\"col-md-2 t5\"><p> _ </p></div>
                             
                            ";
            }
            // line 117
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        echo "                    </div>
                    <div class=\"accordion accordion-close\" id=\"section6\"><i class=\"fa fa-calendar-o\"></i>JUIN<span></span></div>
                    <div class=\"acc-content\" style=\"display: none;\">
                        <div class=\"col-md-1 acc-title\">Photo</div>
                        <div class=\"col-md-2 acc-title\">Date Debut</div>
                        <div class=\"col-md-3 acc-title\">Tournois</div>
                        <div class=\"col-md-2 acc-title\">Emplacement </div>
                        <div class=\"col-md-2 acc-title\"> Nombre  </div>
                        <div class=\"col-md-2 acc-title\">Gagnant</div>
                        ";
        // line 127
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 128
            echo "                            ";
            if (((twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateDebut", array()), "U") >= twig_date_format_filter($this->env, "2016-6-1", "U")) && (twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateDebut", array()), "U") < twig_date_format_filter($this->env, "2016-7-1", "U")))) {
                echo " 
                                <div class=\"acc-footer\"></div>
                                <div class=\"col-md-1 timg\"><img src=\"./WT TENNIS_files/atp_img.png\" alt=\"\"></div>
                                <div class=\"col-md-2 t1\"><p> ";
                // line 131
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateDebut", array()), "Y-m-d"), "html", null, true);
                echo "</p></div>
                                <div class=\"col-md-3 t2\"><p>";
                // line 132
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "libelleEvenement", array()), "html", null, true);
                echo "</p> </div>
                                <div class=\"col-md-2 t3\"><p>";
                // line 133
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "site", array()), "html", null, true);
                echo "</p></div>
                                <div class=\"col-md-2 t4\"><p> ";
                // line 134
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nbreJoueur", array()), "html", null, true);
                echo "</p></div>
                                <div class=\"col-md-2 t5\"><p> _ </p></div>
                                
                            ";
            }
            // line 138
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 139
        echo "                    </div>
                    <div class=\"accordion accordion-close\" id=\"section7\"><i class=\"fa fa-calendar-o\"></i>JUILLET<span></span></div>
                    <div class=\"acc-content\" style=\"display: none;\">
                        <div class=\"col-md-1 acc-title\">Photo</div>
                        <div class=\"col-md-2 acc-title\">Date Debut</div>
                        <div class=\"col-md-3 acc-title\">Tournois</div>
                        <div class=\"col-md-2 acc-title\">Emplacement </div>
                        <div class=\"col-md-2 acc-title\"> Nombre  </div>
                        <div class=\"col-md-2 acc-title\">Gagnant</div>
                        ";
        // line 148
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 149
            echo "                            ";
            if (((twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateDebut", array()), "U") >= twig_date_format_filter($this->env, "2016-7-1", "U")) && (twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateDebut", array()), "U") < twig_date_format_filter($this->env, "2016-8-1", "U")))) {
                echo " 
                        <div class=\"acc-footer\"></div>

                                <div class=\"col-md-1 timg\"><img src=\"./WT TENNIS_files/atp_img.png\" alt=\"\"></div>
                                <div class=\"col-md-2 t1\"><p> ";
                // line 153
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateDebut", array()), "Y-m-d"), "html", null, true);
                echo "</p></div>
                                <div class=\"col-md-3 t2\"><p>";
                // line 154
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "libelleEvenement", array()), "html", null, true);
                echo "</p> </div>
                                <div class=\"col-md-2 t3\"><p>";
                // line 155
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "site", array()), "html", null, true);
                echo "</p></div>
                                <div class=\"col-md-2 t4\"><p> ";
                // line 156
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nbreJoueur", array()), "html", null, true);
                echo "</p></div>
                                <div class=\"col-md-2 t5\"><p> _ </p></div>
                            ";
            }
            // line 159
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 160
        echo "                    </div>
                    <div class=\"accordion accordion-close\" id=\"section8\"><i class=\"fa fa-calendar-o\"></i>AOUT<span></span></div>
                    <div class=\"acc-content\" style=\"display: none;\">

                        <div class=\"col-md-1 acc-title\">Photo</div>
                        <div class=\"col-md-2 acc-title\">Date Debut</div>
                        <div class=\"col-md-3 acc-title\">Tournois</div>
                        <div class=\"col-md-2 acc-title\">Emplacement </div>
                        <div class=\"col-md-2 acc-title\"> Nombre  </div>
                        <div class=\"col-md-2 acc-title\">Gagnant</div>           
                        ";
        // line 170
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 171
            echo "
                            ";
            // line 172
            if (((twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateDebut", array()), "U") >= twig_date_format_filter($this->env, "2016-8-1", "U")) && (twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateDebut", array()), "U") < twig_date_format_filter($this->env, "2016-9-1", "U")))) {
                echo " 
                                <div class=\"acc-footer\"></div>
                                <div class=\"col-md-1 timg\"><img src=\"./WT TENNIS_files/atp_img.png\" alt=\"\"></div>
                                <div class=\"col-md-2 t1\"><p> ";
                // line 175
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateDebut", array()), "Y-m-d"), "html", null, true);
                echo "</p></div>
                                <div class=\"col-md-3 t2\"><p>";
                // line 176
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "libelleEvenement", array()), "html", null, true);
                echo "</p> </div>
                                <div class=\"col-md-2 t3\"><p>";
                // line 177
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "site", array()), "html", null, true);
                echo "</p></div>
                                <div class=\"col-md-2 t4\"><p> ";
                // line 178
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nbreJoueur", array()), "html", null, true);
                echo "</p></div>
                                <div class=\"col-md-2 t5\"><p> _ </p></div>
                            
                            ";
            }
            // line 182
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 183
        echo "                    </div>
                    <div class=\"accordion accordion-close\" id=\"section9\"><i class=\"fa fa-calendar-o\"></i>SEPTEMBER<span></span></div>
                    <div class=\"acc-content\" style=\"display: none;\">
                        <div class=\"col-md-1 acc-title\">Photo</div>
                        <div class=\"col-md-2 acc-title\">Date Debut</div>
                        <div class=\"col-md-3 acc-title\">Tournois</div>
                        <div class=\"col-md-2 acc-title\">Emplacement </div>
                        <div class=\"col-md-2 acc-title\"> Nombre  </div>
                        <div class=\"col-md-2 acc-title\">Gagnant</div>
                        ";
        // line 192
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 193
            echo "                            ";
            if (((twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateDebut", array()), "U") >= twig_date_format_filter($this->env, "2016-9-1", "U")) && (twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateDebut", array()), "U") < twig_date_format_filter($this->env, "2016-10-1", "U")))) {
                echo " 
                                <div class=\"acc-footer\"></div>
                                <div class=\"col-md-1 timg\"><img src=\"./WT TENNIS_files/atp_img.png\" alt=\"\"></div>
                                <div class=\"col-md-2 t1\"><p> ";
                // line 196
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateDebut", array()), "Y-m-d"), "html", null, true);
                echo "</p></div>
                                <div class=\"col-md-3 t2\"><p>";
                // line 197
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "libelleEvenement", array()), "html", null, true);
                echo "</p> </div>
                                <div class=\"col-md-2 t3\"><p>";
                // line 198
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "site", array()), "html", null, true);
                echo "</p></div>
                                <div class=\"col-md-2 t4\"><p> ";
                // line 199
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nbreJoueur", array()), "html", null, true);
                echo "</p></div>
                                <div class=\"col-md-2 t5\"><p> _ </p></div>
                            
                            ";
            }
            // line 203
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 204
        echo "                    </div>
                    <div class=\"accordion accordion-close\" id=\"section10\"><i class=\"fa fa-calendar-o\"></i>OCTOBER<span></span></div>
                    <div class=\"acc-content\" style=\"display: none;\">
                        <div class=\"col-md-1 acc-title\">Photo</div>
                        <div class=\"col-md-2 acc-title\">Date Debut</div>
                        <div class=\"col-md-3 acc-title\">Tournois</div>
                        <div class=\"col-md-2 acc-title\">Emplacement </div>
                        <div class=\"col-md-2 acc-title\"> Nombre  </div>
                        <div class=\"col-md-2 acc-title\">Gagnant</div>
                        ";
        // line 213
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 214
            echo "                             
                            ";
            // line 215
            if (((twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateDebut", array()), "U") >= twig_date_format_filter($this->env, "2016-10-1", "U")) && (twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateDebut", array()), "U") < twig_date_format_filter($this->env, "2016-11-1", "U")))) {
                echo " 
                            <div class=\"acc-footer\"></div>
                                <div class=\"col-md-1 timg\"><img src=\"./WT TENNIS_files/atp_img.png\" alt=\"\"></div>
                                <div class=\"col-md-2 t1\"><p> ";
                // line 218
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateDebut", array()), "Y-m-d"), "html", null, true);
                echo "</p></div>
                                <div class=\"col-md-3 t2\"><p>";
                // line 219
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "libelleEvenement", array()), "html", null, true);
                echo "</p> </div>
                                <div class=\"col-md-2 t3\"><p>";
                // line 220
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "site", array()), "html", null, true);
                echo "</p></div>
                                <div class=\"col-md-2 t4\"><p> ";
                // line 221
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nbreJoueur", array()), "html", null, true);
                echo "</p></div>
                                <div class=\"col-md-2 t5\"><p> _ </p></div>
                               
                            ";
            }
            // line 225
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "                   </div>
                    <div class=\"accordion accordion-close\" id=\"section11\"><i class=\"fa fa-calendar-o\"></i>NOVEMBER<span></span></div>
                    <div class=\"acc-content\" style=\"display: none;\">
                        <div class=\"col-md-1 acc-title\">Photo</div>
                        <div class=\"col-md-2 acc-title\">Date Debut</div>
                        <div class=\"col-md-3 acc-title\">Tournois</div>
                        <div class=\"col-md-2 acc-title\">Emplacement </div>
                        <div class=\"col-md-2 acc-title\"> Nombre  </div>
                        <div class=\"col-md-2 acc-title\">Gagnant</div> 
                        ";
        // line 234
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 235
            echo "
                            ";
            // line 236
            if (((twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateDebut", array()), "U") >= twig_date_format_filter($this->env, "2016-11-1", "U")) && (twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateDebut", array()), "U") < twig_date_format_filter($this->env, "2016-12-1", "U")))) {
                echo " 
                                <div class=\"acc-footer\"></div>
                                <div class=\"col-md-1 timg\"><img src=\"./WT TENNIS_files/atp_img.png\" alt=\"\"></div>
                                <div class=\"col-md-2 t1\"><p> ";
                // line 239
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateDebut", array()), "Y-m-d"), "html", null, true);
                echo "</p></div>
                                <div class=\"col-md-3 t2\"><p>";
                // line 240
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "libelleEvenement", array()), "html", null, true);
                echo "</p> </div>
                                <div class=\"col-md-2 t3\"><p>";
                // line 241
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "site", array()), "html", null, true);
                echo "</p></div>
                                <div class=\"col-md-2 t4\"><p> ";
                // line 242
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nbreJoueur", array()), "html", null, true);
                echo "</p></div>
                                <div class=\"col-md-2 t5\"><p> _ </p></div>
                               
                            ";
            }
            // line 246
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "                   </div>
                    <div class=\"accordion accordion-close\" id=\"section11\"><i class=\"fa fa-calendar-o\"></i>DECEMBRE  <span></span></div>
                    <div class=\"acc-content\" style=\"display: none;\">
                        <div class=\"col-md-1 acc-title\">Photo</div>
                        <div class=\"col-md-2 acc-title\">Date Debut</div>
                        <div class=\"col-md-3 acc-title\">Tournois</div>
                        <div class=\"col-md-2 acc-title\">Emplacement </div>
                        <div class=\"col-md-2 acc-title\"> Nombre  </div>
                        <div class=\"col-md-2 acc-title\">Gagnant</div>
                        ";
        // line 255
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 256
            echo "                            ";
            if (((twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateDebut", array()), "U") >= twig_date_format_filter($this->env, "2016-12-1", "U")) && (twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateDebut", array()), "U") < twig_date_format_filter($this->env, "2017-1-1", "U")))) {
                echo " 
                                <div class=\"acc-footer\"></div>
                                <div class=\"col-md-1 timg\"><img src=\"./WT TENNIS_files/atp_img.png\" alt=\"\"></div>
                                <div class=\"col-md-2 t1\"><p> ";
                // line 259
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateDebut", array()), "Y-m-d"), "html", null, true);
                echo "</p></div>
                                <div class=\"col-md-3 t2\"><p>";
                // line 260
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "libelleEvenement", array()), "html", null, true);
                echo "</p> </div>
                                <div class=\"col-md-2 t3\"><p>";
                // line 261
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "site", array()), "html", null, true);
                echo "</p></div>
                                <div class=\"col-md-2 t4\"><p> ";
                // line 262
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nbreJoueur", array()), "html", null, true);
                echo "</p></div>
                                <div class=\"col-md-2 t5\"><p> _ </p></div>
                               
                            ";
            }
            // line 266
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 267
        echo "                    </div>

                </div><!--Close Top Match-->
                <div class=\"col-md-3 right-column\">
                    <div class=\"top-score-title col-md-12 right-title\">
                        <h3>Nouveautés </h3>
                        <div class=\"right-content\">
                            <p class=\"news-title-right\">Recrutement</p>
                            <p class=\"txt-right\">Dans le cadre de la préparation du Calendrier National pour la saison sportive 2015/2016, la Commission d’organisation de la Fédération ...
                                                                                                                                        </p>
                            <a href=\"http://www.ilcorsaronero.it/progettienvato/SiteParallax/ParallaxSite/site_tennis/preview/single_news.html\" class=\"ca-more\"><i class=\"fa fa-angle-double-right\"></i>more...</a>
                        </div>
                        <div class=\"right-content\">
                            <p class=\"news-title-right\">A New Old Life</p>
                            <p class=\"txt-right\">Simon, who’s seeded just a lowly 26th here, was in many ways the right man for this grueling assignment</p>
                            <a href=\"http://www.ilcorsaronero.it/progettienvato/SiteParallax/ParallaxSite/site_tennis/preview/single_news.html\" class=\"ca-more\"><i class=\"fa fa-angle-double-right\"></i>more...</a>
                        </div>
                        <div class=\"right-content\">
                            <p class=\"news-title-right\">A New Old Life</p>
                            <p class=\"txt-right\">Simon, who’s seeded just a lowly 26th here, was in many ways the right man for this grueling assignment</p>
                            <a href=\"http://www.ilcorsaronero.it/progettienvato/SiteParallax/ParallaxSite/site_tennis/preview/single_news.html\" class=\"ca-more\"><i class=\"fa fa-angle-double-right\"></i>more...</a>
                        </div>
                    </div>
                    <div class=\"top-score-title col-md-12\">
                        <img src=\"";
        // line 291
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/images/diversion/banner2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    </div>
                    <div class=\"top-score-title col-md-12 right-title\">
                        <h3>Photos</h3> 
                        <ul class=\"right-last-photo\">
                            <li>
                                <div class=\"jm-item second\">
                                    <div class=\"jm-item-wrapper\">
                                        <div class=\"jm-item-image\">
                                            <img src=\"";
        // line 300
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/images/diversion/3.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                            <div class=\"jm-item-description\">
                                                <div class=\"jm-item-button\">
                                                    <i class=\"fa fa-plus\"></i>
                                                </div>
                                            </div>
                                        </div>\t
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class=\"jm-item second\">
                                    <div class=\"jm-item-wrapper\">
                                        <div class=\"jm-item-image\">
                                            <img src=\"";
        // line 314
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/images/diversion/2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                            <div class=\"jm-item-description\">
                                                <div class=\"jm-item-button\">
                                                    <i class=\"fa fa-plus\"></i>
                                                </div>
                                            </div>
                                        </div>\t
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class=\"jm-item second\">
                                    <div class=\"jm-item-wrapper\">
                                        <div class=\"jm-item-image\">
                                            <img src=\"";
        // line 328
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/images/diversion/2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                            <div class=\"jm-item-description\">
                                                <div class=\"jm-item-button\">
                                                    <i class=\"fa fa-plus\"></i>
                                                </div>
                                            </div>
                                        </div>\t
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class=\"jm-item second\">
                                    <div class=\"jm-item-wrapper\">
                                        <div class=\"jm-item-image\">
                                            <img src=\"";
        // line 342
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/images/diversion/5.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                            <div class=\"jm-item-description\">
                                                <div class=\"jm-item-button\">
                                                    <i class=\"fa fa-plus\"></i>
                                                </div>
                                            </div>
                                        </div>\t
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class=\"jm-item second\">
                                    <div class=\"jm-item-wrapper\">
                                        <div class=\"jm-item-image\">
                                            <img src=\"";
        // line 356
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/images/diversion/6.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                            <div class=\"jm-item-description\">
                                                <div class=\"jm-item-button\">
                                                    <i class=\"fa fa-plus\"></i>
                                                </div>
                                            </div>
                                        </div>\t
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class=\"jm-item second\">
                                    <div class=\"jm-item-wrapper\">
                                        <div class=\"jm-item-image\">
                                            <img src=\"";
        // line 370
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/images/diversion/1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                            <div class=\"jm-item-description\">
                                                <div class=\"jm-item-button\">
                                                    <i class=\"fa fa-plus\"></i>
                                                </div>
                                            </div>
                                        </div>\t
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class=\"jm-item second\">
                                    <div class=\"jm-item-wrapper\">
                                        <div class=\"jm-item-image\">
                                            <img src=\"";
        // line 384
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/images/diversion/2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                            <div class=\"jm-item-description\">
                                                <div class=\"jm-item-button\">
                                                    <i class=\"fa fa-plus\"></i>
                                                </div>
                                            </div>
                                        </div>\t
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class=\"jm-item second\">
                                    <div class=\"jm-item-wrapper\">
                                        <div class=\"jm-item-image\">
                                            <img src=\"";
        // line 398
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/images/diversion/6.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                            <div class=\"jm-item-description\">
                                                <div class=\"jm-item-button\">
                                                    <i class=\"fa fa-plus\"></i>
                                                </div>
                                            </div>
                                        </div>\t
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class=\"jm-item second\">
                                    <div class=\"jm-item-wrapper\">
                                        <div class=\"jm-item-image\">
                                            <img src=\"";
        // line 412
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/images/diversion/2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                            <div class=\"jm-item-description\">
                                                <div class=\"jm-item-button\">
                                                    <i class=\"fa fa-plus\"></i>
                                                </div>
                                            </div>
                                        </div>\t
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </section>
        <section class=\"container\">
            <!--SECTION SPONSOR-->
            <div class=\"client-sport client-sport-nomargin\">
                <div class=\"content-banner\">
                    <ul class=\"sponsor second\">
                        <li><img src=\"";
        // line 433
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/images/sponsors/1.jpg"), "html", null, true);
        echo "\" alt=\"\" /></li>
                        <li><img src=\"";
        // line 434
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/images/sponsors/2.jpg"), "html", null, true);
        echo "\" alt=\"\" /></li>
                        <li><img src=\"";
        // line 435
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/images/sponsors/3.jpg"), "html", null, true);
        echo "\" alt=\"\" /></li>
                        <li><img src=\"";
        // line 436
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/images/sponsors/4.jpg"), "html", null, true);
        echo "\" alt=\"\" /></li>
                        <li><img src=\"";
        // line 437
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/images/sponsors/5.jpg"), "html", null, true);
        echo "\" alt=\"\" /></li>
                        <li><img src=\"";
        // line 438
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/images/sponsors/6.jpg"), "html", null, true);
        echo "\" alt=\"\" /></li>

                    </ul>
                </div>
            </div>
        </section>
    ";
    }

    public function getTemplateName()
    {
        return "frontofficefrontBundle:Default:tournois.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  828 => 438,  824 => 437,  820 => 436,  816 => 435,  812 => 434,  808 => 433,  784 => 412,  767 => 398,  750 => 384,  733 => 370,  716 => 356,  699 => 342,  682 => 328,  665 => 314,  648 => 300,  636 => 291,  610 => 267,  604 => 266,  597 => 262,  593 => 261,  589 => 260,  585 => 259,  578 => 256,  574 => 255,  558 => 246,  551 => 242,  547 => 241,  543 => 240,  539 => 239,  533 => 236,  530 => 235,  526 => 234,  510 => 225,  503 => 221,  499 => 220,  495 => 219,  491 => 218,  485 => 215,  482 => 214,  478 => 213,  467 => 204,  461 => 203,  454 => 199,  450 => 198,  446 => 197,  442 => 196,  435 => 193,  431 => 192,  420 => 183,  414 => 182,  407 => 178,  403 => 177,  399 => 176,  395 => 175,  389 => 172,  386 => 171,  382 => 170,  370 => 160,  364 => 159,  358 => 156,  354 => 155,  350 => 154,  346 => 153,  338 => 149,  334 => 148,  323 => 139,  317 => 138,  310 => 134,  306 => 133,  302 => 132,  298 => 131,  291 => 128,  287 => 127,  276 => 118,  270 => 117,  263 => 113,  259 => 112,  255 => 111,  251 => 110,  244 => 107,  240 => 106,  229 => 97,  223 => 96,  217 => 93,  213 => 92,  209 => 91,  205 => 90,  198 => 87,  194 => 86,  183 => 77,  177 => 76,  171 => 73,  167 => 72,  163 => 71,  159 => 70,  152 => 67,  148 => 66,  137 => 57,  131 => 56,  125 => 53,  121 => 52,  117 => 51,  113 => 50,  106 => 47,  102 => 46,  90 => 36,  84 => 35,  77 => 31,  73 => 30,  69 => 29,  65 => 28,  58 => 25,  54 => 24,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "frontofficefrontBundle::MainLayout.html.twig" %}*/
/* {% block main %}*/
/* */
/*     <section class="drawer">*/
/*         <div class="col-md-12 size-img back-img">*/
/*             <div class="effect-cover">*/
/*                 <h3 class="txt-advert animated fadeInUp">2015-2016 FTT Tunisia</h3>*/
/*                 <p class="txt-advert-sub animated"> Nos meilleurs tournois pour la saison 2015-2016  </p>*/
/*             </div>*/
/*         </div>*/
/*         <section id="summary" class="container secondary-page">*/
/*             <div class="general general-results tournaments">*/
/* */
/*                 <div id="c-calend" class="top-score-title right-score col-md-9">*/
/*                     <h3>FTT<span>-CALENDRIER</span><span class="point-little">.</span></h3>*/
/*                     <div class="accordion accordion-open" id="section1"><i class="fa fa-calendar-o"></i>JANVIER<span></span></div>*/
/*                     <div class="acc-content">*/
/*                         <div class="col-md-1 acc-title">Photo</div>*/
/*                         <div class="col-md-2 acc-title">Date Debut</div>*/
/*                         <div class="col-md-3 acc-title">Tournois</div>*/
/*                         <div class="col-md-2 acc-title">Emplacement </div>*/
/*                         <div class="col-md-2 acc-title"> Nombre  </div>*/
/*                         <div class="col-md-2 acc-title">Gagnant</div>*/
/*                         {%for entity in entities %}*/
/*                             {% if entity.dateDebut|date('U') < '2016-2-1'|date('U') %} */
/*                                 <div class="acc-footer"></div>*/
/*                                 <div class="col-md-1 timg"><img src="./WT TENNIS_files/atp_img.png" alt=""></div>*/
/*                                 <div class="col-md-2 t1"><p> {{entity.dateDebut|date('Y-m-d')}}</p></div>*/
/*                                 <div class="col-md-3 t2"><p>{{ entity.libelleEvenement }}</p> </div>*/
/*                                 <div class="col-md-2 t3"><p>{{ entity.site }}</p></div>*/
/*                                 <div class="col-md-2 t4"><p> {{ entity.nbreJoueur }}</p></div>*/
/*                                 <div class="col-md-2 t5"><p> _ </p></div>*/
/* */
/*                             {% endif %}*/
/*                         {% endfor %}*/
/*                     </div>*/
/*                     <div class="accordion accordion-close" id="section2"><i class="fa fa-calendar-o"></i>FEVRIER<span></span></div>*/
/*                     <div class="acc-content" style="display: none;">*/
/*                         <div class="col-md-1 acc-title">Photo</div>*/
/*                         <div class="col-md-2 acc-title">Date Debut</div>*/
/*                         <div class="col-md-3 acc-title">Tournois</div>*/
/*                         <div class="col-md-2 acc-title">Emplacement </div>*/
/*                         <div class="col-md-2 acc-title"> Nombre  </div>*/
/*                         <div class="col-md-2 acc-title">Gagnant</div>*/
/* */
/*                         {%for entity in entities %}*/
/*                             {% if  entity.dateDebut|date('U') >= '2016-2-1'|date('U') and entity.dateDebut|date('U') < '2016-3-1'|date('U') %} */
/*                                 <div class="acc-footer"></div>*/
/*                                 <div class="col-md-1 timg"><img src="./WT TENNIS_files/atp_img.png" alt=""></div>*/
/*                                 <div class="col-md-2 t1"><p> {{entity.dateDebut|date('Y-m-d')}}</p></div>*/
/*                                 <div class="col-md-3 t2"><p>{{ entity.libelleEvenement }}</p> </div>*/
/*                                 <div class="col-md-2 t3"><p>{{ entity.site }}</p></div>*/
/*                                 <div class="col-md-2 t4"><p> {{ entity.nbreJoueur }}</p></div>*/
/*                                 <div class="col-md-2 t5"><p> _ </p></div>*/
/*                             {% endif %}*/
/*                         {% endfor %}*/
/*                     </div>*/
/*                     <div class="accordion accordion-close" id="section3"><i class="fa fa-calendar-o"></i> MARS <span></span></div>*/
/*                     <div class="acc-content" style="display: none;">*/
/*                         <div class="col-md-1 acc-title">Photo</div>*/
/*                         <div class="col-md-2 acc-title">Date Debut</div>*/
/*                         <div class="col-md-3 acc-title">Tournois</div>*/
/*                         <div class="col-md-2 acc-title">Emplacement </div>*/
/*                         <div class="col-md-2 acc-title"> Nombre  </div>*/
/*                         <div class="col-md-2 acc-title">Gagnant</div>*/
/*                         {%for entity in entities %}*/
/*                             {% if  entity.dateDebut|date('U') >= '2016-3-1'|date('U') and entity.dateDebut|date('U') < '2016-4-1'|date('U')  %} */
/*                                 <div class="acc-footer"></div>*/
/*                                 <div class="col-md-1 timg"><img src="./WT TENNIS_files/atp_img.png" alt=""></div>*/
/*                                 <div class="col-md-2 t1"><p> {{entity.dateDebut|date('Y-m-d')}}</p></div>*/
/*                                 <div class="col-md-3 t2"><p>{{ entity.libelleEvenement }}</p> </div>*/
/*                                 <div class="col-md-2 t3"><p>{{ entity.site }}</p></div>*/
/*                                 <div class="col-md-2 t4"><p> {{ entity.nbreJoueur }}</p></div>*/
/*                                 <div class="col-md-2 t5"><p> _ </p></div>*/
/*                             {% endif %}*/
/*                         {% endfor %}*/
/*                     </div>*/
/*                     <div class="accordion accordion-close" id="section4"><i class="fa fa-calendar-o"></i>AVRIL<span></span></div>*/
/*                     <div class="acc-content" style="display: none;">*/
/*                         <div class="col-md-1 acc-title">Photo</div>*/
/*                         <div class="col-md-2 acc-title">Date Debut</div>*/
/*                         <div class="col-md-3 acc-title">Tournois</div>*/
/*                         <div class="col-md-2 acc-title">Emplacement </div>*/
/*                         <div class="col-md-2 acc-title"> Nombre  </div>*/
/*                         <div class="col-md-2 acc-title">Gagnant</div>*/
/*                         {%for entity in entities %}*/
/*                             {% if entity.dateDebut|date('U') >= '2016-4-1'|date('U') and entity.dateDebut|date('U') < '2016-5-1'|date('U') %} */
/*                                 <div class="acc-footer"></div>*/
/*                                 <div class="col-md-1 timg"><img src="./WT TENNIS_files/atp_img.png" alt=""></div>*/
/*                                 <div class="col-md-2 t1"><p> {{entity.dateDebut|date('Y-m-d')}}</p></div>*/
/*                                 <div class="col-md-3 t2"><p>{{ entity.libelleEvenement }}</p> </div>*/
/*                                 <div class="col-md-2 t3"><p>{{ entity.site }}</p></div>*/
/*                                 <div class="col-md-2 t4"><p> {{ entity.nbreJoueur }}</p></div>*/
/*                                 <div class="col-md-2 t5"><p> _ </p></div>*/
/*                             {% endif %}*/
/*                         {% endfor %}*/
/*                     </div>*/
/*                     <div class="accordion accordion-close" id="section5"><i class="fa fa-calendar-o"></i>MAI<span></span></div>*/
/*                     <div class="acc-content" style="display: none;">*/
/*                         <div class="col-md-1 acc-title">Photo</div>*/
/*                         <div class="col-md-2 acc-title">Date Debut</div>*/
/*                         <div class="col-md-3 acc-title">Tournois</div>*/
/*                         <div class="col-md-2 acc-title">Emplacement </div>*/
/*                         <div class="col-md-2 acc-title"> Nombre  </div>*/
/*                         <div class="col-md-2 acc-title">Gagnant</div>*/
/*                         {%for entity in entities %}*/
/*                             {% if entity.dateDebut|date('U') >= '2016-5-1'|date('U') and entity.dateDebut|date('U') < '2016-6-1'|date('U')  %} */
/*                                 <div class="acc-footer"></div>*/
/*                                 <div class="col-md-1 timg"><img src="./WT TENNIS_files/atp_img.png" alt=""></div>*/
/*                                 <div class="col-md-2 t1"><p> {{entity.dateDebut|date('Y-m-d')}}</p></div>*/
/*                                 <div class="col-md-3 t2"><p>{{ entity.libelleEvenement }}</p> </div>*/
/*                                 <div class="col-md-2 t3"><p>{{ entity.site }}</p></div>*/
/*                                 <div class="col-md-2 t4"><p> {{ entity.nbreJoueur }}</p></div>*/
/*                                 <div class="col-md-2 t5"><p> _ </p></div>*/
/*                              */
/*                             {% endif %}*/
/*                         {% endfor %}*/
/*                     </div>*/
/*                     <div class="accordion accordion-close" id="section6"><i class="fa fa-calendar-o"></i>JUIN<span></span></div>*/
/*                     <div class="acc-content" style="display: none;">*/
/*                         <div class="col-md-1 acc-title">Photo</div>*/
/*                         <div class="col-md-2 acc-title">Date Debut</div>*/
/*                         <div class="col-md-3 acc-title">Tournois</div>*/
/*                         <div class="col-md-2 acc-title">Emplacement </div>*/
/*                         <div class="col-md-2 acc-title"> Nombre  </div>*/
/*                         <div class="col-md-2 acc-title">Gagnant</div>*/
/*                         {%for entity in entities %}*/
/*                             {% if entity.dateDebut|date('U') >= '2016-6-1'|date('U') and entity.dateDebut|date('U') < '2016-7-1'|date('U') %} */
/*                                 <div class="acc-footer"></div>*/
/*                                 <div class="col-md-1 timg"><img src="./WT TENNIS_files/atp_img.png" alt=""></div>*/
/*                                 <div class="col-md-2 t1"><p> {{entity.dateDebut|date('Y-m-d')}}</p></div>*/
/*                                 <div class="col-md-3 t2"><p>{{ entity.libelleEvenement }}</p> </div>*/
/*                                 <div class="col-md-2 t3"><p>{{ entity.site }}</p></div>*/
/*                                 <div class="col-md-2 t4"><p> {{ entity.nbreJoueur }}</p></div>*/
/*                                 <div class="col-md-2 t5"><p> _ </p></div>*/
/*                                 */
/*                             {% endif %}*/
/*                         {% endfor %}*/
/*                     </div>*/
/*                     <div class="accordion accordion-close" id="section7"><i class="fa fa-calendar-o"></i>JUILLET<span></span></div>*/
/*                     <div class="acc-content" style="display: none;">*/
/*                         <div class="col-md-1 acc-title">Photo</div>*/
/*                         <div class="col-md-2 acc-title">Date Debut</div>*/
/*                         <div class="col-md-3 acc-title">Tournois</div>*/
/*                         <div class="col-md-2 acc-title">Emplacement </div>*/
/*                         <div class="col-md-2 acc-title"> Nombre  </div>*/
/*                         <div class="col-md-2 acc-title">Gagnant</div>*/
/*                         {%for entity in entities %}*/
/*                             {% if  entity.dateDebut|date('U') >= '2016-7-1'|date('U') and entity.dateDebut|date('U') < '2016-8-1'|date('U') %} */
/*                         <div class="acc-footer"></div>*/
/* */
/*                                 <div class="col-md-1 timg"><img src="./WT TENNIS_files/atp_img.png" alt=""></div>*/
/*                                 <div class="col-md-2 t1"><p> {{entity.dateDebut|date('Y-m-d')}}</p></div>*/
/*                                 <div class="col-md-3 t2"><p>{{ entity.libelleEvenement }}</p> </div>*/
/*                                 <div class="col-md-2 t3"><p>{{ entity.site }}</p></div>*/
/*                                 <div class="col-md-2 t4"><p> {{ entity.nbreJoueur }}</p></div>*/
/*                                 <div class="col-md-2 t5"><p> _ </p></div>*/
/*                             {% endif %}*/
/*                         {% endfor %}*/
/*                     </div>*/
/*                     <div class="accordion accordion-close" id="section8"><i class="fa fa-calendar-o"></i>AOUT<span></span></div>*/
/*                     <div class="acc-content" style="display: none;">*/
/* */
/*                         <div class="col-md-1 acc-title">Photo</div>*/
/*                         <div class="col-md-2 acc-title">Date Debut</div>*/
/*                         <div class="col-md-3 acc-title">Tournois</div>*/
/*                         <div class="col-md-2 acc-title">Emplacement </div>*/
/*                         <div class="col-md-2 acc-title"> Nombre  </div>*/
/*                         <div class="col-md-2 acc-title">Gagnant</div>           */
/*                         {%for entity in entities %}*/
/* */
/*                             {% if entity.dateDebut|date('U') >= '2016-8-1'|date('U') and entity.dateDebut|date('U') < '2016-9-1'|date('U') %} */
/*                                 <div class="acc-footer"></div>*/
/*                                 <div class="col-md-1 timg"><img src="./WT TENNIS_files/atp_img.png" alt=""></div>*/
/*                                 <div class="col-md-2 t1"><p> {{entity.dateDebut|date('Y-m-d')}}</p></div>*/
/*                                 <div class="col-md-3 t2"><p>{{ entity.libelleEvenement }}</p> </div>*/
/*                                 <div class="col-md-2 t3"><p>{{ entity.site }}</p></div>*/
/*                                 <div class="col-md-2 t4"><p> {{ entity.nbreJoueur }}</p></div>*/
/*                                 <div class="col-md-2 t5"><p> _ </p></div>*/
/*                             */
/*                             {% endif %}*/
/*                         {% endfor %}*/
/*                     </div>*/
/*                     <div class="accordion accordion-close" id="section9"><i class="fa fa-calendar-o"></i>SEPTEMBER<span></span></div>*/
/*                     <div class="acc-content" style="display: none;">*/
/*                         <div class="col-md-1 acc-title">Photo</div>*/
/*                         <div class="col-md-2 acc-title">Date Debut</div>*/
/*                         <div class="col-md-3 acc-title">Tournois</div>*/
/*                         <div class="col-md-2 acc-title">Emplacement </div>*/
/*                         <div class="col-md-2 acc-title"> Nombre  </div>*/
/*                         <div class="col-md-2 acc-title">Gagnant</div>*/
/*                         {%for entity in entities %}*/
/*                             {% if entity.dateDebut|date('U') >= '2016-9-1'|date('U') and entity.dateDebut|date('U') < '2016-10-1'|date('U') %} */
/*                                 <div class="acc-footer"></div>*/
/*                                 <div class="col-md-1 timg"><img src="./WT TENNIS_files/atp_img.png" alt=""></div>*/
/*                                 <div class="col-md-2 t1"><p> {{entity.dateDebut|date('Y-m-d')}}</p></div>*/
/*                                 <div class="col-md-3 t2"><p>{{ entity.libelleEvenement }}</p> </div>*/
/*                                 <div class="col-md-2 t3"><p>{{ entity.site }}</p></div>*/
/*                                 <div class="col-md-2 t4"><p> {{ entity.nbreJoueur }}</p></div>*/
/*                                 <div class="col-md-2 t5"><p> _ </p></div>*/
/*                             */
/*                             {% endif %}*/
/*                         {% endfor %}*/
/*                     </div>*/
/*                     <div class="accordion accordion-close" id="section10"><i class="fa fa-calendar-o"></i>OCTOBER<span></span></div>*/
/*                     <div class="acc-content" style="display: none;">*/
/*                         <div class="col-md-1 acc-title">Photo</div>*/
/*                         <div class="col-md-2 acc-title">Date Debut</div>*/
/*                         <div class="col-md-3 acc-title">Tournois</div>*/
/*                         <div class="col-md-2 acc-title">Emplacement </div>*/
/*                         <div class="col-md-2 acc-title"> Nombre  </div>*/
/*                         <div class="col-md-2 acc-title">Gagnant</div>*/
/*                         {%for entity in entities %}*/
/*                              */
/*                             {% if entity.dateDebut|date('U') >= '2016-10-1'|date('U') and entity.dateDebut|date('U') < '2016-11-1'|date('U') %} */
/*                             <div class="acc-footer"></div>*/
/*                                 <div class="col-md-1 timg"><img src="./WT TENNIS_files/atp_img.png" alt=""></div>*/
/*                                 <div class="col-md-2 t1"><p> {{entity.dateDebut|date('Y-m-d')}}</p></div>*/
/*                                 <div class="col-md-3 t2"><p>{{ entity.libelleEvenement }}</p> </div>*/
/*                                 <div class="col-md-2 t3"><p>{{ entity.site }}</p></div>*/
/*                                 <div class="col-md-2 t4"><p> {{ entity.nbreJoueur }}</p></div>*/
/*                                 <div class="col-md-2 t5"><p> _ </p></div>*/
/*                                */
/*                             {% endif %}*/
/*                         {% endfor %}                   </div>*/
/*                     <div class="accordion accordion-close" id="section11"><i class="fa fa-calendar-o"></i>NOVEMBER<span></span></div>*/
/*                     <div class="acc-content" style="display: none;">*/
/*                         <div class="col-md-1 acc-title">Photo</div>*/
/*                         <div class="col-md-2 acc-title">Date Debut</div>*/
/*                         <div class="col-md-3 acc-title">Tournois</div>*/
/*                         <div class="col-md-2 acc-title">Emplacement </div>*/
/*                         <div class="col-md-2 acc-title"> Nombre  </div>*/
/*                         <div class="col-md-2 acc-title">Gagnant</div> */
/*                         {%for entity in entities %}*/
/* */
/*                             {% if entity.dateDebut|date('U') >= '2016-11-1'|date('U') and entity.dateDebut|date('U') < '2016-12-1'|date('U') %} */
/*                                 <div class="acc-footer"></div>*/
/*                                 <div class="col-md-1 timg"><img src="./WT TENNIS_files/atp_img.png" alt=""></div>*/
/*                                 <div class="col-md-2 t1"><p> {{entity.dateDebut|date('Y-m-d')}}</p></div>*/
/*                                 <div class="col-md-3 t2"><p>{{ entity.libelleEvenement }}</p> </div>*/
/*                                 <div class="col-md-2 t3"><p>{{ entity.site }}</p></div>*/
/*                                 <div class="col-md-2 t4"><p> {{ entity.nbreJoueur }}</p></div>*/
/*                                 <div class="col-md-2 t5"><p> _ </p></div>*/
/*                                */
/*                             {% endif %}*/
/*                         {% endfor %}                   </div>*/
/*                     <div class="accordion accordion-close" id="section11"><i class="fa fa-calendar-o"></i>DECEMBRE  <span></span></div>*/
/*                     <div class="acc-content" style="display: none;">*/
/*                         <div class="col-md-1 acc-title">Photo</div>*/
/*                         <div class="col-md-2 acc-title">Date Debut</div>*/
/*                         <div class="col-md-3 acc-title">Tournois</div>*/
/*                         <div class="col-md-2 acc-title">Emplacement </div>*/
/*                         <div class="col-md-2 acc-title"> Nombre  </div>*/
/*                         <div class="col-md-2 acc-title">Gagnant</div>*/
/*                         {%for entity in entities %}*/
/*                             {% if entity.dateDebut|date('U') >= '2016-12-1'|date('U') and entity.dateDebut|date('U') < '2017-1-1'|date('U')  %} */
/*                                 <div class="acc-footer"></div>*/
/*                                 <div class="col-md-1 timg"><img src="./WT TENNIS_files/atp_img.png" alt=""></div>*/
/*                                 <div class="col-md-2 t1"><p> {{entity.dateDebut|date('Y-m-d')}}</p></div>*/
/*                                 <div class="col-md-3 t2"><p>{{ entity.libelleEvenement }}</p> </div>*/
/*                                 <div class="col-md-2 t3"><p>{{ entity.site }}</p></div>*/
/*                                 <div class="col-md-2 t4"><p> {{ entity.nbreJoueur }}</p></div>*/
/*                                 <div class="col-md-2 t5"><p> _ </p></div>*/
/*                                */
/*                             {% endif %}*/
/*                         {% endfor %}*/
/*                     </div>*/
/* */
/*                 </div><!--Close Top Match-->*/
/*                 <div class="col-md-3 right-column">*/
/*                     <div class="top-score-title col-md-12 right-title">*/
/*                         <h3>Nouveautés </h3>*/
/*                         <div class="right-content">*/
/*                             <p class="news-title-right">Recrutement</p>*/
/*                             <p class="txt-right">Dans le cadre de la préparation du Calendrier National pour la saison sportive 2015/2016, la Commission d’organisation de la Fédération ...*/
/*                                                                                                                                         </p>*/
/*                             <a href="http://www.ilcorsaronero.it/progettienvato/SiteParallax/ParallaxSite/site_tennis/preview/single_news.html" class="ca-more"><i class="fa fa-angle-double-right"></i>more...</a>*/
/*                         </div>*/
/*                         <div class="right-content">*/
/*                             <p class="news-title-right">A New Old Life</p>*/
/*                             <p class="txt-right">Simon, who’s seeded just a lowly 26th here, was in many ways the right man for this grueling assignment</p>*/
/*                             <a href="http://www.ilcorsaronero.it/progettienvato/SiteParallax/ParallaxSite/site_tennis/preview/single_news.html" class="ca-more"><i class="fa fa-angle-double-right"></i>more...</a>*/
/*                         </div>*/
/*                         <div class="right-content">*/
/*                             <p class="news-title-right">A New Old Life</p>*/
/*                             <p class="txt-right">Simon, who’s seeded just a lowly 26th here, was in many ways the right man for this grueling assignment</p>*/
/*                             <a href="http://www.ilcorsaronero.it/progettienvato/SiteParallax/ParallaxSite/site_tennis/preview/single_news.html" class="ca-more"><i class="fa fa-angle-double-right"></i>more...</a>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="top-score-title col-md-12">*/
/*                         <img src="{{ asset('frontoffice/images/diversion/banner2.jpg') }}" alt="">*/
/*                     </div>*/
/*                     <div class="top-score-title col-md-12 right-title">*/
/*                         <h3>Photos</h3> */
/*                         <ul class="right-last-photo">*/
/*                             <li>*/
/*                                 <div class="jm-item second">*/
/*                                     <div class="jm-item-wrapper">*/
/*                                         <div class="jm-item-image">*/
/*                                             <img src="{{asset('frontoffice/images/diversion/3.jpg')}}" alt="">*/
/*                                             <div class="jm-item-description">*/
/*                                                 <div class="jm-item-button">*/
/*                                                     <i class="fa fa-plus"></i>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                         </div>	*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <div class="jm-item second">*/
/*                                     <div class="jm-item-wrapper">*/
/*                                         <div class="jm-item-image">*/
/*                                             <img src="{{asset('frontoffice/images/diversion/2.jpg')}}" alt="">*/
/*                                             <div class="jm-item-description">*/
/*                                                 <div class="jm-item-button">*/
/*                                                     <i class="fa fa-plus"></i>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                         </div>	*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <div class="jm-item second">*/
/*                                     <div class="jm-item-wrapper">*/
/*                                         <div class="jm-item-image">*/
/*                                             <img src="{{asset('frontoffice/images/diversion/2.jpg')}}" alt="">*/
/*                                             <div class="jm-item-description">*/
/*                                                 <div class="jm-item-button">*/
/*                                                     <i class="fa fa-plus"></i>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                         </div>	*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <div class="jm-item second">*/
/*                                     <div class="jm-item-wrapper">*/
/*                                         <div class="jm-item-image">*/
/*                                             <img src="{{asset('frontoffice/images/diversion/5.jpg')}}" alt="">*/
/*                                             <div class="jm-item-description">*/
/*                                                 <div class="jm-item-button">*/
/*                                                     <i class="fa fa-plus"></i>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                         </div>	*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <div class="jm-item second">*/
/*                                     <div class="jm-item-wrapper">*/
/*                                         <div class="jm-item-image">*/
/*                                             <img src="{{asset('frontoffice/images/diversion/6.jpg')}}" alt="">*/
/*                                             <div class="jm-item-description">*/
/*                                                 <div class="jm-item-button">*/
/*                                                     <i class="fa fa-plus"></i>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                         </div>	*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <div class="jm-item second">*/
/*                                     <div class="jm-item-wrapper">*/
/*                                         <div class="jm-item-image">*/
/*                                             <img src="{{asset('frontoffice/images/diversion/1.jpg')}}" alt="">*/
/*                                             <div class="jm-item-description">*/
/*                                                 <div class="jm-item-button">*/
/*                                                     <i class="fa fa-plus"></i>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                         </div>	*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <div class="jm-item second">*/
/*                                     <div class="jm-item-wrapper">*/
/*                                         <div class="jm-item-image">*/
/*                                             <img src="{{asset('frontoffice/images/diversion/2.jpg')}}" alt="">*/
/*                                             <div class="jm-item-description">*/
/*                                                 <div class="jm-item-button">*/
/*                                                     <i class="fa fa-plus"></i>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                         </div>	*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <div class="jm-item second">*/
/*                                     <div class="jm-item-wrapper">*/
/*                                         <div class="jm-item-image">*/
/*                                             <img src="{{asset('frontoffice/images/diversion/6.jpg')}}" alt="">*/
/*                                             <div class="jm-item-description">*/
/*                                                 <div class="jm-item-button">*/
/*                                                     <i class="fa fa-plus"></i>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                         </div>	*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <div class="jm-item second">*/
/*                                     <div class="jm-item-wrapper">*/
/*                                         <div class="jm-item-image">*/
/*                                             <img src="{{asset('frontoffice/images/diversion/2.jpg')}}" alt="">*/
/*                                             <div class="jm-item-description">*/
/*                                                 <div class="jm-item-button">*/
/*                                                     <i class="fa fa-plus"></i>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                         </div>	*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </li>*/
/*                         </ul>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*             </div>*/
/*         </section>*/
/*         <section class="container">*/
/*             <!--SECTION SPONSOR-->*/
/*             <div class="client-sport client-sport-nomargin">*/
/*                 <div class="content-banner">*/
/*                     <ul class="sponsor second">*/
/*                         <li><img src="{{ asset('frontoffice/images/sponsors/1.jpg') }}" alt="" /></li>*/
/*                         <li><img src="{{ asset('frontoffice/images/sponsors/2.jpg') }}" alt="" /></li>*/
/*                         <li><img src="{{ asset('frontoffice/images/sponsors/3.jpg') }}" alt="" /></li>*/
/*                         <li><img src="{{ asset('frontoffice/images/sponsors/4.jpg') }}" alt="" /></li>*/
/*                         <li><img src="{{ asset('frontoffice/images/sponsors/5.jpg') }}" alt="" /></li>*/
/*                         <li><img src="{{ asset('frontoffice/images/sponsors/6.jpg') }}" alt="" /></li>*/
/* */
/*                     </ul>*/
/*                 </div>*/
/*             </div>*/
/*         </section>*/
/*     {% endblock %}*/
