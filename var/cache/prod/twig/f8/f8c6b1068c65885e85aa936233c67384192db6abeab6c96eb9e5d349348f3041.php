<?php

/* NovosgaReportsBundle::base.html.twig */
class __TwigTemplate_15e27e5d19004d200c98a8db67a807b1cd8eae4ae599a46892e23e18b960d32d extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "NovosgaReportsBundle::base.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title", array(), "NovosgaReportsBundle"), "html", null, true);
    }

    public function getTemplateName()
    {
        return "NovosgaReportsBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 6,  32 => 5,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "NovosgaReportsBundle::base.html.twig", "/var/www/html/sgf/novosga/modules/novosga/reports-bundle/Resources/views/base.html.twig");
    }
}
