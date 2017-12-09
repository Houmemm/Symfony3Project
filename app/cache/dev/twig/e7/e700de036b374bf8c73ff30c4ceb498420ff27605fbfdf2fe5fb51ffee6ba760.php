<?php

/* SquadFttBundle:Default:authentification.html.twig */
class __TwigTemplate_5f6d50b416424f2107f7e5205b105b47917627e9e3ecf69fe0a6396993a02591 extends Twig_Template
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
        echo "<html>
<head>
<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<title>Forms</title>

<link href= \"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/squadftt/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/squadftt/css/datepicker3.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/squadftt/css/styles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

</head>

<body>
\t
\t<div class=\"row\">
\t\t<div class=\"col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4\">
\t\t\t<div class=\"login-panel panel panel-default\">
\t\t\t\t<div class=\"panel-heading\">Log in</div>
\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t<form role=\"form\">
\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<input class=\"form-control\" placeholder=\"E-mail\" name=\"email\" type=\"email\" autofocus=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<input class=\"form-control\" placeholder=\"Password\" name=\"password\" type=\"password\" value=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t<input name=\"remember\" type=\"checkbox\" value=\"Remember Me\">Remember Me
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("app_dev.php/accueil"), "html", null, true);
        echo "\" class=\"btn btn-primary\">Login</a>
\t\t\t\t\t\t</fieldset>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div><!-- /.col-->
\t</div><!-- /.row -->\t
\t
\t\t

        <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/squadftt/js/jquery-1.11.1.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/squadftt/js/bootstrap.min.js"), "html", null, true);
        echo " \"></script>
\t<script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/squadftt/js/chart.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/squadftt/js/chart-data.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/squadftt/js/easypiechart.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/squadftt/js/easypiechart-data.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 49
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

    public function getTemplateName()
    {
        return "SquadFttBundle:Default:authentification.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 49,  95 => 48,  91 => 47,  87 => 46,  83 => 45,  79 => 44,  75 => 43,  62 => 33,  35 => 9,  31 => 8,  27 => 7,  19 => 1,);
    }
}
/* <html>*/
/* <head>*/
/* <meta charset="utf-8">*/
/* <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* <title>Forms</title>*/
/* */
/* <link href= "{{asset('bundles/squadftt/css/bootstrap.min.css')}}" rel="stylesheet">*/
/* <link href="{{asset('bundles/squadftt/css/datepicker3.css')}}" rel="stylesheet">*/
/* <link href="{{asset('bundles/squadftt/css/styles.css')}}" rel="stylesheet">*/
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
/* 					<form role="form">*/
/* 						<fieldset>*/
/* 							<div class="form-group">*/
/* 								<input class="form-control" placeholder="E-mail" name="email" type="email" autofocus="">*/
/* 							</div>*/
/* 							<div class="form-group">*/
/* 								<input class="form-control" placeholder="Password" name="password" type="password" value="">*/
/* 							</div>*/
/* 							<div class="checkbox">*/
/* 								<label>*/
/* 									<input name="remember" type="checkbox" value="Remember Me">Remember Me*/
/* 								</label>*/
/* 							</div>*/
/* 							<a href="{{ asset('app_dev.php/accueil')}}" class="btn btn-primary">Login</a>*/
/* 						</fieldset>*/
/* 					</form>*/
/* 				</div>*/
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
