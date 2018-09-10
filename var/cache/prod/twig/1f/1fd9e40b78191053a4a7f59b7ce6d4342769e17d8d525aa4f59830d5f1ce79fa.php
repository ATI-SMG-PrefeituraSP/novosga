<?php

/* admin/departamentos/index.html.twig */
class __TwigTemplate_6c31daed65d0a5ba129a26cf31ef205d52059a42c68fb6b77b19286000250faf extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("admin.html.twig", "admin/departamentos/index.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.departments.title"), "html", null, true);
        echo "
                <small>
                    ";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.departments.subtitle"), "html", null, true);
        echo "
                </small>
            </h1>
        </div>
        <div class=\"col-4 text-right\">
            <a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_departamentos_new");
        echo "\" class=\"btn btn-primary\">
                <i class=\"fa fa-plus\"></i>
                ";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.departments.button.new"), "html", null, true);
        echo "
            </a>
        </div>
    </div>

    <hr>

    ";
        // line 23
        $this->loadTemplate("flashMessages.html.twig", "admin/departamentos/index.html.twig", 23)->display($context);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.status"), "html", null, true);
        echo "</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["departamentos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["departamento"]) {
            // line 36
            echo "                <tr>
                    <td>
                        ";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["departamento"], "id", array()), "html", null, true);
            echo "
                    </td>
                    <td>
                        ";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["departamento"], "nome", array()), "html", null, true);
            echo "
                    </td>
                    <td>
                        ";
            // line 44
            if (twig_get_attribute($this->env, $this->source, $context["departamento"], "ativo", array())) {
                // line 45
                echo "                            <span class=\"text-success\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.enabled"), "html", null, true);
                echo "</span>
                        ";
            } else {
                // line 47
                echo "                            <span class=\"text-danger\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.disabled"), "html", null, true);
                echo "</span>
                        ";
            }
            // line 49
            echo "                    </td>
                    <td class=\"text-center\">
                        <a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_departamentos_edit", array("id" => twig_get_attribute($this->env, $this->source, $context["departamento"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-secondary\">
                            <i class=\"fa fa-edit\"></i>
                        </a>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['departamento'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "        </tbody>
    </table>
";
    }

    public function getTemplateName()
    {
        return "admin/departamentos/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 57,  127 => 51,  123 => 49,  117 => 47,  111 => 45,  109 => 44,  103 => 41,  97 => 38,  93 => 36,  89 => 35,  81 => 30,  77 => 29,  70 => 24,  68 => 23,  58 => 16,  53 => 14,  45 => 9,  40 => 7,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/departamentos/index.html.twig", "/var/www/html/sgf/novosga/templates/admin/departamentos/index.html.twig");
    }
}
