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

/* dashboard/index.html.twig */
class __TwigTemplate_56a81480f233994e1c01e6a177d059f9001bc2ccd813596a57916e7a040418d4 extends Template
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
            'page_title' => [$this, 'block_page_title'],
            'breadcrumb_items' => [$this, 'block_breadcrumb_items'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'body' => [$this, 'block_body'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dashboard/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Dashboard - Light Able";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        yield "Home";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_breadcrumb_items(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumb_items"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumb_items"));

        // line 8
        yield "    <li class=\"breadcrumb-item\"><a href=\"javascript: void(0)\">Dashboard</a></li>
    <li class=\"breadcrumb-item\" aria-current=\"page\">Home</li>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        yield from [];
    }

    // line 12
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_extra_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_stylesheets"));

        // line 13
        yield "    <!-- map-vector css -->
    <link rel=\"stylesheet\" href=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/plugins/jsvectormap.min.css"), "html", null, true);
        yield "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        yield from [];
    }

    // line 17
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 18
        yield "<div class=\"row\">
    <!-- Statistics Cards -->
    <div class=\"col-md-4 col-sm-6\">
        <div class=\"card statistics-card-1 overflow-hidden\">
            <div class=\"card-body\">
                <img src=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/widget/img-status-4.svg"), "html", null, true);
        yield "\" alt=\"img\" class=\"img-fluid img-bg\">
                <h5 class=\"mb-4\">Daily Sales</h5>
                <div class=\"d-flex align-items-center mt-3\">
                    <h3 class=\"f-w-300 d-flex align-items-center m-b-0\">\$249.95</h3>
                    <span class=\"badge bg-light-success ms-2\">36%</span>
                </div>
                <p class=\"text-muted mb-2 text-sm mt-3\">You made an extra 35,000 this daily</p>
                <div class=\"progress\" style=\"height: 7px\">
                    <div class=\"progress-bar bg-brand-color-3\" role=\"progressbar\" style=\"width: 75%\" aria-valuenow=\"75\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                </div>
            </div>
        </div>
    </div>
    
    <div class=\"col-md-4 col-sm-6\">
        <div class=\"card statistics-card-1 overflow-hidden\">
            <div class=\"card-body\">
                <img src=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/widget/img-status-5.svg"), "html", null, true);
        yield "\" alt=\"img\" class=\"img-fluid img-bg\">
                <h5 class=\"mb-4\">Monthly Sales</h5>
                <div class=\"d-flex align-items-center mt-3\">
                    <h3 class=\"f-w-300 d-flex align-items-center m-b-0\">\$249.95</h3>
                    <span class=\"badge bg-light-primary ms-2\">20%</span>
                </div>
                <p class=\"text-muted mb-2 text-sm mt-3\">You made an extra 35,000 this Monthly</p>
                <div class=\"progress\" style=\"height: 7px\">
                    <div class=\"progress-bar bg-brand-color-3\" role=\"progressbar\" style=\"width: 75%\" aria-valuenow=\"75\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                </div>
            </div>
        </div>
    </div>
    
    <div class=\"col-md-4 col-sm-12\">
        <div class=\"card statistics-card-1 overflow-hidden bg-brand-color-3\">
            <div class=\"card-body\">
                <img src=\"";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/widget/img-status-6.svg"), "html", null, true);
        yield "\" alt=\"img\" class=\"img-fluid img-bg\">
                <h5 class=\"mb-4 text-white\">Yearly Sales</h5>
                <div class=\"d-flex align-items-center mt-3\">
                    <h3 class=\"text-white f-w-300 d-flex align-items-center m-b-0\">\$249.95</h3>
                </div>
                <p class=\"text-white text-opacity-75 mb-2 text-sm mt-3\">You made an extra 35,000 this Daily</p>
                <div class=\"progress bg-white bg-opacity-10\" style=\"height: 7px\">
                    <div class=\"progress-bar bg-white\" role=\"progressbar\" style=\"width: 75%\" aria-valuenow=\"75\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- World Map -->
    <div class=\"col-md-6 col-xl-7\">
        <div class=\"card\">
            <div class=\"card-header\">
                <h5>Users From United States</h5>
            </div>
            <div class=\"card-body\">
                <div id=\"world-map-markers\" class=\"set-map\" style=\"height: 365px\"></div>
            </div>
        </div>
    </div>
    
    <!-- Earnings Chart -->
    <div class=\"col-md-6 col-xl-5\">
        <div class=\"card\">
            <div class=\"card-header d-flex align-items-center justify-content-between py-3\">
                <h5>Users From United States</h5>
                <div class=\"dropdown\">
                    <a class=\"avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none\" href=\"#\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        <i class=\"material-icons-two-tone f-18\">more_vert</i>
                    </a>
                    <div class=\"dropdown-menu dropdown-menu-end\">
                        <a class=\"dropdown-item\" href=\"#\">View</a>
                        <a class=\"dropdown-item\" href=\"#\">Edit</a>
                    </div>
                </div>
            </div>
            <div class=\"card-body\">
                <div class=\"d-flex align-items-center\">
                    <div class=\"avtar avtar-s bg-light-primary flex-shrink-0\">
                        <i class=\"ph-duotone ph-money f-20\"></i>
                    </div>
                    <div class=\"flex-grow-1 ms-3\">
                        <p class=\"mb-0 text-muted\">Total Earnings</p>
                        <h5 class=\"mb-0\">\$249.95</h5>
                    </div>
                </div>
                <div id=\"earnings-users-chart\"></div>
            </div>
        </div>
        
        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"row\">
                    <div class=\"col-6\">
                        <div class=\"d-flex\">
                            <div class=\"avtar avtar-s bg-light-warning flex-shrink-0\">
                                <i class=\"ph-duotone ph-lightning f-20\"></i>
                            </div>
                            <div class=\"flex-grow-1 ms-2\">
                                <p class=\"mb-0 text-muted\">Total ideas</p>
                                <h6 class=\"mb-0\">235</h6>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-6\">
                        <div class=\"d-flex\">
                            <div class=\"avtar avtar-s bg-light-danger flex-shrink-0\">
                                <i class=\"ph-duotone ph-map-pin f-20\"></i>
                            </div>
                            <div class=\"flex-grow-1 ms-2\">
                                <p class=\"mb-0 text-muted\">Total location</p>
                                <h6 class=\"mb-0\">26</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Social Media Cards -->
    <div class=\"col-md-6 col-xl-4\">
        <div class=\"card statistics-card-1 overflow-hidden\">
            <div class=\"card-body\">
                <img src=\"";
        // line 145
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/widget/img-status-7.svg"), "html", null, true);
        yield "\" alt=\"img\" class=\"img-fluid img-bg\">
                <div class=\"d-flex align-items-center\">
                    <img src=\"";
        // line 147
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/widget/img-facebook.svg"), "html", null, true);
        yield "\" alt=\"img\" class=\"img-fluid\">
                    <div class=\"flex-grow-1 ms-3\">
                        <p class=\"mb-0 text-muted\">Total Likes</p>
                        <div class=\"d-inline-flex align-items-center\">
                            <h5 class=\"f-w-300 d-flex align-items-center m-b-0\">12,281</h5>
                            <span class=\"badge bg-success ms-2\">+7.2%</span>
                        </div>
                    </div>
                </div>
                <div class=\"row g-3 mt-5 text-center\">
                    <div class=\"col-6\">
                        <p class=\"mb-0 text-muted\">Target</p>
                        <h5 class=\"mb-0\">35,098</h5>
                    </div>
                    <div class=\"col-6 border-start\">
                        <p class=\"mb-0 text-muted\">Duration</p>
                        <h5 class=\"mb-0\">3,539</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class=\"col-md-6 col-xl-4\">
        <div class=\"card statistics-card-1 overflow-hidden\">
            <div class=\"card-body\">
                <img src=\"";
        // line 173
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/widget/img-status-8.svg"), "html", null, true);
        yield "\" alt=\"img\" class=\"img-fluid img-bg\">
                <div class=\"d-flex align-items-center\">
                    <img src=\"";
        // line 175
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/widget/img-google.svg"), "html", null, true);
        yield "\" alt=\"img\" class=\"img-fluid\">
                    <div class=\"flex-grow-1 ms-3\">
                        <p class=\"mb-0 text-muted\">Total Likes</p>
                        <div class=\"d-inline-flex align-items-center\">
                            <h5 class=\"f-w-300 d-flex align-items-center m-b-0\">12,281</h5>
                            <span class=\"badge bg-success ms-2\">+5.9%</span>
                        </div>
                    </div>
                </div>
                <div class=\"row g-3 mt-5 text-center\">
                    <div class=\"col-6\">
                        <p class=\"mb-0 text-muted\">Target</p>
                        <h5 class=\"mb-0\">35,098</h5>
                    </div>
                    <div class=\"col-6 border-start\">
                        <p class=\"mb-0 text-muted\">Duration</p>
                        <h5 class=\"mb-0\">3,539</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class=\"col-md-12 col-xl-4\">
        <div class=\"card statistics-card-1 overflow-hidden\">
            <div class=\"card-body\">
                <img src=\"";
        // line 201
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/widget/img-status-9.svg"), "html", null, true);
        yield "\" alt=\"img\" class=\"img-fluid img-bg\">
                <div class=\"d-flex align-items-center\">
                    <img src=\"";
        // line 203
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/widget/img-twitter.svg"), "html", null, true);
        yield "\" alt=\"img\" class=\"img-fluid\">
                    <div class=\"flex-grow-1 ms-3\">
                        <p class=\"mb-0 text-muted\">Total Likes</p>
                        <div class=\"d-inline-flex align-items-center\">
                            <h5 class=\"f-w-300 d-flex align-items-center m-b-0\">12,281</h5>
                            <span class=\"badge bg-success ms-2\">+6.2%</span>
                        </div>
                    </div>
                </div>
                <div class=\"row g-3 mt-5 text-center\">
                    <div class=\"col-6\">
                        <p class=\"mb-0 text-muted\">Target</p>
                        <h5 class=\"mb-0\">35,098</h5>
                    </div>
                    <div class=\"col-6 border-start\">
                        <p class=\"mb-0 text-muted\">Duration</p>
                        <h5 class=\"mb-0\">3,539</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Recent Users Rating -->
    <div class=\"col-md-6 col-xl-4\">
        <div class=\"card\">
            <div class=\"card-header d-flex align-items-center justify-content-between py-3\">
                <h5>Recent Users</h5>
                <div class=\"dropdown\">
                    <a class=\"avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none\" href=\"#\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        <i class=\"material-icons-two-tone f-18\">more_vert</i>
                    </a>
                    <div class=\"dropdown-menu dropdown-menu-end\">
                        <a class=\"dropdown-item\" href=\"#\">View</a>
                        <a class=\"dropdown-item\" href=\"#\">Edit</a>
                    </div>
                </div>
            </div>
            <div class=\"card-body\">
                <div class=\"d-flex align-items-center justify-content-between mb-2\">
                    <h2 class=\"mb-3\"><b>4.7<small class=\"text-muted f-18\">/5</small></b></h2>
                    <div class=\"star mb-3 f-20\">
                        <i class=\"fas fa-star text-warning\"></i>
                        <i class=\"fas fa-star text-warning\"></i>
                        <i class=\"fas fa-star text-warning\"></i>
                        <i class=\"fas fa-star text-warning\"></i>
                        <i class=\"fas fa-star-half-alt text-warning\"></i>
                    </div>
                </div>
                <div class=\"row align-items-center g-3 mb-2\">
                    <div class=\"col-auto\"><h6 class=\"mb-0\">5 <i class=\"fas fa-star text-warning\"></i></h6></div>
                    <div class=\"col\">
                        <div class=\"progress\" style=\"height: 8px\">
                            <div class=\"progress-bar bg-primary\" style=\"width: 70%\"></div>
                        </div>
                    </div>
                    <div class=\"col-auto\"><p class=\"mb-0 text-muted\">384</p></div>
                </div>
                <div class=\"row align-items-center g-3 mb-2\">
                    <div class=\"col-auto\"><h6 class=\"mb-0\">4 <i class=\"fas fa-star text-warning\"></i></h6></div>
                    <div class=\"col\">
                        <div class=\"progress\" style=\"height: 8px\">
                            <div class=\"progress-bar bg-primary\" style=\"width: 55%\"></div>
                        </div>
                    </div>
                    <div class=\"col-auto\"><p class=\"mb-0 text-muted\">145</p></div>
                </div>
                <div class=\"row align-items-center g-3 mb-2\">
                    <div class=\"col-auto\"><h6 class=\"mb-0\">3 <i class=\"fas fa-star text-warning\"></i></h6></div>
                    <div class=\"col\">
                        <div class=\"progress\" style=\"height: 8px\">
                            <div class=\"progress-bar bg-primary\" style=\"width: 40%\"></div>
                        </div>
                    </div>
                    <div class=\"col-auto\"><p class=\"mb-0 text-muted\">24</p></div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Recent Users Table -->
    <div class=\"col-md-6 col-xl-8\">
        <div class=\"card table-card\">
            <div class=\"card-header d-flex align-items-center justify-content-between py-3\">
                <h5>Recent Users</h5>
            </div>
            <div class=\"card-body py-2 px-0\">
                <div class=\"table-responsive\">
                    <table class=\"table table-hover table-borderless table-sm mb-0\">
                        <tbody>
                            <tr>
                                <td>
                                    <div class=\"d-inline-block align-middle\">
                                        <img src=\"";
        // line 296
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/user/avatar-1.jpg"), "html", null, true);
        yield "\" alt=\"user image\" class=\"img-radius align-top m-r-15\" style=\"width: 40px\">
                                        <div class=\"d-inline-block\">
                                            <h6 class=\"m-b-0\">Quinn Flynn</h6>
                                            <p class=\"m-b-0\">Android developer</p>
                                        </div>
                                    </div>
                                </td>
                                <td><p class=\"mb-0\"><i class=\"ph-duotone ph-circle text-warning f-12\"></i> 11 may 12:30</p></td>
                                <td class=\"text-end\">
                                    <button class=\"btn avtar avtar-xs btn-light-danger\"><i class=\"ti ti-x\"></i></button>
                                    <button class=\"btn avtar avtar-xs btn-light-success\"><i class=\"ti ti-check\"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class=\"d-inline-block align-middle\">
                                        <img src=\"";
        // line 312
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/user/avatar-2.jpg"), "html", null, true);
        yield "\" alt=\"user image\" class=\"img-radius align-top m-r-15\" style=\"width: 40px\">
                                        <div class=\"d-inline-block\">
                                            <h6 class=\"m-b-0\">Garrett Winters</h6>
                                            <p class=\"m-b-0\">Android developer</p>
                                        </div>
                                    </div>
                                </td>
                                <td><p class=\"mb-0\"><i class=\"ph-duotone ph-circle text-success f-12\"></i> 11 may 12:30</p></td>
                                <td class=\"text-end\">
                                    <button class=\"btn avtar avtar-xs btn-light-danger\"><i class=\"ti ti-x\"></i></button>
                                    <button class=\"btn avtar avtar-xs btn-light-success\"><i class=\"ti ti-check\"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class=\"d-inline-block align-middle\">
                                        <img src=\"";
        // line 328
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/user/avatar-3.jpg"), "html", null, true);
        yield "\" alt=\"user image\" class=\"img-radius align-top m-r-15\" style=\"width: 40px\">
                                        <div class=\"d-inline-block\">
                                            <h6 class=\"m-b-0\">Ashton Cox</h6>
                                            <p class=\"m-b-0\">Android developer</p>
                                        </div>
                                    </div>
                                </td>
                                <td><p class=\"mb-0\"><i class=\"ph-duotone ph-circle text-primary f-12\"></i> 11 may 12:30</p></td>
                                <td class=\"text-end\">
                                    <button class=\"btn avtar avtar-xs btn-light-danger\"><i class=\"ti ti-x\"></i></button>
                                    <button class=\"btn avtar avtar-xs btn-light-success\"><i class=\"ti ti-check\"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        yield from [];
    }

    // line 350
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_extra_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_javascripts"));

        // line 351
        yield "    <!-- [Page Specific JS] start -->
    <script src=\"";
        // line 352
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/plugins/apexcharts.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 353
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/plugins/jsvectormap.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 354
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/plugins/world.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 355
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/plugins/world-merc.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 356
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/widgets/earnings-users-chart.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 357
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/widgets/world-map-markers.js"), "html", null, true);
        yield "\"></script>
    <!-- [Page Specific JS] end -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "dashboard/index.html.twig";
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
        return array (  595 => 357,  591 => 356,  587 => 355,  583 => 354,  579 => 353,  575 => 352,  572 => 351,  559 => 350,  527 => 328,  508 => 312,  489 => 296,  393 => 203,  388 => 201,  359 => 175,  354 => 173,  325 => 147,  320 => 145,  229 => 57,  209 => 40,  189 => 23,  182 => 18,  169 => 17,  156 => 14,  153 => 13,  140 => 12,  127 => 8,  114 => 7,  91 => 5,  68 => 3,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Dashboard - Light Able{% endblock %}

{% block page_title %}Home{% endblock %}

{% block breadcrumb_items %}
    <li class=\"breadcrumb-item\"><a href=\"javascript: void(0)\">Dashboard</a></li>
    <li class=\"breadcrumb-item\" aria-current=\"page\">Home</li>
{% endblock %}

{% block extra_stylesheets %}
    <!-- map-vector css -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/plugins/jsvectormap.min.css') }}\">
{% endblock %}

{% block body %}
<div class=\"row\">
    <!-- Statistics Cards -->
    <div class=\"col-md-4 col-sm-6\">
        <div class=\"card statistics-card-1 overflow-hidden\">
            <div class=\"card-body\">
                <img src=\"{{ asset('assets/images/widget/img-status-4.svg') }}\" alt=\"img\" class=\"img-fluid img-bg\">
                <h5 class=\"mb-4\">Daily Sales</h5>
                <div class=\"d-flex align-items-center mt-3\">
                    <h3 class=\"f-w-300 d-flex align-items-center m-b-0\">\$249.95</h3>
                    <span class=\"badge bg-light-success ms-2\">36%</span>
                </div>
                <p class=\"text-muted mb-2 text-sm mt-3\">You made an extra 35,000 this daily</p>
                <div class=\"progress\" style=\"height: 7px\">
                    <div class=\"progress-bar bg-brand-color-3\" role=\"progressbar\" style=\"width: 75%\" aria-valuenow=\"75\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                </div>
            </div>
        </div>
    </div>
    
    <div class=\"col-md-4 col-sm-6\">
        <div class=\"card statistics-card-1 overflow-hidden\">
            <div class=\"card-body\">
                <img src=\"{{ asset('assets/images/widget/img-status-5.svg') }}\" alt=\"img\" class=\"img-fluid img-bg\">
                <h5 class=\"mb-4\">Monthly Sales</h5>
                <div class=\"d-flex align-items-center mt-3\">
                    <h3 class=\"f-w-300 d-flex align-items-center m-b-0\">\$249.95</h3>
                    <span class=\"badge bg-light-primary ms-2\">20%</span>
                </div>
                <p class=\"text-muted mb-2 text-sm mt-3\">You made an extra 35,000 this Monthly</p>
                <div class=\"progress\" style=\"height: 7px\">
                    <div class=\"progress-bar bg-brand-color-3\" role=\"progressbar\" style=\"width: 75%\" aria-valuenow=\"75\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                </div>
            </div>
        </div>
    </div>
    
    <div class=\"col-md-4 col-sm-12\">
        <div class=\"card statistics-card-1 overflow-hidden bg-brand-color-3\">
            <div class=\"card-body\">
                <img src=\"{{ asset('assets/images/widget/img-status-6.svg') }}\" alt=\"img\" class=\"img-fluid img-bg\">
                <h5 class=\"mb-4 text-white\">Yearly Sales</h5>
                <div class=\"d-flex align-items-center mt-3\">
                    <h3 class=\"text-white f-w-300 d-flex align-items-center m-b-0\">\$249.95</h3>
                </div>
                <p class=\"text-white text-opacity-75 mb-2 text-sm mt-3\">You made an extra 35,000 this Daily</p>
                <div class=\"progress bg-white bg-opacity-10\" style=\"height: 7px\">
                    <div class=\"progress-bar bg-white\" role=\"progressbar\" style=\"width: 75%\" aria-valuenow=\"75\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- World Map -->
    <div class=\"col-md-6 col-xl-7\">
        <div class=\"card\">
            <div class=\"card-header\">
                <h5>Users From United States</h5>
            </div>
            <div class=\"card-body\">
                <div id=\"world-map-markers\" class=\"set-map\" style=\"height: 365px\"></div>
            </div>
        </div>
    </div>
    
    <!-- Earnings Chart -->
    <div class=\"col-md-6 col-xl-5\">
        <div class=\"card\">
            <div class=\"card-header d-flex align-items-center justify-content-between py-3\">
                <h5>Users From United States</h5>
                <div class=\"dropdown\">
                    <a class=\"avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none\" href=\"#\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        <i class=\"material-icons-two-tone f-18\">more_vert</i>
                    </a>
                    <div class=\"dropdown-menu dropdown-menu-end\">
                        <a class=\"dropdown-item\" href=\"#\">View</a>
                        <a class=\"dropdown-item\" href=\"#\">Edit</a>
                    </div>
                </div>
            </div>
            <div class=\"card-body\">
                <div class=\"d-flex align-items-center\">
                    <div class=\"avtar avtar-s bg-light-primary flex-shrink-0\">
                        <i class=\"ph-duotone ph-money f-20\"></i>
                    </div>
                    <div class=\"flex-grow-1 ms-3\">
                        <p class=\"mb-0 text-muted\">Total Earnings</p>
                        <h5 class=\"mb-0\">\$249.95</h5>
                    </div>
                </div>
                <div id=\"earnings-users-chart\"></div>
            </div>
        </div>
        
        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"row\">
                    <div class=\"col-6\">
                        <div class=\"d-flex\">
                            <div class=\"avtar avtar-s bg-light-warning flex-shrink-0\">
                                <i class=\"ph-duotone ph-lightning f-20\"></i>
                            </div>
                            <div class=\"flex-grow-1 ms-2\">
                                <p class=\"mb-0 text-muted\">Total ideas</p>
                                <h6 class=\"mb-0\">235</h6>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-6\">
                        <div class=\"d-flex\">
                            <div class=\"avtar avtar-s bg-light-danger flex-shrink-0\">
                                <i class=\"ph-duotone ph-map-pin f-20\"></i>
                            </div>
                            <div class=\"flex-grow-1 ms-2\">
                                <p class=\"mb-0 text-muted\">Total location</p>
                                <h6 class=\"mb-0\">26</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Social Media Cards -->
    <div class=\"col-md-6 col-xl-4\">
        <div class=\"card statistics-card-1 overflow-hidden\">
            <div class=\"card-body\">
                <img src=\"{{ asset('assets/images/widget/img-status-7.svg') }}\" alt=\"img\" class=\"img-fluid img-bg\">
                <div class=\"d-flex align-items-center\">
                    <img src=\"{{ asset('assets/images/widget/img-facebook.svg') }}\" alt=\"img\" class=\"img-fluid\">
                    <div class=\"flex-grow-1 ms-3\">
                        <p class=\"mb-0 text-muted\">Total Likes</p>
                        <div class=\"d-inline-flex align-items-center\">
                            <h5 class=\"f-w-300 d-flex align-items-center m-b-0\">12,281</h5>
                            <span class=\"badge bg-success ms-2\">+7.2%</span>
                        </div>
                    </div>
                </div>
                <div class=\"row g-3 mt-5 text-center\">
                    <div class=\"col-6\">
                        <p class=\"mb-0 text-muted\">Target</p>
                        <h5 class=\"mb-0\">35,098</h5>
                    </div>
                    <div class=\"col-6 border-start\">
                        <p class=\"mb-0 text-muted\">Duration</p>
                        <h5 class=\"mb-0\">3,539</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class=\"col-md-6 col-xl-4\">
        <div class=\"card statistics-card-1 overflow-hidden\">
            <div class=\"card-body\">
                <img src=\"{{ asset('assets/images/widget/img-status-8.svg') }}\" alt=\"img\" class=\"img-fluid img-bg\">
                <div class=\"d-flex align-items-center\">
                    <img src=\"{{ asset('assets/images/widget/img-google.svg') }}\" alt=\"img\" class=\"img-fluid\">
                    <div class=\"flex-grow-1 ms-3\">
                        <p class=\"mb-0 text-muted\">Total Likes</p>
                        <div class=\"d-inline-flex align-items-center\">
                            <h5 class=\"f-w-300 d-flex align-items-center m-b-0\">12,281</h5>
                            <span class=\"badge bg-success ms-2\">+5.9%</span>
                        </div>
                    </div>
                </div>
                <div class=\"row g-3 mt-5 text-center\">
                    <div class=\"col-6\">
                        <p class=\"mb-0 text-muted\">Target</p>
                        <h5 class=\"mb-0\">35,098</h5>
                    </div>
                    <div class=\"col-6 border-start\">
                        <p class=\"mb-0 text-muted\">Duration</p>
                        <h5 class=\"mb-0\">3,539</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class=\"col-md-12 col-xl-4\">
        <div class=\"card statistics-card-1 overflow-hidden\">
            <div class=\"card-body\">
                <img src=\"{{ asset('assets/images/widget/img-status-9.svg') }}\" alt=\"img\" class=\"img-fluid img-bg\">
                <div class=\"d-flex align-items-center\">
                    <img src=\"{{ asset('assets/images/widget/img-twitter.svg') }}\" alt=\"img\" class=\"img-fluid\">
                    <div class=\"flex-grow-1 ms-3\">
                        <p class=\"mb-0 text-muted\">Total Likes</p>
                        <div class=\"d-inline-flex align-items-center\">
                            <h5 class=\"f-w-300 d-flex align-items-center m-b-0\">12,281</h5>
                            <span class=\"badge bg-success ms-2\">+6.2%</span>
                        </div>
                    </div>
                </div>
                <div class=\"row g-3 mt-5 text-center\">
                    <div class=\"col-6\">
                        <p class=\"mb-0 text-muted\">Target</p>
                        <h5 class=\"mb-0\">35,098</h5>
                    </div>
                    <div class=\"col-6 border-start\">
                        <p class=\"mb-0 text-muted\">Duration</p>
                        <h5 class=\"mb-0\">3,539</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Recent Users Rating -->
    <div class=\"col-md-6 col-xl-4\">
        <div class=\"card\">
            <div class=\"card-header d-flex align-items-center justify-content-between py-3\">
                <h5>Recent Users</h5>
                <div class=\"dropdown\">
                    <a class=\"avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none\" href=\"#\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        <i class=\"material-icons-two-tone f-18\">more_vert</i>
                    </a>
                    <div class=\"dropdown-menu dropdown-menu-end\">
                        <a class=\"dropdown-item\" href=\"#\">View</a>
                        <a class=\"dropdown-item\" href=\"#\">Edit</a>
                    </div>
                </div>
            </div>
            <div class=\"card-body\">
                <div class=\"d-flex align-items-center justify-content-between mb-2\">
                    <h2 class=\"mb-3\"><b>4.7<small class=\"text-muted f-18\">/5</small></b></h2>
                    <div class=\"star mb-3 f-20\">
                        <i class=\"fas fa-star text-warning\"></i>
                        <i class=\"fas fa-star text-warning\"></i>
                        <i class=\"fas fa-star text-warning\"></i>
                        <i class=\"fas fa-star text-warning\"></i>
                        <i class=\"fas fa-star-half-alt text-warning\"></i>
                    </div>
                </div>
                <div class=\"row align-items-center g-3 mb-2\">
                    <div class=\"col-auto\"><h6 class=\"mb-0\">5 <i class=\"fas fa-star text-warning\"></i></h6></div>
                    <div class=\"col\">
                        <div class=\"progress\" style=\"height: 8px\">
                            <div class=\"progress-bar bg-primary\" style=\"width: 70%\"></div>
                        </div>
                    </div>
                    <div class=\"col-auto\"><p class=\"mb-0 text-muted\">384</p></div>
                </div>
                <div class=\"row align-items-center g-3 mb-2\">
                    <div class=\"col-auto\"><h6 class=\"mb-0\">4 <i class=\"fas fa-star text-warning\"></i></h6></div>
                    <div class=\"col\">
                        <div class=\"progress\" style=\"height: 8px\">
                            <div class=\"progress-bar bg-primary\" style=\"width: 55%\"></div>
                        </div>
                    </div>
                    <div class=\"col-auto\"><p class=\"mb-0 text-muted\">145</p></div>
                </div>
                <div class=\"row align-items-center g-3 mb-2\">
                    <div class=\"col-auto\"><h6 class=\"mb-0\">3 <i class=\"fas fa-star text-warning\"></i></h6></div>
                    <div class=\"col\">
                        <div class=\"progress\" style=\"height: 8px\">
                            <div class=\"progress-bar bg-primary\" style=\"width: 40%\"></div>
                        </div>
                    </div>
                    <div class=\"col-auto\"><p class=\"mb-0 text-muted\">24</p></div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Recent Users Table -->
    <div class=\"col-md-6 col-xl-8\">
        <div class=\"card table-card\">
            <div class=\"card-header d-flex align-items-center justify-content-between py-3\">
                <h5>Recent Users</h5>
            </div>
            <div class=\"card-body py-2 px-0\">
                <div class=\"table-responsive\">
                    <table class=\"table table-hover table-borderless table-sm mb-0\">
                        <tbody>
                            <tr>
                                <td>
                                    <div class=\"d-inline-block align-middle\">
                                        <img src=\"{{ asset('assets/images/user/avatar-1.jpg') }}\" alt=\"user image\" class=\"img-radius align-top m-r-15\" style=\"width: 40px\">
                                        <div class=\"d-inline-block\">
                                            <h6 class=\"m-b-0\">Quinn Flynn</h6>
                                            <p class=\"m-b-0\">Android developer</p>
                                        </div>
                                    </div>
                                </td>
                                <td><p class=\"mb-0\"><i class=\"ph-duotone ph-circle text-warning f-12\"></i> 11 may 12:30</p></td>
                                <td class=\"text-end\">
                                    <button class=\"btn avtar avtar-xs btn-light-danger\"><i class=\"ti ti-x\"></i></button>
                                    <button class=\"btn avtar avtar-xs btn-light-success\"><i class=\"ti ti-check\"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class=\"d-inline-block align-middle\">
                                        <img src=\"{{ asset('assets/images/user/avatar-2.jpg') }}\" alt=\"user image\" class=\"img-radius align-top m-r-15\" style=\"width: 40px\">
                                        <div class=\"d-inline-block\">
                                            <h6 class=\"m-b-0\">Garrett Winters</h6>
                                            <p class=\"m-b-0\">Android developer</p>
                                        </div>
                                    </div>
                                </td>
                                <td><p class=\"mb-0\"><i class=\"ph-duotone ph-circle text-success f-12\"></i> 11 may 12:30</p></td>
                                <td class=\"text-end\">
                                    <button class=\"btn avtar avtar-xs btn-light-danger\"><i class=\"ti ti-x\"></i></button>
                                    <button class=\"btn avtar avtar-xs btn-light-success\"><i class=\"ti ti-check\"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class=\"d-inline-block align-middle\">
                                        <img src=\"{{ asset('assets/images/user/avatar-3.jpg') }}\" alt=\"user image\" class=\"img-radius align-top m-r-15\" style=\"width: 40px\">
                                        <div class=\"d-inline-block\">
                                            <h6 class=\"m-b-0\">Ashton Cox</h6>
                                            <p class=\"m-b-0\">Android developer</p>
                                        </div>
                                    </div>
                                </td>
                                <td><p class=\"mb-0\"><i class=\"ph-duotone ph-circle text-primary f-12\"></i> 11 may 12:30</p></td>
                                <td class=\"text-end\">
                                    <button class=\"btn avtar avtar-xs btn-light-danger\"><i class=\"ti ti-x\"></i></button>
                                    <button class=\"btn avtar avtar-xs btn-light-success\"><i class=\"ti ti-check\"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block extra_javascripts %}
    <!-- [Page Specific JS] start -->
    <script src=\"{{ asset('assets/js/plugins/apexcharts.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/plugins/jsvectormap.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/plugins/world.js') }}\"></script>
    <script src=\"{{ asset('assets/js/plugins/world-merc.js') }}\"></script>
    <script src=\"{{ asset('assets/js/widgets/earnings-users-chart.js') }}\"></script>
    <script src=\"{{ asset('assets/js/widgets/world-map-markers.js') }}\"></script>
    <!-- [Page Specific JS] end -->
{% endblock %}
", "dashboard/index.html.twig", "C:\\xampp\\htdocs\\elbaridadminportal\\templates\\dashboard\\index.html.twig");
    }
}
