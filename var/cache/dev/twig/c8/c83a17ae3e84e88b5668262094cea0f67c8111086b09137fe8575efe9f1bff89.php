<?php

/* user/listUser.html.twig */
class __TwigTemplate_d901c48469995a1c712b69e8ac46257112e360be2afbabd364f2f820b8e0267e extends Twig_Template
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
        $__internal_76f871be03dfaded56523965a503d0428dbf6cad557f09f33db0e7736b516aaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76f871be03dfaded56523965a503d0428dbf6cad557f09f33db0e7736b516aaf->enter($__internal_76f871be03dfaded56523965a503d0428dbf6cad557f09f33db0e7736b516aaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/listUser.html.twig"));

        $__internal_45e3d240943b9b6bcd6facc4c7f1712ce6c8759095fa31d7276acf34ef381203 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45e3d240943b9b6bcd6facc4c7f1712ce6c8759095fa31d7276acf34ef381203->enter($__internal_45e3d240943b9b6bcd6facc4c7f1712ce6c8759095fa31d7276acf34ef381203_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/listUser.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>List User Info</title>
</head>
<body>
    <h1>List Info USer :</h1>
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
        <hr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "</body>
</html>";
        
        $__internal_76f871be03dfaded56523965a503d0428dbf6cad557f09f33db0e7736b516aaf->leave($__internal_76f871be03dfaded56523965a503d0428dbf6cad557f09f33db0e7736b516aaf_prof);

        
        $__internal_45e3d240943b9b6bcd6facc4c7f1712ce6c8759095fa31d7276acf34ef381203->leave($__internal_45e3d240943b9b6bcd6facc4c7f1712ce6c8759095fa31d7276acf34ef381203_prof);

    }

    public function getTemplateName()
    {
        return "user/listUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 20,  59 => 17,  55 => 16,  51 => 15,  47 => 14,  42 => 13,  38 => 12,  25 => 1,);
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
    <title>List User Info</title>
</head>
<body>
    <h1>List Info USer :</h1>
    {% for user in users %}
        <p>{{ user.nom }}</p>
        <p>{{ user.prenom }}</p>
        <p>{{ user.age }} ans</p>
        <p>Email : {{ user.email }}</p>
        <p>{{ user.pseudo }}</p>
        <hr>
    {% endfor %}
</body>
</html>", "user/listUser.html.twig", "C:\\wamp64\\www\\yolunicorn\\app\\Resources\\views\\user\\listUser.html.twig");
    }
}
