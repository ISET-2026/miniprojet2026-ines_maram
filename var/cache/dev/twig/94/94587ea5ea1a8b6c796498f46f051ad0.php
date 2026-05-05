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
class __TwigTemplate_656f2bbe59decbcb8a140bc2329ff2de extends Template
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

        yield "Register";
        
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
<div style=\"min-height:100vh; background:#f8f9fa; display:flex; align-items:center; justify-content:center;\">

    <div style=\"width:100%; max-width:450px;\">

        <div class=\"card shadow-lg border-0 rounded-4\">

            <div class=\"card-body p-4\">

                <h3 class=\"text-center mb-4\">Create Account 🍽️</h3>

                ";
        // line 17
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 17, $this->source); })()), 'errors');
        yield "

                ";
        // line 19
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 19, $this->source); })()), 'form_start');
        yield "
                <div class=\"mb-3\">
                        ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 21, $this->source); })()), "pseudo", [], "any", false, false, false, 21), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                        ";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 22, $this->source); })()), "pseudo", [], "any", false, false, false, 22), 'widget', ["attr" => ["class" => "form-control p-2", "placeholder" => "Enter your pseudo"]]);
        // line 27
        yield "
                        <div class=\"text-danger small\">
                            ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 29, $this->source); })()), "pseudo", [], "any", false, false, false, 29), 'errors');
        yield "
                        </div>
                    </div>

                    <!-- EMAIL -->
                    <div class=\"mb-3\">
                        ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 35, $this->source); })()), "email", [], "any", false, false, false, 35), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                        ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 36, $this->source); })()), "email", [], "any", false, false, false, 36), 'widget', ["attr" => ["class" => "form-control p-2", "placeholder" => "Enter your email"]]);
        // line 41
        yield "
                        <div class=\"text-danger small\">
                            ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 43, $this->source); })()), "email", [], "any", false, false, false, 43), 'errors');
        yield "
                        </div>
                    </div>

                    <!-- PASSWORD -->
                    <div class=\"mb-3\">
                        ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 49, $this->source); })()), "plainPassword", [], "any", false, false, false, 49), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Password"]);
        yield "
                        ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 50, $this->source); })()), "plainPassword", [], "any", false, false, false, 50), 'widget', ["attr" => ["class" => "form-control p-2", "placeholder" => "Enter your password"]]);
        // line 55
        yield "
                        <div class=\"text-danger small\">
                            ";
        // line 57
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 57, $this->source); })()), "plainPassword", [], "any", false, false, false, 57), 'errors');
        yield "
                        </div>
                    </div>

                    <!-- TERMS -->
                    <div class=\"mb-3\">
                        ";
        // line 63
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 63, $this->source); })()), "agreeTerms", [], "any", false, false, false, 63), 'row');
        yield "
                    </div>

                    <!-- BUTTON -->
                    <button type=\"submit\"
                            class=\"btn w-100 py-2 mt-2\"
                            style=\"background-color:#FFC107; border:none; font-weight:bold; color:black;\">
                        Register
                    </button>

                ";
        // line 73
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 73, $this->source); })()), 'form_end');
        yield "

                <p class=\"text-center mt-3 mb-0\">
                    Already have an account?
                    <a href=\"";
        // line 77
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\">Login</a>
                </p>

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
        return array (  200 => 77,  193 => 73,  180 => 63,  171 => 57,  167 => 55,  165 => 50,  161 => 49,  152 => 43,  148 => 41,  146 => 36,  142 => 35,  133 => 29,  129 => 27,  127 => 22,  123 => 21,  118 => 19,  113 => 17,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Register{% endblock %}

{% block body %}

<div style=\"min-height:100vh; background:#f8f9fa; display:flex; align-items:center; justify-content:center;\">

    <div style=\"width:100%; max-width:450px;\">

        <div class=\"card shadow-lg border-0 rounded-4\">

            <div class=\"card-body p-4\">

                <h3 class=\"text-center mb-4\">Create Account 🍽️</h3>

                {{ form_errors(registrationForm) }}

                {{ form_start(registrationForm) }}
                <div class=\"mb-3\">
                        {{ form_label(registrationForm.pseudo, null, {'label_attr': {'class': 'form-label'}}) }}
                        {{ form_widget(registrationForm.pseudo, {
                            'attr': {
                                'class': 'form-control p-2',
                                'placeholder': 'Enter your pseudo'
                            }
                        }) }}
                        <div class=\"text-danger small\">
                            {{ form_errors(registrationForm.pseudo) }}
                        </div>
                    </div>

                    <!-- EMAIL -->
                    <div class=\"mb-3\">
                        {{ form_label(registrationForm.email, null, {'label_attr': {'class': 'form-label'}}) }}
                        {{ form_widget(registrationForm.email, {
                            'attr': {
                                'class': 'form-control p-2',
                                'placeholder': 'Enter your email'
                            }
                        }) }}
                        <div class=\"text-danger small\">
                            {{ form_errors(registrationForm.email) }}
                        </div>
                    </div>

                    <!-- PASSWORD -->
                    <div class=\"mb-3\">
                        {{ form_label(registrationForm.plainPassword, 'Password', {'label_attr': {'class': 'form-label'}}) }}
                        {{ form_widget(registrationForm.plainPassword, {
                            'attr': {
                                'class': 'form-control p-2',
                                'placeholder': 'Enter your password'
                            }
                        }) }}
                        <div class=\"text-danger small\">
                            {{ form_errors(registrationForm.plainPassword) }}
                        </div>
                    </div>

                    <!-- TERMS -->
                    <div class=\"mb-3\">
                        {{ form_row(registrationForm.agreeTerms) }}
                    </div>

                    <!-- BUTTON -->
                    <button type=\"submit\"
                            class=\"btn w-100 py-2 mt-2\"
                            style=\"background-color:#FFC107; border:none; font-weight:bold; color:black;\">
                        Register
                    </button>

                {{ form_end(registrationForm) }}

                <p class=\"text-center mt-3 mb-0\">
                    Already have an account?
                    <a href=\"{{ path('app_login') }}\">Login</a>
                </p>

            </div>

        </div>

    </div>

</div>

{% endblock %}", "registration/index.html.twig", "/home/vboxuser/projet_recettes/projet_recette/templates/registration/index.html.twig");
    }
}
