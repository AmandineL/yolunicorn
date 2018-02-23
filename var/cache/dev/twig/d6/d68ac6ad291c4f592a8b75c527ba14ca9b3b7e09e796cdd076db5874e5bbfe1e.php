<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_798995db6963735f952c3e6579a080e97b6f42c4724ca9f43c694a2407e0c73e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f4da010b6b30e7f13228c55424a6a72faaf97e5bc3819ff5eb1e4c092a8f2ef4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4da010b6b30e7f13228c55424a6a72faaf97e5bc3819ff5eb1e4c092a8f2ef4->enter($__internal_f4da010b6b30e7f13228c55424a6a72faaf97e5bc3819ff5eb1e4c092a8f2ef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_963d807ac338b329e2107d4b483ee15b47db39391979b5c8f46de962b30d1d4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_963d807ac338b329e2107d4b483ee15b47db39391979b5c8f46de962b30d1d4e->enter($__internal_963d807ac338b329e2107d4b483ee15b47db39391979b5c8f46de962b30d1d4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_f4da010b6b30e7f13228c55424a6a72faaf97e5bc3819ff5eb1e4c092a8f2ef4->leave($__internal_f4da010b6b30e7f13228c55424a6a72faaf97e5bc3819ff5eb1e4c092a8f2ef4_prof);

        
        $__internal_963d807ac338b329e2107d4b483ee15b47db39391979b5c8f46de962b30d1d4e->leave($__internal_963d807ac338b329e2107d4b483ee15b47db39391979b5c8f46de962b30d1d4e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9767b92e58f12879c9d93cca1b6e2013efdd98d1ec43916d096a3fc2e6820c71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9767b92e58f12879c9d93cca1b6e2013efdd98d1ec43916d096a3fc2e6820c71->enter($__internal_9767b92e58f12879c9d93cca1b6e2013efdd98d1ec43916d096a3fc2e6820c71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_586fbef35ecf7fc9fad7649e72454d53b8da46f1adb24060e98b91e154230b44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_586fbef35ecf7fc9fad7649e72454d53b8da46f1adb24060e98b91e154230b44->enter($__internal_586fbef35ecf7fc9fad7649e72454d53b8da46f1adb24060e98b91e154230b44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_586fbef35ecf7fc9fad7649e72454d53b8da46f1adb24060e98b91e154230b44->leave($__internal_586fbef35ecf7fc9fad7649e72454d53b8da46f1adb24060e98b91e154230b44_prof);

        
        $__internal_9767b92e58f12879c9d93cca1b6e2013efdd98d1ec43916d096a3fc2e6820c71->leave($__internal_9767b92e58f12879c9d93cca1b6e2013efdd98d1ec43916d096a3fc2e6820c71_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_441765c24ab4606bc3f733f3389b71a95454893ad9a595de924ec17a2edda570 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_441765c24ab4606bc3f733f3389b71a95454893ad9a595de924ec17a2edda570->enter($__internal_441765c24ab4606bc3f733f3389b71a95454893ad9a595de924ec17a2edda570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_59ca71e92b2d86d4ed3051e287ac1cdc4e21a5b75b19a5c932a8aedf794af4e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59ca71e92b2d86d4ed3051e287ac1cdc4e21a5b75b19a5c932a8aedf794af4e1->enter($__internal_59ca71e92b2d86d4ed3051e287ac1cdc4e21a5b75b19a5c932a8aedf794af4e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_59ca71e92b2d86d4ed3051e287ac1cdc4e21a5b75b19a5c932a8aedf794af4e1->leave($__internal_59ca71e92b2d86d4ed3051e287ac1cdc4e21a5b75b19a5c932a8aedf794af4e1_prof);

        
        $__internal_441765c24ab4606bc3f733f3389b71a95454893ad9a595de924ec17a2edda570->leave($__internal_441765c24ab4606bc3f733f3389b71a95454893ad9a595de924ec17a2edda570_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_6117ee05a438f86f40a7022e1272481ebadb9e8d07f067b366d335f256509ee4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6117ee05a438f86f40a7022e1272481ebadb9e8d07f067b366d335f256509ee4->enter($__internal_6117ee05a438f86f40a7022e1272481ebadb9e8d07f067b366d335f256509ee4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fcb40a5689fb3e90a87bf937cfbb791a7471d7b8fa4f485a7c721e3e59018dd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcb40a5689fb3e90a87bf937cfbb791a7471d7b8fa4f485a7c721e3e59018dd4->enter($__internal_fcb40a5689fb3e90a87bf937cfbb791a7471d7b8fa4f485a7c721e3e59018dd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_fcb40a5689fb3e90a87bf937cfbb791a7471d7b8fa4f485a7c721e3e59018dd4->leave($__internal_fcb40a5689fb3e90a87bf937cfbb791a7471d7b8fa4f485a7c721e3e59018dd4_prof);

        
        $__internal_6117ee05a438f86f40a7022e1272481ebadb9e8d07f067b366d335f256509ee4->leave($__internal_6117ee05a438f86f40a7022e1272481ebadb9e8d07f067b366d335f256509ee4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "C:\\wamp64\\www\\yolunicorn\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
