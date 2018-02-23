<?php

/* user/infoUser.html.twig */
class __TwigTemplate_e4df78c0198e02744fb213af75daa76a1eeb82b9f02f233bb76cc3982d5a93e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ab23dd394a42633bd0b4998905b95c2144c05d9775a2e77934f873c0680efd1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab23dd394a42633bd0b4998905b95c2144c05d9775a2e77934f873c0680efd1b->enter($__internal_ab23dd394a42633bd0b4998905b95c2144c05d9775a2e77934f873c0680efd1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/infoUser.html.twig"));

        $__internal_91cabfe79493563fff7cb293e89ac49b7da8c02dcf714ac60502d295924f7ca1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91cabfe79493563fff7cb293e89ac49b7da8c02dcf714ac60502d295924f7ca1->enter($__internal_91cabfe79493563fff7cb293e89ac49b7da8c02dcf714ac60502d295924f7ca1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/infoUser.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Info User</title>
</head>
<body>
    <h1>Info USer :</h1>
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 13
            echo "        <p>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "nom", array()), "html", null, true);
            echo "</p>
        <p>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "prenom", array()), "html", null, true);
            echo "</p>
        <p>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "age", array()), "html", null, true);
            echo " ans</p>
        <p>Email : ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "</p>
        <p>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "pseudo", array()), "html", null, true);
            echo "</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "</body>
</html>";
        
        $__internal_ab23dd394a42633bd0b4998905b95c2144c05d9775a2e77934f873c0680efd1b->leave($__internal_ab23dd394a42633bd0b4998905b95c2144c05d9775a2e77934f873c0680efd1b_prof);

        
        $__internal_91cabfe79493563fff7cb293e89ac49b7da8c02dcf714ac60502d295924f7ca1->leave($__internal_91cabfe79493563fff7cb293e89ac49b7da8c02dcf714ac60502d295924f7ca1_prof);

    }

    public function getTemplateName()
    {
        return "user/infoUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 19,  59 => 17,  55 => 16,  51 => 15,  47 => 14,  42 => 13,  38 => 12,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Info User</title>
</head>
<body>
    <h1>Info USer :</h1>
    {% for user in users %}
        <p>{{ user.nom }}</p>
        <p>{{ user.prenom }}</p>
        <p>{{ user.age }} ans</p>
        <p>Email : {{ user.email }}</p>
        <p>{{ user.pseudo }}</p>
    {% endfor %}
</body>
</html>", "user/infoUser.html.twig", "C:\\wamp64\\www\\yolunicorn\\app\\Resources\\views\\user\\infoUser.html.twig");
    }
}
