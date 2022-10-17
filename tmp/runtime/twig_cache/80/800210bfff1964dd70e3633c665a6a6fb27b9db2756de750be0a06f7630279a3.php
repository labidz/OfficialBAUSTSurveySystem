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

/* __string_template__10bdbafe3b8c277c7256ba2c0f9477f296ca978f22486f4bd0a16cd5c1e7a211 */
class __TwigTemplate_6c3c3d056fca623ff6755e509af781087fcdbde2a3a94f894ed4a7348e4e81a6 extends \Twig\Template
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
        // line 17
        echo "
";
        // line 18
        echo LS_Twig_Extension::registerPackage("font-roboto");
        echo "
";
        // line 19
        echo LS_Twig_Extension::registerPackage("font-noto");
        echo "
";
        // line 20
        echo LS_Twig_Extension::registerPackage("font-news_cycle");
        echo "
";
        // line 21
        echo LS_Twig_Extension::registerPackage("font-ubuntu");
        echo "
";
        // line 22
        echo LS_Twig_Extension::registerPackage("font-lato");
        echo "
";
        // line 23
        echo LS_Twig_Extension::registerPackage("font-websafe");
        echo "

";
        // line 26
        $context["fontOptions"] = "";
        // line 27
        echo "
";
        // line 29
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", [])) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", [])))) {
            // line 30
            echo "    ";
            $context["fontOptions"] = ($this->sandbox->ensureToStringAllowed(($context["fontOptions"] ?? null)) . "<option value = \"inherit\" > Inherit</option>");
        }
        // line 32
        echo "
";
        // line 33
        ob_start(function () { return ''; });
        // line 34
        echo "    ";
        echo $this->sandbox->ensureToStringAllowed(($context["fontOptions"] ?? null));
        echo "
    <optgroup  label=\"";
        // line 35
        echo gT("Local Server");
        echo "\">
            <option class=\"font-roboto\"     value=\"roboto\"     data-font-package=\"roboto\"      >Roboto</option>
            <option class=\"font-news_cycle\" value=\"news_cycle\" data-font-package=\"news_cycle\"  >News Cycle</option>
            <option class=\"font-lato\"       value=\"lato\"       data-font-package=\"lato\"        >Lato</option>
            <option class=\"font-noto\"       value=\"noto\"       data-font-package=\"noto\"        >Noto Sans</option>
            <option class=\"font-ubuntu\"     value=\"ubuntu\"     data-font-package=\"ubuntu\"       >Ubuntu</option>
    </optgroup>

    <optgroup  label=\"";
        // line 43
        echo gT("User browser");
        echo "\">

      <option class=\"font-georgia         \" value=\"georgia\"         data-font-package=\"websafe\" >Georgia</option>
      <option class=\"font-palatino        \" value=\"palatino\"        data-font-package=\"websafe\" >Palatino Linotype</option>
      <option class=\"font-times_new_roman \" value=\"times_new_roman\" data-font-package=\"websafe\" >Times New Roman</option>
      <option class=\"font-arial           \" value=\"arial\"           data-font-package=\"websafe\" >Arial</option>
      <option class=\"font-arial_black     \" value=\"arial_black\"     data-font-package=\"websafe\" >Arial Black</option>
      <option class=\"font-comic_sans      \" value=\"comic_sans\"      data-font-package=\"websafe\" >Comic Sans</option>
      <option class=\"font-impact          \" value=\"impact\"          data-font-package=\"websafe\" >Impact</option>
      <option class=\"font-lucida_sans     \" value=\"lucida_sans\"     data-font-package=\"websafe\" >Lucida Sans</option>
      <option class=\"font-trebuchet       \" value=\"trebuchet\"       data-font-package=\"websafe\" >Trebuchet</option>
      <option class=\"font-courier         \" value=\"courier\"         data-font-package=\"websafe\" >Courier New</option>
      <option class=\"font-lucida_console  \" value=\"lucida_console\"  data-font-package=\"websafe\" >Lucida Console</option>
    </optgroup>
