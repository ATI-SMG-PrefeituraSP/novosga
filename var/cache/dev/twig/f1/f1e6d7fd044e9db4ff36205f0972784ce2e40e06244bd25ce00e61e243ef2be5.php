<?php

/* NovosgaReportsBundle:relatorios:atendimentos_concluidos.html.twig */
class __TwigTemplate_0cac229619f0e6edab425213c4ba45b1a1a73c45d844278d9d1225b36372d8ef extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NovosgaReportsBundle:relatorios:atendimentos_concluidos.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NovosgaReportsBundle:relatorios:atendimentos_concluidos.html.twig"));

        // line 2
        echo "
<div class=\"header\">
    <h2>";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["relatorio"]) || array_key_exists("relatorio", $context) ? $context["relatorio"] : (function () { throw new Twig_Error_Runtime('Variable "relatorio" does not exist.', 4, $this->source); })()), "dados", array()), "unidade", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Período de %dataInicial% a %dataFinal%", array("%dataInicial%" => (isset($context["dataInicial"]) || array_key_exists("dataInicial", $context) ? $context["dataInicial"] : (function () { throw new Twig_Error_Runtime('Variable "dataInicial" does not exist.', 5, $this->source); })()), "%dataFinal%" => (isset($context["dataFinal"]) || array_key_exists("dataFinal", $context) ? $context["dataFinal"] : (function () { throw new Twig_Error_Runtime('Variable "dataFinal" does not exist.', 5, $this->source); })())), "app");
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["relatorio"]) || array_key_exists("relatorio", $context) ? $context["relatorio"] : (function () { throw new Twig_Error_Runtime('Variable "relatorio" does not exist.', 22, $this->source); })()), "dados", array()), "atendimentos", array()));
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
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["relatorio"]) || array_key_exists("relatorio", $context) ? $context["relatorio"] : (function () { throw new Twig_Error_Runtime('Variable "relatorio" does not exist.', 62, $this->source); })()), "dados", array()), "atendimentos", array())), "html", null, true);
        echo "</strong>
            </td>
        </tr>
    </tfoot>
</table>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  193 => 62,  187 => 58,  177 => 53,  168 => 50,  165 => 49,  161 => 48,  154 => 44,  143 => 36,  136 => 32,  132 => 31,  128 => 30,  124 => 29,  120 => 28,  116 => 27,  112 => 26,  108 => 25,  103 => 24,  100 => 23,  96 => 22,  89 => 18,  83 => 17,  77 => 16,  71 => 15,  65 => 14,  59 => 13,  53 => 12,  49 => 11,  45 => 10,  37 => 5,  33 => 4,  29 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'NovosgaReportsBundle' %}

<div class=\"header\">
    <h2>{{ relatorio.dados.unidade }}</h2>
    <p>{% trans with {'%dataInicial%': dataInicial, '%dataFinal%': dataFinal} from \"app\" %}Período de %dataInicial% a %dataFinal%{% endtrans %}</p>
</div>
<table class=\"table table-bordered table-striped\">
    <thead class=\"thead-light\">
        <tr>
            <th>{{ 'label.ticket'|trans }}</th>
            <th>{% trans %}Data{% endtrans %}</th>
            <th title=\"{% trans %}Hora de Chamada{% endtrans %}\">{% trans %}Chamada{% endtrans %}</th>
            <th title=\"{% trans %}Hora do Início do atendimento{% endtrans %}\">{% trans %}Início{% endtrans %}</th>
            <th title=\"{% trans %}Hora do Fim do atendimento{% endtrans %}\">{% trans %}Fim{% endtrans %}</th>
            <th title=\"{% trans %}Tempo de duração do atendimento (Fim - Início){% endtrans %}\">{% trans %}Duração{% endtrans %}</th>
            <th title=\"{% trans %}Tempo de permanência no local (Fim - Chegada){% endtrans %}\">{% trans %}Permanência{% endtrans %}</th>
            <th title=\"{% trans %}Serviço escolhido na triagem{% endtrans %}\">{% trans %}Serviço Triado{% endtrans %}</th>
            <th>{% trans %}Atendente{% endtrans %}</th>
        </tr>
    </thead>
    <tbody>
        {% for a in relatorio.dados.atendimentos %}
            <tr>
                <td rowspan=\"3\" class=\"vam tac\">{{ a.senha.sigla }}{{ a.senha.numero }}</td>
                <td>{{ a.dataChegada|date('d/m/Y') }}</td>
                <td>{{ a.dataChamada is empty ? \"\" : a.dataChamada|date('H:i:s') }}</td>
                <td>{{ a.dataInicio is empty ? \"\" : a.dataInicio|date('H:i:s') }}</td>
                <td>{{ a.dataFim is empty ? \"\" : a.dataFim|date('H:i:s') }}</td>
                <td>{{ a.tempoAtendimento|date('%H:%I:%S') }}</td>
                <td>{{ a.tempoPermanencia|date('%H:%I:%S') }}</td>
                <td>{{ a.servico.nome }}</td>
                <td>{{ a.usuario.login }}</td>
            </tr>
            <tr>
                <td colspan=\"9\">
                    Observação: {{ a.observacao }}
                </td>
            </tr>
            <tr>
                <td colspan=\"9\" class=\"sub-table\">
                    <table class=\"table table-bordered\">
                        <thead>
                            <tr>
                                <th>{% trans %}Serviços realizados{% endtrans %}</th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for c in a.codificados %}
                            <tr>
                                <td>{{c.servico.nome}}</td>
                            </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                </td>
            </tr>
        {% endfor %}
    </tbody>
    <tfoot>
        <tr>
            <td colspan=\"9\">
                <strong>Total: {{ relatorio.dados.atendimentos|length }}</strong>
            </td>
        </tr>
    </tfoot>
</table>", "NovosgaReportsBundle:relatorios:atendimentos_concluidos.html.twig", "/var/www/html/sgf/novosga/modules/novosga/reports-bundle/Resources/views/relatorios/atendimentos_concluidos.html.twig");
    }
}
