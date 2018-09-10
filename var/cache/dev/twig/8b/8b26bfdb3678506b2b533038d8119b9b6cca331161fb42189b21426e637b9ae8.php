<?php

/* admin/unidades/index.html.twig */
class __TwigTemplate_68b3a6cbcc9e6614c8e59ca85c74ca39bad0f4183eeb453518076c9ff8048b3d extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("admin.html.twig", "admin/unidades/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/unidades/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/unidades/index.html.twig"));

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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.unities.title"), "html", null, true);
        echo "
                <small>
                    ";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.unities.subtitle"), "html", null, true);
        echo "
                </small>
            </h1>
        </div>
        <div class=\"col-4 text-right\">
            <a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_unidades_new");
        echo "\" class=\"btn btn-primary\">
                <i class=\"fa fa-plus\"></i>
                ";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.unities.button.new"), "html", null, true);
        echo "
            </a>
        </div>
    </div>

    <hr>

    ";
        // line 23
        $this->loadTemplate("flashMessages.html.twig", "admin/unidades/index.html.twig", 23)->display($context);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.status"), "html", null, true);
        echo "</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["unidades"]) || array_key_exists("unidades", $context) ? $context["unidades"] : (function () { throw new Twig_Error_Runtime('Variable "unidades" does not exist.', 35, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["unidade"]) {
            // line 36
            echo "                <tr>
                    <td>
                        ";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["unidade"], "id", array()), "html", null, true);
            echo "
                    </td>
                    <td>
                        ";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["unidade"], "nome", array()), "html", null, true);
            echo "
                    </td>
                    <td>
                        ";
            // line 44
            if (twig_get_attribute($this->env, $this->source, $context["unidade"], "ativo", array())) {
                // line 45
                echo "                            <span class=\"text-success\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.enabled"), "html", null, true);
                echo "</span>
                        ";
            } else {
                // line 47
                echo "                            <span class=\"text-danger\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.disabled"), "html", null, true);
                echo "</span>
                        ";
            }
            // line 49
            echo "                    </td>
                    <td class=\"text-center\">
                        <a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_unidades_edit", array("id" => twig_get_attribute($this->env, $this->source, $context["unidade"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-secondary\">
                            <i class=\"fa fa-edit\"></i>
                        </a>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unidade'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "        </tbody>
    </table>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/unidades/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 57,  145 => 51,  141 => 49,  135 => 47,  129 => 45,  127 => 44,  121 => 41,  115 => 38,  111 => 36,  107 => 35,  99 => 30,  95 => 29,  88 => 24,  86 => 23,  76 => 16,  71 => 14,  63 => 9,  58 => 7,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"admin.html.twig\" %}

{% block adminContent %}
    <div class=\"row\">
        <div class=\"col-8\">
            <h1>
                {{ 'admin.unities.title'|trans }}
                <small>
                    {{ 'admin.unities.subtitle'|trans }}
                </small>
            </h1>
        </div>
        <div class=\"col-4 text-right\">
            <a href=\"{{ path('admin_unidades_new') }}\" class=\"btn btn-primary\">
                <i class=\"fa fa-plus\"></i>
                {{ 'admin.unities.button.new'|trans }}
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
                <th>{{ 'label.status'|trans }}</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            {% for unidade in unidades %}
                <tr>
                    <td>
                        {{ unidade.id }}
                    </td>
                    <td>
                        {{ unidade.nome }}
                    </td>
                    <td>
                        {% if unidade.ativo %}
                            <span class=\"text-success\">{{ 'label.enabled'|trans }}</span>
                        {% else %}
                            <span class=\"text-danger\">{{ 'label.disabled'|trans }}</span>
                        {% endif %}
                    </td>
                    <td class=\"text-center\">
                        <a href=\"{{ path('admin_unidades_edit', { id: unidade.id }) }}\" class=\"btn btn-secondary\">
                            <i class=\"fa fa-edit\"></i>
                        </a>
                    </td>
                </tr>
            {% endfor %}
        </tbody>
    </table>
{% endblock %}
", "admin/unidades/index.html.twig", "/var/www/html/sgf/novosga/templates/admin/unidades/index.html.twig");
    }
}
