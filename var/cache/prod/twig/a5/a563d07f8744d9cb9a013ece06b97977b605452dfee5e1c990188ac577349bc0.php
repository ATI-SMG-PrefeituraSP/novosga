<?php

/* bundles/TwigBundle/Exception/exception_full.html.twig */
class __TwigTemplate_559a7661da20ea827c8b9f359757c9e2c8eba0d076386a527339657ecbe611dc extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "bundles/TwigBundle/Exception/exception_full.html.twig", 1);
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
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["exception"] ?? null), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? null), "html", null, true);
        echo ")
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"my-3\">
        <div class=\"exception-metadata\">
            <div class=\"container\">
                <h2 class=\"exception-http\">
                    HTTP ";
        // line 12
        echo twig_escape_filter($this->env, ($context["status_code"] ?? null), "html", null, true);
        echo " <small>";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? null), "html", null, true);
        echo "</small>
                </h2>
            </div>
        </div>

        <div class=\"exception-message-wrapper\">
            <div class=\"container\">
                <h1 class=\"break-long-words exception-message ";
        // line 19
        echo (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["exception"] ?? null), "message", array())) > 180)) ? ("long") : (""));
        echo "\">";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->formatFileFromText(nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["exception"] ?? null), "message", array()), "html", null, true)));
        // line 21
        echo "</h1>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "bundles/TwigBundle/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 21,  71 => 20,  68 => 19,  56 => 12,  50 => 8,  47 => 7,  36 => 4,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "bundles/TwigBundle/Exception/exception_full.html.twig", "/var/www/html/sgf/novosga/templates/bundles/TwigBundle/Exception/exception_full.html.twig");
    }
}