";
        $context["fontOptions"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 58
        echo "
<div class=\"container-fluid\" style=\"position:relative\">
    ";
        // line 61
        echo "    <div class=\"\" style=\"display:none;height:100%;width:100%;position:absolute;left:0;top:0;background:rgb(255,255,255);background:rgba(235,235,235,0.8);z-index:2000;\">
        <div style=\"position:absolute; left:49%;top:35%;\" class=\"text-center\">
            <i class=\"fa fa-spinner fa-pulse fa-3x fa-fw\"></i>
        </div>
    </div>
    <div class=\"row\">
        ";
        // line 68
        echo "        <form class='form action_update_options_string_form' action=''>

            ";
        // line 71
        echo "            ";
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", [])) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", [])))) {
            // line 72
            echo "                <div class='row' id=\"general_inherit_active\">
                    <div class='form-group row'>
                        <label for='simple_edit_options_general_inherit' class='control-label'>";
            // line 74
            echo gT("Inherit everything");
            echo "</label>
                        <div class='col-sm-12'>
                            <div class=\"btn-group\" data-toggle=\"buttons\">
                                <label class=\"btn btn-default\">
                                    <input id=\"general_inherit_on\" name='general_inherit' type='radio' value='on' class='selector_option_general_inherit ' data-id='simple_edit_options_general_inherit'/>
                                    ";
            // line 79
            echo gT("Yes");
            echo "
                                </label>
                                <label class=\"btn btn-default\">
                                    <input id=\"general_inherit_off\" name='general_inherit' type='radio' value='off' class='selector_option_general_inherit ' data-id='simple_edit_options_general_inherit'/>
                                    ";
            // line 83
            echo gT("No");
            echo "
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row action_hide_on_inherit\">
                    <hr/>
                </div>
            ";
        }
        // line 93
        echo "
            ";
        // line 95
        echo "            <div class='row action_hide_on_inherit'>

                ";
        // line 98
        echo "                <div class='col-sm-12 col-md-2'>
                    <div class='form-group row'>
                        <label for='simple_edit_options_container' class='control-label'> ";
        // line 100
        echo gT("Survey container");
        echo " </label>
                        <div class='col-sm-12'>
                            <div class=\"btn-group\" data-toggle=\"buttons\">
                                <label class=\"btn btn-default\">
                                    <input type='radio' name='container' value='on' class='selector_option_radio_field simple_edit_options_container ' data-id='container'/>
                                    ";
        // line 105
        echo gT("Yes");
        echo "
                                </label>
                                <label class=\"btn btn-default\">
                                    <input type='radio' name='container' value='off' class='selector_option_radio_field simple_edit_options_container ' data-id='container'/>
                                    ";
        // line 109
        echo gT("No");
        echo "
                                </label>
                                ";
        // line 112
        echo "                                ";
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", [])) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", [])))) {
            // line 113
            echo "                                    <label class=\"btn btn-default\">
                                        <input type='radio' name='container' value='inherit' class='selector_option_radio_field simple_edit_options_container ' data-id='container'/>
                                        ";
            // line 115
            echo gT("Inherit");
            echo "
                                    </label>
                                ";
        }
        // line 118
        echo "                            </div>
                        </div>
                    </div>
                </div>

                ";
        // line 124
        echo "                <div class='col-sm-12 col-md-2'>
                    <div class='form-group row'>
                        <label for='simple_edit_options_hideprivacyinfo' class='control-label'>";
        // line 126
        echo gT("Hide privacy info");
        echo "</label>
                        <div class='col-sm-12'>
                            <div class=\"btn-group\" data-toggle=\"buttons\">
                                <label class=\"btn btn-default\">
                                    <input type='radio' name='hideprivacyinfo' value='on' class='selector_option_radio_field simple_edit_options_hideprivacyinfo ' data-id='hideprivacyinfo'/>
                                    ";
        // line 131
        echo gT("Yes");
        echo "
                                </label>
                                <label class=\"btn btn-default\">
                                    <input type='radio' name='hideprivacyinfo' value='off' class='selector_option_radio_field simple_edit_options_hideprivacyinfo ' data-id='hideprivacyinfo'/>
                                    ";
        // line 135
        echo gT("No");
        echo "
                                </label>
                                ";
        // line 138
        echo "                                ";
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", [])) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", [])))) {
            // line 139
            echo "                                    <label class=\"btn btn-default\">
                                        <input type='radio' name='hideprivacyinfo' value='inherit' class='selector_option_radio_field simple_edit_options_hideprivacyinfo ' data-id='hideprivacyinfo'/>
                                        ";
            // line 141
            echo gT("Inherit");
            echo "
                                    </label>
                                ";
        }
        // line 144
        echo "                            </div>
                        </div>
                    </div>
                </div>

                ";
        // line 150
        echo "                <div class='col-sm-12 col-md-3'>
                    <div class='form-group row'>
                        <label for='simple_edit_options_showpopups' class='control-label' ";
        // line 152
        echo $this->sandbox->ensureToStringAllowed(($context["showpopups_disabled_qtip"] ?? null));
        echo ">";
        echo gT("Show popups");
        echo "</label>
                        <div class='col-sm-12'>
                            <div class=\"btn-group\" data-toggle=\"buttons\">
                                <label class=\"btn btn-default control-label\" ";
        // line 155
        echo $this->sandbox->ensureToStringAllowed(($context["showpopups_disabled"] ?? null));
        echo ">
                                        <input type='radio' name='showpopups' value='1' ";
        // line 156
        echo $this->sandbox->ensureToStringAllowed(($context["showpopups_disabled"] ?? null));
        echo " class='selector_option_radio_field simple_edit_options_showpopups ' data-id='showpopups'/>
                                        ";
        // line 157
        echo gT("Popup");
        echo "
                                    </label>
                                    <label class=\"btn btn-default\" ";
        // line 159
        echo $this->sandbox->ensureToStringAllowed(($context["showpopups_disabled"] ?? null));
        echo ">
                                        <input type='radio' name='showpopups' value='0' ";
        // line 160
        echo $this->sandbox->ensureToStringAllowed(($context["showpopups_disabled"] ?? null));
        echo " class='selector_option_radio_field simple_edit_options_showpopups ' data-id='showpopups'/>
                                        ";
        // line 161
        echo gT("On page");
        echo "
                                    </label>
                                    <label class=\"btn btn-default\" ";
        // line 163
        echo $this->sandbox->ensureToStringAllowed(($context["showpopups_disabled"] ?? null));
        echo ">
                                        <input type='radio' name='showpopups' value='-1' ";
        // line 164
        echo $this->sandbox->ensureToStringAllowed(($context["showpopups_disabled"] ?? null));
        echo " class='selector_option_radio_field simple_edit_options_showpopups ' data-id='showpopups'/>
                                        ";
        // line 165
        echo gT("Off");
        echo "
                                    </label>
                                    ";
        // line 168
        echo "                                    ";
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", [])) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", [])))) {
            // line 169
            echo "                                        <label class=\"btn btn-default\" ";
            echo $this->sandbox->ensureToStringAllowed(($context["showpopups_disabled"] ?? null));
            echo ">
                                            <input type='radio' name='showpopups' value='inherit' class='selector_option_radio_field simple_edit_options_showpopups ' data-id='showpopups'/>
                                            ";
            // line 171
            echo gT("Inherit");
            echo "
                                        </label>
                                    ";
        }
        // line 174
        echo "                            </div>
                        </div>
                    </div>
                </div>

                ";
        // line 180
        echo "                <div class='col-sm-12 col-md-3'>
                    <div class='form-group row'>
                        <label for='simple_edit_options_fixnumauto' class='control-label'>";
        // line 182
        echo gT("Fix automatically numeric value");
        echo "</label>
                        <div class='col-sm-12'>
                            <div class=\"btn-group\" data-toggle=\"buttons\">
                                <label class=\"btn btn-default\">
                                    ";
        // line 187
        echo "                                    <input type='radio' name='fixnumauto' value='enable' class='selector_option_radio_field simple_edit_options_fixnumauto' data-id='fixnumauto'/>
                                    ";
        // line 188
        echo gT("Yes");
        echo "
                                </label>
                                <label class=\"btn btn-default\">
                                    ";
        // line 192
        echo "                                    <input type='radio' name='fixnumauto' value='partial' class='selector_option_radio_field simple_edit_options_fixnumauto' data-id='fixnumauto'/>
                                    ";
        // line 193
        echo gT("For expression");
        echo "
                                </label>
                                <label class=\"btn btn-default\">
                                    ";
        // line 197
        echo "                                    <input type='radio' name='fixnumauto' value='disable' class='selector_option_radio_field simple_edit_options_fixnumauto' data-id='fixnumauto'/>
                                    ";
        // line 198
        echo gT("No");
        echo "
                                </label>
                                ";
        // line 200
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", [])) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", [])))) {
            // line 201
            echo "                                    <label class=\"btn btn-default\">
                                        <input type='radio' name='fixnumauto' value='inherit' class='selector_option_radio_field simple_edit_options_fixnumauto' data-id='fixnumauto'/>
                                        ";
            // line 203
            echo gT("Inherit");
            echo "
                                    </label>
                                ";
        } else {
            // line 206
            echo "                                    ";
            // line 207
            echo "                                    <label class=\"btn btn-default\">
                                        <input type='radio' name='fixnumauto' value='off' class='selector_option_radio_field simple_edit_options_fixnumauto' data-id='fixnumauto'/>
                                        ";
            // line 209
            echo gT("Default");
            echo "
                                    </label>
                                ";
        }
        // line 212
        echo "                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class='row action_hide_on_inherit'>
                <hr/>
            </div>

            <!-- Brand Logo -->
            <div class='row action_hide_on_inherit'>
                <div class='col-sm-12 col-md-4'>
                    ";
        // line 226
        echo "                    <div class='form-group row'>
                        <label for='simple_edit_options_brandlogo' class='control-label'>Brandlogo</label>
                        <div class='col-sm-12'>
                            <div class=\"btn-group\" data-toggle=\"buttons\">
                                <label class=\"btn btn-default\">
                                    <input type='radio' name='brandlogo' value='on' class='selector_option_radio_field ' data-id='simple_edit_options_brandlogo'/>
                                    ";
        // line 232
        echo gT("Yes");
        echo "
                                </label>
                                <label class=\"btn btn-default\">
                                    <input type='radio' name='brandlogo' value='off' class='selector_option_radio_field ' data-id='simple_edit_options_brandlogo'/>
                                    ";
        // line 236
        echo gT("No");
        echo "
                                </label>
                                ";
        // line 239
        echo "                                ";
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", [])) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", [])))) {
            // line 240
            echo "                                    <label class=\"btn btn-default\">
                                        <input type='radio' name='brandlogo' value='inherit' class='selector_option_radio_field ' data-id='simple_edit_options_brandlogo'/>
                                        ";
            // line 242
            echo gT("Inherit");
            echo "
                                    </label>
                                ";
        }
        // line 245
        echo "                            </div>
                        </div>
                    </div>
                </div>
                <div class='col-sm-8 col-md-6'>
                    ";
        // line 251
        echo "                    <div class='form-group row'>
                        <label for='simple_edit_options_brandlogofile' class='control-label'>Brandlogo file</label>
                        <div class='col-sm-12'>
                            <select class='form-control selector_option_value_field selector_radio_childfield selector_image_selector' data-parent=\"brandlogo\" id='simple_edit_options_brandlogofile' name='brandlogofile'>
                                ";
        // line 255
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", [])) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", [])))) {
            // line 256
            echo "                                    <option value=\"inherit\">Inherit</option>
                                ";
        }
        // line 258
        echo "                                ";
        $context["optgroup"] = "";
        // line 259
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["templateConfiguration"] ?? null), "imageFileList", []));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 260
            echo "                                ";
            if (($this->getAttribute($context["image"], "group", []) != ($context["optgroup"] ?? null))) {
                // line 261
                echo "                                ";
                if ((($context["optgroup"] ?? null) != "")) {
                    // line 262
                    echo "                                    </optgroup>
                                ";
                }
                // line 264
                echo "                                    <optgroup label=\"";
                echo $this->sandbox->ensureToStringAllowed($this->getAttribute($context["image"], "group", []));
                echo "\">
                                ";
                // line 265
                $context["optgroup"] = $this->getAttribute($context["image"], "group", []);
                // line 266
                echo "                                ";
            }
            // line 267
            echo "                                        <option data-lightbox-src=\"";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($context["image"], "preview", []));
            echo "\" value=\"";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($context["image"], "filepath", []));
            echo "\">";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($context["image"], "filename", []));
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 269
        echo "                                    </optgroup>
                            </select>
                        </div>
                    </div>
                </div>
                <div class='col-sm-4 col-md-2'>
                    <br/>
                    <button class=\"btn btn-default selector__open_lightbox\" data-target=\"#simple_edit_options_brandlogofile\"> ";
        // line 276
        echo gT("Preview image");
        echo "</button>
                </div>
            </div>

            <div class='row ls-space margin top-15 bottom-15 '>
                <hr/>
            </div>

            <div class='row'>
                <div class='col-sm-12'>
                    <div class='panel panel-default'>
                        <div class='panel-heading'>";
        // line 287
        echo gT("Fruity fonts");
        echo "</div>
                        <div class='panel-body'>
                            <div class='form-group row'>
                                <label for='simple_edit_font' class='control-label'>";
        // line 290
        echo gT("Select font:");
        echo "</label>
                                <div class='col-sm-12'>
                                    <select class='form-control selector_option_value_field' id='simple_edit_font' name='font' data-inheritvalue='";
        // line 292
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["oParentOptions"] ?? null), "packages_to_load", []));
        echo "'>
                                        ";
        // line 293
        echo $this->sandbox->ensureToStringAllowed(($context["fontOptions"] ?? null));
        echo "
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class='row hidden'>
                <div class='col-sm-12'>
                    <button class='btn btn-success col-md-2 col-sm-4 col-xs-6 action_update_options_string_button'>Save</button>
                </div>
            </div>
        </form>
    </div>

    <div class='row action_hide_on_inherit'>
        ";
        // line 311
        echo "        <div class=\"container-fluid ls-space margin bottom-15\">
            <div class=\"row ls-space margin bottom-15\">
                <div class=\"col-sm-6\">
                    ";
        // line 314
        echo sprintf(gT("Upload an image (maximum size: %d MB):"), (($this->getAttribute(($context["templateConfiguration"] ?? null), "maxFileSize", []) / 1024) / 1024));
        echo "
                </div>
                <div class=\"col-sm-6\">
                ";
        // line 317
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["C"] ?? null), "Html", []), "form", [0 => LS_Twig_Extension::createUrl("/admin/themes/sa/templateuploadimagefile"), 1 => "post", 2 => ["id" => "upload_frontend", "name" => "upload_frontend", "enctype" => "multipart/form-data"]], "method"));
        echo "
                    <span id=\"fileselector_frontend\">
                        <label class=\"btn btn-default col-xs-8\" for=\"upload_image_frontend\">
                            <input class=\"hidden\" id=\"upload_image_frontend\" name=\"upload_image_frontend\" type=\"file\">
                            <i class=\"fa fa-upload ls-space margin right-10\"></i>
                            ";
        // line 322
        echo gT("Upload");
        echo "
                        </label>
                    </span>
                        ";
        // line 325
        if ( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", []))) {
            // line 326
            echo "                            <input type='hidden' name='surveyid' value='";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", []));
            echo "' />
                        ";
        }
        // line 328
        echo "                        <input type='hidden' name='templatename' value='";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["templateConfiguration"] ?? null), "template_name", []));
        echo "' />
                        <input type='hidden' name='templateconfig' value='";
        // line 329
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["templateConfiguration"] ?? null), "id", []));
        echo "' />
                        <input type='hidden' name='action' value='templateuploadimagefile' />
                    </form>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"progress\">
                    <div id=\"upload_progress_frontend\" class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 0%;\">
                        <span class=\"sr-only\">0%</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" id=\"lightbox-modal\">
    <div class=\"modal-dialog modal-lg\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span></button>
                <h4 class=\"modal-title selector__title\"> </h4>
            </div>
            <div class=\"modal-body\">
                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <img class=\"selector__image img-responsive\" src=\"\" alt=\"title\"  />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__10bdbafe3b8c277c7256ba2c0f9477f296ca978f22486f4bd0a16cd5c1e7a211";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  594 => 329,  589 => 328,  583 => 326,  581 => 325,  575 => 322,  567 => 317,  561 => 314,  556 => 311,  536 => 293,  532 => 292,  527 => 290,  521 => 287,  507 => 276,  498 => 269,  485 => 267,  482 => 266,  480 => 265,  475 => 264,  471 => 262,  468 => 261,  465 => 260,  460 => 259,  457 => 258,  453 => 256,  451 => 255,  445 => 251,  438 => 245,  432 => 242,  428 => 240,  425 => 239,  420 => 236,  413 => 232,  405 => 226,  390 => 212,  384 => 209,  380 => 207,  378 => 206,  372 => 203,  368 => 201,  366 => 200,  361 => 198,  358 => 197,  352 => 193,  349 => 192,  343 => 188,  340 => 187,  333 => 182,  329 => 180,  322 => 174,  316 => 171,  310 => 169,  307 => 168,  302 => 165,  298 => 164,  294 => 163,  289 => 161,  285 => 160,  281 => 159,  276 => 157,  272 => 156,  268 => 155,  260 => 152,  256 => 150,  249 => 144,  243 => 141,  239 => 139,  236 => 138,  231 => 135,  224 => 131,  216 => 126,  212 => 124,  205 => 118,  199 => 115,  195 => 113,  192 => 112,  187 => 109,  180 => 105,  172 => 100,  168 => 98,  164 => 95,  161 => 93,  148 => 83,  141 => 79,  133 => 74,  129 => 72,  126 => 71,  122 => 68,  114 => 61,  110 => 58,  92 => 43,  81 => 35,  76 => 34,  74 => 33,  71 => 32,  67 => 30,  65 => 29,  62 => 27,  60 => 26,  55 => 23,  51 => 22,  47 => 21,  43 => 20,  39 => 19,  35 => 18,  32 => 17,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__10bdbafe3b8c277c7256ba2c0f9477f296ca978f22486f4bd0a16cd5c1e7a211", "");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 26, "if" => 29, "for" => 259];
        static $filters = [];
        static $functions = ["registerPackage" => 18, "gT" => 35, "sprintf" => 314, "createUrl" => 317];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                [],
                ['registerPackage', 'gT', 'sprintf', 'createUrl']
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
