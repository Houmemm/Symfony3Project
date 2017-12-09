<?php

/* SquadFttBundle:Joueur:new.html.twig */
class __TwigTemplate_69be47d562ca399d1e39c3d5ad3ceb75c49fea326ea668d4efa1b887e962b158 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SquadFttBundle::layout.html.twig", "SquadFttBundle:Joueur:new.html.twig", 1);
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
        echo " Ajout d'un joueur  ";
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
        <li><a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("evenement");
        echo "\"><svg class=\"glyph stroked calendar\"><use xlink:href=\"#stroked-calendar\"></use></svg> Evenements</a></li>
        <li class=\"active\"><a href=\"";
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
        <li><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("articles");
        echo "\"><svg class=\"glyph stroked table\"><use xlink:href=\"#stroked-bag\"></use></svg> Articles</a></li>
    </ul> 
";
    }

    // line 20
    public function block_first1($context, array $blocks = array())
    {
    }

    // line 21
    public function block_first2($context, array $blocks = array())
    {
    }

    // line 22
    public function block_first3($context, array $blocks = array())
    {
    }

    // line 23
    public function block_first4($context, array $blocks = array())
    {
    }

    // line 25
    public function block_second1($context, array $blocks = array())
    {
        // line 26
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        <div class=\"col-lg-12\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\"> Ajouter un Joueur </div>
                <div class=\"col-lg-6\">
                    <div class=\"panel-body\">  

                        ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cinJoueur", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateDeNaissance", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categorie", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pointAquis", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "taille", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "poids", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mainForte", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nationaliterJoueur", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'row');
        echo "

                        <br>

                        ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit", array()), 'row', array("attr" => array("class" => "btn btn-primary")));
        echo "
                        <br>
                        <a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("joueur");
        echo "\" class=\"btn btn-primary\"> Retour a la liste </a>

                        <br>
                        <div> 
                            ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                        </div>




                    </div>
                </div>
            </div>

            <div class=\"col-md-6\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-body tabs\">
                        <ul class=\"nav nav-tabs\">                            
                            <li class=\"active\"><a href=\"#tabClub\" data-toggle=\"tab\">Club</a></li>
                        </ul>

                        <div class=\"tab-content\">


                            <div class=\"tab-pane fade in active\" id=\"tabClub\">

                                <table class=\"table table-striped\" data-toggle=\"table\" data-url=\"tables/data1.json\"  data-show-refresh=\"true\" data-show-toggle=\"true\" data-show-columns=\"true\" data-search=\"true\" data-select-item-name=\"toolbar1\" data-pagination=\"true\" data-sort-name=\"name\" data-sort-order=\"desc\">
                                    <thead>
                                        <tr class=\"info\">
                                            <th>Libelle</th>
                                            <th>Adresse</th>
                                            <th>Nbre de terrains</th>
                                            <th>Selection</th>
                                        </tr>
                                    </thead>
                                    <tbody  >
                                        ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["club"]) ? $context["club"] : $this->getContext($context, "club")));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 86
            echo "                                            <tr>
                                                <td>";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "libelleClub", array()), "html", null, true);
            echo "</td>
                                                <td> ";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "emplacementClub", array()), "html", null, true);
            echo " </td>
                                                <td>";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "nbreTerrains", array()), "html", null, true);
            echo " </td>
                                                <td> <input type=\"radio\" name=\"clubs[]\" value=\"";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "idClub", array()), "html", null, true);
            echo "\">  </td>
                                            </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div><!--/.panel-->
                    </form>

                ";
    }

    // line 103
    public function block_third1($context, array $blocks = array())
    {
    }

    // line 104
    public function block_third2($context, array $blocks = array())
    {
    }

    // line 105
    public function block_third3($context, array $blocks = array())
    {
    }

    // line 106
    public function block_third4($context, array $blocks = array())
    {
    }

    // line 107
    public function block_fourth1($context, array $blocks = array())
    {
    }

    // line 108
    public function block_fourth2($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "SquadFttBundle:Joueur:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  296 => 108,  291 => 107,  286 => 106,  281 => 105,  276 => 104,  271 => 103,  258 => 93,  249 => 90,  245 => 89,  241 => 88,  237 => 87,  234 => 86,  230 => 85,  195 => 53,  188 => 49,  183 => 47,  176 => 43,  172 => 42,  168 => 41,  164 => 40,  160 => 39,  156 => 38,  152 => 37,  148 => 36,  144 => 35,  140 => 34,  136 => 33,  126 => 26,  123 => 25,  118 => 23,  113 => 22,  108 => 21,  103 => 20,  96 => 17,  92 => 16,  88 => 15,  84 => 14,  80 => 13,  76 => 12,  72 => 11,  68 => 10,  64 => 9,  60 => 8,  56 => 7,  52 => 6,  49 => 5,  46 => 4,  40 => 2,  11 => 1,);
    }
}
/* {% extends 'SquadFttBundle::layout.html.twig' %}*/
/* {% block titre %} Ajout d'un joueur  {% endblock %}*/
/* */
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
/* {% block first1 %}{% endblock %}*/
/* {% block first2 %}{% endblock %}*/
/* {% block first3 %}{% endblock %}*/
/* {% block first4 %}{% endblock %}*/
/* */
/* {% block second1 -%}*/
/*     {{ form_start(form) }}*/
/*         <div class="col-lg-12">*/
/*             <div class="panel panel-default">*/
/*                 <div class="panel-heading"> Ajouter un Joueur </div>*/
/*                 <div class="col-lg-6">*/
/*                     <div class="panel-body">  */
/* */
/*                         {{ form_row(form.nom, { 'attr': {'class': 'form-control'} }   ) }}*/
/*                         {{ form_row(form.prenom, { 'attr': {'class': 'form-control'} }   ) }}*/
/*                         {{ form_row(form.cinJoueur, { 'attr': {'class': 'form-control'} }   ) }}*/
/*                         {{ form_row(form.dateDeNaissance, { 'attr': {'class': 'form-control'} }   ) }}*/
/*                         {{ form_row(form.categorie, { 'attr': {'class': 'form-control'} }   ) }}*/
/*                         {{ form_row(form.pointAquis, { 'attr': {'class': 'form-control'} }   ) }}*/
/*                         {{ form_row(form.taille, { 'attr': {'class': 'form-control'} }   ) }}*/
/*                         {{ form_row(form.poids, { 'attr': {'class': 'form-control'} }   ) }}*/
/*                         {{ form_row(form.mainForte, { 'attr': {'class': 'form-control'} }   ) }}*/
/*                         {{ form_row(form.nationaliterJoueur, { 'attr': {'class': 'form-control'} }   ) }}*/
/*                         {{ form_row(form.file) }}*/
/* */
/*                         <br>*/
/* */
/*                         {{  form_row(form.submit, { 'attr': {'class': 'btn btn-primary'} }  ) }}*/
/*                         <br>*/
/*                         <a href="{{ path('joueur') }}" class="btn btn-primary"> Retour a la liste </a>*/
/* */
/*                         <br>*/
/*                         <div> */
/*                             {{ form_rest(form)}}*/
/*                         </div>*/
/* */
/* */
/* */
/* */
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="col-md-6">*/
/*                 <div class="panel panel-default">*/
/*                     <div class="panel-body tabs">*/
/*                         <ul class="nav nav-tabs">                            */
/*                             <li class="active"><a href="#tabClub" data-toggle="tab">Club</a></li>*/
/*                         </ul>*/
/* */
/*                         <div class="tab-content">*/
/* */
/* */
/*                             <div class="tab-pane fade in active" id="tabClub">*/
/* */
/*                                 <table class="table table-striped" data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">*/
/*                                     <thead>*/
/*                                         <tr class="info">*/
/*                                             <th>Libelle</th>*/
/*                                             <th>Adresse</th>*/
/*                                             <th>Nbre de terrains</th>*/
/*                                             <th>Selection</th>*/
/*                                         </tr>*/
/*                                     </thead>*/
/*                                     <tbody  >*/
/*                                         {% for c in club %}*/
/*                                             <tr>*/
/*                                                 <td>{{ c.libelleClub }}</td>*/
/*                                                 <td> {{ c.emplacementClub }} </td>*/
/*                                                 <td>{{ c.nbreTerrains}} </td>*/
/*                                                 <td> <input type="radio" name="clubs[]" value="{{ c.idClub }}">  </td>*/
/*                                             </tr>*/
/*                                         {% endfor %}*/
/* */
/*                                     </tbody>*/
/*                                 </table>*/
/* */
/*                             </div>*/
/*                         </div>*/
/*                     </div><!--/.panel-->*/
/*                     </form>*/
/* */
/*                 {% endblock %}    */
/*             {% block third1 %}{% endblock %}*/
/*         {% block third2 %}{% endblock %}*/
/*     {% block third3 %}{% endblock %}*/
/* {% block third4 %}{% endblock %}*/
/* {% block fourth1 %}{% endblock %}*/
/* {% block fourth2 %}{% endblock %}*/
/* */
