<?php

/* profile/index.html.twig */
class __TwigTemplate_17bb60485845abb8c6ec8254ad68cdea0d4952c3c1c65509370c7aac07d89262 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "profile/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "profile/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "profile/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profile.title"), "html", null, true);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <h1>
        <i class=\"fa fa-user\" aria-hidden=\"true\"></i>
        ";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profile.title"), "html", null, true);
        echo "
        <small>
            ";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profile.subtitle"), "html", null, true);
        echo "
        </small>
    </h1>
    
    <hr>
    
    ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->source); })()), 'form_start');
        echo "
    
        ";
        // line 20
        $this->loadTemplate("flashMessages.html.twig", "profile/index.html.twig", 20)->display($context);
        // line 21
        echo "        
        <div class=\"row\">
            <div class=\"col-5\">
                <fieldset>
                    <legend>";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profile.general"), "html", null, true);
        echo "</legend>
                    
                    <p class=\"text-secondary\">";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profile.general.description"), "html", null, true);
        echo "</p>
                    
                    <div class=\"form-group\">
                        <label>";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profile.field.username"), "html", null, true);
        echo "</label>
                        <input type=\"text\" class=\"form-control\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 31, $this->source); })()), "login", array()), "html", null, true);
        echo "\" readonly>
                    </div>
                    
                    <div class=\"row\">
                        <div class=\"col-md-4 col-lg-3\">
                            ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 36, $this->source); })()), "nome", array()), 'row');
        echo "
                        </div>
                        <div class=\"col-md-8 col-lg-9\">
                            ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 39, $this->source); })()), "sobrenome", array()), 'row');
        echo "
                        </div>
                    </div>

                    ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 43, $this->source); })()), "email", array()), 'row');
        echo "
                </fieldset>
            </div>
            <div class=\"col-6 ml-auto\">
                <fieldset>
                    <legend>";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profile.lotation"), "html", null, true);
        echo "</legend>
                    
                    <p class=\"text-secondary\">";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profile.lotation.description"), "html", null, true);
        echo "</p>
                    
                    <table class=\"table table-bordered\">
                        <thead class=\"thead-light\">
                            <tr>
                                <th>
                                    ";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.unity"), "html", null, true);
        echo "
                                </th>
                                <th>
                                    ";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.role"), "html", null, true);
        echo "
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 64, $this->source); })()), "lotacoes", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["lotacao"]) {
            // line 65
            echo "                                <tr>
                                    <td>
                                        ";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lotacao"], "unidade", array()), "html", null, true);
            echo "
                                    </td>
                                    <td>
                                        ";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lotacao"], "perfil", array()), "html", null, true);
            echo "
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lotacao'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "                        </tbody>
                    </table>
                </fieldset>
            </div>
        </div>
        
        <button type=\"submit\" class=\"btn btn-primary\">
            <i class=\"fa fa-save\"></i>
            ";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.update"), "html", null, true);
        echo "
        </button>
        
        <button type=\"button\" class=\"btn btn-secondary\" data-toggle=\"modal\" data-target=\"#dialog-senha\">
            <i class=\"fa fa-lock\"></i>
            ";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profile.button.change_password"), "html", null, true);
        echo "
        </button>
    
    ";
        // line 90
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 90, $this->source); })()), 'form_end');
        echo "
    
    <div id=\"dialog-senha\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <form id=\"form-senha\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\">";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profile.change_password"), "html", null, true);
        echo "</h5>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                    </div>
                    <div class=\"modal-body\">
                        <div class=\"form-group\">
                            <label for=\"senha_atual\">";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profile.field.current_password"), "html", null, true);
        echo "</label>
                            <input id=\"senha_atual\" type=\"password\" class=\"form-control\" required>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"senha_senha\">";
        // line 106
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profile.field.new_password"), "html", null, true);
        echo "</label>
                            <input id=\"senha_senha\" type=\"password\" class=\"form-control\" required>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"senha_confirmacao\">";
        // line 110
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profile.field.password_confirm"), "html", null, true);
        echo "</label>
                            <input id=\"senha_confirmacao\" type=\"password\" class=\"form-control\" required>
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"submit\" class=\"btn btn-primary\">
                            ";
        // line 116
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profile.button.change_password"), "html", null, true);
        echo "
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 125
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 126
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <style>
        body>section {
            padding: 20px 10px;
        }
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 134
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 135
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        (function () {
            'use strict'
            
            \$('#form-senha').on('submit', function (form) {
                App.ajax({
                    url: App.url('/profile/password'),
                    type: 'post',
                    data: {
                        atual: \$('#senha_atual').val(),
                        senha: \$('#senha_senha').val(),
                        confirmacao: \$('#senha_confirmacao').val()
                    },
                    success: function () {
                        \$(form).trigger('reset');
                        \$('#dialog-senha').modal('hide');
                    }
                });
                
                return false;
            });
        })();
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "profile/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  324 => 135,  315 => 134,  297 => 126,  288 => 125,  270 => 116,  261 => 110,  254 => 106,  247 => 102,  239 => 97,  229 => 90,  223 => 87,  215 => 82,  205 => 74,  195 => 70,  189 => 67,  185 => 65,  181 => 64,  173 => 59,  167 => 56,  158 => 50,  153 => 48,  145 => 43,  138 => 39,  132 => 36,  124 => 31,  120 => 30,  114 => 27,  109 => 25,  103 => 21,  101 => 20,  96 => 18,  87 => 12,  82 => 10,  78 => 8,  69 => 7,  56 => 4,  47 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}
    {{ 'profile.title'|trans }}
{% endblock %}

