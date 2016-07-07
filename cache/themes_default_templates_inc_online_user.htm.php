<?php
function FWS_TPL_themes_default_templates_inc_online_user_htm($tpl,$number) {
$locale = FWS_Props::get()->locale();
$tplvars = $tpl->get_variables('inc_online_user.htm',$number);

$html = "";
$html .=<<<EOF
<div class="bs_border bs_padtop">
	<div class="bs_coldesc" style="font-weight: normal;">
	<b>
	
EOF;
if((isset($tplvars['can_view_locations']) && $tplvars['can_view_locations'])) {
$html .= <<<EOF

	<a href="
EOF;
$html .= ($tpl->check_allowed_method('gurl','simple_url')?$tplvars['gurl']->simple_url('user_locations'):'');
$html .= <<<EOF
">
EOF;
$html .= $tplvars['title'];
$html .= <<<EOF
</a>:
	
EOF;
} else {
$html .= <<<EOF

	
EOF;
$html .= $tplvars['title'];
$html .= <<<EOF
:
	
EOF;
}
$html .= <<<EOF

	</b>
	
EOF;
$html .= $tplvars['conclusion_list'];
$html .= <<<EOF
</div>
	<div class="bs_main">
		
EOF;
$html .= $tplvars['user_list'];
$html .= <<<EOF

		<div style="padding-top: 5px; font-size: 90%;">
			<b>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('legend'):'');
$html .= <<<EOF
:</b> 
EOF;
$html .= $tplvars['legend'];
$html .= <<<EOF

		</div>
	</div>
</div>
EOF;
return $html;
}
?>