<?php

/* database/designer/where_query_panel.twig */
class __TwigTemplate_6af3cabf38531c216fdcd58fe7c910bb8f67a452e2efafd9da4a30b134837ebd extends Twig_Template
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
        echo "<table id=\"query_where\" class=\"hide\" width=\"5%\" cellpadding=\"0\" cellspacing=\"0\">
    <tbody>
        <tr>
            <td class=\"frams1\" width=\"10px\">
            </td>
            <td class=\"frams5\" width=\"99%\" >
            </td>
            <td class=\"frams2\" width=\"10px\">
                <div class=\"bor\">
                </div>
            </td>
        </tr>
        <tr>
            <td class=\"frams8\">
            </td>
            <td class=\"input_tab\">
                <table width=\"168\" class=\"center\" cellpadding=\"2\" cellspacing=\"0\">
                    <thead>
                        <tr>
                            <td colspan=\"2\" class=\"center nowrap\">
                                <strong>
                                    WHERE
                                </strong>
                            </td>
                        </tr>
                    </thead>
                    <tbody id=\"rename_to\">
                        <tr>
                            <td width=\"58\" class=\"nowrap\">
                                ";
        // line 30
        echo _gettext("Operator");
        // line 31
        echo "                            </td>
                            <td width=\"102\">
                                <select name=\"erel_opt\" id=\"erel_opt\">
                                    <option value=\"--\" selected=\"selected\">
                                        --
                                    </option>
                                    <option value=\"=\" >
                                        =
                                    </option>
                                    <option value=\"&gt;\">
                                        &gt;
                                    </option>
                                    <option value=\"&lt;\">
                                        &lt;
                                    </option>
                                    <option value=\"&gt;=\">
                                        &gt;=
                                    </option>
                                    <option value=\"&lt;=\">
                                        &lt;=
                                    </option>
                                    <option value=\"NOT\">
                                        NOT
                                    </option>
                                    <option value=\"IN\">
                                        IN
                                    </option>
                                    <option value=\"EXCEPT\">
                                        ";
        // line 59
        echo _gettext("Except");
        // line 60
        echo "                                    </option>
                                    <option value=\"NOT IN\">
                                        NOT IN
                                    </option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class=\"nowrap\">
                                ";
        // line 69
        echo _gettext("Value");
        // line 70
        echo "                                <br />
                                ";
        // line 71
        echo _gettext("subquery");
        // line 72
        echo "                            </td>
                            <td>
                                <textarea id=\"eQuery\" cols=\"18\">
                                </textarea>
                            </td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td colspan=\"2\" class=\"center nowrap\">
                                <input type=\"button\" id=\"ok_edit_where\" class=\"butt\"
                                    name=\"Button\" value=\"";
        // line 83
        echo _gettext("OK");
        echo "\" />
                                <input id=\"query_where_button\" type=\"button\" class=\"butt\" name=\"Button\"
                                       value=\"";
        // line 85
        echo _gettext("Cancel");
        echo "\" />
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
            <td class=\"frams6\">
            </td>
        </tr>
        <tr>
            <td class=\"frams4\">
                <div class=\"bor\">
                </div>
            </td>
            <td class=\"frams7\">
            </td>
            <td class=\"frams3\">
            </td>
        </tr>
    </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "database/designer/where_query_panel.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 85,  115 => 83,  102 => 72,  100 => 71,  97 => 70,  95 => 69,  84 => 60,  82 => 59,  52 => 31,  50 => 30,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "database/designer/where_query_panel.twig", "D:\\mywebs\\jikeevideo\\phpMyAdmin4.8.5\\templates\\database\\designer\\where_query_panel.twig");
    }
}
