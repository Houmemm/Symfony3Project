<?php

/* SquadFttBundle::layout.html.twig */
class __TwigTemplate_d6964db7351f36a5fe34226290d1b8f31a921c73d5390e96c96c361956b8a58e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'suppress' => array($this, 'block_suppress'),
            'menu' => array($this, 'block_menu'),
            'titre' => array($this, 'block_titre'),
            'first1' => array($this, 'block_first1'),
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

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>Gestion FTT</title>

        <link href= \"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/squadftt/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href= \"http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css\" rel=\"stylesheet\">

        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/squadftt/css/datepicker3.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/squadftt/css/bootstrap-table.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/squadftt/css/styles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!--Icons-->
        <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/squadftt/js/lumino.glyphs.js"), "html", null, true);
        echo "\"></script>

    </head>

    <body>
        <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
            <div class=\"container-fluid\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#sidebar-collapse\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>

                    <a class=\"navbar-brand\" href=\"#\"><span>FTT</span>SQUAD</a>
                    <ul class=\"user-menu\">
                        ";
        // line 33
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 34
            echo "                            <li class=\"dropdown pull-right\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><svg class=\"glyph stroked male-user\"><use xlink:href=\"#stroked-male-user\"></use></svg> ";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo " <span class=\"caret\"></span></a>
                                <ul class=\"dropdown-menu\" role=\"menu\">
                                    <li><a href=\" ";
            // line 37
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
            echo "  \"><svg class=\"glyph stroked male-user\"><use xlink:href=\"#stroked-male-user\"></use></svg> Profile</a></li>
                                    <li><a href=\"  ";
            // line 38
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
            echo "   \"><svg class=\"glyph stroked gear\"><use xlink:href=\"#stroked-gear\"></use></svg> Settings</a></li>
                                    <li><a href=\" ";
            // line 39
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo " \"><svg class=\"glyph stroked cancel\"><use xlink:href=\"#stroked-cancel\"></use></svg>Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                ";
        } else {
            // line 45
            echo "                    <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Connexion</a>
                ";
        }
        // line 47
        echo "            </div><!-- /.container-fluid -->
        </nav>
        ";
        // line 49
        $this->displayBlock('suppress', $context, $blocks);
        // line 78
        echo "        <div class=\"col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main\">\t\t\t
            <div class=\"row\">
                <ol class=\"breadcrumb\">
                    <li><a href=\"#\"><svg class=\"glyph stroked home\"><use xlink:href=\"#stroked-home\"></use></svg></a></li>
                    <li class=\"active\">FTT</li>
                </ol>
            </div><!--/.row-->

            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <h1 class=\"page-header\">  ";
        // line 88
        $this->displayBlock('titre', $context, $blocks);
        echo "</h1> \t
                </div>
            </div><!--/.row-->

            <div class=\"row\">
                ";
        // line 93
        $this->displayBlock('first1', $context, $blocks);
        // line 108
        echo "                ";
        $this->displayBlock('first2', $context, $blocks);
        // line 123
        echo "                ";
        $this->displayBlock('first3', $context, $blocks);
        // line 138
        echo "                ";
        $this->displayBlock('first4', $context, $blocks);
        // line 154
        echo "            ";
        $this->displayBlock('second1', $context, $blocks);
        // line 168
        echo "            ";
        $this->displayBlock('third1', $context, $blocks);
        // line 180
        echo "                ";
        $this->displayBlock('third2', $context, $blocks);
        // line 191
        echo "                ";
        $this->displayBlock('third3', $context, $blocks);
        // line 202
        echo "                ";
        $this->displayBlock('third4', $context, $blocks);
        // line 214
        echo "            ";
        $this->displayBlock('fourth1', $context, $blocks);
        // line 274
        echo "                    ";
        $this->displayBlock('fourth2', $context, $blocks);
        // line 364
        echo "
        </div>\t<!--/.main-->

        <script src=\"";
        // line 367
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/squadftt/js/jquery-1.11.1.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 368
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/squadftt/js/bootstrap.min.js"), "html", null, true);
        echo " \"></script>
        <script src=\"";
        // line 369
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/squadftt/js/chart.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 370
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/squadftt/js/chart-data.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 371
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/squadftt/js/easypiechart.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 372
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/squadftt/js/easypiechart-data.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 373
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/squadftt/js/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 374
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/squadftt/js/bootstrap-table.js"), "html", null, true);
        echo "\"></script>
        <script>
            document.onload = function () {
                \$(document).on(\"click\", \"ul.nav li.parent > a > span.icon\", function () {
                    \$(this).find('em:first').toggleClass(\"glyphicon-minus\");

                });
                \$(\".sidebar span.icon\").find('em:first').addClass(\"glyphicon-plus\");
            }(window.jQuery);

            \$(window).on('resize', function () {
                if (\$(window).width() > 768)
                    \$('#sidebar-collapse').collapse('show');
            });
            \$(window).on('resize', function () {
                if (\$(window).width() <= 767)
                    \$('#sidebar-collapse').collapse('hide');

            });

            \$(function () {
                \$(\"#calendar\").datepicker().on('click', function () {

                    var formattedDate = new Date(\$(\"#calendar\").datepicker(\"getDate\"));
                    var d = formattedDate.getDate();
                    var m = formattedDate.getMonth();
                    m += 1;  // JavaScript months are 0-11
                    var y = formattedDate.getFullYear();

                    //alert(d + \"-\" + m + \"-\" + y);

                    var pathname = window.location.pathname;
                    pathname = pathname + y + \"-\" + m + \"-\" + d;

                    ///alert(pathname);
                    window.location = pathname;

                });
            });

        </script>
    </body>

</html>
";
    }

    // line 49
    public function block_suppress($context, array $blocks = array())
    {
        // line 50
        echo "            <div id=\"sidebar-collapse\" class=\"col-sm-3 col-lg-2 sidebar\">
                <form role=\"search\">
                    <div class=\"form-group\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"Rechercher\">
                    </div>
                </form>
                ";
        // line 56
        if ((1 == 2)) {
            // line 57
            echo "                    ";
            $this->displayBlock('menu', $context, $blocks);
            // line 59
            echo "                ";
        }
        // line 60
        echo "
                <ul class=\"nav menu\">
                    <li><a href=\"";
        // line 62
        echo $this->env->getExtension('routing')->getPath("articles");
        echo "\"><svg class=\"glyph stroked table\"><use xlink:href=\"#stroked-bag\"></use></svg> Articles</a></li>
                    <li><a href=\"";
        // line 63
        echo $this->env->getExtension('routing')->getPath("actualite");
        echo "\"><svg class=\"glyph stroked landscape\"><use xlink:href=\"#stroked-landscape\"/></svg> Actualites</a></li>
                    <li><a href=\"";
        // line 64
        echo $this->env->getExtension('routing')->getPath("evenement");
        echo "\"><svg class=\"glyph stroked calendar\"><use xlink:href=\"#stroked-calendar\"></use></svg> Evenements</a></li>
                    <li><a href=\"";
        // line 65
        echo $this->env->getExtension('routing')->getPath("joueur");
        echo "\"><svg class=\"glyph stroked male user \"><use xlink:href=\"#stroked-male-user\"/></svg> Joueurs</a></li>
                    <li><a href=\"";
        // line 66
        echo $this->env->getExtension('routing')->getPath("back_matchtennis");
        echo "\"><svg class=\"glyph stroked table\"><use xlink:href=\"#stroked-table\"></use></svg> Matchs</a></li>
                    <li><a href=\"";
        // line 67
        echo $this->env->getExtension('routing')->getPath("arbitre");
        echo "\"><svg class=\"glyph stroked male user \"><use xlink:href=\"#stroked-male-user\"/></svg> Arbitres</a></li>
                    <li><a href=\"";
        // line 68
        echo $this->env->getExtension('routing')->getPath("stade");
        echo "\"><svg class=\"glyph stroked location pin\"><use xlink:href=\"#stroked-location-pin\"/></svg> Stades</a></li>
                    <li><a href=\"";
        // line 69
        echo $this->env->getExtension('routing')->getPath("club");
        echo "\"><svg class=\"glyph stroked home\"><use xlink:href=\"#stroked-home\"/></svg> Clubs</a></li>
                    <li><a href=\"";
        // line 70
        echo $this->env->getExtension('routing')->getPath("concour");
        echo "\"><svg class=\"glyph stroked star\"><use xlink:href=\"#stroked-star\"></use></svg> Concours</a></li>
                    <li><a href=\"";
        // line 71
        echo $this->env->getExtension('routing')->getPath("sanction");
        echo "\"><svg class=\"glyph stroked cancel\"><use xlink:href=\"#stroked-cancel\"/></svg> Sanction</a></li>
                    <li><a href=\"";
        // line 72
        echo $this->env->getExtension('routing')->getPath("formation");
        echo "\"><svg class=\"glyph stroked line-graph\"><use xlink:href=\"#stroked-line-graph\"></use></svg> Formations</a></li>
                    <li><a href=\"";
        // line 73
        echo $this->env->getExtension('routing')->getPath("rapport");
        echo "\"><svg class=\"glyph stroked eye\"><use xlink:href=\"#stroked-eye\"/></svg> Gestion Dopage</a></li>
                </ul>

            </div><!--/.sidebar-->
        ";
    }

    // line 57
    public function block_menu($context, array $blocks = array())
    {
        // line 58
        echo "                    ";
    }

    // line 88
    public function block_titre($context, array $blocks = array())
    {
        echo " NomMenu ";
    }

    // line 93
    public function block_first1($context, array $blocks = array())
    {
        // line 94
        echo "                    <div class=\"col-xs-12 col-md-6 col-lg-3\">
                        <div class=\"panel panel-blue panel-widget \">
                            <div class=\"row no-padding\">
                                <div class=\"col-sm-3 col-lg-5 widget-left\">
                                    <svg class=\"glyph stroked bag\"><use xlink:href=\"#stroked-bag\"></use></svg>
                                </div>
                                <div class=\"col-sm-9 col-lg-7 widget-right\">
                                    <div class=\"large\"></div>
                                    <div class=\"text-muted\"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                ";
    }

    // line 108
    public function block_first2($context, array $blocks = array())
    {
        echo " 
                    <div class=\"col-xs-12 col-md-6 col-lg-3\">
                        <div class=\"panel panel-orange panel-widget\">
                            <div class=\"row no-padding\">
                                <div class=\"col-sm-3 col-lg-5 widget-left\">
                                    <svg class=\"glyph stroked empty-message\"><use xlink:href=\"#stroked-empty-message\"></use></svg>
                                </div>
                                <div class=\"col-sm-9 col-lg-7 widget-right\">
                                    <div class=\"large\"></div>
                                    <div class=\"text-muted\"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                ";
    }

    // line 123
    public function block_first3($context, array $blocks = array())
    {
        echo "    
                    <div class=\"col-xs-12 col-md-6 col-lg-3\">
                        <div class=\"panel panel-teal panel-widget\">
                            <div class=\"row no-padding\">
                                <div class=\"col-sm-3 col-lg-5 widget-left\">
                                    <svg class=\"glyph stroked male-user\"><use xlink:href=\"#stroked-male-user\"></use></svg>
                                </div>
                                <div class=\"col-sm-9 col-lg-7 widget-right\">
                                    <div class=\"large\"></div>
                                    <div class=\"text-muted\"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                ";
    }

    // line 138
    public function block_first4($context, array $blocks = array())
    {
        echo "    
                    <div class=\"col-xs-12 col-md-6 col-lg-3\">
                        <div class=\"panel panel-red panel-widget\">
                            <div class=\"row no-padding\">
                                <div class=\"col-sm-3 col-lg-5 widget-left\">
                                    <svg class=\"glyph stroked app-window-with-content\"><use xlink:href=\"#stroked-app-window-with-content\"></use></svg>
                                </div>
                                <div class=\"col-sm-9 col-lg-7 widget-right\">
                                    <div class=\"large\"></div>
                                    <div class=\"text-muted\"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.row-->
            ";
    }

    // line 154
    public function block_second1($context, array $blocks = array())
    {
        echo " 
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">Site Traffic Overview</div>
                            <div class=\"panel-body\">
                                <div class=\"canvas-wrapper\">
                                    <canvas class=\"main-chart\" id=\"line-chart\" height=\"200\" width=\"600\"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.row-->
            ";
    }

    // line 168
    public function block_third1($context, array $blocks = array())
    {
        // line 169
        echo "                <div class=\"row\">
                    <div class=\"col-xs-6 col-md-3\">
                        <div class=\"panel panel-default\">
                            <div class=\"panel-body easypiechart-panel\">
                                <h4>Statistique</h4>
                                <div class=\"easypiechart\" id=\"easypiechart-blue\" data-percent=\"92\" ><span class=\"percent\">92%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                ";
    }

    // line 180
    public function block_third2($context, array $blocks = array())
    {
        // line 181
        echo "                    <div class=\"col-xs-6 col-md-3\">
                        <div class=\"panel panel-default\">
                            <div class=\"panel-body easypiechart-panel\">
                                <h4>Comments</h4>
                                <div class=\"easypiechart\" id=\"easypiechart-orange\" data-percent=\"65\" ><span class=\"percent\">65%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                ";
    }

    // line 191
    public function block_third3($context, array $blocks = array())
    {
        // line 192
        echo "                    <div class=\"col-xs-6 col-md-3\">
                        <div class=\"panel panel-default\">
                            <div class=\"panel-body easypiechart-panel\">
                                <h4>New Users</h4>
                                <div class=\"easypiechart\" id=\"easypiechart-teal\" data-percent=\"56\" ><span class=\"percent\">56%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                ";
    }

    // line 202
    public function block_third4($context, array $blocks = array())
    {
        echo "    
                    <div class=\"col-xs-6 col-md-3\">
                        <div class=\"panel panel-default\">
                            <div class=\"panel-body easypiechart-panel\">
                                <h4>Visitors</h4>
                                <div class=\"easypiechart\" id=\"easypiechart-red\" data-percent=\"27\" ><span class=\"percent\">27%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.row-->
            ";
    }

    // line 214
    public function block_fourth1($context, array $blocks = array())
    {
        // line 215
        echo "                <div class=\"row\">
                    <div class=\"col-md-8\">

                        <div class=\"panel panel-default chat\">
                            <div class=\"panel-heading\" id=\"accordion\"><svg class=\"glyph stroked two-messages\"><use xlink:href=\"#stroked-two-messages\"></use></svg> Chat</div>
                            <div class=\"panel-body\">
                                <ul>
                                    <li class=\"left clearfix\">
                                        <span class=\"chat-img pull-left\">
                                            <img src=\"http://placehold.it/80/30a5ff/fff\" alt=\"User Avatar\" class=\"img-circle\" />
                                        </span>
                                        <div class=\"chat-body clearfix\">
                                            <div class=\"header\">
                                                <strong class=\"primary-font\">John Doe</strong> <small class=\"text-muted\">32 mins ago</small>
                                            </div>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ante turpis, rutrum ut ullamcorper sed, dapibus ac nunc. Vivamus luctus convallis mauris, eu gravida tortor aliquam ultricies. 
                                            </p>
                                        </div>
                                    </li>
                                    <li class=\"right clearfix\">
                                        <span class=\"chat-img pull-right\">
                                            <img src=\"http://placehold.it/80/dde0e6/5f6468\" alt=\"User Avatar\" class=\"img-circle\" />
                                        </span>
                                        <div class=\"chat-body clearfix\">
                                            <div class=\"header\">
                                                <strong class=\"pull-left primary-font\">Jane Doe</strong> <small class=\"text-muted\">6 mins ago</small>
                                            </div>
                                            <p>
                                                Mauris dignissim porta enim, sed commodo sem blandit non. Ut scelerisque sapien eu mauris faucibus ultrices. Nulla ac odio nisl. Proin est metus, interdum scelerisque quam eu, eleifend pretium nunc. Suspendisse finibus auctor lectus, eu interdum sapien.
                                            </p>
                                        </div>
                                    </li>
                                    <li class=\"left clearfix\">
                                        <span class=\"chat-img pull-left\">
                                            <img src=\"http://placehold.it/80/30a5ff/fff\" alt=\"User Avatar\" class=\"img-circle\" />
                                        </span>
                                        <div class=\"chat-body clearfix\">
                                            <div class=\"header\">
                                                <strong class=\"primary-font\">John Doe</strong> <small class=\"text-muted\">32 mins ago</small>
                                            </div>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ante turpis, rutrum ut ullamcorper sed, dapibus ac nunc. Vivamus luctus convallis mauris, eu gravida tortor aliquam ultricies. 
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class=\"panel-footer\">
                                <div class=\"input-group\">
                                    <input id=\"btn-input\" type=\"text\" class=\"form-control input-md\" placeholder=\"Type your message here...\" />
                                    <span class=\"input-group-btn\">
                                        <button class=\"btn btn-success btn-md\" id=\"btn-chat\">Send</button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    ";
    }

    // line 274
    public function block_fourth2($context, array $blocks = array())
    {
        // line 275
        echo "                    </div><!--/.col-->

                    <div class=\"col-md-4\">

                        <div class=\"panel panel-blue\">
                            <div class=\"panel-heading dark-overlay\"><svg class=\"glyph stroked clipboard-with-paper\"><use xlink:href=\"#stroked-clipboard-with-paper\"></use></svg>To-do List</div>
                            <div class=\"panel-body\">
                                <ul class=\"todo-list\">
                                    <li class=\"todo-list-item\">
                                        <div class=\"checkbox\">
                                            <input type=\"checkbox\" id=\"checkbox\" />
                                            <label for=\"checkbox\">Make a plan for today</label>
                                        </div>
                                        <div class=\"pull-right action-buttons\">
                                            <a href=\"#\"><svg class=\"glyph stroked pencil\"><use xlink:href=\"#stroked-pencil\"></use></svg></a>
                                            <a href=\"#\" class=\"flag\"><svg class=\"glyph stroked flag\"><use xlink:href=\"#stroked-flag\"></use></svg></a>
                                            <a href=\"#\" class=\"trash\"><svg class=\"glyph stroked trash\"><use xlink:href=\"#stroked-trash\"></use></svg></a>
                                        </div>
                                    </li>
                                    <li class=\"todo-list-item\">
                                        <div class=\"checkbox\">
                                            <input type=\"checkbox\" id=\"checkbox\" />
                                            <label for=\"checkbox\">Update Basecamp</label>
                                        </div>
                                        <div class=\"pull-right action-buttons\">
                                            <a href=\"#\"><svg class=\"glyph stroked pencil\"><use xlink:href=\"#stroked-pencil\"></use></svg></a>
                                            <a href=\"#\" class=\"flag\"><svg class=\"glyph stroked flag\"><use xlink:href=\"#stroked-flag\"></use></svg></a>
                                            <a href=\"#\" class=\"trash\"><svg class=\"glyph stroked trash\"><use xlink:href=\"#stroked-trash\"></use></svg></a>
                                        </div>
                                    </li>
                                    <li class=\"todo-list-item\">
                                        <div class=\"checkbox\">
                                            <input type=\"checkbox\" id=\"checkbox\" />
                                            <label for=\"checkbox\">Send email to Jane</label>
                                        </div>
                                        <div class=\"pull-right action-buttons\">
                                            <a href=\"#\"><svg class=\"glyph stroked pencil\"><use xlink:href=\"#stroked-pencil\"></use></svg></a>
                                            <a href=\"#\" class=\"flag\"><svg class=\"glyph stroked flag\"><use xlink:href=\"#stroked-flag\"></use></svg></a>
                                            <a href=\"#\" class=\"trash\"><svg class=\"glyph stroked trash\"><use xlink:href=\"#stroked-trash\"></use></svg></a>
                                        </div>
                                    </li>
                                    <li class=\"todo-list-item\">
                                        <div class=\"checkbox\">
                                            <input type=\"checkbox\" id=\"checkbox\" />
                                            <label for=\"checkbox\">Drink coffee</label>
                                        </div>
                                        <div class=\"pull-right action-buttons\">
                                            <a href=\"#\"><svg class=\"glyph stroked pencil\"><use xlink:href=\"#stroked-pencil\"></use></svg></a>
                                            <a href=\"#\" class=\"flag\"><svg class=\"glyph stroked flag\"><use xlink:href=\"#stroked-flag\"></use></svg></a>
                                            <a href=\"#\" class=\"trash\"><svg class=\"glyph stroked trash\"><use xlink:href=\"#stroked-trash\"></use></svg></a>
                                        </div>
                                    </li>
                                    <li class=\"todo-list-item\">
                                        <div class=\"checkbox\">
                                            <input type=\"checkbox\" id=\"checkbox\" />
                                            <label for=\"checkbox\">Do some work</label>
                                        </div>
                                        <div class=\"pull-right action-buttons\">
                                            <a href=\"#\"><svg class=\"glyph stroked pencil\"><use xlink:href=\"#stroked-pencil\"></use></svg></a>
                                            <a href=\"#\" class=\"flag\"><svg class=\"glyph stroked flag\"><use xlink:href=\"#stroked-flag\"></use></svg></a>
                                            <a href=\"#\" class=\"trash\"><svg class=\"glyph stroked trash\"><use xlink:href=\"#stroked-trash\"></use></svg></a>
                                        </div>
                                    </li>
                                    <li class=\"todo-list-item\">
                                        <div class=\"checkbox\">
                                            <input type=\"checkbox\" id=\"checkbox\" />
                                            <label for=\"checkbox\">Tidy up workspace</label>
                                        </div>
                                        <div class=\"pull-right action-buttons\">
                                            <a href=\"#\"><svg class=\"glyph stroked pencil\"><use xlink:href=\"#stroked-pencil\"></use></svg></a>
                                            <a href=\"#\" class=\"flag\"><svg class=\"glyph stroked flag\"><use xlink:href=\"#stroked-flag\"></use></svg></a>
                                            <a href=\"#\" class=\"trash\"><svg class=\"glyph stroked trash\"><use xlink:href=\"#stroked-trash\"></use></svg></a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class=\"panel-footer\">
                                <div class=\"input-group\">
                                    <input id=\"btn-input\" type=\"text\" class=\"form-control input-md\" placeholder=\"Add new task\" />
                                    <span class=\"input-group-btn\">
                                        <button class=\"btn btn-primary btn-md\" id=\"btn-todo\">Add</button>
                                    </span>
                                </div>
                            </div>
                        </div>

                    </div><!--/.col-->
                </div><!--/.row-->
            ";
    }

    public function getTemplateName()
    {
        return "SquadFttBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  577 => 275,  574 => 274,  512 => 215,  509 => 214,  492 => 202,  479 => 192,  476 => 191,  463 => 181,  460 => 180,  446 => 169,  443 => 168,  424 => 154,  403 => 138,  383 => 123,  363 => 108,  346 => 94,  343 => 93,  337 => 88,  333 => 58,  330 => 57,  321 => 73,  317 => 72,  313 => 71,  309 => 70,  305 => 69,  301 => 68,  297 => 67,  293 => 66,  289 => 65,  285 => 64,  281 => 63,  277 => 62,  273 => 60,  270 => 59,  267 => 57,  265 => 56,  257 => 50,  254 => 49,  205 => 374,  201 => 373,  197 => 372,  193 => 371,  189 => 370,  185 => 369,  181 => 368,  177 => 367,  172 => 364,  169 => 274,  166 => 214,  163 => 202,  160 => 191,  157 => 180,  154 => 168,  151 => 154,  148 => 138,  145 => 123,  142 => 108,  140 => 93,  132 => 88,  120 => 78,  118 => 49,  114 => 47,  108 => 45,  99 => 39,  95 => 38,  91 => 37,  86 => 35,  83 => 34,  81 => 33,  61 => 16,  56 => 14,  52 => 13,  48 => 12,  42 => 9,  33 => 2,);
    }
}
/* {# empty Twig template #}*/
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="utf-8">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*         <title>Gestion FTT</title>*/
/* */
/*         <link href= "{{asset('bundles/squadftt/css/bootstrap.min.css')}}" rel="stylesheet">*/
/*         <link href= "http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">*/
/* */
/*         <link href="{{asset('bundles/squadftt/css/datepicker3.css')}}" rel="stylesheet">*/
/*         <link href="{{asset('bundles/squadftt/css/bootstrap-table.css')}}" rel="stylesheet">*/
/*         <link href="{{asset('bundles/squadftt/css/styles.css')}}" rel="stylesheet">*/
/*         <!--Icons-->*/
/*         <script src="{{asset('bundles/squadftt/js/lumino.glyphs.js')}}"></script>*/
/* */
/*     </head>*/
/* */
/*     <body>*/
/*         <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">*/
/*             <div class="container-fluid">*/
/*                 <div class="navbar-header">*/
/*                     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">*/
/*                         <span class="sr-only">Toggle navigation</span>*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                     </button>*/
/* */
/*                     <a class="navbar-brand" href="#"><span>FTT</span>SQUAD</a>*/
/*                     <ul class="user-menu">*/
/*                         {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*                             <li class="dropdown pull-right">*/
/*                                 <a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> {{app.user.username}} <span class="caret"></span></a>*/
/*                                 <ul class="dropdown-menu" role="menu">*/
/*                                     <li><a href=" {{ path('fos_user_profile_show') }}  "><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Profile</a></li>*/
/*                                     <li><a href="  {{ path('fos_user_profile_edit') }}   "><svg class="glyph stroked gear"><use xlink:href="#stroked-gear"></use></svg> Settings</a></li>*/
/*                                     <li><a href=" {{ path('fos_user_security_logout') }} "><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg>Logout</a></li>*/
/*                                 </ul>*/
/*                             </li>*/
/*                         </ul>*/
/*                     </div>*/
/*                 {% else %}*/
/*                     <a href="{{ path('fos_user_security_login') }}">Connexion</a>*/
/*                 {% endif %}*/
/*             </div><!-- /.container-fluid -->*/
/*         </nav>*/
/*         {% block suppress %}*/
/*             <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">*/
/*                 <form role="search">*/
/*                     <div class="form-group">*/
/*                         <input type="text" class="form-control" placeholder="Rechercher">*/
/*                     </div>*/
/*                 </form>*/
/*                 {% if 1==2%}*/
/*                     {% block menu %}*/
/*                     {% endblock %}*/
/*                 {% endif %}*/
/* */
/*                 <ul class="nav menu">*/
/*                     <li><a href="{{ path('articles')}}"><svg class="glyph stroked table"><use xlink:href="#stroked-bag"></use></svg> Articles</a></li>*/
/*                     <li><a href="{{ path('actualite')}}"><svg class="glyph stroked landscape"><use xlink:href="#stroked-landscape"/></svg> Actualites</a></li>*/
/*                     <li><a href="{{ path('evenement')}}"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> Evenements</a></li>*/
/*                     <li><a href="{{ path('joueur')}}"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg> Joueurs</a></li>*/
/*                     <li><a href="{{ path('back_matchtennis')}}"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg> Matchs</a></li>*/
/*                     <li><a href="{{ path('arbitre')}}"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg> Arbitres</a></li>*/
/*                     <li><a href="{{ path('stade')}}"><svg class="glyph stroked location pin"><use xlink:href="#stroked-location-pin"/></svg> Stades</a></li>*/
/*                     <li><a href="{{ path('club')}}"><svg class="glyph stroked home"><use xlink:href="#stroked-home"/></svg> Clubs</a></li>*/
/*                     <li><a href="{{ path('concour')}}"><svg class="glyph stroked star"><use xlink:href="#stroked-star"></use></svg> Concours</a></li>*/
/*                     <li><a href="{{ path('sanction')}}"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"/></svg> Sanction</a></li>*/
/*                     <li><a href="{{ path('formation')}}"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg> Formations</a></li>*/
/*                     <li><a href="{{ path('rapport')}}"><svg class="glyph stroked eye"><use xlink:href="#stroked-eye"/></svg> Gestion Dopage</a></li>*/
/*                 </ul>*/
/* */
/*             </div><!--/.sidebar-->*/
/*         {% endblock %}*/
/*         <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			*/
/*             <div class="row">*/
/*                 <ol class="breadcrumb">*/
/*                     <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>*/
/*                     <li class="active">FTT</li>*/
/*                 </ol>*/
/*             </div><!--/.row-->*/
/* */
/*             <div class="row">*/
/*                 <div class="col-lg-12">*/
/*                     <h1 class="page-header">  {% block titre %} NomMenu {% endblock %}</h1> 	*/
/*                 </div>*/
/*             </div><!--/.row-->*/
/* */
/*             <div class="row">*/
/*                 {% block first1 %}*/
/*                     <div class="col-xs-12 col-md-6 col-lg-3">*/
/*                         <div class="panel panel-blue panel-widget ">*/
/*                             <div class="row no-padding">*/
/*                                 <div class="col-sm-3 col-lg-5 widget-left">*/
/*                                     <svg class="glyph stroked bag"><use xlink:href="#stroked-bag"></use></svg>*/
/*                                 </div>*/
/*                                 <div class="col-sm-9 col-lg-7 widget-right">*/
/*                                     <div class="large"></div>*/
/*                                     <div class="text-muted"></div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 {% endblock %}*/
/*                 {% block first2 %} */
/*                     <div class="col-xs-12 col-md-6 col-lg-3">*/
/*                         <div class="panel panel-orange panel-widget">*/
/*                             <div class="row no-padding">*/
/*                                 <div class="col-sm-3 col-lg-5 widget-left">*/
/*                                     <svg class="glyph stroked empty-message"><use xlink:href="#stroked-empty-message"></use></svg>*/
/*                                 </div>*/
/*                                 <div class="col-sm-9 col-lg-7 widget-right">*/
/*                                     <div class="large"></div>*/
/*                                     <div class="text-muted"></div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 {% endblock %}*/
/*                 {% block first3 %}    */
/*                     <div class="col-xs-12 col-md-6 col-lg-3">*/
/*                         <div class="panel panel-teal panel-widget">*/
/*                             <div class="row no-padding">*/
/*                                 <div class="col-sm-3 col-lg-5 widget-left">*/
/*                                     <svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg>*/
/*                                 </div>*/
/*                                 <div class="col-sm-9 col-lg-7 widget-right">*/
/*                                     <div class="large"></div>*/
/*                                     <div class="text-muted"></div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 {% endblock %}*/
/*                 {% block first4 %}    */
/*                     <div class="col-xs-12 col-md-6 col-lg-3">*/
/*                         <div class="panel panel-red panel-widget">*/
/*                             <div class="row no-padding">*/
/*                                 <div class="col-sm-3 col-lg-5 widget-left">*/
/*                                     <svg class="glyph stroked app-window-with-content"><use xlink:href="#stroked-app-window-with-content"></use></svg>*/
/*                                 </div>*/
/*                                 <div class="col-sm-9 col-lg-7 widget-right">*/
/*                                     <div class="large"></div>*/
/*                                     <div class="text-muted"></div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div><!--/.row-->*/
/*             {% endblock %}*/
/*             {% block second1 %} */
/*                 <div class="row">*/
/*                     <div class="col-lg-12">*/
/*                         <div class="panel panel-default">*/
/*                             <div class="panel-heading">Site Traffic Overview</div>*/
/*                             <div class="panel-body">*/
/*                                 <div class="canvas-wrapper">*/
/*                                     <canvas class="main-chart" id="line-chart" height="200" width="600"></canvas>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div><!--/.row-->*/
/*             {% endblock %}*/
/*             {% block third1 %}*/
/*                 <div class="row">*/
/*                     <div class="col-xs-6 col-md-3">*/
/*                         <div class="panel panel-default">*/
/*                             <div class="panel-body easypiechart-panel">*/
/*                                 <h4>Statistique</h4>*/
/*                                 <div class="easypiechart" id="easypiechart-blue" data-percent="92" ><span class="percent">92%</span>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 {% endblock %}*/
/*                 {% block third2 %}*/
/*                     <div class="col-xs-6 col-md-3">*/
/*                         <div class="panel panel-default">*/
/*                             <div class="panel-body easypiechart-panel">*/
/*                                 <h4>Comments</h4>*/
/*                                 <div class="easypiechart" id="easypiechart-orange" data-percent="65" ><span class="percent">65%</span>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 {% endblock %}*/
/*                 {% block third3 %}*/
/*                     <div class="col-xs-6 col-md-3">*/
/*                         <div class="panel panel-default">*/
/*                             <div class="panel-body easypiechart-panel">*/
/*                                 <h4>New Users</h4>*/
/*                                 <div class="easypiechart" id="easypiechart-teal" data-percent="56" ><span class="percent">56%</span>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 {% endblock %}*/
/*                 {% block third4 %}    */
/*                     <div class="col-xs-6 col-md-3">*/
/*                         <div class="panel panel-default">*/
/*                             <div class="panel-body easypiechart-panel">*/
/*                                 <h4>Visitors</h4>*/
/*                                 <div class="easypiechart" id="easypiechart-red" data-percent="27" ><span class="percent">27%</span>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div><!--/.row-->*/
/*             {% endblock %}*/
/*             {% block fourth1 %}*/
/*                 <div class="row">*/
/*                     <div class="col-md-8">*/
/* */
/*                         <div class="panel panel-default chat">*/
/*                             <div class="panel-heading" id="accordion"><svg class="glyph stroked two-messages"><use xlink:href="#stroked-two-messages"></use></svg> Chat</div>*/
/*                             <div class="panel-body">*/
/*                                 <ul>*/
/*                                     <li class="left clearfix">*/
/*                                         <span class="chat-img pull-left">*/
/*                                             <img src="http://placehold.it/80/30a5ff/fff" alt="User Avatar" class="img-circle" />*/
/*                                         </span>*/
/*                                         <div class="chat-body clearfix">*/
/*                                             <div class="header">*/
/*                                                 <strong class="primary-font">John Doe</strong> <small class="text-muted">32 mins ago</small>*/
/*                                             </div>*/
/*                                             <p>*/
/*                                                 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ante turpis, rutrum ut ullamcorper sed, dapibus ac nunc. Vivamus luctus convallis mauris, eu gravida tortor aliquam ultricies. */
/*                                             </p>*/
/*                                         </div>*/
/*                                     </li>*/
/*                                     <li class="right clearfix">*/
/*                                         <span class="chat-img pull-right">*/
/*                                             <img src="http://placehold.it/80/dde0e6/5f6468" alt="User Avatar" class="img-circle" />*/
/*                                         </span>*/
/*                                         <div class="chat-body clearfix">*/
/*                                             <div class="header">*/
/*                                                 <strong class="pull-left primary-font">Jane Doe</strong> <small class="text-muted">6 mins ago</small>*/
/*                                             </div>*/
/*                                             <p>*/
/*                                                 Mauris dignissim porta enim, sed commodo sem blandit non. Ut scelerisque sapien eu mauris faucibus ultrices. Nulla ac odio nisl. Proin est metus, interdum scelerisque quam eu, eleifend pretium nunc. Suspendisse finibus auctor lectus, eu interdum sapien.*/
/*                                             </p>*/
/*                                         </div>*/
/*                                     </li>*/
/*                                     <li class="left clearfix">*/
/*                                         <span class="chat-img pull-left">*/
/*                                             <img src="http://placehold.it/80/30a5ff/fff" alt="User Avatar" class="img-circle" />*/
/*                                         </span>*/
/*                                         <div class="chat-body clearfix">*/
/*                                             <div class="header">*/
/*                                                 <strong class="primary-font">John Doe</strong> <small class="text-muted">32 mins ago</small>*/
/*                                             </div>*/
/*                                             <p>*/
/*                                                 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ante turpis, rutrum ut ullamcorper sed, dapibus ac nunc. Vivamus luctus convallis mauris, eu gravida tortor aliquam ultricies. */
/*                                             </p>*/
/*                                         </div>*/
/*                                     </li>*/
/*                                 </ul>*/
/*                             </div>*/
/* */
/*                             <div class="panel-footer">*/
/*                                 <div class="input-group">*/
/*                                     <input id="btn-input" type="text" class="form-control input-md" placeholder="Type your message here..." />*/
/*                                     <span class="input-group-btn">*/
/*                                         <button class="btn btn-success btn-md" id="btn-chat">Send</button>*/
/*                                     </span>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     {% endblock %}*/
/*                     {% block fourth2 %}*/
/*                     </div><!--/.col-->*/
/* */
/*                     <div class="col-md-4">*/
/* */
/*                         <div class="panel panel-blue">*/
/*                             <div class="panel-heading dark-overlay"><svg class="glyph stroked clipboard-with-paper"><use xlink:href="#stroked-clipboard-with-paper"></use></svg>To-do List</div>*/
/*                             <div class="panel-body">*/
/*                                 <ul class="todo-list">*/
/*                                     <li class="todo-list-item">*/
/*                                         <div class="checkbox">*/
/*                                             <input type="checkbox" id="checkbox" />*/
/*                                             <label for="checkbox">Make a plan for today</label>*/
/*                                         </div>*/
/*                                         <div class="pull-right action-buttons">*/
/*                                             <a href="#"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg></a>*/
/*                                             <a href="#" class="flag"><svg class="glyph stroked flag"><use xlink:href="#stroked-flag"></use></svg></a>*/
/*                                             <a href="#" class="trash"><svg class="glyph stroked trash"><use xlink:href="#stroked-trash"></use></svg></a>*/
/*                                         </div>*/
/*                                     </li>*/
/*                                     <li class="todo-list-item">*/
/*                                         <div class="checkbox">*/
/*                                             <input type="checkbox" id="checkbox" />*/
/*                                             <label for="checkbox">Update Basecamp</label>*/
/*                                         </div>*/
/*                                         <div class="pull-right action-buttons">*/
/*                                             <a href="#"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg></a>*/
/*                                             <a href="#" class="flag"><svg class="glyph stroked flag"><use xlink:href="#stroked-flag"></use></svg></a>*/
/*                                             <a href="#" class="trash"><svg class="glyph stroked trash"><use xlink:href="#stroked-trash"></use></svg></a>*/
/*                                         </div>*/
/*                                     </li>*/
/*                                     <li class="todo-list-item">*/
/*                                         <div class="checkbox">*/
/*                                             <input type="checkbox" id="checkbox" />*/
/*                                             <label for="checkbox">Send email to Jane</label>*/
/*                                         </div>*/
/*                                         <div class="pull-right action-buttons">*/
/*                                             <a href="#"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg></a>*/
/*                                             <a href="#" class="flag"><svg class="glyph stroked flag"><use xlink:href="#stroked-flag"></use></svg></a>*/
/*                                             <a href="#" class="trash"><svg class="glyph stroked trash"><use xlink:href="#stroked-trash"></use></svg></a>*/
/*                                         </div>*/
/*                                     </li>*/
/*                                     <li class="todo-list-item">*/
/*                                         <div class="checkbox">*/
/*                                             <input type="checkbox" id="checkbox" />*/
/*                                             <label for="checkbox">Drink coffee</label>*/
/*                                         </div>*/
/*                                         <div class="pull-right action-buttons">*/
/*                                             <a href="#"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg></a>*/
/*                                             <a href="#" class="flag"><svg class="glyph stroked flag"><use xlink:href="#stroked-flag"></use></svg></a>*/
/*                                             <a href="#" class="trash"><svg class="glyph stroked trash"><use xlink:href="#stroked-trash"></use></svg></a>*/
/*                                         </div>*/
/*                                     </li>*/
/*                                     <li class="todo-list-item">*/
/*                                         <div class="checkbox">*/
/*                                             <input type="checkbox" id="checkbox" />*/
/*                                             <label for="checkbox">Do some work</label>*/
/*                                         </div>*/
/*                                         <div class="pull-right action-buttons">*/
/*                                             <a href="#"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg></a>*/
/*                                             <a href="#" class="flag"><svg class="glyph stroked flag"><use xlink:href="#stroked-flag"></use></svg></a>*/
/*                                             <a href="#" class="trash"><svg class="glyph stroked trash"><use xlink:href="#stroked-trash"></use></svg></a>*/
/*                                         </div>*/
/*                                     </li>*/
/*                                     <li class="todo-list-item">*/
/*                                         <div class="checkbox">*/
/*                                             <input type="checkbox" id="checkbox" />*/
/*                                             <label for="checkbox">Tidy up workspace</label>*/
/*                                         </div>*/
/*                                         <div class="pull-right action-buttons">*/
/*                                             <a href="#"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg></a>*/
/*                                             <a href="#" class="flag"><svg class="glyph stroked flag"><use xlink:href="#stroked-flag"></use></svg></a>*/
/*                                             <a href="#" class="trash"><svg class="glyph stroked trash"><use xlink:href="#stroked-trash"></use></svg></a>*/
/*                                         </div>*/
/*                                     </li>*/
/*                                 </ul>*/
/*                             </div>*/
/*                             <div class="panel-footer">*/
/*                                 <div class="input-group">*/
/*                                     <input id="btn-input" type="text" class="form-control input-md" placeholder="Add new task" />*/
/*                                     <span class="input-group-btn">*/
/*                                         <button class="btn btn-primary btn-md" id="btn-todo">Add</button>*/
/*                                     </span>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                     </div><!--/.col-->*/
/*                 </div><!--/.row-->*/
/*             {% endblock %}*/
/* */
/*         </div>	<!--/.main-->*/
/* */
/*         <script src="{{asset('bundles/squadftt/js/jquery-1.11.1.min.js')}}"></script>*/
/*         <script src="{{asset('bundles/squadftt/js/bootstrap.min.js')}} "></script>*/
/*         <script src="{{asset('bundles/squadftt/js/chart.min.js')}}"></script>*/
/*         <script src="{{asset('bundles/squadftt/js/chart-data.js')}}"></script>*/
/*         <script src="{{asset('bundles/squadftt/js/easypiechart.js')}}"></script>*/
/*         <script src="{{asset('bundles/squadftt/js/easypiechart-data.js')}}"></script>*/
/*         <script src="{{asset('bundles/squadftt/js/bootstrap-datepicker.js')}}"></script>*/
/*         <script src="{{asset('bundles/squadftt/js/bootstrap-table.js')}}"></script>*/
/*         <script>*/
/*             document.onload = function () {*/
/*                 $(document).on("click", "ul.nav li.parent > a > span.icon", function () {*/
/*                     $(this).find('em:first').toggleClass("glyphicon-minus");*/
/* */
/*                 });*/
/*                 $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");*/
/*             }(window.jQuery);*/
/* */
/*             $(window).on('resize', function () {*/
/*                 if ($(window).width() > 768)*/
/*                     $('#sidebar-collapse').collapse('show');*/
/*             });*/
/*             $(window).on('resize', function () {*/
/*                 if ($(window).width() <= 767)*/
/*                     $('#sidebar-collapse').collapse('hide');*/
/* */
/*             });*/
/* */
/*             $(function () {*/
/*                 $("#calendar").datepicker().on('click', function () {*/
/* */
/*                     var formattedDate = new Date($("#calendar").datepicker("getDate"));*/
/*                     var d = formattedDate.getDate();*/
/*                     var m = formattedDate.getMonth();*/
/*                     m += 1;  // JavaScript months are 0-11*/
/*                     var y = formattedDate.getFullYear();*/
/* */
/*                     //alert(d + "-" + m + "-" + y);*/
/* */
/*                     var pathname = window.location.pathname;*/
/*                     pathname = pathname + y + "-" + m + "-" + d;*/
/* */
/*                     ///alert(pathname);*/
/*                     window.location = pathname;*/
/* */
/*                 });*/
/*             });*/
/* */
/*         </script>*/
/*     </body>*/
/* */
/* </html>*/
/* */
