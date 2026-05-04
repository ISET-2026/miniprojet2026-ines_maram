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

/* Recette/show.html.twig */
class __TwigTemplate_6b1eabf01d88bf02a3e734dab182bbb0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Recette/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Recette/show.html.twig"));

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

        // line 6
        yield "
<!-- Page Title -->
<div class=\"page-title-area page-title-img-two\">
    <div class=\"container\">
        <div class=\"page-title-item\">
            <h2>";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recette"]) || array_key_exists("recette", $context) ? $context["recette"] : (function () { throw new RuntimeError('Variable "recette" does not exist.', 11, $this->source); })()), "titre", [], "any", false, false, false, 11), "html", null, true);
        yield "</h2>
            <ul>
                <li><a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recette_index");
        yield "\">Recipes</a></li>
                <li><i class='bx bx-chevron-right'></i></li>
                <li>";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recette"]) || array_key_exists("recette", $context) ? $context["recette"] : (function () { throw new RuntimeError('Variable "recette" does not exist.', 15, $this->source); })()), "titre", [], "any", false, false, false, 15), "html", null, true);
        yield "</li>
            </ul>
        </div>
    </div>
</div>

<!-- Recipe Details -->
<div class=\"service-details-area pt-100 pb-70\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">

            <!-- LEFT SIDE: INGREDIENTS -->
            <div class=\"col-lg-4\">
                <div class=\"service-details-item\">

                    <h3>Ingredients</h3>

                    <ul>
                        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recette"]) || array_key_exists("recette", $context) ? $context["recette"] : (function () { throw new RuntimeError('Variable "recette" does not exist.', 33, $this->source); })()), "ingredients", [], "any", false, false, false, 33));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["ingredient"]) {
            // line 34
            yield "                            <li>
                                ";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ingredient"], "quantite", [], "any", false, false, false, 35), "html", null, true);
            yield " - ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ingredient"], "nom", [], "any", false, false, false, 35), "html", null, true);
            yield "
                            </li>
                        ";
            $context['_iterated'] = true;
        }
        // line 37
        if (!$context['_iterated']) {
            // line 38
            yield "                            <li>No ingredients</li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['ingredient'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        yield "                    </ul>

                    <hr>

                    <p><strong>Category:</strong> ";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["recette"]) || array_key_exists("recette", $context) ? $context["recette"] : (function () { throw new RuntimeError('Variable "recette" does not exist.', 44, $this->source); })()), "categorie", [], "any", false, false, false, 44), "nom", [], "any", false, false, false, 44), "html", null, true);
        yield "</p>
                    <p><strong>Difficulty:</strong> ";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recette"]) || array_key_exists("recette", $context) ? $context["recette"] : (function () { throw new RuntimeError('Variable "recette" does not exist.', 45, $this->source); })()), "difficulte", [], "any", false, false, false, 45), "html", null, true);
        yield "</p>
                    <p><strong>Preparation:</strong> ";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recette"]) || array_key_exists("recette", $context) ? $context["recette"] : (function () { throw new RuntimeError('Variable "recette" does not exist.', 46, $this->source); })()), "tempsPreparation", [], "any", false, false, false, 46), "html", null, true);
        yield " min</p>
                    ";
        // line 47
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["recette"]) || array_key_exists("recette", $context) ? $context["recette"] : (function () { throw new RuntimeError('Variable "recette" does not exist.', 47, $this->source); })()), "tempsCuisson", [], "any", false, false, false, 47)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 48
            yield "                        <p><strong>Cooking:</strong> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recette"]) || array_key_exists("recette", $context) ? $context["recette"] : (function () { throw new RuntimeError('Variable "recette" does not exist.', 48, $this->source); })()), "tempsCuisson", [], "any", false, false, false, 48), "html", null, true);
            yield " min</p>
                    ";
        }
        // line 50
        yield "                    <p><strong>People:</strong> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recette"]) || array_key_exists("recette", $context) ? $context["recette"] : (function () { throw new RuntimeError('Variable "recette" does not exist.', 50, $this->source); })()), "nbPersonnes", [], "any", false, false, false, 50), "html", null, true);
        yield "</p>

                    <!-- Tags -->
                    <h4>Tags</h4>
                    ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recette"]) || array_key_exists("recette", $context) ? $context["recette"] : (function () { throw new RuntimeError('Variable "recette" does not exist.', 54, $this->source); })()), "tags", [], "any", false, false, false, 54));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 55
            yield "                        <span class=\"badge bg-secondary\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "nom", [], "any", false, false, false, 55), "html", null, true);
            yield "</span>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['tag'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        yield "
                </div>
            </div>

            <!-- RIGHT SIDE: RECIPE CONTENT -->
            <div class=\"col-lg-8\">
                <div class=\"service-details-item\">

                    <!-- Image -->
                    ";
        // line 66
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["recette"]) || array_key_exists("recette", $context) ? $context["recette"] : (function () { throw new RuntimeError('Variable "recette" does not exist.', 66, $this->source); })()), "imageName", [], "any", false, false, false, 66)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 67
            yield "                        <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/recettes/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["recette"]) || array_key_exists("recette", $context) ? $context["recette"] : (function () { throw new RuntimeError('Variable "recette" does not exist.', 67, $this->source); })()), "imageName", [], "any", false, false, false, 67))), "html", null, true);
            yield "\" class=\"img-fluid mb-3\">
                    ";
        }
        // line 69
        yield "
                    <h2>";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recette"]) || array_key_exists("recette", $context) ? $context["recette"] : (function () { throw new RuntimeError('Variable "recette" does not exist.', 70, $this->source); })()), "titre", [], "any", false, false, false, 70), "html", null, true);
        yield "</h2>

                    <p>";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recette"]) || array_key_exists("recette", $context) ? $context["recette"] : (function () { throw new RuntimeError('Variable "recette" does not exist.', 72, $this->source); })()), "description", [], "any", false, false, false, 72), "html", null, true);
        yield "</p>

                    <hr>

                    <h3>Instructions</h3>
                    <p style=\"white-space: pre-line;\">
                        ";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recette"]) || array_key_exists("recette", $context) ? $context["recette"] : (function () { throw new RuntimeError('Variable "recette" does not exist.', 78, $this->source); })()), "instructions", [], "any", false, false, false, 78), "html", null, true);
        yield "
                    </p>

                    <hr>

                    <p>
                        <strong>Created by:</strong>
                        ";
        // line 85
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["recette"] ?? null), "auteur", [], "any", false, true, false, 85), "pseudo", [], "any", true, true, false, 85) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["recette"]) || array_key_exists("recette", $context) ? $context["recette"] : (function () { throw new RuntimeError('Variable "recette" does not exist.', 85, $this->source); })()), "auteur", [], "any", false, false, false, 85), "pseudo", [], "any", false, false, false, 85)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["recette"]) || array_key_exists("recette", $context) ? $context["recette"] : (function () { throw new RuntimeError('Variable "recette" does not exist.', 85, $this->source); })()), "auteur", [], "any", false, false, false, 85), "pseudo", [], "any", false, false, false, 85), "html", null, true)) : ("Unknown"));
        yield "
                    </p>

                    <p>
                        <strong>Date:</strong>
                        ";
        // line 90
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recette"]) || array_key_exists("recette", $context) ? $context["recette"] : (function () { throw new RuntimeError('Variable "recette" does not exist.', 90, $this->source); })()), "dateCreation", [], "any", false, false, false, 90), "Y-m-d"), "html", null, true);
        yield "
                    </p>

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
        return "Recette/show.html.twig";
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
        return array (  265 => 90,  257 => 85,  247 => 78,  238 => 72,  233 => 70,  230 => 69,  224 => 67,  222 => 66,  211 => 57,  202 => 55,  198 => 54,  190 => 50,  184 => 48,  182 => 47,  178 => 46,  174 => 45,  170 => 44,  164 => 40,  157 => 38,  155 => 37,  146 => 35,  143 => 34,  138 => 33,  117 => 15,  112 => 13,  107 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ recette.titre }}{% endblock %}

