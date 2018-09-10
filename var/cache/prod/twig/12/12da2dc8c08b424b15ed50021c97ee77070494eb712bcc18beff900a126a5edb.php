<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_1462ca1ed06d4b1c189d42f4c5e8d8038efcfa8b19c98f6f196a2214b7e7c9b5 extends Twig_Template
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
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Framework/Form/button_row.html.php", "/var/www/html/sgf/novosga/vendor/symfony/framework-bundle/Resources/views/Form/button_row.html.php");
    }
}
