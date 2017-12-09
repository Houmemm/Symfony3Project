<?php

/* SquadFttBundle:User:index.html.twig */
class __TwigTemplate_fba21d547203358886534ab6bf87c687958ad7e4a217429762dbbfb2d50291ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SquadFttBundle::layout.html.twig", "SquadFttBundle:User:index.html.twig", 1);
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
        echo " Listes des utilisateurs ";
    }

    // line 3
    public function block_menu($context, array $blocks = array())
    {
        // line 4
        echo "<ul class=\"nav menu\">
            <li><a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("accueil");
        echo "\"><svg class=\"glyph stroked dashboard-dial\"><use xlink:href=\"#stroked-dashboard-dial\"></use></svg> Statistique</a></li>
            <li><a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("actualite");
        echo "\"><svg class=\"glyph stroked landscape\"><use xlink:href=\"#stroked-landscape\"/></svg> Actualites</a></li>
            <li ><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("evenement");
        echo "\"><svg class=\"glyph stroked calendar\"><use xlink:href=\"#stroked-calendar\"></use></svg> Evenements</a></li>
            <li><a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("joueur");
        echo "\"><svg class=\"glyph stroked male user \"><use xlink:href=\"#stroked-male-user\"/></svg> Joueurs</a></li>
            <li><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("match");
        echo "\"><svg class=\"glyph stroked table\"><use xlink:href=\"#stroked-table\"></use></svg> Matchs</a></li>
            <li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("arbitre");
        echo "\"><svg class=\"glyph stroked male user \"><use xlink:href=\"#stroked-male-user\"/></svg> Arbitres</a></li>
            <li><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("stade");
        echo "\"><svg class=\"glyph stroked location pin\"><use xlink:href=\"#stroked-location-pin\"/></svg> Stades</a></li>
            <li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("club");
        echo "\"><svg class=\"glyph stroked home\"><use xlink:href=\"#stroked-home\"/></svg> Clubs</a></li>
            <li><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("concour");
        echo "\"><svg class=\"glyph stroked star\"><use xlink:href=\"#stroked-star\"></use></svg> Concours</a></li>
            <li><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("formation");
        echo "\"><svg class=\"glyph stroked line-graph\"><use xlink:href=\"#stroked-line-graph\"></use></svg> Formations</a></li>
            <li><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("gestionDopage");
        echo "\"><svg class=\"glyph  Sstroked eye\"><use xlink:href=\"#stroked-eye\"/></svg> Gestion Dopage</a></li>
          <li  class=\"active\"><a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("user");
        echo "\"><svg class=\"glyph stroked male user \"><use xlink:href=\"#stroked-male-user\"/></svg> Utilisateur</a></li>
        
</ul>  
";
    }

    // line 20
    public function block_first1($context, array $blocks = array())
    {
        // line 21
        $context["arbitre"] = 0;
        // line 22
        echo "     ";
        $context["responsable"] = 0;
        // line 23
        echo "     ";
        $context["medecin"] = 0;
        // line 24
        echo "     ";
        $context["fan"] = 0;
        // line 25
        echo "     ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 26
            echo "         ";
            if (($this->getAttribute($this->getAttribute($context["entity"], "roles", array()), 0, array(), "array") == "ROLE_ARBITRE")) {
                // line 27
                echo "            ";
                $context["arbitre"] = ((isset($context["arbitre"]) ? $context["arbitre"] : $this->getContext($context, "arbitre")) + 1);
                // line 28
                echo "         ";
            } elseif (($this->getAttribute($this->getAttribute($context["entity"], "roles", array()), 0, array(), "array") == "ROLE_RESPONSABLE")) {
                // line 29
                echo "             ";
                $context["responsable"] = ((isset($context["responsable"]) ? $context["responsable"] : $this->getContext($context, "responsable")) + 1);
                // line 30
                echo "         ";
            } elseif (($this->getAttribute($this->getAttribute($context["entity"], "roles", array()), 0, array(), "array") == "ROLE_MEDECIN")) {
                // line 31
                echo "             ";
                $context["medecin"] = ((isset($context["medecin"]) ? $context["medecin"] : $this->getContext($context, "medecin")) + 1);
                // line 32
                echo "         ";
            } else {
                // line 33
                echo "              ";
                $context["fan"] = ((isset($context["fan"]) ? $context["fan"] : $this->getContext($context, "fan")) + 1);
                // line 34
                echo "         ";
            }
            echo "      
     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "    
    
      <div class=\"col-lg-12\">
    <div class=\"row\">
\t\t\t<div class=\"col-xs-12 col-md-6 col-lg-3\">
\t\t\t\t<div class=\"panel panel-blue panel-widget \">
\t\t\t\t\t<div class=\"row no-padding\">
\t\t\t\t\t\t<div class=\"col-sm-3 col-lg-5 widget-left\">
\t\t\t<svg class=\"glyph stroked male-user\"><use xlink:href=\"#stroked-male-user\"></use></svg>\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-9 col-lg-7 widget-right\">
\t\t\t\t\t\t\t<div class=\"large\">";
        // line 46
        echo twig_escape_filter($this->env, (isset($context["responsable"]) ? $context["responsable"] : $this->getContext($context, "responsable")), "html", null, true);
        echo "</div>
\t\t\t\t\t\t\t<div class=\"text-muted\">Responsable</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-xs-12 col-md-6 col-lg-3\">
\t\t\t\t<div class=\"panel panel-orange panel-widget\">
\t\t\t\t\t<div class=\"row no-padding\">
\t\t\t\t\t\t<div class=\"col-sm-3 col-lg-5 widget-left\">
\t\t\t\t\t\t\t\t\t<svg class=\"glyph stroked male-user\"><use xlink:href=\"#stroked-male-user\"></use></svg>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-9 col-lg-7 widget-right\">
\t\t\t\t\t\t\t<div class=\"large\">";
        // line 59
        echo twig_escape_filter($this->env, (isset($context["arbitre"]) ? $context["arbitre"] : $this->getContext($context, "arbitre")), "html", null, true);
        echo "</div>
\t\t\t\t\t\t\t<div class=\"text-muted\">Arbitre</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-xs-12 col-md-6 col-lg-3\">
\t\t\t\t<div class=\"panel panel-teal panel-widget\">
\t\t\t\t\t<div class=\"row no-padding\">
\t\t\t\t\t\t<div class=\"col-sm-3 col-lg-5 widget-left\">
\t\t\t\t\t\t\t<svg class=\"glyph stroked male-user\"><use xlink:href=\"#stroked-male-user\"></use></svg>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-9 col-lg-7 widget-right\">
\t\t\t\t\t\t\t<div class=\"large\">";
        // line 72
        echo twig_escape_filter($this->env, (isset($context["medecin"]) ? $context["medecin"] : $this->getContext($context, "medecin")), "html", null, true);
        echo "</div>
\t\t\t\t\t\t\t<div class=\"text-muted\">Medecin</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-xs-12 col-md-6 col-lg-3\">
\t\t\t\t<div class=\"panel panel-red panel-widget\">
\t\t\t\t\t<div class=\"row no-padding\">
\t\t\t\t\t\t<div class=\"col-sm-3 col-lg-5 widget-left\">
\t\t\t<svg class=\"glyph stroked male-user\"><use xlink:href=\"#stroked-male-user\"></use></svg>\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-9 col-lg-7 widget-right\">
\t\t\t\t\t\t\t<div class=\"large\">";
        // line 84
        echo twig_escape_filter($this->env, (isset($context["fan"]) ? $context["fan"] : $this->getContext($context, "fan")), "html", null, true);
        echo "</div>
\t\t\t\t\t\t\t<div class=\"text-muted\">Fan</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div><!--/.row-->

   </div>
   <div class=\"col-lg-12\">
            <div class=\"panel panel-default\">
                <div class=\"panel-body\">
                   

    <table data-toggle=\"table\" data-url=\"tables/data1.json\"  data-show-refresh=\"true\" data-show-toggle=\"true\" data-show-columns=\"true\" data-search=\"true\" data-select-item-name=\"toolbar1\" data-pagination=\"true\" data-sort-name=\"name\" data-sort-order=\"desc\">
        
        <thead>
            <tr>
                <th>Utilisateur</th>
                <th>email</th>
                <th>Prenom</th>
                <th>Nom</th>
                <th>Role</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 111
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 112
            echo "            <tr>
                <td>";
            // line 113
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "username", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 114
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "email", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 115
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "prenom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 116
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nom", array()), "html", null, true);
            echo "</td>
                <td>   ";
            // line 117
            if (($this->getAttribute($this->getAttribute($context["entity"], "roles", array()), 0, array(), "array") == "ROLE_ARBITRE")) {
                // line 118
                echo "              Arbitre 
         ";
            } elseif (($this->getAttribute($this->getAttribute(            // line 119
$context["entity"], "roles", array()), 0, array(), "array") == "ROLE_RESPONSABLE")) {
                // line 120
                echo "            Responsable
         ";
            } elseif (($this->getAttribute($this->getAttribute(            // line 121
$context["entity"], "roles", array()), 0, array(), "array") == "ROLE_MEDECIN")) {
                // line 122
                echo "            Medecin
         ";
            } else {
                // line 124
                echo "             Fan
         ";
            }
            // line 125
            echo "       </td>
               
                <td>
                ";
            // line 128
            if (($this->getAttribute($this->getAttribute($context["entity"], "roles", array()), 0, array(), "array") == "ROLE_AGENT")) {
                // line 129
                echo "                    
                 <a href=\"";
                // line 130
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("afficherSolde", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\"><img width=\"32\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/squadftt/tables/icon-moneybag.png"), "html", null, true);
                echo "\"></a>
                 ";
            }
            // line 131
            echo " 
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 135
        echo "    </tbody>
    </table>
    <a href=\"";
        // line 137
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" class=\"btn btn-primary\"> Ajouter un utilisateur </a>
    ";
    }

    // line 139
    public function block_first2($context, array $blocks = array())
    {
        echo " ";
    }

    // line 140
    public function block_first3($context, array $blocks = array())
    {
        echo " ";
    }

    // line 141
    public function block_first4($context, array $blocks = array())
    {
        echo " ";
    }

    // line 142
    public function block_second1($context, array $blocks = array())
    {
        echo " ";
    }

    // line 143
    public function block_third1($context, array $blocks = array())
    {
        echo " ";
    }

    // line 144
    public function block_third2($context, array $blocks = array())
    {
        echo " ";
    }

    // line 145
    public function block_third3($context, array $blocks = array())
    {
        echo " ";
    }

    // line 146
    public function block_third4($context, array $blocks = array())
    {
        echo " ";
    }

    // line 147
    public function block_fourth1($context, array $blocks = array())
    {
    }

    // line 148
    public function block_fourth2($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "SquadFttBundle:User:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  377 => 148,  372 => 147,  366 => 146,  360 => 145,  354 => 144,  348 => 143,  342 => 142,  336 => 141,  330 => 140,  324 => 139,  318 => 137,  314 => 135,  305 => 131,  298 => 130,  295 => 129,  293 => 128,  288 => 125,  284 => 124,  280 => 122,  278 => 121,  275 => 120,  273 => 119,  270 => 118,  268 => 117,  264 => 116,  260 => 115,  256 => 114,  252 => 113,  249 => 112,  245 => 111,  215 => 84,  200 => 72,  184 => 59,  168 => 46,  156 => 36,  147 => 34,  144 => 33,  141 => 32,  138 => 31,  135 => 30,  132 => 29,  129 => 28,  126 => 27,  123 => 26,  118 => 25,  115 => 24,  112 => 23,  109 => 22,  107 => 21,  104 => 20,  96 => 16,  92 => 15,  88 => 14,  84 => 13,  80 => 12,  76 => 11,  72 => 10,  68 => 9,  64 => 8,  60 => 7,  56 => 6,  52 => 5,  49 => 4,  46 => 3,  40 => 2,  11 => 1,);
    }
}
/* {% extends 'SquadFttBundle::layout.html.twig' %}*/
/* {% block titre %} Listes des utilisateurs {% endblock %}*/
/* {% block menu %}*/
/* <ul class="nav menu">*/
/*             <li><a href="{{ path('accueil')}}"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Statistique</a></li>*/
/*             <li><a href="{{ path('actualite')}}"><svg class="glyph stroked landscape"><use xlink:href="#stroked-landscape"/></svg> Actualites</a></li>*/
/*             <li ><a href="{{ path('evenement')}}"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> Evenements</a></li>*/
/*             <li><a href="{{ path('joueur')}}"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg> Joueurs</a></li>*/
/*             <li><a href="{{ path('match')}}"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg> Matchs</a></li>*/
/*             <li><a href="{{ path('arbitre')}}"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg> Arbitres</a></li>*/
/*             <li><a href="{{ path('stade')}}"><svg class="glyph stroked location pin"><use xlink:href="#stroked-location-pin"/></svg> Stades</a></li>*/
/*             <li><a href="{{ path('club')}}"><svg class="glyph stroked home"><use xlink:href="#stroked-home"/></svg> Clubs</a></li>*/
/*             <li><a href="{{ path('concour')}}"><svg class="glyph stroked star"><use xlink:href="#stroked-star"></use></svg> Concours</a></li>*/
/*             <li><a href="{{ path('formation')}}"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg> Formations</a></li>*/
/*             <li><a href="{{ path('gestionDopage')}}"><svg class="glyph  Sstroked eye"><use xlink:href="#stroked-eye"/></svg> Gestion Dopage</a></li>*/
/*           <li  class="active"><a href="{{ path('user')}}"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg> Utilisateur</a></li>*/
/*         */
/* </ul>  */
/* {% endblock %}    */
/* {% block first1 -%}*/
/*      {%set arbitre=0%}*/
/*      {% set responsable=0 %}*/
/*      {%set medecin=0 %}*/
/*      {% set fan=0 %}*/
/*      {% for entity in entities %}*/
/*          {% if entity.roles[0]=="ROLE_ARBITRE"   %}*/
/*             {%set arbitre=arbitre+1%}*/
/*          {% elseif entity.roles[0]=="ROLE_RESPONSABLE" %}*/
/*              {%set responsable = responsable+1 %}*/
/*          {% elseif entity.roles[0]=="ROLE_MEDECIN" %}*/
/*              {%set medecin = medecin+1%}*/
/*          {% else %}*/
/*               {%set fan = fan+1%}*/
/*          {%endif%}      */
/*      {% endfor %}*/
/*     */
/*     */
/*       <div class="col-lg-12">*/
/*     <div class="row">*/
/* 			<div class="col-xs-12 col-md-6 col-lg-3">*/
/* 				<div class="panel panel-blue panel-widget ">*/
/* 					<div class="row no-padding">*/
/* 						<div class="col-sm-3 col-lg-5 widget-left">*/
/* 			<svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg>						</div>*/
/* 						<div class="col-sm-9 col-lg-7 widget-right">*/
/* 							<div class="large">{{responsable}}</div>*/
/* 							<div class="text-muted">Responsable</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="col-xs-12 col-md-6 col-lg-3">*/
/* 				<div class="panel panel-orange panel-widget">*/
/* 					<div class="row no-padding">*/
/* 						<div class="col-sm-3 col-lg-5 widget-left">*/
/* 									<svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg>*/
/* 						</div>*/
/* 						<div class="col-sm-9 col-lg-7 widget-right">*/
/* 							<div class="large">{{arbitre}}</div>*/
/* 							<div class="text-muted">Arbitre</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="col-xs-12 col-md-6 col-lg-3">*/
/* 				<div class="panel panel-teal panel-widget">*/
/* 					<div class="row no-padding">*/
/* 						<div class="col-sm-3 col-lg-5 widget-left">*/
/* 							<svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg>*/
/* 						</div>*/
/* 						<div class="col-sm-9 col-lg-7 widget-right">*/
/* 							<div class="large">{{medecin}}</div>*/
/* 							<div class="text-muted">Medecin</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="col-xs-12 col-md-6 col-lg-3">*/
/* 				<div class="panel panel-red panel-widget">*/
/* 					<div class="row no-padding">*/
/* 						<div class="col-sm-3 col-lg-5 widget-left">*/
/* 			<svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg>						</div>*/
/* 						<div class="col-sm-9 col-lg-7 widget-right">*/
/* 							<div class="large">{{fan}}</div>*/
/* 							<div class="text-muted">Fan</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div><!--/.row-->*/
/* */
/*    </div>*/
/*    <div class="col-lg-12">*/
/*             <div class="panel panel-default">*/
/*                 <div class="panel-body">*/
/*                    */
/* */
/*     <table data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">*/
/*         */
/*         <thead>*/
/*             <tr>*/
/*                 <th>Utilisateur</th>*/
/*                 <th>email</th>*/
/*                 <th>Prenom</th>*/
/*                 <th>Nom</th>*/
/*                 <th>Role</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for entity in entities %}*/
/*             <tr>*/
/*                 <td>{{ entity.username }}</td>*/
/*                 <td>{{ entity.email }}</td>*/
/*                 <td>{{ entity.prenom }}</td>*/
/*                 <td>{{ entity.nom }}</td>*/
/*                 <td>   {% if entity.roles[0]=="ROLE_ARBITRE"   %}*/
/*               Arbitre */
/*          {% elseif entity.roles[0]=="ROLE_RESPONSABLE" %}*/
/*             Responsable*/
/*          {% elseif entity.roles[0]=="ROLE_MEDECIN" %}*/
/*             Medecin*/
/*          {% else %}*/
/*              Fan*/
/*          {%endif%}       </td>*/
/*                */
/*                 <td>*/
/*                 {%if ( entity.roles[0]=="ROLE_AGENT") %}*/
/*                     */
/*                  <a href="{{ path('afficherSolde', { 'id': entity.id })}}"><img width="32" src="{{asset('bundles/squadftt/tables/icon-moneybag.png')}}"></a>*/
/*                  {%endif%} */
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*     </tbody>*/
/*     </table>*/
/*     <a href="{{ path('fos_user_registration_register') }}" class="btn btn-primary"> Ajouter un utilisateur </a>*/
/*     {% endblock %}*/
/* {% block first2 %} {% endblock %}    */
/* {% block first3 %} {% endblock %}    */
/* {% block first4 %} {% endblock %}    */
/* {% block second1%} {% endblock %}    */
/* {% block third1 %} {% endblock %}    */
/* {% block third2 %} {% endblock %}*/
/* {% block third3 %} {% endblock %}*/
/* {% block third4 %} {% endblock %}*/
/* {% block fourth1 %}{% endblock %}*/
/* {% block fourth2 %}{% endblock %}*/
