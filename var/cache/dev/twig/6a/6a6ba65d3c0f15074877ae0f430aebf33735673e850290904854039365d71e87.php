<?php

/* NovosgaReportsBundle:relatorios:servicos_disponiveis_unidade.html.twig */
class __TwigTemplate_1aef298729bbcacd2a15a43b40d14e822c3235e93dc01bddea983a972fda2bde extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NovosgaReportsBundle:relatorios:servicos_disponiveis_unidade.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NovosgaReportsBundle:relatorios:servicos_disponiveis_unidade.html.twig"));

        // line 2
        echo "
<div class=\"header\">
    <h2>";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["relatorio"]) || array_key_exists("relatorio", $context) ? $context["relatorio"] : (function () { throw new Twig_Error_Runtime('Variable "relatorio" does not exist.', 4, $this->source); })()), "dados", array()), "unidade", array()), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["relatorio"]) || array_key_exists("relatorio", $context) ? $context["relatorio"] : (function () { throw new Twig_Error_Runtime('Variable "relatorio" does not exist.', 14, $this->source); })()), "dados", array()), "servicos", array()));
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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  98 => 29,  90 => 26,  86 => 24,  77 => 22,  73 => 21,  70 => 20,  68 => 19,  64 => 18,  59 => 16,  56 => 15,  52 => 14,  45 => 10,  41 => 9,  33 => 4,  29 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'NovosgaReportsBundle' %}

<div class=\"header\">
    <h2>{{ relatorio.dados.unidade }}</h2>
</div>
<table class=\"table table-bordered table-striped\">
    <thead class=\"thead-light\">
        <tr>
            <th>{% trans %}Sigla{% endtrans %}</th>
            <th>{% trans %}Serviço{% endtrans %}</th>
        </tr>
    </thead>
    <tbody>
        {% for su in relatorio.dados.servicos %}
            <tr>
                <td class=\"w25 center\">{{ su.sigla }}</td>
                <td class=\"strong\">
                    {{ su.servico.nome }}
                    {% if su.servico.subServicos|length %}
                        <ul>
                            {% for subServico in su.servico.subServicos %}
                                <li>{{ subServico.nome }}</li>
                            {% endfor %}
                        </ul>
                    {% endif %}
                </td>
            </tr>
        {% endfor %}
    </tbody>
</table>", "NovosgaReportsBundle:relatorios:servicos_disponiveis_unidade.html.twig", "/var/www/html/sgf/novosga/modules/novosga/reports-bundle/Resources/views/relatorios/servicos_disponiveis_unidade.html.twig");
    }
}
