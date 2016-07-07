<?php
function FWS_TPL_acp_templates_inc_js_row_selector_htm($tpl,$number) {
$locale = FWS_Props::get()->locale();
$tplvars = $tpl->get_variables('inc_js_row_selector.htm',$number);

$html = "";
$html .=<<<EOF
<script type="text/javascript" src="
EOF;
$html .= ($tpl->check_allowed_method('gjs','get_file')?$tplvars['gjs']->get_file('js/table_row_sel.js','fws'):'');
$html .= <<<EOF
"></script>
<script type="text/javascript">
<!--
var rowHL = new FWS_TableRowSelector('row_','check_');
//-->
</script>
EOF;
return $html;
}
?>