<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_5746144e8e37047d20be8c77cf0face36c478f1165536e98b5a5c692c1a2240c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ef1675d27b5fd5d29204798f419c7dadff35da33ccac5da84a8a91bc0b541df9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef1675d27b5fd5d29204798f419c7dadff35da33ccac5da84a8a91bc0b541df9->enter($__internal_ef1675d27b5fd5d29204798f419c7dadff35da33ccac5da84a8a91bc0b541df9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef1675d27b5fd5d29204798f419c7dadff35da33ccac5da84a8a91bc0b541df9->leave($__internal_ef1675d27b5fd5d29204798f419c7dadff35da33ccac5da84a8a91bc0b541df9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_bd76b4dbf8937dcbd72cd7537575c45b66913bfef6a5ce1a0283d4fcb0e0db6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd76b4dbf8937dcbd72cd7537575c45b66913bfef6a5ce1a0283d4fcb0e0db6c->enter($__internal_bd76b4dbf8937dcbd72cd7537575c45b66913bfef6a5ce1a0283d4fcb0e0db6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_bd76b4dbf8937dcbd72cd7537575c45b66913bfef6a5ce1a0283d4fcb0e0db6c->leave($__internal_bd76b4dbf8937dcbd72cd7537575c45b66913bfef6a5ce1a0283d4fcb0e0db6c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_81318dba30aa89c56a309088311ff57fd3de1468cd02b724e968d678a1e998bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81318dba30aa89c56a309088311ff57fd3de1468cd02b724e968d678a1e998bd->enter($__internal_81318dba30aa89c56a309088311ff57fd3de1468cd02b724e968d678a1e998bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_81318dba30aa89c56a309088311ff57fd3de1468cd02b724e968d678a1e998bd->leave($__internal_81318dba30aa89c56a309088311ff57fd3de1468cd02b724e968d678a1e998bd_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_dc793c0e3039e593d16ff2d6bb8941dbe55d34f1931242a8adff3ce13089d584 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc793c0e3039e593d16ff2d6bb8941dbe55d34f1931242a8adff3ce13089d584->enter($__internal_dc793c0e3039e593d16ff2d6bb8941dbe55d34f1931242a8adff3ce13089d584_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_dc793c0e3039e593d16ff2d6bb8941dbe55d34f1931242a8adff3ce13089d584->leave($__internal_dc793c0e3039e593d16ff2d6bb8941dbe55d34f1931242a8adff3ce13089d584_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp\\www\\ss12dashboard\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
