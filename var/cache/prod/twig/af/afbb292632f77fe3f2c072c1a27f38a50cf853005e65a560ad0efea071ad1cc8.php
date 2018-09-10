<?php

/* NovosgaTriageBundle:default:index.html.twig */
class __TwigTemplate_f9bab1ce76d72b91b546457df9f448ac8b9e388e4c9e7ee89558163c7beadd0c extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("@NovosgaTriage/base.html.twig", "NovosgaTriageBundle:default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@NovosgaTriage/base.html.twig";
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
                <i class=\"fa fa-print\" aria-hidden=\"true\"></i>
                ";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title", array(), "NovosgaTriageBundle"), "html", null, true);
        echo "
                <small>
                    ";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("subtitle", array(), "NovosgaTriageBundle"), "html", null, true);
        echo "
                </small>
            </h1>
        </div>
    </div>
    
    <hr>
    
    <div id=\"triagem\" v-cloak>
        <div id=\"infobar\" class=\"row\">
            <div class=\"col-md-10 col-9\">
                <div class=\"row\">
                    <div class=\"col-3\">
                        <div class=\"input-group\">
                            <div class=\"input-group-prepend\">
                                <span class=\"input-group-text\">
                                    <i class=\"fa fa-credit-card\"></i>
                                </span>
                            </div>
                            <label for=\"cliente-documento\" class=\"sr-only\">";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.customer.id", array(), "NovosgaTriageBundle"), "html", null, true);
        echo "</label>
                            <input type=\"text\" id=\"cliente-documento\" list=\"documentos\" class=\"form-control\" maxlength=\"30\" placeholder=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.customer.id", array(), "NovosgaTriageBundle"), "html", null, true);
        echo "\" v-model=\"cliente.documento\" 
                                   v-on:input=\"fetchClients\"
                                   v-on:change=\"changeClient\"
                                   v-on:blur=\"changeClient\">
                            <datalist id=\"documentos\">
                                <option v-for=\"cliente in clientes\" v-bind:value=\"cliente.documento\">
                            </datalist>
                        </div>
                    </div>
                    <div class=\"col-9\">
                        <div class=\"input-group\">
                            <div class=\"input-group-prepend\">
                                <span class=\"input-group-text\">
                                    <i class=\"fa fa-user\"></i>
                                </span>
                            </div>
                            <label for=\"cliente-nome\" class=\"sr-only\">";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.name", array(), "NovosgaTriageBundle"), "html", null, true);
        echo "</label>
                            <input type=\"text\" id=\"cliente-nome\" class=\"form-control\" maxlength=\"100\" placeholder=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.name", array(), "NovosgaTriageBundle"), "html", null, true);
        echo "\" v-model=\"cliente.nome\" />
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-2 col-3\">
                <div class=\"ultima-senha\" title=\"";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Última senha", array(), "NovosgaTriageBundle");
        echo "\" v-if=\"ultimaSenha\">
                    <span class=\"label label-default\" ng-class=\"{ 'label-default': ultimaSenha.prioridade==0, 'label-danger': ultimaSenha.prioridade.peso>0 }\">
                        <i class=\"fa fa-print\"></i>&nbsp;";
        // line 61
        echo "{{ultimaSenha.senha.format}}";
        echo "</span>
                </div>
            </div>
        </div>

        <div id=\"triagem-servicos\" class=\"row\">
            <div class=\"col-md-12\" v-if=\"servicos.length === 0\">
                <div class=\"jumbotron text-center\">
                    <h1><i class=\"fa fa-frown-o\"></i></h1>
                    <p>Nenhum serviço habilitado para a sua unidade.</p>
                </div>
            </div>
            <div class=\"col-md-12\" v-if=\"servicos.length > 0 && config.servicosHabilitados.length===0\">
                <div class=\"jumbotron text-center\">
                    <h1><i class=\"fa fa-frown-o\"></i></h1>
                    <p>Nenhum serviço marcado para exibição. Clique em <b>Configurações</b> abaixo para marcar os seriços desejados.</p>
                </div>
            </div>
            <div class=\"triagem-servico col-md-6\" v-for=\"su in config.servicosHabilitados\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <a href=\"#\" v-on:click.prevent=\"showServicoInfo(su.servico.id)\">";
        // line 86
        echo "{{su.sigla}} - {{su.servico.nome}}";
        echo "</a>
                        <span class=\"badge badge-pill badge-secondary\" title=\"";
        // line 87
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Aguardando atendimento", array(), "NovosgaTriageBundle");
        echo " / ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Total de senhas do serviço", array(), "NovosgaTriageBundle");
        echo "\">";
        // line 91
        echo "{{totais[su.servico.id] ? totais[su.servico.id].fila : '-'}}";
        echo "&nbsp;/&nbsp;";
        // line 95
        echo "{{totais[su.servico.id] ? totais[su.servico.id].total : '-'}}";
        echo "</span>
                        <span class=\"buttons pull-right\">
                            <button class=\"btn btn-primary\" title=\"";
        // line 97
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Distribuir senha normal", array(), "NovosgaTriageBundle");
        echo "\" v-on:click.prevent=\"distribuiSenhaNormal(su.servico.id)\">
                                ";
        // line 98
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Normal", array(), "NovosgaTriageBundle");
        // line 99
        echo "                            </button>
                            ";
        // line 100
        if (twig_length_filter($this->env, ($context["prioridades"] ?? null))) {
            // line 101
            echo "                                <button class=\"btn btn-danger\" title=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Distribuir senha com prioridade", array(), "NovosgaTriageBundle");
            echo "\" v-on:click.prevent=\"showPrioridades(su.servico.id)\" v-if=\"su.prioridade\">
                                    ";
            // line 102
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.priority", array(), "NovosgaTriageBundle"), "html", null, true);
            echo "
                                </button>
                            ";
        }
        // line 105
        echo "                        </span>
                    </div>
                </div>
            </div>
        </div>
        <p class=\"links\">
            <a href=\"#dialog-busca\" class=\"btn btn-secondary\" data-toggle=\"modal\">
                <i class=\"fa fa-search\"></i>&nbsp;
                ";
        // line 113
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Consultar senha", array(), "NovosgaTriageBundle");
        // line 114
        echo "            </a>
            <a href=\"#dialog-triagem-config\" class=\"btn btn-secondary\" data-toggle=\"modal\">
                <i class=\"fa fa-cog\"></i>&nbsp;
                ";
        // line 117
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Configuração", array(), "NovosgaTriageBundle");
        // line 118
        echo "            </a>
            <a href=\"#dialog-agendamentos\" class=\"btn btn-secondary\" data-toggle=\"modal\">
                <i class=\"fa fa-calendar\"></i>&nbsp;
                ";
        // line 121
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Agendamentos", array(), "NovosgaTriageBundle");
        // line 122
        echo "            </a>
        </p>

        ";
        // line 126
        echo "        <iframe id=\"frame-impressao\" width=\"0\" height=\"0\" style=\"border:none;\"></iframe>

        ";
        // line 129
        echo "        <div id=\"dialog-senha\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\">";
        // line 133
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.ticket", array(), "NovosgaTriageBundle"), "html", null, true);
        echo "</h5>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                    </div>
                    <div class=\"modal-body\" v-if=\"atendimento\">
                        <div class=\"field\">
                            <h4>";
        // line 138
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.ticket.number", array(), "NovosgaTriageBundle"), "html", null, true);
        echo "</h4>
                            <p class=\"numero\">";
        // line 143
        echo "{{atendimento.senha.format}}";
        echo "</p>
                        </div>
                        <div class=\"field\">
                            <h4>";
        // line 146
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.service", array(), "NovosgaTriageBundle"), "html", null, true);
        echo "</h4>
                            <p class=\"servico\">";
        // line 151
        echo "{{atendimento.servico.nome}}";
        echo "</p>
                        </div>
                        <div class=\"field\">
                            <h4>";
        // line 154
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.priority", array(), "NovosgaTriageBundle"), "html", null, true);
        echo "</h4>
                            <p class=\"nome-prioridade\">";
        // line 159
        echo "{{atendimento.prioridade.nome}}";
        echo "</p>
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-primary\" v-on:click.prevent=\"reprint(atendimento)\">
                            <i class=\"fa fa-print\"></i> 
                            ";
        // line 165
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Imprimir", array(), "NovosgaTriageBundle");
        // line 166
        echo "                        </button>
                    </div>
                </div>
            </div>
        </div>

        ";
        // line 173
        echo "        <div id=\"dialog-triagem-config\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-lg\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\">";
        // line 177
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Configuração", array(), "NovosgaTriageBundle");
        echo "</h5>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                    </div>
                    <div class=\"modal-body\">
                        <div class=\"row\">
                            <div class=\"col-sm-8\">
                                <fieldset>
                                    <legend>";
        // line 184
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Serviços", array(), "NovosgaTriageBundle");
        echo "</legend>
                                    <div class=\"checkbox\" v-for=\"su in servicos\">
                                        <label>
                                            <input type=\"checkbox\" v-bind:value=\"su\" v-model=\"config.servicosHabilitados\" v-on:change=\"saveConfig\"> 
                                            ";
        // line 190
        echo "
                                                {{ su.sigla }} - {{ su.servico.nome }}
                                            ";
        echo "
                                        </label>
                                    </div>
                                </fieldset>
                            </div>
                            <div class=\"col-sm-4\">
                                <fieldset>
                                    <legend>";
        // line 197
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Impressão", array(), "NovosgaTriageBundle");
        echo "</legend>
                                    <div class=\"checkbox\">
                                        <label>
                                            <input type=\"checkbox\" v-model=\"config.imprimir\" v-on:change=\"saveConfig\"> 
                                            ";
        // line 201
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Habilitar impressão", array(), "NovosgaTriageBundle");
        // line 202
        echo "                                        </label>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        ";
        // line 213
        echo "        <div id=\"dialog-servico\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-lg\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\">";
        // line 217
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.service", array(), "NovosgaTriageBundle"), "html", null, true);
        echo "</h5>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                    </div>
                    <div class=\"modal-body\" v-if=\"servicoInfo\">
                        <table class=\"table table-bordered\">
                            <tbody>
                                <tr>
                                    <th>
                                        ";
        // line 225
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.name", array(), "NovosgaTriageBundle"), "html", null, true);
        echo "
                                    </th>
                                    <td>";
        // line 231
        echo "{{servicoInfo.nome}}";
        echo "</td>
                                </tr>
                                <tr>
                                    <th>
                                        ";
        // line 235
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Última senha", array(), "NovosgaTriageBundle");
        // line 236
        echo "                                    </th>
                                    <td>
                                        <button class=\"btn btn-secondary\" title=\"";
        // line 238
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Reimprimir", array(), "NovosgaTriageBundle");
        echo "\" 
                                                v-on:click.prevent=\"reprint({ id: servicoInfo.senhaId })\" v-if=\"servicoInfo.senhaId\">";
        // line 243
        echo "{{servicoInfo.senha}}";
        echo "&nbsp;
                                            <i class=\"fa fa-print\"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        ";
        // line 250
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.description", array(), "NovosgaTriageBundle"), "html", null, true);
        echo "
                                    </th>
                                    <td>";
        // line 256
        echo "{{servicoInfo.descricao}}";
        echo "</td>
                                </tr>
                                <tr>
                                    <th>
                                        ";
        // line 260
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.subservices", array(), "NovosgaTriageBundle"), "html", null, true);
        echo "
                                    </th>
                                    <td>
                                        <ul class=\"subservicos notempty\" v-if=\"servicoInfo.subservicos.length\">
                                            <li v-for=\"servico in servicoInfo.subservicos\">";
        // line 268
        echo "{{servico}}";
        echo "</li>
                                        </ul>
                                        <ul class=\"subservicos empty\" v-if=\"!servicoInfo.subservicos.length\">
                                            <li>";
        // line 271
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Não há subserviços", array(), "NovosgaTriageBundle");
        echo "</li>
                                        </ul>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        ";
        // line 283
        echo "        <div id=\"dialog-prioridade\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\">";
        // line 287
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.priority", array(), "NovosgaTriageBundle"), "html", null, true);
        echo "</h5>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                    </div>
                    <div class=\"modal-body\">
                        <ul>
                            <li v-for=\"p in prioridades\">
                                <label>
                                    <input type=\"radio\" v-bind:value=\"p\" v-model=\"prioridade\">
                                    ";
        // line 297
        echo "
                                        {{ p.nome }}
                                    ";
        echo "
                                </label>
                            </li>
                        </ul>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-primary\" v-on:click.prevent=\"distribuiSenhaPrioritaria\">
                            ";
        // line 304
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Gerar prioridade", array(), "NovosgaTriageBundle");
        // line 305
        echo "                        </button>
                    </div>
                </div>
            </div>
        </div>

        ";
        // line 312
        echo "        <div id=\"dialog-busca\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\">";
        // line 316
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("modal.search", array(), "NovosgaTriageBundle"), "html", null, true);
        echo "</h5>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                    </div>
                    <div class=\"modal-body\">
                        <form class=\"row\" role=\"form\" v-on:submit.prevent=\"consultar\">
                            <div class=\"col-3\">
                                <div class=\"input-group\">
                                    <input type=\"text\" maxlength=\"10\" class=\"form-search form-control\" placeholder=\"";
        // line 323
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("modal.search.placeholder", array(), "NovosgaTriageBundle"), "html", null, true);
        echo "\" v-model=\"search\">
                                    <div class=\"input-group-append\">
                                        <button type=\"submit\" class=\"btn btn-primary\" title=\"";
        // line 325
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("modal.search.button.submit", array(), "NovosgaTriageBundle"), "html", null, true);
        echo "\">
                                            <i class=\"fa fa-search\"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <hr>
                        <div class=\"result\">
                            <table class=\"table\">
                                <thead>
                                    <tr>
                                        <th>";
        // line 337
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.ticket.number", array(), "NovosgaTriageBundle"), "html", null, true);
        echo "</th>
                                        <th>";
        // line 338
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.service", array(), "NovosgaTriageBundle"), "html", null, true);
        echo "</th>
                                        <th>";
        // line 339
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.ticket.arrival_date", array(), "NovosgaTriageBundle"), "html", null, true);
        echo "</th>
                                        <th>";
        // line 340
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.ticket.start_date", array(), "NovosgaTriageBundle"), "html", null, true);
        echo "</th>
                                        <th>";
        // line 341
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.ticket.end_date", array(), "NovosgaTriageBundle"), "html", null, true);
        echo "</th>
                                        <th>";
        // line 342
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.triage", array(), "NovosgaTriageBundle"), "html", null, true);
        echo "</th>
                                        <th>";
        // line 343
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.ticket.user", array(), "NovosgaTriageBundle"), "html", null, true);
        echo "</th>
                                        <th>";
        // line 344
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.status", array(), "NovosgaTriageBundle"), "html", null, true);
        echo "</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 381
        echo "
                                        <tr v-for=\"atendimento in searchResult\">
                                            <td>
                                                {{atendimento.senha.format}}
                                            </td>
                                            <td>
                                                {{atendimento.servico.nome}}
                                            </td>
                                            <td>
                                                <span v-if=\"atendimento.dataChegada\">
                                                    {{moment(atendimento.dataChegada, 'YYYY-MM-DD hh:mm:ss').format(dateTimeFormat)}}
                                                </span>
                                            </td>
                                            <td>
                                                <span v-if=\"atendimento.dataInicio\">
                                                    {{moment(atendimento.dataInicio, 'YYYY-MM-DD hh:mm:ss').format(dateTimeFormat)}}
                                                </span>
                                            </td>
                                            <td>
                                                <span v-if=\"atendimento.dataFim\">
                                                    {{moment(atendimento.dataFim, 'YYYY-MM-DD hh:mm:ss').format(dateTimeFormat)}}
                                                </span>
                                            </td>
                                            <td>
                                                {{atendimento.triagem}}
                                            </td>
                                            <td>
                                                {{atendimento.usuario}}
                                            </td>
                                            <td>
                                                {{atendimento.status}}
                                            </td>
                                        </tr>
                                    ";
        echo "
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                                
        ";
        // line 391
        echo "        <div id=\"dialog-agendamentos\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-lg\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\">";
        // line 395
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Agendamento", array(), "NovosgaTriageBundle");
        echo "</h5>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                    </div>
                    <div class=\"modal-body\">
                        <div class=\"form-group\">
                            <label>";
        // line 400
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.service", array(), "NovosgaTriageBundle"), "html", null, true);
        echo "</label>
                            <select class=\"form-control\" v-on:change=\"loadAgendamentos\" v-model=\"servicoAgendamento\">
                                <option value=\"\"></option>
                                <option v-bind:value=\"s.servico.id\" v-for=\"s in servicos\">";
        // line 407
        echo "{{ s.sigla }} - {{ s.servico.nome }}";
        echo "</option>
                            </select>
                        </div>
                        <table class=\"table\">
                            <thead>
                                <tr>
                                    <th>";
        // line 413
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.date", array(), "NovosgaTriageBundle"), "html", null, true);
        echo "</th>
                                    <th>";
        // line 414
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.time", array(), "NovosgaTriageBundle"), "html", null, true);
        echo "</th>
                                    <th>";
        // line 415
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.name", array(), "NovosgaTriageBundle"), "html", null, true);
        echo "</th>
                                    <th>";
        // line 416
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.customer.id", array(), "NovosgaTriageBundle"), "html", null, true);
        echo "</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 444
        echo "
                                    <tr v-for=\"agendamento in agendamentos\" v-bind:class=\"{ 'table-success': !!agendamento.dataConfirmacao }\">
                                        <td>
                                            {{moment(agendamento.data, 'YYYY-MM-DD').format(dateTime)}}
                                        </td>
                                        <td>
                                            {{agendamento.hora}}
                                        </td>
                                        <td>
                                            {{agendamento.cliente.nome}}
                                        </td>
                                        <td>
                                            {{agendamento.cliente.documento}}
                                        </td>
                                        <td>
                                            <button type=\"button\" class=\"btn btn-default\" 
                                                    title=\"{% trans %}Confirmar presença{% endtrans %}\" 
                                                    v-on:click=\"agendamentoConfirm(agendamento)\"
                                                    v-if=\"!agendamento.dataConfirmacao\">
                                                <i class=\"fa fa-check\"></i>
                                            </button>
                                        </td>
                                    </tr>
                                ";
        echo "
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    // line 454
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 455
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 456
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/novosgatriage/css/style.css"), "html", null, true);
        echo "\">
