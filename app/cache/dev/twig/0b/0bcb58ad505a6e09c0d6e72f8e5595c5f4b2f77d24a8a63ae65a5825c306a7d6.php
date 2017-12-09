<?php

/* SquadFttBundle:Articles:show.html.twig */
class __TwigTemplate_3a8bd754b097b5acaeb78650e987bc22f16fe83f5ab612a0c6cf674f00efe936 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SquadFttBundle::layout.html.twig", "SquadFttBundle:Articles:show.html.twig", 1);
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
        <li class=\"active\"><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("articles");
        echo "\"><svg class=\"glyph stroked table\"><use xlink:href=\"#stroked-bag\"></use></svg> Articles</a></li>
    </ul> 
";
    }

    // line 18
    public function block_titre($context, array $blocks = array())
    {
        echo " Article  ";
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
        echo $this->env->getExtension('routing')->getPath("articles_create");
        echo "\" method=\"post\">
        <div class=\"col-lg-12\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\"> ";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "libelleArticle", array()), "html", null, true);
        echo "</div>
                <div class=\"col-lg-6\">
                    <div class=\"panel-body\" >  
                        <p>
                        <pre>
        <p5 style=\"font-size:200%;font-family:courier;\"><b>Libelle     :</b></p5> <p6 style=\"font-size:150%;\">";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "libelleArticle", array()), "html", null, true);
        echo "</p6>

        <p5 style=\"font-size:200%;font-family:courier;\"><b>Prix        :</b></p5> <p6 style=\"font-size:150%;\">";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "prix", array()), "html", null, true);
        echo " Dt</p6>

        <p5 style=\"font-size:200%;font-family:courier;\"><b>Etat        :</b></p5> <p6 style=\"font-size:150%;\">";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "etatArticle", array()), "html", null, true);
        echo "</p6>

        <p5 style=\"font-size:200%;font-family:courier;\"><b>Description :</b></p5> <p6 style=\"font-size:150%;\">";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description", array()), "html", null, true);
        echo "</p6>

                        </pre>
                        </p>
                        <a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("articles");
        echo "\" class=\"btn btn-primary btn-sm\"> Retour a la liste </a>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("articles_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idArticle", array()))), "html", null, true);
        echo "\" class=\"btn btn-warning btn-sm\"> Modifier </a>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("articles_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idArticle", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger btn-sm\"> Supprimer </a>

                    </div>
                </div>
            </div>

            <div class=\"col-md-6\">

                <img src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("upload/articles/" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pathArticle", array()))), "html", null, true);
        echo "\" width=\"550\" height=\"380\" class=\"thumbnail\"  alt =\"\">

            </div>
        ";
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
        return "SquadFttBundle:Articles:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 64,  212 => 63,  207 => 62,  202 => 61,  197 => 60,  192 => 59,  184 => 55,  173 => 47,  168 => 45,  163 => 43,  156 => 39,  151 => 37,  146 => 35,  141 => 33,  133 => 28,  126 => 25,  123 => 24,  118 => 22,  113 => 21,  108 => 20,  103 => 19,  97 => 18,  90 => 15,  86 => 14,  82 => 13,  78 => 12,  74 => 11,  70 => 10,  66 => 9,  62 => 8,  58 => 7,  54 => 6,  50 => 5,  46 => 4,  43 => 3,  40 => 2,  11 => 1,);
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
/*         <li><a href="{{ path('arbitre')}}"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg> Arbitres</a></li>*/
/*         <li><a href="{{ path('stade')}}"><svg class="glyph stroked location pin"><use xlink:href="#stroked-location-pin"/></svg> Stades</a></li>*/
/*         <li><a href="{{ path('club')}}"><svg class="glyph stroked home"><use xlink:href="#stroked-home"/></svg> Clubs</a></li>*/
/*         <li><a href="{{ path('concour')}}"><svg class="glyph stroked star"><use xlink:href="#stroked-star"></use></svg> Concours</a></li>*/
/*         <li><a href="{{ path('formation')}}"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg> Formations</a></li>*/
/*         <li><a href="{{ path('gestionDopage')}}"><svg class="glyph stroked eye"><use xlink:href="#stroked-eye"/></svg> Gestion Dopage</a></li>*/
/*         <li class="active"><a href="{{ path('articles')}}"><svg class="glyph stroked table"><use xlink:href="#stroked-bag"></use></svg> Articles</a></li>*/
/*     </ul> */
/* {% endblock %}*/
/* {% block titre %} Article  {% endblock %}*/
/* {% block first1 %}{% endblock %}*/
/* {% block first2 %}{% endblock %}*/
/* {% block first3 %}{% endblock %}*/
/* {% block first4 %}{% endblock %}*/
/* */
/* {% block second1 %}*/
/*     <form  action="{{ path("articles_create") }}" method="post">*/
/*         <div class="col-lg-12">*/
/*             <div class="panel panel-default">*/
/*                 <div class="panel-heading"> {{entity.libelleArticle}}</div>*/
/*                 <div class="col-lg-6">*/
/*                     <div class="panel-body" >  */
/*                         <p>*/
/*                         <pre>*/
/*         <p5 style="font-size:200%;font-family:courier;"><b>Libelle     :</b></p5> <p6 style="font-size:150%;">{{ entity.libelleArticle }}</p6>*/
/* */
/*         <p5 style="font-size:200%;font-family:courier;"><b>Prix        :</b></p5> <p6 style="font-size:150%;">{{ entity.prix }} Dt</p6>*/
/* */
/*         <p5 style="font-size:200%;font-family:courier;"><b>Etat        :</b></p5> <p6 style="font-size:150%;">{{ entity.etatArticle }}</p6>*/
/* */
/*         <p5 style="font-size:200%;font-family:courier;"><b>Description :</b></p5> <p6 style="font-size:150%;">{{ entity.description }}</p6>*/
/* */
/*                         </pre>*/
/*                         </p>*/
/*                         <a href="{{ path('articles') }}" class="btn btn-primary btn-sm"> Retour a la liste </a>*/
/*                         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
/*                         <a href="{{ path('articles_edit',{ 'id': entity.idArticle }) }}" class="btn btn-warning btn-sm"> Modifier </a>*/
/*                         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
/*                         <a href="{{ path('articles_delete',{ 'id': entity.idArticle }) }}" class="btn btn-danger btn-sm"> Supprimer </a>*/
/* */
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="col-md-6">*/
/* */
/*                 <img src="{{asset('upload/articles/'~entity.pathArticle)}}" width="550" height="380" class="thumbnail"  alt ="">*/
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
