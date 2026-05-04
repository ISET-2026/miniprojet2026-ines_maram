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

/* login/index.html.twig */
class __TwigTemplate_88b6a755bb8cf943a7689d074f03688e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/index.html.twig"));

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

        yield "Login";
        
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
<div style=\"min-height: 100vh; background: #f8f9fa; display: flex; align-items: center; justify-content: center;\">

    <div style=\"width: 200%; max-width: 700px; height:700px\">

        <div class=\"card shadow-lg border-0 rounded-4\">

            <div class=\"card-body\" style=\"padding: 3rem;\">

                <h3 class=\"text-center mb-4\">Welcome Back 👋</h3>

                ";
        // line 17
        if ((($tmp = (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 17, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 18
            yield "                    <div class=\"alert alert-danger text-center\">
                        ";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 19, $this->source); })()), "messageKey", [], "any", false, false, false, 19), CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 19, $this->source); })()), "messageData", [], "any", false, false, false, 19), "security"), "html", null, true);
            yield "
                    </div>
                ";
        }
        // line 22
        yield "
                ";
        // line 23
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "user", [], "any", false, false, false, 23)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 24
            yield "                    <div class=\"alert alert-success text-center\">
                        Logged in as <strong>";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "user", [], "any", false, false, false, 25), "userIdentifier", [], "any", false, false, false, 25), "html", null, true);
            yield "</strong><br>
                        <a href=\"";
            // line 26
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">Logout</a>
                    </div>
                ";
        }
        // line 29
        yield "
                <form method=\"post\">

                    <!-- EMAIL -->
                    <div class=\"mb-3\">
                        <label class=\"form-label\">Email</label>
                        <input type=\"email\"
                        value=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 36, $this->source); })()), "html", null, true);
        yield "\"
                        name=\"email\"
                        class=\"form-control border rounded-3 p-2\"
                        placeholder=\"Enter your email\"
                        required autofocus>
                    </div>

                    <!-- PASSWORD -->
                    <div class=\"mb-3\">
                        <label class=\"form-label\">Password</label>
                        <input type=\"password\"
                            name=\"password\"
                            class=\"form-control border rounded-3 p-2\"
                            placeholder=\"Enter your password\"
                            required>
                    </div>

                    <!-- CSRF -->
                    <input type=\"hidden\"
                        name=\"_csrf_token\"
                        value=\"";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\">

                    <!-- BUTTON -->
                    <button type=\"submit\"
                            class=\"btn w-100 py-2 mt-3\"
                            style=\"background-color: #FFC107; border: none; color: black; font-weight: bold;\">
                        Sign in
                    </button>

                </form>

                <p class=\"text-center mt-3 mb-0\">
                    Don’t have an account?
                    <a href=\"";
        // line 69
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\">Register</a>
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
        return "login/index.html.twig";
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
        return array (  190 => 69,  174 => 56,  151 => 36,  142 => 29,  136 => 26,  132 => 25,  129 => 24,  127 => 23,  124 => 22,  118 => 19,  115 => 18,  113 => 17,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Login{% endblock %}

{% block body %}

<div style=\"min-height: 100vh; background: #f8f9fa; display: flex; align-items: center; justify-content: center;\">

    <div style=\"width: 200%; max-width: 700px; height:700px\">

        <div class=\"card shadow-lg border-0 rounded-4\">

            <div class=\"card-body\" style=\"padding: 3rem;\">

                <h3 class=\"text-center mb-4\">Welcome Back 👋</h3>

                {% if error %}
                    <div class=\"alert alert-danger text-center\">
                        {{ error.messageKey|trans(error.messageData, 'security') }}
                    </div>
                {% endif %}

                {% if app.user %}
                    <div class=\"alert alert-success text-center\">
                        Logged in as <strong>{{ app.user.userIdentifier }}</strong><br>
                        <a href=\"{{ path('app_logout') }}\">Logout</a>
                    </div>
                {% endif %}

                <form method=\"post\">

                    <!-- EMAIL -->
                    <div class=\"mb-3\">
                        <label class=\"form-label\">Email</label>
                        <input type=\"email\"
                        value=\"{{ last_username }}\"
                        name=\"email\"
                        class=\"form-control border rounded-3 p-2\"
                        placeholder=\"Enter your email\"
                        required autofocus>
                    </div>

                    <!-- PASSWORD -->
                    <div class=\"mb-3\">
                        <label class=\"form-label\">Password</label>
                        <input type=\"password\"
                            name=\"password\"
                            class=\"form-control border rounded-3 p-2\"
                            placeholder=\"Enter your password\"
                            required>
                    </div>

                    <!-- CSRF -->
                    <input type=\"hidden\"
                        name=\"_csrf_token\"
                        value=\"{{ csrf_token('authenticate') }}\">

                    <!-- BUTTON -->
                    <button type=\"submit\"
                            class=\"btn w-100 py-2 mt-3\"
                            style=\"background-color: #FFC107; border: none; color: black; font-weight: bold;\">
                        Sign in
                    </button>

                </form>

                <p class=\"text-center mt-3 mb-0\">
                    Don’t have an account?
                    <a href=\"{{ path('app_register') }}\">Register</a>
                </p>

            </div>

        </div>

    </div>

</div>

{% endblock %}", "login/index.html.twig", "/home/vboxuser/projet_recettes/templates/login/index.html.twig");
    }
}
