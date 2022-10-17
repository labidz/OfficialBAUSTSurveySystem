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

/* __string_template__4325d3b485f2e2c86de2bb99b9e46b5dbc6bc52deaaf2bbe4a6c373f4fa8366e */
class __TwigTemplate_908b9143a9ca1f4823614cef45bbb3070ac7db399b4015c9243386806c3e75e8 extends \Twig\Template
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
        echo "<input type='hidden' name='subquestions_sortorder' value='' />
<input type='hidden' id='subquestions_deletedqids' name='subquestions_deletedqids' value='' />

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
                echo "            ";
                $context["anscount"] = twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["subquestions"] ?? null)));
                // line 12
                echo "            ";
                // line 13
                echo "
            ";
                // line 14
                $context["position"] = 0;
                // line 15
                echo "            ";
                if ((($context["scalecount"] ?? null) > 1)) {
                    // line 16
                    echo "                ";
                    if (($context["scale_id"] == 0)) {
                        // line 17
                        echo "                    <div class='header ui-widget-header'>
                        <i>";
                        // line 18
                        echo gT("Y-Scale");
                        echo "</i>
                    </div>
                ";
                    } else {
                        // line 21
                        echo "                    <div class='header ui-widget-header'>
                        <i>";
                        // line 22
                        echo gT("X-Scale");
                        echo "</i>
                    </div>
                ";
                    }
                    // line 25
                    echo "            ";
                }
                // line 26
                echo "
            <!-- Subquestions table -->
            <!-- NB: Both questions and answer options uses class \"answertable\". -->
            <div class=\"subquestions-table-wrapper\" style=\"max-height: 414px;\">
                <table
                    class='answertable subquestions-table table table-responsive'
                    id='subquestions_";
                // line 32
                echo $this->sandbox->ensureToStringAllowed($context["lang"]);
                echo "_";
                echo $this->sandbox->ensureToStringAllowed($context["scale_id"]);
                echo "'
                    data-scaleid='";
                // line 33
                echo $this->sandbox->ensureToStringAllowed($context["scale_id"]);
                echo "'
                    data-input-data-id='add-subquestion-input-javascript-datas'
                >

                    <!-- Headers -->
                    <thead>
                        <tr>
                            <th></th>
                            <th class='col-md-1'>";
                // line 41
                echo gT("Code");
                echo "</th>
                            <th>
                                ";
                // line 43
                echo gT("Subquestion");
                echo "
                                <i class=\"fa fa-globe\" data-toggle=\"tooltip\" title=\"";
                // line 44
                echo gT("This setting is localized");
                echo "\"></i>
                            </th>
                            ";
                // line 46
                if (($context["first"] ?? null)) {
                    // line 47
                    echo "                                ";
                    if (($context["scale_id"] == 0)) {
                        // line 48
                        echo "                                    <th id='rel-eq-th' class='col-md-1'>
                                        ";
                        // line 49
                        echo gT("Relevance equation");
                        echo "
                                    </th>
                                ";
                    }
                    // line 52
                    echo "                                <th class=\"col-md-1\">
                                    ";
                    // line 53
                    echo gT("Action");
                    echo "
                                </th>
                            ";
                }
                // line 56
                echo "                        </tr>
                    </thead>

                    <!-- Body -->
                    <tbody>
                        ";
                // line 61
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["subquestions"] ?? null), $context["scale_id"], [], "array"));
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
                foreach ($context['_seq'] as $context["_key"] => $context["subquestion"]) {
                    // line 62
                    echo "                            <!-- Line tag -->
                            ";
                    // line 63
                    $this->loadTemplate("subquestionRow.twig", "__string_template__4325d3b485f2e2c86de2bb99b9e46b5dbc6bc52deaaf2bbe4a6c373f4fa8366e", 63)->display(twig_array_merge($context, ["position" =>                     // line 64
($context["position"] ?? null), "scale_id" =>                     // line 65
$context["scale_id"], "activated" =>                     // line 66
($context["activated"] ?? null), "first" =>                     // line 67
($context["first"] ?? null), "subquestion" =>                     // line 68
$context["subquestion"], "subquestionl10n" => $this->getAttribute($this->getAttribute(                    // line 69
$context["subquestion"], "questionl10ns", []), $context["lang"], [], "array"), "language" =>                     // line 70
$context["lang"], "oldCode" => true, "supportsRelevance" => ($this->getAttribute($this->getAttribute(                    // line 72
($context["question"] ?? null), "questionType", []), "code", []) != "H")]));
                    // line 74
                    echo "
                            ";
                    // line 75
                    $context["position"] = (($context["position"] ?? null) + 1);
                    // line 76
                    echo "
                        ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subquestion'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 78
                echo "                    </tbody>
                </table>
            </div>

            <div class=\"action-buttons\" style=\"padding-bottom: 10px;\">
                ";
                // line 83
                if ((($context["activated"] ?? null) == "Y")) {
                    // line 84
                    echo "                    ";
                    $context["disabled"] = "disabled=\"disabled\"";
                    // line 85
                    echo "                ";
                } else {
                    // line 86
                    echo "                    ";
                    $context["disabled"] = "";
                    // line 87
                    echo "                ";
                }
                // line 88
                echo "
                <button
                    ";
                // line 90
                echo $this->sandbox->ensureToStringAllowed(($context["disabled"] ?? null));
                echo "
                    data-scale-id=\"";
                // line 91
                echo $this->sandbox->ensureToStringAllowed($context["scale_id"]);
                echo "\"
                    class='btnlsbrowser btn btn-default'
                    type='button'
                    onclick=\"LS.questionEditor.showLabelSetPicker(event, 'subquestions');\"
                >
                    ";
                // line 96
                echo gT("Load label set");
                echo "
                </button>

                ";
                // line 99
                if (($context["hasLabelSetPermission"] ?? null)) {
                    // line 100
                    echo "                    <button
                        class='bthsaveaslabel btn btn-default'
                        id='bthsaveaslabel_";
                    // line 102
                    echo $this->sandbox->ensureToStringAllowed($context["scale_id"]);
                    echo "'
                        type='button'
                        onclick=\"LS.questionEditor.showLabelSetSaver(event, 'subquestions-table');\"
                        data-target=\"#saveaslabelModal\"
                    >
                        ";
                    // line 107
                    echo gT("Save label set");
                    echo "
                    </button>
                ";
                }
                // line 110
                echo "
                <button ";
                // line 111
                echo $this->sandbox->ensureToStringAllowed(($context["disabled"] ?? null));
                echo " id='btnquickadd_";
                echo $this->sandbox->ensureToStringAllowed($context["lang"]);
                echo "_";
                echo $this->sandbox->ensureToStringAllowed($context["scale_id"]);
                echo "' data-scale-id=\"";
                echo $this->sandbox->ensureToStringAllowed($context["scale_id"]);
                echo "\" class='btn btn-default btnquickadd pull-right' type='button' data-toggle=\"modal\" data-target=\"#quickaddModal\" data-scale-id=\"";
                echo $this->sandbox->ensureToStringAllowed($context["scale_id"]);
                echo "\">
                    ";
                // line 112
                echo gT("Quick add");
                echo "
                </button>
            </div>
            ";
                // line 115
                $context["position"] = sprintf("%05d", $this->sandbox->ensureToStringAllowed(($context["position"] ?? null)));
                // line 116
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
            // line 117
            echo "    </div>
    ";
            // line 118
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
        // line 120
        echo "
<!-- For javascript -->
<input
    type=\"hidden\"
    id=\"add-subquestion-input-javascript-datas\"
    data-url=\"";
        // line 125
        echo LS_Twig_Extension::createUrl("/questionAdministration/getSubquestionRowForAllLanguages/");
        echo "\"
    data-quickurl=\"";
        // line 126
        echo LS_Twig_Extension::createUrl("/questionAdministration/getSubquestionRowQuickAdd", ["surveyid" => $this->getAttribute(        // line 129
($context["question"] ?? null), "sid", []), "gid" => $this->getAttribute(        // line 130
($context["question"] ?? null), "gid", [])]);
        // line 132
        echo "\"
    data-assessmentvisible=\"";
        // line 133
        if ((($context["assessmentvisible"] ?? null) == true)) {
            echo "1";
        } else {
            echo "0";
        }
        echo "\"
    data-errormessage=\"An error occured while processing the ajax request.\"
    data-languages='";
        // line 135
        echo CJSON::encode($this->sandbox->ensureToStringAllowed(($context["allLanguages"] ?? null)));
        echo "'
    data-surveyid=\"";
        // line 136
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["question"] ?? null), "sid", []));
        echo "\"
    data-gid=\"";
        // line 137
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["question"] ?? null), "gid", []));
        echo "\"
    data-qid=\"";
        // line 138
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["question"] ?? null), "qid", []));
        echo "\"
    data-scale-id=\"";
        // line 139
        echo $this->sandbox->ensureToStringAllowed(($context["scale_id"] ?? null));
        echo "\" ";
        // line 140
        echo "/>
