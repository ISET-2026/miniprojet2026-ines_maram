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

/* accueil/index.html.twig */
class __TwigTemplate_496252487ba14650cedbeb9bed075534 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/index.html.twig"));

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

        yield "Home
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        // line 7
        yield "
\t";
        // line 8
        yield from $this->load("partials/navbar.html.twig", 8)->unwrap()->yield($context);
        // line 9
        yield "

\t<div class=\"loader\">
\t\t<div class=\"d-table\">
\t\t\t<div class=\"d-table-cell\">
\t\t\t\t<div class=\"spinner\"></div>
\t\t\t</div>
\t\t</div>
\t</div>


\t<div class=\"banner-area\">
\t\t<div class=\"banner-shape\">
\t\t\t<img src=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/home-one/banner/shape1.png"), "html", null, true);
        yield "\" alt=\"Shape\">
\t\t\t<img src=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/home-one/banner/shape2.png"), "html", null, true);
        yield "\" alt=\"Shape\">
\t\t\t<img src=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/home-one/banner/shape3.png"), "html", null, true);
        yield "\" alt=\"Shape\">
\t\t\t<img src=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/home-one/banner/banner-shape.png"), "html", null, true);
        yield "\" alt=\"Shape\">
\t\t</div>

\t\t<div class=\"d-table\">
\t\t\t<div class=\"d-table-cell\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row align-items-center justify-content-center\">

\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t<div class=\"banner-content\">
\t\t\t\t\t\t\t\t<h1>Discover & Share Delicious Recipes Online</h1>

\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tFind, cook, and enjoy delicious meals with simple instructions and ingredients.
\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Enter food name\">

\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn banner-form-btn\">
\t\t\t\t\t\t\t\t\t\tSearch Now
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t<div class=\"banner-slider owl-theme owl-carousel\">

\t\t\t\t\t\t\t\t<div class=\"slider-item\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/home-one/banner/banner-slider1.png"), "html", null, true);
        yield "\" alt=\"Slider\">
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"slider-item\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/home-one/banner/banner-slider2.png"), "html", null, true);
        yield "\" alt=\"Slider\">
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"slider-item\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/home-one/banner/banner-slider3.png"), "html", null, true);
        yield "\" alt=\"Slider\">
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<section class=\"feature-area pb-70\">
\t\t<div class=\"container\">

\t\t\t<div class=\"section-title\">
\t\t\t\t<h2>Featured Categories</h2>
\t\t\t\t<p>Explore a variety of recipe categories and find the perfect meal for every occasion..</p>
\t\t\t</div>

\t\t\t<div class=\"row justify-content-center\">

\t\t\t\t<div class=\"col-sm-6 col-lg-4\">
\t\t\t\t\t<div class=\"feature-item\">

\t\t\t\t\t\t<img src=\"";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/home-one/feature1.jpg"), "html", null, true);
        yield "\" alt=\"Feature\">

\t\t\t\t\t\t<div class=\"feature-inner\">
\t\t\t\t\t\t\t<ul>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 94
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/home-one/feature1.png"), "html", null, true);
        yield "\" alt=\"Feature\">
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<span>Fast Food</span>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class='bx bx-right-arrow-alt'></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-sm-6 col-lg-4\">
\t\t\t\t\t<div class=\"feature-item\">

\t\t\t\t\t\t<img src=\"";
        // line 116
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/home-one/feature2.jpg"), "html", null, true);
        yield "\" alt=\"Feature\">

\t\t\t\t\t\t<div class=\"feature-inner\">
\t\t\t\t\t\t\t<ul>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 122
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/home-one/feature2.png"), "html", null, true);
        yield "\" alt=\"Feature\">
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<span>Hot Platter</span>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class='bx bx-right-arrow-alt'></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-sm-6 col-lg-4\">
\t\t\t\t\t<div class=\"feature-item\">

\t\t\t\t\t\t<img src=\"";
        // line 144
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/home-one/feature3.jpg"), "html", null, true);
        yield "\" alt=\"Feature\">

