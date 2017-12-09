<?php

/* SquadFttBundle:Club:show.html.twig */
class __TwigTemplate_063498a403765c627b55d746210716e5ccb359cdfbb0d473fa711efb51f7549c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SquadFttBundle::layout.html.twig", "SquadFttBundle:Club:show.html.twig", 1);
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

    // line 3
    public function block_menu($context, array $blocks = array())
    {
        // line 4
        echo "    <ul class=\"nav menu\">
        <li><a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("accueil");
        echo "\"><svg class=\"glyph stroked dashboard-dial\"><use xlink:href=\"#stroked-dashboard-dial\"></use></svg> Statistique</a></li>
        <li ><a href=\"";
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
        <li><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("stade");
        echo "\"><svg class=\"glyph stroked location pin\"><use xlink:href=\"#stroked-location-pin\"/></svg> Stades</a></li>
        <li class=\"active\"><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("club");
        echo "\"><svg class=\"glyph stroked home\"><use xlink:href=\"#stroked-home\"/></svg> Clubs</a></li>
        <><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("actualite");
        echo "\"><svg class=\"glyph stroked star\"><use xlink:href=\"#stroked-star\"></use></svg> Concours</a></li>
    <li><a href=\"";
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

    // line 19
    public function block_first1($context, array $blocks = array())
    {
        // line 20
        echo "    <h1 >LISTE DES CLUB</h1>

    <table class=\"record_properties\">
        <tbody>
            <tr>

        <div class=\"col-md-4\">
            <div class=\"panel panel-primary\">
                <div class=\"panel-heading\">

                    ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "libelleClub", array()), "html", null, true);
        echo "
                </div>
                <div class=\"panel-body\">
                    <b style=\"color: #0044cc\" > Emplacement du club:  </b> ";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "emplacementClub", array()), "html", null, true);
        echo " <br>
                    <b style=\"color: #0044cc\" > Nombre de terrains:  </b> ";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nbreTerrains", array()), "html", null, true);
        echo " <br>
                    <b style=\"color: #0044cc\" > Description du club:  </b> <i>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "descriptionClub", array()), "html", null, true);
        echo "</i> <br>
                    
                    </tr>
                    <img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "imgClub", array()))), "html", null, true);
        echo "\" height=\"270\" width=\"280\" class=\"img-thumbnail\">  </img> 

                    </tbody>
                    </table>

                    <ul class=\"record_actions\">

                        


                        <a href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("club_edit", array("idClub" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idClub", array()))), "html", null, true);
        echo "\"   class=\"label label-warning\">
                            Modifier
                        </a>
                            ";
        // line 51
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form', array("attr" => array("style" => "display: inline-block")));
        echo "
                    </ul>
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
        return "SquadFttBundle:Club:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 63,  200 => 62,  195 => 61,  190 => 60,  185 => 59,  180 => 58,  175 => 57,  170 => 56,  165 => 55,  160 => 54,  153 => 51,  147 => 48,  134 => 38,  128 => 35,  124 => 34,  120 => 33,  114 => 30,  102 => 20,  99 => 19,  92 => 15,  88 => 14,  84 => 13,  80 => 12,  76 => 11,  72 => 10,  68 => 9,  64 => 8,  60 => 7,  56 => 6,  52 => 5,  49 => 4,  46 => 3,  40 => 2,  11 => 1,);
    }
}
/* {% extends 'SquadFttBundle::layout.html.twig' %}*/
/* {% block titre %}   {% endblock %}*/
/* {% block menu %}*/
/*     <ul class="nav menu">*/
/*         <li><a href="{{ path('accueil')}}"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Statistique</a></li>*/
/*         <li ><a href="{{ path('actualite')}}"><svg class="glyph stroked landscape"><use xlink:href="#stroked-landscape"/></svg> Actualites</a></li>*/
/*         <li><a href="{{ path('evenement')}}"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> Evenements</a></li>*/
/*         <li><a href="{{ path('joueur')}}"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg> Joueurs</a></li>*/
/*         <li><a href="{{ path('match')}}"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg> Matchs</a></li>*/
/*         <li><a href="{{ path('arbitre')}}"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg> Arbitres</a></li>*/
/*         <li><a href="{{ path('stade')}}"><svg class="glyph stroked location pin"><use xlink:href="#stroked-location-pin"/></svg> Stades</a></li>*/
/*         <li class="active"><a href="{{ path('club')}}"><svg class="glyph stroked home"><use xlink:href="#stroked-home"/></svg> Clubs</a></li>*/
/*         <><a href="{{ path('actualite')}}"><svg class="glyph stroked star"><use xlink:href="#stroked-star"></use></svg> Concours</a></li>*/
/*     <li><a href="{{ path('formation')}}"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg> Formations</a></li>*/
/*     <li><a href="{{ path('gestionDopage')}}"><svg class="glyph stroked eye"><use xlink:href="#stroked-eye"/></svg> Gestion Dopage</a></li>*/
/* </ul>  */
/* {% endblock %}*/
/* */
/* {% block first1 %}*/
/*     <h1 >LISTE DES CLUB</h1>*/
/* */
/*     <table class="record_properties">*/
/*         <tbody>*/
/*             <tr>*/
/* */
/*         <div class="col-md-4">*/
/*             <div class="panel panel-primary">*/
/*                 <div class="panel-heading">*/
/* */
/*                     {{ entity.libelleClub }}*/
/*                 </div>*/
/*                 <div class="panel-body">*/
/*                     <b style="color: #0044cc" > Emplacement du club:  </b> {{ entity.emplacementClub }} <br>*/
/*                     <b style="color: #0044cc" > Nombre de terrains:  </b> {{ entity.nbreTerrains }} <br>*/
/*                     <b style="color: #0044cc" > Description du club:  </b> <i>{{ entity.descriptionClub }}</i> <br>*/
/*                     */
/*                     </tr>*/
/*                     <img src="{{ asset( 'uploads/'~entity.imgClub) }}" height="270" width="280" class="img-thumbnail">  </img> */
/* */
/*                     </tbody>*/
/*                     </table>*/
/* */
/*                     <ul class="record_actions">*/
/* */
/*                         */
/* */
/* */
/*                         <a href="{{ path('club_edit', { 'idClub': entity.idClub }) }}"   class="label label-warning">*/
/*                             Modifier*/
/*                         </a>*/
/*                             {{ form(delete_form, {'attr' : { 'style' : 'display: inline-block' }}) }}*/
/*                     </ul>*/
/*                 {% endblock %}*/
/*             {% block first2 %}{% endblock %}*/
/*         {% block first3 %}{% endblock %}*/
/*     {% block first4 %}{% endblock %}*/
/* {% block second1 %}{% endblock %}*/
/* {% block third1  %}{% endblock %}*/
/* {% block third2 %}{% endblock %}*/
/* {% block third3 %}{% endblock %}*/
/* {% block third4 %}{% endblock %}*/
/* {% block fourth1 %}{% endblock %}*/
/* {% block fourth2 %}{% endblock %}*/
/* */
