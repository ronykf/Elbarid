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

/* base.html.twig */
class __TwigTemplate_6d794379a190eff472f1d8e553ed3a65530e0b6c4438b4aba33624d0c517f78a extends Template
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
            'title' => [$this, 'block_title'],
            'meta_description' => [$this, 'block_meta_description'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'sidebar_menu' => [$this, 'block_sidebar_menu'],
            'breadcrumbs' => [$this, 'block_breadcrumbs'],
            'breadcrumb_items' => [$this, 'block_breadcrumb_items'],
            'page_title' => [$this, 'block_page_title'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!doctype html>
<html lang=\"en\">
<head>
    <title>";
        // line 4
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
    <!-- [Meta] -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1,user-scalable=0,minimal-ui\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"description\" content=\"";
        // line 9
        yield from $this->unwrap()->yieldBlock('meta_description', $context, $blocks);
        yield "\">
    <meta name=\"author\" content=\"phoenixcoded\">
    
    <!-- [Favicon] icon -->
    <link rel=\"icon\" href=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/favicon.svg"), "html", null, true);
        yield "\" type=\"image/x-icon\">
    
    ";
        // line 15
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 38
        yield "    
    ";
        // line 39
        yield from $this->unwrap()->yieldBlock('extra_stylesheets', $context, $blocks);
        // line 40
        yield "</head>

