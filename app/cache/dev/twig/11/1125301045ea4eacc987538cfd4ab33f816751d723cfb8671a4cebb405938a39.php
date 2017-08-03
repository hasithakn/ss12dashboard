<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_e2c0392eb3fe6276c535a3b34229e5e7c4efdb8e4d1c4e35763f2a98a2f0c20b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ef060fa856e1f163c4620adcbfff31feaf4ad00da2d9848b9703d61a4457fab8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef060fa856e1f163c4620adcbfff31feaf4ad00da2d9848b9703d61a4457fab8->enter($__internal_ef060fa856e1f163c4620adcbfff31feaf4ad00da2d9848b9703d61a4457fab8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef060fa856e1f163c4620adcbfff31feaf4ad00da2d9848b9703d61a4457fab8->leave($__internal_ef060fa856e1f163c4620adcbfff31feaf4ad00da2d9848b9703d61a4457fab8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6d12b48033e65ff9f12c502595f6540585e948999d98635cc64b23b7bda674dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d12b48033e65ff9f12c502595f6540585e948999d98635cc64b23b7bda674dc->enter($__internal_6d12b48033e65ff9f12c502595f6540585e948999d98635cc64b23b7bda674dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_6d12b48033e65ff9f12c502595f6540585e948999d98635cc64b23b7bda674dc->leave($__internal_6d12b48033e65ff9f12c502595f6540585e948999d98635cc64b23b7bda674dc_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_46dcc8bb4ccabe4a3096c08cbe4c6450de3d584e55efb858b7be8b8d9a88cb60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46dcc8bb4ccabe4a3096c08cbe4c6450de3d584e55efb858b7be8b8d9a88cb60->enter($__internal_46dcc8bb4ccabe4a3096c08cbe4c6450de3d584e55efb858b7be8b8d9a88cb60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_46dcc8bb4ccabe4a3096c08cbe4c6450de3d584e55efb858b7be8b8d9a88cb60->leave($__internal_46dcc8bb4ccabe4a3096c08cbe4c6450de3d584e55efb858b7be8b8d9a88cb60_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_041cdb45e9bed83163e433ae150ac78bca0e6d9e2752e02220c4dfdf340d6a7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_041cdb45e9bed83163e433ae150ac78bca0e6d9e2752e02220c4dfdf340d6a7e->enter($__internal_041cdb45e9bed83163e433ae150ac78bca0e6d9e2752e02220c4dfdf340d6a7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_041cdb45e9bed83163e433ae150ac78bca0e6d9e2752e02220c4dfdf340d6a7e->leave($__internal_041cdb45e9bed83163e433ae150ac78bca0e6d9e2752e02220c4dfdf340d6a7e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp\\www\\ss12dashboard\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
