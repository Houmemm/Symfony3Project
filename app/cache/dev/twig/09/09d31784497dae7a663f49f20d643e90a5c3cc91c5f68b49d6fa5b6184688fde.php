<?php

/* frontofficefrontBundle:MatchTennis:Matchtennis.html.twig */
class __TwigTemplate_c5228ec6fed90d933e35381f662f41ac7ccb314665a0ea229fb90588b57cc49c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("frontofficefrontBundle::MainLayout.html.twig", "frontofficefrontBundle:MatchTennis:Matchtennis.html.twig", 1);
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

    // line 5
    public function block_main($context, array $blocks = array())
    {
        // line 6
        echo "
    <section id=\"allmatch\" class=\"container secondary-page\">
        <div class=\"general general-results\">
            <div class=\"top-score-title right-score col-md-9\">
                <h3>MATCHES</h3>
                <div class=\"tab-content\">
                    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 13
            echo "                        ";
            if ($this->getAttribute($context["entity"], "joueurs", array())) {
                // line 14
                echo "                            <div id=\"tab1111\" class=\"tab active\">
                                <table class=\"match-tbs\">
                                    <tr>
                                        <td class=\"match-tbs-title\" colspan=\"7\"> ";
                // line 17
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateMatch", array()), "d/m/y"), "html", null, true);
                echo " - ";
                if ($this->getAttribute($context["entity"], "stadeStade", array())) {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "stadeStade", array()), "libelleStade", array()), "html", null, true);
                    echo " ";
                }
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["entity"], "tourTour", array()), "evenementEvenement", array()), "libelleEvenement", array()), "html", null, true);
                echo "</td>
                                    </tr>
                                    ";
                // line 19
                if ($this->getAttribute($context["entity"], "sets", array())) {
                    // line 20
                    echo "                                        <tr class=\"match-sets\">
                                            <td class=\"fpt\">Sets</td>
                                            <td class=\"fpt\">1</td>
                                            ";
                    // line 23
                    if ((twig_length_filter($this->env, $this->getAttribute($context["entity"], "sets", array())) > 1)) {
                        echo "<td class=\"fpt\">2</td>";
                    }
                    // line 24
                    echo "                                            ";
                    if ((twig_length_filter($this->env, $this->getAttribute($context["entity"], "sets", array())) > 2)) {
                        echo "<td class=\"fpt\">3</td>";
                    }
                    // line 25
                    echo "                                            ";
                    if ((twig_length_filter($this->env, $this->getAttribute($context["entity"], "sets", array())) > 3)) {
                        echo "<td class=\"fpt\">4</td>";
                    }
                    // line 26
                    echo "                                            ";
                    if ((twig_length_filter($this->env, $this->getAttribute($context["entity"], "sets", array())) > 4)) {
                        echo "<td>5</td>";
                    }
                    // line 27
                    echo "
                                        </tr>
                                    ";
                }
                // line 30
                echo "                                    <tr>
                                        <td class=\"fpt\">";
                // line 31
                if ($this->getAttribute($context["entity"], "joueurs", array())) {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["entity"], "joueurs", array()), 0, array(), "array"), "nom", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["entity"], "joueurs", array()), 0, array(), "array"), "prenom", array()), "html", null, true);
                }
                echo "</td>
                                        ";
                // line 32
                if ((twig_length_filter($this->env, $this->getAttribute($context["entity"], "sets", array())) > 0)) {
                    echo "<td class=\"fpt\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["entity"], "sets", array()), 0, array(), "array"), "scorej1", array()), "html", null, true);
                    echo "</td> ";
                }
                // line 33
                echo "                                        ";
                if ((twig_length_filter($this->env, $this->getAttribute($context["entity"], "sets", array())) > 1)) {
                    echo "<td class=\"fpt\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["entity"], "sets", array()), 1, array(), "array"), "scorej1", array()), "html", null, true);
                    echo "</td> ";
                }
                // line 34
                echo "                                        ";
                if ((twig_length_filter($this->env, $this->getAttribute($context["entity"], "sets", array())) > 2)) {
                    echo "<td class=\"fpt\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["entity"], "sets", array()), 2, array(), "array"), "scorej1", array()), "html", null, true);
                    echo "</td> ";
                }
                // line 35
                echo "                                        ";
                if ((twig_length_filter($this->env, $this->getAttribute($context["entity"], "sets", array())) > 3)) {
                    echo "<td class=\"fpt\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["entity"], "sets", array()), 3, array(), "array"), "scorej1", array()), "html", null, true);
                    echo "</td> ";
                }
                // line 36
                echo "                                        ";
                if ((twig_length_filter($this->env, $this->getAttribute($context["entity"], "sets", array())) > 4)) {
                    echo "<td>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["entity"], "sets", array()), 4, array(), "array"), "scorej1", array()), "html", null, true);
                    echo "</td> ";
                }
                // line 37
                echo "                                    </tr>
                                    <tr>
                                        <td class=\"fpt\">";
                // line 39
                if ($this->getAttribute($context["entity"], "joueurs", array())) {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["entity"], "joueurs", array()), 1, array(), "array"), "nom", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["entity"], "joueurs", array()), 1, array(), "array"), "prenom", array()), "html", null, true);
                }
                echo "</td>
                                        ";
                // line 40
                if ((twig_length_filter($this->env, $this->getAttribute($context["entity"], "sets", array())) > 0)) {
                    echo "<td class=\"fpt\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["entity"], "sets", array()), 0, array(), "array"), "scorej2", array()), "html", null, true);
                    echo " </td>";
                }
                // line 41
                echo "                                        ";
                if ((twig_length_filter($this->env, $this->getAttribute($context["entity"], "sets", array())) > 1)) {
                    echo "<td class=\"fpt\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["entity"], "sets", array()), 1, array(), "array"), "scorej2", array()), "html", null, true);
                    echo " </td>";
                }
                // line 42
                echo "                                        ";
                if ((twig_length_filter($this->env, $this->getAttribute($context["entity"], "sets", array())) > 2)) {
                    echo "<td class=\"fpt\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["entity"], "sets", array()), 2, array(), "array"), "scorej2", array()), "html", null, true);
                    echo " </td>";
                }
                // line 43
                echo "                                        ";
                if ((twig_length_filter($this->env, $this->getAttribute($context["entity"], "sets", array())) > 3)) {
                    echo "<td class=\"fpt\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["entity"], "sets", array()), 3, array(), "array"), "scorej2", array()), "html", null, true);
                    echo " </td>";
                }
                // line 44
                echo "                                        ";
                if ((twig_length_filter($this->env, $this->getAttribute($context["entity"], "sets", array())) > 4)) {
                    echo "<td>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["entity"], "sets", array()), 4, array(), "array"), "scorej2", array()), "html", null, true);
                    echo " </td>";
                }
                // line 45
                echo "                                    </tr>
                                    <tr>
                                        <td class=\"match-more\" colspan=\"7\"><a href=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("front_matchtennis_show", array("id" => $this->getAttribute($context["entity"], "idMatch", array()))), "html", null, true);
                echo "\" class=\"ca-more\"><i class=\"fa fa-angle-double-right\"></i>more</a></td>
                                    </tr>
                                </table>
                            </div>
                        ";
            }
            // line 52
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "                </div>
                <div class=\"navigation\">
                    ";
        // line 55
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        echo "
                </div>
            </div>
        </div>
    </section>

