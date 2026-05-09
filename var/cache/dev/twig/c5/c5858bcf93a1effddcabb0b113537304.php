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

        // line 6
        yield "
<!-- Page Title -->
";
        // line 9
        $context["background_img"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["recette"]) || array_key_exists("recette", $context) ? $context["recette"] : (function () { throw new RuntimeError('Variable "recette" does not exist.', 9, $this->source); })()), "imageName", [], "any", false, false, false, 9)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["recette"]) || array_key_exists("recette", $context) ? $context["recette"] : (function () { throw new RuntimeError('Variable "recette" does not exist.', 9, $this->source); })()), "imageName", [], "any", false, false, false, 9)))) : ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/default-banner.jpg")));
        // line 10
        yield "
<div class=\"page-title-area page-title-img-two\" 
     style=\"background-image: url('";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["background_img"]) || array_key_exists("background_img", $context) ? $context["background_img"] : (function () { throw new RuntimeError('Variable "background_img" does not exist.', 12, $this->source); })()), "html", null, true);
        yield "'); background-size: cover; background-position: center;\">
    
    <div class=\"container\">
        <div class=\"page-title-item\">
            <h2>";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recette"]) || array_key_exists("recette", $context) ? $context["recette"] : (function () { throw new RuntimeError('Variable "recette" does not exist.', 16, $this->source); })()), "titre", [], "any", false, false, false, 16), "html", null, true);
        yield "</h2>
            <ul>
                <li><a href=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_recettes");
        yield "\">Recipes</a></li>
                <li><i class='bx bx-chevron-right'></i></li>
                <li>";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recette"]) || array_key_exists("recette", $context) ? $context["recette"] : (function () { throw new RuntimeError('Variable "recette" does not exist.', 20, $this->source); })()), "titre", [], "any", false, false, false, 20), "html", null, true);
        yield "</li>
            </ul>
        </div>
    </div>
</div>
  
</div>
  <h1 class=\"display-4 mt-3 text_center\">";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recette"]) || array_key_exists("recette", $context) ? $context["recette"] : (function () { throw new RuntimeError('Variable "recette" does not exist.', 27, $this->source); })()), "titre", [], "any", false, false, false, 27), "html", null, true);
        yield "</h1>


<div class=\"service-details-area pt-100 pb-70\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">

            <!-- LEFT SIDE: INGREDIENTS -->
            <div class=\"col-lg-4\">
                <div class=\"service-details-item\">

                    <h3 class=\"text-primary mb-4\"><i class=\"fas fa-shopping-basket\"></i> Ingrédients</h3>

                    <ul>
                        ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recette"]) || array_key_exists("recette", $context) ? $context["recette"] : (function () { throw new RuntimeError('Variable "recette" does not exist.', 41, $this->source); })()), "ingredients", [], "any", false, false, false, 41));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["ingredient"]) {
            // line 42
            yield "                            <li>
                                ";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ingredient"], "quantite", [], "any", false, false, false, 43), "html", null, true);
            yield " - ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ingredient"], "nom", [], "any", false, false, false, 43), "html", null, true);
            yield "
                            </li>
                        ";
            $context['_iterated'] = true;
        }
        // line 45
        if (!$context['_iterated']) {
            // line 46
            yield "                            <li>No ingredients</li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['ingredient'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        yield "                    </ul>
                     <a href=\"";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ingredient_nouveau", ["recette_id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["recette"]) || array_key_exists("recette", $context) ? $context["recette"] : (function () { throw new RuntimeError('Variable "recette" does not exist.', 49, $this->source); })()), "id", [], "any", false, false, false, 49)]), "html", null, true);
        yield "\" class=\"btn btn-outline-secondary\">ajouter un Ingrédients</a>

                    <hr>

                    <p><strong>Category:</strong> ";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["recette"]) || array_key_exists("recette", $context) ? $context["recette"] : (function () { throw new RuntimeError('Variable "recette" does not exist.', 53, $this->source); })()), "categorie", [], "any", false, false, false, 53), "nom", [], "any", false, false, false, 53), "html", null, true);
        yield "</p>
                    <div class=\"difficulty\">
        Niveau de difficulté : ";
        // line 55
        yield $this->extensions['App\Twig\RecipeHubExtension']->getStars(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recette"]) || array_key_exists("recette", $context) ? $context["recette"] : (function () { throw new RuntimeError('Variable "recette" does not exist.', 55, $this->source); })()), "difficulte", [], "any", false, false, false, 55));
        yield "
    </div>
                  <div class=\"times\">
        <strong>Temps de préparation :</strong> ";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\RecipeHubExtension']->formatCookingTime(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recette"]) || array_key_exists("recette", $context) ? $context["recette"] : (function () { throw new RuntimeError('Variable "recette" does not exist.', 58, $this->source); })()), "tempsPreparation", [], "any", false, false, false, 58)), "html", null, true);
        yield " <br>
        <strong>Temps de cuisson :</strong> ";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\RecipeHubExtension']->formatCookingTime(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recette"]) || array_key_exists("recette", $context) ? $context["recette"] : (function () { throw new RuntimeError('Variable "recette" does not exist.', 59, $this->source); })()), "tempsCuisson", [], "any", false, false, false, 59)), "html", null, true);
        yield "
    </div>
