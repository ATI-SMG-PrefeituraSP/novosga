<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_15f7a5e27980cc3f870846d1eb1d328d0cb841ed163a5cb741e6e00df7ee177c extends Twig_Template
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
        echo "<div>
    <?php \$widgetAttr = empty(\$help) ? array() : array('attr' => array('aria-describedby' => \$id.'_help')); ?>
    <?php echo \$view['form']->label(\$form); ?>
    <?php echo \$view['form']->errors(\$form); ?>
    <?php echo \$view['form']->widget(\$form, \$widgetAttr); ?>
    <?php echo \$view['form']->help(\$form); ?>
</div>
";
    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Framework/Form/form_row.html.php", "/var/www/html/sgf/novosga/vendor/symfony/framework-bundle/Resources/views/Form/form_row.html.php");
    }
}
