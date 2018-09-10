<?php

/* admin/index.html.twig */
class __TwigTemplate_6f607cfb31bb17b42bc260f70b5e491d90a882471a7adc1df5e90686c65b7c3b extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_adminContent($context, array $blocks = array())
    {
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
        return array (  129 => 64,  122 => 60,  116 => 56,  107 => 49,  100 => 45,  94 => 41,  83 => 32,  78 => 30,  71 => 26,  62 => 20,  57 => 18,  50 => 14,  41 => 8,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/index.html.twig", "/var/www/html/sgf/novosga/templates/admin/index.html.twig");
    }
}
