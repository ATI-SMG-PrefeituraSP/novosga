<?php

/* NovosgaUsersBundle:default:index.html.twig */
class __TwigTemplate_d7f74f993eb86c354f88da55bf6e645c04799655d62c21dc288865f439b207b7 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("@NovosgaUsers/base.html.twig", "NovosgaUsersBundle:default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@NovosgaUsers/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NovosgaUsersBundle:default:index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NovosgaUsersBundle:default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"row\">
        <div class=\"col-md-6  col-lg-8\">
            <h1>
                <i class=\"fa fa-users\" aria-hidden=\"true\"></i>
                ";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title", array(), "NovosgaUsersBundle"), "html", null, true);
        echo "
                <small>
                    ";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("subtitle", array(), "NovosgaUsersBundle"), "html", null, true);
        echo "
                </small>
            </h1>
        </div>
        <div class=\"col-md-6 col-lg-4 text-right\">
            <form class=\"form-inline\">
                <div class=\"input-group\">
                    <input type=\"text\" class=\"form-control\" name=\"q\" placeholder=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.search", array(), "NovosgaUsersBundle"), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 19, $this->source); })()), "request", array()), "get", array(0 => "q"), "method"), "html", null, true);
        echo "\">
                    <span class=\"input-group-btn\">
                        <button type=\"submit\" class=\"btn btn-secondary\">
                            <i class=\"fa fa-search\"></i>
                        </button>
                    </span>
                </div>
                <a href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("novosga_users_new");
        echo "\" class=\"btn btn-primary ml-auto\">
                    <i class=\"fa fa-plus\"></i>
                    ";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.new_user", array(), "NovosgaUsersBundle"), "html", null, true);
        echo "
                </a>
            </form>
        </div>
    </div>
        
    <hr>
    
    <table class=\"table table-bordered\">
        <thead class=\"thead-light\">
            <th>#</th>
            <th>";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.username", array(), "NovosgaUsersBundle"), "html", null, true);
        echo "</th>
            <th>";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.name", array(), "NovosgaUsersBundle"), "html", null, true);
        echo "</th>
            <th>";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.status", array(), "NovosgaUsersBundle"), "html", null, true);
        echo "</th>
            <th></th>
        </thead>
        <tbody>
            ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["usuarios"]) || array_key_exists("usuarios", $context) ? $context["usuarios"] : (function () { throw new Twig_Error_Runtime('Variable "usuarios" does not exist.', 45, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
            // line 46
            echo "                <tr>
                    <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuario"], "id", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuario"], "login", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuario"], "nome", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuario"], "sobrenome", array()), "html", null, true);
            echo "</td>
                    <td>
                        ";
            // line 51
            if (twig_get_attribute($this->env, $this->source, $context["usuario"], "ativo", array())) {
                // line 52
                echo "                            <span class=\"text-success\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.enabled", array(), "NovosgaUsersBundle"), "html", null, true);
                echo "</span>
                        ";
            } else {
                // line 54
                echo "                            <span class=\"text-danger\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.disabled", array(), "NovosgaUsersBundle"), "html", null, true);
                echo "</span>
                        ";
            }
            // line 56
            echo "                    </td>
                    <td class=\"text-right\">
                        <a href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("novosga_users_edit", array("id" => twig_get_attribute($this->env, $this->source, $context["usuario"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-secondary\">
                            <i class=\"fa fa-edit\"></i>
                        </a>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "        </tbody>
    </table>
            
    ";
        // line 67
        echo (isset($context["paginacao"]) || array_key_exists("paginacao", $context) ? $context["paginacao"] : (function () { throw new Twig_Error_Runtime('Variable "paginacao" does not exist.', 67, $this->source); })());
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "NovosgaUsersBundle:default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 67,  172 => 64,  160 => 58,  156 => 56,  150 => 54,  144 => 52,  142 => 51,  135 => 49,  131 => 48,  127 => 47,  124 => 46,  120 => 45,  113 => 41,  109 => 40,  105 => 39,  91 => 28,  86 => 26,  74 => 19,  64 => 12,  59 => 10,  53 => 6,  44 => 5,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@NovosgaUsers/base.html.twig\" %}

{% trans_default_domain 'NovosgaUsersBundle' %}

{% block body %}
    <div class=\"row\">
        <div class=\"col-md-6  col-lg-8\">
            <h1>
                <i class=\"fa fa-users\" aria-hidden=\"true\"></i>
                {{ 'title'|trans }}
                <small>
                    {{ 'subtitle'|trans }}
                </small>
            </h1>
        </div>
        <div class=\"col-md-6 col-lg-4 text-right\">
            <form class=\"form-inline\">
                <div class=\"input-group\">
                    <input type=\"text\" class=\"form-control\" name=\"q\" placeholder=\"{{ 'label.search'|trans }}\" value=\"{{ app.request.get('q') }}\">
                    <span class=\"input-group-btn\">
                        <button type=\"submit\" class=\"btn btn-secondary\">
                            <i class=\"fa fa-search\"></i>
                        </button>
                    </span>
                </div>
                <a href=\"{{ path('novosga_users_new') }}\" class=\"btn btn-primary ml-auto\">
                    <i class=\"fa fa-plus\"></i>
                    {{ 'button.new_user'|trans }}
                </a>
            </form>
        </div>
    </div>
        
    <hr>
    
    <table class=\"table table-bordered\">
        <thead class=\"thead-light\">
            <th>#</th>
            <th>{{ 'label.username'|trans }}</th>
            <th>{{ 'label.name'|trans }}</th>
            <th>{{ 'label.status'|trans }}</th>
            <th></th>
        </thead>
        <tbody>
            {% for usuario in usuarios %}
                <tr>
                    <td>{{ usuario.id }}</td>
                    <td>{{ usuario.login }}</td>
                    <td>{{ usuario.nome }} {{ usuario.sobrenome }}</td>
                    <td>
                        {% if usuario.ativo %}
                            <span class=\"text-success\">{{ 'label.enabled'|trans }}</span>
                        {% else %}
                            <span class=\"text-danger\">{{ 'label.disabled'|trans }}</span>
                        {% endif %}
                    </td>
                    <td class=\"text-right\">
                        <a href=\"{{ path('novosga_users_edit', { id: usuario.id }) }}\" class=\"btn btn-secondary\">
                            <i class=\"fa fa-edit\"></i>
                        </a>
                    </td>
                </tr>
            {% endfor %}
        </tbody>
    </table>
            
    {{ paginacao|raw }}
{% endblock %}", "NovosgaUsersBundle:default:index.html.twig", "/var/www/html/sgf/novosga/modules/novosga/users-bundle/Resources/views/default/index.html.twig");
    }
}
