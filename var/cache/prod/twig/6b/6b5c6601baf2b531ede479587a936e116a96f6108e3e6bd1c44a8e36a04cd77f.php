<?php

/* NovosgaReportsBundle:relatorios:servicos_realizados.html.twig */
class __TwigTemplate_2e2b0bd0a95de7e8b3fed2b467cad231091c60d46eebb19538dead0dfad46ed7 extends Twig_Template
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Serviço", array(), "NovosgaReportsBundle");
        echo "</th>
            <th>";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Total", array(), "NovosgaReportsBundle");
        echo "</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 15
        $context["total"] = 0;
        // line 16
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["relatorio"] ?? null), "dados", array()), "servicos", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 17
            echo "            <tr>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "nome", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "total", array()), "html", null, true);
            echo "</td>
                ";
            // line 20
            $context["total"] = (($context["total"] ?? null) + twig_get_attribute($this->env, $this->source, $context["s"], "total", array()));
            // line 21
            echo "            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "    </tbody>
    <tfoot>
        <tr>
            <td></td>
            <td>
                <strong>Total: ";
        // line 28
        echo twig_escape_filter($this->env, ($context["total"] ?? null), "html", null, true);
        echo "</strong>
            </td>
        </tr>
    </tfoot>
</table>";
    }

    public function getTemplateName()
    {
        return "NovosgaReportsBundle:relatorios:servicos_realizados.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 28,  77 => 23,  70 => 21,  68 => 20,  64 => 19,  60 => 18,  57 => 17,  52 => 16,  50 => 15,  43 => 11,  39 => 10,  31 => 5,  27 => 4,  23 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "NovosgaReportsBundle:relatorios:servicos_realizados.html.twig", "/var/www/html/sgf/novosga/modules/novosga/reports-bundle/Resources/views/relatorios/servicos_realizados.html.twig");
    }
}
