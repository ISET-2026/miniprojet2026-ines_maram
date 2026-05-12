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

/* Favoris/index.html.twig */
class __TwigTemplate_c7053a546127d77bb3d72062812fe12e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Favoris/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Favoris/index.html.twig"));

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

        yield "Mes Favoris
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
        yield "
\t<div class=\"page-title-area page-title-img-one\">
\t\t<div class=\"container\">
\t\t\t<div class=\"page-title-item\">
\t\t\t\t<h2>Mes Favoris</h2>
\t\t\t\t<ul>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_accueil");
        yield "\">Home</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<i class='bx bx-chevron-right'></i>
\t\t\t\t\t</li>
\t\t\t\t\t<li>Favoris</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"container py-5 mt-5\">
\t\t<h1 class=\"fw-bold mb-4\">⭐ Mes recettes favorites</h1>

\t\t<div class=\"row g-4\">
\t\t\t";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["recettes"]) || array_key_exists("recettes", $context) ? $context["recettes"] : (function () { throw new RuntimeError('Variable "recettes" does not exist.', 27, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["recette"]) {
            // line 28
            yield "\t\t\t\t<div class=\"col-xl-4 col-lg-4 col-md-6\">
\t\t\t\t\t<div class=\"card h-100 border-0 shadow-sm rounded-4 overflow-hidden position-relative hover-shadow transition\">

\t\t\t\t\t\t<img src=\"";
            // line 31
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "imageName", [], "any", false, false, false, 31)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "imageName", [], "any", false, false, false, 31))), "html", null, true)) : ("https://via.placeholder.com/400x250?text=Recette"));
            yield "\" class=\"card-img-top\" style=\"height: 220px; object-fit: cover;\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "titre", [], "any", false, false, false, 31), "html", null, true);
            yield "\">

\t\t\t\t\t\t<div class=\"position-absolute top-0 end-0 m-2\" style=\"z-index: 10;\">
\t\t\t\t\t\t\t<a href=\"";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("favoris_remove", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "id", [], "any", false, false, false, 34)]), "html", null, true);
            yield "\" class=\"btn btn-light rounded-circle shadow-sm\" title=\"Retirer des favoris\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-star text-warning fa-lg\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"card-body d-flex flex-column\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "titre", [], "any", false, false, false, 40), "html", null, true);
            yield "</h5>

\t\t\t\t\t\t\t<div class=\"mb-2\">
\t\t\t\t\t\t\t\t";
            // line 43
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "difficulte", [], "any", false, false, false, 43) == "facile")) {
                // line 44
                yield "\t\t\t\t\t\t\t\t\t<span class=\"badge bg-success\">🟢 Facile</span>
\t\t\t\t\t\t\t\t";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 45
$context["recette"], "difficulte", [], "any", false, false, false, 45) == "moyen")) {
                // line 46
                yield "\t\t\t\t\t\t\t\t\t<span class=\"badge bg-warning\">🟡 Moyen</span>
\t\t\t\t\t\t\t\t";
            } else {
                // line 48
                yield "\t\t\t\t\t\t\t\t\t<span class=\"badge bg-danger\">🔴 Difficile</span>
\t\t\t\t\t\t\t\t";
            }
            // line 50
            yield "\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"mt-auto pt-3 border-top d-flex justify-content-between text-muted small\">
\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t<i class=\"far fa-clock\"></i>
\t\t\t\t\t\t\t\t\t";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "tempsPreparation", [], "any", false, false, false, 55) + CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "tempsCuisson", [], "any", false, false, false, 55)), "html", null, true);
            yield "
\t\t\t\t\t\t\t\t\tmin</span>
\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-users text-success\"></i>
\t\t\t\t\t\t\t\t\t";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "nbPersonnes", [], "any", false, false, false, 59), "html", null, true);
            yield "