</div>
                    <p><strong>People:</strong> ";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recette"]) || array_key_exists("recette", $context) ? $context["recette"] : (function () { throw new RuntimeError('Variable "recette" does not exist.', 62, $this->source); })()), "nbPersonnes", [], "any", false, false, false, 62), "html", null, true);
        yield "</p>

                    <!-- Tags -->
                    <h4>Tags</h4>
                    ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recette"]) || array_key_exists("recette", $context) ? $context["recette"] : (function () { throw new RuntimeError('Variable "recette" does not exist.', 66, $this->source); })()), "tags", [], "any", false, false, false, 66));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 67
            yield "                          <span class=\"badge bg-primary rounded-pill\">#";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "nom", [], "any", false, false, false, 67), "html", null, true);
            yield "</span>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['tag'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        yield "
                </div>
            </div>
            

            <!-- RIGHT SIDE: RECIPE CONTENT -->
            <div class=\"col-lg-8\">
                <div class=\"service-details-item\">

                    <!-- Image -->
                    ";
        // line 79
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["recette"]) || array_key_exists("recette", $context) ? $context["recette"] : (function () { throw new RuntimeError('Variable "recette" does not exist.', 79, $this->source); })()), "imageName", [], "any", false, false, false, 79)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 80
            yield "                 
                    ";
        }
        // line 82
        yield "

                    <h3> description: </h3>
                  <p style=\"white-space: pre-line;\">
                        ";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recette"]) || array_key_exists("recette", $context) ? $context["recette"] : (function () { throw new RuntimeError('Variable "recette" does not exist.', 86, $this->source); })()), "description", [], "any", false, false, false, 86), "html", null, true);
        yield "
                    </p>
                    <hr>

                    <h3>Instructions</h3>
                    <p style=\"white-space: pre-line;\">
                        ";
        // line 92
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recette"]) || array_key_exists("recette", $context) ? $context["recette"] : (function () { throw new RuntimeError('Variable "recette" does not exist.', 92, $this->source); })()), "instructions", [], "any", false, false, false, 92), "html", null, true);
        yield "
                    </p>

                    <hr>

                    <p>
                        <strong>Created by:</strong>
                        ";
        // line 99
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["recette"]) || array_key_exists("recette", $context) ? $context["recette"] : (function () { throw new RuntimeError('Variable "recette" does not exist.', 99, $this->source); })()), "auteur", [], "any", false, false, false, 99)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["recette"]) || array_key_exists("recette", $context) ? $context["recette"] : (function () { throw new RuntimeError('Variable "recette" does not exist.', 99, $this->source); })()), "auteur", [], "any", false, false, false, 99), "email", [], "any", false, false, false, 99), "html", null, true)) : ("Unknown"));
        yield "
                    </p>

                   
                
<p class=\"text-muted\">Date ";
        // line 104
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\RecipeHubExtension']->formatTimeAgo(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recette"]) || array_key_exists("recette", $context) ? $context["recette"] : (function () { throw new RuntimeError('Variable "recette" does not exist.', 104, $this->source); })()), "dateCreation", [], "any", false, false, false, 104)), "html", null, true);
        yield "</p>

                </div>
            </div>

        </div>
    </div>

    <div class=\"text-center mt-5 mb-5\">
        <a href=\"";
        // line 113
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_recettes");
        yield "\" class=\"btn btn-outline-secondary\">Retour à la liste</a>
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
        return array (  294 => 113,  282 => 104,  274 => 99,  264 => 92,  255 => 86,  249 => 82,  245 => 80,  243 => 79,  231 => 69,  222 => 67,  218 => 66,  211 => 62,  205 => 59,  201 => 58,  195 => 55,  190 => 53,  183 => 49,  180 => 48,  173 => 46,  171 => 45,  162 => 43,  159 => 42,  154 => 41,  137 => 27,  127 => 20,  122 => 18,  117 => 16,  110 => 12,  106 => 10,  104 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ recette.titre }}{% endblock %}

