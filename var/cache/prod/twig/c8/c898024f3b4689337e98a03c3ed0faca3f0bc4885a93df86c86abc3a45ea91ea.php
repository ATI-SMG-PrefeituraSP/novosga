<?php

/* profile/index.html.twig */
class __TwigTemplate_fede08d324bfdf171599dfdb6e50ccfa98322ca3bcb3f62000f1e404c65e1168 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profile.title"), "html", null, true);
        echo "
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "login", array()), "html", null, true);
        echo "\" readonly>
                    </div>
                    
                    <div class=\"row\">
                        <div class=\"col-md-4 col-lg-3\">
                            ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nome", array()), 'row');
        echo "
                        </div>
                        <div class=\"col-md-8 col-lg-9\">
                            ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "sobrenome", array()), 'row');
        echo "
                        </div>
                    </div>

                    ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", array()), 'row');
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "lotacoes", array()));
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
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
    }

    // line 125
    public function block_stylesheets($context, array $blocks = array())
    {
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
    }

    // line 134
    public function block_javascripts($context, array $blocks = array())
    {
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
        return array (  270 => 135,  267 => 134,  255 => 126,  252 => 125,  240 => 116,  231 => 110,  224 => 106,  217 => 102,  209 => 97,  199 => 90,  193 => 87,  185 => 82,  175 => 74,  165 => 70,  159 => 67,  155 => 65,  151 => 64,  143 => 59,  137 => 56,  128 => 50,  123 => 48,  115 => 43,  108 => 39,  102 => 36,  94 => 31,  90 => 30,  84 => 27,  79 => 25,  73 => 21,  71 => 20,  66 => 18,  57 => 12,  52 => 10,  48 => 8,  45 => 7,  38 => 4,  35 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "profile/index.html.twig", "/var/www/html/sgf/novosga/templates/profile/index.html.twig");
    }
}
