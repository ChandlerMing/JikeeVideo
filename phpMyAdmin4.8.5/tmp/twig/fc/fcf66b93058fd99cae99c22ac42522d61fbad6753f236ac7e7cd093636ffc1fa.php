<?php

/* table/relation/relational_dropdown.twig */
class __TwigTemplate_6b83fb6190603ed7703772d7c0d2b667d67bb836039741f941873fc26adb0858 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<select name=\"";
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "\">
    <option value=\"\"></option>
    ";
        // line 3
        $context["seen_key"] = false;
        // line 4
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["values"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 5
            echo "        <option value=\"";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\"";
            // line 6
            if (( !(($context["foreign"] ?? null) === false) && ($context["value"] == ($context["foreign"] ?? null)))) {
                // line 7
                echo "                selected=\"selected\"";
                // line 8
                $context["seen_key"] = true;
            }
            // line 9
            echo ">
            ";
            // line 10
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "
        </option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "    ";
        if (( !(($context["foreign"] ?? null) === false) &&  !($context["seen_key"] ?? null))) {
            // line 14
            echo "        <option value=\"";
            echo twig_escape_filter($this->env, ($context["foreign"] ?? null), "html", null, true);
            echo "\" selected=\"selected\">
            ";
            // line 15
            echo twig_escape_filter($this->env, ($context["foreign"] ?? null), "html", null, true);
            echo "
        </option>
    ";
        }
        // line 18
        echo "</select>
";
    }

    public function getTemplateName()
    {
        return "table/relation/relational_dropdown.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  65 => 15,  60 => 14,  57 => 13,  48 => 10,  45 => 9,  42 => 8,  40 => 7,  38 => 6,  34 => 5,  29 => 4,  27 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "table/relation/relational_dropdown.twig", "F:\\mywebs\\jikeevideo\\phpMyAdmin4.8.5\\templates\\table\\relation\\relational_dropdown.twig");
    }
}