\t\t\t\t\t\t<div class=\"feature-inner\">
\t\t\t\t\t\t\t<ul>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 150
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/home-one/feature3.png"), "html", null, true);
        yield "\" alt=\"Feature\">
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<span>Dessert</span>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class='bx bx-right-arrow-alt'></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<a href=\"";
        // line 169
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categories");
        yield "\" class=\"see-more-link\">
\t\t\t\t\tSee all categories
\t\t\t\t\t<span>→</span>
\t\t\t\t</a>

\t\t\t</div>

\t\t</div>


\t</section>

\t<div class=\"review-area\">
\t\t<div class=\"container-fluid p-0\">
\t\t\t<div class=\"row m-0 align-items-center justify-content-center\">

\t\t\t\t<div class=\"col-lg-6 p-0\">
\t\t\t\t\t<div class=\"review-img\">
\t\t\t\t\t\t<img src=\"";
        // line 187
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/home-one/review1.png"), "html", null, true);
        yield "\" alt=\"Review\">
\t\t\t\t\t\t<img src=\"";
        // line 188
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/home-one/review2.png"), "html", null, true);
        yield "\" alt=\"Review\">
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-lg-6 p-0\">
\t\t\t\t\t<div class=\"review-item\">

\t\t\t\t\t\t<div class=\"section-title\">
\t\t\t\t\t\t\t<h2>What People Say About Us</h2>
\t\t\t\t\t\t\t<p>Read honest feedback from our users who love cooking with our recipes.</p>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"slider-nav\">

\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 203
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/home-one/review3.png"), "html", null, true);
        yield "\" alt=\"Review\">
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 207
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/home-one/review4.png"), "html", null, true);
        yield "\" alt=\"Review\">
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 211
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/home-one/review5.png"), "html", null, true);
        yield "\" alt=\"Review\">
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"slider-for\">

\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t<h3>John Doe</h3>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tRestaurants range from inexpensive and informal dining places.
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t<h3>Jac Jackson</h3>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tRestaurants range from inexpensive and informal dining places.
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t<h3>Tom Henry</h3>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tRestaurants range from inexpensive and informal dining places.
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t</div>

\t<section class=\"blog-area ptb-100\">

\t\t<div class=\"container\">

\t\t\t<div class=\"section-title\">
\t\t\t\t<h2>Newly Added Recepies</h2>
\t\t\t\t<p>Check out the latest recipes updated on our platform.</p>
\t\t\t</div>

\t\t\t<div class=\"row justify-content-center\">

\t\t\t\t<div class=\"col-sm-6 col-lg-4\">
\t\t\t\t\t<div class=\"blog-item\">

\t\t\t\t\t\t<div class=\"blog-top\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 264
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/home-one/blog1.jpg"), "html", null, true);
        yield "\" alt=\"Blog\">
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<span>01 May 2024</span>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"blog-bottom\">

\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\tBrief About How to Make Pasta
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</h3>

\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

\t\t\t\t\t\t\t<a class=\"cmn-btn\" href=\"#\">
\t\t\t\t\t\t\t\tRead More
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-sm-6 col-lg-4\">
\t\t\t\t\t<div class=\"blog-item\">

\t\t\t\t\t\t<div class=\"blog-top\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 294
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/home-one/blog2.jpg"), "html", null, true);
        yield "\" alt=\"Blog\">
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<span>02 May 2024</span>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"blog-bottom\">

\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\tBrief About How to Make Pizza
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</h3>

\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

\t\t\t\t\t\t\t<a class=\"cmn-btn\" href=\"#\">
\t\t\t\t\t\t\t\tRead More
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>

\t\t</div>

\t</section>

\t<section class=\"subscribe-area\">

\t\t<div class=\"container\">

\t\t\t<div class=\"row align-items-center justify-content-center\">

\t\t\t\t<div class=\"col-lg-7\">

\t\t\t\t\t<div class=\"subscribe-item\">

\t\t\t\t\t\t<div class=\"section-title\">
\t\t\t\t\t\t\t<h2>Subscribe News Letter</h2>
\t\t\t\t\t\t\t<p>Get updates from our restaurant.</p>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<form class=\"newsletter-form\">

\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" placeholder=\"Enter your email\">

