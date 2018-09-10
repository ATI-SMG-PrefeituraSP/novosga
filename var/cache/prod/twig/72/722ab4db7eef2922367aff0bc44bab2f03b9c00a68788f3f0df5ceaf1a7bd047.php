<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_394fcc4696db6ae69b9e60725e63020b9b21ef38c2f3d89201b908f1c5b33112 extends Twig_Template
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
        echo "<?php echo \$view['form']->formEncodeCurrency(\$money_pattern, \$view['form']->block(\$form, 'form_widget_simple')) ?>
";
    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Framework/Form/money_widget.html.php", "/var/www/html/sgf/novosga/vendor/symfony/framework-bundle/Resources/views/Form/money_widget.html.php");
    }
}
