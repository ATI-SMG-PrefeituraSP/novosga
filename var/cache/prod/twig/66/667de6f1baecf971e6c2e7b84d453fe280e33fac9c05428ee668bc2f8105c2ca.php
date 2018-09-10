<?php

/* NovosgaUsersBundle:default:form.html.twig */
class __TwigTemplate_46b0940843873c87e2c59d4227f5f52cab5ef382352be97327347ca41bc088d4 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "login", array()), 'row');
        echo "

                    <div class=\"row\">
                        <div class=\"col-sm-4\">
                            ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nome", array()), 'row');
        echo "
                        </div>
                        <div class=\"col-sm-8\">
                            ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "sobrenome", array()), 'row');
        echo "
                        </div>
                    </div>

                    ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", array()), 'row');
        echo "

                    ";
        // line 40
        if (twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "id", array())) {
            // line 41
            echo "                        <div class=\"row\">
                            <div class=\"col-6\">
                                ";
            // line 43
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "ativo", array()), 'row');
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
        if ( !twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "id", array())) {
            // line 55
            echo "                        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "senha", array()), 'row');
            echo "

                        ";
            // line 57
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "confirmacaoSenha", array()), 'row');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "lotacoesRemovidas", array()), 'row', array("attr" => array("v-model" => "idsLotacoesRemovidas")));
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
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
        if (($context["passwordForm"] ?? null)) {
            // line 213
            echo "        <div id=\"dialog-senha\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    ";
            // line 216
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["passwordForm"] ?? null), 'form_start', array("attr" => array("v-on:submit.prevent" => "alterarSenha")));
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
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["passwordForm"] ?? null), "senha", array()), 'label');
            echo "
                                ";
            // line 224
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["passwordForm"] ?? null), "senha", array()), 'widget', array("attr" => array("v-bind:class" => "{'is-invalid': errors.senha}")));
            echo "
                                <div v-text=\"errors.senha\" v-bind:class=\"{'invalid-feedback': errors.senha}\"></div>
                            </div>
                            <div class=\"form-group\">
                                ";
            // line 228
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["passwordForm"] ?? null), "confirmacaoSenha", array()), 'label');
            echo "
                                ";
            // line 229
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["passwordForm"] ?? null), "confirmacaoSenha", array()), 'widget', array("attr" => array("v-bind:class" => "{'is-invalid': errors.confirmacaoSenha}")));
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
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["passwordForm"] ?? null), 'form_end');
            echo "
                </div>
            </div>
        </div>
    ";
        }
    }

    // line 245
    public function block_javascripts($context, array $blocks = array())
    {
        // line 246
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        var unidades = [ ";
        // line 248
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["unidades"] ?? null));
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "lotacoes", array()));
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
        $context['_seq'] = twig_ensure_traversable(($context["lotacoesRemovidas"] ?? null));
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
        return array (  527 => 280,  523 => 278,  514 => 274,  510 => 273,  504 => 270,  500 => 269,  495 => 267,  492 => 266,  488 => 265,  485 => 263,  476 => 259,  472 => 258,  466 => 255,  462 => 254,  457 => 252,  454 => 251,  450 => 250,  438 => 248,  432 => 246,  429 => 245,  419 => 238,  413 => 235,  404 => 229,  400 => 228,  393 => 224,  389 => 223,  381 => 218,  376 => 216,  371 => 213,  368 => 212,  350 => 202,  344 => 193,  334 => 188,  328 => 183,  318 => 178,  312 => 173,  302 => 166,  296 => 162,  285 => 153,  279 => 150,  268 => 142,  261 => 137,  255 => 133,  248 => 129,  243 => 127,  238 => 125,  224 => 114,  214 => 107,  198 => 94,  191 => 90,  182 => 86,  173 => 80,  163 => 71,  159 => 70,  151 => 65,  146 => 63,  140 => 59,  135 => 57,  129 => 55,  127 => 54,  124 => 53,  116 => 48,  108 => 43,  104 => 41,  102 => 40,  97 => 38,  90 => 34,  84 => 31,  77 => 27,  72 => 25,  67 => 23,  61 => 19,  59 => 18,  54 => 16,  45 => 10,  40 => 8,  36 => 6,  33 => 5,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "NovosgaUsersBundle:default:form.html.twig", "/var/www/html/sgf/novosga/modules/novosga/users-bundle/Resources/views/default/form.html.twig");
    }
}
