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

/* Recette/new.html.twig */
class __TwigTemplate_cafbdc8bdbbd5ba389cfe51eaae60b99 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Recette/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Recette/new.html.twig"));

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

        yield "Add Recipe";
        
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
<div class=\"page-title-area page-title-img-one\">
    <div class=\"container\">
        <div class=\"page-title-item\">
            <h2>Add Recipe</h2>
            <ul>
                <li><a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        yield "\">Home</a></li>
                <li><i class='bx bx-chevron-right'></i></li>
                <li>Add Recipe</li>
            </ul>
        </div>
    </div>
</div>

<!-- Form Section -->
<div class=\"book-table-area ptb-100\">
    <div class=\"container\">

        <div class=\"book-table-wrap\">

            <div class=\"section-title\">
                <h2>Add Recipe</h2>
            </div>

            <form method=\"POST\" enctype=\"multipart/form-data\">

                <div class=\"row g-4\">

                    <!-- Titre -->
                    <div class=\"col-lg-6\">
                        <div class=\"form-group\">
                            <input type=\"text\" name=\"titre\" class=\"form-control\"
                                placeholder=\"Titre de la recette\" required minlength=\"5\">
                        </div>
                    </div>

                    <!-- Description -->
                    <div class=\"col-lg-6\">
                        <div class=\"form-group\">
                            <textarea name=\"description\" class=\"form-control\"
                                    placeholder=\"Description (min 30 caractères)\"
                                    required minlength=\"30\"></textarea>
                        </div>
                    </div>

                    <!-- Instructions -->
                    <div class=\"col-lg-12\">
                        <div class=\"form-group\">
                            <textarea name=\"instructions\" class=\"form-control\"
                                    placeholder=\"Instructions\"
                                    rows=\"6\" required></textarea>
                        </div>
                    </div>

                    <!-- Temps préparation -->
                    <div class=\"col-lg-6\">
                        <div class=\"form-group\">
                            <input type=\"number\" name=\"tempsPreparation\" class=\"form-control\"
                                placeholder=\"Temps de préparation (min)\" min=\"1\" required>
                        </div>
                    </div>

                    <!-- Temps cuisson -->
                    <div class=\"col-lg-6\">
                        <div class=\"form-group\">
                            <input type=\"number\" name=\"tempsCuisson\" class=\"form-control\"
                                laceholder=\"Temps de cuisson (min)\" min=\"0\">
                        </div>
                    </div>

                    <!-- Difficulté -->
                    <div class=\"col-lg-6\">
                        <div class=\"form-group\">
                            <select name=\"difficulte\" class=\"form-control\" required>
                                <option value=\"\">-- Difficulté --</option>
                                <option value=\"facile\">Facile</option>
                                <option value=\"moyen\">Moyen</option>
                                <option value=\"difficile\">Difficile</option>
                            </select>
                        </div>
                    </div>

                    <!-- Nombre personnes -->
                    <div class=\"col-lg-6\">
                        <div class=\"form-group\">
                            <input type=\"number\" name=\"nbPersonnes\" class=\"form-control\"
                                placeholder=\"Nombre de personnes\" min=\"1\" max=\"50\" required>
                        </div>
                    </div>

                    <!-- Image -->
                    <div class=\"col-lg-6\">
                        <div class=\"form-group\">
                            <input type=\"file\" name=\"imageFile\" class=\"form-control\">
                        </div>
                    </div>

                    <!-- Submit -->
                    <div class=\"col-lg-12 text-center\">
                        <button type=\"submit\" class=\"btn cmn-btn\">
                            Ajouter Recette
                        </button>
                    </div>

                </div>

            </form>

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
        return "Recette/new.html.twig";
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
        return array (  109 => 13,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Add Recipe{% endblock %}

{% block body %}

<!-- Page Title -->
<div class=\"page-title-area page-title-img-one\">
    <div class=\"container\">
        <div class=\"page-title-item\">
            <h2>Add Recipe</h2>
            <ul>
                <li><a href=\"{{ path('home') }}\">Home</a></li>
                <li><i class='bx bx-chevron-right'></i></li>
                <li>Add Recipe</li>
            </ul>
        </div>
    </div>
</div>

<!-- Form Section -->
<div class=\"book-table-area ptb-100\">
    <div class=\"container\">

        <div class=\"book-table-wrap\">

            <div class=\"section-title\">
                <h2>Add Recipe</h2>
            </div>

            <form method=\"POST\" enctype=\"multipart/form-data\">

                <div class=\"row g-4\">

                    <!-- Titre -->
                    <div class=\"col-lg-6\">
                        <div class=\"form-group\">
                            <input type=\"text\" name=\"titre\" class=\"form-control\"
                                placeholder=\"Titre de la recette\" required minlength=\"5\">
                        </div>
                    </div>

                    <!-- Description -->
                    <div class=\"col-lg-6\">
                        <div class=\"form-group\">
                            <textarea name=\"description\" class=\"form-control\"
                                    placeholder=\"Description (min 30 caractères)\"
                                    required minlength=\"30\"></textarea>
                        </div>
                    </div>

                    <!-- Instructions -->
                    <div class=\"col-lg-12\">
                        <div class=\"form-group\">
                            <textarea name=\"instructions\" class=\"form-control\"
                                    placeholder=\"Instructions\"
                                    rows=\"6\" required></textarea>
                        </div>
                    </div>

                    <!-- Temps préparation -->
                    <div class=\"col-lg-6\">
                        <div class=\"form-group\">
                            <input type=\"number\" name=\"tempsPreparation\" class=\"form-control\"
                                placeholder=\"Temps de préparation (min)\" min=\"1\" required>
                        </div>
                    </div>

                    <!-- Temps cuisson -->
                    <div class=\"col-lg-6\">
                        <div class=\"form-group\">
                            <input type=\"number\" name=\"tempsCuisson\" class=\"form-control\"
                                laceholder=\"Temps de cuisson (min)\" min=\"0\">
                        </div>
                    </div>

                    <!-- Difficulté -->
                    <div class=\"col-lg-6\">
                        <div class=\"form-group\">
                            <select name=\"difficulte\" class=\"form-control\" required>
                                <option value=\"\">-- Difficulté --</option>
                                <option value=\"facile\">Facile</option>
                                <option value=\"moyen\">Moyen</option>
                                <option value=\"difficile\">Difficile</option>
                            </select>
                        </div>
                    </div>

                    <!-- Nombre personnes -->
                    <div class=\"col-lg-6\">
                        <div class=\"form-group\">
                            <input type=\"number\" name=\"nbPersonnes\" class=\"form-control\"
                                placeholder=\"Nombre de personnes\" min=\"1\" max=\"50\" required>
                        </div>
                    </div>

                    <!-- Image -->
                    <div class=\"col-lg-6\">
                        <div class=\"form-group\">
                            <input type=\"file\" name=\"imageFile\" class=\"form-control\">
                        </div>
                    </div>

                    <!-- Submit -->
                    <div class=\"col-lg-12 text-center\">
                        <button type=\"submit\" class=\"btn cmn-btn\">
                            Ajouter Recette
                        </button>
                    </div>

                </div>

            </form>

        </div>

    </div>
</div>

{% endblock %}", "Recette/new.html.twig", "/home/vboxuser/projet_recettes/projet_recette/templates/Recette/new.html.twig");
    }
}
