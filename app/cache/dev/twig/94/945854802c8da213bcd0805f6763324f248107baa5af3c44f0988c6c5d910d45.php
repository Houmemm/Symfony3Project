<?php

/* SquadFttBundle:Rapport:edit.html.twig */
class __TwigTemplate_8841c5631e1bcfe8608ea4352ff9402e6336742db86c7022c6ccdc9399030692 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SquadFttBundle::layout.html.twig", "SquadFttBundle:Rapport:edit.html.twig", 1);
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
        echo "    Rapport
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
        echo "    <ul class=\"nav menu\">
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("accueil");
        echo "\"><svg class=\"glyph stroked dashboard-dial\"><use xlink:href=\"#stroked-dashboard-dial\"></use></svg> Statistique</a></li>
        <li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("actualite");
        echo "\"><svg class=\"glyph stroked landscape\"><use xlink:href=\"#stroked-landscape\"/></svg> Actualites</a></li>
        <li><a href=\"";
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
        <li ><a href=\"";
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
        <li class=\"active\"><a href=\"";
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
        // line 31
        echo "<div class=\"col-lg-12\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\"> Modifier un rapport </div>
            <div class=\"col-lg-6\">
                <div class=\"panel-body\">  
                    ";
        // line 36
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "
                    <br>



                </div>
            </div>
        </div>
    </div>

    <a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("rapport");
        echo "\">Retour a la liste</a>
";
    }

    // line 48
    public function block_third1($context, array $blocks = array())
    {
    }

    // line 49
    public function block_third2($context, array $blocks = array())
    {
    }

    // line 50
    public function block_third3($context, array $blocks = array())
    {
    }

    // line 51
    public function block_third4($context, array $blocks = array())
    {
    }

    // line 52
    public function block_fourth1($context, array $blocks = array())
    {
    }

    // line 53
    public function block_fourth2($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "SquadFttBundle:Rapport:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 53,  180 => 52,  175 => 51,  170 => 50,  165 => 49,  160 => 48,  154 => 46,  141 => 36,  134 => 31,  131 => 29,  126 => 28,  121 => 27,  116 => 26,  111 => 23,  104 => 20,  100 => 19,  96 => 18,  92 => 17,  88 => 16,  84 => 15,  80 => 14,  76 => 13,  72 => 12,  68 => 11,  64 => 10,  60 => 9,  57 => 8,  54 => 7,  49 => 5,  44 => 3,  41 => 2,  11 => 1,);
    }
}
/* {% extends 'SquadFttBundle::layout.html.twig' %}*/
/* {% block titre %}*/
/*     Rapport*/
/* {% endblock%}*/
/* {% block suppress %}*/
/* {% endblock %}*/
/* {% block menu %}*/
/*     <ul class="nav menu">*/
/*         <li><a href="{{ path('accueil')}}"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Statistique</a></li>*/
/*         <li><a href="{{ path('actualite')}}"><svg class="glyph stroked landscape"><use xlink:href="#stroked-landscape"/></svg> Actualites</a></li>*/
/*         <li><a href="{{ path('evenement')}}"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> Evenements</a></li>*/
/*         <li><a href="{{ path('joueur')}}"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg> Joueurs</a></li>*/
/*         <li><a href="{{ path('match')}}"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg> Matchs</a></li>*/
/*         <li><a href="{{ path('arbitre')}}"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg> Arbitres</a></li>*/
/*         <li ><a href="{{ path('stade')}}"><svg class="glyph stroked location pin"><use xlink:href="#stroked-location-pin"/></svg> Stades</a></li>*/
/*         <li><a href="{{ path('club')}}"><svg class="glyph stroked home"><use xlink:href="#stroked-home"/></svg> Clubs</a></li>*/
/*         <li><a href="{{ path('concour')}}"><svg class="glyph stroked star"><use xlink:href="#stroked-star"></use></svg> Concours</a></li>*/
/*         <li><a href="{{ path('sanction')}}"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"/></svg> Sanction</a></li>*/
/*         <li><a href="{{ path('formation')}}"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg> Formations</a></li>*/
/*         <li class="active"><a href="{{ path('gestionDopage')}}"><svg class="glyph stroked eye"><use xlink:href="#stroked-eye"/></svg> Gestion Dopage</a></li>*/
/*     </ul>  */
/* {% endblock %} */
/* {% block first1 %}{% endblock %}*/
/* */
/* */
/* {% block first2 %}{% endblock %}*/
/* {% block first3 %}{% endblock %}*/
/* {% block first4 %}{% endblock %}*/
/* {% block second1 -%}*/
/* */
/*     <div class="col-lg-12">*/
/*         <div class="panel panel-default">*/
/*             <div class="panel-heading"> Modifier un rapport </div>*/
/*             <div class="col-lg-6">*/
/*                 <div class="panel-body">  */
/*                     {{ form(edit_form) }}*/
/*                     <br>*/
/* */
/* */
/* */
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <a href="{{path('rapport')}}">Retour a la liste</a>*/
/* {% endblock %}  */
/* {% block third1 %}{% endblock %}*/
/* {% block third2 %}{% endblock %}*/
/* {% block third3 %}{% endblock %}*/
/* {% block third4 %}{% endblock %}*/
/* {% block fourth1 %}{% endblock %}*/
/* {% block fourth2 %}{% endblock %}{# empty Twig template #}*/
/* */
/* */
/* */
/* */
