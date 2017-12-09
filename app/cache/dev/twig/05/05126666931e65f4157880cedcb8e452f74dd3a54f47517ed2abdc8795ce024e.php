<?php

/* frontofficefrontBundle:Default:actualites.html.twig */
class __TwigTemplate_2a0414e0be84f43266a927954f7cd1f4ea945874a709108f47c18fec3682cfc1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("frontofficefrontBundle::MainLayout.html.twig", "frontofficefrontBundle:Default:actualites.html.twig", 1);
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
            <div class=\"general general-results players\">
                ";
            // line 9
            if (($this->getAttribute($context["entity"], "etat", array()) == "Publier")) {
                // line 10
                echo "
                    <div class=\"col-md-12 news-page \" >

                        <img src=\"";
                // line 13
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/" . $this->getAttribute($context["entity"], "photo", array()))), "html", null, true);
                echo "\" width=\"270*180\" class=\"img-djoko\" >  </img> 


                        <div class=\"col-md-10 data-news-pg\">
                            <p class=\"news-dd\">";
                // line 17
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateredaction", array()), "d-m-y"), "html", null, true);
                echo "</p>
                            <h3>";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "titre", array()), "html", null, true);
                echo "</h3>
                            <p>
                                ";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "corps", array()), "html", null, true);
                echo "</p>

                            <div class=\"col-md-12 news-more\"><a href=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("frontofficefront_news_show", array("id" => $this->getAttribute($context["entity"], "idactualite", array()))), "html", null, true);
                echo "\" class=\"ca-more\"><i class=\"fa fa-angle-double-right\"></i>Afficher la suite...</a></div>
                        </div>
                    </div>
                ";
            }
            // line 26
            echo "            ";
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
        return "frontofficefrontBundle:Default:actualites.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 27,  78 => 26,  71 => 22,  66 => 20,  61 => 18,  57 => 17,  50 => 13,  45 => 10,  43 => 9,  39 => 7,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'frontofficefrontBundle::MainLayout.html.twig' %}*/
/* */
/* {% block main %}*/
/* */
/* */
/*     {% for entity in entities%}*/
/*         <section id="news" class="container secondary-page">*/
/*             <div class="general general-results players">*/
/*                 {%if entity.etat == 'Publier' %}*/
/* */
/*                     <div class="col-md-12 news-page " >*/
/* */
/*                         <img src="{{ asset( 'uploads/'~entity.photo) }}" width="270*180" class="img-djoko" >  </img> */
/* */
/* */
/*                         <div class="col-md-10 data-news-pg">*/
/*                             <p class="news-dd">{{entity.dateredaction|date('d-m-y')}}</p>*/
/*                             <h3>{{entity.titre}}</h3>*/
/*                             <p>*/
/*                                 {{entity.corps}}</p>*/
/* */
/*                             <div class="col-md-12 news-more"><a href="{{path('frontofficefront_news_show',{'id':entity.idactualite})}}" class="ca-more"><i class="fa fa-angle-double-right"></i>Afficher la suite...</a></div>*/
/*                         </div>*/
/*                     </div>*/
/*                 {% endif %}*/
/*             {% endfor %}*/
/* */
/*         </div>*/
/*     </section>*/
/* */
/* {% endblock %}*/
