<?php

/* attachment.html */
class __TwigTemplate_e47e6589ad0c1306e18af3d582755cec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "_file"));
        foreach ($context['_seq'] as $context["_key"] => $context["_file"]) {
            // line 3
            echo "\t";
            if ($this->getAttribute((isset($context["_file"]) ? $context["_file"] : null), "S_DENIED")) {
                // line 4
                echo "\t<p>[";
                echo $this->getAttribute((isset($context["_file"]) ? $context["_file"] : null), "DENIED_MESSAGE");
                echo "]</p>
\t";
            } else {
                // line 6
                echo "
\t\t";
                // line 7
                if ($this->getAttribute((isset($context["_file"]) ? $context["_file"] : null), "S_THUMBNAIL")) {
                    // line 8
                    echo "\t\t<dl class=\"thumbnail\">
\t\t\t<dt><a href=\"";
                    // line 9
                    echo $this->getAttribute((isset($context["_file"]) ? $context["_file"] : null), "U_DOWNLOAD_LINK");
                    echo "\"><img src=\"";
                    echo $this->getAttribute((isset($context["_file"]) ? $context["_file"] : null), "THUMB_IMAGE");
                    echo "\" class=\"postimage\" alt=\"";
                    echo $this->getAttribute((isset($context["_file"]) ? $context["_file"] : null), "DOWNLOAD_NAME");
                    echo "\" title=\"";
                    echo $this->getAttribute((isset($context["_file"]) ? $context["_file"] : null), "DOWNLOAD_NAME");
                    echo " (";
                    echo $this->getAttribute((isset($context["_file"]) ? $context["_file"] : null), "FILESIZE");
                    echo " ";
                    echo $this->getAttribute((isset($context["_file"]) ? $context["_file"] : null), "SIZE_LANG");
                    echo ") ";
                    echo $this->getAttribute((isset($context["_file"]) ? $context["_file"] : null), "L_DOWNLOAD_COUNT");
                    echo "\" /></a></dt>
\t\t\t";
                    // line 10
                    if ($this->getAttribute((isset($context["_file"]) ? $context["_file"] : null), "COMMENT")) {
                        echo "<dd> ";
                        echo $this->getAttribute((isset($context["_file"]) ? $context["_file"] : null), "COMMENT");
                        echo "</dd>";
                    }
                    // line 11
                    echo "\t\t</dl>
\t\t";
                }
                // line 13
                echo "

\t\t";
                // line 15
                if ($this->getAttribute((isset($context["_file"]) ? $context["_file"] : null), "S_IMAGE")) {
                    // line 16
                    echo "\t\t<dl class=\"file\">
\t\t\t<dt class=\"attach-image\"><img src=\"";
                    // line 17
                    echo $this->getAttribute((isset($context["_file"]) ? $context["_file"] : null), "U_INLINE_LINK");
                    echo "\" class=\"postimage\" alt=\"";
                    echo $this->getAttribute((isset($context["_file"]) ? $context["_file"] : null), "DOWNLOAD_NAME");
                    echo "\" onclick=\"viewableArea(this);\" /></dt>
\t\t\t";
                    // line 18
                    if ($this->getAttribute((isset($context["_file"]) ? $context["_file"] : null), "COMMENT")) {
                        echo "<dd><em>";
                        echo $this->getAttribute((isset($context["_file"]) ? $context["_file"] : null), "COMMENT");
                        echo "</em></dd>";
                    }
                    // line 19
                    echo "\t\t\t<dd>";
                    echo $this->getAttribute((isset($context["_file"]) ? $context["_file"] : null), "DOWNLOAD_NAME");
                    echo " (";
                    echo $this->getAttribute((isset($context["_file"]) ? $context["_file"] : null), "FILESIZE");
                    echo " ";
                    echo $this->getAttribute((isset($context["_file"]) ? $context["_file"] : null), "SIZE_LANG");
                    echo ") ";
                    echo $this->getAttribute((isset($context["_file"]) ? $context["_file"] : null), "L_DOWNLOAD_COUNT");
                    echo "</dd>
\t\t</dl>
\t\t";
                }
                // line 22
                echo "
\t\t";
                // line 23
                if ($this->getAttribute((isset($context["_file"]) ? $context["_file"] : null), "S_FILE")) {
                    // line 24
                    echo "\t\t<dl class=\"file\">
\t\t\t<dt>";
                    // line 25
                    if ($this->getAttribute((isset($context["_file"]) ? $context["_file"] : null), "UPLOAD_ICON")) {
                        echo $this->getAttribute((isset($context["_file"]) ? $context["_file"] : null), "UPLOAD_ICON");
                        echo " ";
                    }
                    echo "<a class=\"postlink\" href=\"";
                    echo $this->getAttribute((isset($context["_file"]) ? $context["_file"] : null), "U_DOWNLOAD_LINK");
                    echo "\">";
                    echo $this->getAttribute((isset($context["_file"]) ? $context["_file"] : null), "DOWNLOAD_NAME");
                    echo "</a></dt>
\t\t\t";
                    // line 26
                    if ($this->getAttribute((isset($context["_file"]) ? $context["_file"] : null), "COMMENT")) {
                        echo "<dd><em>";
                        echo $this->getAttribute((isset($context["_file"]) ? $context["_file"] : null), "COMMENT");
                        echo "</em></dd>";
                    }
                    // line 27
                    echo "\t\t\t<dd>(";
                    echo $this->getAttribute((isset($context["_file"]) ? $context["_file"] : null), "FILESIZE");
                    echo " ";
                    echo $this->getAttribute((isset($context["_file"]) ? $context["_file"] : null), "SIZE_LANG");
                    echo ") ";
                    echo $this->getAttribute((isset($context["_file"]) ? $context["_file"] : null), "L_DOWNLOAD_COUNT");
                    echo "</dd>
\t\t</dl>
\t\t";
                }
                // line 30
                echo "


\t\t";
                // line 33
                if ($this->getAttribute((isset($context["_file"]) ? $context["_file"] : null), "S_WM_FILE")) {
                    // line 34
                    echo "\t\t\t<!-- method used here from http://alistapart.com/articles/byebyeembed / autosizing seems to not work always, this will not fix -->
\t\t\t<object width=\"320\" height=\"285\" classid=\"CLSID:6BF52A52-394A-11d3-B153-00C04F79FAA6\" id=\"wmstream_";
                    // line 35
                    echo $this->getAttribute((isset($context["_file"]) ? $context["_file"] : null), "ATTACH_ID");
                    echo "\">
\t\t\t\t<param name=\"url\" value=\"";
                    // line 36
                    echo $this->getAttribute((isset($context["_file"]) ? $context["_file"] : null), "U_DOWNLOAD_LINK");
                    echo "\" />
\t\t\t\t<param name=\"showcontrols\" value=\"1\" />
\t\t\t\t<param name=\"showdisplay\" value=\"0\" />
\t\t\t\t<param name=\"showstatusbar\" value=\"0\" />
\t\t\t\t<param name=\"autosize\" value=\"1\" />
\t\t\t\t<param name=\"autostart\" value=\"0\" />
\t\t\t\t<param name=\"visible\" value=\"1\" />
\t\t\t\t<param name=\"animationstart\" value=\"0\" />
\t\t\t\t<param name=\"loop\" value=\"0\" />
\t\t\t\t<param name=\"src\" value=\"";
                    // line 45
                    echo $this->getAttribute((isset($context["_file"]) ? $context["_file"] : null), "U_DOWNLOAD_LINK");
                    echo "\" />
\t\t\t\t<!--[if !IE]>-->
\t\t\t\t\t<object width=\"320\" height=\"285\" type=\"video/x-ms-wmv\" data=\"";
                    // line 47
                    echo $this->getAttribute((isset($context["_file"]) ? $context["_file"] : null), "U_DOWNLOAD_LINK");
                    echo "\">
\t\t\t\t\t\t<param name=\"src\" value=\"";
                    // line 48
                    echo $this->getAttribute((isset($context["_file"]) ? $context["_file"] : null), "U_DOWNLOAD_LINK");
                    echo "\" />
\t\t\t\t\t\t<param name=\"controller\" value=\"1\" />
\t\t\t\t\t\t<param name=\"showcontrols\" value=\"1\" />
\t\t\t\t\t\t<param name=\"showdisplay\" value=\"0\" />
\t\t\t\t\t\t<param name=\"showstatusbar\" value=\"0\" />
\t\t\t\t\t\t<param name=\"autosize\" value=\"1\" />
\t\t\t\t\t\t<param name=\"autostart\" value=\"0\" />
\t\t\t\t\t\t<param name=\"visible\" value=\"1\" />
\t\t\t\t\t\t<param name=\"animationstart\" value=\"0\" />
\t\t\t\t\t\t<param name=\"loop\" value=\"0\" />
\t\t\t\t\t</object>
\t\t\t\t<!--<![endif]-->
\t\t\t</object>

\t\t";
                } elseif ($this->getAttribute((isset($context["_file"]) ? $context["_file"] : null), "S_FLASH_FILE")) {
                    // line 63
                    echo "\t\t\t<object classid=\"clsid:D27CDB6E-AE6D-11CF-96B8-444553540000\" codebase=\"http://active.macromedia.com/flash2/cabs/swflash.cab#version=5,0,0,0\" width=\"";
                    echo $this->getAttribute((isset($context["_file"]) ? $context["_file"] : null), "WIDTH");
                    echo "\" height=\"";
                    echo $this->getAttribute((isset($context["_file"]) ? $context["_file"] : null), "HEIGHT");
                    echo "\">
\t\t\t\t<param name=\"movie\" value=\"";
                    // line 64
                    echo $this->getAttribute((isset($context["_file"]) ? $context["_file"] : null), "U_VIEW_LINK");
                    echo "\" />
\t\t\t\t<param name=\"play\" value=\"true\" />
\t\t\t\t<param name=\"loop\" value=\"true\" />
\t\t\t\t<param name=\"quality\" value=\"high\" />
\t\t\t\t<param name=\"allowScriptAccess\" value=\"never\" />
\t\t\t\t<param name=\"allowNetworking\" value=\"internal\" />
\t\t\t\t<embed src=\"";
                    // line 70
                    echo $this->getAttribute((isset($context["_file"]) ? $context["_file"] : null), "U_VIEW_LINK");
                    echo "\" type=\"application/x-shockwave-flash\" pluginspage=\"http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash\" width=\"";
                    echo $this->getAttribute((isset($context["_file"]) ? $context["_file"] : null), "WIDTH");
                    echo "\" height=\"";
                    echo $this->getAttribute((isset($context["_file"]) ? $context["_file"] : null), "HEIGHT");
                    echo "\" play=\"true\" loop=\"true\" quality=\"high\" allowscriptaccess=\"never\" allownetworking=\"internal\"></embed>
\t\t\t</object>
\t\t";
                } elseif ($this->getAttribute((isset($context["_file"]) ? $context["_file"] : null), "S_QUICKTIME_FILE")) {
                    // line 73
                    echo "\t\t\t<object id=\"qtstream_";
                    echo $this->getAttribute((isset($context["_file"]) ? $context["_file"] : null), "ATTACH_ID");
                    echo "\" classid=\"clsid:02BF25D5-8C17-4B23-BC80-D3488ABDDC6B\" codebase=\"http://www.apple.com/qtactivex/qtplugin.cab#version=6,0,2,0\" width=\"320\" height=\"285\">
\t\t\t\t<param name=\"src\" value=\"";
                    // line 74
                    echo $this->getAttribute((isset($context["_file"]) ? $context["_file"] : null), "U_DOWNLOAD_LINK");
                    echo "\" />
\t\t\t\t<param name=\"controller\" value=\"true\" />
\t\t\t\t<param name=\"autoplay\" value=\"false\" />
\t\t\t\t<param name=\"type\" value=\"video/quicktime\" />
\t\t\t\t<embed name=\"qtstream_";
                    // line 78
                    echo $this->getAttribute((isset($context["_file"]) ? $context["_file"] : null), "ATTACH_ID");
                    echo "\" src=\"";
                    echo $this->getAttribute((isset($context["_file"]) ? $context["_file"] : null), "U_DOWNLOAD_LINK");
                    echo "\" pluginspage=\"http://www.apple.com/quicktime/download/\" enablejavascript=\"true\" controller=\"true\" width=\"320\" height=\"285\" type=\"video/quicktime\" autoplay=\"false\"></embed>
\t\t\t</object>
\t\t";
                } elseif ($this->getAttribute((isset($context["_file"]) ? $context["_file"] : null), "S_RM_FILE")) {
                    // line 81
                    echo "\t\t\t<object id=\"rmstream_";
                    echo $this->getAttribute((isset($context["_file"]) ? $context["_file"] : null), "ATTACH_ID");
                    echo "\" classid=\"clsid:CFCDAA03-8BE4-11cf-B84B-0020AFBBCCFA\" width=\"200\" height=\"50\">
\t\t\t\t<param name=\"src\" value=\"";
                    // line 82
                    echo $this->getAttribute((isset($context["_file"]) ? $context["_file"] : null), "U_DOWNLOAD_LINK");
                    echo "\" />
\t\t\t\t<param name=\"autostart\" value=\"false\" />
\t\t\t\t<param name=\"controls\" value=\"ImageWindow\" />
\t\t\t\t<param name=\"console\" value=\"ctrls_";
                    // line 85
                    echo $this->getAttribute((isset($context["_file"]) ? $context["_file"] : null), "ATTACH_ID");
                    echo "\" />
\t\t\t\t<param name=\"prefetch\" value=\"false\" />
\t\t\t\t<embed name=\"rmstream_";
                    // line 87
                    echo $this->getAttribute((isset($context["_file"]) ? $context["_file"] : null), "ATTACH_ID");
                    echo "\" type=\"audio/x-pn-realaudio-plugin\" src=\"";
                    echo $this->getAttribute((isset($context["_file"]) ? $context["_file"] : null), "U_DOWNLOAD_LINK");
                    echo "\" width=\"0\" height=\"0\" autostart=\"false\" controls=\"ImageWindow\" console=\"ctrls_";
                    echo $this->getAttribute((isset($context["_file"]) ? $context["_file"] : null), "ATTACH_ID");
                    echo "\" prefetch=\"false\"></embed>
\t\t\t</object>
\t\t\t<br />
\t\t\t<object id=\"ctrls_";
                    // line 90
                    echo $this->getAttribute((isset($context["_file"]) ? $context["_file"] : null), "ATTACH_ID");
                    echo "\" classid=\"clsid:CFCDAA03-8BE4-11cf-B84B-0020AFBBCCFA\" width=\"0\" height=\"36\">
\t\t\t\t<param name=\"controls\" value=\"ControlPanel\" />
\t\t\t\t<param name=\"console\" value=\"ctrls_";
                    // line 92
                    echo $this->getAttribute((isset($context["_file"]) ? $context["_file"] : null), "ATTACH_ID");
                    echo "\" />
\t\t\t\t<embed name=\"ctrls_";
                    // line 93
                    echo $this->getAttribute((isset($context["_file"]) ? $context["_file"] : null), "ATTACH_ID");
                    echo "\" type=\"audio/x-pn-realaudio-plugin\" width=\"200\" height=\"36\" controls=\"ControlPanel\" console=\"ctrls_";
                    echo $this->getAttribute((isset($context["_file"]) ? $context["_file"] : null), "ATTACH_ID");
                    echo "\"></embed>
\t\t\t</object>

\t\t\t<script type=\"text/javascript\">
\t\t\t// <![CDATA[
\t\t\t\tif (document.rmstream_";
                    // line 98
                    echo $this->getAttribute((isset($context["_file"]) ? $context["_file"] : null), "ATTACH_ID");
                    echo ".GetClipWidth)
\t\t\t\t{
\t\t\t\t\twhile (!document.rmstream_";
                    // line 100
                    echo $this->getAttribute((isset($context["_file"]) ? $context["_file"] : null), "ATTACH_ID");
                    echo ".GetClipWidth())
\t\t\t\t\t{
\t\t\t\t\t}

\t\t\t\t\tvar width = document.rmstream_";
                    // line 104
                    echo $this->getAttribute((isset($context["_file"]) ? $context["_file"] : null), "ATTACH_ID");
                    echo ".GetClipWidth();
\t\t\t\t\tvar height = document.rmstream_";
                    // line 105
                    echo $this->getAttribute((isset($context["_file"]) ? $context["_file"] : null), "ATTACH_ID");
                    echo ".GetClipHeight();

\t\t\t\t\tdocument.rmstream_";
                    // line 107
                    echo $this->getAttribute((isset($context["_file"]) ? $context["_file"] : null), "ATTACH_ID");
                    echo ".width = width;
\t\t\t\t\tdocument.rmstream_";
                    // line 108
                    echo $this->getAttribute((isset($context["_file"]) ? $context["_file"] : null), "ATTACH_ID");
                    echo ".height = height;
\t\t\t\t\tdocument.ctrls_";
                    // line 109
                    echo $this->getAttribute((isset($context["_file"]) ? $context["_file"] : null), "ATTACH_ID");
                    echo ".width = width;
\t\t\t\t}
\t\t\t// ]]>
\t\t\t</script>
\t\t";
                }
                // line 114
                echo "
\t\t";
                // line 115
                if (((($this->getAttribute((isset($context["_file"]) ? $context["_file"] : null), "S_WM_FILE") || $this->getAttribute((isset($context["_file"]) ? $context["_file"] : null), "S_RM_FILE")) || $this->getAttribute((isset($context["_file"]) ? $context["_file"] : null), "S_FLASH_FILE")) || $this->getAttribute((isset($context["_file"]) ? $context["_file"] : null), "S_QUICKTIME_FILE"))) {
                    // line 116
                    echo "\t\t\t<p>
\t\t\t";
                    // line 117
                    if ($this->getAttribute((isset($context["_file"]) ? $context["_file"] : null), "S_QUICKTIME_FILE")) {
                        echo "<a href=\"#\" onclick=\"play_qt_file(document.qtstream_";
                        echo $this->getAttribute((isset($context["_file"]) ? $context["_file"] : null), "ATTACH_ID");
                        echo "); return false;\">[ ";
                        echo $this->env->getExtension('phpbb')->lang("PLAY_QUICKTIME_FILE");
                        echo " ]</a> ";
                    }
                    // line 118
                    echo "\t\t\t<a href=\"";
                    echo $this->getAttribute((isset($context["_file"]) ? $context["_file"] : null), "U_DOWNLOAD_LINK");
                    echo "\">";
                    echo $this->getAttribute((isset($context["_file"]) ? $context["_file"] : null), "DOWNLOAD_NAME");
                    echo "</a> [ ";
                    echo $this->getAttribute((isset($context["_file"]) ? $context["_file"] : null), "FILESIZE");
                    echo " ";
                    echo $this->getAttribute((isset($context["_file"]) ? $context["_file"] : null), "SIZE_LANG");
                    echo " | ";
                    echo $this->getAttribute((isset($context["_file"]) ? $context["_file"] : null), "L_DOWNLOAD_COUNT");
                    echo " ]</p>
\t\t";
                }
                // line 120
                echo "
\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['_file'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "attachment.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  350 => 120,  336 => 118,  328 => 117,  325 => 116,  323 => 115,  320 => 114,  312 => 109,  308 => 108,  304 => 107,  299 => 105,  295 => 104,  288 => 100,  283 => 98,  273 => 93,  269 => 92,  264 => 90,  254 => 87,  249 => 85,  243 => 82,  238 => 81,  230 => 78,  223 => 74,  218 => 73,  208 => 70,  199 => 64,  192 => 63,  174 => 48,  170 => 47,  165 => 45,  153 => 36,  149 => 35,  146 => 34,  144 => 33,  139 => 30,  128 => 27,  122 => 26,  111 => 25,  108 => 24,  106 => 23,  103 => 22,  90 => 19,  84 => 18,  78 => 17,  75 => 16,  73 => 15,  69 => 13,  65 => 11,  59 => 10,  43 => 9,  40 => 8,  38 => 7,  35 => 6,  29 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
