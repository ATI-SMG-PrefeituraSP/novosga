<?php

/* NovosgaUsersBundle::base.html.twig */
class __TwigTemplate_170088e2b9b21489cc696267e351e4cb5cf205cb00266824d5984c68c2090cf5 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "NovosgaUsersBundle::base.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title", array(), "NovosgaUsersBundle"), "html", null, true);
    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 10
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/novosgausers/css/style.css"), "html", null, true);
        echo "\">
";
    }

    public function getTemplateName()
    {
        return "NovosgaUsersBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 11,  43 => 10,  40 => 9,  36 => 6,  33 => 5,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "NovosgaUsersBundle::base.html.twig", "/var/www/html/sgf/novosga/modules/novosga/users-bundle/Resources/views/base.html.twig");
    }
}