";
    }

    // line 459
    public function block_javascripts($context, array $blocks = array())
    {
        // line 460
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        var servicos       = ";
        // line 462
        echo json_encode(($context["servicos"] ?? null));
        echo ",
            prioridades    = ";
        // line 463
        echo json_encode(($context["prioridades"] ?? null));
        echo ",
            usuario        = ";
        // line 464
        echo json_encode(($context["usuario"] ?? null));
        echo ",
            unidade        = ";
        // line 465
        echo json_encode(($context["unidade"] ?? null));
        echo ",
            dateTime       = '";
        // line 466
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("MM/DD/YYYY", array(), "NovosgaTriageBundle"), "html", null, true);
        echo "';
            dateTimeFormat = '";
        // line 467
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("MM/DD/YYYY HH:mm:ss", array(), "NovosgaTriageBundle"), "html", null, true);
        echo "',
            wsSecret       = '";
        // line 468
        echo twig_escape_filter($this->env, ($context["wsSecret"] ?? null), "html", null, true);
        echo "';
    </script>
    <script type=\"text/javascript\" src=\"";
        // line 470
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/novosgatriage/js/lodash.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 471
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/novosgatriage/js/script.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "NovosgaTriageBundle:default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  706 => 471,  702 => 470,  697 => 468,  693 => 467,  689 => 466,  685 => 465,  681 => 464,  677 => 463,  673 => 462,  667 => 460,  664 => 459,  658 => 456,  653 => 455,  650 => 454,  614 => 444,  606 => 416,  602 => 415,  598 => 414,  594 => 413,  585 => 407,  579 => 400,  571 => 395,  565 => 391,  520 => 381,  513 => 344,  509 => 343,  505 => 342,  501 => 341,  497 => 340,  493 => 339,  489 => 338,  485 => 337,  470 => 325,  465 => 323,  455 => 316,  449 => 312,  441 => 305,  439 => 304,  427 => 297,  416 => 287,  410 => 283,  396 => 271,  390 => 268,  383 => 260,  376 => 256,  371 => 250,  361 => 243,  357 => 238,  353 => 236,  351 => 235,  344 => 231,  339 => 225,  328 => 217,  322 => 213,  310 => 202,  308 => 201,  301 => 197,  289 => 190,  282 => 184,  272 => 177,  266 => 173,  258 => 166,  256 => 165,  247 => 159,  243 => 154,  237 => 151,  233 => 146,  227 => 143,  223 => 138,  215 => 133,  209 => 129,  205 => 126,  200 => 122,  198 => 121,  193 => 118,  191 => 117,  186 => 114,  184 => 113,  174 => 105,  168 => 102,  163 => 101,  161 => 100,  158 => 99,  156 => 98,  152 => 97,  147 => 95,  144 => 91,  139 => 87,  135 => 86,  111 => 61,  106 => 55,  97 => 49,  93 => 48,  74 => 32,  70 => 31,  48 => 12,  43 => 10,  37 => 6,  34 => 5,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "NovosgaTriageBundle:default:index.html.twig", "/var/www/html/sgf/novosga/modules/novosga/triage-bundle/Resources/views/default/index.html.twig");
    }
}
