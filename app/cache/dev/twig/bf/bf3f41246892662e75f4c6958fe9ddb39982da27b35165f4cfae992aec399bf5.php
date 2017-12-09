<?php

/* SquadFttBundle:Evenement:edit.html.twig */
class __TwigTemplate_ac0d789490d6721aa217392fad9ea3388518fa55be6b67f8fd60b737bc938812 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SquadFttBundle::layout.html.twig", "SquadFttBundle:Evenement:edit.html.twig", 1);
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
        <li><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("actualite");
        echo "\"><svg class=\"glyph stroked landscape\"><use xlink:href=\"#stroked-landscape\"/></svg> Actualites</a></li>
        <li class=\"active\" ><a href=\"";
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
        echo $this->env->getExtension('routing')->getPath("concour");
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
        echo "

    <h1>Evenement edit</h1>

 
        <form  action=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("evenement_update", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idEvenement", array()))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'enctype');
        echo " >
        <input type=\"hidden\" name=\"_method\" value=\"PUT\" />
            <div class=\"col-lg-12\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\"> Ajouter un evenement </div>
                <div class=\"col-lg-6\">
                    <div class=\"panel-body\">  

                        ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "libelleEvenement", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "dateDebut", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "dateFin", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "type", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "site", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nbreJoueur", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "imageEve", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "statut", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "_token", array()), 'widget');
        echo " 
                        <br>
                        <table>
                        
                        <tr>
                        <td>";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "submit", array()), 'row', array("attr" => array("class" => "btn btn-primary")));
        echo " </td>
                        <td>_     _</td>
                        <td> ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), "submit", array()), 'row', array("attr" => array("class" => "btn btn-danger")));
        echo "</td>
                        </tr>
                        </table>
                        ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'rest');
        echo "
                        
</form>
                        
            ";
        // line 56
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
 
 
 ";
        // line 59
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
  
                      
    
