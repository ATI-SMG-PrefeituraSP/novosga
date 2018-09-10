<?php

/* admin/api/index.html.twig */
class __TwigTemplate_2bf77fd6d7f9567283405442bfa2d010fa32b8306bdbcb5406bde95a509d7054 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_adminContent($context, array $blocks = array())
    {
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
    }

    // line 100
    public function block_javascripts($context, array $blocks = array())
    {
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
        return array (  242 => 145,  237 => 143,  220 => 129,  204 => 116,  185 => 101,  182 => 100,  169 => 90,  163 => 87,  154 => 81,  144 => 74,  128 => 61,  110 => 46,  102 => 41,  94 => 38,  86 => 33,  76 => 24,  72 => 23,  68 => 22,  60 => 17,  55 => 15,  44 => 7,  39 => 5,  36 => 4,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/api/index.html.twig", "/var/www/html/sgf/novosga/templates/admin/api/index.html.twig");
    }
}
