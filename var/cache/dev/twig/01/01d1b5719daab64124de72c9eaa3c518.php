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

/* recettes/nouvelle.html.twig */
class __TwigTemplate_8bee9ca7c13705056ebf43e9add8ed00 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recettes/nouvelle.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recettes/nouvelle.html.twig"));

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
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_recettes");
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
        // line 32
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulaire"]) || array_key_exists("formulaire", $context) ? $context["formulaire"] : (function () { throw new RuntimeError('Variable "formulaire" does not exist.', 32, $this->source); })()), 'form_start');
        yield "
                <div class=\"row\">
                    <div class=\"col-md-6 mb-3\">";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formulaire"]) || array_key_exists("formulaire", $context) ? $context["formulaire"] : (function () { throw new RuntimeError('Variable "formulaire" does not exist.', 34, $this->source); })()), "titre", [], "any", false, false, false, 34), 'row');
        yield "</div>
                    <div class=\"col-md-6 mb-3\">";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formulaire"]) || array_key_exists("formulaire", $context) ? $context["formulaire"] : (function () { throw new RuntimeError('Variable "formulaire" does not exist.', 35, $this->source); })()), "categorie", [], "any", false, false, false, 35), 'row');
        yield "</div>
                </div>

                <div class=\"mb-3\">";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formulaire"]) || array_key_exists("formulaire", $context) ? $context["formulaire"] : (function () { throw new RuntimeError('Variable "formulaire" does not exist.', 38, $this->source); })()), "description", [], "any", false, false, false, 38), 'row');
        yield "</div>
                <div class=\"mb-3\">";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formulaire"]) || array_key_exists("formulaire", $context) ? $context["formulaire"] : (function () { throw new RuntimeError('Variable "formulaire" does not exist.', 39, $this->source); })()), "instructions", [], "any", false, false, false, 39), 'row');
        yield "</div>

                <div class=\"row\">
                    <div class=\"col-md-4 mb-3\">";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formulaire"]) || array_key_exists("formulaire", $context) ? $context["formulaire"] : (function () { throw new RuntimeError('Variable "formulaire" does not exist.', 42, $this->source); })()), "tempsPreparation", [], "any", false, false, false, 42), 'row');
        yield "</div>
                    <div class=\"col-md-4 mb-3\">";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formulaire"]) || array_key_exists("formulaire", $context) ? $context["formulaire"] : (function () { throw new RuntimeError('Variable "formulaire" does not exist.', 43, $this->source); })()), "tempsCuisson", [], "any", false, false, false, 43), 'row');
        yield "</div>
                    <div class=\"col-md-4 mb-3\">";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formulaire"]) || array_key_exists("formulaire", $context) ? $context["formulaire"] : (function () { throw new RuntimeError('Variable "formulaire" does not exist.', 44, $this->source); })()), "difficulte", [], "any", false, false, false, 44), 'row');
        yield "</div>
                </div>

              
                    <div class=\"col-md-6 mb-3\">";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formulaire"]) || array_key_exists("formulaire", $context) ? $context["formulaire"] : (function () { throw new RuntimeError('Variable "formulaire" does not exist.', 48, $this->source); })()), "nbPersonnes", [], "any", false, false, false, 48), 'row');
        yield "</div>
                    
                    <div class=\"col-md-6 mb-3\">";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formulaire"]) || array_key_exists("formulaire", $context) ? $context["formulaire"] : (function () { throw new RuntimeError('Variable "formulaire" does not exist.', 50, $this->source); })()), "imageName", [], "any", false, false, false, 50), 'row');
        yield "</div>
                

                
                <div class=\"card mb-3 p-3 bg-light\">
                    ";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formulaire"]) || array_key_exists("formulaire", $context) ? $context["formulaire"] : (function () { throw new RuntimeError('Variable "formulaire" does not exist.', 55, $this->source); })()), "tags", [], "any", false, false, false, 55), 'row');
        yield "
                </div>

                <div class=\"mb-3\">";
        // line 58
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formulaire"]) || array_key_exists("formulaire", $context) ? $context["formulaire"] : (function () { throw new RuntimeError('Variable "formulaire" does not exist.', 58, $this->source); })()), "publiee", [], "any", false, false, false, 58), 'row');
        yield "</div>

                <button type=\"submit\" class=\"btn  w-100\">💾 Enregistrer la recette</button>
            ";
        // line 61
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulaire"]) || array_key_exists("formulaire", $context) ? $context["formulaire"] : (function () { throw new RuntimeError('Variable "formulaire" does not exist.', 61, $this->source); })()), 'form_end');
        yield "

            <a href=\"";
        // line 63
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_recettes");
        yield "\" class=\"btn btn-link mt-3 text-muted\">
                ← Retour
            </a>
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
        return "recettes/nouvelle.html.twig";
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
        return array (  201 => 63,  196 => 61,  190 => 58,  184 => 55,  176 => 50,  171 => 48,  164 => 44,  160 => 43,  156 => 42,  150 => 39,  146 => 38,  140 => 35,  136 => 34,  131 => 32,  110 => 14,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
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
                <li><a href=\"{{ path('app_recettes') }}\">Home</a></li>
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

              
                    <div class=\"col-md-6 mb-3\">{{ form_row(formulaire.nbPersonnes) }}</div>
                    
                    <div class=\"col-md-6 mb-3\">{{ form_row(formulaire.imageName) }}</div>
                

                
                <div class=\"card mb-3 p-3 bg-light\">
                    {{ form_row(formulaire.tags) }}
                </div>

                <div class=\"mb-3\">{{ form_row(formulaire.publiee) }}</div>

                <button type=\"submit\" class=\"btn  w-100\">💾 Enregistrer la recette</button>
            {{ form_end(formulaire) }}

            <a href=\"{{ path('app_recettes') }}\" class=\"btn btn-link mt-3 text-muted\">
                ← Retour
            </a>
        </div>

        </div>

    </div>
</div>

{% endblock %}", "recettes/nouvelle.html.twig", "/home/useradm/projet-recettes/templates/recettes/nouvelle.html.twig");
    }
}
