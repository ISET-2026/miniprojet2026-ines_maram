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

/* Categorie/index.html.twig */
class __TwigTemplate_d20093cfce181d3b38d5658cd9f63b92 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Categorie/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Categorie/index.html.twig"));

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

        yield "Categories";
        
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
            <h2>Categories</h2>
            <ul>
                <li><a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        yield "\">Home</a></li>
                <li>Categories</li>
            </ul>
        </div>
    </div>
</div>

<!-- Feature Section -->
<div class=\"feature-area pt-100 pb-70\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">

            <div class=\"col-sm-6 col-lg-4\">
                <div class=\"feature-item\">
                    <img src=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/home-one/feature1.jpg"), "html", null, true);
        yield "\" alt=\"\">
                    <div class=\"feature-inner\">
                        <span>Fast Food</span>
                    </div>
                </div>
            </div>

            <div class=\"col-sm-6 col-lg-4\">
                <div class=\"feature-item\">
                    <img src=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/home-one/feature2.jpg"), "html", null, true);
        yield "\" alt=\"\">
                    <div class=\"feature-inner\">
                        <span>Hot Platter</span>
                    </div>
                </div>
            </div>

            <div class=\"col-sm-6 col-lg-4\">
                <div class=\"feature-item\">
                    <img src=\"";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/home-one/feature3.jpg"), "html", null, true);
        yield "\" alt=\"\">
                    <div class=\"feature-inner\">
                        <span>Dessert</span>
                    </div>
                </div>
            </div>

            <div class=\"col-sm-6 col-lg-4\">
                <div class=\"feature-item\">
                    <img src=\"";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/home-one/feature4.jpg"), "html", null, true);
        yield "\" alt=\"\">
                    <div class=\"feature-inner\">
                        <span>Asian Food</span>
                    </div>
                </div>
            </div>

            <div class=\"col-sm-6 col-lg-4\">
                <div class=\"feature-item\">
                    <img src=\"";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/home-one/feature5.jpg"), "html", null, true);
        yield "\" alt=\"\">
                    <div class=\"feature-inner\">
                        <span>Desi Food</span>
                    </div>
                </div>
            </div>

            <div class=\"col-sm-6 col-lg-4\">
                <div class=\"feature-item\">
                    <img src=\"";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/home-one/feature6.jpg"), "html", null, true);
        yield "\" alt=\"\">
                    <div class=\"feature-inner\">
                        <span>Chinese Food</span>
                    </div>
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
        return "Categorie/index.html.twig";
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
        return array (  186 => 72,  174 => 63,  162 => 54,  150 => 45,  138 => 36,  126 => 27,  109 => 13,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Categories{% endblock %}

{% block body %}

<!-- Page Title -->
<div class=\"page-title-area page-title-img-one\">
    <div class=\"container\">
        <div class=\"page-title-item\">
            <h2>Categories</h2>
            <ul>
                <li><a href=\"{{ path('home') }}\">Home</a></li>
                <li>Categories</li>
            </ul>
        </div>
    </div>
</div>

<!-- Feature Section -->
<div class=\"feature-area pt-100 pb-70\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">

            <div class=\"col-sm-6 col-lg-4\">
                <div class=\"feature-item\">
                    <img src=\"{{ asset('assets/img/home-one/feature1.jpg') }}\" alt=\"\">
                    <div class=\"feature-inner\">
                        <span>Fast Food</span>
                    </div>
                </div>
            </div>

            <div class=\"col-sm-6 col-lg-4\">
                <div class=\"feature-item\">
                    <img src=\"{{ asset('assets/img/home-one/feature2.jpg') }}\" alt=\"\">
                    <div class=\"feature-inner\">
                        <span>Hot Platter</span>
                    </div>
                </div>
            </div>

            <div class=\"col-sm-6 col-lg-4\">
                <div class=\"feature-item\">
                    <img src=\"{{ asset('assets/img/home-one/feature3.jpg') }}\" alt=\"\">
                    <div class=\"feature-inner\">
                        <span>Dessert</span>
                    </div>
                </div>
            </div>

            <div class=\"col-sm-6 col-lg-4\">
                <div class=\"feature-item\">
                    <img src=\"{{ asset('assets/img/home-one/feature4.jpg') }}\" alt=\"\">
                    <div class=\"feature-inner\">
                        <span>Asian Food</span>
                    </div>
                </div>
            </div>

            <div class=\"col-sm-6 col-lg-4\">
                <div class=\"feature-item\">
                    <img src=\"{{ asset('assets/img/home-one/feature5.jpg') }}\" alt=\"\">
                    <div class=\"feature-inner\">
                        <span>Desi Food</span>
                    </div>
                </div>
            </div>

            <div class=\"col-sm-6 col-lg-4\">
                <div class=\"feature-item\">
                    <img src=\"{{ asset('assets/img/home-one/feature6.jpg') }}\" alt=\"\">
                    <div class=\"feature-inner\">
                        <span>Chinese Food</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

{% endblock %}", "Categorie/index.html.twig", "/home/vboxuser/projet_recettes/templates/Categorie/index.html.twig");
    }
}
