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

/* Categorie/index.html.twig */
class __TwigTemplate_f1aebf00f8b9bbdad9de0959f05d0c3e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Categorie/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Categorie/index.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        yield "Categories
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        // line 7
        yield "
\t<div class=\"container py-5 mt-5\">

\t\t<div class=\"d-flex justify-content-between align-items-center mb-4\">
\t\t\t<div>
\t\t\t\t<h1 class=\"display-5 fw-bold mb-0\">Catégories</h1>
\t\t\t\t<p class=\"text-muted\">";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 13, $this->source); })())), "html", null, true);
        yield "
\t\t\t\t\tcatégories</p>
\t\t\t</div>
\t\t\t";
        // line 16
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 17
            yield "\t\t\t\t<a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categorie_nouvelle");
            yield "\" class=\"btn btn-primary px-4 py-2 rounded-pill\">
\t\t\t\t\t+ Nouvelle catégorie
\t\t\t\t</a>
\t\t\t";
        }
        // line 21
        yield "\t\t</div>

\t\t<hr class=\"mb-5\">


\t\t<div class=\"card shadow-sm border-0 rounded-3\">
\t\t\t<div class=\"table-responsive\">
\t\t\t\t<table class=\"table table-hover align-middle mb-0\">
\t\t\t\t\t<thead class=\"bg-light text-uppercase small fw-bold text-muted\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th class=\"ps-4 py-3\">Icône</th>
\t\t\t\t\t\t\t<th class=\"py-3\">Nom</th>
\t\t\t\t\t\t\t<th class=\"py-3\">Description</th>
\t\t\t\t\t\t\t";
        // line 34
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CUISINIER"))) {
            // line 35
            yield "\t\t\t\t\t\t\t\t<th class=\"text-end pe-4 py-3\">Actions</th>
\t\t\t\t\t\t\t";
        }
        // line 37
        yield "\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 40, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 41
            yield "\t\t\t\t\t\t\t<tr style=\"height: 80px;\">
\t\t\t\t\t\t\t\t<td class=\"ps-4\">
\t\t\t\t\t\t\t\t\t<i class=\"";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "icone", [], "any", false, false, false, 43), "html", null, true);
            yield "\"></i>

\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<span class=\"fw-bold text-dark\">";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "nom", [], "any", false, false, false, 47), "html", null, true);
            yield "</span>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<span class=\"text-muted\">";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "description", [], "any", false, false, false, 50), 0, 60), "html", null, true);
            yield "...</span>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"text-end pe-4\">
\t\t\t\t\t\t\t\t\t";
            // line 53
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 54
                yield "\t\t\t\t\t\t\t\t\t\t<a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tagrecettes_supprimer", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "id", [], "any", false, false, false, 54)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-outline-danger\" onclick=\"return confirm('Etes-vous sûr ?')\">
\t\t\t\t\t\t\t\t\t\t\tsupprimer
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t";
            }
            // line 58
            yield "\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        // line 60
        if (!$context['_iterated']) {
            // line 61
            yield "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td colspan=\"4\" class=\"text-center py-5 text-muted\">
\t\t\t\t\t\t\t\t\tAucune catégorie trouvée.
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['cat'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        yield "\t\t\t\t\t</tbody>
\t\t\t\t</table>


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
        return "Categorie/index.html.twig";
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
        return array (  208 => 67,  197 => 61,  195 => 60,  189 => 58,  181 => 54,  179 => 53,  173 => 50,  167 => 47,  160 => 43,  156 => 41,  151 => 40,  146 => 37,  142 => 35,  140 => 34,  125 => 21,  117 => 17,  115 => 16,  109 => 13,  101 => 7,  88 => 6,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Categories
{% endblock %}

{% block body %}

\t<div class=\"container py-5 mt-5\">

\t\t<div class=\"d-flex justify-content-between align-items-center mb-4\">
\t\t\t<div>
\t\t\t\t<h1 class=\"display-5 fw-bold mb-0\">Catégories</h1>
\t\t\t\t<p class=\"text-muted\">{{ categories|length }}
\t\t\t\t\tcatégories</p>
\t\t\t</div>
\t\t\t{% if is_granted('ROLE_ADMIN') %}
\t\t\t\t<a href=\"{{ path('app_categorie_nouvelle') }}\" class=\"btn btn-primary px-4 py-2 rounded-pill\">
\t\t\t\t\t+ Nouvelle catégorie
\t\t\t\t</a>
\t\t\t{% endif %}
\t\t</div>

\t\t<hr class=\"mb-5\">


\t\t<div class=\"card shadow-sm border-0 rounded-3\">
\t\t\t<div class=\"table-responsive\">
\t\t\t\t<table class=\"table table-hover align-middle mb-0\">
\t\t\t\t\t<thead class=\"bg-light text-uppercase small fw-bold text-muted\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th class=\"ps-4 py-3\">Icône</th>
\t\t\t\t\t\t\t<th class=\"py-3\">Nom</th>
\t\t\t\t\t\t\t<th class=\"py-3\">Description</th>
\t\t\t\t\t\t\t{% if is_granted('ROLE_ADMIN') or is_granted('ROLE_CUISINIER') %}
\t\t\t\t\t\t\t\t<th class=\"text-end pe-4 py-3\">Actions</th>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t{% for cat in categories %}
\t\t\t\t\t\t\t<tr style=\"height: 80px;\">
\t\t\t\t\t\t\t\t<td class=\"ps-4\">
\t\t\t\t\t\t\t\t\t<i class=\"{{ cat.icone }}\"></i>

\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<span class=\"fw-bold text-dark\">{{ cat.nom }}</span>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<span class=\"text-muted\">{{ cat.description|slice(0, 60) }}...</span>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"text-end pe-4\">
\t\t\t\t\t\t\t\t\t{% if is_granted('ROLE_ADMIN') %}
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_tagrecettes_supprimer', {'id': cat.id}) }}\" class=\"btn btn-sm btn-outline-danger\" onclick=\"return confirm('Etes-vous sûr ?')\">
\t\t\t\t\t\t\t\t\t\t\tsupprimer
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td colspan=\"4\" class=\"text-center py-5 text-muted\">
\t\t\t\t\t\t\t\t\tAucune catégorie trouvée.
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</tbody>
\t\t\t\t</table>


\t\t\t</div>
\t\t</div>

\t</div>
{% endblock %}
", "Categorie/index.html.twig", "/home/useradm/miniprojet2026-ines_maram/templates/Categorie/index.html.twig");
    }
}
