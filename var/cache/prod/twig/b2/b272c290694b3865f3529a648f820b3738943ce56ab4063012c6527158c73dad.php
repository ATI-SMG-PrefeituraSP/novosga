<?php

/* print.html.twig */
class __TwigTemplate_3f9a13b3f31f7a03b8d12cd0a66820d5c7ab20b7f653b7d9e03dc7700ddc53db extends Twig_Template
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
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <title>";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["atendimento"] ?? null), "senha", array()), "html", null, true);
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
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["atendimento"] ?? null), "unidade", array()), "impressao", array()), "exibirNomeUnidade", array())) {
            // line 72
            echo "                <p class=\"unidade\">
                    ";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["atendimento"] ?? null), "unidade", array()), "nome", array()), "html", null, true);
            echo "
                </p>
            ";
        }
        // line 76
        echo "            <p>
                ";
        // line 77
        echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["atendimento"] ?? null), "unidade", array()), "impressao", array()), "cabecalho", array()), "html", null, true));
        echo "
            </p>
        </header>
        <section>
            ";
        // line 81
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["atendimento"] ?? null), "unidade", array()), "impressao", array()), "exibirPrioridade", array())) {
            // line 82
            echo "                <p class=\"prioridade\">
                    ";
            // line 83
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["atendimento"] ?? null), "prioridade", array()), "nome", array()), "html", null, true);
            echo "
                </p>
            ";
        }
        // line 86
        echo "            
            <p class=\"senha\">
                ";
        // line 88
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["atendimento"] ?? null), "senha", array()), "html", null, true);
        echo "
            </p>
            
            ";
        // line 91
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["atendimento"] ?? null), "unidade", array()), "impressao", array()), "exibirNomeServico", array())) {
            // line 92
            echo "                <p class=\"servico\">
                    ";
            // line 93
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["atendimento"] ?? null), "servico", array()), "nome", array()), "html", null, true);
            echo "
                </p>
            ";
        }
        // line 96
        echo "            
            ";
        // line 97
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["atendimento"] ?? null), "unidade", array()), "impressao", array()), "exibirMensagemServico", array())) {
            // line 98
            echo "                <p class=\"servico\">
                    ";
            // line 99
            echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["servicoUnidade"] ?? null), "mensagem", array()), "html", null, true));
            echo "
                </p>
            ";
        }
        // line 102
        echo "            
            ";
        // line 103
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["atendimento"] ?? null), "unidade", array()), "impressao", array()), "exibirData", array())) {
            // line 104
            echo "                <div class=\"data-hora\">
                    <p class=\"data\">
                        ";
            // line 106
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["now"] ?? null), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("m/d/Y")), "html", null, true);
            echo "
                    </p>
                    <p class=\"hora\">
                        ";
            // line 109
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("print.ticket.date", array("%time%" => twig_date_format_filter($this->env, ($context["now"] ?? null), "H\\hi")));
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
        echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["atendimento"] ?? null), "unidade", array()), "impressao", array()), "rodape", array()), "html", null, true));
        echo "
            </p>
        </footer>
    </div>
</body>
</html>";
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
        return array (  192 => 116,  187 => 113,  180 => 109,  174 => 106,  170 => 104,  168 => 103,  165 => 102,  159 => 99,  156 => 98,  154 => 97,  151 => 96,  145 => 93,  142 => 92,  140 => 91,  134 => 88,  130 => 86,  124 => 83,  121 => 82,  119 => 81,  112 => 77,  109 => 76,  103 => 73,  100 => 72,  98 => 71,  29 => 5,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "print.html.twig", "/var/www/html/sgf/novosga/templates/print.html.twig");
    }
}