\t\t\t\t\t\t\t\t\tpers.</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<a href=\"";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_recette_detail", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "id", [], "any", false, false, false, 64)]), "html", null, true);
            yield "\" class=\"stretched-link\" style=\"z-index: 1;\"></a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
            $context['_iterated'] = true;
        }
        // line 67
        if (!$context['_iterated']) {
            // line 68
            yield "\t\t\t\t<div class=\"col-12 text-center py-5\">
\t\t\t\t\t<i class=\"far fa-star fa-3x text-muted mb-3 d-block\"></i>
\t\t\t\t\t<p class=\"text-muted fs-4\">Aucune recette favorite pour l'instant.</p>
\t\t\t\t\t<a href=\"";
            // line 71
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_recettes");
            yield "\" class=\"btn btn-success rounded-pill px-4\">
\t\t\t\t\t\tDécouvrir des recettes
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['recette'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        yield "\t\t</div>
\t</div>

\t<style>
\t\t.transition {
\t\t\ttransition: all 0.3s ease;
\t\t}
\t\t.hover-shadow:hover {
\t\t\ttransform: translateY(-8px);
\t\t\tbox-shadow: 0 1rem 2rem rgba(0, 0, 0, .12) !important;
\t\t}
\t</style>

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
        return "Favoris/index.html.twig";
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
        return array (  224 => 76,  213 => 71,  208 => 68,  206 => 67,  198 => 64,  190 => 59,  183 => 55,  176 => 50,  172 => 48,  168 => 46,  166 => 45,  163 => 44,  161 => 43,  155 => 40,  146 => 34,  138 => 31,  133 => 28,  128 => 27,  110 => 12,  101 => 5,  88 => 4,  64 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Mes Favoris
{% endblock %}
{% block body %}

\t<div class=\"page-title-area page-title-img-one\">
\t\t<div class=\"container\">
\t\t\t<div class=\"page-title-item\">
\t\t\t\t<h2>Mes Favoris</h2>
\t\t\t\t<ul>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"{{ path('app_accueil') }}\">Home</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<i class='bx bx-chevron-right'></i>
\t\t\t\t\t</li>
\t\t\t\t\t<li>Favoris</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"container py-5 mt-5\">
\t\t<h1 class=\"fw-bold mb-4\">⭐ Mes recettes favorites</h1>

\t\t<div class=\"row g-4\">
\t\t\t{% for recette in recettes %}
\t\t\t\t<div class=\"col-xl-4 col-lg-4 col-md-6\">
\t\t\t\t\t<div class=\"card h-100 border-0 shadow-sm rounded-4 overflow-hidden position-relative hover-shadow transition\">

\t\t\t\t\t\t<img src=\"{{ recette.imageName ? asset('uploads/' ~ recette.imageName) : 'https://via.placeholder.com/400x250?text=Recette' }}\" class=\"card-img-top\" style=\"height: 220px; object-fit: cover;\" alt=\"{{ recette.titre }}\">

\t\t\t\t\t\t<div class=\"position-absolute top-0 end-0 m-2\" style=\"z-index: 10;\">
\t\t\t\t\t\t\t<a href=\"{{ path('favoris_remove', {id: recette.id}) }}\" class=\"btn btn-light rounded-circle shadow-sm\" title=\"Retirer des favoris\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-star text-warning fa-lg\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"card-body d-flex flex-column\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">{{ recette.titre }}</h5>

\t\t\t\t\t\t\t<div class=\"mb-2\">
\t\t\t\t\t\t\t\t{% if recette.difficulte == 'facile' %}
\t\t\t\t\t\t\t\t\t<span class=\"badge bg-success\">🟢 Facile</span>
\t\t\t\t\t\t\t\t{% elseif recette.difficulte == 'moyen' %}
\t\t\t\t\t\t\t\t\t<span class=\"badge bg-warning\">🟡 Moyen</span>
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t<span class=\"badge bg-danger\">🔴 Difficile</span>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"mt-auto pt-3 border-top d-flex justify-content-between text-muted small\">
\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t<i class=\"far fa-clock\"></i>
\t\t\t\t\t\t\t\t\t{{ recette.tempsPreparation + recette.tempsCuisson }}
\t\t\t\t\t\t\t\t\tmin</span>
\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-users text-success\"></i>
\t\t\t\t\t\t\t\t\t{{ recette.nbPersonnes }}
\t\t\t\t\t\t\t\t\tpers.</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<a href=\"{{ path('app_recette_detail', {id: recette.id}) }}\" class=\"stretched-link\" style=\"z-index: 1;\"></a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t{% else %}
\t\t\t\t<div class=\"col-12 text-center py-5\">
\t\t\t\t\t<i class=\"far fa-star fa-3x text-muted mb-3 d-block\"></i>
\t\t\t\t\t<p class=\"text-muted fs-4\">Aucune recette favorite pour l'instant.</p>
\t\t\t\t\t<a href=\"{{ path('app_recettes') }}\" class=\"btn btn-success rounded-pill px-4\">
\t\t\t\t\t\tDécouvrir des recettes
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t{% endfor %}
\t\t</div>
\t</div>

\t<style>
\t\t.transition {
\t\t\ttransition: all 0.3s ease;
\t\t}
\t\t.hover-shadow:hover {
\t\t\ttransform: translateY(-8px);
\t\t\tbox-shadow: 0 1rem 2rem rgba(0, 0, 0, .12) !important;
\t\t}
\t</style>

{% endblock %}
", "Favoris/index.html.twig", "/home/useradm/miniprojet2026-ines_maram/templates/Favoris/index.html.twig");
    }
}
