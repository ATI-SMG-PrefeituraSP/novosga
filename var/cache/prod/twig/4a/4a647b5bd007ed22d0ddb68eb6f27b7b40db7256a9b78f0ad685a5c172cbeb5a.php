<?php

/* blocks.html.twig */
class __TwigTemplate_c96b70aec7a63f25ada6a1eda2b8e61bec958872d2163469fd1cc5a8f786a741 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('title', $context, $blocks);
        // line 3
        echo " 
";
    }

    // line 1
    public function block_title($context, array $blocks = array())
    {
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("default.title"), "html", null, true);
    }

    public function getTemplateName()
    {
        return "blocks.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  34 => 2,  31 => 1,  26 => 3,  24 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "blocks.html.twig", "/var/www/html/sgf/novosga/templates/blocks.html.twig");
    }
}
