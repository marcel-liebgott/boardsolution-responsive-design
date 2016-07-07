<?php
function FWS_TPL_install_templates_2_htm($tpl,$number) {
$locale = FWS_Props::get()->locale();
$tplvars = $tpl->get_variables('2.htm',$number);

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
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('step_type'):'');
$html .= <<<EOF
</h1>
	<div class="bs_main">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('step2_explain'):'');
$html .= <<<EOF
</div>
	<fieldset class="bs_form">
		<dl>
			<dt>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('kindofinstall'):'');
$html .= <<<EOF
:</dt>
			<dd>
EOF;
$html .= ($tpl->check_allowed_method('form','get_combobox')?$tplvars['form']->get_combobox('install_type',$tplvars['type_options'],$tplvars['type_val']):'');
$html .= <<<EOF
</dd>
		</dl>
	</fieldset>
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