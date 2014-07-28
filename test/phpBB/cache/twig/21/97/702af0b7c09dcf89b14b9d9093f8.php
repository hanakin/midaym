<?php

/* viewtopic_body.html */
class __TwigTemplate_2197702af0b7c09dcf89b14b9d9093f8 extends Twig_Template
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
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->env->loadTemplate("overall_header.html")->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<h2 class=\"topic-title\">";
        // line 3
        echo "<a href=\"";
        echo (isset($context["U_VIEW_TOPIC"]) ? $context["U_VIEW_TOPIC"] : null);
        echo "\">";
        echo (isset($context["TOPIC_TITLE"]) ? $context["TOPIC_TITLE"] : null);
        echo "</a>";
        echo "</h2>
<!-- NOTE: remove the style=\"display: none\" when you want to have the forum description on the topic body -->
";
        // line 5
        if ((isset($context["FORUM_DESC"]) ? $context["FORUM_DESC"] : null)) {
            echo "<div style=\"display: none !important;\">";
            echo (isset($context["FORUM_DESC"]) ? $context["FORUM_DESC"] : null);
            echo "<br /></div>";
        }
        // line 6
        echo "
";
        // line 7
        if ((isset($context["MODERATORS"]) ? $context["MODERATORS"] : null)) {
            // line 8
            echo "<p>
\t<strong>";
            // line 9
            if ((isset($context["S_SINGLE_MODERATOR"]) ? $context["S_SINGLE_MODERATOR"] : null)) {
                echo $this->env->getExtension('phpbb')->lang("MODERATOR");
            } else {
                echo $this->env->getExtension('phpbb')->lang("MODERATORS");
            }
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</strong> ";
            echo (isset($context["MODERATORS"]) ? $context["MODERATORS"] : null);
            echo "
</p>
";
        }
        // line 12
        echo "
