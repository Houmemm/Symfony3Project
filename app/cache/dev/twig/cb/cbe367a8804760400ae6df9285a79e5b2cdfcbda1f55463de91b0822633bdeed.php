<?php

/* frontofficefrontBundle:Joueur:show.html.twig */
class __TwigTemplate_687c2015ed5479353719310111c3754bd0d11abc861b7db6020c4575b41e5fcc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("frontofficefrontBundle::MainLayout.html.twig", "frontofficefrontBundle:Joueur:show.html.twig", 1);
        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'main' => array($this, 'block_main'),
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
    public function block_menu($context, array $blocks = array())
    {
        // line 3
        echo "    <li><a class=\"lnk-menu active\" href=\"";
        echo $this->env->getExtension('routing')->getPath("frontofficefront_joueur");
        echo "\">Joueurs</a></li>
    <li><a class=\"lnk-menu\" href=\"results.html\">Results</a></li>
    <li><a class=\"lnk-menu\" href=\"news.html\">News</a></li>
    <li><a class=\"lnk-menu\" href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("frontofficefront_articles");
        echo "\">Articles</a></li>
    <li><a class=\"lnk-menu\" href=\"contact.html\">Contact</a></li>
";
    }

    // line 10
    public function block_main($context, array $blocks = array())
    {
        // line 11
        echo "
    <section class=\"drawer\">
        <div class=\"col-md-12 size-img back-img-match\">
            <div class=\"effect-cover\">
                <h3 class=\"txt-advert animated fadeInUp\">JOUEURS</h3>
                <p class=\"txt-advert-sub\">« Le tennis, c’est plus qu’un sport. C’est un art, au même titre que la danse. » Bill Tilden. </p>
            </div>
        </div>

        <section id=\"single_player\" class=\"container secondary-page\">
            <div class=\"general general-results players\">
                <div class=\"top-score-title right-score col-md-9\">
                    <h3>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nom", array()), "html", null, true);
        echo " <span>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "prenom", array()), "html", null, true);
        echo "</span><span class=\"point-little\">.</span></h3>
                    <div class=\"col-md-12 atp-single-player\">
                        <img class=\"img-djoko\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/joueurs/" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "path", array()))), "html", null, true);
        echo "\" alt=\"\" height=\"250\" width=\"250\"/>
                        <div class=\"col-md-2 data-player\">
                            <p>D.naissaince:</p>
                            <p>Nationalite:</p>
                            <p>Taille:</p>
                            <p>Poids:</p>
                            <p>Main forte:</p>
                            <p>Points aquis:</p>
                            <p>Club actuel:</p>
                        </div>
                        <div class=\"col-md-3 data-player-2\">
                            <p>";
        // line 36
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateDeNaissance", array()), "d-m-Y"), "html", null, true);
        echo "</p>
                            <p>";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nationaliterJoueur", array()), "html", null, true);
        echo "</p>
                            <p>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "taille", array()), "html", null, true);
        echo "</p>
                            <p>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "poids", array()), "html", null, true);
        echo "</p>
                            <p>";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "mainForte", array()), "html", null, true);
        echo "</p>
                            <p>";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pointAquis", array()), "html", null, true);
        echo "</p>
                            <p>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "clubClub", array()), "getLibelleClub", array(), "method"), "html", null, true);
        echo "</p>
                        </div>

                    </div>
                    <div class=\"col-md-12 atp-single-player skill-content\">
                        <div class=\"ppl-desc\">
                            <p class=\"exp-title-pp\">DESCRIPTION</p>
                            <p>";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "prenom", array()), "html", null, true);
        echo " est un joueur de tennis de la categorie ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "categorie", array()), "html", null, true);
        echo " qui a à son compte ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pointAquis", array()), "html", null, true);
        echo "
                                points. ";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nom", array()), "html", null, true);
        echo " est de nationaliter ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nationaliterJoueur", array()), "html", null, true);
        echo " </p>, il est né en ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateDeNaissance", array()), "d-m-Y"), "html", null, true);
        echo ". il mesure 
                            ";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "taille", array()), "html", null, true);
        echo " cm et pese ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "poids", array()), "html", null, true);
        echo " Kg. ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nom", array()), "html", null, true);
        echo " joue actuellemet pour le ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "clubClub", array()), "getLibelleClub", array(), "method"), "html", null, true);
        echo ".  
                        </div>
                    </div>

                    <div class=\"col-md-12 atp-single-player skill-content\" style=\"margin-bottom: 50px\">
                        <div class=\"ppl-desc\">
                        ";
        // line 57
        echo $this->env->getExtension('nomaya_social_bar')->getSocialButtons();
        echo "
                        </div>
                    </div>
                    
                </div><!--Close Top Match-->

                <!--Right Column-->
                <div class=\"col-md-3 right-column\">
                    <div class=\"top-score-title col-md-12 right-title\">
                        <h3>Latest News</h3>
                        <div class=\"right-content\">
                            <p class=\"news-title-right\">A New Old Life</p>
                            <p class=\"txt-right\">Simon, who’s seeded just a lowly 26th here, was in many ways the right man for this grueling assignment</p>
                            <a href=\"single_news.html\" class=\"ca-more\"><i class=\"fa fa-angle-double-right\"></i>more...</a>
                        </div>
                        <div class=\"right-content\">
                            <p class=\"news-title-right\">A New Old Life</p>
                            <p class=\"txt-right\">Simon, who’s seeded just a lowly 26th here, was in many ways the right man for this grueling assignment</p>
                            <a href=\"single_news.html\" class=\"ca-more\"><i class=\"fa fa-angle-double-right\"></i>more...</a>
                        </div>
                        <div class=\"right-content\">
                            <p class=\"news-title-right\">A New Old Life</p>
                            <p class=\"txt-right\">Simon, who’s seeded just a lowly 26th here, was in many ways the right man for this grueling assignment</p>
                            <a href=\"single_news.html\" class=\"ca-more\"><i class=\"fa fa-angle-double-right\"></i>more...</a>
                        </div>
                    </div>

                </div>
        </section>


    ";
    }

    public function getTemplateName()
    {
        return "frontofficefrontBundle:Joueur:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 57,  136 => 51,  128 => 50,  118 => 49,  108 => 42,  104 => 41,  100 => 40,  96 => 39,  92 => 38,  88 => 37,  84 => 36,  70 => 25,  63 => 23,  49 => 11,  46 => 10,  39 => 6,  32 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends 'frontofficefrontBundle::MainLayout.html.twig' %}*/
/* {% block menu %}*/
/*     <li><a class="lnk-menu active" href="{{ path('frontofficefront_joueur')}}">Joueurs</a></li>*/
/*     <li><a class="lnk-menu" href="results.html">Results</a></li>*/
/*     <li><a class="lnk-menu" href="news.html">News</a></li>*/
/*     <li><a class="lnk-menu" href="{{ path('frontofficefront_articles')}}">Articles</a></li>*/
/*     <li><a class="lnk-menu" href="contact.html">Contact</a></li>*/
/* {% endblock %}*/
/* */
/* {% block main %}*/
/* */
/*     <section class="drawer">*/
/*         <div class="col-md-12 size-img back-img-match">*/
/*             <div class="effect-cover">*/
/*                 <h3 class="txt-advert animated fadeInUp">JOUEURS</h3>*/
/*                 <p class="txt-advert-sub">« Le tennis, c’est plus qu’un sport. C’est un art, au même titre que la danse. » Bill Tilden. </p>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <section id="single_player" class="container secondary-page">*/
/*             <div class="general general-results players">*/
/*                 <div class="top-score-title right-score col-md-9">*/
/*                     <h3>{{entity.nom}} <span>{{entity.prenom}}</span><span class="point-little">.</span></h3>*/
/*                     <div class="col-md-12 atp-single-player">*/
/*                         <img class="img-djoko" src="{{asset('uploads/joueurs/'~entity.path)}}" alt="" height="250" width="250"/>*/
/*                         <div class="col-md-2 data-player">*/
/*                             <p>D.naissaince:</p>*/
/*                             <p>Nationalite:</p>*/
/*                             <p>Taille:</p>*/
/*                             <p>Poids:</p>*/
/*                             <p>Main forte:</p>*/
/*                             <p>Points aquis:</p>*/
/*                             <p>Club actuel:</p>*/
/*                         </div>*/
/*                         <div class="col-md-3 data-player-2">*/
/*                             <p>{{entity.dateDeNaissance|date('d-m-Y')}}</p>*/
/*                             <p>{{entity.nationaliterJoueur}}</p>*/
/*                             <p>{{entity.taille}}</p>*/
/*                             <p>{{entity.poids}}</p>*/
/*                             <p>{{entity.mainForte}}</p>*/
/*                             <p>{{entity.pointAquis}}</p>*/
/*                             <p>{{entity.clubClub.getLibelleClub()}}</p>*/
/*                         </div>*/
/* */
/*                     </div>*/
/*                     <div class="col-md-12 atp-single-player skill-content">*/
/*                         <div class="ppl-desc">*/
/*                             <p class="exp-title-pp">DESCRIPTION</p>*/
/*                             <p>{{entity.nom}} {{entity.prenom}} est un joueur de tennis de la categorie {{entity.categorie}} qui a à son compte {{entity.pointAquis}}*/
/*                                 points. {{entity.nom}} est de nationaliter {{entity.nationaliterJoueur}} </p>, il est né en {{entity.dateDeNaissance|date('d-m-Y')}}. il mesure */
/*                             {{entity.taille}} cm et pese {{entity.poids}} Kg. {{entity.nom}} joue actuellemet pour le {{entity.clubClub.getLibelleClub()}}.  */
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="col-md-12 atp-single-player skill-content" style="margin-bottom: 50px">*/
/*                         <div class="ppl-desc">*/
/*                         {{ socialButtons() }}*/
/*                         </div>*/
/*                     </div>*/
/*                     */
/*                 </div><!--Close Top Match-->*/
/* */
/*                 <!--Right Column-->*/
/*                 <div class="col-md-3 right-column">*/
/*                     <div class="top-score-title col-md-12 right-title">*/
/*                         <h3>Latest News</h3>*/
/*                         <div class="right-content">*/
/*                             <p class="news-title-right">A New Old Life</p>*/
/*                             <p class="txt-right">Simon, who’s seeded just a lowly 26th here, was in many ways the right man for this grueling assignment</p>*/
/*                             <a href="single_news.html" class="ca-more"><i class="fa fa-angle-double-right"></i>more...</a>*/
/*                         </div>*/
/*                         <div class="right-content">*/
/*                             <p class="news-title-right">A New Old Life</p>*/
/*                             <p class="txt-right">Simon, who’s seeded just a lowly 26th here, was in many ways the right man for this grueling assignment</p>*/
/*                             <a href="single_news.html" class="ca-more"><i class="fa fa-angle-double-right"></i>more...</a>*/
/*                         </div>*/
/*                         <div class="right-content">*/
/*                             <p class="news-title-right">A New Old Life</p>*/
/*                             <p class="txt-right">Simon, who’s seeded just a lowly 26th here, was in many ways the right man for this grueling assignment</p>*/
/*                             <a href="single_news.html" class="ca-more"><i class="fa fa-angle-double-right"></i>more...</a>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                 </div>*/
/*         </section>*/
/* */
/* */
/*     {% endblock %}*/
/* */
