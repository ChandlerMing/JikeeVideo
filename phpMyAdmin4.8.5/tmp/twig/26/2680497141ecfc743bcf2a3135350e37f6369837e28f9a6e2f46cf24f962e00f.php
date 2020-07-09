<?php

/* database/qbe/footer_options.twig */
class __TwigTemplate_3d977a93291ce73cfb5ed77a48f30617ec1f21bbe9ba41d783614393c2eb9ff5 extends Twig_Template
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
        echo "<div class=\"floatleft\">
    ";
        // line 2
        if ((($context["type"] ?? null) == "row")) {
            // line 3
            echo "        ";
            echo _gettext("Add/Delete criteria rows");
            echo ":
    ";
        } else {
            // line 5
            echo "        ";
            echo _gettext("Add/Delete columns");
            echo ":
    ";
        }
        // line 7
        echo "    <select size=\"1\" name=\"";
        echo (((($context["type"] ?? null) == "row")) ? ("criteriaRowAdd") : ("criteriaColumnAdd"));
        echo "\">
        <option value=\"-3\">-3</option>
        <option value=\"-2\">-2</option>
        <option value=\"-1\">-1</option>
        <option value=\"0\" selected=\"selected\">0</option>
        <option value=\"1\">1</option>
        <option value=\"2\">2</option>
        <option value=\"3\">3</option>
    </select>
</div>
";
    }

    public function getTemplateName()
    {
        return "database/qbe/footer_options.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 7,  30 => 5,  24 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "database/qbe/footer_options.twig", "D:\\mywebs\\jikeevideo\\phpMyAdmin4.8.5\\templates\\database\\qbe\\footer_options.twig");
    }
}
