<?php

/* NovosgaReportsBundle:relatorios:servicos_disponiveis_unidade.html.twig */
class __TwigTemplate_bd55f19d42479a966d973bfe548295ac5d40e1b54350c529aacf99f14ca0c2b0 extends Twig_Template
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
</div>
<table class=\"table table-bordered table-striped\">
    <thead class=\"thead-light\">
        <tr>
            <th>";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Sigla", array(), "NovosgaReportsBundle");
        echo "</th>
            <th>";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Serviço", array(), "NovosgaReportsBundle");
        echo "</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["relatorio"] ?? null), "dados", array()), "servicos", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["su"]) {
            // line 15
            echo "            <tr>
                <td class=\"w25 center\">";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["su"], "sigla", array()), "html", null, true);
            echo "</td>
                <td class=\"strong\">
                    ";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["su"], "servico", array()), "nome", array()), "html", null, true);
            echo "
                    ";
            // line 19
            if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["su"], "servico", array()), "subServicos", array()))) {
                // line 20
                echo "                        <ul>
                            ";
                // line 21
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["su"], "servico", array()), "subServicos", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["subServico"]) {
                    // line 22
                    echo "                                <li>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subServico"], "nome", array()), "html", null, true);
                    echo "</li>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subServico'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 24
                echo "                        </ul>
                    ";
            }
            // line 26
            echo "                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['su'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "    </tbody>
</table>";
    }

    public function getTemplateName()
    {
        return "NovosgaReportsBundle:relatorios:servicos_disponiveis_unidade.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 29,  84 => 26,  80 => 24,  71 => 22,  67 => 21,  64 => 20,  62 => 19,  58 => 18,  53 => 16,  50 => 15,  46 => 14,  39 => 10,  35 => 9,  27 => 4,  23 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "NovosgaReportsBundle:relatorios:servicos_disponiveis_unidade.html.twig", "/var/www/html/sgf/novosga/modules/novosga/reports-bundle/Resources/views/relatorios/servicos_disponiveis_unidade.html.twig");
    }
}
