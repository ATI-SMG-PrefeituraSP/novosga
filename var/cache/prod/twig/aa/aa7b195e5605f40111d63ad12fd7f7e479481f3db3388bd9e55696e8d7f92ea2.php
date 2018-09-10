<?php

/* NovosgaReportsBundle:relatorios:perfis.html.twig */
class __TwigTemplate_1e6f389e508819a10548fbfdc3cc92097a432eeecbb8e91e536d780c20ebfb0f extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["relatorio"] ?? null), "dados", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["dado"]) {
            // line 4
            echo "    <div class=\"header\">
        <h2>";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dado"], "perfil", array()), "html", null, true);
            echo "</h2>
    </div>
    <table class=\"table table-bordered table-striped\">
        <thead class=\"thead-light\">
            <tr>
                <th>";
            // line 10
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Módulos", array(), "NovosgaReportsBundle");
            echo "</th>
            </tr>
        </thead>
        <tbody>
            ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["dado"], "permissoes", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["permissao"]) {
                // line 15
                echo "                <tr>
                    <td>";
                // line 16
                echo twig_escape_filter($this->env, $context["permissao"], "html", null, true);
                echo "</td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permissao'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "        </tbody>
    </table>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dado'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "NovosgaReportsBundle:relatorios:perfis.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 19,  55 => 16,  52 => 15,  48 => 14,  41 => 10,  33 => 5,  30 => 4,  26 => 3,  23 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "NovosgaReportsBundle:relatorios:perfis.html.twig", "/var/www/html/sgf/novosga/modules/novosga/reports-bundle/Resources/views/relatorios/perfis.html.twig");
    }
}
