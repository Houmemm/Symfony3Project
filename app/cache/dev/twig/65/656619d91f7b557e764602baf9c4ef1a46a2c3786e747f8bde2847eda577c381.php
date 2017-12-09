<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_041b3853c3cf3a0b7b69242c82900fbd7fd48345d3b5f4e7f814cc95491b79f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form1' => array($this, 'block_form1'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "<html>
<head>
<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<title>Forms</title>

<link href= \"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/squadftt/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/squadftt/css/datepicker3.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/squadftt/css/styles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<!--[if lt IE 9]>
<script src=\"js/html5shiv.js\"></script>
<script src=\"js/respond.min.js\"></script>
<![endif]-->

</head>

<body>
\t
\t<div class=\"row\">
\t\t<div class=\"col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4\">
\t\t\t<div class=\"login-panel panel panel-default\">
\t\t\t\t<div class=\"panel-heading\">Log in</div>
\t\t\t\t<div class=\"panel-body\">
 ";
        // line 25
        $this->displayBlock('form1', $context, $blocks);
        // line 42
        echo "\t
 </div>
\t\t\t</div>
\t\t</div><!-- /.col-->
\t</div><!-- /.row -->\t
\t
\t\t

        <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/squadftt/js/jquery-1.11.1.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/squadftt/js/bootstrap.min.js"), "html", null, true);
        echo " \"></script>
\t<script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/squadftt/js/chart.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/squadftt/js/chart-data.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/squadftt/js/easypiechart.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/squadftt/js/easypiechart-data.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/squadftt/js/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
\t<script>
\t\t!function (\$) {
\t\t\t\$(document).on(\"click\",\"ul.nav li.parent > a > span.icon\", function(){\t\t  
\t\t\t\t\$(this).find('em:first').toggleClass(\"glyphicon-minus\");\t  
\t\t\t}); 
\t\t\t\$(\".sidebar span.icon\").find('em:first').addClass(\"glyphicon-plus\");
\t\t}(window.jQuery);

\t\t\$(window).on('resize', function () {
\t\t  if (\$(window).width() > 768) \$('#sidebar-collapse').collapse('show')
\t\t})
\t\t\$(window).on('resize', function () {
\t\t  if (\$(window).width() <= 767) \$('#sidebar-collapse').collapse('hide')
\t\t})
\t</script>\t
</body>

</html>

";
    }

    // line 25
    public function block_form1($context, array $blocks = array())
    {
        // line 26
        echo "     <form role=\"form\">
\t<fieldset>
\t<div class=\"form-group\">
\t<input class=\"form-control\" placeholder=\"E-mail\" name=\"email\" type=\"email\" autofocus=\"\">
\t</div>
\t<div class=\"form-group\">
\t<input class=\"form-control\" placeholder=\"Password\" name=\"password\" type=\"password\" value=\"\">
\t</div>
\t<div class=\"checkbox\">
\t<label>
\t<input name=\"remember\" type=\"checkbox\" value=\"Remember Me\">Remember Me
\t</label>
\t</div>
\t<a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\" class=\"btn btn-primary\">Login</a>
\t</fieldset>
\t\t\t\t\t</form>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 39,  118 => 26,  115 => 25,  90 => 56,  86 => 55,  82 => 54,  78 => 53,  74 => 52,  70 => 51,  66 => 50,  56 => 42,  54 => 25,  36 => 10,  32 => 9,  28 => 8,  20 => 2,);
    }
}
/* {# empty Twig template #}*/
/* <html>*/
/* <head>*/
/* <meta charset="utf-8">*/
/* <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* <title>Forms</title>*/
/* */
/* <link href= "{{asset('bundles/squadftt/css/bootstrap.min.css')}}" rel="stylesheet">*/
/* <link href="{{asset('bundles/squadftt/css/datepicker3.css')}}" rel="stylesheet">*/
/* <link href="{{asset('bundles/squadftt/css/styles.css')}}" rel="stylesheet">*/
/* <!--[if lt IE 9]>*/
/* <script src="js/html5shiv.js"></script>*/
/* <script src="js/respond.min.js"></script>*/
/* <![endif]-->*/
/* */
/* </head>*/
/* */
/* <body>*/
/* 	*/
/* 	<div class="row">*/
/* 		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">*/
/* 			<div class="login-panel panel panel-default">*/
/* 				<div class="panel-heading">Log in</div>*/
/* 				<div class="panel-body">*/
/*  {% block form1 %}*/
/*      <form role="form">*/
/* 	<fieldset>*/
/* 	<div class="form-group">*/
/* 	<input class="form-control" placeholder="E-mail" name="email" type="email" autofocus="">*/
/* 	</div>*/
/* 	<div class="form-group">*/
/* 	<input class="form-control" placeholder="Password" name="password" type="password" value="">*/
/* 	</div>*/
/* 	<div class="checkbox">*/
/* 	<label>*/
/* 	<input name="remember" type="checkbox" value="Remember Me">Remember Me*/
/* 	</label>*/
/* 	</div>*/
/* 	<a href="{{ path('fos_user_security_login')}}" class="btn btn-primary">Login</a>*/
/* 	</fieldset>*/
/* 					</form>*/
/* {% endblock %}	*/
/*  </div>*/
/* 			</div>*/
/* 		</div><!-- /.col-->*/
/* 	</div><!-- /.row -->	*/
/* 	*/
/* 		*/
/* */
/*         <script src="{{asset('bundles/squadftt/js/jquery-1.11.1.min.js')}}"></script>*/
/* 	<script src="{{asset('bundles/squadftt/js/bootstrap.min.js')}} "></script>*/
/* 	<script src="{{asset('bundles/squadftt/js/chart.min.js')}}"></script>*/
/* 	<script src="{{asset('bundles/squadftt/js/chart-data.js')}}"></script>*/
/* 	<script src="{{asset('bundles/squadftt/js/easypiechart.js')}}"></script>*/
/* 	<script src="{{asset('bundles/squadftt/js/easypiechart-data.js')}}"></script>*/
/* 	<script src="{{asset('bundles/squadftt/js/bootstrap-datepicker.js')}}"></script>*/
/* 	<script>*/
/* 		!function ($) {*/
/* 			$(document).on("click","ul.nav li.parent > a > span.icon", function(){		  */
/* 				$(this).find('em:first').toggleClass("glyphicon-minus");	  */
/* 			}); */
/* 			$(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");*/
/* 		}(window.jQuery);*/
/* */
/* 		$(window).on('resize', function () {*/
/* 		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')*/
/* 		})*/
/* 		$(window).on('resize', function () {*/
/* 		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')*/
/* 		})*/
/* 	</script>	*/
/* </body>*/
/* */
/* </html>*/
/* */
/* */