";
    }

    public function getTemplateName()
    {
        return "__string_template__4325d3b485f2e2c86de2bb99b9e46b5dbc6bc52deaaf2bbe4a6c373f4fa8366e";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  403 => 140,  400 => 139,  396 => 138,  392 => 137,  388 => 136,  384 => 135,  375 => 133,  372 => 132,  370 => 130,  369 => 129,  368 => 126,  364 => 125,  357 => 120,  343 => 118,  340 => 117,  326 => 116,  324 => 115,  318 => 112,  306 => 111,  303 => 110,  297 => 107,  289 => 102,  285 => 100,  283 => 99,  277 => 96,  269 => 91,  265 => 90,  261 => 88,  258 => 87,  255 => 86,  252 => 85,  249 => 84,  247 => 83,  240 => 78,  225 => 76,  223 => 75,  220 => 74,  218 => 72,  217 => 70,  216 => 69,  215 => 68,  214 => 67,  213 => 66,  212 => 65,  211 => 64,  210 => 63,  207 => 62,  190 => 61,  183 => 56,  177 => 53,  174 => 52,  168 => 49,  165 => 48,  162 => 47,  160 => 46,  155 => 44,  151 => 43,  146 => 41,  135 => 33,  129 => 32,  121 => 26,  118 => 25,  112 => 22,  109 => 21,  103 => 18,  100 => 17,  97 => 16,  94 => 15,  92 => 14,  89 => 13,  87 => 12,  84 => 11,  67 => 10,  62 => 9,  45 => 8,  41 => 6,  39 => 5,  37 => 4,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__4325d3b485f2e2c86de2bb99b9e46b5dbc6bc52deaaf2bbe4a6c373f4fa8366e", "");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 4, "for" => 8, "if" => 15, "include" => 63];
        static $filters = ["length" => 11, "gT" => 44];
        static $functions = ["range" => 10, "gT" => 18, "sprintf" => 115, "createUrl" => 125, "json_encode" => 135];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if', 'include'],
                ['length', 'gT'],
                ['range', 'gT', 'sprintf', 'createUrl', 'json_encode']
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
