<?php

/* NovosgaReportsBundle:default:index.html.twig */
class __TwigTemplate_ffee50d3c7c07f9e6efb14a731a68be8a24ef2589da94c5ece881764506612b2 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("@NovosgaReports/base.html.twig", "NovosgaReportsBundle:default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@NovosgaReports/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NovosgaReportsBundle:default:index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NovosgaReportsBundle:default:index.html.twig"));

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
        <div class=\"col-sm-12\">
            <h1>
                <i class=\"fa fa-desktop\" aria-hidden=\"true\"></i>
                ";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title", array(), "NovosgaReportsBundle"), "html", null, true);
        echo "
                <small>
                    ";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("subtitle", array(), "NovosgaReportsBundle"), "html", null, true);
        echo "
                </small>
            </h1>
        </div>
    </div>

    <hr>
    
    <ul class=\"nav nav-tabs\">
        <li class=\"nav-item\">
            <a href=\"#tab-graficos\" data-toggle=\"tab\" class=\"nav-link active\">
                ";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Gráficos", array(), "NovosgaReportsBundle");
        // line 24
        echo "            </a>
        </li>
        <li class=\"nav-item\">
            <a href=\"#tab-relatorios\" data-toggle=\"tab\" class=\"nav-link\">
                ";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Relatórios", array(), "NovosgaReportsBundle");
        // line 29
        echo "            </a>
        </li>
    </ul>
    <div id=\"tabs\" class=\"tab-content\">
        <div id=\"tab-graficos\" class=\"tab-pane active\">
            ";
        // line 34
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["chartForm"]) || array_key_exists("chartForm", $context) ? $context["chartForm"] : (function () { throw new Twig_Error_Runtime('Variable "chartForm" does not exist.', 34, $this->source); })()), 'form_start', array("attr" => array("onsubmit" => "App.Estatisticas.Grafico.gerar(this); return false")));
        echo "
                <div class=\"row\">
                    <div class=\"col-lg-3 col-md-4\">
                        
                        ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["chartForm"]) || array_key_exists("chartForm", $context) ? $context["chartForm"] : (function () { throw new Twig_Error_Runtime('Variable "chartForm" does not exist.', 38, $this->source); })()), "chart", array()), 'row', array("label" => "Gráfico"));
        echo "

                        ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["chartForm"]) || array_key_exists("chartForm", $context) ? $context["chartForm"] : (function () { throw new Twig_Error_Runtime('Variable "chartForm" does not exist.', 40, $this->source); })()), "startDate", array()), 'row', array("label" => "Data inicial", "attr" => array("class" => "datepicker")));
        echo "

                        ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["chartForm"]) || array_key_exists("chartForm", $context) ? $context["chartForm"] : (function () { throw new Twig_Error_Runtime('Variable "chartForm" does not exist.', 42, $this->source); })()), "endDate", array()), 'row', array("label" => "Data final", "attr" => array("class" => "datepicker")));
        echo "
                        
                        <button type=\"submit\" class=\"btn btn-primary\">
                            ";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Gerar gráfico", array(), "NovosgaReportsBundle");
        // line 46
        echo "                        </button>
                    </div>
                    <div class=\"col-lg-8 col-md-8 ml-auto\">
                        <div id=\"chart-result\">
                        </div>
                    </div>
                </div>
            ";
        // line 53
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["chartForm"]) || array_key_exists("chartForm", $context) ? $context["chartForm"] : (function () { throw new Twig_Error_Runtime('Variable "chartForm" does not exist.', 53, $this->source); })()), 'form_end');
        echo "
        </div>
        <div id=\"tab-relatorios\" class=\"tab-pane\">
            ";
        // line 56
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["reportForm"]) || array_key_exists("reportForm", $context) ? $context["reportForm"] : (function () { throw new Twig_Error_Runtime('Variable "reportForm" does not exist.', 56, $this->source); })()), 'form_start', array("attr" => array("onsubmit" => "")));
        echo "
            
                ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["reportForm"]) || array_key_exists("reportForm", $context) ? $context["reportForm"] : (function () { throw new Twig_Error_Runtime('Variable "reportForm" does not exist.', 58, $this->source); })()), "report", array()), 'row', array("label" => "Relatório", "attr" => array("onchange" => "App.Estatisticas.options('#tab-relatorios')")));
        echo "

                <div class=\"option date date-range\" style=\"display:none\">
                    ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["reportForm"]) || array_key_exists("reportForm", $context) ? $context["reportForm"] : (function () { throw new Twig_Error_Runtime('Variable "reportForm" does not exist.', 61, $this->source); })()), "startDate", array()), 'row', array("label" => "Data inicial", "attr" => array("class" => "datepicker")));
        echo "
                </div>

                <div class=\"option date date-range\" style=\"display:none\">
                    ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["reportForm"]) || array_key_exists("reportForm", $context) ? $context["reportForm"] : (function () { throw new Twig_Error_Runtime('Variable "reportForm" does not exist.', 65, $this->source); })()), "endDate", array()), 'row', array("label" => "Data final", "attr" => array("class" => "datepicker")));
        echo "
                </div>
                
                <button type=\"submit\" class=\"btn btn-primary\">
                    ";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Gerar relatório", array(), "NovosgaReportsBundle");
        // line 70
        echo "                </button>
            ";
        // line 71
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["chartForm"]) || array_key_exists("chartForm", $context) ? $context["chartForm"] : (function () { throw new Twig_Error_Runtime('Variable "chartForm" does not exist.', 71, $this->source); })()), 'form_end');
        echo "
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 76
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 77
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/novosgareports/css/style.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/novosgareports/css/bootstrap-datepicker.standalone.min.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 82
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 83
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/novosgareports/js/Chart.bundle.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/novosgareports/js/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/novosgareports/js/bootstrap-datepicker.pt-BR.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/novosgareports/js/script.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        \$(\".datepicker\" ).datepicker({
            language: 'pt-BR',
            format: '";
        // line 91
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("dd/mm/yyyy", array(), "NovosgaReportsBundle");
        echo "'
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "NovosgaReportsBundle:default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 91,  237 => 87,  233 => 86,  229 => 85,  225 => 84,  220 => 83,  211 => 82,  199 => 79,  195 => 78,  190 => 77,  181 => 76,  167 => 71,  164 => 70,  162 => 69,  155 => 65,  148 => 61,  142 => 58,  137 => 56,  131 => 53,  122 => 46,  120 => 45,  114 => 42,  109 => 40,  104 => 38,  97 => 34,  90 => 29,  88 => 28,  82 => 24,  80 => 23,  66 => 12,  61 => 10,  55 => 6,  46 => 5,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@NovosgaReports/base.html.twig\" %}

{% trans_default_domain 'NovosgaReportsBundle' %}

{% block body %}
    <div class=\"row\">
        <div class=\"col-sm-12\">
            <h1>
                <i class=\"fa fa-desktop\" aria-hidden=\"true\"></i>
                {{ 'title'|trans }}
                <small>
                    {{ 'subtitle'|trans }}
                </small>
            </h1>
        </div>
    </div>

    <hr>
    
    <ul class=\"nav nav-tabs\">
        <li class=\"nav-item\">
            <a href=\"#tab-graficos\" data-toggle=\"tab\" class=\"nav-link active\">
                {% trans %}Gráficos{% endtrans %}
            </a>
        </li>
        <li class=\"nav-item\">
            <a href=\"#tab-relatorios\" data-toggle=\"tab\" class=\"nav-link\">
                {% trans %}Relatórios{% endtrans %}
            </a>
        </li>
    </ul>
    <div id=\"tabs\" class=\"tab-content\">
        <div id=\"tab-graficos\" class=\"tab-pane active\">
            {{ form_start(chartForm, { attr: { 'onsubmit': 'App.Estatisticas.Grafico.gerar(this); return false' } }) }}
                <div class=\"row\">
                    <div class=\"col-lg-3 col-md-4\">
                        
                        {{ form_row(chartForm.chart, { label: 'Gráfico' }) }}

                        {{ form_row(chartForm.startDate, { label: 'Data inicial', attr: { class: 'datepicker' } }) }}

                        {{ form_row(chartForm.endDate, { label: 'Data final', attr: { class: 'datepicker' } }) }}
                        
                        <button type=\"submit\" class=\"btn btn-primary\">
                            {% trans %}Gerar gráfico{% endtrans %}
                        </button>
                    </div>
                    <div class=\"col-lg-8 col-md-8 ml-auto\">
                        <div id=\"chart-result\">
                        </div>
                    </div>
                </div>
            {{ form_end(chartForm) }}
        </div>
        <div id=\"tab-relatorios\" class=\"tab-pane\">
            {{ form_start(reportForm, { attr: { 'onsubmit': '' } }) }}
            
                {{ form_row(reportForm.report, { label: 'Relatório', attr: { 'onchange': 'App.Estatisticas.options(\\'#tab-relatorios\\')' } }) }}

                <div class=\"option date date-range\" style=\"display:none\">
                    {{ form_row(reportForm.startDate, { label: 'Data inicial', attr: { class: 'datepicker' } }) }}
                </div>

                <div class=\"option date date-range\" style=\"display:none\">
                    {{ form_row(reportForm.endDate, { label: 'Data final', attr: { class: 'datepicker' } }) }}
                </div>
                
                <button type=\"submit\" class=\"btn btn-primary\">
                    {% trans %}Gerar relatório{% endtrans %}
                </button>
            {{ form_end(chartForm) }}
        </div>
    </div>
{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/novosgareports/css/style.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/novosgareports/css/bootstrap-datepicker.standalone.min.css') }}\">
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script type=\"text/javascript\" src=\"{{ asset('bundles/novosgareports/js/Chart.bundle.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('bundles/novosgareports/js/bootstrap-datepicker.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('bundles/novosgareports/js/bootstrap-datepicker.pt-BR.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('bundles/novosgareports/js/script.js') }}\"></script>
    <script type=\"text/javascript\">
        \$(\".datepicker\" ).datepicker({
            language: 'pt-BR',
            format: '{% trans %}dd/mm/yyyy{% endtrans %}'
        });
    </script>
{% endblock %}", "NovosgaReportsBundle:default:index.html.twig", "/var/www/html/sgf/novosga/modules/novosga/reports-bundle/Resources/views/default/index.html.twig");
    }
}
