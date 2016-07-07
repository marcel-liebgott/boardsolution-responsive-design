<?php
function FWS_TPL_themes_default_templates_inc_post_preview_htm($tpl,$number) {
$locale = FWS_Props::get()->locale();
$tplvars = $tpl->get_variables('inc_post_preview.htm',$number);

$html = "";
$html .=<<<EOF

EOF;
if((isset($tplvars['text']) && $tplvars['text'])) {
$html .= <<<EOF

<div class="bs_border bs_padbottom_big">
	<h1 class="bs_topic">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('preview'):'');
$html .= <<<EOF
</h1>
	<div class="bs_main">
		<div class="bs_posts_main_1">
			
EOF;
if((isset($tplvars['location']) && $tplvars['location'] == 'sig')) {
$html .= <<<EOF
<div class="bs_signature">
EOF;
}
$html .= <<<EOF

			
EOF;
$html .= $tplvars['text'];
$html .= <<<EOF

			
EOF;
if((isset($tplvars['location']) && $tplvars['location'] == 'sig')) {
$html .= <<<EOF
</div>
EOF;
}
$html .= <<<EOF

		</div>
	</div>
</div>

EOF;
}
$html .= <<<EOF

EOF;
return $html;
}
?>