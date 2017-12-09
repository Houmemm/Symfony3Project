<?php

/* frontofficefrontBundle:MatchTennis:Montant.html.twig */
class __TwigTemplate_02744846887cc2315b7657365a075109646ae66b0ce84b06c891f98a3550e3d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("frontofficefrontBundle::MainLayout.html.twig", "frontofficefrontBundle:MatchTennis:Montant.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'main' => array($this, 'block_main'),
            'jscript' => array($this, 'block_jscript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "frontofficefrontBundle::MainLayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_header($context, array $blocks = array())
    {
        // line 3
        echo "    <link href= \"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/squadftt/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/squadftt/css/datepicker3.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/squadftt/css/bootstrap-table.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/squadftt/css/styles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!--Icons-->
    <script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/squadftt/js/lumino.glyphs.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 12
    public function block_main($context, array $blocks = array())
    {
        // line 13
        echo "    <section id=\"single-match-pl\" class=\"container secondary-page\" >
        <div class=\"container\">
            <div align=\"center\">
                
                <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/Joueurs/" . $this->getAttribute((isset($context["joueur"]) ? $context["joueur"] : $this->getContext($context, "joueur")), "path", array()))), "html", null, true);
        echo "\" width=\"240\" height=\"228\">
                <span><b> VS </b></span>
                ";
        // line 19
        if (($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "joueurs", array()), 0, array(), "array") != (isset($context["joueur"]) ? $context["joueur"] : $this->getContext($context, "joueur")))) {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/joueurs/" . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "joueurs", array()), 0, array(), "array"), "path", array()))), "html", null, true);
            echo "\" width=\"240\" height=\"228\"> ";
        }
        echo " 
                
                ";
        // line 21
        if (($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "joueurs", array()), 1, array(), "array") != (isset($context["joueur"]) ? $context["joueur"] : $this->getContext($context, "joueur")))) {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/joueurs/" . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "joueurs", array()), 1, array(), "array"), "path", array()))), "html", null, true);
            echo "\" width=\"240\" height=\"228\"> ";
        }
        // line 22
        echo "                <br><br>
                Souhaiter vous parier sur ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["joueur"]) ? $context["joueur"] : $this->getContext($context, "joueur")), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["joueur"]) ? $context["joueur"] : $this->getContext($context, "joueur")), "prenom", array()), "html", null, true);
        echo " pour sont match Contre ";
        if (($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "joueurs", array()), 0, array(), "array") != (isset($context["joueur"]) ? $context["joueur"] : $this->getContext($context, "joueur")))) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "joueurs", array()), 0, array(), "array"), "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "joueurs", array()), 0, array(), "array"), "prenom", array()), "html", null, true);
            echo " ";
        }
        echo " ";
        if (($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "joueurs", array()), 1, array(), "array") != (isset($context["joueur"]) ? $context["joueur"] : $this->getContext($context, "joueur")))) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "joueurs", array()), 1, array(), "array"), "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "joueurs", array()), 1, array(), "array"), "prenom", array()), "html", null, true);
            echo " ";
        }
        echo "?
                
                 
                <form id=\"montantform\" action=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("front_matchtennis_parier", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idMatch", array()), "joueur" => $this->getAttribute((isset($context["joueur"]) ? $context["joueur"] : $this->getContext($context, "joueur")), "cinJoueur", array()))), "html", null, true);
        echo "\" method=\"get\" >
                    <input id=\"montant\" type=\"number\" name=\"montant\">  
                    <input type=\"submit\">
                </form>
            </div>
        </div>
    </section>
