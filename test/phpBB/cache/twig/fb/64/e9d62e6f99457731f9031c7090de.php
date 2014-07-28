<?php

/* mcp_approve.html */
class __TwigTemplate_fb64e9d62e6f99457731f9031c7090de extends Twig_Template
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
        if ((isset($context["S_AJAX_REQUEST"]) ? $context["S_AJAX_REQUEST"] : null)) {
            // line 2
            echo "
\t<h3>";
            // line 3
            echo (isset($context["MESSAGE_TITLE"]) ? $context["MESSAGE_TITLE"] : null);
            echo "</h3>
\t<p>";
            // line 4
            echo (isset($context["MESSAGE_TEXT"]) ? $context["MESSAGE_TEXT"] : null);
            echo "</p>

\t";
            // line 6
            if ((isset($context["S_NOTIFY_POSTER"]) ? $context["S_NOTIFY_POSTER"] : null)) {
                // line 7
                echo "\t\t<label><input type=\"checkbox\" name=\"notify_poster\" checked=\"checked\" /> ";
                if ((isset($context["S_APPROVE"]) ? $context["S_APPROVE"] : null)) {
                    echo $this->env->getExtension('phpbb')->lang("NOTIFY_POSTER_APPROVAL");
                } else {
                    echo $this->env->getExtension('phpbb')->lang("NOTIFY_POSTER_DISAPPROVAL");
                }
                echo "</label>
\t";
            }
            // line 9
            echo "
\t";
            // line 10
            if ((((!(isset($context["S_APPROVE"]) ? $context["S_APPROVE"] : null)) && (!(isset($context["S_RESTORE"]) ? $context["S_RESTORE"] : null))) && twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "reason")))) {
                // line 11
                echo "\t\t<label><strong>";
                echo $this->env->getExtension('phpbb')->lang("DISAPPROVE_REASON");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</strong>
\t\t<select name=\"reason_id\">
\t\t\t";
                // line 13
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "reason"));
                foreach ($context['_seq'] as $context["_key"] => $context["reason"]) {
                    echo "<option value=\"";
                    echo $this->getAttribute((isset($context["reason"]) ? $context["reason"] : null), "ID");
                    echo "\"";
                    if ($this->getAttribute((isset($context["reason"]) ? $context["reason"] : null), "S_SELECTED")) {
                        echo " selected=\"selected\"";
                    }
                    echo ">";
                    echo $this->getAttribute((isset($context["reason"]) ? $context["reason"] : null), "DESCRIPTION");
                    echo "</option>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reason'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 14
                echo "\t\t</select></label>

\t\t<label><strong>";
                // line 16
                echo $this->env->getExtension('phpbb')->lang("MORE_INFO");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</strong><br /><span>";
                echo $this->env->getExtension('phpbb')->lang("CAN_LEAVE_BLANK");
                echo "</span>
\t\t\t<textarea class=\"inputbox\" name=\"reason\" id=\"reason\" rows=\"4\" cols=\"40\">";
                // line 17
                echo (isset($context["REASON"]) ? $context["REASON"] : null);
                echo "</textarea>
\t\t</label>
\t";
            }
            // line 20
            echo "
\t<fieldset class=\"submit-buttons\">
\t\t<input type=\"button\" name=\"confirm\" value=\"";
            // line 22
            echo (isset($context["YES_VALUE"]) ? $context["YES_VALUE"] : null);
            echo "\" class=\"button1\" />&nbsp;
\t\t<input type=\"button\" name=\"cancel\" value=\"";
            // line 23
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "\" class=\"button2\" />
\t</fieldset>

