<?php

/* frontofficefrontBundle:Articles:show.html.twig */
class __TwigTemplate_81db4c980c1600bacf8d26aa32737a70ce6bb8f82c6ee3f8c81cfe0d9d21eaea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("frontofficefrontBundle::MainLayout.html.twig", "frontofficefrontBundle:Articles:show.html.twig", 1);
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
                <div class=\"top-score-title col-md-9\">
                    <h3>Détails <span>du produit</span> <span class=\"point-little\">.</span></h3>
                    <div class=\"col-md-12 content-zoom\">
                        <div class=\"col-md-6 content-img-zoom\">
                            <img id=\"img_01\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("upload/articles/" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pathArticle", array()))), "html", null, true);
        echo "\" width=\"400\" height=\"340\" />
                        </div>
                        <div class=\"col-md-6 content-desc-zoom\">
                            <h3>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "libelleArticle", array()), "html", null, true);
        echo "</h3>
                            <p class=\"desc-prod\">";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description", array()), "html", null, true);
        echo "</p>
                            <p class=\"desc-price\">";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "prix", array()), "html", null, true);
        echo " Dt</p>

                            <div class=\"cart-bt\">";
        // line 32
        if ( !$this->getAttribute((isset($context["panier"]) ? $context["panier"] : null), $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idArticle", array()), array(), "array", true, true)) {
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("frontofficefront_panier_ajouter", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idArticle", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-shopping-cart\"></i>Ajouter</a>";
        }
        echo "</div>
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
        </section>

    ";
    }

    public function getTemplateName()
    {
        return "frontofficefrontBundle:Articles:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 32,  79 => 30,  75 => 29,  71 => 28,  65 => 25,  49 => 11,  46 => 10,  39 => 6,  32 => 3,  29 => 2,  11 => 1,);
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
/*             <div class="general general-results">      */
/*                 <div class="top-score-title col-md-9">*/
/*                     <h3>Détails <span>du produit</span> <span class="point-little">.</span></h3>*/
/*                     <div class="col-md-12 content-zoom">*/
/*                         <div class="col-md-6 content-img-zoom">*/
/*                             <img id="img_01" src="{{asset('upload/articles/'~entity.pathArticle)}}" width="400" height="340" />*/
/*                         </div>*/
/*                         <div class="col-md-6 content-desc-zoom">*/
/*                             <h3>{{ entity.libelleArticle }}</h3>*/
/*                             <p class="desc-prod">{{ entity.description }}</p>*/
/*                             <p class="desc-price">{{ entity.prix }} Dt</p>*/
/* */
/*                             <div class="cart-bt">{% if panier[entity.idArticle] is not defined %}<a href="{{ path('frontofficefront_panier_ajouter',{ 'id': entity.idArticle }) }}"><i class="fa fa-shopping-cart"></i>Ajouter</a>{% endif %}</div>*/
/*                         </div>*/
/* */
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
/* */
/*                 </div>*/
/*         </section>*/
/* */
/*     {% endblock %}*/
/* */
