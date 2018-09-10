<?php

/* NovosgaSettingsBundle:default:index.html.twig */
class __TwigTemplate_b232eca8860e926e6f6f4c5a2c0cf37f5bb6be6036bdc165bb017281d200449e extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["inlineForm"] ?? null), "ativo", array()), 'widget', array("label" => false, "attr" => array("v-model" => "su.ativo", "v-on:change" => "updateServico(su)")));
        echo "
                            </td>
                            <td>
                                ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["inlineForm"] ?? null), "sigla", array()), 'row', array("label" => false, "attr" => array("v-model" => "su.sigla", "v-on:input" => "uppercase(su)", "v-on:blur" => "updateServico(su)", "v-bind:disabled" => "!su.ativo")));
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["inlineForm"] ?? null), "local", array()), 'row', array("label" => false, "attr" => array("v-model" => "su.local", "v-on:change" => "updateServico(su)", "v-bind:disabled" => "!su.ativo")));
        echo "
                            </td>
                            <td>
                                ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["inlineForm"] ?? null), "departamento", array()), 'row', array("label" => false, "attr" => array("v-model" => "su.departamento", "v-on:change" => "updateServico(su)", "v-bind:disabled" => "!su.ativo")));
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["impressaoForm"] ?? null), 'form_start', array("attr" => array("v-on:submit.prevent" => "updateImpressao")));
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["impressaoForm"] ?? null), "cabecalho", array()), 'row', array("label" => "Cabeçalho", "attr" => array("v-model" => "impressao.cabecalho")));
        echo "

                                        ";
        // line 119
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["impressaoForm"] ?? null), "rodape", array()), 'row', array("label" => "Rodapé", "attr" => array("v-model" => "impressao.rodape")));
        echo "
                                    </div>
                                    <div class=\"col-5\">
                                        <label>Layout</label>
                                        
                                        ";
        // line 124
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["impressaoForm"] ?? null), "exibirData", array()), 'row', array("label" => "Exibir data", "attr" => array("v-model" => "impressao.exibirData")));
        echo "

                                        ";
        // line 126
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["impressaoForm"] ?? null), "exibirPrioridade", array()), 'row', array("label" => "Exibir prioridade", "attr" => array("v-model" => "impressao.exibirPrioridade")));
        echo "

                                        ";
        // line 128
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["impressaoForm"] ?? null), "exibirNomeUnidade", array()), 'row', array("label" => "Exibir nome da unidade", "attr" => array("v-model" => "impressao.exibirNomeUnidade")));
        echo "

                                        ";
        // line 130
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["impressaoForm"] ?? null), "exibirNomeServico", array()), 'row', array("label" => "Exibir nome do serviço", "attr" => array("v-model" => "impressao.exibirNomeServico")));
        echo "

                                        ";
        // line 132
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["impressaoForm"] ?? null), "exibirMensagemServico", array()), 'row', array("label" => "Exibir mensagem do serviço", "attr" => array("v-model" => "impressao.exibirMensagemServico")));
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["impressaoForm"] ?? null), 'form_end');
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
        $context['_seq'] = twig_ensure_traversable(($context["tiposAtendimento"] ?? null));
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', array("attr" => array("v-on:submit.prevent" => "updateServicoFromModal")));
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "sigla", array()), 'row', array("attr" => array("v-model" => "servicoUnidade.sigla", "v-on:input" => "uppercase(servicoUnidade)")));
        echo "
                                            </div>
                                            <div class=\"col-5\">
                                                ";
        // line 351
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "peso", array()), 'row', array("attr" => array("v-model" => "servicoUnidade.peso")));
        echo "
                                            </div>
                                        </div>

                                        ";
        // line 355
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "local", array()), 'row', array("attr" => array("v-model" => "servicoUnidade.local")));
        echo "

                                        ";
        // line 357
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "departamento", array()), 'row', array("attr" => array("v-model" => "servicoUnidade.departamento")));
        echo "
                                    </div>
                                    <div class=\"col-4\">
                                        ";
        // line 360
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "mensagem", array()), 'row', array("attr" => array("v-model" => "servicoUnidade.mensagem", "rows" => 10)));
        echo "
                                    </div>
                                    <div class=\"col-4\">
                                        <span class=\"col-12\">&nbsp;</span>

                                        ";
        // line 365
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "ativo", array()), 'row', array("label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.enabled", array(), "NovosgaSettingsBundle"), "attr" => array("v-model" => "servicoUnidade.ativo")));
        echo "

                                        ";
        // line 367
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "prioridade", array()), 'row', array("label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.allow_priority", array(), "NovosgaSettingsBundle"), "attr" => array("v-model" => "servicoUnidade.prioridade")));
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "numeroInicial", array()), 'row', array("attr" => array("v-model" => "servicoUnidade.numeroInicial")));
        echo "
                                    </div>
                                    <div class=\"col-4\">
                                        ";
        // line 378
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "numeroFinal", array()), 'row', array("attr" => array("v-model" => "servicoUnidade.numeroFinal")));
        echo "
                                    </div>
                                    <div class=\"col-4\">
                                        ";
        // line 381
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "incremento", array()), 'row', array("attr" => array("v-model" => "servicoUnidade.incremento")));
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
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
    }

    // line 419
    public function block_javascripts($context, array $blocks = array())
    {
        // line 420
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        var locais                = ";
        // line 422
        echo json_encode(($context["locais"] ?? null));
        echo ",
            usuarios              = ";
        // line 423
        echo json_encode(($context["usuarios"] ?? null));
        echo ",
            impressao             = ";
        // line 424
        echo json_encode(twig_get_attribute($this->env, $this->source, ($context["unidade"] ?? null), "impressao", array()));
        echo ",
            usuario               = ";
        // line 425
        echo json_encode(($context["usuario"] ?? null));
        echo ",
            unidade               = ";
        // line 426
        echo json_encode(($context["unidade"] ?? null));
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
        echo twig_escape_filter($this->env, ($context["wsSecret"] ?? null), "html", null, true);
        echo "';
    </script>
    <script type=\"text/javascript\" src=\"";
        // line 432
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/novosgasettings/js/script.js"), "html", null, true);
        echo "\"></script>
";
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
        return array (  706 => 432,  701 => 430,  697 => 429,  693 => 428,  689 => 427,  685 => 426,  681 => 425,  677 => 424,  673 => 423,  669 => 422,  663 => 420,  660 => 419,  649 => 411,  643 => 408,  636 => 404,  630 => 400,  622 => 394,  618 => 392,  616 => 391,  611 => 388,  609 => 387,  600 => 381,  594 => 378,  588 => 375,  582 => 372,  574 => 367,  569 => 365,  561 => 360,  555 => 357,  550 => 355,  543 => 351,  537 => 348,  529 => 343,  521 => 338,  516 => 336,  503 => 326,  498 => 324,  488 => 319,  480 => 312,  472 => 307,  446 => 286,  436 => 276,  434 => 275,  416 => 262,  407 => 253,  405 => 252,  401 => 250,  399 => 249,  388 => 240,  377 => 238,  373 => 237,  368 => 234,  366 => 233,  357 => 226,  355 => 225,  344 => 219,  325 => 200,  323 => 199,  311 => 189,  309 => 188,  292 => 174,  283 => 168,  275 => 158,  273 => 157,  269 => 155,  267 => 154,  260 => 149,  258 => 148,  249 => 142,  244 => 139,  242 => 138,  233 => 132,  228 => 130,  223 => 128,  218 => 126,  213 => 124,  205 => 119,  200 => 117,  194 => 113,  192 => 112,  186 => 109,  152 => 78,  146 => 75,  138 => 72,  132 => 67,  126 => 64,  117 => 57,  115 => 56,  111 => 54,  109 => 53,  105 => 51,  103 => 50,  99 => 48,  97 => 47,  93 => 45,  91 => 44,  80 => 35,  78 => 34,  72 => 30,  70 => 29,  64 => 25,  62 => 24,  47 => 12,  42 => 10,  36 => 6,  33 => 5,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "NovosgaSettingsBundle:default:index.html.twig", "/var/www/html/sgf/novosga/modules/novosga/settings-bundle/Resources/views/default/index.html.twig");
    }
}
