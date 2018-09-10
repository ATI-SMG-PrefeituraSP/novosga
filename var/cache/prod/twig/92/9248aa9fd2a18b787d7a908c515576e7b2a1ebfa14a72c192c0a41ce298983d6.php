<?php

/* admin/servicos/form.html.twig */
class __TwigTemplate_c9f207daf2e1940a6649ec59a0d54eb0152358fa378bdc361f84f6478e6c285b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("admin.html.twig", "admin/servicos/form.html.twig", 1);
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
        echo "    <h1>
        ";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.services.title"), "html", null, true);
        echo "
        <small>
            ";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.services.subtitle"), "html", null, true);
        echo "
        </small>
    </h1>

    <hr>

    ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "

        ";
        // line 15
        $this->loadTemplate("flashMessages.html.twig", "admin/servicos/form.html.twig", 15)->display($context);
        // line 16
        echo "
        <div class=\"row\">
            <div class=\"col-md-12\">
                ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "ativo", array()), 'row');
        echo "
            </div>
            <div class=\"col-md-6\">

                ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nome", array()), 'row');
        echo "

                ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "descricao", array()), 'row');
        echo "

                ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "peso", array()), 'row');
        echo "

                ";
        // line 29
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "mestre", array(), "any", true, true)) {
            // line 30
            echo "                    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "mestre", array()), 'row');
            echo "
                ";
        }
        // line 32
        echo "            </div>
            <div class=\"col-md-6\">
                ";
        // line 34
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "subServicos", array()))) {
            // line 35
            echo "                    <fieldset>
                        <legend>";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.services.childs"), "html", null, true);
            echo "</legend>
                        <table class=\"table table-bordered\">
                            <thead class=\"thead-light\">
                                <tr>
                                    <th>";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.services.field.name"), "html", null, true);
            echo "</th>
                                    <th>";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.services.field.weight"), "html", null, true);
            echo "</th>
                                    <th>";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.status"), "html", null, true);
            echo "</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "subServicos", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["sub"]) {
                // line 48
                echo "                                    ";
                if ( !twig_get_attribute($this->env, $this->source, $context["sub"], "deletedAt", array())) {
                    // line 49
                    echo "                                        <tr>
                                            <td>";
                    // line 50
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sub"], "nome", array()), "html", null, true);
                    echo "</td>
                                            <td>";
                    // line 51
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sub"], "peso", array()), "html", null, true);
                    echo "</td>
                                            <td>
                                                ";
                    // line 53
                    if (twig_get_attribute($this->env, $this->source, $context["sub"], "ativo", array())) {
                        // line 54
                        echo "                                                    <span class=\"text-success\">";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.enabled"), "html", null, true);
                        echo "</span>
                                                ";
                    } else {
                        // line 56
                        echo "                                                    <span class=\"text-danger\">";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.disabled"), "html", null, true);
                        echo "</span>
                                                ";
                    }
                    // line 58
                    echo "                                            </td>
                                            <td class=\"text-center\">
                                                <a href=\"";
                    // line 60
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_servicos_edit", array("id" => twig_get_attribute($this->env, $this->source, $context["sub"], "id", array()))), "html", null, true);
                    echo "\" class=\"btn btn-secondary\">
                                                    <i class=\"fa fa-edit\"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    ";
                }
                // line 66
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "                            </tbody>
                        </table>
                    </fieldset>
                ";
        }
        // line 71
        echo "            </div>
        </div>

        <button type=\"submit\" class=\"btn btn-primary\">
            <i class=\"fa fa-check\"></i>
            ";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.save"), "html", null, true);
        echo "
        </button>
        <a href=\"";
        // line 78
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_servicos_index");
        echo "\" class=\"btn btn-secondary\">
            <i class=\"fa fa-chevron-left\"></i>
            ";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.back"), "html", null, true);
        echo "
        </a>
        ";
        // line 82
        if (twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "id", array())) {
            // line 83
            echo "            <button type=\"submit\" class=\"btn btn-danger pull-right\" name=\"_method\" value=\"DELETE\">
                <i class=\"fa fa-trash\"></i>
                ";
            // line 85
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.remove"), "html", null, true);
            echo "
            </button>
        ";
        }
        // line 88
        echo "
    ";
        // line 89
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "admin/servicos/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 89,  218 => 88,  212 => 85,  208 => 83,  206 => 82,  201 => 80,  196 => 78,  191 => 76,  184 => 71,  178 => 67,  172 => 66,  163 => 60,  159 => 58,  153 => 56,  147 => 54,  145 => 53,  140 => 51,  136 => 50,  133 => 49,  130 => 48,  126 => 47,  118 => 42,  114 => 41,  110 => 40,  103 => 36,  100 => 35,  98 => 34,  94 => 32,  88 => 30,  86 => 29,  81 => 27,  76 => 25,  71 => 23,  64 => 19,  59 => 16,  57 => 15,  52 => 13,  43 => 7,  38 => 5,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/servicos/form.html.twig", "/var/www/html/sgf/novosga/templates/admin/servicos/form.html.twig");
    }
}
