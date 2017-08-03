<?php

/* user/profile.html.twig */
class __TwigTemplate_15234f2e87390b365c1db8ff596b5568794c7092c269f9fb6444c6e7524f4753 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/profile.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fb7efc47650088679b24a1004d971779100c0745db00066ccf5e1e55fdde4463 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb7efc47650088679b24a1004d971779100c0745db00066ccf5e1e55fdde4463->enter($__internal_fb7efc47650088679b24a1004d971779100c0745db00066ccf5e1e55fdde4463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/profile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb7efc47650088679b24a1004d971779100c0745db00066ccf5e1e55fdde4463->leave($__internal_fb7efc47650088679b24a1004d971779100c0745db00066ccf5e1e55fdde4463_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2f14c81e41dfa806c8376403058c2db63f372d8905ae33ee0f9f819e9da3081e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f14c81e41dfa806c8376403058c2db63f372d8905ae33ee0f9f819e9da3081e->enter($__internal_2f14c81e41dfa806c8376403058c2db63f372d8905ae33ee0f9f819e9da3081e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    ";
        // line 5
        $this->displayBlock('javascripts', $context, $blocks);
        // line 57
        echo "
    <h2>Hello ";
        // line 58
        echo twig_escape_filter($this->env, (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email")), "html", null, true);
        echo "</h2>
    ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["compartments"]) ? $context["compartments"] : $this->getContext($context, "compartments")));
        foreach ($context['_seq'] as $context["_key"] => $context["compartment"]) {
            // line 60
            echo "        <div style=\"background-color: #0088CC\">
            <h4 id=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["compartment"], "compartmentId", array()), "html", null, true);
            echo "compartmentId\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["compartment"], "compartmentId", array()), "html", null, true);
            echo "</h4>
            <h4 id=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["compartment"], "compartmentId", array()), "html", null, true);
            echo "item\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["compartment"], "item", array()), "html", null, true);
            echo "</h4>
            <h5 id=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["compartment"], "compartmentId", array()), "html", null, true);
            echo "edate\"> ";
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($this->getAttribute($context["compartment"], "expireDate", array()), "date", array()), 0, 10), "html", null, true);
            echo "</h5>
            <h5 id=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["compartment"], "compartmentId", array()), "html", null, true);
            echo "sdate\"> ";
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($this->getAttribute($context["compartment"], "storeDate", array()), "date", array()), 0, 10), "html", null, true);
            echo "</h5>
            <h5 id=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["compartment"], "compartmentId", array()), "html", null, true);
            echo "temp\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["compartment"], "temp", array()), "html", null, true);
            echo "</h5>
            <h5 id=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($context["compartment"], "compartmentId", array()), "html", null, true);
            echo "humid\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["compartment"], "humid", array()), "html", null, true);
            echo "</h5>
            <h5 id=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["compartment"], "compartmentId", array()), "html", null, true);
            echo "foodStatus\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["compartment"], "food_status", array()), "html", null, true);
            echo "</h5>
            <h5 id=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["compartment"], "compartmentId", array()), "html", null, true);
            echo "timestamp\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["compartment"], "time_stamp", array()), "html", null, true);
            echo "</h5>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['compartment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "
