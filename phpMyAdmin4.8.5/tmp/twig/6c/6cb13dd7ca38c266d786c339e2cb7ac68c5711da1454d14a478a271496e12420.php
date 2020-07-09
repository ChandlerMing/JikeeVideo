<?php

/* database/designer/query_details.twig */
class __TwigTemplate_09a760eeb8f44553dcb01b2f4d16e184612ec2b13ae62ec78e40a952e9f73e12 extends Twig_Template
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
        echo "<div class=\"panel\">
    <div class=\"clearfloat\"></div>
    <div id=\"ab\"></div>
    <div class=\"clearfloat\"></div>
</div>
<a class=\"trigger\" href=\"#\">";
        // line 6
        echo _gettext("Active options");
        echo "</a>
<div id=\"box\">
    <form method=\"post\" action=\"db_qbe.php\" id=\"vqb_form\">
        <textarea cols=\"80\" name=\"sql_query\" id=\"textSqlquery\" rows=\"15\"></textarea>
        <input type=\"hidden\" name=\"submit_sql\" value=\"true\">
        ";
        // line 11
        echo PhpMyAdmin\Url::getHiddenInputs(($context["db"] ?? null));
        echo "
    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "database/designer/query_details.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 11,  26 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "database/designer/query_details.twig", "D:\\mywebs\\jikeevideo\\phpMyAdmin4.8.5\\templates\\database\\designer\\query_details.twig");
    }
}
