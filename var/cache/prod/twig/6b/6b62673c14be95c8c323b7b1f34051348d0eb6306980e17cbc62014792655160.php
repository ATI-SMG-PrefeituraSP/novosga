<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_570f3b4b8932ed6dbe31cd3bc5fc364e6bfbb09e80f067cc8345a548349fcecc extends Twig_Template
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
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Framework/Form/integer_widget.html.php", "/var/www/html/sgf/novosga/vendor/symfony/framework-bundle/Resources/views/Form/integer_widget.html.php");
    }
}
