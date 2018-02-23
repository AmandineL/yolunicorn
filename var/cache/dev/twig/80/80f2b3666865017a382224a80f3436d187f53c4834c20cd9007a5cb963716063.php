<?php

/* user/viewUser.html.twig */
class __TwigTemplate_c20c54c12f5f7cf4440c314a598dafd3a55960cd5d8e62ad46355f3961d9bcc3 extends Twig_Template
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
        $__internal_99df59b767d08a93c71ca4619370b5249048ce47d7c0b8bcd4ea427f058a93b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99df59b767d08a93c71ca4619370b5249048ce47d7c0b8bcd4ea427f058a93b5->enter($__internal_99df59b767d08a93c71ca4619370b5249048ce47d7c0b8bcd4ea427f058a93b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/viewUser.html.twig"));

        $__internal_66d3fc5a90cd99525377c6bd551bc6642f04cb0a40f63f007273fb70c0870433 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66d3fc5a90cd99525377c6bd551bc6642f04cb0a40f63f007273fb70c0870433->enter($__internal_66d3fc5a90cd99525377c6bd551bc6642f04cb0a40f63f007273fb70c0870433_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/viewUser.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Document</title>
</head>
<body>
    <h1>Info USer :</h1>
        <p>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "nom", array()), "html", null, true);
        echo "</p>
        <p>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "prenom", array()), "html", null, true);
        echo "</p>
        <p>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "age", array()), "html", null, true);
        echo " ans</p>
        <p>Email : ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
        <p>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "pseudo", array()), "html", null, true);
        echo "</p>
</body>
</html>";
        
        $__internal_99df59b767d08a93c71ca4619370b5249048ce47d7c0b8bcd4ea427f058a93b5->leave($__internal_99df59b767d08a93c71ca4619370b5249048ce47d7c0b8bcd4ea427f058a93b5_prof);

        
        $__internal_66d3fc5a90cd99525377c6bd551bc6642f04cb0a40f63f007273fb70c0870433->leave($__internal_66d3fc5a90cd99525377c6bd551bc6642f04cb0a40f63f007273fb70c0870433_prof);

    }

    public function getTemplateName()
    {
        return "user/viewUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 16,  50 => 15,  46 => 14,  42 => 13,  38 => 12,  25 => 1,);
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
    <title>Document</title>
</head>
<body>
    <h1>Info USer :</h1>
        <p>{{ user.nom }}</p>
        <p>{{ user.prenom }}</p>
        <p>{{ user.age }} ans</p>
        <p>Email : {{ user.email }}</p>
        <p>{{ user.pseudo }}</p>
</body>
</html>", "user/viewUser.html.twig", "C:\\wamp64\\www\\yolunicorn\\app\\Resources\\views\\user\\viewUser.html.twig");
    }
}
