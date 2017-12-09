<?php

/* frontofficefrontBundle:Default:afficherClubs.html.twig */
class __TwigTemplate_4a5e27fc1a33be82bbc4e96aa8a71577ba99a0ef379dee2f8bf5d70bc377d7ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("frontofficefrontBundle::MainLayout.html.twig", "frontofficefrontBundle:Default:afficherClubs.html.twig", 1);
        $this->blocks = array(
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

    // line 3
    public function block_main($context, array $blocks = array())
    {
        // line 4
        echo "
    <section class=\"drawer\">
        <div class=\"col-md-12 size-img back-laoula\" style=\"
             background:transparent url(";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "imgClub", array()))), "html", null, true);
        echo ") no-repeat bottom center;\">
            <div class=\"effect-cover\">
                <h1 class=\"txt-advert animated fadeInUp\">";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "libelleClub", array()), "html", null, true);
        echo "</h1>
                <h3>Ce Club se trouve à : ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "emplacementClub", array()), "html", null, true);
        echo "</h3>
                <h4> Nombre de Terrains : ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nbreTerrains", array()), "html", null, true);
        echo "</h4>
                <p>
                    ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "descriptionClub", array()), "html", null, true);
        echo "</p>
            </div>
        </div>

        <section id=\"single_news\" class=\"container secondary-page\">
            <div class=\"general general-results\">
                <div class=\"top-score-title col-md-9\">
                    <h3>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "libelleClub", array()), "html", null, true);
        echo "<span class=\"point-little\">.</span></h3>


                </div><!--Close Top Match-->
        </section>
    </section>


";
    }

    public function getTemplateName()
    {
        return "frontofficefrontBundle:Default:afficherClubs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 20,  54 => 13,  49 => 11,  45 => 10,  41 => 9,  36 => 7,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "frontofficefrontBundle::MainLayout.html.twig" %}*/
/* */
/* {% block main %}*/
/* */
/*     <section class="drawer">*/
/*         <div class="col-md-12 size-img back-laoula" style="*/
/*              background:transparent url({{ asset( 'uploads/'~entity.imgClub) }}) no-repeat bottom center;">*/
/*             <div class="effect-cover">*/
/*                 <h1 class="txt-advert animated fadeInUp">{{entity.libelleClub}}</h1>*/
/*                 <h3>Ce Club se trouve à : {{entity.emplacementClub}}</h3>*/
/*                 <h4> Nombre de Terrains : {{entity.nbreTerrains}}</h4>*/
/*                 <p>*/
/*                     {{entity.descriptionClub}}</p>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <section id="single_news" class="container secondary-page">*/
/*             <div class="general general-results">*/
/*                 <div class="top-score-title col-md-9">*/
/*                     <h3>{{entity.libelleClub}}<span class="point-little">.</span></h3>*/
/* */
/* */
/*                 </div><!--Close Top Match-->*/
/*         </section>*/
/*     </section>*/
/* */
/* */
/* {% endblock %}*/
