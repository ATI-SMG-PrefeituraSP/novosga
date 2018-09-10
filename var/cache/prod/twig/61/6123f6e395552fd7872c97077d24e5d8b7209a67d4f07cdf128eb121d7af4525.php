<?php

/* default/index.html.twig */
class __TwigTemplate_ad948ab84a4e2252ceecac9c683c55e454216aa0652db70f49386eb35c701fed extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
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

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"jumbotron\">
        <div class=\"container\">
            <h1>";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.welcome.title", array("%name%" => twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", array()))), "html", null, true);
        echo "</h1>
            <p>";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.welcome.subtitle"), "html", null, true);
        echo "</p>
            <p>
                <a class=\"btn btn-primary btn-lg\" href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("about");
        echo "\" role=\"button\">
                    ";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.welcome.button.read"), "html", null, true);
        echo " &raquo;
                </a>
            </p>
        </div>
    </div>
";
    }

    // line 17
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 18
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <style>
        body>section {
            padding: 20px 0;
        }
    </style>
";
    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 18,  63 => 17,  53 => 10,  49 => 9,  44 => 7,  40 => 6,  36 => 4,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/index.html.twig", "/var/www/html/sgf/novosga/templates/default/index.html.twig");
    }
}
