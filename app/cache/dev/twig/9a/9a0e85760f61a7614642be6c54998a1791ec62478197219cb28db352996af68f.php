<?php

/* frontofficefrontBundle:Joueur:showAll.html.twig */
class __TwigTemplate_d43c3a18bcaa1e367d9637b1eefd5c4c57b1a77c15a32b92c3e0bfb533d4ed3c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("frontofficefrontBundle::MainLayout.html.twig", "frontofficefrontBundle:Joueur:showAll.html.twig", 1);
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
        echo "    <section class=\"drawer\">
        <div class=\"col-md-12 size-img back-img-match\">
            <div class=\"effect-cover\" >

                <h3 class=\"txt-advert animated fadeInUp\">JOUEURS</h3>
                <p class=\"txt-advert-sub\">« Le tennis, c’est plus qu’un sport. C’est un art, au même titre que la danse. » Bill Tilden. </p>
            </div>
        </div>

        <section id=\"players\" class=\"container secondary-page\">
            <div class=\"general general-results players\">

                <div class=\"top-score-title right-score col-md-9\">
                    <h3><span>Joueurs</span> Amateur<span class=\"point-little\">.</span></h3>
                    <p class=\"txt-right\">Ci-dessous la liste des joueurs amateurs en tunisie et un peu dans le monde. Vous pouvez accéder à plus d'informations à propos de chaque joueur en cliquant
                        sur son nom sur sa photo.</p>
                    <p class=\"txt-right txt-dd-second\">Un amateur se livre à une activité en dehors de son cadre professionnel, généralement sans rémunération, dont la motivation ressort essentiellement de la passion. Répondant en partie à des prescriptions et des désirs mimétiques, les pratiques amateurs supposent également un engagement personnel 
                        que ne considère pas toujours une sociologie déterministe.</p>
                        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 30
            echo "                            ";
            if (($this->getAttribute($context["entity"], "categorie", array()) == "Amateur")) {
                // line 31
                echo "                            <div class=\"col-md-3 atp-player\">
                                <a href=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("frontofficefront_joueur_show", array("cin" => $this->getAttribute($context["entity"], "cinJoueur", array()))), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/joueurs/" . $this->getAttribute($context["entity"], "path", array()))), "html", null, true);
                echo "\" alt=\"\" height=\"130\" width=\"160\" />
                                    <p>";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nom", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "prenom", array()), "html", null, true);
                echo "</p>
                                </a>
                            </div>
                        ";
            }
            // line 37
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "                    <div class=\"content-wtp-player\">
                        <h3><span>Joueurs</span> Professionels<span class=\"point-little\">.</span></h3>
                        <p class=\"txt-right\">Ci-dessous la liste des joueurs professionnels en tunisie et un peu dans le monde. Vous pouvez accéder à plus d'informations à propos de chaque joueur en cliquant
                            sur son nom sur sa photo.</p>
                        <p class=\"txt-right txt-dd-second\">Un joueur est considéré comme professionnel s'il tire de son activité des revenus suffisants pour en vivre, 
                            à l'inverse de l'amateur (dont la rémunération demeure minime sinon nulle)..</p>
                            ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 45
            echo "                                ";
            if (($this->getAttribute($context["entity"], "categorie", array()) == "Professionelle")) {
                // line 46
                echo "                                <div class=\"col-md-3 atp-player\" style =\"margin-right: 10px; margin-bottom: 10px\"\">
                                    <a href=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("frontofficefront_joueur_show", array("cin" => $this->getAttribute($context["entity"], "cinJoueur", array()))), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/joueurs/" . $this->getAttribute($context["entity"], "path", array()))), "html", null, true);
                echo "\" height=\"130\" width=\"160\" alt=\"\" />
                                        <p>";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nom", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "prenom", array()), "html", null, true);
                echo "</p>
                                    </a>
                                </div>
                            ";
            }
            // line 52
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "                    </div>
                    <div class=\"content-wtp-player\">
                        <h3><span>Joueurs</span> Juniors<span class=\"point-little\">.</span></h3>
                        <p class=\"txt-right\">Ci-dessous la liste des joueurs juniors en tunisie et un peu dans le monde. Vous pouvez accéder à plus d'informations à propos de chaque joueur en cliquant
                            sur son nom sur sa photo.</p>
                        <p class=\"txt-right txt-dd-second\">Dans cette catégorie nous retrouvons les joueurs qui ont entre 18 et 20 ans.</p>
                        ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 60
            echo "                            ";
            if (($this->getAttribute($context["entity"], "categorie", array()) == "Junior")) {
                // line 61
                echo "                                <div class=\"col-md-3 atp-player\" style =\"margin-right: 10px; margin-bottom: 10px\">
                                    <a href=\"";
                // line 62
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("frontofficefront_joueur_show", array("cin" => $this->getAttribute($context["entity"], "cinJoueur", array()))), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/joueurs/" . $this->getAttribute($context["entity"], "path", array()))), "html", null, true);
                echo "\" height=\"130\" width=\"160\" alt=\"\" />
                                        <p>";
                // line 63
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nom", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "prenom", array()), "html", null, true);
                echo "</p>
                                    </a>
                                </div>
                            ";
            }
            // line 67
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "                    </div>
                    <div class=\"content-wtp-player\">
                        <h3><span>Joueurs</span> Seniors<span class=\"point-little\">.</span></h3>
                        <p class=\"txt-right\">Ci-dessous la liste des joueurs seniors en tunisie et un peu dans le monde. Vous pouvez accéder à plus d'informations à propos de chaque joueur en cliquant
                            sur son nom sur sa photo.</p>
                        <p class=\"txt-right txt-dd-second\">Comme pour la catégorie des joueurs Juniors, ici nous retrouvons les joueurs classés par leurs ages qui ont entre 23 et 39 ans.Cette catégorie
                            désigne aussi les joueurs qui ont les meilleures performances.</p>
                            ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 76
            echo "                                ";
            if (($this->getAttribute($context["entity"], "categorie", array()) == "Senior")) {
                // line 77
                echo "                                <div class=\"col-md-3 atp-player\" style =\"margin-right: 10px; margin-bottom: 10px\">
                                    <a href=\"";
                // line 78
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("frontofficefront_joueur_show", array("cin" => $this->getAttribute($context["entity"], "cinJoueur", array()))), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/joueurs/" . $this->getAttribute($context["entity"], "path", array()))), "html", null, true);
                echo "\" height=\"130\" width=\"160\" alt=\"\" />
                                        <p>";
                // line 79
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nom", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "prenom", array()), "html", null, true);
                echo "</p>
                                    </a>
                                </div>
                            ";
            }
            // line 83
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "                    </div>
                </div><!--Close Top Match-->
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
        return "frontofficefrontBundle:Joueur:showAll.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 84,  212 => 83,  203 => 79,  197 => 78,  194 => 77,  191 => 76,  187 => 75,  178 => 68,  172 => 67,  163 => 63,  157 => 62,  154 => 61,  151 => 60,  147 => 59,  139 => 53,  133 => 52,  124 => 48,  118 => 47,  115 => 46,  112 => 45,  108 => 44,  100 => 38,  94 => 37,  85 => 33,  79 => 32,  76 => 31,  73 => 30,  69 => 29,  49 => 11,  46 => 10,  39 => 6,  32 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends 'frontofficefrontBundle::MainLayout.html.twig' %}*/
