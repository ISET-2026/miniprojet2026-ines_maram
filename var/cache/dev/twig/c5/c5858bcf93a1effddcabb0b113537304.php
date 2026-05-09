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

/* recettes/detail.html.twig */
class __TwigTemplate_9d8b19c22540a6e73cdcfca51a3da33e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recettes/detail.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recettes/detail.html.twig"));

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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recette"]) || array_key_exists("recette", $context) ? $context["recette"] : (function () { throw new RuntimeError('Variable "recette" does not exist.', 3, $this->source); })()), "titre", [], "any", false, false, false, 3), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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
        yield "<div class=\"container mt-4\">

    <div class=\"rounded-4 overflow-hidden shadow-sm\">

        ";
        // line 11
        $context["imagePath"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["recette"]) || array_key_exists("recette", $context) ? $context["recette"] : (function () { throw new RuntimeError('Variable "recette" does not exist.', 11, $this->source); })()), "imageName", [], "any", false, false, false, 11)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source,         // line 12
(isset($context["recette"]) || array_key_exists("recette", $context) ? $context["recette"] : (function () { throw new RuntimeError('Variable "recette" does not exist.', 12, $this->source); })()), "imageName", [], "any", false, false, false, 12)))) : ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/default-banner.jpg")));
        // line 14
        yield "
        <img src=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["imagePath"]) || array_key_exists("imagePath", $context) ? $context["imagePath"] : (function () { throw new RuntimeError('Variable "imagePath" does not exist.', 15, $this->source); })()), "html", null, true);
        yield "\" 
            alt=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recette"]) || array_key_exists("recette", $context) ? $context["recette"] : (function () { throw new RuntimeError('Variable "recette" does not exist.', 16, $this->source); })()), "titre", [], "any", false, false, false, 16), "html", null, true);
        yield "\" 
            class=\"img-fluid w-100\"
            style=\"max-height: 450px; object-fit: cover;\">

    </div>

    <div class=\"mt-3\">
        <h1 class=\"fw-bold\">";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recette"]) || array_key_exists("recette", $context) ? $context["recette"] : (function () { throw new RuntimeError('Variable "recette" does not exist.', 23, $this->source); })()), "titre", [], "any", false, false, false, 23), "html", null, true);
        yield "</h1>

        <p class=\"text-muted\">
            <a href=\"";
        // line 26
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_recettes");
        yield "\">Recipes</a>
            / ";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recette"]) || array_key_exists("recette", $context) ? $context["recette"] : (function () { throw new RuntimeError('Variable "recette" does not exist.', 27, $this->source); })()), "titre", [], "any", false, false, false, 27), "html", null, true);
        yield "
        </p>
    </div>

