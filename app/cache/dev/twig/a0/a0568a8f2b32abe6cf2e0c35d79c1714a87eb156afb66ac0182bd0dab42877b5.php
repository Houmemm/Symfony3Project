<?php

/* SquadFttBundle:Rapport:show.html.twig */
class __TwigTemplate_474a31a76c2abf42b6a7ce0e1bfbbe10a496c3fa96756075db2446267c420b66 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SquadFttBundle::layout.html.twig", "SquadFttBundle:Rapport:show.html.twig", 1);
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
        echo "Rapport ";
    }

    // line 3
    public function block_suppress($context, array $blocks = array())
    {
    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        // line 6
        echo "<ul class=\"nav menu\">
            <li><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("accueil");
        echo "\"><svg class=\"glyph stroked dashboard-dial\"><use xlink:href=\"#stroked-dashboard-dial\"></use></svg> Statistique</a></li>
            <li><a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("actualite");
        echo "\"><svg class=\"glyph stroked landscape\"><use xlink:href=\"#stroked-landscape\"/></svg> Actualites</a></li>
            <li><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("evenement");
        echo "\"><svg class=\"glyph stroked calendar\"><use xlink:href=\"#stroked-calendar\"></use></svg> Evenements</a></li>
            <li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("joueur");
        echo "\"><svg class=\"glyph stroked male user \"><use xlink:href=\"#stroked-male-user\"/></svg> Joueurs</a></li>
            <li><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("match");
        echo "\"><svg class=\"glyph stroked table\"><use xlink:href=\"#stroked-table\"></use></svg> Matchs</a></li>
            <li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("arbitre");
        echo "\"><svg class=\"glyph stroked male user \"><use xlink:href=\"#stroked-male-user\"/></svg> Arbitres</a></li>
            <li><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("stade");
        echo "\"><svg class=\"glyph stroked location pin\"><use xlink:href=\"#stroked-location-pin\"/></svg> Stades</a></li>
            <li><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("club");
        echo "\"><svg class=\"glyph stroked home\"><use xlink:href=\"#stroked-home\"/></svg> Clubs</a></li>
            <li><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("concour");
        echo "\"><svg class=\"glyph stroked star\"><use xlink:href=\"#stroked-star\"></use></svg> Concours</a></li>
            <li><a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("sanction");
        echo "\"><svg class=\"glyph stroked cancel\"><use xlink:href=\"#stroked-cancel\"/></svg> Sanction</a></li>
            <li><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("formation");
        echo "\"><svg class=\"glyph stroked line-graph\"><use xlink:href=\"#stroked-line-graph\"></use></svg> Formations</a></li>
            <li class=\"active\"><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("rapport");
        echo "\"><svg class=\"glyph stroked eye\"><use xlink:href=\"#stroked-eye\"/></svg> Gestion Dopage</a></li>
         </ul>  
";
    }

    // line 21
    public function block_first1($context, array $blocks = array())
    {
        // line 23
        echo "<div class=\"col-lg-12\">
            <div class=\"panel panel-default\">
                <div class=\"panel-body\">
    

    <table data-toggle=\"table\" data-url=\"tables/data1.json\">
        <tbody>
            
            <tr>
                <th>Joueur</th>
                <td>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "joueurCinJoueur", array()), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "joueurCinJoueur", array()), "prenom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Resultattest</th>
                <td>";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "resultatTest", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Commentaire</th>
                <td>";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "commentaire", array()), "html", null, true);
        echo "</td>
            </tr>
            
            <tr>
                <th>Medecin</th>
                <td>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "userUser", array()), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "userUser", array()), "prenom", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>
             <br>
    ";
        // line 51
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo " <br> 
    <a href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("rapport");
        echo "\">Retour a la liste</a>
