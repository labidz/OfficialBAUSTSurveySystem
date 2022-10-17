<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__fa09ebb4a6cd43977a0a40f8d92e5859e6cebd0f0d456357c48a000c0d467e3a */
class __TwigTemplate_d13ad111730511a6d746bb5da4b263ca98f34c8b642bf8da5aabe15375e9864c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<input type='hidden' name='answeroptions_sortorder' value='' />
<input type='hidden' id='answeroptions_deletedqids' name='answeroptions_deletedqids' value='' />

";
        // line 4
        $context["first"] = true;
        // line 5
        $context["scale_id"] = 0;
        // line 6
        echo "
<!-- Loop all language, and then hide all but the current selected one with JS. -->
";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["allLanguages"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 9
            echo "    <div class=\"lang-hide lang-";
            echo $this->sandbox->ensureToStringAllowed($context["lang"]);
            echo "\">
        ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (($context["scalecount"] ?? null) - 1)));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["scale_id"]) {
                // line 11
                echo "
            ";
                // line 12
                $context["position"] = 1;
                // line 13
                echo "            ";
                if ((($context["scalecount"] ?? null) > 1)) {
                    // line 14
                    echo "                <div class='header ui-widget-header' style='margin-top:5px;'>
                    <i>";
                    // line 15
                    echo sprintf(gT("Answer scale %s"), ($context["scale_id"] + 1));
                    echo "</i>
                </div>
            ";
                }
                // line 18
                echo "
            <!-- Answer options table -->
            <div class=\"answeroptions-table-wrapper\" style=\"max-height: 394px;\">
                <table
                    class='answertable answeroptions-table table table-responsive'
                    id='answeroptions_";
                // line 23
                echo $this->sandbox->ensureToStringAllowed($context["lang"]);
                echo "_";
                echo $this->sandbox->ensureToStringAllowed($context["scale_id"]);
                echo "'
                    data-scaleid='";
                // line 24
                echo $this->sandbox->ensureToStringAllowed($context["scale_id"]);
                echo "'
                    data-input-data-id='add-answer-option-input-javascript-datas'
                >

                    <!-- Headers -->
                    <thead>
                        <tr>
                            <th></th>
                            <th class='col-md-1'>";
                // line 32
                echo gT("Code");
                echo "</th>

                            ";
                // line 34
                if (($context["assessmentvisible"] ?? null)) {
                    // line 35
                    echo "                                <th class='col-md-1'>
                                    ";
                    // line 36
                    echo gT("Assessment value");
                    echo "
                                </th>
                            ";
                } else {
                    // line 39
                    echo "                                <th style='display:none;'>
                                    &nbsp;
                                </th>
                            ";
                }
                // line 43
                echo "
                            <th class='col-md-8'>
                                ";
                // line 45
                echo gT("Answer options");
                echo "
                                <i class=\"fa fa-globe\" data-toggle=\"tooltip\" title=\"";
                // line 46
                echo gT("This setting is localized");
                echo "\"></i>
                            </th>

                            <th class='col-md-1'>
                                ";
                // line 50
                if (($context["first"] ?? null)) {
                    // line 51
                    echo "                                    ";
                    echo gT("Actions");
                    echo "
                                ";
                }
                // line 53
                echo "                            </th>
                        </tr>
                    </thead>

                    <!-- Body -->
                    <tbody>
                        ";
                // line 59
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["answers"] ?? null), $context["scale_id"], [], "array"));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["answerOption"]) {
                    // line 60
                    echo "                            <!-- Line tag -->
                            ";
                    // line 61
                    $this->loadTemplate("answerOptionRow.twig", "__string_template__fa09ebb4a6cd43977a0a40f8d92e5859e6cebd0f0d456357c48a000c0d467e3a", 61)->display(twig_array_merge($context, ["activated" =>                     // line 62
($context["activated"] ?? null), "position" =>                     // line 63
($context["position"] ?? null), "first" =>                     // line 64
($context["first"] ?? null), "assessmentvisible" =>                     // line 65
($context["assessmentvisible"] ?? null), "scale_id" =>                     // line 66
$context["scale_id"], "question" =>                     // line 67
($context["question"] ?? null), "answerOption" =>                     // line 68
$context["answerOption"], "answerOptionl10n" => $this->getAttribute($this->getAttribute(                    // line 69
$context["answerOption"], "answerl10ns", []), $context["lang"], [], "array"), "oldCode" => true, "language" =>                     // line 71
$context["lang"]]));
                    // line 73
                    echo "
                            ";
                    // line 74
                    $context["position"] = (($context["position"] ?? null) + 1);
                    // line 75
                    echo "                        ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['answerOption'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 76
                echo "                    </tbody>
                </table>
            </div>

            <div class=\"action-buttons\" style=\"padding-bottom: 10px;\">
                ";
                // line 81
                if (($context["first"] ?? null)) {
                    // line 82
                    echo "                    <!-- TODO: Not used??? -->
                    <input type='hidden' id='answercount_";
                    // line 83
                    echo $this->sandbox->ensureToStringAllowed($context["scale_id"]);
                    echo "' name='answercount_";
                    echo $this->sandbox->ensureToStringAllowed($context["scale_id"]);
                    echo "' value='";
                    echo $this->sandbox->ensureToStringAllowed(($context["anscount"] ?? null));
                    echo "' />
                    ";
                    // line 84
                    $context["disabled"] = "";
                    // line 85
                    echo "                ";
                }
                // line 86
                echo "
                <button
                    ";
                // line 88
                echo $this->sandbox->ensureToStringAllowed(($context["disabled"] ?? null));
                echo "
                    data-scale-id=\"";
                // line 89
                echo $this->sandbox->ensureToStringAllowed($context["scale_id"]);
                echo "\"
                    class='btnlsbrowser btn btn-default'
                    type='button'
                    onclick=\"LS.questionEditor.showLabelSetPicker(event, 'answeroptions');\"
                >
                    ";
                // line 94
                echo gT("Load label set");
                echo "
                </button>

                ";
                // line 97
                if (($context["hasLabelSetPermission"] ?? null)) {
                    // line 98
                    echo "                    <button
                        class='bthsaveaslabel btn btn-default'
                        id='bthsaveaslabel_";
                    // line 100
                    echo $this->sandbox->ensureToStringAllowed($context["scale_id"]);
                    echo "'
                        type='button'
                        onclick=\"LS.questionEditor.showLabelSetSaver(event, 'answeroptions-table');\"
                        data-target=\"#saveaslabelModal\"
                    >
                        ";
                    // line 105
                    echo gT("Save label set");
                    echo "
                    </button>
                ";
                }
                // line 108
                echo "
                <button ";
                // line 109
                echo $this->sandbox->ensureToStringAllowed(($context["disabled"] ?? null));
                echo "  id='btnquickadd_";
                echo $this->sandbox->ensureToStringAllowed($context["lang"]);
                echo "_";
                echo $this->sandbox->ensureToStringAllowed($context["scale_id"]);
                echo "' data-scale-id=\"";
                echo $this->sandbox->ensureToStringAllowed($context["scale_id"]);
                echo "\" class='btn btn-default btnquickadd pull-right' type='button'  data-toggle=\"modal\" data-target=\"#quickaddModal\" data-scale-id=\"";
                echo $this->sandbox->ensureToStringAllowed($context["scale_id"]);
                echo "\">
                    ";
                // line 110
                echo gT("Quick add");
                echo "
                </button>
            </div>
            ";
                // line 113
                $context["position"] = sprintf("%05d", $this->sandbox->ensureToStringAllowed(($context["position"] ?? null)));
                // line 114
                echo "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['scale_id'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 115
            echo "    </div>
    ";
            // line 116
            $context["first"] = false;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        echo "
<!--   Modals   -->
";
        // line 120
        if ((($context["first"] ?? null) == false)) {
            echo " ";
            // line 121
            echo "    ";
            $this->loadTemplate("modals.twig", "__string_template__fa09ebb4a6cd43977a0a40f8d92e5859e6cebd0f0d456357c48a000c0d467e3a", 121)->display($context);
        }
        // line 123
        echo "
<!-- For javascript -->
<input
    type=\"hidden\"
    id=\"add-answer-option-input-javascript-datas\"
    data-url=\"";
        // line 128
        echo LS_Twig_Extension::createUrl("/questionAdministration/getAnswerOptionRowForAllLanguages/");
        echo "\"
    data-quickurl=\"";
        // line 129
        echo LS_Twig_Extension::createUrl("/questionAdministration/getAnswerOptionRowQuickAdd", ["surveyid" => $this->getAttribute(        // line 132
($context["question"] ?? null), "sid", []), "gid" => $this->getAttribute(        // line 133
($context["question"] ?? null), "gid", [])]);
        // line 135
        echo "\"
    data-assessmentvisible=\"";
        // line 136
        if ((($context["assessmentvisible"] ?? null) == true)) {
            echo "1";
        } else {
            echo "0";
        }
        echo "\"
    data-errormessage=\"An error occured while processing the ajax request.\"
    data-languages='";
        // line 138
        echo CJSON::encode($this->sandbox->ensureToStringAllowed(($context["allLanguages"] ?? null)));
        echo "'
    data-surveyid=\"";
        // line 139
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["question"] ?? null), "sid", []));
        echo "\"
    data-gid=\"";
        // line 140
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["question"] ?? null), "gid", []));
        echo "\"
    data-qid=\"";
        // line 141
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["question"] ?? null), "qid", []));
        echo "\"
    data-scale-id=\"";
        // line 142
        echo $this->sandbox->ensureToStringAllowed(($context["scale_id"] ?? null));
        echo "\" ";
        // line 143
        echo "/>
