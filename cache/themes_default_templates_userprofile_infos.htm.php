<?php
function FWS_TPL_themes_default_templates_userprofile_infos_htm($tpl,$number) {
$locale = FWS_Props::get()->locale();
$tplvars = $tpl->get_variables('userprofile_infos.htm',$number);

$html = "";
$html .=<<<EOF
<form method="post" action="
EOF;
$html .= $tplvars['target_url'];
$html .= <<<EOF
">
<input type="hidden" name="action_type" value="
EOF;
$html .= $tplvars['action_type'];
$html .= <<<EOF
" />
<div class="bs_border">
	<h1 class="bs_topic">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('personal_info'):'');
$html .= <<<EOF
</h1>
	<fieldset class="bs_form">
		<dl>
			<dt>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('email'):'');
$html .= <<<EOF
: *</dt>
			<dd>
				
EOF;
if((isset($tplvars['show_email']) && $tplvars['show_email'])) {
$html .= <<<EOF

				<input type="text" name="user_email" size="50" maxlength="100" value="
EOF;
$html .= $tplvars['email_value'];
$html .= <<<EOF
" />
				
EOF;
if((isset($tplvars['confirm_emails']) && $tplvars['confirm_emails'])) {
$html .= <<<EOF

				<div class="bs_desc">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('change_email_notice'):'');
$html .= <<<EOF
</div>
				
EOF;
if((isset($tplvars['new_email_address']) && $tplvars['new_email_address'])) {
$html .= <<<EOF

				<div class="bs_desc"><b>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('waiting_for_email_conf'):'');
$html .= <<<EOF
: 
EOF;
$html .= $tplvars['new_email_address'];
$html .= <<<EOF
</b></div>
				
EOF;
}
$html .= <<<EOF

				
EOF;
}
$html .= <<<EOF

				
EOF;
} else {
$html .= <<<EOF

				
EOF;
$html .= $tplvars['email_value'];
$html .= <<<EOF

				
EOF;
}
$html .= <<<EOF

			</dd>
		</dl>
		
EOF;
$additional_fields_c = -1;
foreach($tplvars['additional_fields'] as $tplvars['field']) {
$additional_fields_c++;

$html .= <<<EOF

		<dl>
			<dt>
EOF;
$html .= $tplvars['field']['field_name'];
$html .= <<<EOF
:
EOF;
$html .= $tplvars['field']['required_field'];
$html .= <<<EOF
</dt>
			<dd>
EOF;
$html .= $tplvars['field']['field_value'];
$html .= <<<EOF
</dd>
		</dl>
		
EOF;
}
$html .= <<<EOF

	</fieldset>
</div>
<center>
	<input type="submit" name="submit" value="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('save'):'');
$html .= <<<EOF
" />
</center>
</form>
EOF;
return $html;
}
?>