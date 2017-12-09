<?php

/* frontofficefrontBundle::MainLayout.html.twig */
class __TwigTemplate_8c1c927be5b796f5ac38588baa3767d959123d512543043ddcfc64ee6dfd491d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html xmlns=\"http://www.w3.org/1999/xhtml\">
    <head>
        <title>WT TENNIS</title>
        <meta content=\"text/html; charset=utf-8\" http-equiv=\"Content-Type\" />

        <meta name=\"author\" content=\"Corsini Alessio\" />
        <meta name=\"keywords\" content=\"Tennis, club, events, football, golf, non-profit, betting assistant, football,fitness, tennis, sport, soccer, goal, sports, volleyball, basketball,\tcharity, club, cricket, football, hockey, magazine, non profit, rugby, soccer, sport, sports, tennis\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>

        <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <!--<link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />-->

        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,700,600,300' rel='stylesheet' type='text/css'/>
        <!--<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700' rel='stylesheet' type='text/css'/>-->
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,300,200,500,600,700,800,900' rel='stylesheet' type='text/css'/>
        <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>

            <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/css/fonts/font-awesome-4.1.0/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
            <!--Clients-->
            <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/css/own/owl.carousel.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/css/own/owl.theme.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />


            <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/css/jquery.bxslider.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/css/jquery.js"), "html", null, true);
        echo "crollpane.css')}}\" rel=\"stylesheet\" type=\"text/css\" />

            <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/css/minislide/flexslider.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/css/component.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/css/prettyPhoto.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/css/style_dir.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
            <link rel=\"shortcut icon\" type=\"image/png\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/img/favicon.ico"), "html", null, true);
        echo "\" />
            <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/css/responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/css/animate.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />

    
    <link href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/css/jquery.jscrollpane.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    
    </head>
    <body>
        <!--SECTION TOP LOGIN-->
        <section class=\"content-top-login\">
            <div class=\"container\">
                <div class=\"col-md-12\">
                    <div class=\"box-support\"> 
                        <p class=\"support-info\"><i class=\"fa fa-envelope-o\"></i> FTTunisie@FTT.com </p>
                    </div>
                    <div class=\"box-login\"> 
                        <i class=\"fa fa-shopping-cart\"></i>
                    ";
        // line 49
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            echo " 
                       
                                      <a href=\"#\">";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</a>
                    ";
        } else {
            // line 53
            echo "                     <a href=\"";
            echo $this->env->getExtension('routing')->getPath("frontofficefront_login");
            echo "\">Connexion</a>
                        <a href=\"";
            // line 54
            echo $this->env->getExtension('routing')->getPath("frontofficefront_inscription");
            echo "\">Inscription</a>
                    ";
        }
        // line 56
        echo "                  </div>
                    </div>
            </div>
        </section>
        <!--SECTION MENU -->
        <section class=\"container box-logo\">
            <header>
                <div class=\"content-logo col-md-12\">
                    <div class=\"logo\"> 
                        <img src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/images/diversion/l2.png"), "html", null, true);
        echo "\" alt=\"\" />
                    </div>

                    <div class=\"bt-menu\"><a href=\"#\" class=\"menu\"><span>&equiv;</span> Menu</a></div>
                    <div class=\"box-menu\">

                        <nav id=\"cbp-hrmenu\" class=\"cbp-hrmenu\">
                            <ul id=\"menu\">    
                                <li><a class=\"lnk-menu \" href=\"";
        // line 73
        echo $this->env->getExtension('routing')->getPath("frontofficefront_homepage");
        echo "\">Accueil</a></li>
                                <li>
                                    <a class=\"lnk-menu\" href=\"#\">Pages</a>
                                    <div class=\"cbp-hrsub sub-little\">
                                        <div class=\"cbp-hrsub-inner\"> 
                                            <div class=\"content-sub-menu\">
                                                <ul class=\"menu-pages\">
                                                    <li><a href=\"";
        // line 80
        echo $this->env->getExtension('routing')->getPath("frontofficefront_stade");
        echo "\"><span>Stade</span></a></li>
                                                    <li><a href=\"";
        // line 81
        echo $this->env->getExtension('routing')->getPath("frontofficefront_clubs");
        echo "\"><span>Clubs</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li><a class=\"lnk-menu\" href=\"";
        // line 87
        echo $this->env->getExtension('routing')->getPath("frontofficefront_joueur");
        echo "\">Joueurs</a></li>
                                <li><a class=\"lnk-menu\" href=\"";
        // line 88
        echo $this->env->getExtension('routing')->getPath("frontofficefront_evenement");
        echo "\">Evenement</a></li>
                                <li><a class=\"lnk-menu\" href=\"";
        // line 89
        echo $this->env->getExtension('routing')->getPath("frontofficefront_news");
        echo "\">Actualités</a></li>
                                <li><a class=\"lnk-menu\" href=\"";
        // line 90
        echo $this->env->getExtension('routing')->getPath("frontofficefront_articles");
        echo "\">Articles</a></li>
                                
                                <li><a class=\"lnk-menu\" href=\"";
        // line 92
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">Deconnexion</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </header>
        </section>