";
    }

    public function getTemplateName()
    {
        return "__string_template__fa09ebb4a6cd43977a0a40f8d92e5859e6cebd0f0d456357c48a000c0d467e3a";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  406 => 143,  403 => 142,  399 => 141,  395 => 140,  391 => 139,  387 => 138,  378 => 136,  375 => 135,  373 => 133,  372 => 132,  371 => 129,  367 => 128,  360 => 123,  356 => 121,  353 => 120,  349 => 118,  335 => 116,  332 => 115,  318 => 114,  316 => 113,  310 => 110,  298 => 109,  295 => 108,  289 => 105,  281 => 100,  277 => 98,  275 => 97,  269 => 94,  261 => 89,  257 => 88,  253 => 86,  250 => 85,  248 => 84,  240 => 83,  237 => 82,  235 => 81,  228 => 76,  214 => 75,  212 => 74,  209 => 73,  207 => 71,  206 => 69,  205 => 68,  204 => 67,  203 => 66,  202 => 65,  201 => 64,  200 => 63,  199 => 62,  198 => 61,  195 => 60,  178 => 59,  170 => 53,  164 => 51,  162 => 50,  155 => 46,  151 => 45,  147 => 43,  141 => 39,  135 => 36,  132 => 35,  130 => 34,  125 => 32,  114 => 24,  108 => 23,  101 => 18,  95 => 15,  92 => 14,  89 => 13,  87 => 12,  84 => 11,  67 => 10,  62 => 9,  45 => 8,  41 => 6,  39 => 5,  37 => 4,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__fa09ebb4a6cd43977a0a40f8d92e5859e6cebd0f0d456357c48a000c0d467e3a", "");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 4, "for" => 8, "if" => 13, "include" => 61];
        static $filters = ["gT" => 46];
        static $functions = ["range" => 10, "sprintf" => 15, "gT" => 15, "createUrl" => 128, "json_encode" => 138];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if', 'include'],
                ['gT'],
                ['range', 'sprintf', 'gT', 'createUrl', 'json_encode']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
