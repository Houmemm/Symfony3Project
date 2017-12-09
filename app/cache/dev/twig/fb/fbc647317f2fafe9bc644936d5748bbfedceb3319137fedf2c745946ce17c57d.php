<?php

/* frontofficefrontBundle:Default:listeclubs.html.twig */
class __TwigTemplate_fa9d821ea91202b28bfae41d294eeff809041725aeb3d96bde8f468f2bc7c9b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("frontofficefrontBundle::MainLayout.html.twig", "frontofficefrontBundle:Default:listeclubs.html.twig", 1);
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

    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 7
            echo "        <section id=\"news\" class=\"container secondary-page\">
            
            <div class=\"lnk-menu\">

                    <div class=\"col-md-12 news-page \" >

                        <img src=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/" . $this->getAttribute($context["entity"], "imgClub", array()))), "html", null, true);
            echo "\" width=\"270*180\" class=\"img-djoko\" >  </img> 


                        <div class=\"col-md-10 data-news-pg\">
                            <p class=\"news-dd\">";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "libelleClub", array()), "html", null, true);
            echo "</p>
                            <h3>Ce Club se trouve à : ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "emplacementClub", array()), "html", null, true);
            echo "</h3>
                            <h4> Nombre de Terrains : ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nbreTerrains", array()), "html", null, true);
            echo "</h4>
                            <p>
                                ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "descriptionClub", array()), "html", null, true);
            echo "</p>

                            <div class=\"col-md-12 news-more\"><a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("frontofficefront_details_clubs", array("id" => $this->getAttribute($context["entity"], "idClub", array()))), "html", null, true);
            echo "\" class=\"ca-more\"><i class=\"fa fa-angle-double-right\"></i>Afficher la suite...</a></div>
                        </div>
                    </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "
        </div>
    </section>

";
    }

    public function getTemplateName()
    {
        return "frontofficefrontBundle:Default:listeclubs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 27,  72 => 23,  67 => 21,  62 => 19,  58 => 18,  54 => 17,  47 => 13,  39 => 7,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'frontofficefrontBundle::MainLayout.html.twig' %}*/
/* */
/* {% block main %}*/
/* */
/* */
/*     {% for entity in entities%}*/
/*         <section id="news" class="container secondary-page">*/
/*             */
/*             <div class="lnk-menu">*/
/* */
/*                     <div class="col-md-12 news-page " >*/
/* */
/*                         <img src="{{ asset( 'uploads/'~entity.imgClub) }}" width="270*180" class="img-djoko" >  </img> */
/* */
/* */
/*                         <div class="col-md-10 data-news-pg">*/
/*                             <p class="news-dd">{{entity.libelleClub}}</p>*/
/*                             <h3>Ce Club se trouve à : {{entity.emplacementClub}}</h3>*/
/*                             <h4> Nombre de Terrains : {{entity.nbreTerrains}}</h4>*/
/*                             <p>*/
/*                                 {{entity.descriptionClub}}</p>*/
/* */
/*                             <div class="col-md-12 news-more"><a href="{{path('frontofficefront_details_clubs',{'id':entity.idClub})}}" class="ca-more"><i class="fa fa-angle-double-right"></i>Afficher la suite...</a></div>*/
/*                         </div>*/
/*                     </div>*/
/*             {% endfor %}*/
/* */
/*         </div>*/
/*     </section>*/
/* */
/* {% endblock %}*/
