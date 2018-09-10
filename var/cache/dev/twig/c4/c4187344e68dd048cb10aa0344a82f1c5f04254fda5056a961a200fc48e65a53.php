<?php

/* NovosgaAttendanceBundle:default:index.html.twig */
class __TwigTemplate_d4c18ede45446b7ceff7a3de943886130ee82dd0ef532b30002976af303ae3f1 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NovosgaAttendanceBundle:default:index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NovosgaAttendanceBundle:default:index.html.twig"));

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
        echo "    <div id=\"attendance\" v-cloak>
        <div id=\"atendimento\" v-if=\"usuario.numeroLocal\">
            <div class=\"row\">
                <div class=\"col-sm-3 col-md-2\">
                    <div id=\"local\">
                        <span class=\"numero\" v-text=\"usuario.numeroLocal\">
                            ";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["local"]) || array_key_exists("local", $context) ? $context["local"] : (function () { throw new Twig_Error_Runtime('Variable "local" does not exist.', 12, $this->source); })()), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["tiposAtendimento"]) || array_key_exists("tiposAtendimento", $context) ? $context["tiposAtendimento"] : (function () { throw new Twig_Error_Runtime('Variable "tiposAtendimento" does not exist.', 377, $this->source); })()));
        foreach ($context['_seq'] as $context["v"] => $context["l"]) {
            // line 378
            echo "                                                <option value=\"";
            echo twig_escape_filter($this->env, $context["v"], "html", null, true);
            echo "\" ";
            if (((isset($context["tipoAtendimento"]) || array_key_exists("tipoAtendimento", $context) ? $context["tipoAtendimento"] : (function () { throw new Twig_Error_Runtime('Variable "tipoAtendimento" does not exist.', 378, $this->source); })()) == $context["v"])) {
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
        $context['_seq'] = twig_ensure_traversable((isset($context["servicosIndisponiveis"]) || array_key_exists("servicosIndisponiveis", $context) ? $context["servicosIndisponiveis"] : (function () { throw new Twig_Error_Runtime('Variable "servicosIndisponiveis" does not exist.', 408, $this->source); })()));
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 609
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 610
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 611
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/novosgaattendance/css/style.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 614
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 615
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\">
        var local              = ";
        // line 617
        echo twig_escape_filter($this->env, (((isset($context["local"]) || array_key_exists("local", $context) ? $context["local"] : (function () { throw new Twig_Error_Runtime('Variable "local" does not exist.', 617, $this->source); })())) ? ((isset($context["local"]) || array_key_exists("local", $context) ? $context["local"] : (function () { throw new Twig_Error_Runtime('Variable "local" does not exist.', 617, $this->source); })())) : ("null")), "html", null, true);
        echo ",
            usuario            = ";
        // line 618
        echo json_encode((isset($context["usuario"]) || array_key_exists("usuario", $context) ? $context["usuario"] : (function () { throw new Twig_Error_Runtime('Variable "usuario" does not exist.', 618, $this->source); })()));
        echo ",
            unidade            = ";
        // line 619
        echo json_encode((isset($context["unidade"]) || array_key_exists("unidade", $context) ? $context["unidade"] : (function () { throw new Twig_Error_Runtime('Variable "unidade" does not exist.', 619, $this->source); })()));
        echo ",
            atendimento        = ";
        // line 620
        echo json_encode((isset($context["atendimento"]) || array_key_exists("atendimento", $context) ? $context["atendimento"] : (function () { throw new Twig_Error_Runtime('Variable "atendimento" does not exist.', 620, $this->source); })()));
        echo ",
            tipoAtendimento    = '";
        // line 621
        echo twig_escape_filter($this->env, (((isset($context["tipoAtendimento"]) || array_key_exists("tipoAtendimento", $context) ? $context["tipoAtendimento"] : (function () { throw new Twig_Error_Runtime('Variable "tipoAtendimento" does not exist.', 621, $this->source); })())) ? ((isset($context["tipoAtendimento"]) || array_key_exists("tipoAtendimento", $context) ? $context["tipoAtendimento"] : (function () { throw new Twig_Error_Runtime('Variable "tipoAtendimento" does not exist.', 621, $this->source); })())) : ("null")), "html", null, true);
        echo "',
            tiposAtendimento   = ";
        // line 622
        echo json_encode((isset($context["tiposAtendimento"]) || array_key_exists("tiposAtendimento", $context) ? $context["tiposAtendimento"] : (function () { throw new Twig_Error_Runtime('Variable "tiposAtendimento" does not exist.', 622, $this->source); })()));
        echo ",
            servicosUsuario    = ";
        // line 623
        echo json_encode((isset($context["servicos"]) || array_key_exists("servicos", $context) ? $context["servicos"] : (function () { throw new Twig_Error_Runtime('Variable "servicos" does not exist.', 623, $this->source); })()));
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
        echo twig_escape_filter($this->env, (isset($context["wsSecret"]) || array_key_exists("wsSecret", $context) ? $context["wsSecret"] : (function () { throw new Twig_Error_Runtime('Variable "wsSecret" does not exist.', 631, $this->source); })()), "html", null, true);
        echo "';
    
        App.Clock.init(\"novosga-clock\", ";
        // line 633
        echo twig_escape_filter($this->env, (isset($context["time"]) || array_key_exists("time", $context) ? $context["time"] : (function () { throw new Twig_Error_Runtime('Variable "time" does not exist.', 633, $this->source); })()), "html", null, true);
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  1062 => 636,  1058 => 635,  1053 => 633,  1048 => 631,  1044 => 630,  1040 => 629,  1036 => 628,  1032 => 627,  1028 => 626,  1024 => 625,  1020 => 624,  1016 => 623,  1012 => 622,  1008 => 621,  1004 => 620,  1000 => 619,  996 => 618,  992 => 617,  986 => 615,  977 => 614,  965 => 611,  960 => 610,  951 => 609,  939 => 606,  933 => 604,  917 => 592,  911 => 587,  901 => 582,  895 => 577,  885 => 572,  879 => 567,  869 => 562,  863 => 557,  853 => 552,  847 => 547,  836 => 539,  830 => 535,  785 => 525,  778 => 488,  774 => 487,  770 => 486,  766 => 485,  762 => 484,  758 => 483,  754 => 482,  750 => 481,  735 => 469,  730 => 467,  720 => 460,  714 => 456,  704 => 448,  696 => 443,  682 => 432,  673 => 426,  661 => 417,  655 => 414,  650 => 411,  639 => 409,  635 => 408,  631 => 407,  626 => 405,  618 => 400,  612 => 396,  601 => 387,  592 => 380,  577 => 378,  573 => 377,  566 => 375,  557 => 369,  547 => 362,  535 => 353,  528 => 349,  515 => 339,  509 => 336,  493 => 321,  482 => 313,  477 => 311,  466 => 303,  461 => 301,  450 => 293,  445 => 291,  434 => 283,  428 => 280,  418 => 273,  412 => 270,  402 => 263,  396 => 260,  386 => 253,  380 => 250,  370 => 243,  364 => 240,  354 => 233,  347 => 229,  329 => 214,  320 => 208,  316 => 207,  311 => 205,  303 => 200,  286 => 188,  281 => 184,  271 => 177,  264 => 173,  252 => 164,  247 => 158,  241 => 155,  237 => 150,  231 => 147,  221 => 136,  214 => 132,  200 => 121,  196 => 116,  191 => 114,  187 => 109,  182 => 107,  178 => 102,  170 => 97,  154 => 84,  149 => 78,  142 => 74,  137 => 68,  129 => 63,  118 => 55,  113 => 49,  106 => 45,  101 => 39,  94 => 35,  89 => 29,  81 => 24,  69 => 15,  63 => 12,  55 => 6,  46 => 5,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@NovosgaAttendance/base.html.twig\" %}

{% trans_default_domain 'NovosgaAttendanceBundle' %}

{% block body %}
    <div id=\"attendance\" v-cloak>
        <div id=\"atendimento\" v-if=\"usuario.numeroLocal\">
            <div class=\"row\">
                <div class=\"col-sm-3 col-md-2\">
                    <div id=\"local\">
                        <span class=\"numero\" v-text=\"usuario.numeroLocal\">
                            {{ local }}
                        </span>
                        <a href=\"#dialog-local\" data-toggle=\"modal\">
                            {{ 'button.change'|trans }}
                        </a>
                    </div>
                </div>
                <div class=\"attendance-panel col-sm-9 col-md-10\">
                    <div class=\"row\" v-if=\"atendimento && atendimento.status!=='encerrando'\">
                        <div class=\"col-md-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    {{ 'label.attendance'|trans }}
                                </div>
                                <table class=\"table\">
                                    <tr>
                                        <th>
                                            {{ 'label.ticket'|trans }}
                                        </th>
                                        <td>
                                            {%- verbatim -%}
                                                {{ atendimento.senha.format }}
                                            {%- endverbatim -%}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            {{ 'label.service'|trans }}
                                        </th>
                                        <td>
                                            {%- verbatim -%}
                                                {{ atendimento.servico.nome }}
                                            {%- endverbatim -%}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            {{ 'label.priority'|trans }}
                                        </th>
                                        <td>
                                            {%- verbatim -%}
                                                {{ atendimento.prioridade.nome }}
                                            {%- endverbatim -%}
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    {{ 'label.customer'|trans }}
                                </div>
                                <table class=\"table\">
                                    <tr>
                                        <th>
                                            {{ 'label.customer.name'|trans }}
                                        </th>
                                        <td>
                                            {%- verbatim -%}
                                                {{ atendimento.cliente ? atendimento.cliente.nome : '' }}
                                            {%- endverbatim -%}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            {{ 'label.customer.id'|trans }}
                                        </th>
                                        <td>
                                            {%- verbatim -%}
                                                {{ atendimento.cliente ? atendimento.cliente.documento : '' }}
                                            {%- endverbatim -%}
                                        </td>
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
                                            {{ 'label.attendance'|trans }}
                                        </div>
                                        <div class=\"card-body\">
                                            <div class=\"row\">
                                                <div class=\"col-4 text-center\">
                                                    <strong>{{ 'label.ticket'|trans }}</strong>
                                                    <br>
                                                    {%- verbatim -%}
                                                        {{ atendimento.senha.format }}
                                                    {%- endverbatim -%}
                                                </div>
                                                <div class=\"col-4 text-center\">
                                                    <strong>{{ 'label.service'|trans }}</strong>
                                                    <br>
                                                    {%- verbatim -%}
                                                        {{ atendimento.servico.nome }}
                                                    {%- endverbatim -%}
                                                </div>
                                                <div class=\"col-4 text-center\">
                                                    <strong>{{ 'label.priority'|trans }}</strong>
                                                    <br>
                                                    {%- verbatim -%}
                                                        {{ atendimento.prioridade.nome }}
                                                    {%- endverbatim -%}
                                                </div>
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
                                            {{ 'label.services.available'|trans }}
                                        </div>
                                        <div class=\"card-body\">
                                            <p class=\"text-muted\" v-if=\"servicosUsuario.length===0\">
                                                {{ 'label.services.available.empty'|trans }}
                                            </p>

                                            <ul class=\"list-group\">
                                                <li class=\"list-group-item\"
                                                    v-for=\"su in servicosUsuario\"
                                                    v-if=\"servicosRealizados.indexOf(su.servico)===-1\">
                                                    <span v-if=\"su.subServicos.length\">
                                                        {%- verbatim -%}
                                                            {{ su.servico.nome }}
                                                        {%- endverbatim -%}
                                                    </span>
                                                    <ul v-if=\"su.subServicos.length\">
                                                        <li v-for=\"sub in su.subServicos\" v-if=\"sub.disabled!==true\">
                                                            <a href=\"#\" title=\"{{ 'button.add'|trans }}\"
                                                               v-on:click.prevent=\"addServicoRealizado(sub)\">
                                                                {%- verbatim -%}
                                                                    {{ sub.nome }}
                                                                {%- endverbatim -%}
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <a href=\"#\" title=\"{{ 'button.add'|trans }}\"
                                                       v-if=\"su.subServicos.length===0\"
                                                       v-on:click.prevent=\"addServicoRealizado(su.servico)\">
                                                        {%- verbatim -%}
                                                            {{ su.servico.nome }}
                                                        {%- endverbatim -%}
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-6\">
                                    <div class=\"card\">
                                        <div class=\"card-header\">
                                            {{ 'label.services.executed'|trans }}
                                        </div>
                                        <div class=\"card-body\">
                                            <p class=\"text-muted\" v-if=\"servicosRealizados.length===0\">
                                                {{ 'label.services.executed.empty'|trans }}
                                            </p>

                                            <ul class=\"list-group\">
                                                <li class=\"list-group-item\"
                                                    v-for=\"servico in servicosRealizados\">
                                                    <a href=\"#\"
                                                       title=\"{{ 'label.remove'|trans }}\"
                                                       v-on:click.prevent=\"removeServicoRealizado(servico)\">
                                                        {% verbatim %}
                                                            {{ servico.nome }}
                                                        {% endverbatim %}
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
                                    {{ 'label.resolution'|trans }}
                                </div>
                                <div class=\"card-body\">
                                    <div class=\"col-12\">
                                        <div class=\"form-group\">
                                            <label for=\"resolucao\">{{ 'label.resolution'|trans }}</label>
                                            <select id=\"resolucao\" class=\"form-control\" v-model=\"atendimento.resolucao\">
                                                <option value=\"resolvido\">{{ 'label.resolution_solved'|trans }}</option>
                                                <option value=\"pendente\">{{ 'label.resolution_pending'|trans }}</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class=\"col-12\">
                                        <div class=\"form-group\">
                                            <label for=\"observacao\">{{ 'label.notes'|trans }}</label>
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
                                    title=\"{{ 'button.call_next'|trans }}\"
                                    v-bind:disabled=\"atendimentos.length===0\"
                                    v-on:click=\"chamar\">
                                <i class=\"fa fa-bullhorn\"></i>
                                <span>{{ 'button.call_next'|trans }}</span>
                            </button>
                        </div>

                        <div class=\"col-md-4\" v-if=\"atendimento && (atendimento.status==='chamado' || atendimento.status==='iniciado')\">
                            <button type=\"button\"
                                    class=\"btn btn-secondary btn-block\"
                                    title=\"{{ 'button.call_again'|trans }}\"
                                    v-on:click=\"chamar\">
                                <i class=\"fa fa-bullhorn\"></i>
                                <span>{{ 'button.call_again'|trans }}</span>
                            </button>
                        </div>

                        <div class=\"col-md-4\" v-if=\"atendimento && atendimento.status==='chamado'\">
                            <button type=\"button\"
                                    class=\"btn btn-primary btn-block btn-control iniciar\"
                                    title=\"{{ 'button.start'|trans }}\"
                                    v-on:click=\"iniciar\">
                                <i class=\"fa fa-play\"></i>
                                <span>{{ 'button.start'|trans }}</span>
                            </button>
                        </div>

                        <div class=\"col-md-4\" v-if=\"atendimento && atendimento.status==='chamado'\">
                            <button type=\"button\"
                                    class=\"btn btn-danger btn-block\"
                                    title=\"{{ 'button.not_show'|trans }}\"
                                    v-on:click=\"naoCompareceu\">
                                <i class=\"fa fa-user-times\"></i>
                                <span>{{ 'button.not_show'|trans }}</span>
                            </button>
                        </div>

                        <div class=\"col-md-4\" v-if=\"atendimento && atendimento.status==='iniciado'\">
                            <button type=\"button\"
                                    class=\"btn btn-primary btn-block\"
                                    title=\"{{ 'button.finish'|trans }}\"
                                    v-on:click=\"preparaEncerrar\">
                                <i class=\"fa fa-stop\"></i>
                                <span>{{ 'button.finish'|trans }}</span>
                            </button>
                        </div>

                        <div class=\"col-md-4\" v-if=\"atendimento && atendimento.status==='iniciado'\">
                            <button type=\"button\"
                                    class=\"btn btn-danger btn-block\"
                                    title=\"{{ 'button.error'|trans }}\"
                                    v-on:click=\"erroTriagem\">
                                <i class=\"fa fa-exclamation-triangle\"></i>
                                <span>{{ 'button.error'|trans }}</span>
                            </button>
                        </div>

                        <div class=\"col-md-4\" v-if=\"atendimento && atendimento.status==='encerrando'\">
                            <button type=\"button\"
                                    class=\"btn btn-primary btn-block\"
                                    v-on:click=\"encerrar(false)\"
                                    title=\"{{ 'button.finish'|trans }}\">
                                <i class=\"fa fa-stop\"></i>
                                <span>{{ 'button.finish'|trans }}</span>
                            </button>
                        </div>

                        <div class=\"col-md-4\" v-if=\"atendimento && atendimento.status==='encerrando'\">
                            <button type=\"button\"
                                    class=\"btn btn-secondary btn-block\"
                                    v-on:click=\"encerrarRedirecionar\"
                                    title=\"{{ 'button.redirect'|trans }}\">
                                <i class=\"fa fa-stop\"></i>
                                <span>{{ 'button.redirect'|trans }}</span>
                            </button>
                        </div>

                        <div class=\"col-md-4\" v-if=\"atendimento && atendimento.status==='encerrando'\">
                            <button type=\"button\"
                                    class=\"btn btn-secondary btn-block\"
                                    v-on:click=\"encerrarVoltar\"
                                    title=\"{{ 'button.redirect'|trans }}\">
                                <i class=\"fa fa-chevron-left\"></i>
                                <span>{{ 'button.back'|trans }}</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div id=\"fila\" class=\"card\">
                <h5 class=\"card-header\">
                    {{ 'label.my_queue'|trans }}  (<span v-bind:class=\"'tipo-' + usuario.tipoAtendimento\">{% verbatim %}{{ tiposAtendimento[usuario.tipoAtendimento] }}{% endverbatim %}</span>)
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
                               v-bind:title=\"atendimento.servico.nome + ' (' + atendimento.tempoEspera + ')'\">
                                {%- verbatim -%}
                                    {{ atendimento.senha.format }}
                                {%- endverbatim -%}
                            </a>
                        </li>
                        <li class=\"empty\" v-if=\"atendimentos.length===0\">
                            {{ 'label.my_queue.empty'|trans }}
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <p class=\"links\">
            <a href=\"#dialog-busca\" class=\"btn btn-secondary\" data-toggle=\"modal\">
                <i class=\"fa fa-search\"></i>&nbsp;
                {{ 'button.find_ticket'|trans }}
            </a>
            <button id=\"notification\" type=\"button\" class=\"btn btn-warning\" onclick=\"App.Notification.request(this)\" style=\"display: none\">
                <i class=\"fa fa-exclamation\"></i>&nbsp;
                {{ 'button.enable_notification'|trans }}
            </button>
        </p>

        <div id=\"dialog-local\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <form v-on:submit.prevent=\"setLocal\">
                        <div class=\"modal-header\">
                            <h5 class=\"modal-title\">{{ 'modal.place'|trans }}</h5>
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                        </div>
                        <div class=\"modal-body\">
                            <div class=\"row\">
                                <div class=\"col-sm-6\">
                                    <div class=\"form-group\">
                                        <label class=\"control-label\">{{ 'label.place.number'|trans }}</label>
                                        <input type=\"number\" maxlength=\"3\" class=\"form-control\" v-model.number=\"novoLocal.numeroLocal\" required>
                                    </div>
                                </div>
                                <div class=\"col-sm-6\">
                                    <div class=\"form-group\">
                                        <label class=\"control-label\" title=\"{{ 'label.attendance.type'|trans }}\">{{ 'label.attendance'|trans }}</label>
                                        <select class=\"form-control\" v-model=\"novoLocal.tipoAtendimento\">
                                            {% for v,l in tiposAtendimento %}
                                                <option value=\"{{ v }}\" {% if tipoAtendimento == v %}selected=\"selected\"{% endif %}>{{ l }}</option>
                                            {% endfor %}
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"modal-footer\">
                            <button type=\"submit\" class=\"btn btn-primary\">
                                {{ 'button.save'|trans }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        {# dialog redirecionar #}
        <div id=\"dialog-redirecionar\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\" v-if=\"atendimento\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\">{{ 'modal.redirect'|trans }}</h5>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                    </div>
                    <div class=\"modal-body\">
                        <div class=\"form-group\">
                            <label>{{ 'label.redirect.new_service'|trans }}</label>
                            <select class=\"form-control\" v-model=\"servicoRedirecionar\" v-on:change=\"changeServicoRedirecionar\">
                                <option value=\"\">{{ 'label.choose'|trans }}</option>
                                {% for su in servicosIndisponiveis %}
                                    <option value=\"{{ su.servico.id }}\">{{ su.servico.nome }}</option>
                                {% endfor %}
                            </select>
                        </div>
                        <div class=\"form-group\">
                            <label>{{ 'label.redirect.new_user'|trans }}</label>
                            <select class=\"form-control\" v-model=\"novoUsuario\">
                                <option v-bind:value=\"u.id\" v-for=\"u in usuarios\">
                                    {% verbatim %}{{ u.nome }} {{ u.sobrenome }}{% endverbatim %}
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-primary\"
                                v-on:click=\"redirecionar()\"
                                v-if=\"atendimento.status !== 'encerrando'\">
                            {{ 'modal.redirect.button.redirect'|trans }}
                        </button>

                        <button type=\"button\" class=\"btn btn-primary\"
                                v-on:click=\"encerrar(true)\"
                                v-if=\"atendimento.status === 'encerrando'\">
                            {{ 'modal.redirect.button.finish'|trans }}
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div id=\"dialog-erro-encerrar\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\">{{ 'modal.error'|trans }}</h5>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                    </div>
                    <div class=\"modal-body\">
                        <p>
                            {{ 'modal.error.text'|trans }}
                        </p>
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

        {# dialog info senha #}
        <div id=\"dialog-senha\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\">{{ 'label.ticket'|trans }}</h5>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                    </div>
                    <div class=\"modal-body\" v-if=\"atendimentoInfo\">
                        <table class=\"table table-bordered\">
                            <tbody>
                                <tr>
                                    <th>
                                        {{ 'label.ticket.number'|trans }}
                                    </th>
                                    <td>
                                        {% verbatim %}
                                            {{ atendimentoInfo.senha.format }}
                                        {% endverbatim %}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ 'label.service'|trans }}
                                    </th>
                                    <td>
                                        {% verbatim %}
                                            {{ atendimentoInfo.servico.nome }}
                                        {% endverbatim %}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ 'label.priority'|trans }}
                                    </th>
                                    <td>
                                        {% verbatim %}
                                            {{ atendimentoInfo.prioridade.nome }}
                                        {% endverbatim %}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ 'label.ticket.arrival_date'|trans }}
                                    </th>
                                    <td>
                                        {% verbatim %}
                                            {{moment(atendimentoInfo.dataChegada, 'YYYY-MM-DD hh:mm:ss').format(dateTimeFormat)}}
                                        {% endverbatim %}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ 'label.ticket.wait_time'|trans }}
                                    </th>
                                    <td>
                                        {% verbatim %}
                                            {{ atendimentoInfo.tempoEspera }}
                                        {% endverbatim %}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    {# som executado quando a fila deixa de estar fazia #}
    <audio id=\"alert\" src=\"{{ asset('bundles/novosgaattendance/sounds/alert.wav') }}\" style=\"display:none\"></audio>
        
    <div id=\"novosga-clock\" title=\"{{ 'server.datetime'|trans }}\" class=\"clock\"></div>
{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link type=\"text/css\" rel=\"stylesheet\" href=\"{{ asset('bundles/novosgaattendance/css/style.css') }}\">
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script type=\"text/javascript\">
        var local              = {{ local ? local : 'null' }},
            usuario            = {{ usuario|json_encode()|raw }},
            unidade            = {{ unidade|json_encode()|raw }},
            atendimento        = {{ atendimento|json_encode()|raw }},
            tipoAtendimento    = '{{ tipoAtendimento ? tipoAtendimento : 'null' }}',
            tiposAtendimento   = {{ tiposAtendimento|json_encode()|raw }},
            servicosUsuario    = {{ servicos|json_encode()|raw }},
            labelSim           = '{{ 'label.yes'|trans }}',
            labelNao           = '{{ 'label.no'|trans }}',
            dateTimeFormat     = '{{ 'MM/DD/YYYY HH:mm:ss'|trans }}',
            alertTitle         = '{{ 'alert.title'|trans }}',
            alertRedirecionar  = '{{ 'alert.ticket_error.text'|trans }}',
            alertNaoCompareceu = '{{ 'alert.no_show.text'|trans }}',
            alertEncerrar      = '{{ 'alert.finish.text'|trans }}',
            wsSecret           = '{{ wsSecret }}';
    
        App.Clock.init(\"novosga-clock\", {{ time }});
    </script>
    <script type=\"text/javascript\" src=\"{{ asset('bundles/novosgaattendance/js/sweetalert.min.js') }}\"></script>
    <script src=\"{{ asset('bundles/novosgaattendance/js/script.js') }}\"></script>
{% endblock %}
", "NovosgaAttendanceBundle:default:index.html.twig", "/var/www/html/sgf/novosga/modules/novosga/attendance-bundle/Resources/views/default/index.html.twig");
    }
}
