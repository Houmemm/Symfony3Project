<?php

/* FTTUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_72de95e792cea0442574db05b23b12236a0f0d0e58b5ed89d77909a234da960c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SquadFttBundle::layout.html.twig", "FTTUserBundle:Registration:confirmed.html.twig", 1);
        $this->blocks = array(
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

    // line 4
    public function block_first1($context, array $blocks = array())
    {
    }

    // line 5
    public function block_first2($context, array $blocks = array())
    {
    }

    // line 6
    public function block_first3($context, array $blocks = array())
    {
    }

    // line 7
    public function block_first4($context, array $blocks = array())
    {
    }

    // line 8
    public function block_second1($context, array $blocks = array())
    {
        // line 9
        echo "    <p  >vous etes connecte en tant que ::  ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo " </p>
    <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("actualite");
        echo "\"> Tester le nouveau utilisateur </a>
    <br>
    <a href=\" ";
        // line 12
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo " \"></svg>Logout</a>
    ";
        // line 13
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 14
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
    }

    // line 18
    public function block_third1($context, array $blocks = array())
    {
    }

    // line 19
    public function block_third2($context, array $blocks = array())
    {
    }

    // line 20
    public function block_third3($context, array $blocks = array())
    {
    }

    // line 21
    public function block_third4($context, array $blocks = array())
    {
    }

    // line 22
    public function block_fourth1($context, array $blocks = array())
    {
    }

    // line 23
    public function block_fourth2($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "FTTUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 23,  107 => 22,  102 => 21,  97 => 20,  92 => 19,  87 => 18,  77 => 14,  75 => 13,  71 => 12,  66 => 10,  61 => 9,  58 => 8,  53 => 7,  48 => 6,  43 => 5,  38 => 4,  11 => 1,);
    }
}
/* {% extends "SquadFttBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block first1 %}{% endblock %}*/
/* {% block first2 %}{% endblock %}*/
/* {% block first3 %}{% endblock %}*/
/* {% block first4 %}{% endblock %}*/
/* {% block second1 %}*/
/*     <p  >vous etes connecte en tant que ::  {{app.user.username}} </p>*/
/*     <a href="{{ path('actualite')}}"> Tester le nouveau utilisateur </a>*/
/*     <br>*/
/*     <a href=" {{ path('fos_user_security_logout') }} "></svg>Logout</a>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock  %}*/
/* */
/* {% block third1 %}{% endblock %}*/
/* {% block third2 %}{% endblock %}*/
/* {% block third3 %}{% endblock %}*/
/* {% block third4 %}{% endblock %}*/
/* {% block fourth1 %}{% endblock %}*/
/* {% block fourth2 %}{% endblock %}*/