";
    }

    // line 36
    public function block_jscript($context, array $blocks = array())
    {
        // line 37
        echo "
    <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/squadftt/js/jquery-1.11.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/squadftt/js/bootstrap.min.js"), "html", null, true);
        echo " \"></script>
    <script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/squadftt/js/chart.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/squadftt/js/chart-data.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/squadftt/js/easypiechart.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/squadftt/js/easypiechart-data.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/squadftt/js/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/squadftt/js/bootstrap-table.js"), "html", null, true);
        echo "\"></script>


";
    }

    public function getTemplateName()
    {
        return "frontofficefrontBundle:MatchTennis:Montant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 45,  155 => 44,  151 => 43,  147 => 42,  143 => 41,  139 => 40,  135 => 39,  131 => 38,  128 => 37,  125 => 36,  113 => 26,  89 => 23,  86 => 22,  80 => 21,  71 => 19,  66 => 17,  60 => 13,  57 => 12,  51 => 8,  46 => 6,  42 => 5,  38 => 4,  33 => 3,  30 => 2,  11 => 1,);
    }
}
/* {% extends "frontofficefrontBundle::MainLayout.html.twig" %}*/
/* {% block header %}*/
/*     <link href= "{{asset('bundles/squadftt/css/bootstrap.min.css')}}" rel="stylesheet">*/
/*     <link href="{{asset('bundles/squadftt/css/datepicker3.css')}}" rel="stylesheet">*/
/*     <link href="{{asset('bundles/squadftt/css/bootstrap-table.css')}}" rel="stylesheet">*/
/*     <link href="{{asset('bundles/squadftt/css/styles.css')}}" rel="stylesheet">*/
/*     <!--Icons-->*/
/*     <script src="{{asset('bundles/squadftt/js/lumino.glyphs.js')}}"></script>*/
/* {% endblock %}*/
/* */
/* */
/* {% block main %}*/
/*     <section id="single-match-pl" class="container secondary-page" >*/
/*         <div class="container">*/
/*             <div align="center">*/
/*                 */
/*                 <img src="{{ asset('uploads/Joueurs/'~joueur.path)}}" width="240" height="228">*/
/*                 <span><b> VS </b></span>*/
/*                 {% if entity.joueurs[0]!= joueur%}<img src="{{ asset('uploads/joueurs/'~entity.joueurs[0].path)}}" width="240" height="228"> {% endif %} */
/*                 */
/*                 {% if entity.joueurs[1]!= joueur%}<img src="{{ asset('uploads/joueurs/'~entity.joueurs[1].path)}}" width="240" height="228"> {% endif %}*/
/*                 <br><br>*/
/*                 Souhaiter vous parier sur {{joueur.nom}} {{joueur.prenom}} pour sont match Contre {% if entity.joueurs[0]!= joueur%} {{entity.joueurs[0].nom}} {{entity.joueurs[0].prenom}} {% endif %} {% if entity.joueurs[1]!= joueur%} {{entity.joueurs[1].nom}} {{entity.joueurs[1].prenom}} {% endif %}?*/
/*                 */
/*                  */
/*                 <form id="montantform" action="{{path('front_matchtennis_parier',{'id':entity.idMatch,'joueur':joueur.cinJoueur})}}" method="get" >*/
/*                     <input id="montant" type="number" name="montant">  */
/*                     <input type="submit">*/
/*                 </form>*/
/*             </div>*/
/*         </div>*/
/*     </section>*/
/* {% endblock %}*/
/* */
/* */
/* {% block jscript %}*/
/* */
/*     <script src="{{asset('bundles/squadftt/js/jquery-1.11.1.min.js')}}"></script>*/
/*     <script src="{{asset('bundles/squadftt/js/bootstrap.min.js')}} "></script>*/
/*     <script src="{{asset('bundles/squadftt/js/chart.min.js')}}"></script>*/
/*     <script src="{{asset('bundles/squadftt/js/chart-data.js')}}"></script>*/
/*     <script src="{{asset('bundles/squadftt/js/easypiechart.js')}}"></script>*/
/*     <script src="{{asset('bundles/squadftt/js/easypiechart-data.js')}}"></script>*/
/*     <script src="{{asset('bundles/squadftt/js/bootstrap-datepicker.js')}}"></script>*/
/*     <script src="{{asset('bundles/squadftt/js/bootstrap-table.js')}}"></script>*/
/* */
/* */
/* {% endblock %}*/
