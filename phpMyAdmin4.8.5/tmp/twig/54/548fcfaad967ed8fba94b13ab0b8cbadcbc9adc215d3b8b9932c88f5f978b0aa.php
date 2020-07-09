<?php

/* table/relation/foreign_key_row.twig */
class __TwigTemplate_ea46d9636ebefaec41c65bf2eba60008b7136b653c3d291373236407fe003fa8 extends Twig_Template
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
        echo "<tr>
    ";
        // line 3
        echo "    <td>
        ";
        // line 4
        $context["js_msg"] = "";
        // line 5
        echo "        ";
        $context["this_params"] = null;
        // line 6
        echo "        ";
        if ($this->getAttribute(($context["one_key"] ?? null), "constraint", [], "array", true, true)) {
            // line 7
            echo "            ";
            $context["drop_fk_query"] = (((((("ALTER TABLE " . PhpMyAdmin\Util::backquote(($context["db"] ?? null))) . ".") . PhpMyAdmin\Util::backquote(($context["table"] ?? null))) . " DROP FOREIGN KEY ") . PhpMyAdmin\Util::backquote($this->getAttribute(            // line 9
($context["one_key"] ?? null), "constraint", [], "array"))) . ";");
            // line 11
            echo "            ";
            $context["this_params"] = ($context["url_params"] ?? null);
            // line 12
            echo "            ";
            $context["this_params"] = ["goto" => "tbl_relation.php", "back" => "tbl_relation.php", "sql_query" =>             // line 15
($context["drop_fk_query"] ?? null), "message_to_show" => sprintf(_gettext("Foreign key constraint %s has been dropped"), $this->getAttribute(            // line 17
($context["one_key"] ?? null), "constraint", [], "array"))];
            // line 20
            echo "            ";
            $context["js_msg"] = PhpMyAdmin\Sanitize::jsFormat((((((("ALTER TABLE " .             // line 21
($context["db"] ?? null)) . ".") . ($context["table"] ?? null)) . " DROP FOREIGN KEY ") . $this->getAttribute(            // line 23
($context["one_key"] ?? null), "constraint", [], "array")) . ";"));
            // line 25
            echo "        ";
        }
        // line 26
        echo "        ";
        if ($this->getAttribute(($context["one_key"] ?? null), "constraint", [], "array", true, true)) {
            // line 27
            echo "            <input type=\"hidden\" class=\"drop_foreign_key_msg\" value=\"";
            // line 28
            echo twig_escape_filter($this->env, ($context["js_msg"] ?? null), "html", null, true);
            echo "\" />
            ";
            // line 29
            $context["drop_url"] = ("sql.php" . PhpMyAdmin\Url::getCommon(($context["this_params"] ?? null)));
            // line 30
            echo "            ";
            $context["drop_str"] = PhpMyAdmin\Util::getIcon("b_drop", _gettext("Drop"));
            // line 31
            echo "            ";
            echo PhpMyAdmin\Util::linkOrButton(($context["drop_url"] ?? null), ($context["drop_str"] ?? null), ["class" => "drop_foreign_key_anchor ajax"]);
            echo "
        ";
        }
        // line 33
        echo "    </td>
    <td>
        <span class=\"formelement clearfloat\">
            <input type=\"text\" name=\"constraint_name[";
        // line 36
        echo twig_escape_filter($this->env, ($context["i"] ?? null), "html", null, true);
        echo "]\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["one_key"] ?? null), "constraint", [], "array", true, true)) ? ($this->getAttribute(($context["one_key"] ?? null), "constraint", [], "array")) : ("")), "html", null, true);
        // line 38
        echo "\" placeholder=\"";
        echo _gettext("Constraint name");
        echo "\" maxlength=\"64\" />
        </span>
        <div class=\"floatleft\">
            ";
        // line 44
        echo "            ";
        $context["on_delete"] = (($this->getAttribute(($context["one_key"] ?? null), "on_delete", [], "array", true, true)) ? ($this->getAttribute(        // line 45
($context["one_key"] ?? null), "on_delete", [], "array")) : ("RESTRICT"));
        // line 46
        echo "            ";
        $context["on_update"] = (($this->getAttribute(($context["one_key"] ?? null), "on_update", [], "array", true, true)) ? ($this->getAttribute(        // line 47
($context["one_key"] ?? null), "on_update", [], "array")) : ("RESTRICT"));
        // line 48
        echo "            <span class=\"formelement\">
                ";
        // line 49
        $this->loadTemplate("table/relation/dropdown_generate.twig", "table/relation/foreign_key_row.twig", 49)->display(["dropdown_question" => "ON DELETE", "select_name" => (("on_delete[" .         // line 51
($context["i"] ?? null)) . "]"), "choices" =>         // line 52
($context["options_array"] ?? null), "selected_value" =>         // line 53
($context["on_delete"] ?? null)]);
        // line 55
        echo "            </span>
            <span class=\"formelement\">
                ";
        // line 57
        $this->loadTemplate("table/relation/dropdown_generate.twig", "table/relation/foreign_key_row.twig", 57)->display(["dropdown_question" => "ON UPDATE", "select_name" => (("on_update[" .         // line 59
($context["i"] ?? null)) . "]"), "choices" =>         // line 60
($context["options_array"] ?? null), "selected_value" =>         // line 61
($context["on_update"] ?? null)]);
        // line 63
        echo "            </span>
        </div>
    </td>
    <td>
        ";
        // line 67
        if ($this->getAttribute(($context["one_key"] ?? null), "index_list", [], "array", true, true)) {
            // line 68
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["one_key"] ?? null), "index_list", [], "array"));
            foreach ($context['_seq'] as $context["key"] => $context["column"]) {
                // line 69
                echo "                <span class=\"formelement clearfloat\">
                    ";
                // line 70
                $this->loadTemplate("table/relation/dropdown_generate.twig", "table/relation/foreign_key_row.twig", 70)->display(["dropdown_question" => "", "select_name" => (("foreign_key_fields_name[" .                 // line 72
($context["i"] ?? null)) . "][]"), "choices" =>                 // line 73
($context["column_array"] ?? null), "selected_value" =>                 // line 74
$context["column"]]);
                // line 76
                echo "                </span>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            echo "        ";
        } else {
            // line 79
            echo "            <span class=\"formelement clearfloat\">
                ";
            // line 80
            $this->loadTemplate("table/relation/dropdown_generate.twig", "table/relation/foreign_key_row.twig", 80)->display(["dropdown_question" => "", "select_name" => (("foreign_key_fields_name[" .             // line 82
($context["i"] ?? null)) . "][]"), "choices" =>             // line 83
($context["column_array"] ?? null), "selected_value" => ""]);
            // line 86
            echo "            </span>
        ";
        }
        // line 88
        echo "        <a class=\"formelement clearfloat add_foreign_key_field\" data-index=\"";
        // line 89
        echo twig_escape_filter($this->env, ($context["i"] ?? null), "html", null, true);
        echo "\" href=\"\">
            ";
        // line 90
        echo _gettext("+ Add column");
        // line 91
        echo "        </a>
    </td>
    ";
        // line 93
        $context["tables"] = [];
        // line 94
        echo "    ";
        if (($context["foreign_db"] ?? null)) {
            // line 95
            echo "        ";
            $context["tables"] = call_user_func_array($this->env->getFunction('Relation_getTables')->getCallable(), [($context["foreign_db"] ?? null), ($context["tbl_storage_engine"] ?? null)]);
            // line 96
            echo "    ";
        }
        // line 97
        echo "    <td>
        <span class=\"formelement clearfloat\">
            ";
        // line 99
        $this->loadTemplate("table/relation/relational_dropdown.twig", "table/relation/foreign_key_row.twig", 99)->display(["name" => (("destination_foreign_db[" .         // line 100
($context["i"] ?? null)) . "]"), "title" => _gettext("Database"), "values" =>         // line 102
($context["databases"] ?? null), "foreign" =>         // line 103
($context["foreign_db"] ?? null)]);
        // line 105
        echo "        </span>
    </td>
    <td>
        <span class=\"formelement clearfloat\">
            ";
        // line 109
        $this->loadTemplate("table/relation/relational_dropdown.twig", "table/relation/foreign_key_row.twig", 109)->display(["name" => (("destination_foreign_table[" .         // line 110
($context["i"] ?? null)) . "]"), "title" => _gettext("Table"), "values" =>         // line 112
($context["tables"] ?? null), "foreign" =>         // line 113
($context["foreign_table"] ?? null)]);
        // line 115
        echo "        </span>
    </td>
    <td>
        ";
        // line 118
        if ((($context["foreign_db"] ?? null) && ($context["foreign_table"] ?? null))) {
            // line 119
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["one_key"] ?? null), "ref_index_list", [], "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["foreign_column"]) {
                // line 120
                echo "                <span class=\"formelement clearfloat\">
                    ";
                // line 121
                $this->loadTemplate("table/relation/relational_dropdown.twig", "table/relation/foreign_key_row.twig", 121)->display(["name" => (("destination_foreign_column[" .                 // line 122
($context["i"] ?? null)) . "][]"), "title" => _gettext("Column"), "values" =>                 // line 124
($context["unique_columns"] ?? null), "foreign" =>                 // line 125
$context["foreign_column"]]);
                // line 127
                echo "                </span>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['foreign_column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 129
            echo "        ";
        } else {
            // line 130
            echo "            <span class=\"formelement clearfloat\">
                ";
            // line 131
            $this->loadTemplate("table/relation/relational_dropdown.twig", "table/relation/foreign_key_row.twig", 131)->display(["name" => (("destination_foreign_column[" .             // line 132
($context["i"] ?? null)) . "][]"), "title" => _gettext("Column"), "values" => [], "foreign" => ""]);
            // line 137
            echo "            </span>
        ";
        }
        // line 139
        echo "    </td>
