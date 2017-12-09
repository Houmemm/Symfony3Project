<?php

/* SquadFttBundle:arbitre:index.html.twig */
class __TwigTemplate_3a7811bdf26f8854c27dc79d1b890390bb3502dbf509c5d3a1c93db24f8abba8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("SquadFttBundle::layout.html.twig", "SquadFttBundle:arbitre:index.html.twig", 3);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'suppress' => array($this, 'block_suppress'),
            'titre' => array($this, 'block_titre'),
            'menu' => array($this, 'block_menu'),
            'first1' => array($this, 'block_first1'),
            'jscript' => array($this, 'block_jscript'),
            'first2' => array($this, 'block_first2'),
            'first3' => array($this, 'block_first3'),
            'first4' => array($this, 'block_first4'),
            'second1' => array($this, 'block_second1'),
            'third1' => array($this, 'block_third1'),
            'third2' => array($this, 'block_third2'),
            'third3' => array($this, 'block_third3'),
            'third4' => array($this, 'block_third4'),
            'fourth1' => array($this, 'block_fourth1'),
            'fourth2' => array($this, 'block_fourth2'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SquadFttBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_header($context, array $blocks = array())
    {
        // line 7
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/squadftt/js/jquery-1.11.1.min.js"), "html", null, true);
        echo "\"></script>
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/squadftt/css/styles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/squadftt/css/datepicker3.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/squadftt/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/materialize.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("fonts/Material-Design-Icons.woff2"), "html", null, true);
        echo "\" rel=\"stylesheet\">

";
    }

    // line 15
    public function block_suppress($context, array $blocks = array())
    {
    }

    // line 16
    public function block_titre($context, array $blocks = array())
    {
        echo " Espace arbitre  ";
    }

    // line 17
    public function block_menu($context, array $blocks = array())
    {
        // line 18
        echo "    <ul class=\"nav menu\">
        <li><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("accueil");
        echo "\"><svg class=\"glyph stroked dashboard-dial\"><use xlink:href=\"#stroked-dashboard-dial\"></use></svg> Statistique</a></li>
        <li><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("actualite");
        echo "\"><svg class=\"glyph stroked landscape\"><use xlink:href=\"#stroked-landscape\"/></svg> Actualites</a></li>
        <li ><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("evenement");
        echo "\"><svg class=\"glyph stroked calendar\"><use xlink:href=\"#stroked-calendar\"></use></svg> Evenements</a></li>
        <li><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("joueur");
        echo "\"><svg class=\"glyph stroked male user \"><use xlink:href=\"#stroked-male-user\"/></svg> Joueurs</a></li>
        <li><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("match");
        echo "\"><svg class=\"glyph stroked table\"><use xlink:href=\"#stroked-table\"></use></svg> Matchs</a></li>
        <li class=\"active\"><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("arbitre");
        echo "\"><svg class=\"glyph stroked male user \"><use xlink:href=\"#stroked-male-user\"/></svg> Arbitres</a></li>
        <li><a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("stade");
        echo "\"><svg class=\"glyph stroked location pin\"><use xlink:href=\"#stroked-location-pin\"/></svg> Stades</a></li>
        <li><a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("club");
        echo "\"><svg class=\"glyph stroked home\"><use xlink:href=\"#stroked-home\"/></svg> Clubs</a></li>
        <li><a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("concour");
        echo "\"><svg class=\"glyph stroked star\"><use xlink:href=\"#stroked-star\"></use></svg> Concours</a></li>
        <li><a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("formation");
        echo "\"><svg class=\"glyph stroked line-graph\"><use xlink:href=\"#stroked-line-graph\"></use></svg> Formations</a></li>
        <li><a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("gestionDopage");
        echo "\"><svg class=\"glyph stroked eye\"><use xlink:href=\"#stroked-eye\"/></svg> Gestion Dopage</a></li>
    </ul>  
";
    }

    // line 32
    public function block_first1($context, array $blocks = array())
    {
        // line 36
        echo "<div class=\"col-md-6\" style=\"width:100%;\">
        <div class=\"panel panel-default\">
            <div class=\"panel-body tabs\">
                <ul class=\"nav nav-tabs\">
                    <li class=\"active\"   style=\"color: #1ebfae\"><a  href=\"#tab1\" data-toggle=\"tab\"  >disponibiliter</a></li>
                    <li  style=\"color: #1ebfae\"><a href=\"#tab2\"   data-toggle=\"tab\">formation</a></li>
                    <li  style=\"color: #1ebfae\"><a href=\"#tab3\"  data-toggle=\"tab\">concours</a></li>
                </ul>
                <div class=\"tab-content\"><!-- formation-->
                    <div class=\"tab-pane fade in active\" id=\"tab1\">

                        <form id=\"form1\" method=\"GET\" action=\"ajout\">
                            <div class=\"col-md-4\">

                                <div class=\"panel panel-red\">
                                    <div class=\"panel-heading dark-overlay\"><svg class=\"glyph stroked calendar\"><use xlink:href=\"#stroked-calendar\"></use></svg>Calendar</div>
                                    <div class=\"panel-body\">
                                        <div id=\"calendar\"></div>
                                    </div>
                                </div>
                                <input type=\"button\" id=\"bday\" value=\"valider\">
                            </div>
                        </form>
                    </div>


                    <div  class=\"tab-pane fade\"  id=\"tab2\">

                        <table   id=\"odd\" data-toggle=\"table\" data-url=\"tables/data1.json\"  data-show-refresh=\"true\" data-show-toggle=\"true\" data-show-columns=\"true\" data-search=\"true\" data-select-item-name=\"toolbar1\"  data-sort-name=\"name\" data-sort-order=\"desc\">

                            <thead>
                                <tr>

                                    <th style=\"padding-right: 8px;\">Libelle</th>
                                    <th style=\"padding-right: 8px;\">grade</th>
                                    <th style=\"padding-right: 8px;\">dateDebutFormation</th>
                                    <th style=\"padding-right: 8px;\">dateFinFormation</th>
                                    <th style=\"padding-right: 8px;\">fraisFormation</th>
                                    <th>Actions</th>

                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 80
            echo "                                    <tr>

                                        <td>";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "libelleFormation", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "grade", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 84
            if ($this->getAttribute($context["entity"], "dateDebutFormation", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateDebutFormation", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                                        <td>";
            // line 85
            if ($this->getAttribute($context["entity"], "dateFinFormation", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateFinFormation", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                                        <td>";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "fraisFormation", array()), "html", null, true);
            echo "</td>

                                        <td>
                                            
                                                    <a href=\"";
            // line 90
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("affichageFormation_show", array("idFormation" => $this->getAttribute($context["entity"], "idFormation", array()))), "html", null, true);
            echo "\" class=\"btn btn-success\">afficher</a>
                                                    
                                                    

                                            
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "                            </tbody>
                        </table>
                    </div>


                    <div  class=\"tab-pane fade\" id=\"tab3\" ><!-- Arbitre-->

                        <table id=\"odd1\"   data-toggle=\"table\" data-url=\"tables/data1.json\"  data-show-refresh=\"true\" data-show-toggle=\"true\" data-show-columns=\"true\" data-search=\"true\" data-select-item-name=\"toolbar1\"  data-sort-name=\"name\" data-sort-order=\"desc\">

                            <thead>
                                <tr>

                                    <th style=\"padding-right: 12px;\">Libelle</th>
                                    <th style=\"padding-right: 12px;\">Date de debut</th>
                                    <th style=\"padding-right: 12px;\">Lieu</th>
                                    
                                    <th style=\"padding-right: 12px;\">Frais de Participation</th>
                                    <th style=\"padding-right: 12px;\">Date debut de depot</th>
                                   
                                    <th style=\"padding-right: 12px;\">Type</th>
                                    <th>actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 122
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities2"]) ? $context["entities2"] : $this->getContext($context, "entities2")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 123
            echo "                                    <tr>

                                        <td>";
            // line 125
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "libelleConcour", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 126
            if ($this->getAttribute($context["entity"], "dateDebutConcour", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateDebutConcour", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>

                                        <td>";
            // line 128
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "lieuConcour", array()), "html", null, true);
            echo "</td>
                                     
                                        <td>";
            // line 130
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "fraisParticipation", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 131
            if ($this->getAttribute($context["entity"], "dateDebutDepot", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateDebutDepot", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                                      
                                        <td>";
            // line 133
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "typeConcour", array()), "html", null, true);
            echo "</td>
                                        <td>
                                           
                                                    <a  href=\"";
            // line 136
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("affichageConcours", array("idConcour" => $this->getAttribute($context["entity"], "idConcour", array()))), "html", null, true);
            echo "\" class=\"label label-success\">Afficher</a>
                                                
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
        echo "                            </tbody>
                        </table>
                    </div>


                </div>

            </div>
        </div>
    </div>
                

";
    }

    // line 154
    public function block_jscript($context, array $blocks = array())
    {
        // line 155
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/squadftt/js/jquery-1.11.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/squadftt/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/squadftt/js/chart.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/squadftt/js/chart-data.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/squadftt/js/easypiechart.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/squadftt/js/easypiechart-data.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/squadftt/js/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/squadftt/js/jquery-dateFormat.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-2.1.1.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/materialize.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/notify.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/notify.js"), "html", null, true);
        echo "\"></script>
    
   

";
    }

    // line 175
    public function block_first2($context, array $blocks = array())
    {
    }

    // line 176
    public function block_first3($context, array $blocks = array())
    {
    }

    // line 177
    public function block_first4($context, array $blocks = array())
    {
    }

    // line 178
    public function block_second1($context, array $blocks = array())
    {
    }

    // line 179
    public function block_third1($context, array $blocks = array())
    {
    }

    // line 180
    public function block_third2($context, array $blocks = array())
    {
    }

    // line 181
    public function block_third3($context, array $blocks = array())
    {
    }

    // line 182
    public function block_third4($context, array $blocks = array())
    {
    }

    // line 183
    public function block_fourth1($context, array $blocks = array())
    {
    }

    // line 184
    public function block_fourth2($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "SquadFttBundle:arbitre:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  428 => 184,  423 => 183,  418 => 182,  413 => 181,  408 => 180,  403 => 179,  398 => 178,  393 => 177,  388 => 176,  383 => 175,  374 => 166,  370 => 165,  366 => 164,  361 => 162,  357 => 161,  353 => 160,  349 => 159,  345 => 158,  341 => 157,  337 => 156,  332 => 155,  329 => 154,  313 => 141,  302 => 136,  296 => 133,  289 => 131,  285 => 130,  280 => 128,  273 => 126,  269 => 125,  265 => 123,  261 => 122,  235 => 98,  221 => 90,  214 => 86,  208 => 85,  202 => 84,  198 => 83,  194 => 82,  190 => 80,  186 => 79,  141 => 36,  138 => 32,  131 => 29,  127 => 28,  123 => 27,  119 => 26,  115 => 25,  111 => 24,  107 => 23,  103 => 22,  99 => 21,  95 => 20,  91 => 19,  88 => 18,  85 => 17,  79 => 16,  74 => 15,  67 => 12,  63 => 11,  59 => 10,  55 => 9,  51 => 8,  46 => 7,  43 => 6,  11 => 3,);
    }
}
/* {# empty Twig template #}*/
/* */
/* {% extends 'SquadFttBundle::layout.html.twig' %}*/
/* */
/* */
/* {% block header %}*/
/*     <script src="{{asset('bundles/squadftt/js/jquery-1.11.1.min.js')}}"></script>*/
/*     <link href="{{asset('bundles/squadftt/css/styles.css')}}" rel="stylesheet">*/
/*     <link href="{{asset('bundles/squadftt/css/datepicker3.css')}}" rel="stylesheet">*/
/*     <link href="{{asset('bundles/squadftt/css/bootstrap.min.css')}}" rel="stylesheet">*/
/*     <link href="{{asset('css/materialize.min.css')}}" rel="stylesheet">*/
/*     <link href="{{asset('fonts/Material-Design-Icons.woff2')}}" rel="stylesheet">*/
/* */
/* {% endblock %}*/
/* {% block suppress %}{% endblock %}*/
/* {% block titre %} Espace arbitre  {% endblock %}*/
/* {% block menu %}*/
/*     <ul class="nav menu">*/
/*         <li><a href="{{ path('accueil')}}"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Statistique</a></li>*/
/*         <li><a href="{{ path('actualite')}}"><svg class="glyph stroked landscape"><use xlink:href="#stroked-landscape"/></svg> Actualites</a></li>*/
/*         <li ><a href="{{ path('evenement')}}"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> Evenements</a></li>*/
/*         <li><a href="{{ path('joueur')}}"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg> Joueurs</a></li>*/
/*         <li><a href="{{ path('match')}}"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg> Matchs</a></li>*/
/*         <li class="active"><a href="{{ path('arbitre')}}"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg> Arbitres</a></li>*/
/*         <li><a href="{{ path('stade')}}"><svg class="glyph stroked location pin"><use xlink:href="#stroked-location-pin"/></svg> Stades</a></li>*/
/*         <li><a href="{{ path('club')}}"><svg class="glyph stroked home"><use xlink:href="#stroked-home"/></svg> Clubs</a></li>*/
/*         <li><a href="{{ path('concour')}}"><svg class="glyph stroked star"><use xlink:href="#stroked-star"></use></svg> Concours</a></li>*/
/*         <li><a href="{{ path('formation')}}"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg> Formations</a></li>*/
/*         <li><a href="{{ path('gestionDopage')}}"><svg class="glyph stroked eye"><use xlink:href="#stroked-eye"/></svg> Gestion Dopage</a></li>*/
/*     </ul>  */
/* {% endblock %}*/
/* {% block first1 -%}*/
/* */
/*   */
/* */
/*     <div class="col-md-6" style="width:100%;">*/
/*         <div class="panel panel-default">*/
/*             <div class="panel-body tabs">*/
/*                 <ul class="nav nav-tabs">*/
/*                     <li class="active"   style="color: #1ebfae"><a  href="#tab1" data-toggle="tab"  >disponibiliter</a></li>*/
/*                     <li  style="color: #1ebfae"><a href="#tab2"   data-toggle="tab">formation</a></li>*/
/*                     <li  style="color: #1ebfae"><a href="#tab3"  data-toggle="tab">concours</a></li>*/
/*                 </ul>*/
/*                 <div class="tab-content"><!-- formation-->*/
/*                     <div class="tab-pane fade in active" id="tab1">*/
/* */
/*                         <form id="form1" method="GET" action="ajout">*/
/*                             <div class="col-md-4">*/
/* */
/*                                 <div class="panel panel-red">*/
/*                                     <div class="panel-heading dark-overlay"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg>Calendar</div>*/
/*                                     <div class="panel-body">*/
/*                                         <div id="calendar"></div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <input type="button" id="bday" value="valider">*/
/*                             </div>*/
/*                         </form>*/
/*                     </div>*/
/* */
/* */
/*                     <div  class="tab-pane fade"  id="tab2">*/
/* */
/*                         <table   id="odd" data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1"  data-sort-name="name" data-sort-order="desc">*/
/* */
/*                             <thead>*/
/*                                 <tr>*/
/* */
/*                                     <th style="padding-right: 8px;">Libelle</th>*/
/*                                     <th style="padding-right: 8px;">grade</th>*/
/*                                     <th style="padding-right: 8px;">dateDebutFormation</th>*/
/*                                     <th style="padding-right: 8px;">dateFinFormation</th>*/
/*                                     <th style="padding-right: 8px;">fraisFormation</th>*/
/*                                     <th>Actions</th>*/
/* */
/*                                 </tr>*/
/*                             </thead>*/
/*                             <tbody>*/
/*                                 {% for entity in entities %}*/
/*                                     <tr>*/
/* */
/*                                         <td>{{ entity.libelleFormation }}</td>*/
/*                                         <td>{{ entity.grade }}</td>*/
/*                                         <td>{% if entity.dateDebutFormation %}{{ entity.dateDebutFormation|date('Y-m-d') }}{% endif %}</td>*/
/*                                         <td>{% if entity.dateFinFormation %}{{ entity.dateFinFormation|date('Y-m-d') }}{% endif %}</td>*/
/*                                         <td>{{ entity.fraisFormation }}</td>*/
/* */
/*                                         <td>*/
/*                                             */
/*                                                     <a href="{{path('affichageFormation_show', {'idFormation': entity.idFormation }) }}" class="btn btn-success">afficher</a>*/
/*                                                     */
/*                                                     */
/* */
/*                                             */
/*                                         </td>*/
/*                                     </tr>*/
/*                                 {% endfor %}*/
/*                             </tbody>*/
/*                         </table>*/
/*                     </div>*/
/* */
/* */
/*                     <div  class="tab-pane fade" id="tab3" ><!-- Arbitre-->*/
/* */
/*                         <table id="odd1"   data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1"  data-sort-name="name" data-sort-order="desc">*/
/* */
/*                             <thead>*/
/*                                 <tr>*/
/* */
/*                                     <th style="padding-right: 12px;">Libelle</th>*/
/*                                     <th style="padding-right: 12px;">Date de debut</th>*/
/*                                     <th style="padding-right: 12px;">Lieu</th>*/
/*                                     */
/*                                     <th style="padding-right: 12px;">Frais de Participation</th>*/
/*                                     <th style="padding-right: 12px;">Date debut de depot</th>*/
/*                                    */
/*                                     <th style="padding-right: 12px;">Type</th>*/
/*                                     <th>actions</th>*/
/*                                 </tr>*/
/*                             </thead>*/
/*                             <tbody>*/
/*                                 {% for entity in entities2 %}*/
/*                                     <tr>*/
/* */
/*                                         <td>{{ entity.libelleConcour }}</td>*/
/*                                         <td>{% if entity.dateDebutConcour %}{{ entity.dateDebutConcour|date('Y-m-d') }}{% endif %}</td>*/
/* */
/*                                         <td>{{ entity.lieuConcour }}</td>*/
/*                                      */
/*                                         <td>{{ entity.fraisParticipation }}</td>*/
/*                                         <td>{% if entity.dateDebutDepot %}{{ entity.dateDebutDepot|date('Y-m-d') }}{% endif %}</td>*/
/*                                       */
/*                                         <td>{{ entity.typeConcour }}</td>*/
/*                                         <td>*/
/*                                            */
/*                                                     <a  href="{{ path('affichageConcours', { 'idConcour': entity.idConcour }) }}" class="label label-success">Afficher</a>*/
/*                                                 */
/*                                         </td>*/
/*                                     </tr>*/
/*                                 {% endfor %}*/
/*                             </tbody>*/
/*                         </table>*/
/*                     </div>*/
/* */
/* */
/*                 </div>*/
/* */
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*                 */
/* */
/* {% endblock %}*/
/* {% block jscript %}*/
/*     <script src="{{asset('bundles/squadftt/js/jquery-1.11.1.min.js')}}"></script>*/
/*     <script src="{{asset('bundles/squadftt/js/bootstrap.min.js')}}"></script>*/
/*     <script src="{{asset('bundles/squadftt/js/chart.min.js')}}"></script>*/
/*     <script src="{{asset('bundles/squadftt/js/chart-data.js')}}"></script>*/
/*     <script src="{{asset('bundles/squadftt/js/easypiechart.js')}}"></script>*/
/*     <script src="{{asset('bundles/squadftt/js/easypiechart-data.js')}}"></script>*/
/*     <script src="{{asset('bundles/squadftt/js/bootstrap-datepicker.js')}}"></script>*/
/*     <script src="{{asset('bundles/squadftt/js/jquery-dateFormat.js')}}"></script>*/
/*     <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>*/
/*     <script type="text/javascript" src="{{asset('js/materialize.min.js')}}"></script>*/
/*     <script type="text/javascript" src="{{asset('js/notify.min.js')}}"></script>*/
/*     <script type="text/javascript" src="{{asset('js/notify.js')}}"></script>*/
/*     */
/*    */
/* */
/* {% endblock %}*/
/* */
/* */
/* */
/* */
/* {% block first2 %}{% endblock %}    */
/* {% block first3 %}{% endblock %}    */
/* {% block first4 %}{% endblock %}    */
/* {% block second1 %}{% endblock %}    */
/* {% block third1 %}{% endblock %}    */
/* {% block third2 %}{% endblock %}*/
/* {% block third3 %}{% endblock %}*/
/* {% block third4 %}{% endblock %}*/
/* {% block fourth1 %}{% endblock %}*/
/* {% block fourth2 %}{% endblock %}*/
/* */
