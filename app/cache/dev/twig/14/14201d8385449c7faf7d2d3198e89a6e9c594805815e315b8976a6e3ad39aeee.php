<?php

/* SquadFttBundle:Default:arbitre.html.twig */
class __TwigTemplate_5ba92e10838b35fa854db8e2973813d4aecf3abe2ecf858081fe8354997b1239 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SquadFttBundle::layout.html.twig", "SquadFttBundle:Default:arbitre.html.twig", 1);
        $this->blocks = array(
            'titre' => array($this, 'block_titre'),
            'menu' => array($this, 'block_menu'),
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

    protected function doGetParent(array $context)
    {
        return "SquadFttBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_titre($context, array $blocks = array())
    {
        // line 3
        echo " Arbitre
";
    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        // line 6
        echo "   <ul class=\"nav menu\">
            <li><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("accueil");
        echo "\"><svg class=\"glyph stroked dashboard-dial\"><use xlink:href=\"#stroked-dashboard-dial\"></use></svg> Statistique</a></li>
            <li><a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("actualite");
        echo "\"><svg class=\"glyph stroked landscape\"><use xlink:href=\"#stroked-landscape\"/></svg> Actualites</a></li>
            <li><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("evenement");
        echo "\"><svg class=\"glyph stroked calendar\"><use xlink:href=\"#stroked-calendar\"></use></svg> Evenements</a></li>
            <li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("joueur");
        echo "\"><svg class=\"glyph stroked male user \"><use xlink:href=\"#stroked-male-user\"/></svg> Joueurs</a></li>
            <li><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("match");
        echo "\"><svg class=\"glyph stroked table\"><use xlink:href=\"#stroked-table\"></use></svg> Matchs</a></li>
            <li class=\"active\" ><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("arbitre");
        echo "\"> <svg class=\"glyph stroked male user \"><use xlink:href=\"#stroked-male-user\"/></svg> Arbitres</a></li>
            <li><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("stade");
        echo "\"><svg class=\"glyph stroked location pin\"><use xlink:href=\"#stroked-location-pin\"/></svg> Stades</a></li>
            <li><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("club");
        echo "\"><svg class=\"glyph stroked home\"><use xlink:href=\"#stroked-home\"/></svg> Clubs</a></li>
            <li><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("concour");
        echo "\"><svg class=\"glyph stroked star\"><use xlink:href=\"#stroked-star\"></use></svg> Concours</a></li>
            <li><a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("formation");
        echo "\"><svg class=\"glyph stroked line-graph\"><use xlink:href=\"#stroked-line-graph\"></use></svg> Formations</a></li>
            <li><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("gestionDopage");
        echo "\"><svg class=\"glyph stroked eye\"><use xlink:href=\"#stroked-eye\"/></svg> Gestion Dopage</a></li>
         </ul>
";
    }

    // line 21
    public function block_first1($context, array $blocks = array())
    {
        // line 22
        echo "    <div class=\"row\">
\t\t\t<div class=\"col-lg-12\">
\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t<div class=\"panel-heading\">Advanced Table</div>
\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t<table data-toggle=\"table\" data-url=\"tables/data1.json\"  data-show-refresh=\"true\" data-show-toggle=\"true\" data-show-columns=\"true\" data-search=\"true\" data-select-item-name=\"toolbar1\" data-pagination=\"true\" data-sort-name=\"name\" data-sort-order=\"desc\">
\t\t\t\t\t\t    <thead>
\t\t\t\t\t\t    <tr>
\t\t\t\t\t\t        <th data-field=\"state\" data-checkbox=\"true\" >Item ID</th>
\t\t\t\t\t\t        <th data-field=\"id\" data-sortable=\"true\">Item ID</th>
\t\t\t\t\t\t        <th data-field=\"name\"  data-sortable=\"true\">Item Name</th>
\t\t\t\t\t\t        <th data-field=\"price\" data-sortable=\"true\">Item Price</th>
\t\t\t\t\t\t    </tr>
\t\t\t\t\t\t    </thead>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div><!--/.row-->\t
";
    }

    // line 42
    public function block_first2($context, array $blocks = array())
    {
    }

    // line 44
    public function block_first3($context, array $blocks = array())
    {
    }

    // line 46
    public function block_first4($context, array $blocks = array())
    {
    }

    // line 48
    public function block_second1($context, array $blocks = array())
    {
    }

    // line 50
    public function block_third1($context, array $blocks = array())
    {
    }

    // line 52
    public function block_third2($context, array $blocks = array())
    {
    }

    // line 54
    public function block_third3($context, array $blocks = array())
    {
    }

    // line 56
    public function block_third4($context, array $blocks = array())
    {
    }

    // line 58
    public function block_fourth1($context, array $blocks = array())
    {
    }

    // line 60
    public function block_fourth2($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "SquadFttBundle:Default:arbitre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 60,  167 => 58,  162 => 56,  157 => 54,  152 => 52,  147 => 50,  142 => 48,  137 => 46,  132 => 44,  127 => 42,  104 => 22,  101 => 21,  94 => 17,  90 => 16,  86 => 15,  82 => 14,  78 => 13,  74 => 12,  70 => 11,  66 => 10,  62 => 9,  58 => 8,  54 => 7,  51 => 6,  48 => 5,  43 => 3,  40 => 2,  11 => 1,);
    }
}
/* {% extends "SquadFttBundle::layout.html.twig" %}*/
/* {% block titre %}*/
/*  Arbitre*/
/* {% endblock%}*/
/* {% block menu %}*/
/*    <ul class="nav menu">*/
/*             <li><a href="{{ path('accueil')}}"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Statistique</a></li>*/
/*             <li><a href="{{ path('actualite')}}"><svg class="glyph stroked landscape"><use xlink:href="#stroked-landscape"/></svg> Actualites</a></li>*/
/*             <li><a href="{{ path('evenement')}}"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> Evenements</a></li>*/
/*             <li><a href="{{ path('joueur')}}"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg> Joueurs</a></li>*/
/*             <li><a href="{{ path('match')}}"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg> Matchs</a></li>*/
/*             <li class="active" ><a href="{{ path('arbitre')}}"> <svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg> Arbitres</a></li>*/
/*             <li><a href="{{ path('stade')}}"><svg class="glyph stroked location pin"><use xlink:href="#stroked-location-pin"/></svg> Stades</a></li>*/
/*             <li><a href="{{ path('club')}}"><svg class="glyph stroked home"><use xlink:href="#stroked-home"/></svg> Clubs</a></li>*/
/*             <li><a href="{{ path('concour')}}"><svg class="glyph stroked star"><use xlink:href="#stroked-star"></use></svg> Concours</a></li>*/
/*             <li><a href="{{ path('formation')}}"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg> Formations</a></li>*/
/*             <li><a href="{{ path('gestionDopage')}}"><svg class="glyph stroked eye"><use xlink:href="#stroked-eye"/></svg> Gestion Dopage</a></li>*/
/*          </ul>*/
/* {% endblock %}  */
/* */
/* {% block first1 %}*/
/*     <div class="row">*/
/* 			<div class="col-lg-12">*/
/* 				<div class="panel panel-default">*/
/* 					<div class="panel-heading">Advanced Table</div>*/
/* 					<div class="panel-body">*/
/* 						<table data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">*/
/* 						    <thead>*/
/* 						    <tr>*/
/* 						        <th data-field="state" data-checkbox="true" >Item ID</th>*/
/* 						        <th data-field="id" data-sortable="true">Item ID</th>*/
/* 						        <th data-field="name"  data-sortable="true">Item Name</th>*/
/* 						        <th data-field="price" data-sortable="true">Item Price</th>*/
/* 						    </tr>*/
/* 						    </thead>*/
/* 						</table>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div><!--/.row-->	*/
/* {% endblock %}*/
/* {% block first2 %}*/
/* {% endblock %}*/
/* {% block first3 %}*/
/* {% endblock %}*/
/* {% block first4 %}*/
/* {% endblock %}*/
/* {% block second1 %}*/
/* {% endblock %}*/
/* {% block third1 %}*/
/* {% endblock %}*/
/* {% block third2 %}*/
/* {% endblock %}*/
/* {% block third3 %}*/
/* {% endblock %}*/
/* {% block third4 %}*/
/* {% endblock %}*/
/* {% block fourth1 %}*/
/* {% endblock %}*/
/* {% block fourth2 %}*/
/* {% endblock %}*/
