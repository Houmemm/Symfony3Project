<?php

/* SquadFttBundle:Matchtennis:index.html.twig */
class __TwigTemplate_f94e35f8aca78a249327f32568ead1a062e7bc91ea000b974379c084a4db2748 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SquadFttBundle::layout.html.twig", "SquadFttBundle:Matchtennis:index.html.twig", 1);
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
        echo " Listes des Matchs  ";
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
        <li><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("evenement");
        echo "\"><svg class=\"glyph stroked calendar\"><use xlink:href=\"#stroked-calendar\"></use></svg> Evenements</a></li>
        <li><a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("joueur");
        echo "\"><svg class=\"glyph stroked male user \"><use xlink:href=\"#stroked-male-user\"/></svg> Joueurs</a></li>
        <li class=\"active\" ><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("back_matchtennis");
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
    </ul>  
";
    }

    // line 18
    public function block_first1($context, array $blocks = array())
    {
        // line 19
        echo "<div class=\"col-lg-12\">
        <div class=\"panel panel-default\">
            <div class=\"panel-body\">
                <table class=\"table table-striped\" data-toggle=\"table\" data-url=\"tables/data1.json\"  data-show-refresh=\"true\" data-show-toggle=\"true\" data-show-columns=\"true\" data-search=\"true\" data-select-item-name=\"toolbar1\" data-pagination=\"true\" data-sort-name=\"name\" data-sort-order=\"desc\">
                    <thead>
                        
                            <tr class=\"info\">
                            <th>Date match</th>
                            <th>Valeur en point</th>
                            <th>Stade</th>
                            <th>Arbitre</th>
                            <th>Joueurs</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 36
            echo "                            <tr>
                                <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateMatch", array()), "d/m/y"), "html", null, true);
            echo "</td>
                                <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "valeurEnPoint", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "stadeStade", array()), "libelleStade", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "userUser", array()), "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "userUser", array()), "prenom", array()), "html", null, true);
            echo "</td>
                                <td>
                                    ";
            // line 42
            if ($this->getAttribute($context["entity"], "joueurs", array())) {
                // line 43
                echo "                                        ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["entity"], "joueurs", array()), 0, array(), "array"), "nom", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["entity"], "joueurs", array()), 0, array(), "array"), "prenom", array()), "html", null, true);
                echo " VS ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["entity"], "joueurs", array()), 1, array(), "array"), "nom", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["entity"], "joueurs", array()), 1, array(), "array"), "prenom", array()), "html", null, true);
                echo "

                                        ";
                // line 45
                if ((twig_length_filter($this->env, $this->getAttribute($context["entity"], "joueurs", array())) > 3)) {
                    echo "<br>
                                            ";
                    // line 46
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["entity"], "joueurs", array()), 2, array(), "array"), "nom", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["entity"], "joueurs", array()), 2, array(), "array"), "prenom", array()), "html", null, true);
                    echo " VS ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["entity"], "joueurs", array()), 3, array(), "array"), "nom", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["entity"], "joueurs", array()), 3, array(), "array"), "prenom", array()), "html", null, true);
                    echo "
                                        ";
                }
                // line 48
                echo "                                    ";
            }
            // line 49
            echo "                                </td>
                                <td>
                       
                                        
                                            <a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("back_matchtennis_show", array("id" => $this->getAttribute($context["entity"], "idMatch", array()))), "html", null, true);
            echo "\"  class=\"btn icon-btn btn-success\">show</a>
                                        
                                        
                                            <a href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("back_matchtennis_edit", array("id" => $this->getAttribute($context["entity"], "idMatch", array()))), "html", null, true);
            echo "\" class=\"btn icon-btn btn-warning\">edit</a>
                                        
                                        
                                            <a href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("back_sets", array("match" => $this->getAttribute($context["entity"], "idMatch", array()))), "html", null, true);
            echo "\" class=\"btn icon-btn btn-primary\">Sets</a>
                                        
                                        
                                            <a href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("back_matchhasjoueur", array("match" => $this->getAttribute($context["entity"], "idMatch", array()))), "html", null, true);
            echo "\" class=\"btn icon-btn btn-info\">Joueurs</a>
                                        
         
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "                    </tbody>
                </table>
                    <a href=\"";
        // line 70
        echo $this->env->getExtension('routing')->getPath("back_matchtennis_new");
        echo "\" class=\"btn icon-btn btn-success\" >
                <span class=\"glyphicon btn-glyphicon glyphicon-plus img-circle text-success\"></span>
                Ajouter Un Match
            </a>
            </div>
        </div>
    </div>
   
            
        