";
        // line 13
        if ((isset($context["S_FORUM_RULES"]) ? $context["S_FORUM_RULES"] : null)) {
            // line 14
            echo "\t<div class=\"rules";
            if ((isset($context["U_FORUM_RULES"]) ? $context["U_FORUM_RULES"] : null)) {
                echo " rules-link";
            }
            echo "\">
\t\t<div class=\"inner\">

\t\t";
            // line 17
            if ((isset($context["U_FORUM_RULES"]) ? $context["U_FORUM_RULES"] : null)) {
                // line 18
                echo "\t\t\t<a href=\"";
                echo (isset($context["U_FORUM_RULES"]) ? $context["U_FORUM_RULES"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("FORUM_RULES");
                echo "</a>
\t\t";
            } else {
                // line 20
                echo "\t\t\t<strong>";
                echo $this->env->getExtension('phpbb')->lang("FORUM_RULES");
                echo "</strong><br />
\t\t\t";
                // line 21
                echo (isset($context["FORUM_RULES"]) ? $context["FORUM_RULES"] : null);
                echo "
\t\t";
            }
            // line 23
            echo "
\t\t</div>
\t</div>
";
        }
        // line 27
        echo "
<div class=\"action-bar top\">

\t<div class=\"buttons\">
\t";
        // line 31
        if (((!(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) && (isset($context["S_DISPLAY_REPLY_INFO"]) ? $context["S_DISPLAY_REPLY_INFO"] : null))) {
            // line 32
            echo "\t\t<a href=\"";
            echo (isset($context["U_POST_REPLY_TOPIC"]) ? $context["U_POST_REPLY_TOPIC"] : null);
            echo "\" class=\"button icon-button ";
            if ((isset($context["S_IS_LOCKED"]) ? $context["S_IS_LOCKED"] : null)) {
                echo "locked-icon";
            } else {
                echo "reply-icon";
            }
            echo "\" title=\"";
            if ((isset($context["S_IS_LOCKED"]) ? $context["S_IS_LOCKED"] : null)) {
                echo $this->env->getExtension('phpbb')->lang("TOPIC_LOCKED");
            } else {
                echo $this->env->getExtension('phpbb')->lang("POST_REPLY");
            }
            echo "\">
\t\t\t";
            // line 33
            if ((isset($context["S_IS_LOCKED"]) ? $context["S_IS_LOCKED"] : null)) {
                echo $this->env->getExtension('phpbb')->lang("BUTTON_TOPIC_LOCKED");
            } else {
                echo $this->env->getExtension('phpbb')->lang("BUTTON_POST_REPLY");
            }
            // line 34
            echo "\t\t</a>
\t";
        }
        // line 36
        echo "\t</div>

\t";
        // line 38
        $location = "viewtopic_topic_tools.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->env->loadTemplate("viewtopic_topic_tools.html")->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 39
        echo "
\t";
        // line 40
        if ((isset($context["S_DISPLAY_SEARCHBOX"]) ? $context["S_DISPLAY_SEARCHBOX"] : null)) {
            // line 41
            echo "\t\t<div class=\"search-box\">
\t\t\t<form method=\"get\" id=\"topic-search\" action=\"";
            // line 42
            echo (isset($context["S_SEARCHBOX_ACTION"]) ? $context["S_SEARCHBOX_ACTION"] : null);
            echo "\">
\t\t\t<fieldset>
\t\t\t\t<input class=\"inputbox search tiny\"  type=\"search\" name=\"keywords\" id=\"search_keywords\" size=\"20\" placeholder=\"";
            // line 44
            echo $this->env->getExtension('phpbb')->lang("SEARCH_TOPIC");
            echo "\" />
\t\t\t\t<input class=\"button2\" type=\"submit\" value=\"";
            // line 45
            echo $this->env->getExtension('phpbb')->lang("SEARCH");
            echo "\" />
\t\t\t\t";
            // line 46
            echo (isset($context["S_SEARCH_LOCAL_HIDDEN_FIELDS"]) ? $context["S_SEARCH_LOCAL_HIDDEN_FIELDS"] : null);
            echo "
\t\t\t</fieldset>
\t\t\t</form>
\t\t</div>
\t";
        }
        // line 51
        echo "
\t";
        // line 52
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination")) || (isset($context["TOTAL_POSTS"]) ? $context["TOTAL_POSTS"] : null))) {
            // line 53
            echo "\t\t<div class=\"pagination\">
\t\t\t";
            // line 54
            if (((isset($context["U_VIEW_UNREAD_POST"]) ? $context["U_VIEW_UNREAD_POST"] : null) && (!(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)))) {
                echo "<a href=\"";
                echo (isset($context["U_VIEW_UNREAD_POST"]) ? $context["U_VIEW_UNREAD_POST"] : null);
                echo "\" class=\"mark\">";
                echo $this->env->getExtension('phpbb')->lang("VIEW_UNREAD_POST");
                echo "</a> &bull; ";
            }
            echo (isset($context["TOTAL_POSTS"]) ? $context["TOTAL_POSTS"] : null);
            echo " 
\t\t\t";
            // line 55
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination"))) {
                // line 56
                echo "\t\t\t\t";
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
                // line 57
                echo "\t\t\t";
            } else {
                // line 58
                echo "\t\t\t\t&bull; ";
                echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
                echo "
\t\t\t";
            }
            // line 60
            echo "\t\t</div>
\t";
        }
        // line 62
        echo "
</div>

";
        // line 65
        if ((isset($context["S_HAS_POLL"]) ? $context["S_HAS_POLL"] : null)) {
            // line 66
            echo "\t<form method=\"post\" action=\"";
            echo (isset($context["S_POLL_ACTION"]) ? $context["S_POLL_ACTION"] : null);
            echo "\" data-ajax=\"vote_poll\" class=\"topic_poll\">

\t<div class=\"panel\">
\t\t<div class=\"inner\">

\t\t<div class=\"content\">
\t\t\t<h2 class=\"poll-title\">";
            // line 72
            echo (isset($context["POLL_QUESTION"]) ? $context["POLL_QUESTION"] : null);
            echo "</h2>
\t\t\t<p class=\"author\">";
            // line 73
            echo $this->env->getExtension('phpbb')->lang("POLL_LENGTH");
            if (((isset($context["S_CAN_VOTE"]) ? $context["S_CAN_VOTE"] : null) && (isset($context["L_POLL_LENGTH"]) ? $context["L_POLL_LENGTH"] : null))) {
                echo "<br />";
            }
            if ((isset($context["S_CAN_VOTE"]) ? $context["S_CAN_VOTE"] : null)) {
                echo "<span class=\"poll_max_votes\">";
                echo $this->env->getExtension('phpbb')->lang("MAX_VOTES");
                echo "</span>";
            }
            echo "</p>

\t\t\t<fieldset class=\"polls\">
\t\t\t";
            // line 76
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "poll_option"));
            foreach ($context['_seq'] as $context["_key"] => $context["poll_option"]) {
                // line 77
                echo "\t\t\t\t";
                // line 78
                echo "\t\t\t\t<dl class=\"";
                if ($this->getAttribute((isset($context["poll_option"]) ? $context["poll_option"] : null), "POLL_OPTION_VOTED")) {
                    echo "voted";
                }
                if ($this->getAttribute((isset($context["poll_option"]) ? $context["poll_option"] : null), "POLL_OPTION_MOST_VOTES")) {
                    echo " most-votes";
                }
                echo "\"";
                if ($this->getAttribute((isset($context["poll_option"]) ? $context["poll_option"] : null), "POLL_OPTION_VOTED")) {
                    echo " title=\"";
                    echo $this->env->getExtension('phpbb')->lang("POLL_VOTED_OPTION");
                    echo "\"";
                }
                echo " data-poll-option-id=\"";
                echo $this->getAttribute((isset($context["poll_option"]) ? $context["poll_option"] : null), "POLL_OPTION_ID");
                echo "\">
\t\t\t\t\t<dt>";
                // line 79
                if ((isset($context["S_CAN_VOTE"]) ? $context["S_CAN_VOTE"] : null)) {
                    echo "<label for=\"vote_";
                    echo $this->getAttribute((isset($context["poll_option"]) ? $context["poll_option"] : null), "POLL_OPTION_ID");
                    echo "\">";
                    echo $this->getAttribute((isset($context["poll_option"]) ? $context["poll_option"] : null), "POLL_OPTION_CAPTION");
                    echo "</label>";
                } else {
                    echo $this->getAttribute((isset($context["poll_option"]) ? $context["poll_option"] : null), "POLL_OPTION_CAPTION");
                }
                echo "</dt>
\t\t\t\t\t";
                // line 80
                if ((isset($context["S_CAN_VOTE"]) ? $context["S_CAN_VOTE"] : null)) {
                    echo "<dd style=\"width: auto;\" class=\"poll_option_select\">";
                    if ((isset($context["S_IS_MULTI_CHOICE"]) ? $context["S_IS_MULTI_CHOICE"] : null)) {
                        echo "<input type=\"checkbox\" name=\"vote_id[]\" id=\"vote_";
                        echo $this->getAttribute((isset($context["poll_option"]) ? $context["poll_option"] : null), "POLL_OPTION_ID");
                        echo "\" value=\"";
                        echo $this->getAttribute((isset($context["poll_option"]) ? $context["poll_option"] : null), "POLL_OPTION_ID");
                        echo "\"";
                        if ($this->getAttribute((isset($context["poll_option"]) ? $context["poll_option"] : null), "POLL_OPTION_VOTED")) {
                            echo " checked=\"checked\"";
                        }
                        echo " />";
                    } else {
                        echo "<input type=\"radio\" name=\"vote_id[]\" id=\"vote_";
                        echo $this->getAttribute((isset($context["poll_option"]) ? $context["poll_option"] : null), "POLL_OPTION_ID");
                        echo "\" value=\"";
                        echo $this->getAttribute((isset($context["poll_option"]) ? $context["poll_option"] : null), "POLL_OPTION_ID");
                        echo "\"";
                        if ($this->getAttribute((isset($context["poll_option"]) ? $context["poll_option"] : null), "POLL_OPTION_VOTED")) {
                            echo " checked=\"checked\"";
                        }
                        echo " />";
                    }
                    echo "</dd>";
                }
                // line 81
                echo "\t\t\t\t\t<dd class=\"resultbar";
                if ((!(isset($context["S_DISPLAY_RESULTS"]) ? $context["S_DISPLAY_RESULTS"] : null))) {
                    echo " hidden";
                }
                echo "\"><div class=\"";
                if (($this->getAttribute((isset($context["poll_option"]) ? $context["poll_option"] : null), "POLL_OPTION_PCT") < 20)) {
                    echo "pollbar1";
                } elseif (($this->getAttribute((isset($context["poll_option"]) ? $context["poll_option"] : null), "POLL_OPTION_PCT") < 40)) {
                    echo "pollbar2";
                } elseif (($this->getAttribute((isset($context["poll_option"]) ? $context["poll_option"] : null), "POLL_OPTION_PCT") < 60)) {
                    echo "pollbar3";
                } elseif (($this->getAttribute((isset($context["poll_option"]) ? $context["poll_option"] : null), "POLL_OPTION_PCT") < 80)) {
                    echo "pollbar4";
                } else {
                    echo "pollbar5";
                }
                echo "\" style=\"width:";
                echo $this->getAttribute((isset($context["poll_option"]) ? $context["poll_option"] : null), "POLL_OPTION_PERCENT_REL");
                echo ";\">";
                echo $this->getAttribute((isset($context["poll_option"]) ? $context["poll_option"] : null), "POLL_OPTION_RESULT");
                echo "</div></dd>
\t\t\t\t\t<dd class=\"poll_option_percent";
                // line 82
                if ((!(isset($context["S_DISPLAY_RESULTS"]) ? $context["S_DISPLAY_RESULTS"] : null))) {
                    echo " hidden";
                }
                echo "\">";
                if (($this->getAttribute((isset($context["poll_option"]) ? $context["poll_option"] : null), "POLL_OPTION_RESULT") == 0)) {
                    echo $this->env->getExtension('phpbb')->lang("NO_VOTES");
                } else {
                    echo $this->getAttribute((isset($context["poll_option"]) ? $context["poll_option"] : null), "POLL_OPTION_PERCENT");
                }
                echo "</dd>
\t\t\t\t</dl>
\t\t\t\t";
                // line 84
                // line 85
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['poll_option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 86
            echo "
\t\t\t\t<dl class=\"poll_total_votes";
            // line 87
            if ((!(isset($context["S_DISPLAY_RESULTS"]) ? $context["S_DISPLAY_RESULTS"] : null))) {
                echo " hidden";
            }
            echo "\">
\t\t\t\t\t<dt>&nbsp;</dt>
\t\t\t\t\t<dd class=\"resultbar\">";
            // line 89
            echo $this->env->getExtension('phpbb')->lang("TOTAL_VOTES");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " <span class=\"poll_total_vote_cnt\">";
            echo (isset($context["TOTAL_VOTES"]) ? $context["TOTAL_VOTES"] : null);
            echo "</span></dd>
\t\t\t\t</dl>

\t\t\t";
            // line 92
            if ((isset($context["S_CAN_VOTE"]) ? $context["S_CAN_VOTE"] : null)) {
                // line 93
                echo "\t\t\t\t<dl style=\"border-top: none;\" class=\"poll_vote\">
\t\t\t\t\t<dt>&nbsp;</dt>
\t\t\t\t\t<dd class=\"resultbar\"><input type=\"submit\" name=\"update\" value=\"";
                // line 95
                echo $this->env->getExtension('phpbb')->lang("SUBMIT_VOTE");
                echo "\" class=\"button1\" /></dd>
\t\t\t\t</dl>
\t\t\t";
            }
            // line 98
            echo "
\t\t\t";
            // line 99
            if ((!(isset($context["S_DISPLAY_RESULTS"]) ? $context["S_DISPLAY_RESULTS"] : null))) {
                // line 100
                echo "\t\t\t\t<dl style=\"border-top: none;\" class=\"poll_view_results\">
\t\t\t\t\t<dt>&nbsp;</dt>
\t\t\t\t\t<dd class=\"resultbar\"><a href=\"";
                // line 102
                echo (isset($context["U_VIEW_RESULTS"]) ? $context["U_VIEW_RESULTS"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("VIEW_RESULTS");
                echo "</a></dd>
\t\t\t\t</dl>
\t\t\t";
            }
            // line 105
            echo "\t\t\t</fieldset>
\t\t\t<div class=\"vote-submitted hidden\">";
            // line 106
            echo $this->env->getExtension('phpbb')->lang("VOTE_SUBMITTED");
            echo "</div>
\t\t</div>

\t\t</div>
\t\t";
            // line 110
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
\t\t";
            // line 111
            echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
            echo "
\t</div>

\t</form>
\t<hr />
";
        }
        // line 117
        echo "
";
        // line 118
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "postrow"));
        foreach ($context['_seq'] as $context["_key"] => $context["postrow"]) {
            // line 119
            echo "\t";
            // line 120
            echo "\t";
            if ($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "S_FIRST_UNREAD")) {
                // line 121
                echo "\t\t<a id=\"unread\" class=\"anchor\"";
                if ((isset($context["S_UNREAD_VIEW"]) ? $context["S_UNREAD_VIEW"] : null)) {
                    echo " data-url=\"";
                    echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "U_MINI_POST");
                    echo "\"";
                }
                echo "></a>
\t";
            }
            // line 123
            echo "\t<div id=\"p";
            echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POST_ID");
            echo "\" class=\"post ";
            if (($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "S_ROW_COUNT") % 2 == 1)) {
                echo "bg1";
            } else {
                echo "bg2";
            }
            if ($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "S_UNREAD_POST")) {
                echo " unreadpost";
            }
            if ($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "S_POST_REPORTED")) {
                echo " reported";
            }
            if ($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "S_POST_DELETED")) {
                echo " deleted";
            }
            if (($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "S_ONLINE") && (!$this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "S_POST_HIDDEN")))) {
                echo " online";
            }
            if ($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POSTER_WARNINGS")) {
                echo " warned";
            }
            echo "\">
