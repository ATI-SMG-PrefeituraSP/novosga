<?php

/* admin/api/index.html.twig */
class __TwigTemplate_b45352d549e252c523d3d2d10474398bf07e7c405f94c3c80206131594c7a927 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("admin.html.twig", "admin/api/index.html.twig", 1);
        $this->blocks = array(
            'adminContent' => array($this, 'block_adminContent'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/api/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/api/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_adminContent($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminContent"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminContent"));

        // line 4
        echo "    <h1>
        ";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.webapi.title"), "html", null, true);
        echo "
        <small>
            ";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.webapi.subtitle"), "html", null, true);
        echo "
        </small>
    </h1>
    
    <hr>
    
    <div id=\"admin\">
        <fieldset>
            <legend>";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.webapi.clients.title"), "html", null, true);
        echo "</legend>
            
            <p>";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.webapi.clients.subtitle"), "html", null, true);
        echo "</p>
            
            <table class=\"table table-bordered\">
                <thead class=\"thead-light\">
                    <tr>
                        <th>";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.webapi.clients.description"), "html", null, true);
        echo "</th>
                        <th>";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.webapi.clients.public_id"), "html", null, true);
        echo "</th>
                        <th>";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.webapi.clients.public_secret"), "html", null, true);
        echo "</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody v-cloak>
                    <tr v-for=\"client in clients\">
                        <td>
                            ";
        // line 33
        echo "
                                {{ client.description }}
                            ";
        echo "
                        </td>
                        <td>
                            ";
        // line 38
        echo "
                                {{ client.publicId }}
                            ";
        echo "
                        </td>
                        <td>
                            <a href=\"#\" title=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.view"), "html", null, true);
        echo "\" v-on:click.prevent=\"showSecret(client, \$event)\">
                                ******
                            </a>
                        </td>
                        <td class=\"text-center\">
                            <button type=\"button\" class=\"btn btn-danger\" title=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.remove"), "html", null, true);
        echo "\"
                                    v-on:click.prevent=\"removeClient(client)\">
                                <span class=\"fa fa-trash\"></span>
                            </button>
                        </td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class=\"text-center\">
                            <button type=\"button\" class=\"btn btn-secondary\" v-on:click.prevent=\"newClient\">
                                <i class=\"fa fa-plus\"></i>
                                ";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.add"), "html", null, true);
        echo "
                            </button>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </fieldset>

        <div id=\"dialog-api-client\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\">
            <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content\">
                    <form v-on:submit.prevent=\"addClient\">
                        <div class=\"modal-header\">
                            <h5 class=\"modal-title\">";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.webapi.clients.modal"), "html", null, true);
        echo "</h5>
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                <span aria-hidden=\"true\">&times;</span>
                            </button>
                        </div>
                        <div class=\"modal-body\">
                            <div class=\"form-group\">
                                <label>";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.webapi.clients.description"), "html", null, true);
        echo "</label>
                                <input type=\"text\" class=\"form-control\" v-model=\"client.description\" name=\"description\" maxlength=\"30\">
                            </div>
                        </div>
                        <div class=\"modal-footer\">
                            <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">
                                ";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.close"), "html", null, true);
        echo "
                            </button>
                            <button type=\"submit\" class=\"btn btn-primary\">
                                ";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.add"), "html", null, true);
        echo "
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 100
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 101
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        (function () {
            'strinct'
            
            var app = new Vue({
                el: '#admin',
                data: {
                    client: {},
                    clients: []
                },
                methods: {
                    load: function() {
                        var self = this;
                        App.ajax({
                            url: '";
        // line 116
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_api_clients");
        echo "',
                            success: function(response) {
                                self.clients = response.data;
                            }
                        });
                    },
                    newClient: function() {
                        this.client = {};
                        \$('#dialog-api-client').modal('show');
                    },
                    addClient: function() {
                        var self = this;
                        App.ajax({
                            url: '";
        // line 129
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_api_newclient");
        echo "',
                            type: 'POST',
                            data: self.client,
                            success: function() {
                                self.load();
                                \$('#dialog-api-client').modal('hide');
                            }
                        });
                    },
                    showSecret: function (client, evt) {
                        evt.target.parentNode.innerHTML = client.secret;
                    },
                    removeClient: function (client) {
                        var self = this;
                        if (confirm('";
        // line 143
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.webapi.clients.remove_alert"), "html", null, true);
        echo "')) {
                            App.ajax({
                                url: '";
        // line 145
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_api_clients");
        echo "/' + client.id,
                                type: 'DELETE',
                                success: function() {
                                    self.load();
                                }
                            });
                        }
                    }
                }
            });
            
            app.load();
        })();
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/api/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  272 => 145,  267 => 143,  250 => 129,  234 => 116,  215 => 101,  206 => 100,  187 => 90,  181 => 87,  172 => 81,  162 => 74,  146 => 61,  128 => 46,  120 => 41,  112 => 38,  104 => 33,  94 => 24,  90 => 23,  86 => 22,  78 => 17,  73 => 15,  62 => 7,  57 => 5,  54 => 4,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"admin.html.twig\" %}

{% block adminContent %}
    <h1>
        {{ 'admin.webapi.title'|trans }}
        <small>
            {{ 'admin.webapi.subtitle'|trans }}
        </small>
    </h1>
    
    <hr>
    
    <div id=\"admin\">
        <fieldset>
            <legend>{{ 'admin.webapi.clients.title'|trans }}</legend>
            
            <p>{{ 'admin.webapi.clients.subtitle'|trans }}</p>
            
            <table class=\"table table-bordered\">
                <thead class=\"thead-light\">
                    <tr>
                        <th>{{ 'admin.webapi.clients.description'|trans }}</th>
                        <th>{{ 'admin.webapi.clients.public_id'|trans }}</th>
                        <th>{{ 'admin.webapi.clients.public_secret'|trans }}</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody v-cloak>
                    <tr v-for=\"client in clients\">
                        <td>
                            {% verbatim %}
                                {{ client.description }}
                            {% endverbatim %}
                        </td>
                        <td>
                            {% verbatim %}
                                {{ client.publicId }}
                            {% endverbatim %}
                        </td>
                        <td>
                            <a href=\"#\" title=\"{{ 'label.view'|trans }}\" v-on:click.prevent=\"showSecret(client, \$event)\">
                                ******
                            </a>
                        </td>
                        <td class=\"text-center\">
                            <button type=\"button\" class=\"btn btn-danger\" title=\"{{ 'button.remove'|trans }}\"
                                    v-on:click.prevent=\"removeClient(client)\">
                                <span class=\"fa fa-trash\"></span>
                            </button>
                        </td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class=\"text-center\">
                            <button type=\"button\" class=\"btn btn-secondary\" v-on:click.prevent=\"newClient\">
                                <i class=\"fa fa-plus\"></i>
                                {{ 'button.add'|trans }}
                            </button>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </fieldset>

        <div id=\"dialog-api-client\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\">
            <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content\">
                    <form v-on:submit.prevent=\"addClient\">
                        <div class=\"modal-header\">
                            <h5 class=\"modal-title\">{{ 'admin.webapi.clients.modal'|trans }}</h5>
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                <span aria-hidden=\"true\">&times;</span>
                            </button>
                        </div>
                        <div class=\"modal-body\">
                            <div class=\"form-group\">
                                <label>{{ 'admin.webapi.clients.description'|trans }}</label>
                                <input type=\"text\" class=\"form-control\" v-model=\"client.description\" name=\"description\" maxlength=\"30\">
                            </div>
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
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
        (function () {
            'strinct'
            
            var app = new Vue({
                el: '#admin',
                data: {
                    client: {},
                    clients: []
                },
                methods: {
                    load: function() {
                        var self = this;
                        App.ajax({
                            url: '{{ path('admin_api_clients') }}',
                            success: function(response) {
                                self.clients = response.data;
                            }
                        });
                    },
                    newClient: function() {
                        this.client = {};
                        \$('#dialog-api-client').modal('show');
                    },
                    addClient: function() {
                        var self = this;
                        App.ajax({
                            url: '{{ path('admin_api_newclient') }}',
                            type: 'POST',
                            data: self.client,
                            success: function() {
                                self.load();
                                \$('#dialog-api-client').modal('hide');
                            }
                        });
                    },
                    showSecret: function (client, evt) {
                        evt.target.parentNode.innerHTML = client.secret;
                    },
                    removeClient: function (client) {
                        var self = this;
                        if (confirm('{{ 'admin.webapi.clients.remove_alert'|trans }}')) {
                            App.ajax({
                                url: '{{ path('admin_api_clients') }}/' + client.id,
                                type: 'DELETE',
                                success: function() {
                                    self.load();
                                }
                            });
                        }
                    }
                }
            });
            
            app.load();
        })();
    </script>
{% endblock %}
", "admin/api/index.html.twig", "/var/www/html/sgf/novosga/templates/admin/api/index.html.twig");
    }
}
