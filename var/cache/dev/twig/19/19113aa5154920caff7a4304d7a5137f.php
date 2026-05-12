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
class __TwigTemplate_32131db724799bd84f7d9e16e41677e8 extends Template
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
        yield "<div class=\"navbar-area fixed-top\">
    <div class=\"mobile-nav\">
        <a href=\"";
        // line 3
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_accueil");
        yield "\" class=\"logo\">
            <img src=\"";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo-two.png"), "html", null, true);
        yield "\" alt=\"Logo\">
        </a>
    </div>

    <div class=\"main-nav\">
        <div class=\"container\">
            <nav class=\"navbar navbar-expand-md navbar-light\">
                <a class=\"navbar-brand\" href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_accueil");
        yield "\">
                    <img src=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo.png"), "html", null, true);
        yield "\" class=\"logo-one\" alt=\"Logo\">
                    <img src=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo-two.png"), "html", null, true);
        yield "\" class=\"logo-two\" alt=\"Logo\">
                </a>

                <div class=\"collapse navbar-collapse mean-menu\">
                    <ul class=\"navbar-nav\">
                        <li class=\"nav-item\">
                            <a href=\"";
        // line 19
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_accueil");
        yield "\" class=\"nav-link active\">Home</a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"";
        // line 22
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tag_recette");
        yield "\" class=\"nav-link\">Tags</a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"";
        // line 25
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_recettes");
        yield "\" class=\"nav-link\">Recettes</a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"";
        // line 28
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categories");
        yield "\" class=\"nav-link\">Catégories</a>
                        </li>


                            ";
        // line 32
        if ((($tmp =  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 33
            yield "                              
                                    <li class=\"nav-item\">
                                        <a href=\"";
            // line 35
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_envoyer");
            yield "\" class=\"nav-link text-warning fw-bold\">
                                            <i class=\"fas fa-utensils\"></i> Demande de Rôle
                                        </a>
                                    </li>
                               
                            ";
        }
        // line 41
        yield "
                            ";
        // line 42
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 43
            yield "                                <li class=\"nav-item\">
                                    <a href=\"";
            // line 44
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_role_requests");
            yield "\" class=\"nav-link fw-bold\" style=\"color: #0d6efd;\">
                                        <i class=\"fas fa-clipboard-list\"></i> Demandes
                                    </a>
                                </li>
                            ";
        }
        // line 49
        yield "                      
                    </ul>

                    <div class=\"side-nav ms-auto\">
                        <div class=\"d-flex align-items-center\">
                            ";
        // line 54
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 54, $this->source); })()), "user", [], "any", false, false, false, 54)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 55
            yield "                                <div class=\"user-info-box me-3\" style=\"background: #fff3cd; padding: 5px 15px; border-radius: 30px; border: 1px solid #ffc107;\">
                                   <span style=\"color: #333; font-weight: 600;\">👋   pseudo :";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 56, $this->source); })()), "user", [], "any", false, false, false, 56), "pseudo", [], "any", false, false, false, 56)), "html", null, true);
            yield "</span>
                                    <span class=\"badge\" style=\"background-color: #FFC107; color: #000; margin-left: 5px; font-size: 0.75rem;\">
                                      role:  ";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 58, $this->source); })()), "user", [], "any", false, false, false, 58), "roles", [], "any", false, false, false, 58), 0, [], "array", false, false, false, 58), ["ROLE_" => ""])), "html", null, true);
            yield "
                                    </span>
                                </div>
                                <a class=\"nav-tel\" href=\"";
            // line 61
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\" style=\"background: #dc3545; color: white; padding: 8px 15px; border-radius: 5px; text-decoration: none;\">
                                    Log Out
                                </a>
                            ";
        } else {
            // line 65
            yield "                                <a class=\"nav-tel me-2\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\">Log In</a>
                                <a class=\"nav-tel\" href=\"";
            // line 66
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            yield "\">Register</a>
                            ";
        }
        // line 68
        yield "                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>";
        
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
        return array (  179 => 68,  174 => 66,  169 => 65,  162 => 61,  156 => 58,  151 => 56,  148 => 55,  146 => 54,  139 => 49,  131 => 44,  128 => 43,  126 => 42,  123 => 41,  114 => 35,  110 => 33,  108 => 32,  101 => 28,  95 => 25,  89 => 22,  83 => 19,  74 => 13,  70 => 12,  66 => 11,  56 => 4,  52 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"navbar-area fixed-top\">
    <div class=\"mobile-nav\">
        <a href=\"{{ path('app_accueil') }}\" class=\"logo\">
            <img src=\"{{ asset('assets/img/logo-two.png') }}\" alt=\"Logo\">
        </a>
    </div>

    <div class=\"main-nav\">
        <div class=\"container\">
            <nav class=\"navbar navbar-expand-md navbar-light\">
                <a class=\"navbar-brand\" href=\"{{ path('app_accueil') }}\">
                    <img src=\"{{ asset('assets/img/logo.png') }}\" class=\"logo-one\" alt=\"Logo\">
                    <img src=\"{{ asset('assets/img/logo-two.png') }}\" class=\"logo-two\" alt=\"Logo\">
                </a>

                <div class=\"collapse navbar-collapse mean-menu\">
                    <ul class=\"navbar-nav\">
                        <li class=\"nav-item\">
                            <a href=\"{{ path('app_accueil') }}\" class=\"nav-link active\">Home</a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"{{ path('app_tag_recette') }}\" class=\"nav-link\">Tags</a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"{{ path('app_recettes') }}\" class=\"nav-link\">Recettes</a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"{{ path('app_categories') }}\" class=\"nav-link\">Catégories</a>
                        </li>


                            {% if not is_granted('ROLE_ADMIN')  %}
                              
                                    <li class=\"nav-item\">
                                        <a href=\"{{ path('app_envoyer') }}\" class=\"nav-link text-warning fw-bold\">
                                            <i class=\"fas fa-utensils\"></i> Demande de Rôle
                                        </a>
                                    </li>
                               
                            {% endif %}

                            {% if is_granted('ROLE_ADMIN') %}
                                <li class=\"nav-item\">
                                    <a href=\"{{ path('admin_role_requests') }}\" class=\"nav-link fw-bold\" style=\"color: #0d6efd;\">
                                        <i class=\"fas fa-clipboard-list\"></i> Demandes
                                    </a>
                                </li>
                            {% endif %}
                      
                    </ul>

                    <div class=\"side-nav ms-auto\">
                        <div class=\"d-flex align-items-center\">
                            {% if app.user %}
                                <div class=\"user-info-box me-3\" style=\"background: #fff3cd; padding: 5px 15px; border-radius: 30px; border: 1px solid #ffc107;\">
                                   <span style=\"color: #333; font-weight: 600;\">👋   pseudo :{{ app.user.pseudo|capitalize }}</span>
                                    <span class=\"badge\" style=\"background-color: #FFC107; color: #000; margin-left: 5px; font-size: 0.75rem;\">
                                      role:  {{ app.user.roles[0]|replace({'ROLE_': ''})|capitalize }}
                                    </span>
                                </div>
                                <a class=\"nav-tel\" href=\"{{ path('app_logout') }}\" style=\"background: #dc3545; color: white; padding: 8px 15px; border-radius: 5px; text-decoration: none;\">
                                    Log Out
                                </a>
                            {% else %}
                                <a class=\"nav-tel me-2\" href=\"{{ path('app_login') }}\">Log In</a>
                                <a class=\"nav-tel\" href=\"{{ path('app_register') }}\">Register</a>
                            {% endif %}
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>", "partials/navbar.html.twig", "/home/useradm/miniprojet2026-ines_maram/templates/partials/navbar.html.twig");
    }
}
