<?php

/* NovosgaReportsBundle:relatorios:lotacoes.html.twig */
class __TwigTemplate_40e5da3a1334198a064bef3f0a9d80f3a56143239e27fe4a967172ba2d5c674e extends Twig_Template
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
        // line 2
        echo "
<div class=\"header\">
    <h2>";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["relatorio"] ?? null), "dados", array()), "unidade", array()), "html", null, true);
        echo "</h2>
</div>
<table class=\"table table-bordered table-striped\">
    <thead class=\"thead-light\">
        <tr>
            <th>";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Usuário", array(), "NovosgaReportsBundle");
        echo "</th>
            <th>";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Nome", array(), "NovosgaReportsBundle");
        echo "</th>
            <th>";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Perfil", array(), "NovosgaReportsBundle");
        echo "</th>
            <th>";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Serviços", array(), "NovosgaReportsBundle");
        echo "</th>
            <th>";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Situação", array(), "NovosgaReportsBundle");
        echo "</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["relatorio"] ?? null), "dados", array()), "lotacoes", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["lotacao"]) {
            // line 18
            echo "            <tr>
                <td class=\"strong\">";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["lotacao"], "usuario", array()), "login", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["lotacao"], "usuario", array()), "nomeCompleto", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["lotacao"], "perfil", array()), "nome", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["relatorio"] ?? null), "dados", array()), "servicos", array())) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5[twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["lotacao"], "usuario", array()), "id", array())] ?? null) : null));
            foreach ($context['_seq'] as $context["_key"] => $context["su"]) {
                // line 25
                echo "                            <li>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["su"], "servico", array()), "nome", array()), "html", null, true);
                echo "</li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['su'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "                    </ul>
                </td>
                <td class=\"w75 center\">
                    ";
            // line 30
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["lotacao"], "usuario", array()), "ativo", array())) {
                // line 31
                echo "                        <span class=\"status-active\">";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Ativo", array(), "NovosgaReportsBundle");
                echo "</span>
                    ";
            } else {
                // line 33
                echo "                        <span class=\"status-inactive\">";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Inativo", array(), "NovosgaReportsBundle");
                echo "</span>
                    ";
            }
            // line 35
            echo "                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lotacao'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "    </tbody>
</table>";
    }

    public function getTemplateName()
    {
        return "NovosgaReportsBundle:relatorios:lotacoes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 38,  111 => 35,  105 => 33,  99 => 31,  97 => 30,  92 => 27,  83 => 25,  79 => 24,  73 => 21,  69 => 20,  65 => 19,  62 => 18,  58 => 17,  51 => 13,  47 => 12,  43 => 11,  39 => 10,  35 => 9,  27 => 4,  23 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "NovosgaReportsBundle:relatorios:lotacoes.html.twig", "/var/www/html/sgf/novosga/modules/novosga/reports-bundle/Resources/views/relatorios/lotacoes.html.twig");
    }
}