";
        
        $__internal_2f14c81e41dfa806c8376403058c2db63f372d8905ae33ee0f9f819e9da3081e->leave($__internal_2f14c81e41dfa806c8376403058c2db63f372d8905ae33ee0f9f819e9da3081e_prof);

    }

    // line 5
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f8bbaf5c3320b98b203568bf1405f759e44ebac08847d8fa2bc29b342842fc52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8bbaf5c3320b98b203568bf1405f759e44ebac08847d8fa2bc29b342842fc52->enter($__internal_f8bbaf5c3320b98b203568bf1405f759e44ebac08847d8fa2bc29b342842fc52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 6
        echo "        <script>
            \$(document).ready(function () {
                console.log('ready');
                ajaxReq(\"ESp-01\");
                var compartments = ";
        // line 10
        echo twig_jsonencode_filter((isset($context["compartments"]) ? $context["compartments"] : $this->getContext($context, "compartments")));
        echo ";
                jQuery.each(compartments, function (i, compartment) {
                    console.log(compartment.compartment_id);
                    setInterval(function () {
                        ajaxReq(compartment.compartment_id);
                    }, 2000);
                });


                function ajaxReq(compartmentId) {
//                    \$.get(\"http://localhost/ss12dashboard/web/app_dev.php/api2\",
//                            {
//                                'compartmentId': compartmentId
//                            },
//                            function (data) {
//                                console.log(data[0]);
//                                \$(\"#\" + compartmentId + \"temp\").html(\"temp: \" + data[0].temp);
//                                \$(\"#\" + compartmentId + \"humid\").html(\"humid: \" + data[0].humid);
//                                \$(\"#\" + compartmentId + \"foodStatus\").html(\"foodStatus: \" + data[0].food_status);
//                                \$(\"#\" + compartmentId + \"timestamp\").html(\"Time: \" + data[0].time_stamp);
//                            });
                    \$.ajax({
                        type: \"GET\",
                        headers: {
                            'Accept': 'application/json',
                            'Content-Type': 'text/plain'
                        },
                        dataType: \"json\",
                        url: \"http://45.55.91.141/ss12dashboard/web/app_dev.php/api2\",
                        data: {'compartmentId': compartmentId},
                        success: function (data) {
                            console.log(data[0]);
                            \$(\"#\" + compartmentId + \"temp\").html(\"temp: \" + data[0].temp);
                            \$(\"#\" + compartmentId + \"humid\").html(\"humid: \" + data[0].humid);
                            \$(\"#\" + compartmentId + \"foodStatus\").html(\"foodStatus: \" + data[0].food_status);
                            \$(\"#\" + compartmentId + \"timestamp\").html(\"Time: \" + data[0].time_stamp);
                        },
                        error: function (xhr, ajaxOptions, thrownError) {
                            console.log(xhr.status);
                            console.log(thrownError);
                        }
                    });
                }

            });
        </script>
    ";
        
        $__internal_f8bbaf5c3320b98b203568bf1405f759e44ebac08847d8fa2bc29b342842fc52->leave($__internal_f8bbaf5c3320b98b203568bf1405f759e44ebac08847d8fa2bc29b342842fc52_prof);

    }

    public function getTemplateName()
    {
        return "user/profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 10,  127 => 6,  121 => 5,  113 => 71,  102 => 68,  96 => 67,  90 => 66,  84 => 65,  78 => 64,  72 => 63,  66 => 62,  60 => 61,  57 => 60,  53 => 59,  49 => 58,  46 => 57,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

    {% block javascripts %}
        <script>
            \$(document).ready(function () {
                console.log('ready');
                ajaxReq(\"ESp-01\");
                var compartments = {{ compartments|json_encode|raw }};
                jQuery.each(compartments, function (i, compartment) {
                    console.log(compartment.compartment_id);
                    setInterval(function () {
                        ajaxReq(compartment.compartment_id);
                    }, 2000);
                });


                function ajaxReq(compartmentId) {
//                    \$.get(\"http://localhost/ss12dashboard/web/app_dev.php/api2\",
//                            {
//                                'compartmentId': compartmentId
//                            },
//                            function (data) {
//                                console.log(data[0]);
//                                \$(\"#\" + compartmentId + \"temp\").html(\"temp: \" + data[0].temp);
//                                \$(\"#\" + compartmentId + \"humid\").html(\"humid: \" + data[0].humid);
//                                \$(\"#\" + compartmentId + \"foodStatus\").html(\"foodStatus: \" + data[0].food_status);
//                                \$(\"#\" + compartmentId + \"timestamp\").html(\"Time: \" + data[0].time_stamp);
//                            });
                    \$.ajax({
                        type: \"GET\",
                        headers: {
                            'Accept': 'application/json',
                            'Content-Type': 'text/plain'
                        },
                        dataType: \"json\",
                        url: \"http://45.55.91.141/ss12dashboard/web/app_dev.php/api2\",
                        data: {'compartmentId': compartmentId},
                        success: function (data) {
                            console.log(data[0]);
                            \$(\"#\" + compartmentId + \"temp\").html(\"temp: \" + data[0].temp);
                            \$(\"#\" + compartmentId + \"humid\").html(\"humid: \" + data[0].humid);
                            \$(\"#\" + compartmentId + \"foodStatus\").html(\"foodStatus: \" + data[0].food_status);
                            \$(\"#\" + compartmentId + \"timestamp\").html(\"Time: \" + data[0].time_stamp);
                        },
                        error: function (xhr, ajaxOptions, thrownError) {
                            console.log(xhr.status);
                            console.log(thrownError);
                        }
                    });
                }

            });
        </script>
    {% endblock %}

    <h2>Hello {{ email }}</h2>
    {% for compartment in compartments %}
        <div style=\"background-color: #0088CC\">
            <h4 id=\"{{ compartment.compartmentId }}compartmentId\"> {{ compartment.compartmentId }}</h4>
            <h4 id=\"{{ compartment.compartmentId }}item\"> {{ compartment.item }}</h4>
            <h5 id=\"{{ compartment.compartmentId }}edate\"> {{ compartment.expireDate.date[:10] }}</h5>
            <h5 id=\"{{ compartment.compartmentId }}sdate\"> {{ compartment.storeDate.date[:10] }}</h5>
            <h5 id=\"{{ compartment.compartmentId }}temp\"> {{ compartment.temp }}</h5>
            <h5 id=\"{{ compartment.compartmentId }}humid\"> {{ compartment.humid }}</h5>
            <h5 id=\"{{ compartment.compartmentId }}foodStatus\"> {{ compartment.food_status }}</h5>
            <h5 id=\"{{ compartment.compartmentId }}timestamp\"> {{ compartment.time_stamp }}</h5>
        </div>
    {% endfor %}

{% endblock %}", "user/profile.html.twig", "C:\\wamp\\www\\ss12dashboard\\app\\Resources\\views\\user\\profile.html.twig");
    }
}
