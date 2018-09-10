<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_5eb32935be3f1c41a8c2bb64f9138c90d9227fe9180b1f44938dc17e0f5dc50b extends Twig_Template
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
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Framework/Form/hidden_row.html.php", "/var/www/html/sgf/novosga/vendor/symfony/framework-bundle/Resources/views/Form/hidden_row.html.php");
    }
}
