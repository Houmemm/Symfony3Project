<?php

/* SquadFttBundle:User:Solde.html.twig */
class __TwigTemplate_80d7a8c054284478bbc6439524523da008a33a2562a8f5d036dd678c8f41a219 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SquadFttBundle::layout.html.twig", "SquadFttBundle:User:Solde.html.twig", 1);
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
        echo "Listes de transactions : ";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo " ";
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
        // line 23
        echo "<div class=\"col-lg-12\">
            <div class=\"panel panel-default\">
                <div class=\"panel-body\">
                   

    <table data-toggle=\"table\" data-url=\"tables/data1.json\"  data-show-refresh=\"true\" data-show-toggle=\"true\" data-show-columns=\"true\" data-search=\"true\" data-select-item-name=\"toolbar1\" data-pagination=\"true\" data-sort-name=\"name\" data-sort-order=\"desc\">
        
        <thead>
            <tr>
                <th>Valeur</th>
                <th>Type</th>
                <th>Preuve</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["soldes"]) ? $context["soldes"] : $this->getContext($context, "soldes")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 39
            echo "            <tr>
                <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "valeur", array()), "html", null, true);
            echo "  <span class=\"ion-social-usd\" style=\"color:#198c19 \"  > </td>
                <td>";
            // line 41
            if (($this->getAttribute($context["entity"], "typeTransaction", array()) == "virement")) {
                echo " 
                   <span class=\"glyphicon glyphicon-arrow-up\" style=\"color:#198c19\" > 
                   ";
            } else {
                // line 43
                echo " 
                      <span class=\"glyphicon glyphicon-arrow-down\" style=\"color:red\"  > 
                       ";
            }
            // line 45
            echo "   
                </td>
                <td> <a href=\"#\"> ";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "preuve", array()), "html", null, true);
            echo "</a></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "    </tbody>
    </table>
    <a href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ajouterSolde", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "  \"  class=\"btn btn-primary\"> Ajouter une transaction </a>
    <a href=\"#\"  class=\"btn btn-primary\"> Envoyer un extrait </a>
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
        return "SquadFttBundle:User:Solde.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 64,  212 => 63,  207 => 62,  202 => 61,  197 => 60,  192 => 59,  187 => 58,  182 => 57,  177 => 56,  172 => 55,  165 => 52,  161 => 50,  152 => 47,  148 => 45,  143 => 43,  137 => 41,  133 => 40,  130 => 39,  126 => 38,  109 => 23,  106 => 20,  98 => 16,  94 => 15,  90 => 14,  86 => 13,  82 => 12,  78 => 11,  74 => 10,  70 => 9,  66 => 8,  62 => 7,  58 => 6,  54 => 5,  51 => 4,  48 => 3,  40 => 2,  11 => 1,);
    }
}
/* {% extends 'SquadFttBundle::layout.html.twig' %}*/
/* {% block titre %}Listes de transactions : {{ id  }} {% endblock %}*/
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
/*           <li><a href="{{ path('user')}}"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg> Utilisateur</a></li>*/
/*   */
/* </ul>  */
/* {% endblock %}    */
/* {% block first1 -%}*/
/*    */
/*  */
/*    <div class="col-lg-12">*/
/*             <div class="panel panel-default">*/
/*                 <div class="panel-body">*/
/*                    */
/* */
/*     <table data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">*/
/*         */
/*         <thead>*/
/*             <tr>*/
/*                 <th>Valeur</th>*/
/*                 <th>Type</th>*/
/*                 <th>Preuve</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for entity in soldes %}*/
/*             <tr>*/
/*                 <td>{{ entity.valeur }}  <span class="ion-social-usd" style="color:#198c19 "  > </td>*/
/*                 <td>{% if  entity.typeTransaction == 'virement'  %} */
/*                    <span class="glyphicon glyphicon-arrow-up" style="color:#198c19" > */
/*                    {% else %} */
/*                       <span class="glyphicon glyphicon-arrow-down" style="color:red"  > */
/*                        {% endif %}   */
/*                 </td>*/
/*                 <td> <a href="#"> {{ entity.preuve }}</a></td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*     </tbody>*/
/*     </table>*/
/*     <a href="{{ path('ajouterSolde', { 'id': id   })}}  "  class="btn btn-primary"> Ajouter une transaction </a>*/
/*     <a href="#"  class="btn btn-primary"> Envoyer un extrait </a>*/
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