";
        } else {
            // line 27
            echo "
";
            // line 28
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
            // line 29
            echo "
<form id=\"confirm\" action=\"";
            // line 30
            echo (isset($context["S_CONFIRM_ACTION"]) ? $context["S_CONFIRM_ACTION"] : null);
            echo "\" method=\"post\">
<div class=\"panel\">
\t";
            // line 32
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
\t<div class=\"inner\">

\t<div class=\"content\">

\t\t<h2 class=\"message-title\">";
            // line 37
            echo (isset($context["MESSAGE_TITLE"]) ? $context["MESSAGE_TITLE"] : null);
            echo "</h2>
\t\t";
            // line 38
            if ((isset($context["ADDITIONAL_MSG"]) ? $context["ADDITIONAL_MSG"] : null)) {
                echo "<p class=\"error\">";
                echo (isset($context["ADDITIONAL_MSG"]) ? $context["ADDITIONAL_MSG"] : null);
                echo "</p>";
            }
            // line 39
            echo "
\t\t<fieldset>
\t\t";
            // line 41
            if ((isset($context["S_NOTIFY_POSTER"]) ? $context["S_NOTIFY_POSTER"] : null)) {
                // line 42
                echo "\t\t\t<dl class=\"panel\">
\t\t\t\t<dt>&nbsp;</dt>
\t\t\t\t<dd><label><input type=\"checkbox\" name=\"notify_poster\" checked=\"checked\" /> ";
                // line 44
                if ((isset($context["S_APPROVE"]) ? $context["S_APPROVE"] : null)) {
                    echo $this->env->getExtension('phpbb')->lang("NOTIFY_POSTER_APPROVAL");
                } else {
                    echo $this->env->getExtension('phpbb')->lang("NOTIFY_POSTER_DISAPPROVAL");
                }
                echo "</label></dd>
\t\t\t</dl>
\t\t";
            }
            // line 47
            echo "
\t\t";
            // line 48
            if ((((!(isset($context["S_APPROVE"]) ? $context["S_APPROVE"] : null)) && (!(isset($context["S_RESTORE"]) ? $context["S_RESTORE"] : null))) && twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "reason")))) {
                // line 49
                echo "\t\t\t<dl class=\"fields2 nobg\">
\t\t\t\t<dt><label>";
                // line 50
                echo $this->env->getExtension('phpbb')->lang("DISAPPROVE_REASON");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label></dt>
\t\t\t\t<dd><select name=\"reason_id\">
\t\t\t\t\t";
                // line 52
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "reason"));
                foreach ($context['_seq'] as $context["_key"] => $context["reason"]) {
                    echo "<option value=\"";
                    echo $this->getAttribute((isset($context["reason"]) ? $context["reason"] : null), "ID");
                    echo "\"";
                    if ($this->getAttribute((isset($context["reason"]) ? $context["reason"] : null), "S_SELECTED")) {
                        echo " selected=\"selected\"";
                    }
                    echo ">";
                    echo $this->getAttribute((isset($context["reason"]) ? $context["reason"] : null), "DESCRIPTION");
                    echo "</option>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reason'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 53
                echo "\t\t\t\t\t</select>
\t\t\t\t</dd>
\t\t\t</dl>
\t\t\t<dl class=\"fields2 nobg\">
\t\t\t\t<dt><label for=\"reason\">";
                // line 57
                echo $this->env->getExtension('phpbb')->lang("MORE_INFO");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label><br /><span>";
                echo $this->env->getExtension('phpbb')->lang("CAN_LEAVE_BLANK");
                echo "</span></dt>
\t\t\t\t<dd><textarea class=\"inputbox\" name=\"reason\" id=\"reason\" rows=\"4\" cols=\"40\">";
                // line 58
                echo (isset($context["REASON"]) ? $context["REASON"] : null);
                echo "</textarea></dd>
\t\t\t</dl>
\t\t";
            }
            // line 61
            echo "
\t\t<dl class=\"fields2 nobg\">
\t\t\t<dt>&nbsp;</dt>
\t\t\t<dd><strong>";
            // line 64
            echo (isset($context["MESSAGE_TEXT"]) ? $context["MESSAGE_TEXT"] : null);
            echo "</strong></dd>
\t\t</dl>
\t\t</fieldset>

\t\t<fieldset class=\"submit-buttons\">
\t\t\t";
            // line 69
            echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
            echo "<input type=\"submit\" name=\"confirm\" value=\"";
            echo (isset($context["YES_VALUE"]) ? $context["YES_VALUE"] : null);
            echo "\" class=\"button1\" />&nbsp; 
\t\t\t<input type=\"submit\" name=\"cancel\" value=\"";
            // line 70
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "\" class=\"button2\" />
\t\t</fieldset>

\t</div>

\t</div>
</div>

</form>

";
            // line 80
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
    }

    public function getTemplateName()
    {
        return "mcp_approve.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 80,  236 => 70,  230 => 69,  222 => 64,  217 => 61,  211 => 58,  204 => 57,  198 => 53,  181 => 52,  175 => 50,  172 => 49,  170 => 48,  167 => 47,  157 => 44,  153 => 42,  151 => 41,  147 => 39,  141 => 38,  137 => 37,  129 => 32,  124 => 30,  121 => 29,  109 => 28,  106 => 27,  99 => 23,  95 => 22,  91 => 20,  85 => 17,  78 => 16,  74 => 14,  57 => 13,  50 => 11,  48 => 10,  45 => 9,  35 => 7,  33 => 6,  28 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
