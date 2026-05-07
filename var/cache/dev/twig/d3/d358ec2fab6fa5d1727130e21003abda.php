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

/* tag_recette/index.html.twig */
class __TwigTemplate_c277cafded03baefb50d11f88debe7d5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tag_recette/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tag_recette/index.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        // line 4
        yield "<div class=\"container py-5 mt-5\">
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <div>
            <h1 class=\"display-5 fw-bold mb-0\">Tags</h1>
            <p class=\"text-muted\">";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["tagrecettes"]) || array_key_exists("tagrecettes", $context) ? $context["tagrecettes"] : (function () { throw new RuntimeError('Variable "tagrecettes" does not exist.', 8, $this->source); })())), "html", null, true);
        yield " tags</p>
        </div>
        ";
        // line 10
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CUISINIER") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
            // line 11
            yield "            <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tagrecettes_nouvelle");
            yield "\" class=\"btn btn-outline-primary px-4 py-2 rounded-pill\">
                + Nouveau tag
            </a>
        ";
        }
        // line 15
        yield "    </div>

    <div class=\"card shadow-sm border-0 rounded-3\">
        <div class=\"table-responsive\">
            <table class=\"table align-middle mb-0\">
                <thead class=\"bg-light text-uppercase small fw-bold text-muted\">
                    <tr>
                        <th class=\"ps-4 py-3\">Aperçu</th>
                        <th class=\"py-3\">Nom</th>
                        <th class=\"py-3\">Couleur</th>
                        ";
        // line 25
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CUISINIER"))) {
            // line 26
            yield "                        <th class=\"text-end pe-4 py-3\">Actions</th>
                        ";
        }
        // line 28
        yield "                    </tr>
                </thead>
                <tbody>
                    ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["tagrecettes"]) || array_key_exists("tagrecettes", $context) ? $context["tagrecettes"] : (function () { throw new RuntimeError('Variable "tagrecettes" does not exist.', 31, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 32
            yield "                        <tr style=\"height: 70px;\">
                            <td class=\"ps-4\">
                                ";
            // line 35
            yield "                                <span class=\"badge rounded-pill px-3 py-2\" 
                                      style=\"background-color: ";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "couleur", [], "any", false, false, false, 36), "html", null, true);
            yield "; color: white;\">
                                    ";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "nom", [], "any", false, false, false, 37), "html", null, true);
            yield "
                                </span>
                            </td>
                            <td>
                                <span class=\"fw-medium text-dark\">";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "nom", [], "any", false, false, false, 41), "html", null, true);
            yield "</span>
                            </td>
                            <td>
                                <div class=\"d-flex align-items-center\">
                                    <div class=\"rounded-circle me-2\" 
                                         style=\"width: 15px; height: 15px; background-color: ";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "couleur", [], "any", false, false, false, 46), "html", null, true);
            yield ";\"></div>
                                    <span class=\"text-muted font-monospace\">";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "couleur", [], "any", false, false, false, 47), "html", null, true);
            yield "</span>
                                </div>
                            </td>
                            
                      <td class=\"text-end pe-4\">
                ";
            // line 52
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CUISINIER"))) {
                // line 53
                yield "                <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tagrecettes_supprimer", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "id", [], "any", false, false, false, 53)]), "html", null, true);
                yield "\" 
                class=\"btn btn-sm btn-outline-danger\" 
                onclick=\"return confirm('Etes-vous sûr ?')\">
                    supprimer
                </a>
            ";
            }
            // line 59
            yield "</td>
                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        // line 61
        if (!$context['_iterated']) {
            // line 62
            yield "                        <tr>
                            <td colspan=\"4\" class=\"text-center py-5 text-muted\">Aucun tag trouvé.</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['tag'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        yield "                </tbody>
            </table>
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
        return "tag_recette/index.html.twig";
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
        return array (  192 => 66,  183 => 62,  181 => 61,  175 => 59,  165 => 53,  163 => 52,  155 => 47,  151 => 46,  143 => 41,  136 => 37,  132 => 36,  129 => 35,  125 => 32,  120 => 31,  115 => 28,  111 => 26,  109 => 25,  97 => 15,  89 => 11,  87 => 10,  82 => 8,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source(" {% extends 'base.html.twig' %}

{% block body %}
<div class=\"container py-5 mt-5\">
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <div>
            <h1 class=\"display-5 fw-bold mb-0\">Tags</h1>
            <p class=\"text-muted\">{{ tagrecettes|length }} tags</p>
        </div>
        {% if is_granted('ROLE_CUISINIER') or is_granted('ROLE_ADMIN') %}
            <a href=\"{{ path('app_tagrecettes_nouvelle') }}\" class=\"btn btn-outline-primary px-4 py-2 rounded-pill\">
                + Nouveau tag
            </a>
        {% endif %}
    </div>

    <div class=\"card shadow-sm border-0 rounded-3\">
        <div class=\"table-responsive\">
            <table class=\"table align-middle mb-0\">
                <thead class=\"bg-light text-uppercase small fw-bold text-muted\">
                    <tr>
                        <th class=\"ps-4 py-3\">Aperçu</th>
                        <th class=\"py-3\">Nom</th>
                        <th class=\"py-3\">Couleur</th>
                        {% if is_granted('ROLE_ADMIN') or is_granted('ROLE_CUISINIER') %}
                        <th class=\"text-end pe-4 py-3\">Actions</th>
                        {% endif %}
                    </tr>
                </thead>
                <tbody>
                    {% for tag in tagrecettes %}
                        <tr style=\"height: 70px;\">
                            <td class=\"ps-4\">
                                {# El badge elli yalma3 b-el couleur mte3ou #}
                                <span class=\"badge rounded-pill px-3 py-2\" 
                                      style=\"background-color: {{ tag.couleur }}; color: white;\">
                                    {{ tag.nom }}
                                </span>
                            </td>
                            <td>
                                <span class=\"fw-medium text-dark\">{{ tag.nom }}</span>
                            </td>
                            <td>
                                <div class=\"d-flex align-items-center\">
                                    <div class=\"rounded-circle me-2\" 
                                         style=\"width: 15px; height: 15px; background-color: {{ tag.couleur }};\"></div>
                                    <span class=\"text-muted font-monospace\">{{ tag.couleur }}</span>
                                </div>
                            </td>
                            
                      <td class=\"text-end pe-4\">
                {% if is_granted('ROLE_ADMIN') or is_granted('ROLE_CUISINIER') %}
                <a href=\"{{ path('app_tagrecettes_supprimer', {'id': tag.id}) }}\" 
                class=\"btn btn-sm btn-outline-danger\" 
                onclick=\"return confirm('Etes-vous sûr ?')\">
                    supprimer
                </a>
            {% endif %}
</td>
                        </tr>
                    {% else %}
                        <tr>
                            <td colspan=\"4\" class=\"text-center py-5 text-muted\">Aucun tag trouvé.</td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
</div>
{% endblock %}", "tag_recette/index.html.twig", "/home/vboxuser/projet_recettes_final/miniprojet2026-ines_maram/templates/tag_recette/index.html.twig");
    }
}
