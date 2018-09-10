<?php

/* bundles/TwigBundle/Exception/error.html.twig */
class __TwigTemplate_04618ee38cf5715fdf66cfd1162b88510fccf107accedcdeacf14bc42fdda6d8 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "bundles/TwigBundle/Exception/error.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
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
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    Oops!
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"my-3\">
        <div class=\"container\">
            <h1>Oops! An Error Occurred</h1>
            <h2>The server returned a \"";
        // line 11
        echo twig_escape_filter($this->env, ($context["status_code"] ?? null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? null), "html", null, true);
        echo "\".</h2>

            <div>
                Something is broken. Please let us know what you were doing when this error occurred.
                We will fix it as soon as possible. Sorry for any inconvenience caused.
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "bundles/TwigBundle/Exception/error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 11,  44 => 8,  41 => 7,  36 => 4,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "bundles/TwigBundle/Exception/error.html.twig", "/var/www/html/sgf/novosga/templates/bundles/TwigBundle/Exception/error.html.twig");
    }
}
