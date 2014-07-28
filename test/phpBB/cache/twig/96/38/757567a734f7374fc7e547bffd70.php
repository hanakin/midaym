<?php

/* mcp_warn_post.html */
class __TwigTemplate_9638757567a734f7374fc7e547bffd70 extends Twig_Template
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
<form method=\"post\" id=\"mcp\" action=\"";
        // line 3
        echo (isset($context["U_POST_ACTION"]) ? $context["U_POST_ACTION"] : null);
        echo "\">

<h2>";
        // line 5
        echo $this->env->getExtension('phpbb')->lang("MCP_WARN_POST");
        echo "</h2>

<div class=\"panel\">
\t<div class=\"inner\">

\t<h3>";
        // line 10
        if ((isset($context["USER_COLOR"]) ? $context["USER_COLOR"] : null)) {
            echo "<span style=\"color: #";
            echo (isset($context["USER_COLOR"]) ? $context["USER_COLOR"] : null);
            echo "\">";
            echo (isset($context["USERNAME"]) ? $context["USERNAME"] : null);
            echo "</span>";
        } else {
            echo (isset($context["USERNAME"]) ? $context["USERNAME"] : null);
        }
        echo "</h3>

\t<div>
\t\t<div class=\"column1\">
\t\t\t";
        // line 14
        if ((isset($context["AVATAR_IMG"]) ? $context["AVATAR_IMG"] : null)) {
            echo "<div>";
            echo (isset($context["AVATAR_IMG"]) ? $context["AVATAR_IMG"] : null);
            echo "</div>";
        }
        // line 15
        echo "\t\t</div>

\t\t<div class=\"column2\">
\t\t\t<dl class=\"details\">
\t\t\t\t";
        // line 19
        if ((isset($context["RANK_TITLE"]) ? $context["RANK_TITLE"] : null)) {
            echo "<dt>";
            echo $this->env->getExtension('phpbb')->lang("RANK");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</dt><dd>";
            echo (isset($context["RANK_TITLE"]) ? $context["RANK_TITLE"] : null);
            echo "</dd>";
        }
        // line 20
        echo "\t\t\t\t";
        if ((isset($context["RANK_IMG"]) ? $context["RANK_IMG"] : null)) {
            echo "<dt>";
            if ((isset($context["RANK_TITLE"]) ? $context["RANK_TITLE"] : null)) {
                echo "&nbsp;";
            } else {
                echo $this->env->getExtension('phpbb')->lang("RANK");
                echo $this->env->getExtension('phpbb')->lang("COLON");
            }
            echo "</dt><dd>";
            echo (isset($context["RANK_IMG"]) ? $context["RANK_IMG"] : null);
            echo "</dd>";
        }
        // line 21
        echo "\t\t\t\t<dt>";
        echo $this->env->getExtension('phpbb')->lang("JOINED");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</dt><dd>";
        echo (isset($context["JOINED"]) ? $context["JOINED"] : null);
        echo "</dd>
\t\t\t\t<dt>";
        // line 22
        echo $this->env->getExtension('phpbb')->lang("TOTAL_POSTS");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</dt><dd>";
        echo (isset($context["POSTS"]) ? $context["POSTS"] : null);
        echo "</dd>
\t\t\t\t<dt>";
        // line 23
        echo $this->env->getExtension('phpbb')->lang("WARNINGS");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo " </dt><dd>";
        echo (isset($context["WARNINGS"]) ? $context["WARNINGS"] : null);
        echo "</dd>
\t\t\t</dl>
\t\t</div>
\t</div>

\t</div>
</div>

<div class=\"panel\">
\t<div class=\"inner\">

\t<h3>";
        // line 34
        echo $this->env->getExtension('phpbb')->lang("POST_DETAILS");
        echo "</h3>

\t<div class=\"postbody\">

\t\t<div class=\"content\">
\t\t\t";
        // line 39
        echo (isset($context["POST"]) ? $context["POST"] : null);
        echo "
\t\t</div>

\t</div>

\t</div>
</div>

<div class=\"panel\">
\t<div class=\"inner\">

\t<h3>";
        // line 50
        echo $this->env->getExtension('phpbb')->lang("ADD_WARNING");
        echo "</h3>
\t<p>";
        // line 51
        echo $this->env->getExtension('phpbb')->lang("ADD_WARNING_EXPLAIN");
        echo "</p>

\t<fieldset>
\t\t<textarea name=\"warning\" id=\"warning\" class=\"inputbox\" cols=\"40\" rows=\"3\">";
        // line 54
        echo $this->env->getExtension('phpbb')->lang("WARNING_POST_DEFAULT");
        echo "</textarea>
\t\t";
        // line 55
        if ((isset($context["S_CAN_NOTIFY"]) ? $context["S_CAN_NOTIFY"] : null)) {
            // line 56
            echo "\t\t<br /><br />
\t\t<dl class=\"panel\">
\t\t\t<dt>&nbsp;</dt>
\t\t\t<dd><label><input type=\"checkbox\" name=\"notify_user\" checked=\"checked\" /> ";
            // line 59
            echo $this->env->getExtension('phpbb')->lang("NOTIFY_USER_WARN");
            echo "</label></dd>
\t\t</dl>
\t\t";
        }
        // line 62
        echo "\t</fieldset>

\t</div>
</div>

<fieldset class=\"submit-buttons\">
\t<input type=\"reset\" value=\"";
        // line 68
        echo $this->env->getExtension('phpbb')->lang("RESET");
        echo "\" name=\"reset\" class=\"button2\" />&nbsp; 
\t<input type=\"submit\" name=\"action[add_warning]\" value=\"";
        // line 69
        echo $this->env->getExtension('phpbb')->lang("SUBMIT");
        echo "\" class=\"button1\" />
\t";
        // line 70
        echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
        echo "
</fieldset>
</form>

";
        // line 74
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
        return "mcp_warn_post.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 74,  194 => 70,  190 => 69,  186 => 68,  178 => 62,  172 => 59,  167 => 56,  165 => 55,  161 => 54,  155 => 51,  151 => 50,  137 => 39,  129 => 34,  112 => 23,  105 => 22,  97 => 21,  83 => 20,  74 => 19,  68 => 15,  62 => 14,  47 => 10,  39 => 5,  34 => 3,  31 => 2,  19 => 1,);
    }
}