<body data-pc-preset=\"preset-1\" data-pc-sidebar-theme=\"light\" data-pc-sidebar-caption=\"true\" data-pc-direction=\"ltr\" data-pc-theme=\"light\">
    
    <!-- [ Pre-loader ] start -->
    <div class=\"loader-bg\">
        <div class=\"loader-track\">
            <div class=\"loader-fill\"></div>
        </div>
    </div>
    <!-- [ Pre-loader ] End -->
    
    <!-- [ Sidebar Menu ] start -->
    <nav class=\"pc-sidebar\">
        <div class=\"navbar-wrapper\">
            <div class=\"m-header\">
                <a href=\"";
        // line 56
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\" class=\"b-brand text-primary\">
                    <img src=\"";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo-dark.svg"), "html", null, true);
        yield "\" alt=\"logo image\" class=\"logo-lg\">
                    <span class=\"badge bg-brand-color-2 rounded-pill ms-1 theme-version\">v1.3.0</span>
                </a>
            </div>
            <div class=\"navbar-content\">
                <ul class=\"pc-navbar\">
                    ";
        // line 63
        yield from $this->unwrap()->yieldBlock('sidebar_menu', $context, $blocks);
        // line 79
        yield "                </ul>
                
                <div class=\"card nav-action-card bg-brand-color-4\">
                    <div class=\"card-body\" style=\"background-image: url('";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/layout/nav-card-bg.svg"), "html", null, true);
        yield "')\">
                        <h5 class=\"text-dark\">Help Center</h5>
                        <p class=\"text-dark text-opacity-75\">Please contact us for more questions.</p>
                        <a href=\"#\" class=\"btn btn-primary\" target=\"_blank\">Go to help Center</a>
                    </div>
                </div>
            </div>
            
            <div class=\"card pc-user-card\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center\">
                        <div class=\"flex-shrink-0\">
                            <img src=\"";
        // line 94
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/user/avatar-1.jpg"), "html", null, true);
        yield "\" alt=\"user-image\" class=\"user-avtar wid-45 rounded-circle\">
                        </div>
                        <div class=\"flex-grow-1 ms-3\">
                            <div class=\"dropdown\">
                                <a href=\"#\" class=\"arrow-none dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\" data-bs-offset=\"0,20\">
                                    <div class=\"d-flex align-items-center\">
                                        <div class=\"flex-grow-1 me-2\">
                                            <h6 class=\"mb-0\">Admin User</h6>
                                            <small>Administrator</small>
                                        </div>
                                        <div class=\"flex-shrink-0\">
                                            <div class=\"btn btn-icon btn-link-secondary avtar\">
                                                <i class=\"ph-duotone ph-windows-logo\"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <div class=\"dropdown-menu\">
                                    <ul>
                                        <li><a class=\"pc-user-links\" href=\"#\"><i class=\"ph-duotone ph-user\"></i> <span>My Account</span></a></li>
                                        <li><a class=\"pc-user-links\" href=\"#\"><i class=\"ph-duotone ph-gear\"></i> <span>Settings</span></a></li>
                                        <li><a class=\"pc-user-links\" href=\"#\"><i class=\"ph-duotone ph-lock-key\"></i> <span>Lock Screen</span></a></li>
                                        <li><a class=\"pc-user-links\" href=\"#\"><i class=\"ph-duotone ph-power\"></i> <span>Logout</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- [ Sidebar Menu ] end -->
    
    <!-- [ Header Topbar ] start -->
    <header class=\"pc-header\">
        <div class=\"header-wrapper\">
            <!-- [Mobile Media Block] start -->
            <div class=\"me-auto pc-mob-drp\">
                <ul class=\"list-unstyled\">
                    <li class=\"pc-h-item pc-sidebar-collapse\">
                        <a href=\"#\" class=\"pc-head-link ms-0\" id=\"sidebar-hide\"><i class=\"ti ti-menu-2\"></i></a>
                    </li>
                    <li class=\"pc-h-item pc-sidebar-popup\">
                        <a href=\"#\" class=\"pc-head-link ms-0\" id=\"mobile-collapse\"><i class=\"ti ti-menu-2\"></i></a>
                    </li>
                    <li class=\"pc-h-item d-none d-md-inline-flex\">
                        <form class=\"form-search\">
                            <i class=\"ph-duotone ph-magnifying-glass icon-search\"></i>
                            <input type=\"search\" class=\"form-control\" placeholder=\"Search...\">
                            <button class=\"btn btn-search\" style=\"padding: 0\"><kbd>ctrl+k</kbd></button>
                        </form>
                    </li>
                </ul>
            </div>
            <!-- [Mobile Media Block end] -->
            
            <div class=\"ms-auto\">
                <ul class=\"list-unstyled\">
                    <li class=\"dropdown pc-h-item d-none d-md-inline-flex\">
                        <a class=\"pc-head-link dropdown-toggle arrow-none me-0\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"false\" aria-expanded=\"false\">
                            <i class=\"ph-duotone ph-sun-dim\"></i>
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-end pc-h-dropdown\">
                            <a href=\"#!\" class=\"dropdown-item\" onclick=\"layout_change('dark')\">
                                <i class=\"ph-duotone ph-moon\"></i> <span>Dark</span>
                            </a>
                            <a href=\"#!\" class=\"dropdown-item\" onclick=\"layout_change('light')\">
                                <i class=\"ph-duotone ph-sun-dim\"></i> <span>Light</span>
                            </a>
                            <a href=\"#!\" class=\"dropdown-item\" onclick=\"layout_change_default()\">
                                <i class=\"ph-duotone ph-cpu\"></i> <span>Default</span>
                            </a>
                        </div>
                    </li>
                    <li class=\"dropdown pc-h-item\">
                        <a class=\"pc-head-link dropdown-toggle arrow-none me-0\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"false\" aria-expanded=\"false\">
                            <i class=\"ph-duotone ph-bell\"></i>
                            <span class=\"badge bg-success pc-h-badge\">3</span>
                        </a>
                        <div class=\"dropdown-menu dropdown-notification dropdown-menu-end pc-h-dropdown\">
                            <div class=\"dropdown-header d-flex align-items-center justify-content-between\">
                                <h5 class=\"m-0\">Notifications</h5>
                            </div>
                            <div class=\"dropdown-body text-wrap header-notification-scroll position-relative\" style=\"max-height: calc(100vh - 235px)\">
                                <p class=\"text-center py-4 mb-0\">No new notifications</p>
                            </div>
                        </div>
                    </li>
                    <li class=\"dropdown pc-h-item header-user-profile\">
                        <a class=\"pc-head-link dropdown-toggle arrow-none me-0\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"false\" data-bs-auto-close=\"outside\" aria-expanded=\"false\">
                            <img src=\"";
        // line 185
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/user/avatar-2.jpg"), "html", null, true);
        yield "\" alt=\"user-image\" class=\"user-avtar\">
                        </a>
                        <div class=\"dropdown-menu dropdown-user-profile dropdown-menu-end pc-h-dropdown\">
                            <div class=\"dropdown-header d-flex align-items-center justify-content-between\">
                                <h5 class=\"m-0\">Profile</h5>
                            </div>
                            <div class=\"dropdown-body\">
                                <div class=\"profile-notification-scroll position-relative\" style=\"max-height: calc(100vh - 225px)\">
                                    <ul class=\"list-group list-group-flush w-100\">
                                        <li class=\"list-group-item\">
                                            <a href=\"#\" class=\"dropdown-item\">
                                                <span class=\"d-flex align-items-center\">
                                                    <i class=\"ph-duotone ph-user-circle\"></i>
                                                    <span>Edit profile</span>
                                                </span>
                                            </a>
                                            <a href=\"#\" class=\"dropdown-item\">
                                                <span class=\"d-flex align-items-center\">
                                                    <i class=\"ph-duotone ph-gear-six\"></i>
                                                    <span>Settings</span>
                                                </span>
                                            </a>
                                        </li>
                                        <li class=\"list-group-item\">
                                            <a href=\"#\" class=\"dropdown-item\">
                                                <span class=\"d-flex align-items-center\">
                                                    <i class=\"ph-duotone ph-power\"></i>
                                                    <span>Logout</span>
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <!-- [ Header ] end -->
    
    <!-- [ Main Content ] start -->
    <div class=\"pc-container\">
        <div class=\"pc-content\">
            ";
        // line 230
        yield from $this->unwrap()->yieldBlock('breadcrumbs', $context, $blocks);
        // line 251
        yield "            
            <!-- [ Main Content ] start -->
            ";
        // line 253
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 254
        yield "            <!-- [ Main Content ] end -->
        </div>
    </div>
    <!-- [ Main Content ] end -->
    
    <!-- Footer -->
    <footer class=\"pc-footer\">
        <div class=\"footer-wrapper container-fluid\">
            <div class=\"row\">
                <div class=\"col-sm-6 my-1\">
                    <p class=\"m-0\">Made with &#9829; by Team <b>Phoenixcoded</b></p>
                </div>
                <div class=\"col-sm-6 ms-auto my-1\">
                    <ul class=\"list-inline footer-link mb-0 justify-content-sm-end d-flex\">
                        <li class=\"list-inline-item\"><a href=\"";
        // line 268
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\">Home</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    
    ";
        // line 275
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 293
        yield "    
    ";
        // line 294
        yield from $this->unwrap()->yieldBlock('extra_javascripts', $context, $blocks);
        // line 295
        yield "</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        yield from [];
    }

    // line 4
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

        yield "Light Able - Symfony Admin";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        yield from [];
    }

    // line 9
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_meta_description(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meta_description"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meta_description"));

        yield "Light Able admin and dashboard template";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        yield from [];
    }

    // line 15
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 16
        yield "    <!-- [Google Font : Public Sans] -->
    <link href=\"https://fonts.googleapis.com/css2?family=Public+Sans:wght@400;500;600;700&display=swap\" rel=\"stylesheet\">
    
    <!-- [phosphor Icons] -->
    <link rel=\"stylesheet\" href=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/fonts/phosphor/duotone/style.css"), "html", null, true);
        yield "\">
    
    <!-- [Tabler Icons] -->
    <link rel=\"stylesheet\" href=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/fonts/tabler-icons.min.css"), "html", null, true);
        yield "\">
    
    <!-- [Feather Icons] -->
    <link rel=\"stylesheet\" href=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/fonts/feather.css"), "html", null, true);
        yield "\">
    
    <!-- [Font Awesome Icons] -->
    <link rel=\"stylesheet\" href=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/fonts/fontawesome.css"), "html", null, true);
        yield "\">
    
    <!-- [Material Icons] -->
    <link rel=\"stylesheet\" href=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/fonts/material.css"), "html", null, true);
        yield "\">
    
    <!-- [Template CSS Files] -->
    <link rel=\"stylesheet\" href=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        yield "\" id=\"main-style-link\">
    <link rel=\"stylesheet\" href=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style-preset.css"), "html", null, true);
        yield "\">
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        yield from [];
    }

    // line 39
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

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        yield from [];
    }

    // line 63
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sidebar_menu(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar_menu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar_menu"));

        // line 64
        yield "                    <li class=\"pc-item pc-caption\">
                        <label>Navigation</label>
                        <i class=\"ph-duotone ph-gauge\"></i>
                    </li>
                    <li class=\"pc-item pc-hasmenu\">
                        <a href=\"#!\" class=\"pc-link\">
                            <span class=\"pc-micon\"><i class=\"ph-duotone ph-gauge\"></i></span>
                            <span class=\"pc-mtext\">Dashboard</span>
                            <span class=\"pc-arrow\"><i data-feather=\"chevron-right\"></i></span>
                        </a>
                        <ul class=\"pc-submenu\">
                            <li class=\"pc-item\"><a class=\"pc-link\" href=\"";
        // line 75
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\">Analytics</a></li>
                        </ul>
                    </li>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        yield from [];
    }

    // line 230
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_breadcrumbs(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumbs"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumbs"));

        // line 231
        yield "            <!-- [ breadcrumb ] start -->
            <div class=\"page-header\">
                <div class=\"page-block\">
                    <div class=\"row align-items-center\">
                        <div class=\"col-md-12\">
                            <ul class=\"breadcrumb\">
                                <li class=\"breadcrumb-item\"><a href=\"";
        // line 237
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\">Home</a></li>
                                ";
        // line 238
        yield from $this->unwrap()->yieldBlock('breadcrumb_items', $context, $blocks);
        // line 239
        yield "                            </ul>
                        </div>
                        <div class=\"col-md-12\">
                            <div class=\"page-header-title\">
                                <h2 class=\"mb-0\">";
        // line 243
        yield from $this->unwrap()->yieldBlock('page_title', $context, $blocks);
        yield "</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        yield from [];
    }

    // line 238
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

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        yield from [];
    }

    // line 243
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

        yield "Dashboard";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        yield from [];
    }

    // line 253
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

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        yield from [];
    }

    // line 275
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 276
        yield "    <!-- Required Js -->
    <script src=\"";
        // line 277
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/plugins/popper.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 278
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/plugins/simplebar.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 279
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/plugins/bootstrap.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 280
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/plugins/feather.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 281
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/script.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 282
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/theme.js"), "html", null, true);
        yield "\"></script>
    
    <script>
        layout_change('light');
        layout_sidebar_change('light');
        change_box_container('false');
        layout_caption_change('true');
        layout_rtl_change('false');
        preset_change('preset-1');
    </script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        yield from [];
    }

    // line 294
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

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base.html.twig";
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
        return array (  692 => 294,  670 => 282,  666 => 281,  662 => 280,  658 => 279,  654 => 278,  650 => 277,  647 => 276,  634 => 275,  612 => 253,  589 => 243,  567 => 238,  548 => 243,  542 => 239,  540 => 238,  536 => 237,  528 => 231,  515 => 230,  500 => 75,  487 => 64,  474 => 63,  452 => 39,  439 => 36,  435 => 35,  429 => 32,  423 => 29,  417 => 26,  411 => 23,  405 => 20,  399 => 16,  386 => 15,  363 => 9,  340 => 4,  327 => 295,  325 => 294,  322 => 293,  320 => 275,  310 => 268,  294 => 254,  292 => 253,  288 => 251,  286 => 230,  238 => 185,  144 => 94,  129 => 82,  124 => 79,  122 => 63,  113 => 57,  109 => 56,  91 => 40,  89 => 39,  86 => 38,  84 => 15,  79 => 13,  72 => 9,  64 => 4,  59 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!doctype html>
<html lang=\"en\">
<head>
    <title>{% block title %}Light Able - Symfony Admin{% endblock %}</title>
    <!-- [Meta] -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1,user-scalable=0,minimal-ui\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"description\" content=\"{% block meta_description %}Light Able admin and dashboard template{% endblock %}\">
    <meta name=\"author\" content=\"phoenixcoded\">
    
    <!-- [Favicon] icon -->
    <link rel=\"icon\" href=\"{{ asset('assets/images/favicon.svg') }}\" type=\"image/x-icon\">
    
    {% block stylesheets %}
    <!-- [Google Font : Public Sans] -->
    <link href=\"https://fonts.googleapis.com/css2?family=Public+Sans:wght@400;500;600;700&display=swap\" rel=\"stylesheet\">
    
    <!-- [phosphor Icons] -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/fonts/phosphor/duotone/style.css') }}\">
    
    <!-- [Tabler Icons] -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/fonts/tabler-icons.min.css') }}\">
    
    <!-- [Feather Icons] -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/fonts/feather.css') }}\">
    
    <!-- [Font Awesome Icons] -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/fonts/fontawesome.css') }}\">
    
    <!-- [Material Icons] -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/fonts/material.css') }}\">
    
    <!-- [Template CSS Files] -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/style.css') }}\" id=\"main-style-link\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/style-preset.css') }}\">
    {% endblock %}
    
    {% block extra_stylesheets %}{% endblock %}
