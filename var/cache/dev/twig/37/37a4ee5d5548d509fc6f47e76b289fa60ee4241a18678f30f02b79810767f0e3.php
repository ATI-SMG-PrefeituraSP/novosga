<?php

/* admin/servicos/form.html.twig */
class __TwigTemplate_ce1225423e1265948ab9beb0b67f51b05f3a7626435cb6997f6a3f600b3166f4 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("admin.html.twig", "admin/servicos/form.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/servicos/form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/servicos/form.html.twig"));

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
        echo "    <h1>
        ";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.services.title"), "html", null, true);
        echo "
        <small>
            ";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.services.subtitle"), "html", null, true);
        echo "
        </small>
    </h1>

    <hr>

    ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 13, $this->source); })()), 'form_start');
        echo "

        ";
        // line 15
        $this->loadTemplate("flashMessages.html.twig", "admin/servicos/form.html.twig", 15)->display($context);
        // line 16
        echo "
        <div class=\"row\">
            <div class=\"col-md-12\">
                ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->source); })()), "ativo", array()), 'row');
        echo "
            </div>
            <div class=\"col-md-6\">

                ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 23, $this->source); })()), "nome", array()), 'row');
        echo "

                ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 25, $this->source); })()), "descricao", array()), 'row');
        echo "

                ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->source); })()), "peso", array()), 'row');
        echo "

                ";
        // line 29
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "mestre", array(), "any", true, true)) {
            // line 30
            echo "                    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->source); })()), "mestre", array()), 'row');
            echo "
                ";
        }
        // line 32
        echo "            </div>
            <div class=\"col-md-6\">
                ";
        // line 34
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new Twig_Error_Runtime('Variable "entity" does not exist.', 34, $this->source); })()), "subServicos", array()))) {
            // line 35
            echo "                    <fieldset>
                        <legend>";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.services.childs"), "html", null, true);
            echo "</legend>
                        <table class=\"table table-bordered\">
                            <thead class=\"thead-light\">
                                <tr>
                                    <th>";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.services.field.name"), "html", null, true);
            echo "</th>
                                    <th>";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.services.field.weight"), "html", null, true);
            echo "</th>
                                    <th>";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.status"), "html", null, true);
            echo "</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new Twig_Error_Runtime('Variable "entity" does not exist.', 47, $this->source); })()), "subServicos", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["sub"]) {
                // line 48
                echo "                                    ";
                if ( !twig_get_attribute($this->env, $this->source, $context["sub"], "deletedAt", array())) {
                    // line 49
                    echo "                                        <tr>
                                            <td>";
                    // line 50
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sub"], "nome", array()), "html", null, true);
                    echo "</td>
                                            <td>";
                    // line 51
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sub"], "peso", array()), "html", null, true);
                    echo "</td>
                                            <td>
                                                ";
                    // line 53
                    if (twig_get_attribute($this->env, $this->source, $context["sub"], "ativo", array())) {
                        // line 54
                        echo "                                                    <span class=\"text-success\">";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.enabled"), "html", null, true);
                        echo "</span>
                                                ";
                    } else {
                        // line 56
                        echo "                                                    <span class=\"text-danger\">";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.disabled"), "html", null, true);
                        echo "</span>
                                                ";
                    }
                    // line 58
                    echo "                                            </td>
                                            <td class=\"text-center\">
                                                <a href=\"";
                    // line 60
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_servicos_edit", array("id" => twig_get_attribute($this->env, $this->source, $context["sub"], "id", array()))), "html", null, true);
                    echo "\" class=\"btn btn-secondary\">
                                                    <i class=\"fa fa-edit\"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    ";
                }
                // line 66
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "                            </tbody>
                        </table>
                    </fieldset>
                ";
        }
        // line 71
        echo "            </div>
        </div>

        <button type=\"submit\" class=\"btn btn-primary\">
            <i class=\"fa fa-check\"></i>
            ";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.save"), "html", null, true);
        echo "
        </button>
        <a href=\"";
        // line 78
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_servicos_index");
        echo "\" class=\"btn btn-secondary\">
            <i class=\"fa fa-chevron-left\"></i>
            ";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.back"), "html", null, true);
        echo "
        </a>
        ";
        // line 82
        if (twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new Twig_Error_Runtime('Variable "entity" does not exist.', 82, $this->source); })()), "id", array())) {
            // line 83
            echo "            <button type=\"submit\" class=\"btn btn-danger pull-right\" name=\"_method\" value=\"DELETE\">
                <i class=\"fa fa-trash\"></i>
                ";
            // line 85
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.remove"), "html", null, true);
            echo "
            </button>
        ";
        }
        // line 88
        echo "
    ";
        // line 89
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 89, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/servicos/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 89,  236 => 88,  230 => 85,  226 => 83,  224 => 82,  219 => 80,  214 => 78,  209 => 76,  202 => 71,  196 => 67,  190 => 66,  181 => 60,  177 => 58,  171 => 56,  165 => 54,  163 => 53,  158 => 51,  154 => 50,  151 => 49,  148 => 48,  144 => 47,  136 => 42,  132 => 41,  128 => 40,  121 => 36,  118 => 35,  116 => 34,  112 => 32,  106 => 30,  104 => 29,  99 => 27,  94 => 25,  89 => 23,  82 => 19,  77 => 16,  75 => 15,  70 => 13,  61 => 7,  56 => 5,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"admin.html.twig\" %}

