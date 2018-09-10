<?php

/* NovosgaSettingsBundle:default:index.html.twig */
class __TwigTemplate_24298e84d60edd530200938ebc9f90b0316958af2ec73d9375b1c87df8981996 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("@NovosgaSettings/base.html.twig", "NovosgaSettingsBundle:default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@NovosgaSettings/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NovosgaSettingsBundle:default:index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NovosgaSettingsBundle:default:index.html.twig"));

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
                <i class=\"fa fa-wrench\" aria-hidden=\"true\"></i>
                ";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title", array(), "NovosgaSettingsBundle"), "html", null, true);
        echo "
                <small>
                    ";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("subtitle", array(), "NovosgaSettingsBundle"), "html", null, true);
        echo "
                </small>
            </h1>
        </div>
    </div>

    <hr>

    <div id=\"settings\">
        <ul class=\"nav nav-tabs\">
            <li class=\"nav-item\">
                <a href=\"#tab-servicos\" data-toggle=\"tab\" class=\"nav-link active\">
                    ";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Serviços", array(), "NovosgaSettingsBundle");
        // line 25
        echo "                </a>
            </li>
            <li class=\"nav-item\">
                <a href=\"#tab-triagem\" data-toggle=\"tab\" class=\"nav-link\">
                    ";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Triagem", array(), "NovosgaSettingsBundle");
        // line 30
        echo "                </a>
            </li>
            <li class=\"nav-item\">
                <a href=\"#tab-atendimento\" data-toggle=\"tab\" class=\"nav-link\">
                    ";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Atendimento", array(), "NovosgaSettingsBundle");
        // line 35
        echo "                </a>
            </li>
        </ul>
        <div class=\"tab-content\">
            <div id=\"tab-servicos\" class=\"tab-pane active\">
                <table class=\"table\">
                    <thead class=\"thead-light\">
                        <tr>
                            <th class=\"ativo\">
                                ";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Ativo", array(), "NovosgaSettingsBundle");
        // line 45
        echo "                            </th>
                            <th class=\"sigla\">
                                ";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Sigla", array(), "NovosgaSettingsBundle");
        // line 48
        echo "                            </th>
                            <th>
                                ";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Serviço", array(), "NovosgaSettingsBundle");
        // line 51
        echo "                            </th>
                            <th>
                                ";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Local", array(), "NovosgaSettingsBundle");
        // line 54
        echo "                            </th>
                            <th>
                                ";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Departamento", array(), "NovosgaSettingsBundle");
        // line 57
        echo "                            </th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody v-cloak>
                        <tr v-for=\"su in servicosUnidade\">
                            <td class=\"text-center\">
                                ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["inlineForm"]) || array_key_exists("inlineForm", $context) ? $context["inlineForm"] : (function () { throw new Twig_Error_Runtime('Variable "inlineForm" does not exist.', 64, $this->source); })()), "ativo", array()), 'widget', array("label" => false, "attr" => array("v-model" => "su.ativo", "v-on:change" => "updateServico(su)")));
        echo "
                            </td>
                            <td>
                                ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["inlineForm"]) || array_key_exists("inlineForm", $context) ? $context["inlineForm"] : (function () { throw new Twig_Error_Runtime('Variable "inlineForm" does not exist.', 67, $this->source); })()), "sigla", array()), 'row', array("label" => false, "attr" => array("v-model" => "su.sigla", "v-on:input" => "uppercase(su)", "v-on:blur" => "updateServico(su)", "v-bind:disabled" => "!su.ativo")));
        echo "
                            </td>
                            <td>
                                ";
        // line 72
        echo "
                                    {{su.servico.nome}}
                                ";
        echo "
                            </td>
                            <td>
                                ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["inlineForm"]) || array_key_exists("inlineForm", $context) ? $context["inlineForm"] : (function () { throw new Twig_Error_Runtime('Variable "inlineForm" does not exist.', 75, $this->source); })()), "local", array()), 'row', array("label" => false, "attr" => array("v-model" => "su.local", "v-on:change" => "updateServico(su)", "v-bind:disabled" => "!su.ativo")));
        echo "
                            </td>
                            <td>
                                ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["inlineForm"]) || array_key_exists("inlineForm", $context) ? $context["inlineForm"] : (function () { throw new Twig_Error_Runtime('Variable "inlineForm" does not exist.', 78, $this->source); })()), "departamento", array()), 'row', array("label" => false, "attr" => array("v-model" => "su.departamento", "v-on:change" => "updateServico(su)", "v-bind:disabled" => "!su.ativo")));
        echo "
                            </td>
                            <td class=\"text-right\">
                                <button type=\"button\" class=\"btn btn-secondary\" v-on:click=\"showModal(su)\">
                                    <i class=\"fa fa-cog\"></i>
                                </button>
                                <button type=\"button\" class=\"btn btn-danger\" v-on:click=\"removeServicoUnidade(su)\" v-bind:disabled=\"su.ativo\">
                                    <i class=\"fa fa-trash\"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class=\"text-right\">
                                <button type=\"button\" class=\"btn btn-primary\" v-on:click=\"showServicos\">
                                    <i class=\"fa fa-plus\"></i>
                                </button>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <div id=\"tab-triagem\" class=\"tab-pane\">
                <div class=\"row\">
                    <div class=\"col-lg-7\">
                        ";
        // line 109
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["impressaoForm"]) || array_key_exists("impressaoForm", $context) ? $context["impressaoForm"] : (function () { throw new Twig_Error_Runtime('Variable "impressaoForm" does not exist.', 109, $this->source); })()), 'form_start', array("attr" => array("v-on:submit.prevent" => "updateImpressao")));
        echo "
                        <div class=\"card\">
                            <div class=\"card-header\">
                                ";
        // line 112
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Impressão", array(), "NovosgaSettingsBundle");
        // line 113
        echo "                            </div>
                            <div class=\"card-body\">
                                <div class=\"row\">
                                    <div class=\"col-7\">
                                        ";
        // line 117
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["impressaoForm"]) || array_key_exists("impressaoForm", $context) ? $context["impressaoForm"] : (function () { throw new Twig_Error_Runtime('Variable "impressaoForm" does not exist.', 117, $this->source); })()), "cabecalho", array()), 'row', array("label" => "Cabeçalho", "attr" => array("v-model" => "impressao.cabecalho")));
        echo "

                                        ";
        // line 119
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["impressaoForm"]) || array_key_exists("impressaoForm", $context) ? $context["impressaoForm"] : (function () { throw new Twig_Error_Runtime('Variable "impressaoForm" does not exist.', 119, $this->source); })()), "rodape", array()), 'row', array("label" => "Rodapé", "attr" => array("v-model" => "impressao.rodape")));
        echo "
                                    </div>
                                    <div class=\"col-5\">
                                        <label>Layout</label>
                                        
                                        ";
        // line 124
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["impressaoForm"]) || array_key_exists("impressaoForm", $context) ? $context["impressaoForm"] : (function () { throw new Twig_Error_Runtime('Variable "impressaoForm" does not exist.', 124, $this->source); })()), "exibirData", array()), 'row', array("label" => "Exibir data", "attr" => array("v-model" => "impressao.exibirData")));
        echo "

                                        ";
        // line 126
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["impressaoForm"]) || array_key_exists("impressaoForm", $context) ? $context["impressaoForm"] : (function () { throw new Twig_Error_Runtime('Variable "impressaoForm" does not exist.', 126, $this->source); })()), "exibirPrioridade", array()), 'row', array("label" => "Exibir prioridade", "attr" => array("v-model" => "impressao.exibirPrioridade")));
        echo "

                                        ";
        // line 128
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["impressaoForm"]) || array_key_exists("impressaoForm", $context) ? $context["impressaoForm"] : (function () { throw new Twig_Error_Runtime('Variable "impressaoForm" does not exist.', 128, $this->source); })()), "exibirNomeUnidade", array()), 'row', array("label" => "Exibir nome da unidade", "attr" => array("v-model" => "impressao.exibirNomeUnidade")));
        echo "

                                        ";
        // line 130
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["impressaoForm"]) || array_key_exists("impressaoForm", $context) ? $context["impressaoForm"] : (function () { throw new Twig_Error_Runtime('Variable "impressaoForm" does not exist.', 130, $this->source); })()), "exibirNomeServico", array()), 'row', array("label" => "Exibir nome do serviço", "attr" => array("v-model" => "impressao.exibirNomeServico")));
        echo "

                                        ";
        // line 132
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["impressaoForm"]) || array_key_exists("impressaoForm", $context) ? $context["impressaoForm"] : (function () { throw new Twig_Error_Runtime('Variable "impressaoForm" does not exist.', 132, $this->source); })()), "exibirMensagemServico", array()), 'row', array("label" => "Exibir mensagem do serviço", "attr" => array("v-model" => "impressao.exibirMensagemServico")));
        echo "
                                    </div>
                                </div>

                                <button type=\"submit\" class=\"btn btn-primary\">
                                    <i class=\"fa fa-save\"></i>
                                    ";
        // line 138
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Salvar configuração de impressão", array(), "NovosgaSettingsBundle");
        // line 139
        echo "                                </button>
                            </div>
                        </div>
                        ";
        // line 142
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["impressaoForm"]) || array_key_exists("impressaoForm", $context) ? $context["impressaoForm"] : (function () { throw new Twig_Error_Runtime('Variable "impressaoForm" does not exist.', 142, $this->source); })()), 'form_end');
        echo "
                    </div>
                    <div class=\"col-lg-5\">
                        <div class=\"card\">
                            <div class=\"card-header text-white bg-danger\">
                                <i class=\"fa fa-warning\"></i>
                                ";
        // line 148
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Zona de perigo", array(), "NovosgaSettingsBundle");
        // line 149
        echo "                            </div>
                            <table class=\"table\">
                                <thead>
                                    <tr>
                                        <th>
                                            ";
        // line 154
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Serviço", array(), "NovosgaSettingsBundle");
        // line 155
        echo "                                        </th>
                                        <th>
                                            ";
        // line 157
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Número atual", array(), "NovosgaSettingsBundle");
        // line 158
        echo "                                        </th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for=\"su in servicosUnidade\">
                                        <td class=\"nome\">";
        // line 168
        echo "{{su.sigla}} - {{su.servico.nome}}";
        echo "</td>
                                        <td>
                                            <input type=\"text\" class=\"form-control\" disabled
                                                   v-bind:value=\"contadores[su.servico.id]\">
                                        </td>
                                        <td class=\"text-right\">
                                            <button type=\"button\" class=\"btn btn-secondary\" title=\"";
        // line 174
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Reiniciar contagem do serviço", array(), "NovosgaSettingsBundle");
        echo "\"
                                                    v-on:click=\"reiniciarContator(su.servico.id)\">
                                                <i class=\"fa fa-refresh\"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class=\"table\">
                                <tbody>
                                    <tr>
                                        <td>
                                            <button class=\"btn btn-danger btn-block\" v-on:click=\"reiniciarSenhas\">
                                                <i class=\"fa fa-refresh\"></i>
                                                ";
        // line 188
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Reiniciar todas senhas", array(), "NovosgaSettingsBundle");
        // line 189
        echo "                                            </button>
                                        </td>
                                        <td>
                                            <div class=\"help-block\" style=\"margin-top:0\">Move todos os atendimentos para o histórico e reinicia a contagem de todos serviços.</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <button class=\"btn btn-danger btn-block\" v-on:click=\"limparSenhas\">
                                                <i class=\"fa fa-trash\"></i>
                                                ";
        // line 199
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Limpar dados", array(), "NovosgaSettingsBundle");
        // line 200
        echo "                                            </button>
                                        </td>
                                        <td>
                                            <div class=\"help-block\" style=\"margin-top:0\">Remover todo histórico de atendimentos da unidade.</div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div id=\"tab-atendimento\" class=\"tab-pane\">
                <div class=\"row\">
                    <div class=\"col-lg-3 col-md-4 col-sm-6\" v-for=\"usuario in usuarios\">
                        <div class=\"card\">
                            <div class=\"card-header\">
                                ";
        // line 219
        echo "
                                    {{ usuario.nome }} ({{ usuario.login }})
                                ";
        echo "
                            </div>
                            <table class=\"table\">
                                <tbody>
                                    <tr>
                                        <th>
                                            ";
        // line 225
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Guichê", array(), "NovosgaSettingsBundle");
        // line 226
        echo "                                        </th>
                                        <td>
                                            <input type=\"number\" class=\"form-control\" v-model=\"usuario.numero\" v-on:change=\"updateUsuario(usuario)\">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            ";
        // line 233
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Tipo de atendimento", array(), "NovosgaSettingsBundle");
        // line 234
        echo "                                        </th>
                                        <td>
                                            <select class=\"form-control\" v-model=\"usuario.tipoAtendimento\" v-on:change=\"updateUsuario(usuario)\">
                                                ";
        // line 237
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tiposAtendimento"]) || array_key_exists("tiposAtendimento", $context) ? $context["tiposAtendimento"] : (function () { throw new Twig_Error_Runtime('Variable "tiposAtendimento" does not exist.', 237, $this->source); })()));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            // line 238
            echo "                                                <option value=\"";
            echo twig_escape_filter($this->env, $context["k"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["v"], "html", null, true);
            echo "</option>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 240
        echo "                                            </select>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class=\"table\">
                                <thead>
                                    <tr>
                                        <th>
                                            ";
        // line 249
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Serviço", array(), "NovosgaSettingsBundle");
        // line 250
        echo "                                        </th>
                                        <th>
                                            ";
        // line 252
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Peso", array(), "NovosgaSettingsBundle");
        // line 253
        echo "                                        </th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for=\"servicoUsuario in usuario.servicos\">
                                        <td>
                                            ";
        // line 262
        echo "
                                                {{ servicoUsuario.sigla }} - {{ servicoUsuario.nome }}
                                            ";
        echo "
                                        </td>
                                        <td style=\"width: 100px\">
                                            <input type=\"number\" class=\"form-control\" v-model=\"servicoUsuario.peso\" v-on:change=\"updateServicoUsuario(usuario, servicoUsuario)\">
                                        </td>
                                        <td class=\"text-right\">
                                            <button type=\"button\" class=\"btn btn-danger\" v-on:click=\"removeServicoUsuario(usuario, servicoUsuario)\">
                                                <i class=\"fa fa-trash\"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr v-if=\"usuario.servicos.length === 0\">
                                        <td colspan=\"2\" class=\"text-muted\">
                                            ";
        // line 275
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Nenhum serviço", array(), "NovosgaSettingsBundle");
        // line 276
        echo "                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class=\"panel-footer\">
                                <div class=\"input-group\">
                                    <select class=\"form-control\" v-model=\"servicoUsuario[usuario.id]\">
                                        <option v-for=\"servicoUnidade in availableServices[usuario.id]\" v-bind:value=\"servicoUnidade\">
                                            ";
        // line 286
        echo "
                                                {{ servicoUnidade.sigla }} - {{ servicoUnidade.servico.nome }}
                                            ";
        echo "
                                        </option>
                                    </select>

                                    <span class=\"input-group-btn\">
                                        <button type=\"button\" class=\"btn btn-secondary\" type=\"button\" v-on:click=\"addServicoUsuario(usuario)\">
                                            <i class=\"fa fa-plus\"></i>
                                        </button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id=\"dialog-servicos\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\">";
        // line 307
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.services", array(), "NovosgaSettingsBundle"), "html", null, true);
        echo "</h5>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                    </div>
                    <div class=\"modal-body\">
                        <div class=\"form-group\">
                            <input type=\"search\" class=\"form-search form-control\" placeholder=\"";
        // line 312
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.search", array(), "NovosgaSettingsBundle"), "html", null, true);
        echo "\" v-model=\"servicosSearch\">
                        </div>
                        <div class=\"checkbox\" v-for=\"servico in servicos\" v-if=\"servico.nome.toUpperCase().indexOf(servicosSearch.toUpperCase()) !== -1 || servico.descricao.toUpperCase().indexOf(servicosSearch.toUpperCase()) !== -1\">
                            <label>
                                <input type=\"checkbox\" v-model=\"servico.checked\">
                                ";
        // line 319
        echo "
                                    {{ servico.nome }}
                                ";
        echo "
                            </label>
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">";
        // line 324
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.close", array(), "NovosgaSettingsBundle"), "html", null, true);
        echo "</button>
                        <button type=\"button\" class=\"btn btn-primary\" type=\"button\" v-on:click=\"addServicos\">
                            ";
        // line 326
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.add", array(), "NovosgaSettingsBundle"), "html", null, true);
        echo "
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div id=\"dialog-servico-unidade\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-lg\">
                <div class=\"modal-content\">
                    ";
        // line 336
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 336, $this->source); })()), 'form_start', array("attr" => array("v-on:submit.prevent" => "updateServicoFromModal")));
        echo "
                        <div class=\"modal-header\">
                            <h5 class=\"modal-title\">";
        // line 338
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Serviço", array(), "NovosgaSettingsBundle");
        echo "</h5>
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                        </div>
                        <div class=\"modal-body\" v-if=\"servicoUnidade\">
                            <fieldset>
                                <legend>";
        // line 343
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Triagem", array(), "NovosgaSettingsBundle");
        echo "</legend>
                                <div class=\"row\">
                                    <div class=\"col-4\">
                                        <div class=\"row\">
                                            <div class=\"col-7\">
                                                ";
        // line 348
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 348, $this->source); })()), "sigla", array()), 'row', array("attr" => array("v-model" => "servicoUnidade.sigla", "v-on:input" => "uppercase(servicoUnidade)")));
        echo "
                                            </div>
                                            <div class=\"col-5\">
                                                ";
        // line 351
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 351, $this->source); })()), "peso", array()), 'row', array("attr" => array("v-model" => "servicoUnidade.peso")));
        echo "
                                            </div>
                                        </div>

                                        ";
        // line 355
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 355, $this->source); })()), "local", array()), 'row', array("attr" => array("v-model" => "servicoUnidade.local")));
        echo "

                                        ";
        // line 357
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 357, $this->source); })()), "departamento", array()), 'row', array("attr" => array("v-model" => "servicoUnidade.departamento")));
        echo "
                                    </div>
                                    <div class=\"col-4\">
                                        ";
        // line 360
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 360, $this->source); })()), "mensagem", array()), 'row', array("attr" => array("v-model" => "servicoUnidade.mensagem", "rows" => 10)));
        echo "
                                    </div>
                                    <div class=\"col-4\">
                                        <span class=\"col-12\">&nbsp;</span>

                                        ";
        // line 365
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 365, $this->source); })()), "ativo", array()), 'row', array("label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.enabled", array(), "NovosgaSettingsBundle"), "attr" => array("v-model" => "servicoUnidade.ativo")));
        echo "

                                        ";
        // line 367
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 367, $this->source); })()), "prioridade", array()), 'row', array("label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.allow_priority", array(), "NovosgaSettingsBundle"), "attr" => array("v-model" => "servicoUnidade.prioridade")));
        echo "
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend>";
        // line 372
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Contador", array(), "NovosgaSettingsBundle");
        echo "</legend>
                                <div class=\"row\">
                                    <div class=\"col-4\">
                                        ";
        // line 375
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 375, $this->source); })()), "numeroInicial", array()), 'row', array("attr" => array("v-model" => "servicoUnidade.numeroInicial")));
        echo "
                                    </div>
                                    <div class=\"col-4\">
                                        ";
        // line 378
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 378, $this->source); })()), "numeroFinal", array()), 'row', array("attr" => array("v-model" => "servicoUnidade.numeroFinal")));
        echo "
                                    </div>
                                    <div class=\"col-4\">
                                        ";
        // line 381
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 381, $this->source); })()), "incremento", array()), 'row', array("attr" => array("v-model" => "servicoUnidade.incremento")));
        echo "
                                    </div>
                            </fieldset>
                        </div>
                        <div class=\"modal-footer\">
                            <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">
                                ";
        // line 387
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Cancelar", array(), "NovosgaSettingsBundle");
        // line 388
        echo "                            </button>
                            <button type=\"submit\" class=\"btn btn-primary\">
                                <i class=\"fa fa-save\"></i>
                                ";
        // line 391
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Salvar", array(), "NovosgaSettingsBundle");
        // line 392
        echo "                            </button>
                        </div>
                    ";
        // line 394
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 394, $this->source); })()), 'form_end');
        echo "
                </div>
            </div>
        </div>

        ";
        // line 400
        echo "        <div id=\"dialog-reiniciar\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\">";
        // line 404
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Configuração", array(), "NovosgaSettingsBundle");
        echo "</h5>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                    </div>
                    <div class=\"modal-body\">
                        <p>";
        // line 408
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Senhas reiniciadas com sucesso", array(), "NovosgaSettingsBundle");
        echo "</p>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">";
        // line 411
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Fechar", array(), "NovosgaSettingsBundle");
        echo "</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 419
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 420
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        var locais                = ";
        // line 422
        echo json_encode((isset($context["locais"]) || array_key_exists("locais", $context) ? $context["locais"] : (function () { throw new Twig_Error_Runtime('Variable "locais" does not exist.', 422, $this->source); })()));
        echo ",
            usuarios              = ";
        // line 423
        echo json_encode((isset($context["usuarios"]) || array_key_exists("usuarios", $context) ? $context["usuarios"] : (function () { throw new Twig_Error_Runtime('Variable "usuarios" does not exist.', 423, $this->source); })()));
        echo ",
            impressao             = ";
        // line 424
        echo json_encode(twig_get_attribute($this->env, $this->source, (isset($context["unidade"]) || array_key_exists("unidade", $context) ? $context["unidade"] : (function () { throw new Twig_Error_Runtime('Variable "unidade" does not exist.', 424, $this->source); })()), "impressao", array()));
        echo ",
            usuario               = ";
        // line 425
        echo json_encode((isset($context["usuario"]) || array_key_exists("usuario", $context) ? $context["usuario"] : (function () { throw new Twig_Error_Runtime('Variable "usuario" does not exist.', 425, $this->source); })()));
        echo ",
            unidade               = ";
        // line 426
        echo json_encode((isset($context["unidade"]) || array_key_exists("unidade", $context) ? $context["unidade"] : (function () { throw new Twig_Error_Runtime('Variable "unidade" does not exist.', 426, $this->source); })()));
        echo ",
            desejaReiniciarSenhas = '";
        // line 427
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Deseja realmente reiniciar as senhas?", array(), "NovosgaSettingsBundle");
        echo "',
            desejaReiniciar       = '";
        // line 428
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Deseja realmente reiniciar o contador?", array(), "NovosgaSettingsBundle");
        echo "',
            desejaLimparDados     = '";
        // line 429
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Deseja realmente limpar os dados de atendimento?", array(), "NovosgaSettingsBundle");
        echo "',
            wsSecret              = '";
        // line 430
        echo twig_escape_filter($this->env, (isset($context["wsSecret"]) || array_key_exists("wsSecret", $context) ? $context["wsSecret"] : (function () { throw new Twig_Error_Runtime('Variable "wsSecret" does not exist.', 430, $this->source); })()), "html", null, true);
        echo "';
    </script>
    <script type=\"text/javascript\" src=\"";
        // line 432
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/novosgasettings/js/script.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "NovosgaSettingsBundle:default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  736 => 432,  731 => 430,  727 => 429,  723 => 428,  719 => 427,  715 => 426,  711 => 425,  707 => 424,  703 => 423,  699 => 422,  693 => 420,  684 => 419,  667 => 411,  661 => 408,  654 => 404,  648 => 400,  640 => 394,  636 => 392,  634 => 391,  629 => 388,  627 => 387,  618 => 381,  612 => 378,  606 => 375,  600 => 372,  592 => 367,  587 => 365,  579 => 360,  573 => 357,  568 => 355,  561 => 351,  555 => 348,  547 => 343,  539 => 338,  534 => 336,  521 => 326,  516 => 324,  506 => 319,  498 => 312,  490 => 307,  464 => 286,  454 => 276,  452 => 275,  434 => 262,  425 => 253,  423 => 252,  419 => 250,  417 => 249,  406 => 240,  395 => 238,  391 => 237,  386 => 234,  384 => 233,  375 => 226,  373 => 225,  362 => 219,  343 => 200,  341 => 199,  329 => 189,  327 => 188,  310 => 174,  301 => 168,  293 => 158,  291 => 157,  287 => 155,  285 => 154,  278 => 149,  276 => 148,  267 => 142,  262 => 139,  260 => 138,  251 => 132,  246 => 130,  241 => 128,  236 => 126,  231 => 124,  223 => 119,  218 => 117,  212 => 113,  210 => 112,  204 => 109,  170 => 78,  164 => 75,  156 => 72,  150 => 67,  144 => 64,  135 => 57,  133 => 56,  129 => 54,  127 => 53,  123 => 51,  121 => 50,  117 => 48,  115 => 47,  111 => 45,  109 => 44,  98 => 35,  96 => 34,  90 => 30,  88 => 29,  82 => 25,  80 => 24,  65 => 12,  60 => 10,  54 => 6,  45 => 5,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@NovosgaSettings/base.html.twig\" %}

