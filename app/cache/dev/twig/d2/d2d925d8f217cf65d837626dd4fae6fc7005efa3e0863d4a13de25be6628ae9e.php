<?php

/* SquadFttBundle:Sets:index.html.twig */
class __TwigTemplate_9e715e9ecf0023455ad3e41738c9e631c3bd860a61d14175bdc09102d42c95b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("SquadFttBundle::layout.html.twig", "SquadFttBundle:Sets:index.html.twig", 2);
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

    // line 3
    public function block_titre($context, array $blocks = array())
    {
        echo " Listes des Sets  ";
    }

    // line 4
    public function block_menu($context, array $blocks = array())
    {
        // line 5
        echo "    <ul class=\"nav menu\">
        <li><a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("accueil");
        echo "\"><svg class=\"glyph stroked dashboard-dial\"><use xlink:href=\"#stroked-dashboard-dial\"></use></svg> Statistique</a></li>
        <li><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("actualite");
        echo "\"><svg class=\"glyph stroked landscape\"><use xlink:href=\"#stroked-landscape\"/></svg> Actualites</a></li>
        <li><a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("evenement");
        echo "\"><svg class=\"glyph stroked calendar\"><use xlink:href=\"#stroked-calendar\"></use></svg> Evenements</a></li>
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("joueur");
        echo "\"><svg class=\"glyph stroked male user \"><use xlink:href=\"#stroked-male-user\"/></svg> Joueurs</a></li>
        <li class=\"active\" ><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("back_matchtennis");
        echo "\"><svg class=\"glyph stroked table\"><use xlink:href=\"#stroked-table\"></use></svg> Matchs</a></li>
        <li><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("arbitre");
        echo "\"><svg class=\"glyph stroked male user \"><use xlink:href=\"#stroked-male-user\"/></svg> Arbitres</a></li>
        <li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("stade");
        echo "\"><svg class=\"glyph stroked location pin\"><use xlink:href=\"#stroked-location-pin\"/></svg> Stades</a></li>
        <li><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("club");
        echo "\"><svg class=\"glyph stroked home\"><use xlink:href=\"#stroked-home\"/></svg> Clubs</a></li>
        <li><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("concour");
        echo "\"><svg class=\"glyph stroked star\"><use xlink:href=\"#stroked-star\"></use></svg> Concours</a></li>
        <li><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("formation");
        echo "\"><svg class=\"glyph stroked line-graph\"><use xlink:href=\"#stroked-line-graph\"></use></svg> Formations</a></li>
        <li><a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("gestionDopage");
        echo "\"><svg class=\"glyph stroked eye\"><use xlink:href=\"#stroked-eye\"/></svg> Gestion Dopage</a></li>
    </ul>  
";
    }

    // line 19
    public function block_first1($context, array $blocks = array())
    {
        // line 20
        echo "<div class=\"col-lg-12\">
        <div class=\"panel panel-default\">
            <div class=\"panel-body\">
                <table class=\"table table-striped\" data-toggle=\"table\" data-url=\"tables/data1.json\"  data-show-refresh=\"true\" data-show-toggle=\"true\" data-show-columns=\"true\" data-search=\"true\" data-select-item-name=\"toolbar1\" data-pagination=\"true\" data-sort-name=\"name\" data-sort-order=\"desc\">
                    <thead>
                        <tr class=\"info\">
                            <th>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["mat"]) ? $context["mat"] : $this->getContext($context, "mat")), "joueurs", array()), 0, array(), "array"), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["mat"]) ? $context["mat"] : $this->getContext($context, "mat")), "joueurs", array()), 0, array(), "array"), "nom", array()), "html", null, true);
        echo "</th>
                            <th>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["mat"]) ? $context["mat"] : $this->getContext($context, "mat")), "joueurs", array()), 1, array(), "array"), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["mat"]) ? $context["mat"] : $this->getContext($context, "mat")), "joueurs", array()), 1, array(), "array"), "prenom", array()), "html", null, true);
        echo "</th>
                            <th>Modifier</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 33
            echo "                            <tr>
                                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "scoreJ1", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "scoreJ2", array()), "html", null, true);
            echo "</td>
                                <td>
                                    <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("back_sets_edit", array("id" => $this->getAttribute($context["entity"], "idSet", array())), array("match" => $this->getAttribute($this->getAttribute($context["entity"], "matchMatch", array()), "idMatch", array()))), "html", null, true);
            echo "\" class=\"btn icon-btn btn-warning\">Modifier Score</a>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "                    </tbody>
                </table>
                <a href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("back_sets_new", array("match" => $this->getAttribute((isset($context["mat"]) ? $context["mat"] : $this->getContext($context, "mat")), "idMatch", array()))), "html", null, true);
        echo "\"  class=\"btn icon-btn btn-success\">
                    <span class=\"glyphicon btn-glyphicon glyphicon-plus img-circle text-success\"></span>
                    Ajouter Un Set
                </a>&nbsp;
                <a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("back_matchtennis");
        echo "\"  class=\"btn icon-btn btn-info\">
                  
                    Retour au Matchs
                </a>
            </div>
        </div>
    </div>
