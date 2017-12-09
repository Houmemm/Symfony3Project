<?php

/* SquadFttBundle:Evenement:show.html.twig */
class __TwigTemplate_ab00aa796710b5d372ae28106470703b131da020bd384d74ac7d894fb296b52a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SquadFttBundle::layout.html.twig", "SquadFttBundle:Evenement:show.html.twig", 1);
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
        echo "   ";
    }

    // line 3
    public function block_menu($context, array $blocks = array())
    {
        // line 4
        echo "    <ul class=\"nav menu\">
        <li><a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("accueil");
        echo "\"><svg class=\"glyph stroked dashboard-dial\"><use xlink:href=\"#stroked-dashboard-dial\"></use></svg> Statistique</a></li>
        <li><a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("actualite");
        echo "\"><svg class=\"glyph stroked landscape\"><use xlink:href=\"#stroked-landscape\"/></svg> Actualites</a></li>
        <li class=\"active\" ><a href=\"";
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
        echo "\"><svg class=\"glyph stroked eye\"><use xlink:href=\"#stroked-eye\"/></svg> Gestion Dopage</a></li>
        <li><a href=\"";
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
        echo "

</div> 
<div>
    <div class=\"panel panel-primary\">
        <div class=\"panel-heading\">
            ";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "libelleEvenement", array()), "html", null, true);
        echo "
        </div>
        <div class=\"panel-body\">  <!-- Affichage des donn�es  -->
            <p> ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "libelleEvenement", array()), "html", null, true);
        echo " aura lieu a  ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "site", array()), "html", null, true);
        echo " 
                de ";
        // line 31
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateDebut", array()), "Y-m-d"), "html", null, true);
        echo "
                a ";
        // line 32
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateFin", array()), "Y-m-d"), "html", null, true);
        echo " 
                il s'agit d'une competition ";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "type", array()), "html", null, true);
        echo " 
                qui contiendra  ";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nbreJoueur", array()), "html", null, true);
        echo " joueurs.             ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "imageEve", array()), "html", null, true);
        echo "   </p>
        </div>
    </div>
