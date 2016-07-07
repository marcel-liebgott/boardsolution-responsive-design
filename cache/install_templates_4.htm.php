<?php
function FWS_TPL_install_templates_4_htm($tpl,$number) {
$locale = FWS_Props::get()->locale();
$tplvars = $tpl->get_variables('4.htm',$number);

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
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('step_dbcheck'):'');
$html .= <<<EOF
</h1>
	<fieldset class="bs_form">
		<div class="bs_main">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('step4_intro'):'');
$html .= <<<EOF
</div>
		<dl style="padding-left: 1em">
			<dt>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('table_praefix'):'');
$html .= <<<EOF
:</dt>
			<dd>
EOF;
$html .= ($tpl->check_allowed_method('form','get_textbox')?$tplvars['form']->get_textbox('table_prefix',$tplvars['prefix'],10,20):'');
$html .= <<<EOF
</dd>
		</dl>
		
EOF;
$configs_c = -1;
foreach($tplvars['configs'] as $tplvars['config']) {
$configs_c++;

$html .= <<<EOF

		
EOF;
if((isset($tplvars['config']['type']) && $tplvars['config']['type'] == 'status')) {
$html .= <<<EOF

		<dl style="padding-left: 1em">
			<dt>
EOF;
$html .= $tplvars['config']['title'];
$html .= <<<EOF
:</dt>
			<dd>
			<span style="float: left;">
EOF;
$html .= $tplvars['config']['status'];
$html .= <<<EOF
</span>
			<span style="float: right;">
				<img src="install/images/
EOF;
$html .= $tplvars['config']['image'];
$html .= <<<EOF
.gif" alt="
EOF;
$html .= $tplvars['config']['image'];
$html .= <<<EOF
" />
			</span>
			<br style="clear: both;" />
			
EOF;
if((isset($tplvars['config']['description']) && $tplvars['config']['description'] != '')) {
$html .= <<<EOF
<span class="bs_desc">
EOF;
$html .= $tplvars['config']['description'];
$html .= <<<EOF
</span>
EOF;
}
$html .= <<<EOF

			</dd>
		</dl>
		
EOF;
}
$html .= <<<EOF

		
EOF;
if((isset($tplvars['config']['type']) && $tplvars['config']['type'] == 'separator')) {
$html .= <<<EOF

		<div class="bs_main" style="margin-top:1px;">
EOF;
$html .= $tplvars['config']['desc'];
$html .= <<<EOF
</div>
		
EOF;
}
$html .= <<<EOF

		
EOF;
}
$html .= <<<EOF

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