<?php

/* ucp_footer.html */
class __TwigTemplate_a6999e12f3a60fc40fe58ada3fa071f3 extends Twig_Template
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
\t\t</div>

\t</div>
\t</div>
</div>
";
        // line 7
        if ((isset($context["S_COMPOSE_PM"]) ? $context["S_COMPOSE_PM"] : null)) {
            // line 8
            echo "<div>";
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "</div>
</form>
";
        }
        // line 11
        echo "
";
        // line 12
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
        // line 13
        echo "
";
        // line 14
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
        return "ucp_footer.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 13,  29 => 8,  27 => 7,  203 => 60,  199 => 58,  196 => 57,  174 => 53,  167 => 51,  157 => 49,  152 => 47,  150 => 46,  147 => 45,  141 => 41,  116 => 33,  112 => 31,  106 => 28,  90 => 23,  83 => 22,  74 => 18,  54 => 14,  52 => 12,  49 => 11,  47 => 10,  37 => 7,  30 => 3,  362 => 97,  356 => 94,  354 => 93,  348 => 92,  347 => 91,  334 => 90,  303 => 84,  298 => 81,  295 => 80,  293 => 79,  285 => 77,  283 => 76,  274 => 75,  271 => 74,  255 => 71,  239 => 68,  224 => 63,  221 => 62,  209 => 57,  205 => 55,  195 => 52,  187 => 54,  184 => 50,  183 => 49,  172 => 52,  155 => 48,  148 => 40,  146 => 39,  132 => 37,  120 => 35,  104 => 33,  98 => 29,  94 => 27,  87 => 25,  69 => 21,  61 => 14,  58 => 18,  48 => 15,  43 => 8,  40 => 12,  39 => 12,  32 => 7,  26 => 6,  350 => 98,  343 => 93,  325 => 91,  321 => 90,  317 => 89,  311 => 85,  309 => 86,  306 => 85,  299 => 78,  280 => 76,  273 => 74,  251 => 72,  247 => 70,  242 => 69,  236 => 65,  234 => 64,  223 => 60,  220 => 61,  212 => 57,  201 => 54,  198 => 53,  190 => 55,  180 => 48,  175 => 46,  159 => 43,  143 => 38,  131 => 40,  121 => 35,  117 => 34,  109 => 32,  101 => 30,  99 => 27,  96 => 26,  93 => 27,  88 => 26,  86 => 25,  75 => 16,  67 => 17,  65 => 13,  45 => 14,  41 => 7,  461 => 134,  448 => 132,  445 => 131,  439 => 128,  435 => 127,  431 => 126,  425 => 125,  418 => 124,  415 => 123,  413 => 122,  407 => 118,  402 => 115,  397 => 113,  392 => 112,  380 => 111,  376 => 110,  372 => 99,  360 => 96,  353 => 101,  340 => 100,  337 => 99,  335 => 98,  332 => 89,  328 => 88,  322 => 93,  319 => 87,  312 => 91,  310 => 90,  307 => 89,  302 => 86,  291 => 82,  276 => 75,  267 => 72,  262 => 77,  250 => 76,  238 => 75,  235 => 74,  229 => 65,  226 => 64,  218 => 69,  213 => 67,  206 => 66,  204 => 54,  200 => 63,  194 => 52,  186 => 48,  182 => 60,  169 => 59,  165 => 58,  156 => 42,  149 => 52,  145 => 51,  140 => 41,  138 => 47,  135 => 40,  127 => 37,  124 => 36,  122 => 41,  119 => 34,  113 => 37,  110 => 36,  108 => 35,  105 => 34,  97 => 28,  92 => 27,  80 => 21,  72 => 22,  66 => 12,  60 => 10,  55 => 8,  53 => 7,  50 => 16,  36 => 11,  34 => 3,  31 => 2,  19 => 1,);
    }
}