\t\t<div class=\"inner\">

\t\t<dl class=\"postprofile\" id=\"profile";
            // line 126
            echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POST_ID");
            echo "\"";
            if ($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "S_POST_HIDDEN")) {
                echo " style=\"display: none;\"";
            }
            echo ">
\t\t\t<dt class=\"";
            // line 127
            if (($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "RANK_TITLE") || $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "RANK_IMG"))) {
                echo "has-profile-rank";
            } else {
                echo "no-profile-rank";
            }
            echo "\">
\t\t\t\t";
            // line 128
            if ($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POSTER_AVATAR")) {
                // line 129
                echo "\t\t\t\t\t";
                if ($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "U_POST_AUTHOR")) {
                    echo "<a href=\"";
                    echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "U_POST_AUTHOR");
                    echo "\" class=\"avatar\">";
                    echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POSTER_AVATAR");
                    echo "</a>";
                } else {
                    echo "<span class=\"avatar\">";
                    echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POSTER_AVATAR");
                    echo "</span>";
                }
                // line 130
                echo "\t\t\t\t";
            }
            // line 131
            echo "\t\t\t\t";
            if ((!$this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "U_POST_AUTHOR"))) {
                echo "<strong>";
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POST_AUTHOR_FULL");
                echo "</strong>";
            } else {
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POST_AUTHOR_FULL");
            }
            // line 132
            echo "\t\t\t</dt>

