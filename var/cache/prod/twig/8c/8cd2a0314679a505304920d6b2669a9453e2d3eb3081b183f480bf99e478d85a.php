<?php

/* NovosgaAttendanceBundle::base.html.twig */
class __TwigTemplate_c9fa2df4eb5f5edee0c1669e538d0985702a056eef659232bd377e92dde3230b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "NovosgaAttendanceBundle::base.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title", array(), "NovosgaAttendanceBundle"), "html", null, true);
    }

    public function getTemplateName()
    {
        return "NovosgaAttendanceBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 6,  32 => 5,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "NovosgaAttendanceBundle::base.html.twig", "/var/www/html/sgf/novosga/modules/novosga/attendance-bundle/Resources/views/base.html.twig");
    }
}
