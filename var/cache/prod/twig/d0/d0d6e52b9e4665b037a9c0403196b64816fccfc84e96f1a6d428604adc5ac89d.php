<?php

/* NovosgaAttendanceBundle:default:index.html.twig */
class __TwigTemplate_8f006588b631db584b0525a8708ff3bf1bea7e8e4b39f62b03450c47b4d7316d extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("@NovosgaAttendance/base.html.twig", "NovosgaAttendanceBundle:default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@NovosgaAttendance/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <div id=\"attendance\" v-cloak>
        <div id=\"atendimento\" v-if=\"usuario.numeroLocal\">
            <div class=\"row\">
                <div class=\"col-sm-3 col-md-2\">
                    <div id=\"local\">
                        <span class=\"numero\" v-text=\"usuario.numeroLocal\">
                            ";
        // line 12
        echo twig_escape_filter($this->env, ($context["local"] ?? null), "html", null, true);
        echo "
                        </span>
                        <a href=\"#dialog-local\" data-toggle=\"modal\">
                            ";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.change", array(), "NovosgaAttendanceBundle"), "html", null, true);
        echo "
                        </a>
                    </div>
                </div>
                <div class=\"attendance-panel col-sm-9 col-md-10\">
                    <div class=\"row\" v-if=\"atendimento && atendimento.status!=='encerrando'\">
                        <div class=\"col-md-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    ";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.attendance", array(), "NovosgaAttendanceBundle"), "html", null, true);
        echo "
                                </div>
                                <table class=\"table\">
                                    <tr>
                                        <th>
                                            ";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.ticket", array(), "NovosgaAttendanceBundle"), "html", null, true);
        echo "
                                        </th>
                                        <td>";
        // line 35
        echo "{{ atendimento.senha.format }}";
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>
                                            ";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.service", array(), "NovosgaAttendanceBundle"), "html", null, true);
        echo "
                                        </th>
                                        <td>";
        // line 45
        echo "{{ atendimento.servico.nome }}";
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>
                                            ";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.priority", array(), "NovosgaAttendanceBundle"), "html", null, true);
        echo "
                                        </th>
                                        <td>";
        // line 55
        echo "{{ atendimento.prioridade.nome }}";
        echo "</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    ";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.customer", array(), "NovosgaAttendanceBundle"), "html", null, true);
        echo "
                                </div>
                                <table class=\"table\">
                                    <tr>
                                        <th>
                                            ";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.customer.name", array(), "NovosgaAttendanceBundle"), "html", null, true);
        echo "
                                        </th>
                                        <td>";
        // line 74
        echo "{{ atendimento.cliente ? atendimento.cliente.nome : '' }}";
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>
                                            ";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.customer.id", array(), "NovosgaAttendanceBundle"), "html", null, true);
        echo "
                                        </th>
                                        <td>";
        // line 84
        echo "{{ atendimento.cliente ? atendimento.cliente.documento : '' }}";
        echo "</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class=\"row\" v-if=\"atendimento && atendimento.status==='encerrando'\">
                        <div class=\"col-lg-8\">
                            <div class=\"row\">
                                <div class=\"col-12\">
                                    <div class=\"card\">
                                        <div class=\"card-header\">
                                            ";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.attendance", array(), "NovosgaAttendanceBundle"), "html", null, true);
        echo "
                                        </div>
                                        <div class=\"card-body\">
                                            <div class=\"row\">
                                                <div class=\"col-4 text-center\">
                                                    <strong>";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.ticket", array(), "NovosgaAttendanceBundle"), "html", null, true);
        echo "</strong>
                                                    <br>";
        // line 107
        echo "{{ atendimento.senha.format }}";
        echo "</div>
                                                <div class=\"col-4 text-center\">
                                                    <strong>";
        // line 109
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.service", array(), "NovosgaAttendanceBundle"), "html", null, true);
        echo "</strong>
                                                    <br>";
        // line 114
        echo "{{ atendimento.servico.nome }}";
        echo "</div>
                                                <div class=\"col-4 text-center\">
                                                    <strong>";
        // line 116
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.priority", array(), "NovosgaAttendanceBundle"), "html", null, true);
        echo "</strong>
                                                    <br>";
        // line 121
        echo "{{ atendimento.prioridade.nome }}";
        echo "</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class=\"row\">
                                <div class=\"col-6\">
                                    <div class=\"card\">
                                        <div class=\"card-header\">
                                            ";
        // line 132
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.services.available", array(), "NovosgaAttendanceBundle"), "html", null, true);
        echo "
                                        </div>
                                        <div class=\"card-body\">
                                            <p class=\"text-muted\" v-if=\"servicosUsuario.length===0\">
                                                ";
        // line 136
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.services.available.empty", array(), "NovosgaAttendanceBundle"), "html", null, true);
        echo "
                                            </p>

                                            <ul class=\"list-group\">
                                                <li class=\"list-group-item\"
                                                    v-for=\"su in servicosUsuario\"
                                                    v-if=\"servicosRealizados.indexOf(su.servico)===-1\">
                                                    <span v-if=\"su.subServicos.length\">";
        // line 147
        echo "{{ su.servico.nome }}";
        echo "</span>
                                                    <ul v-if=\"su.subServicos.length\">
                                                        <li v-for=\"sub in su.subServicos\" v-if=\"sub.disabled!==true\">
                                                            <a href=\"#\" title=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.add", array(), "NovosgaAttendanceBundle"), "html", null, true);
        echo "\"
                                                               v-on:click.prevent=\"addServicoRealizado(sub)\">";
        // line 155
        echo "{{ sub.nome }}";
        echo "</a>
                                                        </li>
                                                    </ul>
                                                    <a href=\"#\" title=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.add", array(), "NovosgaAttendanceBundle"), "html", null, true);
        echo "\"
                                                       v-if=\"su.subServicos.length===0\"
                                                       v-on:click.prevent=\"addServicoRealizado(su.servico)\">";
        // line 164
        echo "{{ su.servico.nome }}";
        echo "</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-6\">
                                    <div class=\"card\">
                                        <div class=\"card-header\">
                                            ";
        // line 173
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.services.executed", array(), "NovosgaAttendanceBundle"), "html", null, true);
        echo "
                                        </div>
                                        <div class=\"card-body\">
                                            <p class=\"text-muted\" v-if=\"servicosRealizados.length===0\">
                                                ";
        // line 177
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.services.executed.empty", array(), "NovosgaAttendanceBundle"), "html", null, true);
        echo "
                                            </p>

                                            <ul class=\"list-group\">
                                                <li class=\"list-group-item\"
                                                    v-for=\"servico in servicosRealizados\">
                                                    <a href=\"#\"
                                                       title=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.remove", array(), "NovosgaAttendanceBundle"), "html", null, true);
        echo "\"
                                                       v-on:click.prevent=\"removeServicoRealizado(servico)\">
                                                        ";
        // line 188
        echo "
                                                            {{ servico.nome }}
                                                        ";
        echo "
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-4\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    ";
        // line 200
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.resolution", array(), "NovosgaAttendanceBundle"), "html", null, true);
        echo "
                                </div>
                                <div class=\"card-body\">
                                    <div class=\"col-12\">
                                        <div class=\"form-group\">
                                            <label for=\"resolucao\">";
        // line 205
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.resolution", array(), "NovosgaAttendanceBundle"), "html", null, true);
        echo "</label>
                                            <select id=\"resolucao\" class=\"form-control\" v-model=\"atendimento.resolucao\">
                                                <option value=\"resolvido\">";
        // line 207
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.resolution_solved", array(), "NovosgaAttendanceBundle"), "html", null, true);
        echo "</option>
                                                <option value=\"pendente\">";
        // line 208
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.resolution_pending", array(), "NovosgaAttendanceBundle"), "html", null, true);
        echo "</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class=\"col-12\">
                                        <div class=\"form-group\">
                                            <label for=\"observacao\">";
        // line 214
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.notes", array(), "NovosgaAttendanceBundle"), "html", null, true);
        echo "</label>
                                            <textarea id=\"observacao\" class=\"form-control\" v-model=\"atendimento.observacao\" rows=\"8\"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr>

                    <div class=\"row controls\">
                        <div class=\"col-md-4\" v-if=\"!atendimento\">
                            <button type=\"button\"
                                    class=\"btn btn-primary btn-block\"
                                    title=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.call_next", array(), "NovosgaAttendanceBundle"), "html", null, true);
        echo "\"
                                    v-bind:disabled=\"atendimentos.length===0\"
                                    v-on:click=\"chamar\">
                                <i class=\"fa fa-bullhorn\"></i>
                                <span>";
        // line 233
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.call_next", array(), "NovosgaAttendanceBundle"), "html", null, true);
        echo "</span>
                            </button>
                        </div>

                        <div class=\"col-md-4\" v-if=\"atendimento && (atendimento.status==='chamado' || atendimento.status==='iniciado')\">
                            <button type=\"button\"
                                    class=\"btn btn-secondary btn-block\"
                                    title=\"";
        // line 240
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.call_again", array(), "NovosgaAttendanceBundle"), "html", null, true);
        echo "\"
                                    v-on:click=\"chamar\">
                                <i class=\"fa fa-bullhorn\"></i>
                                <span>";
        // line 243
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.call_again", array(), "NovosgaAttendanceBundle"), "html", null, true);
        echo "</span>
                            </button>
                        </div>

                        <div class=\"col-md-4\" v-if=\"atendimento && atendimento.status==='chamado'\">
                            <button type=\"button\"
                                    class=\"btn btn-primary btn-block btn-control iniciar\"
                                    title=\"";
        // line 250
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.start", array(), "NovosgaAttendanceBundle"), "html", null, true);
        echo "\"
                                    v-on:click=\"iniciar\">
                                <i class=\"fa fa-play\"></i>
                                <span>";
        // line 253
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.start", array(), "NovosgaAttendanceBundle"), "html", null, true);
        echo "</span>
                            </button>
                        </div>

                        <div class=\"col-md-4\" v-if=\"atendimento && atendimento.status==='chamado'\">
                            <button type=\"button\"
                                    class=\"btn btn-danger btn-block\"
                                    title=\"";
        // line 260
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.not_show", array(), "NovosgaAttendanceBundle"), "html", null, true);
        echo "\"
                                    v-on:click=\"naoCompareceu\">
                                <i class=\"fa fa-user-times\"></i>
                                <span>";
        // line 263
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.not_show", array(), "NovosgaAttendanceBundle"), "html", null, true);
        echo "</span>
                            </button>
                        </div>

                        <div class=\"col-md-4\" v-if=\"atendimento && atendimento.status==='iniciado'\">
                            <button type=\"button\"
                                    class=\"btn btn-primary btn-block\"
                                    title=\"";
        // line 270
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.finish", array(), "NovosgaAttendanceBundle"), "html", null, true);
        echo "\"
                                    v-on:click=\"preparaEncerrar\">
                                <i class=\"fa fa-stop\"></i>
                                <span>";
        // line 273
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.finish", array(), "NovosgaAttendanceBundle"), "html", null, true);
        echo "</span>
                            </button>
                        </div>

                        <div class=\"col-md-4\" v-if=\"atendimento && atendimento.status==='iniciado'\">
                            <button type=\"button\"
                                    class=\"btn btn-danger btn-block\"
                                    title=\"";
        // line 280
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.error", array(), "NovosgaAttendanceBundle"), "html", null, true);
        echo "\"
                                    v-on:click=\"erroTriagem\">
                                <i class=\"fa fa-exclamation-triangle\"></i>
                                <span>";
        // line 283
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.error", array(), "NovosgaAttendanceBundle"), "html", null, true);
        echo "</span>
                            </button>
                        </div>

                        <div class=\"col-md-4\" v-if=\"atendimento && atendimento.status==='encerrando'\">
                            <button type=\"button\"
                                    class=\"btn btn-primary btn-block\"
                                    v-on:click=\"encerrar(false)\"
                                    title=\"";
        // line 291
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.finish", array(), "NovosgaAttendanceBundle"), "html", null, true);
        echo "\">
                                <i class=\"fa fa-stop\"></i>
                                <span>";
        // line 293
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.finish", array(), "NovosgaAttendanceBundle"), "html", null, true);
        echo "</span>
                            </button>
                        </div>

                        <div class=\"col-md-4\" v-if=\"atendimento && atendimento.status==='encerrando'\">
                            <button type=\"button\"
                                    class=\"btn btn-secondary btn-block\"
                                    v-on:click=\"encerrarRedirecionar\"
                                    title=\"";
        // line 301
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.redirect", array(), "NovosgaAttendanceBundle"), "html", null, true);
        echo "\">
                                <i class=\"fa fa-stop\"></i>
                                <span>";
        // line 303
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.redirect", array(), "NovosgaAttendanceBundle"), "html", null, true);
        echo "</span>
                            </button>
                        </div>

                        <div class=\"col-md-4\" v-if=\"atendimento && atendimento.status==='encerrando'\">
                            <button type=\"button\"
                                    class=\"btn btn-secondary btn-block\"
                                    v-on:click=\"encerrarVoltar\"
                                    title=\"";
        // line 311
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.redirect", array(), "NovosgaAttendanceBundle"), "html", null, true);
        echo "\">
                                <i class=\"fa fa-chevron-left\"></i>
                                <span>";
        // line 313
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.back", array(), "NovosgaAttendanceBundle"), "html", null, true);
        echo "</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div id=\"fila\" class=\"card\">
                <h5 class=\"card-header\">
                    ";
        // line 321
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.my_queue", array(), "NovosgaAttendanceBundle"), "html", null, true);
        echo "  (<span v-bind:class=\"'tipo-' + usuario.tipoAtendimento\">";
        echo "{{ tiposAtendimento[usuario.tipoAtendimento] }}";
        echo "</span>)
                </h5>
                <div class=\"card-body\">
                    <ul>
                        <li>
                            <i class=\"fa fa-users\"></i>
                        </li>
                        <li v-for=\"(atendimento, index) in atendimentos\">
                            <a href=\"#\"
                               v-bind:class=\"{ prioridade: atendimento.prioridade.peso, proximo: index===0 }\"
                               v-on:click.prevent=\"infoSenha(atendimento)\"
                               v-bind:title=\"atendimento.servico.nome + ' (' + atendimento.tempoEspera + ')'\">";
        // line 336
        echo "{{ atendimento.senha.format }}";
        echo "</a>
                        </li>
                        <li class=\"empty\" v-if=\"atendimentos.length===0\">
                            ";
        // line 339
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.my_queue.empty", array(), "NovosgaAttendanceBundle"), "html", null, true);
        echo "
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <p class=\"links\">
            <a href=\"#dialog-busca\" class=\"btn btn-secondary\" data-toggle=\"modal\">
                <i class=\"fa fa-search\"></i>&nbsp;
                ";
        // line 349
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.find_ticket", array(), "NovosgaAttendanceBundle"), "html", null, true);
        echo "
            </a>
            <button id=\"notification\" type=\"button\" class=\"btn btn-warning\" onclick=\"App.Notification.request(this)\" style=\"display: none\">
                <i class=\"fa fa-exclamation\"></i>&nbsp;
                ";
        // line 353
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.enable_notification", array(), "NovosgaAttendanceBundle"), "html", null, true);
        echo "
            </button>
        </p>

        <div id=\"dialog-local\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <form v-on:submit.prevent=\"setLocal\">
                        <div class=\"modal-header\">
                            <h5 class=\"modal-title\">";
        // line 362
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("modal.place", array(), "NovosgaAttendanceBundle"), "html", null, true);
        echo "</h5>
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                        </div>
                        <div class=\"modal-body\">
                            <div class=\"row\">
                                <div class=\"col-sm-6\">
                                    <div class=\"form-group\">
                                        <label class=\"control-label\">";
        // line 369
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.place.number", array(), "NovosgaAttendanceBundle"), "html", null, true);
        echo "</label>
                                        <input type=\"number\" maxlength=\"3\" class=\"form-control\" v-model.number=\"novoLocal.numeroLocal\" required>
                                    </div>
                                </div>
                                <div class=\"col-sm-6\">
                                    <div class=\"form-group\">
                                        <label class=\"control-label\" title=\"";
        // line 375
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.attendance.type", array(), "NovosgaAttendanceBundle"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.attendance", array(), "NovosgaAttendanceBundle"), "html", null, true);
        echo "</label>
                                        <select class=\"form-control\" v-model=\"novoLocal.tipoAtendimento\">
                                            ";
        // line 377
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tiposAtendimento"] ?? null));
        foreach ($context['_seq'] as $context["v"] => $context["l"]) {
            // line 378
            echo "                                                <option value=\"";
            echo twig_escape_filter($this->env, $context["v"], "html", null, true);
            echo "\" ";
            if ((($context["tipoAtendimento"] ?? null) == $context["v"])) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["l"], "html", null, true);
            echo "</option>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['v'], $context['l'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 380
        echo "                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"modal-footer\">
                            <button type=\"submit\" class=\"btn btn-primary\">
                                ";
        // line 387
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.save", array(), "NovosgaAttendanceBundle"), "html", null, true);
        echo "
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        ";
        // line 396
        echo "        <div id=\"dialog-redirecionar\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\" v-if=\"atendimento\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\">";
        // line 400
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("modal.redirect", array(), "NovosgaAttendanceBundle"), "html", null, true);
        echo "</h5>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                    </div>
                    <div class=\"modal-body\">
                        <div class=\"form-group\">
                            <label>";
        // line 405
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.redirect.new_service", array(), "NovosgaAttendanceBundle"), "html", null, true);
        echo "</label>
                            <select class=\"form-control\" v-model=\"servicoRedirecionar\" v-on:change=\"changeServicoRedirecionar\">
                                <option value=\"\">";
        // line 407
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.choose", array(), "NovosgaAttendanceBundle"), "html", null, true);
        echo "</option>
                                ";
        // line 408
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["servicosIndisponiveis"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["su"]) {
            // line 409
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["su"], "servico", array()), "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["su"], "servico", array()), "nome", array()), "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['su'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 411
        echo "                            </select>
                        </div>
                        <div class=\"form-group\">
                            <label>";
        // line 414
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.redirect.new_user", array(), "NovosgaAttendanceBundle"), "html", null, true);
        echo "</label>
                            <select class=\"form-control\" v-model=\"novoUsuario\">
                                <option v-bind:value=\"u.id\" v-for=\"u in usuarios\">
                                    ";
        // line 417
        echo "{{ u.nome }} {{ u.sobrenome }}";
        echo "
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-primary\"
                                v-on:click=\"redirecionar()\"
                                v-if=\"atendimento.status !== 'encerrando'\">
                            ";
        // line 426
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("modal.redirect.button.redirect", array(), "NovosgaAttendanceBundle"), "html", null, true);
        echo "
                        </button>

                        <button type=\"button\" class=\"btn btn-primary\"
                                v-on:click=\"encerrar(true)\"
                                v-if=\"atendimento.status === 'encerrando'\">
                            ";
        // line 432
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("modal.redirect.button.finish", array(), "NovosgaAttendanceBundle"), "html", null, true);
        echo "
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div id=\"dialog-erro-encerrar\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\">";
        // line 443
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("modal.error", array(), "NovosgaAttendanceBundle"), "html", null, true);
        echo "</h5>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                    </div>
                    <div class=\"modal-body\">
                        <p>
                            ";
        // line 448
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("modal.error.text", array(), "NovosgaAttendanceBundle"), "html", null, true);
        echo "
                        </p>
                    </div>
                </div>
            </div>
        </div>

        ";
        // line 456
        echo "        <div id=\"dialog-busca\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\">";
        // line 460
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("modal.search", array(), "NovosgaAttendanceBundle"), "html", null, true);
        echo "</h5>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                    </div>
                    <div class=\"modal-body\">
                        <form class=\"row\" role=\"form\" v-on:submit.prevent=\"consultar\">
                            <div class=\"col-3\">
                                <div class=\"input-group\">
                                    <input type=\"text\" maxlength=\"10\" class=\"form-search form-control\" placeholder=\"";
        // line 467
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("modal.search.placeholder", array(), "NovosgaAttendanceBundle"), "html", null, true);
        echo "\" v-model=\"search\">
                                    <div class=\"input-group-append\">
                                        <button type=\"submit\" class=\"btn btn-primary\" title=\"";
        // line 469
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("modal.search.button.submit", array(), "NovosgaAttendanceBundle"), "html", null, true);
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
        // line 481
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.ticket.number", array(), "NovosgaAttendanceBundle"), "html", null, true);
        echo "</th>
                                        <th>";
        // line 482
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.service", array(), "NovosgaAttendanceBundle"), "html", null, true);
        echo "</th>
                                        <th>";
        // line 483
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.ticket.arrival_date", array(), "NovosgaAttendanceBundle"), "html", null, true);
        echo "</th>
                                        <th>";
        // line 484
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.ticket.start_date", array(), "NovosgaAttendanceBundle"), "html", null, true);
        echo "</th>
                                        <th>";
        // line 485
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.ticket.end_date", array(), "NovosgaAttendanceBundle"), "html", null, true);
        echo "</th>
                                        <th>";
        // line 486
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.triage", array(), "NovosgaAttendanceBundle"), "html", null, true);
        echo "</th>
                                        <th>";
        // line 487
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.ticket.user", array(), "NovosgaAttendanceBundle"), "html", null, true);
        echo "</th>
                                        <th>";
        // line 488
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.status", array(), "NovosgaAttendanceBundle"), "html", null, true);
        echo "</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 525
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
        // line 535
        echo "        <div id=\"dialog-senha\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\">";
        // line 539
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.ticket", array(), "NovosgaAttendanceBundle"), "html", null, true);
        echo "</h5>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                    </div>
                    <div class=\"modal-body\" v-if=\"atendimentoInfo\">
                        <table class=\"table table-bordered\">
                            <tbody>
                                <tr>
                                    <th>
                                        ";
        // line 547
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.ticket.number", array(), "NovosgaAttendanceBundle"), "html", null, true);
        echo "
                                    </th>
                                    <td>
                                        ";
        // line 552
        echo "
                                            {{ atendimentoInfo.senha.format }}
                                        ";
        echo "
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        ";
        // line 557
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.service", array(), "NovosgaAttendanceBundle"), "html", null, true);
        echo "
                                    </th>
                                    <td>
                                        ";
        // line 562
        echo "
                                            {{ atendimentoInfo.servico.nome }}
                                        ";
        echo "
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        ";
        // line 567
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.priority", array(), "NovosgaAttendanceBundle"), "html", null, true);
        echo "
                                    </th>
                                    <td>
                                        ";
        // line 572
        echo "
                                            {{ atendimentoInfo.prioridade.nome }}
                                        ";
        echo "
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        ";
        // line 577
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.ticket.arrival_date", array(), "NovosgaAttendanceBundle"), "html", null, true);
        echo "
                                    </th>
                                    <td>
                                        ";
        // line 582
        echo "
                                            {{moment(atendimentoInfo.dataChegada, 'YYYY-MM-DD hh:mm:ss').format(dateTimeFormat)}}
                                        ";
        echo "
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        ";
        // line 587
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.ticket.wait_time", array(), "NovosgaAttendanceBundle"), "html", null, true);
        echo "
                                    </th>
                                    <td>
                                        ";
        // line 592
        echo "
                                            {{ atendimentoInfo.tempoEspera }}
                                        ";
        echo "
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    ";
        // line 604
        echo "    <audio id=\"alert\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/novosgaattendance/sounds/alert.wav"), "html", null, true);
        echo "\" style=\"display:none\"></audio>
        
    <div id=\"novosga-clock\" title=\"";
        // line 606
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("server.datetime", array(), "NovosgaAttendanceBundle"), "html", null, true);
        echo "\" class=\"clock\"></div>
