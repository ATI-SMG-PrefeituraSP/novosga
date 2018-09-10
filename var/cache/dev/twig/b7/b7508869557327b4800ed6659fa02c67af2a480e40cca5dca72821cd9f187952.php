<?php

/* NovosgaReportsBundle:relatorios:atendimentos_status.html.twig */
class __TwigTemplate_dbc03d99e4894aac17cbc30520426b09d66a2a788a05e1523547943f0bdd211e extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NovosgaReportsBundle:relatorios:atendimentos_status.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NovosgaReportsBundle:relatorios:atendimentos_status.html.twig"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Cliente", array(), "NovosgaReportsBundle");
        echo "</th>
            <th>";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Data", array(), "NovosgaReportsBundle");
        echo "</th>
            <th title=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Hora de Chamada", array(), "NovosgaReportsBundle");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Chamada", array(), "NovosgaReportsBundle");
        echo "</th>
            <th title=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Hora do Início do atendimento", array(), "NovosgaReportsBundle");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Início", array(), "NovosgaReportsBundle");
        echo "</th>
            <th title=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Hora do Fim do atendimento", array(), "NovosgaReportsBundle");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Fim", array(), "NovosgaReportsBundle");
        echo "</th>
            <th title=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Serviço escolhido na triagem", array(), "NovosgaReportsBundle");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Serviço Triado", array(), "NovosgaReportsBundle");
        echo "</th>
            <th>";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Status", array(), "NovosgaReportsBundle");
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
                <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["a"], "senha", array()), "sigla", array()), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["a"], "senha", array()), "numero", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["a"], "cliente", array())) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["a"], "cliente", array()), "nome", array())) : ("")), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "dataChegada", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, ((twig_test_empty(twig_get_attribute($this->env, $this->source, $context["a"], "dataChamada", array()))) ? ("") : (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "dataChamada", array()), "H:i:s"))), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, ((twig_test_empty(twig_get_attribute($this->env, $this->source, $context["a"], "dataInicio", array()))) ? ("") : (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "dataInicio", array()), "H:i:s"))), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, ((twig_test_empty(twig_get_attribute($this->env, $this->source, $context["a"], "dataFim", array()))) ? ("") : (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "dataFim", array()), "H:i:s"))), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["a"], "servico", array()), "nome", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "status", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            if (twig_get_attribute($this->env, $this->source, $context["a"], "usuario", array())) {
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["a"], "usuario", array()), "login", array()), "html", null, true);
            }
            // line 36
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "    </tbody>
    <tfoot>
        <tr>
            <td colspan=\"9\">
                <strong>Total: ";
        // line 43
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["relatorio"]) || array_key_exists("relatorio", $context) ? $context["relatorio"] : (function () { throw new Twig_Error_Runtime('Variable "relatorio" does not exist.', 43, $this->source); })()), "dados", array()), "atendimentos", array())), "html", null, true);
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
        return "NovosgaReportsBundle:relatorios:atendimentos_status.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 43,  145 => 39,  137 => 36,  134 => 34,  132 => 33,  128 => 31,  124 => 30,  120 => 29,  116 => 28,  112 => 27,  108 => 26,  104 => 25,  99 => 24,  96 => 23,  92 => 22,  85 => 18,  81 => 17,  75 => 16,  69 => 15,  63 => 14,  57 => 13,  53 => 12,  49 => 11,  45 => 10,  37 => 5,  33 => 4,  29 => 2,);
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
            <th>{% trans %}Cliente{% endtrans %}</th>
            <th>{% trans %}Data{% endtrans %}</th>
            <th title=\"{% trans %}Hora de Chamada{% endtrans %}\">{% trans %}Chamada{% endtrans %}</th>
            <th title=\"{% trans %}Hora do Início do atendimento{% endtrans %}\">{% trans %}Início{% endtrans %}</th>
            <th title=\"{% trans %}Hora do Fim do atendimento{% endtrans %}\">{% trans %}Fim{% endtrans %}</th>
            <th title=\"{% trans %}Serviço escolhido na triagem{% endtrans %}\">{% trans %}Serviço Triado{% endtrans %}</th>
            <th>{% trans %}Status{% endtrans %}</th>
            <th>{% trans %}Atendente{% endtrans %}</th>
        </tr>
    </thead>
    <tbody>
        {% for a in relatorio.dados.atendimentos %}
            <tr>
                <td>{{ a.senha.sigla }}{{ a.senha.numero }}</td>
                <td>{{ a.cliente ? a.cliente.nome : '' }}</td>
                <td>{{ a.dataChegada|date('d/m/Y') }}</td>
                <td>{{ a.dataChamada is empty ? \"\" : a.dataChamada|date('H:i:s') }}</td>
                <td>{{ a.dataInicio is empty ? \"\" : a.dataInicio|date('H:i:s') }}</td>
                <td>{{ a.dataFim is empty ? \"\" : a.dataFim|date('H:i:s') }}</td>
                <td>{{ a.servico.nome }}</td>
                <td>{{ a.status }}</td>
                <td>
                    {%- if a.usuario -%}
                        {{ a.usuario.login }}
                    {%- endif -%}
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
</table>", "NovosgaReportsBundle:relatorios:atendimentos_status.html.twig", "/var/www/html/sgf/novosga/modules/novosga/reports-bundle/Resources/views/relatorios/atendimentos_status.html.twig");
    }
}
