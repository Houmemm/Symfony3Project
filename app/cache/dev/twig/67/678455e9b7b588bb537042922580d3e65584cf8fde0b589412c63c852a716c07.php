<?php

/* SquadFttBundle:Actualites:show.html.twig */
class __TwigTemplate_88b3d457f08c3d6af34463a6cd76460db6c42508a3b16d55788090b9b9e43fc2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SquadFttBundle::layout.html.twig", "SquadFttBundle:Actualites:show.html.twig", 1);
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
        <li class=\"active\"><a href=\"";
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
        <li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("match");
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
        echo $this->env->getExtension('routing')->getPath("actualite");
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

    // line 20
    public function block_first1($context, array $blocks = array())
    {
        // line 21
        echo " <table class=\"record_properties\">
        <tbody>
            <tr>

        <div class=\"col-md-4\">
            <div class=\"panel panel-primary\">
                <div class=\"panel-heading\">

                    ";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titre", array()), "html", null, true);
        echo "
                </div>
                <div class=\"panel-body\" style=\"word-wrap: break-word!important\">
                    <p> ";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "corps", array()), "html", null, true);
        echo " </p> <br>
                   
                    <b style=\"color: #0044cc\" > Date de Redaction:  </b>";
        // line 34
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateredaction", array()), "Y-m-d"), "html", null, true);
        echo " <br> <br>
                    <b style=\"color: #0044cc\" > Etat:  </b>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "etat", array()), "html", null, true);
        echo "  <br>
                   
                    </tr>
                    <img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "photo", array()))), "html", null, true);
        echo "\" height=\"270\" width=\"280\" class=\"img-thumbnail\">  </img> 
                      </tbody>
                    </table>


     
  

    <row>     

    ";
    }

    // line 49
    public function block_first2($context, array $blocks = array())
    {
    }

    // line 50
    public function block_first3($context, array $blocks = array())
    {
    }

    // line 51
    public function block_first4($context, array $blocks = array())
    {
    }

    // line 52
    public function block_second1($context, array $blocks = array())
    {
        // line 55
        echo "<ul class=\"record_actions\">




        <a href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("actualite_edit", array("idactualite" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idactualite", array()))), "html", null, true);
        echo "\" 
           class=\"label label-warning\">
            Modifier l'actualite
        </a>
        ";
        // line 64
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form', array("attr" => array("style" => "display: inline-block")));
        echo "

    </ul>
</row>
";
    }

    // line 69
    public function block_third1($context, array $blocks = array())
    {
        // line 70
        echo "
";
    }

    // line 72
    public function block_third2($context, array $blocks = array())
    {
    }

    // line 73
    public function block_third3($context, array $blocks = array())
    {
    }

    // line 74
    public function block_third4($context, array $blocks = array())
    {
    }

    // line 75
    public function block_fourth1($context, array $blocks = array())
    {
    }

    // line 76
    public function block_fourth2($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "SquadFttBundle:Actualites:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 76,  212 => 75,  207 => 74,  202 => 73,  197 => 72,  192 => 70,  189 => 69,  180 => 64,  173 => 60,  166 => 55,  163 => 52,  158 => 51,  153 => 50,  148 => 49,  133 => 38,  127 => 35,  123 => 34,  118 => 32,  112 => 29,  102 => 21,  99 => 20,  92 => 16,  88 => 15,  84 => 14,  80 => 13,  76 => 12,  72 => 11,  68 => 10,  64 => 9,  60 => 8,  56 => 7,  52 => 6,  49 => 5,  46 => 4,  40 => 2,  11 => 1,);
    }
}
/* {% extends 'SquadFttBundle::layout.html.twig' %}*/
/* {% block titre %}   {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <ul class="nav menu">*/
/*         <li><a href="{{ path('accueil')}}"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Statistique</a></li>*/
/*         <li class="active"><a href="{{ path('actualite')}}"><svg class="glyph stroked landscape"><use xlink:href="#stroked-landscape"/></svg> Actualites</a></li>*/
/*         <li><a href="{{ path('evenement')}}"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> Evenements</a></li>*/
/*         <li><a href="{{ path('joueur')}}"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg> Joueurs</a></li>*/
/*         <li><a href="{{ path('match')}}"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg> Matchs</a></li>*/
/*         <li><a href="{{ path('arbitre')}}"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg> Arbitres</a></li>*/
/*         <li><a href="{{ path('stade')}}"><svg class="glyph stroked location pin"><use xlink:href="#stroked-location-pin"/></svg> Stades</a></li>*/
/*         <li><a href="{{ path('club')}}"><svg class="glyph stroked home"><use xlink:href="#stroked-home"/></svg> Clubs</a></li>*/
/*         <li><a href="{{ path('actualite')}}"><svg class="glyph stroked star"><use xlink:href="#stroked-star"></use></svg> Concours</a></li>*/
/*         <li><a href="{{ path('formation')}}"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg> Formations</a></li>*/
/*         <li><a href="{{ path('gestionDopage')}}"><svg class="glyph stroked eye"><use xlink:href="#stroked-eye"/></svg> Gestion Dopage</a></li>*/
/*     </ul>  */
/* {% endblock %}     */
/* */
/* {% block first1 %}*/
/*  <table class="record_properties">*/
/*         <tbody>*/
/*             <tr>*/
/* */
/*         <div class="col-md-4">*/
/*             <div class="panel panel-primary">*/
/*                 <div class="panel-heading">*/
/* */
/*                     {{ entity.titre}}*/
/*                 </div>*/
/*                 <div class="panel-body" style="word-wrap: break-word!important">*/
/*                     <p> {{ entity.corps }} </p> <br>*/
/*                    */
/*                     <b style="color: #0044cc" > Date de Redaction:  </b>{{ entity.dateredaction|date('Y-m-d') }} <br> <br>*/
/*                     <b style="color: #0044cc" > Etat:  </b>{{ entity.etat }}  <br>*/
/*                    */
/*                     </tr>*/
/*                     <img src="{{ asset( 'uploads/'~entity.photo) }}" height="270" width="280" class="img-thumbnail">  </img> */
/*                       </tbody>*/
/*                     </table>*/
/* */
/* */
/*      */
/*   */
/* */
/*     <row>     */
/* */
/*     {% endblock %}*/
/* {% block first2 %}{% endblock %}*/
/* {% block first3 %}{% endblock %}*/
/* {% block first4 %}{% endblock %}*/
/* {% block second1 -%}*/
/* */
/* */
/*     <ul class="record_actions">*/
/* */
/* */
/* */
/* */
/*         <a href="{{ path('actualite_edit', { 'idactualite': entity.idactualite }) }}" */
/*            class="label label-warning">*/
/*             Modifier l'actualite*/
/*         </a>*/
/*         {{ form(delete_form, {'attr' : { 'style' : 'display: inline-block' }}) }}*/
/* */
/*     </ul>*/
/* </row>*/
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
/* */
/* */
/* */
/* */
/*   */
