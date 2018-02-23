<?php

/* film/listFilm.html.twig */
class __TwigTemplate_1589f11811213e0e6ba3e096593c8b20d30af060a360370dfba8082860f4e9f5 extends Twig_Template
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
        $__internal_ea87a1f799ec8ed8a2e0463334caf8d5159f2ebe613120da9607967daf919c6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea87a1f799ec8ed8a2e0463334caf8d5159f2ebe613120da9607967daf919c6c->enter($__internal_ea87a1f799ec8ed8a2e0463334caf8d5159f2ebe613120da9607967daf919c6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "film/listFilm.html.twig"));

        $__internal_0b80b010b4f32e82bf58e8af7cce966da7de22828e0c8550c5559a041e1cc0c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b80b010b4f32e82bf58e8af7cce966da7de22828e0c8550c5559a041e1cc0c8->enter($__internal_0b80b010b4f32e82bf58e8af7cce966da7de22828e0c8550c5559a041e1cc0c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "film/listFilm.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Film</title>
</head>
<body>
    <h1>List Info Film :</h1>
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["films"] ?? $this->getContext($context, "films")));
        foreach ($context['_seq'] as $context["_key"] => $context["film"]) {
            // line 13
            echo "        <h1>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["film"], "titre", array()), "html", null, true);
            echo "</h1>
        <p>";
            // line 14
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["film"], "annee", array()), "d/m/Y"), "html", null, true);
            echo "</p>
        <p>Acteurs : ";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["film"], "acteur", array()), "html", null, true);
            echo "</p>
        <p>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["film"], "description", array()), "html", null, true);
            echo "</p>
        <hr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['film'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "</body>
</html>";
        
        $__internal_ea87a1f799ec8ed8a2e0463334caf8d5159f2ebe613120da9607967daf919c6c->leave($__internal_ea87a1f799ec8ed8a2e0463334caf8d5159f2ebe613120da9607967daf919c6c_prof);

        
        $__internal_0b80b010b4f32e82bf58e8af7cce966da7de22828e0c8550c5559a041e1cc0c8->leave($__internal_0b80b010b4f32e82bf58e8af7cce966da7de22828e0c8550c5559a041e1cc0c8_prof);

    }

    public function getTemplateName()
    {
        return "film/listFilm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 19,  55 => 16,  51 => 15,  47 => 14,  42 => 13,  38 => 12,  25 => 1,);
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
    <title>Film</title>
</head>
<body>
    <h1>List Info Film :</h1>
    {% for film in films %}
        <h1>{{ film.titre }}</h1>
        <p>{{ film.annee|date(\"d/m/Y\") }}</p>
        <p>Acteurs : {{ film.acteur }}</p>
        <p>{{ film.description }}</p>
        <hr>
    {% endfor %}
</body>
</html>", "film/listFilm.html.twig", "C:\\wamp64\\www\\yolunicorn\\app\\Resources\\views\\film\\listFilm.html.twig");
    }
}
