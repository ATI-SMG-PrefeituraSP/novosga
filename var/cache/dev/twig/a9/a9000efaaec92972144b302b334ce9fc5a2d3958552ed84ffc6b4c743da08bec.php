<?php

/* NovosgaReportsBundle:relatorios:tempo_medio_atendentes.html.twig */
class __TwigTemplate_80f96650c9530b9e9f180ce1d21ce4946e8d55f0951926ecff25f2d40b96eebc extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NovosgaReportsBundle:relatorios:tempo_medio_atendentes.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NovosgaReportsBundle:relatorios:tempo_medio_atendentes.html.twig"));

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

";
        // line 8
        $context["total"] = 0;
        // line 9
        $context["espera"] = 0;
        // line 10
        $context["deslocamento"] = 0;
        // line 11
        $context["deslocamento"] = 0;
        // line 12
        $context["atendimento"] = 0;
        // line 13
        $context["tempoTotal"] = 0;
        // line 14
        echo "
<table class=\"table table-bordered table-striped\">
    <thead class=\"thead-light\">
        <tr>
            <th>";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Usuário", array(), "NovosgaReportsBundle");
        echo "</th>
            <th>";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Atendimentos", array(), "NovosgaReportsBundle");
        echo "</th>
            <th title=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Tempo médio de espera", array(), "NovosgaReportsBundle");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("TME", array(), "NovosgaReportsBundle");
        echo "</th>
            <th title=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Tempo médio de deslocamento", array(), "NovosgaReportsBundle");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("TMD", array(), "NovosgaReportsBundle");
        echo "</th>
            <th title=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Tempo médio de atendimento", array(), "NovosgaReportsBundle");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("TMA", array(), "NovosgaReportsBundle");
        echo "</th>
            <th>";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Tempo total", array(), "NovosgaReportsBundle");
        echo "</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["relatorio"]) || array_key_exists("relatorio", $context) ? $context["relatorio"] : (function () { throw new Twig_Error_Runtime('Variable "relatorio" does not exist.', 27, $this->source); })()), "dados", array()), "atendentes", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["dado"]) {
            // line 28
            echo "            ";
            $context["total"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new Twig_Error_Runtime('Variable "total" does not exist.', 28, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["dado"], "total", array()));
            // line 29
            echo "            ";
            $context["espera"] = ((isset($context["espera"]) || array_key_exists("espera", $context) ? $context["espera"] : (function () { throw new Twig_Error_Runtime('Variable "espera" does not exist.', 29, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["dado"], "espera", array()));
            // line 30
            echo "            ";
            $context["deslocamento"] = ((isset($context["deslocamento"]) || array_key_exists("deslocamento", $context) ? $context["deslocamento"] : (function () { throw new Twig_Error_Runtime('Variable "deslocamento" does not exist.', 30, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["dado"], "deslocamento", array()));
            // line 31
            echo "            ";
            $context["deslocamento"] = ((isset($context["deslocamento"]) || array_key_exists("deslocamento", $context) ? $context["deslocamento"] : (function () { throw new Twig_Error_Runtime('Variable "deslocamento" does not exist.', 31, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["dado"], "deslocamento", array()));
            // line 32
            echo "            ";
            $context["atendimento"] = ((isset($context["atendimento"]) || array_key_exists("atendimento", $context) ? $context["atendimento"] : (function () { throw new Twig_Error_Runtime('Variable "atendimento" does not exist.', 32, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["dado"], "atendimento", array()));
            // line 33
            echo "            ";
            $context["tempoTotal"] = ((isset($context["tempoTotal"]) || array_key_exists("tempoTotal", $context) ? $context["tempoTotal"] : (function () { throw new Twig_Error_Runtime('Variable "tempoTotal" does not exist.', 33, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["dado"], "tempoTotal", array()));
            // line 34
            echo "            <tr>
                <td class=\"strong\">";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dado"], "atendente", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dado"], "total", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->extensions['Novosga\ReportsBundle\Twig\ReportExtension']->secToDateFilter(twig_get_attribute($this->env, $this->source, $context["dado"], "espera", array())), "H:i:s"), "html", null, true);
            echo "</td>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->extensions['Novosga\ReportsBundle\Twig\ReportExtension']->secToDateFilter(twig_get_attribute($this->env, $this->source, $context["dado"], "deslocamento", array())), "H:i:s"), "html", null, true);
            echo "</td>
                <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->extensions['Novosga\ReportsBundle\Twig\ReportExtension']->secToDateFilter(twig_get_attribute($this->env, $this->source, $context["dado"], "atendimento", array())), "H:i:s"), "html", null, true);
            echo "</td>
                <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->extensions['Novosga\ReportsBundle\Twig\ReportExtension']->secToDateFilter(twig_get_attribute($this->env, $this->source, $context["dado"], "tempoTotal", array())), "H:i:s"), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dado'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "    </tbody>
    <tfoot>
        <tr>
            <td class=\"strong\">&nbsp;</td>
            <td>";
        // line 47
        echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new Twig_Error_Runtime('Variable "total" does not exist.', 47, $this->source); })()), "html", null, true);
        echo "</td>
            <td>";
        // line 48
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->extensions['Novosga\ReportsBundle\Twig\ReportExtension']->secToDateFilter((isset($context["espera"]) || array_key_exists("espera", $context) ? $context["espera"] : (function () { throw new Twig_Error_Runtime('Variable "espera" does not exist.', 48, $this->source); })())), "H:i:s"), "html", null, true);
        echo "</td>
            <td>";
        // line 49
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->extensions['Novosga\ReportsBundle\Twig\ReportExtension']->secToDateFilter((isset($context["deslocamento"]) || array_key_exists("deslocamento", $context) ? $context["deslocamento"] : (function () { throw new Twig_Error_Runtime('Variable "deslocamento" does not exist.', 49, $this->source); })())), "H:i:s"), "html", null, true);
        echo "</td>
            <td>";
        // line 50
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->extensions['Novosga\ReportsBundle\Twig\ReportExtension']->secToDateFilter((isset($context["atendimento"]) || array_key_exists("atendimento", $context) ? $context["atendimento"] : (function () { throw new Twig_Error_Runtime('Variable "atendimento" does not exist.', 50, $this->source); })())), "H:i:s"), "html", null, true);
        echo "</td>
            <td>";
        // line 51
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->extensions['Novosga\ReportsBundle\Twig\ReportExtension']->secToDateFilter((isset($context["tempoTotal"]) || array_key_exists("tempoTotal", $context) ? $context["tempoTotal"] : (function () { throw new Twig_Error_Runtime('Variable "tempoTotal" does not exist.', 51, $this->source); })())), "H:i:s"), "html", null, true);
        echo "</td>
        </tr>
    </tfoot>
