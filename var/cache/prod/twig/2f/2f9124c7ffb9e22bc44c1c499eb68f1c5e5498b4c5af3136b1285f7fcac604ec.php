<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_5f77be37f9f7ea8dbc00706f8d604d0f0507fb55014602b401e109d29fe14086 extends Twig_Template
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
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? null)));
        echo "
*/
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "TwigBundle:Exception:exception.js.twig", "/var/www/html/sgf/novosga/vendor/symfony/twig-bundle/Resources/views/Exception/exception.js.twig");
    }
}
