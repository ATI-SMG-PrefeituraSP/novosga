<?php

/* admin/index.html.twig */
class __TwigTemplate_c550be7f75104115d8f4357035e24e7c4f6bd4eee66f143184327874eaea51bd extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("admin.html.twig", "admin/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

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
        echo "    
<div class=\"card\">
    <div class=\"card-header text-white bg-danger\">
        <i class=\"fa fa-warning\"></i> 
        ";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.system.danger_zone"), "html", null, true);
        echo "
    </div>
    <table class=\"table\">
        <tbody>
            <tr>
                <td>
                    ";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.system.reset_tickets"), "html", null, true);
        echo "
                </td>
                <td class=\"text-right\">
                    <button class=\"btn btn-danger\"
                            onclick=\"return App.Admin.reiniciarSenhas('";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.system.reset_tickets.alert"), "html", null, true);
        echo "')\">
                        <i class=\"fa fa-refresh\"></i>
                        ";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.reset"), "html", null, true);
        echo "
                    </button>
                </td>
            </tr>
            <tr>
                <td>
                    ";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.system.clear_tickets"), "html", null, true);
        echo "
                </td>
                <td class=\"text-right\">
                    <button class=\"btn btn-danger\"
                            onclick=\"return App.Admin.limparSenhas('";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.system.clear_tickets.alert"), "html", null, true);
        echo "')\">
                        <i class=\"fa fa-refresh\"></i>
                        ";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.reset"), "html", null, true);
        echo "
                    </button>
                </td>
            </tr>
        </tbody>
    </table>
</div>

";
        // line 41
        echo "<div id=\"dialog-reiniciar\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.success"), "html", null, true);
        echo "</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
            </div>
            <div class=\"modal-body\">
                <p>";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.system.reset_tickets.success"), "html", null, true);
        echo "</p>
            </div>
        </div>
    </div>
</div>

";
        // line 56
        echo "<div id=\"dialog-limpar\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.success"), "html", null, true);
        echo "</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
            </div>
            <div class=\"modal-body\">
                <p>";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.system.clear_tickets.success"), "html", null, true);
        echo "</p>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 64,  140 => 60,  134 => 56,  125 => 49,  118 => 45,  112 => 41,  101 => 32,  96 => 30,  89 => 26,  80 => 20,  75 => 18,  68 => 14,  59 => 8,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"admin.html.twig\" %}

{% block adminContent %}
    
<div class=\"card\">
    <div class=\"card-header text-white bg-danger\">
        <i class=\"fa fa-warning\"></i> 
        {{ 'admin.system.danger_zone'|trans }}
    </div>
    <table class=\"table\">
        <tbody>
            <tr>
                <td>
                    {{ 'admin.system.reset_tickets'|trans }}
                </td>
                <td class=\"text-right\">
                    <button class=\"btn btn-danger\"
                            onclick=\"return App.Admin.reiniciarSenhas('{{ 'admin.system.reset_tickets.alert'|trans }}')\">
                        <i class=\"fa fa-refresh\"></i>
                        {{ 'button.reset'|trans }}
                    </button>
                </td>
            </tr>
            <tr>
                <td>
                    {{ 'admin.system.clear_tickets'|trans }}
                </td>
                <td class=\"text-right\">
                    <button class=\"btn btn-danger\"
                            onclick=\"return App.Admin.limparSenhas('{{ 'admin.system.clear_tickets.alert'|trans }}')\">
                        <i class=\"fa fa-refresh\"></i>
                        {{ 'button.reset'|trans }}
                    </button>
                </td>
            </tr>
        </tbody>
    </table>
</div>

{# reiniciar #}
<div id=\"dialog-reiniciar\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">{{ 'label.success'|trans }}</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
            </div>
            <div class=\"modal-body\">
                <p>{{ 'admin.system.reset_tickets.success'|trans }}</p>
            </div>
        </div>
    </div>
</div>

{# limpar #}
<div id=\"dialog-limpar\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">{{ 'label.success'|trans }}</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
            </div>
            <div class=\"modal-body\">
                <p>{{ 'admin.system.clear_tickets.success'|trans }}</p>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "admin/index.html.twig", "/var/www/html/sgf/novosga/templates/admin/index.html.twig");
    }
}
