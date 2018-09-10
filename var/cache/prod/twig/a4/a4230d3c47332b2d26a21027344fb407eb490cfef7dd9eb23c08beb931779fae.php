<?php

/* NovosgaReportsBundle:relatorios:tempo_medio_atendentes.html.twig */
class __TwigTemplate_edea3fb37215f974386db2f6517ef81fd856f0672da7c984ef45ba5fde1229e6 extends Twig_Template
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["relatorio"] ?? null), "dados", array()), "atendentes", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["dado"]) {
            // line 28
            echo "            ";
            $context["total"] = (($context["total"] ?? null) + twig_get_attribute($this->env, $this->source, $context["dado"], "total", array()));
            // line 29
            echo "            ";
            $context["espera"] = (($context["espera"] ?? null) + twig_get_attribute($this->env, $this->source, $context["dado"], "espera", array()));
            // line 30
            echo "            ";
            $context["deslocamento"] = (($context["deslocamento"] ?? null) + twig_get_attribute($this->env, $this->source, $context["dado"], "deslocamento", array()));
            // line 31
            echo "            ";
            $context["deslocamento"] = (($context["deslocamento"] ?? null) + twig_get_attribute($this->env, $this->source, $context["dado"], "deslocamento", array()));
            // line 32
            echo "            ";
            $context["atendimento"] = (($context["atendimento"] ?? null) + twig_get_attribute($this->env, $this->source, $context["dado"], "atendimento", array()));
            // line 33
            echo "            ";
            $context["tempoTotal"] = (($context["tempoTotal"] ?? null) + twig_get_attribute($this->env, $this->source, $context["dado"], "tempoTotal", array()));
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
        echo twig_escape_filter($this->env, ($context["total"] ?? null), "html", null, true);
        echo "</td>
            <td>";
        // line 48
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->extensions['Novosga\ReportsBundle\Twig\ReportExtension']->secToDateFilter(($context["espera"] ?? null)), "H:i:s"), "html", null, true);
        echo "</td>
            <td>";
        // line 49
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->extensions['Novosga\ReportsBundle\Twig\ReportExtension']->secToDateFilter(($context["deslocamento"] ?? null)), "H:i:s"), "html", null, true);
        echo "</td>
            <td>";
        // line 50
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->extensions['Novosga\ReportsBundle\Twig\ReportExtension']->secToDateFilter(($context["atendimento"] ?? null)), "H:i:s"), "html", null, true);
        echo "</td>
            <td>";
        // line 51
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->extensions['Novosga\ReportsBundle\Twig\ReportExtension']->secToDateFilter(($context["tempoTotal"] ?? null)), "H:i:s"), "html", null, true);
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
        return array (  189 => 60,  183 => 59,  177 => 58,  172 => 56,  164 => 51,  160 => 50,  156 => 49,  152 => 48,  148 => 47,  142 => 43,  133 => 40,  129 => 39,  125 => 38,  121 => 37,  117 => 36,  113 => 35,  110 => 34,  107 => 33,  104 => 32,  101 => 31,  98 => 30,  95 => 29,  92 => 28,  88 => 27,  81 => 23,  75 => 22,  69 => 21,  63 => 20,  59 => 19,  55 => 18,  49 => 14,  47 => 13,  45 => 12,  43 => 11,  41 => 10,  39 => 9,  37 => 8,  31 => 5,  27 => 4,  23 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "NovosgaReportsBundle:relatorios:tempo_medio_atendentes.html.twig", "/var/www/html/sgf/novosga/modules/novosga/reports-bundle/Resources/views/relatorios/tempo_medio_atendentes.html.twig");
    }
}
