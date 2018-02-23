<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c3a331ffbcd44b35a5a3fddc9a480f90a05d671ec0ed21fa5c159c8d8e41548e extends Twig_Template
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
        $__internal_789cb9caec452524e6a2e9189d6af6d1cbb2ba1812e019fe413f40b3244183d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_789cb9caec452524e6a2e9189d6af6d1cbb2ba1812e019fe413f40b3244183d5->enter($__internal_789cb9caec452524e6a2e9189d6af6d1cbb2ba1812e019fe413f40b3244183d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_6eb3e64f8713bc94054589f04bfd72cd7949bfc6e196c12234fa84bce7f8b3c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6eb3e64f8713bc94054589f04bfd72cd7949bfc6e196c12234fa84bce7f8b3c8->enter($__internal_6eb3e64f8713bc94054589f04bfd72cd7949bfc6e196c12234fa84bce7f8b3c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_789cb9caec452524e6a2e9189d6af6d1cbb2ba1812e019fe413f40b3244183d5->leave($__internal_789cb9caec452524e6a2e9189d6af6d1cbb2ba1812e019fe413f40b3244183d5_prof);

        
        $__internal_6eb3e64f8713bc94054589f04bfd72cd7949bfc6e196c12234fa84bce7f8b3c8->leave($__internal_6eb3e64f8713bc94054589f04bfd72cd7949bfc6e196c12234fa84bce7f8b3c8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2a6ef79937a07f4d3d002a8f8630df3fb35a5cc9b6de35e59a8db5550b78d038 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a6ef79937a07f4d3d002a8f8630df3fb35a5cc9b6de35e59a8db5550b78d038->enter($__internal_2a6ef79937a07f4d3d002a8f8630df3fb35a5cc9b6de35e59a8db5550b78d038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_bc52a481c48cd0dbf8145e799697e83dd8beb8b728e2e716d549d4f916741f0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc52a481c48cd0dbf8145e799697e83dd8beb8b728e2e716d549d4f916741f0e->enter($__internal_bc52a481c48cd0dbf8145e799697e83dd8beb8b728e2e716d549d4f916741f0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_bc52a481c48cd0dbf8145e799697e83dd8beb8b728e2e716d549d4f916741f0e->leave($__internal_bc52a481c48cd0dbf8145e799697e83dd8beb8b728e2e716d549d4f916741f0e_prof);

        
        $__internal_2a6ef79937a07f4d3d002a8f8630df3fb35a5cc9b6de35e59a8db5550b78d038->leave($__internal_2a6ef79937a07f4d3d002a8f8630df3fb35a5cc9b6de35e59a8db5550b78d038_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2e94c1a328a448d44315547c0e737517a6a2df3e1807d86c35899a6432226201 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e94c1a328a448d44315547c0e737517a6a2df3e1807d86c35899a6432226201->enter($__internal_2e94c1a328a448d44315547c0e737517a6a2df3e1807d86c35899a6432226201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_214ad58e61567756733f142f16378c3cb0774dac5dd81a6e1da78a37cedcb77f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_214ad58e61567756733f142f16378c3cb0774dac5dd81a6e1da78a37cedcb77f->enter($__internal_214ad58e61567756733f142f16378c3cb0774dac5dd81a6e1da78a37cedcb77f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_214ad58e61567756733f142f16378c3cb0774dac5dd81a6e1da78a37cedcb77f->leave($__internal_214ad58e61567756733f142f16378c3cb0774dac5dd81a6e1da78a37cedcb77f_prof);

        
        $__internal_2e94c1a328a448d44315547c0e737517a6a2df3e1807d86c35899a6432226201->leave($__internal_2e94c1a328a448d44315547c0e737517a6a2df3e1807d86c35899a6432226201_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8ee6f64ba63e010fdb077ef24bce593b603e1f64e9fcddcdee0c6dea70d2743e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ee6f64ba63e010fdb077ef24bce593b603e1f64e9fcddcdee0c6dea70d2743e->enter($__internal_8ee6f64ba63e010fdb077ef24bce593b603e1f64e9fcddcdee0c6dea70d2743e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3de89cf4b77b94556c388e9abf2089b2c153a36c7c3e6f502111f6a6e0cbf048 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3de89cf4b77b94556c388e9abf2089b2c153a36c7c3e6f502111f6a6e0cbf048->enter($__internal_3de89cf4b77b94556c388e9abf2089b2c153a36c7c3e6f502111f6a6e0cbf048_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3de89cf4b77b94556c388e9abf2089b2c153a36c7c3e6f502111f6a6e0cbf048->leave($__internal_3de89cf4b77b94556c388e9abf2089b2c153a36c7c3e6f502111f6a6e0cbf048_prof);

        
        $__internal_8ee6f64ba63e010fdb077ef24bce593b603e1f64e9fcddcdee0c6dea70d2743e->leave($__internal_8ee6f64ba63e010fdb077ef24bce593b603e1f64e9fcddcdee0c6dea70d2743e_prof);

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
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\yolunicorn\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
