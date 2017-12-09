<?php

/* SquadFttBundle:Disponibiliter:index.html.twig */
class __TwigTemplate_d7454921495dd03131eadaf1b533f2a8bbf157f5364f4d92249c9e771a7f4468 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("SquadFttBundle::layout.html.twig", "SquadFttBundle:Disponibiliter:index.html.twig", 3);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
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

    // line 5
    public function block_header($context, array $blocks = array())
    {
        echo "   
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/squadftt/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/squadftt/css/datepicker3.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/squadftt/css/styles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
    }

    // line 11
    public function block_titre($context, array $blocks = array())
    {
        echo " Listes des concours  ";
    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        // line 13
        echo "    <ul class=\"nav menu\">
        <li><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("accueil");
        echo "\"><svg class=\"glyph stroked dashboard-dial\"><use xlink:href=\"#stroked-dashboard-dial\"></use></svg> Statistique</a></li>
        <li><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("actualite");
        echo "\"><svg class=\"glyph stroked landscape\"><use xlink:href=\"#stroked-landscape\"/></svg> Actualites</a></li>
        <li ><a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("evenement");
        echo "\"><svg class=\"glyph stroked calendar\"><use xlink:href=\"#stroked-calendar\"></use></svg> Evenements</a></li>
        <li class=\"active\" ><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("disponibiliter");
        echo "\"><svg class=\"glyph stroked male user \"><use xlink:href=\"#stroked-male-user\"/></svg> Disponibilite</a></li>
        <li><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("match");
        echo "\"><svg class=\"glyph stroked table\"><use xlink:href=\"#stroked-table\"></use></svg> Matchs</a></li>
        <li><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("arbitre");
        echo "\"><svg class=\"glyph stroked male user \"><use xlink:href=\"#stroked-male-user\"/></svg> Arbitres</a></li>
        <li><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("stade");
        echo "\"><svg class=\"glyph stroked location pin\"><use xlink:href=\"#stroked-location-pin\"/></svg> Stades</a></li>
        <li><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("club");
        echo "\"><svg class=\"glyph stroked home\"><use xlink:href=\"#stroked-home\"/></svg> Clubs</a></li>
        <li><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("concour");
        echo "\"><svg class=\"glyph stroked star\"><use xlink:href=\"#stroked-star\"></use></svg> Concours</a></li>
        <li><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("formation");
        echo "\"><svg class=\"glyph stroked line-graph\"><use xlink:href=\"#stroked-line-graph\"></use></svg> Formations</a></li>
        <li><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("gestionDopage");
        echo "\"><svg class=\"glyph stroked eye\"><use xlink:href=\"#stroked-eye\"/></svg> Gestion Dopage</a></li>
    </ul>  
";
    }

    // line 27
    public function block_first1($context, array $blocks = array())
    {
        // line 28
        echo "<form id=\"form1\">
   <select name=\"choix\" id=\"choice\">
  <option value=\"0\">1</option>
  <option value=\"1\">2</option>
  <option value=\"2\">3</option>
     </select>
    <div class=\"col-md-4\">

        <div class=\"panel panel-red\">
            <div class=\"panel-heading dark-overlay\"><svg class=\"glyph stroked calendar\"><use xlink:href=\"#stroked-calendar\"></use></svg>Calendar</div>
            <div class=\"panel-body\">
                <div id=\"calendar\"></div>
            </div>
        </div>

  
    </div><!--/.col-->  

    <p> 
        <button id=\"try\">Valider</button></p>
    
  <input type=\"date\" name=\"bday\" disabled>
      </form>
    ";
    }

    // line 52
    public function block_jscript($context, array $blocks = array())
    {
        // line 53
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/squadftt/js/jquery-1.11.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/squadftt/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/squadftt/js/chart.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/squadftt/js/chart-data.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/squadftt/js/easypiechart.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/squadftt/js/easypiechart-data.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/squadftt/js/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
    <script>


        !function (\$) {
            \$(document).on(\"click\", \"ul.nav li.parent > a > span.icon\", function () {
                \$(this).find('em:first').toggleClass(\"glyphicon-minus\");

            });
            \$(\".sidebar span.icon\").find('em:first').addClass(\"glyphicon-plus\");
        }(window.jQuery);

        \$(window).on('resize', function () {
            if (\$(window).width() > 768)
                \$('#sidebar-collapse').collapse('show')
        })
        \$(window).on('resize', function () {
            if (\$(window).width() <= 767)
                \$('#sidebar-collapse').collapse('hide')
        })

        \$(function () {
            \$(\"#c\").datepicker();
            \$(\"#try\").bind(\"click\", function (){
                oFormObject= \$document.forms['form1'];
                oFormElement = oFormObject.elements[\"bday\"];
                
            });
        });

    </script>\t

";
    }

    // line 93
    public function block_first2($context, array $blocks = array())
    {
    }

    // line 94
    public function block_first3($context, array $blocks = array())
    {
    }

    // line 95
    public function block_first4($context, array $blocks = array())
    {
    }

    // line 96
    public function block_second1($context, array $blocks = array())
    {
    }

    // line 97
    public function block_third1($context, array $blocks = array())
    {
    }

    // line 98
    public function block_third2($context, array $blocks = array())
    {
    }

    // line 99
    public function block_third3($context, array $blocks = array())
    {
    }

    // line 100
    public function block_third4($context, array $blocks = array())
    {
    }

    // line 101
    public function block_fourth1($context, array $blocks = array())
    {
    }

    // line 102
    public function block_fourth2($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "SquadFttBundle:Disponibiliter:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 102,  255 => 101,  250 => 100,  245 => 99,  240 => 98,  235 => 97,  230 => 96,  225 => 95,  220 => 94,  215 => 93,  178 => 59,  174 => 58,  170 => 57,  166 => 56,  162 => 55,  158 => 54,  153 => 53,  150 => 52,  123 => 28,  120 => 27,  113 => 24,  109 => 23,  105 => 22,  101 => 21,  97 => 20,  93 => 19,  89 => 18,  85 => 17,  81 => 16,  77 => 15,  73 => 14,  70 => 13,  67 => 12,  61 => 11,  55 => 8,  51 => 7,  47 => 6,  42 => 5,  11 => 3,);
    }
}
/* {# empty Twig template #}*/
/* */
/* {% extends 'SquadFttBundle::layout.html.twig' %}*/
/* */
/* {% block header %}   */
/*     <link href="{{asset('bundles/squadftt/css/bootstrap.min.css')}}" rel="stylesheet">*/
/*     <link href="{{asset('bundles/squadftt/css/datepicker3.css')}}" rel="stylesheet">*/
/*     <link href="{{asset('bundles/squadftt/css/styles.css')}}" rel="stylesheet">*/
/* {% endblock %}*/
/* */
/* {% block titre %} Listes des concours  {% endblock %}*/
/* {% block menu %}*/
/*     <ul class="nav menu">*/
/*         <li><a href="{{ path('accueil')}}"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Statistique</a></li>*/
/*         <li><a href="{{ path('actualite')}}"><svg class="glyph stroked landscape"><use xlink:href="#stroked-landscape"/></svg> Actualites</a></li>*/
/*         <li ><a href="{{ path('evenement')}}"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> Evenements</a></li>*/
/*         <li class="active" ><a href="{{ path('disponibiliter')}}"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg> Disponibilite</a></li>*/
/*         <li><a href="{{ path('match')}}"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg> Matchs</a></li>*/
/*         <li><a href="{{ path('arbitre')}}"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg> Arbitres</a></li>*/
/*         <li><a href="{{ path('stade')}}"><svg class="glyph stroked location pin"><use xlink:href="#stroked-location-pin"/></svg> Stades</a></li>*/
/*         <li><a href="{{ path('club')}}"><svg class="glyph stroked home"><use xlink:href="#stroked-home"/></svg> Clubs</a></li>*/
/*         <li><a href="{{ path('concour')}}"><svg class="glyph stroked star"><use xlink:href="#stroked-star"></use></svg> Concours</a></li>*/
/*         <li><a href="{{ path('formation')}}"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg> Formations</a></li>*/
/*         <li><a href="{{ path('gestionDopage')}}"><svg class="glyph stroked eye"><use xlink:href="#stroked-eye"/></svg> Gestion Dopage</a></li>*/
/*     </ul>  */
/* {% endblock %}*/
/* {% block first1 -%}*/
/*     <form id="form1">*/
/*    <select name="choix" id="choice">*/
/*   <option value="0">1</option>*/
/*   <option value="1">2</option>*/
/*   <option value="2">3</option>*/
/*      </select>*/
/*     <div class="col-md-4">*/
/* */
/*         <div class="panel panel-red">*/
/*             <div class="panel-heading dark-overlay"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg>Calendar</div>*/
/*             <div class="panel-body">*/
/*                 <div id="calendar"></div>*/
/*             </div>*/
/*         </div>*/
/* */
/*   */
/*     </div><!--/.col-->  */
/* */
/*     <p> */
/*         <button id="try">Valider</button></p>*/
/*     */
/*   <input type="date" name="bday" disabled>*/
/*       </form>*/
/*     {% endblock %}*/
/*     {% block jscript %}*/
/*     <script src="{{asset('bundles/squadftt/js/jquery-1.11.1.min.js')}}"></script>*/
/*     <script src="{{asset('bundles/squadftt/js/bootstrap.min.js')}}"></script>*/
/*     <script src="{{asset('bundles/squadftt/js/chart.min.js')}}"></script>*/
/*     <script src="{{asset('bundles/squadftt/js/chart-data.js')}}"></script>*/
/*     <script src="{{asset('bundles/squadftt/js/easypiechart.js')}}"></script>*/
/*     <script src="{{asset('bundles/squadftt/js/easypiechart-data.js')}}"></script>*/
/*     <script src="{{asset('bundles/squadftt/js/bootstrap-datepicker.js')}}"></script>*/
/*     <script>*/
/* */
/* */
/*         !function ($) {*/
/*             $(document).on("click", "ul.nav li.parent > a > span.icon", function () {*/
/*                 $(this).find('em:first').toggleClass("glyphicon-minus");*/
/* */
/*             });*/
/*             $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");*/
/*         }(window.jQuery);*/
/* */
/*         $(window).on('resize', function () {*/
/*             if ($(window).width() > 768)*/
/*                 $('#sidebar-collapse').collapse('show')*/
/*         })*/
/*         $(window).on('resize', function () {*/
/*             if ($(window).width() <= 767)*/
/*                 $('#sidebar-collapse').collapse('hide')*/
/*         })*/
/* */
/*         $(function () {*/
/*             $("#c").datepicker();*/
/*             $("#try").bind("click", function (){*/
/*                 oFormObject= $document.forms['form1'];*/
/*                 oFormElement = oFormObject.elements["bday"];*/
/*                 */
/*             });*/
/*         });*/
/* */
/*     </script>	*/
/* */
/* {% endblock %}*/
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
