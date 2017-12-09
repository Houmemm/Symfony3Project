<?php

/* SquadFttBundle:Default:actualite.html.twig */
class __TwigTemplate_31162ef0c029ce21d9c8400721d34fadf6cdf68974714a22ba10d734fad772f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SquadFttBundle::layout.html.twig", "SquadFttBundle:Default:actualite.html.twig", 1);
        $this->blocks = array(
            'titre' => array($this, 'block_titre'),
            'menu' => array($this, 'block_menu'),
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

    // line 2
    public function block_titre($context, array $blocks = array())
    {
        // line 3
        echo "    Actualites
";
    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        // line 6
        echo "   <ul class=\"nav menu\">
            <li ><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("accueil");
        echo "\"><svg class=\"glyph stroked dashboard-dial\"><use xlink:href=\"#stroked-dashboard-dial\"></use></svg> Statistique</a></li>
            <li class=\"active\" ><a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("actualite");
        echo "\"><svg class=\"glyph stroked landscape\"><use xlink:href=\"#stroked-landscape\"/></svg> Actualites</a></li>
            <li><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("evenement");
        echo "\"><svg class=\"glyph stroked calendar\"><use xlink:href=\"#stroked-calendar\"></use></svg> Evenements</a></li>
            <li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("joueur");
        echo "\"><svg class=\"glyph stroked male user \"><use xlink:href=\"#stroked-male-user\"/></svg> Joueurs</a></li>
            <li><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("match");
        echo "\"><svg class=\"glyph stroked table\"><use xlink:href=\"#stroked-table\"></use></svg> Matchs</a></li>
            <li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("arbitre");
        echo "\"><svg class=\"glyph stroked male user \"><use xlink:href=\"#stroked-male-user\"/></svg> Arbitres</a></li>
            <li><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("stade");
        echo "\"><svg class=\"glyph stroked location pin\"><use xlink:href=\"#stroked-location-pin\"/></svg> Stades</a></li>
            <li><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("club");
        echo "\"><svg class=\"glyph stroked home\"><use xlink:href=\"#stroked-home\"/></svg> Clubs</a></li>
            <li><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("concour");
        echo "\"><svg class=\"glyph stroked star\"><use xlink:href=\"#stroked-star\"></use></svg> Concours</a></li>
            <li><a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("formation");
        echo "\"><svg class=\"glyph stroked line-graph\"><use xlink:href=\"#stroked-line-graph\"></use></svg> Formations</a></li>
            <li><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("gestionDopage");
        echo "\"><svg class=\"glyph stroked eye\"><use xlink:href=\"#stroked-eye\"/></svg> Gestion Dopage</a></li>
         </ul>
";
    }

    // line 22
    public function block_first1($context, array $blocks = array())
    {
        // line 23
        echo "
        <div class=\"col-lg-12\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">Form Elements</div>
                <div class=\"panel-body\">
                    <div class=\"col-md-6\">
                        <form role=\"form\">

                            <div class=\"form-group\">
                                <label>Text Input</label>
                                <input class=\"form-control\" placeholder=\"Placeholder\">
                            </div>

                            <div class=\"form-group\">
                                <label>Password</label>
                                <input type=\"password\" class=\"form-control\">
                            </div>

                            <div class=\"form-group checkbox\">
                                <label>
                                    <input type=\"checkbox\">Remember me</label>
                            </div>

                            <div class=\"form-group\">
                                <label>File input</label>
                                <input type=\"file\">
                                <p class=\"help-block\">Example block-level help text here.</p>
                            </div>

                            <div class=\"form-group\">
                                <label>Text area</label>
                                <textarea class=\"form-control\" rows=\"3\"></textarea>
                            </div>

                            <label>Validation</label>
                            <div class=\"form-group has-success\">
                                <input class=\"form-control\" placeholder=\"Success\">
                            </div>
                            <div class=\"form-group has-warning\">
                                <input class=\"form-control\" placeholder=\"Warning\">
                            </div>
                            <div class=\"form-group has-error\">
                                <input class=\"form-control\" placeholder=\"Error\">
                            </div>

                    </div>
                    <div class=\"col-md-6\">

                        <div class=\"form-group\">
                            <label>Checkboxes</label>
                            <div class=\"checkbox\">
                                <label>
                                    <input type=\"checkbox\" value=\"\">Checkbox 1
                                </label>
                            </div>
                            <div class=\"checkbox\">
                                <label>
                                    <input type=\"checkbox\" value=\"\">Checkbox 2
                                </label>
                            </div>
                            <div class=\"checkbox\">
                                <label>
                                    <input type=\"checkbox\" value=\"\">Checkbox 3
                                </label>
                            </div>
                            <div class=\"checkbox\">
                                <label>
                                    <input type=\"checkbox\" value=\"\">Checkbox 4
                                </label>
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label>Radio Buttons</label>
                            <div class=\"radio\">
                                <label>
                                    <input type=\"radio\" name=\"optionsRadios\" id=\"optionsRadios1\" value=\"option1\" checked>Radio Button 1
                                </label>
                            </div>
                            <div class=\"radio\">
                                <label>
                                    <input type=\"radio\" name=\"optionsRadios\" id=\"optionsRadios2\" value=\"option2\">Radio Button 2
                                </label>
                            </div>
                            <div class=\"radio\">
                                <label>
                                    <input type=\"radio\" name=\"optionsRadios\" id=\"optionsRadios3\" value=\"option3\">Radio Button 3
                                </label>
                            </div>
                            <div class=\"radio\">
                                <label>
                                    <input type=\"radio\" name=\"optionsRadios\" id=\"optionsRadios3\" value=\"option3\">Radio Button 4
                                </label>
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label>Selects</label>
                            <select class=\"form-control\">
                                <option>Option 1</option>
                                <option>Option 2</option>
                                <option>Option 3</option>
                                <option>Option 4</option>
                            </select>
                        </div>

                        <div class=\"form-group\">
                            <label>Multiple Selects</label>
                            <select multiple class=\"form-control\">
                                <option>Option 1</option>
                                <option>Option 2</option>
                                <option>Option 3</option>
                                <option>Option 4</option>
                            </select>
                        </div>

                        <button type=\"submit\" class=\"btn btn-primary\">Submit Button</button>
                        <button type=\"reset\" class=\"btn btn-default\">Reset Button</button>
                    </div>
                    </form>
                </div>
            </div>
        </div><!-- /.col-->
    </div><!-- /.row -->

</div><!--/.main-->
";
    }

    // line 150
    public function block_first2($context, array $blocks = array())
    {
        // line 151
        echo "    
";
    }

    // line 153
    public function block_first3($context, array $blocks = array())
    {
    }

    // line 155
    public function block_first4($context, array $blocks = array())
    {
    }

    // line 157
    public function block_second1($context, array $blocks = array())
    {
        // line 158
        echo "    
";
    }

    // line 160
    public function block_third1($context, array $blocks = array())
    {
    }

    // line 162
    public function block_third2($context, array $blocks = array())
    {
    }

    // line 164
    public function block_third3($context, array $blocks = array())
    {
    }

    // line 166
    public function block_third4($context, array $blocks = array())
    {
    }

    // line 168
    public function block_fourth1($context, array $blocks = array())
    {
    }

    // line 170
    public function block_fourth2($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "SquadFttBundle:Default:actualite.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  285 => 170,  280 => 168,  275 => 166,  270 => 164,  265 => 162,  260 => 160,  255 => 158,  252 => 157,  247 => 155,  242 => 153,  237 => 151,  234 => 150,  104 => 23,  101 => 22,  94 => 17,  90 => 16,  86 => 15,  82 => 14,  78 => 13,  74 => 12,  70 => 11,  66 => 10,  62 => 9,  58 => 8,  54 => 7,  51 => 6,  48 => 5,  43 => 3,  40 => 2,  11 => 1,);
    }
}
/* {% extends "SquadFttBundle::layout.html.twig" %}*/
/* {% block titre %}*/
/*     Actualites*/
/* {% endblock%}*/
/* {% block menu %}*/
/*    <ul class="nav menu">*/
/*             <li ><a href="{{ path('accueil')}}"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Statistique</a></li>*/
/*             <li class="active" ><a href="{{ path('actualite')}}"><svg class="glyph stroked landscape"><use xlink:href="#stroked-landscape"/></svg> Actualites</a></li>*/
/*             <li><a href="{{ path('evenement')}}"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> Evenements</a></li>*/
/*             <li><a href="{{ path('joueur')}}"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg> Joueurs</a></li>*/
/*             <li><a href="{{ path('match')}}"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg> Matchs</a></li>*/
/*             <li><a href="{{ path('arbitre')}}"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg> Arbitres</a></li>*/
/*             <li><a href="{{ path('stade')}}"><svg class="glyph stroked location pin"><use xlink:href="#stroked-location-pin"/></svg> Stades</a></li>*/
/*             <li><a href="{{ path('club')}}"><svg class="glyph stroked home"><use xlink:href="#stroked-home"/></svg> Clubs</a></li>*/
/*             <li><a href="{{ path('concour')}}"><svg class="glyph stroked star"><use xlink:href="#stroked-star"></use></svg> Concours</a></li>*/
/*             <li><a href="{{ path('formation')}}"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg> Formations</a></li>*/
/*             <li><a href="{{ path('gestionDopage')}}"><svg class="glyph stroked eye"><use xlink:href="#stroked-eye"/></svg> Gestion Dopage</a></li>*/
/*          </ul>*/
/* {% endblock %}  */
/* */
/* */
/* {% block first1 %}*/
/* */
/*         <div class="col-lg-12">*/
/*             <div class="panel panel-default">*/
/*                 <div class="panel-heading">Form Elements</div>*/
/*                 <div class="panel-body">*/
/*                     <div class="col-md-6">*/
/*                         <form role="form">*/
/* */
/*                             <div class="form-group">*/
/*                                 <label>Text Input</label>*/
/*                                 <input class="form-control" placeholder="Placeholder">*/
/*                             </div>*/
/* */
/*                             <div class="form-group">*/
/*                                 <label>Password</label>*/
/*                                 <input type="password" class="form-control">*/
/*                             </div>*/
/* */
/*                             <div class="form-group checkbox">*/
/*                                 <label>*/
/*                                     <input type="checkbox">Remember me</label>*/
/*                             </div>*/
/* */
/*                             <div class="form-group">*/
/*                                 <label>File input</label>*/
/*                                 <input type="file">*/
/*                                 <p class="help-block">Example block-level help text here.</p>*/
/*                             </div>*/
/* */
/*                             <div class="form-group">*/
/*                                 <label>Text area</label>*/
/*                                 <textarea class="form-control" rows="3"></textarea>*/
/*                             </div>*/
/* */
/*                             <label>Validation</label>*/
/*                             <div class="form-group has-success">*/
/*                                 <input class="form-control" placeholder="Success">*/
/*                             </div>*/
/*                             <div class="form-group has-warning">*/
/*                                 <input class="form-control" placeholder="Warning">*/
/*                             </div>*/
/*                             <div class="form-group has-error">*/
/*                                 <input class="form-control" placeholder="Error">*/
/*                             </div>*/
/* */
/*                     </div>*/
/*                     <div class="col-md-6">*/
/* */
/*                         <div class="form-group">*/
/*                             <label>Checkboxes</label>*/
/*                             <div class="checkbox">*/
/*                                 <label>*/
/*                                     <input type="checkbox" value="">Checkbox 1*/
/*                                 </label>*/
/*                             </div>*/
/*                             <div class="checkbox">*/
/*                                 <label>*/
/*                                     <input type="checkbox" value="">Checkbox 2*/
/*                                 </label>*/
/*                             </div>*/
/*                             <div class="checkbox">*/
/*                                 <label>*/
/*                                     <input type="checkbox" value="">Checkbox 3*/
/*                                 </label>*/
/*                             </div>*/
/*                             <div class="checkbox">*/
/*                                 <label>*/
/*                                     <input type="checkbox" value="">Checkbox 4*/
/*                                 </label>*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         <div class="form-group">*/
/*                             <label>Radio Buttons</label>*/
/*                             <div class="radio">*/
/*                                 <label>*/
/*                                     <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>Radio Button 1*/
/*                                 </label>*/
/*                             </div>*/
/*                             <div class="radio">*/
/*                                 <label>*/
/*                                     <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">Radio Button 2*/
/*                                 </label>*/
/*                             </div>*/
/*                             <div class="radio">*/
/*                                 <label>*/
/*                                     <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">Radio Button 3*/
/*                                 </label>*/
/*                             </div>*/
/*                             <div class="radio">*/
/*                                 <label>*/
/*                                     <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">Radio Button 4*/
/*                                 </label>*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         <div class="form-group">*/
/*                             <label>Selects</label>*/
/*                             <select class="form-control">*/
/*                                 <option>Option 1</option>*/
/*                                 <option>Option 2</option>*/
/*                                 <option>Option 3</option>*/
/*                                 <option>Option 4</option>*/
/*                             </select>*/
/*                         </div>*/
/* */
/*                         <div class="form-group">*/
/*                             <label>Multiple Selects</label>*/
/*                             <select multiple class="form-control">*/
/*                                 <option>Option 1</option>*/
/*                                 <option>Option 2</option>*/
/*                                 <option>Option 3</option>*/
/*                                 <option>Option 4</option>*/
/*                             </select>*/
/*                         </div>*/
/* */
/*                         <button type="submit" class="btn btn-primary">Submit Button</button>*/
/*                         <button type="reset" class="btn btn-default">Reset Button</button>*/
/*                     </div>*/
/*                     </form>*/
/*                 </div>*/
/*             </div>*/
/*         </div><!-- /.col-->*/
/*     </div><!-- /.row -->*/
/* */
/* </div><!--/.main-->*/
/* {% endblock %}*/
/* {% block first2 %}*/
/*     */
/* {% endblock %}*/
/* {% block first3 %}*/
/* {% endblock %}*/
/* {% block first4 %}*/
/* {% endblock %}*/
/* {% block second1 %}*/
/*     */
/* {% endblock %}*/
/* {% block third1 %}*/
/* {% endblock %}*/
/* {% block third2 %}*/
/* {% endblock %}*/
/* {% block third3 %}*/
/* {% endblock %}*/
/* {% block third4 %}*/
/* {% endblock %}*/
/* {% block fourth1 %}*/
/* {% endblock %}*/
/* {% block fourth2 %}*/
/* {% endblock %}*/
