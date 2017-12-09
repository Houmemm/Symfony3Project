<?php

/* SquadFttBundle:Concours:index.html.twig */
class __TwigTemplate_c03cae6de1803f93e29bb20a3e4cfc6b39141222d41e9af9c78ee024ac7256e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("SquadFttBundle::layout.html.twig", "SquadFttBundle:Concours:index.html.twig", 2);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
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

    // line 4
    public function block_header($context, array $blocks = array())
    {
        echo "   
<link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/squadftt/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/squadftt/css/datepicker3.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/squadftt/css/styles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
    }

    // line 10
    public function block_titre($context, array $blocks = array())
    {
        echo " Listes des concours  ";
    }

    // line 11
    public function block_menu($context, array $blocks = array())
    {
        // line 12
        echo "<ul class=\"nav menu\">
            <li><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("accueil");
        echo "\"><svg class=\"glyph stroked dashboard-dial\"><use xlink:href=\"#stroked-dashboard-dial\"></use></svg> Statistique</a></li>
            <li><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("actualite");
        echo "\"><svg class=\"glyph stroked landscape\"><use xlink:href=\"#stroked-landscape\"/></svg> Actualites</a></li>
            <li ><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("evenement");
        echo "\"><svg class=\"glyph stroked calendar\"><use xlink:href=\"#stroked-calendar\"></use></svg> Evenements</a></li>
            <li><a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("joueur");
        echo "\"><svg class=\"glyph stroked male user \"><use xlink:href=\"#stroked-male-user\"/></svg> Joueurs</a></li>
            <li><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("match");
        echo "\"><svg class=\"glyph stroked table\"><use xlink:href=\"#stroked-table\"></use></svg> Matchs</a></li>
            <li><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("arbitre");
        echo "\"><svg class=\"glyph stroked male user \"><use xlink:href=\"#stroked-male-user\"/></svg> Arbitres</a></li>
            <li><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("stade");
        echo "\"><svg class=\"glyph stroked location pin\"><use xlink:href=\"#stroked-location-pin\"/></svg> Stades</a></li>
            <li><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("club");
        echo "\"><svg class=\"glyph stroked home\"><use xlink:href=\"#stroked-home\"/></svg> Clubs</a></li>
            <li class=\"active\" ><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("concour");
        echo "\"><svg class=\"glyph stroked star\"><use xlink:href=\"#stroked-star\"></use></svg> Concours</a></li>
            <li><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("formation");
        echo "\"><svg class=\"glyph stroked line-graph\"><use xlink:href=\"#stroked-line-graph\"></use></svg> Formations</a></li>
            <li><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("gestionDopage");
        echo "\"><svg class=\"glyph stroked eye\"><use xlink:href=\"#stroked-eye\"/></svg> Gestion Dopage</a></li>
         </ul>  
";
    }

    // line 26
    public function block_first1($context, array $blocks = array())
    {
        // line 28
        echo "<div class=\"col-lg-12\">
            <div class=\"panel panel-default\">
                <div class=\"panel-body\">
                   

    <table class=\"table table-striped\" data-toggle=\"table\" data-url=\"tables/data1.json\"  data-show-refresh=\"true\" data-show-toggle=\"true\" data-show-columns=\"true\" data-search=\"true\" data-select-item-name=\"toolbar1\"  data-sort-name=\"name\" data-sort-order=\"desc\">
        
        <thead >
            <tr class=\"info\">
                
                <th>Libelle</th>
                <th>Date de debut</th>
                <th>Lieu</th>
                <th>Description</th>
                <th>Frais de Participation</th>
                <th>Date debut de depot</th>
                <th>Date fin du depot</th>
                <th>Type</th>
                <th>Actions</th>
             
            </tr>
        </thead>
        <tbody>
        ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 52
            echo "            <tr>
                
                <td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "libelleConcour", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 55
            if ($this->getAttribute($context["entity"], "dateDebutConcour", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateDebutConcour", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                
                <td>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "lieuConcour", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "descriptionConcours", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "fraisParticipation", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 60
            if ($this->getAttribute($context["entity"], "dateDebutDepot", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateDebutDepot", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 61
            if ($this->getAttribute($context["entity"], "dateFinDepot", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateFinDepot", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "typeConcour", array()), "html", null, true);
            echo "</td>
                <td>
               
                        <a   href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("concour_show", array("idConcour" => $this->getAttribute($context["entity"], "idConcour", array()))), "html", null, true);
            echo "\" class=\"label label-primary\">Afficher</a>
                    
                        <a href=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("concour_edit", array("idConcour" => $this->getAttribute($context["entity"], "idConcour", array()))), "html", null, true);
            echo "\" class=\"label label-warning\">Modifier</a>
                   
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "        </tbody>
    </table>
  <div class=\"navigation\">
    ";
        // line 75
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        echo "
  </div>  
  <a href=\"";
        // line 77
        echo $this->env->getExtension('routing')->getPath("concour_new");
        echo "\" class=\"btn btn-primary\"> Ajouter un Concours </a>
  
  
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
        return "SquadFttBundle:Concours:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  275 => 90,  270 => 89,  265 => 88,  260 => 87,  255 => 86,  250 => 85,  245 => 84,  240 => 83,  235 => 82,  230 => 81,  222 => 77,  217 => 75,  212 => 72,  201 => 67,  196 => 65,  190 => 62,  184 => 61,  178 => 60,  174 => 59,  170 => 58,  166 => 57,  159 => 55,  155 => 54,  151 => 52,  147 => 51,  122 => 28,  119 => 26,  112 => 23,  108 => 22,  104 => 21,  100 => 20,  96 => 19,  92 => 18,  88 => 17,  84 => 16,  80 => 15,  76 => 14,  72 => 13,  69 => 12,  66 => 11,  60 => 10,  54 => 7,  50 => 6,  46 => 5,  41 => 4,  11 => 2,);
    }
}
/* */
/* {% extends 'SquadFttBundle::layout.html.twig' %}*/
/* */
/* {% block header %}   */
/* <link href="{{asset('bundles/squadftt/css/bootstrap.min.css')}}" rel="stylesheet">*/
/* <link href="{{asset('bundles/squadftt/css/datepicker3.css')}}" rel="stylesheet">*/
/* <link href="{{asset('bundles/squadftt/css/styles.css')}}" rel="stylesheet">*/
/* {% endblock %}*/
/* */
/* {% block titre %} Listes des concours  {% endblock %}*/
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
/*             <li class="active" ><a href="{{ path('concour')}}"><svg class="glyph stroked star"><use xlink:href="#stroked-star"></use></svg> Concours</a></li>*/
/*             <li><a href="{{ path('formation')}}"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg> Formations</a></li>*/
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
/*     <table class="table table-striped" data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1"  data-sort-name="name" data-sort-order="desc">*/
/*         */
/*         <thead >*/
/*             <tr class="info">*/
/*                 */
/*                 <th>Libelle</th>*/
/*                 <th>Date de debut</th>*/
/*                 <th>Lieu</th>*/
/*                 <th>Description</th>*/
/*                 <th>Frais de Participation</th>*/
/*                 <th>Date debut de depot</th>*/
/*                 <th>Date fin du depot</th>*/
/*                 <th>Type</th>*/
/*                 <th>Actions</th>*/
/*              */
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for entity in entities %}*/
/*             <tr>*/
/*                 */
/*                 <td>{{ entity.libelleConcour }}</td>*/
/*                 <td>{% if entity.dateDebutConcour %}{{ entity.dateDebutConcour|date('Y-m-d') }}{% endif %}</td>*/
/*                 */
/*                 <td>{{ entity.lieuConcour }}</td>*/
/*                 <td>{{ entity.descriptionConcours }}</td>*/
/*                 <td>{{ entity.fraisParticipation }}</td>*/
/*                 <td>{% if entity.dateDebutDepot %}{{ entity.dateDebutDepot|date('Y-m-d') }}{% endif %}</td>*/
/*                 <td>{% if entity.dateFinDepot %}{{ entity.dateFinDepot|date('Y-m-d') }}{% endif %}</td>*/
/*                 <td>{{ entity.typeConcour }}</td>*/
/*                 <td>*/
/*                */
/*                         <a   href="{{ path('concour_show', { 'idConcour': entity.idConcour }) }}" class="label label-primary">Afficher</a>*/
/*                     */
/*                         <a href="{{ path('concour_edit', { 'idConcour': entity.idConcour }) }}" class="label label-warning">Modifier</a>*/
/*                    */
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/*   <div class="navigation">*/
/*     {{ knp_pagination_render(entities) }}*/
/*   </div>  */
/*   <a href="{{ path('concour_new') }}" class="btn btn-primary"> Ajouter un Concours </a>*/
/*   */
/*   */
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
