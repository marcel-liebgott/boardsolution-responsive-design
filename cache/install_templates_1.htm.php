<?php
function FWS_TPL_install_templates_1_htm($tpl,$number) {
$locale = FWS_Props::get()->locale();
$tplvars = $tpl->get_variables('1.htm',$number);

$html = "";
$html .=<<<EOF

EOF;
$html .= $tpl->parse_template("inc_header.htm",false);
$html .= <<<EOF



EOF;
if((isset($tplvars['module_error']) && $tplvars['module_error'] == false)) {
$html .= <<<EOF

<div class="bs_border">
	<h1 class="bs_topic">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('step_intro'):'');
$html .= <<<EOF
</h1>
	<ul class="bs_none_list">
		<li class="bs_main">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('step1_explain'):'');
$html .= <<<EOF
</li>
		<li class="bs_left">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('step1_pre_settings_title'):'');
$html .= <<<EOF
</li>
		<li class="bs_main">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('step1_pre_settings_text'):'');
$html .= <<<EOF
</li>
		<li class="bs_left">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('step1_message_changes_title'):'');
$html .= <<<EOF
</li>
		<li class="bs_main">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('step1_message_changes_text'):'');
$html .= <<<EOF
</li>
		<li class="bs_left">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('step1_database_changes_title'):'');
$html .= <<<EOF
</li>
		<li class="bs_main">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('step1_database_changes_text'):'');
$html .= <<<EOF
</li>
		<li class="bs_left">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('step1_further_settings_title'):'');
$html .= <<<EOF
</li>
		<li class="bs_main">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('step1_further_settings_text'):'');
$html .= <<<EOF
</li>
	</ul>
</div>

EOF;
}
$html .= <<<EOF



EOF;
$html .= $tpl->parse_template("inc_footer.htm",false);
$html .= <<<EOF

EOF;
return $html;
}
?>