<?php

/* SquadFttBundle:Club:new.html.twig */
class __TwigTemplate_ab4ec3f0963c47e8a63f9c5165f69d4e9c6ecda37a93774bab315a51b42be8ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SquadFttBundle::layout.html.twig", "SquadFttBundle:Club:new.html.twig", 1);
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
        echo "  LISTE DES CLUBS";
    }

    // line 6
    public function block_menu($context, array $blocks = array())
    {
        // line 7
        echo "    <ul class=\"nav menu\">
        <li><a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("accueil");
        echo "\"><svg class=\"glyph stroked dashboard-dial\"><use xlink:href=\"#stroked-dashboard-dial\"></use></svg> Statistique</a></li>
<li><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("actualite");
        echo "\"><svg class=\"glyph stroked star\"><use xlink:href=\"#stroked-star\"></use></svg> Actualites</a></li>    
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
        <li><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("stade");
        echo "\"><svg class=\"glyph stroked location pin\"><use xlink:href=\"#stroked-location-pin\"/></svg> Stades</a></li>
        <li  class=\"active\"><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("club");
        echo "\"><svg class=\"glyph stroked home\"><use xlink:href=\"#stroked-home\"/></svg> Clubs</a></li>
                <li><a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("concour");
        echo "\"><svg class=\"glyph stroked home\"><use xlink:href=\"#stroked-home\"/></svg> Concours</a></li>

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
        // line 31
        echo "<div class=\"col-lg-12\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\"  style=\"background-color:  beige \"> Ajouter un nouveau club</div>
                <div class=\"col-lg-6\">
                    <div class=\"panel-body\">  
                        <form action=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("club_create");
        echo "\" method=\"POST\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " >
    
                         
                        ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libelleClub", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                        <br>
                        <br>
                        ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "emplacementClub", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                        <br>
                        <br>
                        ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nbreTerrains", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                        <br>
                        <br>
                        ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descriptionClub", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                        <br>
                        <br>
                        ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'row');
        echo "
 <br>
 <br>
                        ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit", array()), 'row', array("attr" => array("class" => "label label-primary")));
        echo "
                        <br>
                       

   
        <ul class=\"record_actions\">
    
       
    
</ul>
 ";
    }

    // line 66
    public function block_third1($context, array $blocks = array())
    {
    }

    // line 67
    public function block_third2($context, array $blocks = array())
    {
    }

    // line 68
    public function block_third3($context, array $blocks = array())
    {
    }

    // line 69
    public function block_third4($context, array $blocks = array())
    {
    }

    // line 70
    public function block_fourth1($context, array $blocks = array())
    {
    }

    // line 71
    public function block_fourth2($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "SquadFttBundle:Club:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 71,  203 => 70,  198 => 69,  193 => 68,  188 => 67,  183 => 66,  168 => 54,  162 => 51,  156 => 48,  150 => 45,  144 => 42,  138 => 39,  130 => 36,  123 => 31,  120 => 28,  115 => 27,  110 => 26,  105 => 25,  100 => 22,  93 => 19,  89 => 18,  84 => 16,  80 => 15,  76 => 14,  72 => 13,  68 => 12,  64 => 11,  60 => 10,  56 => 9,  52 => 8,  49 => 7,  46 => 6,  40 => 2,  11 => 1,);
    }
}
/* {% extends 'SquadFttBundle::layout.html.twig' %}*/
/* {% block titre %}  LISTE DES CLUBS{% endblock%}*/
/* */
/* */
/* */
/* {% block menu %}*/
/*     <ul class="nav menu">*/
/*         <li><a href="{{ path('accueil')}}"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Statistique</a></li>*/
/* <li><a href="{{ path('actualite')}}"><svg class="glyph stroked star"><use xlink:href="#stroked-star"></use></svg> Actualites</a></li>    */
/* <li><a href="{{ path('evenement')}}"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> Evenements</a></li>*/
/*         <li><a href="{{ path('joueur')}}"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg> Joueurs</a></li>*/
/*         <li><a href="{{ path('match')}}"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg> Matchs</a></li>*/
/*         <li><a href="{{ path('arbitre')}}"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg> Arbitres</a></li>*/
/*         <li><a href="{{ path('stade')}}"><svg class="glyph stroked location pin"><use xlink:href="#stroked-location-pin"/></svg> Stades</a></li>*/
/*         <li  class="active"><a href="{{ path('club')}}"><svg class="glyph stroked home"><use xlink:href="#stroked-home"/></svg> Clubs</a></li>*/
/*                 <li><a href="{{ path('concour')}}"><svg class="glyph stroked home"><use xlink:href="#stroked-home"/></svg> Concours</a></li>*/
/* */
/*         <li><a href="{{ path('formation')}}"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg> Formations</a></li>*/
/*         <li><a href="{{ path('gestionDopage')}}"><svg class="glyph stroked eye"><use xlink:href="#stroked-eye"/></svg> Gestion Dopage</a></li>*/
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
/*    */
/*         <div class="col-lg-12">*/
/*             <div class="panel panel-default">*/
/*                 <div class="panel-heading"  style="background-color:  beige "> Ajouter un nouveau club</div>*/
/*                 <div class="col-lg-6">*/
/*                     <div class="panel-body">  */
/*                         <form action="{{ path('club_create') }}" method="POST" {{form_enctype(form)}} >*/
/*     */
/*                          */
/*                         {{ form_row(form.libelleClub, { 'attr': {'class': 'form-control'} }   ) }}*/
/*                         <br>*/
/*                         <br>*/
/*                         {{ form_row(form.emplacementClub, { 'attr': {'class': 'form-control'} }   ) }}*/
/*                         <br>*/
/*                         <br>*/
/*                         {{ form_row(form.nbreTerrains, { 'attr': {'class': 'form-control'} }   ) }}*/
/*                         <br>*/
/*                         <br>*/
/*                         {{ form_row(form.descriptionClub, { 'attr': {'class': 'form-control'} }) }}*/
/*                         <br>*/
/*                         <br>*/
/*                         {{ form_row(form.file) }}*/
/*  <br>*/
/*  <br>*/
/*                         {{  form_row(form.submit, { 'attr': {'class': 'label label-primary'} }  ) }}*/
/*                         <br>*/
/*                        */
/* */
/*    */
/*         <ul class="record_actions">*/
/*     */
/*        */
/*     */
/* </ul>*/
/*  {% endblock %}    */
/*                        */
/*                 {% block third1 %}{% endblock %}*/
/*             {% block third2 %}{% endblock %}*/
/*         {% block third3 %}{% endblock %}*/
/*     {% block third4 %}{% endblock %}*/
/* {% block fourth1 %}{% endblock %}*/
/* {% block fourth2 %}{% endblock %}*/
/* */
