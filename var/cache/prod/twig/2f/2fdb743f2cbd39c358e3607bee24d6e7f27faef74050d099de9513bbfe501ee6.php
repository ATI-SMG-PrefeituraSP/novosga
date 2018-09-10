<?php

/* NovosgaMonitorBundle:default:index.html.twig */
class __TwigTemplate_c24048769b8af366940fd35a84e884631c69495674f86143f2f4c8810ac54d21 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("@NovosgaMonitor/base.html.twig", "NovosgaMonitorBundle:default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@NovosgaMonitor/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <div id=\"monitor\">
        <div class=\"row\">
            <div class=\"col-8\">
                <h1>
                    <i class=\"fa fa-desktop\" aria-hidden=\"true\"></i>
                    ";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title", array(), "NovosgaMonitorBundle"), "html", null, true);
        echo "
                    <small>
                        ";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("subtitle", array(), "NovosgaMonitorBundle"), "html", null, true);
        echo "
                    </small>
                </h1>
            </div>
            <div class=\"col-4\">
                <form class=\"pull-right\" role=\"search\"  v-on:submit.prevent=\"consulta\">
                    <div class=\"input-group\">
                        <input type=\"text\" class=\"form-search form-control\" placeholder=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("placeholder.search", array(), "NovosgaMonitorBundle"), "html", null, true);
        echo "\" v-model=\"search\">
                        <div class=\"input-group-append\">
                            <button type=\"submit\" class=\"btn btn-primary\" title=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.find", array(), "NovosgaMonitorBundle"), "html", null, true);
        echo "\">
                                <i class=\"fa fa-search\"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <hr>
        
        <div class=\"servicos row\" v-cloak>
            <div class=\"col-md-12\" v-if=\"servicos.length===0\">
                <div class=\"jumbotron text-center\">
                    <h1><i class=\"fa fa-smile-o\"></i></h1>
                    <p>Ninguém aguardando atendimento no momento</p>
                </div>
            </div>
            <div class=\"col-md-6\" v-for=\"item in servicos\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        ";
        // line 45
        echo "
                            {{ item.servicoUnidade.sigla }} - {{ item.servicoUnidade.servico.nome }}
                        ";
        echo "
                        <div class=\"pull-right\">
                            <span class=\"badge badge-pill badge-primary\">
                                ";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.no_priority", array(), "NovosgaMonitorBundle"), "html", null, true);
        echo "
                                ";
        // line 51
        echo "
                                    {{ totalPorSituacao(item.fila, false) }}
                                ";
        echo "
                            </span>
                            <span class=\"badge badge-pill badge-danger\">
                                ";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.priority", array(), "NovosgaMonitorBundle"), "html", null, true);
        echo "
                                ";
        // line 57
        echo "
                                    {{ totalPorSituacao(item.fila, true) }}
                                ";
        echo "
                            </span>
                            <span class=\"badge badge-pill badge-secondary\">
                                ";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.total", array(), "NovosgaMonitorBundle"), "html", null, true);
        echo "
                                ";
        // line 63
        echo "
                                    {{ item.fila.length }}
                                ";
        echo "
                            </span>
                        </div>
                    </div>
                    <div class=\"card-body\">
                        <ul class=\"fila list-inline\">
                            <li v-for=\"atendimento in item.fila\" v-bind:class=\"{prioridade: atendimento.prioridade.peso > 0 }\" class=\"list-inline-item\">
                                <a href=\"#\" v-on:click=\"view(atendimento)\" v-bind:title=\"atendimento.prioridade.nome + ' (' + atendimento.tempoEspera + ')'\">
                                    ";
        // line 73
        echo "
                                        {{atendimento.senha.format}}
                                    ";
        echo "
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        ";
        // line 83
        echo "        <div id=\"dialog-busca\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\">";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("modal.search", array(), "NovosgaMonitorBundle"), "html", null, true);
        echo "</h5>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                    </div>
                    <div class=\"modal-body\">
                        <form class=\"row\" role=\"form\" v-on:submit.prevent=\"consultar\">
                            <div class=\"col-3\">
                                <div class=\"input-group\">
                                    <input type=\"text\" maxlength=\"10\" class=\"form-search form-control\" placeholder=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("modal.search.placeholder", array(), "NovosgaMonitorBundle"), "html", null, true);
        echo "\" v-model=\"search\">
                                    <div class=\"input-group-append\">
                                        <button type=\"submit\" class=\"btn btn-primary\" title=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("modal.search.button.submit", array(), "NovosgaMonitorBundle"), "html", null, true);
        echo "\">
                                            <i class=\"fa fa-search\"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <hr>
                        <div class=\"result\">
                            <table class=\"table table-bordered\">
                                <thead>
                                    <tr>
                                        <th>";
        // line 108
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.ticket.number", array(), "NovosgaMonitorBundle"), "html", null, true);
        echo "</th>
                                        <th>";
        // line 109
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.service", array(), "NovosgaMonitorBundle"), "html", null, true);
        echo "</th>
                                        <th>";
        // line 110
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.ticket.arrival_date", array(), "NovosgaMonitorBundle"), "html", null, true);
        echo "</th>
                                        <th>";
        // line 111
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.ticket.start_date", array(), "NovosgaMonitorBundle"), "html", null, true);
        echo "</th>
                                        <th>";
        // line 112
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.ticket.end_date", array(), "NovosgaMonitorBundle"), "html", null, true);
        echo "</th>
                                        <th>";
        // line 113
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.triage", array(), "NovosgaMonitorBundle"), "html", null, true);
        echo "</th>
                                        <th>";
        // line 114
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.ticket.user", array(), "NovosgaMonitorBundle"), "html", null, true);
        echo "</th>
                                        <th>";
        // line 115
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.status", array(), "NovosgaMonitorBundle"), "html", null, true);
        echo "</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 154
        echo "
                                        <tr v-for=\"atendimento in searchResult\" v-bind:class=\"{danger: (atendimento.status === 'nao_compareceu' || atendimento.status === 'cancelada')}\">
                                            <td>
                                                <a href=\"#\" v-on:click.prevent=\"view(atendimento)\">
                                                    {{atendimento.senha.format}}
                                                </a>
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
        // line 164
        echo "        <div id=\"dialog-view\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-lg\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\">";
        // line 168
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("modal.attendance", array(), "NovosgaMonitorBundle"), "html", null, true);
        echo "</h5>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                    </div>
                    <div class=\"modal-body\" v-if=\"atendimento\">
                        <input type=\"hidden\" v-bind:valuee=\"atendimento.id\" />
                        <fieldset>
                            <legend>";
        // line 174
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("modal.attendance.ticket", array(), "NovosgaMonitorBundle"), "html", null, true);
        echo "</legend>
                            <table class=\"table table-bordered\">
                                <tr>
                                    <th>
                                        ";
        // line 178
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.ticket.number", array(), "NovosgaMonitorBundle"), "html", null, true);
        echo "
                                    </th>
                                    <td>
                                        ";
        // line 183
        echo "
                                            {{atendimento.senha.format}}
                                        ";
        echo "
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        ";
        // line 188
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.priority", array(), "NovosgaMonitorBundle"), "html", null, true);
        echo "
                                    </th>
                                    <td>
                                        ";
        // line 193
        echo "
                                            {{atendimento.prioridade.nome}}
                                        ";
        echo "
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        ";
        // line 198
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.service", array(), "NovosgaMonitorBundle"), "html", null, true);
        echo "
                                    </th>
                                    <td>
                                        ";
        // line 203
        echo "
                                            {{atendimento.servico.nome}}
                                        ";
        echo "
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        ";
        // line 208
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.ticket.arrival_date", array(), "NovosgaMonitorBundle"), "html", null, true);
        echo "
                                    </th>
                                    <td>
                                        ";
        // line 213
        echo "
                                            {{moment(atendimento.dataChegada, 'YYYY-MM-DD hh:mm:ss').format(dateTimeFormat)}}
                                        ";
        echo "
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        ";
        // line 218
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.ticket.wait_time", array(), "NovosgaMonitorBundle"), "html", null, true);
        echo "
                                    </th>
                                    <td>
                                        ";
        // line 223
        echo "
                                            {{atendimento.tempoEspera}}
                                        ";
        echo "
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        ";
        // line 228
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.ticket.start_date", array(), "NovosgaMonitorBundle"), "html", null, true);
        echo "
                                    </th>
                                    <td>
                                        ";
        // line 233
        echo "
                                            {{atendimento.dataInicio}}
                                        ";
        echo "
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        ";
        // line 238
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.ticket.end_date", array(), "NovosgaMonitorBundle"), "html", null, true);
        echo "
                                    </th>
                                    <td>
                                        ";
        // line 243
        echo "
                                            {{atendimento.dataFim}}
                                        ";
        echo "
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        ";
        // line 248
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.status", array(), "NovosgaMonitorBundle"), "html", null, true);
        echo "
                                    </th>
                                    <td>
                                        ";
        // line 253
        echo "
                                            {{atendimento.status}}
                                        ";
        echo "
                                    </td>
                                </tr>
                            </table>
                        </fieldset>
                                
                                
                        <fieldset v-if=\"atendimento.cliente\">
                            <legend>";
        // line 261
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.customer", array(), "NovosgaMonitorBundle"), "html", null, true);
        echo "</legend>
                            <table class=\"table table-bordered\">
                                <tr>
                                    <th>
                                        ";
        // line 265
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.customer.name", array(), "NovosgaMonitorBundle"), "html", null, true);
        echo "
                                    </th>
                                    <td>
                                        ";
        // line 270
        echo "
                                            {{atendimento.cliente.nome}}
                                        ";
        echo "
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        ";
        // line 275
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.customer.id", array(), "NovosgaMonitorBundle"), "html", null, true);
        echo "
                                    </th>
                                    <td>
                                        ";
        // line 280
        echo "
                                            {{atendimento.cliente.documento}}
                                        ";
        echo "
                                    </td>
                                </tr>
                            </table>
                        </fieldset>
                    </div>
                    <div class=\"modal-footer\" v-if=\"atendimento\">
                        <button type=\"button\" class=\"btn btn-primary\" v-on:click=\"reativar(atendimento)\" v-if=\"atendimento.status === 'cancelada' || atendimento.status === 'nao_compareceu'\">
                            ";
        // line 288
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("modal.attendance.button.reactivate", array(), "NovosgaMonitorBundle"), "html", null, true);
        echo "
                        </button>

                        <button type=\"button\" class=\"btn btn-secondary\" v-on:click=\"transfere(atendimento)\" v-if=\"atendimento.status === 'emitida'\">
                            ";
        // line 292
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("modal.attendance.button.transfer", array(), "NovosgaMonitorBundle"), "html", null, true);
        echo "
                        </button>

                        <button type=\"button\" class=\"btn btn-danger\" v-on:click=\"cancelar(atendimento)\" v-if=\"atendimento.status === 'emitida'\">
                            ";
        // line 296
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("modal.attendance.button.cancel", array(), "NovosgaMonitorBundle"), "html", null, true);
        echo "
                        </button>
                    </div>
                </div>
            </div>
        </div>

        ";
        // line 304
        echo "        <div id=\"dialog-transfere\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                ";
        // line 306
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["transferirForm"] ?? null), 'form_start', array("attr" => array("v-on:submit.prevent" => "transferir(atendimento, novoServico, novaPrioridade)")));
        echo "
                    <div class=\"modal-content\" v-if=\"atendimento\">
                        <div class=\"modal-header\">
                            <h5 class=\"modal-title\">
                                ";
        // line 310
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("modal.transfer", array(), "NovosgaMonitorBundle"), "html", null, true);
        echo "
                                <span class=\"badge\">
                                    ";
        // line 314
        echo "
                                        {{atendimento.senha.format}}
                                    ";
        echo "
                                </span>
                            </h5>
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                        </div>
                        <div class=\"modal-body\">
                            
                            ";
        // line 321
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["transferirForm"] ?? null), "servico", array()), 'row', array("attr" => array("v-model" => "novoServico")));
        echo "
                            
                            ";
        // line 323
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["transferirForm"] ?? null), "prioridade", array()), 'row', array("attr" => array("v-model" => "novaPrioridade")));
        echo "
                            
                        </div>
                        <div class=\"modal-footer\">
                            <button type=\"submit\" class=\"btn btn-primary\">
                                ";
        // line 328
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("modal.transfer.button", array(), "NovosgaMonitorBundle"), "html", null, true);
        echo "
                            </button>
                        </div>
                    </div>
                ";
        // line 332
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["transferirForm"] ?? null), 'form_end');
        echo "
            </div>
        </div>

        <div id=\"novosga-clock\" title=\"";
        // line 336
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("server.datetime", array(), "NovosgaMonitorBundle"), "html", null, true);
        echo "\" class=\"clock\"></div>
    </div>
