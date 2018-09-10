<?php

/* admin/prioridades/index.html.twig */
class __TwigTemplate_c9fabb438cc83acb79c6360075b0843c8ffa5d0732269aa1908da9b3ebe5eeec extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("admin.html.twig", "admin/prioridades/index.html.twig", 1);
        $this->blocks = array(
            'adminContent' => array($this, 'block_adminContent'),
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
        echo "    <div class=\"row\">
        <div class=\"col-8\">
            <h1>
                ";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.priorities.title"), "html", null, true);
        echo "
                <small>
                    ";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.priorities.subtitle"), "html", null, true);
        echo "
                </small>
            </h1>
        </div>
        <div class=\"col-4 text-right\">
            <a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_prioridades_new");
        echo "\" class=\"btn btn-primary\">
                <i class=\"fa fa-plus\"></i>
                ";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.priorities.button.new"), "html", null, true);
        echo "
            </a>
        </div>
    </div>

    <hr>

    ";
        // line 23
        $this->loadTemplate("flashMessages.html.twig", "admin/prioridades/index.html.twig", 23)->display($context);
        // line 24
        echo "
    <table class=\"table table-bordered\">
        <thead class=\"thead-light\">
            <tr>
                <th>#</th>
                <th>";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.name"), "html", null, true);
        echo "</th>
                <th>";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.weight"), "html", null, true);
        echo "</th>
                <th>";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.status"), "html", null, true);
        echo "</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["prioridades"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["prioridade"]) {
            // line 37
            echo "                <tr>
                    <td>
                        ";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prioridade"], "id", array()), "html", null, true);
            echo "
                    </td>
                    <td>
                        ";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prioridade"], "nome", array()), "html", null, true);
            echo "
                    </td>
                    <td>
                        ";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prioridade"], "peso", array()), "html", null, true);
            echo "
                    </td>
                    <td>
                        ";
            // line 48
            if (twig_get_attribute($this->env, $this->source, $context["prioridade"], "ativo", array())) {
                // line 49
                echo "                            <span class=\"text-success\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.enabled"), "html", null, true);
                echo "</span>
                        ";
            } else {
                // line 51
                echo "                            <span class=\"text-danger\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.disabled"), "html", null, true);
                echo "</span>
                        ";
            }
            // line 53
            echo "                    </td>
                    <td class=\"text-center\">
                        <a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_prioridades_edit", array("id" => twig_get_attribute($this->env, $this->source, $context["prioridade"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-secondary\">
                            <i class=\"fa fa-edit\"></i>
                        </a>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prioridade'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "        </tbody>
    </table>
";
    }

    public function getTemplateName()
    {
        return "admin/prioridades/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 61,  137 => 55,  133 => 53,  127 => 51,  121 => 49,  119 => 48,  113 => 45,  107 => 42,  101 => 39,  97 => 37,  93 => 36,  85 => 31,  81 => 30,  77 => 29,  70 => 24,  68 => 23,  58 => 16,  53 => 14,  45 => 9,  40 => 7,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/prioridades/index.html.twig", "/var/www/html/sgf/novosga/templates/admin/prioridades/index.html.twig");
    }
}
