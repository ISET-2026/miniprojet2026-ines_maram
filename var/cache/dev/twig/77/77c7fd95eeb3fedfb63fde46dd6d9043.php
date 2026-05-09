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
class __TwigTemplate_9c5857a6dfec2731f400e8ea11278cb2 extends Template
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
        yield "
";
        // line 5
        $context["favorites"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 5, $this->source); })()), "request", [], "any", false, false, false, 5), "session", [], "any", false, false, false, 5), "get", ["favorites", []], "method", false, false, false, 5);
        // line 6
        yield "
<div class=\"page-title-area page-title-img-one\">
    <div class=\"container\">
        <div class=\"page-title-item\">
            <h2>Food Collection</h2>
            <ul>
                <li><a href=\"";
        // line 12
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
        // line 23
        yield "    <div class=\"row g-4 mb-5\">
        <div class=\"col-md-4\">
            <div class=\"card border-0 shadow-sm rounded-4 bg-success text-white p-3\">
                <div class=\"d-flex align-items-center\">
                    <div class=\"fs-1 me-3\"><i class=\"fas fa-utensils\"></i></div>
                    <div>
                        <h6 class=\"mb-0\">Recettes Publiées</h6>
                        <h2 class=\"fw-bold mb-0\">";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 30, $this->source); })()), "html", null, true);
        yield "</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"col-md-8\">
            <div class=\"card border-0 shadow-sm rounded-4 p-3 bg-white\">
                <h6 class=\"fw-bold mb-3\">
                    <i class=\"fas fa-chart-pie me-2 text-success\"></i>
                    Recettes par Catégorie
                </h6>
                <div class=\"d-flex flex-wrap gap-2\">
                    ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["statsCat"]) || array_key_exists("statsCat", $context) ? $context["statsCat"] : (function () { throw new RuntimeError('Variable "statsCat" does not exist.', 43, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["cat"] => $context["count"]) {
            // line 44
            yield "                        <span class=\"badge bg-light text-dark border rounded-pill p-2 px-3\">
                            <span class=\"fw-bold text-success\">";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["count"], "html", null, true);
            yield "</span> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["cat"], "html", null, true);
            yield "
                        </span>
                    ";
            $context['_iterated'] = true;
        }
        // line 47
        if (!$context['_iterated']) {
            // line 48
            yield "                        <span class=\"text-muted small\">Aucune donnée statistique.</span>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['cat'], $context['count'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        yield "                </div>
            </div>
        </div>

        <p class=\"mt-2 mb-0 small text-muted\">
            Moyenne d'ingrédients : ";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["moyenne"]) || array_key_exists("moyenne", $context) ? $context["moyenne"] : (function () { throw new RuntimeError('Variable "moyenne" does not exist.', 55, $this->source); })()), 1), "html", null, true);
        yield "
        </p>
    </div>

    ";
        // line 60
        yield "    <div class=\"d-flex justify-content-between align-items-center mb-5\">
        <div>
            <h1 class=\"display-5 fw-bold\">Toutes les recettes</h1>
            <p class=\"text-muted\">Découvrez nos délices culinaires</p>
        </div>

        <div class=\"d-flex gap-2\">
            <a href=\"";
        // line 67
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("favoris_index");
        yield "\" class=\"btn btn-outline-warning rounded-pill px-4 shadow-sm\">
                <i class=\"fas fa-star me-2\"></i>Mes Favoris
            </a>
            ";
        // line 70
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CUISINIER") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
            // line 71
            yield "                <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_recettes_nouvelle");
            yield "\" class=\"btn btn-success rounded-pill px-4 shadow-sm\">
                    <i class=\"fas fa-plus me-2\"></i>Nouvelle recette
                </a>
            ";
        }
        // line 75
        yield "        </div>
    </div>

    ";
        // line 79
        yield "    <form method=\"get\" action=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_recettes");
        yield "\"
          class=\"row g-3 mb-4 p-3 bg-white rounded-4 shadow-sm border\">

        <div class=\"col-md-4\">
            <input type=\"text\" name=\"titre\"
                   value=\"";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 84, $this->source); })()), "request", [], "any", false, false, false, 84), "query", [], "any", false, false, false, 84), "get", ["titre"], "method", false, false, false, 84), "html", null, true);
        yield "\"
                   class=\"form-control rounded-pill bg-light\"
                   placeholder=\"🔍 Rechercher par titre...\">
        </div>

        <div class=\"col-md-3\">
            <select name=\"categorie\" class=\"form-select rounded-pill bg-light\">
                <option value=\"\">Toutes les catégories</option>
                ";
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 92, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 93
            yield "                    <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "id", [], "any", false, false, false, 93), "html", null, true);
            yield "\"
                        ";
            // line 94
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 94, $this->source); })()), "request", [], "any", false, false, false, 94), "query", [], "any", false, false, false, 94), "get", ["categorie"], "method", false, false, false, 94) == CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "id", [], "any", false, false, false, 94))) ? ("selected") : (""));
            yield ">
                        ";
            // line 95
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "nom", [], "any", false, false, false, 95), "html", null, true);
            yield "
                    </option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['cat'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        yield "            </select>
        </div>

        <div class=\"col-md-2\">
            <select name=\"difficulte\" class=\"form-select rounded-pill bg-light\">
                <option value=\"\">Difficulté</option>
                <option value=\"facile\" ";
        // line 104
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 104, $this->source); })()), "request", [], "any", false, false, false, 104), "query", [], "any", false, false, false, 104), "get", ["difficulte"], "method", false, false, false, 104) == "facile")) ? ("selected") : (""));
        yield ">Facile</option>
                <option value=\"moyen\" ";
        // line 105
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 105, $this->source); })()), "request", [], "any", false, false, false, 105), "query", [], "any", false, false, false, 105), "get", ["difficulte"], "method", false, false, false, 105) == "moyen")) ? ("selected") : (""));
        yield ">Moyen</option>
                <option value=\"difficile\" ";
        // line 106
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 106, $this->source); })()), "request", [], "any", false, false, false, 106), "query", [], "any", false, false, false, 106), "get", ["difficulte"], "method", false, false, false, 106) == "difficile")) ? ("selected") : (""));
        yield ">Difficile</option>
            </select>
        </div>

        <div class=\"col-md-3 d-flex gap-2\">
            <button class=\"btn btn-success rounded-pill flex-grow-1\">Filtrer</button>
            <a href=\"";
        // line 112
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_recettes");
        yield "\" class=\"btn btn-outline-secondary rounded-pill\">Reset</a>
        </div>
    </form>

    ";
        // line 117
        yield "    <div class=\"row g-4\">
        ";
        // line 118
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["recettes"]) || array_key_exists("recettes", $context) ? $context["recettes"] : (function () { throw new RuntimeError('Variable "recettes" does not exist.', 118, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["recette"]) {
            // line 119
            yield "            <div class=\"col-xl-4 col-lg-4 col-md-6\">
                <div class=\"card h-100 border-0 shadow-sm rounded-4 overflow-hidden position-relative hover-shadow transition\">

                    ";
            // line 123
            yield "                    <div class=\"position-relative\">
                        <img src=\"";
            // line 124
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "imageName", [], "any", false, false, false, 124)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "imageName", [], "any", false, false, false, 124))), "html", null, true)) : ("https://via.placeholder.com/400x250?text=Recette"));
            yield "\"
                             class=\"card-img-top\"
                             style=\"height: 220px; object-fit: cover; width: 100%;\"
                             alt=\"";
            // line 127
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "titre", [], "any", false, false, false, 127), "html", null, true);
            yield "\">

                        ";
            // line 130
            yield "                        <div class=\"position-absolute top-0 end-0 m-2\" style=\"z-index: 20; position: relative;\">
                            ";
            // line 131
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "id", [], "any", false, false, false, 131), (isset($context["favorites"]) || array_key_exists("favorites", $context) ? $context["favorites"] : (function () { throw new RuntimeError('Variable "favorites" does not exist.', 131, $this->source); })()))) {
                // line 132
                yield "                                <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("favoris_remove", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "id", [], "any", false, false, false, 132)]), "html", null, true);
                yield "\"
                                   class=\"btn btn-light rounded-circle shadow-sm\"
                                   title=\"Retirer des favoris\">
                                    <i class=\"fas fa-star text-warning fa-lg\"></i>
                                </a>
                            ";
            } else {
                // line 138
                yield "                                <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("favoris_add", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "id", [], "any", false, false, false, 138)]), "html", null, true);
                yield "\"
                                   class=\"btn btn-light rounded-circle shadow-sm\"
                                   title=\"Ajouter aux favoris\">
                                    <i class=\"far fa-star text-muted fa-lg\"></i>
                                </a>
                            ";
            }
            // line 144
            yield "                        </div>
                    </div>

                    ";
            // line 148
            yield "                    <div class=\"card-body d-flex flex-column\">

                        <h5 class=\"card-title\">";
            // line 150
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "titre", [], "any", false, false, false, 150), "html", null, true);
            yield "</h5>

                        <div class=\"mb-3\">
                            ";
            // line 153
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "difficulte", [], "any", false, false, false, 153) == "facile")) {
                // line 154
                yield "                                <span class=\"badge bg-success\">🟢 Facile</span>
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 155
$context["recette"], "difficulte", [], "any", false, false, false, 155) == "moyen")) {
                // line 156
                yield "                                <span class=\"badge bg-warning\">🟡 Moyen</span>
                            ";
            } else {
                // line 158
                yield "                                <span class=\"badge bg-danger\">🔴 Difficile</span>
                            ";
            }
            // line 160
            yield "                        </div>

                        <div class=\"mt-auto pt-3 border-top d-flex justify-content-between text-muted small\">
                            <span>
                                <i class=\"far fa-clock\"></i>
                                ";
            // line 165
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "tempsPreparation", [], "any", false, false, false, 165) + CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "tempsCuisson", [], "any", false, false, false, 165)), "html", null, true);
            yield " min
                            </span>
                            <span>
                                <i class=\"fas fa-users text-success\"></i>
                                ";
            // line 169
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "nbPersonnes", [], "any", false, false, false, 169), "html", null, true);
            yield " pers.
                            </span>
                        </div>

                        ";
            // line 174
            yield "                        <div class=\"mt-3 d-flex gap-2 position-relative\" style=\"z-index: 5;\">
                            ";
            // line 175
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CUISINIER") && (CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "auteur", [], "any", false, false, false, 175) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 175, $this->source); })()), "user", [], "any", false, false, false, 175))))) {
                // line 176
                yield "                                <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_recettes_modifier", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "id", [], "any", false, false, false, 176)]), "html", null, true);
                yield "\"
                                   class=\"btn btn-sm btn-outline-info rounded-pill flex-grow-1\">
                                    <i class=\"fas fa-edit\"></i> Modifier
                                </a>
                            ";
            }
            // line 181
            yield "
                            ";
            // line 182
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CUISINIER") && (CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "auteur", [], "any", false, false, false, 182) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 182, $this->source); })()), "user", [], "any", false, false, false, 182))))) {
                // line 183
                yield "                                <form method=\"post\"
                                      action=\"";
                // line 184
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_recettes_supprimer", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "id", [], "any", false, false, false, 184)]), "html", null, true);
                yield "\"
                                      onsubmit=\"return confirm('Supprimer cette recette ?');\"
                                      class=\"flex-grow-1\">
                                    <input type=\"hidden\" name=\"_token\"
                                           value=\"";
                // line 188
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("supprimer_" . CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "id", [], "any", false, false, false, 188))), "html", null, true);
                yield "\">
                                    <button class=\"btn btn-sm btn-outline-danger rounded-pill w-100\">
                                        <i class=\"fas fa-trash\"></i> Supprimer
                                    </button>
                                </form>
                            ";
            }
            // line 194
            yield "                        </div>

                    </div>

                  <a href=\"";
            // line 198
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_recette_detail", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "id", [], "any", false, false, false, 198)]), "html", null, true);
            yield "\"
   class=\"stretched-link\" style=\"z-index: 1;\"></a>
                </div>
            </div>

        ";
            $context['_iterated'] = true;
        }
        // line 203
        if (!$context['_iterated']) {
            // line 204
            yield "            <div class=\"col-12 text-center py-5\">
                <i class=\"fas fa-search fa-3x text-muted mb-3 d-block\"></i>
                <p class=\"text-muted fs-4\">Aucune recette trouvée.</p>
                <a href=\"";
            // line 207
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_recettes");
            yield "\" class=\"btn btn-success rounded-pill\">Voir toutes les recettes</a>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['recette'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 210
        yield "    </div>

    ";
        // line 213
        yield "    <div class=\"navigation d-flex justify-content-center mt-5\">
        ";
        // line 214
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["recettes"]) || array_key_exists("recettes", $context) ? $context["recettes"] : (function () { throw new RuntimeError('Variable "recettes" does not exist.', 214, $this->source); })()));
        yield "
    </div>

