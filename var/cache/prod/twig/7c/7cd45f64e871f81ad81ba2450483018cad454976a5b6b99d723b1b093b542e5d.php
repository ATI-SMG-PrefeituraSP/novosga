<?php

/* NovosgaReportsBundle:relatorios:atendimentos_status.html.twig */
class __TwigTemplate_d56a8d4774521cb4a025a44cee1cc9d038a5aa37bd3cd07a4e931af35c025d28 extends Twig_Template
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["relatorio"] ?? null), "dados", array()), "atendimentos", array()));
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
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["relatorio"] ?? null), "dados", array()), "atendimentos", array())), "html", null, true);
        echo "</strong>
            </td>
        </tr>
    </tfoot>
</table>";
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
        return array (  145 => 43,  139 => 39,  131 => 36,  128 => 34,  126 => 33,  122 => 31,  118 => 30,  114 => 29,  110 => 28,  106 => 27,  102 => 26,  98 => 25,  93 => 24,  90 => 23,  86 => 22,  79 => 18,  75 => 17,  69 => 16,  63 => 15,  57 => 14,  51 => 13,  47 => 12,  43 => 11,  39 => 10,  31 => 5,  27 => 4,  23 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "NovosgaReportsBundle:relatorios:atendimentos_status.html.twig", "/var/www/html/sgf/novosga/modules/novosga/reports-bundle/Resources/views/relatorios/atendimentos_status.html.twig");
    }
}
