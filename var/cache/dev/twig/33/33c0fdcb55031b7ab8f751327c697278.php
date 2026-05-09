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

        yield "Mes Favoris";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 3
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

        // line 4
        yield "
<div class=\"page-title-area page-title-img-one\">
    <div class=\"container\">
        <div class=\"page-title-item\">
            <h2>Mes Favoris</h2>
            <ul>
                <li><a href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_accueil");
        yield "\">Home</a></li>
                <li><i class='bx bx-chevron-right'></i></li>
                <li>Favoris</li>
            </ul>
        </div>
    </div>
</div>

<div class=\"container py-5 mt-5\">
    <h1 class=\"fw-bold mb-4\">⭐ Mes recettes favorites</h1>

    <div class=\"row g-4\">
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["recettes"]) || array_key_exists("recettes", $context) ? $context["recettes"] : (function () { throw new RuntimeError('Variable "recettes" does not exist.', 22, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["recette"]) {
            // line 23
            yield "            <div class=\"col-xl-4 col-lg-4 col-md-6\">
                <div class=\"card h-100 border-0 shadow-sm rounded-4 overflow-hidden position-relative hover-shadow transition\">

                    <img src=\"";
            // line 26
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "imageName", [], "any", false, false, false, 26)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "imageName", [], "any", false, false, false, 26))), "html", null, true)) : ("https://via.placeholder.com/400x250?text=Recette"));
            yield "\"
                         class=\"card-img-top\"
                         style=\"height: 220px; object-fit: cover;\"
                         alt=\"";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "titre", [], "any", false, false, false, 29), "html", null, true);
            yield "\">

                    ";
            // line 32
            yield "                    <div class=\"position-absolute top-0 end-0 m-2\" style=\"z-index: 10;\">
                        <a href=\"";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("favoris_remove", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "id", [], "any", false, false, false, 33)]), "html", null, true);
            yield "\"
                           class=\"btn btn-light rounded-circle shadow-sm\"
                           title=\"Retirer des favoris\">
                            <i class=\"fas fa-star text-warning fa-lg\"></i>
                        </a>
                    </div>

                    <div class=\"card-body d-flex flex-column\">
                        <h5 class=\"card-title\">";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "titre", [], "any", false, false, false, 41), "html", null, true);
            yield "</h5>

                        <div class=\"mb-2\">
                            ";
            // line 44
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "difficulte", [], "any", false, false, false, 44) == "facile")) {
                // line 45
                yield "                                <span class=\"badge bg-success\">🟢 Facile</span>
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 46
$context["recette"], "difficulte", [], "any", false, false, false, 46) == "moyen")) {
                // line 47
                yield "                                <span class=\"badge bg-warning\">🟡 Moyen</span>
                            ";
            } else {
                // line 49
                yield "                                <span class=\"badge bg-danger\">🔴 Difficile</span>
                            ";
            }
            // line 51
            yield "                        </div>

                        <div class=\"mt-auto pt-3 border-top d-flex justify-content-between text-muted small\">
                            <span><i class=\"far fa-clock\"></i> ";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "tempsPreparation", [], "any", false, false, false, 54) + CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "tempsCuisson", [], "any", false, false, false, 54)), "html", null, true);
            yield " min</span>
                            <span><i class=\"fas fa-users text-success\"></i> ";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "nbPersonnes", [], "any", false, false, false, 55), "html", null, true);
            yield " pers.</span>
                        </div>
                    </div>

                    <a href=\"";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_recette_detail", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "id", [], "any", false, false, false, 59)]), "html", null, true);
            yield "\"
                       class=\"stretched-link\" style=\"z-index: 1;\"></a>
                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        // line 63
        if (!$context['_iterated']) {
            // line 64
            yield "            <div class=\"col-12 text-center py-5\">
                <i class=\"far fa-star fa-3x text-muted mb-3 d-block\"></i>
                <p class=\"text-muted fs-4\">Aucune recette favorite pour l'instant.</p>
                <a href=\"";
            // line 67
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_recettes");
            yield "\" class=\"btn btn-success rounded-pill px-4\">
                    Découvrir des recettes
                </a>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['recette'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        yield "    </div>
</div>

<style>
.transition { transition: all 0.3s ease; }
.hover-shadow:hover {
    transform: translateY(-8px);
    box-shadow: 0 1rem 2rem rgba(0,0,0,.12) !important;
}
</style>

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
        return array (  222 => 72,  211 => 67,  206 => 64,  204 => 63,  195 => 59,  188 => 55,  184 => 54,  179 => 51,  175 => 49,  171 => 47,  169 => 46,  166 => 45,  164 => 44,  158 => 41,  147 => 33,  144 => 32,  139 => 29,  133 => 26,  128 => 23,  123 => 22,  108 => 10,  100 => 4,  87 => 3,  64 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Mes Favoris{% endblock %}
{% block body %}

<div class=\"page-title-area page-title-img-one\">
    <div class=\"container\">
        <div class=\"page-title-item\">
            <h2>Mes Favoris</h2>
            <ul>
                <li><a href=\"{{ path('app_accueil') }}\">Home</a></li>
                <li><i class='bx bx-chevron-right'></i></li>
                <li>Favoris</li>
            </ul>
        </div>
    </div>
</div>

<div class=\"container py-5 mt-5\">
    <h1 class=\"fw-bold mb-4\">⭐ Mes recettes favorites</h1>

    <div class=\"row g-4\">
        {% for recette in recettes %}
            <div class=\"col-xl-4 col-lg-4 col-md-6\">
                <div class=\"card h-100 border-0 shadow-sm rounded-4 overflow-hidden position-relative hover-shadow transition\">

                    <img src=\"{{ recette.imageName ? asset('uploads/' ~ recette.imageName) : 'https://via.placeholder.com/400x250?text=Recette' }}\"
                         class=\"card-img-top\"
                         style=\"height: 220px; object-fit: cover;\"
                         alt=\"{{ recette.titre }}\">

                    {# ✅ Remove from favorites button — top right corner #}
                    <div class=\"position-absolute top-0 end-0 m-2\" style=\"z-index: 10;\">
                        <a href=\"{{ path('favoris_remove', {id: recette.id}) }}\"
                           class=\"btn btn-light rounded-circle shadow-sm\"
                           title=\"Retirer des favoris\">
                            <i class=\"fas fa-star text-warning fa-lg\"></i>
                        </a>
                    </div>

                    <div class=\"card-body d-flex flex-column\">
                        <h5 class=\"card-title\">{{ recette.titre }}</h5>

                        <div class=\"mb-2\">
                            {% if recette.difficulte == 'facile' %}
                                <span class=\"badge bg-success\">🟢 Facile</span>
                            {% elseif recette.difficulte == 'moyen' %}
                                <span class=\"badge bg-warning\">🟡 Moyen</span>
                            {% else %}
                                <span class=\"badge bg-danger\">🔴 Difficile</span>
                            {% endif %}
                        </div>

                        <div class=\"mt-auto pt-3 border-top d-flex justify-content-between text-muted small\">
                            <span><i class=\"far fa-clock\"></i> {{ recette.tempsPreparation + recette.tempsCuisson }} min</span>
                            <span><i class=\"fas fa-users text-success\"></i> {{ recette.nbPersonnes }} pers.</span>
                        </div>
                    </div>

                    <a href=\"{{ path('app_recette_detail', {id: recette.id}) }}\"
                       class=\"stretched-link\" style=\"z-index: 1;\"></a>
                </div>
            </div>
        {% else %}
            <div class=\"col-12 text-center py-5\">
                <i class=\"far fa-star fa-3x text-muted mb-3 d-block\"></i>
                <p class=\"text-muted fs-4\">Aucune recette favorite pour l'instant.</p>
                <a href=\"{{ path('app_recettes') }}\" class=\"btn btn-success rounded-pill px-4\">
                    Découvrir des recettes
                </a>
            </div>
        {% endfor %}
    </div>
</div>

<style>
.transition { transition: all 0.3s ease; }
.hover-shadow:hover {
    transform: translateY(-8px);
    box-shadow: 0 1rem 2rem rgba(0,0,0,.12) !important;
}
</style>

{% endblock %}
", "Favoris/index.html.twig", "/home/vboxuser/Documents/miniprojet2026-ines_maram/templates/Favoris/index.html.twig");
    }
}
