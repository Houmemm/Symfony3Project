<?php

/* frontofficefrontBundle:Stade:index.html.twig */
class __TwigTemplate_477ce5da7d04e927060c65c594e68e32c5afee23810592b3495d683fa3a7ebd4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("frontofficefrontBundle::MainLayout.html.twig", "frontofficefrontBundle:Stade:index.html.twig", 1);
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

    // line 3
    public function block_header($context, array $blocks = array())
    {
        // line 4
        echo "
";
    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        // line 7
        echo "   ";
        // line 10
        echo "   
   
            <div class=\"col-md-12 size-img\" style=\"background:transparent url(";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/eae83bbc8e6ba3cbf26c9b40e96fabc78c2bcb7f.jpeg"), "html", null, true);
        echo ") no-repeat center center;
\t-webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;\">
                           
                
               <div class=\"effect-cover\">
                    <h3 class=\"txt-advert animated fadeInUp\">Stade Club Tunisie</h3>
                    <p class=\"txt-advert-sub\">L'important est de tirer une leçon de chaque échec. - John McEnroe</p>
                </div>
           </div>
    

   <section id=\"shop\" class=\"container secondary-page\">
            <div class=\"general general-results\">
                <div class=\"top-score-title right-score col-md-9\">


                <h3>Tunisie <span>Stade</span><span class=\"point-little\">.</span></h3>
                
        
 <div class=\"col-md-12 shops-top\" style=\"margin-bottom: 50px\">
     ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 36
            echo "         <div class=\"col-md-4\">
            <img  style=\"opacity: 1\" src=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/" . $this->getAttribute($context["entity"], "path", array()))), "html", null, true);
            echo "\"  height=\"164\" width=\"256\">
            <div class=\"slide-news-bottom\"><a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("frontofficefront_stadeMap", array("id" => $this->getAttribute($context["entity"], "idStade", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "libelleStade", array()), "html", null, true);
            echo "</a><a class=\"i-ico\" href=\"#\"><i class=\"fa fa-angle-double-right\"></i></a></div>
            </br>
            
            ";
            // line 41
            echo "               
         </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo " </div></div>
 
   
     <div class=\"col-md-3 right-column\">
           <div class=\"top-score-title col-md-12 right-title\">
                <h3>Latest News</h3>
                <div class=\"right-content\">
                    <p class=\"news-title-right\">A New Old Life</p>
                    <p class=\"txt-right\">Simon, who�s seeded just a lowly 26th here, was in many ways the right man for this grueling assignment</p>
                    <a href=\"single_news.html\" class=\"ca-more\"><i class=\"fa fa-angle-double-right\"></i>more...</a>
                </div>
                <div class=\"right-content\">
                    <p class=\"news-title-right\">A New Old Life</p>
                    <p class=\"txt-right\">Simon, who�s seeded just a lowly 26th here, was in many ways the right man for this grueling assignment</p>
                    <a href=\"single_news.html\" class=\"ca-more\"><i class=\"fa fa-angle-double-right\"></i>more...</a>
                </div>
                <div class=\"right-content\">
                    <p class=\"news-title-right\">A New Old Life</p>
                    <p class=\"txt-right\">Simon, who�s seeded just a lowly 26th here, was in many ways the right man for this grueling assignment</p>
                    <a href=\"single_news.html\" class=\"ca-more\"><i class=\"fa fa-angle-double-right\"></i>more...</a>
                </div>
           </div>
      </div> </section>
";
    }

    // line 68
    public function block_jscript($context, array $blocks = array())
    {
        // line 69
        echo "
";
    }

    public function getTemplateName()
    {
        return "frontofficefrontBundle:Stade:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 69,  127 => 68,  100 => 44,  92 => 41,  84 => 38,  80 => 37,  77 => 36,  73 => 35,  47 => 12,  43 => 10,  41 => 7,  38 => 6,  33 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends 'frontofficefrontBundle::MainLayout.html.twig' %}*/
/* */
/* {% block header %}*/
/* */
/* {% endblock %}*/
/* {% block main %}*/
/*    {# <section id="summary" class="container secondary-page">*/
/*       <div class="general general-results tournaments">*/
/*    <div class="top-score-title right-score col-md-9">#}*/
/*    */
/*    */
/*             <div class="col-md-12 size-img" style="background:transparent url({{asset('uploads/eae83bbc8e6ba3cbf26c9b40e96fabc78c2bcb7f.jpeg')}}) no-repeat center center;*/
/* 	-webkit-background-size: cover;*/
/*     -moz-background-size: cover;*/
/*     -o-background-size: cover;*/
/*     background-size: cover;">*/
/*                            */
/*                 */
/*                <div class="effect-cover">*/
/*                     <h3 class="txt-advert animated fadeInUp">Stade Club Tunisie</h3>*/
/*                     <p class="txt-advert-sub">L'important est de tirer une leçon de chaque échec. - John McEnroe</p>*/
/*                 </div>*/
/*            </div>*/
/*     */
/* */
/*    <section id="shop" class="container secondary-page">*/
/*             <div class="general general-results">*/
/*                 <div class="top-score-title right-score col-md-9">*/
/* */
/* */
/*                 <h3>Tunisie <span>Stade</span><span class="point-little">.</span></h3>*/
/*                 */
/*         */
/*  <div class="col-md-12 shops-top" style="margin-bottom: 50px">*/
/*      {% for entity in entities %}*/
/*          <div class="col-md-4">*/
/*             <img  style="opacity: 1" src="{{ asset('uploads/'~ entity.path) }}"  height="164" width="256">*/
/*             <div class="slide-news-bottom"><a href="{{ path('frontofficefront_stadeMap', { 'id': entity.idStade }) }}">{{ entity.libelleStade }}</a><a class="i-ico" href="#"><i class="fa fa-angle-double-right"></i></a></div>*/
/*             </br>*/
/*             */
/*             {#<span><div class="prod-buy"><a href="{{ path('frontofficefront_stadeMap', { 'id': entity.idStade }) }}">{{ entity.libelleStade }}</a></div></span>	 #}               */
/*          </div>*/
/*         {% endfor %}*/
/*  </div></div>*/
/*  */
/*    */
/*      <div class="col-md-3 right-column">*/
/*            <div class="top-score-title col-md-12 right-title">*/
/*                 <h3>Latest News</h3>*/
/*                 <div class="right-content">*/
/*                     <p class="news-title-right">A New Old Life</p>*/
/*                     <p class="txt-right">Simon, who�s seeded just a lowly 26th here, was in many ways the right man for this grueling assignment</p>*/
/*                     <a href="single_news.html" class="ca-more"><i class="fa fa-angle-double-right"></i>more...</a>*/
/*                 </div>*/
/*                 <div class="right-content">*/
/*                     <p class="news-title-right">A New Old Life</p>*/
/*                     <p class="txt-right">Simon, who�s seeded just a lowly 26th here, was in many ways the right man for this grueling assignment</p>*/
/*                     <a href="single_news.html" class="ca-more"><i class="fa fa-angle-double-right"></i>more...</a>*/
/*                 </div>*/
/*                 <div class="right-content">*/
/*                     <p class="news-title-right">A New Old Life</p>*/
/*                     <p class="txt-right">Simon, who�s seeded just a lowly 26th here, was in many ways the right man for this grueling assignment</p>*/
/*                     <a href="single_news.html" class="ca-more"><i class="fa fa-angle-double-right"></i>more...</a>*/
/*                 </div>*/
/*            </div>*/
/*       </div> </section>*/
/* {% endblock %}*/
/* {% block jscript %}*/
/* */
/* {% endblock %}*/