";
    }

    // line 55
    public function block_first2($context, array $blocks = array())
    {
    }

    // line 56
    public function block_first3($context, array $blocks = array())
    {
    }

    // line 57
    public function block_first4($context, array $blocks = array())
    {
    }

    // line 58
    public function block_second1($context, array $blocks = array())
    {
    }

    // line 59
    public function block_third1($context, array $blocks = array())
    {
    }

    // line 60
    public function block_third2($context, array $blocks = array())
    {
    }

    // line 61
    public function block_third3($context, array $blocks = array())
    {
    }

    // line 62
    public function block_third4($context, array $blocks = array())
    {
    }

    // line 63
    public function block_fourth1($context, array $blocks = array())
    {
    }

    // line 64
    public function block_fourth2($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "SquadFttBundle:Sets:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 64,  215 => 63,  210 => 62,  205 => 61,  200 => 60,  195 => 59,  190 => 58,  185 => 57,  180 => 56,  175 => 55,  163 => 47,  156 => 43,  152 => 41,  142 => 37,  137 => 35,  133 => 34,  130 => 33,  126 => 32,  116 => 27,  110 => 26,  102 => 20,  99 => 19,  92 => 16,  88 => 15,  84 => 14,  80 => 13,  76 => 12,  72 => 11,  68 => 10,  64 => 9,  60 => 8,  56 => 7,  52 => 6,  49 => 5,  46 => 4,  40 => 3,  11 => 2,);
    }
}
/* */
/* {% extends 'SquadFttBundle::layout.html.twig' %}*/
/* {% block titre %} Listes des Sets  {% endblock %}*/
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
/*                         <tr class="info">*/
/*                             <th>{{ mat.joueurs[0].nom }} {{ mat.joueurs[0].nom }}</th>*/
/*                             <th>{{ mat.joueurs[1].nom }} {{ mat.joueurs[1].prenom }}</th>*/
/*                             <th>Modifier</th>*/
/*                         </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/*                         {% for entity in entities %}*/
/*                             <tr>*/
/*                                 <td>{{ entity.scoreJ1 }}</td>*/
/*                                 <td>{{ entity.scoreJ2 }}</td>*/
/*                                 <td>*/
/*                                     <a href="{{ path('back_sets_edit', { 'id': entity.idSet } , {'match':entity.matchMatch.idMatch}) }}" class="btn icon-btn btn-warning">Modifier Score</a>*/
/*                                 </td>*/
/*                             </tr>*/
/*                         {% endfor %}*/
/*                     </tbody>*/
/*                 </table>*/
/*                 <a href="{{ path('back_sets_new', {'match':mat.idMatch}) }}"  class="btn icon-btn btn-success">*/
/*                     <span class="glyphicon btn-glyphicon glyphicon-plus img-circle text-success"></span>*/
/*                     Ajouter Un Set*/
/*                 </a>&nbsp;*/
/*                 <a href="{{ path('back_matchtennis') }}"  class="btn icon-btn btn-info">*/
/*                   */
/*                     Retour au Matchs*/
/*                 </a>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
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
