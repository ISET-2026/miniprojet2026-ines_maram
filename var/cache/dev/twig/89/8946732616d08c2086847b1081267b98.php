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

/* recettes/modifier.html.twig */
class __TwigTemplate_d23434960eefbc5810a891cfb984b36b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recettes/modifier.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recettes/modifier.html.twig"));

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

        yield "Nouvelle recette";
        
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
        yield "<!-- Page Title -->
<div class=\"page-title-area page-title-img-one\">
    <div class=\"container\">
        <div class=\"page-title-item\">
            <h2>Add Recipe</h2>
            <ul>
                <li><a href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_accueil");
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


            ";
        // line 31
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulaire"]) || array_key_exists("formulaire", $context) ? $context["formulaire"] : (function () { throw new RuntimeError('Variable "formulaire" does not exist.', 31, $this->source); })()), 'form_start');
        yield "
                <div class=\"row\">
                    <div class=\"col-md-6 mb-3\">";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formulaire"]) || array_key_exists("formulaire", $context) ? $context["formulaire"] : (function () { throw new RuntimeError('Variable "formulaire" does not exist.', 33, $this->source); })()), "titre", [], "any", false, false, false, 33), 'row');
        yield "</div>
                    <div class=\"col-md-6 mb-3\">";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formulaire"]) || array_key_exists("formulaire", $context) ? $context["formulaire"] : (function () { throw new RuntimeError('Variable "formulaire" does not exist.', 34, $this->source); })()), "categorie", [], "any", false, false, false, 34), 'row');
        yield "</div>
                </div>

                <div class=\"mb-3\">";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formulaire"]) || array_key_exists("formulaire", $context) ? $context["formulaire"] : (function () { throw new RuntimeError('Variable "formulaire" does not exist.', 37, $this->source); })()), "description", [], "any", false, false, false, 37), 'row');
        yield "</div>
                <div class=\"mb-3\">";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formulaire"]) || array_key_exists("formulaire", $context) ? $context["formulaire"] : (function () { throw new RuntimeError('Variable "formulaire" does not exist.', 38, $this->source); })()), "instructions", [], "any", false, false, false, 38), 'row');
        yield "</div>

                <div class=\"row\">
                    <div class=\"col-md-4 mb-3\">";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formulaire"]) || array_key_exists("formulaire", $context) ? $context["formulaire"] : (function () { throw new RuntimeError('Variable "formulaire" does not exist.', 41, $this->source); })()), "tempsPreparation", [], "any", false, false, false, 41), 'row');
        yield "</div>
                    <div class=\"col-md-4 mb-3\">";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formulaire"]) || array_key_exists("formulaire", $context) ? $context["formulaire"] : (function () { throw new RuntimeError('Variable "formulaire" does not exist.', 42, $this->source); })()), "tempsCuisson", [], "any", false, false, false, 42), 'row');
        yield "</div>
                    <div class=\"col-md-4 mb-3\">";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formulaire"]) || array_key_exists("formulaire", $context) ? $context["formulaire"] : (function () { throw new RuntimeError('Variable "formulaire" does not exist.', 43, $this->source); })()), "difficulte", [], "any", false, false, false, 43), 'row');
        yield "</div>
                </div>

                <div class=\"row\">
                    <div class=\"col-md-6 mb-3\">";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formulaire"]) || array_key_exists("formulaire", $context) ? $context["formulaire"] : (function () { throw new RuntimeError('Variable "formulaire" does not exist.', 47, $this->source); })()), "nbPersonnes", [], "any", false, false, false, 47), 'row');
        yield "</div>
                    <div class=\"col-md-6 mb-3\">";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formulaire"]) || array_key_exists("formulaire", $context) ? $context["formulaire"] : (function () { throw new RuntimeError('Variable "formulaire" does not exist.', 48, $this->source); })()), "imageName", [], "any", false, false, false, 48), 'row');
        yield "</div>
                </div>

                <div class=\"mb-3\">";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formulaire"]) || array_key_exists("formulaire", $context) ? $context["formulaire"] : (function () { throw new RuntimeError('Variable "formulaire" does not exist.', 51, $this->source); })()), "auteur", [], "any", false, false, false, 51), 'row');
        yield "</div>
                
                <div class=\"card mb-3 p-3 bg-light\">
                    ";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formulaire"]) || array_key_exists("formulaire", $context) ? $context["formulaire"] : (function () { throw new RuntimeError('Variable "formulaire" does not exist.', 54, $this->source); })()), "tags", [], "any", false, false, false, 54), 'row');
        yield "
                </div>

                <div class=\"mb-3\">";
        // line 57
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formulaire"]) || array_key_exists("formulaire", $context) ? $context["formulaire"] : (function () { throw new RuntimeError('Variable "formulaire" does not exist.', 57, $this->source); })()), "publiee", [], "any", false, false, false, 57), 'row');
        yield "</div>

              <div class=\"col-lg-12 text-center\">
                        <button type=\"submit\" class=\"btn cmn-btn\">
                            Ajouter Recette
                        </button>
                    </div>
            ";
        // line 64
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulaire"]) || array_key_exists("formulaire", $context) ? $context["formulaire"] : (function () { throw new RuntimeError('Variable "formulaire" does not exist.', 64, $this->source); })()), 'form_end');
        yield "

            <a href=\"";
        // line 66
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_recettes");
        yield "\" class=\"btn btn-link mt-3 text-muted\">
                ← Retour
            </a>
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
        return "recettes/modifier.html.twig";
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
        return array (  207 => 66,  202 => 64,  192 => 57,  186 => 54,  180 => 51,  174 => 48,  170 => 47,  163 => 43,  159 => 42,  155 => 41,  149 => 38,  145 => 37,  139 => 34,  135 => 33,  130 => 31,  108 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Nouvelle recette{% endblock %}

{% block body %}
<!-- Page Title -->
<div class=\"page-title-area page-title-img-one\">
    <div class=\"container\">
        <div class=\"page-title-item\">
            <h2>Add Recipe</h2>
            <ul>
                <li><a href=\"{{ path('app_accueil') }}\">Home</a></li>
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


            {{ form_start(formulaire) }}
                <div class=\"row\">
                    <div class=\"col-md-6 mb-3\">{{ form_row(formulaire.titre) }}</div>
                    <div class=\"col-md-6 mb-3\">{{ form_row(formulaire.categorie) }}</div>
                </div>

                <div class=\"mb-3\">{{ form_row(formulaire.description) }}</div>
                <div class=\"mb-3\">{{ form_row(formulaire.instructions) }}</div>

                <div class=\"row\">
                    <div class=\"col-md-4 mb-3\">{{ form_row(formulaire.tempsPreparation) }}</div>
                    <div class=\"col-md-4 mb-3\">{{ form_row(formulaire.tempsCuisson) }}</div>
                    <div class=\"col-md-4 mb-3\">{{ form_row(formulaire.difficulte) }}</div>
                </div>

                <div class=\"row\">
                    <div class=\"col-md-6 mb-3\">{{ form_row(formulaire.nbPersonnes) }}</div>
                    <div class=\"col-md-6 mb-3\">{{ form_row(formulaire.imageName) }}</div>
                </div>

                <div class=\"mb-3\">{{ form_row(formulaire.auteur) }}</div>
                
                <div class=\"card mb-3 p-3 bg-light\">
                    {{ form_row(formulaire.tags) }}
                </div>

                <div class=\"mb-3\">{{ form_row(formulaire.publiee) }}</div>

              <div class=\"col-lg-12 text-center\">
                        <button type=\"submit\" class=\"btn cmn-btn\">
                            Ajouter Recette
                        </button>
                    </div>
            {{ form_end(formulaire) }}

            <a href=\"{{ path('app_recettes') }}\" class=\"btn btn-link mt-3 text-muted\">
                ← Retour
            </a>
        </div>
    </div>
</div>
{% endblock %}", "recettes/modifier.html.twig", "/home/useradm/projet-recettes/templates/recettes/modifier.html.twig");
    }
}
