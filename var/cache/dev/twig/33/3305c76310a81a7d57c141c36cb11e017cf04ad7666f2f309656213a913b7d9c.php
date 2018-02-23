<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_2fa5e8473213e0100c192de3ec4862441d1be967d3fd23884f8edaade0b3e59b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_47f19a237473d21378e31b2a3338116f6a42df9e6974c8734fc53a8f492a3ff2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47f19a237473d21378e31b2a3338116f6a42df9e6974c8734fc53a8f492a3ff2->enter($__internal_47f19a237473d21378e31b2a3338116f6a42df9e6974c8734fc53a8f492a3ff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_2a58d6834ec99141de67b0aa24c02899fe9c52b5831ac6e9cff8e5afad0c0239 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a58d6834ec99141de67b0aa24c02899fe9c52b5831ac6e9cff8e5afad0c0239->enter($__internal_2a58d6834ec99141de67b0aa24c02899fe9c52b5831ac6e9cff8e5afad0c0239_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47f19a237473d21378e31b2a3338116f6a42df9e6974c8734fc53a8f492a3ff2->leave($__internal_47f19a237473d21378e31b2a3338116f6a42df9e6974c8734fc53a8f492a3ff2_prof);

        
        $__internal_2a58d6834ec99141de67b0aa24c02899fe9c52b5831ac6e9cff8e5afad0c0239->leave($__internal_2a58d6834ec99141de67b0aa24c02899fe9c52b5831ac6e9cff8e5afad0c0239_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2d290dbea2f91c435ee1679d965f6b292b9fc1b90645c7959a1f6161b213c156 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d290dbea2f91c435ee1679d965f6b292b9fc1b90645c7959a1f6161b213c156->enter($__internal_2d290dbea2f91c435ee1679d965f6b292b9fc1b90645c7959a1f6161b213c156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4fe15669a9556541b456a3a20faf07b11dfaaf6ffade187b64bf3c8d8ff8a932 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fe15669a9556541b456a3a20faf07b11dfaaf6ffade187b64bf3c8d8ff8a932->enter($__internal_4fe15669a9556541b456a3a20faf07b11dfaaf6ffade187b64bf3c8d8ff8a932_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_4fe15669a9556541b456a3a20faf07b11dfaaf6ffade187b64bf3c8d8ff8a932->leave($__internal_4fe15669a9556541b456a3a20faf07b11dfaaf6ffade187b64bf3c8d8ff8a932_prof);

        
        $__internal_2d290dbea2f91c435ee1679d965f6b292b9fc1b90645c7959a1f6161b213c156->leave($__internal_2d290dbea2f91c435ee1679d965f6b292b9fc1b90645c7959a1f6161b213c156_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_11d2b320440126728afb945eb163f405bf45edd383f9be81da2d070d3c0b036b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11d2b320440126728afb945eb163f405bf45edd383f9be81da2d070d3c0b036b->enter($__internal_11d2b320440126728afb945eb163f405bf45edd383f9be81da2d070d3c0b036b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8a43feae0a20e11e8e8eceab605ad097ce650fa9dd045fd85d611d348a534c5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a43feae0a20e11e8e8eceab605ad097ce650fa9dd045fd85d611d348a534c5a->enter($__internal_8a43feae0a20e11e8e8eceab605ad097ce650fa9dd045fd85d611d348a534c5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_8a43feae0a20e11e8e8eceab605ad097ce650fa9dd045fd85d611d348a534c5a->leave($__internal_8a43feae0a20e11e8e8eceab605ad097ce650fa9dd045fd85d611d348a534c5a_prof);

        
        $__internal_11d2b320440126728afb945eb163f405bf45edd383f9be81da2d070d3c0b036b->leave($__internal_11d2b320440126728afb945eb163f405bf45edd383f9be81da2d070d3c0b036b_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d3cbd7ae5235dadca0d827800491fe77ac7df3047cc3ed669c748a7e495f110a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3cbd7ae5235dadca0d827800491fe77ac7df3047cc3ed669c748a7e495f110a->enter($__internal_d3cbd7ae5235dadca0d827800491fe77ac7df3047cc3ed669c748a7e495f110a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d755e1f5f04ce730cf737fd5d6f04bb6001c4bba410f1599abbcad13dfe71693 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d755e1f5f04ce730cf737fd5d6f04bb6001c4bba410f1599abbcad13dfe71693->enter($__internal_d755e1f5f04ce730cf737fd5d6f04bb6001c4bba410f1599abbcad13dfe71693_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_d755e1f5f04ce730cf737fd5d6f04bb6001c4bba410f1599abbcad13dfe71693->leave($__internal_d755e1f5f04ce730cf737fd5d6f04bb6001c4bba410f1599abbcad13dfe71693_prof);

        
        $__internal_d3cbd7ae5235dadca0d827800491fe77ac7df3047cc3ed669c748a7e495f110a->leave($__internal_d3cbd7ae5235dadca0d827800491fe77ac7df3047cc3ed669c748a7e495f110a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\yolunicorn\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
