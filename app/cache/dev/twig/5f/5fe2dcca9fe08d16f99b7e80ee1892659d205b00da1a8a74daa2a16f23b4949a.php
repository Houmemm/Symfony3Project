<?php

/* SquadFttBundle:Matchtennis:show.html.twig */
class __TwigTemplate_8bbec2344b114994e6dae6f41413bd021b73e5c38c8a7a4acf4c6cdee29331c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SquadFttBundle::layout.html.twig", "SquadFttBundle:Matchtennis:show.html.twig", 1);
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

    // line 22
    public function block_first1($context, array $blocks = array())
    {
        // line 23
        echo "    <h1>Match Tennis</h1>

    <table class=\"table table-striped\"  data-toggle=\"table\" data-url=\"tables/data1.json\"  data-show-refresh=\"true\" data-show-toggle=\"true\" data-show-columns=\"true\" data-search=\"true\" data-select-item-name=\"toolbar1\" data-pagination=\"true\" data-sort-name=\"name\" data-sort-order=\"desc\">
        <tbody>
            <tr>
                <th>Date match </th>
                <td>";
        // line 29
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateMatch", array()), "Y-m-d"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Valeurenpoint</th>
                <td>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "valeurEnPoint", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Stade</th>
                <td>";
        // line 37
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "stadeStade", array())) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "stadeStade", array()), "libelleStade", array()), "html", null, true);
            echo " ";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Arbitre</th>
                <td>";
        // line 41
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "userUser", array())) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "userUser", array()), "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "userUser", array()), "prenom", array()), "html", null, true);
        }
        echo "</td>
            </tr>

        </tbody>
    </table>

    <a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("back_matchtennis");
        echo "\" class=\"btn icon-btn btn-info\">
        Retour a la liste
    </a>

    <a href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("back_matchtennis_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idMatch", array()))), "html", null, true);
        echo "\"   class=\"btn icon-btn btn-warning\">
        Modifier
    </a>

    <br>
    ";
        // line 56
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "

";
    }

    // line 59
    public function block_first2($context, array $blocks = array())
    {
    }

    // line 60
    public function block_first3($context, array $blocks = array())
    {
    }

    // line 61
    public function block_first4($context, array $blocks = array())
    {
    }

    // line 62
    public function block_second1($context, array $blocks = array())
    {
    }

    // line 64
    public function block_third1($context, array $blocks = array())
    {
        // line 65
        echo "
";
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
        return "SquadFttBundle:Matchtennis:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 71,  214 => 70,  209 => 69,  204 => 68,  199 => 67,  194 => 65,  191 => 64,  186 => 62,  181 => 61,  176 => 60,  171 => 59,  164 => 56,  156 => 51,  149 => 47,  135 => 41,  124 => 37,  117 => 33,  110 => 29,  102 => 23,  99 => 22,  92 => 16,  88 => 15,  84 => 14,  80 => 13,  76 => 12,  72 => 11,  68 => 10,  64 => 9,  60 => 8,  56 => 7,  52 => 6,  49 => 5,  46 => 4,  40 => 2,  11 => 1,);
    }
}
/* {% extends 'SquadFttBundle::layout.html.twig' %}*/
/* {% block titre %}   {% endblock %}*/
/* */
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
/* {% endblock %}       */
/* */
/* */
/* */
/* {% block first1 %}*/
/*     <h1>Match Tennis</h1>*/
/* */
/*     <table class="table table-striped"  data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Date match </th>*/
/*                 <td>{{ entity.dateMatch|date('Y-m-d') }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Valeurenpoint</th>*/
/*                 <td>{{ entity.valeurEnPoint }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Stade</th>*/
/*                 <td>{% if entity.stadeStade %} {{entity.stadeStade.libelleStade}} {% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Arbitre</th>*/
/*                 <td>{% if entity.userUser %} {{entity.userUser.nom}} {{entity.userUser.prenom}}{% endif %}</td>*/
/*             </tr>*/
/* */
/*         </tbody>*/
/*     </table>*/
/* */
/*     <a href="{{ path('back_matchtennis') }}" class="btn icon-btn btn-info">*/
/*         Retour a la liste*/
/*     </a>*/
/* */
/*     <a href="{{ path('back_matchtennis_edit', { 'id': entity.idMatch }) }}"   class="btn icon-btn btn-warning">*/
/*         Modifier*/
/*     </a>*/
/* */
/*     <br>*/
/*     {{ form(delete_form) }}*/
/* */
/* {% endblock %}*/
/* {% block first2 %}{% endblock %}*/
/* {% block first3 %}{% endblock %}*/
/* {% block first4 %}{% endblock %}*/
/* {% block second1 %}*/
/* {% endblock %}*/
/* {% block third1 %}*/
/* */
/* {% endblock %}    */
/* {% block third2 %}{% endblock %}*/
/* {% block third3 %}{% endblock %}*/
/* {% block third4 %}{% endblock %}*/
/* {% block fourth1 %}{% endblock %}*/
/* {% block fourth2 %}{% endblock %}*/
/* */
