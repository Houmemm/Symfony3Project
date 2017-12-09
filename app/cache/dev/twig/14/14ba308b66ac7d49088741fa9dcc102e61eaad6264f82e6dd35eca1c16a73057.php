<?php

/* SquadFttBundle:Evenement:new.html.twig */
class __TwigTemplate_cfaf525bbb4daad9c9b435578650901aac2c3d55784cad8c168a3e8840aafd14 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SquadFttBundle::layout.html.twig", "SquadFttBundle:Evenement:new.html.twig", 1);
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
        echo " Ajouter un evenement
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
        <li class=\"active\" ><a href=\"";
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
        echo "\"><svg class=\"glyph stroked star\"><use xlink:href=\"#stroked-star\"></use></svg> Concours</a></li>
        <li><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("formation");
        echo "\"><svg class=\"glyph stroked line-graph\"><use xlink:href=\"#stroked-line-graph\"></use></svg> Formations</a></li>
        <li><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("gestionDopage");
        echo "\"><svg class=\"glyph stroked eye\"><use xlink:href=\"#stroked-eye\"/></svg> Gestion Dopage</a></li>
          <li><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("user");
        echo "\"><svg class=\"glyph stroked male user \"><use xlink:href=\"#stroked-male-user\"/></svg> Utilisateur</a></li>
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
        // line 29
        echo "<form  action=\"";
        echo $this->env->getExtension('routing')->getPath("evenement_create");
        echo "\" method=\"post\">
        <div class=\"col-lg-12\">
            <div class=\"panel panel-default\">
                <div class=\"col-lg-6\">
                    <div class=\"panel-body\">  

                        ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libelleEvenement", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateDebut", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateFin", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "site", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nbreJoueur", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "statut", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "imageEve", array()), 'row');
        echo "
                        <label class=\"required\"> Voulez vous affecter des joueurs automatiquement ? </label>
                        <div class=\"Checkbox\">
                        <input type=\"checkbox\" name=\"auto[]\" value=\"1\">
                        </div>              
                 
                         

                       ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit", array()), 'row', array("attr" => array("class" => "btn btn-primary")));
        echo "
                    <!--  <input type=\"button\" value=\"TestSaisie\" onClick=\"verifier()\"  class=\"btn btn-primary\" ></input>
                      -->  <br>
                        <div> 
                            ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

 
                         
                         
                         
                         
             

                    </div>
                </div>
            </div>

            <div class=\"col-md-6\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-body tabs\">
                        <ul class=\"nav nav-tabs\">
                            <li class=\"active\"><a href=\"#tab1\" data-toggle=\"tab\">Stade</a></li>
                            <li><a href=\"#tab2\" data-toggle=\"tab\">Arbitre</a></li>
                            <li><a href=\"#tab3\" data-toggle=\"tab\">Joueur</a></li>
                        </ul>

                        <div class=\"tab-content\"><!-- Stade-->
                            <div class=\"tab-pane fade in active\" id=\"tab1\">

                                <table data-toggle=\"table\" data-url=\"tables/data1.json\"  data-show-refresh=\"true\" data-show-toggle=\"true\" data-show-columns=\"true\" data-search=\"true\" data-select-item-name=\"toolbar1\" data-pagination=\"true\" data-sort-name=\"name\" data-sort-order=\"desc\">
                                    <thead>
                                        <tr>
                                            <th>LibelleStade</th>
                                            <th>Emplacement</th>
                                            <th>TypeTerrain</th>
                                            <th>capacite</th>
                                            <th>Choisir</th>
                                        </tr>
                                    </thead>
                                    <tbody  >
                                        ";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities2"]) ? $context["entities2"] : $this->getContext($context, "entities2")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 91
            echo "                                            <tr>
                                                <td>";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "libelleStade", array()), "html", null, true);
            echo "</td>
                                                <td> ";
            // line 93
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "emplacement", array()), "html", null, true);
            echo " </td>
                                                <td>";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "typeTerrains", array()), "html", null, true);
            echo " </td>
                                                <td>";
            // line 95
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "capacite", array()), "html", null, true);
            echo "</td>
                                                <td> <input type=\"checkbox\" name=\"stade[]\" value=\"";
            // line 96
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "idStade", array()), "html", null, true);
            echo "\">  </td>
                                            </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "                                    </tbody>
                                </table>
                            </div>
         
                             <div class=\"tab-pane fade\" id=\"tab2\"><!-- Arbitre-->
                             
                                        <table data-toggle=\"table\" data-url=\"tables/data1.json\"  data-show-refresh=\"true\" data-show-toggle=\"true\" data-show-columns=\"true\" data-search=\"true\" data-select-item-name=\"toolbar1\" data-pagination=\"true\" data-sort-name=\"name\" data-sort-order=\"desc\">
                                            <thead>
                                                <tr>
                                                    <th>nom</th>
                                                    <th>nationnalite</th>
                                                    <th>Grade</th>
                                                    <th>Type</th>
                                                    <th>Choisir</th>
                                                </tr>
                                            </thead>
                                            <tbody>


                                                ";
        // line 118
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities4"]) ? $context["entities4"] : $this->getContext($context, "entities4")));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 119
            echo "                                                    <tr>
                                                        <td>";
            // line 120
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "nom", array()), "html", null, true);
            echo "</td>
                                                        <td> ";
            // line 121
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "nationaliter", array()), "html", null, true);
            echo " </td>
                                                        <td>";
            // line 122
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "gradeArbitre", array()), "html", null, true);
            echo " </td>
                                                        <td>";
            // line 123
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "typeArbitre", array()), "html", null, true);
            echo "</td>
                                                        <td> <input type=\"checkbox\" name=\"arbitre[]\" value=\"";
            // line 124
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "idUser", array()), "html", null, true);
            echo "\">  </td>
                                                    </tr>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        echo "                                            </tbody>
                                        </table>
                                    </div>
                                            
                                  <!-- Joueurs -->
                                <div class=\"tab-pane fade\" id=\"tab3\">
 
                                        <table data-toggle=\"table\" data-url=\"tables/data1.json\"  data-show-refresh=\"true\" data-show-toggle=\"true\" data-show-columns=\"true\" data-search=\"true\" data-select-item-name=\"toolbar1\" data-pagination=\"true\" data-sort-name=\"name\" data-sort-order=\"desc\">
                                            <thead>
                                                <tr>
                                                    <th>Nom</th>
                                                    <th>Prenom</th>
                                                    <th>Categorie</th>
                                                    <th>Nationnalite</th>
                                                    <th>Choisir</th>
                                                </tr>
                                            </thead>
                                            <tbody  >
                                                ";
        // line 145
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities3"]) ? $context["entities3"] : $this->getContext($context, "entities3")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 146
            echo "                                                    <tr>
                                                        <td>";
            // line 147
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nom", array()), "html", null, true);
            echo "</td>
                                                        <td> ";
            // line 148
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "prenom", array()), "html", null, true);
            echo " </td>
                                                        <td>";
            // line 149
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "categorie", array()), "html", null, true);
            echo " </td>
                                                        <td>";
            // line 150
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nationaliterJoueur", array()), "html", null, true);
            echo "</td>
                                                        <td> <input type=\"checkbox\" name=\"joueurs[]\" value=\"";
            // line 151
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "cinJoueur", array()), "html", null, true);
            echo "\">  </td>
                                                    </tr>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 154
        echo "                                            </tbody>
                                        </table>
 
                                </div>
                            </div>
                        </div><!--/.panel-->