";
        // line 99
        $this->displayBlock('main', $context, $blocks);
        // line 101
        echo "   
     <!--FOOTER-->   
    <section id=\"footer-tag\">
           <div class=\"container\">
             <div class=\"col-md-12\">
              <div class=\"col-md-3\">
                 <h3>About Us</h3>
                 <p>Thank you for visiting tennisclub.com. Our mission is to 
                 provide unrivalled and unbiased informative and resources to help any sports fan who enjoys a flutter make informed and value led decisions.</p>
                 <p>Our mission is to 
                 provide unrivalled and unbiased informative, resources to help any sports fan who enjoys a flutter make.</p>
              </div>
              <div class=\"col-md-3 cat-footer\">
                <div class=\"footer-map\"></div>
                <h3 class=\"last-cat\">Categories</h3>
                <ul class=\"last-tips\">
                  <li><a href=\"http://www.ilcorsaronero.it/progettienvato/SiteParallax/ParallaxSite/site_tennis/preview/tournaments.html\">Tournaments</a></li>
                  <li><a href=\"http://www.ilcorsaronero.it/progettienvato/SiteParallax/ParallaxSite/site_tennis/preview/results.html\">All Results</a></li>
                  <li><a href=\"http://www.ilcorsaronero.it/progettienvato/SiteParallax/ParallaxSite/site_tennis/preview/matches.html\">Matches London ATP</a></li>
                  <li><a href=\"http://www.ilcorsaronero.it/progettienvato/SiteParallax/ParallaxSite/site_tennis/preview/matches.html\">Double ATP</a></li>
                  <li><a href=\"http://www.ilcorsaronero.it/progettienvato/SiteParallax/ParallaxSite/site_tennis/preview/matches.html\">Double WTP</a></li>
                  <li><a href=\"http://www.ilcorsaronero.it/progettienvato/SiteParallax/ParallaxSite/site_tennis/preview/shops.html\">Shop Best Price</a></li>
                </ul>
              </div>
              <div class=\"col-md-3\">
                 <h3>Last News</h3>
                 <ul class=\"footer-last-news\">
                    <li><img src=\" ";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/images/diversion/1.jpg"), "html", null, true);
        echo "\" alt=\"\"><p>Fusce risus metus, placerat in consectetur eu...</p></li>
                    <li><img src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/images/diversion/2.jpg"), "html", null, true);
        echo " \" alt=\"\"><p>Fusce risus metus, placerat in consectetur eu...</p></li>
                    <li><img src=\" ";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/images/diversion/3.jpg"), "html", null, true);
        echo "\" alt=\"\"><p>Fusce risus metus, placerat in consectetur eu...</p></li>
                 </ul>
              </div>
              <div class=\"col-md-3 footer-newsletters\">
                <h3>Newsletters</h3>
                <form method=\"post\">     
                    <div class=\"name\">
                        <label for=\"name\">* Name:</label><div class=\"clear\"></div>
                        <input id=\"name\" name=\"name\" type=\"text\" placeholder=\"e.g. Mr. John Doe\" required=\"\">
                    </div>
                    <div class=\"email\">
                        <label for=\"email\">* Email:</label><div class=\"clear\"></div>
                        <input id=\"email\" name=\"email\" type=\"text\" placeholder=\"example@domain.com\" required=\"\">
                    </div>
                    <div id=\"loader\">
                                <input type=\"submit\" value=\"Submit\">
                        </div>
                </form>
              </div>
              <div class=\"col-xs-12\">
                <ul class=\"social\">
                      <li><a href=\"https://facebook.com\"><i class=\"fa fa-facebook\"></i></a></li>
                      <li><a href=\"\"><i class=\"fa fa-twitter\"></i></a></li>
                      <li><a href=\"\"><i class=\"fa fa-linkedin\"></i></a></li>
                      <li><a href=\"\"><i class=\"fa fa-digg\"></i></a></li>
                      <li><a href=\"\"><i class=\"fa fa-rss\"></i></a></li>
                      <li><a href=\"\"><i class=\"fa fa-youtube\"></i></a></li>
                      <li><a href=\"\"><i class=\"fa fa-tumblr\"></i></a></li>

                    </ul>
              </div>
             </div>
           </div>
    </section>
    <footer>
      <div class=\"col-md-12 content-footer\">