{% block body %}
    <h1>
        <i class=\"fa fa-user\" aria-hidden=\"true\"></i>
        {{ 'profile.title'|trans }}
        <small>
            {{ 'profile.subtitle'|trans }}
        </small>
    </h1>
    
    <hr>
    
    {{ form_start(form) }}
    
        {% include 'flashMessages.html.twig' %}
        
        <div class=\"row\">
            <div class=\"col-5\">
                <fieldset>
                    <legend>{{ 'profile.general'|trans }}</legend>
                    
                    <p class=\"text-secondary\">{{ 'profile.general.description'|trans }}</p>
                    
                    <div class=\"form-group\">
                        <label>{{ 'profile.field.username'|trans }}</label>
                        <input type=\"text\" class=\"form-control\" value=\"{{user.login}}\" readonly>
                    </div>
                    
                    <div class=\"row\">
                        <div class=\"col-md-4 col-lg-3\">
                            {{ form_row(form.nome) }}
                        </div>
                        <div class=\"col-md-8 col-lg-9\">
                            {{ form_row(form.sobrenome) }}
                        </div>
                    </div>

                    {{ form_row(form.email) }}
                </fieldset>
            </div>
            <div class=\"col-6 ml-auto\">
                <fieldset>
                    <legend>{{ 'profile.lotation'|trans }}</legend>
                    
                    <p class=\"text-secondary\">{{ 'profile.lotation.description'|trans }}</p>
                    
                    <table class=\"table table-bordered\">
                        <thead class=\"thead-light\">
                            <tr>
                                <th>
                                    {{ 'label.unity'|trans }}
                                </th>
                                <th>
                                    {{ 'label.role'|trans }}
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for lotacao in user.lotacoes %}
                                <tr>
                                    <td>
                                        {{lotacao.unidade}}
                                    </td>
                                    <td>
                                        {{lotacao.perfil}}
                                    </td>
                                </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                </fieldset>
            </div>
        </div>
        
        <button type=\"submit\" class=\"btn btn-primary\">
            <i class=\"fa fa-save\"></i>
            {{ 'button.update'|trans }}
        </button>
        
        <button type=\"button\" class=\"btn btn-secondary\" data-toggle=\"modal\" data-target=\"#dialog-senha\">
            <i class=\"fa fa-lock\"></i>
            {{ 'profile.button.change_password'|trans }}
        </button>
    
    {{ form_end(form) }}
    
    <div id=\"dialog-senha\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <form id=\"form-senha\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\">{{ 'profile.change_password'|trans }}</h5>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                    </div>
                    <div class=\"modal-body\">
                        <div class=\"form-group\">
                            <label for=\"senha_atual\">{{ 'profile.field.current_password'|trans }}</label>
                            <input id=\"senha_atual\" type=\"password\" class=\"form-control\" required>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"senha_senha\">{{ 'profile.field.new_password'|trans }}</label>
                            <input id=\"senha_senha\" type=\"password\" class=\"form-control\" required>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"senha_confirmacao\">{{ 'profile.field.password_confirm'|trans }}</label>
                            <input id=\"senha_confirmacao\" type=\"password\" class=\"form-control\" required>
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"submit\" class=\"btn btn-primary\">
                            {{ 'profile.button.change_password'|trans }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        body>section {
            padding: 20px 10px;
        }
    </style>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
        (function () {
            'use strict'
            
            \$('#form-senha').on('submit', function (form) {
                App.ajax({
                    url: App.url('/profile/password'),
                    type: 'post',
                    data: {
                        atual: \$('#senha_atual').val(),
                        senha: \$('#senha_senha').val(),
                        confirmacao: \$('#senha_confirmacao').val()
                    },
                    success: function () {
                        \$(form).trigger('reset');
                        \$('#dialog-senha').modal('hide');
                    }
                });
                
                return false;
            });
        })();
    </script>
{% endblock %}
", "profile/index.html.twig", "/var/www/html/sgf/novosga/templates/profile/index.html.twig");
    }
}
