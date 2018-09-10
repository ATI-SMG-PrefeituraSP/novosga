<?php

/* NovosgaReportsBundle:relatorios:lotacoes.html.twig */
class __TwigTemplate_7e45a34ff66e82c133497787ceae7db654b58f51fe4af3d454f562920760d2f6 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NovosgaReportsBundle:relatorios:lotacoes.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NovosgaReportsBundle:relatorios:lotacoes.html.twig"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Usuário", array(), "NovosgaReportsBundle");
        echo "</th>
            <th>";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Nome", array(), "NovosgaReportsBundle");
        echo "</th>
            <th>";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Perfil", array(), "NovosgaReportsBundle");
        echo "</th>
            <th>";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Serviços", array(), "NovosgaReportsBundle");
        echo "</th>
            <th>";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Situação", array(), "NovosgaReportsBundle");
        echo "</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["relatorio"]) || array_key_exists("relatorio", $context) ? $context["relatorio"] : (function () { throw new Twig_Error_Runtime('Variable "relatorio" does not exist.', 17, $this->source); })()), "dados", array()), "lotacoes", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["lotacao"]) {
            // line 18
            echo "            <tr>
                <td class=\"strong\">";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["lotacao"], "usuario", array()), "login", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["lotacao"], "usuario", array()), "nomeCompleto", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["lotacao"], "perfil", array()), "nome", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["relatorio"]) || array_key_exists("relatorio", $context) ? $context["relatorio"] : (function () { throw new Twig_Error_Runtime('Variable "relatorio" does not exist.', 24, $this->source); })()), "dados", array()), "servicos", array()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["lotacao"], "usuario", array()), "id", array()), array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["su"]) {
                // line 25
                echo "                            <li>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["su"], "servico", array()), "nome", array()), "html", null, true);
                echo "</li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['su'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "                    </ul>
                </td>
                <td class=\"w75 center\">
                    ";
            // line 30
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["lotacao"], "usuario", array()), "ativo", array())) {
                // line 31
                echo "                        <span class=\"status-active\">";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Ativo", array(), "NovosgaReportsBundle");
                echo "</span>
                    ";
            } else {
                // line 33
                echo "                        <span class=\"status-inactive\">";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Inativo", array(), "NovosgaReportsBundle");
                echo "</span>
                    ";
            }
            // line 35
            echo "                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lotacao'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "    </tbody>
</table>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "NovosgaReportsBundle:relatorios:lotacoes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 38,  117 => 35,  111 => 33,  105 => 31,  103 => 30,  98 => 27,  89 => 25,  85 => 24,  79 => 21,  75 => 20,  71 => 19,  68 => 18,  64 => 17,  57 => 13,  53 => 12,  49 => 11,  45 => 10,  41 => 9,  33 => 4,  29 => 2,);
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
            <th>{% trans %}Usuário{% endtrans %}</th>
            <th>{% trans %}Nome{% endtrans %}</th>
            <th>{% trans %}Perfil{% endtrans %}</th>
            <th>{% trans %}Serviços{% endtrans %}</th>
            <th>{% trans %}Situação{% endtrans %}</th>
        </tr>
    </thead>
    <tbody>
        {% for lotacao in relatorio.dados.lotacoes %}
            <tr>
                <td class=\"strong\">{{ lotacao.usuario.login }}</td>
                <td>{{ lotacao.usuario.nomeCompleto }}</td>
                <td>{{ lotacao.perfil.nome }}</td>
                <td>
                    <ul>
                        {% for su in relatorio.dados.servicos[lotacao.usuario.id] %}
                            <li>{{ su.servico.nome }}</li>
                        {% endfor %}
                    </ul>
                </td>
                <td class=\"w75 center\">
                    {% if lotacao.usuario.ativo %}
                        <span class=\"status-active\">{% trans %}Ativo{% endtrans %}</span>
                    {% else %}
                        <span class=\"status-inactive\">{% trans %}Inativo{% endtrans %}</span>
                    {% endif %}
                </td>
            </tr>
        {% endfor %}
    </tbody>
</table>", "NovosgaReportsBundle:relatorios:lotacoes.html.twig", "/var/www/html/sgf/novosga/modules/novosga/reports-bundle/Resources/views/relatorios/lotacoes.html.twig");
    }
}
