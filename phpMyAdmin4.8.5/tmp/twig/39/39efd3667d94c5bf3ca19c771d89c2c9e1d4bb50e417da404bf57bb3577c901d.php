<?php

/* database/designer/options_panel.twig */
class __TwigTemplate_3250fc7b19b88b5f8a42a79c17f2414e3f9e039327961f612fc080b52c62c06b extends Twig_Template
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
        echo "<table id=\"designer_optionse\" class=\"hide\" width=\"5%\" cellpadding=\"0\" cellspacing=\"0\">
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
                            <td colspan=\"2\" rowspan=\"2\" id=\"option_col_name\" class=\"center nowrap\">
                            </td>
                        </tr>
                    </thead>
                    <tbody id=\"where\">
                        <tr>
                            <td class=\"center nowrap\">
                                <b>
                                    WHERE
                                </b>
                            </td>
                        </tr>
                        <tr>
                            <td width=\"58\" class=\"nowrap\">
                                ";
        // line 34
        echo _gettext("Relationship operator");
        // line 35
        echo "                            </td>
                            <td width=\"102\">
                                <select name=\"rel_opt\" id=\"rel_opt\">
                                    <option value=\"--\" selected=\"selected\">
                                        --
                                    </option>
                                    <option value=\"=\">
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
        // line 63
        echo _gettext("Except");
        // line 64
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
        // line 73
        echo _gettext("Value");
        // line 74
        echo "                                <br />
                                ";
        // line 75
        echo _gettext("subquery");
        // line 76
        echo "                            </td>
                            <td>
                                <textarea id=\"Query\" cols=\"18\"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td class=\"center nowrap\">
                                <b>
                                    ";
        // line 84
        echo _gettext("Rename to");
        // line 85
        echo "                                </b>
                            </td>
                        </tr>
                        <tr>
                            <td width=\"58\" class=\"nowrap\">
                                ";
        // line 90
        echo _gettext("New name");
        // line 91
        echo "                            </td>
                            <td width=\"102\">
                                <input type=\"text\" id=\"new_name\"/>
                            </td>
                        </tr>
                        <tr>
                            <td class=\"center nowrap\">
                                <b>
                                    ";
        // line 99
        echo _gettext("Aggregate");
        // line 100
        echo "                                </b>
                            </td>
                        </tr>
                        <tr>
                            <td width=\"58\" class=\"nowrap\">
                                ";
        // line 105
        echo _gettext("Operator");
        // line 106
        echo "                            </td>
                            <td width=\"102\">
                                <select name=\"operator\" id=\"operator\">
                                    <option value=\"---\" selected=\"selected\">
                                        ---
                                    </option>
                                    <option value=\"sum\" >
                                        SUM
                                    </option>
                                    <option value=\"min\">
                                        MIN
                                    </option>
                                    <option value=\"max\">
                                        MAX
                                    </option>
                                    <option value=\"avg\">
                                        AVG
                                    </option>
                                    <option value=\"count\">
                                        COUNT
                                    </option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td width=\"58\" class=\"center nowrap\">
                                <b>
                                    GROUP BY
                                </b>
                            </td>
                            <td>
                                <input type=\"checkbox\" value=\"groupby\" id=\"groupby\"/>
                            </td>
                        </tr>
                        <tr>
                            <td width=\"58\" class=\"center nowrap\">
                                <b>
                                    ORDER BY
                                </b>
                            </td>
                            <td>
                                <select name=\"orderby\" id=\"orderby\">
                                    <option value=\"---\" selected=\"selected\">
                                        ---
                                    </option>
                                    <option value=\"ASC\" >
                                        ASC
                                    </option>
                                    <option value=\"DESC\">
                                        DESC
                                    </option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class=\"center nowrap\">
                                <b>
                                    HAVING
                                </b>
                            </td>
                        </tr>
                        <tr>
                            <td width=\"58\" class=\"nowrap\">
                                ";
        // line 169
        echo _gettext("Operator");
        // line 170
        echo "                            </td>
                            <td width=\"102\">
                                <select name=\"h_operator\" id=\"h_operator\">
                                    <option value=\"---\" selected=\"selected\">
                                        ---
                                    </option>
                                    <option value=\"None\" >
                                        ";
        // line 177
        echo _gettext("None");
        // line 178
        echo "                                    </option>
                                    <option value=\"sum\" >
                                        SUM
                                    </option>
                                    <option value=\"min\">
                                        MIN
                                    </option>
                                    <option value=\"max\">
                                        MAX
                                    </option>
                                    <option value=\"avg\">
                                        AVG
                                    </option>
                                    <option value=\"count\">
                                        COUNT
                                    </option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td width=\"58\" class=\"nowrap\">
                                ";
        // line 199
        echo _gettext("Relationship operator");
        // line 200
        echo "                            </td>
                            <td width=\"102\">
                                <select name=\"h_rel_opt\" id=\"h_rel_opt\">
                                    <option value=\"--\" selected=\"selected\">
                                        --
                                    </option>
                                    <option value=\"=\">
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
        // line 228
        echo _gettext("Except");
        // line 229
        echo "                                    </option>
                                    <option value=\"NOT IN\">
                                        NOT IN
                                    </option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td width=\"58\" class=\"nowrap\">
                                ";
        // line 238
        echo _gettext("Value");
        // line 239
        echo "                                <br/>
                                ";
        // line 240
        echo _gettext("subquery");
        // line 241
        echo "                            </td>
                            <td width=\"102\">
                                <textarea id=\"having\" cols=\"18\"></textarea>
                            </td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td colspan=\"2\" class=\"center nowrap\">
                                <input type=\"button\" id=\"ok_add_object\" class=\"butt\"
                                    name=\"Button\" value=\"";
        // line 251
        echo _gettext("OK");
        echo "\" />
                                <input type=\"button\" id=\"cancel_close_option\" class=\"butt\"
                                    name=\"Button\" value=\"";
        // line 253
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
        return "database/designer/options_panel.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  318 => 253,  313 => 251,  301 => 241,  299 => 240,  296 => 239,  294 => 238,  283 => 229,  281 => 228,  251 => 200,  249 => 199,  226 => 178,  224 => 177,  215 => 170,  213 => 169,  148 => 106,  146 => 105,  139 => 100,  137 => 99,  127 => 91,  125 => 90,  118 => 85,  116 => 84,  106 => 76,  104 => 75,  101 => 74,  99 => 73,  88 => 64,  86 => 63,  56 => 35,  54 => 34,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "database/designer/options_panel.twig", "D:\\mywebs\\jikeevideo\\phpMyAdmin4.8.5\\templates\\database\\designer\\options_panel.twig");
    }
}