</div>
<div class=\"container my-5\">

    <div class=\"row g-4\">

        ";
        // line 37
        yield "        <div class=\"col-lg-4\">

            <div class=\"card shadow-sm border-0 rounded-4 mb-4\">
                <div class=\"card-body\">

                    <h5 class=\"fw-bold mb-3\">🛒 Ingredients</h5>

                    <ul class=\"list-group list-group-flush mb-3\">
                        ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recette"]) || array_key_exists("recette", $context) ? $context["recette"] : (function () { throw new RuntimeError('Variable "recette" does not exist.', 45, $this->source); })()), "ingredients", [], "any", false, false, false, 45));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["ingredient"]) {
            // line 46
            yield "                            <li class=\"list-group-item d-flex justify-content-between\">
                                <span>";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ingredient"], "nom", [], "any", false, false, false, 47), "html", null, true);
            yield "</span>
                                <span class=\"badge bg-light text-dark\">";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ingredient"], "quantite", [], "any", false, false, false, 48), "html", null, true);
            yield "</span>
                            </li>
                        ";
            $context['_iterated'] = true;
        }
        // line 50
        if (!$context['_iterated']) {
            // line 51
            yield "                            <li class=\"list-group-item\">No ingredients</li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['ingredient'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        yield "                    </ul>

                    <a href=\"";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ingredient_nouveau", ["recette_id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["recette"]) || array_key_exists("recette", $context) ? $context["recette"] : (function () { throw new RuntimeError('Variable "recette" does not exist.', 55, $this->source); })()), "id", [], "any", false, false, false, 55)]), "html", null, true);
        yield "\"
                       class=\"btn btn-outline-primary w-100\">
                        + Add Ingredient
                    </a>

                </div>
            </div>

            <div class=\"card shadow-sm border-0 rounded-4\">
                <div class=\"card-body\">

                    <h6 class=\"fw-bold\">📌 Details</h6>

                    <p class=\"mb-1\"><strong>Category:</strong> ";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["recette"]) || array_key_exists("recette", $context) ? $context["recette"] : (function () { throw new RuntimeError('Variable "recette" does not exist.', 68, $this->source); })()), "categorie", [], "any", false, false, false, 68), "nom", [], "any", false, false, false, 68), "html", null, true);
        yield "</p>

                    <p class=\"mb-1\">
                        <strong>Difficulty:</strong>
                        ";
        // line 72
        yield $this->extensions['App\Twig\RecipeHubExtension']->getStars(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recette"]) || array_key_exists("recette", $context) ? $context["recette"] : (function () { throw new RuntimeError('Variable "recette" does not exist.', 72, $this->source); })()), "difficulte", [], "any", false, false, false, 72));
        yield "
                    </p>

                    <p class=\"mb-1\">
                        <strong>Prep:</strong> ";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\RecipeHubExtension']->formatCookingTime(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recette"]) || array_key_exists("recette", $context) ? $context["recette"] : (function () { throw new RuntimeError('Variable "recette" does not exist.', 76, $this->source); })()), "tempsPreparation", [], "any", false, false, false, 76)), "html", null, true);
        yield "
                    </p>

                    <p class=\"mb-1\">
                        <strong>Cook:</strong> ";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\RecipeHubExtension']->formatCookingTime(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recette"]) || array_key_exists("recette", $context) ? $context["recette"] : (function () { throw new RuntimeError('Variable "recette" does not exist.', 80, $this->source); })()), "tempsCuisson", [], "any", false, false, false, 80)), "html", null, true);
        yield "
                    </p>

                    <p class=\"mb-0\"><strong>People:</strong> ";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recette"]) || array_key_exists("recette", $context) ? $context["recette"] : (function () { throw new RuntimeError('Variable "recette" does not exist.', 83, $this->source); })()), "nbPersonnes", [], "any", false, false, false, 83), "html", null, true);
        yield "</p>

                </div>
            </div>

            ";
        // line 89
        yield "            <div class=\"card shadow-sm border-0 rounded-4 mt-4\">
                <div class=\"card-body\">

                    <h6 class=\"fw-bold\">🏷 Tags</h6>

                    <div class=\"d-flex flex-wrap gap-2 mt-2\">
                        ";
        // line 95
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recette"]) || array_key_exists("recette", $context) ? $context["recette"] : (function () { throw new RuntimeError('Variable "recette" does not exist.', 95, $this->source); })()), "tags", [], "any", false, false, false, 95));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 96
            yield "                            <span class=\"badge rounded-pill bg-primary px-3 py-2\">
                                #";
            // line 97
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "nom", [], "any", false, false, false, 97), "html", null, true);
            yield "
                            </span>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['tag'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        yield "                    </div>

                </div>
            </div>

        </div>

        ";
        // line 108
        yield "        <div class=\"col-lg-8\">

            <div class=\"card shadow-sm border-0 rounded-4 mb-4\">
                <div class=\"card-body\">

                    <h4 class=\"fw-bold mb-3\">📖 Description</h4>
                    <p class=\"text-muted\" style=\"white-space: pre-line;\">
                        ";
        // line 115
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recette"]) || array_key_exists("recette", $context) ? $context["recette"] : (function () { throw new RuntimeError('Variable "recette" does not exist.', 115, $this->source); })()), "description", [], "any", false, false, false, 115), "html", null, true);
        yield "
                    </p>

                    <hr>

                    <h4 class=\"fw-bold mb-3\">👨‍🍳 Instructions</h4>
                    <p style=\"white-space: pre-line;\">
                        ";
        // line 122
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recette"]) || array_key_exists("recette", $context) ? $context["recette"] : (function () { throw new RuntimeError('Variable "recette" does not exist.', 122, $this->source); })()), "instructions", [], "any", false, false, false, 122), "html", null, true);
        yield "
                    </p>

                </div>
            </div>

            <div class=\"card shadow-sm border-0 rounded-4\">
                <div class=\"card-body d-flex justify-content-between align-items-center\">

                    <div>
                        <p class=\"mb-1\">
                            <strong>Author:</strong>
                            ";
        // line 134
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["recette"]) || array_key_exists("recette", $context) ? $context["recette"] : (function () { throw new RuntimeError('Variable "recette" does not exist.', 134, $this->source); })()), "auteur", [], "any", false, false, false, 134)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["recette"]) || array_key_exists("recette", $context) ? $context["recette"] : (function () { throw new RuntimeError('Variable "recette" does not exist.', 134, $this->source); })()), "auteur", [], "any", false, false, false, 134), "email", [], "any", false, false, false, 134), "html", null, true)) : ("Unknown"));
        yield "
                        </p>

                        <small class=\"text-muted\">
                            ";
        // line 138
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\RecipeHubExtension']->formatTimeAgo(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recette"]) || array_key_exists("recette", $context) ? $context["recette"] : (function () { throw new RuntimeError('Variable "recette" does not exist.', 138, $this->source); })()), "dateCreation", [], "any", false, false, false, 138)), "html", null, true);
        yield "
                        </small>
                    </div>

                    <a href=\"";
        // line 142
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_recettes");
        yield "\" class=\"btn btn-outline-secondary\">
                        ← Back
                    </a>

                </div>
            </div>

        </div>

    </div>