";
    }

    // line 81
    public function block_first2($context, array $blocks = array())
    {
    }

    // line 82
    public function block_first3($context, array $blocks = array())
    {
    }

    // line 83
    public function block_first4($context, array $blocks = array())
    {
    }

    // line 84
    public function block_second1($context, array $blocks = array())
    {
    }

    // line 85
    public function block_third1($context, array $blocks = array())
    {
    }

    // line 86
    public function block_third2($context, array $blocks = array())
    {
    }

    // line 87
    public function block_third3($context, array $blocks = array())
    {
    }

    // line 88
    public function block_third4($context, array $blocks = array())
    {
    }

    // line 89
    public function block_fourth1($context, array $blocks = array())
    {
    }

    // line 90
    public function block_fourth2($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "SquadFttBundle:Matchtennis:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  278 => 90,  273 => 89,  268 => 88,  263 => 87,  258 => 86,  253 => 85,  248 => 84,  243 => 83,  238 => 82,  233 => 81,  218 => 70,  214 => 68,  202 => 62,  196 => 59,  190 => 56,  184 => 53,  178 => 49,  175 => 48,  164 => 46,  160 => 45,  148 => 43,  146 => 42,  139 => 40,  135 => 39,  131 => 38,  127 => 37,  124 => 36,  120 => 35,  102 => 19,  99 => 18,  92 => 15,  88 => 14,  84 => 13,  80 => 12,  76 => 11,  72 => 10,  68 => 9,  64 => 8,  60 => 7,  56 => 6,  52 => 5,  49 => 4,  46 => 3,  40 => 2,  11 => 1,);
    }
}
/* {% extends 'SquadFttBundle::layout.html.twig' %}*/
/* {% block titre %} Listes des Matchs  {% endblock %}*/
/* {% block menu %}*/
/*     <ul class="nav menu">*/
/*         <li><a href="{{ path('accueil')}}"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Statistique</a></li>*/
/*         <li><a href="{{ path('actualite')}}"><svg class="glyph stroked landscape"><use xlink:href="#stroked-landscape"/></svg> Actualites</a></li>*/
/*         <li><a href="{{ path('evenement')}}"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> Evenements</a></li>*/
/*         <li><a href="{{ path('joueur')}}"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg> Joueurs</a></li>*/
/*         <li class="active" ><a href="{{ path('back_matchtennis')}}"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg> Matchs</a></li>*/
/*         <li><a href="{{ path('arbitre')}}"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg> Arbitres</a></li>*/
/*         <li><a href="{{ path('stade')}}"><svg class="glyph stroked location pin"><use xlink:href="#stroked-location-pin"/></svg> Stades</a></li>*/
/*         <li><a href="{{ path('club')}}"><svg class="glyph stroked home"><use xlink:href="#stroked-home"/></svg> Clubs</a></li>*/
/*         <li><a href="{{ path('concour')}}"><svg class="glyph stroked star"><use xlink:href="#stroked-star"></use></svg> Concours</a></li>*/
/*         <li><a href="{{ path('formation')}}"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg> Formations</a></li>*/
/*         <li><a href="{{ path('gestionDopage')}}"><svg class="glyph stroked eye"><use xlink:href="#stroked-eye"/></svg> Gestion Dopage</a></li>*/
/*     </ul>  */
/* {% endblock %}    */
/* {% block first1 -%}*/
/*     <div class="col-lg-12">*/
/*         <div class="panel panel-default">*/
/*             <div class="panel-body">*/
/*                 <table class="table table-striped" data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">*/
/*                     <thead>*/
/*                         */
/*                             <tr class="info">*/
/*                             <th>Date match</th>*/
/*                             <th>Valeur en point</th>*/
/*                             <th>Stade</th>*/
/*                             <th>Arbitre</th>*/
/*                             <th>Joueurs</th>*/
/*                             <th>Actions</th>*/
/*                         </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/*                         {% for entity in entities %}*/
/*                             <tr>*/
/*                                 <td>{{ entity.dateMatch|date('d/m/y') }}</td>*/
/*                                 <td>{{ entity.valeurEnPoint }}</td>*/
/*                                 <td>{{entity.stadeStade.libelleStade}}</td>*/
/*                                 <td>{{entity.userUser.nom}} {{entity.userUser.prenom}}</td>*/
/*                                 <td>*/
/*                                     {% if entity.joueurs %}*/
/*                                         {{entity.joueurs[0].nom}} {{entity.joueurs[0].prenom}} VS {{entity.joueurs[1].nom}} {{entity.joueurs[1].prenom}}*/
/* */
/*                                         {% if entity.joueurs|length>3%}<br>*/
/*                                             {{entity.joueurs[2].nom}} {{entity.joueurs[2].prenom}} VS {{entity.joueurs[3].nom}} {{entity.joueurs[3].prenom}}*/
/*                                         {% endif %}*/
/*                                     {% endif %}*/
/*                                 </td>*/
/*                                 <td>*/
/*                        */
/*                                         */
/*                                             <a href="{{ path('back_matchtennis_show', { 'id': entity.idMatch }) }}"  class="btn icon-btn btn-success">show</a>*/
/*                                         */
/*                                         */
/*                                             <a href="{{ path('back_matchtennis_edit', { 'id': entity.idMatch }) }}" class="btn icon-btn btn-warning">edit</a>*/
/*                                         */
/*                                         */
/*                                             <a href="{{ path('back_sets', { 'match': entity.idMatch }) }}" class="btn icon-btn btn-primary">Sets</a>*/
/*                                         */
/*                                         */
/*                                             <a href="{{ path('back_matchhasjoueur', { 'match': entity.idMatch }) }}" class="btn icon-btn btn-info">Joueurs</a>*/
/*                                         */
/*          */
/*                                 </td>*/
/*                             </tr>*/
/*                         {% endfor %}*/
/*                     </tbody>*/
/*                 </table>*/
/*                     <a href="{{ path('back_matchtennis_new') }}" class="btn icon-btn btn-success" >*/
/*                 <span class="glyphicon btn-glyphicon glyphicon-plus img-circle text-success"></span>*/
/*                 Ajouter Un Match*/
/*             </a>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*    */
/*             */
/*         */
/* {% endblock %}*/
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
