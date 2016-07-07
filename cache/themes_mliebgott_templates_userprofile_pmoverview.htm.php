<?php
function FWS_TPL_themes_mliebgott_templates_userprofile_pmoverview_htm($tpl,$number) {
$locale = FWS_Props::get()->locale();
$tplvars = $tpl->get_variables('userprofile_pmoverview.htm',$number);

$html = "";
$html .=<<<EOF

EOF;
$html .= $tpl->parse_template("inc_delete_message.htm",false);
$html .= <<<EOF


EOF;
$html .= $tpl->parse_template("userprofile_pminbox.htm",false);
$html .= <<<EOF


EOF;
$html .= $tpl->parse_template("userprofile_pmoutbox.htm",false);
$html .= <<<EOF


EOF;
$html .= $tpl->parse_template("inc_userprofile_pmbottom.htm",false);
$html .= <<<EOF

EOF;
return $html;
}
?>