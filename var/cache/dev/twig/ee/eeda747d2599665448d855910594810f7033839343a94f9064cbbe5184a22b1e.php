<?php

/* NovosgaReportsBundle:relatorios:perfis.html.twig */
class __TwigTemplate_cb67c61418ba6922fbbc6eaf17ee2f6c87ff5c4644010065acf73ec6f5365ddb extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NovosgaReportsBundle:relatorios:perfis.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NovosgaReportsBundle:relatorios:perfis.html.twig"));

        // line 2
        echo "
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["relatorio"]) || array_key_exists("relatorio", $context) ? $context["relatorio"] : (function () { throw new Twig_Error_Runtime('Variable "relatorio" does not exist.', 3, $this->source); })()), "dados", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["dado"]) {
            // line 4
            echo "    <div class=\"header\">
        <h2>";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dado"], "perfil", array()), "html", null, true);
            echo "</h2>
    </div>
    <table class=\"table table-bordered table-striped\">
        <thead class=\"thead-light\">
            <tr>
                <th>";
            // line 10
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Módulos", array(), "NovosgaReportsBundle");
            echo "</th>
            </tr>
        </thead>
        <tbody>
            ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["dado"], "permissoes", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["permissao"]) {
                // line 15
                echo "                <tr>
                    <td>";
                // line 16
                echo twig_escape_filter($this->env, $context["permissao"], "html", null, true);
                echo "</td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permissao'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "        </tbody>
    </table>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dado'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "NovosgaReportsBundle:relatorios:perfis.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 19,  61 => 16,  58 => 15,  54 => 14,  47 => 10,  39 => 5,  36 => 4,  32 => 3,  29 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'NovosgaReportsBundle' %}

{% for dado in relatorio.dados %}
    <div class=\"header\">
        <h2>{{ dado.perfil }}</h2>
    </div>
    <table class=\"table table-bordered table-striped\">
        <thead class=\"thead-light\">
            <tr>
                <th>{% trans %}Módulos{% endtrans %}</th>
            </tr>
        </thead>
        <tbody>
            {% for permissao in dado.permissoes %}
                <tr>
                    <td>{{ permissao }}</td>
                </tr>
            {% endfor %}
        </tbody>
    </table>
{% endfor %}", "NovosgaReportsBundle:relatorios:perfis.html.twig", "/var/www/html/sgf/novosga/modules/novosga/reports-bundle/Resources/views/relatorios/perfis.html.twig");
    }
}