\t\t\t";
            // line 134
            if (($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "RANK_TITLE") || $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "RANK_IMG"))) {
                echo "<dd class=\"profile-rank\">";
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "RANK_TITLE");
                if (($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "RANK_TITLE") && $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "RANK_IMG"))) {
                    echo "<br />";
                }
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "RANK_IMG");
                echo "</dd>";
            }
            // line 135
            echo "
\t\t";
            // line 136
            if (($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POSTER_POSTS") != "")) {
                echo "<dd class=\"profile-posts\"><strong>";
                echo $this->env->getExtension('phpbb')->lang("POSTS");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</strong> ";
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POSTER_POSTS");
                echo "</dd>";
            }
            // line 137
            echo "\t\t";
            if ($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POSTER_JOINED")) {
                echo "<dd class=\"profile-joined\"><strong>";
                echo $this->env->getExtension('phpbb')->lang("JOINED");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</strong> ";
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POSTER_JOINED");
                echo "</dd>";
            }
            // line 138
            echo "\t\t";
            if ($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POSTER_WARNINGS")) {
                echo "<dd class=\"profile-warnings\"><strong>";
                echo $this->env->getExtension('phpbb')->lang("WARNINGS");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</strong> ";
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POSTER_WARNINGS");
                echo "</dd>";
            }
            // line 139
            echo "
\t\t";
            // line 140
            if ($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "S_PROFILE_FIELD1")) {
                // line 141
                echo "\t\t\t<!-- Use a construct like this to include admin defined profile fields. Replace FIELD1 with the name of your field. -->
\t\t\t<dd><strong>";
                // line 142
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "PROFILE_FIELD1_NAME");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</strong> ";
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "PROFILE_FIELD1_VALUE");
                echo "</dd>
\t\t";
            }
            // line 144
            echo "
\t\t";
            // line 145
            // line 146
            echo "\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "custom_fields"));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_fields"]) {
                // line 147
                echo "\t\t\t";
                if ((!$this->getAttribute((isset($context["custom_fields"]) ? $context["custom_fields"] : null), "S_PROFILE_CONTACT"))) {
                    // line 148
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
                // line 150
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_fields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 151
            echo "\t\t";
            // line 152
            echo "
\t\t";
            // line 153
            // line 154
            echo "\t\t";
            if (((!(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) && twig_length_filter($this->env, $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "contact")))) {
                // line 155
                echo "\t\t\t<dd class=\"profile-contact\">
\t\t\t\t<strong>";
                // line 156
                echo $this->env->getExtension('phpbb')->lang("CONTACT");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</strong>
\t\t\t\t<div class=\"dropdown-container dropdown-left\">
\t\t\t\t\t<a href=\"#\" class=\"dropdown-trigger\"><span class=\"imageset icon_contact\" title=\"";
                // line 158
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "CONTACT_USER");
                echo "\">";
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "CONTACT_USER");
                echo "</span></a>
\t\t\t\t\t<div class=\"dropdown hidden\">
\t\t\t\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t\t\t\t<div class=\"dropdown-contents contact-icons\">
\t\t\t\t\t\t\t";
                // line 162
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "contact"));
                foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
                    // line 163
                    echo "\t\t\t\t\t\t\t\t";
                    $context["REMAINDER"] = ($this->getAttribute((isset($context["contact"]) ? $context["contact"] : null), "S_ROW_COUNT") % 4);
                    // line 164
                    echo "\t\t\t\t\t\t\t\t";
                    $value = (((isset($context["REMAINDER"]) ? $context["REMAINDER"] : null) == 3) || ($this->getAttribute((isset($context["contact"]) ? $context["contact"] : null), "S_LAST_ROW") && ($this->getAttribute((isset($context["contact"]) ? $context["contact"] : null), "S_NUM_ROWS") < 4)));
                    $context['definition']->set('S_LAST_CELL', $value);
                    // line 165
                    echo "\t\t\t\t\t\t\t\t";
                    if (((isset($context["REMAINDER"]) ? $context["REMAINDER"] : null) == 0)) {
                        // line 166
                        echo "\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t";
                    }
                    // line 168
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
                    // line 169
                    echo $this->getAttribute((isset($context["contact"]) ? $context["contact"] : null), "ID");
                    echo "-icon\">";
                    echo $this->getAttribute((isset($context["contact"]) ? $context["contact"] : null), "NAME");
                    echo "</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
                    // line 171
                    if ((((isset($context["REMAINDER"]) ? $context["REMAINDER"] : null) == 3) || $this->getAttribute((isset($context["contact"]) ? $context["contact"] : null), "S_LAST_ROW"))) {
                        // line 172
                        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                    }
                    // line 174
                    echo "\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 175
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</dd>
\t\t";
            }
            // line 180
            echo "\t\t";
            // line 181
            echo "
\t\t</dl>

\t\t<div class=\"postbody\">
\t\t\t";
            // line 185
            if ($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "S_POST_HIDDEN")) {
                // line 186
                echo "\t\t\t\t";
                if ($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "S_POST_DELETED")) {
                    // line 187
                    echo "\t\t\t\t\t<div class=\"ignore\" id=\"post_hidden";
                    echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POST_ID");
                    echo "\">
\t\t\t\t\t\t";
                    // line 188
                    echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "L_POST_DELETED_MESSAGE");
                    echo "<br />
\t\t\t\t\t\t";
                    // line 189
                    echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "L_POST_DISPLAY");
                    echo "
