<?php

/* admin/prioridades/index.html.twig */
class __TwigTemplate_0da57cf23de064c7e6adbe2ee4ba491188ccc9f5243fb5c422b72cfa0828fb00 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("admin.html.twig", "admin/prioridades/index.html.twig", 1);
        $this->blocks = array(
            'adminContent' => array($this, 'block_adminContent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/prioridades/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/prioridades/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_adminContent($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminContent"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminContent"));

        // line 4
        echo "    <div class=\"row\">
        <div class=\"col-8\">
            <h1>
                ";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.priorities.title"), "html", null, true);
        echo "
                <small>
                    ";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.priorities.subtitle"), "html", null, true);
        echo "
                </small>
            </h1>
        </div>
        <div class=\"col-4 text-right\">
            <a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_prioridades_new");
        echo "\" class=\"btn btn-primary\">
                <i class=\"fa fa-plus\"></i>
                ";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.priorities.button.new"), "html", null, true);
        echo "
            </a>
        </div>
    </div>

    <hr>

    ";
        // line 23
        $this->loadTemplate("flashMessages.html.twig", "admin/prioridades/index.html.twig", 23)->display($context);
        // line 24
        echo "
    <table class=\"table table-bordered\">
        <thead class=\"thead-light\">
            <tr>
                <th>#</th>
                <th>";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.name"), "html", null, true);
        echo "</th>
                <th>";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.weight"), "html", null, true);
        echo "</th>
                <th>";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.status"), "html", null, true);
        echo "</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["prioridades"]) || array_key_exists("prioridades", $context) ? $context["prioridades"] : (function () { throw new Twig_Error_Runtime('Variable "prioridades" does not exist.', 36, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["prioridade"]) {
            // line 37
            echo "                <tr>
                    <td>
                        ";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prioridade"], "id", array()), "html", null, true);
            echo "
                    </td>
                    <td>
                        ";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prioridade"], "nome", array()), "html", null, true);
            echo "
                    </td>
                    <td>
                        ";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prioridade"], "peso", array()), "html", null, true);
            echo "
                    </td>
                    <td>
                        ";
            // line 48
            if (twig_get_attribute($this->env, $this->source, $context["prioridade"], "ativo", array())) {
                // line 49
                echo "                            <span class=\"text-success\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.enabled"), "html", null, true);
                echo "</span>
                        ";
            } else {
                // line 51
                echo "                            <span class=\"text-danger\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.disabled"), "html", null, true);
                echo "</span>
                        ";
            }
            // line 53
            echo "                    </td>
                    <td class=\"text-center\">
                        <a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_prioridades_edit", array("id" => twig_get_attribute($this->env, $this->source, $context["prioridade"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-secondary\">
                            <i class=\"fa fa-edit\"></i>
                        </a>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prioridade'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "        </tbody>
    </table>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/prioridades/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 61,  155 => 55,  151 => 53,  145 => 51,  139 => 49,  137 => 48,  131 => 45,  125 => 42,  119 => 39,  115 => 37,  111 => 36,  103 => 31,  99 => 30,  95 => 29,  88 => 24,  86 => 23,  76 => 16,  71 => 14,  63 => 9,  58 => 7,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"admin.html.twig\" %}

{% block adminContent %}
    <div class=\"row\">
        <div class=\"col-8\">
            <h1>
                {{ 'admin.priorities.title'|trans }}
                <small>
                    {{ 'admin.priorities.subtitle'|trans }}
                </small>
            </h1>
        </div>
        <div class=\"col-4 text-right\">
            <a href=\"{{ path('admin_prioridades_new') }}\" class=\"btn btn-primary\">
                <i class=\"fa fa-plus\"></i>
                {{ 'admin.priorities.button.new'|trans }}
            </a>
        </div>
    </div>

    <hr>

    {% include \"flashMessages.html.twig\" %}

    <table class=\"table table-bordered\">
        <thead class=\"thead-light\">
            <tr>
                <th>#</th>
                <th>{{ 'label.name'|trans }}</th>
                <th>{{ 'label.weight'|trans }}</th>
                <th>{{ 'label.status'|trans }}</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            {% for prioridade in prioridades %}
                <tr>
                    <td>
                        {{ prioridade.id }}
                    </td>
                    <td>
                        {{ prioridade.nome }}
                    </td>
                    <td>
                        {{ prioridade.peso }}
                    </td>
                    <td>
                        {% if prioridade.ativo %}
                            <span class=\"text-success\">{{ 'label.enabled'|trans }}</span>
                        {% else %}
                            <span class=\"text-danger\">{{ 'label.disabled'|trans }}</span>
                        {% endif %}
                    </td>
                    <td class=\"text-center\">
                        <a href=\"{{ path('admin_prioridades_edit', { id: prioridade.id }) }}\" class=\"btn btn-secondary\">
                            <i class=\"fa fa-edit\"></i>
                        </a>
                    </td>
                </tr>
            {% endfor %}
        </tbody>
    </table>
{% endblock %}
", "admin/prioridades/index.html.twig", "/var/www/html/sgf/novosga/templates/admin/prioridades/index.html.twig");
    }
}
