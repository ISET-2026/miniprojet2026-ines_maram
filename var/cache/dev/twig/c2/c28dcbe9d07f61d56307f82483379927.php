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

/* home/index.html.twig */
class __TwigTemplate_58bc35ee068f86b92a2d6486ac746c01 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

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

        yield "Home";
        
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
    ";
        // line 7
        yield from $this->load("partials/navbar.html.twig", 7)->unwrap()->yield($context);
        // line 8
        yield "
    <!-- Preloader -->
    <div class=\"loader\">
        <div class=\"d-table\">
            <div class=\"d-table-cell\">
                <div class=\"spinner\"></div>
            </div>
        </div>
    </div>
    <!-- End Preloader -->

    <!-- Banner -->
    <div class=\"banner-area\">
        <div class=\"banner-shape\">
            <img src=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/home-one/banner/shape1.png"), "html", null, true);
        yield "\" alt=\"Shape\">
            <img src=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/home-one/banner/shape2.png"), "html", null, true);
        yield "\" alt=\"Shape\">
            <img src=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/home-one/banner/shape3.png"), "html", null, true);
        yield "\" alt=\"Shape\">
            <img src=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/home-one/banner/banner-shape.png"), "html", null, true);
        yield "\" alt=\"Shape\">
        </div>

        <div class=\"d-table\">
            <div class=\"d-table-cell\">
                <div class=\"container\">
                    <div class=\"row align-items-center justify-content-center\">

                        <div class=\"col-lg-6\">
                            <div class=\"banner-content\">
                                <h1>Discover & Share Delicious Recipes Online</h1>

                                <p>
                                    Find, cook, and enjoy delicious meals with simple instructions and ingredients.
                                </p>

                                <form>
                                    <input type=\"text\"
                                        class=\"form-control\"
                                        placeholder=\"Enter food name\">

                                    <button type=\"submit\"
                                            class=\"btn banner-form-btn\">
                                        Search Now
                                    </button>
                                </form>
                            </div>
                        </div>

                        <div class=\"col-lg-6\">
                            <div class=\"banner-slider owl-theme owl-carousel\">

                                <div class=\"slider-item\">
                                    <img src=\"";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/home-one/banner/banner-slider1.png"), "html", null, true);
        yield "\" alt=\"Slider\">
                                </div>

                                <div class=\"slider-item\">
                                    <img src=\"";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/home-one/banner/banner-slider2.png"), "html", null, true);
        yield "\" alt=\"Slider\">
                                </div>

                                <div class=\"slider-item\">
                                    <img src=\"";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/home-one/banner/banner-slider3.png"), "html", null, true);
        yield "\" alt=\"Slider\">
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner -->

    <!-- Feature -->
    <section class=\"feature-area pb-70\">
        <div class=\"container\">

            <div class=\"section-title\">
                <h2>Featured Categories</h2>
                <p>Explore a variety of recipe categories and find the perfect meal for every occasion..</p>
            </div>

            <div class=\"row justify-content-center\">

                <div class=\"col-sm-6 col-lg-4\">
                    <div class=\"feature-item\">

                        <img src=\"";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/home-one/feature1.jpg"), "html", null, true);
        yield "\" alt=\"Feature\">

                        <div class=\"feature-inner\">
                            <ul>

                                <li>
                                    <img src=\"";
        // line 99
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/home-one/feature1.png"), "html", null, true);
        yield "\" alt=\"Feature\">
                                </li>

                                <li>
                                    <span>Fast Food</span>
                                </li>

                                <li>
                                    <a href=\"#\">
                                        <i class='bx bx-right-arrow-alt'></i>
                                    </a>
                                </li>

                            </ul>
                        </div>

                    </div>
                </div>

                <div class=\"col-sm-6 col-lg-4\">
                    <div class=\"feature-item\">

                        <img src=\"";
        // line 121
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/home-one/feature2.jpg"), "html", null, true);
        yield "\" alt=\"Feature\">

                        <div class=\"feature-inner\">
                            <ul>

                                <li>
                                    <img src=\"";
        // line 127
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/home-one/feature2.png"), "html", null, true);
        yield "\" alt=\"Feature\">
                                </li>

                                <li>
                                    <span>Hot Platter</span>
                                </li>

                                <li>
                                    <a href=\"#\">
                                        <i class='bx bx-right-arrow-alt'></i>
                                    </a>
                                </li>

                            </ul>
                        </div>

                    </div>
                </div>

                <div class=\"col-sm-6 col-lg-4\">
                    <div class=\"feature-item\">

                        <img src=\"";
        // line 149
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/home-one/feature3.jpg"), "html", null, true);
        yield "\" alt=\"Feature\">

                        <div class=\"feature-inner\">
                            <ul>

                                <li>
                                    <img src=\"";
        // line 155
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/home-one/feature3.png"), "html", null, true);
        yield "\" alt=\"Feature\">
                                </li>

                                <li>
                                    <span>Dessert</span>
                                </li>

                                <li>
                                    <a href=\"#\">
                                        <i class='bx bx-right-arrow-alt'></i>
                                    </a>
                                </li>

                            </ul>
                        </div>

                    </div>
                </div>

            <a href=\"";
        // line 174
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categorie_index");
        yield "\" class=\"see-more-link\">
            See all categories <span>→</span>
            </a>

            </div>
            
        </div>
        
        

    </section>
    <!-- End Feature -->
        <!-- Review -->
    <div class=\"review-area\">
        <div class=\"container-fluid p-0\">
            <div class=\"row m-0 align-items-center justify-content-center\">

                <div class=\"col-lg-6 p-0\">
                    <div class=\"review-img\">
                        <img src=\"";
        // line 193
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/home-one/review1.png"), "html", null, true);
        yield "\" alt=\"Review\">
                        <img src=\"";
        // line 194
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/home-one/review2.png"), "html", null, true);
        yield "\" alt=\"Review\">
                    </div>
                </div>

                <div class=\"col-lg-6 p-0\">
                    <div class=\"review-item\">

                        <div class=\"section-title\">
                            <h2>What People Say About Us</h2>
                            <p>Read honest feedback from our users who love cooking with our recipes.</p>
                        </div>

                        <div class=\"slider-nav\">

                            <div class=\"item\">
                                <img src=\"";
        // line 209
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/home-one/review3.png"), "html", null, true);
        yield "\" alt=\"Review\">
                            </div>

                            <div class=\"item\">
                                <img src=\"";
        // line 213
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/home-one/review4.png"), "html", null, true);
        yield "\" alt=\"Review\">
                            </div>

                            <div class=\"item\">
                                <img src=\"";
        // line 217
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/home-one/review5.png"), "html", null, true);
        yield "\" alt=\"Review\">
                            </div>

                        </div>

                        <div class=\"slider-for\">

                            <div class=\"item\">
                                <h3>John Doe</h3>
                                <p>
                                    Restaurants range from inexpensive and informal dining places.
                                </p>
                            </div>

                            <div class=\"item\">
                                <h3>Jac Jackson</h3>
                                <p>
                                    Restaurants range from inexpensive and informal dining places.
                                </p>
                            </div>

                            <div class=\"item\">
                                <h3>Tom Henry</h3>
                                <p>
                                    Restaurants range from inexpensive and informal dining places.
                                </p>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Review -->

    <!-- Blog -->
    <section class=\"blog-area ptb-100\">

        <div class=\"container\">

            <div class=\"section-title\">
                <h2>Newly Added Recepies</h2>
                <p>Check out the latest recipes updated on our platform.</p>
            </div>

            <div class=\"row justify-content-center\">

                <div class=\"col-sm-6 col-lg-4\">
                    <div class=\"blog-item\">

                        <div class=\"blog-top\">
                            <a href=\"#\">
                                <img src=\"";
        // line 272
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/home-one/blog1.jpg"), "html", null, true);
        yield "\" alt=\"Blog\">
                            </a>

                            <span>01 May 2024</span>
                        </div>

                        <div class=\"blog-bottom\">

                            <h3>
                                <a href=\"#\">
                                    Brief About How to Make Pasta
                                </a>
                            </h3>

                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

                            <a class=\"cmn-btn\" href=\"#\">
                                Read More
                            </a>

                        </div>

                    </div>
                </div>

                <div class=\"col-sm-6 col-lg-4\">
                    <div class=\"blog-item\">

                        <div class=\"blog-top\">
                            <a href=\"#\">
                                <img src=\"";
        // line 302
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/home-one/blog2.jpg"), "html", null, true);
        yield "\" alt=\"Blog\">
                            </a>

                            <span>02 May 2024</span>
                        </div>

                        <div class=\"blog-bottom\">

                            <h3>
                                <a href=\"#\">
                                    Brief About How to Make Pizza
                                </a>
                            </h3>

                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

                            <a class=\"cmn-btn\" href=\"#\">
                                Read More
                            </a>

                        </div>

                    </div>
                </div>

            </div>

        </div>

    </section>
    <!-- End Blog -->

    <!-- Subscribe -->
    <section class=\"subscribe-area\">

        <div class=\"container\">

            <div class=\"row align-items-center justify-content-center\">

                <div class=\"col-lg-7\">

                    <div class=\"subscribe-item\">

                        <div class=\"section-title\">
                            <h2>Subscribe News Letter</h2>
                            <p>Get updates from our restaurant.</p>
                        </div>

                        <form class=\"newsletter-form\">

                            <input type=\"email\"
                                class=\"form-control\"
                                placeholder=\"Enter your email\">

                            <button class=\"btn cmn-btn\" type=\"submit\">
                                Subscribe
                            </button>

                        </form>

                    </div>

                </div>

                <div class=\"col-lg-5\">

                    <div class=\"subscribe-img\">
                        <img src=\"";
        // line 369
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/home-one/subscribe-main.png"), "html", null, true);
        yield "\"
                        alt=\"Subscribe\">
                    </div>

                </div>

            </div>

        </div>

    </section>
    <!-- End Subscribe -->

    ";
        // line 382
        yield from $this->load("partials/footer.html.twig", 382)->unwrap()->yield($context);
        // line 383
        yield "


