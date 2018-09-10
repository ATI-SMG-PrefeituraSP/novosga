<?php

/* admin/prioridades/form.html.twig */
class __TwigTemplate_589196dd9976ad0f5d9e5790112d2b455628d4128484ab6a0dfc8f34d1d0f565 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("admin.html.twig", "admin/prioridades/form.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.priorities.title"), "html", null, true);
        echo "
        <small>
            ";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.priorities.subtitle"), "html", null, true);
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
        $this->loadTemplate("flashMessages.html.twig", "admin/prioridades/form.html.twig", 15)->display($context);
        // line 16
        echo "        
        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "ativo", array()), 'row');
        echo "
    
        ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nome", array()), 'row');
        echo "

        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "descricao", array()), 'row');
        echo "

        ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "peso", array()), 'row');
        echo "

        <button type=\"submit\" class=\"btn btn-primary\">
            <i class=\"fa fa-check\"></i> 
            ";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.save"), "html", null, true);
        echo "
        </button>
        <a href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_prioridades_index");
        echo "\" class=\"btn btn-secondary\">
            <i class=\"fa fa-chevron-left\"></i>
            ";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.back"), "html", null, true);
        echo "
        </a>
        ";
        // line 33
        if ((twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "id", array()) && (twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "id", array()) != 1))) {
            // line 34
            echo "            <button type=\"submit\" class=\"btn btn-danger pull-right\" name=\"_method\" value=\"DELETE\">
                <i class=\"fa fa-trash\"></i> 
                ";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.remove"), "html", null, true);
            echo "
            </button>
        ";
        }
        // line 39
        echo "
    ";
        // line 40
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "admin/prioridades/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 40,  111 => 39,  105 => 36,  101 => 34,  99 => 33,  94 => 31,  89 => 29,  84 => 27,  77 => 23,  72 => 21,  67 => 19,  62 => 17,  59 => 16,  57 => 15,  52 => 13,  43 => 7,  38 => 5,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/prioridades/form.html.twig", "/var/www/html/sgf/novosga/templates/admin/prioridades/form.html.twig");
    }
}
