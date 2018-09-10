<?php

/* NovosgaReportsBundle:relatorios:servicos_disponiveis_global.html.twig */
class __TwigTemplate_0dbbdeb48f0e5f074372b097bbf003cc413ae59e24c763bd1445df58f9fa4e91 extends Twig_Template
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
<table class=\"table table-bordered\">
    <thead class=\"thead-light\">
        <tr>
            <th>";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Serviço", array(), "NovosgaReportsBundle");
        echo "</th>
            <th>";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Situação", array(), "NovosgaReportsBundle");
        echo "</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["relatorio"] ?? null), "dados", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["servico"]) {
            // line 12
            echo "            <tr>
                <td class=\"strong\">";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["servico"], "nome", array()), "html", null, true);
            echo "</td>
                <td class=\"w100 center\">
                    ";
            // line 15
            if (twig_get_attribute($this->env, $this->source, $context["servico"], "ativo", array())) {
                // line 16
                echo "                        <span class=\"status-active\">";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Ativo", array(), "NovosgaReportsBundle");
                echo "</span>
                    ";
            } else {
                // line 18
                echo "                        <span class=\"status-inactive\">";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Inativo", array(), "NovosgaReportsBundle");
                echo "</span>
                    ";
            }
            // line 20
            echo "                </td>
            </tr>
            ";
            // line 22
            if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["servico"], "subServicos", array()))) {
                // line 23
                echo "                <tr class=\"sub-table\">
                    <td colspan=\"2\">
                        <table class=\"table table-bordered table-striped subservicos\">
                            <thead>
                                <tr>
                                    <th>";
                // line 28
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Subserviço", array(), "NovosgaReportsBundle");
                echo "</th>
                                    <th>";
                // line 29
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Situação", array(), "NovosgaReportsBundle");
                echo "</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
                // line 33
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["servico"], "subServicos", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["subServico"]) {
                    // line 34
                    echo "                                <tr>
                                    <td class=\"nome\">";
                    // line 35
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subServico"], "nome", array()), "html", null, true);
                    echo "</td>
                                    <td class=\"w100 center\">
                                        ";
                    // line 37
                    if (twig_get_attribute($this->env, $this->source, $context["subServico"], "ativo", array())) {
                        // line 38
                        echo "                                            <span class=\"status-active\">";
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Ativo", array(), "NovosgaReportsBundle");
                        echo "</span>
                                        ";
                    } else {
                        // line 40
                        echo "                                            <span class=\"status-inactive\">";
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Inativo", array(), "NovosgaReportsBundle");
                        echo "</span>
                                        ";
                    }
                    // line 42
                    echo "                                    </td>
                                </tr>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subServico'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 45
                echo "                            </tbody>
                        </table>
                    </td>
                </tr>
            ";
            }
            // line 50
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['servico'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "    </tbody>
</table>";
    }

    public function getTemplateName()
    {
        return "NovosgaReportsBundle:relatorios:servicos_disponiveis_global.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 51,  131 => 50,  124 => 45,  116 => 42,  110 => 40,  104 => 38,  102 => 37,  97 => 35,  94 => 34,  90 => 33,  83 => 29,  79 => 28,  72 => 23,  70 => 22,  66 => 20,  60 => 18,  54 => 16,  52 => 15,  47 => 13,  44 => 12,  40 => 11,  33 => 7,  29 => 6,  23 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "NovosgaReportsBundle:relatorios:servicos_disponiveis_global.html.twig", "/var/www/html/sgf/novosga/modules/novosga/reports-bundle/Resources/views/relatorios/servicos_disponiveis_global.html.twig");
    }
}
