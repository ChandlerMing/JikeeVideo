<?php

/* table/relation/dropdown_generate.twig */
class __TwigTemplate_efed243f26d1ab167f0ad28ce7db587f77d69cc1289c0f13af93d4e14f4e8ac5 extends Twig_Template
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
        echo twig_escape_filter($this->env, (( !twig_test_empty(($context["dropdown_question"] ?? null))) ? (($context["dropdown_question"] ?? null)) : ("")), "html", null, true);
        // line 2
        echo "<select name=\"";
        echo twig_escape_filter($this->env, ($context["select_name"] ?? null), "html", null, true);
        echo "\">
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["choices"] ?? null));
        foreach ($context['_seq'] as $context["one_value"] => $context["one_label"]) {
            // line 4
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, $context["one_value"], "html", null, true);
            echo "\"";
            // line 5
            if ((($context["selected_value"] ?? null) == $context["one_value"])) {
                echo " selected=\"selected\"";
            }
            echo ">
        ";
            // line 6
            echo twig_escape_filter($this->env, $context["one_label"], "html", null, true);
            echo "
    </option>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['one_value'], $context['one_label'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "</select>
";
    }

    public function getTemplateName()
    {
        return "table/relation/dropdown_generate.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 9,  40 => 6,  34 => 5,  30 => 4,  26 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "table/relation/dropdown_generate.twig", "F:\\mywebs\\jikeevideo\\phpMyAdmin4.8.5\\templates\\table\\relation\\dropdown_generate.twig");
    }
}