</head>

<body data-pc-preset=\"preset-1\" data-pc-sidebar-theme=\"light\" data-pc-sidebar-caption=\"true\" data-pc-direction=\"ltr\" data-pc-theme=\"light\">
    
    <!-- [ Pre-loader ] start -->
    <div class=\"loader-bg\">
        <div class=\"loader-track\">
            <div class=\"loader-fill\"></div>
        </div>
    </div>
    <!-- [ Pre-loader ] End -->
    
    <!-- [ Sidebar Menu ] start -->
    <nav class=\"pc-sidebar\">
        <div class=\"navbar-wrapper\">
            <div class=\"m-header\">
                <a href=\"{{ path('app_dashboard') }}\" class=\"b-brand text-primary\">
                    <img src=\"{{ asset('assets/images/logo-dark.svg') }}\" alt=\"logo image\" class=\"logo-lg\">
                    <span class=\"badge bg-brand-color-2 rounded-pill ms-1 theme-version\">v1.3.0</span>
                </a>
            </div>
            <div class=\"navbar-content\">
                <ul class=\"pc-navbar\">
                    {% block sidebar_menu %}
                    <li class=\"pc-item pc-caption\">
                        <label>Navigation</label>
                        <i class=\"ph-duotone ph-gauge\"></i>
                    </li>
                    <li class=\"pc-item pc-hasmenu\">
                        <a href=\"#!\" class=\"pc-link\">
                            <span class=\"pc-micon\"><i class=\"ph-duotone ph-gauge\"></i></span>
                            <span class=\"pc-mtext\">Dashboard</span>
                            <span class=\"pc-arrow\"><i data-feather=\"chevron-right\"></i></span>
                        </a>
                        <ul class=\"pc-submenu\">
                            <li class=\"pc-item\"><a class=\"pc-link\" href=\"{{ path('app_dashboard') }}\">Analytics</a></li>
                        </ul>
                    </li>
                    {% endblock %}
                </ul>
                
                <div class=\"card nav-action-card bg-brand-color-4\">
                    <div class=\"card-body\" style=\"background-image: url('{{ asset('assets/images/layout/nav-card-bg.svg') }}')\">
                        <h5 class=\"text-dark\">Help Center</h5>
                        <p class=\"text-dark text-opacity-75\">Please contact us for more questions.</p>
                        <a href=\"#\" class=\"btn btn-primary\" target=\"_blank\">Go to help Center</a>
                    </div>
                </div>
            </div>
            
            <div class=\"card pc-user-card\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center\">
                        <div class=\"flex-shrink-0\">
                            <img src=\"{{ asset('assets/images/user/avatar-1.jpg') }}\" alt=\"user-image\" class=\"user-avtar wid-45 rounded-circle\">
                        </div>
                        <div class=\"flex-grow-1 ms-3\">
                            <div class=\"dropdown\">
                                <a href=\"#\" class=\"arrow-none dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\" data-bs-offset=\"0,20\">
                                    <div class=\"d-flex align-items-center\">
                                        <div class=\"flex-grow-1 me-2\">
                                            <h6 class=\"mb-0\">Admin User</h6>
                                            <small>Administrator</small>
                                        </div>
                                        <div class=\"flex-shrink-0\">
                                            <div class=\"btn btn-icon btn-link-secondary avtar\">
                                                <i class=\"ph-duotone ph-windows-logo\"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <div class=\"dropdown-menu\">
                                    <ul>
                                        <li><a class=\"pc-user-links\" href=\"#\"><i class=\"ph-duotone ph-user\"></i> <span>My Account</span></a></li>
                                        <li><a class=\"pc-user-links\" href=\"#\"><i class=\"ph-duotone ph-gear\"></i> <span>Settings</span></a></li>
                                        <li><a class=\"pc-user-links\" href=\"#\"><i class=\"ph-duotone ph-lock-key\"></i> <span>Lock Screen</span></a></li>
                                        <li><a class=\"pc-user-links\" href=\"#\"><i class=\"ph-duotone ph-power\"></i> <span>Logout</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- [ Sidebar Menu ] end -->
    
    <!-- [ Header Topbar ] start -->
    <header class=\"pc-header\">
        <div class=\"header-wrapper\">
            <!-- [Mobile Media Block] start -->
            <div class=\"me-auto pc-mob-drp\">
                <ul class=\"list-unstyled\">
                    <li class=\"pc-h-item pc-sidebar-collapse\">
                        <a href=\"#\" class=\"pc-head-link ms-0\" id=\"sidebar-hide\"><i class=\"ti ti-menu-2\"></i></a>
                    </li>
                    <li class=\"pc-h-item pc-sidebar-popup\">
                        <a href=\"#\" class=\"pc-head-link ms-0\" id=\"mobile-collapse\"><i class=\"ti ti-menu-2\"></i></a>
                    </li>
                    <li class=\"pc-h-item d-none d-md-inline-flex\">
                        <form class=\"form-search\">
                            <i class=\"ph-duotone ph-magnifying-glass icon-search\"></i>
                            <input type=\"search\" class=\"form-control\" placeholder=\"Search...\">
                            <button class=\"btn btn-search\" style=\"padding: 0\"><kbd>ctrl+k</kbd></button>
                        </form>
                    </li>
                </ul>
            </div>
            <!-- [Mobile Media Block end] -->
            
            <div class=\"ms-auto\">
                <ul class=\"list-unstyled\">
                    <li class=\"dropdown pc-h-item d-none d-md-inline-flex\">
                        <a class=\"pc-head-link dropdown-toggle arrow-none me-0\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"false\" aria-expanded=\"false\">
                            <i class=\"ph-duotone ph-sun-dim\"></i>
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-end pc-h-dropdown\">
                            <a href=\"#!\" class=\"dropdown-item\" onclick=\"layout_change('dark')\">
                                <i class=\"ph-duotone ph-moon\"></i> <span>Dark</span>
                            </a>
                            <a href=\"#!\" class=\"dropdown-item\" onclick=\"layout_change('light')\">
                                <i class=\"ph-duotone ph-sun-dim\"></i> <span>Light</span>
                            </a>
                            <a href=\"#!\" class=\"dropdown-item\" onclick=\"layout_change_default()\">
                                <i class=\"ph-duotone ph-cpu\"></i> <span>Default</span>
                            </a>
                        </div>
                    </li>
                    <li class=\"dropdown pc-h-item\">
                        <a class=\"pc-head-link dropdown-toggle arrow-none me-0\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"false\" aria-expanded=\"false\">
                            <i class=\"ph-duotone ph-bell\"></i>
                            <span class=\"badge bg-success pc-h-badge\">3</span>
                        </a>
                        <div class=\"dropdown-menu dropdown-notification dropdown-menu-end pc-h-dropdown\">
                            <div class=\"dropdown-header d-flex align-items-center justify-content-between\">
                                <h5 class=\"m-0\">Notifications</h5>
                            </div>
                            <div class=\"dropdown-body text-wrap header-notification-scroll position-relative\" style=\"max-height: calc(100vh - 235px)\">
                                <p class=\"text-center py-4 mb-0\">No new notifications</p>
                            </div>
                        </div>
                    </li>
                    <li class=\"dropdown pc-h-item header-user-profile\">
                        <a class=\"pc-head-link dropdown-toggle arrow-none me-0\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"false\" data-bs-auto-close=\"outside\" aria-expanded=\"false\">
                            <img src=\"{{ asset('assets/images/user/avatar-2.jpg') }}\" alt=\"user-image\" class=\"user-avtar\">
                        </a>
                        <div class=\"dropdown-menu dropdown-user-profile dropdown-menu-end pc-h-dropdown\">
                            <div class=\"dropdown-header d-flex align-items-center justify-content-between\">
                                <h5 class=\"m-0\">Profile</h5>
                            </div>
                            <div class=\"dropdown-body\">
                                <div class=\"profile-notification-scroll position-relative\" style=\"max-height: calc(100vh - 225px)\">
                                    <ul class=\"list-group list-group-flush w-100\">
                                        <li class=\"list-group-item\">
                                            <a href=\"#\" class=\"dropdown-item\">
                                                <span class=\"d-flex align-items-center\">
                                                    <i class=\"ph-duotone ph-user-circle\"></i>
                                                    <span>Edit profile</span>
                                                </span>
                                            </a>
                                            <a href=\"#\" class=\"dropdown-item\">
                                                <span class=\"d-flex align-items-center\">
                                                    <i class=\"ph-duotone ph-gear-six\"></i>
                                                    <span>Settings</span>
                                                </span>
                                            </a>
                                        </li>
                                        <li class=\"list-group-item\">
                                            <a href=\"#\" class=\"dropdown-item\">
                                                <span class=\"d-flex align-items-center\">
                                                    <i class=\"ph-duotone ph-power\"></i>
                                                    <span>Logout</span>
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <!-- [ Header ] end -->
    
    <!-- [ Main Content ] start -->
    <div class=\"pc-container\">
        <div class=\"pc-content\">
            {% block breadcrumbs %}
            <!-- [ breadcrumb ] start -->
            <div class=\"page-header\">
                <div class=\"page-block\">
                    <div class=\"row align-items-center\">
                        <div class=\"col-md-12\">
                            <ul class=\"breadcrumb\">
                                <li class=\"breadcrumb-item\"><a href=\"{{ path('app_dashboard') }}\">Home</a></li>
                                {% block breadcrumb_items %}{% endblock %}
                            </ul>
                        </div>
                        <div class=\"col-md-12\">
                            <div class=\"page-header-title\">
                                <h2 class=\"mb-0\">{% block page_title %}Dashboard{% endblock %}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->
            {% endblock %}
            
            <!-- [ Main Content ] start -->
            {% block body %}{% endblock %}
            <!-- [ Main Content ] end -->
        </div>
    </div>
    <!-- [ Main Content ] end -->
    
    <!-- Footer -->
    <footer class=\"pc-footer\">
        <div class=\"footer-wrapper container-fluid\">
            <div class=\"row\">
                <div class=\"col-sm-6 my-1\">
                    <p class=\"m-0\">Made with &#9829; by Team <b>Phoenixcoded</b></p>
                </div>
                <div class=\"col-sm-6 ms-auto my-1\">
                    <ul class=\"list-inline footer-link mb-0 justify-content-sm-end d-flex\">
                        <li class=\"list-inline-item\"><a href=\"{{ path('app_dashboard') }}\">Home</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    
    {% block javascripts %}
    <!-- Required Js -->
    <script src=\"{{ asset('assets/js/plugins/popper.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/plugins/simplebar.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/plugins/bootstrap.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/plugins/feather.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/script.js') }}\"></script>
    <script src=\"{{ asset('assets/js/theme.js') }}\"></script>
    
    <script>
        layout_change('light');
        layout_sidebar_change('light');
        change_box_container('false');
        layout_caption_change('true');
        layout_rtl_change('false');
        preset_change('preset-1');
    </script>
    {% endblock %}
    
    {% block extra_javascripts %}{% endblock %}
</body>
</html>
", "base.html.twig", "C:\\xampp\\htdocs\\elbaridadminportal\\templates\\base.html.twig");
    }
}
