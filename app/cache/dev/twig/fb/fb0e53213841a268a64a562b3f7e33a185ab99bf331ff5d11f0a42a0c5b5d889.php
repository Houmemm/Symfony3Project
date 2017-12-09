<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_048cb07dff47e38771661d1aec92c265afe1ca6299a2abf7a9e53c74621becd3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SquadFttBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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

    // line 3
    public function block_first1($context, array $blocks = array())
    {
        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
    }

    // line 6
    public function block_first2($context, array $blocks = array())
    {
    }

    // line 7
    public function block_first3($context, array $blocks = array())
    {
    }

    // line 8
    public function block_first4($context, array $blocks = array())
    {
    }

    // line 9
    public function block_second1($context, array $blocks = array())
    {
    }

    // line 10
    public function block_third1($context, array $blocks = array())
    {
    }

    // line 11
    public function block_third2($context, array $blocks = array())
    {
    }

    // line 12
    public function block_third3($context, array $blocks = array())
    {
    }

    // line 13
    public function block_third4($context, array $blocks = array())
    {
    }

    // line 14
    public function block_fourth1($context, array $blocks = array())
    {
    }

    // line 15
    public function block_fourth2($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  85 => 14,  80 => 13,  75 => 12,  70 => 11,  65 => 10,  60 => 9,  55 => 8,  50 => 7,  45 => 6,  41 => 4,  38 => 3,  11 => 1,);
    }
}
/* {% extends "SquadFttBundle::layout.html.twig" %}*/
/* */
/* {% block first1 %}*/
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock  %}*/
/* {% block first2 %}{% endblock %}*/
/* {% block first3 %}{% endblock %}*/
/* {% block first4 %}{% endblock %}*/
/* {% block second1 %}{% endblock %}*/
/* {% block third1 %}{% endblock %}*/
/* {% block third2 %}{% endblock %}*/
/* {% block third3 %}{% endblock %}*/
/* {% block third4 %}{% endblock %}*/
/* {% block fourth1 %}{% endblock %}*/
/* {% block fourth2 %}{% endblock %}*/
/* */