\t\t\t\t\t\t\t<button class=\"btn cmn-btn\" type=\"submit\">
\t\t\t\t\t\t\t\tSubscribe
\t\t\t\t\t\t\t</button>

\t\t\t\t\t\t</form>

\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t\t<div class=\"col-lg-5\">

\t\t\t\t\t<div class=\"subscribe-img\">
\t\t\t\t\t\t<img src=\"";
        // line 357
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/home-one/subscribe-main.png"), "html", null, true);
        yield "\" alt=\"Subscribe\">
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>

\t\t</div>

\t</section>


\t";
        // line 369
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 394
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 369
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 370
        yield "
\t\t<script src=\"";
        // line 371
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        yield "\"></script>

\t\t<script src=\"";
        // line 373
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.bundle.min.js"), "html", null, true);
        yield "\"></script>

\t\t<script src=\"";
        // line 375
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.meanmenu.js"), "html", null, true);
        yield "\"></script>

\t\t<script src=\"";
        // line 377
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/owl.carousel.min.js"), "html", null, true);
        yield "\"></script>

\t\t<script src=\"";
        // line 379
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.mixitup.min.js"), "html", null, true);
        yield "\"></script>

\t\t<script src=\"";
        // line 381
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/slick.min.js"), "html", null, true);
        yield "\"></script>

\t\t<script src=\"";
        // line 383
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.ajaxchimp.min.js"), "html", null, true);
        yield "\"></script>

\t\t<script src=\"";
        // line 385
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/form-validator.min.js"), "html", null, true);
        yield "\"></script>

\t\t<script src=\"";
        // line 387
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/contact-form-script.js"), "html", null, true);
        yield "\"></script>

\t\t<script src=\"";
        // line 389
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.magnific-popup.min.js"), "html", null, true);
        yield "\"></script>

\t\t<script src=\"";
        // line 391
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/custom.js"), "html", null, true);
        yield "\"></script>

\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "accueil/index.html.twig";
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
        return array (  615 => 391,  610 => 389,  605 => 387,  600 => 385,  595 => 383,  590 => 381,  585 => 379,  580 => 377,  575 => 375,  570 => 373,  565 => 371,  562 => 370,  549 => 369,  537 => 394,  535 => 369,  520 => 357,  454 => 294,  421 => 264,  365 => 211,  358 => 207,  351 => 203,  333 => 188,  329 => 187,  308 => 169,  286 => 150,  277 => 144,  252 => 122,  243 => 116,  218 => 94,  209 => 88,  181 => 63,  174 => 59,  167 => 55,  134 => 25,  130 => 24,  126 => 23,  122 => 22,  107 => 9,  105 => 8,  102 => 7,  89 => 6,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Home
{% endblock %}

{% block body %}

\t{% include 'partials/navbar.html.twig' %}


\t<div class=\"loader\">
\t\t<div class=\"d-table\">
\t\t\t<div class=\"d-table-cell\">
\t\t\t\t<div class=\"spinner\"></div>
\t\t\t</div>
\t\t</div>
\t</div>


\t<div class=\"banner-area\">
\t\t<div class=\"banner-shape\">
\t\t\t<img src=\"{{ asset('assets/img/home-one/banner/shape1.png') }}\" alt=\"Shape\">
\t\t\t<img src=\"{{ asset('assets/img/home-one/banner/shape2.png') }}\" alt=\"Shape\">
\t\t\t<img src=\"{{ asset('assets/img/home-one/banner/shape3.png') }}\" alt=\"Shape\">
\t\t\t<img src=\"{{ asset('assets/img/home-one/banner/banner-shape.png') }}\" alt=\"Shape\">
\t\t</div>

\t\t<div class=\"d-table\">
\t\t\t<div class=\"d-table-cell\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row align-items-center justify-content-center\">

\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t<div class=\"banner-content\">
\t\t\t\t\t\t\t\t<h1>Discover & Share Delicious Recipes Online</h1>

\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tFind, cook, and enjoy delicious meals with simple instructions and ingredients.
\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Enter food name\">

\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn banner-form-btn\">
\t\t\t\t\t\t\t\t\t\tSearch Now
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t<div class=\"banner-slider owl-theme owl-carousel\">

\t\t\t\t\t\t\t\t<div class=\"slider-item\">
\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('assets/img/home-one/banner/banner-slider1.png') }}\" alt=\"Slider\">
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"slider-item\">
\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('assets/img/home-one/banner/banner-slider2.png') }}\" alt=\"Slider\">
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"slider-item\">
\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('assets/img/home-one/banner/banner-slider3.png') }}\" alt=\"Slider\">
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<section class=\"feature-area pb-70\">
\t\t<div class=\"container\">

