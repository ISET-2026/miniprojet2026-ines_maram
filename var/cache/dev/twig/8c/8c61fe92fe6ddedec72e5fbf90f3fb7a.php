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

/* recettes/index.html.twig */
class __TwigTemplate_223f8a384ccc6058677f3f9124561008 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recettes/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recettes/index.html.twig"));

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
        yield "<div class=\"page-title-area page-title-img-one\">
    <div class=\"container\">
        <div class=\"page-title-item\">
            <h2>Food Collection</h2>
            <ul>
                <li><a href=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_accueil");
        yield "\">Home</a></li>
                <li><i class='bx bx-chevron-right'></i></li>
                <li>Food Collection</li>
            </ul>
        </div>
    </div>
</div>
<div class=\"container py-5 mt-5\">

    ";
        // line 19
        yield "    <div class=\"row g-4 mb-5\">
        <div class=\"col-md-4\">
            <div class=\"card border-0 shadow-sm rounded-4  text-white p-3\">
                <div class=\"d-flex align-items-center\">
                    <div class=\"fs-1 me-3\"><i class=\"fas fa-utensils\"></i></div>
                    <div>
                        <h6 class=\"mb-0\">Recettes Publiées</h6>
                        <h2 class=\"fw-bold mb-0\">";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 26, $this->source); })()), "html", null, true);
        yield "</h2>
                    </div>
                </div>
            </div>
        </div>
        
        <div class=\"col-md-8\">
            <div class=\"card border-0 shadow-sm rounded-4 p-3 bg-white\">
                <h6 class=\"fw-bold mb-3\"><i class=\"fas fa-chart-pie me-2 text-success\"></i>Recettes par Catégorie</h6>
                <div class=\"d-flex flex-wrap gap-2\">
                    ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["statsCat"]) || array_key_exists("statsCat", $context) ? $context["statsCat"] : (function () { throw new RuntimeError('Variable "statsCat" does not exist.', 36, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["cat"] => $context["count"]) {
            // line 37
            yield "                        <span class=\"badge bg-light text-dark border rounded-pill p-2 px-3\">
                            <span class=\"fw-bold text-success\">";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["count"], "html", null, true);
            yield "</span> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["cat"], "html", null, true);
            yield "
                        </span>
                    ";
            $context['_iterated'] = true;
        }
        // line 40
        if (!$context['_iterated']) {
            // line 41
            yield "                        <span class=\"text-muted small\">Aucune donnée statistique.</span>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['cat'], $context['count'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        yield "                    
                </div>
            </div>
            
        </div>
        <p>Moyenne d'ingrédients par recette : ";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["moyenne"]) || array_key_exists("moyenne", $context) ? $context["moyenne"] : (function () { throw new RuntimeError('Variable "moyenne" does not exist.', 48, $this->source); })()), 1), "html", null, true);
        yield "</p>
    </div>

    ";
        // line 52
        yield "    <div class=\"d-flex justify-content-between align-items-center mb-5\">
        <div>
            <h1 class=\"display-5 fw-bold\">Toutes les recettes</h1>
            <p class=\"text-muted\">";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["recettes"]) || array_key_exists("recettes", $context) ? $context["recettes"] : (function () { throw new RuntimeError('Variable "recettes" does not exist.', 55, $this->source); })())), "html", null, true);
        yield " délices à découvrir</p>
        </div>
        <a href=\"";
        // line 57
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_recettes_nouvelle");
        yield "\" class=\"btn  rounded-pill px-4 shadow-sm\">
            <i class=\"fas fa-plus me-2\"></i>Nouvelle recette
        </a>
    </div>

  ";
        // line 63
        yield "<form method=\"get\" action=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_recettes");
        yield "\" class=\"row g-3 mb-5 p-3 bg-light rounded shadow-sm border\">
    
   
    <div class=\"col-md-4\">
        <input type=\"text\" name=\"titre\" value=\"";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 67, $this->source); })()), "request", [], "any", false, false, false, 67), "query", [], "any", false, false, false, 67), "get", ["titre"], "method", false, false, false, 67), "html", null, true);
        yield "\" 
               class=\"form-control rounded-pill border-0 shadow-sm\" placeholder=\"🔍 Rechercher par titre...\">
    </div>


    <div class=\"col-md-3\">
        <select name=\"categorie\" class=\"form-select rounded-pill border-0 shadow-sm\">
            <option value=\"\">Toutes les catégories</option>
            ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 75, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 76
            yield "                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "id", [], "any", false, false, false, 76), "html", null, true);
            yield "\" ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 76, $this->source); })()), "request", [], "any", false, false, false, 76), "query", [], "any", false, false, false, 76), "get", ["categorie"], "method", false, false, false, 76) == CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "id", [], "any", false, false, false, 76))) ? ("selected") : (""));
            yield ">
                    ";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "nom", [], "any", false, false, false, 77), "html", null, true);
            yield "
                </option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['cat'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        yield "        </select>
    </div>


    <div class=\"col-md-2\">
        <select name=\"difficulte\" class=\"form-select rounded-pill border-0 shadow-sm\">
            <option value=\"\">Difficulté</option>
            <option value=\"1\" ";
        // line 87
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 87, $this->source); })()), "request", [], "any", false, false, false, 87), "query", [], "any", false, false, false, 87), "get", ["difficulte"], "method", false, false, false, 87) == "1")) ? ("selected") : (""));
        yield ">Facile</option>
            <option value=\"3\" ";
        // line 88
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 88, $this->source); })()), "request", [], "any", false, false, false, 88), "query", [], "any", false, false, false, 88), "get", ["difficulte"], "method", false, false, false, 88) == "3")) ? ("selected") : (""));
        yield ">Moyen</option>
            <option value=\"5\" ";
        // line 89
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 89, $this->source); })()), "request", [], "any", false, false, false, 89), "query", [], "any", false, false, false, 89), "get", ["difficulte"], "method", false, false, false, 89) == "5")) ? ("selected") : (""));
        yield ">Difficile</option>
        </select>
    </div>

    <div class=\"col-md-2\">
        <button type=\"submit\" class=\"btn btn-success rounded-pill w-100 shadow-sm\">
            Filtrer
        </button>
    </div>

    <div class=\"col-md-1\">
        <a href=\"";
        // line 100
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_recettes");
        yield "\" class=\"btn btn-outline-secondary rounded-pill w-100 shadow-sm\">
            <i class=\"fas fa-undo\"></i>tous les recette
        </a>
    </div>
