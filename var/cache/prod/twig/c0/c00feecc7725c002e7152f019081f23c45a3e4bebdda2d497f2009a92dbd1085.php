<?php

/* admin/modulos/index.html.twig */
class __TwigTemplate_5801ac147de631816cc5fadbdca92c843bc016084a37f98daf405bed623efe55 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("admin.html.twig", "admin/modulos/index.html.twig", 1);
        $this->blocks = array(
            'adminContent' => array($this, 'block_adminContent'),
            'javascripts' => array($this, 'block_javascripts'),
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.modules.title"), "html", null, true);
        echo "
        <small>
            ";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.modules.subtitle"), "html", null, true);
        echo "
        </small>
    </h1>
    
    <hr>
        
    <table class=\"table table-bordered\">
        <thead class=\"thead-light\">
            <tr>
                <th>";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.module"), "html", null, true);
        echo "</th>
                <th>";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.enabled"), "html", null, true);
        echo "</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["modules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 22
            echo "                <tr>
                    <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["module"], "name", array()), "html", null, true);
            echo "</td>
                    <td>
                        <input type=\"checkbox\" value=\"1\" ";
            // line 25
            if (twig_get_attribute($this->env, $this->source, $context["module"], "active", array())) {
                echo "checked";
            }
            echo " class=\"module-status\" data-key=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["module"], "key", array()), "html", null, true);
            echo "\">
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "        </tbody>
    </table>
";
    }

    // line 33
    public function block_javascripts($context, array $blocks = array())
    {
        // line 34
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        \$(function() {
            'use strict'
            
            \$('.module-status').on('change', function () {
                var checkbox = \$(this);
                
                \$.ajax({
                    url: '";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_modulos_update");
        echo "',
                    type: 'post',
                    data: {
                        key: checkbox.data('key') ,
                        active: checkbox.is(':checked') ? 1 : 0,
                    },
                    succes: function () {
                    }
                });
            });
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "admin/modulos/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 43,  102 => 34,  99 => 33,  93 => 29,  79 => 25,  74 => 23,  71 => 22,  67 => 21,  60 => 17,  56 => 16,  44 => 7,  39 => 5,  36 => 4,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/modulos/index.html.twig", "/var/www/html/sgf/novosga/templates/admin/modulos/index.html.twig");
    }
}
