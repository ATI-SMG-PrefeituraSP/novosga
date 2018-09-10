<?php

/* NovosgaReportsBundle:default:relatorio.html.twig */
class __TwigTemplate_e5fcd85122e1c867d2a71168e2dc5f1eca66b1359c3537dc37d546bc32820186 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NovosgaReportsBundle:default:relatorio.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NovosgaReportsBundle:default:relatorio.html.twig"));

        // line 2
        echo "
<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <title>";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["relatorio"]) || array_key_exists("relatorio", $context) ? $context["relatorio"] : (function () { throw new Twig_Error_Runtime('Variable "relatorio" does not exist.', 7, $this->source); })()), "titulo", array()), "html", null, true);
        echo "</title>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" />
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" />
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/novosgareports/css/relatorio.css"), "html", null, true);
        echo "\" />
    <link rel=\"shortcut icon\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/favicon.png"), "html", null, true);
        echo "\" />
</head>
<body>
    <div id=\"report\" class=\"container\">
        <div id=\"report-header\">
            <a href=\"javascript:window.print()\" class=\"print\">
                <i class=\"fa fa-print\"></i>
                ";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Imprimir", array(), "NovosgaReportsBundle");
        // line 19
        echo "            </a>
            <h1>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["relatorio"]) || array_key_exists("relatorio", $context) ? $context["relatorio"] : (function () { throw new Twig_Error_Runtime('Variable "relatorio" does not exist.', 20, $this->source); })()), "titulo", array()), "html", null, true);
        echo "</h1>
        </div>
        <div id=\"report-body\">
            ";
        // line 23
        $this->loadTemplate((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 23, $this->source); })()), "NovosgaReportsBundle:default:relatorio.html.twig", 23)->display($context);
        // line 24
        echo "        </div>
        <div id=\"report-footer\">
            <p>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["relatorio"]) || array_key_exists("relatorio", $context) ? $context["relatorio"] : (function () { throw new Twig_Error_Runtime('Variable "relatorio" does not exist.', 26, $this->source); })()), "titulo", array()), "html", null, true);
        echo " - Novo SGA v";
        echo twig_escape_filter($this->env, (isset($context["version"]) || array_key_exists("version", $context) ? $context["version"] : (function () { throw new Twig_Error_Runtime('Variable "version" does not exist.', 26, $this->source); })()), "html", null, true);
        echo "</p>
        </div>
    </div>
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "NovosgaReportsBundle:default:relatorio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 26,  75 => 24,  73 => 23,  67 => 20,  64 => 19,  62 => 18,  52 => 11,  48 => 10,  44 => 9,  40 => 8,  36 => 7,  29 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'NovosgaReportsBundle' %}

<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <title>{{ relatorio.titulo }}</title>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/bootstrap.min.css') }}\" />
    <link type=\"text/css\" rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\" />
    <link type=\"text/css\" rel=\"stylesheet\" href=\"{{ asset('bundles/novosgareports/css/relatorio.css') }}\" />
    <link rel=\"shortcut icon\" href=\"{{ asset('images/favicon.png') }}\" />
</head>
<body>
    <div id=\"report\" class=\"container\">
        <div id=\"report-header\">
            <a href=\"javascript:window.print()\" class=\"print\">
                <i class=\"fa fa-print\"></i>
                {% trans %}Imprimir{% endtrans %}
            </a>
            <h1>{{ relatorio.titulo }}</h1>
        </div>
        <div id=\"report-body\">
            {% include page %}
        </div>
        <div id=\"report-footer\">
            <p>{{ relatorio.titulo }} - Novo SGA v{{ version }}</p>
        </div>
    </div>
</body>
</html>", "NovosgaReportsBundle:default:relatorio.html.twig", "/var/www/html/sgf/novosga/modules/novosga/reports-bundle/Resources/views/default/relatorio.html.twig");
    }
}
