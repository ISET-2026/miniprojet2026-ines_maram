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

/* partials/footer.html.twig */
class __TwigTemplate_18122811d2c69f347f368e78a7e8c149 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/footer.html.twig"));

        // line 1
        yield "<!-- Footer -->
<footer class=\"pt-100 pb-70\">

    <div class=\"container\">

        <div class=\"row justify-content-center\">

            <div class=\"col-sm-6 col-lg-3\">

                <div class=\"footer-item\">

                    <div class=\"footer-logo\">

                        <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_accueil");
        yield "\">

                            <img src=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo.png"), "html", null, true);
        yield "\"
                                class=\"footer-logo1\"
                                alt=\"Logo\">

                            <img src=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo-two.png"), "html", null, true);
        yield "\"
                                class=\"footer-logo2\"
                                alt=\"Logo\">

                        </a>

                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        </p>

                    </div>

                </div>

            </div>

            <div class=\"col-sm-6 col-lg-3\">

                <div class=\"footer-service\">

                    <h3>Services</h3>

                    <ul>

                        <li>
                            <a href=\"#\">
                                <i class='bx bx-chevron-right'></i>
                                Support
                            </a>
                        </li>

                        <li>
                            <a href=\"#\">
                                <i class='bx bx-chevron-right'></i>
                                Career
                            </a>
                        </li>

                        <li>
                            <a href=\"#\">
                                <i class='bx bx-chevron-right'></i>
                                Chefs
                            </a>
                        </li>

                    </ul>

                </div>

            </div>

            <div class=\"col-sm-6 col-lg-3\">

                <div class=\"footer-service\">

                    <h3>Quick Links</h3>

                    <ul>

                        <li>
                            <a href=\"#\">
                                <i class='bx bx-chevron-right'></i>
                                Services
                            </a>
                        </li>

                        <li>
                            <a href=\"#\">
                                <i class='bx bx-chevron-right'></i>
                                Blog
                            </a>
                        </li>

                        <li>
                            <a href=\"#\">
                                <i class='bx bx-chevron-right'></i>
                                Contact
                            </a>
                        </li>

                    </ul>

                </div>

            </div>

            <div class=\"col-sm-6 col-lg-3\">

                <div class=\"footer-service\">

                    <h3>Contact Us</h3>

                    <ul>

                        <li>
                            <a href=\"tel:+1123456789\">
                                <i class='bx bx-phone-call'></i>
                                +1 1234 56 789
                            </a>
                        </li>

                        <li>
                            <i class='bx bx-location-plus'></i>
                            New York, USA
                        </li>

                    </ul>

                </div>

            </div>

        </div>

    </div>

</footer>
<!-- End Footer -->

<!-- Copyright -->
<div class=\"copyright-area\">

    <div class=\"container\">

        <div class=\"copyright-item\">

            <p>
                © Restant Template
            </p>

        </div>

    </div>

</div>
<!-- End Copyright -->";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/footer.html.twig";
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
        return array (  75 => 20,  68 => 16,  63 => 14,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!-- Footer -->
<footer class=\"pt-100 pb-70\">

    <div class=\"container\">

        <div class=\"row justify-content-center\">

            <div class=\"col-sm-6 col-lg-3\">

                <div class=\"footer-item\">

                    <div class=\"footer-logo\">

                        <a href=\"{{ path('app_accueil') }}\">

                            <img src=\"{{ asset('assets/img/logo.png') }}\"
                                class=\"footer-logo1\"
                                alt=\"Logo\">

                            <img src=\"{{ asset('assets/img/logo-two.png') }}\"
                                class=\"footer-logo2\"
                                alt=\"Logo\">

                        </a>

                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        </p>

                    </div>

                </div>

            </div>

            <div class=\"col-sm-6 col-lg-3\">

                <div class=\"footer-service\">

                    <h3>Services</h3>

                    <ul>

                        <li>
                            <a href=\"#\">
                                <i class='bx bx-chevron-right'></i>
                                Support
                            </a>
                        </li>

                        <li>
                            <a href=\"#\">
                                <i class='bx bx-chevron-right'></i>
                                Career
                            </a>
                        </li>

                        <li>
                            <a href=\"#\">
                                <i class='bx bx-chevron-right'></i>
                                Chefs
                            </a>
                        </li>

                    </ul>

                </div>

            </div>

            <div class=\"col-sm-6 col-lg-3\">

                <div class=\"footer-service\">

                    <h3>Quick Links</h3>

                    <ul>

                        <li>
                            <a href=\"#\">
                                <i class='bx bx-chevron-right'></i>
                                Services
                            </a>
                        </li>

                        <li>
                            <a href=\"#\">
                                <i class='bx bx-chevron-right'></i>
                                Blog
                            </a>
                        </li>

                        <li>
                            <a href=\"#\">
                                <i class='bx bx-chevron-right'></i>
                                Contact
                            </a>
                        </li>

                    </ul>

                </div>

            </div>

            <div class=\"col-sm-6 col-lg-3\">

                <div class=\"footer-service\">

                    <h3>Contact Us</h3>

                    <ul>

                        <li>
                            <a href=\"tel:+1123456789\">
                                <i class='bx bx-phone-call'></i>
                                +1 1234 56 789
                            </a>
                        </li>

                        <li>
                            <i class='bx bx-location-plus'></i>
                            New York, USA
                        </li>

                    </ul>

                </div>

            </div>

        </div>

    </div>

</footer>
<!-- End Footer -->

<!-- Copyright -->
<div class=\"copyright-area\">

    <div class=\"container\">

        <div class=\"copyright-item\">

            <p>
                © Restant Template
            </p>

        </div>

    </div>

</div>
<!-- End Copyright -->", "partials/footer.html.twig", "/home/vboxuser/Documents/miniprojet2026-ines_maram/templates/partials/footer.html.twig");
    }
}