</table>
<div>
    <h4>";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Legenda", array(), "NovosgaReportsBundle");
        echo "</h4>
    <ul>
        <li><strong>";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("TME", array(), "NovosgaReportsBundle");
        echo "</strong>: ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Tempo médio de espera", array(), "NovosgaReportsBundle");
        echo "</li>
        <li><strong>";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("TMD", array(), "NovosgaReportsBundle");
        echo "</strong>: ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Tempo médio de deslocamento", array(), "NovosgaReportsBundle");
        echo "</li>
        <li><strong>";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("TMA", array(), "NovosgaReportsBundle");
        echo "</strong>: ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Tempo médio de atendimento", array(), "NovosgaReportsBundle");
        echo "</li>
    </ul>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "NovosgaReportsBundle:relatorios:tempo_medio_atendentes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 60,  189 => 59,  183 => 58,  178 => 56,  170 => 51,  166 => 50,  162 => 49,  158 => 48,  154 => 47,  148 => 43,  139 => 40,  135 => 39,  131 => 38,  127 => 37,  123 => 36,  119 => 35,  116 => 34,  113 => 33,  110 => 32,  107 => 31,  104 => 30,  101 => 29,  98 => 28,  94 => 27,  87 => 23,  81 => 22,  75 => 21,  69 => 20,  65 => 19,  61 => 18,  55 => 14,  53 => 13,  51 => 12,  49 => 11,  47 => 10,  45 => 9,  43 => 8,  37 => 5,  33 => 4,  29 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'NovosgaReportsBundle' %}