\t\t\t\t\t</div>
\t\t\t\t";
                } elseif ($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "S_IGNORE_POST")) {
                    // line 192
                    echo "\t\t\t\t\t<div class=\"ignore\" id=\"post_hidden";
                    echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POST_ID");
                    echo "\">
\t\t\t\t\t\t";
                    // line 193
                    echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "L_IGNORE_POST");
                    echo "<br />
\t\t\t\t\t\t";
                    // line 194
                    echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "L_POST_DISPLAY");
                    echo "
\t\t\t\t\t</div>
\t\t\t\t";
                }
                // line 197
                echo "\t\t\t";
            }
            // line 198
            echo "\t\t\t<div id=\"post_content";
            echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POST_ID");
            echo "\"";
            if ($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "S_POST_HIDDEN")) {
                echo " style=\"display: none;\"";
            }
            echo ">

\t\t\t<h3 ";
            // line 200
            if ($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "S_FIRST_ROW")) {
                echo "class=\"first\"";
            }
            echo ">";
            if ($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POST_ICON_IMG")) {
                echo "<img src=\"";
                echo (isset($context["T_ICONS_PATH"]) ? $context["T_ICONS_PATH"] : null);
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POST_ICON_IMG");
                echo "\" width=\"";
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POST_ICON_IMG_WIDTH");
                echo "\" height=\"";
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POST_ICON_IMG_HEIGHT");
                echo "\" alt=\"\" /> ";
            }
            echo "<a href=\"#p";
            echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POST_ID");
            echo "\">";
            echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POST_SUBJECT");
            echo "</a></h3>

\t\t";
            // line 202
            if ((!(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null))) {
                // line 203
                echo "\t\t\t";
                if (((((($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "U_EDIT") || $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "U_DELETE")) || $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "U_REPORT")) || $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "U_WARN")) || $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "U_INFO")) || $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "U_QUOTE"))) {
                    // line 204
                    echo "\t\t\t\t<ul class=\"post-buttons\">
\t\t\t\t\t";
                    // line 205
                    // line 206
                    echo "\t\t\t\t\t";
                    if ($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "U_EDIT")) {
                        // line 207
                        echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
                        // line 208
                        echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "U_EDIT");
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb')->lang("EDIT_POST");
                        echo "\" class=\"button icon-button edit-icon\"><span>";
                        echo $this->env->getExtension('phpbb')->lang("BUTTON_EDIT");
                        echo "</span></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
                    }
                    // line 211
                    echo "\t\t\t\t\t";
                    if ($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "U_DELETE")) {
                        // line 212
                        echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
                        // line 213
                        echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "U_DELETE");
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb')->lang("DELETE_POST");
                        echo "\" class=\"button icon-button delete-icon\"><span>";
                        echo $this->env->getExtension('phpbb')->lang("DELETE_POST");
                        echo "</span></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
                    }
                    // line 216
                    echo "\t\t\t\t\t";
                    if ($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "U_REPORT")) {
                        // line 217
                        echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
                        // line 218
                        echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "U_REPORT");
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb')->lang("REPORT_POST");
                        echo "\" class=\"button icon-button report-icon\"><span>";
                        echo $this->env->getExtension('phpbb')->lang("REPORT_POST");
                        echo "</span></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
                    }
                    // line 221
                    echo "\t\t\t\t\t";
                    if ($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "U_WARN")) {
                        // line 222
                        echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
                        // line 223
                        echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "U_WARN");
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb')->lang("WARN_USER");
                        echo "\" class=\"button icon-button warn-icon\"><span>";
                        echo $this->env->getExtension('phpbb')->lang("WARN_USER");
                        echo "</span></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
                    }
                    // line 226
                    echo "\t\t\t\t\t";
                    if ($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "U_INFO")) {
                        // line 227
                        echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
                        // line 228
                        echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "U_INFO");
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb')->lang("INFORMATION");
                        echo "\" class=\"button icon-button info-icon\"><span>";
                        echo $this->env->getExtension('phpbb')->lang("INFORMATION");
                        echo "</span></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
                    }
                    // line 231
                    echo "\t\t\t\t\t";
                    if ($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "U_QUOTE")) {
                        // line 232
                        echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
                        // line 233
                        echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "U_QUOTE");
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb')->lang("REPLY_WITH_QUOTE");
                        echo "\" class=\"button icon-button quote-icon\"><span>";
                        echo $this->env->getExtension('phpbb')->lang("QUOTE");
                        echo "</span></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
                    }
                    // line 236
                    echo "\t\t\t\t\t";
                    // line 237
                    echo "\t\t\t\t</ul>
\t\t\t";
                }
                // line 239
                echo "\t\t";
            }
            // line 240
            echo "
\t\t\t<p class=\"author\">";
            // line 241
            if ((isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) {
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "MINI_POST_IMG");
            } else {
                echo "<a href=\"";
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "U_MINI_POST");
                echo "\">";
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "MINI_POST_IMG");
                echo "</a>";
            }
            echo "<span class=\"responsive-hide\">";
            echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
            echo " <strong>";
            echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POST_AUTHOR_FULL");
            echo "</strong> &raquo; </span>";
            echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POST_DATE");
            echo " </p>

\t\t\t";
            // line 243
            if ($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "S_POST_UNAPPROVED")) {
                // line 244
                echo "\t\t\t<form method=\"post\" class=\"mcp_approve\" action=\"";
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "U_APPROVE_ACTION");
                echo "\">
\t\t\t\t<p class=\"post-notice unapproved\">
\t\t\t\t\t<strong>";
                // line 246
                echo $this->env->getExtension('phpbb')->lang("POST_UNAPPROVED_ACTION");
                echo "</strong>
\t\t\t\t\t<input class=\"button2\" type=\"submit\" value=\"";
                // line 247
                echo $this->env->getExtension('phpbb')->lang("DISAPPROVE");
                echo "\" name=\"action[disapprove]\" />
\t\t\t\t\t<input class=\"button1\" type=\"submit\" value=\"";
                // line 248
                echo $this->env->getExtension('phpbb')->lang("APPROVE");
                echo "\" name=\"action[approve]\" />
