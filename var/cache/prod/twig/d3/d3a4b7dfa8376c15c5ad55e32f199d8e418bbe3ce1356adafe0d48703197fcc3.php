<?php

/* FOSOAuthServerBundle::layout.html.twig */
class __TwigTemplate_debcdaf3a6d9ee93945216e866a670872c25c546e68bff5843aad601e5671cec extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'fos_oauth_server_content' => array($this, 'block_fos_oauth_server_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
    </head>
    <body>
        <div>
            ";
        // line 8
        $this->displayBlock('fos_oauth_server_content', $context, $blocks);
        // line 10
        echo "        </div>
    </body>
</html>
";
    }

    // line 8
    public function block_fos_oauth_server_content($context, array $blocks = array())
    {
        // line 9
        echo "            ";
    }

    public function getTemplateName()
    {
        return "FOSOAuthServerBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  45 => 9,  42 => 8,  35 => 10,  33 => 8,  24 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FOSOAuthServerBundle::layout.html.twig", "/var/www/html/sgf/novosga/vendor/novosga/oauth-server-bundle/Resources/views/layout.html.twig");
    }
}
