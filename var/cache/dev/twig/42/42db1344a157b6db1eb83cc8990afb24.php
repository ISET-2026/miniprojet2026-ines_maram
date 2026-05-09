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
class __TwigTemplate_5fde79638beb8f3f4808516e87beedeb extends Template
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

        yield "Modifier la recette";
        
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
            <h2>Modifier la recette</h2>
            <ul>
                <li><a href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_accueil");
        yield "\">Home</a></li>
                <li><i class='bx bx-chevron-right'></i></li>
                <li>Modifier</li>
            </ul>
        </div>
    </div>
</div>

<div class=\"book-table-area ptb-100\">
    <div class=\"container\">
        <div class=\"book-table-wrap\">
            <div class=\"section-title\">
                <h2>Modifier la recette</h2>
            </div>

            ";
        // line 25
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulaire"]) || array_key_exists("formulaire", $context) ? $context["formulaire"] : (function () { throw new RuntimeError('Variable "formulaire" does not exist.', 25, $this->source); })()), 'form_start', ["attr" => ["enctype" => "multipart/form-data"]]);
        yield "

            <div class=\"row\">
                <div class=\"col-md-6 mb-3\">";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formulaire"]) || array_key_exists("formulaire", $context) ? $context["formulaire"] : (function () { throw new RuntimeError('Variable "formulaire" does not exist.', 28, $this->source); })()), "titre", [], "any", false, false, false, 28), 'row');
        yield "</div>
                <div class=\"col-md-6 mb-3\">";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formulaire"]) || array_key_exists("formulaire", $context) ? $context["formulaire"] : (function () { throw new RuntimeError('Variable "formulaire" does not exist.', 29, $this->source); })()), "categorie", [], "any", false, false, false, 29), 'row');
        yield "</div>
            </div>

            <div class=\"mb-3\">";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formulaire"]) || array_key_exists("formulaire", $context) ? $context["formulaire"] : (function () { throw new RuntimeError('Variable "formulaire" does not exist.', 32, $this->source); })()), "description", [], "any", false, false, false, 32), 'row');
        yield "</div>
            <div class=\"mb-3\">";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formulaire"]) || array_key_exists("formulaire", $context) ? $context["formulaire"] : (function () { throw new RuntimeError('Variable "formulaire" does not exist.', 33, $this->source); })()), "instructions", [], "any", false, false, false, 33), 'row');
        yield "</div>

            <div class=\"row\">
                <div class=\"col-md-4 mb-3\">";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formulaire"]) || array_key_exists("formulaire", $context) ? $context["formulaire"] : (function () { throw new RuntimeError('Variable "formulaire" does not exist.', 36, $this->source); })()), "tempsPreparation", [], "any", false, false, false, 36), 'row');
        yield "</div>
                <div class=\"col-md-4 mb-3\">";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formulaire"]) || array_key_exists("formulaire", $context) ? $context["formulaire"] : (function () { throw new RuntimeError('Variable "formulaire" does not exist.', 37, $this->source); })()), "tempsCuisson", [], "any", false, false, false, 37), 'row');
        yield "</div>
                <div class=\"col-md-4 mb-3\">";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formulaire"]) || array_key_exists("formulaire", $context) ? $context["formulaire"] : (function () { throw new RuntimeError('Variable "formulaire" does not exist.', 38, $this->source); })()), "difficulte", [], "any", false, false, false, 38), 'row');
        yield "</div>
            </div>

            <div class=\"row\">
                <div class=\"col-md-6 mb-3\">";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formulaire"]) || array_key_exists("formulaire", $context) ? $context["formulaire"] : (function () { throw new RuntimeError('Variable "formulaire" does not exist.', 42, $this->source); })()), "nbPersonnes", [], "any", false, false, false, 42), 'row');
        yield "</div>
                <div class=\"col-md-6 mb-3\">
                    ";
        // line 45
        yield "                    ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["recette"]) || array_key_exists("recette", $context) ? $context["recette"] : (function () { throw new RuntimeError('Variable "recette" does not exist.', 45, $this->source); })()), "imageName", [], "any", false, false, false, 45)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 46
            yield "                        <div class=\"mb-2\">
                            <small class=\"text-muted\">Image actuelle :</small><br>
                            <img src=\"";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["recette"]) || array_key_exists("recette", $context) ? $context["recette"] : (function () { throw new RuntimeError('Variable "recette" does not exist.', 48, $this->source); })()), "imageName", [], "any", false, false, false, 48))), "html", null, true);
            yield "\"
                                style=\"height: 80px; object-fit: cover; border-radius: 8px;\">
                        </div>
                    ";
        }
        // line 52
        yield "                    ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formulaire"]) || array_key_exists("formulaire", $context) ? $context["formulaire"] : (function () { throw new RuntimeError('Variable "formulaire" does not exist.', 52, $this->source); })()), "imageFile", [], "any", false, false, false, 52), 'row');
        yield "
                </div>
            </div>

            ";
        // line 57
        yield "
            <div class=\"card mb-3 p-3 bg-light\">
                ";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formulaire"]) || array_key_exists("formulaire", $context) ? $context["formulaire"] : (function () { throw new RuntimeError('Variable "formulaire" does not exist.', 59, $this->source); })()), "tags", [], "any", false, false, false, 59), 'row');
        yield "
            </div>

            <div class=\"mb-3\">";
        // line 62
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formulaire"]) || array_key_exists("formulaire", $context) ? $context["formulaire"] : (function () { throw new RuntimeError('Variable "formulaire" does not exist.', 62, $this->source); })()), "publiee", [], "any", false, false, false, 62), 'row');
        yield "</div>

            <div class=\"col-lg-12 text-center\">
                <button type=\"submit\" class=\"btn cmn-btn\">💾 Modifier la recette</button>
            </div>

            ";
        // line 68
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulaire"]) || array_key_exists("formulaire", $context) ? $context["formulaire"] : (function () { throw new RuntimeError('Variable "formulaire" does not exist.', 68, $this->source); })()), 'form_end');
        yield "

            <a href=\"";
        // line 70
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_recettes");
        yield "\" class=\"btn btn-link mt-3 text-muted\">← Retour</a>
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
        return array (  218 => 70,  213 => 68,  204 => 62,  198 => 59,  194 => 57,  186 => 52,  179 => 48,  175 => 46,  172 => 45,  167 => 42,  160 => 38,  156 => 37,  152 => 36,  146 => 33,  142 => 32,  136 => 29,  132 => 28,  126 => 25,  108 => 10,  100 => 4,  87 => 3,  64 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Modifier la recette{% endblock %}
{% block body %}

<div class=\"page-title-area page-title-img-one\">
    <div class=\"container\">
        <div class=\"page-title-item\">
            <h2>Modifier la recette</h2>
            <ul>
                <li><a href=\"{{ path('app_accueil') }}\">Home</a></li>
                <li><i class='bx bx-chevron-right'></i></li>
                <li>Modifier</li>
            </ul>
        </div>
    </div>
</div>

<div class=\"book-table-area ptb-100\">
    <div class=\"container\">
        <div class=\"book-table-wrap\">
            <div class=\"section-title\">
                <h2>Modifier la recette</h2>
            </div>

            {{ form_start(formulaire, {'attr': {'enctype': 'multipart/form-data'}}) }}

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
                <div class=\"col-md-6 mb-3\">
                    {# ✅ Show current image preview, then the upload field — only once #}
                    {% if recette.imageName %}
                        <div class=\"mb-2\">
                            <small class=\"text-muted\">Image actuelle :</small><br>
                            <img src=\"{{ asset('uploads/' ~ recette.imageName) }}\"
                                style=\"height: 80px; object-fit: cover; border-radius: 8px;\">
                        </div>
                    {% endif %}
                    {{ form_row(formulaire.imageFile) }}
                </div>
            </div>

            {# ✅ auteur removed — set automatically in the controller #}

            <div class=\"card mb-3 p-3 bg-light\">
                {{ form_row(formulaire.tags) }}
            </div>

            <div class=\"mb-3\">{{ form_row(formulaire.publiee) }}</div>

            <div class=\"col-lg-12 text-center\">
                <button type=\"submit\" class=\"btn cmn-btn\">💾 Modifier la recette</button>
            </div>

            {{ form_end(formulaire) }}

            <a href=\"{{ path('app_recettes') }}\" class=\"btn btn-link mt-3 text-muted\">← Retour</a>
        </div>
    </div>
</div>

{% endblock %}", "recettes/modifier.html.twig", "/home/vboxuser/Documents/miniprojet2026-ines_maram/templates/recettes/modifier.html.twig");
    }
}
