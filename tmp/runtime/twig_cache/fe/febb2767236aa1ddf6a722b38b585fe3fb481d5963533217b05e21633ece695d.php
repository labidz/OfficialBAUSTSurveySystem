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

/* subquestionRow.twig */
class __TwigTemplate_9e79081be0e8fe124b6ce4e333342d39c353169a2f7d5b5dd5aa8c8842d754b1 extends \Twig\Template
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
        // line 16
        echo "
<!-- subquestion row -->
<tr id='row_";
        // line 18
        echo $this->sandbox->ensureToStringAllowed(($context["language"] ?? null));
        echo "_";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["subquestion"] ?? null), "qid", []));
        echo "_";
        echo $this->sandbox->ensureToStringAllowed(($context["scale_id"] ?? null));
        echo "' class=\"row-container\" data-common-id=\"";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["subquestion"] ?? null), "qid", []));
        echo "_";
        echo $this->sandbox->ensureToStringAllowed(($context["scale_id"] ?? null));
        echo "\">
    ";
        // line 20
        echo "    ";
        if ((($context["activated"] ?? null) == "Y")) {
            // line 21
            echo "        <!-- Move icon -->
        <td class=\"move-icon-disable\">
            &nbsp;
        </td>

        <!-- Code (title) -->
        <td class=\"code-title\" style=\"vertical-align: middle;\">
            <input
                type='text'
                class=\"code form-control input\"
                id='subquestions[";
            // line 31
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["subquestion"] ?? null), "qid", []));
            echo "][";
            echo $this->sandbox->ensureToStringAllowed(($context["scale_id"] ?? null));
            echo "][code]'
                name='subquestions[";
            // line 32
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["subquestion"] ?? null), "qid", []));
            echo "][";
            echo $this->sandbox->ensureToStringAllowed(($context["scale_id"] ?? null));
            echo "][code]'
                class='code code-title'
                value=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["subquestion"] ?? null), "title", [])), "html_attr");
            echo "\"
                required='required'
                maxlength=\"20\"
                ";
            // line 37
            if (($this->getAttribute($this->getAttribute(($context["question"] ?? null), "survey", []), "active", []) == "Y")) {
                // line 38
                echo "                readonly=\"readonly\"
                ";
            }
            // line 40
            echo "                onfocusout=\"LS.questionEditor.showSubquestionCodeUniqueError(this);\"
            />
        </td>

    ";
            // line 45
            echo "    ";
        } elseif (($context["first"] ?? null)) {
            // line 46
            echo "        ";
            $context["sPattern"] = (($this->getAttribute(($context["subquestion"] ?? null), "title", [])) ? ((("^([a-zA-Z0-9]*|" . $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["subquestion"] ?? null), "title", []))) . ")\$")) : ("^[a-zA-Z0-9]*\$"));
            // line 47
            echo "
        <!-- Move icon -->
        <td
          style=\"text-align: center;\"
        >
            <span
              class=\"fa fa-bars bigIcons move-icon\"
              role=\"button\"
              data-toggle=\"tooltip\"
              data-title=\"";
            // line 56
            echo gT("Drag to sort");
            echo "\"
            ></span>
        </td>

        <!-- Code (title) -->
        <td class=\"code-title\" style=\"vertical-align: middle;\">
            <!-- TODO: What is \"oldCode\"??? -->
            ";
            // line 63
            if (($context["oldCode"] ?? null)) {
                // line 64
                echo "                <input
                    type='hidden'
                    class='oldcode code-title'
                    maxlength=\"20\"
                    id='subquestions[";
                // line 68
                echo $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["subquestion"] ?? null), "qid", []));
                echo "][";
                echo $this->sandbox->ensureToStringAllowed(($context["scale_id"] ?? null));
                echo "][oldcode]'
                    name='subquestions[";
                // line 69
                echo $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["subquestion"] ?? null), "qid", []));
                echo "][";
                echo $this->sandbox->ensureToStringAllowed(($context["scale_id"] ?? null));
                echo "][oldcode]'
                    value=\"";
                // line 70
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["subquestion"] ?? null), "title", [])), "html_attr");
                echo "\"
                />
            ";
            }
            // line 73
            echo "
            <input
                type='text'
                class=\"code form-control input\"
                id='subquestions[";
            // line 77
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["subquestion"] ?? null), "qid", []));
            echo "][";
            echo $this->sandbox->ensureToStringAllowed(($context["scale_id"] ?? null));
            echo "][code]'
                name='subquestions[";
            // line 78
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["subquestion"] ?? null), "qid", []));
            echo "][";
            echo $this->sandbox->ensureToStringAllowed(($context["scale_id"] ?? null));
            echo "][code]'
                class='code code-title'
                value=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["subquestion"] ?? null), "title", [])), "html_attr");
            echo "\"
                required='required'
                maxlength=\"20\"
                ";
            // line 83
            if (($this->getAttribute($this->getAttribute(($context["question"] ?? null), "survey", []), "active", []) == "Y")) {
                // line 84
                echo "                readonly=\"readonly\"
                ";
            }
            // line 86
            echo "                onfocusout=\"LS.questionEditor.showSubquestionCodeUniqueError(this);\"
            />
        </td>

    ";
            // line 91
            echo "    ";
        } else {
            // line 92
            echo "        <!-- Move icon -->
        <td class=\"move-icon-disable\">
            &nbsp;
        </td>

        <!-- Code (title) -->
        <td  class=\"code-title\" style=\"vertical-align: middle;\">
            ";
            // line 99
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["subquestion"] ?? null), "title", [])), "html");
            echo "
        </td>
    ";
        }
        // line 102
        echo "
    <!-- Subquestion text -->
    <td  class=\"subquestion-text\" style=\"vertical-align: middle;\">
        <div class=\"input-group\">        
            <!-- NB: Class \"answer\" is used for both subquestions and answer options. -->
            <input
                type='text'
                size='20'
                class='answer form-control input'
                id='subquestions[";
        // line 111
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["subquestion"] ?? null), "qid", []));
        echo "][";
        echo $this->sandbox->ensureToStringAllowed(($context["scale_id"] ?? null));
        echo "][subquestionl10n][";
        echo $this->sandbox->ensureToStringAllowed(($context["language"] ?? null));
        echo "]'
                name='subquestions[";
        // line 112
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["subquestion"] ?? null), "qid", []));
        echo "][";
        echo $this->sandbox->ensureToStringAllowed(($context["scale_id"] ?? null));
        echo "][subquestionl10n][";
        echo $this->sandbox->ensureToStringAllowed(($context["language"] ?? null));
        echo "]'
                placeholder='";
        // line 113
        echo gT("Some example subquestion", "js");
        echo "'
                value=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["subquestionl10n"] ?? null), "question", [])), "html_attr");
        echo "\"
                data-contents-dir=\"";
        // line 115
        echo ((LS_Twig_Extension::getLanguageRTL($this->sandbox->ensureToStringAllowed(($context["language"] ?? null)))) ? ("rtl") : ("ltr"));
        echo "\"
                onkeypress=\" if(event.keyCode==13) { if (event && event.preventDefault) event.preventDefault(); document.getElementById('save-button').click(); return false;}\"
            />
            <span class=\"input-group-addon\">
                ";
        // line 119
        echo getEditor("editanswer", (((((("subquestions[" . $this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 121
($context["subquestion"] ?? null), "qid", []))) . "][") . $this->sandbox->ensureToStringAllowed(($context["scale_id"] ?? null))) . "][subquestionl10n][") . $this->sandbox->ensureToStringAllowed(($context["language"] ?? null))) . "]"), (((("[" . gT("Subquestion:", "js")) . "](") . $this->sandbox->ensureToStringAllowed(        // line 122
($context["language"] ?? null))) . ")"), $this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 123
($context["subquestion"] ?? null), "sid", [])), $this->sandbox->ensureToStringAllowed(        // line 124
($context["gid"] ?? null)), ((preg_match("/^\\d+\$/", $this->getAttribute(        // line 125
($context["subquestion"] ?? null), "qid", []))) ? ($this->getAttribute(($context["subquestion"] ?? null), "qid", [])) : ("")), "editanswer");
        // line 127
        echo "
            </span>
        </div>
    </td>

    ";
        // line 132
        $context["relevanceTooltip"] = ((($context["supportsRelevance"] ?? null)) ? (gT("Click to expand")) : (gT("Relevance is not currently supported for columns")));
        // line 133
        echo "
    <!-- Relevance equation -->
    ";
        // line 135
        if ((($context["first"] ?? null) && (($context["scale_id"] ?? null) == 0))) {
            // line 136
            echo "        <td class=\"relevance-equation\">
            <input
                data-toggle=\"tooltip\"
                data-title=\"";
            // line 139
            echo $this->sandbox->ensureToStringAllowed(($context["relevanceTooltip"] ?? null));
            echo "\"
                type='text'
                class='relevance form-control input'
                id='subquestions[";
            // line 142
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["subquestion"] ?? null), "qid", []));
            echo "][";
            echo $this->sandbox->ensureToStringAllowed(($context["scale_id"] ?? null));
            echo "][relevance]'
                name='subquestions[";
            // line 143
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["subquestion"] ?? null), "qid", []));
            echo "][";
            echo $this->sandbox->ensureToStringAllowed(($context["scale_id"] ?? null));
            echo "][relevance]'
                value=\"";
            // line 144
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["subquestion"] ?? null), "relevance", [])), "html_attr");
            echo "\"
                onkeypress=\" if(event.keyCode==13) { if (event && event.preventDefault) event.preventDefault(); document.getElementById('save-button').click(); return false;}\"
                ";
            // line 146
            echo ((($context["supportsRelevance"] ?? null)) ? ("") : ("readonly=\"readonly\""));
            echo "
            />
        </td>
    ";
        } else {
            // line 150
            echo "        <!-- TOOD: Why render and then hide? -->
        <span style=\"display: none\" class=\"relevance relevance-equation\">
            ";
            // line 153
            echo "        </span>
    ";
        }
        // line 155
        echo "
    <!-- Icons add/edit/delete -->
    <td style=\"vertical-align: middle; white-space: nowrap;\" class=\"subquestion-actions\">
        ";
        // line 158
        if (((($context["activated"] ?? null) != "Y") && ($context["first"] ?? null))) {
            // line 159
            echo "            <button class=\"btn btn-default btn-sm btnaddsubquestion\">
                <i
                    class=\"icon-add text-success\"
                    data-code=\"";
            // line 162
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["subquestion"] ?? null), "title", [])), "html_attr");
            echo "\"
                    data-toggle=\"tooltip\"
                    data-scale-id=\"";
            // line 164
            echo $this->sandbox->ensureToStringAllowed(($context["scale_id"] ?? null));
            echo "\"
                    data-placement=\"bottom\"
                    title=\"";
            // line 166
            echo gT("Insert a new subquestion after this one");
            echo "\"
                ></i>
            </button>
            <button class=\"btn btn-default btn-sm btndelsubquestion\">
                <i
                    class=\"fa fa-minus-circle text-danger\"
                    data-toggle=\"tooltip\"
                    data-placement=\"bottom\"
                    title=\"";
            // line 174
            echo gT("Delete this subquestion");
            echo "\"
                ></i>
            </button>
        ";
        }
        // line 178
        echo "    </td>
