<?php

/* database/designer/rename_to_panel.twig */
class __TwigTemplate_dd70d33978f72a2e0e8322a2b8e0350b43893b3adb5c573848408bbad656e899 extends Twig_Template
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
        echo "<table id=\"query_rename_to\" class=\"hide\" width=\"5%\" cellpadding=\"0\" cellspacing=\"0\">
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
                                    ";
        // line 22
        echo _gettext("Rename to");
        // line 23
        echo "                                </strong>
                            </td>
                        </tr>
                    </thead>
                    <tbody id=\"rename_to\">
                        <tr>
                            <td width=\"58\" class=\"nowrap\">
                                ";
        // line 30
        echo _gettext("New name");
        // line 31
        echo "                            </td>
                            <td width=\"102\">
                                <input type=\"text\" id=\"e_rename\"/>
                            </td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td colspan=\"2\" class=\"center nowrap\">
                                <input type=\"button\" id=\"ok_edit_rename\" class=\"butt\"
                                    name=\"Button\" value=\"";
        // line 41
        echo _gettext("OK");
        echo "\" />
                                <input id=\"query_rename_to_button\" type=\"button\"
                                    class=\"butt\"
                                    name=\"Button\"
                                    value=\"";
        // line 45
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
        return "database/designer/rename_to_panel.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 45,  67 => 41,  55 => 31,  53 => 30,  44 => 23,  42 => 22,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "database/designer/rename_to_panel.twig", "D:\\mywebs\\jikeevideo\\phpMyAdmin4.8.5\\templates\\database\\designer\\rename_to_panel.twig");
    }
}