{% trans_default_domain 'NovosgaSettingsBundle' %}

{% block body %}
    <div class=\"row\">
        <div class=\"col-sm-12\">
            <h1>
                <i class=\"fa fa-wrench\" aria-hidden=\"true\"></i>
                {{ 'title'|trans }}
                <small>
                    {{ 'subtitle'|trans }}
                </small>
            </h1>
        </div>
    </div>

    <hr>

    <div id=\"settings\">
        <ul class=\"nav nav-tabs\">
            <li class=\"nav-item\">
                <a href=\"#tab-servicos\" data-toggle=\"tab\" class=\"nav-link active\">
                    {% trans %}Serviços{% endtrans %}
                </a>
            </li>
            <li class=\"nav-item\">
                <a href=\"#tab-triagem\" data-toggle=\"tab\" class=\"nav-link\">
                    {% trans %}Triagem{% endtrans %}
                </a>
            </li>
            <li class=\"nav-item\">
                <a href=\"#tab-atendimento\" data-toggle=\"tab\" class=\"nav-link\">
                    {% trans %}Atendimento{% endtrans %}
                </a>
            </li>
        </ul>
        <div class=\"tab-content\">
            <div id=\"tab-servicos\" class=\"tab-pane active\">
                <table class=\"table\">
                    <thead class=\"thead-light\">
                        <tr>
                            <th class=\"ativo\">
                                {% trans %}Ativo{% endtrans %}
                            </th>
                            <th class=\"sigla\">
                                {% trans %}Sigla{% endtrans %}
                            </th>
                            <th>
                                {% trans %}Serviço{% endtrans %}
                            </th>
                            <th>
                                {% trans %}Local{% endtrans %}
                            </th>
                            <th>
                                {% trans %}Departamento{% endtrans %}
                            </th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody v-cloak>
                        <tr v-for=\"su in servicosUnidade\">
                            <td class=\"text-center\">
                                {{ form_widget(inlineForm.ativo, { label: false, attr: { 'v-model': 'su.ativo', 'v-on:change': 'updateServico(su)' } }) }}
                            </td>
                            <td>
                                {{ form_row(inlineForm.sigla, { label: false, attr: { 'v-model': 'su.sigla', 'v-on:input': 'uppercase(su)', 'v-on:blur': 'updateServico(su)', 'v-bind:disabled': '!su.ativo' } }) }}
                            </td>
                            <td>
                                {% verbatim %}
                                    {{su.servico.nome}}
                                {% endverbatim %}
                            </td>
                            <td>
                                {{ form_row(inlineForm.local, { label: false, attr: { 'v-model': 'su.local', 'v-on:change': 'updateServico(su)', 'v-bind:disabled': '!su.ativo' } }) }}
                            </td>
                            <td>
                                {{ form_row(inlineForm.departamento, { label: false, attr: { 'v-model': 'su.departamento', 'v-on:change': 'updateServico(su)', 'v-bind:disabled': '!su.ativo' } }) }}
                            </td>
                            <td class=\"text-right\">
                                <button type=\"button\" class=\"btn btn-secondary\" v-on:click=\"showModal(su)\">
                                    <i class=\"fa fa-cog\"></i>
                                </button>
                                <button type=\"button\" class=\"btn btn-danger\" v-on:click=\"removeServicoUnidade(su)\" v-bind:disabled=\"su.ativo\">
                                    <i class=\"fa fa-trash\"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class=\"text-right\">
                                <button type=\"button\" class=\"btn btn-primary\" v-on:click=\"showServicos\">
                                    <i class=\"fa fa-plus\"></i>
                                </button>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <div id=\"tab-triagem\" class=\"tab-pane\">
                <div class=\"row\">
                    <div class=\"col-lg-7\">
                        {{ form_start(impressaoForm, { attr: { 'v-on:submit.prevent': 'updateImpressao' } }) }}
                        <div class=\"card\">
                            <div class=\"card-header\">
                                {% trans %}Impressão{% endtrans %}
                            </div>
                            <div class=\"card-body\">
                                <div class=\"row\">
                                    <div class=\"col-7\">
                                        {{ form_row(impressaoForm.cabecalho, { label: 'Cabeçalho', attr: { 'v-model': 'impressao.cabecalho' } }) }}

                                        {{ form_row(impressaoForm.rodape, { label: 'Rodapé', attr: { 'v-model': 'impressao.rodape' } }) }}
                                    </div>
                                    <div class=\"col-5\">
                                        <label>Layout</label>
                                        
                                        {{ form_row(impressaoForm.exibirData, { label: 'Exibir data', attr: { 'v-model': 'impressao.exibirData' } }) }}

                                        {{ form_row(impressaoForm.exibirPrioridade, { label: 'Exibir prioridade', attr: { 'v-model': 'impressao.exibirPrioridade' } }) }}

                                        {{ form_row(impressaoForm.exibirNomeUnidade, { label: 'Exibir nome da unidade', attr: { 'v-model': 'impressao.exibirNomeUnidade' } }) }}

                                        {{ form_row(impressaoForm.exibirNomeServico, { label: 'Exibir nome do serviço', attr: { 'v-model': 'impressao.exibirNomeServico' } }) }}

                                        {{ form_row(impressaoForm.exibirMensagemServico, { label: 'Exibir mensagem do serviço', attr: { 'v-model': 'impressao.exibirMensagemServico' } }) }}
                                    </div>
                                </div>

                                <button type=\"submit\" class=\"btn btn-primary\">
                                    <i class=\"fa fa-save\"></i>
                                    {% trans %}Salvar configuração de impressão{% endtrans %}
                                </button>
                            </div>
                        </div>
                        {{ form_end(impressaoForm) }}
                    </div>
                    <div class=\"col-lg-5\">
                        <div class=\"card\">
                            <div class=\"card-header text-white bg-danger\">
                                <i class=\"fa fa-warning\"></i>
                                {% trans %}Zona de perigo{% endtrans %}
                            </div>
                            <table class=\"table\">
                                <thead>
                                    <tr>
                                        <th>
                                            {% trans %}Serviço{% endtrans %}
                                        </th>
                                        <th>
                                            {% trans %}Número atual{% endtrans %}
                                        </th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for=\"su in servicosUnidade\">
                                        <td class=\"nome\">
                                            {%- verbatim -%}
                                                {{su.sigla}} - {{su.servico.nome}}
                                            {%- endverbatim -%}
                                        </td>
                                        <td>
                                            <input type=\"text\" class=\"form-control\" disabled
                                                   v-bind:value=\"contadores[su.servico.id]\">
                                        </td>
                                        <td class=\"text-right\">
                                            <button type=\"button\" class=\"btn btn-secondary\" title=\"{% trans %}Reiniciar contagem do serviço{% endtrans %}\"
                                                    v-on:click=\"reiniciarContator(su.servico.id)\">
                                                <i class=\"fa fa-refresh\"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class=\"table\">
                                <tbody>
                                    <tr>
                                        <td>
                                            <button class=\"btn btn-danger btn-block\" v-on:click=\"reiniciarSenhas\">
                                                <i class=\"fa fa-refresh\"></i>
                                                {% trans %}Reiniciar todas senhas{% endtrans %}
                                            </button>
                                        </td>
                                        <td>
                                            <div class=\"help-block\" style=\"margin-top:0\">Move todos os atendimentos para o histórico e reinicia a contagem de todos serviços.</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <button class=\"btn btn-danger btn-block\" v-on:click=\"limparSenhas\">
                                                <i class=\"fa fa-trash\"></i>
                                                {% trans %}Limpar dados{% endtrans %}
                                            </button>
                                        </td>
                                        <td>
                                            <div class=\"help-block\" style=\"margin-top:0\">Remover todo histórico de atendimentos da unidade.</div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div id=\"tab-atendimento\" class=\"tab-pane\">
                <div class=\"row\">
                    <div class=\"col-lg-3 col-md-4 col-sm-6\" v-for=\"usuario in usuarios\">
                        <div class=\"card\">
                            <div class=\"card-header\">
                                {% verbatim %}
                                    {{ usuario.nome }} ({{ usuario.login }})
                                {% endverbatim %}
                            </div>
                            <table class=\"table\">
                                <tbody>
                                    <tr>
                                        <th>
                                            {% trans %}Guichê{% endtrans %}
                                        </th>
                                        <td>
                                            <input type=\"number\" class=\"form-control\" v-model=\"usuario.numero\" v-on:change=\"updateUsuario(usuario)\">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            {% trans %}Tipo de atendimento{% endtrans %}
                                        </th>
                                        <td>
                                            <select class=\"form-control\" v-model=\"usuario.tipoAtendimento\" v-on:change=\"updateUsuario(usuario)\">
                                                {% for k, v in tiposAtendimento %}
                                                <option value=\"{{k}}\">{{v}}</option>
                                                {% endfor %}
                                            </select>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class=\"table\">
                                <thead>
                                    <tr>
                                        <th>
                                            {% trans %}Serviço{% endtrans %}
                                        </th>
                                        <th>
                                            {% trans %}Peso{% endtrans %}
                                        </th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for=\"servicoUsuario in usuario.servicos\">
                                        <td>
                                            {% verbatim %}
                                                {{ servicoUsuario.sigla }} - {{ servicoUsuario.nome }}
                                            {% endverbatim %}
                                        </td>
                                        <td style=\"width: 100px\">
                                            <input type=\"number\" class=\"form-control\" v-model=\"servicoUsuario.peso\" v-on:change=\"updateServicoUsuario(usuario, servicoUsuario)\">
                                        </td>
                                        <td class=\"text-right\">
                                            <button type=\"button\" class=\"btn btn-danger\" v-on:click=\"removeServicoUsuario(usuario, servicoUsuario)\">
                                                <i class=\"fa fa-trash\"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr v-if=\"usuario.servicos.length === 0\">
                                        <td colspan=\"2\" class=\"text-muted\">
                                            {% trans %}Nenhum serviço{% endtrans %}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class=\"panel-footer\">
                                <div class=\"input-group\">
                                    <select class=\"form-control\" v-model=\"servicoUsuario[usuario.id]\">
                                        <option v-for=\"servicoUnidade in availableServices[usuario.id]\" v-bind:value=\"servicoUnidade\">
                                            {% verbatim %}
                                                {{ servicoUnidade.sigla }} - {{ servicoUnidade.servico.nome }}
                                            {% endverbatim %}
                                        </option>
                                    </select>

                                    <span class=\"input-group-btn\">
                                        <button type=\"button\" class=\"btn btn-secondary\" type=\"button\" v-on:click=\"addServicoUsuario(usuario)\">
                                            <i class=\"fa fa-plus\"></i>
                                        </button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id=\"dialog-servicos\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\">{{ 'label.services'|trans }}</h5>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                    </div>
                    <div class=\"modal-body\">
                        <div class=\"form-group\">
                            <input type=\"search\" class=\"form-search form-control\" placeholder=\"{{ 'label.search'|trans }}\" v-model=\"servicosSearch\">
                        </div>
                        <div class=\"checkbox\" v-for=\"servico in servicos\" v-if=\"servico.nome.toUpperCase().indexOf(servicosSearch.toUpperCase()) !== -1 || servico.descricao.toUpperCase().indexOf(servicosSearch.toUpperCase()) !== -1\">
                            <label>
                                <input type=\"checkbox\" v-model=\"servico.checked\">
                                {% verbatim %}
                                    {{ servico.nome }}
                                {% endverbatim %}
                            </label>
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">{{ 'button.close'|trans }}</button>
                        <button type=\"button\" class=\"btn btn-primary\" type=\"button\" v-on:click=\"addServicos\">
                            {{ 'button.add'|trans }}
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div id=\"dialog-servico-unidade\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-lg\">
                <div class=\"modal-content\">
                    {{ form_start(form, { attr: { 'v-on:submit.prevent': 'updateServicoFromModal' } }) }}
                        <div class=\"modal-header\">
                            <h5 class=\"modal-title\">{% trans %}Serviço{% endtrans %}</h5>
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                        </div>
                        <div class=\"modal-body\" v-if=\"servicoUnidade\">
                            <fieldset>
                                <legend>{% trans %}Triagem{% endtrans %}</legend>
                                <div class=\"row\">
                                    <div class=\"col-4\">
                                        <div class=\"row\">
                                            <div class=\"col-7\">
                                                {{ form_row(form.sigla, { attr: { 'v-model': 'servicoUnidade.sigla', 'v-on:input': 'uppercase(servicoUnidade)' } }) }}
                                            </div>
                                            <div class=\"col-5\">
                                                {{ form_row(form.peso, { attr: { 'v-model': 'servicoUnidade.peso' } }) }}
                                            </div>
                                        </div>

                                        {{ form_row(form.local, { attr: { 'v-model': 'servicoUnidade.local' } }) }}

                                        {{ form_row(form.departamento, { attr: { 'v-model': 'servicoUnidade.departamento' } }) }}
                                    </div>
                                    <div class=\"col-4\">
                                        {{ form_row(form.mensagem, { attr: { 'v-model': 'servicoUnidade.mensagem', rows: 10 } }) }}
                                    </div>
                                    <div class=\"col-4\">
                                        <span class=\"col-12\">&nbsp;</span>

                                        {{ form_row(form.ativo, { label: 'label.enabled'|trans, attr: { 'v-model': 'servicoUnidade.ativo' } }) }}

                                        {{ form_row(form.prioridade, { label: 'label.allow_priority'|trans, attr: { 'v-model': 'servicoUnidade.prioridade' } }) }}
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend>{% trans %}Contador{% endtrans %}</legend>
                                <div class=\"row\">
                                    <div class=\"col-4\">
                                        {{ form_row(form.numeroInicial, { attr: { 'v-model': 'servicoUnidade.numeroInicial' } }) }}
                                    </div>
                                    <div class=\"col-4\">
                                        {{ form_row(form.numeroFinal, { attr: { 'v-model': 'servicoUnidade.numeroFinal' } }) }}
                                    </div>
                                    <div class=\"col-4\">
                                        {{ form_row(form.incremento, { attr: { 'v-model': 'servicoUnidade.incremento' } }) }}
                                    </div>
                            </fieldset>
                        </div>
                        <div class=\"modal-footer\">
                            <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">
                                {% trans %}Cancelar{% endtrans %}
                            </button>
                            <button type=\"submit\" class=\"btn btn-primary\">
                                <i class=\"fa fa-save\"></i>
                                {% trans %}Salvar{% endtrans %}
                            </button>
                        </div>
                    {{ form_end(form) }}
                </div>
            </div>
        </div>

        {# reiniciar #}
        <div id=\"dialog-reiniciar\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\">{% trans %}Configuração{% endtrans %}</h5>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                    </div>
                    <div class=\"modal-body\">
                        <p>{% trans %}Senhas reiniciadas com sucesso{% endtrans %}</p>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">{% trans %}Fechar{% endtrans %}</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
        var locais                = {{ locais|json_encode()|raw }},
            usuarios              = {{ usuarios|json_encode()|raw }},
            impressao             = {{ unidade.impressao|json_encode()|raw }},
            usuario               = {{ usuario|json_encode()|raw }},
            unidade               = {{ unidade|json_encode()|raw }},
            desejaReiniciarSenhas = '{% trans %}Deseja realmente reiniciar as senhas?{% endtrans %}',
            desejaReiniciar       = '{% trans %}Deseja realmente reiniciar o contador?{% endtrans %}',
            desejaLimparDados     = '{% trans %}Deseja realmente limpar os dados de atendimento?{% endtrans %}',
            wsSecret              = '{{ wsSecret }}';
    </script>
    <script type=\"text/javascript\" src=\"{{ asset('bundles/novosgasettings/js/script.js') }}\"></script>
{% endblock %}
", "NovosgaSettingsBundle:default:index.html.twig", "/var/www/html/sgf/novosga/modules/novosga/settings-bundle/Resources/views/default/index.html.twig");
    }
}
