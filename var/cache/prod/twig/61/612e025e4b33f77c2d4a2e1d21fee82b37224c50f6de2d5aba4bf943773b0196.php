<?php

/* default/include/menu.html.twig */
class __TwigTemplate_aa75779ffe7fd213211bf12cbba611413dd509af83a172b8a3cff1a6cc31d4d9 extends Twig_Template
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
        $context["unidade"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", array()), "lotacao", array())) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", array()), "lotacao", array()), "unidade", array())) : (null));
        // line 2
        echo "
<ul class=\"navbar-nav mr-auto\">
    ";
        // line 4
        if (($context["unidade"] ?? null)) {
            // line 5
            echo "        <li class=\"nav-item dropdown\">
            <a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\">";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["unidade"] ?? null), "nome", array()), "html", null, true);
            echo " <b class=\"caret\"></b></a>
            <div class=\"dropdown-menu\">
                ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["modules"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 9
                echo "                    ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", array()), "admin", array()) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted(twig_get_attribute($this->env, $this->source, $context["module"], "roleName", array())))) {
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
            if (twig_length_filter($this->env, ($context["modules"] ?? null))) {
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
        return array (  97 => 32,  90 => 28,  86 => 26,  78 => 21,  74 => 19,  70 => 17,  67 => 16,  61 => 15,  55 => 12,  51 => 11,  46 => 10,  43 => 9,  39 => 8,  34 => 6,  31 => 5,  29 => 4,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/include/menu.html.twig", "/var/www/html/sgf/novosga/templates/default/include/menu.html.twig");
    }
}