\t\t\t\t\t<input type=\"hidden\" name=\"post_id_list[]\" value=\"";
                // line 249
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POST_ID");
                echo "\" />
\t\t\t\t\t";
                // line 250
                echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
                echo "
\t\t\t\t</p>
\t\t\t</form>
\t\t\t";
            } elseif ($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "S_POST_DELETED")) {
                // line 254
                echo "\t\t\t<form method=\"post\" class=\"mcp_approve\" action=\"";
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "U_APPROVE_ACTION");
                echo "\">
\t\t\t\t<p class=\"post-notice deleted\">
\t\t\t\t\t<strong>";
                // line 256
                echo $this->env->getExtension('phpbb')->lang("POST_DELETED_ACTION");
                echo "</strong>
\t\t\t\t\t<input class=\"button2\" type=\"submit\" value=\"";
                // line 257
                echo $this->env->getExtension('phpbb')->lang("DELETE");
                echo "\" name=\"action[disapprove]\" />
\t\t\t\t\t<input class=\"button1\" type=\"submit\" value=\"";
                // line 258
                echo $this->env->getExtension('phpbb')->lang("RESTORE");
                echo "\" name=\"action[restore]\" />
\t\t\t\t\t<input type=\"hidden\" name=\"post_id_list[]\" value=\"";
                // line 259
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POST_ID");
                echo "\" />
\t\t\t\t\t";
                // line 260
                echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
                echo "
\t\t\t\t</p>
\t\t\t</form>
\t\t\t";
            }
            // line 264
            echo "
\t\t\t";
            // line 265
            if ($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "S_POST_REPORTED")) {
                // line 266
                echo "\t\t\t<p class=\"post-notice reported\">
\t\t\t\t<a href=\"";
                // line 267
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "U_MCP_REPORT");
                echo "\"><strong>";
                echo $this->env->getExtension('phpbb')->lang("POST_REPORTED");
                echo "</strong></a>
\t\t\t</p>
\t\t\t";
            }
            // line 270
            echo "
\t\t\t<div class=\"content\">";
            // line 271
            echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "MESSAGE");
            echo "</div>

\t\t\t";
            // line 273
            if ($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "S_HAS_ATTACHMENTS")) {
                // line 274
                echo "\t\t\t\t<dl class=\"attachbox\">
\t\t\t\t\t<dt>
\t\t\t\t\t\t";
                // line 276
                echo $this->env->getExtension('phpbb')->lang("ATTACHMENTS");
                echo "
\t\t\t\t\t\t";
                // line 277
                if ($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "S_MULTIPLE_ATTACHMENTS")) {
                    // line 278
                    echo "\t\t\t\t\t\t\t<div class=\"dl_links\">
\t\t\t\t\t\t\t\t<strong>";
                    // line 279
                    echo $this->env->getExtension('phpbb')->lang("DOWNLOAD_ALL");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</strong>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t";
                    // line 281
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "dl_method"));
                    foreach ($context['_seq'] as $context["_key"] => $context["dl_method"]) {
                        // line 282
                        echo "\t\t\t\t\t\t\t\t\t<li>[ <a href=\"";
                        echo $this->getAttribute((isset($context["dl_method"]) ? $context["dl_method"] : null), "LINK");
                        echo "\">";
                        echo $this->getAttribute((isset($context["dl_method"]) ? $context["dl_method"] : null), "TYPE");
                        echo "</a> ]</li>
\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dl_method'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 284
                    echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 287
                echo "\t\t\t\t\t</dt>
\t\t\t\t\t";
                // line 288
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "attachment"));
                foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
                    // line 289
                    echo "\t\t\t\t\t\t<dd>";
                    echo $this->getAttribute((isset($context["attachment"]) ? $context["attachment"] : null), "DISPLAY_ATTACHMENT");
                    echo "</dd>
\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachment'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 291
                echo "\t\t\t\t</dl>
\t\t\t";
            }
            // line 293
            echo "
\t\t\t";
            // line 294
            // line 295
            echo "\t\t\t";
            if ($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "S_DISPLAY_NOTICE")) {
                echo "<div class=\"rules\">";
                echo $this->env->getExtension('phpbb')->lang("DOWNLOAD_NOTICE");
                echo "</div>";
            }
            // line 296
            echo "\t\t\t";
            if (($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "DELETED_MESSAGE") || $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "DELETE_REASON"))) {
                // line 297
                echo "\t\t\t\t<div class=\"notice post_deleted_msg\">
\t\t\t\t\t";
                // line 298
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "DELETED_MESSAGE");
                echo "
\t\t\t\t\t";
                // line 299
                if ($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "DELETE_REASON")) {
                    echo "<br /><strong>";
                    echo $this->env->getExtension('phpbb')->lang("REASON");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</strong> <em>";
                    echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "DELETE_REASON");
                    echo "</em>";
                }
                // line 300
                echo "\t\t\t\t</div>
\t\t\t";
            } elseif (($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "EDITED_MESSAGE") || $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "EDIT_REASON"))) {
                // line 302
                echo "\t\t\t\t<div class=\"notice\">
\t\t\t\t\t";
                // line 303
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "EDITED_MESSAGE");
                echo "
\t\t\t\t\t";
                // line 304
                if ($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "EDIT_REASON")) {
                    echo "<br /><strong>";
                    echo $this->env->getExtension('phpbb')->lang("REASON");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</strong> <em>";
                    echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "EDIT_REASON");
                    echo "</em>";
                }
                // line 305
                echo "\t\t\t\t</div>
\t\t\t";
            }
            // line 307
            echo "
\t\t\t";
            // line 308
            if ($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "BUMPED_MESSAGE")) {
                echo "<div class=\"notice\"><br /><br />";
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "BUMPED_MESSAGE");
                echo "</div>";
            }
            // line 309
            echo "\t\t\t";
            // line 310
            echo "\t\t\t";
            if ($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "SIGNATURE")) {
                echo "<div id=\"sig";
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POST_ID");
                echo "\" class=\"signature\">";
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "SIGNATURE");
                echo "</div>";
            }
            // line 311
            echo "\t\t\t</div>

\t\t</div>

\t\t<div class=\"back2top\"><a href=\"#wrap\" class=\"top\" title=\"";
            // line 315
            echo $this->env->getExtension('phpbb')->lang("BACK_TO_TOP");
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("BACK_TO_TOP");
            echo "</a></div>