";
    }

    // line 54
    public function block_first2($context, array $blocks = array())
    {
    }

    // line 55
    public function block_first3($context, array $blocks = array())
    {
    }

    // line 56
    public function block_first4($context, array $blocks = array())
    {
    }

    // line 57
    public function block_second1($context, array $blocks = array())
    {
    }

    // line 58
    public function block_third1($context, array $blocks = array())
    {
    }

    // line 59
    public function block_third2($context, array $blocks = array())
    {
    }

    // line 60
    public function block_third3($context, array $blocks = array())
    {
    }

    // line 61
    public function block_third4($context, array $blocks = array())
    {
    }

    // line 62
    public function block_fourth1($context, array $blocks = array())
    {
    }

    // line 63
    public function block_fourth2($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "SquadFttBundle:Rapport:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 63,  208 => 62,  203 => 61,  198 => 60,  193 => 59,  188 => 58,  183 => 57,  178 => 56,  173 => 55,  168 => 54,  162 => 52,  158 => 51,  148 => 46,  140 => 41,  133 => 37,  124 => 33,  112 => 23,  109 => 21,  102 => 18,  98 => 17,  94 => 16,  90 => 15,  86 => 14,  82 => 13,  78 => 12,  74 => 11,  70 => 10,  66 => 9,  62 => 8,  58 => 7,  55 => 6,  52 => 5,  47 => 3,  41 => 2,  11 => 1,);
    }
}
/* {% extends 'SquadFttBundle::layout.html.twig' %}*/
/* {% block titre %}Rapport {% endblock %}*/
/* {% block suppress %}*/
/* {% endblock %}*/
/* {% block menu %}*/
/* <ul class="nav menu">*/
/*             <li><a href="{{ path('accueil')}}"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Statistique</a></li>*/
/*             <li><a href="{{ path('actualite')}}"><svg class="glyph stroked landscape"><use xlink:href="#stroked-landscape"/></svg> Actualites</a></li>*/
/*             <li><a href="{{ path('evenement')}}"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> Evenements</a></li>*/
/*             <li><a href="{{ path('joueur')}}"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg> Joueurs</a></li>*/
/*             <li><a href="{{ path('match')}}"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg> Matchs</a></li>*/
/*             <li><a href="{{ path('arbitre')}}"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg> Arbitres</a></li>*/
/*             <li><a href="{{ path('stade')}}"><svg class="glyph stroked location pin"><use xlink:href="#stroked-location-pin"/></svg> Stades</a></li>*/
/*             <li><a href="{{ path('club')}}"><svg class="glyph stroked home"><use xlink:href="#stroked-home"/></svg> Clubs</a></li>*/
/*             <li><a href="{{ path('concour')}}"><svg class="glyph stroked star"><use xlink:href="#stroked-star"></use></svg> Concours</a></li>*/
/*             <li><a href="{{ path('sanction')}}"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"/></svg> Sanction</a></li>*/
/*             <li><a href="{{ path('formation')}}"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg> Formations</a></li>*/
/*             <li class="active"><a href="{{ path('rapport')}}"><svg class="glyph stroked eye"><use xlink:href="#stroked-eye"/></svg> Gestion Dopage</a></li>*/
/*          </ul>  */
/* {% endblock %}    */
/* {% block first1 -%}*/
/* */
/* <div class="col-lg-12">*/
/*             <div class="panel panel-default">*/
/*                 <div class="panel-body">*/
/*     */
/* */
/*     <table data-toggle="table" data-url="tables/data1.json">*/
/*         <tbody>*/
/*             */
/*             <tr>*/
/*                 <th>Joueur</th>*/
/*                 <td>{{ entity.joueurCinJoueur.nom }} {{ entity.joueurCinJoueur.prenom }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Resultattest</th>*/
/*                 <td>{{ entity.resultatTest }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Commentaire</th>*/
/*                 <td>{{ entity.commentaire }}</td>*/
/*             </tr>*/
/*             */
/*             <tr>*/
/*                 <th>Medecin</th>*/
/*                 <td>{{ entity.userUser.nom }} {{ entity.userUser.prenom }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/*              <br>*/
/*     {{ form(delete_form) }} <br> */
/*     <a href="{{path('rapport')}}">Retour a la liste</a>*/
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
/* */
