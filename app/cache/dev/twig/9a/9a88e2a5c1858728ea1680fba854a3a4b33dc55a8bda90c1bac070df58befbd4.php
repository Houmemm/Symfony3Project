<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_9a59951e687eecb2c223fec065dcfafc7016c40dbcdafc2873ace350e82d06e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FTTUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'form1' => array($this, 'block_form1'),
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
        echo "    ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 5
            echo "        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "</div>
    ";
        }
        // line 7
        echo "

    <form action=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\">
        <fieldset>
            <div class=\"form-group\">
                <input class=\"form-control\" placeholder=\"UserName\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" autofocus=\"\">
            </div>
            <div class=\"form-group\">
                <input class=\"form-control\" placeholder=\"Password\" type=\"password\" id=\"password\" name=\"_password\" value=\"\">
            </div>
            <div class=\"checkbox\">
                <label>
                    <input name=\"remember\" type=\"checkbox\" value=\"Remember Me\">Remember Me
                </label>
            </div>
            <div class=\"form-groupe\">
                    <a href=";
        // line 23
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
        echo " > Forgotten pass</a>
                        </div>
            <br>

                        <input  class=\"btn btn-primary\" type=\"submit\" value=\"Login\" >
        </fieldset>
    </form>

";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 23,  50 => 12,  44 => 9,  40 => 7,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "FTTUserBundle::layout.html.twig" %}*/
/* */
/* {% block form1 %}*/
/*     {% if error %}*/
/*         <div class="alert alert-danger">{{ error.message }}</div>*/
/*     {% endif %}*/
/* */
/* */
/*     <form action="{{ path('login_check') }}" method="post">*/
/*         <fieldset>*/
/*             <div class="form-group">*/
/*                 <input class="form-control" placeholder="UserName" type="text" id="username" name="_username" value="{{ last_username }}" autofocus="">*/
/*             </div>*/
/*             <div class="form-group">*/
/*                 <input class="form-control" placeholder="Password" type="password" id="password" name="_password" value="">*/
/*             </div>*/
/*             <div class="checkbox">*/
/*                 <label>*/
/*                     <input name="remember" type="checkbox" value="Remember Me">Remember Me*/
/*                 </label>*/
/*             </div>*/
/*             <div class="form-groupe">*/
/*                     <a href={{ path('fos_user_resetting_request') }} > Forgotten pass</a>*/
/*                         </div>*/
/*             <br>*/
/* */
/*                         <input  class="btn btn-primary" type="submit" value="Login" >*/
/*         </fieldset>*/
/*     </form>*/
/* */
/* {% endblock %}*/
