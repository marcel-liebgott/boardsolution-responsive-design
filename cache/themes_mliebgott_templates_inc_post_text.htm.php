<?php
function FWS_TPL_themes_mliebgott_templates_inc_post_text_htm($tpl,$number) {
$locale = FWS_Props::get()->locale();
$tplvars = $tpl->get_variables('inc_post_text.htm',$number);

$html = "";
$html .=<<<EOF

EOF;
$html .= $tplvars['text'];
$html .= <<<EOF


EOF;
if((isset($tplvars['show_attachments']) && $tplvars['show_attachments'])) {
$html .= <<<EOF

<div class="bs_padtop">
	
EOF;
$html .= $tpl->parse_template("inc_attachments_display.htm",false);
$html .= <<<EOF

</div>

EOF;
}
$html .= <<<EOF


EOF;
if((isset($tplvars['show_signature']) && $tplvars['show_signature'])) {
$html .= <<<EOF

<div class="bs_padtop">
	<hr class="bs_signature_sep" noshade="noshade" align="left" size="1" />
	<div class="bs_signature">
	
EOF;
$html .= $tplvars['signature'];
$html .= <<<EOF

	</div>
</div>

EOF;
}
$html .= <<<EOF


EOF;
if((isset($tplvars['show_edit_notice']) && $tplvars['show_edit_notice'])) {
$html .= <<<EOF

<div class="bs_padtop_big" style="font-size: 0.9em;">
	
EOF;
$html .= $tplvars['edited'];
$html .= <<<EOF

</div>

EOF;
}
$html .= <<<EOF

EOF;
return $html;
}
?>