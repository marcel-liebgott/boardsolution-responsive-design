<?php
function FWS_TPL_install_templates_inc_footer_htm($tpl,$number) {
$locale = FWS_Props::get()->locale();
$tplvars = $tpl->get_variables('inc_footer.htm',$number);

$html = "";
$html .=<<<EOF

EOF;
if((isset($tplvars['step']) && $tplvars['step'] < 6)) {
$html .= <<<EOF

<div class="bs_padtop">
	
EOF;
$html .= $tpl->parse_template("inc_navi.htm",false);
$html .= <<<EOF

</div>

</form>

EOF;
}
$html .= <<<EOF


</body>
</html>
EOF;
return $html;
}
?>