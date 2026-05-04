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

/* Recette/index.html.twig */
class __TwigTemplate_b556394b18f602fd0e0491d53279ae2d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Recette/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Recette/index.html.twig"));

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

        yield "Food Collection";
        
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
            <h2>Food Collection</h2>
            <ul>
                <li><a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        yield "\">Home</a></li>
                <li><i class='bx bx-chevron-right'></i></li>
                <li>Food Collection</li>
            </ul>
        </div>
    </div>
</div>

<!-- Collection -->
<section class=\"collection-area collection-area-two pt-100 pb-70\">
    <div class=\"container\">

        <!-- Filter Menu -->
        <div class=\"sorting-menu\">
            <ul>
                <li class=\"filter active\" data-filter=\"all\">All</li>
                <li class=\"filter\" data-filter=\".web\">Fast Food</li>
                <li class=\"filter\" data-filter=\".ui\">Platters</li>
                <li class=\"filter\" data-filter=\".ux\">Dessert</li>
                <li class=\"filter\" data-filter=\".branding\">Asian Food</li>
            </ul>
        </div>

        <!-- Items -->
        <div id=\"Container\" class=\"row\">

            ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, 8));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 40
            yield "            <div class=\"col-sm-6 col-lg-3 mix web ui\">
                <div class=\"collection-item\">

                    <!-- Image -->
                    <div class=\"collection-top\">
                        <img src=\"";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("assets/img/home-one/collection/" . $context["i"]) . ".jpg")), "html", null, true);
            yield "\" alt=\"Recipe\">

                        <!-- Rating -->
                        <ul>
                            <li><i class='bx bxs-star checked'></i></li>
                            <li><i class='bx bxs-star checked'></i></li>
                            <li><i class='bx bxs-star checked'></i></li>
                            <li><i class='bx bxs-star checked'></i></li>
                            <li><i class='bx bxs-star'></i></li>
                        </ul>
                    </div>

                    <!-- Content -->
                    <div class=\"collection-bottom\">
                        <h3>Recipe ";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield "</h3>

                        <ul>
                            <li><span>\$";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((10 + $context["i"]), "html", null, true);
            yield "</span></li>

                            <li>
                                <div class=\"number\">
                                    <span class=\"minus\">-</span>
                                    <input type=\"text\" class=\"form-control\" value=\"1\"/>
                                    <span class=\"plus\">+</span>
                                </div>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        yield "
        </div>

    </div>
</section>

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
        return "Recette/index.html.twig";
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
        return array (  193 => 77,  172 => 62,  166 => 59,  149 => 45,  142 => 40,  138 => 39,  109 => 13,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Food Collection{% endblock %}

{% block body %}

<!-- Page Title -->
<div class=\"page-title-area page-title-img-one\">
    <div class=\"container\">
        <div class=\"page-title-item\">
            <h2>Food Collection</h2>
            <ul>
                <li><a href=\"{{ path('home') }}\">Home</a></li>
                <li><i class='bx bx-chevron-right'></i></li>
                <li>Food Collection</li>
            </ul>
        </div>
    </div>
</div>

<!-- Collection -->
<section class=\"collection-area collection-area-two pt-100 pb-70\">
    <div class=\"container\">

        <!-- Filter Menu -->
        <div class=\"sorting-menu\">
            <ul>
                <li class=\"filter active\" data-filter=\"all\">All</li>
                <li class=\"filter\" data-filter=\".web\">Fast Food</li>
                <li class=\"filter\" data-filter=\".ui\">Platters</li>
                <li class=\"filter\" data-filter=\".ux\">Dessert</li>
                <li class=\"filter\" data-filter=\".branding\">Asian Food</li>
            </ul>
        </div>

        <!-- Items -->
        <div id=\"Container\" class=\"row\">

            {% for i in 1..8 %}
            <div class=\"col-sm-6 col-lg-3 mix web ui\">
                <div class=\"collection-item\">

                    <!-- Image -->
                    <div class=\"collection-top\">
                        <img src=\"{{ asset('assets/img/home-one/collection/' ~ i ~ '.jpg') }}\" alt=\"Recipe\">

                        <!-- Rating -->
                        <ul>
                            <li><i class='bx bxs-star checked'></i></li>
                            <li><i class='bx bxs-star checked'></i></li>
                            <li><i class='bx bxs-star checked'></i></li>
                            <li><i class='bx bxs-star checked'></i></li>
                            <li><i class='bx bxs-star'></i></li>
                        </ul>
                    </div>

                    <!-- Content -->
                    <div class=\"collection-bottom\">
                        <h3>Recipe {{ i }}</h3>

                        <ul>
                            <li><span>\${{ 10 + i }}</span></li>

                            <li>
                                <div class=\"number\">
                                    <span class=\"minus\">-</span>
                                    <input type=\"text\" class=\"form-control\" value=\"1\"/>
                                    <span class=\"plus\">+</span>
                                </div>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
            {% endfor %}

        </div>

    </div>
</section>

{% endblock %}", "Recette/index.html.twig", "/home/vboxuser/projet_recettes/templates/Recette/index.html.twig");
    }
}
