<?php

/* SquadFttBundle:affichage:afficherConcour.html.twig */
class __TwigTemplate_6dfb78e430ef5eb714f5c476703aecb73f1935d8f5218f4c02b50c0b1285e41c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SquadFttBundle::layout.html.twig", "SquadFttBundle:affichage:afficherConcour.html.twig", 1);
        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'titre' => array($this, 'block_titre'),
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
    public function block_menu($context, array $blocks = array())
    {
        // line 3
        echo "    <ul class=\"nav menu\">
        <li><a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("accueil");
        echo "\"><svg class=\"glyph stroked dashboard-dial\"><use xlink:href=\"#stroked-dashboard-dial\"></use></svg> Statistique</a></li>
        <li><a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("actualite");
        echo "\"><svg class=\"glyph stroked landscape\"><use xlink:href=\"#stroked-landscape\"/></svg> Actualites</a></li>
        <li><a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("evenement");
        echo "\"><svg class=\"glyph stroked calendar\"><use xlink:href=\"#stroked-calendar\"></use></svg> Evenements</a></li>
        <li><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("joueur");
        echo "\"><svg class=\"glyph stroked male user \"><use xlink:href=\"#stroked-male-user\"/></svg> Joueurs</a></li>
        <li><a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("match");
        echo "\"><svg class=\"glyph stroked table\"><use xlink:href=\"#stroked-table\"></use></svg> Matchs</a></li>
        <li class=\"active\"><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("arbitre");
        echo "\"><svg class=\"glyph stroked male user \"><use xlink:href=\"#stroked-male-user\"/></svg> Arbitres</a></li>
        <li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("stade");
        echo "\"><svg class=\"glyph stroked location pin\"><use xlink:href=\"#stroked-location-pin\"/></svg> Stades</a></li>
        <li><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("club");
        echo "\"><svg class=\"glyph stroked home\"><use xlink:href=\"#stroked-home\"/></svg> Clubs</a></li>
        <li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("concour");
        echo "\"><svg class=\"glyph stroked star\"><use xlink:href=\"#stroked-star\"></use></svg> Concours</a></li>
        <li><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("formation");
        echo "\"><svg class=\"glyph stroked line-graph\"><use xlink:href=\"#stroked-line-graph\"></use></svg> Formations</a></li>
        <li><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("gestionDopage");
        echo "\"><svg class=\"glyph stroked eye\"><use xlink:href=\"#stroked-eye\"/></svg> Gestion Dopage</a></li>
    </ul> 
";
    }

    // line 17
    public function block_titre($context, array $blocks = array())
    {
        echo " concours  ";
    }

    // line 18
    public function block_first1($context, array $blocks = array())
    {
    }

    // line 19
    public function block_first2($context, array $blocks = array())
    {
    }

    // line 20
    public function block_first3($context, array $blocks = array())
    {
    }

    // line 21
    public function block_first4($context, array $blocks = array())
    {
    }

    // line 22
    public function block_second1($context, array $blocks = array())
    {
        // line 23
        echo "   
        <div class=\"col-lg-12\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\"> ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "libelleConcour", array()), "html", null, true);
        echo "</div>
                <div class=\"col-lg-6\">
                    <div class=\"panel-body\" >  
                        <p>
                        <pre>
<p5 style=\"font-size:120%;font-family:courier;\"><b>lieuConcour         :</b></p5> <p6 style=\"font-size:120%;\">";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "lieuConcour", array()), "html", null, true);
        echo "</p6>

<p5 style=\"font-size:120%;font-family:courier;\"><b>dateDebutConcour    :</b></p5> <p6 style=\"font-size:120%;\">";
        // line 33
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateDebutConcour", array()), "d-m-Y"), "html", null, true);
        echo "</p6>

<p5 style=\"font-size:120%;font-family:courier;\"><b>descriptionConcours :</b></p5> <p6 style=\"font-size:120%;\">";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "descriptionConcours", array()), "html", null, true);
        echo "</p6>

<p5 style=\"font-size:120%;font-family:courier;\"><b>fraisParticipation  :</b></p5> <p6 style=\"font-size:120%;\">";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fraisParticipation", array()), "html", null, true);
        echo "</p6>

<p5 style=\"font-size:120%;font-family:courier;\"><b>dateDebutDepot      :</b></p5> <p6 style=\"font-size:120%;\">";
        // line 39
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateDebutDepot", array()), "d-m-Y"), "html", null, true);
        echo "</p6>

<p5 style=\"font-size:120%;font-family:courier;\"><b>dateFinDepot        :</b></p5> <p6 style=\"font-size:120%;\">";
        // line 41
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateFinDepot", array()), "d-m-Y"), "html", null, true);
        echo "</p6>