</tr>
";
    }

    public function getTemplateName()
    {
        return "subquestionRow.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  349 => 178,  342 => 174,  331 => 166,  326 => 164,  321 => 162,  316 => 159,  314 => 158,  309 => 155,  305 => 153,  301 => 150,  294 => 146,  289 => 144,  283 => 143,  277 => 142,  271 => 139,  266 => 136,  264 => 135,  260 => 133,  258 => 132,  251 => 127,  249 => 125,  248 => 124,  247 => 123,  246 => 122,  245 => 121,  244 => 119,  237 => 115,  233 => 114,  229 => 113,  221 => 112,  213 => 111,  202 => 102,  196 => 99,  187 => 92,  184 => 91,  178 => 86,  174 => 84,  172 => 83,  166 => 80,  159 => 78,  153 => 77,  147 => 73,  141 => 70,  135 => 69,  129 => 68,  123 => 64,  121 => 63,  111 => 56,  100 => 47,  97 => 46,  94 => 45,  88 => 40,  84 => 38,  82 => 37,  76 => 34,  69 => 32,  63 => 31,  51 => 21,  48 => 20,  36 => 18,  32 => 16,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "subquestionRow.twig", "/home/techinformation/public_html/application/views/questionAdministration/subquestionRow.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 20, "set" => 46];
        static $filters = ["escape" => 34];
        static $functions = ["gT" => 56, "getLanguageRTL" => 115, "getEditor" => 119];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                ['escape'],
                ['gT', 'getLanguageRTL', 'getEditor']
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
