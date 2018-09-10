<?php

/* default/include/unidadesModal.html.twig */
class __TwigTemplate_c83e7a37aa885e9881b3eb03cd07066758b60a84c8299c910b5e56ab55a8a411 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/include/unidadesModal.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/include/unidadesModal.html.twig"));

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
        $context["unidade"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 9, $this->source); })()), "user", array()), "lotacao", array()), "unidade", array());
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
        $context['_seq'] = twig_ensure_traversable((isset($context["unidades"]) || array_key_exists("unidades", $context) ? $context["unidades"] : (function () { throw new Twig_Error_Runtime('Variable "unidades" does not exist.', 14, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 15
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), "html", null, true);
            echo "\" ";
            if ((((isset($context["unidade"]) || array_key_exists("unidade", $context) ? $context["unidade"] : (function () { throw new Twig_Error_Runtime('Variable "unidade" does not exist.', 15, $this->source); })()) != null) && (twig_get_attribute($this->env, $this->source, $context["item"], "id", array()) == twig_get_attribute($this->env, $this->source, (isset($context["unidade"]) || array_key_exists("unidade", $context) ? $context["unidade"] : (function () { throw new Twig_Error_Runtime('Variable "unidade" does not exist.', 15, $this->source); })()), "id", array())))) {
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
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 27, $this->source); })()), "user", array()), "lotacao", array()), "unidade", array())) {
            // line 28
            echo "    <script type=\"text/javascript\"> App.Unidades.show(); </script>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  92 => 28,  90 => 27,  81 => 21,  75 => 17,  60 => 15,  56 => 14,  52 => 13,  47 => 11,  44 => 10,  42 => 9,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"dialog-unidade\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">{{ 'label.unity'|trans }}</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
            </div>
            <div class=\"modal-body\">
                {% set unidade = app.user.lotacao.unidade %}
                <div>
                    <label>{{ 'modal.unity.label'|trans }}</label>
                    <select id=\"unidade\" class=\"form-control\">
                        <option value=\"\">{{ 'label.choose'|trans }}</option>
                        {% for item in unidades %}
                        <option value=\"{{ item.id }}\" {% if unidade != null and item.id == unidade.id %}selected=\"selected\"{% endif %}>{{ item.nome }}</option>
                        {% endfor %}
                    </select>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-primary\" onclick=\"App.Unidades.set()\">{{ 'modal.unity.submit'|trans }}</button>
            </div>
        </div>
    </div>
</div>
                
{% if not app.user.lotacao.unidade %}
    <script type=\"text/javascript\"> App.Unidades.show(); </script>
{% endif %}", "default/include/unidadesModal.html.twig", "/var/www/html/sgf/novosga/templates/default/include/unidadesModal.html.twig");
    }
}
