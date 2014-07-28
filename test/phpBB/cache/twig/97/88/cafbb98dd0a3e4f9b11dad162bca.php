<?php

/* ucp_pm_viewmessage.html */
class __TwigTemplate_9788cafbb98dd0a3e4f9b11dad162bca extends Twig_Template
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
        $location = "ucp_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->env->loadTemplate("ucp_header.html")->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
";
        // line 3
        $location = "ucp_pm_message_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->env->loadTemplate("ucp_pm_message_header.html")->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 4
        echo "
\t</div>
</div>


";
        // line 9
        if (((isset($context["S_DISPLAY_HISTORY"]) ? $context["S_DISPLAY_HISTORY"] : null) && ((isset($context["U_VIEW_PREVIOUS_HISTORY"]) ? $context["U_VIEW_PREVIOUS_HISTORY"] : null) || (isset($context["U_VIEW_NEXT_HISTORY"]) ? $context["U_VIEW_NEXT_HISTORY"] : null)))) {
            // line 10
            echo "\t<fieldset class=\"display-options clearfix\">
\t\t";
            // line 11
            if ((isset($context["U_VIEW_PREVIOUS_HISTORY"]) ? $context["U_VIEW_PREVIOUS_HISTORY"] : null)) {
                echo "<a href=\"";
                echo (isset($context["U_VIEW_PREVIOUS_HISTORY"]) ? $context["U_VIEW_PREVIOUS_HISTORY"] : null);
                echo "\" class=\"left-box icons icons-";
                echo (isset($context["S_CONTENT_FLOW_BEGIN"]) ? $context["S_CONTENT_FLOW_BEGIN"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("VIEW_PREVIOUS_HISTORY");
                echo "</a>";
            }
            // line 12
            echo "\t\t";
            if ((isset($context["U_VIEW_NEXT_HISTORY"]) ? $context["U_VIEW_NEXT_HISTORY"] : null)) {
                echo "<a href=\"";
                echo (isset($context["U_VIEW_NEXT_HISTORY"]) ? $context["U_VIEW_NEXT_HISTORY"] : null);
                echo "\" class=\"right-box icons icons-";
                echo (isset($context["S_CONTENT_FLOW_END"]) ? $context["S_CONTENT_FLOW_END"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("VIEW_NEXT_HISTORY");
                echo "</a>";
            }
            // line 13
            echo "\t</fieldset>
";
        }
        // line 15
        echo "

<div id=\"post-";
        // line 17
        echo (isset($context["MESSAGE_ID"]) ? $context["MESSAGE_ID"] : null);
        echo "\" class=\"post pm";
        if (((isset($context["S_POST_UNAPPROVED"]) ? $context["S_POST_UNAPPROVED"] : null) || (isset($context["S_POST_REPORTED"]) ? $context["S_POST_REPORTED"] : null))) {
            echo " reported";
        }
        if ((isset($context["S_ONLINE"]) ? $context["S_ONLINE"] : null)) {
            echo " online";
        }
        echo "\">
<div class=\"inner\">

\t<dl class=\"postprofile\" id=\"profile";
        // line 20
        echo (isset($context["MESSAGE_ID"]) ? $context["MESSAGE_ID"] : null);
        echo "\">
\t\t<dt class=\"";
        // line 21
        if (((isset($context["RANK_TITLE"]) ? $context["RANK_TITLE"] : null) || (isset($context["RANK_IMG"]) ? $context["RANK_IMG"] : null))) {
            echo "has-profile-rank";
        } else {
            echo "no-profile-rank";
        }
        echo "\">";
        if ((isset($context["AUTHOR_AVATAR"]) ? $context["AUTHOR_AVATAR"] : null)) {
            echo "<a href=\"";
            echo (isset($context["U_MESSAGE_AUTHOR"]) ? $context["U_MESSAGE_AUTHOR"] : null);
            echo "\" class=\"avatar\">";
            echo (isset($context["AUTHOR_AVATAR"]) ? $context["AUTHOR_AVATAR"] : null);
            echo "</a>";
        }
        echo (isset($context["MESSAGE_AUTHOR_FULL"]) ? $context["MESSAGE_AUTHOR_FULL"] : null);
        echo "</dt>

\t\t";
        // line 23
        if (((isset($context["RANK_TITLE"]) ? $context["RANK_TITLE"] : null) || (isset($context["RANK_IMG"]) ? $context["RANK_IMG"] : null))) {
            echo "<dd class=\"profile-rank\">";
            echo (isset($context["RANK_TITLE"]) ? $context["RANK_TITLE"] : null);
            if (((isset($context["RANK_TITLE"]) ? $context["RANK_TITLE"] : null) && (isset($context["RANK_IMG"]) ? $context["RANK_IMG"] : null))) {
                echo "<br />";
            }
            echo (isset($context["RANK_IMG"]) ? $context["RANK_IMG"] : null);
            echo "</dd>";
        }
        // line 24
        echo "
\t\t<dd class=\"profile-posts\"><strong>";
        // line 25
        echo $this->env->getExtension('phpbb')->lang("POSTS");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</strong> ";
        echo (isset($context["AUTHOR_POSTS"]) ? $context["AUTHOR_POSTS"] : null);
        echo "</dd>
\t\t";
        // line 26
        if ((isset($context["AUTHOR_JOINED"]) ? $context["AUTHOR_JOINED"] : null)) {
            echo "<dd class=\"profile-joined\"><strong>";
            echo $this->env->getExtension('phpbb')->lang("JOINED");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</strong> ";
            echo (isset($context["AUTHOR_JOINED"]) ? $context["AUTHOR_JOINED"] : null);
            echo "</dd>";
        }
        // line 27
        echo "
\t\t";
        // line 28
        // line 29
        echo "\t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "custom_fields"));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_fields"]) {
            // line 30
            echo "\t\t\t";
            if ((!$this->getAttribute((isset($context["custom_fields"]) ? $context["custom_fields"] : null), "S_PROFILE_CONTACT"))) {
                // line 31
                echo "\t\t\t\t<dd class=\"profile-custom-field profile-";
                echo $this->getAttribute((isset($context["custom_fields"]) ? $context["custom_fields"] : null), "PROFILE_FIELD_IDENT");
                echo "\"><strong>";
                echo $this->getAttribute((isset($context["custom_fields"]) ? $context["custom_fields"] : null), "PROFILE_FIELD_NAME");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</strong> ";
                echo $this->getAttribute((isset($context["custom_fields"]) ? $context["custom_fields"] : null), "PROFILE_FIELD_VALUE");
                echo "</dd>
\t\t\t";
            }
            // line 33
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_fields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "\t\t";
        // line 35
        echo "
\t\t";
        // line 36
        // line 37
        echo "\t\t";
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "contact"))) {
            // line 38
            echo "\t\t\t<dd class=\"profile-contact\">
\t\t\t\t<strong>";
            // line 39
            echo $this->env->getExtension('phpbb')->lang("CONTACT");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</strong>
\t\t\t\t<div class=\"dropdown-container dropdown-left\">
\t\t\t\t\t<a href=\"#\" class=\"dropdown-trigger\"><span class=\"imageset icon_contact\" title=\"";
            // line 41
            echo (isset($context["CONTACT_USER"]) ? $context["CONTACT_USER"] : null);
            echo "\">";
            echo (isset($context["CONTACT_USER"]) ? $context["CONTACT_USER"] : null);
            echo "</span></a>
\t\t\t\t\t<div class=\"dropdown hidden\">
\t\t\t\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t\t\t\t<div class=\"dropdown-contents contact-icons\">
\t\t\t\t\t\t\t";
            // line 45
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "contact"));
            foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
                // line 46
                echo "\t\t\t\t\t\t\t\t";
                $context["REMAINDER"] = ($this->getAttribute((isset($context["contact"]) ? $context["contact"] : null), "S_ROW_COUNT") % 4);
                // line 47
                echo "\t\t\t\t\t\t\t\t";
                $value = (((isset($context["REMAINDER"]) ? $context["REMAINDER"] : null) == 3) || ($this->getAttribute((isset($context["contact"]) ? $context["contact"] : null), "S_LAST_ROW") && ($this->getAttribute((isset($context["contact"]) ? $context["contact"] : null), "S_NUM_ROWS") < 4)));
                $context['definition']->set('S_LAST_CELL', $value);
                // line 48
                echo "\t\t\t\t\t\t\t\t";
                if (((isset($context["REMAINDER"]) ? $context["REMAINDER"] : null) == 0)) {
                    // line 49
                    echo "\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t";
                }
                // line 51
                echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                if ($this->getAttribute((isset($context["contact"]) ? $context["contact"] : null), "U_CONTACT")) {
                    echo $this->getAttribute((isset($context["contact"]) ? $context["contact"] : null), "U_CONTACT");
                } else {
                    echo $this->getAttribute((isset($context["contact"]) ? $context["contact"] : null), "U_PROFILE_AUTHOR");
                }
                echo "\" title=\"";
                echo $this->getAttribute((isset($context["contact"]) ? $context["contact"] : null), "NAME");
                echo "\"";
                if ($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "S_LAST_CELL")) {
                    echo " class=\"last-cell\"";
                }
                if (($this->getAttribute((isset($context["contact"]) ? $context["contact"] : null), "ID") == "jabber")) {
                    echo " onclick=\"popup(this.href, 550, 320); return false;\"";
                }
                echo ">
