<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* ingredient/nouveau.html.twig */
class __TwigTemplate_1781686f24237a2486aaf42298cb720d extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ingredient/nouveau.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ingredient/nouveau.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Ajouter un ingrédient
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        yield "\t<div class=\"container mt-4\">
\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-md-6\">

\t\t\t\t";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "flashes", ["success"], "method", false, false, false, 9));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 10
            yield "\t\t\t\t\t<div class=\"alert alert-success\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        yield "
\t\t\t\t<div class=\"card p-4 shadow\">
\t\t\t\t\t<div class=\"alert alert-info\">
\t\t\t\t\t\tRecette :
\t\t\t\t\t\t<strong>";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recette"]) || array_key_exists("recette", $context) ? $context["recette"] : (function () { throw new RuntimeError('Variable "recette" does not exist.', 16, $this->source); })()), "titre", [], "any", false, false, false, 16), "html", null, true);
        yield "</strong>
\t\t\t\t\t</div>

\t\t\t\t\t<h3 class=\"text-center mb-4\">➕ Ajouter un ingrédient</h3>

\t\t\t\t\t";
        // line 21
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), 'form_start');
        yield "
\t\t\t\t\t<div class=\"mb-3\">";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "nom", [], "any", false, false, false, 22), 'row');
        yield "</div>
\t\t\t\t\t<div class=\"mb-3\">";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "quantite", [], "any", false, false, false, 23), 'row');
        yield "</div>
\t\t\t\t\t";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "enregistrer", [], "any", false, false, false, 24), 'row');
        yield "
\t\t\t\t\t";
        // line 25
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), 'form_end');
        yield "

\t\t\t\t\t";
        // line 27
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["recette"]) || array_key_exists("recette", $context) ? $context["recette"] : (function () { throw new RuntimeError('Variable "recette" does not exist.', 27, $this->source); })()), "ingredients", [], "any", false, false, false, 27)) > 0)) {
            // line 28
            yield "\t\t\t\t\t\t<div class=\"mt-4\">
\t\t\t\t\t\t\t<h6 class=\"fw-bold\">Ingrédients ajoutés :</h6>
\t\t\t\t\t\t\t<ul class=\"list-group mb-3\">
\t\t\t\t\t\t\t\t";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recette"]) || array_key_exists("recette", $context) ? $context["recette"] : (function () { throw new RuntimeError('Variable "recette" does not exist.', 31, $this->source); })()), "ingredients", [], "any", false, false, false, 31));
            foreach ($context['_seq'] as $context["_key"] => $context["ingredient"]) {
                // line 32
                yield "\t\t\t\t\t\t\t\t\t<li class=\"list-group-item d-flex justify-content-between\">
\t\t\t\t\t\t\t\t\t\t<span>";
                // line 33
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ingredient"], "nom", [], "any", false, false, false, 33), "html", null, true);
                yield "</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted\">";
                // line 34
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ingredient"], "quantite", [], "any", false, false, false, 34), "html", null, true);
                yield "</span>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['ingredient'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            yield "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 40
        yield "
\t\t\t\t\t<a href=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_recette_detail", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["recette"]) || array_key_exists("recette", $context) ? $context["recette"] : (function () { throw new RuntimeError('Variable "recette" does not exist.', 41, $this->source); })()), "id", [], "any", false, false, false, 41)]), "html", null, true);
        yield "\" class=\"btn btn-success w-100 mt-2\">
\t\t\t\t\t\t✅ Terminer — Voir la recette
\t\t\t\t\t</a>

\t\t\t\t\t<a href=\"";
        // line 45
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_recettes");
        yield "\" class=\"btn btn-link mt-2\">← Retour aux recettes</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "ingredient/nouveau.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  197 => 45,  190 => 41,  187 => 40,  182 => 37,  173 => 34,  169 => 33,  166 => 32,  162 => 31,  157 => 28,  155 => 27,  150 => 25,  146 => 24,  142 => 23,  138 => 22,  134 => 21,  126 => 16,  120 => 12,  111 => 10,  107 => 9,  101 => 5,  88 => 4,  64 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Ajouter un ingrédient
{% endblock %}
{% block body %}
\t<div class=\"container mt-4\">
\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-md-6\">

\t\t\t\t{% for message in app.flashes('success') %}
\t\t\t\t\t<div class=\"alert alert-success\">{{ message }}</div>
\t\t\t\t{% endfor %}

\t\t\t\t<div class=\"card p-4 shadow\">
\t\t\t\t\t<div class=\"alert alert-info\">
\t\t\t\t\t\tRecette :
\t\t\t\t\t\t<strong>{{ recette.titre }}</strong>
\t\t\t\t\t</div>

\t\t\t\t\t<h3 class=\"text-center mb-4\">➕ Ajouter un ingrédient</h3>

\t\t\t\t\t{{ form_start(form) }}
\t\t\t\t\t<div class=\"mb-3\">{{ form_row(form.nom) }}</div>
\t\t\t\t\t<div class=\"mb-3\">{{ form_row(form.quantite) }}</div>
\t\t\t\t\t{{ form_row(form.enregistrer) }}
\t\t\t\t\t{{ form_end(form) }}

\t\t\t\t\t{% if recette.ingredients|length > 0 %}
\t\t\t\t\t\t<div class=\"mt-4\">
\t\t\t\t\t\t\t<h6 class=\"fw-bold\">Ingrédients ajoutés :</h6>
\t\t\t\t\t\t\t<ul class=\"list-group mb-3\">
\t\t\t\t\t\t\t\t{% for ingredient in recette.ingredients %}
\t\t\t\t\t\t\t\t\t<li class=\"list-group-item d-flex justify-content-between\">
\t\t\t\t\t\t\t\t\t\t<span>{{ ingredient.nom }}</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted\">{{ ingredient.quantite }}</span>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}

\t\t\t\t\t<a href=\"{{ path('app_recette_detail', {id: recette.id}) }}\" class=\"btn btn-success w-100 mt-2\">
\t\t\t\t\t\t✅ Terminer — Voir la recette
\t\t\t\t\t</a>

\t\t\t\t\t<a href=\"{{ path('app_recettes') }}\" class=\"btn btn-link mt-2\">← Retour aux recettes</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}
", "ingredient/nouveau.html.twig", "/home/useradm/miniprojet2026-ines_maram/templates/ingredient/nouveau.html.twig");
    }
}
