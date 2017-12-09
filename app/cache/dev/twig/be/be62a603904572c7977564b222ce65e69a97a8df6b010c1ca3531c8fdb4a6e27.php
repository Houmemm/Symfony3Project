<?php

/* frontofficefrontBundle:Stade:stadeMaps.html.twig */
class __TwigTemplate_8ec557cf7b2eac3d7e2fa87b40d667cae119279016d9bccf152946a8c977fbe1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("frontofficefrontBundle::map.html.twig", "frontofficefrontBundle:Stade:stadeMaps.html.twig", 1);
        $this->blocks = array(
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "frontofficefrontBundle::map.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_container($context, array $blocks = array())
    {
        // line 3
        echo "    <input id=\"emp\" type=\"hidden\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["emp"]) ? $context["emp"] : $this->getContext($context, "emp")), "html", null, true);
        echo "\"/>
    <div id=\"googleMap\" style=\"width:1340px;height:400px;\"></div>
";
    }

    public function getTemplateName()
    {
        return "frontofficefrontBundle:Stade:stadeMaps.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'frontofficefrontBundle::map.html.twig' %}*/
/* {% block container %}*/
/*     <input id="emp" type="hidden" value="{{ emp }}"/>*/
/*     <div id="googleMap" style="width:1340px;height:400px;"></div>*/
/* {% endblock %}*/
