<?php

/* SquadFttBundle:Sanction:index.html.twig */
class __TwigTemplate_b56a312f15a4861efdf6457ca71670a7c6700b25981069d3df4df6f54ca7479b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SquadFttBundle::layout.html.twig", "SquadFttBundle:Sanction:index.html.twig", 1);
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
        echo " Listes des sanctions ";
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
            <li><a href=\"";
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
            <li ><a href=\"";
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
            <li class=\"active\"><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("sanction");
        echo "\"><svg class=\"glyph stroked cancel\"><use xlink:href=\"#stroked-cancel\"/></svg> Sanctions</a></li>
            <li><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("formation");
        echo "\"><svg class=\"glyph stroked line-graph\"><use xlink:href=\"#stroked-line-graph\"></use></svg> Formations</a></li>
            <li ><a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("rapport");
        echo "\"><svg class=\"glyph stroked eye\"><use xlink:href=\"#stroked-eye\"/></svg> Gestion Dopage</a></li>
         </ul>  
";
    }

    // line 19
    public function block_first1($context, array $blocks = array())
    {
        // line 22
        echo "<div class=\"col-lg-12\">
            <div class=\"panel panel-default\">
                <div class=\"panel-body\">
                   

    <table class=\"table table-striped\" data-toggle=\"table\" data-url=\"tables/data1.json\"  data-show-refresh=\"true\" data-show-toggle=\"true\" data-show-columns=\"true\" data-search=\"true\" data-select-item-name=\"toolbar1\" data-pagination=\"true\" data-sort-name=\"name\" data-sort-order=\"desc\">
        

    
        <thead>
            <tr class=\"info\" style=\"font-weight:bold; font-style:italic\">
                <th>Joueur</th>
                
                <th>Date debut</th>
                <th>La duree</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 43
            echo "            <tr>
                <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "JoueurCinJoueur", array()), "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "JoueurCinJoueur", array()), "prenom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 45
            if ($this->getAttribute($context["entity"], "dateDebutSanction", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateDebutSanction", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "typeSanction", array()), "html", null, true);
            echo " ans</td>
                
                <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "descriptionSanction", array()), "html", null, true);
            echo "</td>
                <td>
                <ul  class=\"breadcrumb\">
                    <li>
                        <a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sanction_show", array("id" => $this->getAttribute($context["entity"], "idSanction", array()))), "html", null, true);
            echo "\"><svg class=\"glyph stroked eye\"><use xmlns:xlink=\"http://www.w3.org/1999/xlink\" xlink:href=\"#stroked-eye\"></use></svg></a>
                    </li>
                    <li>   <a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sanction_edit", array("id" => $this->getAttribute($context["entity"], "idSanction", array()))), "html", null, true);
            echo "\"><svg class=\"glyph stroked pencil\"   ><use xmlns:xlink=\"http://www.w3.org/1999/xlink\" xlink:href=\"#stroked-pencil\"></use></svg></a>
                    </li></ul>    
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "        </tbody>
    </table>

       
            <a href=\"";
        // line 63
        echo $this->env->getExtension('routing')->getPath("sanction_joueur");
        echo "\" class=\"btn btn-primary\">
                Sanctionner un joueur
            </a>
        
    ";
    }

    // line 68
    public function block_first2($context, array $blocks = array())
    {
    }

    // line 69
    public function block_first3($context, array $blocks = array())
    {
    }

    // line 70
    public function block_first4($context, array $blocks = array())
    {
    }

    // line 71
    public function block_second1($context, array $blocks = array())
    {
    }

    // line 72
    public function block_third1($context, array $blocks = array())
    {
    }

    // line 73
    public function block_third2($context, array $blocks = array())
    {
    }

    // line 74
    public function block_third3($context, array $blocks = array())
    {
    }

    // line 75
    public function block_third4($context, array $blocks = array())
    {
    }

    // line 76
    public function block_fourth1($context, array $blocks = array())
    {
    }

    // line 77
    public function block_fourth2($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "SquadFttBundle:Sanction:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 77,  230 => 76,  225 => 75,  220 => 74,  215 => 73,  210 => 72,  205 => 71,  200 => 70,  195 => 69,  190 => 68,  181 => 63,  175 => 59,  164 => 54,  159 => 52,  152 => 48,  147 => 46,  141 => 45,  135 => 44,  132 => 43,  128 => 42,  106 => 22,  103 => 19,  96 => 16,  92 => 15,  88 => 14,  84 => 13,  80 => 12,  76 => 11,  72 => 10,  68 => 9,  64 => 8,  60 => 7,  56 => 6,  52 => 5,  49 => 4,  46 => 3,  40 => 2,  11 => 1,);
    }
}
/* {% extends 'SquadFttBundle::layout.html.twig' %}*/
/* {% block titre %} Listes des sanctions {% endblock %}*/
/* {% block menu %}*/
/* <ul class="nav menu">*/
/*             <li><a href="{{ path('accueil')}}"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Statistique</a></li>*/
/*             <li><a href="{{ path('actualite')}}"><svg class="glyph stroked landscape"><use xlink:href="#stroked-landscape"/></svg> Actualites</a></li>*/
/*             <li><a href="{{ path('evenement')}}"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> Evenements</a></li>*/
/*             <li><a href="{{ path('joueur')}}"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg> Joueurs</a></li>*/
/*             <li><a href="{{ path('match')}}"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg> Matchs</a></li>*/
/*             <li><a href="{{ path('arbitre')}}"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg> Arbitres</a></li>*/
/*             <li ><a href="{{ path('stade')}}"><svg class="glyph stroked location pin"><use xlink:href="#stroked-location-pin"/></svg> Stades</a></li>*/
/*             <li><a href="{{ path('club')}}"><svg class="glyph stroked home"><use xlink:href="#stroked-home"/></svg> Clubs</a></li>*/
/*             <li><a href="{{ path('concour')}}"><svg class="glyph stroked star"><use xlink:href="#stroked-star"></use></svg> Concours</a></li>*/
/*             <li class="active"><a href="{{ path('sanction')}}"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"/></svg> Sanctions</a></li>*/
/*             <li><a href="{{ path('formation')}}"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg> Formations</a></li>*/
/*             <li ><a href="{{ path('rapport')}}"><svg class="glyph stroked eye"><use xlink:href="#stroked-eye"/></svg> Gestion Dopage</a></li>*/
/*          </ul>  */
/* {% endblock %}    */
/* {% block first1 -%}*/
/*     */
/*    */
/*    <div class="col-lg-12">*/
/*             <div class="panel panel-default">*/
/*                 <div class="panel-body">*/
/*                    */
/* */
/*     <table class="table table-striped" data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">*/
/*         */
/* */
/*     */
/*         <thead>*/
/*             <tr class="info" style="font-weight:bold; font-style:italic">*/
/*                 <th>Joueur</th>*/
/*                 */
/*                 <th>Date debut</th>*/
/*                 <th>La duree</th>*/
/*                 <th>Description</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for entity in entities %}*/
/*             <tr>*/
/*                 <td>{{ entity.JoueurCinJoueur.nom }} {{ entity.JoueurCinJoueur.prenom }}</td>*/
/*                 <td>{% if entity.dateDebutSanction %}{{ entity.dateDebutSanction|date('Y-m-d') }}{% endif %}</td>*/
/*                 <td>{{ entity.typeSanction }} ans</td>*/
/*                 */
/*                 <td>{{ entity.descriptionSanction }}</td>*/
/*                 <td>*/
/*                 <ul  class="breadcrumb">*/
/*                     <li>*/
/*                         <a href="{{ path('sanction_show', { 'id': entity.idSanction }) }}"><svg class="glyph stroked eye"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#stroked-eye"></use></svg></a>*/
/*                     </li>*/
/*                     <li>   <a href="{{ path('sanction_edit', { 'id': entity.idSanction }) }}"><svg class="glyph stroked pencil"   ><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#stroked-pencil"></use></svg></a>*/
/*                     </li></ul>    */
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*        */
/*             <a href="{{ path('sanction_joueur') }}" class="btn btn-primary">*/
/*                 Sanctionner un joueur*/
/*             </a>*/
/*         */
/*     {% endblock %}*/
/*     {% block first2 %}{% endblock %}    */
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
/* */
