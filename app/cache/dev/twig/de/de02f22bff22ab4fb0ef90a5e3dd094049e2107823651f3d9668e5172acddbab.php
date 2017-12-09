<?php

/* frontofficefrontBundle:Stade:index3.html.twig */
class __TwigTemplate_761aa43f94499194e5d6c4b9f5a71bfd364bfc64951b44db73681e000513e4c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("frontofficefrontBundle::MainLayout.html.twig", "frontofficefrontBundle:Stade:index3.html.twig", 1);
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
        echo "<link href=\"css/bootstrap.css\" rel=\"stylesheet\" type=\"text/css\" />
    <!--<link href=\"css/bootstrap.min.css\" rel=\"stylesheet\" type=\"text/css\" />-->
    
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,700,600,300' rel='stylesheet' type='text/css'/>
    <!--<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700' rel='stylesheet' type='text/css'/>-->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,300,200,500,600,700,800,900' rel='stylesheet' type='text/css'/>
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>

    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/fonts/font-awesome-4.1.0/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!--Clients-->
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/own/owl.carousel.css\" rel=\"stylesheet\" type=\"text/css"), "html", null, true);
        echo "\" />
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/own/owl.theme.css\" rel=\"stylesheet\" type=\"text/css"), "html", null, true);
        echo "\" />


    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jquery.bxslider.css\" rel=\"stylesheet\" type=\"text/css"), "html", null, true);
        echo "\" />
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jquery.jscrollpane.css\" rel=\"stylesheet\" type=\"text/css"), "html", null, true);
        echo "\" />
    
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/minislide/flexslider.css\" rel=\"stylesheet\" type=\"text/css"), "html", null, true);
        echo "\" />
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/component.css\" rel=\"stylesheet\" type=\"text/css"), "html", null, true);
        echo "\" />
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/prettyPhoto.css\" rel=\"stylesheet\" type=\"text/css"), "html", null, true);
        echo "\" />
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style_dir.css\" rel=\"stylesheet\" type=\"text/css"), "html", null, true);
        echo "\" />
    <link rel=\"shortcut icon\" type=\"image/png\" href=\"img/favicon.ico\" />
    <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/responsive.css\" rel=\"stylesheet\" type=\"text/css"), "html", null, true);
        echo "\" />
    <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/animate.css\" rel=\"stylesheet\" type=\"text/css"), "html", null, true);
        echo "\" />

";
    }

    // line 30
    public function block_main($context, array $blocks = array())
    {
        // line 31
        echo "    

    <div class=\"col-md-4\">
                     <img src=\"http://placehold.it/1024x700\" alt=\"\"/>
                     <div class=\"slide-news-bottom\"><a href=\"#\">Atp Europe Tour</a><a class=\"i-ico\" href=\"#\"><i class=\"fa fa-angle-double-right\"></i></a></div>
               
                <div class=\"col-md-4\">
                     <img src=\"http://placehold.it/1024x700\" alt=\"\"/>
                     <div class=\"slide-news-bottom\"><a href=\"#\">Wtp Tokyo Stadium</a><a class=\"i-ico\" href=\"#\"><i class=\"fa fa-angle-double-right\"></i></a></div>
                </div>
 </div>
    ";
    }

    // line 43
    public function block_jscript($context, array $blocks = array())
    {
        // line 44
        echo "
";
    }

    public function getTemplateName()
    {
        return "frontofficefrontBundle:Stade:index3.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 44,  113 => 43,  98 => 31,  95 => 30,  88 => 27,  84 => 26,  79 => 24,  75 => 23,  71 => 22,  67 => 21,  62 => 19,  58 => 18,  52 => 15,  48 => 14,  43 => 12,  33 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends 'frontofficefrontBundle::MainLayout.html.twig' %}*/
/* */
/* {% block header %}*/
/* <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />*/
/*     <!--<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />-->*/
/*     */
/*     <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,700,600,300' rel='stylesheet' type='text/css'/>*/
/*     <!--<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700' rel='stylesheet' type='text/css'/>-->*/
/*     <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,300,200,500,600,700,800,900' rel='stylesheet' type='text/css'/>*/
/*     <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>*/
/* */
/*     <link href="{{asset('css/fonts/font-awesome-4.1.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />*/
/*     <!--Clients-->*/
/*     <link href="{{asset('css/own/owl.carousel.css" rel="stylesheet" type="text/css')}}" />*/
/*     <link href="{{asset('css/own/owl.theme.css" rel="stylesheet" type="text/css')}}" />*/
/* */
/* */
/*     <link href="{{asset('css/jquery.bxslider.css" rel="stylesheet" type="text/css')}}" />*/
/*     <link href="{{asset('css/jquery.jscrollpane.css" rel="stylesheet" type="text/css')}}" />*/
/*     */
/*     <link href="{{asset('css/minislide/flexslider.css" rel="stylesheet" type="text/css')}}" />*/
/*     <link href="{{asset('css/component.css" rel="stylesheet" type="text/css')}}" />*/
/*     <link href="{{asset('css/prettyPhoto.css" rel="stylesheet" type="text/css')}}" />*/
/*     <link href="{{asset('css/style_dir.css" rel="stylesheet" type="text/css')}}" />*/
/*     <link rel="shortcut icon" type="image/png" href="img/favicon.ico" />*/
/*     <link href="{{asset('css/responsive.css" rel="stylesheet" type="text/css')}}" />*/
/*     <link href="{{asset('css/animate.css" rel="stylesheet" type="text/css')}}" />*/
/* */
/* {% endblock %}*/
/* {% block main %}*/
/*     */
/* */
/*     <div class="col-md-4">*/
/*                      <img src="http://placehold.it/1024x700" alt=""/>*/
/*                      <div class="slide-news-bottom"><a href="#">Atp Europe Tour</a><a class="i-ico" href="#"><i class="fa fa-angle-double-right"></i></a></div>*/
/*                */
/*                 <div class="col-md-4">*/
/*                      <img src="http://placehold.it/1024x700" alt=""/>*/
/*                      <div class="slide-news-bottom"><a href="#">Wtp Tokyo Stadium</a><a class="i-ico" href="#"><i class="fa fa-angle-double-right"></i></a></div>*/
/*                 </div>*/
/*  </div>*/
/*     {% endblock %}*/
/* {% block jscript %}*/
/* */
/* {% endblock %}*/
/* */
