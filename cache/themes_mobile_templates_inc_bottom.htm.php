<?php
function FWS_TPL_themes_mobile_templates_inc_bottom_htm($tpl,$number) {
$locale = FWS_Props::get()->locale();
$tplvars = $tpl->get_variables('inc_bottom.htm',$number);

$html = "";
$html .=<<<EOF
<div class="bs_border bs_padtop">
	<div class="bs_main" align="center">
		Powered by <a target="_blank" href="http://www.boardsolution.de">
EOF;
$html .= $tplvars['bs_version'];
$html .= <<<EOF
</a>
	</div>
</div>
EOF;
return $html;
}
?>