</tr>
";
    }

    public function getTemplateName()
    {
        return "table/relation/foreign_key_row.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 139,  236 => 137,  234 => 132,  233 => 131,  230 => 130,  227 => 129,  220 => 127,  218 => 125,  217 => 124,  216 => 122,  215 => 121,  212 => 120,  207 => 119,  205 => 118,  200 => 115,  198 => 113,  197 => 112,  196 => 110,  195 => 109,  189 => 105,  187 => 103,  186 => 102,  185 => 100,  184 => 99,  180 => 97,  177 => 96,  174 => 95,  171 => 94,  169 => 93,  165 => 91,  163 => 90,  159 => 89,  157 => 88,  153 => 86,  151 => 83,  150 => 82,  149 => 80,  146 => 79,  143 => 78,  136 => 76,  134 => 74,  133 => 73,  132 => 72,  131 => 70,  128 => 69,  123 => 68,  121 => 67,  115 => 63,  113 => 61,  112 => 60,  111 => 59,  110 => 57,  106 => 55,  104 => 53,  103 => 52,  102 => 51,  101 => 49,  98 => 48,  96 => 47,  94 => 46,  92 => 45,  90 => 44,  83 => 38,  81 => 37,  78 => 36,  73 => 33,  67 => 31,  64 => 30,  62 => 29,  58 => 28,  56 => 27,  53 => 26,  50 => 25,  48 => 23,  47 => 21,  45 => 20,  43 => 17,  42 => 15,  40 => 12,  37 => 11,  35 => 9,  33 => 7,  30 => 6,  27 => 5,  25 => 4,  22 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "table/relation/foreign_key_row.twig", "F:\\mywebs\\jikeevideo\\phpMyAdmin4.8.5\\templates\\table\\relation\\foreign_key_row.twig");
    }
}