";
    }

    public function getTemplateName()
    {
        return "frontofficefrontBundle:MatchTennis:Matchtennis.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 55,  204 => 53,  198 => 52,  190 => 47,  186 => 45,  179 => 44,  172 => 43,  165 => 42,  158 => 41,  152 => 40,  144 => 39,  140 => 37,  133 => 36,  126 => 35,  119 => 34,  112 => 33,  106 => 32,  98 => 31,  95 => 30,  90 => 27,  85 => 26,  80 => 25,  75 => 24,  71 => 23,  66 => 20,  64 => 19,  51 => 17,  46 => 14,  43 => 13,  39 => 12,  31 => 6,  28 => 5,  11 => 1,);
    }
}
/* {% extends "frontofficefrontBundle::MainLayout.html.twig" %}*/
/* */
/* */
/* */
/* {% block main %}*/
/* */
/*     <section id="allmatch" class="container secondary-page">*/
/*         <div class="general general-results">*/
/*             <div class="top-score-title right-score col-md-9">*/
/*                 <h3>MATCHES</h3>*/
/*                 <div class="tab-content">*/
/*                     {% for entity in entities %}*/
/*                         {% if entity.joueurs %}*/
/*                             <div id="tab1111" class="tab active">*/
/*                                 <table class="match-tbs">*/
/*                                     <tr>*/
/*                                         <td class="match-tbs-title" colspan="7"> {{ entity.dateMatch|date('d/m/y') }} - {% if entity.stadeStade %} {{entity.stadeStade.libelleStade}} {% endif %} - {{entity.tourTour.evenementEvenement.libelleEvenement}}</td>*/
/*                                     </tr>*/
/*                                     {% if entity.sets %}*/
/*                                         <tr class="match-sets">*/
/*                                             <td class="fpt">Sets</td>*/
/*                                             <td class="fpt">1</td>*/
/*                                             {% if entity.sets|length>1%}<td class="fpt">2</td>{% endif %}*/
/*                                             {% if entity.sets|length>2%}<td class="fpt">3</td>{% endif %}*/
/*                                             {% if entity.sets|length>3%}<td class="fpt">4</td>{% endif %}*/
/*                                             {% if entity.sets|length>4%}<td>5</td>{% endif %}*/
/* */
/*                                         </tr>*/
/*                                     {% endif %}*/
/*                                     <tr>*/
/*                                         <td class="fpt">{% if entity.joueurs %}{{ entity.joueurs[0].nom}} {{ entity.joueurs[0].prenom}}{% endif %}</td>*/
/*                                         {% if entity.sets|length>0 %}<td class="fpt">{{ entity.sets[0].scorej1}}</td> {% endif %}*/
/*                                         {% if entity.sets|length>1 %}<td class="fpt">{{ entity.sets[1].scorej1}}</td> {% endif %}*/
/*                                         {% if entity.sets|length>2 %}<td class="fpt">{{ entity.sets[2].scorej1}}</td> {% endif %}*/
/*                                         {% if entity.sets|length>3 %}<td class="fpt">{{ entity.sets[3].scorej1}}</td> {% endif %}*/
/*                                         {% if entity.sets|length>4 %}<td>{{ entity.sets[4].scorej1}}</td> {% endif %}*/
/*                                     </tr>*/
/*                                     <tr>*/
/*                                         <td class="fpt">{% if entity.joueurs %}{{ entity.joueurs[1].nom}} {{ entity.joueurs[1].prenom}}{% endif %}</td>*/
/*                                         {% if entity.sets|length>0 %}<td class="fpt">{{ entity.sets[0].scorej2}} </td>{% endif %}*/
/*                                         {% if entity.sets|length>1 %}<td class="fpt">{{ entity.sets[1].scorej2}} </td>{% endif %}*/
/*                                         {% if entity.sets|length>2 %}<td class="fpt">{{ entity.sets[2].scorej2}} </td>{% endif %}*/
/*                                         {% if entity.sets|length>3 %}<td class="fpt">{{ entity.sets[3].scorej2}} </td>{% endif %}*/
/*                                         {% if entity.sets|length>4 %}<td>{{ entity.sets[4].scorej2}} </td>{% endif %}*/
/*                                     </tr>*/
/*                                     <tr>*/
/*                                         <td class="match-more" colspan="7"><a href="{{ path('front_matchtennis_show', { 'id': entity.idMatch }) }}" class="ca-more"><i class="fa fa-angle-double-right"></i>more</a></td>*/
/*                                     </tr>*/
/*                                 </table>*/
/*                             </div>*/
/*                         {% endif %}*/
/*                     {% endfor %}*/
/*                 </div>*/
/*                 <div class="navigation">*/
/*                     {{ knp_pagination_render(entities) }}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </section>*/
/* */
/* {% endblock %}*/
/* */