\t\t<p>� 2014 - 2015 wttennis.com. All rights reserved. </p>
      </div>
\t</footer>
</section>
<script src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/js/jquery-1.10.2.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/js/jquery-migrate-1.2.1.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<!--MENU-->
<script src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/js/menu/modernizr.custom.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/js/menu/cbpHorizontalMenu.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<!--END MENU-->

<!-- Button Anchor Top-->
<script src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/js/jquery.ui.totop.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

<script src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/js/jquery.accordion.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script type=\"text/javascript\">
        \$(document).ready(function () {
            \$(function () {
                \"use strict\";
                \$('.accordion').accordion({ defaultOpen: 'section1' }); //some_id section1 in demo
            });
        });
    </script>

  <script src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/js/custom.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>   


<a href=\"http://www.ilcorsaronero.it/progettienvato/SiteParallax/ParallaxSite/site_tennis/preview/tournaments.html#\" id=\"toTop\" style=\"display: none;\"><span id=\"toTopHover\"></span>To Top</a></body></html>";
    }

    // line 99
    public function block_main($context, array $blocks = array())
    {
        // line 100
        echo "    
";
    }

    public function getTemplateName()
    {
        return "frontofficefrontBundle::MainLayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  338 => 100,  335 => 99,  327 => 190,  314 => 180,  309 => 178,  302 => 174,  298 => 173,  293 => 171,  289 => 170,  246 => 130,  242 => 129,  238 => 128,  209 => 101,  207 => 99,  197 => 92,  192 => 90,  188 => 89,  184 => 88,  180 => 87,  171 => 81,  167 => 80,  157 => 73,  146 => 65,  135 => 56,  130 => 54,  125 => 53,  120 => 51,  115 => 49,  99 => 36,  93 => 33,  89 => 32,  85 => 31,  81 => 30,  77 => 29,  73 => 28,  69 => 27,  64 => 25,  60 => 24,  54 => 21,  50 => 20,  45 => 18,  35 => 11,  31 => 10,  20 => 1,);
    }
}
/* <html xmlns="http://www.w3.org/1999/xhtml">*/
/*     <head>*/
/*         <title>WT TENNIS</title>*/
/*         <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />*/
/* */
/*         <meta name="author" content="Corsini Alessio" />*/
/*         <meta name="keywords" content="Tennis, club, events, football, golf, non-profit, betting assistant, football,fitness, tennis, sport, soccer, goal, sports, volleyball, basketball,	charity, club, cricket, football, hockey, magazine, non profit, rugby, soccer, sport, sports, tennis" />*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1.0"/>*/
/* */
/*         <link href="{{asset('frontoffice/css/bootstrap.css')}}" rel="stylesheet" type="text/css" />*/
/*         <!--<link href="{{asset('frontoffice/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />-->*/
/* */
/*         <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,700,600,300' rel='stylesheet' type='text/css'/>*/
/*         <!--<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700' rel='stylesheet' type='text/css'/>-->*/
/*         <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,300,200,500,600,700,800,900' rel='stylesheet' type='text/css'/>*/
/*         <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>*/
/* */
/*             <link href="{{asset('frontoffice/css/fonts/font-awesome-4.1.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />*/
/*             <!--Clients-->*/
/*             <link href="{{asset('frontoffice/css/own/owl.carousel.css')}}" rel="stylesheet" type="text/css" />*/
/*             <link href="{{asset('frontoffice/css/own/owl.theme.css')}}" rel="stylesheet" type="text/css" />*/
/* */
/* */
/*             <link href="{{asset('frontoffice/css/jquery.bxslider.css')}}" rel="stylesheet" type="text/css" />*/
/*             <link href="{{asset('frontoffice/css/jquery.js')}}crollpane.css')}}" rel="stylesheet" type="text/css" />*/
/* */
/*             <link href="{{asset('frontoffice/css/minislide/flexslider.css')}}" rel="stylesheet" type="text/css" />*/
/*             <link href="{{asset('frontoffice/css/component.css')}}" rel="stylesheet" type="text/css" />*/
/*             <link href="{{asset('frontoffice/css/prettyPhoto.css')}}" rel="stylesheet" type="text/css" />*/
/*             <link href="{{asset('frontoffice/css/style_dir.css')}}" rel="stylesheet" type="text/css" />*/
/*             <link rel="shortcut icon" type="image/png" href="{{asset('frontoffice/img/favicon.ico')}}" />*/
/*             <link href="{{asset('frontoffice/css/responsive.css')}}" rel="stylesheet" type="text/css" />*/
/*             <link href="{{asset('frontoffice/css/animate.css')}}" rel="stylesheet" type="text/css" />*/
/* */
/*     */
/*     <link href="{{ asset('frontoffice/css/jquery.jscrollpane.css') }}" rel="stylesheet" type="text/css" />*/
/*     */
/*     </head>*/
/*     <body>*/
/*         <!--SECTION TOP LOGIN-->*/
/*         <section class="content-top-login">*/
/*             <div class="container">*/
/*                 <div class="col-md-12">*/
/*                     <div class="box-support"> */
/*                         <p class="support-info"><i class="fa fa-envelope-o"></i> FTTunisie@FTT.com </p>*/
/*                     </div>*/
/*                     <div class="box-login"> */
/*                         <i class="fa fa-shopping-cart"></i>*/
/*                     {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %} */
/*                        */
/*                                       <a href="#">{{app.user.username}}</a>*/
/*                     {% else %}*/
/*                      <a href="{{ path('frontofficefront_login') }}">Connexion</a>*/
/*                         <a href="{{ path('frontofficefront_inscription') }}">Inscription</a>*/
/*                     {% endif %}*/
/*                   </div>*/
/*                     </div>*/
/*             </div>*/
/*         </section>*/
/*         <!--SECTION MENU -->*/
/*         <section class="container box-logo">*/
/*             <header>*/
/*                 <div class="content-logo col-md-12">*/
/*                     <div class="logo"> */
/*                         <img src="{{asset('frontoffice/images/diversion/l2.png')}}" alt="" />*/
/*                     </div>*/
/* */
/*                     <div class="bt-menu"><a href="#" class="menu"><span>&equiv;</span> Menu</a></div>*/
/*                     <div class="box-menu">*/
/* */
/*                         <nav id="cbp-hrmenu" class="cbp-hrmenu">*/
/*                             <ul id="menu">    */
/*                                 <li><a class="lnk-menu " href="{{ path('frontofficefront_homepage') }}">Accueil</a></li>*/
/*                                 <li>*/
/*                                     <a class="lnk-menu" href="#">Pages</a>*/
/*                                     <div class="cbp-hrsub sub-little">*/
/*                                         <div class="cbp-hrsub-inner"> */
/*                                             <div class="content-sub-menu">*/
/*                                                 <ul class="menu-pages">*/
/*                                                     <li><a href="{{ path('frontofficefront_stade') }}"><span>Stade</span></a></li>*/
/*                                                     <li><a href="{{ path('frontofficefront_clubs') }}"><span>Clubs</span></a></li>*/
/*                                                 </ul>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </li>*/
/*                                 <li><a class="lnk-menu" href="{{ path('frontofficefront_joueur')}}">Joueurs</a></li>*/
/*                                 <li><a class="lnk-menu" href="{{ path('frontofficefront_evenement') }}">Evenement</a></li>*/
/*                                 <li><a class="lnk-menu" href="{{ path('frontofficefront_news') }}">Actualités</a></li>*/
/*                                 <li><a class="lnk-menu" href="{{ path('frontofficefront_articles')}}">Articles</a></li>*/
/*                                 */
/*                                 <li><a class="lnk-menu" href="{{ path('logout')}}">Deconnexion</a></li>*/
/*                             </ul>*/
/*                         </nav>*/
/*                     </div>*/
/*                 </div>*/
/*             </header>*/
/*         </section>*/
/* {% block main %}*/
/*     */
/* {% endblock %}   */
/*      <!--FOOTER-->   */
/*     <section id="footer-tag">*/
/*            <div class="container">*/
/*              <div class="col-md-12">*/
/*               <div class="col-md-3">*/
/*                  <h3>About Us</h3>*/
/*                  <p>Thank you for visiting tennisclub.com. Our mission is to */
/*                  provide unrivalled and unbiased informative and resources to help any sports fan who enjoys a flutter make informed and value led decisions.</p>*/
/*                  <p>Our mission is to */
/*                  provide unrivalled and unbiased informative, resources to help any sports fan who enjoys a flutter make.</p>*/
/*               </div>*/
/*               <div class="col-md-3 cat-footer">*/
/*                 <div class="footer-map"></div>*/
/*                 <h3 class="last-cat">Categories</h3>*/
/*                 <ul class="last-tips">*/
/*                   <li><a href="http://www.ilcorsaronero.it/progettienvato/SiteParallax/ParallaxSite/site_tennis/preview/tournaments.html">Tournaments</a></li>*/
/*                   <li><a href="http://www.ilcorsaronero.it/progettienvato/SiteParallax/ParallaxSite/site_tennis/preview/results.html">All Results</a></li>*/
/*                   <li><a href="http://www.ilcorsaronero.it/progettienvato/SiteParallax/ParallaxSite/site_tennis/preview/matches.html">Matches London ATP</a></li>*/
/*                   <li><a href="http://www.ilcorsaronero.it/progettienvato/SiteParallax/ParallaxSite/site_tennis/preview/matches.html">Double ATP</a></li>*/
/*                   <li><a href="http://www.ilcorsaronero.it/progettienvato/SiteParallax/ParallaxSite/site_tennis/preview/matches.html">Double WTP</a></li>*/
/*                   <li><a href="http://www.ilcorsaronero.it/progettienvato/SiteParallax/ParallaxSite/site_tennis/preview/shops.html">Shop Best Price</a></li>*/
/*                 </ul>*/
/*               </div>*/
/*               <div class="col-md-3">*/
/*                  <h3>Last News</h3>*/
/*                  <ul class="footer-last-news">*/
/*                     <li><img src=" {{asset('frontoffice/images/diversion/1.jpg')}}" alt=""><p>Fusce risus metus, placerat in consectetur eu...</p></li>*/
/*                     <li><img src="{{asset('frontoffice/images/diversion/2.jpg')}} " alt=""><p>Fusce risus metus, placerat in consectetur eu...</p></li>*/
/*                     <li><img src=" {{asset('frontoffice/images/diversion/3.jpg')}}" alt=""><p>Fusce risus metus, placerat in consectetur eu...</p></li>*/
/*                  </ul>*/
/*               </div>*/
/*               <div class="col-md-3 footer-newsletters">*/
/*                 <h3>Newsletters</h3>*/
/*                 <form method="post">     */
/*                     <div class="name">*/
/*                         <label for="name">* Name:</label><div class="clear"></div>*/
/*                         <input id="name" name="name" type="text" placeholder="e.g. Mr. John Doe" required="">*/
/*                     </div>*/
/*                     <div class="email">*/
/*                         <label for="email">* Email:</label><div class="clear"></div>*/
/*                         <input id="email" name="email" type="text" placeholder="example@domain.com" required="">*/
/*                     </div>*/
/*                     <div id="loader">*/
/*                                 <input type="submit" value="Submit">*/
/*                         </div>*/
/*                 </form>*/
/*               </div>*/
/*               <div class="col-xs-12">*/
/*                 <ul class="social">*/
/*                       <li><a href="https://facebook.com"><i class="fa fa-facebook"></i></a></li>*/
/*                       <li><a href=""><i class="fa fa-twitter"></i></a></li>*/
/*                       <li><a href=""><i class="fa fa-linkedin"></i></a></li>*/
/*                       <li><a href=""><i class="fa fa-digg"></i></a></li>*/
/*                       <li><a href=""><i class="fa fa-rss"></i></a></li>*/
/*                       <li><a href=""><i class="fa fa-youtube"></i></a></li>*/
/*                       <li><a href=""><i class="fa fa-tumblr"></i></a></li>*/
/* */
/*                     </ul>*/
/*               </div>*/
/*              </div>*/
/*            </div>*/
/*     </section>*/
/*     <footer>*/
/*       <div class="col-md-12 content-footer">*/
/* 		<p>� 2014 - 2015 wttennis.com. All rights reserved. </p>*/
/*       </div>*/
/* 	</footer>*/
/* </section>*/
/* <script src="{{asset('frontoffice/js/jquery-1.10.2.js')}}" type="text/javascript"></script>*/
/* <script src="{{asset('frontoffice/js/jquery-migrate-1.2.1.min.js')}}" type="text/javascript"></script>*/
/* <!--MENU-->*/
/* <script src="{{asset('frontoffice/js/menu/modernizr.custom.js')}}" type="text/javascript"></script>*/
/* <script src="{{asset('frontoffice/js/menu/cbpHorizontalMenu.js')}}" type="text/javascript"></script>*/
/* <!--END MENU-->*/
/* */
/* <!-- Button Anchor Top-->*/
/* <script src="{{asset('frontoffice/js/jquery.ui.totop.js')}}" type="text/javascript"></script>*/
/* */
/* <script src="{{asset('frontoffice/js/jquery.accordion.js')}}" type="text/javascript"></script>*/
/*     <script type="text/javascript">*/
/*         $(document).ready(function () {*/
/*             $(function () {*/
/*                 "use strict";*/
/*                 $('.accordion').accordion({ defaultOpen: 'section1' }); //some_id section1 in demo*/
/*             });*/
/*         });*/
/*     </script>*/
/* */
/*   <script src="{{asset('frontoffice/js/custom.js')}}" type="text/javascript"></script>   */
/* */
/* */
/* <a href="http://www.ilcorsaronero.it/progettienvato/SiteParallax/ParallaxSite/site_tennis/preview/tournaments.html#" id="toTop" style="display: none;"><span id="toTopHover"></span>To Top</a></body></html>*/
