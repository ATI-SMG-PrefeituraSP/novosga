<?php

/* NovosgaReportsBundle:default:relatorio.html.twig */
class __TwigTemplate_ce95205e134b67796649c3cc7e94a03578f74282395dd348ac0f0a58f4c353d2 extends Twig_Template
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
        // line 2
        echo "
<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <title>";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["relatorio"] ?? null), "titulo", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["relatorio"] ?? null), "titulo", array()), "html", null, true);
        echo "</h1>
        </div>
        <div id=\"report-body\">
            ";
        // line 23
        $this->loadTemplate(($context["page"] ?? null), "NovosgaReportsBundle:default:relatorio.html.twig", 23)->display($context);
        // line 24
        echo "        </div>
        <div id=\"report-footer\">
            <p>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["relatorio"] ?? null), "titulo", array()), "html", null, true);
        echo " - Novo SGA v";
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo "</p>
        </div>
    </div>
</body>
</html>";
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
        return array (  73 => 26,  69 => 24,  67 => 23,  61 => 20,  58 => 19,  56 => 18,  46 => 11,  42 => 10,  38 => 9,  34 => 8,  30 => 7,  23 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "NovosgaReportsBundle:default:relatorio.html.twig", "/var/www/html/sgf/novosga/modules/novosga/reports-bundle/Resources/views/default/relatorio.html.twig");
    }
}