";
    }

    // line 340
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 341
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 342
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/novosgamonitor/css/style.css"), "html", null, true);
        echo "\">
";
    }

    // line 345
    public function block_javascripts($context, array $blocks = array())
    {
        // line 346
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\">
        var ids             = [";
        // line 348
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["servicos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["su"]) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["su"], "servico", array()), "id", array()), "html", null, true);
            echo ",";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['su'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "],
            usuario         = ";
        // line 349
        echo json_encode(($context["usuario"] ?? null));
        echo ",
            unidade         = ";
        // line 350
        echo json_encode(($context["unidade"] ?? null));
        echo ",
            labelSim        = '";
        // line 351
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.yes", array(), "NovosgaMonitorBundle"), "html", null, true);
        echo "',
            labelNao        = '";
        // line 352
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.no", array(), "NovosgaMonitorBundle"), "html", null, true);
        echo "',
            alertTitle      = '";
        // line 353
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("alert.title", array(), "NovosgaMonitorBundle"), "html", null, true);
        echo "',
            alertCancelar   = '";
        // line 354
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("alert.cancel.text", array(), "NovosgaMonitorBundle"), "html", null, true);
        echo "',
            alertReativar   = '";
        // line 355
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("alert.reactivate.text", array(), "NovosgaMonitorBundle"), "html", null, true);
        echo "',
            alertTransferir = '";
        // line 356
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("alert.transfer.text", array(), "NovosgaMonitorBundle"), "html", null, true);
        echo "',
            dateTimeFormat  = '";
        // line 357
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("MM/DD/YYYY HH:mm:ss", array(), "NovosgaMonitorBundle"), "html", null, true);
        echo "',
            wsSecret        = '";
        // line 358
        echo twig_escape_filter($this->env, ($context["wsSecret"] ?? null), "html", null, true);
        echo "';
        
        App.Clock.init(\"novosga-clock\", ";
        // line 360
        echo twig_escape_filter($this->env, ($context["milis"] ?? null), "html", null, true);
        echo ");
    </script>
    <script type=\"text/javascript\" src=\"";
        // line 362
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/novosgamonitor/js/sweetalert.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 363
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/novosgamonitor/js/script.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "NovosgaMonitorBundle:default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  635 => 363,  631 => 362,  626 => 360,  621 => 358,  617 => 357,  613 => 356,  609 => 355,  605 => 354,  601 => 353,  597 => 352,  593 => 351,  589 => 350,  585 => 349,  573 => 348,  567 => 346,  564 => 345,  558 => 342,  553 => 341,  550 => 340,  543 => 336,  536 => 332,  529 => 328,  521 => 323,  516 => 321,  504 => 314,  499 => 310,  492 => 306,  488 => 304,  478 => 296,  471 => 292,  464 => 288,  451 => 280,  445 => 275,  435 => 270,  429 => 265,  422 => 261,  409 => 253,  403 => 248,  393 => 243,  387 => 238,  377 => 233,  371 => 228,  361 => 223,  355 => 218,  345 => 213,  339 => 208,  329 => 203,  323 => 198,  313 => 193,  307 => 188,  297 => 183,  291 => 178,  284 => 174,  275 => 168,  269 => 164,  222 => 154,  215 => 115,  211 => 114,  207 => 113,  203 => 112,  199 => 111,  195 => 110,  191 => 109,  187 => 108,  172 => 96,  167 => 94,  157 => 87,  151 => 83,  137 => 73,  124 => 63,  120 => 60,  112 => 57,  108 => 54,  100 => 51,  96 => 48,  88 => 45,  64 => 22,  59 => 20,  49 => 13,  44 => 11,  37 => 6,  34 => 5,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "NovosgaMonitorBundle:default:index.html.twig", "/var/www/html/sgf/novosga/modules/novosga/monitor-bundle/Resources/views/default/index.html.twig");
    }
}
