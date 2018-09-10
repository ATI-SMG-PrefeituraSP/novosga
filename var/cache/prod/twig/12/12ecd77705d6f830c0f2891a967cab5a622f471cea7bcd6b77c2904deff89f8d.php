<?php

/* FOSOAuthServerBundle::form.html.twig */
class __TwigTemplate_270029d3a93e7c87c63b2cbc70c6fa7184e2a8c0c95dd15e80baa9ca9a7703ea extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'field_label' => array($this, 'block_field_label'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
";
        // line 2
        $this->displayBlock('field_label', $context, $blocks);
    }

    public function block_field_label($context, array $blocks = array())
    {
        // line 3
        ob_start();
        // line 4
        echo "    <label for=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["id"] ?? null), array(), "FOSOAuthServerBundle"), "html", null, true);
        echo "</label>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "FOSOAuthServerBundle::form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  35 => 4,  33 => 3,  27 => 2,  24 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FOSOAuthServerBundle::form.html.twig", "/var/www/html/sgf/novosga/vendor/novosga/oauth-server-bundle/Resources/views/form.html.twig");
    }
}
