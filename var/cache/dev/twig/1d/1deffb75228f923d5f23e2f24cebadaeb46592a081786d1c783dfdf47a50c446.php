<?php

/* print.html.twig */
class __TwigTemplate_ea70447f2157b4752cbe66e0608a74dbe0f473eedd33be66778becbef7871b88 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "print.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "print.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <title>";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["atendimento"]) || array_key_exists("atendimento", $context) ? $context["atendimento"] : (function () { throw new Twig_Error_Runtime('Variable "atendimento" does not exist.', 5, $this->source); })()), "senha", array()), "html", null, true);
        echo "</title>
    <style>
       #senha {
           width: 300px;
           min-height: 150px;
           margin: auto;
       }

       #senha * {
           font-family: monospace;
           font-size: 12pt;
           text-align: center;
           line-height: 1;
       }

       #senha header {
           font-size: 10pt;
           padding: 10px 0;
       }

       #senha header p {
           margin: 0;
       }

       #senha header .unidade {
           font-size: 14pt;
           font-weight: bold;
       }

       #senha section {
           font-size: 10pt;
           padding: 10px 0;
       }

       #senha section p {
           margin: 5px 0;
       }

       #senha section .prioridade {
           font-weight: bold;
       }

       #senha section .senha {
           font-size: 35pt;
           line-height: 50pt;
           font-weight: bold;
       }

       #senha section .data-hora {
           padding: 10pt 0;
       }

       #senha footer {
           font-size: 8pt;
           padding: 10px 0;
       }

       #senha footer p {
           margin: 0;
       }
    </style>
    <link rel=\"shortcut icon\" href=\"images/favicon.png\" />
</head>
<body>
    <div id=\"senha\">
        <header>
            ";
        // line 71
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["atendimento"]) || array_key_exists("atendimento", $context) ? $context["atendimento"] : (function () { throw new Twig_Error_Runtime('Variable "atendimento" does not exist.', 71, $this->source); })()), "unidade", array()), "impressao", array()), "exibirNomeUnidade", array())) {
            // line 72
            echo "                <p class=\"unidade\">
                    ";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["atendimento"]) || array_key_exists("atendimento", $context) ? $context["atendimento"] : (function () { throw new Twig_Error_Runtime('Variable "atendimento" does not exist.', 73, $this->source); })()), "unidade", array()), "nome", array()), "html", null, true);
            echo "
                </p>
            ";
        }
        // line 76
        echo "            <p>
                ";
        // line 77
        echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["atendimento"]) || array_key_exists("atendimento", $context) ? $context["atendimento"] : (function () { throw new Twig_Error_Runtime('Variable "atendimento" does not exist.', 77, $this->source); })()), "unidade", array()), "impressao", array()), "cabecalho", array()), "html", null, true));
        echo "
            </p>
        </header>
        <section>
            ";
        // line 81
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["atendimento"]) || array_key_exists("atendimento", $context) ? $context["atendimento"] : (function () { throw new Twig_Error_Runtime('Variable "atendimento" does not exist.', 81, $this->source); })()), "unidade", array()), "impressao", array()), "exibirPrioridade", array())) {
            // line 82
            echo "                <p class=\"prioridade\">
                    ";
            // line 83
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["atendimento"]) || array_key_exists("atendimento", $context) ? $context["atendimento"] : (function () { throw new Twig_Error_Runtime('Variable "atendimento" does not exist.', 83, $this->source); })()), "prioridade", array()), "nome", array()), "html", null, true);
            echo "
                </p>
            ";
        }
        // line 86
        echo "            
            <p class=\"senha\">
                ";
        // line 88
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["atendimento"]) || array_key_exists("atendimento", $context) ? $context["atendimento"] : (function () { throw new Twig_Error_Runtime('Variable "atendimento" does not exist.', 88, $this->source); })()), "senha", array()), "html", null, true);
        echo "
            </p>
            
            ";
        // line 91
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["atendimento"]) || array_key_exists("atendimento", $context) ? $context["atendimento"] : (function () { throw new Twig_Error_Runtime('Variable "atendimento" does not exist.', 91, $this->source); })()), "unidade", array()), "impressao", array()), "exibirNomeServico", array())) {
            // line 92
            echo "                <p class=\"servico\">
                    ";
            // line 93
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["atendimento"]) || array_key_exists("atendimento", $context) ? $context["atendimento"] : (function () { throw new Twig_Error_Runtime('Variable "atendimento" does not exist.', 93, $this->source); })()), "servico", array()), "nome", array()), "html", null, true);
            echo "
                </p>
            ";
        }
        // line 96
        echo "            
            ";
        // line 97
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["atendimento"]) || array_key_exists("atendimento", $context) ? $context["atendimento"] : (function () { throw new Twig_Error_Runtime('Variable "atendimento" does not exist.', 97, $this->source); })()), "unidade", array()), "impressao", array()), "exibirMensagemServico", array())) {
            // line 98
            echo "                <p class=\"servico\">
                    ";
            // line 99
            echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["servicoUnidade"]) || array_key_exists("servicoUnidade", $context) ? $context["servicoUnidade"] : (function () { throw new Twig_Error_Runtime('Variable "servicoUnidade" does not exist.', 99, $this->source); })()), "mensagem", array()), "html", null, true));
            echo "
                </p>
            ";
        }
        // line 102
        echo "            
            ";
        // line 103
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["atendimento"]) || array_key_exists("atendimento", $context) ? $context["atendimento"] : (function () { throw new Twig_Error_Runtime('Variable "atendimento" does not exist.', 103, $this->source); })()), "unidade", array()), "impressao", array()), "exibirData", array())) {
            // line 104
            echo "                <div class=\"data-hora\">
                    <p class=\"data\">
                        ";
            // line 106
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["now"]) || array_key_exists("now", $context) ? $context["now"] : (function () { throw new Twig_Error_Runtime('Variable "now" does not exist.', 106, $this->source); })()), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("m/d/Y")), "html", null, true);
            echo "
                    </p>
                    <p class=\"hora\">
                        ";
            // line 109
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("print.ticket.date", array("%time%" => twig_date_format_filter($this->env, (isset($context["now"]) || array_key_exists("now", $context) ? $context["now"] : (function () { throw new Twig_Error_Runtime('Variable "now" does not exist.', 109, $this->source); })()), "H\\hi")));
            echo "
                    </p>
                </div>
            ";
        }
        // line 113
        echo "        </section>
        <footer>
            <p>
                ";
        // line 116
        echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["atendimento"]) || array_key_exists("atendimento", $context) ? $context["atendimento"] : (function () { throw new Twig_Error_Runtime('Variable "atendimento" does not exist.', 116, $this->source); })()), "unidade", array()), "impressao", array()), "rodape", array()), "html", null, true));
        echo "
            </p>
        </footer>
    </div>
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "print.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 116,  193 => 113,  186 => 109,  180 => 106,  176 => 104,  174 => 103,  171 => 102,  165 => 99,  162 => 98,  160 => 97,  157 => 96,  151 => 93,  148 => 92,  146 => 91,  140 => 88,  136 => 86,  130 => 83,  127 => 82,  125 => 81,  118 => 77,  115 => 76,  109 => 73,  106 => 72,  104 => 71,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <title>{{ atendimento.senha }}</title>
    <style>
       #senha {
           width: 300px;
           min-height: 150px;
           margin: auto;
       }

       #senha * {
           font-family: monospace;
           font-size: 12pt;
           text-align: center;
           line-height: 1;
       }

       #senha header {
           font-size: 10pt;
           padding: 10px 0;
       }

       #senha header p {
           margin: 0;
       }

       #senha header .unidade {
           font-size: 14pt;
           font-weight: bold;
       }

       #senha section {
           font-size: 10pt;
           padding: 10px 0;
       }

       #senha section p {
           margin: 5px 0;
       }

       #senha section .prioridade {
           font-weight: bold;
       }

       #senha section .senha {
           font-size: 35pt;
           line-height: 50pt;
           font-weight: bold;
       }

       #senha section .data-hora {
           padding: 10pt 0;
       }

       #senha footer {
           font-size: 8pt;
           padding: 10px 0;
       }

       #senha footer p {
           margin: 0;
       }
    </style>
    <link rel=\"shortcut icon\" href=\"images/favicon.png\" />
