<?php

/* SquadFttBundle:Formation:index.html.twig */
class __TwigTemplate_b4fcdfd047da884bcf72df5ea8147f8a41585ff61c71beb10ccdd7c3579b9a31 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SquadFttBundle::layout.html.twig", "SquadFttBundle:Formation:index.html.twig", 1);
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
        echo " Listes des formations  ";
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
            <li class=\"active\" ><a href=\"";
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
        // line 20
        echo "<div class=\"col-lg-12\">
            <div class=\"panel panel-default\">
                <div class=\"panel-body\">
                   

    <table data-toggle=\"table\" data-url=\"tables/data1.json\"  data-show-refresh=\"true\" data-show-toggle=\"true\" data-show-columns=\"true\" data-search=\"true\" data-select-item-name=\"toolbar1\"  data-sort-name=\"name\" data-sort-order=\"desc\">
        
        <thead>
            <tr>
                <th>Id formation</th>
                <th>Libelle</th>
                <th>grade</th>
                <th>dateDebutFormation</th>
                <th>dateFinFormation</th>
                <th>fraisFormation</th>
                <th>Actions</a>
                
          
            </tr>
        </thead>
        <tbody>
        ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 42
            echo "            <tr>
                <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "idFormation", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "libelleFormation", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "grade", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 46
            if ($this->getAttribute($context["entity"], "dateDebutFormation", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateDebutFormation", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 47
            if ($this->getAttribute($context["entity"], "dateFinFormation", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateFinFormation", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "fraisFormation", array()), "html", null, true);
            echo "</td>
                
                <td>
                
                        <a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("formation_show", array("idFormation" => $this->getAttribute($context["entity"], "idFormation", array()))), "html", null, true);
            echo "\" class=\"label label-success btn-md\">Afficher</a>
                    
                        <a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("formation_edit", array("idFormation" => $this->getAttribute($context["entity"], "idFormation", array()))), "html", null, true);
            echo "\" class=\"label label-warning btn-md\">Modifier</a>
                    
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
        // line 61
        echo $this->env->getExtension('routing')->getPath("formation_new");
        echo "\" class=\"btn btn-primary\"> Ajouter une formation </a>
    ";
    }

    // line 63
    public function block_first2($context, array $blocks = array())
    {
    }

    // line 64
    public function block_first3($context, array $blocks = array())
    {
    }

    // line 65
    public function block_first4($context, array $blocks = array())
    {
    }

    // line 66
    public function block_second1($context, array $blocks = array())
    {
    }

    // line 67
    public function block_third1($context, array $blocks = array())
    {
    }

    // line 68
    public function block_third2($context, array $blocks = array())
    {
    }

    // line 69
    public function block_third3($context, array $blocks = array())
    {
    }

    // line 70
    public function block_third4($context, array $blocks = array())
    {
    }

    // line 71
    public function block_fourth1($context, array $blocks = array())
    {
    }

    // line 72
    public function block_fourth2($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "SquadFttBundle:Formation:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 72,  229 => 71,  224 => 70,  219 => 69,  214 => 68,  209 => 67,  204 => 66,  199 => 65,  194 => 64,  189 => 63,  183 => 61,  179 => 59,  168 => 54,  163 => 52,  156 => 48,  150 => 47,  144 => 46,  140 => 45,  136 => 44,  132 => 43,  129 => 42,  125 => 41,  102 => 20,  99 => 18,  92 => 15,  88 => 14,  84 => 13,  80 => 12,  76 => 11,  72 => 10,  68 => 9,  64 => 8,  60 => 7,  56 => 6,  52 => 5,  49 => 4,  46 => 3,  40 => 2,  11 => 1,);
    }
}
/* {% extends 'SquadFttBundle::layout.html.twig' %}*/
/* {% block titre %} Listes des formations  {% endblock %}*/
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
/*             <li class="active" ><a href="{{ path('formation')}}"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg> Formations</a></li>*/
/*             <li><a href="{{ path('gestionDopage')}}"><svg class="glyph stroked eye"><use xlink:href="#stroked-eye"/></svg> Gestion Dopage</a></li>*/
/*          </ul>  */
/* {% endblock %}*/
/* {% block first1 -%}*/
/*    */
/*    <div class="col-lg-12">*/
/*             <div class="panel panel-default">*/
/*                 <div class="panel-body">*/
/*                    */
/* */
/*     <table data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1"  data-sort-name="name" data-sort-order="desc">*/
/*         */
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id formation</th>*/
/*                 <th>Libelle</th>*/
/*                 <th>grade</th>*/
/*                 <th>dateDebutFormation</th>*/
/*                 <th>dateFinFormation</th>*/
/*                 <th>fraisFormation</th>*/
/*                 <th>Actions</a>*/
/*                 */
/*           */
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for entity in entities %}*/
/*             <tr>*/
/*                 <td>{{ entity.idFormation }}</td>*/
/*                 <td>{{ entity.libelleFormation }}</td>*/
/*                 <td>{{ entity.grade }}</td>*/
/*                 <td>{% if entity.dateDebutFormation %}{{ entity.dateDebutFormation|date('Y-m-d') }}{% endif %}</td>*/
/*                 <td>{% if entity.dateFinFormation %}{{ entity.dateFinFormation|date('Y-m-d') }}{% endif %}</td>*/
/*                 <td>{{ entity.fraisFormation }}</td>*/
/*                 */
/*                 <td>*/
/*                 */
/*                         <a href="{{ path('formation_show', { 'idFormation': entity.idFormation }) }}" class="label label-success btn-md">Afficher</a>*/
/*                     */
/*                         <a href="{{ path('formation_edit', { 'idFormation': entity.idFormation }) }}" class="label label-warning btn-md">Modifier</a>*/
/*                     */
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/*   <a href="{{ path('formation_new') }}" class="btn btn-primary"> Ajouter une formation </a>*/
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
