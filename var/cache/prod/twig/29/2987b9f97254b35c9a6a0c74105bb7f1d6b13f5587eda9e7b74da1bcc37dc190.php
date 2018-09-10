<?php

/* NovosgaReportsBundle:relatorios:atendimentos_concluidos.html.twig */
class __TwigTemplate_b29444536120252ceb5d475d35df01cf859cd11ce2cc38d15684689e9786ed95 extends Twig_Template
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
<div class=\"header\">
    <h2>";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["relatorio"] ?? null), "dados", array()), "unidade", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Período de %dataInicial% a %dataFinal%", array("%dataInicial%" => ($context["dataInicial"] ?? null), "%dataFinal%" => ($context["dataFinal"] ?? null)), "app");
        echo "</p>
</div>
<table class=\"table table-bordered table-striped\">
    <thead class=\"thead-light\">
        <tr>
            <th>";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.ticket", array(), "NovosgaReportsBundle"), "html", null, true);
        echo "</th>
            <th>";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Data", array(), "NovosgaReportsBundle");
        echo "</th>
            <th title=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Hora de Chamada", array(), "NovosgaReportsBundle");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Chamada", array(), "NovosgaReportsBundle");
        echo "</th>
            <th title=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Hora do Início do atendimento", array(), "NovosgaReportsBundle");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Início", array(), "NovosgaReportsBundle");
        echo "</th>
            <th title=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Hora do Fim do atendimento", array(), "NovosgaReportsBundle");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Fim", array(), "NovosgaReportsBundle");
        echo "</th>
            <th title=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Tempo de duração do atendimento (Fim - Início)", array(), "NovosgaReportsBundle");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Duração", array(), "NovosgaReportsBundle");
        echo "</th>
            <th title=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Tempo de permanência no local (Fim - Chegada)", array(), "NovosgaReportsBundle");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Permanência", array(), "NovosgaReportsBundle");
        echo "</th>
            <th title=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Serviço escolhido na triagem", array(), "NovosgaReportsBundle");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Serviço Triado", array(), "NovosgaReportsBundle");
        echo "</th>
            <th>";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Atendente", array(), "NovosgaReportsBundle");
        echo "</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["relatorio"] ?? null), "dados", array()), "atendimentos", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 23
            echo "            <tr>
                <td rowspan=\"3\" class=\"vam tac\">";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["a"], "senha", array()), "sigla", array()), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["a"], "senha", array()), "numero", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "dataChegada", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, ((twig_test_empty(twig_get_attribute($this->env, $this->source, $context["a"], "dataChamada", array()))) ? ("") : (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "dataChamada", array()), "H:i:s"))), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, ((twig_test_empty(twig_get_attribute($this->env, $this->source, $context["a"], "dataInicio", array()))) ? ("") : (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "dataInicio", array()), "H:i:s"))), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, ((twig_test_empty(twig_get_attribute($this->env, $this->source, $context["a"], "dataFim", array()))) ? ("") : (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "dataFim", array()), "H:i:s"))), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "tempoAtendimento", array()), "%H:%I:%S"), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "tempoPermanencia", array()), "%H:%I:%S"), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["a"], "servico", array()), "nome", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["a"], "usuario", array()), "login", array()), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <td colspan=\"9\">
                    Observação: ";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "observacao", array()), "html", null, true);
            echo "
                </td>
            </tr>
            <tr>
                <td colspan=\"9\" class=\"sub-table\">
                    <table class=\"table table-bordered\">
                        <thead>
                            <tr>
                                <th>";
            // line 44
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Serviços realizados", array(), "NovosgaReportsBundle");
            echo "</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["a"], "codificados", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                // line 49
                echo "                            <tr>
                                <td>";
                // line 50
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["c"], "servico", array()), "nome", array()), "html", null, true);
                echo "</td>
                            </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "                        </tbody>
                    </table>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "    </tbody>
    <tfoot>
        <tr>
            <td colspan=\"9\">
                <strong>Total: ";
        // line 62
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["relatorio"] ?? null), "dados", array()), "atendimentos", array())), "html", null, true);
        echo "</strong>
            </td>
        </tr>
    </tfoot>
</table>";
    }

    public function getTemplateName()
    {
        return "NovosgaReportsBundle:relatorios:atendimentos_concluidos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 62,  181 => 58,  171 => 53,  162 => 50,  159 => 49,  155 => 48,  148 => 44,  137 => 36,  130 => 32,  126 => 31,  122 => 30,  118 => 29,  114 => 28,  110 => 27,  106 => 26,  102 => 25,  97 => 24,  94 => 23,  90 => 22,  83 => 18,  77 => 17,  71 => 16,  65 => 15,  59 => 14,  53 => 13,  47 => 12,  43 => 11,  39 => 10,  31 => 5,  27 => 4,  23 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "NovosgaReportsBundle:relatorios:atendimentos_concluidos.html.twig", "/var/www/html/sgf/novosga/modules/novosga/reports-bundle/Resources/views/relatorios/atendimentos_concluidos.html.twig");
    }
}
