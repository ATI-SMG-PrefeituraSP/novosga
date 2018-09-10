<?php

/* NovosgaTriageBundle:default:index.html.twig */
class __TwigTemplate_ab442044c7eabc77f7215406bd4ee61c8b8d65bd6c718a80e4de77e1d244b391 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NovosgaTriageBundle:default:index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NovosgaTriageBundle:default:index.html.twig"));

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
        if (twig_length_filter($this->env, (isset($context["prioridades"]) || array_key_exists("prioridades", $context) ? $context["prioridades"] : (function () { throw new Twig_Error_Runtime('Variable "prioridades" does not exist.', 100, $this->source); })()))) {
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 454
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 455
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 456
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/novosgatriage/css/style.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 459
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 460
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        var servicos       = ";
        // line 462
        echo json_encode((isset($context["servicos"]) || array_key_exists("servicos", $context) ? $context["servicos"] : (function () { throw new Twig_Error_Runtime('Variable "servicos" does not exist.', 462, $this->source); })()));
        echo ",
            prioridades    = ";
        // line 463
        echo json_encode((isset($context["prioridades"]) || array_key_exists("prioridades", $context) ? $context["prioridades"] : (function () { throw new Twig_Error_Runtime('Variable "prioridades" does not exist.', 463, $this->source); })()));
        echo ",
            usuario        = ";
        // line 464
        echo json_encode((isset($context["usuario"]) || array_key_exists("usuario", $context) ? $context["usuario"] : (function () { throw new Twig_Error_Runtime('Variable "usuario" does not exist.', 464, $this->source); })()));
        echo ",
            unidade        = ";
        // line 465
        echo json_encode((isset($context["unidade"]) || array_key_exists("unidade", $context) ? $context["unidade"] : (function () { throw new Twig_Error_Runtime('Variable "unidade" does not exist.', 465, $this->source); })()));
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
        echo twig_escape_filter($this->env, (isset($context["wsSecret"]) || array_key_exists("wsSecret", $context) ? $context["wsSecret"] : (function () { throw new Twig_Error_Runtime('Variable "wsSecret" does not exist.', 468, $this->source); })()), "html", null, true);
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  748 => 471,  744 => 470,  739 => 468,  735 => 467,  731 => 466,  727 => 465,  723 => 464,  719 => 463,  715 => 462,  709 => 460,  700 => 459,  688 => 456,  683 => 455,  674 => 454,  632 => 444,  624 => 416,  620 => 415,  616 => 414,  612 => 413,  603 => 407,  597 => 400,  589 => 395,  583 => 391,  538 => 381,  531 => 344,  527 => 343,  523 => 342,  519 => 341,  515 => 340,  511 => 339,  507 => 338,  503 => 337,  488 => 325,  483 => 323,  473 => 316,  467 => 312,  459 => 305,  457 => 304,  445 => 297,  434 => 287,  428 => 283,  414 => 271,  408 => 268,  401 => 260,  394 => 256,  389 => 250,  379 => 243,  375 => 238,  371 => 236,  369 => 235,  362 => 231,  357 => 225,  346 => 217,  340 => 213,  328 => 202,  326 => 201,  319 => 197,  307 => 190,  300 => 184,  290 => 177,  284 => 173,  276 => 166,  274 => 165,  265 => 159,  261 => 154,  255 => 151,  251 => 146,  245 => 143,  241 => 138,  233 => 133,  227 => 129,  223 => 126,  218 => 122,  216 => 121,  211 => 118,  209 => 117,  204 => 114,  202 => 113,  192 => 105,  186 => 102,  181 => 101,  179 => 100,  176 => 99,  174 => 98,  170 => 97,  165 => 95,  162 => 91,  157 => 87,  153 => 86,  129 => 61,  124 => 55,  115 => 49,  111 => 48,  92 => 32,  88 => 31,  66 => 12,  61 => 10,  55 => 6,  46 => 5,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@NovosgaTriage/base.html.twig\" %}

{% trans_default_domain 'NovosgaTriageBundle' %}

{% block body %}
    <div class=\"row\">
        <div class=\"col-sm-12\">
            <h1>
                <i class=\"fa fa-print\" aria-hidden=\"true\"></i>
                {{ 'title'|trans }}
                <small>
                    {{ 'subtitle'|trans }}
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
                            <label for=\"cliente-documento\" class=\"sr-only\">{{ 'label.customer.id'|trans }}</label>
                            <input type=\"text\" id=\"cliente-documento\" list=\"documentos\" class=\"form-control\" maxlength=\"30\" placeholder=\"{{ 'label.customer.id'|trans }}\" v-model=\"cliente.documento\" 
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
                            <label for=\"cliente-nome\" class=\"sr-only\">{{ 'label.name'|trans }}</label>
                            <input type=\"text\" id=\"cliente-nome\" class=\"form-control\" maxlength=\"100\" placeholder=\"{{ 'label.name'|trans }}\" v-model=\"cliente.nome\" />
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-2 col-3\">
                <div class=\"ultima-senha\" title=\"{% trans %}Última senha{% endtrans %}\" v-if=\"ultimaSenha\">
                    <span class=\"label label-default\" ng-class=\"{ 'label-default': ultimaSenha.prioridade==0, 'label-danger': ultimaSenha.prioridade.peso>0 }\">
                        <i class=\"fa fa-print\"></i>&nbsp;
                        {%- verbatim -%}
                            {{ultimaSenha.senha.format}}
                        {%- endverbatim -%}
                    </span>
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
                        <a href=\"#\" v-on:click.prevent=\"showServicoInfo(su.servico.id)\">
                            {%- verbatim -%}
                                {{su.sigla}} - {{su.servico.nome}}
                            {%- endverbatim -%}
                        </a>
                        <span class=\"badge badge-pill badge-secondary\" title=\"{% trans %}Aguardando atendimento{% endtrans %} / {% trans %}Total de senhas do serviço{% endtrans %}\">
                            {%- verbatim -%}
                                {{totais[su.servico.id] ? totais[su.servico.id].fila : '-'}}
                            {%- endverbatim -%}
                            &nbsp;/&nbsp;
                            {%- verbatim -%}
                                {{totais[su.servico.id] ? totais[su.servico.id].total : '-'}}
                            {%- endverbatim -%}
                        </span>
                        <span class=\"buttons pull-right\">
                            <button class=\"btn btn-primary\" title=\"{% trans %}Distribuir senha normal{% endtrans %}\" v-on:click.prevent=\"distribuiSenhaNormal(su.servico.id)\">
                                {% trans %}Normal{% endtrans %}
                            </button>
                            {% if prioridades|length %}
                                <button class=\"btn btn-danger\" title=\"{% trans %}Distribuir senha com prioridade{% endtrans %}\" v-on:click.prevent=\"showPrioridades(su.servico.id)\" v-if=\"su.prioridade\">
                                    {{ 'label.priority'|trans }}
                                </button>
                            {% endif %}
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <p class=\"links\">
            <a href=\"#dialog-busca\" class=\"btn btn-secondary\" data-toggle=\"modal\">
                <i class=\"fa fa-search\"></i>&nbsp;
                {% trans %}Consultar senha{% endtrans %}
            </a>
            <a href=\"#dialog-triagem-config\" class=\"btn btn-secondary\" data-toggle=\"modal\">
                <i class=\"fa fa-cog\"></i>&nbsp;
                {% trans %}Configuração{% endtrans %}
            </a>
            <a href=\"#dialog-agendamentos\" class=\"btn btn-secondary\" data-toggle=\"modal\">
                <i class=\"fa fa-calendar\"></i>&nbsp;
                {% trans %}Agendamentos{% endtrans %}
            </a>
        </p>

        {# iframe para impressao, evitando popup #}
        <iframe id=\"frame-impressao\" width=\"0\" height=\"0\" style=\"border:none;\"></iframe>

        {# dialog para exibir a senha gerada #}
        <div id=\"dialog-senha\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\">{{ 'label.ticket'|trans }}</h5>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                    </div>
                    <div class=\"modal-body\" v-if=\"atendimento\">
                        <div class=\"field\">
                            <h4>{{ 'label.ticket.number'|trans }}</h4>
                            <p class=\"numero\">
                                {%- verbatim -%}
                                    {{atendimento.senha.format}}
                                {%- endverbatim -%}
                            </p>
                        </div>
                        <div class=\"field\">
                            <h4>{{ 'label.service'|trans }}</h4>
                            <p class=\"servico\">
                                {%- verbatim -%}
                                    {{atendimento.servico.nome}}
                                {%- endverbatim -%}
                            </p>
                        </div>
                        <div class=\"field\">
                            <h4>{{ 'label.priority'|trans }}</h4>
                            <p class=\"nome-prioridade\">
                                {%- verbatim -%}
                                    {{atendimento.prioridade.nome}}
                                {%- endverbatim -%}
                            </p>
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-primary\" v-on:click.prevent=\"reprint(atendimento)\">
                            <i class=\"fa fa-print\"></i> 
                            {% trans %}Imprimir{% endtrans %}
                        </button>
                    </div>
                </div>
            </div>
        </div>

        {# dialog de configuracao #}
        <div id=\"dialog-triagem-config\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-lg\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\">{% trans %}Configuração{% endtrans %}</h5>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                    </div>
                    <div class=\"modal-body\">
                        <div class=\"row\">
                            <div class=\"col-sm-8\">
                                <fieldset>
                                    <legend>{% trans %}Serviços{% endtrans %}</legend>
                                    <div class=\"checkbox\" v-for=\"su in servicos\">
                                        <label>
                                            <input type=\"checkbox\" v-bind:value=\"su\" v-model=\"config.servicosHabilitados\" v-on:change=\"saveConfig\"> 
                                            {% verbatim %}
                                                {{ su.sigla }} - {{ su.servico.nome }}
                                            {% endverbatim %}
                                        </label>
                                    </div>
                                </fieldset>
                            </div>
                            <div class=\"col-sm-4\">
                                <fieldset>
                                    <legend>{% trans %}Impressão{% endtrans %}</legend>
                                    <div class=\"checkbox\">
                                        <label>
                                            <input type=\"checkbox\" v-model=\"config.imprimir\" v-on:change=\"saveConfig\"> 
                                            {% trans %}Habilitar impressão{% endtrans %}
                                        </label>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {# dialog para exibir informacoes do servico #}
        <div id=\"dialog-servico\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-lg\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\">{{ 'label.service'|trans }}</h5>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                    </div>
                    <div class=\"modal-body\" v-if=\"servicoInfo\">
                        <table class=\"table table-bordered\">
                            <tbody>
                                <tr>
                                    <th>
                                        {{ 'label.name'|trans }}
                                    </th>
                                    <td>
                                        {%- verbatim -%}
                                            {{servicoInfo.nome}}
                                        {%- endverbatim -%}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {% trans %}Última senha{% endtrans %}
                                    </th>
                                    <td>
                                        <button class=\"btn btn-secondary\" title=\"{% trans %}Reimprimir{% endtrans %}\" 
                                                v-on:click.prevent=\"reprint({ id: servicoInfo.senhaId })\" v-if=\"servicoInfo.senhaId\">
                                            {%- verbatim -%}
                                                {{servicoInfo.senha}}
                                            {%- endverbatim -%}
                                            &nbsp;
                                            <i class=\"fa fa-print\"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ 'label.description'|trans }}
                                    </th>
                                    <td>
                                        {%- verbatim -%}
                                            {{servicoInfo.descricao}}
                                        {%- endverbatim -%}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ 'label.subservices'|trans }}
                                    </th>
                                    <td>
                                        <ul class=\"subservicos notempty\" v-if=\"servicoInfo.subservicos.length\">
                                            <li v-for=\"servico in servicoInfo.subservicos\">
                                                {%- verbatim -%}
                                                    {{servico}}
                                                {%- endverbatim -%}
                                            </li>
                                        </ul>
                                        <ul class=\"subservicos empty\" v-if=\"!servicoInfo.subservicos.length\">
                                            <li>{% trans %}Não há subserviços{% endtrans %}</li>
                                        </ul>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        {# dialog para escolher a prioridade da senha #}
        <div id=\"dialog-prioridade\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\">{{ 'label.priority'|trans }}</h5>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                    </div>
                    <div class=\"modal-body\">
                        <ul>
                            <li v-for=\"p in prioridades\">
                                <label>
                                    <input type=\"radio\" v-bind:value=\"p\" v-model=\"prioridade\">
                                    {% verbatim %}
                                        {{ p.nome }}
                                    {% endverbatim %}
                                </label>
                            </li>
                        </ul>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-primary\" v-on:click.prevent=\"distribuiSenhaPrioritaria\">
                            {% trans %}Gerar prioridade{% endtrans %}
                        </button>
                    </div>
                </div>
            </div>
        </div>

        {# dialog busca #}
        <div id=\"dialog-busca\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\">{{ 'modal.search'|trans }}</h5>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                    </div>
                    <div class=\"modal-body\">
                        <form class=\"row\" role=\"form\" v-on:submit.prevent=\"consultar\">
                            <div class=\"col-3\">
                                <div class=\"input-group\">
                                    <input type=\"text\" maxlength=\"10\" class=\"form-search form-control\" placeholder=\"{{ 'modal.search.placeholder'|trans }}\" v-model=\"search\">
                                    <div class=\"input-group-append\">
                                        <button type=\"submit\" class=\"btn btn-primary\" title=\"{{ 'modal.search.button.submit'|trans }}\">
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
                                        <th>{{ 'label.ticket.number'|trans }}</th>
                                        <th>{{ 'label.service'|trans }}</th>
                                        <th>{{ 'label.ticket.arrival_date'|trans }}</th>
                                        <th>{{ 'label.ticket.start_date'|trans }}</th>
                                        <th>{{ 'label.ticket.end_date'|trans }}</th>
                                        <th>{{ 'label.triage'|trans }}</th>
                                        <th>{{ 'label.ticket.user'|trans }}</th>
                                        <th>{{ 'label.status'|trans }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {% verbatim %}
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
                                    {% endverbatim %}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                                
        {# dialog agendamentos #}
        <div id=\"dialog-agendamentos\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-lg\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\">{% trans %}Agendamento{% endtrans %}</h5>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                    </div>
                    <div class=\"modal-body\">
                        <div class=\"form-group\">
                            <label>{{ 'label.service'|trans }}</label>
                            <select class=\"form-control\" v-on:change=\"loadAgendamentos\" v-model=\"servicoAgendamento\">
                                <option value=\"\"></option>
                                <option v-bind:value=\"s.servico.id\" v-for=\"s in servicos\">
                                    {%- verbatim -%}
                                        {{ s.sigla }} - {{ s.servico.nome }}
                                    {%- endverbatim -%}
                                </option>
                            </select>
                        </div>
                        <table class=\"table\">
                            <thead>
                                <tr>
                                    <th>{{ 'label.date'|trans }}</th>
                                    <th>{{ 'label.time'|trans }}</th>
                                    <th>{{ 'label.name'|trans }}</th>
                                    <th>{{ 'label.customer.id'|trans }}</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                {% verbatim %}
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
                                {% endverbatim %}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link type=\"text/css\" rel=\"stylesheet\" href=\"{{ asset('bundles/novosgatriage/css/style.css') }}\">
{% endblock %}    

{% block javascripts %}
    {{ parent() }}
    <script>
        var servicos       = {{ servicos|json_encode()|raw }},
            prioridades    = {{ prioridades|json_encode()|raw}},
            usuario        = {{ usuario|json_encode()|raw }},
            unidade        = {{ unidade|json_encode()|raw }},
            dateTime       = '{{ 'MM/DD/YYYY'|trans }}';
            dateTimeFormat = '{{ 'MM/DD/YYYY HH:mm:ss'|trans }}',
            wsSecret       = '{{ wsSecret }}';
    </script>
    <script type=\"text/javascript\" src=\"{{ asset('bundles/novosgatriage/js/lodash.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('bundles/novosgatriage/js/script.js') }}\"></script>
{% endblock %}
", "NovosgaTriageBundle:default:index.html.twig", "/var/www/html/sgf/novosga/modules/novosga/triage-bundle/Resources/views/default/index.html.twig");
    }
}
