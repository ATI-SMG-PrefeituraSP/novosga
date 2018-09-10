<?php

/* NovosgaMonitorBundle:default:index.html.twig */
class __TwigTemplate_538eb7ebf86e9f57299f50e308420ef1d19babb253fe8eb23a75656febfebe95 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NovosgaMonitorBundle:default:index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NovosgaMonitorBundle:default:index.html.twig"));

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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["transferirForm"]) || array_key_exists("transferirForm", $context) ? $context["transferirForm"] : (function () { throw new Twig_Error_Runtime('Variable "transferirForm" does not exist.', 306, $this->source); })()), 'form_start', array("attr" => array("v-on:submit.prevent" => "transferir(atendimento, novoServico, novaPrioridade)")));
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["transferirForm"]) || array_key_exists("transferirForm", $context) ? $context["transferirForm"] : (function () { throw new Twig_Error_Runtime('Variable "transferirForm" does not exist.', 321, $this->source); })()), "servico", array()), 'row', array("attr" => array("v-model" => "novoServico")));
        echo "
                            
                            ";
        // line 323
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["transferirForm"]) || array_key_exists("transferirForm", $context) ? $context["transferirForm"] : (function () { throw new Twig_Error_Runtime('Variable "transferirForm" does not exist.', 323, $this->source); })()), "prioridade", array()), 'row', array("attr" => array("v-model" => "novaPrioridade")));
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["transferirForm"]) || array_key_exists("transferirForm", $context) ? $context["transferirForm"] : (function () { throw new Twig_Error_Runtime('Variable "transferirForm" does not exist.', 332, $this->source); })()), 'form_end');
        echo "
            </div>
        </div>

        <div id=\"novosga-clock\" title=\"";
        // line 336
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("server.datetime", array(), "NovosgaMonitorBundle"), "html", null, true);
        echo "\" class=\"clock\"></div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 340
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 341
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 342
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/novosgamonitor/css/style.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 345
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 346
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\">
        var ids             = [";
        // line 348
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["servicos"]) || array_key_exists("servicos", $context) ? $context["servicos"] : (function () { throw new Twig_Error_Runtime('Variable "servicos" does not exist.', 348, $this->source); })()));
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
        echo json_encode((isset($context["usuario"]) || array_key_exists("usuario", $context) ? $context["usuario"] : (function () { throw new Twig_Error_Runtime('Variable "usuario" does not exist.', 349, $this->source); })()));
        echo ",
            unidade         = ";
        // line 350
        echo json_encode((isset($context["unidade"]) || array_key_exists("unidade", $context) ? $context["unidade"] : (function () { throw new Twig_Error_Runtime('Variable "unidade" does not exist.', 350, $this->source); })()));
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
        echo twig_escape_filter($this->env, (isset($context["wsSecret"]) || array_key_exists("wsSecret", $context) ? $context["wsSecret"] : (function () { throw new Twig_Error_Runtime('Variable "wsSecret" does not exist.', 358, $this->source); })()), "html", null, true);
        echo "';
        
        App.Clock.init(\"novosga-clock\", ";
        // line 360
        echo twig_escape_filter($this->env, (isset($context["milis"]) || array_key_exists("milis", $context) ? $context["milis"] : (function () { throw new Twig_Error_Runtime('Variable "milis" does not exist.', 360, $this->source); })()), "html", null, true);
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  677 => 363,  673 => 362,  668 => 360,  663 => 358,  659 => 357,  655 => 356,  651 => 355,  647 => 354,  643 => 353,  639 => 352,  635 => 351,  631 => 350,  627 => 349,  615 => 348,  609 => 346,  600 => 345,  588 => 342,  583 => 341,  574 => 340,  561 => 336,  554 => 332,  547 => 328,  539 => 323,  534 => 321,  522 => 314,  517 => 310,  510 => 306,  506 => 304,  496 => 296,  489 => 292,  482 => 288,  469 => 280,  463 => 275,  453 => 270,  447 => 265,  440 => 261,  427 => 253,  421 => 248,  411 => 243,  405 => 238,  395 => 233,  389 => 228,  379 => 223,  373 => 218,  363 => 213,  357 => 208,  347 => 203,  341 => 198,  331 => 193,  325 => 188,  315 => 183,  309 => 178,  302 => 174,  293 => 168,  287 => 164,  240 => 154,  233 => 115,  229 => 114,  225 => 113,  221 => 112,  217 => 111,  213 => 110,  209 => 109,  205 => 108,  190 => 96,  185 => 94,  175 => 87,  169 => 83,  155 => 73,  142 => 63,  138 => 60,  130 => 57,  126 => 54,  118 => 51,  114 => 48,  106 => 45,  82 => 22,  77 => 20,  67 => 13,  62 => 11,  55 => 6,  46 => 5,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@NovosgaMonitor/base.html.twig\" %}

{% trans_default_domain 'NovosgaMonitorBundle' %}

{% block body %}
    <div id=\"monitor\">
        <div class=\"row\">
            <div class=\"col-8\">
                <h1>
                    <i class=\"fa fa-desktop\" aria-hidden=\"true\"></i>
                    {{ 'title'|trans }}
                    <small>
                        {{ 'subtitle'|trans }}
                    </small>
                </h1>
            </div>
            <div class=\"col-4\">
                <form class=\"pull-right\" role=\"search\"  v-on:submit.prevent=\"consulta\">
                    <div class=\"input-group\">
                        <input type=\"text\" class=\"form-search form-control\" placeholder=\"{{ 'placeholder.search'|trans }}\" v-model=\"search\">
                        <div class=\"input-group-append\">
                            <button type=\"submit\" class=\"btn btn-primary\" title=\"{{ 'button.find'|trans }}\">
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
                        {% verbatim %}
                            {{ item.servicoUnidade.sigla }} - {{ item.servicoUnidade.servico.nome }}
                        {% endverbatim %}
                        <div class=\"pull-right\">
                            <span class=\"badge badge-pill badge-primary\">
                                {{ 'label.no_priority'|trans }}
                                {% verbatim %}
                                    {{ totalPorSituacao(item.fila, false) }}
                                {% endverbatim %}
                            </span>
                            <span class=\"badge badge-pill badge-danger\">
                                {{ 'label.priority'|trans }}
                                {% verbatim %}
                                    {{ totalPorSituacao(item.fila, true) }}
                                {% endverbatim %}
                            </span>
                            <span class=\"badge badge-pill badge-secondary\">
                                {{ 'label.total'|trans }}
                                {% verbatim %}
                                    {{ item.fila.length }}
                                {% endverbatim %}
                            </span>
                        </div>
                    </div>
                    <div class=\"card-body\">
                        <ul class=\"fila list-inline\">
                            <li v-for=\"atendimento in item.fila\" v-bind:class=\"{prioridade: atendimento.prioridade.peso > 0 }\" class=\"list-inline-item\">
                                <a href=\"#\" v-on:click=\"view(atendimento)\" v-bind:title=\"atendimento.prioridade.nome + ' (' + atendimento.tempoEspera + ')'\">
                                    {% verbatim %}
                                        {{atendimento.senha.format}}
                                    {% endverbatim %}
                                </a>
                            </li>
                        </ul>
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
                            <table class=\"table table-bordered\">
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
                                    {% endverbatim %}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {# dialog view #}
        <div id=\"dialog-view\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-lg\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\">{{ 'modal.attendance'|trans }}</h5>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                    </div>
                    <div class=\"modal-body\" v-if=\"atendimento\">
                        <input type=\"hidden\" v-bind:valuee=\"atendimento.id\" />
                        <fieldset>
                            <legend>{{ 'modal.attendance.ticket'|trans }}</legend>
                            <table class=\"table table-bordered\">
                                <tr>
                                    <th>
                                        {{ 'label.ticket.number'|trans }}
                                    </th>
                                    <td>
                                        {% verbatim %}
                                            {{atendimento.senha.format}}
                                        {% endverbatim %}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ 'label.priority'|trans }}
                                    </th>
                                    <td>
                                        {% verbatim %}
                                            {{atendimento.prioridade.nome}}
                                        {% endverbatim %}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ 'label.service'|trans }}
                                    </th>
                                    <td>
                                        {% verbatim %}
                                            {{atendimento.servico.nome}}
                                        {% endverbatim %}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ 'label.ticket.arrival_date'|trans }}
                                    </th>
                                    <td>
                                        {% verbatim %}
                                            {{moment(atendimento.dataChegada, 'YYYY-MM-DD hh:mm:ss').format(dateTimeFormat)}}
                                        {% endverbatim %}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ 'label.ticket.wait_time'|trans }}
                                    </th>
                                    <td>
                                        {% verbatim %}
                                            {{atendimento.tempoEspera}}
                                        {% endverbatim %}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ 'label.ticket.start_date'|trans }}
                                    </th>
                                    <td>
                                        {% verbatim %}
                                            {{atendimento.dataInicio}}
                                        {% endverbatim %}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ 'label.ticket.end_date'|trans }}
                                    </th>
                                    <td>
                                        {% verbatim %}
                                            {{atendimento.dataFim}}
                                        {% endverbatim %}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ 'label.status'|trans }}
                                    </th>
                                    <td>
                                        {% verbatim %}
                                            {{atendimento.status}}
                                        {% endverbatim %}
                                    </td>
                                </tr>
                            </table>
                        </fieldset>
                                
                                
                        <fieldset v-if=\"atendimento.cliente\">
                            <legend>{{ 'label.customer'|trans }}</legend>
                            <table class=\"table table-bordered\">
                                <tr>
                                    <th>
                                        {{ 'label.customer.name'|trans }}
                                    </th>
                                    <td>
                                        {% verbatim %}
                                            {{atendimento.cliente.nome}}
                                        {% endverbatim %}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ 'label.customer.id'|trans }}
                                    </th>
                                    <td>
                                        {% verbatim %}
                                            {{atendimento.cliente.documento}}
                                        {% endverbatim %}
                                    </td>
                                </tr>
                            </table>
                        </fieldset>
                    </div>
                    <div class=\"modal-footer\" v-if=\"atendimento\">
                        <button type=\"button\" class=\"btn btn-primary\" v-on:click=\"reativar(atendimento)\" v-if=\"atendimento.status === 'cancelada' || atendimento.status === 'nao_compareceu'\">
                            {{ 'modal.attendance.button.reactivate'|trans }}
                        </button>

                        <button type=\"button\" class=\"btn btn-secondary\" v-on:click=\"transfere(atendimento)\" v-if=\"atendimento.status === 'emitida'\">
                            {{ 'modal.attendance.button.transfer'|trans }}
                        </button>

                        <button type=\"button\" class=\"btn btn-danger\" v-on:click=\"cancelar(atendimento)\" v-if=\"atendimento.status === 'emitida'\">
                            {{ 'modal.attendance.button.cancel'|trans }}
                        </button>
                    </div>
                </div>
            </div>
        </div>

        {# transfere #}
        <div id=\"dialog-transfere\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                {{ form_start(transferirForm, { attr: { 'v-on:submit.prevent': 'transferir(atendimento, novoServico, novaPrioridade)' } }) }}
                    <div class=\"modal-content\" v-if=\"atendimento\">
                        <div class=\"modal-header\">
                            <h5 class=\"modal-title\">
                                {{ 'modal.transfer'|trans }}
                                <span class=\"badge\">
                                    {% verbatim %}
                                        {{atendimento.senha.format}}
                                    {% endverbatim %}
                                </span>
                            </h5>
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                        </div>
                        <div class=\"modal-body\">
                            
                            {{ form_row(transferirForm.servico, { attr: { 'v-model': 'novoServico' } }) }}
                            
                            {{ form_row(transferirForm.prioridade, { attr: { 'v-model': 'novaPrioridade' } }) }}
                            
                        </div>
                        <div class=\"modal-footer\">
                            <button type=\"submit\" class=\"btn btn-primary\">
                                {{ 'modal.transfer.button'|trans }}
                            </button>
                        </div>
                    </div>
                {{ form_end(transferirForm) }}
            </div>
        </div>

        <div id=\"novosga-clock\" title=\"{{ 'server.datetime'|trans }}\" class=\"clock\"></div>
    </div>
{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link type=\"text/css\" rel=\"stylesheet\" href=\"{{ asset('bundles/novosgamonitor/css/style.css') }}\">
{% endblock %}    

{% block javascripts %}
    {{ parent() }}
    <script type=\"text/javascript\">
        var ids             = [{% for su in servicos %}{{su.servico.id}},{% endfor %}],
            usuario         = {{ usuario|json_encode()|raw }},
            unidade         = {{ unidade|json_encode()|raw }},
            labelSim        = '{{ 'label.yes'|trans }}',
            labelNao        = '{{ 'label.no'|trans }}',
            alertTitle      = '{{ 'alert.title'|trans }}',
            alertCancelar   = '{{ 'alert.cancel.text'|trans }}',
            alertReativar   = '{{ 'alert.reactivate.text'|trans }}',
            alertTransferir = '{{ 'alert.transfer.text'|trans }}',
            dateTimeFormat  = '{{ 'MM/DD/YYYY HH:mm:ss'|trans }}',
            wsSecret        = '{{ wsSecret }}';
        
        App.Clock.init(\"novosga-clock\", {{ milis }});
    </script>
    <script type=\"text/javascript\" src=\"{{ asset('bundles/novosgamonitor/js/sweetalert.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('bundles/novosgamonitor/js/script.js') }}\"></script>
{% endblock %}
", "NovosgaMonitorBundle:default:index.html.twig", "/var/www/html/sgf/novosga/modules/novosga/monitor-bundle/Resources/views/default/index.html.twig");
    }
}