</head>
<body>
    <div id=\"senha\">
        <header>
            {% if atendimento.unidade.impressao.exibirNomeUnidade %}
                <p class=\"unidade\">
                    {{ atendimento.unidade.nome }}
                </p>
            {% endif %}
            <p>
                {{ atendimento.unidade.impressao.cabecalho|nl2br }}
            </p>
        </header>
        <section>
            {% if atendimento.unidade.impressao.exibirPrioridade %}
                <p class=\"prioridade\">
                    {{ atendimento.prioridade.nome }}
                </p>
            {% endif %}
            
            <p class=\"senha\">
                {{ atendimento.senha }}
            </p>
            
            {% if atendimento.unidade.impressao.exibirNomeServico %}
                <p class=\"servico\">
                    {{ atendimento.servico.nome }}
                </p>
            {% endif %}
            
            {% if atendimento.unidade.impressao.exibirMensagemServico %}
                <p class=\"servico\">
                    {{ servicoUnidade.mensagem|nl2br }}
                </p>
            {% endif %}
            
            {% if atendimento.unidade.impressao.exibirData %}
                <div class=\"data-hora\">
                    <p class=\"data\">
                        {{ now|date('m/d/Y'|trans) }}
                    </p>
                    <p class=\"hora\">
                        {{ 'print.ticket.date'|trans({ '%time%': now|date('H\\\\hi') })|raw }}
                    </p>
                </div>
            {% endif %}
        </section>
        <footer>
            <p>
                {{ atendimento.unidade.impressao.rodape|nl2br }}
            </p>
        </footer>
    </div>
</body>
</html>", "print.html.twig", "/var/www/html/sgf/novosga/templates/print.html.twig");
    }
}
