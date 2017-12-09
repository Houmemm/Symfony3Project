<?php

/* SquadFttBundle:Default:accueil.html.twig */
class __TwigTemplate_f1b2eca7b32afcece40d46d72c437d9500ea002b13cc93cdc3bacfb1f357236c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SquadFttBundle::layout.html.twig", "SquadFttBundle:Default:accueil.html.twig", 1);
        $this->blocks = array(
            'titre' => array($this, 'block_titre'),
            'main' => array($this, 'block_main'),
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
        // line 3
        echo "    Accueil
";
    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        // line 6
        echo "
    <div class=\"general\">
        <div id=\"textslide\" class=\"effect-backcolor\">
            <div class=\"container\">
                <div class=\"col-md-12 slide-txt\">
                    <p style=\"transform: translate(0px, 0px); opacity: 1;\" class=\"sub-result aft-little welcome linetheme-left\">Creative</p>
                    <p style=\"transform: translate(0px, 0px); opacity: 1;\" class=\"sub-result aft-little linetheme-right\">Web Design<span class=\"point-big\">.</span></p>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "SquadFttBundle:Default:accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  37 => 5,  32 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends "SquadFttBundle::layout.html.twig" %}*/
/* {% block titre %}*/
/*     Accueil*/
/* {% endblock%}*/
/* {% block main %}*/
/* */
/*     <div class="general">*/
/*         <div id="textslide" class="effect-backcolor">*/
/*             <div class="container">*/
/*                 <div class="col-md-12 slide-txt">*/
/*                     <p style="transform: translate(0px, 0px); opacity: 1;" class="sub-result aft-little welcome linetheme-left">Creative</p>*/
/*                     <p style="transform: translate(0px, 0px); opacity: 1;" class="sub-result aft-little linetheme-right">Web Design<span class="point-big">.</span></p>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