";
    }

    // line 64
    public function block_first2($context, array $blocks = array())
    {
    }

    // line 65
    public function block_first3($context, array $blocks = array())
    {
    }

    // line 66
    public function block_first4($context, array $blocks = array())
    {
    }

    // line 67
    public function block_second1($context, array $blocks = array())
    {
    }

    // line 68
    public function block_third1($context, array $blocks = array())
    {
    }

    // line 69
    public function block_third2($context, array $blocks = array())
    {
    }

    // line 70
    public function block_third3($context, array $blocks = array())
    {
    }

    // line 71
    public function block_third4($context, array $blocks = array())
    {
    }

    // line 72
    public function block_fourth1($context, array $blocks = array())
    {
    }

    // line 73
    public function block_fourth2($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "SquadFttBundle:Evenement:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 73,  235 => 72,  230 => 71,  225 => 70,  220 => 69,  215 => 68,  210 => 67,  205 => 66,  200 => 65,  195 => 64,  186 => 59,  180 => 56,  173 => 52,  167 => 49,  162 => 47,  154 => 42,  150 => 41,  146 => 40,  142 => 39,  138 => 38,  134 => 37,  130 => 36,  126 => 35,  122 => 34,  109 => 26,  102 => 21,  99 => 20,  92 => 16,  88 => 15,  84 => 14,  80 => 13,  76 => 12,  72 => 11,  68 => 10,  64 => 9,  60 => 8,  56 => 7,  52 => 6,  49 => 5,  46 => 4,  40 => 2,  11 => 1,);
    }
}
/* {% extends 'SquadFttBundle::layout.html.twig' %}*/
/* {% block titre %}   {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <ul class="nav menu">*/
/*         <li><a href="{{ path('accueil')}}"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Statistique</a></li>*/
/*         <li><a href="{{ path('actualite')}}"><svg class="glyph stroked landscape"><use xlink:href="#stroked-landscape"/></svg> Actualites</a></li>*/
/*         <li class="active" ><a href="{{ path('evenement')}}"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> Evenements</a></li>*/
/*         <li><a href="{{ path('joueur')}}"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg> Joueurs</a></li>*/
/*         <li><a href="{{ path('match')}}"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg> Matchs</a></li>*/
/*         <li><a href="{{ path('arbitre')}}"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg> Arbitres</a></li>*/
/*         <li><a href="{{ path('stade')}}"><svg class="glyph stroked location pin"><use xlink:href="#stroked-location-pin"/></svg> Stades</a></li>*/
/*         <li><a href="{{ path('club')}}"><svg class="glyph stroked home"><use xlink:href="#stroked-home"/></svg> Clubs</a></li>*/
/*         <li><a href="{{ path('concour')}}"><svg class="glyph stroked star"><use xlink:href="#stroked-star"></use></svg> Concours</a></li>*/
/*         <li><a href="{{ path('formation')}}"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg> Formations</a></li>*/
/*         <li><a href="{{ path('gestionDopage')}}"><svg class="glyph stroked eye"><use xlink:href="#stroked-eye"/></svg> Gestion Dopage</a></li>*/
/*     </ul>  */
/* {% endblock %}       */
/* */
/* {% block first1 %}*/
/* */
/* */
/*     <h1>Evenement edit</h1>*/
/* */
/*  */
/*         <form  action="{{ path('evenement_update', { 'id': entity.idEvenement }) }}" method="post" {{ form_enctype(edit_form) }} >*/
/*         <input type="hidden" name="_method" value="PUT" />*/
/*             <div class="col-lg-12">*/
/*             <div class="panel panel-default">*/
/*                 <div class="panel-heading"> Ajouter un evenement </div>*/
/*                 <div class="col-lg-6">*/
/*                     <div class="panel-body">  */
/* */
/*                         {{ form_row(edit_form.libelleEvenement, { 'attr': {'class': 'form-control'} }   ) }}*/
/*                         {{ form_row(edit_form.dateDebut, { 'attr': {'class': 'form-control'} }   ) }}*/
/*                         {{ form_row(edit_form.dateFin, { 'attr': {'class': 'form-control'} }   ) }}*/
/*                         {{ form_row(edit_form.type, { 'attr': {'class': 'form-control'} }   ) }}*/
/*                         {{ form_row(edit_form.site, { 'attr': {'class': 'form-control'} }   ) }}*/
/*                         {{ form_row(edit_form.nbreJoueur, { 'attr': {'class': 'form-control'} }   ) }}*/
/*                         {{ form_row(edit_form.imageEve, { 'attr': {'class': 'form-control'} }   )  }}*/
/*                         {{ form_row(edit_form.statut, { 'attr': {'class': 'form-control'} }   )  }}*/
/*                         {{ form_widget(edit_form._token) }} */
/*                         <br>*/
/*                         <table>*/
/*                         */
/*                         <tr>*/
/*                         <td>{{  form_row(edit_form.submit, { 'attr': {'class': 'btn btn-primary'} }  ) }} </td>*/
/*                         <td>_     _</td>*/
/*                         <td> {{ form_row(delete_form.submit, {'attr': {'class': 'btn btn-danger'}}) }}</td>*/
/*                         </tr>*/
/*                         </table>*/
/*                         {{ form_rest(edit_form)}}*/
/*                         */
/* </form>*/
/*                         */
/*             {{ form_start(delete_form) }}*/
/*  */
/*  */
/*  {{ form_end(delete_form) }}*/
/*   */
/*                       */
/*     */
/* {% endblock %}*/
/* {% block first2 %}{% endblock %}*/
/* {% block first3 %}{% endblock %}*/
/* {% block first4 %}{% endblock %}*/
/* {% block second1 %}{% endblock %}*/
/* {% block third1 %}{% endblock %}    */
/* {% block third2 %}{% endblock %}*/
/* {% block third3 %}{% endblock %}*/
/* {% block third4 %}{% endblock %}*/
/* {% block fourth1 %}{% endblock %}*/
/* {% block fourth2 %}{% endblock %}*/
