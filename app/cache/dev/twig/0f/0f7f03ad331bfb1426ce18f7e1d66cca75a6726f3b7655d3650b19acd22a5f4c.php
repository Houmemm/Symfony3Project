<?php

/* SquadFttBundle:Rapport:rapportPdf.html.twig */
class __TwigTemplate_727ce5b8a03a5b22e6ce63e3c94938587ac7d58ff4238a73f63962b8c7396256 extends Twig_Template
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
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
<title>Medical Clinic</title>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"./temp/style.css\" media=\"screen\" />
<!--[if IE 6]>
<link rel=\"stylesheet\" type=\"text/css\" href=\"iecss.css\" />
<![endif]-->
</head>
<body>
<div id=\"main_container\">
  <div class=\"header\">
    <div id=\"logo\"><a href=\"http://all-free-download.com/free-website-templates/\"><img src=\"images/logo.png\" alt=\"\" width=\"162\" height=\"54\" border=\"0\" /></a>
        
   </div> 
      Agence National Antidopage
    
  </div>
    <br> <br>
  <div id=\"middle_box\">
      <div class=\"middle_box_content\"><h2><span class=\"dark_blue\">Adresse: </span><br></h2>
     Bardo, 13 Rue de Mednine </div>
      <div class=\"middle_box_content\"><h2><span class=\"dark_blue\">Telephone: </span><br></h2>
          +216 71234678 <br>
          +216 71234451
      </div>
  </div>
  <div class=\"pattern_bg\">
    <div class=\"pattern_box\">
      <div class=\"title_icon\"></div>
      <h2><span class=\"dark_blue\">Rapport reference:</span> ";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rapport"]) ? $context["rapport"] : $this->getContext($context, "rapport")), "idRapport", array()), "html", null, true);
        echo "</h2><br> <br><br>
        
    </div>
      <div class=\"pattern_box\">
      
          <h2><span class=\"dark_blue\">Sujet du rapport:<br></span> </h2>
          Apres les testes et les analyses necessaire sur le Joueur ";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["rapport"]) ? $context["rapport"] : $this->getContext($context, "rapport")), "joueurCinJoueur", array()), "prenom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["rapport"]) ? $context["rapport"] : $this->getContext($context, "rapport")), "joueurCinJoueur", array()), "nom", array()), "html", null, true);
        echo " portant le numero de CIN <b>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["rapport"]) ? $context["rapport"] : $this->getContext($context, "rapport")), "joueurCinJoueur", array()), "cinJoueur", array()), "html", null, true);
        echo "</b>,<br> le resultat est ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rapport"]) ? $context["rapport"] : $this->getContext($context, "rapport")), "resultatTest", array()), "html", null, true);
        echo ".<br><br>
          ";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rapport"]) ? $context["rapport"] : $this->getContext($context, "rapport")), "commentaire", array()), "html", null, true);
        echo "   
        
    </div>
    
  </div><br> <br> <br> <br> <br> <br> <br>
  <div id=\"main_content\">
    <div class=\"box_content\">
      <div class=\"box_title\">
        
        <h2><span class=\"dark_blue\">";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["rapport"]) ? $context["rapport"] : $this->getContext($context, "rapport")), "userUser", array()), "prenom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["rapport"]) ? $context["rapport"] : $this->getContext($context, "rapport")), "userUser", array()), "nom", array()), "html", null, true);
        echo "</span></h2>
        <img src=\"images/sign.jpg\" alt=\"\" width=\"162\" height=\"100\" border=\"0\" />
        
      </div>
      
      
    </div>
    
    
  </div>
  
</div>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "SquadFttBundle:Rapport:rapportPdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 48,  71 => 39,  61 => 38,  52 => 32,  19 => 1,);
    }
}
/* <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">*/
/* <html xmlns="http://www.w3.org/1999/xhtml">*/
/* <head>*/
/* <title>Medical Clinic</title>*/
/* <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />*/
/* <link rel="stylesheet" type="text/css" href="./temp/style.css" media="screen" />*/
/* <!--[if IE 6]>*/
/* <link rel="stylesheet" type="text/css" href="iecss.css" />*/
/* <![endif]-->*/
/* </head>*/
/* <body>*/
/* <div id="main_container">*/
/*   <div class="header">*/
/*     <div id="logo"><a href="http://all-free-download.com/free-website-templates/"><img src="images/logo.png" alt="" width="162" height="54" border="0" /></a>*/
/*         */
/*    </div> */
/*       Agence National Antidopage*/
/*     */
/*   </div>*/
/*     <br> <br>*/
/*   <div id="middle_box">*/
/*       <div class="middle_box_content"><h2><span class="dark_blue">Adresse: </span><br></h2>*/
/*      Bardo, 13 Rue de Mednine </div>*/
/*       <div class="middle_box_content"><h2><span class="dark_blue">Telephone: </span><br></h2>*/
/*           +216 71234678 <br>*/
/*           +216 71234451*/
/*       </div>*/
/*   </div>*/
/*   <div class="pattern_bg">*/
/*     <div class="pattern_box">*/
/*       <div class="title_icon"></div>*/
/*       <h2><span class="dark_blue">Rapport reference:</span> {{ rapport.idRapport }}</h2><br> <br><br>*/
/*         */
/*     </div>*/
/*       <div class="pattern_box">*/
/*       */
/*           <h2><span class="dark_blue">Sujet du rapport:<br></span> </h2>*/
/*           Apres les testes et les analyses necessaire sur le Joueur {{ rapport.joueurCinJoueur.prenom }} {{ rapport.joueurCinJoueur.nom }} portant le numero de CIN <b>{{ rapport.joueurCinJoueur.cinJoueur }}</b>,<br> le resultat est {{ rapport.resultatTest }}.<br><br>*/
/*           {{ rapport.commentaire }}   */
/*         */
/*     </div>*/
/*     */
/*   </div><br> <br> <br> <br> <br> <br> <br>*/
/*   <div id="main_content">*/
/*     <div class="box_content">*/
/*       <div class="box_title">*/
/*         */
/*         <h2><span class="dark_blue">{{ rapport.userUser.prenom }} {{ rapport.userUser.nom }}</span></h2>*/
/*         <img src="images/sign.jpg" alt="" width="162" height="100" border="0" />*/
/*         */
/*       </div>*/
/*       */
/*       */
/*     </div>*/
/*     */
/*     */
/*   </div>*/
/*   */
/* </div>*/
/* </body>*/
/* </html>*/
/* */
