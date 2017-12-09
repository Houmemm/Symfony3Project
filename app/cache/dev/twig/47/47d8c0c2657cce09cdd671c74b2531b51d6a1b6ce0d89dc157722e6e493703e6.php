<?php

/* SquadFttBundle:Rapport:index.html.twig */
class __TwigTemplate_6319ab4ca866b0f25d8e4c0c8e55651c01ddd70454d1116c0889dd0017bdd6a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SquadFttBundle::layout.html.twig", "SquadFttBundle:Rapport:index.html.twig", 1);
        $this->blocks = array(
            'titre' => array($this, 'block_titre'),
            'suppress' => array($this, 'block_suppress'),
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
        echo " Listes des rapports ";
    }

    // line 3
    public function block_suppress($context, array $blocks = array())
    {
    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        // line 6
        echo "<ul class=\"nav menu\">
            <li><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("accueil");
        echo "\"><svg class=\"glyph stroked dashboard-dial\"><use xlink:href=\"#stroked-dashboard-dial\"></use></svg> Statistique</a></li>
            <li><a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("actualite");
        echo "\"><svg class=\"glyph stroked landscape\"><use xlink:href=\"#stroked-landscape\"/></svg> Actualites</a></li>
            <li><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("evenement");
        echo "\"><svg class=\"glyph stroked calendar\"><use xlink:href=\"#stroked-calendar\"></use></svg> Evenements</a></li>
            <li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("joueur");
        echo "\"><svg class=\"glyph stroked male user \"><use xlink:href=\"#stroked-male-user\"/></svg> Joueurs</a></li>
            <li><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("match");
        echo "\"><svg class=\"glyph stroked table\"><use xlink:href=\"#stroked-table\"></use></svg> Matchs</a></li>
            <li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("arbitre");
        echo "\"><svg class=\"glyph stroked male user \"><use xlink:href=\"#stroked-male-user\"/></svg> Arbitres</a></li>
            <li ><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("stade");
        echo "\"><svg class=\"glyph stroked location pin\"><use xlink:href=\"#stroked-location-pin\"/></svg> Stades</a></li>
            <li><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("club");
        echo "\"><svg class=\"glyph stroked home\"><use xlink:href=\"#stroked-home\"/></svg> Clubs</a></li>
            <li><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("concour");
        echo "\"><svg class=\"glyph stroked star\"><use xlink:href=\"#stroked-star\"></use></svg> Concours</a></li>
            <li><a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("sanction");
        echo "\"><svg class=\"glyph stroked cancel\"><use xlink:href=\"#stroked-cancel\"/></svg> Sanction</a></li>
            <li><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("formation");
        echo "\"><svg class=\"glyph stroked line-graph\"><use xlink:href=\"#stroked-line-graph\"></use></svg> Formations</a></li>
            <li class=\"active\"><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("rapport");
        echo "\"><svg class=\"glyph stroked eye\"><use xlink:href=\"#stroked-eye\"/></svg> Gestion Dopage</a></li>
         </ul>  
";
    }

    // line 21
    public function block_first1($context, array $blocks = array())
    {
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 23
            echo "     <div class=\"alert bg-success\" role=\"alert\">
        ";
            // line 24
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
        <a class=\"close\" data-dismiss=\"alert\" href=\"#\">x</a>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "   
   <div class=\"col-lg-12\">
            <div class=\"panel panel-default\">
                <div class=\"panel-body\">
                   

    <table class=\"table table-striped\" data-toggle=\"table\" data-url=\"tables/data1.json\"  data-show-refresh=\"true\" data-show-toggle=\"true\" data-show-columns=\"true\" data-search=\"true\" data-select-item-name=\"toolbar1\" data-pagination=\"true\" data-sort-name=\"name\" data-sort-order=\"desc\">
        

    
        <thead>
            <tr class=\"info\" style=\"font-weight:bold; font-style:italic\">
                <th>Joueurs</th>
                <th>Resultat du test</th>
                <th>Commentaire</th>
                <th>Medecin</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 49
            echo "            <tr>
               <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "joueurCinJoueur", array()), "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "joueurCinJoueur", array()), "prenom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "resultatTest", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "commentaire", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "userUser", array()), "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "userUser", array()), "prenom", array()), "html", null, true);
            echo "</td>
                <td>
                <ul  class=\"breadcrumb\">
                    <li>
                        <a href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rapport_edit", array("id" => $this->getAttribute($context["entity"], "idRapport", array()))), "html", null, true);
            echo "\">
                            <svg class=\"glyph stroked pencil\"><use xlink:href=\"#stroked-pencil\"/></svg>
                        ";
            // line 60
            echo "                        </a></li>
                        <li>
                        <a href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rapport_show", array("id" => $this->getAttribute($context["entity"], "idRapport", array()))), "html", null, true);
            echo "\">
                            <svg class=\"glyph stroked eye\"><use xlink:href=\"#stroked-eye\"/></svg>
                        ";
            // line 65
            echo "                        </a>
                        </li>
                    <li>    <a href=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rapport_pdf", array("id" => $this->getAttribute($context["entity"], "idRapport", array()))), "html", null, true);
            echo "\">
                            <svg class=\"glyph stroked download\"><use xlink:href=\"#stroked-download\"/></svg>
                           ";
            // line 70
            echo "                        </a>
                    </li></ul>
                    
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "        </tbody>
    </table>
        <br>

        
            <a href=\"";
        // line 81
        echo $this->env->getExtension('routing')->getPath("rapport_joueur");
        echo "\" class=\"btn btn-primary\">
                Ajouter un rapport
            </a>
                <a href=\"";
        // line 84
        echo $this->env->getExtension('routing')->getPath("squad_mail_sendpage");
        echo "\" class=\"btn btn-primary\">
                Envoyer un e-mail
            </a>
      
    ";
    }

    // line 89
    public function block_first2($context, array $blocks = array())
    {
    }

    // line 90
    public function block_first3($context, array $blocks = array())
    {
    }

    // line 91
    public function block_first4($context, array $blocks = array())
    {
    }

    // line 92
    public function block_second1($context, array $blocks = array())
    {
    }

    // line 93
    public function block_third1($context, array $blocks = array())
    {
    }

    // line 94
    public function block_third2($context, array $blocks = array())
    {
    }

    // line 95
    public function block_third3($context, array $blocks = array())
    {
    }

    // line 96
    public function block_third4($context, array $blocks = array())
    {
    }

    // line 97
    public function block_fourth1($context, array $blocks = array())
    {
    }

    // line 98
    public function block_fourth2($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "SquadFttBundle:Rapport:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  282 => 98,  277 => 97,  272 => 96,  267 => 95,  262 => 94,  257 => 93,  252 => 92,  247 => 91,  242 => 90,  237 => 89,  228 => 84,  222 => 81,  215 => 76,  204 => 70,  199 => 67,  195 => 65,  190 => 62,  186 => 60,  181 => 57,  172 => 53,  168 => 52,  164 => 51,  158 => 50,  155 => 49,  151 => 48,  129 => 28,  119 => 24,  116 => 23,  112 => 22,  109 => 21,  102 => 18,  98 => 17,  94 => 16,  90 => 15,  86 => 14,  82 => 13,  78 => 12,  74 => 11,  70 => 10,  66 => 9,  62 => 8,  58 => 7,  55 => 6,  52 => 5,  47 => 3,  41 => 2,  11 => 1,);
    }
}
/* {% extends 'SquadFttBundle::layout.html.twig' %}*/
/* {% block titre %} Listes des rapports {% endblock %}*/
/* {% block suppress %}*/
/* {% endblock %}*/
/* {% block menu %}*/
/* <ul class="nav menu">*/
/*             <li><a href="{{ path('accueil')}}"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Statistique</a></li>*/
/*             <li><a href="{{ path('actualite')}}"><svg class="glyph stroked landscape"><use xlink:href="#stroked-landscape"/></svg> Actualites</a></li>*/
/*             <li><a href="{{ path('evenement')}}"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> Evenements</a></li>*/
/*             <li><a href="{{ path('joueur')}}"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg> Joueurs</a></li>*/
/*             <li><a href="{{ path('match')}}"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg> Matchs</a></li>*/
/*             <li><a href="{{ path('arbitre')}}"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg> Arbitres</a></li>*/
/*             <li ><a href="{{ path('stade')}}"><svg class="glyph stroked location pin"><use xlink:href="#stroked-location-pin"/></svg> Stades</a></li>*/
/*             <li><a href="{{ path('club')}}"><svg class="glyph stroked home"><use xlink:href="#stroked-home"/></svg> Clubs</a></li>*/
/*             <li><a href="{{ path('concour')}}"><svg class="glyph stroked star"><use xlink:href="#stroked-star"></use></svg> Concours</a></li>*/
/*             <li><a href="{{ path('sanction')}}"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"/></svg> Sanction</a></li>*/
/*             <li><a href="{{ path('formation')}}"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg> Formations</a></li>*/
/*             <li class="active"><a href="{{ path('rapport')}}"><svg class="glyph stroked eye"><use xlink:href="#stroked-eye"/></svg> Gestion Dopage</a></li>*/
/*          </ul>  */
/* {% endblock %}    */
/* {% block first1 -%}*/
/*     {% for flash_message in app.session.flashBag.get('notice') %}*/
/*      <div class="alert bg-success" role="alert">*/
/*         {{ flash_message }}*/
/*         <a class="close" data-dismiss="alert" href="#">x</a>*/
/*     </div>*/
/* {% endfor %}*/
/*    */
/*    <div class="col-lg-12">*/
/*             <div class="panel panel-default">*/
/*                 <div class="panel-body">*/
/*                    */
/* */
/*     <table class="table table-striped" data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">*/
/*         */
/* */
/*     */
/*         <thead>*/
/*             <tr class="info" style="font-weight:bold; font-style:italic">*/
/*                 <th>Joueurs</th>*/
/*                 <th>Resultat du test</th>*/
/*                 <th>Commentaire</th>*/
/*                 <th>Medecin</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for entity in entities %}*/
/*             <tr>*/
/*                <td>{{ entity.joueurCinJoueur.nom }} {{ entity.joueurCinJoueur.prenom }}</td>*/
/*                 <td>{{ entity.resultatTest }}</td>*/
/*                 <td>{{ entity.commentaire }}</td>*/
/*                 <td>{{ entity.userUser.nom }} {{ entity.userUser.prenom }}</td>*/
/*                 <td>*/
/*                 <ul  class="breadcrumb">*/
/*                     <li>*/
/*                         <a href="{{ path('rapport_edit', { 'id': entity.idRapport }) }}">*/
/*                             <svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"/></svg>*/
/*                         {#<img src="{{ asset('uploads/search.png') }}" alt="show"  width="17" height="17"></a>#}*/
/*                         </a></li>*/
/*                         <li>*/
/*                         <a href="{{ path('rapport_show', { 'id': entity.idRapport }) }}">*/
/*                             <svg class="glyph stroked eye"><use xlink:href="#stroked-eye"/></svg>*/
/*                         {#<img src="{{ asset('uploads/file_edit.png') }}" alt="edit"  width="17" height="17"></a>#}*/
/*                         </a>*/
/*                         </li>*/
/*                     <li>    <a href="{{ path('rapport_pdf', { 'id': entity.idRapport }) }}">*/
/*                             <svg class="glyph stroked download"><use xlink:href="#stroked-download"/></svg>*/
/*                            {# <img src="{{ asset('uploads/pdfimage.png') }}" alt="PDF"  width="25" height="25">#}*/
/*                         </a>*/
/*                     </li></ul>*/
/*                     */
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/*         <br>*/
/* */
/*         */
/*             <a href="{{ path('rapport_joueur') }}" class="btn btn-primary">*/
/*                 Ajouter un rapport*/
/*             </a>*/
/*                 <a href="{{ path('squad_mail_sendpage') }}" class="btn btn-primary">*/
/*                 Envoyer un e-mail*/
/*             </a>*/
/*       */
/*     {% endblock %}*/
/*     {% block first2 %}{% endblock %}    */
/* {% block first3 %}{% endblock %}    */
/* {% block first4 %}{% endblock %}    */
/* {% block second1 %}{% endblock %}    */
/* {% block third1 %}{% endblock %}    */
/* {% block third2 %}{% endblock %}*/
/* {% block third3 %}{% endblock %}*/
/* {% block third4 %}{% endblock %}*/
/* {% block fourth1 %}{% endblock %}*/
/* {% block fourth2 %}{% endblock %}*/
/* */
