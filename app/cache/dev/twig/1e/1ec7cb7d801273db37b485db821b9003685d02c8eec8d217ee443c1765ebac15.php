<?php

/* frontofficefrontBundle:Default:ShowActualite.html.twig */
class __TwigTemplate_9f55242b5c28254d404c423d0a74755b5a40c15de80c9b9fe226a2f839e964b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("frontofficefrontBundle::MainLayout.html.twig", "frontofficefrontBundle:Default:ShowActualite.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "photo", array()))), "html", null, true);
        echo ") no-repeat bottom center;\">
            <div class=\"effect-cover\">
                <h3 class=\"txt-advert animated fadeInUp\">";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titre", array()), "html", null, true);
        echo "</h3>
                <p class=\"txt-advert-sub\">En Ligne le ";
        // line 10
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateredaction", array()), "d-m-y"), "html", null, true);
        echo "</p>
            </div>
        </div>

        <section id=\"single_news\" class=\"container secondary-page\">
            <div class=\"general general-results\">
                <div class=\"top-score-title col-md-9\">
                    <h3>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titre", array()), "html", null, true);
        echo "<span class=\"point-little\">.</span></h3>
                    <p class=\"desc_news\">";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "corps", array()), "html", null, true);
        echo "<p>

                </div><!--Close Top Match-->
        </section>
    </section>


";
    }

    public function getTemplateName()
    {
        return "frontofficefrontBundle:Default:ShowActualite.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 18,  55 => 17,  45 => 10,  41 => 9,  36 => 7,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "frontofficefrontBundle::MainLayout.html.twig" %}*/
/* */
/* {% block main %}*/
/* */
/*     <section class="drawer">*/
/*         <div class="col-md-12 size-img back-laoula" style="*/
/*              background:transparent url({{ asset( 'uploads/'~entity.photo) }}) no-repeat bottom center;">*/
/*             <div class="effect-cover">*/
/*                 <h3 class="txt-advert animated fadeInUp">{{entity.titre}}</h3>*/
/*                 <p class="txt-advert-sub">En Ligne le {{entity.dateredaction|date('d-m-y')}}</p>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <section id="single_news" class="container secondary-page">*/
/*             <div class="general general-results">*/
/*                 <div class="top-score-title col-md-9">*/
/*                     <h3>{{entity.titre}}<span class="point-little">.</span></h3>*/
/*                     <p class="desc_news">{{entity.corps}}<p>*/
/* */
/*                 </div><!--Close Top Match-->*/
/*         </section>*/
/*     </section>*/
/* */
/* */
/* {% endblock %}*/