\t\t\t<div class=\"section-title\">
\t\t\t\t<h2>Featured Categories</h2>
\t\t\t\t<p>Explore a variety of recipe categories and find the perfect meal for every occasion..</p>
\t\t\t</div>

\t\t\t<div class=\"row justify-content-center\">

\t\t\t\t<div class=\"col-sm-6 col-lg-4\">
\t\t\t\t\t<div class=\"feature-item\">

\t\t\t\t\t\t<img src=\"{{ asset('assets/img/home-one/feature1.jpg') }}\" alt=\"Feature\">

\t\t\t\t\t\t<div class=\"feature-inner\">
\t\t\t\t\t\t\t<ul>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('assets/img/home-one/feature1.png') }}\" alt=\"Feature\">
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<span>Fast Food</span>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class='bx bx-right-arrow-alt'></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-sm-6 col-lg-4\">
\t\t\t\t\t<div class=\"feature-item\">

\t\t\t\t\t\t<img src=\"{{ asset('assets/img/home-one/feature2.jpg') }}\" alt=\"Feature\">

\t\t\t\t\t\t<div class=\"feature-inner\">
\t\t\t\t\t\t\t<ul>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('assets/img/home-one/feature2.png') }}\" alt=\"Feature\">
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<span>Hot Platter</span>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class='bx bx-right-arrow-alt'></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-sm-6 col-lg-4\">
\t\t\t\t\t<div class=\"feature-item\">

\t\t\t\t\t\t<img src=\"{{ asset('assets/img/home-one/feature3.jpg') }}\" alt=\"Feature\">

\t\t\t\t\t\t<div class=\"feature-inner\">
\t\t\t\t\t\t\t<ul>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('assets/img/home-one/feature3.png') }}\" alt=\"Feature\">
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<span>Dessert</span>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class='bx bx-right-arrow-alt'></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<a href=\"{{ path('app_categories') }}\" class=\"see-more-link\">
\t\t\t\t\tSee all categories
\t\t\t\t\t<span>→</span>
\t\t\t\t</a>

\t\t\t</div>

\t\t</div>


\t</section>

\t<div class=\"review-area\">
\t\t<div class=\"container-fluid p-0\">
\t\t\t<div class=\"row m-0 align-items-center justify-content-center\">

\t\t\t\t<div class=\"col-lg-6 p-0\">
\t\t\t\t\t<div class=\"review-img\">
\t\t\t\t\t\t<img src=\"{{ asset('assets/img/home-one/review1.png') }}\" alt=\"Review\">
\t\t\t\t\t\t<img src=\"{{ asset('assets/img/home-one/review2.png') }}\" alt=\"Review\">
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-lg-6 p-0\">
\t\t\t\t\t<div class=\"review-item\">

\t\t\t\t\t\t<div class=\"section-title\">
\t\t\t\t\t\t\t<h2>What People Say About Us</h2>
\t\t\t\t\t\t\t<p>Read honest feedback from our users who love cooking with our recipes.</p>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"slider-nav\">

\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t<img src=\"{{ asset('assets/img/home-one/review3.png') }}\" alt=\"Review\">
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t<img src=\"{{ asset('assets/img/home-one/review4.png') }}\" alt=\"Review\">
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t<img src=\"{{ asset('assets/img/home-one/review5.png') }}\" alt=\"Review\">
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"slider-for\">

