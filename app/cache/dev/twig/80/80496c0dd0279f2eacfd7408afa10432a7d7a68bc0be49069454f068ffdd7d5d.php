<?php

/* SquadFttBundle:Evenement:index.html.twig */
class __TwigTemplate_5747f6dba47c76d0e96f29fc246de3da69b0471c19555f6743f17f8fabb01c61 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SquadFttBundle::layout.html.twig", "SquadFttBundle:Evenement:index.html.twig", 1);
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
        echo " Listes d'evenements  ";
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
        // line 22
        echo "<div class=\"col-lg-12\">
            <div class=\"panel panel-default\">
                <div class=\"panel-body\">
    <table data-toggle=\"table\" data-url=\"tables/data1.json\"  data-show-refresh=\"true\" data-show-toggle=\"true\" data-show-columns=\"true\" data-search=\"true\" data-select-item-name=\"toolbar1\" data-pagination=\"true\" data-sort-name=\"name\" data-sort-order=\"desc\">
        <thead>
            <tr>
                <th>Libelle</th>
                <th>Date debut</th>
                <th>Date fin</th>
                <th>Type</th>
                <th>Site</th>
                <th>Joueur</th>
                <th>Statut</th>
                
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 41
            echo "            <tr>
                <td><a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("evenement_show", array("id" => $this->getAttribute($context["entity"], "idEvenement", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "libelleEvenement", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 43
            if ($this->getAttribute($context["entity"], "dateDebut", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateDebut", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 44
            if ($this->getAttribute($context["entity"], "dateFin", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateFin", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "type", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "site", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nbreJoueur", array()), "html", null, true);
            echo "</td>
                <td>  ";
            // line 48
            if (($this->getAttribute($context["entity"], "statut", array()) == "publier")) {
                echo " <p style=\"color:#00FF00;\" >Publier</p>  ";
            } else {
                echo " <p style=\"color:red;\" >Non publier</p>     ";
            }
            echo "</td>
                <td>
                <a class=\"ion-android-settings\" href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("evenement_edit", array("id" => $this->getAttribute($context["entity"], "idEvenement", array()))), "html", null, true);
            echo "\" > Modifier </a> 
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "        </tbody>
    </table>
  
        ";
        // line 57
        if ($this->env->getExtension('security')->isGranted("ROLE_RESPONSABLE")) {
            // line 58
            echo "        <a href=\"";
            echo $this->env->getExtension('routing')->getPath("evenement_new");
            echo "\" class=\"btn btn-primary\"> Ajouter un evenement </a>
        ";
        }
        // line 60
        echo "        ";
    }

    // line 61
    public function block_first2($context, array $blocks = array())
    {
    }

    // line 62
    public function block_first3($context, array $blocks = array())
    {
    }

    // line 63
    public function block_first4($context, array $blocks = array())
    {
    }

    // line 64
    public function block_second1($context, array $blocks = array())
    {
    }

    // line 65
    public function block_third1($context, array $blocks = array())
    {
    }

    // line 66
    public function block_third2($context, array $blocks = array())
    {
    }

    // line 67
    public function block_third3($context, array $blocks = array())
    {
    }

    // line 68
    public function block_third4($context, array $blocks = array())
    {
    }

    // line 69
    public function block_fourth1($context, array $blocks = array())
    {
    }

    // line 70
    public function block_fourth2($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "SquadFttBundle:Evenement:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 70,  240 => 69,  235 => 68,  230 => 67,  225 => 66,  220 => 65,  215 => 64,  210 => 63,  205 => 62,  200 => 61,  196 => 60,  190 => 58,  188 => 57,  183 => 54,  173 => 50,  164 => 48,  160 => 47,  156 => 46,  152 => 45,  146 => 44,  140 => 43,  134 => 42,  131 => 41,  127 => 40,  107 => 22,  104 => 20,  96 => 16,  92 => 15,  88 => 14,  84 => 13,  80 => 12,  76 => 11,  72 => 10,  68 => 9,  64 => 8,  60 => 7,  56 => 6,  52 => 5,  49 => 4,  46 => 3,  40 => 2,  11 => 1,);
    }
}
/* {% extends 'SquadFttBundle::layout.html.twig' %}*/
/* {% block titre %} Listes d'evenements  {% endblock %}*/
/* {% block menu %}*/
/* <ul class="nav menu">*/
/*             <li><a href="{{ path('accueil')}}"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Statistique</a></li>*/
/*             <li><a href="{{ path('actualite')}}"><svg class="glyph stroked landscape"><use xlink:href="#stroked-landscape"/></svg> Actualites</a></li>*/
/*             <li class="active" ><a href="{{ path('evenement')}}"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> Evenements</a></li>*/
/*             <li><a href="{{ path('joueur')}}"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg> Joueurs</a></li>*/
/*             <li><a href="{{ path('match')}}"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg> Matchs</a></li>*/
/*             <li><a href="{{ path('arbitre')}}"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg> Arbitres</a></li>*/
/*             <li><a href="{{ path('stade')}}"><svg class="glyph stroked location pin"><use xlink:href="#stroked-location-pin"/></svg> Stades</a></li>*/
/*             <li><a href="{{ path('club')}}"><svg class="glyph stroked home"><use xlink:href="#stroked-home"/></svg> Clubs</a></li>*/
/*             <li><a href="{{ path('concour')}}"><svg class="glyph stroked star"><use xlink:href="#stroked-star"></use></svg> Concours</a></li>*/
/*             <li><a href="{{ path('formation')}}"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg> Formations</a></li>*/
/*             <li><a href="{{ path('gestionDopage')}}"><svg class="glyph stroked eye"><use xlink:href="#stroked-eye"/></svg> Gestion Dopage</a></li>*/
/*           <li><a href="{{ path('user')}}"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg> Utilisateur</a></li>*/
/*         */
/* </ul>  */
/* {% endblock %}    */
/* {% block first1 -%}*/
/*    */
/*    <div class="col-lg-12">*/
/*             <div class="panel panel-default">*/
/*                 <div class="panel-body">*/
/*     <table data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Libelle</th>*/
/*                 <th>Date debut</th>*/
/*                 <th>Date fin</th>*/
/*                 <th>Type</th>*/
/*                 <th>Site</th>*/
/*                 <th>Joueur</th>*/
/*                 <th>Statut</th>*/
/*                 */
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for entity in entities %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('evenement_show', { 'id': entity.idEvenement }) }}">{{ entity.libelleEvenement }}</a></td>*/
/*                 <td>{% if entity.dateDebut %}{{ entity.dateDebut|date('Y-m-d') }}{% endif %}</td>*/
/*                 <td>{% if entity.dateFin %}{{ entity.dateFin|date('Y-m-d') }}{% endif %}</td>*/
/*                 <td>{{ entity.type }}</td>*/
/*                 <td>{{ entity.site }}</td>*/
/*                 <td>{{ entity.nbreJoueur }}</td>*/
/*                 <td>  {%if entity.statut=="publier" %} <p style="color:#00FF00;" >Publier</p>  {% else %} <p style="color:red;" >Non publier</p>     {% endif %}</td>*/
/*                 <td>*/
/*                 <a class="ion-android-settings" href="{{ path('evenement_edit', { 'id': entity.idEvenement }) }}" > Modifier </a> */
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/*   */
/*         {% if is_granted('ROLE_RESPONSABLE') %}*/
/*         <a href="{{ path('evenement_new') }}" class="btn btn-primary"> Ajouter un evenement </a>*/
/*         {% endif %}*/
/*         {% endblock %}*/
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