<p5 style=\"font-size:120%;font-family:courier;\"><b>typeConcour         :</b></p5> <p6 style=\"font-size:120%;\">";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "typeConcour", array()), "html", null, true);
        echo "</p6>
        
                        </pre>
                        </p>
                        <a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("concour");
        echo "\" class=\"btn btn-primary btn-sm\"> Retour a la liste </a>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("postulation_newConcours", array("idConcour" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idConcour", array()))), "html", null, true);
        echo "\" class=\"btn btn-info btn-sm\">Postuler pour ce concours</a>

                        
                    </div>
                </div>
            </div>
            
                ";
    }

    // line 57
    public function block_third1($context, array $blocks = array())
    {
    }

    // line 58
    public function block_third2($context, array $blocks = array())
    {
    }

    // line 59
    public function block_third3($context, array $blocks = array())
    {
    }

    // line 60
    public function block_third4($context, array $blocks = array())
    {
    }

    // line 61
    public function block_fourth1($context, array $blocks = array())
    {
    }

    // line 62
    public function block_fourth2($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "SquadFttBundle:affichage:afficherConcour.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 62,  209 => 61,  204 => 60,  199 => 59,  194 => 58,  189 => 57,  177 => 49,  172 => 47,  165 => 43,  160 => 41,  155 => 39,  150 => 37,  145 => 35,  140 => 33,  135 => 31,  127 => 26,  122 => 23,  119 => 22,  114 => 21,  109 => 20,  104 => 19,  99 => 18,  93 => 17,  86 => 14,  82 => 13,  78 => 12,  74 => 11,  70 => 10,  66 => 9,  62 => 8,  58 => 7,  54 => 6,  50 => 5,  46 => 4,  43 => 3,  40 => 2,  11 => 1,);
    }
}
/* {% extends 'SquadFttBundle::layout.html.twig' %}*/
/* {% block menu %}*/
/*     <ul class="nav menu">*/
/*         <li><a href="{{ path('accueil')}}"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Statistique</a></li>*/
/*         <li><a href="{{ path('actualite')}}"><svg class="glyph stroked landscape"><use xlink:href="#stroked-landscape"/></svg> Actualites</a></li>*/
/*         <li><a href="{{ path('evenement')}}"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> Evenements</a></li>*/
/*         <li><a href="{{ path('joueur')}}"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg> Joueurs</a></li>*/
/*         <li><a href="{{ path('match')}}"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg> Matchs</a></li>*/
/*         <li class="active"><a href="{{ path('arbitre')}}"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg> Arbitres</a></li>*/
/*         <li><a href="{{ path('stade')}}"><svg class="glyph stroked location pin"><use xlink:href="#stroked-location-pin"/></svg> Stades</a></li>*/
/*         <li><a href="{{ path('club')}}"><svg class="glyph stroked home"><use xlink:href="#stroked-home"/></svg> Clubs</a></li>*/
/*         <li><a href="{{ path('concour')}}"><svg class="glyph stroked star"><use xlink:href="#stroked-star"></use></svg> Concours</a></li>*/
/*         <li><a href="{{ path('formation')}}"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg> Formations</a></li>*/
/*         <li><a href="{{ path('gestionDopage')}}"><svg class="glyph stroked eye"><use xlink:href="#stroked-eye"/></svg> Gestion Dopage</a></li>*/
/*     </ul> */
/* {% endblock %}*/
/* {% block titre %} concours  {% endblock %}*/
/* {% block first1 %}{% endblock %}*/
/* {% block first2 %}{% endblock %}*/
/* {% block first3 %}{% endblock %}*/
/* {% block first4 %}{% endblock %}*/
/* {% block second1 %}*/
/*    */
/*         <div class="col-lg-12">*/
/*             <div class="panel panel-default">*/
/*                 <div class="panel-heading"> {{entity.libelleConcour}}</div>*/
/*                 <div class="col-lg-6">*/
/*                     <div class="panel-body" >  */
/*                         <p>*/
/*                         <pre>*/
/* <p5 style="font-size:120%;font-family:courier;"><b>lieuConcour         :</b></p5> <p6 style="font-size:120%;">{{ entity.lieuConcour }}</p6>*/
/* */
/* <p5 style="font-size:120%;font-family:courier;"><b>dateDebutConcour    :</b></p5> <p6 style="font-size:120%;">{{ entity.dateDebutConcour|date('d-m-Y') }}</p6>*/
/* */
/* <p5 style="font-size:120%;font-family:courier;"><b>descriptionConcours :</b></p5> <p6 style="font-size:120%;">{{ entity.descriptionConcours }}</p6>*/
/* */
/* <p5 style="font-size:120%;font-family:courier;"><b>fraisParticipation  :</b></p5> <p6 style="font-size:120%;">{{ entity.fraisParticipation }}</p6>*/
/* */
/* <p5 style="font-size:120%;font-family:courier;"><b>dateDebutDepot      :</b></p5> <p6 style="font-size:120%;">{{ entity.dateDebutDepot|date('d-m-Y') }}</p6>*/
/* */
/* <p5 style="font-size:120%;font-family:courier;"><b>dateFinDepot        :</b></p5> <p6 style="font-size:120%;">{{ entity.dateFinDepot|date('d-m-Y') }}</p6>*/
/* */
/* <p5 style="font-size:120%;font-family:courier;"><b>typeConcour         :</b></p5> <p6 style="font-size:120%;">{{ entity.typeConcour }}</p6>*/
/*         */
/*                         </pre>*/
/*                         </p>*/
/*                         <a href="{{ path('concour') }}" class="btn btn-primary btn-sm"> Retour a la liste </a>*/
/*                         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
/*                         <a href="{{ path('postulation_newConcours', { 'idConcour': entity.idConcour }) }}" class="btn btn-info btn-sm">Postuler pour ce concours</a>*/
/* */
/*                         */
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             */
/*                 {% endblock %}    */
/*             {% block third1 %}{% endblock %}*/
/*         {% block third2 %}{% endblock %}*/
/*     {% block third3 %}{% endblock %}*/
/* {% block third4 %}{% endblock %}*/
/* {% block fourth1 %}{% endblock %}*/
/* {% block fourth2 %}{% endblock %}*/
/* */
