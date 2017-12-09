<?php

/* FTTUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_b5751962ed18f9315ad8fa389c93130a45e78ce231577d1ec2748ba16b1a3b1c extends Twig_Template
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
        // line 2
        echo "
<div class=\"col-lg-12\">
<div class=\"panel panel-default\">
<div class=\"panel-heading\"> Ajouter un utilisateur </div>
<div class=\"col-lg-6\">
<div class=\"panel-body\">

    
";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('routing')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "

";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateDeNaissance", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tel", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nationaliter", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "grade_arbitre", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type_arbitre", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "roles", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "


<br>
    <div>
        <input  class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
<div>
 
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "FTTUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 29,  82 => 24,  78 => 23,  74 => 22,  70 => 21,  66 => 20,  62 => 19,  58 => 18,  54 => 17,  50 => 16,  46 => 15,  42 => 14,  38 => 13,  34 => 12,  29 => 10,  19 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="col-lg-12">*/
/* <div class="panel panel-default">*/
/* <div class="panel-heading"> Ajouter un utilisateur </div>*/
/* <div class="col-lg-6">*/
/* <div class="panel-body">*/
/* */
/*     */
/* {{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}*/
/* */
/* {{ form_row(form.email, { 'attr': {'class': 'form-control'} }   ) }}*/
/* {{ form_row(form.username , { 'attr': {'class': 'form-control'} }   ) }}*/
/* {{ form_row(form.plainPassword.first, { 'attr': {'class': 'form-control'} }  ) }}*/
/* {{ form_row(form.plainPassword.second, { 'attr': {'class': 'form-control'} }  ) }}*/
/* {{ form_row(form.nom, { 'attr': {'class': 'form-control'} }  ) }}*/
/* {{ form_row(form.prenom, { 'attr': {'class': 'form-control'} }  ) }}*/
/* {{ form_row(form.dateDeNaissance, { 'attr': {'class': 'form-control'} }  ) }}*/
/* {{ form_row(form.tel, { 'attr': {'class': 'form-control'} }  ) }}*/
/* {{ form_row(form.nationaliter, { 'attr': {'class': 'form-control'} }  ) }}*/
/* {{ form_row(form.grade_arbitre, { 'attr': {'class': 'form-control'} }  ) }}*/
/* {{ form_row(form.type_arbitre, { 'attr': {'class': 'form-control'} }  ) }}*/
/* {{ form_row(form.roles, { 'attr': {'class': 'form-control'} }  ) }}*/
/* {{  form_rest(form) }}*/
/* */
/* */
/* <br>*/
/*     <div>*/
/*         <input  class="btn btn-primary" type="submit" value="{{ 'registration.submit'|trans }}" />*/
/*     </div>*/
/* <div>*/
/*  */
/* </div>*/
/* </div>*/