{% block adminContent %}
    <h1>
        {{ 'admin.services.title'|trans }}
        <small>
            {{ 'admin.services.subtitle'|trans }}
        </small>
    </h1>

    <hr>

    {{ form_start(form) }}

        {% include 'flashMessages.html.twig' %}

        <div class=\"row\">
            <div class=\"col-md-12\">
                {{ form_row(form.ativo) }}
            </div>
            <div class=\"col-md-6\">

                {{ form_row(form.nome) }}

                {{ form_row(form.descricao) }}

                {{ form_row(form.peso) }}

                {% if form.mestre is defined %}
                    {{ form_row(form.mestre) }}
                {% endif %}
            </div>
            <div class=\"col-md-6\">
                {% if entity.subServicos|length %}
                    <fieldset>
                        <legend>{{ 'admin.services.childs'|trans }}</legend>
                        <table class=\"table table-bordered\">
                            <thead class=\"thead-light\">
                                <tr>
                                    <th>{{ 'admin.services.field.name'|trans }}</th>
                                    <th>{{ 'admin.services.field.weight'|trans }}</th>
                                    <th>{{ 'label.status'|trans }}</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for sub in entity.subServicos %}
                                    {% if not sub.deletedAt %}
                                        <tr>
                                            <td>{{ sub.nome }}</td>
                                            <td>{{ sub.peso }}</td>
                                            <td>
                                                {% if sub.ativo %}
                                                    <span class=\"text-success\">{{ 'label.enabled'|trans }}</span>
                                                {% else %}
                                                    <span class=\"text-danger\">{{ 'label.disabled'|trans }}</span>
                                                {% endif %}
                                            </td>
                                            <td class=\"text-center\">
                                                <a href=\"{{ path('admin_servicos_edit', {id: sub.id }) }}\" class=\"btn btn-secondary\">
                                                    <i class=\"fa fa-edit\"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    {% endif %}
                                {% endfor %}
                            </tbody>
                        </table>
                    </fieldset>
                {% endif %}
            </div>
        </div>

        <button type=\"submit\" class=\"btn btn-primary\">
            <i class=\"fa fa-check\"></i>
            {{ 'button.save'|trans }}
        </button>
        <a href=\"{{ path('admin_servicos_index') }}\" class=\"btn btn-secondary\">
            <i class=\"fa fa-chevron-left\"></i>
            {{ 'button.back'|trans }}
        </a>
        {% if entity.id %}
            <button type=\"submit\" class=\"btn btn-danger pull-right\" name=\"_method\" value=\"DELETE\">
                <i class=\"fa fa-trash\"></i>
                {{ 'button.remove'|trans }}
            </button>
        {% endif %}

    {{ form_end(form) }}
{% endblock %}
", "admin/servicos/form.html.twig", "/var/www/html/sgf/novosga/templates/admin/servicos/form.html.twig");
    }
}
