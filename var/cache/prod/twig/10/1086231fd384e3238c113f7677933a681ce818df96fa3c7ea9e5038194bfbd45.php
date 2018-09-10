<?php

/* FOSOAuthServerBundle:Authorize:authorize_content.html.twig */
class __TwigTemplate_f167636f9d55fbd1f5aa7b8f37a982987e16d2611a0a2ecc27fbcd9a95931c0f extends Twig_Template
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', array("method" => "POST", "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_oauth_server_authorize"), "label_attr" => array("class" => "fos_oauth_server_authorize")));
        echo "
    <input type=\"submit\" name=\"accepted\" value=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("authorize.accept", array(), "FOSOAuthServerBundle"), "html", null, true);
        echo "\" />
    <input type=\"submit\" name=\"rejected\" value=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("authorize.reject", array(), "FOSOAuthServerBundle"), "html", null, true);
        echo "\" />

    ";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "client_id", array()), 'row');
        echo "
    ";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "response_type", array()), 'row');
        echo "
    ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "redirect_uri", array()), 'row');
        echo "
    ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "state", array()), 'row');
        echo "
    ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "scope", array()), 'row');
        echo "
    ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "
</form>
";
    }

    public function getTemplateName()
    {
        return "FOSOAuthServerBundle:Authorize:authorize_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 10,  52 => 9,  48 => 8,  44 => 7,  40 => 6,  36 => 5,  31 => 3,  27 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FOSOAuthServerBundle:Authorize:authorize_content.html.twig", "/var/www/html/sgf/novosga/vendor/novosga/oauth-server-bundle/Resources/views/Authorize/authorize_content.html.twig");
    }
}
