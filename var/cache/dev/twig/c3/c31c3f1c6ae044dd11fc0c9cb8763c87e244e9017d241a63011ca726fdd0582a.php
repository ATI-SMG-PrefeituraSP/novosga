<?php

/* admin/perfis/form.html.twig */
class __TwigTemplate_fe561c76ce70246fd0d41a5c1d9bc960e863a84d15cc2fdb4778b5912ab4fd88 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("admin.html.twig", "admin/perfis/form.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/perfis/form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/perfis/form.html.twig"));

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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.roles.title"), "html", null, true);
        echo "
        <small>
            ";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.roles.subtitle"), "html", null, true);
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
        $this->loadTemplate("flashMessages.html.twig", "admin/perfis/form.html.twig", 15)->display($context);
        // line 16
        echo "    
        <div class=\"row\">
            <div class=\"col-md-8\">
                ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->source); })()), "nome", array()), 'row');
        echo "

                ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 21, $this->source); })()), "descricao", array()), 'row');
        echo "
            </div>
            <div class=\"col-md-4\">
                <div class=\"well\">
                    ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 25, $this->source); })()), "modulos", array()), 'row');
        echo "
                </div>
            </div>
        </div>

        <button type=\"submit\" class=\"btn btn-primary\">
            <i class=\"fa fa-check\"></i> 
            ";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.save"), "html", null, true);
        echo "
        </button>
        <a href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_perfis_index");
        echo "\" class=\"btn btn-secondary\">
            <i class=\"fa fa-chevron-left\"></i>
            ";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.back"), "html", null, true);
        echo "
        </a>
        ";
        // line 38
        if (twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new Twig_Error_Runtime('Variable "entity" does not exist.', 38, $this->source); })()), "id", array())) {
            // line 39
            echo "            <button type=\"submit\" class=\"btn btn-danger pull-right\" name=\"_method\" value=\"DELETE\">
                <i class=\"fa fa-trash\"></i> 
                ";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.remove"), "html", null, true);
            echo "
            </button>
        ";
        }
        // line 44
        echo "
    ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 45, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/perfis/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 45,  131 => 44,  125 => 41,  121 => 39,  119 => 38,  114 => 36,  109 => 34,  104 => 32,  94 => 25,  87 => 21,  82 => 19,  77 => 16,  75 => 15,  70 => 13,  61 => 7,  56 => 5,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"admin.html.twig\" %}

{% block adminContent %}
    <h1>
        {{ 'admin.roles.title'|trans }}
        <small>
            {{ 'admin.roles.subtitle'|trans }}
        </small>
    </h1>
    
    <hr>
    
    {{ form_start(form) }}
    
        {% include 'flashMessages.html.twig' %}
    
        <div class=\"row\">
            <div class=\"col-md-8\">
                {{ form_row(form.nome) }}

                {{ form_row(form.descricao) }}
            </div>
            <div class=\"col-md-4\">
                <div class=\"well\">
                    {{ form_row(form.modulos) }}
                </div>
            </div>
        </div>

        <button type=\"submit\" class=\"btn btn-primary\">
            <i class=\"fa fa-check\"></i> 
            {{ 'button.save'|trans }}
        </button>
        <a href=\"{{ path('admin_perfis_index') }}\" class=\"btn btn-secondary\">
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
{% endblock %}", "admin/perfis/form.html.twig", "/var/www/html/sgf/novosga/templates/admin/perfis/form.html.twig");
    }
}
