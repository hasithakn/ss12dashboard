<?php

/* base.html.twig */
class __TwigTemplate_342bd1a763fc83fd030a5dc7bb486534e9958b9c48b4ad8c8f0ff9f8127d4449 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'scripts' => array($this, 'block_scripts'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_35f0004b640663c971221b787b30f72d1e049c57edf5f1b8d88117e3573f3376 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35f0004b640663c971221b787b30f72d1e049c57edf5f1b8d88117e3573f3376->enter($__internal_35f0004b640663c971221b787b30f72d1e049c57edf5f1b8d88117e3573f3376_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\"/>
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "    ";
        $this->displayBlock('scripts', $context, $blocks);
        // line 20
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
</head>
<body>
";
        // line 23
        if ( !(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()))) {
            // line 24
            echo "    <a style=\"float: right;margin: 5px\" class=\"btn btn-success\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("logout");
            echo "\">LOGOUT</a>
";
        }
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('body', $context, $blocks);
        // line 28
        $this->displayBlock('javascripts', $context, $blocks);
        // line 31
        echo "</body>
</html>
";
        
        $__internal_35f0004b640663c971221b787b30f72d1e049c57edf5f1b8d88117e3573f3376->leave($__internal_35f0004b640663c971221b787b30f72d1e049c57edf5f1b8d88117e3573f3376_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ce41e4e62fb821ad6823cf759a1fb33e835219dc84bf2d7af8a993325a4b1de5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce41e4e62fb821ad6823cf759a1fb33e835219dc84bf2d7af8a993325a4b1de5->enter($__internal_ce41e4e62fb821ad6823cf759a1fb33e835219dc84bf2d7af8a993325a4b1de5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "SS12";
        
        $__internal_ce41e4e62fb821ad6823cf759a1fb33e835219dc84bf2d7af8a993325a4b1de5->leave($__internal_ce41e4e62fb821ad6823cf759a1fb33e835219dc84bf2d7af8a993325a4b1de5_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2b5d9b6d1ed3c2aef73763495c8dcbb0d6bc32aebad363fee6563ce47508eec5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b5d9b6d1ed3c2aef73763495c8dcbb0d6bc32aebad363fee6563ce47508eec5->enter($__internal_2b5d9b6d1ed3c2aef73763495c8dcbb0d6bc32aebad363fee6563ce47508eec5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <link rel=\"stylesheet\" href=";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/css/bootstrap.css"), "html", null, true);
        echo " type=\"text/css\"/>
        <link rel=\"stylesheet\" href=";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo " type=\"text/css\">
        <link rel=\"stylesheet\" href=";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/jquery-ui.css"), "html", null, true);
        echo " type=\"text/css\">
        <link rel=\"stylesheet\" href=";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/font-awesome.css"), "html", null, true);
        echo " type=\"text/css\">
        <link rel=\"stylesheet\" href=";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo " type=\"text/css\">
    ";
        
        $__internal_2b5d9b6d1ed3c2aef73763495c8dcbb0d6bc32aebad363fee6563ce47508eec5->leave($__internal_2b5d9b6d1ed3c2aef73763495c8dcbb0d6bc32aebad363fee6563ce47508eec5_prof);

    }

    // line 13
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_7b65742b98f6da8b0fc7d6d04102939d85916d78f01894712af07dc7152b501b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b65742b98f6da8b0fc7d6d04102939d85916d78f01894712af07dc7152b501b->enter($__internal_7b65742b98f6da8b0fc7d6d04102939d85916d78f01894712af07dc7152b501b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 14
        echo "        <script src=";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("jquery/jquery.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-3.2.1.min.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-ui.js"), "html", null, true);
        echo "></script>

    ";
        
        $__internal_7b65742b98f6da8b0fc7d6d04102939d85916d78f01894712af07dc7152b501b->leave($__internal_7b65742b98f6da8b0fc7d6d04102939d85916d78f01894712af07dc7152b501b_prof);

    }

    // line 27
    public function block_body($context, array $blocks = array())
    {
        $__internal_7858a3de12c8a9896ec2d1e60b6924009af507d59f57ee84fe111b168bc89b87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7858a3de12c8a9896ec2d1e60b6924009af507d59f57ee84fe111b168bc89b87->enter($__internal_7858a3de12c8a9896ec2d1e60b6924009af507d59f57ee84fe111b168bc89b87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7858a3de12c8a9896ec2d1e60b6924009af507d59f57ee84fe111b168bc89b87->leave($__internal_7858a3de12c8a9896ec2d1e60b6924009af507d59f57ee84fe111b168bc89b87_prof);

    }

    // line 28
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_561672332819a2837f573f46eca7c7b5bf08861103463a69d0c475c786bec357 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_561672332819a2837f573f46eca7c7b5bf08861103463a69d0c475c786bec357->enter($__internal_561672332819a2837f573f46eca7c7b5bf08861103463a69d0c475c786bec357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 29
        echo "
";
        
        $__internal_561672332819a2837f573f46eca7c7b5bf08861103463a69d0c475c786bec357->leave($__internal_561672332819a2837f573f46eca7c7b5bf08861103463a69d0c475c786bec357_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 29,  157 => 28,  146 => 27,  136 => 17,  132 => 16,  128 => 15,  123 => 14,  117 => 13,  108 => 11,  104 => 10,  100 => 9,  96 => 8,  91 => 7,  85 => 6,  73 => 5,  64 => 31,  62 => 28,  60 => 27,  57 => 26,  51 => 24,  49 => 23,  42 => 20,  39 => 13,  37 => 6,  33 => 5,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\"/>
    <title>{% block title %}SS12{% endblock %}</title>
    {% block stylesheets %}
        <link rel=\"stylesheet\" href={{ asset(\"bootstrap/css/bootstrap.css\") }} type=\"text/css\"/>
        <link rel=\"stylesheet\" href={{ asset(\"css/bootstrap.min.css\") }} type=\"text/css\">
        <link rel=\"stylesheet\" href={{ asset(\"css/jquery-ui.css\") }} type=\"text/css\">
        <link rel=\"stylesheet\" href={{ asset(\"css/font-awesome.css\") }} type=\"text/css\">
        <link rel=\"stylesheet\" href={{ asset(\"css/style.css\") }} type=\"text/css\">
    {% endblock %}
    {% block scripts %}
        <script src={{ asset(\"jquery/jquery.js\") }}></script>
        <script src={{ asset(\"js/jquery-3.2.1.min.js\") }}></script>
        <script src={{ asset(\"js/bootstrap.min.js\") }}></script>
        <script src={{ asset(\"js/jquery-ui.js\") }}></script>

    {% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\"/>
</head>
<body>
{% if app.user is not null %}
    <a style=\"float: right;margin: 5px\" class=\"btn btn-success\" href=\"{{ url('logout') }}\">LOGOUT</a>
{% endif %}

{% block body %}{% endblock %}
{% block javascripts %}

{% endblock %}
</body>
</html>
", "base.html.twig", "C:\\wamp\\www\\ss12dashboard\\app\\Resources\\views\\base.html.twig");
    }
}
