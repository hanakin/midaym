<?php

/* mcp_topic.html */
class __TwigTemplate_79256d19aee6936ed46ac9bc39da0f97 extends Twig_Template
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
        $location = "mcp_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->env->loadTemplate("mcp_header.html")->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<div class=\"tabs-container\">
<h2><a href=\"";
        // line 4
        echo (isset($context["U_VIEW_TOPIC"]) ? $context["U_VIEW_TOPIC"] : null);
        echo "\">";
        echo $this->env->getExtension('phpbb')->lang("TOPIC");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo " ";
        echo (isset($context["TOPIC_TITLE"]) ? $context["TOPIC_TITLE"] : null);
        echo "</a></h2>

";
        // line 6
        if ((isset($context["S_MERGE_VIEW"]) ? $context["S_MERGE_VIEW"] : null)) {
            // line 7
            echo "\t";
            $value = "merge-panel";
            $context['definition']->set('SHOW_PANEL', $value);
        } elseif ((isset($context["S_SPLIT_VIEW"]) ? $context["S_SPLIT_VIEW"] : null)) {
            // line 9
            echo "\t";
            $value = "split-panel";
            $context['definition']->set('SHOW_PANEL', $value);
        } else {
            // line 11
            echo "\t";
            $value = "display-panel";
            $context['definition']->set('SHOW_PANEL', $value);
        }
        // line 13
        echo "
<div id=\"minitabs\" class=\"sub-panels\" data-show-panel=\"";
        // line 14
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SHOW_PANEL");
        echo "\" role=\"tablist\">
\t<ul>
\t\t<li id=\"display-panel-tab\" class=\"tab";
        // line 16
        if ((!(isset($context["S_MERGE_VIEW"]) ? $context["S_MERGE_VIEW"] : null))) {
            echo " activetab";
        }
        echo "\">
\t\t\t<a href=\"#minitabs\" data-subpanel=\"display-panel\" role=\"tab\" aria-controls=\"display-panel\">";
        // line 17
        echo $this->env->getExtension('phpbb')->lang("DISPLAY_OPTIONS");
        echo "</a>
\t\t</li>
\t\t<li id=\"split-panel-tab\" class=\"tab\">
\t\t\t<a href=\"#minitabs\" data-subpanel=\"split-panel\" role=\"tab\" aria-controls=\"split-panel\">";
        // line 20
        echo $this->env->getExtension('phpbb')->lang("SPLIT_TOPIC");
        echo "</a>
\t\t</li>
\t\t<li id=\"merge-panel-tab\" class=\"tab";
        // line 22
        if ((isset($context["S_MERGE_VIEW"]) ? $context["S_MERGE_VIEW"] : null)) {
            echo " activetab";
        }
        echo "\">
\t\t\t<a href=\"#minitabs\" data-subpanel=\"merge-panel\" role=\"tab\" aria-controls=\"merge-panel\">";
        // line 23
        echo $this->env->getExtension('phpbb')->lang("MERGE_POSTS");
        echo "</a>
\t\t</li>
\t</ul>
</div>
</div>

<form id=\"mcp\" method=\"post\" action=\"";
        // line 29
        echo (isset($context["S_MCP_ACTION"]) ? $context["S_MCP_ACTION"] : null);
        echo "\">

<div class=\"panel\">
\t<div class=\"inner\">

\t<fieldset id=\"display-panel\" class=\"fields2\" role=\"tabpanel\">
\t<dl>
\t\t<dt><label for=\"posts_per_page\">";
        // line 36
        echo $this->env->getExtension('phpbb')->lang("POSTS_PER_PAGE");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb')->lang("POSTS_PER_PAGE_EXPLAIN");
        echo "</span></dt>
\t\t<dd><input class=\"inputbox autowidth\" type=\"number\" min=\"1\" name=\"posts_per_page\" id=\"posts_per_page\" size=\"6\" value=\"";
        // line 37
        echo (isset($context["POSTS_PER_PAGE"]) ? $context["POSTS_PER_PAGE"] : null);
        echo "\" /></dd>
\t</dl>
\t<dl>
\t\t<dt><label>";
        // line 40
        echo $this->env->getExtension('phpbb')->lang("DISPLAY_POSTS");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t\t<dd>";
        // line 41
        echo (isset($context["S_SELECT_SORT_DAYS"]) ? $context["S_SELECT_SORT_DAYS"] : null);
        echo "&nbsp;&nbsp;<label>";
        echo $this->env->getExtension('phpbb')->lang("SORT_BY");
        echo " ";
        echo (isset($context["S_SELECT_SORT_KEY"]) ? $context["S_SELECT_SORT_KEY"] : null);
        echo "</label><label>";
        echo (isset($context["S_SELECT_SORT_DIR"]) ? $context["S_SELECT_SORT_DIR"] : null);
        echo "</label> <input type=\"submit\" name=\"sort\" value=\"";
        echo $this->env->getExtension('phpbb')->lang("GO");
        echo "\" class=\"button2\" /></dd>
