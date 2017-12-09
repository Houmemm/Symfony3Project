<?php

/* FTTUserBundle:Resetting:request_content.html.twig */
class __TwigTemplate_bf1514fbef341862ec39dc63492de63cb06a22f0018fdaee5e6d19f1c77f6fbe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
";
        // line 3
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        ";
        // line 5
        if (array_key_exists("invalid_username", $context)) {
            // line 6
            echo "            <p>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.invalid_username", array("%username%" => (isset($context["invalid_username"]) ? $context["invalid_username"] : $this->getContext($context, "invalid_username"))), "FOSUserBundle"), "html", null, true);
            echo "</p>
        ";
        }
        // line 8
        echo "        <label for=\"username\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <input    class=\"form-control\"  type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <br>
        <div>
        <input  class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "FTTUserBundle:Resetting:request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 13,  36 => 8,  30 => 6,  28 => 5,  22 => 3,  19 => 1,);
    }
}
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* <form action="{{ path('fos_user_resetting_send_email') }}" method="POST" class="fos_user_resetting_request">*/
/*     <div>*/
/*         {% if invalid_username is defined %}*/
/*             <p>{{ 'resetting.request.invalid_username'|trans({'%username%': invalid_username}) }}</p>*/
/*         {% endif %}*/
/*         <label for="username">{{ 'resetting.request.username'|trans }}</label>*/
/*         <input    class="form-control"  type="text" id="username" name="username" required="required" />*/
/*     </div>*/
/*     <br>*/
/*         <div>*/
/*         <input  class="btn btn-primary" type="submit" value="{{ 'resetting.request.submit'|trans }}" />*/
/*     </div>*/
/* </form>*/
/* */
