<?php

/* FTTUserBundle:Resetting:request.html.twig */
class __TwigTemplate_8f4da2afb1b98c81b4080b9f4793c4bc95c29237c92d9fb8946066865fa46fd7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FTTUserBundle:Resetting:request.html.twig", 1);
        $this->blocks = array(
            'form1' => array($this, 'block_form1'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_form1($context, array $blocks = array())
    {
        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FTTUserBundle:Resetting:request.html.twig", 4)->display($context);
    }

    public function getTemplateName()
    {
        return "FTTUserBundle:Resetting:request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block form1 %}*/
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock  %}*/
/* */
