<?php

/* frontofficefrontBundle:Articles:showAll.html.twig */
class __TwigTemplate_8570b287dc15e26da143a6c117e6f2fafbd1c7cca90f0646ffa706705439c13e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("frontofficefrontBundle::MainLayout.html.twig", "frontofficefrontBundle:Articles:showAll.html.twig", 1);
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
        echo "    <section class=\"drawer\">
        <div class=\"col-md-12 size-img back-img-shop\">
            <div class=\"effect-cover\">
                <h3 class=\"txt-advert animated fadeInUp\">Les meilleurs equipements </h3>
                <p class=\"txt-advert-sub\">Rackets - Ball - Sacs - Chaussures</p>
            </div>
        </div>

        <section id=\"shop\" class=\"container secondary-page\">
            <div class=\"general general-results\">
                <div class=\"top-score-title right-score col-md-9\">
                    <h3>Trouvez votre <span>produits</span><span class=\"point-little\">.</span></h3>
                    <div class=\"col-md-12 shops shops-top\" style=\"margin-bottom: 50px\">
                        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 25
            echo "                            ";
            if (($this->getAttribute($context["entity"], "etatArticle", array()) == "Disponnible")) {
                // line 26
                echo "                                <div class=\"col-md-4 shop-prod\">
                                    <img src=\"";
                // line 27
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("upload/articles/" . $this->getAttribute($context["entity"], "pathArticle", array()))), "html", null, true);
                echo "\" height=\"150\" width=\"140\" alt=\"\" />
                                    <div class=\"title-prod\"><a href=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("frontofficefront_articles_show", array("id" => $this->getAttribute($context["entity"], "idArticle", array()))), "html", null, true);
                echo "\" >";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "libelleArticle", array()), "html", null, true);
                echo "</a></div>
                                    
                                    <div class=\"prod-buy\">";
                // line 30
                if ( !$this->getAttribute((isset($context["panier"]) ? $context["panier"] : null), $this->getAttribute($context["entity"], "idArticle", array()), array(), "array", true, true)) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("frontofficefront_panier_ajouter", array("id" => $this->getAttribute($context["entity"], "idArticle", array()))), "html", null, true);
                    echo "\" class=\"prod-cart\"><i class=\"fa fa-shopping-cart\"></i>Ajouter</a>";
                }
                echo "<p class=\"prod-sh-price\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "prix", array()), "html", null, true);
                echo " DT</p></div>
                                    
                                    </div>  
                            ";
            }
            // line 34
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "                    </div>
                </div><!--Close Top Match-->
                <div class=\"col-md-3 right-column\"> 
                    <div class=\"top-score-title prod-cat col-md-12\">
                        <h3></h3>
                        <div class=\"products-content\">
                            <a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("frontofficefront_panier");
        echo "\" class=\"news-title-right\"> <i class=\"fa fa-shopping-cart\"></i>     Panier ( ";
        echo twig_escape_filter($this->env, (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")), "html", null, true);
        echo " ) </a>
                        </div>

                    </div>
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

    </section>


    ";
    }

    public function getTemplateName()
    {
        return "frontofficefrontBundle:Articles:showAll.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 41,  104 => 35,  98 => 34,  85 => 30,  78 => 28,  74 => 27,  71 => 26,  68 => 25,  64 => 24,  49 => 11,  46 => 10,  39 => 6,  32 => 3,  29 => 2,  11 => 1,);
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
/*     <section class="drawer">*/
/*         <div class="col-md-12 size-img back-img-shop">*/
/*             <div class="effect-cover">*/
/*                 <h3 class="txt-advert animated fadeInUp">Les meilleurs equipements </h3>*/
/*                 <p class="txt-advert-sub">Rackets - Ball - Sacs - Chaussures</p>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <section id="shop" class="container secondary-page">*/
/*             <div class="general general-results">*/
/*                 <div class="top-score-title right-score col-md-9">*/
/*                     <h3>Trouvez votre <span>produits</span><span class="point-little">.</span></h3>*/
/*                     <div class="col-md-12 shops shops-top" style="margin-bottom: 50px">*/
/*                         {% for entity in entities %}*/
/*                             {% if entity.etatArticle == "Disponnible" %}*/
/*                                 <div class="col-md-4 shop-prod">*/
/*                                     <img src="{{asset('upload/articles/'~entity.pathArticle)}}" height="150" width="140" alt="" />*/
/*                                     <div class="title-prod"><a href="{{ path('frontofficefront_articles_show',{ 'id': entity.idArticle }) }}" >{{ entity.libelleArticle }}</a></div>*/
/*                                     */
/*                                     <div class="prod-buy">{% if panier[entity.idArticle] is not defined %}<a href="{{ path('frontofficefront_panier_ajouter',{ 'id': entity.idArticle }) }}" class="prod-cart"><i class="fa fa-shopping-cart"></i>Ajouter</a>{% endif %}<p class="prod-sh-price">{{ entity.prix }} DT</p></div>*/
/*                                     */
/*                                     </div>  */
/*                             {% endif %}*/
/*                         {% endfor %}*/
/*                     </div>*/
/*                 </div><!--Close Top Match-->*/
/*                 <div class="col-md-3 right-column"> */
/*                     <div class="top-score-title prod-cat col-md-12">*/
/*                         <h3></h3>*/
/*                         <div class="products-content">*/
/*                             <a href="{{path('frontofficefront_panier')}}" class="news-title-right"> <i class="fa fa-shopping-cart"></i>     Panier ( {{ total }} ) </a>*/
/*                         </div>*/
/* */
/*                     </div>*/
/*                     <div class="top-score-title col-md-12 right-title">*/
/* */
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
/* */
/*                 </div>*/
/*         </section>*/
/* */
/*     </section>*/
/* */
/* */
/*     {% endblock %}*/
/* */
