<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_fcc5bd6730e5c0e7a1299e5d94ae6d2c3a60e9a3d5d80740786416dc3f5d8b23 extends Twig_Template
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
        $__internal_a0d01c034b6cb05f418544d9c23c97d62aeeea3c619fbde55fe9180340209e99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0d01c034b6cb05f418544d9c23c97d62aeeea3c619fbde55fe9180340209e99->enter($__internal_a0d01c034b6cb05f418544d9c23c97d62aeeea3c619fbde55fe9180340209e99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_ba4bcf7e192c6807b16e9ea1dddf41c0bfb5077cf96b29ed7501e3d048344075 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba4bcf7e192c6807b16e9ea1dddf41c0bfb5077cf96b29ed7501e3d048344075->enter($__internal_ba4bcf7e192c6807b16e9ea1dddf41c0bfb5077cf96b29ed7501e3d048344075_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0d01c034b6cb05f418544d9c23c97d62aeeea3c619fbde55fe9180340209e99->leave($__internal_a0d01c034b6cb05f418544d9c23c97d62aeeea3c619fbde55fe9180340209e99_prof);

        
        $__internal_ba4bcf7e192c6807b16e9ea1dddf41c0bfb5077cf96b29ed7501e3d048344075->leave($__internal_ba4bcf7e192c6807b16e9ea1dddf41c0bfb5077cf96b29ed7501e3d048344075_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f45a69dd2e0a62831fac235e0bfa4ad7b986985a44cdcec272e0530a740d98bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f45a69dd2e0a62831fac235e0bfa4ad7b986985a44cdcec272e0530a740d98bf->enter($__internal_f45a69dd2e0a62831fac235e0bfa4ad7b986985a44cdcec272e0530a740d98bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_445c3b551ca3fede7e90a294a93684b8b8abff331ca7682f8b00d97084e563ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_445c3b551ca3fede7e90a294a93684b8b8abff331ca7682f8b00d97084e563ac->enter($__internal_445c3b551ca3fede7e90a294a93684b8b8abff331ca7682f8b00d97084e563ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_445c3b551ca3fede7e90a294a93684b8b8abff331ca7682f8b00d97084e563ac->leave($__internal_445c3b551ca3fede7e90a294a93684b8b8abff331ca7682f8b00d97084e563ac_prof);

        
        $__internal_f45a69dd2e0a62831fac235e0bfa4ad7b986985a44cdcec272e0530a740d98bf->leave($__internal_f45a69dd2e0a62831fac235e0bfa4ad7b986985a44cdcec272e0530a740d98bf_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_55739e9a4461ba24b7323900c9c7399fbfe7db638a36580370f7b10fd7ece587 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55739e9a4461ba24b7323900c9c7399fbfe7db638a36580370f7b10fd7ece587->enter($__internal_55739e9a4461ba24b7323900c9c7399fbfe7db638a36580370f7b10fd7ece587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f342d37244039bbf816a32478f6df91acaea1f1f6c61dfa7d6c3f6f855282f1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f342d37244039bbf816a32478f6df91acaea1f1f6c61dfa7d6c3f6f855282f1a->enter($__internal_f342d37244039bbf816a32478f6df91acaea1f1f6c61dfa7d6c3f6f855282f1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f342d37244039bbf816a32478f6df91acaea1f1f6c61dfa7d6c3f6f855282f1a->leave($__internal_f342d37244039bbf816a32478f6df91acaea1f1f6c61dfa7d6c3f6f855282f1a_prof);

        
        $__internal_55739e9a4461ba24b7323900c9c7399fbfe7db638a36580370f7b10fd7ece587->leave($__internal_55739e9a4461ba24b7323900c9c7399fbfe7db638a36580370f7b10fd7ece587_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_f438c098ed73fd8bb82782a1a1f8791b00d22e8f013356a5464ed3649006690f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f438c098ed73fd8bb82782a1a1f8791b00d22e8f013356a5464ed3649006690f->enter($__internal_f438c098ed73fd8bb82782a1a1f8791b00d22e8f013356a5464ed3649006690f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b8bbaa7d957832050c2353e5fb1a42d79fae71c5b7e91015ffed8596afc6f5dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8bbaa7d957832050c2353e5fb1a42d79fae71c5b7e91015ffed8596afc6f5dd->enter($__internal_b8bbaa7d957832050c2353e5fb1a42d79fae71c5b7e91015ffed8596afc6f5dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_b8bbaa7d957832050c2353e5fb1a42d79fae71c5b7e91015ffed8596afc6f5dd->leave($__internal_b8bbaa7d957832050c2353e5fb1a42d79fae71c5b7e91015ffed8596afc6f5dd_prof);

        
        $__internal_f438c098ed73fd8bb82782a1a1f8791b00d22e8f013356a5464ed3649006690f->leave($__internal_f438c098ed73fd8bb82782a1a1f8791b00d22e8f013356a5464ed3649006690f_prof);

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
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
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
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp64\\www\\yolunicorn\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
