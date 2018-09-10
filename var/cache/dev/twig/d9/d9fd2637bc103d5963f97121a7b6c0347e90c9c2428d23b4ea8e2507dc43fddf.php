<?php

/* NovosgaUsersBundle:default:form.html.twig */
class __TwigTemplate_4528d50864528ab021b7b8b597cc8b24fd571712947c59f48b4c7fd21bbb74c7 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("@NovosgaUsers/base.html.twig", "NovosgaUsersBundle:default:form.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@NovosgaUsers/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NovosgaUsersBundle:default:form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NovosgaUsersBundle:default:form.html.twig"));

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
        echo "    <h1>
        <i class=\"fa fa-users\" aria-hidden=\"true\"></i>
        ";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title", array(), "NovosgaUsersBundle"), "html", null, true);
        echo "
        <small>
            ";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("subtitle", array(), "NovosgaUsersBundle"), "html", null, true);
        echo "
        </small>
    </h1>
        
    <hr>
        
    ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 16, $this->source); })()), 'form_start');
        echo "

        ";
        // line 18
        $this->loadTemplate("flashMessages.html.twig", "NovosgaUsersBundle:default:form.html.twig", 18)->display($context);
        // line 19
        echo "
        <div class=\"row\">
            <div class=\"col-md-5\">
                <fieldset>
                    <legend>";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("section.general.title", array(), "NovosgaUsersBundle"), "html", null, true);
        echo "</legend>

                    <p class=\"text-secondary\">";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("section.general.subtitle", array(), "NovosgaUsersBundle"), "html", null, true);
        echo "</p>

                    ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->source); })()), "login", array()), 'row');
        echo "

                    <div class=\"row\">
                        <div class=\"col-sm-4\">
                            ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->source); })()), "nome", array()), 'row');
        echo "
                        </div>
                        <div class=\"col-sm-8\">
                            ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->source); })()), "sobrenome", array()), 'row');
        echo "
                        </div>
                    </div>

                    ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 38, $this->source); })()), "email", array()), 'row');
        echo "

                    ";
        // line 40
        if (twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new Twig_Error_Runtime('Variable "entity" does not exist.', 40, $this->source); })()), "id", array())) {
            // line 41
            echo "                        <div class=\"row\">
                            <div class=\"col-6\">
                                ";
            // line 43
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 43, $this->source); })()), "ativo", array()), 'row');
            echo "
                            </div>
                            <div class=\"col-6 text-right\">
                                <button type=\"button\" class=\"btn btn-secondary\" data-toggle=\"modal\" data-target=\"#dialog-senha\">
                                    <i class=\"fa fa-lock\"></i>
                                    ";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.change_password", array(), "NovosgaUsersBundle"), "html", null, true);
            echo "
                                </button>
                            </div>
                        </div>
                    ";
        }
        // line 53
        echo "
                    ";
        // line 54
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new Twig_Error_Runtime('Variable "entity" does not exist.', 54, $this->source); })()), "id", array())) {
            // line 55
            echo "                        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 55, $this->source); })()), "senha", array()), 'row');
            echo "

                        ";
            // line 57
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 57, $this->source); })()), "confirmacaoSenha", array()), 'row');
            echo "
                    ";
        }
        // line 59
        echo "                </fieldset>
            </div>
            <div class=\"col-6 ml-auto\" id=\"lotacoes\">
                <fieldset>
                    <legend>";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("section.lotation.title", array(), "NovosgaUsersBundle"), "html", null, true);
        echo "</legend>

                    <p class=\"text-secondary\">";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("section.lotation.subtitle", array(), "NovosgaUsersBundle"), "html", null, true);
        echo "</p>
                    
                    <table class=\"table\">
                        <thead class=\"thead-light\">
                            <tr>
                                <th>";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.unity", array(), "NovosgaUsersBundle"), "html", null, true);
        echo "</th>
                                <th>";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.role", array(), "NovosgaUsersBundle"), "html", null, true);
        echo "</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody v-cloak>
                            <tr v-for=\"lotacao in lotacoes\">
                                <td>
                                    ";
        // line 80
        echo "
                                        {{ lotacao.unidade.nome }}
                                    ";
        echo "
                                    <input type=\"hidden\" name=\"novasUnidades[]\" v-bind:value=\"lotacao.unidade.id\" v-if=\"lotacao.novo\">
                                </td>
                                <td>
                                    ";
        // line 86
        echo "
                                        {{ lotacao.perfil.nome }}
                                    ";
        echo "
                                    <input type=\"hidden\" name=\"novosPerfis[]\" v-bind:value=\"lotacao.perfil.id\" v-if=\"lotacao.novo\">
                                </td>
                                <td class=\"text-right text-nowrap\">
                                    <button type=\"button\" title=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.view_permissions", array(), "NovosgaUsersBundle"), "html", null, true);
        echo "\" class=\"btn btn-secondary\" v-on:click=\"viewPerfil(lotacao.perfil.id)\">
                                        <i class=\"fa fa-eye\"></i>
                                    </button>

                                    <button type=\"button\" title=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.remove", array(), "NovosgaUsersBundle"), "html", null, true);
        echo "\" class=\"btn btn-danger\" v-on:click=\"remove(lotacao)\">
                                        <i class=\"fa fa-remove\"></i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan=\"2\">
                                </td>
                                <td class=\"text-right\">
                                    <button type=\"button\" class=\"btn btn-secondary\" data-toggle=\"modal\" data-target=\"#dialog-lotacao\">
                                        <i class=\"fa fa-plus\"></i>&nbsp;
                                        ";
        // line 107
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.add", array(), "NovosgaUsersBundle"), "html", null, true);
        echo "
                                    </button>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                    
                    ";
        // line 114
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 114, $this->source); })()), "lotacoesRemovidas", array()), 'row', array("attr" => array("v-model" => "idsLotacoesRemovidas")));
        echo "
                    
                </fieldset>
            </div>
        </div>
        
        <hr>

        <div class=\"buttons\">
            <button type=\"submit\" class=\"btn btn-primary\">
                <i class=\"fa fa-check\"></i> 
                ";
        // line 125
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.save", array(), "NovosgaUsersBundle"), "html", null, true);
        echo "
            </button>
            <a href=\"";
        // line 127
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("novosga_users_index");
        echo "\" class=\"btn btn-secondary\">
                <i class=\"fa fa-chevron-left\"></i>
                ";
        // line 129
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.back", array(), "NovosgaUsersBundle"), "html", null, true);
        echo "
            </a>
        </div>

    ";
        // line 133
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 133, $this->source); })()), 'form_end');
        echo "

    
    ";
        // line 137
        echo "    <div id=\"dialog-lotacao\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <form id=\"lotacao-form\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\">";
        // line 142
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.lotation", array(), "NovosgaUsersBundle"), "html", null, true);
        echo "</h5>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                    </div>
                    <div class=\"modal-body\">
                        <!-- dynamic content loaded by ajax -->
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">
                            ";
        // line 150
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.close", array(), "NovosgaUsersBundle"), "html", null, true);
        echo "
                        </button>
                        <button type=\"submit\" class=\"btn btn-primary\">
                            ";
        // line 153
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.add", array(), "NovosgaUsersBundle"), "html", null, true);
        echo "
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
                        
    ";
        // line 162
        echo "    <div id=\"dialog-perfil\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\">";
        // line 166
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.role", array(), "NovosgaUsersBundle"), "html", null, true);
        echo "</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                </div>
                <div class=\"modal-body\" v-if=\"perfil\">
                    <table class=\"table table-bordered\">
                        <tr>
                            <th>
                                ";
        // line 173
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.name", array(), "NovosgaUsersBundle"), "html", null, true);
        echo "
                            </th>
                            <td>
                                ";
        // line 178
        echo "
                                    {{perfil.nome}}
                                ";
        echo "
                            </td>
                        </tr>
                        <tr>
                            <th>
                                ";
        // line 183
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.description", array(), "NovosgaUsersBundle"), "html", null, true);
        echo "
                            </th>
                            <td>
                                ";
        // line 188
        echo "
                                    {{perfil.descricao}}
                                ";
        echo "
                            </td>
                        </tr>
                        <tr>
                            <th>
                                ";
        // line 193
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.permissions", array(), "NovosgaUsersBundle"), "html", null, true);
        echo "
                            </th>
                            <td>
                                ";
        // line 202
        echo "
                                    <ul>
                                        <li v-for=\"modulo in perfil.modulos\">
                                            {{modulo}}
                                        </li>
                                    </ul>
                                ";
        echo "
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    ";
        // line 212
        echo "    ";
        if ((isset($context["passwordForm"]) || array_key_exists("passwordForm", $context) ? $context["passwordForm"] : (function () { throw new Twig_Error_Runtime('Variable "passwordForm" does not exist.', 212, $this->source); })())) {
            // line 213
            echo "        <div id=\"dialog-senha\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    ";
            // line 216
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["passwordForm"]) || array_key_exists("passwordForm", $context) ? $context["passwordForm"] : (function () { throw new Twig_Error_Runtime('Variable "passwordForm" does not exist.', 216, $this->source); })()), 'form_start', array("attr" => array("v-on:submit.prevent" => "alterarSenha")));
            echo "
                        <div class=\"modal-header\">
                            <h5 class=\"modal-title\">";
            // line 218
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.change_password", array(), "NovosgaUsersBundle"), "html", null, true);
            echo "</h5>
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                        </div>
                        <div class=\"modal-body\">
                            <div class=\"form-group\">
                                ";
            // line 223
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["passwordForm"]) || array_key_exists("passwordForm", $context) ? $context["passwordForm"] : (function () { throw new Twig_Error_Runtime('Variable "passwordForm" does not exist.', 223, $this->source); })()), "senha", array()), 'label');
            echo "
                                ";
            // line 224
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["passwordForm"]) || array_key_exists("passwordForm", $context) ? $context["passwordForm"] : (function () { throw new Twig_Error_Runtime('Variable "passwordForm" does not exist.', 224, $this->source); })()), "senha", array()), 'widget', array("attr" => array("v-bind:class" => "{'is-invalid': errors.senha}")));
            echo "
                                <div v-text=\"errors.senha\" v-bind:class=\"{'invalid-feedback': errors.senha}\"></div>
                            </div>
                            <div class=\"form-group\">
                                ";
            // line 228
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["passwordForm"]) || array_key_exists("passwordForm", $context) ? $context["passwordForm"] : (function () { throw new Twig_Error_Runtime('Variable "passwordForm" does not exist.', 228, $this->source); })()), "confirmacaoSenha", array()), 'label');
            echo "
                                ";
            // line 229
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["passwordForm"]) || array_key_exists("passwordForm", $context) ? $context["passwordForm"] : (function () { throw new Twig_Error_Runtime('Variable "passwordForm" does not exist.', 229, $this->source); })()), "confirmacaoSenha", array()), 'widget', array("attr" => array("v-bind:class" => "{'is-invalid': errors.confirmacaoSenha}")));
            echo "
                                <div v-text=\"errors.confirmacaoSenha\" v-bind:class=\"{'invalid-feedback': errors.confirmacaoSenha}\"></div>
                            </div>
                        </div>
                        <div class=\"modal-footer\">
                            <button type=\"submit\" class=\"btn btn-primary\">
                                ";
            // line 235
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.change", array(), "NovosgaUsersBundle"), "html", null, true);
            echo "
                            </button>
                        </div>
                    ";
            // line 238
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["passwordForm"]) || array_key_exists("passwordForm", $context) ? $context["passwordForm"] : (function () { throw new Twig_Error_Runtime('Variable "passwordForm" does not exist.', 238, $this->source); })()), 'form_end');
            echo "
                </div>
            </div>
        </div>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 245
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 246
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        var unidades = [ ";
        // line 248
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["unidades"]) || array_key_exists("unidades", $context) ? $context["unidades"] : (function () { throw new Twig_Error_Runtime('Variable "unidades" does not exist.', 248, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["unidade"]) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["unidade"], "id", array()), "html", null, true);
            echo ",";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unidade'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " ];
        var lotacoes = [";
        // line 250
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new Twig_Error_Runtime('Variable "entity" does not exist.', 250, $this->source); })()), "lotacoes", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["lotacao"]) {
            // line 251
            echo "{
                        id: ";
            // line 252
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["lotacao"], "id", array())) ? (twig_get_attribute($this->env, $this->source, $context["lotacao"], "id", array())) : ("null")), "html", null, true);
            echo ",
                        unidade: {
                            id: ";
            // line 254
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["lotacao"], "unidade", array()), "id", array()), "html", null, true);
            echo ",
                            nome: \"";
            // line 255
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["lotacao"], "unidade", array()), "nome", array()), "html", null, true);
            echo "\"
                        },
                        perfil: {
                            id: ";
            // line 258
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["lotacao"], "perfil", array()), "id", array()), "html", null, true);
            echo ",
                            nome: \"";
            // line 259
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["lotacao"], "perfil", array()), "nome", array()), "html", null, true);
            echo "\"
                        }
                    },";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lotacao'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 263
        echo "];
        var lotacoesRemovidas = [";
        // line 265
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lotacoesRemovidas"]) || array_key_exists("lotacoesRemovidas", $context) ? $context["lotacoesRemovidas"] : (function () { throw new Twig_Error_Runtime('Variable "lotacoesRemovidas" does not exist.', 265, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["lotacao"]) {
            // line 266
            echo "{
                        id: ";
            // line 267
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lotacao"], "id", array()), "html", null, true);
            echo ",
                        unidade: {
                            id: ";
            // line 269
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["lotacao"], "unidade", array()), "id", array()), "html", null, true);
            echo ",
                            nome: \"";
            // line 270
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["lotacao"], "unidade", array()), "nome", array()), "html", null, true);
            echo "\"
                        },
                        perfil: {
                            id: ";
            // line 273
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["lotacao"], "perfil", array()), "id", array()), "html", null, true);
            echo ",
                            nome: \"";
            // line 274
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["lotacao"], "perfil", array()), "nome", array()), "html", null, true);
            echo "\"
                        }
                    },";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lotacao'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 278
        echo "];
    </script>
    <script src=\"";
        // line 280
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/novosgausers/js/script.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "NovosgaUsersBundle:default:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  557 => 280,  553 => 278,  544 => 274,  540 => 273,  534 => 270,  530 => 269,  525 => 267,  522 => 266,  518 => 265,  515 => 263,  506 => 259,  502 => 258,  496 => 255,  492 => 254,  487 => 252,  484 => 251,  480 => 250,  468 => 248,  462 => 246,  453 => 245,  437 => 238,  431 => 235,  422 => 229,  418 => 228,  411 => 224,  407 => 223,  399 => 218,  394 => 216,  389 => 213,  386 => 212,  368 => 202,  362 => 193,  352 => 188,  346 => 183,  336 => 178,  330 => 173,  320 => 166,  314 => 162,  303 => 153,  297 => 150,  286 => 142,  279 => 137,  273 => 133,  266 => 129,  261 => 127,  256 => 125,  242 => 114,  232 => 107,  216 => 94,  209 => 90,  200 => 86,  191 => 80,  181 => 71,  177 => 70,  169 => 65,  164 => 63,  158 => 59,  153 => 57,  147 => 55,  145 => 54,  142 => 53,  134 => 48,  126 => 43,  122 => 41,  120 => 40,  115 => 38,  108 => 34,  102 => 31,  95 => 27,  90 => 25,  85 => 23,  79 => 19,  77 => 18,  72 => 16,  63 => 10,  58 => 8,  54 => 6,  45 => 5,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@NovosgaUsers/base.html.twig\" %}

