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
<!-- Page Title -->
<div class=\"page-title-area page-title-img-one\">
    <div class=\"container\">
        <div class=\"page-title-item\">
            <h2>Register</h2>

            <ul>
                <li><a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        yield "\">Home</a></li>
                <li><i class='bx bx-chevron-right'></i></li>
                <li>Register</li>
            </ul>
        </div>
    </div>
</div>

<!-- Register Section -->
<section class=\"pt-5 pb-5\" style=\"background: #f8f9fa;\">
    <div class=\"container\">

        <div class=\"row justify-content-center\">
            <div class=\"col-lg-6 col-md-8\">

                <div class=\"card shadow-lg border-0 rounded-4\">
                    <div class=\"card-body p-5\">

                        <h3 class=\"text-center mb-4\">Create your account</h3>

                        ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 34, $this->source); })()), 'errors');
        yield "

                        ";
        // line 36
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 36, $this->source); })()), 'form_start');
        yield "

                        <!-- PSEUDO -->
                        <div class=\"mb-3\">
                            <label class=\"form-label\">Pseudo</label>
                            <div class=\"mt-1\">
                                ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 42, $this->source); })()), "pseudo", [], "any", false, false, false, 42), 'widget', ["attr" => ["class" => "form-control border rounded-3 p-2"]]);
        // line 44
        yield "
                            </div>
                            ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 46, $this->source); })()), "pseudo", [], "any", false, false, false, 46), 'errors');
        yield "
                        </div>

                        <!-- EMAIL -->
                        <div class=\"mb-3\">
                            <label class=\"form-label\">Email</label>
                            <div class=\"mt-1\">
                                ";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 53, $this->source); })()), "email", [], "any", false, false, false, 53), 'widget', ["attr" => ["class" => "form-control border rounded-3 p-2"]]);
        // line 55
        yield "
                            </div>
                            ";
        // line 57
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 57, $this->source); })()), "email", [], "any", false, false, false, 57), 'errors');
        yield "
                        </div>

                        <!-- PASSWORD -->
                        <div class=\"mb-3\">
                            <label class=\"form-label\">Password</label>
                            <div class=\"mt-1\">
                                ";
        // line 64
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 64, $this->source); })()), "plainPassword", [], "any", false, false, false, 64), 'widget', ["attr" => ["class" => "form-control border rounded-3 p-2"]]);
        // line 66
        yield "
                            </div>
                            ";
        // line 68
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 68, $this->source); })()), "plainPassword", [], "any", false, false, false, 68), 'errors');
        yield "
                        </div>

                        <!-- TERMS -->
                        <div class=\"mb-3 form-check\">
                            ";
        // line 73
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 73, $this->source); })()), "agreeTerms", [], "any", false, false, false, 73), 'widget');
        yield "
                            <label class=\"form-check-label ms-2\">
                                I agree to the terms
                            </label>
                        </div>

                        <!-- BUTTON -->
                        <button type=\"submit\"
                                class=\"btn w-100 py-2 mt-3\"
                                style=\"background-color: #FFC107; border: none; color: black; font-weight: bold;\">
                            Register
                        </button>

                        ";
        // line 86
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 86, $this->source); })()), 'form_end');
        yield "

                        <p class=\"text-center mt-3 mb-0\">
                            Already have an account?
                            <a href=\"";
        // line 90
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\">Login</a>
                        </p>

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
        return array (  216 => 90,  209 => 86,  193 => 73,  185 => 68,  181 => 66,  179 => 64,  169 => 57,  165 => 55,  163 => 53,  153 => 46,  149 => 44,  147 => 42,  138 => 36,  133 => 34,  110 => 14,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Register{% endblock %}

{% block body %}

<!-- Page Title -->
<div class=\"page-title-area page-title-img-one\">
    <div class=\"container\">
        <div class=\"page-title-item\">
            <h2>Register</h2>

            <ul>
                <li><a href=\"{{ path('home') }}\">Home</a></li>
                <li><i class='bx bx-chevron-right'></i></li>
                <li>Register</li>
            </ul>
        </div>
    </div>
</div>

<!-- Register Section -->
<section class=\"pt-5 pb-5\" style=\"background: #f8f9fa;\">
    <div class=\"container\">

        <div class=\"row justify-content-center\">
            <div class=\"col-lg-6 col-md-8\">

                <div class=\"card shadow-lg border-0 rounded-4\">
                    <div class=\"card-body p-5\">

                        <h3 class=\"text-center mb-4\">Create your account</h3>

                        {{ form_errors(registrationForm) }}

                        {{ form_start(registrationForm) }}

                        <!-- PSEUDO -->
                        <div class=\"mb-3\">
                            <label class=\"form-label\">Pseudo</label>
                            <div class=\"mt-1\">
                                {{ form_widget(registrationForm.pseudo, {
                                    'attr': {'class': 'form-control border rounded-3 p-2'}
                                }) }}
                            </div>
                            {{ form_errors(registrationForm.pseudo) }}
                        </div>

                        <!-- EMAIL -->
                        <div class=\"mb-3\">
                            <label class=\"form-label\">Email</label>
                            <div class=\"mt-1\">
                                {{ form_widget(registrationForm.email, {
                                    'attr': {'class': 'form-control border rounded-3 p-2'}
                                }) }}
                            </div>
                            {{ form_errors(registrationForm.email) }}
                        </div>

                        <!-- PASSWORD -->
                        <div class=\"mb-3\">
                            <label class=\"form-label\">Password</label>
                            <div class=\"mt-1\">
                                {{ form_widget(registrationForm.plainPassword, {
                                    'attr': {'class': 'form-control border rounded-3 p-2'}
                                }) }}
                            </div>
                            {{ form_errors(registrationForm.plainPassword) }}
                        </div>

                        <!-- TERMS -->
                        <div class=\"mb-3 form-check\">
                            {{ form_widget(registrationForm.agreeTerms) }}
                            <label class=\"form-check-label ms-2\">
                                I agree to the terms
                            </label>
                        </div>

                        <!-- BUTTON -->
                        <button type=\"submit\"
                                class=\"btn w-100 py-2 mt-3\"
                                style=\"background-color: #FFC107; border: none; color: black; font-weight: bold;\">
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

    </div>
</section>

{% endblock %}", "registration/index.html.twig", "/home/vboxuser/projet_recettes/templates/registration/index.html.twig");
    }
}
