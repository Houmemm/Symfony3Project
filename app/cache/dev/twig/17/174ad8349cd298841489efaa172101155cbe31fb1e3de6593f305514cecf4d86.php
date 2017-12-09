<?php

/* frontofficefrontBundle:security:inscription.html.twig */
class __TwigTemplate_66c9a8122f4b148db78553f2fef727bc8eb82a97965335798a547e5173718a9d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("frontofficefrontBundle::MainLayout.html.twig", "frontofficefrontBundle:security:inscription.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "frontofficefrontBundle::MainLayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_main($context, array $blocks = array())
    {
        // line 3
        echo "

</section>
<section class=\"drawer\">
    <div class=\"col-md-12 size-img back-img\">
        <div class=\"effect-cover\">
            <h3 class=\"txt-advert animated\">ATP World Tour Fan Credential</h3>
            <p class=\"txt-advert-sub animated\">Your all-access pass to experience the action on tour</p>
        </div>
    </div>

    <section id=\"login\" class=\"container secondary-page\">  
 
        
           
        
        
        
        <!-- REGISTER BOX -->
           <div class=\"top-score-title right-score col-md-12\">
            <h3>Register <span>Now</span><span class=\"point-int\"> !</span></h3>
                <div class=\"col-md-12 login-page\">
                    <form method=\"post\" class=\"register-form\">         
                       
                        <div class=\"email\">
                            <label for=\"username\">* username:</label><div class=\"clear\"></div>
                            <input id=\"username\" name=\"username\" placeholder=\"username\" required=\"\" type=\"text\">
                        </div>
                        <div class=\"email\">
                            <label for=\"email\">* Email:</label><div class=\"clear\"></div>
                            <input id=\"email\" name=\"email\" placeholder=\"example@domain.com\" required=\"\" type=\"text\">
                        </div>
                        <div class=\"email\">
                            <label for=\"email\">* Confirm Email:</label><div class=\"clear\"></div>
                            <input id=\"confirm\" name=\"email\" placeholder=\"example@domain.com\" required=\"\" type=\"text\">
                        </div>
                        <div class=\"name\">
                            <label for=\"name\">* First Name:</label><div class=\"clear\"></div>
                            <input id=\"name\" name=\"name\" placeholder=\"e.g. Mr. John\" required=\"\" type=\"text\">
                        </div>
                        <div class=\"name\">
                            <label for=\"lastname\">* Last Name:</label><div class=\"clear\"></div>
                            <input id=\"lastname\" name=\"name\" placeholder=\"e.g. Mr. Doe\" required=\"\" type=\"text\">
                        </div>
                        <div class=\"name\">
                            <label for=\"password\">* Password:</label><div class=\"clear\"></div>
                            <input id=\"password\" name=\"password\" placeholder=\"********\" required=\"\" type=\"password\">
                        </div>
                        <div class=\"confirm_password\">
                            <label for=\"confirm_password\">* Confirm_Password:</label><div class=\"clear\"></div>
                            <input id=\"confirm_password\" name=\"confirm_password\" placeholder=\"********\" required=\"\" type=\"password\">
                        </div>
                        <div id=\"register-submit\">
                            <input value=\"Submit\" type=\"submit\">
                        </div>
                      </form>
                        <div class=\"ctn-img\">
                            <img src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/images/federer.png"), "html", null, true);
        echo "\">
                       </div><!--Close Images-->
                       <div class=\"clear\"></div>
                </div>
                
           </div><!--Close REgistration-->
           </section>
    <section id=\"sponsor\" class=\"container\">
        <!--SECTION SPONSOR-->
        <div class=\"client-sport client-sport-nomargin\">
            <div class=\"content-banner\">
                <ul class=\"sponsor second\">
                    <li><img src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/images/sponsors/1.jpg"), "html", null, true);
        echo "\" alt=\"\" /></li>
                    <li><img src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/images/sponsors/2.jpg"), "html", null, true);
        echo "\" alt=\"\" /></li>
                    <li><img src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/images/sponsors/3.jpg"), "html", null, true);
        echo "\" alt=\"\" /></li>
                    <li><img src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/images/sponsors/4.jpg"), "html", null, true);
        echo "\" alt=\"\" /></li>
                    <li><img src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/images/sponsors/5.jpg"), "html", null, true);
        echo "\" alt=\"\" /></li>
                    <li><img src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/images/sponsors/6.jpg"), "html", null, true);
        echo "\" alt=\"\" /></li>
                </ul>
            </div>
        </div>
    </section>
";
    }

    public function getTemplateName()
    {
        return "frontofficefrontBundle:security:inscription.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 77,  121 => 76,  117 => 75,  113 => 74,  109 => 73,  105 => 72,  90 => 60,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "frontofficefrontBundle::MainLayout.html.twig" %}*/
/* {% block main %}*/
/* */
/* */
/* </section>*/
/* <section class="drawer">*/
/*     <div class="col-md-12 size-img back-img">*/
/*         <div class="effect-cover">*/
/*             <h3 class="txt-advert animated">ATP World Tour Fan Credential</h3>*/
/*             <p class="txt-advert-sub animated">Your all-access pass to experience the action on tour</p>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <section id="login" class="container secondary-page">  */
/*  */
/*         */
/*            */
/*         */
/*         */
/*         */
/*         <!-- REGISTER BOX -->*/
/*            <div class="top-score-title right-score col-md-12">*/
/*             <h3>Register <span>Now</span><span class="point-int"> !</span></h3>*/
/*                 <div class="col-md-12 login-page">*/
/*                     <form method="post" class="register-form">         */
/*                        */
/*                         <div class="email">*/
/*                             <label for="username">* username:</label><div class="clear"></div>*/
/*                             <input id="username" name="username" placeholder="username" required="" type="text">*/
/*                         </div>*/
/*                         <div class="email">*/
/*                             <label for="email">* Email:</label><div class="clear"></div>*/
/*                             <input id="email" name="email" placeholder="example@domain.com" required="" type="text">*/
/*                         </div>*/
/*                         <div class="email">*/
/*                             <label for="email">* Confirm Email:</label><div class="clear"></div>*/
/*                             <input id="confirm" name="email" placeholder="example@domain.com" required="" type="text">*/
/*                         </div>*/
/*                         <div class="name">*/
/*                             <label for="name">* First Name:</label><div class="clear"></div>*/
/*                             <input id="name" name="name" placeholder="e.g. Mr. John" required="" type="text">*/
/*                         </div>*/
/*                         <div class="name">*/
/*                             <label for="lastname">* Last Name:</label><div class="clear"></div>*/
/*                             <input id="lastname" name="name" placeholder="e.g. Mr. Doe" required="" type="text">*/
/*                         </div>*/
/*                         <div class="name">*/
/*                             <label for="password">* Password:</label><div class="clear"></div>*/
/*                             <input id="password" name="password" placeholder="********" required="" type="password">*/
/*                         </div>*/
/*                         <div class="confirm_password">*/
/*                             <label for="confirm_password">* Confirm_Password:</label><div class="clear"></div>*/
/*                             <input id="confirm_password" name="confirm_password" placeholder="********" required="" type="password">*/
/*                         </div>*/
/*                         <div id="register-submit">*/
/*                             <input value="Submit" type="submit">*/
/*                         </div>*/
/*                       </form>*/
/*                         <div class="ctn-img">*/
/*                             <img src="{{ asset('frontoffice/images/federer.png') }}">*/
/*                        </div><!--Close Images-->*/
/*                        <div class="clear"></div>*/
/*                 </div>*/
/*                 */
/*            </div><!--Close REgistration-->*/
/*            </section>*/
/*     <section id="sponsor" class="container">*/
/*         <!--SECTION SPONSOR-->*/
/*         <div class="client-sport client-sport-nomargin">*/
/*             <div class="content-banner">*/
/*                 <ul class="sponsor second">*/
/*                     <li><img src="{{ asset('frontoffice/images/sponsors/1.jpg') }}" alt="" /></li>*/
/*                     <li><img src="{{ asset('frontoffice/images/sponsors/2.jpg') }}" alt="" /></li>*/
/*                     <li><img src="{{ asset('frontoffice/images/sponsors/3.jpg') }}" alt="" /></li>*/
/*                     <li><img src="{{ asset('frontoffice/images/sponsors/4.jpg') }}" alt="" /></li>*/
/*                     <li><img src="{{ asset('frontoffice/images/sponsors/5.jpg') }}" alt="" /></li>*/
/*                     <li><img src="{{ asset('frontoffice/images/sponsors/6.jpg') }}" alt="" /></li>*/
/*                 </ul>*/
/*             </div>*/
/*         </div>*/
/*     </section>*/
/* {% endblock %}*/
