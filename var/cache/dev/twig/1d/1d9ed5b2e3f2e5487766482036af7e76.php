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
class __TwigTemplate_f1aebf00f8b9bbdad9de0959f05d0c3e extends Template
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
<div class=\"container py-5 mt-5\">

    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <div>
            <h1 class=\"display-5 fw-bold mb-0\">Catégories</h1>
            <p class=\"text-muted\">";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 12, $this->source); })())), "html", null, true);
        yield " catégories</p>
        </div>
        ";
        // line 14
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CUISINIER") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
            // line 15
            yield "        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categorie_nouvelle");
            yield "\" class=\"btn btn-primary px-4 py-2 rounded-pill\">
        + Nouvelle catégorie
        </a>
";
        }
        // line 19
        yield "    </div>

    <hr class=\"mb-5\">


    <div class=\"card shadow-sm border-0 rounded-3\">
        <div class=\"table-responsive\">
            <table class=\"table table-hover align-middle mb-0\">
                <thead class=\"bg-light text-uppercase small fw-bold text-muted\">
                    <tr>
                        <th class=\"ps-4 py-3\">Icône</th>
                        <th class=\"py-3\">Nom</th>
                        <th class=\"py-3\">Description</th>
                        ";
        // line 32
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CUISINIER"))) {
            // line 33
            yield "                        <th class=\"text-end pe-4 py-3\">Actions</th>
                        ";
        }
        // line 35
        yield "                    </tr>
                </thead>
                <tbody>
                    ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 38, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 39
            yield "                        <tr style=\"height: 80px;\">
                            <td class=\"ps-4\">
                            <i class=\"";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "icone", [], "any", false, false, false, 41), "html", null, true);
            yield "\"></i>
            
                            </td>
                            <td>
                                <span class=\"fw-bold text-dark\">";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "nom", [], "any", false, false, false, 45), "html", null, true);
            yield "</span>
                            </td>
                            <td>
                                <span class=\"text-muted\">";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "description", [], "any", false, false, false, 48), 0, 60), "html", null, true);
            yield "...</span>
                            </td>
                            <td class=\"text-end pe-4\">
                                ";
            // line 51
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CUISINIER"))) {
                // line 52
                yield "                <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tagrecettes_supprimer", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "id", [], "any", false, false, false, 52)]), "html", null, true);
                yield "\" 
                class=\"btn btn-sm btn-outline-danger\" 
                onclick=\"return confirm('Etes-vous sûr ?')\">
                    supprimer
                </a>
            ";
            }
            // line 58
            yield "                            </td>
                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        // line 60
        if (!$context['_iterated']) {
            // line 61
            yield "                        <tr>
                            <td colspan=\"4\" class=\"text-center py-5 text-muted\">
                                Aucune catégorie trouvée.
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['cat'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
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
        return array (  208 => 67,  197 => 61,  195 => 60,  189 => 58,  179 => 52,  177 => 51,  171 => 48,  165 => 45,  158 => 41,  154 => 39,  149 => 38,  144 => 35,  140 => 33,  138 => 32,  123 => 19,  115 => 15,  113 => 14,  108 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Categories{% endblock %}

{% block body %}

<div class=\"container py-5 mt-5\">

    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <div>
            <h1 class=\"display-5 fw-bold mb-0\">Catégories</h1>
            <p class=\"text-muted\">{{ categories|length }} catégories</p>
        </div>
        {% if is_granted('ROLE_CUISINIER') or is_granted('ROLE_ADMIN') %}
        <a href=\"{{ path('app_categorie_nouvelle') }}\" class=\"btn btn-primary px-4 py-2 rounded-pill\">
        + Nouvelle catégorie
        </a>
{% endif %}
    </div>

    <hr class=\"mb-5\">


    <div class=\"card shadow-sm border-0 rounded-3\">
        <div class=\"table-responsive\">
            <table class=\"table table-hover align-middle mb-0\">
                <thead class=\"bg-light text-uppercase small fw-bold text-muted\">
                    <tr>
                        <th class=\"ps-4 py-3\">Icône</th>
                        <th class=\"py-3\">Nom</th>
                        <th class=\"py-3\">Description</th>
                        {% if is_granted('ROLE_ADMIN') or is_granted('ROLE_CUISINIER') %}
                        <th class=\"text-end pe-4 py-3\">Actions</th>
                        {% endif %}
                    </tr>
                </thead>
                <tbody>
                    {% for cat in categories %}
                        <tr style=\"height: 80px;\">
                            <td class=\"ps-4\">
                            <i class=\"{{ cat.icone }}\"></i>
            
                            </td>
                            <td>
                                <span class=\"fw-bold text-dark\">{{ cat.nom }}</span>
                            </td>
                            <td>
                                <span class=\"text-muted\">{{ cat.description|slice(0, 60) }}...</span>
                            </td>
                            <td class=\"text-end pe-4\">
                                {% if is_granted('ROLE_ADMIN') or is_granted('ROLE_CUISINIER') %}
                <a href=\"{{ path('app_tagrecettes_supprimer', {'id': cat.id}) }}\" 
                class=\"btn btn-sm btn-outline-danger\" 
                onclick=\"return confirm('Etes-vous sûr ?')\">
                    supprimer
                </a>
            {% endif %}
                            </td>
                        </tr>
                    {% else %}
                        <tr>
                            <td colspan=\"4\" class=\"text-center py-5 text-muted\">
                                Aucune catégorie trouvée.
                            </td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
            
           
        </div>
    </div>
    
</div>
{% endblock %}", "Categorie/index.html.twig", "/home/vboxuser/Documents/miniprojet2026-ines_maram/templates/Categorie/index.html.twig");
    }
}
