<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_97742e39393b40e311553d524dc5ae3449094fccd305b83a0254e2eb0044a887 extends Twig_Template
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
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Framework/Form/repeated_row.html.php", "/var/www/html/sgf/novosga/vendor/symfony/framework-bundle/Resources/views/Form/repeated_row.html.php");
    }
}
