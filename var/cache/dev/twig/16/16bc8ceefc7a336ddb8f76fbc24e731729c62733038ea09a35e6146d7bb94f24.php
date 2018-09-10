<?php

/* NovosgaReportsBundle:relatorios:servicos_disponiveis_global.html.twig */
class __TwigTemplate_f08ad8baf8c2a1331c2759d60e8cd6ba8b3f2b15a4a90ee48c968b2625617db8 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NovosgaReportsBundle:relatorios:servicos_disponiveis_global.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NovosgaReportsBundle:relatorios:servicos_disponiveis_global.html.twig"));

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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["relatorio"]) || array_key_exists("relatorio", $context) ? $context["relatorio"] : (function () { throw new Twig_Error_Runtime('Variable "relatorio" does not exist.', 11, $this->source); })()), "dados", array()));
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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  143 => 51,  137 => 50,  130 => 45,  122 => 42,  116 => 40,  110 => 38,  108 => 37,  103 => 35,  100 => 34,  96 => 33,  89 => 29,  85 => 28,  78 => 23,  76 => 22,  72 => 20,  66 => 18,  60 => 16,  58 => 15,  53 => 13,  50 => 12,  46 => 11,  39 => 7,  35 => 6,  29 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'NovosgaReportsBundle' %}

<table class=\"table table-bordered\">
    <thead class=\"thead-light\">
        <tr>
            <th>{% trans %}Serviço{% endtrans %}</th>
            <th>{% trans %}Situação{% endtrans %}</th>
        </tr>
    </thead>
    <tbody>
        {% for servico in relatorio.dados %}
            <tr>
                <td class=\"strong\">{{ servico.nome }}</td>
                <td class=\"w100 center\">
                    {% if servico.ativo %}
                        <span class=\"status-active\">{% trans %}Ativo{% endtrans %}</span>
                    {% else %}
                        <span class=\"status-inactive\">{% trans %}Inativo{% endtrans %}</span>
                    {% endif %}
                </td>
            </tr>
            {% if servico.subServicos|length %}
                <tr class=\"sub-table\">
                    <td colspan=\"2\">
                        <table class=\"table table-bordered table-striped subservicos\">
                            <thead>
                                <tr>
                                    <th>{% trans %}Subserviço{% endtrans %}</th>
                                    <th>{% trans %}Situação{% endtrans %}</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for subServico in servico.subServicos %}
                                <tr>
                                    <td class=\"nome\">{{ subServico.nome }}</td>
                                    <td class=\"w100 center\">
                                        {% if subServico.ativo %}
                                            <span class=\"status-active\">{% trans %}Ativo{% endtrans %}</span>
                                        {% else %}
                                            <span class=\"status-inactive\">{% trans %}Inativo{% endtrans %}</span>
                                        {% endif %}
                                    </td>
                                </tr>
                                {% endfor %}
                            </tbody>
                        </table>
                    </td>
                </tr>
            {% endif %}
        {% endfor %}
    </tbody>
</table>", "NovosgaReportsBundle:relatorios:servicos_disponiveis_global.html.twig", "/var/www/html/sgf/novosga/modules/novosga/reports-bundle/Resources/views/relatorios/servicos_disponiveis_global.html.twig");
    }
}
