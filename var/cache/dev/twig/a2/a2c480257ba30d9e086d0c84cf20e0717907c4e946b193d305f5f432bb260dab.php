<?php

/* default/include/menu.html.twig */
class __TwigTemplate_f4ed4354ebd43c06195fea2c2346b1ac8a8441e3e89091315b4eccab0026aa94 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/include/menu.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/include/menu.html.twig"));

        // line 1
        $context["unidade"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 1, $this->source); })()), "user", array()), "lotacao", array())) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 1, $this->source); })()), "user", array()), "lotacao", array()), "unidade", array())) : (null));
        // line 2
        echo "
<ul class=\"navbar-nav mr-auto\">
    ";
        // line 4
        if ((isset($context["unidade"]) || array_key_exists("unidade", $context) ? $context["unidade"] : (function () { throw new Twig_Error_Runtime('Variable "unidade" does not exist.', 4, $this->source); })())) {
            // line 5
            echo "        <li class=\"nav-item dropdown\">
            <a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\">";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["unidade"]) || array_key_exists("unidade", $context) ? $context["unidade"] : (function () { throw new Twig_Error_Runtime('Variable "unidade" does not exist.', 6, $this->source); })()), "nome", array()), "html", null, true);
            echo " <b class=\"caret\"></b></a>
            <div class=\"dropdown-menu\">
                ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["modules"]) || array_key_exists("modules", $context) ? $context["modules"] : (function () { throw new Twig_Error_Runtime('Variable "modules" does not exist.', 8, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 9
                echo "                    ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 9, $this->source); })()), "user", array()), "admin", array()) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted(twig_get_attribute($this->env, $this->source, $context["module"], "roleName", array())))) {
                    // line 10
                    echo "                        <a href=\"";
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, $context["module"], "homeRoute", array()));
                    echo "\" class=\"dropdown-item\">
                            <i class=\"fa fa-";
                    // line 11
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["module"], "iconName", array()), "html", null, true);
                    echo " fa-fw\"></i>
                            ";
                    // line 12
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["module"], "displayName", array()), array(), twig_get_attribute($this->env, $this->source, $context["module"], "name", array())), "html", null, true);
                    echo "
                        </a>
                    ";
                }
                // line 15
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "                ";
            if (twig_length_filter($this->env, (isset($context["modules"]) || array_key_exists("modules", $context) ? $context["modules"] : (function () { throw new Twig_Error_Runtime('Variable "modules" does not exist.', 16, $this->source); })()))) {
                // line 17
                echo "                    <div class=\"dropdown-divider\"></div>
                ";
            }
            // line 19
            echo "                <a href=\"#dialog-unidade\" data-toggle=\"modal\" class=\"dropdown-item\">
                    <i class=\"fa fa-exchange\"></i> &nbsp;
                    ";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("menu.change_unity"), "html", null, true);
            echo "
                </a>
            </div>
        </li>
    ";
        } else {
            // line 26
            echo "        <li>
            <a href=\"#dialog-unidade\" data-toggle=\"modal\">
                ";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("menu.choose_unity"), "html", null, true);
            echo "
            </a>
        </li>
    ";
        }
        // line 32
        echo "</ul>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "default/include/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 32,  96 => 28,  92 => 26,  84 => 21,  80 => 19,  76 => 17,  73 => 16,  67 => 15,  61 => 12,  57 => 11,  52 => 10,  49 => 9,  45 => 8,  40 => 6,  37 => 5,  35 => 4,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set unidade = app.user.lotacao ? app.user.lotacao.unidade : null %}

<ul class=\"navbar-nav mr-auto\">
    {% if unidade %}
        <li class=\"nav-item dropdown\">
            <a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\">{{ unidade.nome }} <b class=\"caret\"></b></a>
            <div class=\"dropdown-menu\">
                {% for module in modules %}
                    {% if app.user.admin or is_granted(module.roleName) %}
                        <a href=\"{{ path(module.homeRoute) }}\" class=\"dropdown-item\">
                            <i class=\"fa fa-{{ module.iconName }} fa-fw\"></i>
                            {{ module.displayName|trans({}, module.name) }}
                        </a>
                    {% endif %}
                {% endfor %}
                {% if modules|length %}
                    <div class=\"dropdown-divider\"></div>
                {% endif %}
                <a href=\"#dialog-unidade\" data-toggle=\"modal\" class=\"dropdown-item\">
                    <i class=\"fa fa-exchange\"></i> &nbsp;
                    {{ 'menu.change_unity'|trans }}
                </a>
            </div>
        </li>
    {% else %}
        <li>
            <a href=\"#dialog-unidade\" data-toggle=\"modal\">
                {{ 'menu.choose_unity'|trans }}
            </a>
        </li>
    {% endif %}
</ul>
", "default/include/menu.html.twig", "/var/www/html/sgf/novosga/templates/default/include/menu.html.twig");
    }
}
