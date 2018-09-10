<?php

/* admin/locais/form.html.twig */
class __TwigTemplate_a88c3a639ed6d9025d5ef34b64864b9233f3b54a8ded300b0b4a39080f52ce35 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("admin.html.twig", "admin/locais/form.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.places.title"), "html", null, true);
        echo "
        <small>
            ";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.places.subtitle"), "html", null, true);
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
        $this->loadTemplate("flashMessages.html.twig", "admin/locais/form.html.twig", 15)->display($context);
        // line 16
        echo "    
        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nome", array()), 'row');
        echo "

        <button type=\"submit\" class=\"btn btn-primary\">
            <i class=\"fa fa-check\"></i> 
            ";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.save"), "html", null, true);
        echo "
        </button>
        <a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_locais_index");
        echo "\" class=\"btn btn-secondary\">
            <i class=\"fa fa-chevron-left\"></i>
            ";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.back"), "html", null, true);
        echo "
        </a>
        ";
        // line 27
        if (twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "id", array())) {
            // line 28
            echo "            <button type=\"submit\" class=\"btn btn-danger pull-right\" name=\"_method\" value=\"DELETE\">
                <i class=\"fa fa-trash\"></i> 
                ";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.remove"), "html", null, true);
            echo "
            </button>
        ";
        }
        // line 33
        echo "        
    ";
        // line 34
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "admin/locais/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 34,  96 => 33,  90 => 30,  86 => 28,  84 => 27,  79 => 25,  74 => 23,  69 => 21,  62 => 17,  59 => 16,  57 => 15,  52 => 13,  43 => 7,  38 => 5,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/locais/form.html.twig", "/var/www/html/sgf/novosga/templates/admin/locais/form.html.twig");
    }
}
