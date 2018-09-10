<?php

/* base.html.twig */
class __TwigTemplate_405125b5c048410fe6d13cf08705126c96ced667c4374a0b7a81369a2ac86dc7 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("blocks.html.twig", "base.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."blocks.html.twig".'" cannot be used as a trait.', 1, $this->source);
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'stylesheets' => array($this, 'block_stylesheets'),
                'body' => array($this, 'block_body'),
                'javascripts' => array($this, 'block_javascripts'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 3
        $context["logo"] = "images/novosga-navbar.png";
        // line 4
        echo "
<!DOCTYPE html>
<html lang=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new Twig_Error_Runtime('Variable "locale" does not exist.', 6, $this->source); })()), "html", null, true);
        echo "\">
    <head>
        <meta charset=\"utf-8\">
        <title>";
        // line 9
        $this->displayBlock("title", $context, $blocks);
        echo "| ";
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new Twig_Error_Runtime('Variable "title" does not exist.', 9, $this->source); })()), "html", null, true);
        echo "</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <link rel=\"shortcut icon\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/favicon.png"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" />
        ";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "    </head>
    <body>
        <header>
            <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
                <a class=\"navbar-brand\" href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">
                    <img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["logo"]) || array_key_exists("logo", $context) ? $context["logo"] : (function () { throw new Twig_Error_Runtime('Variable "logo" does not exist.', 22, $this->source); })())), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new Twig_Error_Runtime('Variable "title" does not exist.', 22, $this->source); })()), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new Twig_Error_Runtime('Variable "title" does not exist.', 22, $this->source); })()), "html", null, true);
        echo "\">
                </a>
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\".novosga-navbar\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>

                <div class=\"collapse navbar-collapse novosga-navbar\">
                    ";
        // line 29
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 29, $this->source); })()), "user", array()), "admin", array()) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 29, $this->source); })()), "user", array()), "lotacao", array()))) {
            // line 30
            echo "                        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\DefaultController::menu"));
            echo "
                    ";
        }
        // line 32
        echo "
                    ";
        // line 33
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 34
            echo "                        <ul class=\"navbar-nav ml-auto mr-sm-2\">
                            <li class=\"nav-item\">
                                <a href=\"";
            // line 36
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("about");
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("menu.about"), "html", null, true);
            echo "\" class=\"nav-link\">
                                    <i class=\"fa fa-question-circle fa-fw\"></i>
                                </a>
                            </li>
                            ";
            // line 40
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 41
                echo "                                <li class=\"nav-item\">
                                    <a href=\"";
                // line 42
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_index");
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("menu.admin"), "html", null, true);
                echo "\" class=\"nav-link\">
                                        <i class=\"fa fa-cog fa-fw\"></i>
                                    </a>
                                </li>
                            ";
            }
            // line 47
            echo "                            <li class=\"nav-item dropdown\">
                                <a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\">
                                    <i class=\"fa fa-user fa-fw\"></i>
                                </a>
                                <div class=\"dropdown-menu dropdown-menu-right\">
                                    <a href=\"";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 52, $this->source); })()), "request", array()), "baseUrl", array(), "method"), "html", null, true);
            echo "/profile\" title=\"\" class=\"dropdown-item\">
                                        <i class=\"fa fa-user fa-fw\"></i>
                                        ";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("menu.user.profile"), "html", null, true);
            echo "
                                    </a>
                                    <a href=\"";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 56, $this->source); })()), "request", array()), "baseUrl", array(), "method"), "html", null, true);
            echo "/logout\" class=\"dropdown-item\">
                                        <i class=\"fa fa-sign-out fa-fw\"></i>
                                        ";
            // line 58
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("menu.user.logout"), "html", null, true);
            echo "
                                    </a>
                                </div>
                            </li>
                        </ul>
                    ";
        }
        // line 64
        echo "                </div>
            </nav>
        </header>
        <section>
            <div class=\"container-fluid\">
                ";
        // line 69
        $this->displayBlock('body', $context, $blocks);
        // line 71
        echo "            </div>
        </section>
        <footer>
            <p>";
        // line 74
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new Twig_Error_Runtime('Variable "title" does not exist.', 74, $this->source); })()), "html", null, true);
        echo " v";
        echo twig_escape_filter($this->env, (isset($context["version"]) || array_key_exists("version", $context) ? $context["version"] : (function () { throw new Twig_Error_Runtime('Variable "version" does not exist.', 74, $this->source); })()), "html", null, true);
        echo "</p>
        </footer>
        
        <div id=\"error-modal\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\">
            <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\">";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("modal.error.title"), "html", null, true);
        echo "</h5>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.close"), "html", null, true);
        echo "\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                    <div class=\"modal-body\">
                        <p></p>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">
                            ";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.close"), "html", null, true);
        echo "
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <script type=\"text/javascript\" src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/popper.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/socket.io.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/vue.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/script.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/moment-with-locales.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\">
            App.baseUrl = '";
        // line 106
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 106, $this->source); })()), "request", array()), "baseUrl", array(), "method"), "html", null, true);
        echo "';
            App.version = '";
        // line 107
        echo twig_escape_filter($this->env, (isset($context["version"]) || array_key_exists("version", $context) ? $context["version"] : (function () { throw new Twig_Error_Runtime('Variable "version" does not exist.', 107, $this->source); })()), "html", null, true);
        echo "';
            App.dateFormat = '";
        // line 108
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("m/d/Y"), "html", null, true);
        echo "';
        </script>
        ";
        // line 110
        $this->displayBlock('javascripts', $context, $blocks);
        // line 111
        echo "
        ";
        // line 112
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 112, $this->source); })()), "user", array()), "lotacao", array())) {
            // line 113
            echo "            ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\DefaultController::unidades"));
            echo "
        ";
        }
        // line 115
        echo "
        <span id=\"ajax-loading\" class=\"mini-loading\" style=\"display:none\"></span>
    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 69
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 70
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 110
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  335 => 110,  325 => 70,  316 => 69,  299 => 16,  285 => 115,  279 => 113,  277 => 112,  274 => 111,  272 => 110,  267 => 108,  263 => 107,  259 => 106,  254 => 104,  250 => 103,  246 => 102,  242 => 101,  238 => 100,  234 => 99,  230 => 98,  220 => 91,  208 => 82,  204 => 81,  192 => 74,  187 => 71,  185 => 69,  178 => 64,  169 => 58,  164 => 56,  159 => 54,  154 => 52,  147 => 47,  137 => 42,  134 => 41,  132 => 40,  123 => 36,  119 => 34,  117 => 33,  114 => 32,  108 => 30,  106 => 29,  92 => 22,  88 => 21,  82 => 17,  80 => 16,  76 => 15,  72 => 14,  68 => 13,  64 => 12,  56 => 9,  50 => 6,  46 => 4,  44 => 3,  18 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use 'blocks.html.twig' -%}