{% block body %}

<!-- Page Title -->
<div class=\"page-title-area page-title-img-two\">
    <div class=\"container\">
        <div class=\"page-title-item\">
            <h2>{{ recette.titre }}</h2>
            <ul>
                <li><a href=\"{{ path('recette_index') }}\">Recipes</a></li>
                <li><i class='bx bx-chevron-right'></i></li>
                <li>{{ recette.titre }}</li>
            </ul>
        </div>
    </div>
</div>

<!-- Recipe Details -->
<div class=\"service-details-area pt-100 pb-70\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">

            <!-- LEFT SIDE: INGREDIENTS -->
            <div class=\"col-lg-4\">
                <div class=\"service-details-item\">

                    <h3>Ingredients</h3>

                    <ul>
                        {% for ingredient in recette.ingredients %}
                            <li>
                                {{ ingredient.quantite }} - {{ ingredient.nom }}
                            </li>
                        {% else %}
                            <li>No ingredients</li>
                        {% endfor %}
                    </ul>

                    <hr>

                    <p><strong>Category:</strong> {{ recette.categorie.nom }}</p>
                    <p><strong>Difficulty:</strong> {{ recette.difficulte }}</p>
                    <p><strong>Preparation:</strong> {{ recette.tempsPreparation }} min</p>
                    {% if recette.tempsCuisson %}
                        <p><strong>Cooking:</strong> {{ recette.tempsCuisson }} min</p>
                    {% endif %}
                    <p><strong>People:</strong> {{ recette.nbPersonnes }}</p>

                    <!-- Tags -->
                    <h4>Tags</h4>
                    {% for tag in recette.tags %}
                        <span class=\"badge bg-secondary\">{{ tag.nom }}</span>
                    {% endfor %}

                </div>
            </div>

            <!-- RIGHT SIDE: RECIPE CONTENT -->
            <div class=\"col-lg-8\">
                <div class=\"service-details-item\">

                    <!-- Image -->
                    {% if recette.imageName %}
                        <img src=\"{{ asset('uploads/recettes/' ~ recette.imageName) }}\" class=\"img-fluid mb-3\">
                    {% endif %}

                    <h2>{{ recette.titre }}</h2>

                    <p>{{ recette.description }}</p>

                    <hr>

                    <h3>Instructions</h3>
                    <p style=\"white-space: pre-line;\">
                        {{ recette.instructions }}
                    </p>

                    <hr>

                    <p>
                        <strong>Created by:</strong>
                        {{ recette.auteur.pseudo ?? 'Unknown' }}
                    </p>

                    <p>
                        <strong>Date:</strong>
                        {{ recette.dateCreation|date('Y-m-d') }}
                    </p>

                </div>
            </div>

        </div>
    </div>
</div>

{% endblock %}", "Recette/show.html.twig", "/home/vboxuser/projet_recettes/templates/Recette/show.html.twig");
    }
}