\t</dl>
\t</fieldset>

";
        // line 45
        if ((isset($context["S_CAN_SPLIT"]) ? $context["S_CAN_SPLIT"] : null)) {
            // line 46
            echo "\t<fieldset id=\"split-panel\" class=\"fields2\" role=\"tabpanel\">
\t\t<p>";
            // line 47
            echo $this->env->getExtension('phpbb')->lang("SPLIT_TOPIC_EXPLAIN");
            echo "</p>

\t";
            // line 49
            if ((isset($context["S_SHOW_TOPIC_ICONS"]) ? $context["S_SHOW_TOPIC_ICONS"] : null)) {
                // line 50
                echo "\t\t<dl>
\t\t\t<dt><label for=\"icon\">";
                // line 51
                echo $this->env->getExtension('phpbb')->lang("TOPIC_ICON");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label></dt>
\t\t\t<dd><label for=\"icon\"><input type=\"radio\" name=\"icon\" id=\"icon\" value=\"0\" checked=\"checked\" /> ";
                // line 52
                echo $this->env->getExtension('phpbb')->lang("NO_TOPIC_ICON");
                echo "</label>
\t\t\t";
                // line 53
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "topic_icon"));
                foreach ($context['_seq'] as $context["_key"] => $context["topic_icon"]) {
                    echo "<label for=\"icon-";
                    echo $this->getAttribute((isset($context["topic_icon"]) ? $context["topic_icon"] : null), "ICON_ID");
                    echo "\"><input type=\"radio\" name=\"icon\" id=\"icon-";
                    echo $this->getAttribute((isset($context["topic_icon"]) ? $context["topic_icon"] : null), "ICON_ID");
                    echo "\" value=\"";
                    echo $this->getAttribute((isset($context["topic_icon"]) ? $context["topic_icon"] : null), "ICON_ID");
                    echo "\" ";
                    echo $this->getAttribute((isset($context["topic_icon"]) ? $context["topic_icon"] : null), "S_ICON_CHECKED");
                    echo " /><img src=\"";
                    echo $this->getAttribute((isset($context["topic_icon"]) ? $context["topic_icon"] : null), "ICON_IMG");
                    echo "\" width=\"";
                    echo $this->getAttribute((isset($context["topic_icon"]) ? $context["topic_icon"] : null), "ICON_WIDTH");
                    echo "\" height=\"";
                    echo $this->getAttribute((isset($context["topic_icon"]) ? $context["topic_icon"] : null), "ICON_HEIGHT");
                    echo "\" alt=\"\" title=\"\" /></label> ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topic_icon'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "</dd>
\t\t</dl>
\t";
            }
            // line 56
            echo "