{% trans_default_domain 'NovosgaUsersBundle' %}

{% block body %}
    <h1>
        <i class=\"fa fa-users\" aria-hidden=\"true\"></i>
        {{ 'title'|trans }}
        <small>
            {{ 'subtitle'|trans }}
        </small>
    </h1>
        
    <hr>
        
    {{ form_start(form) }}

        {% include 'flashMessages.html.twig' %}

        <div class=\"row\">
            <div class=\"col-md-5\">
                <fieldset>
                    <legend>{{ 'section.general.title'|trans }}</legend>

                    <p class=\"text-secondary\">{{ 'section.general.subtitle'|trans }}</p>

                    {{ form_row(form.login) }}

                    <div class=\"row\">
                        <div class=\"col-sm-4\">
                            {{ form_row(form.nome) }}
                        </div>
                        <div class=\"col-sm-8\">
                            {{ form_row(form.sobrenome) }}
                        </div>
                    </div>

                    {{ form_row(form.email) }}

                    {% if entity.id %}
                        <div class=\"row\">
                            <div class=\"col-6\">
                                {{ form_row(form.ativo) }}
                            </div>
                            <div class=\"col-6 text-right\">
                                <button type=\"button\" class=\"btn btn-secondary\" data-toggle=\"modal\" data-target=\"#dialog-senha\">
                                    <i class=\"fa fa-lock\"></i>
                                    {{ 'button.change_password'|trans }}
                                </button>
                            </div>
                        </div>
                    {% endif %}

                    {% if not entity.id %}
                        {{ form_row(form.senha) }}

                        {{ form_row(form.confirmacaoSenha) }}
                    {% endif %}
                </fieldset>
            </div>
            <div class=\"col-6 ml-auto\" id=\"lotacoes\">
                <fieldset>
                    <legend>{{ 'section.lotation.title'|trans }}</legend>

                    <p class=\"text-secondary\">{{ 'section.lotation.subtitle'|trans }}</p>
                    
                    <table class=\"table\">
                        <thead class=\"thead-light\">
                            <tr>
                                <th>{{ 'label.unity'|trans }}</th>
                                <th>{{ 'label.role'|trans }}</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody v-cloak>
                            <tr v-for=\"lotacao in lotacoes\">
                                <td>
                                    {% verbatim %}
                                        {{ lotacao.unidade.nome }}
                                    {% endverbatim %}
                                    <input type=\"hidden\" name=\"novasUnidades[]\" v-bind:value=\"lotacao.unidade.id\" v-if=\"lotacao.novo\">
                                </td>
                                <td>
                                    {% verbatim %}
                                        {{ lotacao.perfil.nome }}
                                    {% endverbatim %}
                                    <input type=\"hidden\" name=\"novosPerfis[]\" v-bind:value=\"lotacao.perfil.id\" v-if=\"lotacao.novo\">
                                </td>
                                <td class=\"text-right text-nowrap\">
                                    <button type=\"button\" title=\"{{ 'button.view_permissions'|trans }}\" class=\"btn btn-secondary\" v-on:click=\"viewPerfil(lotacao.perfil.id)\">
                                        <i class=\"fa fa-eye\"></i>
                                    </button>

                                    <button type=\"button\" title=\"{{ 'button.remove'|trans }}\" class=\"btn btn-danger\" v-on:click=\"remove(lotacao)\">
                                        <i class=\"fa fa-remove\"></i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan=\"2\">
                                </td>
                                <td class=\"text-right\">
                                    <button type=\"button\" class=\"btn btn-secondary\" data-toggle=\"modal\" data-target=\"#dialog-lotacao\">
                                        <i class=\"fa fa-plus\"></i>&nbsp;
                                        {{ 'button.add'|trans }}
                                    </button>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                    
                    {{ form_row(form.lotacoesRemovidas, { attr: { 'v-model': 'idsLotacoesRemovidas' } }) }}
                    
                </fieldset>
            </div>
        </div>
        
        <hr>

        <div class=\"buttons\">
            <button type=\"submit\" class=\"btn btn-primary\">
                <i class=\"fa fa-check\"></i> 
                {{ 'button.save'|trans }}
            </button>
            <a href=\"{{ path('novosga_users_index') }}\" class=\"btn btn-secondary\">
                <i class=\"fa fa-chevron-left\"></i>
                {{ 'button.back'|trans }}
            </a>
        </div>

    {{ form_end(form) }}

    
    {# lotação #}
    <div id=\"dialog-lotacao\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <form id=\"lotacao-form\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\">{{ 'label.lotation'|trans}}</h5>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                    </div>
                    <div class=\"modal-body\">
                        <!-- dynamic content loaded by ajax -->
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">
                            {{ 'button.close'|trans }}
                        </button>
                        <button type=\"submit\" class=\"btn btn-primary\">
                            {{ 'button.add'|trans }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
                        
    {# permissoes #}
    <div id=\"dialog-perfil\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\">{{ 'label.role'|trans }}</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                </div>
                <div class=\"modal-body\" v-if=\"perfil\">
                    <table class=\"table table-bordered\">
                        <tr>
                            <th>
                                {{ 'label.name'|trans }}
                            </th>
                            <td>
                                {% verbatim %}
                                    {{perfil.nome}}
                                {% endverbatim %}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ 'label.description'|trans }}
                            </th>
                            <td>
                                {% verbatim %}
                                    {{perfil.descricao}}
                                {% endverbatim %}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ 'label.permissions'|trans }}
                            </th>
                            <td>
                                {% verbatim %}
                                    <ul>
                                        <li v-for=\"modulo in perfil.modulos\">
                                            {{modulo}}
                                        </li>
                                    </ul>
                                {% endverbatim %}
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    {# dialog mudar senha apenas para usuarios ja cadastrados #}
    {% if passwordForm %}
        <div id=\"dialog-senha\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    {{ form_start(passwordForm, { attr: { 'v-on:submit.prevent': 'alterarSenha' } }) }}
                        <div class=\"modal-header\">
                            <h5 class=\"modal-title\">{{ 'label.change_password'|trans }}</h5>
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                        </div>
                        <div class=\"modal-body\">
                            <div class=\"form-group\">
                                {{ form_label(passwordForm.senha) }}
                                {{ form_widget(passwordForm.senha, { attr: { 'v-bind:class': \"{'is-invalid': errors.senha}\" } }) }}
                                <div v-text=\"errors.senha\" v-bind:class=\"{'invalid-feedback': errors.senha}\"></div>
                            </div>
                            <div class=\"form-group\">
                                {{ form_label(passwordForm.confirmacaoSenha) }}
                                {{ form_widget(passwordForm.confirmacaoSenha, { attr: { 'v-bind:class': \"{'is-invalid': errors.confirmacaoSenha}\" } }) }}
                                <div v-text=\"errors.confirmacaoSenha\" v-bind:class=\"{'invalid-feedback': errors.confirmacaoSenha}\"></div>
                            </div>
                        </div>
                        <div class=\"modal-footer\">
                            <button type=\"submit\" class=\"btn btn-primary\">
                                {{ 'button.change'|trans }}
                            </button>
                        </div>
                    {{ form_end(passwordForm) }}
                </div>
            </div>
        </div>
    {% endif %}
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
        var unidades = [ {% for unidade in unidades %}{{ unidade.id }},{% endfor %} ];
        var lotacoes = [ 
                {%- for lotacao in entity.lotacoes -%}
                    {
                        id: {{ lotacao.id ? lotacao.id : 'null' }},
                        unidade: {
                            id: {{ lotacao.unidade.id }},
                            nome: \"{{ lotacao.unidade.nome }}\"
                        },
                        perfil: {
                            id: {{ lotacao.perfil.id }},
                            nome: \"{{ lotacao.perfil.nome }}\"
                        }
                    },
                {%- endfor -%} 
            ];
        var lotacoesRemovidas = [
                {%- for lotacao in lotacoesRemovidas -%}
                    {
                        id: {{ lotacao.id }},
                        unidade: {
                            id: {{ lotacao.unidade.id }},
                            nome: \"{{ lotacao.unidade.nome }}\"
                        },
                        perfil: {
                            id: {{ lotacao.perfil.id }},
                            nome: \"{{ lotacao.perfil.nome }}\"
                        }
                    },
                {%- endfor -%} 
            ];
    </script>
    <script src=\"{{ asset('bundles/novosgausers/js/script.js') }}\"></script>
{% endblock %}", "NovosgaUsersBundle:default:form.html.twig", "/var/www/html/sgf/novosga/modules/novosga/users-bundle/Resources/views/default/form.html.twig");
    }
}
