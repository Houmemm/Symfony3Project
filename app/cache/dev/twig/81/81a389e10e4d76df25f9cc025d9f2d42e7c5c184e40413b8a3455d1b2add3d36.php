<?php

/* SquadFttBundle:Concours:new.html.twig */
class __TwigTemplate_cd9b8aec0d6f8487450abbe6f35a38b67499a0d9351045cfa39998b86782595d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SquadFttBundle::layout.html.twig", "SquadFttBundle:Concours:new.html.twig", 1);
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
        echo "    Concours
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
        <li><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("stade");
        echo "\"><svg class=\"glyph stroked location pin\"><use xlink:href=\"#stroked-location-pin\"/></svg> Stades</a></li>
        <li><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("club");
        echo "\"><svg class=\"glyph stroked home\"><use xlink:href=\"#stroked-home\"/></svg> Clubs</a></li>
        <li class=\"active\"><a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("concour");
        echo "\"><svg class=\"glyph stroked star\"><use xlink:href=\"#stroked-star\"></use></svg> Concours</a></li>
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

    // line 21
    public function block_first1($context, array $blocks = array())
    {
    }

    // line 24
    public function block_first2($context, array $blocks = array())
    {
    }

    // line 25
    public function block_first3($context, array $blocks = array())
    {
    }

    // line 26
    public function block_first4($context, array $blocks = array())
    {
    }

    // line 27
    public function block_second1($context, array $blocks = array())
    {
        // line 28
        echo "<form  action=\"";
        echo $this->env->getExtension('routing')->getPath("concour_create");
        echo "\" method=\"post\">
        <div class=\"col-lg-12\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\"> Ajouter un concours </div>
                <div class=\"col-lg-6\">
                    <div class=\"panel-body\">  

                        ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libelleConcour", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateDebutConcour", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lieuConcour", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descriptionConcours", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fraisParticipation", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateDebutDepot", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateFinDepot", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "typeConcour", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "

                        ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit", array()), 'row', array("attr" => array("class" => "btn btn-primary")));
        echo "
                        <br>
                        <div> 
                            ";
        // line 47
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
                        </div>

                       
                                <a href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("concour");
        echo "\" class=\"btn btn-danger\" >
                                    Back to the list
                               
                        </ul>

                    </div>
                </div>
            </div>

            
                            
                                
                        </form>

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
        return "SquadFttBundle:Concours:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 71,  220 => 70,  215 => 69,  210 => 68,  205 => 67,  200 => 66,  181 => 51,  174 => 47,  168 => 44,  163 => 42,  159 => 41,  155 => 40,  151 => 39,  147 => 38,  143 => 37,  139 => 36,  135 => 35,  124 => 28,  121 => 27,  116 => 26,  111 => 25,  106 => 24,  101 => 21,  94 => 18,  90 => 17,  86 => 16,  82 => 15,  78 => 14,  74 => 13,  70 => 12,  66 => 11,  62 => 10,  58 => 9,  54 => 8,  51 => 7,  48 => 6,  43 => 3,  40 => 2,  11 => 1,);
    }
}
/* {% extends 'SquadFttBundle::layout.html.twig' %}*/
/* {% block titre %}*/
/*     Concours*/
/* {% endblock%}*/
/* */
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
/*         <li class="active"><a href="{{ path('concour')}}"><svg class="glyph stroked star"><use xlink:href="#stroked-star"></use></svg> Concours</a></li>*/
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
/*     <form  action="{{ path("concour_create") }}" method="post">*/
/*         <div class="col-lg-12">*/
/*             <div class="panel panel-default">*/
/*                 <div class="panel-heading"> Ajouter un concours </div>*/
/*                 <div class="col-lg-6">*/
/*                     <div class="panel-body">  */
/* */
/*                         {{ form_row(form.libelleConcour, { 'attr': {'class': 'form-control'} }   ) }}*/
/*                         {{ form_row(form.dateDebutConcour, { 'attr': {'class': 'form-control'} }   ) }}*/
/*                         {{ form_row(form.lieuConcour, { 'attr': {'class': 'form-control'} }   ) }}*/
/*                         {{ form_row(form.descriptionConcours, { 'attr': {'class': 'form-control'} }   ) }}*/
/*                         {{ form_row(form.fraisParticipation, { 'attr': {'class': 'form-control'} }   ) }}*/
/*                         {{ form_row(form.dateDebutDepot, { 'attr': {'class': 'form-control'} }   ) }}*/
/*                         {{ form_row(form.dateFinDepot, { 'attr': {'class': 'form-control'} }   ) }}*/
/*                         {{ form_row(form.typeConcour, { 'attr': {'class': 'form-control'} }   ) }}*/
/* */
/*                         {{  form_row(form.submit, { 'attr': {'class': 'btn btn-primary'} }  ) }}*/
/*                         <br>*/
/*                         <div> */
/*                             {{ form(form)}}*/
/*                         </div>*/
/* */
/*                        */
/*                                 <a href="{{ path('concour') }}" class="btn btn-danger" >*/
/*                                     Back to the list*/
/*                                */
/*                         </ul>*/
/* */
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             */
/*                             */
/*                                 */
/*                         </form>*/
/* */
/*                     {% endblock %}    */
/*                 {% block third1 %}{% endblock %}*/
/*             {% block third2 %}{% endblock %}*/
/*         {% block third3 %}{% endblock %}*/
/*     {% block third4 %}{% endblock %}*/
/* {% block fourth1 %}{% endblock %}*/
/* {% block fourth2 %}{% endblock %}*/