<div class=\"header\">
    <h2>{{ relatorio.dados.unidade }}</h2>
    <p>{% trans with {'%dataInicial%': dataInicial, '%dataFinal%': dataFinal} from \"app\" %}Período de %dataInicial% a %dataFinal%{% endtrans %}</p>
</div>

{% set total = 0 %}
{% set espera = 0 %}
{% set deslocamento = 0 %}
{% set deslocamento = 0 %}
{% set atendimento = 0 %}
{% set tempoTotal = 0 %}

<table class=\"table table-bordered table-striped\">
    <thead class=\"thead-light\">
        <tr>
            <th>{% trans %}Usuário{% endtrans %}</th>
            <th>{% trans %}Atendimentos{% endtrans %}</th>
            <th title=\"{% trans %}Tempo médio de espera{% endtrans %}\">{% trans %}TME{% endtrans %}</th>
            <th title=\"{% trans %}Tempo médio de deslocamento{% endtrans %}\">{% trans %}TMD{% endtrans %}</th>
            <th title=\"{% trans %}Tempo médio de atendimento{% endtrans %}\">{% trans %}TMA{% endtrans %}</th>
            <th>{% trans %}Tempo total{% endtrans %}</th>
        </tr>
    </thead>
    <tbody>
        {% for dado in relatorio.dados.atendentes %}
            {% set total = total + dado.total %}
            {% set espera = espera + dado.espera %}
            {% set deslocamento = deslocamento + dado.deslocamento %}
            {% set deslocamento = deslocamento + dado.deslocamento %}
            {% set atendimento = atendimento + dado.atendimento %}
            {% set tempoTotal = tempoTotal + dado.tempoTotal %}
            <tr>
                <td class=\"strong\">{{ dado.atendente }}</td>
                <td>{{ dado.total }}</td>
                <td>{{ dado.espera|secToDate|date('H:i:s') }}</td>
                <td>{{ dado.deslocamento|secToDate|date('H:i:s') }}</td>
                <td>{{ dado.atendimento|secToDate|date('H:i:s') }}</td>
                <td>{{ dado.tempoTotal|secToDate|date('H:i:s') }}</td>
            </tr>
        {% endfor %}
    </tbody>
    <tfoot>
        <tr>
            <td class=\"strong\">&nbsp;</td>
            <td>{{ total }}</td>
            <td>{{ espera|secToDate|date('H:i:s') }}</td>
            <td>{{ deslocamento|secToDate|date('H:i:s') }}</td>
            <td>{{ atendimento|secToDate|date('H:i:s') }}</td>
            <td>{{ tempoTotal|secToDate|date('H:i:s') }}</td>
        </tr>
    </tfoot>
</table>
<div>
    <h4>{% trans %}Legenda{% endtrans %}</h4>
    <ul>
        <li><strong>{% trans %}TME{% endtrans %}</strong>: {% trans %}Tempo médio de espera{% endtrans %}</li>
        <li><strong>{% trans %}TMD{% endtrans %}</strong>: {% trans %}Tempo médio de deslocamento{% endtrans %}</li>
        <li><strong>{% trans %}TMA{% endtrans %}</strong>: {% trans %}Tempo médio de atendimento{% endtrans %}</li>
    </ul>
</div>", "NovosgaReportsBundle:relatorios:tempo_medio_atendentes.html.twig", "/var/www/html/sgf/novosga/modules/novosga/reports-bundle/Resources/views/relatorios/tempo_medio_atendentes.html.twig");
    }
}