";
    }

    // line 609
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 610
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 611
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/novosgaattendance/css/style.css"), "html", null, true);
        echo "\">
";
    }

    // line 614
    public function block_javascripts($context, array $blocks = array())
    {
        // line 615
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\">
        var local              = ";
        // line 617
        echo twig_escape_filter($this->env, ((($context["local"] ?? null)) ? (($context["local"] ?? null)) : ("null")), "html", null, true);
        echo ",
            usuario            = ";
        // line 618
        echo json_encode(($context["usuario"] ?? null));
        echo ",
            unidade            = ";
        // line 619
        echo json_encode(($context["unidade"] ?? null));
        echo ",
            atendimento        = ";
        // line 620
        echo json_encode(($context["atendimento"] ?? null));
        echo ",
            tipoAtendimento    = '";
        // line 621
        echo twig_escape_filter($this->env, ((($context["tipoAtendimento"] ?? null)) ? (($context["tipoAtendimento"] ?? null)) : ("null")), "html", null, true);
        echo "',
            tiposAtendimento   = ";
        // line 622
        echo json_encode(($context["tiposAtendimento"] ?? null));
        echo ",
            servicosUsuario    = ";
        // line 623
        echo json_encode(($context["servicos"] ?? null));
        echo ",
            labelSim           = '";
        // line 624
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.yes", array(), "NovosgaAttendanceBundle"), "html", null, true);
        echo "',
            labelNao           = '";
        // line 625
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.no", array(), "NovosgaAttendanceBundle"), "html", null, true);
        echo "',
            dateTimeFormat     = '";
        // line 626
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("MM/DD/YYYY HH:mm:ss", array(), "NovosgaAttendanceBundle"), "html", null, true);
        echo "',
            alertTitle         = '";
        // line 627
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("alert.title", array(), "NovosgaAttendanceBundle"), "html", null, true);
        echo "',
            alertRedirecionar  = '";
        // line 628
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("alert.ticket_error.text", array(), "NovosgaAttendanceBundle"), "html", null, true);
        echo "',
            alertNaoCompareceu = '";
        // line 629
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("alert.no_show.text", array(), "NovosgaAttendanceBundle"), "html", null, true);
        echo "',
            alertEncerrar      = '";
        // line 630
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("alert.finish.text", array(), "NovosgaAttendanceBundle"), "html", null, true);
        echo "',
            wsSecret           = '";
        // line 631
        echo twig_escape_filter($this->env, ($context["wsSecret"] ?? null), "html", null, true);
        echo "';
    
        App.Clock.init(\"novosga-clock\", ";
        // line 633
        echo twig_escape_filter($this->env, ($context["time"] ?? null), "html", null, true);
        echo ");
    </script>
    <script type=\"text/javascript\" src=\"";
        // line 635
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/novosgaattendance/js/sweetalert.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 636
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/novosgaattendance/js/script.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "NovosgaAttendanceBundle:default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1020 => 636,  1016 => 635,  1011 => 633,  1006 => 631,  1002 => 630,  998 => 629,  994 => 628,  990 => 627,  986 => 626,  982 => 625,  978 => 624,  974 => 623,  970 => 622,  966 => 621,  962 => 620,  958 => 619,  954 => 618,  950 => 617,  944 => 615,  941 => 614,  935 => 611,  930 => 610,  927 => 609,  921 => 606,  915 => 604,  899 => 592,  893 => 587,  883 => 582,  877 => 577,  867 => 572,  861 => 567,  851 => 562,  845 => 557,  835 => 552,  829 => 547,  818 => 539,  812 => 535,  767 => 525,  760 => 488,  756 => 487,  752 => 486,  748 => 485,  744 => 484,  740 => 483,  736 => 482,  732 => 481,  717 => 469,  712 => 467,  702 => 460,  696 => 456,  686 => 448,  678 => 443,  664 => 432,  655 => 426,  643 => 417,  637 => 414,  632 => 411,  621 => 409,  617 => 408,  613 => 407,  608 => 405,  600 => 400,  594 => 396,  583 => 387,  574 => 380,  559 => 378,  555 => 377,  548 => 375,  539 => 369,  529 => 362,  517 => 353,  510 => 349,  497 => 339,  491 => 336,  475 => 321,  464 => 313,  459 => 311,  448 => 303,  443 => 301,  432 => 293,  427 => 291,  416 => 283,  410 => 280,  400 => 273,  394 => 270,  384 => 263,  378 => 260,  368 => 253,  362 => 250,  352 => 243,  346 => 240,  336 => 233,  329 => 229,  311 => 214,  302 => 208,  298 => 207,  293 => 205,  285 => 200,  268 => 188,  263 => 184,  253 => 177,  246 => 173,  234 => 164,  229 => 158,  223 => 155,  219 => 150,  213 => 147,  203 => 136,  196 => 132,  182 => 121,  178 => 116,  173 => 114,  169 => 109,  164 => 107,  160 => 102,  152 => 97,  136 => 84,  131 => 78,  124 => 74,  119 => 68,  111 => 63,  100 => 55,  95 => 49,  88 => 45,  83 => 39,  76 => 35,  71 => 29,  63 => 24,  51 => 15,  45 => 12,  37 => 6,  34 => 5,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "NovosgaAttendanceBundle:default:index.html.twig", "/var/www/html/sgf/novosga/modules/novosga/attendance-bundle/Resources/views/default/index.html.twig");
    }
}
