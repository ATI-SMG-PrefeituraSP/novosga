<?php

/* admin/modulos/index.html.twig */
class __TwigTemplate_0b9d7005ac624ca5b6fd33b644a5130464754e8e41f3ed4545c670950b23731f extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("admin.html.twig", "admin/modulos/index.html.twig", 1);
        $this->blocks = array(
            'adminContent' => array($this, 'block_adminContent'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/modulos/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/modulos/index.html.twig"));

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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.modules.title"), "html", null, true);
        echo "
        <small>
            ";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.modules.subtitle"), "html", null, true);
        echo "
        </small>
    </h1>
    
    <hr>
        
    <table class=\"table table-bordered\">
        <thead class=\"thead-light\">
            <tr>
                <th>";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.module"), "html", null, true);
        echo "</th>
                <th>";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.enabled"), "html", null, true);
        echo "</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["modules"]) || array_key_exists("modules", $context) ? $context["modules"] : (function () { throw new Twig_Error_Runtime('Variable "modules" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 22
            echo "                <tr>
                    <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["module"], "name", array()), "html", null, true);
            echo "</td>
                    <td>
                        <input type=\"checkbox\" value=\"1\" ";
            // line 25
            if (twig_get_attribute($this->env, $this->source, $context["module"], "active", array())) {
                echo "checked";
            }
            echo " class=\"module-status\" data-key=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["module"], "key", array()), "html", null, true);
            echo "\">
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "        </tbody>
    </table>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 33
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 34
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        \$(function() {
            'use strict'
            
            \$('.module-status').on('change', function () {
                var checkbox = \$(this);
                
                \$.ajax({
                    url: '";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_modulos_update");
        echo "',
                    type: 'post',
                    data: {
                        key: checkbox.data('key') ,
                        active: checkbox.is(':checked') ? 1 : 0,
                    },
                    succes: function () {
                    }
                });
            });
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/modulos/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 43,  132 => 34,  123 => 33,  111 => 29,  97 => 25,  92 => 23,  89 => 22,  85 => 21,  78 => 17,  74 => 16,  62 => 7,  57 => 5,  54 => 4,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"admin.html.twig\" %}

{% block adminContent %}
    <h1>
        {{ 'admin.modules.title'|trans }}
        <small>
            {{ 'admin.modules.subtitle'|trans }}
        </small>
    </h1>
    
    <hr>
        
    <table class=\"table table-bordered\">
        <thead class=\"thead-light\">
            <tr>
                <th>{{ 'label.module'|trans }}</th>
                <th>{{ 'label.enabled'|trans }}</th>
            </tr>
        </thead>
        <tbody>
            {% for module in modules %}
                <tr>
                    <td>{{module.name}}</td>
                    <td>
                        <input type=\"checkbox\" value=\"1\" {% if module.active %}checked{% endif %} class=\"module-status\" data-key=\"{{ module.key }}\">
                    </td>
                </tr>
            {% endfor %}
        </tbody>
    </table>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
        \$(function() {
            'use strict'
            
            \$('.module-status').on('change', function () {
                var checkbox = \$(this);
                
                \$.ajax({
                    url: '{{ path('admin_modulos_update') }}',
                    type: 'post',
                    data: {
                        key: checkbox.data('key') ,
                        active: checkbox.is(':checked') ? 1 : 0,
                    },
                    succes: function () {
                    }
                });
            });
        });
    </script>
{% endblock %}
", "admin/modulos/index.html.twig", "/var/www/html/sgf/novosga/templates/admin/modulos/index.html.twig");
    }
}
