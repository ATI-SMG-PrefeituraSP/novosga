<?php

/* flashMessages.html.twig */
class __TwigTemplate_08518b60fb4bfeee4c4f86a3c392219b6e4292555407bb65463ea1ad03bffc8f extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 2
            echo "    <div class=\"alert alert-success\">
        ";
            // line 3
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "
";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 8
            echo "    <div class=\"alert alert-danger\">
        ";
            // line 9
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "flashMessages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 9,  46 => 8,  42 => 7,  39 => 6,  30 => 3,  27 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "flashMessages.html.twig", "/var/www/html/sgf/novosga/templates/flashMessages.html.twig");
    }
}