\t<dl>
\t\t<dt><label for=\"subject\">";
            // line 58
            echo $this->env->getExtension('phpbb')->lang("SPLIT_SUBJECT");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd><input type=\"text\" name=\"subject\" id=\"subject\" size=\"45\" maxlength=\"124\" tabindex=\"2\" value=\"";
            // line 59
            echo (isset($context["SPLIT_SUBJECT"]) ? $context["SPLIT_SUBJECT"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("SPLIT_SUBJECT");
            echo "\" class=\"inputbox\" /></dd>
\t</dl>
\t<dl>
\t\t<dt><label>";
            // line 62
            echo $this->env->getExtension('phpbb')->lang("SPLIT_FORUM");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd><select name=\"to_forum_id\">";
            // line 63
            echo (isset($context["S_FORUM_SELECT"]) ? $context["S_FORUM_SELECT"] : null);
            echo "</select></dd>
\t</dl>
\t</fieldset>
";
        }
        // line 67
        echo "
";
        // line 68
        if ((isset($context["S_CAN_MERGE"]) ? $context["S_CAN_MERGE"] : null)) {
            // line 69
            echo "\t<fieldset id=\"merge-panel\" class=\"fields2\" role=\"tabpanel\">
\t\t<p>";
            // line 70
            echo $this->env->getExtension('phpbb')->lang("MERGE_TOPIC_EXPLAIN");
            echo "</p>
\t<dl>
\t\t<dt><label for=\"to_topic_id\">";
            // line 72
            echo $this->env->getExtension('phpbb')->lang("MERGE_TOPIC_ID");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd>
\t\t\t<input class=\"inputbox autowidth\" type=\"number\" min=\"0\" size=\"6\" name=\"to_topic_id\" id=\"to_topic_id\" value=\"";
            // line 74
            echo (isset($context["TO_TOPIC_ID"]) ? $context["TO_TOPIC_ID"] : null);
            echo "\" />
\t\t\t<a href=\"";
            // line 75
            echo (isset($context["U_SELECT_TOPIC"]) ? $context["U_SELECT_TOPIC"] : null);
            echo "\" >";
            echo $this->env->getExtension('phpbb')->lang("SELECT_TOPIC");
            echo "</a>
\t\t</dd>
\t\t";
            // line 77
            if ((isset($context["TO_TOPIC_INFO"]) ? $context["TO_TOPIC_INFO"] : null)) {
                echo "<dd>";
                echo (isset($context["TO_TOPIC_INFO"]) ? $context["TO_TOPIC_INFO"] : null);
                echo "</dd>";
            }
            // line 78
            echo "\t</dl>
\t</fieldset>
";
        }
        // line 81
        echo "
\t</div>
</div>

<div class=\"panel\">
\t<div class=\"inner\">

\t<h3 id=\"review\">
\t\t<span class=\"right-box\"><a href=\"#review\" onclick=\"viewableArea(getElementById('topicreview'), true); var rev_text = getElementById('review').getElementsByTagName('a').item(0).firstChild; if (rev_text.data == '";
        // line 89
        echo addslashes($this->env->getExtension('phpbb')->lang("EXPAND_VIEW"));
        echo "'){rev_text.data = '";
        echo addslashes($this->env->getExtension('phpbb')->lang("COLLAPSE_VIEW"));
        echo "'; } else if (rev_text.data == '";
        echo addslashes($this->env->getExtension('phpbb')->lang("COLLAPSE_VIEW"));
        echo "'){rev_text.data = '";
        echo addslashes($this->env->getExtension('phpbb')->lang("EXPAND_VIEW"));
        echo "'};\">";
        echo $this->env->getExtension('phpbb')->lang("EXPAND_VIEW");
        echo "</a></span>
\t\t";
        // line 90
        echo $this->env->getExtension('phpbb')->lang("TOPIC_REVIEW");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo " ";
        echo (isset($context["TOPIC_TITLE"]) ? $context["TOPIC_TITLE"] : null);
        echo "
\t</h3>

\t<div id=\"topicreview\">
\t\t";
        // line 94
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "postrow"));
        foreach ($context['_seq'] as $context["_key"] => $context["postrow"]) {
            // line 95
            echo "\t\t<div class=\"post ";
            if (($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "S_ROW_COUNT") % 2 == 1)) {
                echo "bg1";
            } else {
                echo "bg2";
            }
            echo "\">
\t\t\t<div class=\"inner\">

\t\t\t<div class=\"postbody\" id=\"pr";
            // line 98
            echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POST_ID");
            echo "\">
\t\t\t\t<ul class=\"post-buttons\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
            // line 101
            echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "U_POST_DETAILS");
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("POST_DETAILS");
            echo "\" class=\"button icon-button info-icon\">
\t\t\t\t\t\t\t<span>";
            // line 102
            echo $this->env->getExtension('phpbb')->lang("POST_DETAILS");
            echo "</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<label for=\"post_id_list_select_";
            // line 106
            echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POST_ID");
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("SELECT");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "
\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"post_id_list_select_";
            // line 107
            echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POST_ID");
            echo "\" name=\"post_id_list[]\" value=\"";
            echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POST_ID");
            echo "\"";
            if ($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "S_CHECKED")) {
                echo " checked=\"checked\"";
            }
            echo " />
\t\t\t\t\t\t</label>
\t\t\t\t\t</li>
\t\t\t\t</ul>

\t\t\t\t<h3><a href=\"";
            // line 112
            echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "U_POST_DETAILS");
            echo "\">";
            echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POST_SUBJECT");
            echo "</a></h3>
\t\t\t\t<p class=\"author\"><a href=\"#pr";
            // line 113
            echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POST_ID");
            echo "\">";
            echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "MINI_POST_IMG");
            echo "</a> ";
            echo $this->env->getExtension('phpbb')->lang("POSTED");
            echo " ";
            echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POST_DATE");
            echo " ";
            echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
            echo " <strong>";
            echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POST_AUTHOR_FULL");
            echo "</strong>";
            if ($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "U_MCP_DETAILS")) {
                echo " [ <a href=\"";
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "U_MCP_DETAILS");
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("POST_DETAILS");
                echo "</a> ]";
            }
            echo "</p>