\t\t\t\t\t\t\t\t\t\t<span class=\"contact-icon ";
                // line 52
                echo $this->getAttribute((isset($context["contact"]) ? $context["contact"] : null), "ID");
                echo "-icon\">";
                echo $this->getAttribute((isset($context["contact"]) ? $context["contact"] : null), "NAME");
                echo "</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
                // line 54
                if ((((isset($context["REMAINDER"]) ? $context["REMAINDER"] : null) == 3) || $this->getAttribute((isset($context["contact"]) ? $context["contact"] : null), "S_LAST_ROW"))) {
                    // line 55
                    echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                }
                // line 57
                echo "\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</dd>
\t\t";
        }
        // line 62
        echo "\t\t";
        // line 63
        echo "\t</dl>

\t<div class=\"postbody\">
\t\t<h3 class=\"first\">";
        // line 66
        echo (isset($context["SUBJECT"]) ? $context["SUBJECT"] : null);
        echo "</h3>

\t\t";
        // line 68
        if (((((isset($context["U_DELETE"]) ? $context["U_DELETE"] : null) || (isset($context["U_EDIT"]) ? $context["U_EDIT"] : null)) || (isset($context["U_QUOTE"]) ? $context["U_QUOTE"] : null)) || (isset($context["U_REPORT"]) ? $context["U_REPORT"] : null))) {
            // line 69
            echo "\t\t<ul class=\"post-buttons\">
\t\t\t";
            // line 70
            // line 71
            echo "\t\t\t";
            if ((isset($context["U_EDIT"]) ? $context["U_EDIT"] : null)) {
                // line 72
                echo "\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
                // line 73
                echo (isset($context["U_EDIT"]) ? $context["U_EDIT"] : null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("POST_EDIT_PM");
                echo "\" class=\"button icon-button icons icons-edit\"><span>";
                echo $this->env->getExtension('phpbb')->lang("POST_EDIT_PM");
                echo "</span></a>
\t\t\t\t</li>
\t\t\t";
            }
            // line 76
            echo "\t\t\t";
            if ((isset($context["U_DELETE"]) ? $context["U_DELETE"] : null)) {
                // line 77
                echo "\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
                // line 78
                echo (isset($context["U_DELETE"]) ? $context["U_DELETE"] : null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("DELETE_MESSAGE");
                echo "\" class=\"button icon-button icons icons-delete\"><span>";
                echo $this->env->getExtension('phpbb')->lang("DELETE_MESSAGE");
                echo "</span></a>
\t\t\t\t</li>
\t\t\t";
            }
            // line 81
            echo "\t\t\t";
            if ((isset($context["U_REPORT"]) ? $context["U_REPORT"] : null)) {
                // line 82
                echo "\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
                // line 83
                echo (isset($context["U_REPORT"]) ? $context["U_REPORT"] : null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("REPORT_PM");
                echo "\" class=\"button icon-button icons icons-report\"><span>";
                echo $this->env->getExtension('phpbb')->lang("REPORT_PM");
                echo "</span></a>
\t\t\t\t</li>
\t\t\t";
            }
            // line 86
            echo "\t\t\t";
            if ((isset($context["U_QUOTE"]) ? $context["U_QUOTE"] : null)) {
                // line 87
                echo "\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
                // line 88
                echo (isset($context["U_QUOTE"]) ? $context["U_QUOTE"] : null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("POST_QUOTE_PM");
                echo "\" class=\"button icon-button icons icons-quote\"><span>";
                echo $this->env->getExtension('phpbb')->lang("POST_QUOTE_PM");
                echo "</span></a>
\t\t\t\t</li>
\t\t\t";
            }
            // line 91
            echo "\t\t\t";
            // line 92
            echo "\t\t</ul>
\t\t";
        }
        // line 94
        echo "
\t\t<p class=\"author\">
\t\t\t<strong>";
        // line 96
        echo $this->env->getExtension('phpbb')->lang("SENT_AT");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</strong> ";
        echo (isset($context["SENT_DATE"]) ? $context["SENT_DATE"] : null);
        echo "
\t\t\t<br /><strong>";
        // line 97
        echo $this->env->getExtension('phpbb')->lang("PM_FROM");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</strong> ";
        echo (isset($context["MESSAGE_AUTHOR_FULL"]) ? $context["MESSAGE_AUTHOR_FULL"] : null);
        echo "
\t\t\t";
        // line 98
        if ((isset($context["S_TO_RECIPIENT"]) ? $context["S_TO_RECIPIENT"] : null)) {
            echo "<br /><strong>";
            echo $this->env->getExtension('phpbb')->lang("TO");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</strong> ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "to_recipient"));
            foreach ($context['_seq'] as $context["_key"] => $context["to_recipient"]) {
                if ($this->getAttribute((isset($context["to_recipient"]) ? $context["to_recipient"] : null), "NAME_FULL")) {
                    echo $this->getAttribute((isset($context["to_recipient"]) ? $context["to_recipient"] : null), "NAME_FULL");
                } else {
                    echo "<a href=\"";
                    echo $this->getAttribute((isset($context["to_recipient"]) ? $context["to_recipient"] : null), "U_VIEW");
                    echo "\" style=\"color:";
                    if ($this->getAttribute((isset($context["to_recipient"]) ? $context["to_recipient"] : null), "COLOUR")) {
                        echo $this->getAttribute((isset($context["to_recipient"]) ? $context["to_recipient"] : null), "COLOUR");
                    } elseif ($this->getAttribute((isset($context["to_recipient"]) ? $context["to_recipient"] : null), "IS_GROUP")) {
                        echo "#0000FF";
                    }
                    echo ";\">";
                    echo $this->getAttribute((isset($context["to_recipient"]) ? $context["to_recipient"] : null), "NAME");
                    echo "</a>";
                }
                echo "&nbsp;";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['to_recipient'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 99
        echo "\t\t\t";
        if ((isset($context["S_BCC_RECIPIENT"]) ? $context["S_BCC_RECIPIENT"] : null)) {
            echo "<br /><strong>";
            echo $this->env->getExtension('phpbb')->lang("BCC");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</strong> ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "bcc_recipient"));
            foreach ($context['_seq'] as $context["_key"] => $context["bcc_recipient"]) {
                if ($this->getAttribute((isset($context["bcc_recipient"]) ? $context["bcc_recipient"] : null), "NAME_FULL")) {
                    echo $this->getAttribute((isset($context["bcc_recipient"]) ? $context["bcc_recipient"] : null), "NAME_FULL");
                } else {
                    echo "<a href=\"";
                    echo $this->getAttribute((isset($context["bcc_recipient"]) ? $context["bcc_recipient"] : null), "U_VIEW");
                    echo "\" style=\"color:";
                    if ($this->getAttribute((isset($context["bcc_recipient"]) ? $context["bcc_recipient"] : null), "COLOUR")) {
                        echo $this->getAttribute((isset($context["bcc_recipient"]) ? $context["bcc_recipient"] : null), "COLOUR");
                    } elseif ($this->getAttribute((isset($context["bcc_recipient"]) ? $context["bcc_recipient"] : null), "IS_GROUP")) {
                        echo "#0000FF";
                    }
                    echo ";\">";
                    echo $this->getAttribute((isset($context["bcc_recipient"]) ? $context["bcc_recipient"] : null), "NAME");
                    echo "</a>";
                }
                echo "&nbsp;";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bcc_recipient'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 100
        echo "\t\t</p>


\t\t<div class=\"content\">";
        // line 103
        echo (isset($context["MESSAGE"]) ? $context["MESSAGE"] : null);
        echo "</div>

\t\t";
        // line 105
        if ((isset($context["S_HAS_ATTACHMENTS"]) ? $context["S_HAS_ATTACHMENTS"] : null)) {
            // line 106
            echo "\t\t\t<dl class=\"attachbox\">
\t\t\t\t<dt>
\t\t\t\t\t";
            // line 108
            echo $this->env->getExtension('phpbb')->lang("ATTACHMENTS");
            echo "
\t\t\t\t\t";
            // line 109
            if ((isset($context["S_HAS_MULTIPLE_ATTACHMENTS"]) ? $context["S_HAS_MULTIPLE_ATTACHMENTS"] : null)) {
                // line 110
                echo "\t\t\t\t\t\t<div class=\"dl_links\">
\t\t\t\t\t\t\t<strong>";
                // line 111
                echo $this->env->getExtension('phpbb')->lang("DOWNLOAD_ALL");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</strong>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t";
                // line 113
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "dl_method"));
                foreach ($context['_seq'] as $context["_key"] => $context["dl_method"]) {
                    // line 114
                    echo "\t\t\t\t\t\t\t\t<li>[ <a href=\"";
                    echo $this->getAttribute((isset($context["dl_method"]) ? $context["dl_method"] : null), "LINK");
                    echo "\">";
                    echo $this->getAttribute((isset($context["dl_method"]) ? $context["dl_method"] : null), "TYPE");
                    echo "</a> ]</li>
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dl_method'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 116
                echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 119
            echo "\t\t\t\t</dt>
\t\t\t\t";
            // line 120
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "attachment"));
            foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
                // line 121
                echo "\t\t\t\t\t<dd>";
                echo $this->getAttribute((isset($context["attachment"]) ? $context["attachment"] : null), "DISPLAY_ATTACHMENT");
                echo "</dd>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 123
            echo "\t\t\t</dl>
\t\t";
        }
        // line 125
        echo "
\t\t";
        // line 126
        if ((isset($context["S_DISPLAY_NOTICE"]) ? $context["S_DISPLAY_NOTICE"] : null)) {
            // line 127
            echo "\t\t\t<div class=\"post-notice error\">";
            echo $this->env->getExtension('phpbb')->lang("DOWNLOAD_NOTICE");
            echo "</div>
\t\t";
        }
        // line 129
        echo "
\t\t";
        // line 130
        if (((isset($context["EDITED_MESSAGE"]) ? $context["EDITED_MESSAGE"] : null) || (isset($context["EDIT_REASON"]) ? $context["EDIT_REASON"] : null))) {
            // line 131
            echo "\t\t<div class=\"notice\">";
            echo (isset($context["EDITED_MESSAGE"]) ? $context["EDITED_MESSAGE"] : null);
            echo "
\t\t\t";
            // line 132
            if ((isset($context["EDIT_REASON"]) ? $context["EDIT_REASON"] : null)) {
                echo "<br /><strong>";
                echo $this->env->getExtension('phpbb')->lang("REASON");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</strong> <em>";
                echo (isset($context["EDIT_REASON"]) ? $context["EDIT_REASON"] : null);
                echo "</em>";
            }
            // line 133
            echo "\t\t</div>
\t\t";
        }
        // line 135
        echo "
\t\t";
        // line 136
        if ((isset($context["SIGNATURE"]) ? $context["SIGNATURE"] : null)) {
            // line 137
            echo "\t\t\t<div id=\"sig";
            echo (isset($context["MESSAGE_ID"]) ? $context["MESSAGE_ID"] : null);
            echo "\" class=\"signature\">";
            echo (isset($context["SIGNATURE"]) ? $context["SIGNATURE"] : null);
            echo "</div>
\t\t";
        }
        // line 139
        echo "\t</div>

\t<div class=\"back2top\"><a href=\"#top\" class=\"top\" title=\"";
        // line 141
        echo $this->env->getExtension('phpbb')->lang("BACK_TO_TOP");
        echo "\">";
        echo $this->env->getExtension('phpbb')->lang("BACK_TO_TOP");
        echo "</a></div>

\t</div>
</div>

";
        // line 146
        if ((isset($context["S_VIEW_MESSAGE"]) ? $context["S_VIEW_MESSAGE"] : null)) {
            // line 147
            echo "<fieldset class=\"display-options\">
\t";
            // line 148
            if ((isset($context["U_PREVIOUS_PM"]) ? $context["U_PREVIOUS_PM"] : null)) {
                echo "<a href=\"";
                echo (isset($context["U_PREVIOUS_PM"]) ? $context["U_PREVIOUS_PM"] : null);
                echo "\" class=\"left-box icons icons-";
                echo (isset($context["S_CONTENT_FLOW_BEGIN"]) ? $context["S_CONTENT_FLOW_BEGIN"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("VIEW_PREVIOUS_PM");
                echo "</a>";
            }
            // line 149
            echo "\t";
            if ((isset($context["U_NEXT_PM"]) ? $context["U_NEXT_PM"] : null)) {
                echo "<a href=\"";
                echo (isset($context["U_NEXT_PM"]) ? $context["U_NEXT_PM"] : null);
                echo "\" class=\"right-box icons icons-";
                echo (isset($context["S_CONTENT_FLOW_END"]) ? $context["S_CONTENT_FLOW_END"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("VIEW_NEXT_PM");
                echo "</a>";
            }
            // line 150
            echo "
\t";
            // line 151
            if ((isset($context["S_MARK_OPTIONS"]) ? $context["S_MARK_OPTIONS"] : null)) {
                echo "<label for=\"mark_option\"><select name=\"mark_option\" id=\"mark_option\">";
                echo (isset($context["S_MARK_OPTIONS"]) ? $context["S_MARK_OPTIONS"] : null);
                echo "</select></label>&nbsp;<input class=\"button2\" type=\"submit\" name=\"submit_mark\" value=\"";
                echo $this->env->getExtension('phpbb')->lang("GO");
                echo "\" />";
            }
            // line 152
            echo "\t";
            if (((!(isset($context["S_UNREAD"]) ? $context["S_UNREAD"] : null)) && (!(isset($context["S_SPECIAL_FOLDER"]) ? $context["S_SPECIAL_FOLDER"] : null)))) {
                echo "<label for=\"dest_folder\">";
                if ((isset($context["S_VIEW_MESSAGE"]) ? $context["S_VIEW_MESSAGE"] : null)) {
                    echo $this->env->getExtension('phpbb')->lang("MOVE_TO_FOLDER");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo " ";
                } else {
                    echo $this->env->getExtension('phpbb')->lang("MOVE_MARKED_TO_FOLDER");
                }
                echo " <select name=\"dest_folder\" id=\"dest_folder\">";
                echo (isset($context["S_TO_FOLDER_OPTIONS"]) ? $context["S_TO_FOLDER_OPTIONS"] : null);
                echo "</select></label> <input class=\"button2\" type=\"submit\" name=\"move_pm\" value=\"";
                echo $this->env->getExtension('phpbb')->lang("GO");
                echo "\" />";
            }
            // line 153
            echo "\t<input type=\"hidden\" name=\"marked_msg_id[]\" value=\"";
            echo (isset($context["MSG_ID"]) ? $context["MSG_ID"] : null);
            echo "\" />
\t<input type=\"hidden\" name=\"cur_folder_id\" value=\"";
            // line 154
            echo (isset($context["CUR_FOLDER_ID"]) ? $context["CUR_FOLDER_ID"] : null);
            echo "\" />
\t<input type=\"hidden\" name=\"p\" value=\"";
            // line 155
            echo (isset($context["MSG_ID"]) ? $context["MSG_ID"] : null);
            echo "\" />
</fieldset>
";
        }
        // line 158
        echo "
";
        // line 159
        $location = "ucp_pm_message_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->env->loadTemplate("ucp_pm_message_footer.html")->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 160
        echo "
";
        // line 161
        if ((isset($context["S_DISPLAY_HISTORY"]) ? $context["S_DISPLAY_HISTORY"] : null)) {
            $location = "ucp_pm_history.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->env->loadTemplate("ucp_pm_history.html")->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 162
        echo "
";
        // line 163
        $location = "ucp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->env->loadTemplate("ucp_footer.html")->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_pm_viewmessage.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  671 => 163,  668 => 162,  654 => 161,  651 => 160,  639 => 159,  636 => 158,  630 => 155,  626 => 154,  621 => 153,  604 => 152,  596 => 151,  593 => 150,  582 => 149,  572 => 148,  569 => 147,  567 => 146,  557 => 141,  553 => 139,  545 => 137,  543 => 136,  540 => 135,  536 => 133,  527 => 132,  522 => 131,  520 => 130,  517 => 129,  511 => 127,  509 => 126,  506 => 125,  502 => 123,  493 => 121,  489 => 120,  486 => 119,  481 => 116,  470 => 114,  466 => 113,  460 => 111,  457 => 110,  455 => 109,  451 => 108,  447 => 106,  445 => 105,  440 => 103,  435 => 100,  404 => 99,  374 => 98,  367 => 97,  360 => 96,  356 => 94,  352 => 92,  350 => 91,  340 => 88,  337 => 87,  334 => 86,  324 => 83,  321 => 82,  318 => 81,  308 => 78,  305 => 77,  302 => 76,  292 => 73,  289 => 72,  286 => 71,  285 => 70,  282 => 69,  280 => 68,  275 => 66,  270 => 63,  268 => 62,  262 => 58,  256 => 57,  252 => 55,  250 => 54,  243 => 52,  225 => 51,  221 => 49,  218 => 48,  214 => 47,  211 => 46,  207 => 45,  198 => 41,  192 => 39,  189 => 38,  186 => 37,  185 => 36,  182 => 35,  180 => 34,  174 => 33,  163 => 31,  160 => 30,  155 => 29,  154 => 28,  151 => 27,  142 => 26,  135 => 25,  132 => 24,  122 => 23,  104 => 21,  100 => 20,  87 => 17,  83 => 15,  79 => 13,  68 => 12,  58 => 11,  55 => 10,  53 => 9,  46 => 4,  34 => 3,  31 => 2,  19 => 1,);
    }
}