</form>

    ";
        // line 107
        yield "    <div class=\"row g-4\">
        ";
        // line 108
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["recettes"]) || array_key_exists("recettes", $context) ? $context["recettes"] : (function () { throw new RuntimeError('Variable "recettes" does not exist.', 108, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["recette"]) {
            // line 109
            yield "            <div class=\"col-xl-3 col-lg-4 col-md-6\">
                ";
            // line 111
            yield "                <div class=\"card h-100 border-0 shadow-sm rounded-4 overflow-hidden position-relative hover-shadow transition\">
                    
                    <div class=\"position-relative\">
                      <img src=\"";
            // line 114
            yield ((Twig\Extension\CoreExtension::trim(CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "imageName", [], "any", false, false, false, 114))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::trim(CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "imageName", [], "any", false, false, false, 114)), "html", null, true)) : ("https://via.placeholder.com/300x200?text=Recette"));
            yield "\"
                             class=\"card-img-top\" 
                             style=\"height: 200px; object-fit: cover;\" 
                             alt=\"";
            // line 117
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "titre", [], "any", false, false, false, 117), "html", null, true);
            yield "\">
                        
                        <div class=\"position-absolute top-0 end-0 m-2\">
                            <span class=\"badge bg-white text-dark rounded-circle p-2 shadow-sm\">
                                <i class=\"fas fa-utensils text-success\"></i>
                            </span>
                        </div>
                    </div>

                    <div class=\"card-body d-flex flex-column\">
                        <div class=\"mt-2 mb-2\">
                            ";
            // line 128
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "tags", [], "any", false, false, false, 128));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 129
                yield "                                <span class=\"badge bg-primary rounded-pill\" style=\"font-size: 0.7rem;\">#";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "nom", [], "any", false, false, false, 129), "html", null, true);
                yield "</span>
                            ";
                $context['_iterated'] = true;
            }
            // line 130
            if (!$context['_iterated']) {
                // line 131
                yield "                                <span class=\"badge bg-secondary rounded-pill\" style=\"font-size: 0.7rem;\">#Recette</span>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['tag'], $context['_parent'], $context['_iterated']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 133
            yield "                        </div>

                        <h5 class=\"card-title fw-bold mb-2\">";
            // line 135
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "titre", [], "any", false, false, false, 135), "html", null, true);
            yield "</h5>

                        <div class=\"mb-3\">
                            ";
            // line 138
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "difficulte", [], "any", false, false, false, 138) <= 2)) {
                // line 139
                yield "                                <span class=\"badge bg-success-subtle text-success border border-success rounded-pill\">🟢 Facile</span>
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 140
$context["recette"], "difficulte", [], "any", false, false, false, 140) <= 4)) {
                // line 141
                yield "                                <span class=\"badge bg-warning-subtle text-warning border border-warning rounded-pill\">🟡 Moyen</span>
                            ";
            } else {
                // line 143
                yield "                                <span class=\"badge bg-danger-subtle text-danger border border-danger rounded-pill\">🔴 Difficile</span>
                            ";
            }
            // line 145
            yield "                        </div>

                        <div class=\"mt-auto pt-3 border-top d-flex justify-content-between text-muted small\">
                            <span><i class=\"far fa-clock me-1 text-primary\"></i> ";
            // line 148
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "tempsPreparation", [], "any", false, false, false, 148) + CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "tempsCuisson", [], "any", false, false, false, 148)), "html", null, true);
            yield " min</span>
                            <span><i class=\"fas fa-users me-1 text-primary\"></i> ";
            // line 149
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "nbPersonnes", [], "any", false, false, false, 149), "html", null, true);
            yield " pers.</span>
                        </div>

                        ";
            // line 153
            yield "                        <div class=\"mt-3 d-flex gap-2 position-relative\" style=\"z-index: 5;\">
                            <a href=\"";
            // line 154
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_recettes_modifier", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "id", [], "any", false, false, false, 154)]), "html", null, true);
            yield "\" 
                               class=\"btn btn-sm btn-outline-info rounded-pill flex-grow-1\">
                                <i class=\"fas fa-edit\"></i> modifier
                            </a>

                            <form method=\"post\" action=\"";
            // line 159
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_recettes_supprimer", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "id", [], "any", false, false, false, 159)]), "html", null, true);
            yield "\" 
                                  onsubmit=\"return confirm('Supprimer ?');\" class=\"flex-grow-1\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 161
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "id", [], "any", false, false, false, 161))), "html", null, true);
            yield "\">
                                <button class=\"btn btn-sm btn-outline-danger rounded-pill w-100\">suprimer
                                    <i class=\"fas fa-trash\"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                    
                    ";
            // line 170
            yield "                    <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_recette_detail", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "id", [], "any", false, false, false, 170)]), "html", null, true);
            yield "\" class=\"stretched-link\" style=\"z-index: 2;\"></a>
                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        // line 173
        if (!$context['_iterated']) {
            // line 174
            yield "            <div class=\"col-12 text-center py-5\">
                <p class=\"text-muted fs-4\">Aucune recette trouvée.</p>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['recette'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 178
        yield "    </div>
</div>

<style>
    .transition { transition: all 0.3s ease; }
    .hover-shadow:hover { 
        transform: translateY(-5px); 
        box-shadow: 0 .5rem 1.5rem rgba(0,0,0,.1)!important; 
    }
    .bg-success-subtle { background-color: #d1e7dd; }
    .bg-warning-subtle { background-color: #fff3cd; }
    .bg-danger-subtle { background-color: #f8d7da; }
    .stretched-link::after { z-index: 2; }
</style>
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
        return "recettes/index.html.twig";
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
        return array (  397 => 178,  388 => 174,  386 => 173,  377 => 170,  366 => 161,  361 => 159,  353 => 154,  350 => 153,  344 => 149,  340 => 148,  335 => 145,  331 => 143,  327 => 141,  325 => 140,  322 => 139,  320 => 138,  314 => 135,  310 => 133,  303 => 131,  301 => 130,  294 => 129,  289 => 128,  275 => 117,  269 => 114,  264 => 111,  261 => 109,  256 => 108,  253 => 107,  244 => 100,  230 => 89,  226 => 88,  222 => 87,  213 => 80,  204 => 77,  197 => 76,  193 => 75,  182 => 67,  174 => 63,  166 => 57,  161 => 55,  156 => 52,  150 => 48,  143 => 43,  136 => 41,  134 => 40,  125 => 38,  122 => 37,  117 => 36,  104 => 26,  95 => 19,  83 => 9,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<div class=\"page-title-area page-title-img-one\">
    <div class=\"container\">
        <div class=\"page-title-item\">
            <h2>Food Collection</h2>
            <ul>
                <li><a href=\"{{ path('app_accueil') }}\">Home</a></li>
                <li><i class='bx bx-chevron-right'></i></li>
                <li>Food Collection</li>
            </ul>
        </div>
    </div>
</div>
<div class=\"container py-5 mt-5\">

    {# --- SECTION 1: STATISTIQUES (Partie 4 du TP) --- #}
    <div class=\"row g-4 mb-5\">
        <div class=\"col-md-4\">
            <div class=\"card border-0 shadow-sm rounded-4  text-white p-3\">
                <div class=\"d-flex align-items-center\">
                    <div class=\"fs-1 me-3\"><i class=\"fas fa-utensils\"></i></div>
                    <div>
                        <h6 class=\"mb-0\">Recettes Publiées</h6>
                        <h2 class=\"fw-bold mb-0\">{{ total }}</h2>
                    </div>
                </div>
            </div>
        </div>
        
        <div class=\"col-md-8\">
            <div class=\"card border-0 shadow-sm rounded-4 p-3 bg-white\">
                <h6 class=\"fw-bold mb-3\"><i class=\"fas fa-chart-pie me-2 text-success\"></i>Recettes par Catégorie</h6>
                <div class=\"d-flex flex-wrap gap-2\">
                    {% for cat, count in statsCat %}
                        <span class=\"badge bg-light text-dark border rounded-pill p-2 px-3\">
                            <span class=\"fw-bold text-success\">{{ count }}</span> {{ cat }}
                        </span>
                    {% else %}
                        <span class=\"text-muted small\">Aucune donnée statistique.</span>
                    {% endfor %}
                    
                </div>
            </div>
            
        </div>
        <p>Moyenne d'ingrédients par recette : {{ moyenne|number_format(1) }}</p>
    </div>

    {# --- SECTION 2: HEADER --- #}
    <div class=\"d-flex justify-content-between align-items-center mb-5\">
        <div>
            <h1 class=\"display-5 fw-bold\">Toutes les recettes</h1>
            <p class=\"text-muted\">{{ recettes|length }} délices à découvrir</p>
        </div>
        <a href=\"{{ path('app_recettes_nouvelle') }}\" class=\"btn  rounded-pill px-4 shadow-sm\">
            <i class=\"fas fa-plus me-2\"></i>Nouvelle recette
        </a>
    </div>

  {# --- SECTION 3: FILTRES (تعديل) --- #}
<form method=\"get\" action=\"{{ path('app_recettes') }}\" class=\"row g-3 mb-5 p-3 bg-light rounded shadow-sm border\">
    
   
    <div class=\"col-md-4\">
        <input type=\"text\" name=\"titre\" value=\"{{ app.request.query.get('titre') }}\" 
               class=\"form-control rounded-pill border-0 shadow-sm\" placeholder=\"🔍 Rechercher par titre...\">
    </div>


    <div class=\"col-md-3\">
        <select name=\"categorie\" class=\"form-select rounded-pill border-0 shadow-sm\">
            <option value=\"\">Toutes les catégories</option>
            {% for cat in categories %}
                <option value=\"{{ cat.id }}\" {{ app.request.query.get('categorie') == cat.id ? 'selected' : '' }}>
                    {{ cat.nom }}
                </option>
            {% endfor %}
        </select>
    </div>


    <div class=\"col-md-2\">
        <select name=\"difficulte\" class=\"form-select rounded-pill border-0 shadow-sm\">
            <option value=\"\">Difficulté</option>
            <option value=\"1\" {{ app.request.query.get('difficulte') == '1' ? 'selected' : '' }}>Facile</option>
            <option value=\"3\" {{ app.request.query.get('difficulte') == '3' ? 'selected' : '' }}>Moyen</option>
            <option value=\"5\" {{ app.request.query.get('difficulte') == '5' ? 'selected' : '' }}>Difficile</option>
        </select>
    </div>

    <div class=\"col-md-2\">
        <button type=\"submit\" class=\"btn btn-success rounded-pill w-100 shadow-sm\">
            Filtrer
        </button>
    </div>

    <div class=\"col-md-1\">
        <a href=\"{{ path('app_recettes') }}\" class=\"btn btn-outline-secondary rounded-pill w-100 shadow-sm\">
            <i class=\"fas fa-undo\"></i>tous les recette
        </a>
    </div>
</form>

    {# --- SECTION 4: LISTE DES RECETTES --- #}
    <div class=\"row g-4\">
        {% for recette in recettes %}
            <div class=\"col-xl-3 col-lg-4 col-md-6\">
                {# On ajoute z-index: 1 ici pour ne pas gêner les boutons #}
                <div class=\"card h-100 border-0 shadow-sm rounded-4 overflow-hidden position-relative hover-shadow transition\">
                    
                    <div class=\"position-relative\">
                      <img src=\"{{ recette.imageName|trim ?: 'https://via.placeholder.com/300x200?text=Recette' }}\"
                             class=\"card-img-top\" 
                             style=\"height: 200px; object-fit: cover;\" 
                             alt=\"{{ recette.titre }}\">
                        
                        <div class=\"position-absolute top-0 end-0 m-2\">
                            <span class=\"badge bg-white text-dark rounded-circle p-2 shadow-sm\">
                                <i class=\"fas fa-utensils text-success\"></i>
                            </span>
                        </div>
                    </div>

                    <div class=\"card-body d-flex flex-column\">
                        <div class=\"mt-2 mb-2\">
                            {% for tag in recette.tags %}
                                <span class=\"badge bg-primary rounded-pill\" style=\"font-size: 0.7rem;\">#{{ tag.nom }}</span>
                            {% else %}
                                <span class=\"badge bg-secondary rounded-pill\" style=\"font-size: 0.7rem;\">#Recette</span>
                            {% endfor %}
                        </div>

                        <h5 class=\"card-title fw-bold mb-2\">{{ recette.titre }}</h5>

                        <div class=\"mb-3\">
                            {% if recette.difficulte <= 2 %}
                                <span class=\"badge bg-success-subtle text-success border border-success rounded-pill\">🟢 Facile</span>
                            {% elseif recette.difficulte <= 4 %}
                                <span class=\"badge bg-warning-subtle text-warning border border-warning rounded-pill\">🟡 Moyen</span>
                            {% else %}
                                <span class=\"badge bg-danger-subtle text-danger border border-danger rounded-pill\">🔴 Difficile</span>
                            {% endif %}
                        </div>

                        <div class=\"mt-auto pt-3 border-top d-flex justify-content-between text-muted small\">
                            <span><i class=\"far fa-clock me-1 text-primary\"></i> {{ recette.tempsPreparation + recette.tempsCuisson }} min</span>
                            <span><i class=\"fas fa-users me-1 text-primary\"></i> {{ recette.nbPersonnes }} pers.</span>
                        </div>

                        {# BOUTONS ACTIONS : On monte le z-index pour qu'ils soient cliquables malgré le stretched-link #}
                        <div class=\"mt-3 d-flex gap-2 position-relative\" style=\"z-index: 5;\">
                            <a href=\"{{ path('app_recettes_modifier', {id: recette.id}) }}\" 
                               class=\"btn btn-sm btn-outline-info rounded-pill flex-grow-1\">
                                <i class=\"fas fa-edit\"></i> modifier
                            </a>

                            <form method=\"post\" action=\"{{ path('app_recettes_supprimer', {id: recette.id}) }}\" 
                                  onsubmit=\"return confirm('Supprimer ?');\" class=\"flex-grow-1\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ recette.id) }}\">
                                <button class=\"btn btn-sm btn-outline-danger rounded-pill w-100\">suprimer
                                    <i class=\"fas fa-trash\"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                    
                    {# Lien invisible sur toute la carte #}
                    <a href=\"{{ path('app_recette_detail', {id: recette.id}) }}\" class=\"stretched-link\" style=\"z-index: 2;\"></a>
                </div>
            </div>
        {% else %}
            <div class=\"col-12 text-center py-5\">
                <p class=\"text-muted fs-4\">Aucune recette trouvée.</p>
            </div>
        {% endfor %}
    </div>
</div>

<style>
    .transition { transition: all 0.3s ease; }
    .hover-shadow:hover { 
        transform: translateY(-5px); 
        box-shadow: 0 .5rem 1.5rem rgba(0,0,0,.1)!important; 
    }
    .bg-success-subtle { background-color: #d1e7dd; }
    .bg-warning-subtle { background-color: #fff3cd; }
    .bg-danger-subtle { background-color: #f8d7da; }
    .stretched-link::after { z-index: 2; }
</style>
{% endblock %}", "recettes/index.html.twig", "/home/useradm/projet-recettes/templates/recettes/index.html.twig");
    }
}