</div>

        
        <row>     
    <div style=\"display: table ; vertical-align: middle;\"> 
        ";
        // line 42
        $context["x"] =  -1;
        echo " 
        ";
        // line 43
        $context["y2"] = 0;
        // line 44
        echo "        ";
        $context["c"] = 0;
        // line 45
        echo "      ";
        $context["y"] =  -1;
        // line 46
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tour"]) ? $context["tour"] : $this->getContext($context, "tour")));
        foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
            // line 47
            echo "           ";
            $context["c"] = ((isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")) + 1);
            // line 48
            echo "            <div style=\"display: table-cell ; vertical-align: middle; padding-right: 30px\"><!--Création tour-->
              ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute($context["j"], "nbreMatch", array())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 50
                echo "                ";
                $context["x"] = ((isset($context["x"]) ? $context["x"] : $this->getContext($context, "x")) + 1);
                echo " <!--Compteur pour match-->
                ";
                // line 51
                $context["y"] = ((isset($context["y"]) ? $context["y"] : $this->getContext($context, "y")) + 2);
                echo " <!--Compteur pour matchHasJoueur-->              
               
                <div style=\"padding: 5px 5px 5px 5px; border-right: 1px solid #5e5e5e\"><!--Creation match-->
                  ";
                // line 54
                if ($this->getAttribute($this->getAttribute((isset($context["matchHasJoueur"]) ? $context["matchHasJoueur"] : null), (isset($context["y"]) ? $context["y"] : $this->getContext($context, "y")), array(), "array", false, true), "matchMatch", array(), "any", true, true)) {
                    // line 55
                    echo "                    ";
                    if (($this->getAttribute($this->getAttribute((isset($context["match"]) ? $context["match"] : $this->getContext($context, "match")), (isset($context["x"]) ? $context["x"] : $this->getContext($context, "x")), array(), "array"), "getidMatch", array()) == $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["matchHasJoueur"]) ? $context["matchHasJoueur"] : $this->getContext($context, "matchHasJoueur")), (isset($context["y"]) ? $context["y"] : $this->getContext($context, "y")), array(), "array"), "matchMatch", array()), "getIdMatch", array()))) {
                        // line 56
                        echo "                    <a href=\"#\"> <span class=\"label label-primary\" style=\"font-size: 15px;  \" > 
                        ";
                        // line 57
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["matchHasJoueur"]) ? $context["matchHasJoueur"] : $this->getContext($context, "matchHasJoueur")), (isset($context["y"]) ? $context["y"] : $this->getContext($context, "y")), array(), "array"), "joueurCin", array()), "nom", array()), "html", null, true);
                        echo " Vs ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["matchHasJoueur"]) ? $context["matchHasJoueur"] : $this->getContext($context, "matchHasJoueur")), (isset($context["y2"]) ? $context["y2"] : $this->getContext($context, "y2")), array(), "array"), "joueurCin", array()), "nom", array()), "html", null, true);
                        echo "
                    | ";
                        // line 58
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["match"]) ? $context["match"] : $this->getContext($context, "match")), (isset($context["x"]) ? $context["x"] : $this->getContext($context, "x")), array(), "array"), "dateMatch", array()), "Y-m-d"), "html", null, true);
                        echo " </a>
                    </span></div>
                    <br>
                    
                    ";
                    } else {
                        // line 63
                        echo "                  <a href=\"#\">  <span class=\"label label-primary\" style=\"font-size: 15px\" > En Attente
                    ";
                        // line 64
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["match"]) ? $context["match"] : $this->getContext($context, "match")), (isset($context["x"]) ? $context["x"] : $this->getContext($context, "x")), array(), "array"), "dateMatch", array()), "Y-m-d"), "html", null, true);
                        echo "
                    </span> </a> </div>
                    <br>          
                       
                    
                    ";
                    }
                    // line 70
                    echo "              ";
                } else {
                    // line 71
                    echo "                   <span class=\"label label-primary\" style=\"font-size: 15px\" > En Attente
                    ";
                    // line 72
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["match"]) ? $context["match"] : $this->getContext($context, "match")), (isset($context["x"]) ? $context["x"] : $this->getContext($context, "x")), array(), "array"), "dateMatch", array()), "Y-m-d"), "html", null, true);
                    echo "
                    </span></div>
                    <br>
                  ";
                }
                // line 76
                echo "                    ";
                $context["y2"] = ((isset($context["y2"]) ? $context["y2"] : $this->getContext($context, "y2")) + 2);
                // line 77
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            echo "            
        </div>\t
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "</div> 
";
    }

    // line 83
    public function block_first2($context, array $blocks = array())
    {
    }

    // line 84
    public function block_first3($context, array $blocks = array())
    {
    }

    // line 85
    public function block_first4($context, array $blocks = array())
    {
    }

    // line 86
    public function block_second1($context, array $blocks = array())
    {
        // line 88
        echo "</row>
            <img src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/l2.png"), "html", null, true);
        echo "\">  </img> 
            
";
    }

    // line 92
    public function block_third1($context, array $blocks = array())
    {
        // line 93
        echo "
";
    }

    // line 95
    public function block_third2($context, array $blocks = array())
    {
    }

    // line 96
    public function block_third3($context, array $blocks = array())
    {
    }

    // line 97
    public function block_third4($context, array $blocks = array())
    {
    }

    // line 98
    public function block_fourth1($context, array $blocks = array())
    {
    }

    // line 99
    public function block_fourth2($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "SquadFttBundle:Evenement:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  315 => 99,  310 => 98,  305 => 97,  300 => 96,  295 => 95,  290 => 93,  287 => 92,  280 => 89,  277 => 88,  274 => 86,  269 => 85,  264 => 84,  259 => 83,  254 => 81,  246 => 78,  240 => 77,  237 => 76,  230 => 72,  227 => 71,  224 => 70,  215 => 64,  212 => 63,  204 => 58,  198 => 57,  195 => 56,  192 => 55,  190 => 54,  184 => 51,  179 => 50,  175 => 49,  172 => 48,  169 => 47,  164 => 46,  161 => 45,  158 => 44,  156 => 43,  152 => 42,  139 => 34,  135 => 33,  131 => 32,  127 => 31,  121 => 30,  115 => 27,  107 => 21,  104 => 20,  96 => 16,  92 => 15,  88 => 14,  84 => 13,  80 => 12,  76 => 11,  72 => 10,  68 => 9,  64 => 8,  60 => 7,  56 => 6,  52 => 5,  49 => 4,  46 => 3,  40 => 2,  11 => 1,);
    }
}
/* {% extends 'SquadFttBundle::layout.html.twig' %}*/
/* {% block titre %}   {% endblock %}*/
/* {% block menu %}*/
/*     <ul class="nav menu">*/
/*         <li><a href="{{ path('accueil')}}"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Statistique</a></li>*/
/*         <li><a href="{{ path('actualite')}}"><svg class="glyph stroked landscape"><use xlink:href="#stroked-landscape"/></svg> Actualites</a></li>*/
/*         <li class="active" ><a href="{{ path('evenement')}}"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> Evenements</a></li>*/
/*         <li><a href="{{ path('joueur')}}"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg> Joueurs</a></li>*/
/*         <li><a href="{{ path('match')}}"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg> Matchs</a></li>*/
/*         <li><a href="{{ path('arbitre')}}"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg> Arbitres</a></li>*/
/*         <li><a href="{{ path('stade')}}"><svg class="glyph stroked location pin"><use xlink:href="#stroked-location-pin"/></svg> Stades</a></li>*/
/*         <li><a href="{{ path('club')}}"><svg class="glyph stroked home"><use xlink:href="#stroked-home"/></svg> Clubs</a></li>*/
/*         <li><a href="{{ path('concour')}}"><svg class="glyph stroked star"><use xlink:href="#stroked-star"></use></svg> Concours</a></li>*/
/*         <li><a href="{{ path('formation')}}"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg> Formations</a></li>*/
/*         <li><a href="{{ path('gestionDopage')}}"><svg class="glyph stroked eye"><use xlink:href="#stroked-eye"/></svg> Gestion Dopage</a></li>*/
/*         <li><a href="{{ path('user')}}"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg> Utilisateur</a></li>*/
/* */
/*     </ul>  */
/* {% endblock %}       */
/* {% block first1 %}*/
/* */
/* */
/* </div> */
/* <div>*/
/*     <div class="panel panel-primary">*/
/*         <div class="panel-heading">*/
/*             {{ entity.libelleEvenement }}*/
/*         </div>*/
/*         <div class="panel-body">  <!-- Affichage des donn�es  -->*/
/*             <p> {{ entity.libelleEvenement }} aura lieu a  {{ entity.site }} */
/*                 de {{ entity.dateDebut|date('Y-m-d') }}*/
/*                 a {{ entity.dateFin|date('Y-m-d') }} */
/*                 il s'agit d'une competition {{ entity.type }} */
/*                 qui contiendra  {{ entity.nbreJoueur }} joueurs.             {{ entity.imageEve }}   </p>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/*         */
/*         <row>     */
/*     <div style="display: table ; vertical-align: middle;"> */
/*         {% set x =  -1  %} */
/*         {% set y2=0 %}*/
/*         {% set c=0 %}*/
/*       {% set y =  -1  %}*/
/*         {% for j in  tour %}*/
/*            {% set c=c+1 %}*/
/*             <div style="display: table-cell ; vertical-align: middle; padding-right: 30px"><!--Création tour-->*/
/*               {% for i in  1..j.nbreMatch  %}*/
/*                 {%  set x = x+1 %} <!--Compteur pour match-->*/
/*                 {%  set y = y+2 %} <!--Compteur pour matchHasJoueur-->              */
/*                */
/*                 <div style="padding: 5px 5px 5px 5px; border-right: 1px solid #5e5e5e"><!--Creation match-->*/
/*                   {% if matchHasJoueur[y].matchMatch is defined %}*/
/*                     {% if match[x].getidMatch == matchHasJoueur[y].matchMatch.getIdMatch  %}*/
/*                     <a href="#"> <span class="label label-primary" style="font-size: 15px;  " > */
/*                         {{ matchHasJoueur[y].joueurCin.nom }} Vs {{ matchHasJoueur[y2].joueurCin.nom }}*/
/*                     | {{ match[x].dateMatch|date('Y-m-d') }} </a>*/
/*                     </span></div>*/
/*                     <br>*/
/*                     */
/*                     {% else %}*/
/*                   <a href="#">  <span class="label label-primary" style="font-size: 15px" > En Attente*/
/*                     {{ match[x].dateMatch|date('Y-m-d') }}*/
/*                     </span> </a> </div>*/
/*                     <br>          */
/*                        */
/*                     */
/*                     {% endif %}*/
/*               {% else %}*/
/*                    <span class="label label-primary" style="font-size: 15px" > En Attente*/
/*                     {{ match[x].dateMatch|date('Y-m-d') }}*/
/*                     </span></div>*/
/*                     <br>*/
/*                   {%endif%}*/
/*                     {% set y2=y2+2 %}*/
/*                 {% endfor %}*/
/*             */
/*         </div>	*/
/*     {% endfor %}*/
/* </div> */
/* {% endblock %}*/
/* {% block first2 %}{% endblock %}*/
/* {% block first3 %}{% endblock %}*/
/* {% block first4 %}{% endblock %}*/
/* {% block second1 -%}*/
/*  */
/* </row>*/
/*             <img src="{{ asset( 'uploads/l2.png') }}">  </img> */
/*             */
/* {% endblock %}*/
/* {% block third1 %}*/
/* */
/* {% endblock %}    */
/* {% block third2 %}{% endblock %}*/
/* {% block third3 %}{% endblock %}*/
/* {% block third4 %}{% endblock %}*/
/* {% block fourth1 %}{% endblock %}*/
/* {% block fourth2 %}{% endblock %}*/
