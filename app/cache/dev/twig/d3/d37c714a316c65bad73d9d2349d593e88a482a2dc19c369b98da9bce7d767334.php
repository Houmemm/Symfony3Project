<?php

/* SquadFttBundle:Actualites:new.html.twig */
class __TwigTemplate_7caee64981d8a0320383a123c7998d4c53c1e63cf4df66389f1a2e6fb0480331 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SquadFttBundle::layout.html.twig", "SquadFttBundle:Actualites:new.html.twig", 1);
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
        echo "   ACTUALITES
";
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
<li class=\"active\"><a href=\"";
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
        <li><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("club");
        echo "\"><svg class=\"glyph stroked home\"><use xlink:href=\"#stroked-home\"/></svg> Clubs</a></li>
        <li><a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("concour");
        echo "\"><svg class=\"glyph stroked home\"><use xlink:href=\"#stroked-home\"/></svg> Concours</a></li>
        <li><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("formation");
        echo "\"><svg class=\"glyph stroked line-graph\"><use xlink:href=\"#stroked-line-graph\"></use></svg> Formations</a></li>
        <li><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("gestionDopage");
        echo "\"><svg class=\"glyph stroked eye\"><use xlink:href=\"#stroked-eye\"/></svg> Gestion Dopage</a></li>
    </ul>  
        
";
    }

    // line 22
    public function block_first1($context, array $blocks = array())
    {
    }

    // line 23
    public function block_first2($context, array $blocks = array())
    {
    }

    // line 24
    public function block_first3($context, array $blocks = array())
    {
    }

    // line 25
    public function block_first4($context, array $blocks = array())
    {
    }

    // line 26
    public function block_second1($context, array $blocks = array())
    {
        // line 28
        echo "<div class=\"col-lg-12\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\" style=\"background-color:  beige \"> Rediger une nouvelle actualite </div>
                <div class=\"col-lg-6\">
                    <div class=\"panel-body\">  
                        <form action=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("actualite_create");
        echo "\" method=\"POST\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " >
    
                         
                        ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                        <br>
                        <br>
                        ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "corps", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                        <br> 
                        <br>
                        ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "etat", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                        <br>
                        <br>
                        ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'row');
        echo "
                        <br>
                        <br>
                        ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit", array()), 'row', array("attr" => array("class" => "label label-primary")));
        echo "
                       
                       
                            
                        

                        <ul class=\"record_actions\">
                            
                        
                            
                        </ul>

                    </div>
                </div>
            </div>

            
                          </form>  
                        </form>        
                        </form>

                    ";
    }

    // line 70
    public function block_third1($context, array $blocks = array())
    {
    }

    // line 71
    public function block_third2($context, array $blocks = array())
    {
    }

    // line 72
    public function block_third3($context, array $blocks = array())
    {
    }

    // line 73
    public function block_third4($context, array $blocks = array())
    {
    }

    // line 74
    public function block_fourth1($context, array $blocks = array())
    {
    }

    // line 75
    public function block_fourth2($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "SquadFttBundle:Actualites:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 75,  210 => 74,  205 => 73,  200 => 72,  195 => 71,  190 => 70,  164 => 48,  158 => 45,  152 => 42,  146 => 39,  140 => 36,  132 => 33,  125 => 28,  122 => 26,  117 => 25,  112 => 24,  107 => 23,  102 => 22,  94 => 18,  90 => 17,  86 => 16,  82 => 15,  78 => 14,  74 => 13,  70 => 12,  66 => 11,  62 => 10,  58 => 9,  54 => 8,  51 => 7,  48 => 6,  43 => 3,  40 => 2,  11 => 1,);
    }
}
/* {% extends 'SquadFttBundle::layout.html.twig' %}*/
/* {% block titre %}*/
/*    ACTUALITES*/
/* {% endblock%}*/
/* */
/* {% block menu %}*/
/*     <ul class="nav menu">*/
/*         <li><a href="{{ path('accueil')}}"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Statistique</a></li>*/
/* <li class="active"><a href="{{ path('actualite')}}"><svg class="glyph stroked star"><use xlink:href="#stroked-star"></use></svg> Actualites</a></li>    */
/* <li><a href="{{ path('evenement')}}"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> Evenements</a></li>*/
/*         <li><a href="{{ path('joueur')}}"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg> Joueurs</a></li>*/
/*         <li><a href="{{ path('match')}}"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg> Matchs</a></li>*/
/*         <li><a href="{{ path('arbitre')}}"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg> Arbitres</a></li>*/
/*         <li><a href="{{ path('stade')}}"><svg class="glyph stroked location pin"><use xlink:href="#stroked-location-pin"/></svg> Stades</a></li>*/
/*         <li><a href="{{ path('club')}}"><svg class="glyph stroked home"><use xlink:href="#stroked-home"/></svg> Clubs</a></li>*/
/*         <li><a href="{{ path('concour')}}"><svg class="glyph stroked home"><use xlink:href="#stroked-home"/></svg> Concours</a></li>*/
/*         <li><a href="{{ path('formation')}}"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg> Formations</a></li>*/
/*         <li><a href="{{ path('gestionDopage')}}"><svg class="glyph stroked eye"><use xlink:href="#stroked-eye"/></svg> Gestion Dopage</a></li>*/
/*     </ul>  */
/*         */
/* {% endblock %} */
/* {% block first1 %}{% endblock %}*/
/* {% block first2 %}{% endblock %}*/
/* {% block first3 %}{% endblock %}*/
/* {% block first4 %}{% endblock %}*/
/* {% block second1 -%}*/
/*    */
/*         <div class="col-lg-12">*/
/*             <div class="panel panel-default">*/
/*                 <div class="panel-heading" style="background-color:  beige "> Rediger une nouvelle actualite </div>*/
/*                 <div class="col-lg-6">*/
/*                     <div class="panel-body">  */
/*                         <form action="{{ path('actualite_create') }}" method="POST" {{form_enctype(form)}} >*/
/*     */
/*                          */
/*                         {{ form_row(form.titre, { 'attr': {'class': 'form-control'} }   ) }}*/
/*                         <br>*/
/*                         <br>*/
/*                         {{ form_row(form.corps, { 'attr': {'class': 'form-control'} }   ) }}*/
/*                         <br> */
/*                         <br>*/
/*                         {{ form_row(form.etat, { 'attr': {'class': 'form-control'} }   ) }}*/
/*                         <br>*/
/*                         <br>*/
/*                         {{ form_row(form.file) }}*/
/*                         <br>*/
/*                         <br>*/
/*                         {{  form_row(form.submit, { 'attr': {'class': 'label label-primary'} }  ) }}*/
/*                        */
/*                        */
/*                             */
/*                         */
/* */
/*                         <ul class="record_actions">*/
/*                             */
/*                         */
/*                             */
/*                         </ul>*/
/* */
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             */
/*                           </form>  */
/*                         </form>        */
/*                         </form>*/
/* */
/*                     {% endblock %}    */
/*                 {% block third1 %}{% endblock %}*/
/*             {% block third2 %}{% endblock %}*/
/*         {% block third3 %}{% endblock %}*/
/*     {% block third4 %}{% endblock %}*/
/* {% block fourth1 %}{% endblock %}*/
/* {% block fourth2 %}{% endblock %}*/
