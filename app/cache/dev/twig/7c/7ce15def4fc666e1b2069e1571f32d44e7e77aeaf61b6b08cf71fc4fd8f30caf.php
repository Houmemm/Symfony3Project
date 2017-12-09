<?php

/* SquadFttBundle:Joueur:index.html.twig */
class __TwigTemplate_10ea5c6545d8796efd9f8d08bf87c26834559d99c447b8487232723ff58ee086 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SquadFttBundle::layout.html.twig", "SquadFttBundle:Joueur:index.html.twig", 1);
        $this->blocks = array(
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

    protected function doGetParent(array $context)
    {
        return "SquadFttBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_menu($context, array $blocks = array())
    {
        // line 3
        echo "        <ul class=\"nav menu\">
            <li><a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("accueil");
        echo "\"><svg class=\"glyph stroked dashboard-dial\"><use xlink:href=\"#stroked-dashboard-dial\"></use></svg> Statistique</a></li>
            <li><a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("actualite");
        echo "\"><svg class=\"glyph stroked landscape\"><use xlink:href=\"#stroked-landscape\"/></svg> Actualites</a></li>
            <li><a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("evenement");
        echo "\"><svg class=\"glyph stroked calendar\"><use xlink:href=\"#stroked-calendar\"></use></svg> Evenements</a></li>
            <li class=\"active\"><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("joueur");
        echo "\"><svg class=\"glyph stroked male user \"><use xlink:href=\"#stroked-male-user\"/></svg> Joueurs</a></li>
            <li><a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("match");
        echo "\"><svg class=\"glyph stroked table\"><use xlink:href=\"#stroked-table\"></use></svg> Matchs</a></li>
            <li><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("arbitre");
        echo "\"><svg class=\"glyph stroked male user \"><use xlink:href=\"#stroked-male-user\"/></svg> Arbitres</a></li>
            <li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("stade");
        echo "\"><svg class=\"glyph stroked location pin\"><use xlink:href=\"#stroked-location-pin\"/></svg> Stades</a></li>
            <li><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("club");
        echo "\"><svg class=\"glyph stroked home\"><use xlink:href=\"#stroked-home\"/></svg> Clubs</a></li>
            <li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("concour");
        echo "\"><svg class=\"glyph stroked star\"><use xlink:href=\"#stroked-star\"></use></svg> Concours</a></li>
            <li><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("formation");
        echo "\"><svg class=\"glyph stroked line-graph\"><use xlink:href=\"#stroked-line-graph\"></use></svg> Formations</a></li>
            <li><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("gestionDopage");
        echo "\"><svg class=\"glyph stroked eye\"><use xlink:href=\"#stroked-eye\"/></svg> Gestion Dopage</a></li>
            <li><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("articles");
        echo "\"><svg class=\"glyph stroked table\"><use xlink:href=\"#stroked-bag\"></use></svg> Articles</a></li>
         </ul> 
";
    }

    // line 18
    public function block_titre($context, array $blocks = array())
    {
        echo "Liste des joueurs  ";
    }

    // line 20
    public function block_first1($context, array $blocks = array())
    {
        // line 21
        echo "<div class=\"col-lg-12\">
            <div class=\"panel panel-default\">
                <div class=\"panel-body\">

        <table class=\"table table-striped\" data-toggle=\"table\" data-url=\"tables/data1.json\"  data-show-refresh=\"true\" data-show-toggle=\"true\" data-show-columns=\"true\" data-search=\"true\" data-select-item-name=\"toolbar1\" data-pagination=\"true\" data-sort-name=\"name\" data-sort-order=\"desc\">

        <thead> 
            <tr class=\"info\">
                <th>CIN</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Date de naissance</th>
                <th>Categorie</th>
                <th>Nationalite</th> 
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 40
            echo "            <tr>
                <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "cinJoueur", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "prenom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 44
            if ($this->getAttribute($context["entity"], "dateDeNaissance", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateDeNaissance", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "categorie", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nationaliterJoueur", array()), "html", null, true);
            echo "</td>
                
                <td>

                        <a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("joueur_show", array("cin" => $this->getAttribute($context["entity"], "cinJoueur", array()))), "html", null, true);
            echo "\" class=\"label label-success\"> Afficher </a>
                        &nbsp;&nbsp;&nbsp;
                        <a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("joueur_edit", array("cin" => $this->getAttribute($context["entity"], "cinJoueur", array()))), "html", null, true);
            echo "\" class=\"label label-warning\"> Modifier </a>
                        &nbsp;&nbsp;&nbsp;
                        <a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("joueur_delete", array("cin" => $this->getAttribute($context["entity"], "cinJoueur", array()))), "html", null, true);
            echo "\" class=\"label label-danger\"> Supprimer </a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "        </tbody>
    </table>
    <a href=\"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("joueur_new");
        echo "\" class=\"btn btn-primary\"> Ajouter un joueur </a>
    ";
    }

    // line 62
    public function block_first2($context, array $blocks = array())
    {
    }

    // line 63
    public function block_first3($context, array $blocks = array())
    {
    }

    // line 64
    public function block_first4($context, array $blocks = array())
    {
    }

    // line 65
    public function block_second1($context, array $blocks = array())
    {
    }

    // line 66
    public function block_third1($context, array $blocks = array())
    {
    }

    // line 67
    public function block_third2($context, array $blocks = array())
    {
    }

    // line 68
    public function block_third3($context, array $blocks = array())
    {
    }

    // line 69
    public function block_third4($context, array $blocks = array())
    {
    }

    // line 70
    public function block_fourth1($context, array $blocks = array())
    {
    }

    // line 71
    public function block_fourth2($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "SquadFttBundle:Joueur:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 71,  232 => 70,  227 => 69,  222 => 68,  217 => 67,  212 => 66,  207 => 65,  202 => 64,  197 => 63,  192 => 62,  186 => 60,  182 => 58,  172 => 54,  167 => 52,  162 => 50,  155 => 46,  151 => 45,  145 => 44,  141 => 43,  137 => 42,  133 => 41,  130 => 40,  126 => 39,  106 => 21,  103 => 20,  97 => 18,  90 => 15,  86 => 14,  82 => 13,  78 => 12,  74 => 11,  70 => 10,  66 => 9,  62 => 8,  58 => 7,  54 => 6,  50 => 5,  46 => 4,  43 => 3,  40 => 2,  11 => 1,);
    }
}
/* {% extends 'SquadFttBundle::layout.html.twig' %}*/
/* {% block menu %}*/
/*         <ul class="nav menu">*/
/*             <li><a href="{{ path('accueil')}}"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Statistique</a></li>*/
/*             <li><a href="{{ path('actualite')}}"><svg class="glyph stroked landscape"><use xlink:href="#stroked-landscape"/></svg> Actualites</a></li>*/
/*             <li><a href="{{ path('evenement')}}"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> Evenements</a></li>*/
/*             <li class="active"><a href="{{ path('joueur')}}"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg> Joueurs</a></li>*/
/*             <li><a href="{{ path('match')}}"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg> Matchs</a></li>*/
/*             <li><a href="{{ path('arbitre')}}"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg> Arbitres</a></li>*/
/*             <li><a href="{{ path('stade')}}"><svg class="glyph stroked location pin"><use xlink:href="#stroked-location-pin"/></svg> Stades</a></li>*/
/*             <li><a href="{{ path('club')}}"><svg class="glyph stroked home"><use xlink:href="#stroked-home"/></svg> Clubs</a></li>*/
/*             <li><a href="{{ path('concour')}}"><svg class="glyph stroked star"><use xlink:href="#stroked-star"></use></svg> Concours</a></li>*/
/*             <li><a href="{{ path('formation')}}"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg> Formations</a></li>*/
/*             <li><a href="{{ path('gestionDopage')}}"><svg class="glyph stroked eye"><use xlink:href="#stroked-eye"/></svg> Gestion Dopage</a></li>*/
/*             <li><a href="{{ path('articles')}}"><svg class="glyph stroked table"><use xlink:href="#stroked-bag"></use></svg> Articles</a></li>*/
/*          </ul> */
/* {% endblock %}*/
/* {% block titre %}Liste des joueurs  {% endblock %}*/
/* */
/* {% block first1 -%}*/
/*     <div class="col-lg-12">*/
/*             <div class="panel panel-default">*/
/*                 <div class="panel-body">*/
/* */
/*         <table class="table table-striped" data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">*/
/* */
/*         <thead> */
/*             <tr class="info">*/
/*                 <th>CIN</th>*/
/*                 <th>Nom</th>*/
/*                 <th>Prenom</th>*/
/*                 <th>Date de naissance</th>*/
/*                 <th>Categorie</th>*/
/*                 <th>Nationalite</th> */
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for entity in entities %}*/
/*             <tr>*/
/*                 <td>{{ entity.cinJoueur }}</td>*/
/*                 <td>{{ entity.nom }}</td>*/
/*                 <td>{{ entity.prenom }}</td>*/
/*                 <td>{% if entity.dateDeNaissance %}{{ entity.dateDeNaissance|date('Y-m-d') }}{% endif %}</td>*/
/*                 <td>{{ entity.categorie }}</td>*/
/*                 <td>{{ entity.nationaliterJoueur }}</td>*/
/*                 */
/*                 <td>*/
/* */
/*                         <a href="{{ path('joueur_show',{ 'cin': entity.cinJoueur }) }}" class="label label-success"> Afficher </a>*/
/*                         &nbsp;&nbsp;&nbsp;*/
/*                         <a href="{{ path('joueur_edit',{ 'cin': entity.cinJoueur }) }}" class="label label-warning"> Modifier </a>*/
/*                         &nbsp;&nbsp;&nbsp;*/
/*                         <a href="{{ path('joueur_delete',{ 'cin': entity.cinJoueur }) }}" class="label label-danger"> Supprimer </a>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/*     <a href="{{ path('joueur_new') }}" class="btn btn-primary"> Ajouter un joueur </a>*/
/*     {% endblock %}*/
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
