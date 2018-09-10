<?php

/* default/about.html.twig */
class __TwigTemplate_736a16b41026453f137e2feefc10999ef930ddd969f09f6057cc3d4d2877fdcb extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("about.title"), "html", null, true);
        echo "
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "    <div class=\"jumbotron\">
        <h1>";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("about.version.title", array("%version%" => ($context["version"] ?? null))), "html", null, true);
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
    }

    // line 80
    public function block_stylesheets($context, array $blocks = array())
    {
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
    }

    // line 89
    public function block_javascripts($context, array $blocks = array())
    {
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
        return array (  188 => 90,  185 => 89,  173 => 81,  170 => 80,  158 => 71,  151 => 67,  145 => 64,  133 => 55,  126 => 51,  120 => 48,  108 => 39,  101 => 35,  95 => 32,  87 => 27,  83 => 26,  76 => 22,  69 => 18,  62 => 14,  55 => 10,  51 => 9,  48 => 8,  45 => 7,  38 => 4,  35 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/about.html.twig", "/var/www/html/sgf/novosga/templates/default/about.html.twig");
    }
}
