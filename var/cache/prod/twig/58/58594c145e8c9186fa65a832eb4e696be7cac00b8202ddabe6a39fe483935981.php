<?php

/* security/login.html.twig */
class __TwigTemplate_c4729e8f671949396f37aa9897a99f5b783983bf91833a2ecb35212e98ca596a extends Twig_Template
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
        $context["logo"] = "images/novosga-login.png";
        // line 2
        echo "
<!DOCTYPE html>
<html lang=\"";
        // line 4
        echo twig_escape_filter($this->env, ($context["locale"] ?? null), "html", null, true);
        echo "\">
    <head>
        <meta charset=\"utf-8\" />
        <title>";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("login.title"), "html", null, true);
        echo "</title>
        <link rel=\"shortcut icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/favicon.png"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/login.css"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <div class=\"container\">
            <form id=\"login-form\" action=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login_check");
        echo "\" method=\"post\" class=\"form-signin\">
                <h2 id=\"logo\" class=\"form-signin-heading\">
                    <img alt=\"Novo SGA\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["logo"] ?? null)), "html", null, true);
        echo "\">
                </h2>
                ";
        // line 18
        if (($context["error"] ?? null)) {
            // line 19
            echo "                    <div class=\"alert alert-danger\">
                        ";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", array()), twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageData", array()), "security"), "html", null, true);
            echo "
                    </div>
                ";
        }
        // line 23
        echo "                <div id=\"login\">
                    <input type=\"text\" name=\"_username\" class=\"form-control\" placeholder=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.username"), "html", null, true);
        echo "\" autofocus value=\"";
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
        echo "\">
                    <input type=\"password\" name=\"_password\" class=\"form-control\" placeholder=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.password"), "html", null, true);
        echo "\">
                    <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("login.button.submit"), "html", null, true);
        echo "</button>
                </div>
            </form>
        </div>
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 26,  84 => 25,  78 => 24,  75 => 23,  69 => 20,  66 => 19,  64 => 18,  59 => 16,  54 => 14,  47 => 10,  43 => 9,  39 => 8,  35 => 7,  29 => 4,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "security/login.html.twig", "/var/www/html/sgf/novosga/templates/security/login.html.twig");
    }
}
