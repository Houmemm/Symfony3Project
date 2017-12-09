<?php

/* FTTUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_db3c55db6e0d87a69aa3bddf8a52a00b7648ced00daa104833e2a079e7076887 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "

";
        // line 3
        $this->displayBlock('fos_user_content', $context, $blocks);
    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FTTUserBundle:Resetting:reset.html.twig", 4)->display($context);
    }

    public function getTemplateName()
    {
        return "FTTUserBundle:Resetting:reset.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  24 => 3,  20 => 1,);
    }
}
/* */
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
