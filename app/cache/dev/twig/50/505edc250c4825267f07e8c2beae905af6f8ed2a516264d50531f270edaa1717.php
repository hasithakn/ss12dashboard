<?php

/* compartment/newCompartment.html.twig */
class __TwigTemplate_0d9f67edffb644e0649291cb9e5a460a03b99aeba631d4373c08fe1bd76d2368 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "compartment/newCompartment.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6494ca2640bc12ab3101b52e270fc330ac309023bd0e87289fb7a0bbac34b076 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6494ca2640bc12ab3101b52e270fc330ac309023bd0e87289fb7a0bbac34b076->enter($__internal_6494ca2640bc12ab3101b52e270fc330ac309023bd0e87289fb7a0bbac34b076_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "compartment/newCompartment.html.twig"));

        // line 2
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "bootstrap_3_layout.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6494ca2640bc12ab3101b52e270fc330ac309023bd0e87289fb7a0bbac34b076->leave($__internal_6494ca2640bc12ab3101b52e270fc330ac309023bd0e87289fb7a0bbac34b076_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cd5db21ea63183317a60aa667437555b89d64322974ebffe0abefd100d948e92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd5db21ea63183317a60aa667437555b89d64322974ebffe0abefd100d948e92->enter($__internal_cd5db21ea63183317a60aa667437555b89d64322974ebffe0abefd100d948e92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"page-header\">
        <h1>Add Compartment</h1>
    </div>
    <div class=\"container\">
        ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 12
            echo "            <div class=\"alert alert-danger\">
                ";
            // line 13
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "        <div class=\"form-group\">
            ";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "compartment_id", array()), 'label', array("label_attr" => array("class" => "col-md-3 control-label")));
        echo "
            <div class=\"col-md-6\">
                ";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "compartment_id", array()), 'widget', array("attr" => array("class" => "form-control apps")));
        echo "
                ";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "compartment_id", array()), 'errors');
        echo "
            </div>
        </div>
        <div class=\"form-group\">

            ";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "item", array()), 'label', array("label_attr" => array("class" => "col-md-3 control-label")));
        echo "
            <div class=\"col-md-6\">
                <div class=\"input-group\">
                    ";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "item", array()), 'widget', array("attr" => array("class" => "form-control pw")));
        echo "
                    ";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "item", array()), 'errors');
        echo "
                </div>
            </div>
        </div>
        <div class=\"form-group\">

            ";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "expire_date", array()), 'label', array("label_attr" => array("class" => "col-md-3 control-label")));
        echo "
            <div class=\"col-md-6\">
                <div class=\"input-group\">
                    ";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "expire_date", array()), 'widget');
        echo "
                    ";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "expire_date", array()), 'errors');
        echo "
                </div>
            </div>
        </div>
        <div class=\"form-group\">

            ";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "store_date", array()), 'label', array("label_attr" => array("class" => "col-md-3 control-label")));
        echo "
            <div class=\"col-md-6\">
                <div class=\"input-group\">
                    ";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "store_date", array()), 'widget');
        echo "
                    ";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "store_date", array()), 'errors');
        echo "
                </div>
            </div>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-sm-9 col-sm-offset-7\">
            <a href=\"";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("userProfile");
        echo "\" class=\"btn btn-info\"
               style=\"width: 100px;background-color: #6a787c\">Cancel</a>
            ";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
        </div>

    </div>

    ";
        // line 64
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_cd5db21ea63183317a60aa667437555b89d64322974ebffe0abefd100d948e92->leave($__internal_cd5db21ea63183317a60aa667437555b89d64322974ebffe0abefd100d948e92_prof);

    }

    public function getTemplateName()
    {
        return "compartment/newCompartment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 64,  155 => 59,  150 => 57,  139 => 49,  135 => 48,  129 => 45,  120 => 39,  116 => 38,  110 => 35,  101 => 29,  97 => 28,  91 => 25,  83 => 20,  79 => 19,  74 => 17,  71 => 16,  62 => 13,  59 => 12,  55 => 11,  50 => 9,  43 => 4,  37 => 3,  30 => 1,  28 => 2,  11 => 1,);
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
{% form_theme form 'bootstrap_3_layout.html.twig' %}
{% block body %}

    <div class=\"page-header\">
        <h1>Add Compartment</h1>
    </div>
    <div class=\"container\">
        {{ form_start(form,{'attr':{'class':'form-horizontal'}}) }}

        {% for flash_message in app.session.flashBag.get('notice') %}
            <div class=\"alert alert-danger\">
                {{ flash_message }}
            </div>
        {% endfor %}
        <div class=\"form-group\">
            {{ form_label(form.compartment_id ,null,{'label_attr':{'class':'col-md-3 control-label'}}) }}
            <div class=\"col-md-6\">
                {{ form_widget(form.compartment_id,{'attr':{'class':'form-control apps'}}) }}
                {{ form_errors(form.compartment_id) }}
            </div>
        </div>
        <div class=\"form-group\">

            {{ form_label(form.item ,null,{'label_attr':{'class':'col-md-3 control-label'}}) }}
            <div class=\"col-md-6\">
                <div class=\"input-group\">
                    {{ form_widget(form.item,{'attr':{'class':'form-control pw'}}) }}
                    {{ form_errors(form.item) }}
                </div>
            </div>
        </div>
        <div class=\"form-group\">

            {{ form_label(form.expire_date ,null,{'label_attr':{'class':'col-md-3 control-label'}}) }}
            <div class=\"col-md-6\">
                <div class=\"input-group\">
                    {{ form_widget(form.expire_date) }}
                    {{ form_errors(form.expire_date) }}
                </div>
            </div>
        </div>
        <div class=\"form-group\">

            {{ form_label(form.store_date ,null,{'label_attr':{'class':'col-md-3 control-label'}}) }}
            <div class=\"col-md-6\">
                <div class=\"input-group\">
                    {{ form_widget(form.store_date) }}
                    {{ form_errors(form.store_date) }}
                </div>
            </div>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-sm-9 col-sm-offset-7\">
            <a href=\"{{ path('userProfile') }}\" class=\"btn btn-info\"
               style=\"width: 100px;background-color: #6a787c\">Cancel</a>
            {{ form_widget(form.save,{'attr':{'class':'btn btn-primary'}}) }}
        </div>

    </div>

    {{ form_end(form) }}
{% endblock %}", "compartment/newCompartment.html.twig", "C:\\wamp\\www\\ss12dashboard\\app\\Resources\\views\\compartment\\newCompartment.html.twig");
    }
}