\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t<h3>John Doe</h3>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tRestaurants range from inexpensive and informal dining places.
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t<h3>Jac Jackson</h3>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tRestaurants range from inexpensive and informal dining places.
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t<h3>Tom Henry</h3>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tRestaurants range from inexpensive and informal dining places.
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t</div>

\t<section class=\"blog-area ptb-100\">

\t\t<div class=\"container\">

\t\t\t<div class=\"section-title\">
\t\t\t\t<h2>Newly Added Recepies</h2>
\t\t\t\t<p>Check out the latest recipes updated on our platform.</p>
\t\t\t</div>

\t\t\t<div class=\"row justify-content-center\">

\t\t\t\t<div class=\"col-sm-6 col-lg-4\">
\t\t\t\t\t<div class=\"blog-item\">

\t\t\t\t\t\t<div class=\"blog-top\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<img src=\"{{ asset('assets/img/home-one/blog1.jpg') }}\" alt=\"Blog\">
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<span>01 May 2024</span>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"blog-bottom\">

\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\tBrief About How to Make Pasta
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</h3>

\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

\t\t\t\t\t\t\t<a class=\"cmn-btn\" href=\"#\">
\t\t\t\t\t\t\t\tRead More
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-sm-6 col-lg-4\">
\t\t\t\t\t<div class=\"blog-item\">

\t\t\t\t\t\t<div class=\"blog-top\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<img src=\"{{ asset('assets/img/home-one/blog2.jpg') }}\" alt=\"Blog\">
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<span>02 May 2024</span>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"blog-bottom\">

\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\tBrief About How to Make Pizza
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</h3>

\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

\t\t\t\t\t\t\t<a class=\"cmn-btn\" href=\"#\">
\t\t\t\t\t\t\t\tRead More
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>

\t\t</div>

\t</section>

\t<section class=\"subscribe-area\">

\t\t<div class=\"container\">

\t\t\t<div class=\"row align-items-center justify-content-center\">

\t\t\t\t<div class=\"col-lg-7\">

\t\t\t\t\t<div class=\"subscribe-item\">

\t\t\t\t\t\t<div class=\"section-title\">
\t\t\t\t\t\t\t<h2>Subscribe News Letter</h2>
\t\t\t\t\t\t\t<p>Get updates from our restaurant.</p>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<form class=\"newsletter-form\">

\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" placeholder=\"Enter your email\">

\t\t\t\t\t\t\t<button class=\"btn cmn-btn\" type=\"submit\">
\t\t\t\t\t\t\t\tSubscribe
\t\t\t\t\t\t\t</button>

\t\t\t\t\t\t</form>

\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t\t<div class=\"col-lg-5\">

\t\t\t\t\t<div class=\"subscribe-img\">
\t\t\t\t\t\t<img src=\"{{ asset('assets/img/home-one/subscribe-main.png') }}\" alt=\"Subscribe\">
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>

\t\t</div>

\t</section>


\t{% block javascripts %}

\t\t<script src=\"{{ asset('assets/js/jquery.min.js') }}\"></script>

\t\t<script src=\"{{ asset('assets/js/bootstrap.bundle.min.js') }}\"></script>

\t\t<script src=\"{{ asset('assets/js/jquery.meanmenu.js') }}\"></script>

\t\t<script src=\"{{ asset('assets/js/owl.carousel.min.js') }}\"></script>

\t\t<script src=\"{{ asset('assets/js/jquery.mixitup.min.js') }}\"></script>

\t\t<script src=\"{{ asset('assets/js/slick.min.js') }}\"></script>

\t\t<script src=\"{{ asset('assets/js/jquery.ajaxchimp.min.js') }}\"></script>

\t\t<script src=\"{{ asset('assets/js/form-validator.min.js') }}\"></script>

\t\t<script src=\"{{ asset('assets/js/contact-form-script.js') }}\"></script>

\t\t<script src=\"{{ asset('assets/js/jquery.magnific-popup.min.js') }}\"></script>

\t\t<script src=\"{{ asset('assets/js/custom.js') }}\"></script>

\t{% endblock %}

{% endblock %}
", "accueil/index.html.twig", "/home/useradm/miniprojet2026-ines_maram/templates/accueil/index.html.twig");
    }
}
