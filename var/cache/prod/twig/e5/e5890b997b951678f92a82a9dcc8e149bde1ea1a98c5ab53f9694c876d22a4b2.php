<?php

/* NovosgaReportsBundle:default:index.html.twig */
class __TwigTemplate_5f26ba8c2f99605d6c5093e42c28dbc3d6713bf3aa2b8aa330bb3513a7902549 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("@NovosgaReports/base.html.twig", "NovosgaReportsBundle:default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@NovosgaReports/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"row\">
        <div class=\"col-sm-12\">
            <h1>
                <i class=\"fa fa-desktop\" aria-hidden=\"true\"></i>
                ";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title", array(), "NovosgaReportsBundle"), "html", null, true);
        echo "
                <small>
                    ";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("subtitle", array(), "NovosgaReportsBundle"), "html", null, true);
        echo "
                </small>
            </h1>
        </div>
    </div>

    <hr>
    
    <ul class=\"nav nav-tabs\">
        <li class=\"nav-item\">
            <a href=\"#tab-graficos\" data-toggle=\"tab\" class=\"nav-link active\">
                ";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Gráficos", array(), "NovosgaReportsBundle");
        // line 24
        echo "            </a>
        </li>
        <li class=\"nav-item\">
            <a href=\"#tab-relatorios\" data-toggle=\"tab\" class=\"nav-link\">
                ";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Relatórios", array(), "NovosgaReportsBundle");
        // line 29
        echo "            </a>
        </li>
    </ul>
    <div id=\"tabs\" class=\"tab-content\">
        <div id=\"tab-graficos\" class=\"tab-pane active\">
            ";
        // line 34
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["chartForm"] ?? null), 'form_start', array("attr" => array("onsubmit" => "App.Estatisticas.Grafico.gerar(this); return false")));
        echo "
                <div class=\"row\">
                    <div class=\"col-lg-3 col-md-4\">
                        
                        ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["chartForm"] ?? null), "chart", array()), 'row', array("label" => "Gráfico"));
        echo "

                        ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["chartForm"] ?? null), "startDate", array()), 'row', array("label" => "Data inicial", "attr" => array("class" => "datepicker")));
        echo "

                        ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["chartForm"] ?? null), "endDate", array()), 'row', array("label" => "Data final", "attr" => array("class" => "datepicker")));
        echo "
                        
                        <button type=\"submit\" class=\"btn btn-primary\">
                            ";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Gerar gráfico", array(), "NovosgaReportsBundle");
        // line 46
        echo "                        </button>
                    </div>
                    <div class=\"col-lg-8 col-md-8 ml-auto\">
                        <div id=\"chart-result\">
                        </div>
                    </div>
                </div>
            ";
        // line 53
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["chartForm"] ?? null), 'form_end');
        echo "
        </div>
        <div id=\"tab-relatorios\" class=\"tab-pane\">
            ";
        // line 56
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["reportForm"] ?? null), 'form_start', array("attr" => array("onsubmit" => "")));
        echo "
            
                ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["reportForm"] ?? null), "report", array()), 'row', array("label" => "Relatório", "attr" => array("onchange" => "App.Estatisticas.options('#tab-relatorios')")));
        echo "

                <div class=\"option date date-range\" style=\"display:none\">
                    ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["reportForm"] ?? null), "startDate", array()), 'row', array("label" => "Data inicial", "attr" => array("class" => "datepicker")));
        echo "
                </div>

                <div class=\"option date date-range\" style=\"display:none\">
                    ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["reportForm"] ?? null), "endDate", array()), 'row', array("label" => "Data final", "attr" => array("class" => "datepicker")));
        echo "
                </div>
                
                <button type=\"submit\" class=\"btn btn-primary\">
                    ";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Gerar relatório", array(), "NovosgaReportsBundle");
        // line 70
        echo "                </button>
            ";
        // line 71
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["chartForm"] ?? null), 'form_end');
        echo "
        </div>
    </div>
";
    }

    // line 76
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 77
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/novosgareports/css/style.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/novosgareports/css/bootstrap-datepicker.standalone.min.css"), "html", null, true);
        echo "\">
";
    }

    // line 82
    public function block_javascripts($context, array $blocks = array())
    {
        // line 83
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/novosgareports/js/Chart.bundle.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/novosgareports/js/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/novosgareports/js/bootstrap-datepicker.pt-BR.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/novosgareports/js/script.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        \$(\".datepicker\" ).datepicker({
            language: 'pt-BR',
            format: '";
        // line 91
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("dd/mm/yyyy", array(), "NovosgaReportsBundle");
        echo "'
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "NovosgaReportsBundle:default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 91,  195 => 87,  191 => 86,  187 => 85,  183 => 84,  178 => 83,  175 => 82,  169 => 79,  165 => 78,  160 => 77,  157 => 76,  149 => 71,  146 => 70,  144 => 69,  137 => 65,  130 => 61,  124 => 58,  119 => 56,  113 => 53,  104 => 46,  102 => 45,  96 => 42,  91 => 40,  86 => 38,  79 => 34,  72 => 29,  70 => 28,  64 => 24,  62 => 23,  48 => 12,  43 => 10,  37 => 6,  34 => 5,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "NovosgaReportsBundle:default:index.html.twig", "/var/www/html/sgf/novosga/modules/novosga/reports-bundle/Resources/views/default/index.html.twig");
    }
}
