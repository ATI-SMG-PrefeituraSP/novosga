<?php

/* base.html.twig */
class __TwigTemplate_592efd91db017a585961a41d4fda30b3111a31fea973a9414175db05638d0e71 extends Twig_Template
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
        // line 3
        $context["logo"] = "images/novosga-navbar.png";
        // line 4
        echo "
<!DOCTYPE html>
<html lang=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["locale"] ?? null), "html", null, true);
        echo "\">
    <head>
        <meta charset=\"utf-8\">
        <title>";
        // line 9
        $this->displayBlock("title", $context, $blocks);
        echo "| ";
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["logo"] ?? null)), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "\">
                </a>
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\".novosga-navbar\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>

                <div class=\"collapse navbar-collapse novosga-navbar\">
                    ";
        // line 29
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", array()), "admin", array()) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", array()), "lotacao", array()))) {
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "baseUrl", array(), "method"), "html", null, true);
            echo "/profile\" title=\"\" class=\"dropdown-item\">
                                        <i class=\"fa fa-user fa-fw\"></i>
                                        ";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("menu.user.profile"), "html", null, true);
            echo "
                                    </a>
                                    <a href=\"";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "baseUrl", array(), "method"), "html", null, true);
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
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo " v";
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "baseUrl", array(), "method"), "html", null, true);
        echo "';
            App.version = '";
        // line 107
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
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
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", array()), "lotacao", array())) {
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
    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 69
    public function block_body($context, array $blocks = array())
    {
        // line 70
        echo "                ";
    }

    // line 110
    public function block_javascripts($context, array $blocks = array())
    {
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
        return array (  299 => 110,  295 => 70,  292 => 69,  287 => 16,  279 => 115,  273 => 113,  271 => 112,  268 => 111,  266 => 110,  261 => 108,  257 => 107,  253 => 106,  248 => 104,  244 => 103,  240 => 102,  236 => 101,  232 => 100,  228 => 99,  224 => 98,  214 => 91,  202 => 82,  198 => 81,  186 => 74,  181 => 71,  179 => 69,  172 => 64,  163 => 58,  158 => 56,  153 => 54,  148 => 52,  141 => 47,  131 => 42,  128 => 41,  126 => 40,  117 => 36,  113 => 34,  111 => 33,  108 => 32,  102 => 30,  100 => 29,  86 => 22,  82 => 21,  76 => 17,  74 => 16,  70 => 15,  66 => 14,  62 => 13,  58 => 12,  50 => 9,  44 => 6,  40 => 4,  38 => 3,  18 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base.html.twig", "/var/www/html/sgf/novosga/templates/base.html.twig");
    }
}