\t\t</div>
\t</div>

\t<hr class=\"divider\" />
\t";
            // line 321
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['postrow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 323
        echo "
";
        // line 324
        if ((isset($context["S_QUICK_REPLY"]) ? $context["S_QUICK_REPLY"] : null)) {
            // line 325
            echo "\t";
            $location = "quickreply_editor.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->env->loadTemplate("quickreply_editor.html")->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 327
        echo "
";
        // line 328
        if ((((isset($context["S_NUM_POSTS"]) ? $context["S_NUM_POSTS"] : null) > 1) || twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination")))) {
            // line 329
            echo "\t<form id=\"viewtopic\" method=\"post\" action=\"";
            echo (isset($context["S_TOPIC_ACTION"]) ? $context["S_TOPIC_ACTION"] : null);
            echo "\">
\t<fieldset class=\"display-options\" style=\"margin-top: 0; \">
\t\t";
            // line 331
            if ((!(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null))) {
                // line 332
                echo "\t\t<label>";
                echo $this->env->getExtension('phpbb')->lang("DISPLAY_POSTS");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo " ";
                echo (isset($context["S_SELECT_SORT_DAYS"]) ? $context["S_SELECT_SORT_DAYS"] : null);
                echo "</label>
\t\t<label>";
                // line 333
                echo $this->env->getExtension('phpbb')->lang("SORT_BY");
                echo " ";
                echo (isset($context["S_SELECT_SORT_KEY"]) ? $context["S_SELECT_SORT_KEY"] : null);
                echo "</label> <label>";
                echo (isset($context["S_SELECT_SORT_DIR"]) ? $context["S_SELECT_SORT_DIR"] : null);
                echo "</label>
\t\t<input type=\"submit\" name=\"sort\" value=\"";
                // line 334
                echo $this->env->getExtension('phpbb')->lang("GO");
                echo "\" class=\"button2\" />
\t\t";
            }
            // line 336
            echo "\t</fieldset>
\t</form>
\t<hr />
";
        }
        // line 340
        echo "
";
        // line 341
        // line 342
        echo "<div class=\"action-bar bottom\">
\t<div class=\"buttons\">
\t";
        // line 344
        if (((!(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) && (isset($context["S_DISPLAY_REPLY_INFO"]) ? $context["S_DISPLAY_REPLY_INFO"] : null))) {
            // line 345
            echo "\t\t<a href=\"";
            echo (isset($context["U_POST_REPLY_TOPIC"]) ? $context["U_POST_REPLY_TOPIC"] : null);
            echo "\" class=\"button icon-button ";
            if ((isset($context["S_IS_LOCKED"]) ? $context["S_IS_LOCKED"] : null)) {
                echo "locked-icon";
            } else {
                echo "reply-icon";
            }
            echo "\" title=\"";
            if ((isset($context["S_IS_LOCKED"]) ? $context["S_IS_LOCKED"] : null)) {
                echo $this->env->getExtension('phpbb')->lang("TOPIC_LOCKED");
            } else {
                echo $this->env->getExtension('phpbb')->lang("POST_REPLY");
            }
            echo "\">
\t\t\t";
            // line 346
            if ((isset($context["S_IS_LOCKED"]) ? $context["S_IS_LOCKED"] : null)) {
                echo $this->env->getExtension('phpbb')->lang("BUTTON_TOPIC_LOCKED");
            } else {
                echo $this->env->getExtension('phpbb')->lang("BUTTON_POST_REPLY");
            }
            // line 347
            echo "\t\t</a>
\t";
        }
        // line 349
        echo "\t</div>

\t";
        // line 351
        $location = "viewtopic_topic_tools.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->env->loadTemplate("viewtopic_topic_tools.html")->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 352
        echo "
\t";
        // line 353
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "quickmod"))) {
            // line 354
            echo "\t\t<div class=\"dropdown-container dropdown-container-";
            echo (isset($context["S_CONTENT_FLOW_BEGIN"]) ? $context["S_CONTENT_FLOW_BEGIN"] : null);
            echo " dropdown-up dropdown-";
            echo (isset($context["S_CONTENT_FLOW_END"]) ? $context["S_CONTENT_FLOW_END"] : null);
            echo " dropdown-button-control\" id=\"quickmod\">
\t\t\t<span title=\"";
            // line 355
            echo $this->env->getExtension('phpbb')->lang("QUICK_MOD");
            echo "\" class=\"dropdown-trigger button icon-button modtools-icon dropdown-select\">";
            echo $this->env->getExtension('phpbb')->lang("QUICK_MOD");
            echo "</span>
\t\t\t<div class=\"dropdown hidden\">
\t\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t\t<ul class=\"dropdown-contents\">
\t\t\t\t";
            // line 359
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "quickmod"));
            foreach ($context['_seq'] as $context["_key"] => $context["quickmod"]) {
                // line 360
                echo "\t\t\t\t\t";
                $value = twig_in_filter($this->getAttribute((isset($context["quickmod"]) ? $context["quickmod"] : null), "VALUE"), array(0 => "lock", 1 => "unlock", 2 => "delete_topic", 3 => "restore_topic", 4 => "make_normal", 5 => "make_sticky", 6 => "make_announce", 7 => "make_global"));
                $context['definition']->set('QUICKMOD_AJAX', $value);
                // line 361
                echo "\t\t\t\t\t<li><a href=\"";
                echo $this->getAttribute((isset($context["quickmod"]) ? $context["quickmod"] : null), "LINK");
                echo "\"";
                if ($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "QUICKMOD_AJAX")) {
                    echo " data-ajax=\"true\" data-refresh=\"true\"";
                }
                echo ">";
                echo $this->getAttribute((isset($context["quickmod"]) ? $context["quickmod"] : null), "TITLE");
                echo "</a></li>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quickmod'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 363
            echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 367
        echo "
\t";
        // line 368
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination")) || (isset($context["TOTAL_POSTS"]) ? $context["TOTAL_POSTS"] : null))) {
            // line 369
            echo "\t\t<div class=\"pagination\">
\t\t\t";
            // line 370
            echo (isset($context["TOTAL_POSTS"]) ? $context["TOTAL_POSTS"] : null);
            echo " 
