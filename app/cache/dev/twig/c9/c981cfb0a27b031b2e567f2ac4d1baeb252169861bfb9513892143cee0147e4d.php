<?php

/* SquadFttBundle:Sanction:new.html.twig */
class __TwigTemplate_e79ec732dc3369b52d0f836145ba940e64e8cd2eee941ea1bfefe76edd970aae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SquadFttBundle::layout.html.twig", "SquadFttBundle:Sanction:new.html.twig", 1);
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
        // line 3
        echo "
";
    }

    // line 6
    public function block_menu($context, array $blocks = array())
    {
        // line 7
        echo "<ul class=\"nav menu\">
            <li><a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("accueil");
        echo "\"><svg class=\"glyph stroked dashboard-dial\"><use xlink:href=\"#stroked-dashboard-dial\"></use></svg> Statistique</a></li>
            <li><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("actualite");
        echo "\"><svg class=\"glyph stroked landscape\"><use xlink:href=\"#stroked-landscape\"/></svg> Actualites</a></li>
            <li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("evenement");
        echo "\"><svg class=\"glyph stroked calendar\"><use xlink:href=\"#stroked-calendar\"></use></svg> Evenements</a></li>
            <li><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("joueur");
        echo "\"><svg class=\"glyph stroked male user \"><use xlink:href=\"#stroked-male-user\"/></svg> Joueurs</a></li>
            <li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("match");
        echo "\"><svg class=\"glyph stroked table\"><use xlink:href=\"#stroked-table\"></use></svg> Matchs</a></li>
            <li><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("arbitre");
        echo "\"><svg class=\"glyph stroked male user \"><use xlink:href=\"#stroked-male-user\"/></svg> Arbitres</a></li>
            <li ><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("stade");
        echo "\"><svg class=\"glyph stroked location pin\"><use xlink:href=\"#stroked-location-pin\"/></svg> Stades</a></li>
            <li><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("club");
        echo "\"><svg class=\"glyph stroked home\"><use xlink:href=\"#stroked-home\"/></svg> Clubs</a></li>
            <li><a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("concour");
        echo "\"><svg class=\"glyph stroked star\"><use xlink:href=\"#stroked-star\"></use></svg> Concours</a></li>
            <li class=\"active\" ><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("sanction");
        echo "\"><svg class=\"glyph stroked cancel\"><use xlink:href=\"#stroked-cancel\"/></svg> Sanctions</a></li>
            <li><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("formation");
        echo "\"><svg class=\"glyph stroked line-graph\"><use xlink:href=\"#stroked-line-graph\"></use></svg> Formations</a></li>
            <li><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("gestionDopage");
        echo "\"><svg class=\"glyph stroked eye\"><use xlink:href=\"#stroked-eye\"/></svg> Gestion Dopage</a></li>
         </ul>  
";
    }

    // line 22
    public function block_first1($context, array $blocks = array())
    {
    }

    // line 25
    public function block_first2($context, array $blocks = array())
    {
    }

    // line 26
    public function block_first3($context, array $blocks = array())
    {
    }

    // line 27
    public function block_first4($context, array $blocks = array())
    {
    }

    // line 28
    public function block_second1($context, array $blocks = array())
    {
        // line 29
        echo "<div class=\"col-lg-12\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\"> Sanctionner: ";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity1"]) ? $context["entity1"] : $this->getContext($context, "entity1")), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity1"]) ? $context["entity1"] : $this->getContext($context, "entity1")), "prenom", array()), "html", null, true);
        echo " </div>
            <div class=\"col-lg-6\">
                <div class=\"panel-body\">  
<form action=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sanction_create", array("id" => (isset($context["b"]) ? $context["b"] : $this->getContext($context, "b")))), "html", null, true);
        echo "\" method=\"POST\" >
    ";
        // line 35
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
</form>
        
";
    }

    // line 39
    public function block_third1($context, array $blocks = array())
    {
    }

    // line 40
    public function block_third2($context, array $blocks = array())
    {
    }

    // line 41
    public function block_third3($context, array $blocks = array())
    {
    }

    // line 42
    public function block_third4($context, array $blocks = array())
    {
    }

    // line 43
    public function block_fourth1($context, array $blocks = array())
    {
    }

    // line 44
    public function block_fourth2($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "SquadFttBundle:Sanction:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 44,  172 => 43,  167 => 42,  162 => 41,  157 => 40,  152 => 39,  144 => 35,  140 => 34,  132 => 31,  128 => 29,  125 => 28,  120 => 27,  115 => 26,  110 => 25,  105 => 22,  98 => 19,  94 => 18,  90 => 17,  86 => 16,  82 => 15,  78 => 14,  74 => 13,  70 => 12,  66 => 11,  62 => 10,  58 => 9,  54 => 8,  51 => 7,  48 => 6,  43 => 3,  40 => 2,  11 => 1,);
    }
}
/* {% extends 'SquadFttBundle::layout.html.twig' %}*/
/* {% block titre %}*/
/* */
/* {% endblock%}*/
/* */
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
/*             <li class="active" ><a href="{{ path('sanction')}}"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"/></svg> Sanctions</a></li>*/
/*             <li><a href="{{ path('formation')}}"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg> Formations</a></li>*/
/*             <li><a href="{{ path('gestionDopage')}}"><svg class="glyph stroked eye"><use xlink:href="#stroked-eye"/></svg> Gestion Dopage</a></li>*/
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
/*         <div class="panel panel-default">*/
/*             <div class="panel-heading"> Sanctionner: {{ entity1.nom }} {{ entity1.prenom }} </div>*/
/*             <div class="col-lg-6">*/
/*                 <div class="panel-body">  */
/* <form action="{{ path('sanction_create',{ 'id': b }) }}" method="POST" >*/
/*     {{ form(form) }}*/
/* </form>*/
/*         */
/* {% endblock %}*/
/* {% block third1 %}{% endblock %}*/
/*     {% block third2 %}{% endblock %}*/
/* {% block third3 %}{% endblock %}*/
/* {% block third4 %}{% endblock %}*/
/* {% block fourth1 %}{% endblock %}*/
/* {% block fourth2 %}{% endblock %}*/
/* */
/* */
