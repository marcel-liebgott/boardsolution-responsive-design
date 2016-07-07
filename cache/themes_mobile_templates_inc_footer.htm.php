<?php
function FWS_TPL_themes_mobile_templates_inc_footer_htm($tpl,$number) {
$locale = FWS_Props::get()->locale();
$tplvars = $tpl->get_variables('inc_footer.htm',$number);

$html = "";
$html .=<<<EOF

EOF;
if((isset($tplvars['show_bottom']) && $tplvars['show_bottom'])) {
$html .= <<<EOF


EOF;
$html .= $tpl->parse_template("inc_bottom.htm",false);
$html .= <<<EOF


EOF;
}
$html .= <<<EOF



EOF;
$html .= $tplvars['queries'];
$html .= <<<EOF


</body>
</html>
EOF;
return $html;
}
?>