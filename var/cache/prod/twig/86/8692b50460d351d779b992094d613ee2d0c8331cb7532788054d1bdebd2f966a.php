<?php

/* bootstrap_4_layout.html.twig */
class __TwigTemplate_accb3960e642f8b809e21f777ade5dbd55faa66a9bf10aea11dd35e95eed0316 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_base_layout.html.twig", "bootstrap_4_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_base_layout.html.twig".'" cannot be used as a trait.', 1, $this->source);
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'money_widget' => array($this, 'block_money_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'file_widget' => array($this, 'block_file_widget'),
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'widget_attributes' => array($this, 'block_widget_attributes'),
                'button_widget' => array($this, 'block_button_widget'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'form_label' => array($this, 'block_form_label'),
                'form_label_errors' => array($this, 'block_form_label_errors'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'form_errors' => array($this, 'block_form_errors'),
                'form_help' => array($this, 'block_form_help'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('money_widget', $context, $blocks);
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('date_widget', $context, $blocks);
        // line 42
        echo "
";
        // line 43
        $this->displayBlock('time_widget', $context, $blocks);
        // line 50
        echo "
";
        // line 51
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 107
        echo "
";
        // line 108
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 116
        echo "
";
        // line 117
        $this->displayBlock('file_widget', $context, $blocks);
        // line 130
        echo "
";
        // line 131
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 142
        $this->displayBlock('widget_attributes', $context, $blocks);
        // line 149
        $this->displayBlock('button_widget', $context, $blocks);
        // line 153
        echo "
";
        // line 154
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 168
        echo "
";
        // line 169
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 183
        echo "
";
        // line 184
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 195
        echo "
";
        // line 197
        echo "
";
        // line 198
        $this->displayBlock('form_label', $context, $blocks);
        // line 228
        echo "
";
        // line 229
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 266
        echo "
";
        // line 268
        echo "
";
        // line 269
        $this->displayBlock('form_row', $context, $blocks);
        // line 283
        echo "
";
        // line 285
        echo "
";
        // line 286
        $this->displayBlock('form_errors', $context, $blocks);
        // line 297
        echo "
";
        // line 299
        echo "
";
        // line 300
        $this->displayBlock('form_help', $context, $blocks);
    }

    // line 5
    public function block_money_widget($context, array $blocks = array())
    {
        // line 6
        $context["prepend"] =  !(is_string($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = ($context["money_pattern"] ?? null)) && is_string($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = "{{") && ('' === $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a || 0 === strpos($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5, $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a)));
        // line 7
        $context["append"] =  !(is_string($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 = ($context["money_pattern"] ?? null)) && is_string($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 = "}}") && ('' === $__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 || $__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 === substr($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57, -strlen($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9))));
        // line 8
        if ((($context["prepend"] ?? null) || ($context["append"] ?? null))) {
            // line 9
            echo "<div class=\"input-group";
            echo twig_escape_filter($this->env, (((isset($context["group_class"]) || array_key_exists("group_class", $context))) ? (_twig_default_filter(($context["group_class"] ?? null), "")) : ("")), "html", null, true);
            echo "\">";
            // line 10
            if (($context["prepend"] ?? null)) {
                // line 11
                echo "<div class=\"input-group-prepend\">
                    <span class=\"input-group-text\">";
                // line 12
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->encodeCurrency($this->env, ($context["money_pattern"] ?? null));
                echo "</span>
                </div>";
            }
            // line 15
            $this->displayBlock("form_widget_simple", $context, $blocks);
            // line 16
            if (($context["append"] ?? null)) {
                // line 17
                echo "<div class=\"input-group-append\">
                    <span class=\"input-group-text\">";
                // line 18
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->encodeCurrency($this->env, ($context["money_pattern"] ?? null));
                echo "</span>
                </div>";
            }
            // line 21
            echo "</div>";
        } else {
            // line 23
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
    }

    // line 27
    public function block_datetime_widget($context, array $blocks = array())
    {
        // line 28
        if (((($context["widget"] ?? null) != "single_text") &&  !($context["valid"] ?? null))) {
            // line 29
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 30
            $context["valid"] = true;
        }
        // line 32
        $this->displayParentBlock("datetime_widget", $context, $blocks);
    }

    // line 35
    public function block_date_widget($context, array $blocks = array())
    {
        // line 36
        if (((($context["widget"] ?? null) != "single_text") &&  !($context["valid"] ?? null))) {
            // line 37
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 38
            $context["valid"] = true;
        }
        // line 40
        $this->displayParentBlock("date_widget", $context, $blocks);
    }

    // line 43
    public function block_time_widget($context, array $blocks = array())
    {
        // line 44
        if (((($context["widget"] ?? null) != "single_text") &&  !($context["valid"] ?? null))) {
            // line 45
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 46
            $context["valid"] = true;
        }
        // line 48
        $this->displayParentBlock("time_widget", $context, $blocks);
    }

    // line 51
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        // line 52
        if (((($context["widget"] ?? null) != "single_text") &&  !($context["valid"] ?? null))) {
            // line 53
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 54
            $context["valid"] = true;
        }
        // line 56
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 57
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 59
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 60
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 61
            if (($context["with_years"] ?? null)) {
                // line 62
                echo "<div class=\"col-auto\">
                ";
                // line 63
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "years", array()), 'label');
                echo "
                ";
                // line 64
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "years", array()), 'widget');
                echo "
            </div>";
            }
            // line 67
            if (($context["with_months"] ?? null)) {
                // line 68
                echo "<div class=\"col-auto\">
                ";
                // line 69
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "months", array()), 'label');
                echo "
                ";
                // line 70
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "months", array()), 'widget');
                echo "
            </div>";
            }
            // line 73
            if (($context["with_weeks"] ?? null)) {
                // line 74
                echo "<div class=\"col-auto\">
                ";
                // line 75
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "weeks", array()), 'label');
                echo "
                ";
                // line 76
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "weeks", array()), 'widget');
                echo "
            </div>";
            }
            // line 79
            if (($context["with_days"] ?? null)) {
                // line 80
                echo "<div class=\"col-auto\">
                ";
                // line 81
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "days", array()), 'label');
                echo "
                ";
                // line 82
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "days", array()), 'widget');
                echo "
            </div>";
            }
            // line 85
            if (($context["with_hours"] ?? null)) {
                // line 86
                echo "<div class=\"col-auto\">
                ";
                // line 87
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "hours", array()), 'label');
                echo "
                ";
                // line 88
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "hours", array()), 'widget');
                echo "
            </div>";
            }
            // line 91
            if (($context["with_minutes"] ?? null)) {
                // line 92
                echo "<div class=\"col-auto\">
                ";
                // line 93
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "minutes", array()), 'label');
                echo "
                ";
                // line 94
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "minutes", array()), 'widget');
                echo "
            </div>";
            }
            // line 97
            if (($context["with_seconds"] ?? null)) {
                // line 98
                echo "<div class=\"col-auto\">
                ";
                // line 99
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "seconds", array()), 'label');
                echo "
                ";
                // line 100
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "seconds", array()), 'widget');
                echo "
            </div>";
            }
            // line 103
            if (($context["with_invert"] ?? null)) {
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "invert", array()), 'widget');
            }
            // line 104
            echo "</div>";
        }
    }

    // line 108
    public function block_percent_widget($context, array $blocks = array())
    {
        // line 109
        echo "<div class=\"input-group\">";
        // line 110
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 111
        echo "<div class=\"input-group-append\">
            <span class=\"input-group-text\">%</span>
        </div>
    </div>";
    }

    // line 117
    public function block_file_widget($context, array $blocks = array())
    {
        // line 118
        echo "<div class=\"form-group\">
        <";
        // line 119
        echo twig_escape_filter($this->env, (((isset($context["element"]) || array_key_exists("element", $context))) ? (_twig_default_filter(($context["element"] ?? null), "div")) : ("div")), "html", null, true);
        echo " class=\"custom-file\">";
        // line 120
        $context["type"] = (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter(($context["type"] ?? null), "file")) : ("file"));
        // line 121
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 122
        echo "<label for=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", array()), "id", array()), "html", null, true);
        echo "\" class=\"custom-file-label\">";
        // line 123
        if (twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "placeholder", array(), "any", true, true)) {
            // line 124
            echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? null) === false)) ? (twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "placeholder", array())) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "placeholder", array()), array(), ($context["translation_domain"] ?? null)))), "html", null, true);
        }
        // line 126
        echo "</label>
        </";
        // line 127
        echo twig_escape_filter($this->env, (((isset($context["element"]) || array_key_exists("element", $context))) ? (_twig_default_filter(($context["element"] ?? null), "div")) : ("div")), "html", null, true);
        echo ">
    </div>
