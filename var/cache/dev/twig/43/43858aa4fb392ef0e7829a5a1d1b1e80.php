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
class __TwigTemplate_8b57d8e1b782771e5eaa57c24d414fe9 extends Template
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
        // line 20
        yield "    <div class=\"row g-4 mb-5\">
        <div class=\"col-md-4\">
            <div class=\"card border-0 shadow-sm rounded-4 bg-success text-white p-3\">
                <div class=\"d-flex align-items-center\">
                    <div class=\"fs-1 me-3\"><i class=\"fas fa-utensils\"></i></div>
                    <div>
                        <h6 class=\"mb-0\">Recettes Publiées</h6>
                        <h2 class=\"fw-bold mb-0\">";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 27, $this->source); })()), "html", null, true);
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
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["statsCat"]) || array_key_exists("statsCat", $context) ? $context["statsCat"] : (function () { throw new RuntimeError('Variable "statsCat" does not exist.', 37, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["cat"] => $context["count"]) {
            // line 38
            yield "                        <span class=\"badge bg-light text-dark border rounded-pill p-2 px-3\">
                            <span class=\"fw-bold text-success\">";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["count"], "html", null, true);
            yield "</span> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["cat"], "html", null, true);
            yield "
                        </span>
                    ";
            $context['_iterated'] = true;
        }
        // line 41
        if (!$context['_iterated']) {
            // line 42
            yield "                        <span class=\"text-muted small\">Aucune donnée statistique.</span>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['cat'], $context['count'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        yield "                </div>
             
            </div>
            
        </div>
           <p class=\"mt-2 mb-0 small text-muted\">Moyenne d'ingrédients : ";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["moyenne"]) || array_key_exists("moyenne", $context) ? $context["moyenne"] : (function () { throw new RuntimeError('Variable "moyenne" does not exist.', 49, $this->source); })()), 1), "html", null, true);
        yield "</p>
    </div>

    ";
        // line 53
        yield "    <div class=\"d-flex justify-content-between align-items-center mb-5\">
        <div>
            <h1 class=\"display-5 fw-bold\">Toutes les recettes</h1>
            <p class=\"text-muted\">Découvrez nos délices culinaires</p>
        </div>
        <a href=\"";
        // line 58
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_recettes_nouvelle");
        yield "\" class=\"btn btn-success rounded-pill px-4 shadow-sm\">
            <i class=\"fas fa-plus me-2\"></i>Nouvelle recette
        </a>
    </div>

    ";
        // line 64
        yield "    <form method=\"get\" action=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_recettes");
        yield "\" class=\"row g-3 mb-4 p-3 bg-white rounded-4 shadow-sm border\">
        <div class=\"col-md-4\">
            <input type=\"text\" name=\"titre\" value=\"";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 66, $this->source); })()), "request", [], "any", false, false, false, 66), "query", [], "any", false, false, false, 66), "get", ["titre"], "method", false, false, false, 66), "html", null, true);
        yield "\" 
                   class=\"form-control rounded-pill border-light bg-light\" placeholder=\"🔍 Rechercher par titre...\">
        </div>

        <div class=\"col-md-3\">
            <select name=\"categorie\" class=\"form-select rounded-pill border-light bg-light\">
                <option value=\"\">Toutes les catégories</option>
                ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 73, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 74
            yield "                    <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "id", [], "any", false, false, false, 74), "html", null, true);
            yield "\" ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 74, $this->source); })()), "request", [], "any", false, false, false, 74), "query", [], "any", false, false, false, 74), "get", ["categorie"], "method", false, false, false, 74) == CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "id", [], "any", false, false, false, 74))) ? ("selected") : (""));
            yield ">
                        ";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "nom", [], "any", false, false, false, 75), "html", null, true);
            yield "
                    </option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['cat'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        yield "            </select>
        </div>

        <div class=\"col-md-2\">
            <select name=\"difficulte\" class=\"form-select rounded-pill border-light bg-light\">
                <option value=\"\">Difficulté</option>
                <option value=\"1\" ";
        // line 84
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 84, $this->source); })()), "request", [], "any", false, false, false, 84), "query", [], "any", false, false, false, 84), "get", ["difficulte"], "method", false, false, false, 84) == "1")) ? ("selected") : (""));
        yield ">Facile</option>
                <option value=\"3\" ";
        // line 85
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 85, $this->source); })()), "request", [], "any", false, false, false, 85), "query", [], "any", false, false, false, 85), "get", ["difficulte"], "method", false, false, false, 85) == "3")) ? ("selected") : (""));
        yield ">Moyen</option>
                <option value=\"5\" ";
        // line 86
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 86, $this->source); })()), "request", [], "any", false, false, false, 86), "query", [], "any", false, false, false, 86), "get", ["difficulte"], "method", false, false, false, 86) == "5")) ? ("selected") : (""));
        yield ">Difficile</option>
            </select>
        </div>

        <div class=\"col-md-3 d-flex gap-2\">
            <button type=\"submit\" class=\"btn btn-success rounded-pill flex-grow-1 shadow-sm\">Filtrer</button>
            <a href=\"";
        // line 92
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_recettes");
        yield "\" class=\"btn btn-outline-secondary rounded-pill shadow-sm\">
                <i class=\"fas fa-undo\"></i>
            </a>
        </div>
    </form>

    ";
        // line 99
        yield "    <div class=\"d-flex justify-content-between align-items-center mb-4 px-2\">
        <div class=\"text-muted\">
            Total : <span class=\"fw-bold text-dark\">";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recettes"]) || array_key_exists("recettes", $context) ? $context["recettes"] : (function () { throw new RuntimeError('Variable "recettes" does not exist.', 101, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 101), "html", null, true);
        yield "</span> résultats trouvés
        </div>
        <div class=\"d-flex align-items-center gap-3\">
            <span class=\"small text-uppercase fw-bold text-muted\">Trier par :</span>
            <div class=\"btn-group shadow-sm rounded-pill overflow-hidden\">
                <span class=\"btn btn-sm btn-white border\">
                    ";
        // line 107
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->sortable($this->env, (isset($context["recettes"]) || array_key_exists("recettes", $context) ? $context["recettes"] : (function () { throw new RuntimeError('Variable "recettes" does not exist.', 107, $this->source); })()), "Nom", "r.titre");
        yield "
                </span>
                <span class=\"btn btn-sm btn-white border\">
                    ";
        // line 110
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->sortable($this->env, (isset($context["recettes"]) || array_key_exists("recettes", $context) ? $context["recettes"] : (function () { throw new RuntimeError('Variable "recettes" does not exist.', 110, $this->source); })()), "Date", "r.dateCreation");
        yield "
                </span>
                <span class=\"btn btn-sm btn-white border\">
                    ";
        // line 113
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->sortable($this->env, (isset($context["recettes"]) || array_key_exists("recettes", $context) ? $context["recettes"] : (function () { throw new RuntimeError('Variable "recettes" does not exist.', 113, $this->source); })()), "Temps", "r.tempsPreparation");
        yield "
                </span>
            </div>
        </div>
    </div>

    ";
        // line 120
        yield "    <div class=\"row g-4\">
        ";
        // line 121
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["recettes"]) || array_key_exists("recettes", $context) ? $context["recettes"] : (function () { throw new RuntimeError('Variable "recettes" does not exist.', 121, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["recette"]) {
            // line 122
            yield "            <div class=\"col-xl-4 col-lg-4 col-md-6\">
                <div class=\"card h-100 border-0 shadow-sm rounded-4 overflow-hidden position-relative hover-shadow transition\">
                    
                    <div class=\"position-relative\">
                        <img src=\"";
            // line 126
            yield ((Twig\Extension\CoreExtension::trim(CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "imageName", [], "any", false, false, false, 126))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::trim(CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "imageName", [], "any", false, false, false, 126)), "html", null, true)) : ("https://via.placeholder.com/400x250?text=Recette"));
            yield "\"
                             class=\"card-img-top\" 
                             style=\"height: 220px; object-fit: cover;\" 
                             alt=\"";
            // line 129
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "titre", [], "any", false, false, false, 129), "html", null, true);
            yield "\">
                        
                        <div class=\"position-absolute top-0 end-0 m-2\">
                            <span class=\"badge bg-white text-dark rounded-circle p-2 shadow-sm\">
                                <i class=\"fas fa-heart text-danger\"></i>
                            </span>
                        </div>
                    </div>

                    <div class=\"card-body d-flex flex-column\">
                        <div class=\"mb-2\">
                            ";
            // line 140
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "tags", [], "any", false, false, false, 140));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 141
                yield "                                <span class=\"badge bg-primary-subtle text-primary rounded-pill me-1\" style=\"font-size: 0.7rem;\">#";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "nom", [], "any", false, false, false, 141), "html", null, true);
                yield "</span>
                            ";
                $context['_iterated'] = true;
            }
            // line 142
            if (!$context['_iterated']) {
                // line 143
                yield "                                <span class=\"badge bg-light text-muted rounded-pill\" style=\"font-size: 0.7rem;\">#Cuisine</span>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['tag'], $context['_parent'], $context['_iterated']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 145
            yield "                        </div>

                        <h5 class=\"card-title fw-bold mb-2\">";
            // line 147
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "titre", [], "any", false, false, false, 147), "html", null, true);
            yield "</h5>

                        <div class=\"mb-3\">
                            ";
            // line 150
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "difficulte", [], "any", false, false, false, 150) <= 2)) {
                // line 151
                yield "                                <span class=\"badge bg-success-subtle text-success border border-success rounded-pill\">🟢 Facile</span>
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 152
$context["recette"], "difficulte", [], "any", false, false, false, 152) <= 4)) {
                // line 153
                yield "                                <span class=\"badge bg-warning-subtle text-warning border border-warning rounded-pill\">🟡 Moyen</span>
                            ";
            } else {
                // line 155
                yield "                                <span class=\"badge bg-danger-subtle text-danger border border-danger rounded-pill\">🔴 Difficile</span>
                            ";
            }
            // line 157
            yield "                        </div>

                        <div class=\"mt-auto pt-3 border-top d-flex justify-content-between text-muted small\">
                            <span><i class=\"far fa-clock me-1 text-success\"></i> ";
            // line 160
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "tempsPreparation", [], "any", false, false, false, 160) + CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "tempsCuisson", [], "any", false, false, false, 160)), "html", null, true);
            yield " min</span>
                            <span><i class=\"fas fa-users me-1 text-success\"></i> ";
            // line 161
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "nbPersonnes", [], "any", false, false, false, 161), "html", null, true);
            yield " pers.</span>
                        </div>

                        <div class=\"mt-3 d-flex gap-2 position-relative\" style=\"z-index: 5;\">
                            <a href=\"";
            // line 165
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_recettes_modifier", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "id", [], "any", false, false, false, 165)]), "html", null, true);
            yield "\" 
                               class=\"btn btn-sm btn-outline-info rounded-pill flex-grow-1\">
                                modifier <i class=\"fas fa-edit\"></i>
                            </a>

                            <form method=\"post\" action=\"";
            // line 170
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_recettes_supprimer", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "id", [], "any", false, false, false, 170)]), "html", null, true);
            yield "\" 
                                  onsubmit=\"return confirm('Voulez-vous vraiment supprimer cette recette ?');\" class=\"flex-grow-1\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 172
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "id", [], "any", false, false, false, 172))), "html", null, true);
            yield "\">
                                <button class=\"btn btn-sm btn-outline-danger rounded-pill w-100\">
                                   suprimer <i class=\"fas fa-trash\"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                    
                    <a href=\"";
            // line 180
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_recette_detail", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "id", [], "any", false, false, false, 180)]), "html", null, true);
            yield "\" class=\"stretched-link\" style=\"z-index: 2;\"></a>
                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        // line 183
        if (!$context['_iterated']) {
            // line 184
            yield "            <div class=\"col-12 text-center py-5\">
                <div class=\"mb-3\"><i class=\"fas fa-search fa-3x text-muted\"></i></div>
                <p class=\"text-muted fs-4\">Aucune recette ne correspond à votre recherche.</p>
                <a href=\"";
            // line 187
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_recettes");
            yield "\" class=\"btn btn-success rounded-pill\">Voir toutes les recettes</a>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['recette'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 190
        yield "    </div>

    ";
        // line 193
        yield "    <div class=\"navigation d-flex justify-content-center mt-5\">
        ";
        // line 194
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["recettes"]) || array_key_exists("recettes", $context) ? $context["recettes"] : (function () { throw new RuntimeError('Variable "recettes" does not exist.', 194, $this->source); })()));
        yield "
    </div>
