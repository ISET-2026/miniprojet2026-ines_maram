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

/* partials/navbar.html.twig */
class __TwigTemplate_6445d510c93ee61cecc20bc550d6198e extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/navbar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/navbar.html.twig"));

        // line 1
        yield "<!-- Navbar Area -->
<div class=\"navbar-area fixed-top\">

    <!-- Mobile Navbar -->
    <div class=\"mobile-nav\">

        <a href=\"";
        // line 7
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        yield "\" class=\"logo\">
            <img src=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo-two.png"), "html", null, true);
        yield "\" alt=\"Logo\">
        </a>

    </div>

    <!-- Desktop Navbar -->
    <div class=\"main-nav\">
        <div class=\"container\">

            <nav class=\"navbar navbar-expand-md navbar-light\">

                <a class=\"navbar-brand\" href=\"";
        // line 19
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        yield "\">

                    <img src=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo.png"), "html", null, true);
        yield "\"
                        class=\"logo-one\"
                        alt=\"Logo\">

                    <img src=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo-two.png"), "html", null, true);
        yield "\"
                        class=\"logo-two\"
                        alt=\"Logo\">

                </a>

                <div class=\"collapse navbar-collapse mean-menu\">

                    <ul class=\"navbar-nav\">

                        <li class=\"nav-item\">
                            <a href=\"";
        // line 36
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        yield "\"
                            class=\"nav-link active\">
                                Home
                            </a>
                        </li>

                        <li class=\"nav-item\">
                            <a href=\"#\"
                            class=\"nav-link\">
                                About
                            </a>
                        </li>

                        <li class=\"nav-item\">
                            <a href=\"#\"
                            class=\"nav-link\">
                                Categories
                            </a>
                        </li>

                        <li class=\"nav-item\">
                            <a href=\"#\"
                            class=\"nav-link\">
                                Services
                            </a>
                        </li>

                        <li class=\"nav-item\">
                            <a href=\"#\"
                            class=\"nav-link\">
                                Blog
                            </a>
                        </li>

                        <li class=\"nav-item\">
                            <a href=\"#\"
                                class=\"nav-link\">
                                Contact
                            </a>
                        </li>

                    </ul>

                    <div class=\"side-nav\">

                        <a class=\"nav-cart\" href=\"#\">
                            <i class='bx bxs-cart'></i>
                            <span>1</span>
                        </a>

                        <a class=\"nav-tel\" href=\"tel:+1123456789\">
                            <i class='bx bxs-phone-call'></i>
                            +1 123 456 789
                        </a>

                    </div>

                </div>

            </nav>

        </div>
    </div>

</div>
<!-- End Navbar Area -->";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/navbar.html.twig";
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
        return array (  100 => 36,  86 => 25,  79 => 21,  74 => 19,  60 => 8,  56 => 7,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!-- Navbar Area -->
<div class=\"navbar-area fixed-top\">

    <!-- Mobile Navbar -->
    <div class=\"mobile-nav\">

        <a href=\"{{ path('home') }}\" class=\"logo\">
            <img src=\"{{ asset('assets/img/logo-two.png') }}\" alt=\"Logo\">
        </a>

    </div>

    <!-- Desktop Navbar -->
    <div class=\"main-nav\">
        <div class=\"container\">

            <nav class=\"navbar navbar-expand-md navbar-light\">

                <a class=\"navbar-brand\" href=\"{{ path('home') }}\">

                    <img src=\"{{ asset('assets/img/logo.png') }}\"
                        class=\"logo-one\"
                        alt=\"Logo\">

                    <img src=\"{{ asset('assets/img/logo-two.png') }}\"
                        class=\"logo-two\"
                        alt=\"Logo\">

                </a>

                <div class=\"collapse navbar-collapse mean-menu\">

                    <ul class=\"navbar-nav\">

                        <li class=\"nav-item\">
                            <a href=\"{{ path('home') }}\"
                            class=\"nav-link active\">
                                Home
                            </a>
                        </li>

                        <li class=\"nav-item\">
                            <a href=\"#\"
                            class=\"nav-link\">
                                About
                            </a>
                        </li>

                        <li class=\"nav-item\">
                            <a href=\"#\"
                            class=\"nav-link\">
                                Categories
                            </a>
                        </li>

                        <li class=\"nav-item\">
                            <a href=\"#\"
                            class=\"nav-link\">
                                Services
                            </a>
                        </li>

                        <li class=\"nav-item\">
                            <a href=\"#\"
                            class=\"nav-link\">
                                Blog
                            </a>
                        </li>

                        <li class=\"nav-item\">
                            <a href=\"#\"
                                class=\"nav-link\">
                                Contact
                            </a>
                        </li>

                    </ul>

                    <div class=\"side-nav\">

                        <a class=\"nav-cart\" href=\"#\">
                            <i class='bx bxs-cart'></i>
                            <span>1</span>
                        </a>

                        <a class=\"nav-tel\" href=\"tel:+1123456789\">
                            <i class='bx bxs-phone-call'></i>
                            +1 123 456 789
                        </a>

                    </div>

                </div>

            </nav>

        </div>
    </div>

</div>
<!-- End Navbar Area -->", "partials/navbar.html.twig", "/home/vboxuser/projet_recettes/templates/partials/navbar.html.twig");
    }
}
