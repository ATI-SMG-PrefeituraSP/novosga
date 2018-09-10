<?php

/* admin.html.twig */
class __TwigTemplate_8e293d827a3a7d11e388e490883c6cd8d4c01b18b0df142ffcb7f8aa8e873944 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.title"), "html", null, true);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <div class=\"row\">
        <div class=\"col-md-2 col-lg-3\">
            <aside>
                <div class=\"list-group\">
                    <a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_index");
        echo "\" class=\"list-group-item ";
        if (((isset($context["tab"]) || array_key_exists("tab", $context) ? $context["tab"] : (function () { throw new Twig_Error_Runtime('Variable "tab" does not exist.', 12, $this->source); })()) == "index")) {
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
        if (((isset($context["tab"]) || array_key_exists("tab", $context) ? $context["tab"] : (function () { throw new Twig_Error_Runtime('Variable "tab" does not exist.', 16, $this->source); })()) == "unidades")) {
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
        if (((isset($context["tab"]) || array_key_exists("tab", $context) ? $context["tab"] : (function () { throw new Twig_Error_Runtime('Variable "tab" does not exist.', 20, $this->source); })()) == "departamentos")) {
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
        if (((isset($context["tab"]) || array_key_exists("tab", $context) ? $context["tab"] : (function () { throw new Twig_Error_Runtime('Variable "tab" does not exist.', 24, $this->source); })()) == "servicos")) {
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
        if (((isset($context["tab"]) || array_key_exists("tab", $context) ? $context["tab"] : (function () { throw new Twig_Error_Runtime('Variable "tab" does not exist.', 28, $this->source); })()) == "perfis")) {
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
        if (((isset($context["tab"]) || array_key_exists("tab", $context) ? $context["tab"] : (function () { throw new Twig_Error_Runtime('Variable "tab" does not exist.', 32, $this->source); })()) == "prioridades")) {
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
        if (((isset($context["tab"]) || array_key_exists("tab", $context) ? $context["tab"] : (function () { throw new Twig_Error_Runtime('Variable "tab" does not exist.', 36, $this->source); })()) == "locais")) {
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
        if (((isset($context["tab"]) || array_key_exists("tab", $context) ? $context["tab"] : (function () { throw new Twig_Error_Runtime('Variable "tab" does not exist.', 40, $this->source); })()) == "modulos")) {
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
        if (((isset($context["tab"]) || array_key_exists("tab", $context) ? $context["tab"] : (function () { throw new Twig_Error_Runtime('Variable "tab" does not exist.', 44, $this->source); })()) == "api")) {
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 51
    public function block_adminContent($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminContent"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminContent"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 56
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 65
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 66
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/admin.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  286 => 67,  281 => 66,  272 => 65,  254 => 57,  245 => 56,  228 => 51,  216 => 52,  214 => 51,  205 => 45,  197 => 44,  191 => 41,  183 => 40,  177 => 37,  169 => 36,  163 => 33,  155 => 32,  149 => 29,  141 => 28,  135 => 25,  127 => 24,  121 => 21,  113 => 20,  107 => 17,  99 => 16,  93 => 13,  85 => 12,  79 => 8,  70 => 7,  57 => 4,  48 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block title %}
    {{ 'admin.title'|trans }}
{% endblock %}

{% block body %}
    <div class=\"row\">
        <div class=\"col-md-2 col-lg-3\">
            <aside>
                <div class=\"list-group\">
                    <a href=\"{{ path('admin_index') }}\" class=\"list-group-item {% if tab == 'index' %}active{% endif %}\">
                        {{ 'admin.menu.system'|trans }}
                    </a>

                    <a href=\"{{ path('admin_unidades_index') }}\" class=\"list-group-item {% if tab == 'unidades' %}active{% endif %}\">
                        {{ 'admin.menu.unities'|trans }}
                    </a>

                    <a href=\"{{ path('admin_departamentos_index') }}\" class=\"list-group-item {% if tab == 'departamentos' %}active{% endif %}\">
                        {{ 'admin.menu.departments'|trans }}
                    </a>

                    <a href=\"{{ path('admin_servicos_index') }}\" class=\"list-group-item {% if tab == 'servicos' %}active{% endif %}\">
                        {{ 'admin.menu.services'|trans }}
                    </a>

                    <a href=\"{{ path('admin_perfis_index') }}\" class=\"list-group-item {% if tab == 'perfis' %}active{% endif %}\">
                        {{ 'admin.menu.roles'|trans }}
                    </a>

                    <a href=\"{{ path('admin_prioridades_index') }}\" class=\"list-group-item {% if tab == 'prioridades' %}active{% endif %}\">
                        {{ 'admin.menu.priorities'|trans }}
                    </a>

                    <a href=\"{{ path('admin_locais_index') }}\" class=\"list-group-item {% if tab == 'locais' %}active{% endif %}\">
                        {{ 'admin.menu.places'|trans }}
                    </a>

                    <a href=\"{{ path('admin_modulos_index') }}\" class=\"list-group-item {% if tab == 'modulos' %}active{% endif %}\">
                        {{ 'admin.menu.modules'|trans }}
                    </a>

                    <a href=\"{{ path('admin_api_index') }}\" class=\"list-group-item {% if tab == 'api' %}active{% endif %}\">
                        {{ 'admin.menu.webapi'|trans }}
                    </a>
                </div>
            </aside>
        </div>
        <div class=\"col-md-10 col-lg-9\">
            {% block adminContent %}{% endblock %}
        </div>
    </div>
{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        body>section {
            padding: 20px 0;
        }
    </style>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script type=\"text/javascript\" src=\"{{ asset(\"js/admin.js\") }}\"></script>
{% endblock %}
", "admin.html.twig", "/var/www/html/sgf/novosga/templates/admin.html.twig");
    }
}