</div>

<style>
    .transition { transition: all 0.3s ease; }
    .hover-shadow:hover { 
        transform: translateY(-8px); 
        box-shadow: 0 1rem 2rem rgba(0,0,0,.12)!important; 
    }
    .bg-success-subtle { background-color: #e8f5e9; }
    .bg-warning-subtle { background-color: #fff9c4; }
    .bg-danger-subtle { background-color: #ffebee; }
    .bg-primary-subtle { background-color: #e3f2fd; }
    .btn-white { background: white; color: #666; }
    .btn-white:hover { background: #f8f9fa; }
    .sorting a { text-decoration: none; color: inherit; display: block; padding: 0 5px; }
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
        return array (  427 => 194,  424 => 193,  420 => 190,  411 => 187,  406 => 184,  404 => 183,  396 => 180,  385 => 172,  380 => 170,  372 => 165,  365 => 161,  361 => 160,  356 => 157,  352 => 155,  348 => 153,  346 => 152,  343 => 151,  341 => 150,  335 => 147,  331 => 145,  324 => 143,  322 => 142,  315 => 141,  310 => 140,  296 => 129,  290 => 126,  284 => 122,  279 => 121,  276 => 120,  267 => 113,  261 => 110,  255 => 107,  246 => 101,  242 => 99,  233 => 92,  224 => 86,  220 => 85,  216 => 84,  208 => 78,  199 => 75,  192 => 74,  188 => 73,  178 => 66,  172 => 64,  164 => 58,  157 => 53,  151 => 49,  144 => 44,  137 => 42,  135 => 41,  126 => 39,  123 => 38,  118 => 37,  105 => 27,  96 => 20,  83 => 9,  76 => 4,  63 => 3,  40 => 1,);
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

    {# --- SECTION 1: STATISTIQUES --- #}
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
           <p class=\"mt-2 mb-0 small text-muted\">Moyenne d'ingrédients : {{ moyenne|number_format(1) }}</p>
    </div>

    {# --- SECTION 2: HEADER & ACTIONS --- #}
    <div class=\"d-flex justify-content-between align-items-center mb-5\">
        <div>
            <h1 class=\"display-5 fw-bold\">Toutes les recettes</h1>
            <p class=\"text-muted\">Découvrez nos délices culinaires</p>
        </div>
        <a href=\"{{ path('app_recettes_nouvelle') }}\" class=\"btn btn-success rounded-pill px-4 shadow-sm\">
            <i class=\"fas fa-plus me-2\"></i>Nouvelle recette
        </a>
    </div>

    {# --- SECTION 3: FILTRES --- #}
    <form method=\"get\" action=\"{{ path('app_recettes') }}\" class=\"row g-3 mb-4 p-3 bg-white rounded-4 shadow-sm border\">
        <div class=\"col-md-4\">
            <input type=\"text\" name=\"titre\" value=\"{{ app.request.query.get('titre') }}\" 
                   class=\"form-control rounded-pill border-light bg-light\" placeholder=\"🔍 Rechercher par titre...\">
        </div>

        <div class=\"col-md-3\">
            <select name=\"categorie\" class=\"form-select rounded-pill border-light bg-light\">
                <option value=\"\">Toutes les catégories</option>
                {% for cat in categories %}
                    <option value=\"{{ cat.id }}\" {{ app.request.query.get('categorie') == cat.id ? 'selected' : '' }}>
                        {{ cat.nom }}
                    </option>
                {% endfor %}
            </select>
        </div>

        <div class=\"col-md-2\">
            <select name=\"difficulte\" class=\"form-select rounded-pill border-light bg-light\">
                <option value=\"\">Difficulté</option>
                <option value=\"1\" {{ app.request.query.get('difficulte') == '1' ? 'selected' : '' }}>Facile</option>
                <option value=\"3\" {{ app.request.query.get('difficulte') == '3' ? 'selected' : '' }}>Moyen</option>
                <option value=\"5\" {{ app.request.query.get('difficulte') == '5' ? 'selected' : '' }}>Difficile</option>
            </select>
        </div>

        <div class=\"col-md-3 d-flex gap-2\">
            <button type=\"submit\" class=\"btn btn-success rounded-pill flex-grow-1 shadow-sm\">Filtrer</button>
            <a href=\"{{ path('app_recettes') }}\" class=\"btn btn-outline-secondary rounded-pill shadow-sm\">
                <i class=\"fas fa-undo\"></i>
            </a>
        </div>
    </form>

    {# --- SECTION 4: INFOS PAGINATION & TRI --- #}
    <div class=\"d-flex justify-content-between align-items-center mb-4 px-2\">
        <div class=\"text-muted\">
            Total : <span class=\"fw-bold text-dark\">{{ recettes.getTotalItemCount }}</span> résultats trouvés
        </div>
        <div class=\"d-flex align-items-center gap-3\">
            <span class=\"small text-uppercase fw-bold text-muted\">Trier par :</span>
            <div class=\"btn-group shadow-sm rounded-pill overflow-hidden\">
                <span class=\"btn btn-sm btn-white border\">
                    {{ knp_pagination_sortable(recettes, 'Nom', 'r.titre') }}
                </span>
                <span class=\"btn btn-sm btn-white border\">
                    {{ knp_pagination_sortable(recettes, 'Date', 'r.dateCreation') }}
                </span>
                <span class=\"btn btn-sm btn-white border\">
                    {{ knp_pagination_sortable(recettes, 'Temps', 'r.tempsPreparation') }}
                </span>
            </div>
        </div>
    </div>

    {# --- SECTION 5: LISTE DES RECETTES (Grille 3x3) --- #}
    <div class=\"row g-4\">
        {% for recette in recettes %}
            <div class=\"col-xl-4 col-lg-4 col-md-6\">
                <div class=\"card h-100 border-0 shadow-sm rounded-4 overflow-hidden position-relative hover-shadow transition\">
                    
                    <div class=\"position-relative\">
                        <img src=\"{{ recette.imageName|trim ?: 'https://via.placeholder.com/400x250?text=Recette' }}\"
                             class=\"card-img-top\" 
                             style=\"height: 220px; object-fit: cover;\" 
                             alt=\"{{ recette.titre }}\">
                        
                        <div class=\"position-absolute top-0 end-0 m-2\">
                            <span class=\"badge bg-white text-dark rounded-circle p-2 shadow-sm\">
                                <i class=\"fas fa-heart text-danger\"></i>
                            </span>
                        </div>
                    </div>

                    <div class=\"card-body d-flex flex-column\">
                        <div class=\"mb-2\">
                            {% for tag in recette.tags %}
                                <span class=\"badge bg-primary-subtle text-primary rounded-pill me-1\" style=\"font-size: 0.7rem;\">#{{ tag.nom }}</span>
                            {% else %}
                                <span class=\"badge bg-light text-muted rounded-pill\" style=\"font-size: 0.7rem;\">#Cuisine</span>
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
                            <span><i class=\"far fa-clock me-1 text-success\"></i> {{ recette.tempsPreparation + recette.tempsCuisson }} min</span>
                            <span><i class=\"fas fa-users me-1 text-success\"></i> {{ recette.nbPersonnes }} pers.</span>
                        </div>

                        <div class=\"mt-3 d-flex gap-2 position-relative\" style=\"z-index: 5;\">
                            <a href=\"{{ path('app_recettes_modifier', {id: recette.id}) }}\" 
                               class=\"btn btn-sm btn-outline-info rounded-pill flex-grow-1\">
                                modifier <i class=\"fas fa-edit\"></i>
                            </a>

                            <form method=\"post\" action=\"{{ path('app_recettes_supprimer', {id: recette.id}) }}\" 
                                  onsubmit=\"return confirm('Voulez-vous vraiment supprimer cette recette ?');\" class=\"flex-grow-1\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ recette.id) }}\">
                                <button class=\"btn btn-sm btn-outline-danger rounded-pill w-100\">
                                   suprimer <i class=\"fas fa-trash\"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                    
                    <a href=\"{{ path('app_recette_detail', {id: recette.id}) }}\" class=\"stretched-link\" style=\"z-index: 2;\"></a>
                </div>
            </div>
        {% else %}
            <div class=\"col-12 text-center py-5\">
                <div class=\"mb-3\"><i class=\"fas fa-search fa-3x text-muted\"></i></div>
                <p class=\"text-muted fs-4\">Aucune recette ne correspond à votre recherche.</p>
                <a href=\"{{ path('app_recettes') }}\" class=\"btn btn-success rounded-pill\">Voir toutes les recettes</a>
            </div>
        {% endfor %}
    </div>

    {# --- SECTION 6: PAGINATION NAVIGATION --- #}
    <div class=\"navigation d-flex justify-content-center mt-5\">
        {{ knp_pagination_render(recettes) }}
    </div>
</div>

<style>
    .transition { transition: all 0.3s ease; }
    .hover-shadow:hover { 
        transform: translateY(-8px); 
        box-shadow: 0 1rem 2rem rgba(0,0,0,.12)!important; 
    }
    .bg-success-subtle { background-color: #e8f5e9; }
    .bg-warning-subtle { background-color: #fff9c4; }
    .bg-danger-subtle { background-color: #ffebee; }
    .bg-primary-subtle { background-color: #e3f2fd; }
    .btn-white { background: white; color: #666; }
    .btn-white:hover { background: #f8f9fa; }
    .sorting a { text-decoration: none; color: inherit; display: block; padding: 0 5px; }
</style>
{% endblock %}", "recettes/index.html.twig", "/home/useradm/projet-recettes/templates/recettes/index.html.twig");
    }
}