\t\t\t";
            // line 371
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination"))) {
                // line 372
                echo "\t\t\t\t";
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
                // line 373
                echo "\t\t\t";
            } else {
                // line 374
                echo "\t\t\t\t&bull; ";
                echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
                echo "
\t\t\t";
            }
            // line 376
            echo "\t\t</div>
\t";
        }
        // line 378
        echo "\t<div class=\"clear\"></div>
</div>

";
        // line 381
        // line 382
        $location = "jumpbox.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->env->loadTemplate("jumpbox.html")->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 383
        echo "
";
        // line 384
        if ((isset($context["S_DISPLAY_ONLINE_LIST"]) ? $context["S_DISPLAY_ONLINE_LIST"] : null)) {
            // line 385
            echo "\t<div class=\"stat-block online-list\">
\t\t<h3>";
            // line 386
            if ((isset($context["U_VIEWONLINE"]) ? $context["U_VIEWONLINE"] : null)) {
                echo "<a href=\"";
                echo (isset($context["U_VIEWONLINE"]) ? $context["U_VIEWONLINE"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("WHO_IS_ONLINE");
                echo "</a>";
            } else {
                echo $this->env->getExtension('phpbb')->lang("WHO_IS_ONLINE");
            }
            echo "</h3>
\t\t<p>";
            // line 387
            echo (isset($context["LOGGED_IN_USER_LIST"]) ? $context["LOGGED_IN_USER_LIST"] : null);
            echo "</p>
\t</div>
";
        }
        // line 390
        echo "
";
        // line 391
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->env->loadTemplate("overall_footer.html")->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "viewtopic_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1425 => 391,  1422 => 390,  1416 => 387,  1404 => 386,  1401 => 385,  1399 => 384,  1396 => 383,  1384 => 382,  1383 => 381,  1378 => 378,  1374 => 376,  1368 => 374,  1365 => 373,  1352 => 372,  1350 => 371,  1346 => 370,  1343 => 369,  1341 => 368,  1338 => 367,  1332 => 363,  1317 => 361,  1313 => 360,  1309 => 359,  1300 => 355,  1293 => 354,  1291 => 353,  1288 => 352,  1276 => 351,  1272 => 349,  1268 => 347,  1262 => 346,  1245 => 345,  1243 => 344,  1239 => 342,  1238 => 341,  1235 => 340,  1229 => 336,  1224 => 334,  1216 => 333,  1208 => 332,  1206 => 331,  1200 => 329,  1198 => 328,  1195 => 327,  1181 => 325,  1179 => 324,  1176 => 323,  1171 => 321,  1160 => 315,  1154 => 311,  1145 => 310,  1143 => 309,  1137 => 308,  1134 => 307,  1130 => 305,  1121 => 304,  1117 => 303,  1114 => 302,  1110 => 300,  1101 => 299,  1097 => 298,  1094 => 297,  1091 => 296,  1084 => 295,  1083 => 294,  1080 => 293,  1076 => 291,  1067 => 289,  1063 => 288,  1060 => 287,  1055 => 284,  1044 => 282,  1040 => 281,  1034 => 279,  1031 => 278,  1029 => 277,  1025 => 276,  1021 => 274,  1019 => 273,  1014 => 271,  1011 => 270,  1003 => 267,  1000 => 266,  998 => 265,  995 => 264,  988 => 260,  984 => 259,  980 => 258,  976 => 257,  972 => 256,  966 => 254,  959 => 250,  955 => 249,  951 => 248,  947 => 247,  943 => 246,  937 => 244,  935 => 243,  916 => 241,  913 => 240,  910 => 239,  906 => 237,  904 => 236,  894 => 233,  891 => 232,  888 => 231,  878 => 228,  875 => 227,  872 => 226,  862 => 223,  859 => 222,  856 => 221,  846 => 218,  843 => 217,  840 => 216,  830 => 213,  827 => 212,  824 => 211,  814 => 208,  811 => 207,  808 => 206,  807 => 205,  804 => 204,  801 => 203,  799 => 202,  777 => 200,  767 => 198,  764 => 197,  758 => 194,  754 => 193,  749 => 192,  743 => 189,  739 => 188,  734 => 187,  731 => 186,  729 => 185,  723 => 181,  721 => 180,  714 => 175,  708 => 174,  704 => 172,  702 => 171,  695 => 169,  677 => 168,  673 => 166,  670 => 165,  666 => 164,  663 => 163,  659 => 162,  650 => 158,  644 => 156,  641 => 155,  638 => 154,  637 => 153,  634 => 152,  632 => 151,  626 => 150,  615 => 148,  612 => 147,  607 => 146,  606 => 145,  603 => 144,  595 => 142,  592 => 141,  590 => 140,  587 => 139,  577 => 138,  567 => 137,  558 => 136,  555 => 135,  545 => 134,  541 => 132,  532 => 131,  529 => 130,  516 => 129,  514 => 128,  506 => 127,  498 => 126,  470 => 123,  460 => 121,  457 => 120,  455 => 119,  451 => 118,  448 => 117,  439 => 111,  435 => 110,  428 => 106,  425 => 105,  417 => 102,  413 => 100,  411 => 99,  408 => 98,  402 => 95,  398 => 93,  396 => 92,  387 => 89,  380 => 87,  377 => 86,  371 => 85,  370 => 84,  357 => 82,  334 => 81,  308 => 80,  296 => 79,  278 => 78,  276 => 77,  272 => 76,  258 => 73,  254 => 72,  244 => 66,  242 => 65,  237 => 62,  233 => 60,  227 => 58,  224 => 57,  211 => 56,  209 => 55,  198 => 54,  195 => 53,  193 => 52,  190 => 51,  182 => 46,  178 => 45,  174 => 44,  169 => 42,  166 => 41,  164 => 40,  161 => 39,  149 => 38,  145 => 36,  141 => 34,  135 => 33,  118 => 32,  116 => 31,  110 => 27,  104 => 23,  99 => 21,  94 => 20,  86 => 18,  84 => 17,  75 => 14,  73 => 13,  70 => 12,  57 => 9,  54 => 8,  52 => 7,  49 => 6,  43 => 5,  34 => 3,  31 => 2,  19 => 1,);
    }
}
