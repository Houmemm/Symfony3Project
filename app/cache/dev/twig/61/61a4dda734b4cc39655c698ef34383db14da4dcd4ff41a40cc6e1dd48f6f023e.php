<?php

/* SquadFttBundle:Rapport:listJoueur.html.twig */
class __TwigTemplate_7945400f00810cc83db646efbafa099a87c2a4bc46a9db5a794de665e4654450 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SquadFttBundle::layout.html.twig", "SquadFttBundle:Rapport:listJoueur.html.twig", 1);
        $this->blocks = array(
            'titre' => array($this, 'block_titre'),
            'suppress' => array($this, 'block_suppress'),
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
        // line 3
        echo "Rapport
";
    }

    // line 5
    public function block_suppress($context, array $blocks = array())
    {
    }

    // line 7
    public function block_menu($context, array $blocks = array())
    {
        // line 8
        echo "<ul class=\"nav menu\">
            <li><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("accueil");
        echo "\"><svg class=\"glyph stroked dashboard-dial\"><use xlink:href=\"#stroked-dashboard-dial\"></use></svg> Statistique</a></li>
            <li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("actualite");
        echo "\"><svg class=\"glyph stroked landscape\"><use xlink:href=\"#stroked-landscape\"/></svg> Actualites</a></li>
            <li ><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("evenement");
        echo "\"><svg class=\"glyph stroked calendar\"><use xlink:href=\"#stroked-calendar\"></use></svg> Evenements</a></li>
            <li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("joueur");
        echo "\"><svg class=\"glyph stroked male user \"><use xlink:href=\"#stroked-male-user\"/></svg> Joueurs</a></li>
            <li><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("match");
        echo "\"><svg class=\"glyph stroked table\"><use xlink:href=\"#stroked-table\"></use></svg> Matchs</a></li>
            <li><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("arbitre");
        echo "\"><svg class=\"glyph stroked male user \"><use xlink:href=\"#stroked-male-user\"/></svg> Arbitres</a></li>
            <li><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("stade");
        echo "\"><svg class=\"glyph stroked location pin\"><use xlink:href=\"#stroked-location-pin\"/></svg> Stades</a></li>
            <li><a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("club");
        echo "\"><svg class=\"glyph stroked home\"><use xlink:href=\"#stroked-home\"/></svg> Clubs</a></li>
            <li><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("concour");
        echo "\"><svg class=\"glyph stroked star\"><use xlink:href=\"#stroked-star\"></use></svg> Concours</a></li>
            <li><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("sanction");
        echo "\"><svg class=\"glyph stroked cancel\"><use xlink:href=\"#stroked-cancel\"/></svg> Sanction</a></li>
            <li><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("formation");
        echo "\"><svg class=\"glyph stroked line-graph\"><use xlink:href=\"#stroked-line-graph\"></use></svg> Formations</a></li>
            <li class=\"active\" ><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("gestionDopage");
        echo "\"><svg class=\"glyph stroked eye\"><use xlink:href=\"#stroked-eye\"/></svg> Gestion Dopage</a></li>
         </ul>  
";
    }

    // line 23
    public function block_first1($context, array $blocks = array())
    {
    }

    // line 26
    public function block_first2($context, array $blocks = array())
    {
    }

    // line 27
    public function block_first3($context, array $blocks = array())
    {
    }

    // line 28
    public function block_first4($context, array $blocks = array())
    {
    }

    // line 29
    public function block_second1($context, array $blocks = array())
    {
        // line 30
        echo "<div class=\"col-lg-12\">
            <div class=\"panel panel-default\">
                <div class=\"panel-body\">
                            <table class=\"table table-striped\" data-toggle=\"table\" data-url=\"tables/data1.json\"  data-show-refresh=\"true\" data-show-toggle=\"true\" data-show-columns=\"true\" data-search=\"true\" data-select-item-name=\"toolbar1\" data-pagination=\"true\" data-sort-name=\"name\" data-sort-order=\"desc\">
                                <thead>
                                    <tr class=\"info\" style=\"font-weight:bold; font-style:italic\">
                                        <th>cin joueur</th>
                                        <th>nom & prenom </th>
                                        <th>natonalite</th>
                                        <th>Choisir</th>
                                    </tr>
                                </thead>
                                <tbody  >
                                    ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 44
            echo "                                        <tr>
                                            <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "cinJoueur", array()), "html", null, true);
            echo "</td>
                                            <td> ";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "prenom", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nationaliterJoueur", array()), "html", null, true);
            echo " </td>
                                            <td>
                                                <ul  class=\"breadcrumb\">
                    
                
                    <li>
                                                <a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rapport_new", array("id" => $this->getAttribute($context["entity"], "cinJoueur", array()))), "html", null, true);
            echo "\"><svg class=\"glyph stroked clipboard with paper\"><use xlink:href=\"#stroked-clipboard-with-paper\"/></svg>&nbsp;Rediger rapport</a>
                    </li></ul>
                                                </td>
                    
                                                </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "                                </tbody>
                            </table>
                   </div>
                   </div>
                </div>
            </div><!--/.panel-->
 </form>
                                
        ";
    }

    // line 68
    public function block_third1($context, array $blocks = array())
    {
    }

    // line 69
    public function block_third2($context, array $blocks = array())
    {
    }

    // line 70
    public function block_third3($context, array $blocks = array())
    {
    }

    // line 71
    public function block_third4($context, array $blocks = array())
    {
    }

    // line 72
    public function block_fourth1($context, array $blocks = array())
    {
    }

    // line 73
    public function block_fourth2($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "SquadFttBundle:Rapport:listJoueur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 73,  219 => 72,  214 => 71,  209 => 70,  204 => 69,  199 => 68,  187 => 59,  175 => 53,  166 => 47,  160 => 46,  156 => 45,  153 => 44,  149 => 43,  134 => 30,  131 => 29,  126 => 28,  121 => 27,  116 => 26,  111 => 23,  104 => 20,  100 => 19,  96 => 18,  92 => 17,  88 => 16,  84 => 15,  80 => 14,  76 => 13,  72 => 12,  68 => 11,  64 => 10,  60 => 9,  57 => 8,  54 => 7,  49 => 5,  44 => 3,  41 => 2,  11 => 1,);
    }
}
/* {% extends 'SquadFttBundle::layout.html.twig' %}*/
/* {% block titre %}*/
/* Rapport*/
/* {% endblock%}*/
/* {% block suppress %}*/
/* {% endblock %}*/
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
/*             <li><a href="{{ path('sanction')}}"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"/></svg> Sanction</a></li>*/
/*             <li><a href="{{ path('formation')}}"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg> Formations</a></li>*/
/*             <li class="active" ><a href="{{ path('gestionDopage')}}"><svg class="glyph stroked eye"><use xlink:href="#stroked-eye"/></svg> Gestion Dopage</a></li>*/
/*          </ul>  */
/* {% endblock %} */
/* {% block first1 %}{% endblock %}*/
/* */
/* */
/* {% block first2 %}{% endblock %}*/
/* {% block first3 %}{% endblock %}*/
/* {% block first4 %}{% endblock %}*/
/* {% block second1 -%}*/
/*     <div class="col-lg-12">*/
/*             <div class="panel panel-default">*/
/*                 <div class="panel-body">*/
/*                             <table class="table table-striped" data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">*/
/*                                 <thead>*/
/*                                     <tr class="info" style="font-weight:bold; font-style:italic">*/
/*                                         <th>cin joueur</th>*/
/*                                         <th>nom & prenom </th>*/
/*                                         <th>natonalite</th>*/
/*                                         <th>Choisir</th>*/
/*                                     </tr>*/
/*                                 </thead>*/
/*                                 <tbody  >*/
/*                                     {% for entity in entities %}*/
/*                                         <tr>*/
/*                                             <td>{{ entity.cinJoueur }}</td>*/
/*                                             <td> {{ entity.nom }} {{ entity.prenom }}</td>*/
/*                                             <td>{{ entity.nationaliterJoueur}} </td>*/
/*                                             <td>*/
/*                                                 <ul  class="breadcrumb">*/
/*                     */
/*                 */
/*                     <li>*/
/*                                                 <a href="{{ path('rapport_new', { 'id': entity.cinJoueur }) }}"><svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"/></svg>&nbsp;Rediger rapport</a>*/
/*                     </li></ul>*/
/*                                                 </td>*/
/*                     */
/*                                                 </tr>*/
/*                                     {% endfor %}*/
/*                                 </tbody>*/
/*                             </table>*/
/*                    </div>*/
/*                    </div>*/
/*                 </div>*/
/*             </div><!--/.panel-->*/
/*  </form>*/
/*                                 */
/*         {% endblock %}    */
/*     {% block third1 %}{% endblock %}*/
/*     {% block third2 %}{% endblock %}*/
/* {% block third3 %}{% endblock %}*/
/* {% block third4 %}{% endblock %}*/
/* {% block fourth1 %}{% endblock %}*/
/* {% block fourth2 %}{% endblock %}*/
/* */
