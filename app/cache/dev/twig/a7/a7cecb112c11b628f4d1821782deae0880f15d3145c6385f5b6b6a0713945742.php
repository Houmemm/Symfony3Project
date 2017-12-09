<?php

/* SquadFttBundle:Joueur:show.html.twig */
class __TwigTemplate_2fa25e7dfd0f049bae70a4e4468592d2f99b15acb3b00eea15c2e90f36b2c534 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SquadFttBundle::layout.html.twig", "SquadFttBundle:Joueur:show.html.twig", 1);
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
        <li class=\"active\"><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("joueur");
        echo "\"><svg class=\"glyph stroked male user \"><use xlink:href=\"#stroked-male-user\"/></svg> Joueurs</a></li>
        <li><a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("match");
        echo "\"><svg class=\"glyph stroked table\"><use xlink:href=\"#stroked-table\"></use></svg> Matchs</a></li>
        <li><a href=\"";
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
        <li><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("articles");
        echo "\"><svg class=\"glyph stroked table\"><use xlink:href=\"#stroked-bag\"></use></svg> Articles</a></li>
    </ul> 
";
    }

    // line 18
    public function block_titre($context, array $blocks = array())
    {
        echo " Joueur  ";
    }

    // line 19
    public function block_first1($context, array $blocks = array())
    {
    }

    // line 20
    public function block_first2($context, array $blocks = array())
    {
    }

    // line 21
    public function block_first3($context, array $blocks = array())
    {
    }

    // line 22
    public function block_first4($context, array $blocks = array())
    {
    }

    // line 24
    public function block_second1($context, array $blocks = array())
    {
        // line 25
        echo "    <form  action=\"";
        echo $this->env->getExtension('routing')->getPath("joueur_create");
        echo "\" method=\"post\">
        <div class=\"col-lg-12\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\"> ";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "prenom", array()), "html", null, true);
        echo "</div>
                <div class=\"col-lg-6\">
                    <div class=\"panel-body\" >

                        <p>
                        <pre>
        <p5 style=\"font-size:200%;font-family:courier;\"><b>CIN              :</b></p5> <p6 style=\"font-size:200%;\">";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cinJoueur", array()), "html", null, true);
        echo "</p6>

        <p5 style=\"font-size:200%;font-family:courier;\"><b>Nom              :</b></p5> <p6 style=\"font-size:200%;\">";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nom", array()), "html", null, true);
        echo "</p6>

        <p5 style=\"font-size:200%;font-family:courier;\"><b>Prenom           :</b></p5> <p6 style=\"font-size:200%;\">";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "prenom", array()), "html", null, true);
        echo "</p6>

        <p5 style=\"font-size:200%;font-family:courier;\"><b>Date de naissance:</b></p5> <p6 style=\"font-size:200%;\">";
        // line 40
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateDeNaissance", array()), "d-m-Y"), "html", null, true);
        echo "</p6>

        <p5 style=\"font-size:200%;font-family:courier;\"><b>Points aquis     :</b></p5> <p6 style=\"font-size:200%;\">";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pointAquis", array()), "html", null, true);
        echo "</p6>

        <p5 style=\"font-size:200%;font-family:courier;\"><b>Categorie        :</b></p5> <p6 style=\"font-size:200%;\">";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "categorie", array()), "html", null, true);
        echo "</p6>

        <p5 style=\"font-size:200%;font-family:courier;\"><b>Taille           :</b></p5> <p6 style=\"font-size:200%;\">";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "taille", array()), "html", null, true);
        echo "</p6>

        <p5 style=\"font-size:200%;font-family:courier;\"><b>Poids            :</b></p5> <p6 style=\"font-size:200%;\">";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "poids", array()), "html", null, true);
        echo "</p6>

        <p5 style=\"font-size:200%;font-family:courier;\"><b>Main forte       :</b></p5> <p6 style=\"font-size:200%;\">";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "mainForte", array()), "html", null, true);
        echo "</p6>

        <p5 style=\"font-size:200%;font-family:courier;\"><b>Nationalite      :</b></p5> <p6 style=\"font-size:200%;\">";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nationaliterJoueur", array()), "html", null, true);
        echo "</p6>

        <p5 style=\"font-size:200%;font-family:courier;\"><b>Club             :</b></p5> <p6 style=\"font-size:200%;\">";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "clubClub", array()), "getLibelleClub", array(), "method"), "html", null, true);
        echo "</p6>

                            

                        </pre>
                        </p>

                        <a href=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("joueur");
        echo "\" class=\"btn btn-primary btn-sm\"> Retour a la liste </a>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("joueur_edit", array("cin" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cinJoueur", array()))), "html", null, true);
        echo "\" class=\"btn btn-warning btn-sm\"> Modifier </a>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("joueur_delete", array("cin" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cinJoueur", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger btn-sm\"> Supprimer </a>

                    </div>
                </div>
            </div>

            <div class=\"col-md-6\">

                <img src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/joueurs/" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "path", array()))), "html", null, true);
        echo "\" width=\"550\" height=\"380\" class=\"thumbnail\"  alt =\"\">

            </div>
        ";
    }

    // line 77
    public function block_third1($context, array $blocks = array())
    {
    }

    // line 78
    public function block_third2($context, array $blocks = array())
    {
    }

    // line 79
    public function block_third3($context, array $blocks = array())
    {
    }

    // line 80
    public function block_third4($context, array $blocks = array())
    {
    }

    // line 81
    public function block_fourth1($context, array $blocks = array())
    {
    }

    // line 82
    public function block_fourth2($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "SquadFttBundle:Joueur:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 82,  253 => 81,  248 => 80,  243 => 79,  238 => 78,  233 => 77,  225 => 73,  214 => 65,  209 => 63,  204 => 61,  194 => 54,  189 => 52,  184 => 50,  179 => 48,  174 => 46,  169 => 44,  164 => 42,  159 => 40,  154 => 38,  149 => 36,  144 => 34,  133 => 28,  126 => 25,  123 => 24,  118 => 22,  113 => 21,  108 => 20,  103 => 19,  97 => 18,  90 => 15,  86 => 14,  82 => 13,  78 => 12,  74 => 11,  70 => 10,  66 => 9,  62 => 8,  58 => 7,  54 => 6,  50 => 5,  46 => 4,  43 => 3,  40 => 2,  11 => 1,);
    }
}
/* {% extends 'SquadFttBundle::layout.html.twig' %}*/
/* {% block menu %}*/
/*     <ul class="nav menu">*/
/*         <li><a href="{{ path('accueil')}}"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Statistique</a></li>*/
/*         <li><a href="{{ path('actualite')}}"><svg class="glyph stroked landscape"><use xlink:href="#stroked-landscape"/></svg> Actualites</a></li>*/
/*         <li><a href="{{ path('evenement')}}"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> Evenements</a></li>*/
/*         <li class="active"><a href="{{ path('joueur')}}"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg> Joueurs</a></li>*/
/*         <li><a href="{{ path('match')}}"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg> Matchs</a></li>*/
/*         <li><a href="{{ path('arbitre')}}"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg> Arbitres</a></li>*/
/*         <li><a href="{{ path('stade')}}"><svg class="glyph stroked location pin"><use xlink:href="#stroked-location-pin"/></svg> Stades</a></li>*/
/*         <li><a href="{{ path('club')}}"><svg class="glyph stroked home"><use xlink:href="#stroked-home"/></svg> Clubs</a></li>*/
/*         <li><a href="{{ path('concour')}}"><svg class="glyph stroked star"><use xlink:href="#stroked-star"></use></svg> Concours</a></li>*/
/*         <li><a href="{{ path('formation')}}"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg> Formations</a></li>*/
/*         <li><a href="{{ path('gestionDopage')}}"><svg class="glyph stroked eye"><use xlink:href="#stroked-eye"/></svg> Gestion Dopage</a></li>*/
/*         <li><a href="{{ path('articles')}}"><svg class="glyph stroked table"><use xlink:href="#stroked-bag"></use></svg> Articles</a></li>*/
/*     </ul> */
/* {% endblock %}*/
/* {% block titre %} Joueur  {% endblock %}*/
/* {% block first1 %}{% endblock %}*/
/* {% block first2 %}{% endblock %}*/
/* {% block first3 %}{% endblock %}*/
/* {% block first4 %}{% endblock %}*/
/* */
/* {% block second1 %}*/
/*     <form  action="{{ path("joueur_create") }}" method="post">*/
/*         <div class="col-lg-12">*/
/*             <div class="panel panel-default">*/
/*                 <div class="panel-heading"> {{entity.nom}} {{entity.prenom}}</div>*/
/*                 <div class="col-lg-6">*/
/*                     <div class="panel-body" >*/
/* */
/*                         <p>*/
/*                         <pre>*/
/*         <p5 style="font-size:200%;font-family:courier;"><b>CIN              :</b></p5> <p6 style="font-size:200%;">{{ entity.cinJoueur }}</p6>*/
/* */
/*         <p5 style="font-size:200%;font-family:courier;"><b>Nom              :</b></p5> <p6 style="font-size:200%;">{{ entity.nom }}</p6>*/
/* */
/*         <p5 style="font-size:200%;font-family:courier;"><b>Prenom           :</b></p5> <p6 style="font-size:200%;">{{ entity.prenom }}</p6>*/
/* */
/*         <p5 style="font-size:200%;font-family:courier;"><b>Date de naissance:</b></p5> <p6 style="font-size:200%;">{{ entity.dateDeNaissance|date('d-m-Y') }}</p6>*/
/* */
/*         <p5 style="font-size:200%;font-family:courier;"><b>Points aquis     :</b></p5> <p6 style="font-size:200%;">{{ entity.pointAquis }}</p6>*/
/* */
/*         <p5 style="font-size:200%;font-family:courier;"><b>Categorie        :</b></p5> <p6 style="font-size:200%;">{{ entity.categorie }}</p6>*/
/* */
/*         <p5 style="font-size:200%;font-family:courier;"><b>Taille           :</b></p5> <p6 style="font-size:200%;">{{ entity.taille }}</p6>*/
/* */
/*         <p5 style="font-size:200%;font-family:courier;"><b>Poids            :</b></p5> <p6 style="font-size:200%;">{{ entity.poids }}</p6>*/
/* */
/*         <p5 style="font-size:200%;font-family:courier;"><b>Main forte       :</b></p5> <p6 style="font-size:200%;">{{ entity.mainForte }}</p6>*/
/* */
/*         <p5 style="font-size:200%;font-family:courier;"><b>Nationalite      :</b></p5> <p6 style="font-size:200%;">{{ entity.nationaliterJoueur }}</p6>*/
/* */
/*         <p5 style="font-size:200%;font-family:courier;"><b>Club             :</b></p5> <p6 style="font-size:200%;">{{ entity.clubClub.getLibelleClub() }}</p6>*/
/* */
/*                             */
/* */
/*                         </pre>*/
/*                         </p>*/
/* */
/*                         <a href="{{ path('joueur') }}" class="btn btn-primary btn-sm"> Retour a la liste </a>*/
/*                         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
/*                         <a href="{{ path('joueur_edit',{ 'cin': entity.cinJoueur }) }}" class="btn btn-warning btn-sm"> Modifier </a>*/
/*                         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
/*                         <a href="{{ path('joueur_delete',{ 'cin': entity.cinJoueur }) }}" class="btn btn-danger btn-sm"> Supprimer </a>*/
/* */
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="col-md-6">*/
/* */
/*                 <img src="{{asset('uploads/joueurs/'~entity.path)}}" width="550" height="380" class="thumbnail"  alt ="">*/
/* */
/*             </div>*/
/*         {% endblock %}    */
/*     {% block third1 %}{% endblock %}*/
/* {% block third2 %}{% endblock %}*/
/* {% block third3 %}{% endblock %}*/
/* {% block third4 %}{% endblock %}*/
/* {% block fourth1 %}{% endblock %}*/
/* {% block fourth2 %}{% endblock %}*/
/* */