</div>

<style>
.transition { transition: all 0.3s ease; }
.hover-shadow:hover {
    transform: translateY(-8px);
    box-shadow: 0 1rem 2rem rgba(0,0,0,.12) !important;
}
.bg-primary-subtle { background-color: #e3f2fd; }
</style>
<style>
.transition { transition: all 0.3s ease; }
.hover-shadow:hover {
    transform: translateY(-8px);
    box-shadow: 0 1rem 2rem rgba(0,0,0,.12) !important;
}
.bg-primary-subtle { background-color: #e3f2fd; }

/* ✅ Fix star button being blocked by stretched-link */
.position-absolute a, 
.position-absolute button {
    position: relative;
    z-index: 20;
}
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
        return array (  451 => 214,  448 => 213,  444 => 210,  435 => 207,  430 => 204,  428 => 203,  418 => 198,  412 => 194,  403 => 188,  396 => 184,  393 => 183,  391 => 182,  388 => 181,  379 => 176,  377 => 175,  374 => 174,  367 => 169,  360 => 165,  353 => 160,  349 => 158,  345 => 156,  343 => 155,  340 => 154,  338 => 153,  332 => 150,  328 => 148,  323 => 144,  313 => 138,  303 => 132,  301 => 131,  298 => 130,  293 => 127,  287 => 124,  284 => 123,  279 => 119,  274 => 118,  271 => 117,  264 => 112,  255 => 106,  251 => 105,  247 => 104,  239 => 98,  230 => 95,  226 => 94,  221 => 93,  217 => 92,  206 => 84,  197 => 79,  192 => 75,  184 => 71,  182 => 70,  176 => 67,  167 => 60,  160 => 55,  153 => 50,  146 => 48,  144 => 47,  135 => 45,  132 => 44,  127 => 43,  111 => 30,  102 => 23,  89 => 12,  81 => 6,  79 => 5,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

{% set favorites = app.request.session.get('favorites', []) %}

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

    {# --- STATISTIQUES --- #}
    <div class=\"row g-4 mb-5\">
        <div class=\"col-md-4\">
            <div class=\"card border-0 shadow-sm rounded-4 bg-success text-white p-3\">
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
                <h6 class=\"fw-bold mb-3\">
                    <i class=\"fas fa-chart-pie me-2 text-success\"></i>
                    Recettes par Catégorie
                </h6>
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

        <p class=\"mt-2 mb-0 small text-muted\">
            Moyenne d'ingrédients : {{ moyenne|number_format(1) }}
        </p>
    </div>

    {# --- HEADER --- #}
    <div class=\"d-flex justify-content-between align-items-center mb-5\">
        <div>
            <h1 class=\"display-5 fw-bold\">Toutes les recettes</h1>
            <p class=\"text-muted\">Découvrez nos délices culinaires</p>
        </div>

        <div class=\"d-flex gap-2\">
            <a href=\"{{ path('favoris_index') }}\" class=\"btn btn-outline-warning rounded-pill px-4 shadow-sm\">
                <i class=\"fas fa-star me-2\"></i>Mes Favoris
            </a>
            {% if is_granted('ROLE_CUISINIER') or is_granted('ROLE_ADMIN') %}
                <a href=\"{{ path('app_recettes_nouvelle') }}\" class=\"btn btn-success rounded-pill px-4 shadow-sm\">
                    <i class=\"fas fa-plus me-2\"></i>Nouvelle recette
                </a>
            {% endif %}
        </div>
    </div>

    {# --- FILTRES --- #}
    <form method=\"get\" action=\"{{ path('app_recettes') }}\"
          class=\"row g-3 mb-4 p-3 bg-white rounded-4 shadow-sm border\">

        <div class=\"col-md-4\">
            <input type=\"text\" name=\"titre\"
                   value=\"{{ app.request.query.get('titre') }}\"
                   class=\"form-control rounded-pill bg-light\"
                   placeholder=\"🔍 Rechercher par titre...\">
        </div>

        <div class=\"col-md-3\">
            <select name=\"categorie\" class=\"form-select rounded-pill bg-light\">
                <option value=\"\">Toutes les catégories</option>
                {% for cat in categories %}
                    <option value=\"{{ cat.id }}\"
                        {{ app.request.query.get('categorie') == cat.id ? 'selected' : '' }}>
                        {{ cat.nom }}
                    </option>
                {% endfor %}
            </select>
        </div>

        <div class=\"col-md-2\">
            <select name=\"difficulte\" class=\"form-select rounded-pill bg-light\">
                <option value=\"\">Difficulté</option>
                <option value=\"facile\" {{ app.request.query.get('difficulte') == 'facile' ? 'selected' : '' }}>Facile</option>
                <option value=\"moyen\" {{ app.request.query.get('difficulte') == 'moyen' ? 'selected' : '' }}>Moyen</option>
                <option value=\"difficile\" {{ app.request.query.get('difficulte') == 'difficile' ? 'selected' : '' }}>Difficile</option>
            </select>
        </div>

        <div class=\"col-md-3 d-flex gap-2\">
            <button class=\"btn btn-success rounded-pill flex-grow-1\">Filtrer</button>
            <a href=\"{{ path('app_recettes') }}\" class=\"btn btn-outline-secondary rounded-pill\">Reset</a>
        </div>
    </form>

    {# --- LISTE --- #}
    <div class=\"row g-4\">
        {% for recette in recettes %}
            <div class=\"col-xl-4 col-lg-4 col-md-6\">
                <div class=\"card h-100 border-0 shadow-sm rounded-4 overflow-hidden position-relative hover-shadow transition\">

                    {# IMAGE + STAR #}
                    <div class=\"position-relative\">
                        <img src=\"{{ recette.imageName ? asset('uploads/' ~ recette.imageName) : 'https://via.placeholder.com/400x250?text=Recette' }}\"
                             class=\"card-img-top\"
                             style=\"height: 220px; object-fit: cover; width: 100%;\"
                             alt=\"{{ recette.titre }}\">

                        {# ✅ Star button — yellow if favorited, grey if not #}
                        <div class=\"position-absolute top-0 end-0 m-2\" style=\"z-index: 20; position: relative;\">
                            {% if recette.id in favorites %}
                                <a href=\"{{ path('favoris_remove', {id: recette.id}) }}\"
                                   class=\"btn btn-light rounded-circle shadow-sm\"
                                   title=\"Retirer des favoris\">
                                    <i class=\"fas fa-star text-warning fa-lg\"></i>
                                </a>
                            {% else %}
                                <a href=\"{{ path('favoris_add', {id: recette.id}) }}\"
                                   class=\"btn btn-light rounded-circle shadow-sm\"
                                   title=\"Ajouter aux favoris\">
                                    <i class=\"far fa-star text-muted fa-lg\"></i>
                                </a>
                            {% endif %}
                        </div>
                    </div>

                    {# BODY #}
                    <div class=\"card-body d-flex flex-column\">

                        <h5 class=\"card-title\">{{ recette.titre }}</h5>

                        <div class=\"mb-3\">
                            {% if recette.difficulte == 'facile' %}
                                <span class=\"badge bg-success\">🟢 Facile</span>
                            {% elseif recette.difficulte == 'moyen' %}
                                <span class=\"badge bg-warning\">🟡 Moyen</span>
                            {% else %}
                                <span class=\"badge bg-danger\">🔴 Difficile</span>
                            {% endif %}
                        </div>

                        <div class=\"mt-auto pt-3 border-top d-flex justify-content-between text-muted small\">
                            <span>
                                <i class=\"far fa-clock\"></i>
                                {{ recette.tempsPreparation + recette.tempsCuisson }} min
                            </span>
                            <span>
                                <i class=\"fas fa-users text-success\"></i>
                                {{ recette.nbPersonnes }} pers.
                            </span>
                        </div>

                        {# EDIT / DELETE — only for owner or admin #}
                        <div class=\"mt-3 d-flex gap-2 position-relative\" style=\"z-index: 5;\">
                            {% if is_granted('ROLE_ADMIN') or (is_granted('ROLE_CUISINIER') and recette.auteur == app.user) %}
                                <a href=\"{{ path('app_recettes_modifier', {id: recette.id}) }}\"
                                   class=\"btn btn-sm btn-outline-info rounded-pill flex-grow-1\">
                                    <i class=\"fas fa-edit\"></i> Modifier
                                </a>
                            {% endif %}

                            {% if is_granted('ROLE_ADMIN') or (is_granted('ROLE_CUISINIER') and recette.auteur == app.user) %}
                                <form method=\"post\"
                                      action=\"{{ path('app_recettes_supprimer', {id: recette.id}) }}\"
                                      onsubmit=\"return confirm('Supprimer cette recette ?');\"
                                      class=\"flex-grow-1\">
                                    <input type=\"hidden\" name=\"_token\"
                                           value=\"{{ csrf_token('supprimer_' ~ recette.id) }}\">
                                    <button class=\"btn btn-sm btn-outline-danger rounded-pill w-100\">
                                        <i class=\"fas fa-trash\"></i> Supprimer
                                    </button>
                                </form>
                            {% endif %}
                        </div>

                    </div>

                  <a href=\"{{ path('app_recette_detail', {id: recette.id}) }}\"
   class=\"stretched-link\" style=\"z-index: 1;\"></a>
                </div>
            </div>

        {% else %}
            <div class=\"col-12 text-center py-5\">
                <i class=\"fas fa-search fa-3x text-muted mb-3 d-block\"></i>
                <p class=\"text-muted fs-4\">Aucune recette trouvée.</p>
                <a href=\"{{ path('app_recettes') }}\" class=\"btn btn-success rounded-pill\">Voir toutes les recettes</a>
            </div>
        {% endfor %}
    </div>

    {# --- PAGINATION --- #}
    <div class=\"navigation d-flex justify-content-center mt-5\">
        {{ knp_pagination_render(recettes) }}
    </div>

</div>

<style>
.transition { transition: all 0.3s ease; }
.hover-shadow:hover {
    transform: translateY(-8px);
    box-shadow: 0 1rem 2rem rgba(0,0,0,.12) !important;
}
.bg-primary-subtle { background-color: #e3f2fd; }
</style>
<style>
.transition { transition: all 0.3s ease; }
.hover-shadow:hover {
    transform: translateY(-8px);
    box-shadow: 0 1rem 2rem rgba(0,0,0,.12) !important;
}
.bg-primary-subtle { background-color: #e3f2fd; }

/* ✅ Fix star button being blocked by stretched-link */
.position-absolute a, 
.position-absolute button {
    position: relative;
    z-index: 20;
}
</style>
{% endblock %}
", "recettes/index.html.twig", "/home/vboxuser/Documents/miniprojet2026-ines_maram/templates/recettes/index.html.twig");
    }
}