\t\t\t\t";
            // line 115
            if ($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "S_POST_UNAPPROVED")) {
                // line 116
                echo "\t\t\t\t<p class=\"post-notice unapproved\">
\t\t\t\t\t<a href=\"";
                // line 117
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "U_MCP_APPROVE");
                echo "\"><strong>";
                echo $this->env->getExtension('phpbb')->lang("POST_UNAPPROVED");
                echo "</strong></a>
\t\t\t\t</p>
\t\t\t\t";
            }
            // line 120
            echo "
\t\t\t\t";
            // line 121
            if ($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "S_POST_DELETED")) {
                // line 122
                echo "\t\t\t\t<p class=\"post-notice deleted\">
\t\t\t\t\t<a href=\"";
                // line 123
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "U_MCP_APPROVE");
                echo "\"><strong>";
                echo $this->env->getExtension('phpbb')->lang("POST_DELETED");
                echo "</strong></a>
\t\t\t\t</p>
\t\t\t\t";
            }
            // line 126
            echo "
\t\t\t\t";
            // line 127
            if ($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "S_POST_REPORTED")) {
                // line 128
                echo "\t\t\t\t<p class=\"post-notice reported\">
\t\t\t\t\t<a href=\"";
                // line 129
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "U_MCP_REPORT");
                echo "\"><strong>";
                echo $this->env->getExtension('phpbb')->lang("POST_REPORTED");
                echo "</strong></a>
\t\t\t\t</p>
\t\t\t\t";
            }
            // line 132
            echo "
\t\t\t\t<div class=\"content\" id=\"message_";
            // line 133
            echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POST_ID");
            echo "\">";
            echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "MESSAGE");
            echo "</div>

\t\t\t\t";
            // line 135
            if ($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "S_HAS_ATTACHMENTS")) {
                // line 136
                echo "\t\t\t\t\t<dl class=\"attachbox\">
\t\t\t\t\t\t<dt>";
                // line 137
                echo $this->env->getExtension('phpbb')->lang("ATTACHMENTS");
                echo "</dt>
\t\t\t\t\t\t";
                // line 138
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "attachment"));
                foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
                    // line 139
                    echo "\t\t\t\t\t\t\t<dd>";
                    echo $this->getAttribute((isset($context["attachment"]) ? $context["attachment"] : null), "DISPLAY_ATTACHMENT");
                    echo "</dd>
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachment'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 141
                echo "\t\t\t\t\t</dl>
\t\t\t\t";
            }
            // line 143
            echo "
\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['postrow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 149
        echo "\t</div>

\t<hr />

\t<div class=\"action-bar bottom\">
\t\t<div class=\"pagination\">
\t\t\t";
        // line 155
        echo (isset($context["TOTAL_POSTS"]) ? $context["TOTAL_POSTS"] : null);
        echo "
\t\t\t";
        // line 156
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination"))) {
            echo " 
\t\t\t\t";
            // line 157
            $location = "pagination.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->env->loadTemplate("pagination.html")->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 158
            echo "\t\t\t";
        } else {
            echo " 
\t\t\t\t &bull; ";
            // line 159
            echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
            echo "
\t\t\t";
        }
        // line 161
        echo "\t\t</div>
\t</div>

\t</div>
</div>

<fieldset class=\"display-actions\">
\t<select name=\"action\">
\t\t<option value=\"\" selected=\"selected\">";
        // line 169
        echo $this->env->getExtension('phpbb')->lang("SELECT_ACTION");
        echo "</option>
