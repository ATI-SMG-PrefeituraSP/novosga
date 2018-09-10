<?php

/* flashMessages.html.twig */
class __TwigTemplate_5509360dfdcb4b93dd8d7206bd570cc452e9b5d0f0a35bc0e4fd26d11e389784 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "flashMessages.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "flashMessages.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 1, $this->source); })()), "flashes", array(0 => "success"), "method"));
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 7, $this->source); })()), "flashes", array(0 => "error"), "method"));
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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  55 => 9,  52 => 8,  48 => 7,  45 => 6,  36 => 3,  33 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for message in app.flashes('success') %}
    <div class=\"alert alert-success\">
        {{ message }}
    </div>
{% endfor %}

{% for message in app.flashes('error') %}
    <div class=\"alert alert-danger\">
        {{ message }}
    </div>
{% endfor %}", "flashMessages.html.twig", "/var/www/html/sgf/novosga/templates/flashMessages.html.twig");
    }
}