";
    }

    // line 131
    public function block_form_widget_simple($context, array $blocks = array())
    {
        // line 132
        if (( !(isset($context["type"]) || array_key_exists("type", $context)) || (($context["type"] ?? null) != "hidden"))) {
            // line 133
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array()), "")) : ("")) . ((((((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter(($context["type"] ?? null), "")) : ("")) == "file")) ? (" custom-file-input") : (" form-control"))))));
        }
        // line 135
        if (((isset($context["type"]) || array_key_exists("type", $context)) && ((($context["type"] ?? null) == "range") || (($context["type"] ?? null) == "color")))) {
            // line 136
            echo "        ";
            // line 137
            $context["required"] = false;
        }
        // line 139
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
    }

    // line 142
    public function block_widget_attributes($context, array $blocks = array())
    {
        // line 143
        if ( !($context["valid"] ?? null)) {
            // line 144
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array()), "")) : ("")) . " is-invalid"))));
            // line 145
            echo "    ";
        }
        // line 146
        $this->displayParentBlock("widget_attributes", $context, $blocks);
    }

    // line 149
    public function block_button_widget($context, array $blocks = array())
    {
        // line 150
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array()), "btn-secondary")) : ("btn-secondary")) . " btn"))));
        // line 151
        $this->displayParentBlock("button_widget", $context, $blocks);
    }

    // line 154
    public function block_checkbox_widget($context, array $blocks = array())
    {
        // line 155
        $context["parent_label_class"] = (((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context))) ? (_twig_default_filter(($context["parent_label_class"] ?? null), ((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : (((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 156
        if (twig_in_filter("checkbox-custom", ($context["parent_label_class"] ?? null))) {
            // line 157
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array()), "")) : ("")) . " custom-control-input"))));
            // line 158
            echo "<div class=\"custom-control custom-checkbox";
            echo ((twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? null))) ? (" custom-control-inline") : (""));
            echo "\">";
            // line 159
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 160
            echo "</div>";
        } else {
            // line 162
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-check-input"))));
            // line 163
            echo "<div class=\"form-check";
            echo ((twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? null))) ? (" form-check-inline") : (""));
            echo "\">";
            // line 164
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 165
            echo "</div>";
        }
    }

    // line 169
    public function block_radio_widget($context, array $blocks = array())
    {
        // line 170
        $context["parent_label_class"] = (((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context))) ? (_twig_default_filter(($context["parent_label_class"] ?? null), ((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : (((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 171
        if (twig_in_filter("radio-custom", ($context["parent_label_class"] ?? null))) {
            // line 172
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array()), "")) : ("")) . " custom-control-input"))));
            // line 173
            echo "<div class=\"custom-control custom-radio";
            echo ((twig_in_filter("radio-inline", ($context["parent_label_class"] ?? null))) ? (" custom-control-inline") : (""));
            echo "\">";
            // line 174
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 175
            echo "</div>";
        } else {
            // line 177
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-check-input"))));
            // line 178
            echo "<div class=\"form-check";
            echo ((twig_in_filter("radio-inline", ($context["parent_label_class"] ?? null))) ? (" form-check-inline") : (""));
            echo "\">";
            // line 179
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 180
            echo "</div>";
        }
    }

    // line 184
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        // line 185
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 186
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 187
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => ((twig_get_attribute($this->env, $this->source,             // line 188
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>             // line 189
($context["choice_translation_domain"] ?? null), "valid" =>             // line 190
($context["valid"] ?? null)));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 193
        echo "</div>";
    }

    // line 198
    public function block_form_label($context, array $blocks = array())
    {
        // line 199
        if ( !(($context["label"] ?? null) === false)) {
            // line 200
            if (((isset($context["compound"]) || array_key_exists("compound", $context)) && ($context["compound"] ?? null))) {
                // line 201
                $context["element"] = "legend";
                // line 202
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " col-form-label"))));
            } else {
                // line 204
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("for" => ($context["id"] ?? null)));
            }
            // line 206
            if (($context["required"] ?? null)) {
                // line 207
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 209
            if (twig_test_empty(($context["label"] ?? null))) {
                // line 210
                if ( !twig_test_empty(($context["label_format"] ?? null))) {
                    // line 211
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? null), array("%name%" =>                     // line 212
($context["name"] ?? null), "%id%" =>                     // line 213
($context["id"] ?? null)));
                } else {
                    // line 216
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? null));
                }
            }
            // line 219
            echo "<";
            echo twig_escape_filter($this->env, (((isset($context["element"]) || array_key_exists("element", $context))) ? (_twig_default_filter(($context["element"] ?? null), "label")) : ("label")), "html", null, true);
            if (($context["label_attr"] ?? null)) {
                $__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217 = array("attr" => ($context["label_attr"] ?? null));
                if (!is_array($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217)) {
                    throw new Twig_Error_Runtime('Variables passed to the "with" tag must be a hash.', 219, $this->source);
                }
                $context['_parent'] = $context;
                $context = array_merge($context, $__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217);
                $this->displayBlock("attributes", $context, $blocks);
                $context = $context['_parent'];
            }
            echo ">";
            echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? null) === false)) ? (($context["label"] ?? null)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["label"] ?? null), array(), ($context["translation_domain"] ?? null)))), "html", null, true);
            $this->displayBlock('form_label_errors', $context, $blocks);
            echo "</";
            echo twig_escape_filter($this->env, (((isset($context["element"]) || array_key_exists("element", $context))) ? (_twig_default_filter(($context["element"] ?? null), "label")) : ("label")), "html", null, true);
            echo ">";
        } else {
            // line 221
            if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
                // line 222
                echo "<div id=\"";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "_errors\" class=\"mb-2\">";
                // line 223
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
                // line 224
                echo "</div>";
            }
        }
    }

    // line 219
    public function block_form_label_errors($context, array $blocks = array())
    {
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
    }

    // line 229
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        // line 231
        if ((isset($context["widget"]) || array_key_exists("widget", $context))) {
            // line 232
            $context["is_parent_custom"] = ((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context)) && (twig_in_filter("checkbox-custom", ($context["parent_label_class"] ?? null)) || twig_in_filter("radio-custom", ($context["parent_label_class"] ?? null))));
            // line 233
            echo "        ";
            $context["is_custom"] = (twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", array(), "any", true, true) && (twig_in_filter("checkbox-custom", twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", array())) || twig_in_filter("radio-custom", twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", array()))));
            // line 234
            if ((($context["is_parent_custom"] ?? null) || ($context["is_custom"] ?? null))) {
                // line 235
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " custom-control-label"))));
            } else {
                // line 237
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " form-check-label"))));
            }
            // line 239
            if ( !($context["compound"] ?? null)) {
                // line 240
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("for" => ($context["id"] ?? null)));
            }
            // line 242
            if (($context["required"] ?? null)) {
                // line 243
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 245
            if ((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context))) {
                // line 246
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("class" => twig_trim_filter(twig_replace_filter(((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["parent_label_class"] ?? null)), array("checkbox-inline" => "", "radio-inline" => "", "checkbox-custom" => "", "radio-custom" => "")))));
            }
            // line 248
            if (( !(($context["label"] ?? null) === false) && twig_test_empty(($context["label"] ?? null)))) {
                // line 249
                if ( !twig_test_empty(($context["label_format"] ?? null))) {
                    // line 250
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? null), array("%name%" =>                     // line 251
($context["name"] ?? null), "%id%" =>                     // line 252
($context["id"] ?? null)));
                } else {
                    // line 255
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? null));
                }
            }
            // line 259
            echo ($context["widget"] ?? null);
            echo "
        <label";
            // line 260
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? null));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 261
            echo twig_escape_filter($this->env, (( !(($context["label"] ?? null) === false)) ? ((((($context["translation_domain"] ?? null) === false)) ? (($context["label"] ?? null)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["label"] ?? null), array(), ($context["translation_domain"] ?? null))))) : ("")), "html", null, true);
            // line 262
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
            // line 263
            echo "</label>";
        }
    }

    // line 269
    public function block_form_row($context, array $blocks = array())
    {
        // line 270
        if (((isset($context["compound"]) || array_key_exists("compound", $context)) && ($context["compound"] ?? null))) {
            // line 271
            $context["element"] = "fieldset";
        }
        // line 273
        $context["widget_attr"] = array();
        // line 274
        if ( !twig_test_empty(($context["help"] ?? null))) {
            // line 275
            $context["widget_attr"] = array("attr" => array("aria-describedby" => (($context["id"] ?? null) . "_help")));
        }
        // line 277
        echo "<";
        echo twig_escape_filter($this->env, (((isset($context["element"]) || array_key_exists("element", $context))) ? (_twig_default_filter(($context["element"] ?? null), "div")) : ("div")), "html", null, true);
        echo " class=\"form-group\">";
        // line 278
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        // line 279
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ($context["widget_attr"] ?? null));
        // line 280
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'help');
        // line 281
        echo "</";
        echo twig_escape_filter($this->env, (((isset($context["element"]) || array_key_exists("element", $context))) ? (_twig_default_filter(($context["element"] ?? null), "div")) : ("div")), "html", null, true);
        echo ">";
    }

    // line 286
    public function block_form_errors($context, array $blocks = array())
    {
        // line 287
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 288
            echo "<span class=\"";
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? null))) {
                echo "invalid-feedback";
            } else {
                echo "alert alert-danger";
            }
            echo " d-block\">";
            // line 289
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 290
                echo "<span class=\"d-block\">
                    <span class=\"form-error-icon badge badge-danger text-uppercase\">";
                // line 291
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Error", array(), "validators"), "html", null, true);
                echo "</span> <span class=\"form-error-message\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", array()), "html", null, true);
                echo "</span>
                </span>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 294
            echo "</span>";
        }
    }

    // line 300
    public function block_form_help($context, array $blocks = array())
    {
        // line 301
        if ( !twig_test_empty(($context["help"] ?? null))) {
            // line 302
            echo "<small id=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "_help\" class=\"form-text text-muted\">";
            // line 303
            if ((($context["translation_domain"] ?? null) === false)) {
                // line 304
                echo twig_escape_filter($this->env, ($context["help"] ?? null), "html", null, true);
            } else {
                // line 306
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["help"] ?? null), array(), ($context["translation_domain"] ?? null)), "html", null, true);
            }
            // line 308
            echo "</small>";
        }
    }

    public function getTemplateName()
    {
        return "bootstrap_4_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  772 => 308,  769 => 306,  766 => 304,  764 => 303,  760 => 302,  758 => 301,  755 => 300,  750 => 294,  740 => 291,  737 => 290,  733 => 289,  725 => 288,  723 => 287,  720 => 286,  714 => 281,  712 => 280,  710 => 279,  708 => 278,  704 => 277,  701 => 275,  699 => 274,  697 => 273,  694 => 271,  692 => 270,  689 => 269,  684 => 263,  682 => 262,  680 => 261,  666 => 260,  662 => 259,  658 => 255,  655 => 252,  654 => 251,  653 => 250,  651 => 249,  649 => 248,  646 => 246,  644 => 245,  641 => 243,  639 => 242,  636 => 240,  634 => 239,  631 => 237,  628 => 235,  626 => 234,  623 => 233,  621 => 232,  619 => 231,  616 => 229,  610 => 219,  604 => 224,  602 => 223,  598 => 222,  596 => 221,  576 => 219,  572 => 216,  569 => 213,  568 => 212,  567 => 211,  565 => 210,  563 => 209,  560 => 207,  558 => 206,  555 => 204,  552 => 202,  550 => 201,  548 => 200,  546 => 199,  543 => 198,  539 => 193,  533 => 190,  532 => 189,  531 => 188,  530 => 187,  526 => 186,  522 => 185,  519 => 184,  514 => 180,  512 => 179,  508 => 178,  506 => 177,  503 => 175,  501 => 174,  497 => 173,  495 => 172,  493 => 171,  491 => 170,  488 => 169,  483 => 165,  481 => 164,  477 => 163,  475 => 162,  472 => 160,  470 => 159,  466 => 158,  464 => 157,  462 => 156,  460 => 155,  457 => 154,  453 => 151,  451 => 150,  448 => 149,  444 => 146,  441 => 145,  438 => 144,  436 => 143,  433 => 142,  429 => 139,  426 => 137,  424 => 136,  422 => 135,  419 => 133,  417 => 132,  414 => 131,  407 => 127,  404 => 126,  401 => 124,  399 => 123,  395 => 122,  393 => 121,  391 => 120,  388 => 119,  385 => 118,  382 => 117,  375 => 111,  373 => 110,  371 => 109,  368 => 108,  363 => 104,  359 => 103,  354 => 100,  350 => 99,  347 => 98,  345 => 97,  340 => 94,  336 => 93,  333 => 92,  331 => 91,  326 => 88,  322 => 87,  319 => 86,  317 => 85,  312 => 82,  308 => 81,  305 => 80,  303 => 79,  298 => 76,  294 => 75,  291 => 74,  289 => 73,  284 => 70,  280 => 69,  277 => 68,  275 => 67,  270 => 64,  266 => 63,  263 => 62,  261 => 61,  257 => 60,  255 => 59,  252 => 57,  250 => 56,  247 => 54,  245 => 53,  243 => 52,  240 => 51,  236 => 48,  233 => 46,  231 => 45,  229 => 44,  226 => 43,  222 => 40,  219 => 38,  217 => 37,  215 => 36,  212 => 35,  208 => 32,  205 => 30,  203 => 29,  201 => 28,  198 => 27,  193 => 23,  190 => 21,  185 => 18,  182 => 17,  180 => 16,  178 => 15,  173 => 12,  170 => 11,  168 => 10,  164 => 9,  162 => 8,  160 => 7,  158 => 6,  155 => 5,  151 => 300,  148 => 299,  145 => 297,  143 => 286,  140 => 285,  137 => 283,  135 => 269,  132 => 268,  129 => 266,  127 => 229,  124 => 228,  122 => 198,  119 => 197,  116 => 195,  114 => 184,  111 => 183,  109 => 169,  106 => 168,  104 => 154,  101 => 153,  99 => 149,  97 => 142,  95 => 131,  92 => 130,  90 => 117,  87 => 116,  85 => 108,  82 => 107,  80 => 51,  77 => 50,  75 => 43,  72 => 42,  70 => 35,  67 => 34,  65 => 27,  62 => 26,  60 => 5,  57 => 4,  54 => 2,  18 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "bootstrap_4_layout.html.twig", "/var/www/html/sgf/novosga/vendor/symfony/twig-bridge/Resources/views/Form/bootstrap_4_layout.html.twig");
    }
}
