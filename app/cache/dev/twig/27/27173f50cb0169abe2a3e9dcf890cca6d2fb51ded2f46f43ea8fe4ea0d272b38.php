<?php

/* security/login.html.twig */
class __TwigTemplate_ba6a3de019ad3f1905648f47e45dc5b98a0fb847df641a36d7667b25f72ceb2c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 3);
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
        $__internal_45615b605c6d31800fbe31d3fcfb9146701636656b4491deb4a94423c5ff97a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45615b605c6d31800fbe31d3fcfb9146701636656b4491deb4a94423c5ff97a3->enter($__internal_45615b605c6d31800fbe31d3fcfb9146701636656b4491deb4a94423c5ff97a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_45615b605c6d31800fbe31d3fcfb9146701636656b4491deb4a94423c5ff97a3->leave($__internal_45615b605c6d31800fbe31d3fcfb9146701636656b4491deb4a94423c5ff97a3_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_ea61170d8b748db0b6974eb3e108df885907c2cfa4a18e1c3f0de27fd46f8aec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea61170d8b748db0b6974eb3e108df885907c2cfa4a18e1c3f0de27fd46f8aec->enter($__internal_ea61170d8b748db0b6974eb3e108df885907c2cfa4a18e1c3f0de27fd46f8aec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 6
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 8
        echo "
    <div class=\"page-header\">
        <h1>Login</h1>
    </div>
    <div class=\"container\">
        <div>
            <form action=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" method=\"post\">
                <div class=\"form-group\">
                    <label for=\"username\">Username:</label>
                    <input type=\"text\" id=\"username\" class=\"form-control\" name=\"_username\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\"
                           placeholder=\"Email\"/>
                </div>
                <div class=\"form-group\">
                    <label for=\"password\">Password:</label>
                    <input type=\"password\" id=\"password\" class=\"form-control\" name=\"_password\" placeholder=\"Password\"/>
                </div>
                <div class=\"form-group row\">
                    <div class=\"col-lg-5 col-xs-3\"></div>
                    <div class=\"col-lg-2 col-xs-6 text-center\">
                        <button type=\"submit\" class=\"btn btn-primary\">Sign in</button>
                    </div>
                    <div class=\"col-lg-5 col-xs-3\"></div>
                </div>
                <div class=\"row text-center\">
                    <span class=\"text-center\">Don't have an account?<a class=\"primary-text\"
                                                                       href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newUser");
        echo "\">Sign Up</a></span>
                </div>
            </form>
        </div>
    </div>
    <div class=\"row\" style=\"height: 25px\"></div>
";
        
        $__internal_ea61170d8b748db0b6974eb3e108df885907c2cfa4a18e1c3f0de27fd46f8aec->leave($__internal_ea61170d8b748db0b6974eb3e108df885907c2cfa4a18e1c3f0de27fd46f8aec_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 33,  63 => 17,  57 => 14,  49 => 8,  43 => 6,  40 => 5,  34 => 4,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# app/Resources/views/security/login.html.twig #}
{# ... you will probably extend your base template, like base.html.twig #}
{% extends 'base.html.twig' %}
{% block body %}
    {% if error %}
        <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
    {% endif %}

    <div class=\"page-header\">
        <h1>Login</h1>
    </div>
    <div class=\"container\">
        <div>
            <form action=\"{{ path('login') }}\" method=\"post\">
                <div class=\"form-group\">
                    <label for=\"username\">Username:</label>
                    <input type=\"text\" id=\"username\" class=\"form-control\" name=\"_username\" value=\"{{ last_username }}\"
                           placeholder=\"Email\"/>
                </div>
                <div class=\"form-group\">
                    <label for=\"password\">Password:</label>
                    <input type=\"password\" id=\"password\" class=\"form-control\" name=\"_password\" placeholder=\"Password\"/>
                </div>
                <div class=\"form-group row\">
                    <div class=\"col-lg-5 col-xs-3\"></div>
                    <div class=\"col-lg-2 col-xs-6 text-center\">
                        <button type=\"submit\" class=\"btn btn-primary\">Sign in</button>
                    </div>
                    <div class=\"col-lg-5 col-xs-3\"></div>
                </div>
                <div class=\"row text-center\">
                    <span class=\"text-center\">Don't have an account?<a class=\"primary-text\"
                                                                       href=\"{{ path(\"newUser\") }}\">Sign Up</a></span>
                </div>
            </form>
        </div>
    </div>
    <div class=\"row\" style=\"height: 25px\"></div>
{% endblock %}
", "security/login.html.twig", "C:\\wamp\\www\\ss12dashboard\\app\\Resources\\views\\security\\login.html.twig");
    }
}
