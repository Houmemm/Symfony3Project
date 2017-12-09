<?php

/* frontofficefrontBundle:Stade:stadeMap.html.twig */
class __TwigTemplate_af3eb6cdce7d5245b007843bf3a28cc99d2236b56901fa227aff2354cb9b270c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("frontofficefrontBundle::MainLayout.html.twig", "frontofficefrontBundle:Stade:stadeMap.html.twig", 1);
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
        echo "    <section id=\"contact\" class=\"secondary-page\">
      <div class=\"general\">
           <!--Google Maps-->
            <div id=\"map_container\">
\t    ";
        // line 11
        $this->loadTemplate("frontofficefrontBundle:Stade:stadeMaps.html.twig", "frontofficefrontBundle:Stade:stadeMap.html.twig", 11)->display($context);
        // line 12
        echo "            </div>
            
          <div class=\"container\">
           <div class=\"content-link col-md-12\">
                  <div id=\"contact_form\" class=\"top-score-title col-md-9 align-center\">
                    <h3>Stade <span>info</span><span class=\"point-little\">.</span></h3>
                                <form>
                                    
                                    <div class=\"name\">
                                        <label for=\"Nom\"><b><big>  Nom du stade:</big></b></label><div class=\"clear\"></div>
                                        <label for=\"Nom\"> ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "libelleStade", array()), "html", null, true);
        echo "</label><div class=\"clear\"></div>
                                        
                                    </div>
                                    <div class=\"email\">
                                        <label for=\"Emplacement\"><b><big> Emplacement du stade:</big></b></label><div class=\"clear\"></div>
                                        <label for=\"Nom\"> ";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "emplacement", array()), "html", null, true);
        echo "</label><div class=\"clear\"></div>
                                    </div>
                                    <div class=\"message\">
                                        <label for=\"Type\"><b><big> Type de terrain:</big></b></label></br>
                                        <label for=\"Nom\"> ";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "typeTerrains", array()), "html", null, true);
        echo "</label><div class=\"clear\"></div>
                                    </div>
                                    <div class=\"message\">
                                        <label for=\"capacite\"><b><big> Capacite:</big></b></label>
                                        <label for=\"Nom\"> ";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "capacite", array()), "html", null, true);
        echo "</label><div class=\"clear\"></div>
                                        
                                    </div>
                      
                                  </form>
                              </div>
                     <div id=\"info-company\" class=\"top-score-title col-md-3 align-center\">
                        <h3></h3>
                        <img src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "path", array()))), "html", null, true);
        echo "\" />
                        <div class=\"col-md-12\">
                          
                        </div>            
                    </div>
                </div>
                </div>
                </div>
                </section>

";
    }

    // line 59
    public function block_jscript($context, array $blocks = array())
    {
        // line 60
        echo "
";
    }

    public function getTemplateName()
    {
        return "frontofficefrontBundle:Stade:stadeMap.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 60,  109 => 59,  94 => 43,  83 => 35,  76 => 31,  69 => 27,  61 => 22,  49 => 12,  47 => 11,  41 => 7,  38 => 6,  33 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends  'frontofficefrontBundle::MainLayout.html.twig' %}*/
/* */
/* {% block header %}*/
/* */
/* {% endblock %}*/
/* {% block main %}*/
/*     <section id="contact" class="secondary-page">*/
/*       <div class="general">*/
/*            <!--Google Maps-->*/
/*             <div id="map_container">*/
/* 	    {% include 'frontofficefrontBundle:Stade:stadeMaps.html.twig' %}*/
/*             </div>*/
/*             */
/*           <div class="container">*/
/*            <div class="content-link col-md-12">*/
/*                   <div id="contact_form" class="top-score-title col-md-9 align-center">*/
/*                     <h3>Stade <span>info</span><span class="point-little">.</span></h3>*/
/*                                 <form>*/
/*                                     */
/*                                     <div class="name">*/
/*                                         <label for="Nom"><b><big>  Nom du stade:</big></b></label><div class="clear"></div>*/
/*                                         <label for="Nom"> {{ entity.libelleStade }}</label><div class="clear"></div>*/
/*                                         */
/*                                     </div>*/
/*                                     <div class="email">*/
/*                                         <label for="Emplacement"><b><big> Emplacement du stade:</big></b></label><div class="clear"></div>*/
/*                                         <label for="Nom"> {{ entity.emplacement }}</label><div class="clear"></div>*/
/*                                     </div>*/
/*                                     <div class="message">*/
/*                                         <label for="Type"><b><big> Type de terrain:</big></b></label></br>*/
/*                                         <label for="Nom"> {{ entity.typeTerrains }}</label><div class="clear"></div>*/
/*                                     </div>*/
/*                                     <div class="message">*/
/*                                         <label for="capacite"><b><big> Capacite:</big></b></label>*/
/*                                         <label for="Nom"> {{ entity.capacite }}</label><div class="clear"></div>*/
/*                                         */
/*                                     </div>*/
/*                       */
/*                                   </form>*/
/*                               </div>*/
/*                      <div id="info-company" class="top-score-title col-md-3 align-center">*/
/*                         <h3></h3>*/
/*                         <img src="{{ asset('uploads/'~ entity.path) }}" />*/
/*                         <div class="col-md-12">*/
/*                           */
/*                         </div>            */
/*                     </div>*/
/*                 </div>*/
/*                 </div>*/
/*                 </div>*/
/*                 </section>*/
/* */
/* {% endblock %}*/
/* */
/* */
/* */
/* */
/* */
/* {% block jscript %}*/
/* */
/* {% endblock %}*/
/* */
