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
        $__internal_37ed8d8a4225253c9cab92b9ba85fcff3a71a47118d2b422e09f861f672c8edc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37ed8d8a4225253c9cab92b9ba85fcff3a71a47118d2b422e09f861f672c8edc->enter($__internal_37ed8d8a4225253c9cab92b9ba85fcff3a71a47118d2b422e09f861f672c8edc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/profile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37ed8d8a4225253c9cab92b9ba85fcff3a71a47118d2b422e09f861f672c8edc->leave($__internal_37ed8d8a4225253c9cab92b9ba85fcff3a71a47118d2b422e09f861f672c8edc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6c1a5afbda2253f1610a6c8750242d7a689497e60f6617fbe41cbff815214129 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c1a5afbda2253f1610a6c8750242d7a689497e60f6617fbe41cbff815214129->enter($__internal_6c1a5afbda2253f1610a6c8750242d7a689497e60f6617fbe41cbff815214129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    ";
        // line 5
        $this->displayBlock('javascripts', $context, $blocks);
        // line 35
        echo "
    <h2>Hello ";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email")), "html", null, true);
        echo "</h2>
    ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["compartments"]) ? $context["compartments"] : $this->getContext($context, "compartments")));
        foreach ($context['_seq'] as $context["_key"] => $context["compartment"]) {
            // line 38
            echo "        <div style=\"background-color: #0088CC\">
            <h4 id=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["compartment"], "compartmentId", array()), "html", null, true);
            echo "compartmentId\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["compartment"], "compartmentId", array()), "html", null, true);
            echo "</h4>
            <h4 id=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["compartment"], "compartmentId", array()), "html", null, true);
            echo "item\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["compartment"], "item", array()), "html", null, true);
            echo "</h4>
            <h5 id=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["compartment"], "compartmentId", array()), "html", null, true);
            echo "edate\"> ";
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($this->getAttribute($context["compartment"], "expireDate", array()), "date", array()), 0, 10), "html", null, true);
            echo "</h5>
            <h5 id=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["compartment"], "compartmentId", array()), "html", null, true);
            echo "sdate\"> ";
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($this->getAttribute($context["compartment"], "storeDate", array()), "date", array()), 0, 10), "html", null, true);
            echo "</h5>
            <h5 id=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["compartment"], "compartmentId", array()), "html", null, true);
            echo "temp\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["compartment"], "temp", array()), "html", null, true);
            echo "</h5>
            <h5 id=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["compartment"], "compartmentId", array()), "html", null, true);
            echo "humid\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["compartment"], "humid", array()), "html", null, true);
            echo "</h5>
            <h5 id=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["compartment"], "compartmentId", array()), "html", null, true);
            echo "foodStatus\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["compartment"], "food_status", array()), "html", null, true);
            echo "</h5>
            <h5 id=\"";
            // line 46
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
        // line 49
        echo "
";
        
        $__internal_6c1a5afbda2253f1610a6c8750242d7a689497e60f6617fbe41cbff815214129->leave($__internal_6c1a5afbda2253f1610a6c8750242d7a689497e60f6617fbe41cbff815214129_prof);

    }

    // line 5
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8c505ea1b01c1a1576cf5f500d00881e9361d2694cc889a82acee61574b62369 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c505ea1b01c1a1576cf5f500d00881e9361d2694cc889a82acee61574b62369->enter($__internal_8c505ea1b01c1a1576cf5f500d00881e9361d2694cc889a82acee61574b62369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 6
        echo "        <script>
            \$(document).ready(function () {
                console.log('ready');
                var compartments = ";
        // line 9
        echo twig_jsonencode_filter((isset($context["compartments"]) ? $context["compartments"] : $this->getContext($context, "compartments")));
        echo ";
                jQuery.each(compartments, function (i, compartment) {
                    console.log(compartment.compartment_id);
                    setInterval(function () {
                        ajaxReq(compartment.compartment_id);
                    }, 2000);
                });


                function ajaxReq(compartmentId) {
                    \$.get(\"http://localhost/ss12dashboard/web/app_dev.php/api2\",
                            {
                                'compartmentId': compartmentId
                            },
                            function (data) {
                                console.log(data[0]);
                                \$(\"#\" + compartmentId + \"temp\").html(\"temp: \" + data[0].temp);
                                \$(\"#\" + compartmentId + \"humid\").html(\"humid: \" + data[0].humid);
                                \$(\"#\" + compartmentId + \"foodStatus\").html(\"foodStatus: \" + data[0].food_status);
                                \$(\"#\" + compartmentId + \"timestamp\").html(\"Time: \" + data[0].time_stamp);
                            });
                }

            });
        </script>
    ";
        
        $__internal_8c505ea1b01c1a1576cf5f500d00881e9361d2694cc889a82acee61574b62369->leave($__internal_8c505ea1b01c1a1576cf5f500d00881e9361d2694cc889a82acee61574b62369_prof);

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
        return array (  132 => 9,  127 => 6,  121 => 5,  113 => 49,  102 => 46,  96 => 45,  90 => 44,  84 => 43,  78 => 42,  72 => 41,  66 => 40,  60 => 39,  57 => 38,  53 => 37,  49 => 36,  46 => 35,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
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
                var compartments = {{ compartments|json_encode|raw }};
                jQuery.each(compartments, function (i, compartment) {
                    console.log(compartment.compartment_id);
                    setInterval(function () {
                        ajaxReq(compartment.compartment_id);
                    }, 2000);
                });


                function ajaxReq(compartmentId) {
                    \$.get(\"http://localhost/ss12dashboard/web/app_dev.php/api2\",
                            {
                                'compartmentId': compartmentId
                            },
                            function (data) {
                                console.log(data[0]);
                                \$(\"#\" + compartmentId + \"temp\").html(\"temp: \" + data[0].temp);
                                \$(\"#\" + compartmentId + \"humid\").html(\"humid: \" + data[0].humid);
                                \$(\"#\" + compartmentId + \"foodStatus\").html(\"foodStatus: \" + data[0].food_status);
                                \$(\"#\" + compartmentId + \"timestamp\").html(\"Time: \" + data[0].time_stamp);
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