";
        // line 386
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 411
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 386
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

        // line 387
        yield "
    <script src=\"";
        // line 388
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        yield "\"></script>

    <script src=\"";
        // line 390
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.bundle.min.js"), "html", null, true);
        yield "\"></script>

    <script src=\"";
        // line 392
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.meanmenu.js"), "html", null, true);
        yield "\"></script>

    <script src=\"";
        // line 394
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/owl.carousel.min.js"), "html", null, true);
        yield "\"></script>

    <script src=\"";
        // line 396
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.mixitup.min.js"), "html", null, true);
        yield "\"></script>

    <script src=\"";
        // line 398
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/slick.min.js"), "html", null, true);
        yield "\"></script>

    <script src=\"";
        // line 400
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.ajaxchimp.min.js"), "html", null, true);
        yield "\"></script>

    <script src=\"";
        // line 402
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/form-validator.min.js"), "html", null, true);
        yield "\"></script>

    <script src=\"";
        // line 404
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/contact-form-script.js"), "html", null, true);
        yield "\"></script>

    <script src=\"";
        // line 406
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.magnific-popup.min.js"), "html", null, true);
        yield "\"></script>

    <script src=\"";
        // line 408
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/custom.js"), "html", null, true);
        yield "\"></script>

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
        return "home/index.html.twig";
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
        return array (  635 => 408,  630 => 406,  625 => 404,  620 => 402,  615 => 400,  610 => 398,  605 => 396,  600 => 394,  595 => 392,  590 => 390,  585 => 388,  582 => 387,  569 => 386,  557 => 411,  555 => 386,  550 => 383,  548 => 382,  532 => 369,  462 => 302,  429 => 272,  371 => 217,  364 => 213,  357 => 209,  339 => 194,  335 => 193,  313 => 174,  291 => 155,  282 => 149,  257 => 127,  248 => 121,  223 => 99,  214 => 93,  184 => 66,  177 => 62,  170 => 58,  134 => 25,  130 => 24,  126 => 23,  122 => 22,  106 => 8,  104 => 7,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Home{% endblock %}

{% block body %}

    {% include 'partials/navbar.html.twig' %}

    <!-- Preloader -->
    <div class=\"loader\">
        <div class=\"d-table\">
            <div class=\"d-table-cell\">
                <div class=\"spinner\"></div>
            </div>
        </div>
    </div>
    <!-- End Preloader -->

    <!-- Banner -->
    <div class=\"banner-area\">
        <div class=\"banner-shape\">
            <img src=\"{{ asset('assets/img/home-one/banner/shape1.png') }}\" alt=\"Shape\">
            <img src=\"{{ asset('assets/img/home-one/banner/shape2.png') }}\" alt=\"Shape\">
            <img src=\"{{ asset('assets/img/home-one/banner/shape3.png') }}\" alt=\"Shape\">
            <img src=\"{{ asset('assets/img/home-one/banner/banner-shape.png') }}\" alt=\"Shape\">
        </div>

        <div class=\"d-table\">
            <div class=\"d-table-cell\">
                <div class=\"container\">
                    <div class=\"row align-items-center justify-content-center\">

                        <div class=\"col-lg-6\">
                            <div class=\"banner-content\">
                                <h1>Discover & Share Delicious Recipes Online</h1>

                                <p>
                                    Find, cook, and enjoy delicious meals with simple instructions and ingredients.
                                </p>

                                <form>
                                    <input type=\"text\"
                                        class=\"form-control\"
                                        placeholder=\"Enter food name\">

                                    <button type=\"submit\"
                                            class=\"btn banner-form-btn\">
                                        Search Now
                                    </button>
                                </form>
                            </div>
                        </div>

                        <div class=\"col-lg-6\">
                            <div class=\"banner-slider owl-theme owl-carousel\">

                                <div class=\"slider-item\">
                                    <img src=\"{{ asset('assets/img/home-one/banner/banner-slider1.png') }}\" alt=\"Slider\">
                                </div>

                                <div class=\"slider-item\">
                                    <img src=\"{{ asset('assets/img/home-one/banner/banner-slider2.png') }}\" alt=\"Slider\">
                                </div>

                                <div class=\"slider-item\">
                                    <img src=\"{{ asset('assets/img/home-one/banner/banner-slider3.png') }}\" alt=\"Slider\">
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner -->

    <!-- Feature -->
    <section class=\"feature-area pb-70\">
        <div class=\"container\">

            <div class=\"section-title\">
                <h2>Featured Categories</h2>
                <p>Explore a variety of recipe categories and find the perfect meal for every occasion..</p>
            </div>

            <div class=\"row justify-content-center\">

                <div class=\"col-sm-6 col-lg-4\">
                    <div class=\"feature-item\">

                        <img src=\"{{ asset('assets/img/home-one/feature1.jpg') }}\" alt=\"Feature\">

                        <div class=\"feature-inner\">
                            <ul>

                                <li>
                                    <img src=\"{{ asset('assets/img/home-one/feature1.png') }}\" alt=\"Feature\">
                                </li>

                                <li>
                                    <span>Fast Food</span>
                                </li>

                                <li>
                                    <a href=\"#\">
                                        <i class='bx bx-right-arrow-alt'></i>
                                    </a>
                                </li>

                            </ul>
                        </div>

                    </div>
                </div>

                <div class=\"col-sm-6 col-lg-4\">
                    <div class=\"feature-item\">

                        <img src=\"{{ asset('assets/img/home-one/feature2.jpg') }}\" alt=\"Feature\">

                        <div class=\"feature-inner\">
                            <ul>

                                <li>
                                    <img src=\"{{ asset('assets/img/home-one/feature2.png') }}\" alt=\"Feature\">
                                </li>

                                <li>
                                    <span>Hot Platter</span>
                                </li>

                                <li>
                                    <a href=\"#\">
                                        <i class='bx bx-right-arrow-alt'></i>
                                    </a>
                                </li>

                            </ul>
                        </div>

                    </div>
                </div>

                <div class=\"col-sm-6 col-lg-4\">
                    <div class=\"feature-item\">

                        <img src=\"{{ asset('assets/img/home-one/feature3.jpg') }}\" alt=\"Feature\">

                        <div class=\"feature-inner\">
                            <ul>

                                <li>
                                    <img src=\"{{ asset('assets/img/home-one/feature3.png') }}\" alt=\"Feature\">
                                </li>

                                <li>
                                    <span>Dessert</span>
                                </li>

                                <li>
                                    <a href=\"#\">
                                        <i class='bx bx-right-arrow-alt'></i>
                                    </a>
                                </li>

                            </ul>
                        </div>

                    </div>
                </div>

            <a href=\"{{ path('categorie_index') }}\" class=\"see-more-link\">
            See all categories <span>→</span>
            </a>

            </div>
            
        </div>
        
        

    </section>
    <!-- End Feature -->
        <!-- Review -->
    <div class=\"review-area\">
        <div class=\"container-fluid p-0\">
            <div class=\"row m-0 align-items-center justify-content-center\">

                <div class=\"col-lg-6 p-0\">
                    <div class=\"review-img\">
                        <img src=\"{{ asset('assets/img/home-one/review1.png') }}\" alt=\"Review\">
                        <img src=\"{{ asset('assets/img/home-one/review2.png') }}\" alt=\"Review\">
                    </div>
                </div>

                <div class=\"col-lg-6 p-0\">
                    <div class=\"review-item\">

                        <div class=\"section-title\">
                            <h2>What People Say About Us</h2>
                            <p>Read honest feedback from our users who love cooking with our recipes.</p>
                        </div>

                        <div class=\"slider-nav\">

                            <div class=\"item\">
                                <img src=\"{{ asset('assets/img/home-one/review3.png') }}\" alt=\"Review\">
                            </div>

                            <div class=\"item\">
                                <img src=\"{{ asset('assets/img/home-one/review4.png') }}\" alt=\"Review\">
                            </div>

                            <div class=\"item\">
                                <img src=\"{{ asset('assets/img/home-one/review5.png') }}\" alt=\"Review\">
                            </div>

                        </div>

                        <div class=\"slider-for\">

                            <div class=\"item\">
                                <h3>John Doe</h3>
                                <p>
                                    Restaurants range from inexpensive and informal dining places.
                                </p>
                            </div>

                            <div class=\"item\">
                                <h3>Jac Jackson</h3>
                                <p>
                                    Restaurants range from inexpensive and informal dining places.
                                </p>
                            </div>

                            <div class=\"item\">
                                <h3>Tom Henry</h3>
                                <p>
                                    Restaurants range from inexpensive and informal dining places.
                                </p>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Review -->

    <!-- Blog -->
    <section class=\"blog-area ptb-100\">

        <div class=\"container\">

            <div class=\"section-title\">
                <h2>Newly Added Recepies</h2>
                <p>Check out the latest recipes updated on our platform.</p>
            </div>

            <div class=\"row justify-content-center\">

                <div class=\"col-sm-6 col-lg-4\">
                    <div class=\"blog-item\">

                        <div class=\"blog-top\">
                            <a href=\"#\">
                                <img src=\"{{ asset('assets/img/home-one/blog1.jpg') }}\" alt=\"Blog\">
                            </a>

                            <span>01 May 2024</span>
                        </div>

                        <div class=\"blog-bottom\">

                            <h3>
                                <a href=\"#\">
                                    Brief About How to Make Pasta
                                </a>
                            </h3>

                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

                            <a class=\"cmn-btn\" href=\"#\">
                                Read More
                            </a>

                        </div>

                    </div>
                </div>

                <div class=\"col-sm-6 col-lg-4\">
                    <div class=\"blog-item\">

                        <div class=\"blog-top\">
                            <a href=\"#\">
                                <img src=\"{{ asset('assets/img/home-one/blog2.jpg') }}\" alt=\"Blog\">
                            </a>

                            <span>02 May 2024</span>
                        </div>

                        <div class=\"blog-bottom\">

                            <h3>
                                <a href=\"#\">
                                    Brief About How to Make Pizza
                                </a>
                            </h3>

                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

                            <a class=\"cmn-btn\" href=\"#\">
                                Read More
                            </a>

                        </div>

                    </div>
                </div>

            </div>

        </div>

    </section>
    <!-- End Blog -->

    <!-- Subscribe -->
    <section class=\"subscribe-area\">

        <div class=\"container\">

            <div class=\"row align-items-center justify-content-center\">

                <div class=\"col-lg-7\">

                    <div class=\"subscribe-item\">

                        <div class=\"section-title\">
                            <h2>Subscribe News Letter</h2>
                            <p>Get updates from our restaurant.</p>
                        </div>

                        <form class=\"newsletter-form\">

                            <input type=\"email\"
                                class=\"form-control\"
                                placeholder=\"Enter your email\">

                            <button class=\"btn cmn-btn\" type=\"submit\">
                                Subscribe
                            </button>

                        </form>

                    </div>

                </div>

                <div class=\"col-lg-5\">

                    <div class=\"subscribe-img\">
                        <img src=\"{{ asset('assets/img/home-one/subscribe-main.png') }}\"
                        alt=\"Subscribe\">
                    </div>

                </div>

            </div>

        </div>

    </section>
    <!-- End Subscribe -->

    {% include 'partials/footer.html.twig' %}



{% block javascripts %}

    <script src=\"{{ asset('assets/js/jquery.min.js') }}\"></script>

    <script src=\"{{ asset('assets/js/bootstrap.bundle.min.js') }}\"></script>

    <script src=\"{{ asset('assets/js/jquery.meanmenu.js') }}\"></script>

    <script src=\"{{ asset('assets/js/owl.carousel.min.js') }}\"></script>

    <script src=\"{{ asset('assets/js/jquery.mixitup.min.js') }}\"></script>

    <script src=\"{{ asset('assets/js/slick.min.js') }}\"></script>

    <script src=\"{{ asset('assets/js/jquery.ajaxchimp.min.js') }}\"></script>

    <script src=\"{{ asset('assets/js/form-validator.min.js') }}\"></script>

    <script src=\"{{ asset('assets/js/contact-form-script.js') }}\"></script>

    <script src=\"{{ asset('assets/js/jquery.magnific-popup.min.js') }}\"></script>

    <script src=\"{{ asset('assets/js/custom.js') }}\"></script>

{% endblock %}

{% endblock %}", "home/index.html.twig", "/home/vboxuser/projet_recettes/projet_recette/templates/home/index.html.twig");
    }
}
