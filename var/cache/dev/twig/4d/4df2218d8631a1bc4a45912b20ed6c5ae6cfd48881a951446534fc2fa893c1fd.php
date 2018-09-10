<?php

/* default/about.html.twig */
class __TwigTemplate_fce70b437bde17daf11d1db0bffe33eb092660cddf4f7c7f9b807a18c361fbaa extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/about.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/about.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/about.html.twig"));

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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("about.title"), "html", null, true);
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
        echo "    <div class=\"jumbotron\">
        <h1>";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("about.version.title", array("%version%" => (isset($context["version"]) || array_key_exists("version", $context) ? $context["version"] : (function () { throw new Twig_Error_Runtime('Variable "version" does not exist.', 9, $this->source); })()))), "html", null, true);
        echo "</h1>
        <p>";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("about.version.subtitle"), "html", null, true);
        echo "</p>
        <p>
            <button id=\"btn-checkversion\" class=\"btn btn-secondary btn-lg\" role=\"button\">
                <i class=\"fa fa-refresh\"></i>
                ";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("about.version.check_new"), "html", null, true);
        echo "
            </button>
            <a id=\"btn-downloader\" href=\"#\" class=\"btn btn-success btn-lg\" role=\"button\" target=\"_blank\" style=\"display:none\">
                <i class=\"fa fa-download\"></i>
                ";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("about.version.download"), "html", null, true);
        echo " <span class=\"version\"></span>
            </a>
            <span id=\"update-alert\" class=\"label label-success\" style=\"display:none\">
                <i class=\"fa fa-check\"></i>
                ";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("about.version.newest"), "html", null, true);
        echo "
            </span>
        </p>
    </div>
    <h2>";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("about.community.title"), "html", null, true);
        echo "</h2>
    <p>";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("about.community.subtitle"), "html", null, true);
        echo "</p>
    <div class=\"row\">
        <div class=\"col-lg-4\">
            <div class=\"card\">
                <div class=\"card-header\">
                    ";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("about.community.blog.title"), "html", null, true);
        echo "
                </div>
                <div class=\"card-body\">
                    <p>";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("about.community.blog.description"), "html", null, true);
        echo "</p>
                    <p>
                        <a href=\"https://medium.com/novosga\" class=\"btn btn-primary\" target=\"_blank\">
                            <i class=\"fa fa-eye\"></i>&nbsp;
                            ";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("about.community.blog.button"), "html", null, true);
        echo "
                        </a>
                    </p>
                </div>
           </div>
        </div>
        <div class=\"col-lg-4\">
            <div class=\"card\">
                <div class=\"card-header\">
                    ";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("about.community.forum.title"), "html", null, true);
        echo "
                </div>
                <div class=\"card-body\">
                    <p>";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("about.community.forum.description"), "html", null, true);
        echo "</p>
                    <p>
                        <a href=\"https://discuss.novosga.org\" class=\"btn btn-primary\" target=\"_blank\">
                            <i class=\"fa fa-eye\"></i>&nbsp;
                            ";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("about.community.forum.button"), "html", null, true);
        echo "
                        </a>
                    </p>
                </div>
           </div>
        </div>
        <div class=\"col-lg-4\">
            <div class=\"card\">
                <div class=\"card-header\">
                    ";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("about.community.github.title"), "html", null, true);
        echo "
                </div>
                <div class=\"card-body\">
                    <p>";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("about.community.github.description"), "html", null, true);
        echo "</p>
                    <p>
                        <a href=\"https://github.com/novosga\" class=\"btn btn-primary\" target=\"_blank\">
                            <i class=\"fa fa-eye\"></i>&nbsp;
                            ";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("about.community.github.button"), "html", null, true);
        echo "
                        </a>
                    </p>
                </div>
           </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 80
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 81
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <style>
        body>section {
            padding: 20px 0;
        }
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 89
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 90
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        (function () {
            'use strict'
            
            \$('#btn-checkversion').on('click', function () {
                var \$elem = \$(this);
                var icon = \$elem.prop('disabled', true).find('span');
                icon.addClass('fa-spin');
                \$.ajax({
                    url: 'https://api.github.com/repos/novosga/novosga/tags',
                    success: function(response) {
                        \$('#btn-checkversion').hide();
                        var latest = response[0];
                        if (App.version !== latest.name.replace('v', '')) {
                            \$('#btn-downloader')
                                .show()
                                .prop('href', 'https://github.com/novosga/novosga/releases/' + latest.name)
                                .find('.version')
                                .text(latest.name);
                        } else {
                            \$('#update-alert').show();
                        }
                    },
                    complete: function () {
                        icon.removeClass('fa-spin');
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
        return "default/about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 90,  233 => 89,  215 => 81,  206 => 80,  188 => 71,  181 => 67,  175 => 64,  163 => 55,  156 => 51,  150 => 48,  138 => 39,  131 => 35,  125 => 32,  117 => 27,  113 => 26,  106 => 22,  99 => 18,  92 => 14,  85 => 10,  81 => 9,  78 => 8,  69 => 7,  56 => 4,  47 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block title %}
    {{ 'about.title'|trans }}
{% endblock %}

{% block body %}
    <div class=\"jumbotron\">
        <h1>{{ 'about.version.title'|trans({'%version%': version}) }}</h1>
        <p>{{ 'about.version.subtitle'|trans }}</p>
        <p>
            <button id=\"btn-checkversion\" class=\"btn btn-secondary btn-lg\" role=\"button\">
                <i class=\"fa fa-refresh\"></i>
                {{ 'about.version.check_new'|trans }}
            </button>
            <a id=\"btn-downloader\" href=\"#\" class=\"btn btn-success btn-lg\" role=\"button\" target=\"_blank\" style=\"display:none\">
                <i class=\"fa fa-download\"></i>
                {{ 'about.version.download'|trans }} <span class=\"version\"></span>
            </a>
            <span id=\"update-alert\" class=\"label label-success\" style=\"display:none\">
                <i class=\"fa fa-check\"></i>
                {{ 'about.version.newest'|trans }}
            </span>
        </p>
    </div>
    <h2>{{ 'about.community.title'|trans }}</h2>
    <p>{{ 'about.community.subtitle'|trans }}</p>
    <div class=\"row\">
        <div class=\"col-lg-4\">
            <div class=\"card\">
                <div class=\"card-header\">
                    {{ 'about.community.blog.title'|trans }}
                </div>
                <div class=\"card-body\">
                    <p>{{ 'about.community.blog.description'|trans }}</p>
                    <p>
                        <a href=\"https://medium.com/novosga\" class=\"btn btn-primary\" target=\"_blank\">
                            <i class=\"fa fa-eye\"></i>&nbsp;
                            {{ 'about.community.blog.button'|trans }}
                        </a>
                    </p>
                </div>
           </div>
        </div>
        <div class=\"col-lg-4\">
            <div class=\"card\">
                <div class=\"card-header\">
                    {{ 'about.community.forum.title'|trans }}
                </div>
                <div class=\"card-body\">
                    <p>{{ 'about.community.forum.description'|trans }}</p>
                    <p>
                        <a href=\"https://discuss.novosga.org\" class=\"btn btn-primary\" target=\"_blank\">
                            <i class=\"fa fa-eye\"></i>&nbsp;
                            {{ 'about.community.forum.button'|trans }}
                        </a>
                    </p>
                </div>
           </div>
        </div>
        <div class=\"col-lg-4\">
            <div class=\"card\">
                <div class=\"card-header\">
                    {{ 'about.community.github.title'|trans }}
                </div>
                <div class=\"card-body\">
                    <p>{{ 'about.community.github.description'|trans }}</p>
                    <p>
                        <a href=\"https://github.com/novosga\" class=\"btn btn-primary\" target=\"_blank\">
                            <i class=\"fa fa-eye\"></i>&nbsp;
                            {{ 'about.community.github.button'|trans }}
                        </a>
                    </p>
                </div>
           </div>
        </div>
    </div>
{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        body>section {
            padding: 20px 0;
        }
    </style>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
        (function () {
            'use strict'
            
            \$('#btn-checkversion').on('click', function () {
                var \$elem = \$(this);
                var icon = \$elem.prop('disabled', true).find('span');
                icon.addClass('fa-spin');
                \$.ajax({
                    url: 'https://api.github.com/repos/novosga/novosga/tags',
                    success: function(response) {
                        \$('#btn-checkversion').hide();
                        var latest = response[0];
                        if (App.version !== latest.name.replace('v', '')) {
                            \$('#btn-downloader')
                                .show()
                                .prop('href', 'https://github.com/novosga/novosga/releases/' + latest.name)
                                .find('.version')
                                .text(latest.name);
                        } else {
                            \$('#update-alert').show();
                        }
                    },
                    complete: function () {
                        icon.removeClass('fa-spin');
                    }
                });
                return false;
            });
        })();
    </script>
{% endblock %}", "default/about.html.twig", "/var/www/html/sgf/novosga/templates/default/about.html.twig");
    }
}
