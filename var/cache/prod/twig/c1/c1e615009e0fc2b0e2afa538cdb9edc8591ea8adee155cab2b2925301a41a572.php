<?php

/* admin.html.twig */
class __TwigTemplate_465fcf3f6e4e1740f193511c84b3265063eb96cc85248b768e4b36eff78905b1 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'adminContent' => array($this, 'block_adminContent'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.title"), "html", null, true);
        echo "
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "    <div class=\"row\">
        <div class=\"col-md-2 col-lg-3\">
            <aside>
                <div class=\"list-group\">
                    <a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_index");
        echo "\" class=\"list-group-item ";
        if ((($context["tab"] ?? null) == "index")) {
            echo "active";
        }
        echo "\">
                        ";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.menu.system"), "html", null, true);
        echo "
                    </a>

                    <a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_unidades_index");
        echo "\" class=\"list-group-item ";
        if ((($context["tab"] ?? null) == "unidades")) {
            echo "active";
        }
        echo "\">
                        ";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.menu.unities"), "html", null, true);
        echo "
                    </a>

                    <a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_departamentos_index");
        echo "\" class=\"list-group-item ";
        if ((($context["tab"] ?? null) == "departamentos")) {
            echo "active";
        }
        echo "\">
                        ";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.menu.departments"), "html", null, true);
        echo "
                    </a>

                    <a href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_servicos_index");
        echo "\" class=\"list-group-item ";
        if ((($context["tab"] ?? null) == "servicos")) {
            echo "active";
        }
        echo "\">
                        ";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.menu.services"), "html", null, true);
        echo "
                    </a>

                    <a href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_perfis_index");
        echo "\" class=\"list-group-item ";
        if ((($context["tab"] ?? null) == "perfis")) {
            echo "active";
        }
        echo "\">
                        ";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.menu.roles"), "html", null, true);
        echo "
                    </a>

                    <a href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_prioridades_index");
        echo "\" class=\"list-group-item ";
        if ((($context["tab"] ?? null) == "prioridades")) {
            echo "active";
        }
        echo "\">
                        ";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.menu.priorities"), "html", null, true);
        echo "
                    </a>

                    <a href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_locais_index");
        echo "\" class=\"list-group-item ";
        if ((($context["tab"] ?? null) == "locais")) {
            echo "active";
        }
        echo "\">
                        ";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.menu.places"), "html", null, true);
        echo "
                    </a>

                    <a href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_modulos_index");
        echo "\" class=\"list-group-item ";
        if ((($context["tab"] ?? null) == "modulos")) {
            echo "active";
        }
        echo "\">
                        ";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.menu.modules"), "html", null, true);
        echo "
                    </a>

                    <a href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_api_index");
        echo "\" class=\"list-group-item ";
        if ((($context["tab"] ?? null) == "api")) {
            echo "active";
        }
        echo "\">
                        ";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.menu.webapi"), "html", null, true);
        echo "
                    </a>
                </div>
            </aside>
        </div>
        <div class=\"col-md-10 col-lg-9\">
            ";
        // line 51
        $this->displayBlock('adminContent', $context, $blocks);
        // line 52
        echo "        </div>
    </div>
";
    }

    // line 51
    public function block_adminContent($context, array $blocks = array())
    {
    }

    // line 56
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 57
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <style>
        body>section {
            padding: 20px 0;
        }
    </style>
";
    }

    // line 65
    public function block_javascripts($context, array $blocks = array())
    {
        // line 66
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/admin.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 67,  215 => 66,  212 => 65,  200 => 57,  197 => 56,  192 => 51,  186 => 52,  184 => 51,  175 => 45,  167 => 44,  161 => 41,  153 => 40,  147 => 37,  139 => 36,  133 => 33,  125 => 32,  119 => 29,  111 => 28,  105 => 25,  97 => 24,  91 => 21,  83 => 20,  77 => 17,  69 => 16,  63 => 13,  55 => 12,  49 => 8,  46 => 7,  39 => 4,  36 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin.html.twig", "/var/www/html/sgf/novosga/templates/admin.html.twig");
    }
}
