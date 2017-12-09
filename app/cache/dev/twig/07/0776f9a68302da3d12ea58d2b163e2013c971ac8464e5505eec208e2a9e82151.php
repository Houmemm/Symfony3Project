<?php

/* frontofficefrontBundle:Panier:show.html.twig */
class __TwigTemplate_f16f7092298246808c7914a88622cffe67e84d04fc6a384ded973be87610ad0a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("frontofficefrontBundle::MainLayout.html.twig", "frontofficefrontBundle:Panier:show.html.twig", 1);
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
        echo "    <li><a class=\"lnk-menu\" href=\"";
        echo $this->env->getExtension('routing')->getPath("frontofficefront_joueur");
        echo "\">Joueurs</a></li>
    <li><a class=\"lnk-menu\" href=\"results.html\">Results</a></li>
    <li><a class=\"lnk-menu\" href=\"news.html\">News</a></li>
    <li><a class=\"lnk-menu active\" href=\"";
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
        <div class=\"col-md-12 size-img back-img-shop\">
            <div class=\"effect-cover\">
                <h3 class=\"txt-advert animated fadeInUp\">Les meilleurs equipements </h3>
                <p class=\"txt-advert-sub\">Rackets - Ball - Sacs - Chaussures</p>
            </div>
        </div>

        <section id=\"single-match-pl\" class=\"container secondary-page\">
            <div class=\"general general-results players\">  


                <div class=\"top-score-title right-score col-md-9\">

                    <div class=\"top-score-title player-vs\">
                        <div class=\"main\">
                            <div class=\"tabs standard single-pl\">
                                <div class=\"tab-content single-match\">
                                    <div id=\"tab1\" class=\"tab active\">
                                        <h3 class=\"tab-match-title\">Votre panier </h3>
                                        <div class=\"tabs standard\">
                                            ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 34
            echo "                                                <div class=' alert alert-success'> ";
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo " </div>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "                                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "warning"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 37
            echo "                                                <div class=' alert alert-danger'> ";
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo " </div>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "                                            <div class=\"tab-content\">
                                                <div id=\"tab1a\" class=\"tab active\">
                                                    <div class=\"col-md-4 single-match-data\">
                                                        <p class=\"nm-player\">Articles</p>
                                                        ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")));
        foreach ($context['_seq'] as $context["_key"] => $context["art"]) {
            // line 44
            echo "                                                            <p>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["art"], "libelleArticle", array()), "html", null, true);
            echo "</p>
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['art'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "                                                    </div>
                                                    <div class=\"col-md-4 single-match-data\">
                                                        <p class=\"nm-player\">Prix (DT)</p>
                                                        ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")));
        foreach ($context['_seq'] as $context["_key"] => $context["art"]) {
            // line 50
            echo "                                                            <p>   ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["art"], "prix", array()), "html", null, true);
            echo "</p>
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['art'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "                                                    </div>
                                                    <div class=\"col-md-4 single-match-data\">
                                                        <p class=\"nm-player\">Actions</p>
                                                        ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")));
        foreach ($context['_seq'] as $context["_key"] => $context["art"]) {
            // line 56
            echo "                                                            <p><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("frontofficefront_panier_supprimer", array("id" => $this->getAttribute($context["art"], "idArticle", array()))), "html", null, true);
            echo "\"class=\"\">Supprimer du panier</a></p>
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['art'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "                                                    </div>
                                                </div>

                                            </div>

                                        </div>     
                                    </div>

                                </div>

                            </div>
                        </div> 
                    </div>
                    <div class=\"col-md-12 atp-single-player\">
                        <div class=\"col-md-2 data-player\">
                            <p>TOTAL:</p>
                            <p>SOLDE:</p>

                            ";
        // line 76
        $context["total"] = 0;
        // line 77
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")));
        foreach ($context['_seq'] as $context["_key"] => $context["art"]) {
            // line 78
            echo "                                ";
            $context["total"] = ((isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")) + $this->getAttribute($context["art"], "prix", array()));
            // line 79
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['art'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "                            
                                
                                <p>";
        // line 82
        if (((isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")) > $this->getAttribute((isset($context["solde"]) ? $context["solde"] : $this->getContext($context, "solde")), "valeur", array()))) {
            echo "<a href=\"";
            echo $this->env->getExtension('routing')->getPath("frontofficefront_paniersFail");
            echo "\" class=\"ready-news\"> ACHETER </a>
                                ";
        } else {
            // line 83
            echo "<a href=\"";
            echo $this->env->getExtension('routing')->getPath("frontofficefront_paniers");
            echo "\" class=\"ready-news\"> ACHETER </a>
                                    ";
        }
        // line 84
        echo "</p>
                                    
                            
                                    </div>
                                    <div class=\"col-md-3 data-player-2\">
                                        ";
        // line 89
        $context["total"] = 0;
        // line 90
        echo "                                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")));
        foreach ($context['_seq'] as $context["_key"] => $context["art"]) {
            // line 91
            echo "                                            ";
            $context["total"] = ((isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")) + $this->getAttribute($context["art"], "prix", array()));
            // line 92
            echo "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['art'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "                                        <p> ";
        echo twig_escape_filter($this->env, (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")), "html", null, true);
        echo " DT </p>
                                        
                                            <p>";
        // line 95
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solde"]) ? $context["solde"] : $this->getContext($context, "solde")), "valeur", array()), "html", null, true);
        echo " DT</p>
                                        

                                    </div>

                                </div>
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
                        </div>
                    </section>








                </section>
                ";
    }

    public function getTemplateName()
    {
        return "frontofficefrontBundle:Panier:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 95,  231 => 93,  225 => 92,  222 => 91,  217 => 90,  215 => 89,  208 => 84,  202 => 83,  195 => 82,  191 => 80,  185 => 79,  182 => 78,  177 => 77,  175 => 76,  155 => 58,  146 => 56,  142 => 55,  137 => 52,  128 => 50,  124 => 49,  119 => 46,  110 => 44,  106 => 43,  100 => 39,  91 => 37,  86 => 36,  77 => 34,  73 => 33,  49 => 11,  46 => 10,  39 => 6,  32 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends 'frontofficefrontBundle::MainLayout.html.twig' %}*/
/* {% block menu %}*/
/*     <li><a class="lnk-menu" href="{{ path('frontofficefront_joueur')}}">Joueurs</a></li>*/
/*     <li><a class="lnk-menu" href="results.html">Results</a></li>*/
/*     <li><a class="lnk-menu" href="news.html">News</a></li>*/
/*     <li><a class="lnk-menu active" href="{{ path('frontofficefront_articles')}}">Articles</a></li>*/
/*     <li><a class="lnk-menu" href="contact.html">Contact</a></li>*/
/*     {% endblock %}*/
/* */
/* {% block main %}*/
/* */
/*     <section class="drawer">*/
/*         <div class="col-md-12 size-img back-img-shop">*/
/*             <div class="effect-cover">*/
/*                 <h3 class="txt-advert animated fadeInUp">Les meilleurs equipements </h3>*/
/*                 <p class="txt-advert-sub">Rackets - Ball - Sacs - Chaussures</p>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <section id="single-match-pl" class="container secondary-page">*/
/*             <div class="general general-results players">  */
/* */
/* */
/*                 <div class="top-score-title right-score col-md-9">*/
/* */
/*                     <div class="top-score-title player-vs">*/
/*                         <div class="main">*/
/*                             <div class="tabs standard single-pl">*/
/*                                 <div class="tab-content single-match">*/
/*                                     <div id="tab1" class="tab active">*/
/*                                         <h3 class="tab-match-title">Votre panier </h3>*/
/*                                         <div class="tabs standard">*/
/*                                             {% for flashMessage in app.session.flashbag.get('success') %}*/
/*                                                 <div class=' alert alert-success'> {{ flashMessage }} </div>*/
/*                                             {% endfor %}*/
/*                                             {% for flashMessage in app.session.flashbag.get('warning') %}*/
/*                                                 <div class=' alert alert-danger'> {{ flashMessage }} </div>*/
/*                                             {% endfor %}*/
/*                                             <div class="tab-content">*/
/*                                                 <div id="tab1a" class="tab active">*/
/*                                                     <div class="col-md-4 single-match-data">*/
/*                                                         <p class="nm-player">Articles</p>*/
/*                                                         {% for art in article %}*/
/*                                                             <p>{{ art.libelleArticle }}</p>*/
/*                                                         {% endfor %}*/
/*                                                     </div>*/
/*                                                     <div class="col-md-4 single-match-data">*/
/*                                                         <p class="nm-player">Prix (DT)</p>*/
/*                                                         {% for art in article %}*/
/*                                                             <p>   {{ art.prix }}</p>*/
/*                                                         {% endfor %}*/
/*                                                     </div>*/
/*                                                     <div class="col-md-4 single-match-data">*/
/*                                                         <p class="nm-player">Actions</p>*/
/*                                                         {% for art in article %}*/
/*                                                             <p><a href="{{ path('frontofficefront_panier_supprimer',{ 'id': art.idArticle }) }}"class="">Supprimer du panier</a></p>*/
/*                                                         {% endfor %}*/
/*                                                     </div>*/
/*                                                 </div>*/
/* */
/*                                             </div>*/
/* */
/*                                         </div>     */
/*                                     </div>*/
/* */
/*                                 </div>*/
/* */
/*                             </div>*/
/*                         </div> */
/*                     </div>*/
/*                     <div class="col-md-12 atp-single-player">*/
/*                         <div class="col-md-2 data-player">*/
/*                             <p>TOTAL:</p>*/
/*                             <p>SOLDE:</p>*/
/* */
/*                             {% set total = 0 %}*/
/*                             {% for art in article %}*/
/*                                 {% set total = total + art.prix %}*/
/*                             {% endfor %}*/
/*                             */
/*                                 */
/*                                 <p>{% if total > solde.valeur %}<a href="{{ path('frontofficefront_paniersFail') }}" class="ready-news"> ACHETER </a>*/
/*                                 {% else %}<a href="{{ path('frontofficefront_paniers') }}" class="ready-news"> ACHETER </a>*/
/*                                     {% endif %}</p>*/
/*                                     */
/*                             */
/*                                     </div>*/
/*                                     <div class="col-md-3 data-player-2">*/
/*                                         {% set total = 0 %}*/
/*                                         {% for art in article %}*/
/*                                             {% set total = total + art.prix %}*/
/*                                         {% endfor %}*/
/*                                         <p> {{ total }} DT </p>*/
/*                                         */
/*                                             <p>{{ solde.valeur }} DT</p>*/
/*                                         */
/* */
/*                                     </div>*/
/* */
/*                                 </div>*/
/*                             </div><!--Close Top Match-->*/
/*                             <div class="col-md-3 right-column">*/
/* */
/* */
/*                                 <div class="top-score-title col-md-12 right-title">*/
/*                                     <h3>Latest News</h3>*/
/*                                     <div class="right-content">*/
/*                                         <p class="news-title-right">A New Old Life</p>*/
/*                                         <p class="txt-right">Simon, who’s seeded just a lowly 26th here, was in many ways the right man for this grueling assignment</p>*/
/*                                         <a href="single_news.html" class="ca-more"><i class="fa fa-angle-double-right"></i>more...</a>*/
/*                                     </div>*/
/*                                     <div class="right-content">*/
/*                                         <p class="news-title-right">A New Old Life</p>*/
/*                                         <p class="txt-right">Simon, who’s seeded just a lowly 26th here, was in many ways the right man for this grueling assignment</p>*/
/*                                         <a href="single_news.html" class="ca-more"><i class="fa fa-angle-double-right"></i>more...</a>*/
/*                                     </div>*/
/*                                     <div class="right-content">*/
/*                                         <p class="news-title-right">A New Old Life</p>*/
/*                                         <p class="txt-right">Simon, who’s seeded just a lowly 26th here, was in many ways the right man for this grueling assignment</p>*/
/*                                         <a href="single_news.html" class="ca-more"><i class="fa fa-angle-double-right"></i>more...</a>*/
/*                                     </div>*/
/*                                 </div>*/
/* */
/*                             </div>*/
/*                         </div>*/
/*                     </section>*/
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/*                 </section>*/
/*                 {% endblock %}*/