</div>

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
        return "recettes/detail.html.twig";
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
        return array (  322 => 142,  315 => 138,  308 => 134,  293 => 122,  283 => 115,  274 => 108,  265 => 100,  256 => 97,  253 => 96,  249 => 95,  241 => 89,  233 => 83,  227 => 80,  220 => 76,  213 => 72,  206 => 68,  190 => 55,  186 => 53,  179 => 51,  177 => 50,  170 => 48,  166 => 47,  163 => 46,  158 => 45,  148 => 37,  136 => 27,  132 => 26,  126 => 23,  116 => 16,  112 => 15,  109 => 14,  107 => 12,  106 => 11,  100 => 7,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ recette.titre }}{% endblock %}

{% block body %}
{# HERO IMAGE EN HAUT #}
<div class=\"container mt-4\">

    <div class=\"rounded-4 overflow-hidden shadow-sm\">

        {% set imagePath = recette.imageName 
            ? asset('uploads/' ~ recette.imageName) 
            : asset('img/default-banner.jpg') %}

        <img src=\"{{ imagePath }}\" 
            alt=\"{{ recette.titre }}\" 
            class=\"img-fluid w-100\"
            style=\"max-height: 450px; object-fit: cover;\">

    </div>

    <div class=\"mt-3\">
        <h1 class=\"fw-bold\">{{ recette.titre }}</h1>

        <p class=\"text-muted\">
            <a href=\"{{ path('app_recettes') }}\">Recipes</a>
            / {{ recette.titre }}
        </p>
    </div>

</div>
<div class=\"container my-5\">

    <div class=\"row g-4\">

        {# LEFT CARD #}
        <div class=\"col-lg-4\">

            <div class=\"card shadow-sm border-0 rounded-4 mb-4\">
                <div class=\"card-body\">

                    <h5 class=\"fw-bold mb-3\">🛒 Ingredients</h5>

                    <ul class=\"list-group list-group-flush mb-3\">
                        {% for ingredient in recette.ingredients %}
                            <li class=\"list-group-item d-flex justify-content-between\">
                                <span>{{ ingredient.nom }}</span>
                                <span class=\"badge bg-light text-dark\">{{ ingredient.quantite }}</span>
                            </li>
                        {% else %}
                            <li class=\"list-group-item\">No ingredients</li>
                        {% endfor %}
                    </ul>

                    <a href=\"{{ path('app_ingredient_nouveau', {'recette_id': recette.id}) }}\"
                       class=\"btn btn-outline-primary w-100\">
                        + Add Ingredient
                    </a>

                </div>
            </div>

            <div class=\"card shadow-sm border-0 rounded-4\">
                <div class=\"card-body\">

                    <h6 class=\"fw-bold\">📌 Details</h6>

                    <p class=\"mb-1\"><strong>Category:</strong> {{ recette.categorie.nom }}</p>

                    <p class=\"mb-1\">
                        <strong>Difficulty:</strong>
                        {{ difficulty_stars(recette.difficulte) }}
                    </p>

                    <p class=\"mb-1\">
                        <strong>Prep:</strong> {{ recette.tempsPreparation|cooking_time_format }}
                    </p>

                    <p class=\"mb-1\">
                        <strong>Cook:</strong> {{ recette.tempsCuisson|cooking_time_format }}
                    </p>

                    <p class=\"mb-0\"><strong>People:</strong> {{ recette.nbPersonnes }}</p>

                </div>
            </div>

            {# TAGS #}
            <div class=\"card shadow-sm border-0 rounded-4 mt-4\">
                <div class=\"card-body\">

                    <h6 class=\"fw-bold\">🏷 Tags</h6>

                    <div class=\"d-flex flex-wrap gap-2 mt-2\">
                        {% for tag in recette.tags %}
                            <span class=\"badge rounded-pill bg-primary px-3 py-2\">
                                #{{ tag.nom }}
                            </span>
                        {% endfor %}
                    </div>

                </div>
            </div>

        </div>

        {# RIGHT CONTENT #}
        <div class=\"col-lg-8\">

            <div class=\"card shadow-sm border-0 rounded-4 mb-4\">
                <div class=\"card-body\">

                    <h4 class=\"fw-bold mb-3\">📖 Description</h4>
                    <p class=\"text-muted\" style=\"white-space: pre-line;\">
                        {{ recette.description }}
                    </p>

                    <hr>

                    <h4 class=\"fw-bold mb-3\">👨‍🍳 Instructions</h4>
                    <p style=\"white-space: pre-line;\">
                        {{ recette.instructions }}
                    </p>

                </div>
            </div>

            <div class=\"card shadow-sm border-0 rounded-4\">
                <div class=\"card-body d-flex justify-content-between align-items-center\">

                    <div>
                        <p class=\"mb-1\">
                            <strong>Author:</strong>
                            {{ recette.auteur ? recette.auteur.email : 'Unknown' }}
                        </p>

                        <small class=\"text-muted\">
                            {{ recette.dateCreation|time_ago }}
                        </small>
                    </div>

                    <a href=\"{{ path('app_recettes') }}\" class=\"btn btn-outline-secondary\">
                        ← Back
                    </a>

                </div>
            </div>

        </div>

    </div>
</div>

{% endblock %}", "recettes/detail.html.twig", "/home/vboxuser/Documents/miniprojet2026-ines_maram/templates/recettes/detail.html.twig");
    }
}