<script>
    function verifier(){      
     var nbStade = 0;
     var nbArbitre = 0;
     var nbj = 0;
     var stade = document.getElementsByName(\"stade[]\");
     var arbitre = document.getElementsByName(\"arbitre[]\");
     var joueurs = document.getElementsByName(\"joueurs[]\");
     var nbJoueurs = document.getElementById(\"squad_fttbundle_evenement_nbreJoueur\").value;

          for (var i=0;i< stade.length;i++){
\t\tif(stade[i].checked)
\t\t\tnbStade++;
\t}\t
          for (var i=0;i< arbitre.length;i++){
\t\tif(arbitre[i].checked)
\t\t\tnbArbitre++;
\t}\t
          for (var i=0;i< joueurs.length;i++){
\t\tif(joueurs[i].checked)
\t\t\tnbj++;
\t}\t

    if( (nbJoueurs/2) > nbStade )
    {
  alert(\"il faut au minimum \"+(nbJoueurs/2)+\" stade\");        
    }    
    if( (nbJoueurs/2) > nbArbitre )
    {
  alert(\"il faut au minimum \"+(nbJoueurs/2)+\" arbitre\");        
   }    
    if( nbJoueurs !== nbj  )
    {
  alert(\"il faut au minimum \"+nbJoueurs+\"  Joueurs\");        
  }    
 
    
    
    }
</script>

                        </form>
                    ";
    }

    // line 203
    public function block_third1($context, array $blocks = array())
    {
    }

    // line 204
    public function block_third2($context, array $blocks = array())
    {
    }

    // line 205
    public function block_third3($context, array $blocks = array())
    {
    }

    // line 206
    public function block_third4($context, array $blocks = array())
    {
    }

    // line 207
    public function block_fourth1($context, array $blocks = array())
    {
    }

    // line 208
    public function block_fourth2($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "SquadFttBundle:Evenement:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  437 => 208,  432 => 207,  427 => 206,  422 => 205,  417 => 204,  412 => 203,  360 => 154,  351 => 151,  347 => 150,  343 => 149,  339 => 148,  335 => 147,  332 => 146,  328 => 145,  308 => 127,  299 => 124,  295 => 123,  291 => 122,  287 => 121,  283 => 120,  280 => 119,  276 => 118,  255 => 99,  246 => 96,  242 => 95,  238 => 94,  234 => 93,  230 => 92,  227 => 91,  223 => 90,  184 => 54,  177 => 50,  166 => 42,  162 => 41,  158 => 40,  154 => 39,  150 => 38,  146 => 37,  142 => 36,  138 => 35,  128 => 29,  125 => 28,  120 => 27,  115 => 26,  110 => 25,  105 => 22,  98 => 19,  94 => 18,  90 => 17,  86 => 16,  82 => 15,  78 => 14,  74 => 13,  70 => 12,  66 => 11,  62 => 10,  58 => 9,  54 => 8,  51 => 7,  48 => 6,  43 => 3,  40 => 2,  11 => 1,);
    }
}
/* {% extends 'SquadFttBundle::layout.html.twig' %}*/
/* {% block titre %}*/
/*  Ajouter un evenement*/
/* {% endblock%}*/
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
/*           <li><a href="{{ path('user')}}"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg> Utilisateur</a></li>*/
/*     </ul>  */
/* {% endblock %} */
/* {% block first1 %}{% endblock %}*/
/* */
/* */
/* {% block first2 %}{% endblock %}*/
/* {% block first3 %}{% endblock %}*/
/* {% block first4 %}{% endblock %}*/
/* {% block second1 -%}*/
/*     <form  action="{{ path("evenement_create") }}" method="post">*/
/*         <div class="col-lg-12">*/
/*             <div class="panel panel-default">*/
/*                 <div class="col-lg-6">*/
/*                     <div class="panel-body">  */
/* */
/*                         {{ form_row(form.libelleEvenement, { 'attr': {'class': 'form-control'}  }   ) }}*/
/*                         {{ form_row(form.dateDebut, { 'attr': {'class': 'form-control'} }   ) }}*/
/*                         {{ form_row(form.dateFin, { 'attr': {'class': 'form-control'} }   ) }}*/
/*                         {{ form_row(form.type, { 'attr': {'class': 'form-control'} }   ) }}*/
/*                         {{ form_row(form.site, { 'attr': {'class': 'form-control'} }   ) }}*/
/*                         {{ form_row(form.nbreJoueur, { 'attr': {'class': 'form-control'} }   ) }}*/
/*                         {{ form_row(form.statut, { 'attr': {'class': 'form-control'} } ) }}*/
/*                         {{ form_row(form.imageEve) }}*/
/*                         <label class="required"> Voulez vous affecter des joueurs automatiquement ? </label>*/
/*                         <div class="Checkbox">*/
/*                         <input type="checkbox" name="auto[]" value="1">*/
/*                         </div>              */
/*                  */
/*                          */
/* */
/*                        {{  form_row(form.submit, { 'attr': {'class': 'btn btn-primary'} }  ) }}*/
/*                     <!--  <input type="button" value="TestSaisie" onClick="verifier()"  class="btn btn-primary" ></input>*/
/*                       -->  <br>*/
/*                         <div> */
/*                             {{ form_rest(form)}}*/
/* */
/*  */
/*                          */
/*                          */
/*                          */
/*                          */
/*              */
/* */
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="col-md-6">*/
/*                 <div class="panel panel-default">*/
/*                     <div class="panel-body tabs">*/
/*                         <ul class="nav nav-tabs">*/
/*                             <li class="active"><a href="#tab1" data-toggle="tab">Stade</a></li>*/
/*                             <li><a href="#tab2" data-toggle="tab">Arbitre</a></li>*/
/*                             <li><a href="#tab3" data-toggle="tab">Joueur</a></li>*/
/*                         </ul>*/
/* */
/*                         <div class="tab-content"><!-- Stade-->*/
/*                             <div class="tab-pane fade in active" id="tab1">*/
/* */
/*                                 <table data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">*/
/*                                     <thead>*/
/*                                         <tr>*/
/*                                             <th>LibelleStade</th>*/
/*                                             <th>Emplacement</th>*/
/*                                             <th>TypeTerrain</th>*/
/*                                             <th>capacite</th>*/
/*                                             <th>Choisir</th>*/
/*                                         </tr>*/
/*                                     </thead>*/
/*                                     <tbody  >*/
/*                                         {% for entity in entities2 %}*/
/*                                             <tr>*/
/*                                                 <td>{{ entity.libelleStade }}</td>*/
/*                                                 <td> {{ entity.emplacement }} </td>*/
/*                                                 <td>{{ entity.typeTerrains }} </td>*/
/*                                                 <td>{{ entity.capacite}}</td>*/
/*                                                 <td> <input type="checkbox" name="stade[]" value="{{ entity.idStade }}">  </td>*/
/*                                             </tr>*/
/*                                         {% endfor %}*/
/*                                     </tbody>*/
/*                                 </table>*/
/*                             </div>*/
/*          */
/*                              <div class="tab-pane fade" id="tab2"><!-- Arbitre-->*/
/*                              */
/*                                         <table data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">*/
/*                                             <thead>*/
/*                                                 <tr>*/
/*                                                     <th>nom</th>*/
/*                                                     <th>nationnalite</th>*/
/*                                                     <th>Grade</th>*/
/*                                                     <th>Type</th>*/
/*                                                     <th>Choisir</th>*/
/*                                                 </tr>*/
/*                                             </thead>*/
/*                                             <tbody>*/
/* */
/* */
/*                                                 {% for a in entities4 %}*/
/*                                                     <tr>*/
/*                                                         <td>{{ a.nom }}</td>*/
/*                                                         <td> {{ a.nationaliter }} </td>*/
/*                                                         <td>{{ a.gradeArbitre }} </td>*/
/*                                                         <td>{{ a.typeArbitre}}</td>*/
/*                                                         <td> <input type="checkbox" name="arbitre[]" value="{{ a.idUser }}">  </td>*/
/*                                                     </tr>*/
/*                                                 {% endfor %}*/
/*                                             </tbody>*/
/*                                         </table>*/
/*                                     </div>*/
/*                                             */
/*                                   <!-- Joueurs -->*/
/*                                 <div class="tab-pane fade" id="tab3">*/
/*  */
/*                                         <table data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">*/
/*                                             <thead>*/
/*                                                 <tr>*/
/*                                                     <th>Nom</th>*/
/*                                                     <th>Prenom</th>*/
/*                                                     <th>Categorie</th>*/
/*                                                     <th>Nationnalite</th>*/
/*                                                     <th>Choisir</th>*/
/*                                                 </tr>*/
/*                                             </thead>*/
/*                                             <tbody  >*/
/*                                                 {% for entity in entities3 %}*/
/*                                                     <tr>*/
/*                                                         <td>{{ entity.nom }}</td>*/
/*                                                         <td> {{ entity.prenom }} </td>*/
/*                                                         <td>{{ entity.categorie }} </td>*/
/*                                                         <td>{{ entity.nationaliterJoueur }}</td>*/
/*                                                         <td> <input type="checkbox" name="joueurs[]" value="{{ entity.cinJoueur}}">  </td>*/
/*                                                     </tr>*/
/*                                                 {% endfor %}*/
/*                                             </tbody>*/
/*                                         </table>*/
/*  */
/*                                 </div>*/
/*                             </div>*/
/*                         </div><!--/.panel-->*/
/* <script>*/
/*     function verifier(){      */
/*      var nbStade = 0;*/
/*      var nbArbitre = 0;*/
/*      var nbj = 0;*/
/*      var stade = document.getElementsByName("stade[]");*/
/*      var arbitre = document.getElementsByName("arbitre[]");*/
/*      var joueurs = document.getElementsByName("joueurs[]");*/
/*      var nbJoueurs = document.getElementById("squad_fttbundle_evenement_nbreJoueur").value;*/
/* */
/*           for (var i=0;i< stade.length;i++){*/
/* 		if(stade[i].checked)*/
/* 			nbStade++;*/
/* 	}	*/
/*           for (var i=0;i< arbitre.length;i++){*/
/* 		if(arbitre[i].checked)*/
/* 			nbArbitre++;*/
/* 	}	*/
/*           for (var i=0;i< joueurs.length;i++){*/
/* 		if(joueurs[i].checked)*/
/* 			nbj++;*/
/* 	}	*/
/* */
/*     if( (nbJoueurs/2) > nbStade )*/
/*     {*/
/*   alert("il faut au minimum "+(nbJoueurs/2)+" stade");        */
/*     }    */
/*     if( (nbJoueurs/2) > nbArbitre )*/
/*     {*/
/*   alert("il faut au minimum "+(nbJoueurs/2)+" arbitre");        */
/*    }    */
/*     if( nbJoueurs !== nbj  )*/
/*     {*/
/*   alert("il faut au minimum "+nbJoueurs+"  Joueurs");        */
/*   }    */
/*  */
/*     */
/*     */
/*     }*/
/* </script>*/
/* */
/*                         </form>*/
/*                     {% endblock %}    */
/*                 {% block third1 %}{% endblock %}*/
/*             {% block third2 %}{% endblock %}*/
/*         {% block third3 %}{% endblock %}*/
/*     {% block third4 %}{% endblock %}*/
/* {% block fourth1 %}{% endblock %}*/
/* {% block fourth2 %}{% endblock %}*/
