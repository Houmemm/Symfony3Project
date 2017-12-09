<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_2261b84dc7ba1b24cfd887403a12a96d7ba1296d40e66f94aec24a75899c6d6c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SquadFttBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
        $this->blocks = array(
            'titre' => array($this, 'block_titre'),
            'first1' => array($this, 'block_first1'),
            'first2' => array($this, 'block_first2'),
            'first3' => array($this, 'block_first3'),
            'first4' => array($this, 'block_first4'),
            'second1' => array($this, 'block_second1'),
            'third1' => array($this, 'block_third1'),
            'third2' => array($this, 'block_third2'),
            'third3' => array($this, 'block_third3'),
            'third4' => array($this, 'block_third4'),
            'fourth1' => array($this, 'block_fourth1'),
            'fourth2' => array($this, 'block_fourth2'),
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
        echo "
 ";
    }

    // line 5
    public function block_first1($context, array $blocks = array())
    {
        // line 6
        echo "     <div class=\"col-lg-12\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">profile :   ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo "   ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenom", array()), "html", null, true);
        echo " </div>
            <div class=\"col-lg-6\">
                <div class=\"panel-body\">  
                    <p>né le : ";
        // line 11
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "dateDeNaissance", array()), "Y-m-d"), "html", null, true);
        echo "   </p>
                    <p>  ";
        // line 12
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "roles", array()), 0, array(), "array") == "ROLE_ARBITRE")) {
            // line 13
            echo "            travail :   Arbitre 
         ";
        } elseif (($this->getAttribute($this->getAttribute($this->getAttribute(        // line 14
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "roles", array()), 0, array(), "array") == "ROLE_RESPONSABLE")) {
            // line 15
            echo "          travail :   Responsable
         ";
        } elseif (($this->getAttribute($this->getAttribute($this->getAttribute(        // line 16
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "roles", array()), 0, array(), "array") == "ROLE_MEDECIN")) {
            // line 17
            echo "          travail :   Medecin
          ";
        } elseif (($this->getAttribute($this->getAttribute($this->getAttribute(        // line 18
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "roles", array()), 0, array(), "array") == "ROLE_ADMIN")) {
            // line 19
            echo "          travail :   Administrateur
         ";
        } else {
            // line 21
            echo "             Fan
         ";
        }
        // line 22
        echo "    </p>
                    <p></p>
";
        // line 24
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 24)->display($context);
    }

    // line 27
    public function block_first2($context, array $blocks = array())
    {
    }

    // line 28
    public function block_first3($context, array $blocks = array())
    {
    }

    // line 29
    public function block_first4($context, array $blocks = array())
    {
    }

    // line 30
    public function block_second1($context, array $blocks = array())
    {
    }

    // line 33
    public function block_third1($context, array $blocks = array())
    {
    }

    // line 34
    public function block_third2($context, array $blocks = array())
    {
    }

    // line 35
    public function block_third3($context, array $blocks = array())
    {
    }

    // line 36
    public function block_third4($context, array $blocks = array())
    {
    }

    // line 37
    public function block_fourth1($context, array $blocks = array())
    {
    }

    // line 38
    public function block_fourth2($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 38,  139 => 37,  134 => 36,  129 => 35,  124 => 34,  119 => 33,  114 => 30,  109 => 29,  104 => 28,  99 => 27,  95 => 24,  91 => 22,  87 => 21,  83 => 19,  81 => 18,  78 => 17,  76 => 16,  73 => 15,  71 => 14,  68 => 13,  66 => 12,  62 => 11,  54 => 8,  50 => 6,  47 => 5,  42 => 3,  39 => 2,  11 => 1,);
    }
}
/* {% extends "SquadFttBundle::layout.html.twig" %}*/
/* {% block titre %}*/
/* */
/*  {% endblock %}*/
/* {% block first1 %}*/
/*      <div class="col-lg-12">*/
/*         <div class="panel panel-default">*/
/*             <div class="panel-heading">profile :   {{app.user.nom }}   {{app.user.prenom }} </div>*/
/*             <div class="col-lg-6">*/
/*                 <div class="panel-body">  */
/*                     <p>né le : {{app.user.dateDeNaissance|date('Y-m-d')}}   </p>*/
/*                     <p>  {% if app.user.roles[0]=="ROLE_ARBITRE"   %}*/
/*             travail :   Arbitre */
/*          {% elseif app.user.roles[0]=="ROLE_RESPONSABLE" %}*/
/*           travail :   Responsable*/
/*          {% elseif app.user.roles[0]=="ROLE_MEDECIN" %}*/
/*           travail :   Medecin*/
/*           {% elseif app.user.roles[0]=="ROLE_ADMIN" %}*/
/*           travail :   Administrateur*/
/*          {% else %}*/
/*              Fan*/
/*          {%endif%}    </p>*/
/*                     <p></p>*/
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock %}*/
/* */
/* {% block first2 %}{% endblock %}*/
/* {% block first3 %}{% endblock %}*/
/* {% block first4 %}{% endblock %}*/
/* {% block second1 %}*/
/* {% endblock  %}*/
/* */
/* {% block third1 %}{% endblock %}*/
/* {% block third2 %}{% endblock %}*/
/* {% block third3 %}{% endblock %}*/
/* {% block third4 %}{% endblock %}*/
/* {% block fourth1 %}{% endblock %}*/
/* {% block fourth2 %}{% endblock %}*/
