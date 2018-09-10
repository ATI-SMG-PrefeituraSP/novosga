<?php

/* FOSOAuthServerBundle:Authorize:authorize.html.twig */
class __TwigTemplate_15001f4e896fb4436447c26c59f4a4a7cae2a520855cbd60e4223ec504e54765 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("FOSOAuthServerBundle::layout.html.twig", "FOSOAuthServerBundle:Authorize:authorize.html.twig", 1);
        $this->blocks = array(
            'fos_oauth_server_content' => array($this, 'block_fos_oauth_server_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSOAuthServerBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_fos_oauth_server_content($context, array $blocks = array())
    {
        // line 4
        $this->loadTemplate("FOSOAuthServerBundle:Authorize:authorize_content.html.twig", "FOSOAuthServerBundle:Authorize:authorize.html.twig", 4)->display($context);
    }

    public function getTemplateName()
    {
        return "FOSOAuthServerBundle:Authorize:authorize.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FOSOAuthServerBundle:Authorize:authorize.html.twig", "/var/www/html/sgf/novosga/vendor/novosga/oauth-server-bundle/Resources/views/Authorize/authorize.html.twig");
    }
}