/* {% block menu %}*/
/*     <li><a class="lnk-menu active" href="{{ path('frontofficefront_joueur')}}">Joueurs</a></li>*/
/*     <li><a class="lnk-menu" href="results.html">Results</a></li>*/
/*     <li><a class="lnk-menu" href="news.html">News</a></li>*/
/*     <li><a class="lnk-menu" href="{{ path('frontofficefront_articles')}}">Articles</a></li>*/
/*     <li><a class="lnk-menu" href="contact.html">Contact</a></li>*/
/*     {% endblock %}*/
/* */
/* {% block main %}*/
/*     <section class="drawer">*/
/*         <div class="col-md-12 size-img back-img-match">*/
/*             <div class="effect-cover" >*/
/* */
/*                 <h3 class="txt-advert animated fadeInUp">JOUEURS</h3>*/
/*                 <p class="txt-advert-sub">« Le tennis, c’est plus qu’un sport. C’est un art, au même titre que la danse. » Bill Tilden. </p>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <section id="players" class="container secondary-page">*/
/*             <div class="general general-results players">*/
/* */
/*                 <div class="top-score-title right-score col-md-9">*/
/*                     <h3><span>Joueurs</span> Amateur<span class="point-little">.</span></h3>*/
/*                     <p class="txt-right">Ci-dessous la liste des joueurs amateurs en tunisie et un peu dans le monde. Vous pouvez accéder à plus d'informations à propos de chaque joueur en cliquant*/
/*                         sur son nom sur sa photo.</p>*/
/*                     <p class="txt-right txt-dd-second">Un amateur se livre à une activité en dehors de son cadre professionnel, généralement sans rémunération, dont la motivation ressort essentiellement de la passion. Répondant en partie à des prescriptions et des désirs mimétiques, les pratiques amateurs supposent également un engagement personnel */
/*                         que ne considère pas toujours une sociologie déterministe.</p>*/
/*                         {% for entity in entities %}*/
/*                             {% if entity.categorie == "Amateur" %}*/
/*                             <div class="col-md-3 atp-player">*/
/*                                 <a href="{{ path('frontofficefront_joueur_show',{ 'cin': entity.cinJoueur }) }}"><img src="{{asset('uploads/joueurs/'~entity.path)}}" alt="" height="130" width="160" />*/
/*                                     <p>{{entity.nom}} {{entity.prenom}}</p>*/
/*                                 </a>*/
/*                             </div>*/
/*                         {% endif %}*/
/*                     {% endfor %}*/
/*                     <div class="content-wtp-player">*/
/*                         <h3><span>Joueurs</span> Professionels<span class="point-little">.</span></h3>*/
/*                         <p class="txt-right">Ci-dessous la liste des joueurs professionnels en tunisie et un peu dans le monde. Vous pouvez accéder à plus d'informations à propos de chaque joueur en cliquant*/
/*                             sur son nom sur sa photo.</p>*/
/*                         <p class="txt-right txt-dd-second">Un joueur est considéré comme professionnel s'il tire de son activité des revenus suffisants pour en vivre, */
/*                             à l'inverse de l'amateur (dont la rémunération demeure minime sinon nulle)..</p>*/
/*                             {% for entity in entities %}*/
/*                                 {% if entity.categorie == "Professionelle" %}*/
/*                                 <div class="col-md-3 atp-player" style ="margin-right: 10px; margin-bottom: 10px"">*/
/*                                     <a href="{{ path('frontofficefront_joueur_show',{ 'cin': entity.cinJoueur }) }}"><img src="{{asset('uploads/joueurs/'~entity.path)}}" height="130" width="160" alt="" />*/
/*                                         <p>{{entity.nom}} {{entity.prenom}}</p>*/
/*                                     </a>*/
/*                                 </div>*/
/*                             {% endif %}*/
/*                         {% endfor %}*/
/*                     </div>*/
/*                     <div class="content-wtp-player">*/
/*                         <h3><span>Joueurs</span> Juniors<span class="point-little">.</span></h3>*/
/*                         <p class="txt-right">Ci-dessous la liste des joueurs juniors en tunisie et un peu dans le monde. Vous pouvez accéder à plus d'informations à propos de chaque joueur en cliquant*/
/*                             sur son nom sur sa photo.</p>*/
/*                         <p class="txt-right txt-dd-second">Dans cette catégorie nous retrouvons les joueurs qui ont entre 18 et 20 ans.</p>*/
/*                         {% for entity in entities %}*/
/*                             {% if entity.categorie == "Junior" %}*/
/*                                 <div class="col-md-3 atp-player" style ="margin-right: 10px; margin-bottom: 10px">*/
/*                                     <a href="{{ path('frontofficefront_joueur_show',{ 'cin': entity.cinJoueur }) }}"><img src="{{asset('uploads/joueurs/'~entity.path)}}" height="130" width="160" alt="" />*/
/*                                         <p>{{entity.nom}} {{entity.prenom}}</p>*/
/*                                     </a>*/
/*                                 </div>*/
/*                             {% endif %}*/
/*                         {% endfor %}*/
/*                     </div>*/
/*                     <div class="content-wtp-player">*/
/*                         <h3><span>Joueurs</span> Seniors<span class="point-little">.</span></h3>*/
/*                         <p class="txt-right">Ci-dessous la liste des joueurs seniors en tunisie et un peu dans le monde. Vous pouvez accéder à plus d'informations à propos de chaque joueur en cliquant*/
/*                             sur son nom sur sa photo.</p>*/
/*                         <p class="txt-right txt-dd-second">Comme pour la catégorie des joueurs Juniors, ici nous retrouvons les joueurs classés par leurs ages qui ont entre 23 et 39 ans.Cette catégorie*/
/*                             désigne aussi les joueurs qui ont les meilleures performances.</p>*/
/*                             {% for entity in entities %}*/
/*                                 {% if entity.categorie == "Senior" %}*/
/*                                 <div class="col-md-3 atp-player" style ="margin-right: 10px; margin-bottom: 10px">*/
/*                                     <a href="{{ path('frontofficefront_joueur_show',{ 'cin': entity.cinJoueur }) }}"><img src="{{asset('uploads/joueurs/'~entity.path)}}" height="130" width="160" alt="" />*/
/*                                         <p>{{entity.nom}} {{entity.prenom}}</p>*/
/*                                     </a>*/
/*                                 </div>*/
/*                             {% endif %}*/
/*                         {% endfor %}*/
/*                     </div>*/
/*                 </div><!--Close Top Match-->*/
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
/*     {% endblock %}  */
/* */