{% set logo = \"images/novosga-navbar.png\" %}

<!DOCTYPE html>
<html lang=\"{{ locale }}\">
    <head>
        <meta charset=\"utf-8\">
        <title>{{- block('title') -}} | {{ title }}</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <link rel=\"shortcut icon\" href=\"{{ asset(\"images/favicon.png\") }}\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset(\"css/bootstrap.min.css\") }}\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset(\"css/font-awesome.min.css\") }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset(\"css/style.css\") }}\" />
        {% block stylesheets %}{% endblock %}
    </head>
    <body>
        <header>
            <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
                <a class=\"navbar-brand\" href=\"{{ path('home') }}\">
                    <img src=\"{{ asset(logo) }}\" alt=\"{{ title }}\" title=\"{{ title }}\">
                </a>
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\".novosga-navbar\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>

                <div class=\"collapse navbar-collapse novosga-navbar\">
                    {% if app.user.admin or app.user.lotacao %}
                        {{ render(controller('App\\\\Controller\\\\DefaultController::menu')) }}
                    {% endif %}

                    {% if is_granted('ROLE_USER') %}
                        <ul class=\"navbar-nav ml-auto mr-sm-2\">
                            <li class=\"nav-item\">
                                <a href=\"{{ path('about') }}\" title=\"{{ 'menu.about'|trans }}\" class=\"nav-link\">
                                    <i class=\"fa fa-question-circle fa-fw\"></i>
                                </a>
                            </li>
                            {% if is_granted('ROLE_ADMIN') %}
                                <li class=\"nav-item\">
                                    <a href=\"{{ path('admin_index') }}\" title=\"{{ 'menu.admin'|trans }}\" class=\"nav-link\">
                                        <i class=\"fa fa-cog fa-fw\"></i>
                                    </a>
                                </li>
                            {% endif %}
                            <li class=\"nav-item dropdown\">
                                <a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\">
                                    <i class=\"fa fa-user fa-fw\"></i>
                                </a>
                                <div class=\"dropdown-menu dropdown-menu-right\">
                                    <a href=\"{{ app.request.baseUrl() }}/profile\" title=\"\" class=\"dropdown-item\">
                                        <i class=\"fa fa-user fa-fw\"></i>
                                        {{ 'menu.user.profile'|trans }}
                                    </a>
                                    <a href=\"{{ app.request.baseUrl() }}/logout\" class=\"dropdown-item\">
                                        <i class=\"fa fa-sign-out fa-fw\"></i>
                                        {{ 'menu.user.logout'|trans }}
                                    </a>
                                </div>
                            </li>
                        </ul>
                    {% endif %}
                </div>
            </nav>
        </header>
        <section>
            <div class=\"container-fluid\">
                {% block body %}
                {% endblock %}
            </div>
        </section>
        <footer>
            <p>{{ title }} v{{ version }}</p>
        </footer>
        
        <div id=\"error-modal\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\">
            <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\">{{ 'modal.error.title'|trans }}</h5>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"{{ 'button.close'|trans }}\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                    <div class=\"modal-body\">
                        <p></p>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">
                            {{ 'button.close'|trans }}
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <script type=\"text/javascript\" src=\"{{ asset(\"js/jquery.js\") }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset(\"js/popper.min.js\") }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset(\"js/bootstrap.min.js\") }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset(\"js/socket.io.js\") }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset(\"js/vue.min.js\") }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset(\"js/script.js\") }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset(\"js/moment-with-locales.min.js\") }}\"></script>
        <script type=\"text/javascript\">
            App.baseUrl = '{{ app.request.baseUrl() }}';
            App.version = '{{ version }}';
            App.dateFormat = '{{ 'm/d/Y'|trans }}';
        </script>
        {% block javascripts %}{% endblock %}

        {% if app.user.lotacao %}
            {{ render(controller('App\\\\Controller\\\\DefaultController::unidades')) }}
        {% endif %}

        <span id=\"ajax-loading\" class=\"mini-loading\" style=\"display:none\"></span>
    </body>
</html>
", "base.html.twig", "/var/www/html/sgf/novosga/templates/base.html.twig");
    }
}
