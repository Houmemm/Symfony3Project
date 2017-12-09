<?php

/* FTTUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_3b09636e5da0b99195338bb5df8260bdf72d874fac2901530151b2039f7f1543 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FTTUserBundle::layout.html.twig", "FTTUserBundle:Resetting:checkEmail.html.twig", 1);
        $this->blocks = array(
            'form1' => array($this, 'block_form1'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FTTUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_form1($context, array $blocks = array())
    {
        // line 4
        $this->displayBlock('fos_user_content', $context, $blocks);
    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 5
        echo "<p>
";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
    }

    public function getTemplateName()
    {
        return "FTTUserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 6,  38 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {%extends  'FTTUserBundle::layout.html.twig' %}*/
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block form1%}*/
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock fos_user_content %}*/
/* {% endblock  form1 %}*/