\t\t";
        // line 170
        if ((isset($context["S_CAN_APPROVE"]) ? $context["S_CAN_APPROVE"] : null)) {
            echo "<option value=\"approve\">";
            echo $this->env->getExtension('phpbb')->lang("APPROVE_POSTS");
            echo "</option>";
        }
        // line 171
        echo "\t\t";
        if ((isset($context["S_CAN_LOCK"]) ? $context["S_CAN_LOCK"] : null)) {
            echo "<option value=\"lock_post\">";
            echo $this->env->getExtension('phpbb')->lang("LOCK_POST_POSTS");
            echo " [ ";
            echo $this->env->getExtension('phpbb')->lang("LOCK_POST_EXPLAIN");
            echo " ]</option><option value=\"unlock_post\">";
            echo $this->env->getExtension('phpbb')->lang("UNLOCK_POST_POSTS");
            echo "</option>";
        }
        // line 172
        echo "\t\t";
        if ((isset($context["S_CAN_DELETE"]) ? $context["S_CAN_DELETE"] : null)) {
            echo "<option value=\"delete_post\">";
            echo $this->env->getExtension('phpbb')->lang("DELETE_POSTS");
            echo "</option>";
        }
        // line 173
        echo "\t\t";
        if ((isset($context["S_CAN_RESTORE"]) ? $context["S_CAN_RESTORE"] : null)) {
            echo "<option value=\"restore\">";
            echo $this->env->getExtension('phpbb')->lang("RESTORE_POSTS");
            echo "</option>";
        }
        // line 174
        echo "\t\t";
        if ((isset($context["S_CAN_MERGE"]) ? $context["S_CAN_MERGE"] : null)) {
            echo "<option value=\"merge_posts\"";
            if ((isset($context["S_MERGE_VIEW"]) ? $context["S_MERGE_VIEW"] : null)) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo $this->env->getExtension('phpbb')->lang("MERGE_POSTS");
            echo "</option>";
        }
        // line 175
        echo "\t\t";
        if ((isset($context["S_CAN_SPLIT"]) ? $context["S_CAN_SPLIT"] : null)) {
            echo "<option value=\"split_all\"";
            if ((isset($context["S_SPLIT_VIEW"]) ? $context["S_SPLIT_VIEW"] : null)) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo $this->env->getExtension('phpbb')->lang("SPLIT_POSTS");
            echo "</option><option value=\"split_beyond\">";
            echo $this->env->getExtension('phpbb')->lang("SPLIT_AFTER");
            echo "</option>";
        }
        // line 176
        echo "\t\t";
        if ((isset($context["S_CAN_SYNC"]) ? $context["S_CAN_SYNC"] : null)) {
            echo "<option value=\"resync\">";
            echo $this->env->getExtension('phpbb')->lang("RESYNC");
            echo "</option>";
        }
        // line 177
        echo "\t</select>&nbsp;
\t<input class=\"button1\" type=\"submit\" name=\"mcp_topic_submit\" value=\"";
        // line 178
        echo $this->env->getExtension('phpbb')->lang("SUBMIT");
        echo "\" />
\t<div><a href=\"#\" onclick=\"marklist('mcp', 'post', true); return false;\">";
        // line 179
        echo $this->env->getExtension('phpbb')->lang("MARK_ALL");
        echo "</a> :: <a href=\"#\" onclick=\"marklist('mcp', 'post', false); return false;\">";
        echo $this->env->getExtension('phpbb')->lang("UNMARK_ALL");
        echo "</a></div>
";
        // line 180
        echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
        echo "
";
        // line 181
        echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
        echo "
</fieldset>

</form>

";
        // line 186
        $location = "mcp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->env->loadTemplate("mcp_footer.html")->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "mcp_topic.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  613 => 186,  605 => 181,  601 => 180,  595 => 179,  591 => 178,  588 => 177,  581 => 176,  568 => 175,  557 => 174,  550 => 173,  543 => 172,  532 => 171,  526 => 170,  522 => 169,  512 => 161,  507 => 159,  502 => 158,  490 => 157,  486 => 156,  482 => 155,  474 => 149,  463 => 143,  459 => 141,  450 => 139,  446 => 138,  442 => 137,  439 => 136,  437 => 135,  430 => 133,  427 => 132,  419 => 129,  416 => 128,  414 => 127,  411 => 126,  403 => 123,  400 => 122,  398 => 121,  395 => 120,  387 => 117,  384 => 116,  382 => 115,  359 => 113,  353 => 112,  339 => 107,  332 => 106,  325 => 102,  319 => 101,  313 => 98,  302 => 95,  298 => 94,  288 => 90,  276 => 89,  266 => 81,  261 => 78,  255 => 77,  248 => 75,  244 => 74,  238 => 72,  233 => 70,  230 => 69,  228 => 68,  225 => 67,  218 => 63,  213 => 62,  205 => 59,  200 => 58,  196 => 56,  169 => 53,  165 => 52,  160 => 51,  157 => 50,  155 => 49,  150 => 47,  147 => 46,  145 => 45,  130 => 41,  125 => 40,  119 => 37,  112 => 36,  102 => 29,  93 => 23,  87 => 22,  82 => 20,  76 => 17,  70 => 16,  65 => 14,  62 => 13,  57 => 11,  52 => 9,  47 => 7,  45 => 6,  35 => 4,  31 => 2,  19 => 1,);
    }
}
