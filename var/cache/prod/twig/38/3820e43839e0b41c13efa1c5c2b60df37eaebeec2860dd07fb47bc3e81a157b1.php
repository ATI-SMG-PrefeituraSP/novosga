<?php

/* default/include/unidadesModal.html.twig */
class __TwigTemplate_e183e8dd9262de6c0067ba8f8b0ecdb665fb21561b8c6a4a379eac7ee92e10e7 extends Twig_Template
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
        // line 1
        echo "<div id=\"dialog-unidade\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.unity"), "html", null, true);
        echo "</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
            </div>
            <div class=\"modal-body\">
                ";
        // line 9
        $context["unidade"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", array()), "lotacao", array()), "unidade", array());
        // line 10
        echo "                <div>
                    <label>";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("modal.unity.label"), "html", null, true);
        echo "</label>
                    <select id=\"unidade\" class=\"form-control\">
                        <option value=\"\">";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.choose"), "html", null, true);
        echo "</option>
                        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["unidades"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 15
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), "html", null, true);
            echo "\" ";
            if (((($context["unidade"] ?? null) != null) && (twig_get_attribute($this->env, $this->source, $context["item"], "id", array()) == twig_get_attribute($this->env, $this->source, ($context["unidade"] ?? null), "id", array())))) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nome", array()), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "                    </select>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-primary\" onclick=\"App.Unidades.set()\">";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("modal.unity.submit"), "html", null, true);
        echo "</button>
            </div>
        </div>
    </div>
</div>
                
";
        // line 27
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", array()), "lotacao", array()), "unidade", array())) {
            // line 28
            echo "    <script type=\"text/javascript\"> App.Unidades.show(); </script>
";
        }
    }

    public function getTemplateName()
    {
        return "default/include/unidadesModal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 28,  84 => 27,  75 => 21,  69 => 17,  54 => 15,  50 => 14,  46 => 13,  41 => 11,  38 => 10,  36 => 9,  29 => 5,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/include/unidadesModal.html.twig", "/var/www/html/sgf/novosga/templates/default/include/unidadesModal.html.twig");
    }
}
