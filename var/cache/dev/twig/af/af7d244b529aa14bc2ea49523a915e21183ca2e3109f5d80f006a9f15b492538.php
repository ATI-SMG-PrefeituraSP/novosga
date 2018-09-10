<?php

/* NovosgaReportsBundle:relatorios:servicos_realizados.html.twig */
class __TwigTemplate_613ab02a578d2ddb76ff720b9b0ecc200f25a5479ed54e77a2e4875e4339e9cf extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NovosgaReportsBundle:relatorios:servicos_realizados.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NovosgaReportsBundle:relatorios:servicos_realizados.html.twig"));

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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["relatorio"]) || array_key_exists("relatorio", $context) ? $context["relatorio"] : (function () { throw new Twig_Error_Runtime('Variable "relatorio" does not exist.', 16, $this->source); })()), "dados", array()), "servicos", array()));
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
            $context["total"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new Twig_Error_Runtime('Variable "total" does not exist.', 20, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["s"], "total", array()));
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
        echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new Twig_Error_Runtime('Variable "total" does not exist.', 28, $this->source); })()), "html", null, true);
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
        return "NovosgaReportsBundle:relatorios:servicos_realizados.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 28,  83 => 23,  76 => 21,  74 => 20,  70 => 19,  66 => 18,  63 => 17,  58 => 16,  56 => 15,  49 => 11,  45 => 10,  37 => 5,  33 => 4,  29 => 2,);
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
            <th>{% trans %}Serviço{% endtrans %}</th>
            <th>{% trans %}Total{% endtrans %}</th>
        </tr>
    </thead>
    <tbody>
        {% set total = 0 %}
        {% for s in relatorio.dados.servicos %}
            <tr>
                <td>{{ s.nome }}</td>
                <td>{{ s.total }}</td>
                {% set total = total + s.total %}
            </tr>
        {% endfor %}
    </tbody>
    <tfoot>
        <tr>
            <td></td>
            <td>
                <strong>Total: {{ total }}</strong>
            </td>
        </tr>
    </tfoot>
</table>", "NovosgaReportsBundle:relatorios:servicos_realizados.html.twig", "/var/www/html/sgf/novosga/modules/novosga/reports-bundle/Resources/views/relatorios/servicos_realizados.html.twig");
    }
}
