<?php

/* NovosgaUsersBundle:default:index.html.twig */
class __TwigTemplate_bb11eb9f8f073225392afb58b753fb50c9b87e61edcfae50e9a31a28d61de1de extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("@NovosgaUsers/base.html.twig", "NovosgaUsersBundle:default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
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
        echo "    <div class=\"row\">
        <div class=\"col-md-6  col-lg-8\">
            <h1>
                <i class=\"fa fa-users\" aria-hidden=\"true\"></i>
                ";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title", array(), "NovosgaUsersBundle"), "html", null, true);
        echo "
                <small>
                    ";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("subtitle", array(), "NovosgaUsersBundle"), "html", null, true);
        echo "
                </small>
            </h1>
        </div>
        <div class=\"col-md-6 col-lg-4 text-right\">
            <form class=\"form-inline\">
                <div class=\"input-group\">
                    <input type=\"text\" class=\"form-control\" name=\"q\" placeholder=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.search", array(), "NovosgaUsersBundle"), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "get", array(0 => "q"), "method"), "html", null, true);
        echo "\">
                    <span class=\"input-group-btn\">
                        <button type=\"submit\" class=\"btn btn-secondary\">
                            <i class=\"fa fa-search\"></i>
                        </button>
                    </span>
                </div>
                <a href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("novosga_users_new");
        echo "\" class=\"btn btn-primary ml-auto\">
                    <i class=\"fa fa-plus\"></i>
                    ";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.new_user", array(), "NovosgaUsersBundle"), "html", null, true);
        echo "
                </a>
            </form>
        </div>
    </div>
        
    <hr>
    
    <table class=\"table table-bordered\">
        <thead class=\"thead-light\">
            <th>#</th>
            <th>";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.username", array(), "NovosgaUsersBundle"), "html", null, true);
        echo "</th>
            <th>";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.name", array(), "NovosgaUsersBundle"), "html", null, true);
        echo "</th>
            <th>";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.status", array(), "NovosgaUsersBundle"), "html", null, true);
        echo "</th>
            <th></th>
        </thead>
        <tbody>
            ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["usuarios"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
            // line 46
            echo "                <tr>
                    <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuario"], "id", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuario"], "login", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuario"], "nome", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuario"], "sobrenome", array()), "html", null, true);
            echo "</td>
                    <td>
                        ";
            // line 51
            if (twig_get_attribute($this->env, $this->source, $context["usuario"], "ativo", array())) {
                // line 52
                echo "                            <span class=\"text-success\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.enabled", array(), "NovosgaUsersBundle"), "html", null, true);
                echo "</span>
                        ";
            } else {
                // line 54
                echo "                            <span class=\"text-danger\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.disabled", array(), "NovosgaUsersBundle"), "html", null, true);
                echo "</span>
                        ";
            }
            // line 56
            echo "                    </td>
                    <td class=\"text-right\">
                        <a href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("novosga_users_edit", array("id" => twig_get_attribute($this->env, $this->source, $context["usuario"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-secondary\">
                            <i class=\"fa fa-edit\"></i>
                        </a>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "        </tbody>
    </table>
            
    ";
        // line 67
        echo ($context["paginacao"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "NovosgaUsersBundle:default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 67,  154 => 64,  142 => 58,  138 => 56,  132 => 54,  126 => 52,  124 => 51,  117 => 49,  113 => 48,  109 => 47,  106 => 46,  102 => 45,  95 => 41,  91 => 40,  87 => 39,  73 => 28,  68 => 26,  56 => 19,  46 => 12,  41 => 10,  35 => 6,  32 => 5,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "NovosgaUsersBundle:default:index.html.twig", "/var/www/html/sgf/novosga/modules/novosga/users-bundle/Resources/views/default/index.html.twig");
    }
}
