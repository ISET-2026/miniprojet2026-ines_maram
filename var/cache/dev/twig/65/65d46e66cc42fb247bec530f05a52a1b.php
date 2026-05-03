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

/* registration/index.html.twig */
class __TwigTemplate_6d63c4f08bf324f691757f42a6a5c6d1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/index.html.twig"));

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

        yield "Checkout";
        
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
            <h2>Checkout</h2>

            <ul>
                <li>
                    <a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        yield "\">Home</a>
                </li>

                <li>
                    <i class='bx bx-chevron-right'></i>
                </li>

                <li>Checkout</li>
            </ul>
        </div>
    </div>
</div>

<!-- Checkout Area -->
<section class=\"checkout-area ptb-100\">
    <div class=\"container\">

        <div class=\"row justify-content-center\">

            <!-- Customer Details -->
            <div class=\"col-lg-6\">
                <div class=\"checkout-item\">

                    <h2>Customer Details</h2>

                    <div class=\"checkout-one\">

                        ";
        // line 42
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), 'form_start');
        yield "

                            <div class=\"form-group\">
                                ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "firstName", [], "any", false, false, false, 45), 'label');
        yield "
                                ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "firstName", [], "any", false, false, false, 46), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 48
        yield "
                                ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "firstName", [], "any", false, false, false, 49), 'errors');
        yield "
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "lastName", [], "any", false, false, false, 53), 'label');
        yield "
                                ";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "lastName", [], "any", false, false, false, 54), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 56
        yield "
                                ";
        // line 57
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "lastName", [], "any", false, false, false, 57), 'errors');
        yield "
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "address", [], "any", false, false, false, 61), 'label');
        yield "
                                ";
        // line 62
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "address", [], "any", false, false, false, 62), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 64
        yield "
                                ";
        // line 65
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "address", [], "any", false, false, false, 65), 'errors');
        yield "
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 69
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "city", [], "any", false, false, false, 69), 'label');
        yield "
                                ";
        // line 70
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "city", [], "any", false, false, false, 70), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 72
        yield "
                                ";
        // line 73
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "city", [], "any", false, false, false, 73), 'errors');
        yield "
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 77
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "postalCode", [], "any", false, false, false, 77), 'label');
        yield "
                                ";
        // line 78
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "postalCode", [], "any", false, false, false, 78), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 80
        yield "
                                ";
        // line 81
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "postalCode", [], "any", false, false, false, 81), 'errors');
        yield "
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 85
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "country", [], "any", false, false, false, 85), 'label');
        yield "
                                ";
        // line 86
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "country", [], "any", false, false, false, 86), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 88
        yield "
                                ";
        // line 89
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "country", [], "any", false, false, false, 89), 'errors');
        yield "
                            </div>

                            <button type=\"submit\" class=\"btn btn-primary mt-3\">
                                Place Order
                            </button>

                        ";
        // line 96
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), 'form_end');
        yield "

                    </div>
                </div>
            </div>

            <!-- Order Summary -->
            <div class=\"col-lg-6\">
                <div class=\"checkout-item\">

                    <h2>Order Summary</h2>

                    <div class=\"checkout-order\">
                        <ul>
                            <li>
                                Product 1
                                <span>\$50</span>
                            </li>

                            <li>
                                Product 2
                                <span>\$30</span>
                            </li>

                            <li>
                                Total
                                <span>\$80</span>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>

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
        return "registration/index.html.twig";
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
        return array (  246 => 96,  236 => 89,  233 => 88,  231 => 86,  227 => 85,  220 => 81,  217 => 80,  215 => 78,  211 => 77,  204 => 73,  201 => 72,  199 => 70,  195 => 69,  188 => 65,  185 => 64,  183 => 62,  179 => 61,  172 => 57,  169 => 56,  167 => 54,  163 => 53,  156 => 49,  153 => 48,  151 => 46,  147 => 45,  141 => 42,  111 => 15,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Checkout{% endblock %}

{% block body %}

<!-- Page Title -->
<div class=\"page-title-area page-title-img-one\">
    <div class=\"container\">
        <div class=\"page-title-item\">
            <h2>Checkout</h2>

            <ul>
                <li>
                    <a href=\"{{ path('home') }}\">Home</a>
                </li>

                <li>
                    <i class='bx bx-chevron-right'></i>
                </li>

                <li>Checkout</li>
            </ul>
        </div>
    </div>
</div>

<!-- Checkout Area -->
<section class=\"checkout-area ptb-100\">
    <div class=\"container\">

        <div class=\"row justify-content-center\">

            <!-- Customer Details -->
            <div class=\"col-lg-6\">
                <div class=\"checkout-item\">

                    <h2>Customer Details</h2>

                    <div class=\"checkout-one\">

                        {{ form_start(form) }}

                            <div class=\"form-group\">
                                {{ form_label(form.firstName) }}
                                {{ form_widget(form.firstName, {
                                    'attr': {'class': 'form-control'}
                                }) }}
                                {{ form_errors(form.firstName) }}
                            </div>

                            <div class=\"form-group\">
                                {{ form_label(form.lastName) }}
                                {{ form_widget(form.lastName, {
                                    'attr': {'class': 'form-control'}
                                }) }}
                                {{ form_errors(form.lastName) }}
                            </div>

                            <div class=\"form-group\">
                                {{ form_label(form.address) }}
                                {{ form_widget(form.address, {
                                    'attr': {'class': 'form-control'}
                                }) }}
                                {{ form_errors(form.address) }}
                            </div>

                            <div class=\"form-group\">
                                {{ form_label(form.city) }}
                                {{ form_widget(form.city, {
                                    'attr': {'class': 'form-control'}
                                }) }}
                                {{ form_errors(form.city) }}
                            </div>

                            <div class=\"form-group\">
                                {{ form_label(form.postalCode) }}
                                {{ form_widget(form.postalCode, {
                                    'attr': {'class': 'form-control'}
                                }) }}
                                {{ form_errors(form.postalCode) }}
                            </div>

                            <div class=\"form-group\">
                                {{ form_label(form.country) }}
                                {{ form_widget(form.country, {
                                    'attr': {'class': 'form-control'}
                                }) }}
                                {{ form_errors(form.country) }}
                            </div>

                            <button type=\"submit\" class=\"btn btn-primary mt-3\">
                                Place Order
                            </button>

                        {{ form_end(form) }}

                    </div>
                </div>
            </div>

            <!-- Order Summary -->
            <div class=\"col-lg-6\">
                <div class=\"checkout-item\">

                    <h2>Order Summary</h2>

                    <div class=\"checkout-order\">
                        <ul>
                            <li>
                                Product 1
                                <span>\$50</span>
                            </li>

                            <li>
                                Product 2
                                <span>\$30</span>
                            </li>

                            <li>
                                Total
                                <span>\$80</span>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>

        </div>

    </div>
</section>

{% endblock %}", "registration/index.html.twig", "/home/vboxuser/projet_recettes/templates/registration/index.html.twig");
    }
}