{% block body %}

<!-- Page Title -->
{# Thabbet ken el-image imageName mawjouda #}
{% set background_img = recette.imageName ? asset('img/' ~ recette.imageName) : asset('img/default-banner.jpg') %}

<div class=\"page-title-area page-title-img-two\" 
     style=\"background-image: url('{{ background_img }}'); background-size: cover; background-position: center;\">
    
    <div class=\"container\">
        <div class=\"page-title-item\">
            <h2>{{ recette.titre }}</h2>
            <ul>
                <li><a href=\"{{ path('app_recettes') }}\">Recipes</a></li>
                <li><i class='bx bx-chevron-right'></i></li>
                <li>{{ recette.titre }}</li>
            </ul>
        </div>
    </div>
</div>
  
</div>
  <h1 class=\"display-4 mt-3 text_center\">{{ recette.titre }}</h1>


<div class=\"service-details-area pt-100 pb-70\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">

            <!-- LEFT SIDE: INGREDIENTS -->
            <div class=\"col-lg-4\">
                <div class=\"service-details-item\">

                    <h3 class=\"text-primary mb-4\"><i class=\"fas fa-shopping-basket\"></i> Ingrédients</h3>

                    <ul>
                        {% for ingredient in recette.ingredients %}
                            <li>
                                {{ ingredient.quantite }} - {{ ingredient.nom }}
                            </li>
                        {% else %}
                            <li>No ingredients</li>
                        {% endfor %}
                    </ul>
                     <a href=\"{{ path('app_ingredient_nouveau', {'recette_id': recette.id}) }}\" class=\"btn btn-outline-secondary\">ajouter un Ingrédients</a>

                    <hr>

                    <p><strong>Category:</strong> {{ recette.categorie.nom }}</p>
                    <div class=\"difficulty\">
        Niveau de difficulté : {{ difficulty_stars(recette.difficulte) }}
    </div>
                  <div class=\"times\">
        <strong>Temps de préparation :</strong> {{ recette.tempsPreparation|cooking_time_format }} <br>
        <strong>Temps de cuisson :</strong> {{ recette.tempsCuisson|cooking_time_format }}
    </div>
</div>
                    <p><strong>People:</strong> {{ recette.nbPersonnes }}</p>

                    <!-- Tags -->
                    <h4>Tags</h4>
                    {% for tag in recette.tags %}
                          <span class=\"badge bg-primary rounded-pill\">#{{ tag.nom }}</span>
                    {% endfor %}

                </div>
            </div>
            

            <!-- RIGHT SIDE: RECIPE CONTENT -->
            <div class=\"col-lg-8\">
                <div class=\"service-details-item\">

                    <!-- Image -->
                    {% if recette.imageName %}
                 
                    {% endif %}


                    <h3> description: </h3>
                  <p style=\"white-space: pre-line;\">
                        {{ recette.description }}
                    </p>
                    <hr>

                    <h3>Instructions</h3>
                    <p style=\"white-space: pre-line;\">
                        {{ recette.instructions }}
                    </p>

                    <hr>

                    <p>
                        <strong>Created by:</strong>
                        {{ recette.auteur ? recette.auteur.email : 'Unknown' }}
                    </p>

                   
                
<p class=\"text-muted\">Date {{ recette.dateCreation|time_ago }}</p>

                </div>
            </div>

        </div>
    </div>

    <div class=\"text-center mt-5 mb-5\">
        <a href=\"{{ path('app_recettes') }}\" class=\"btn btn-outline-secondary\">Retour à la liste</a>
    </div>
</div>

{% endblock %}", "recettes/detail.html.twig", "/home/vboxuser/Documents/miniprojet2026-ines_maram/templates/recettes/detail.html.twig");
    }
}
