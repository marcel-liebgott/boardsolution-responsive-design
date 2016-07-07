<?php
function FWS_TPL_themes_mliebgott_templates_register_htm($tpl,$number) {
$locale = FWS_Props::get()->locale();
$tplvars = $tpl->get_variables('register.htm',$number);

$html = "";
$html .=<<<EOF

EOF;
$html .= $tpl->parse_template("inc_header.htm",false);
$html .= <<<EOF



EOF;
if((isset($tplvars['action_result']) && $tplvars['action_result'] < 1)) {
$html .= <<<EOF


EOF;
if((isset($tplvars['module_error']) && $tplvars['module_error'] == false)) {
$html .= <<<EOF



EOF;
$html .= $tpl->parse_template("inc_pw_complexity_js.htm",false);
$html .= <<<EOF


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
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('register'):'');
$html .= <<<EOF
</h1>
	<fieldset class="bs_form">
		<dl>
			<dt>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('name'):'');
$html .= <<<EOF
: *</dt>
			<dd>
EOF;
$html .= ($tpl->check_allowed_method('form','get_textbox')?$tplvars['form']->get_textbox('user_name','',$tplvars['user_name_size'],$tplvars['user_name_maxlength']):'');
$html .= <<<EOF
</dd>
		</dl>
		<dl>
			<dt>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('pw'):'');
$html .= <<<EOF
: *</dt>
			<dd>
				<input id="pw_field" type="password" name="user_pw" size="
EOF;
$html .= $tplvars['password_size'];
$html .= <<<EOF
" maxlength="
EOF;
$html .= $tplvars['password_maxlength'];
$html .= <<<EOF
" onkeyup="show_pw_complexity('pw_field','pw_complexity_notice');" />
				<div class="bs_desc" id="pw_complexity_notice"></div>
			</dd>
		</dl>
		<dl>
			<dt>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('pw_confirmation'):'');
$html .= <<<EOF
: *</dt>
			<dd>
EOF;
$html .= ($tpl->check_allowed_method('form','get_passwordbox')?$tplvars['form']->get_passwordbox('user_pw_conf','',$tplvars['password_size'],$tplvars['password_maxlength']):'');
$html .= <<<EOF
</dd>
		</dl>
		<dl>
			<dt>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('email'):'');
$html .= <<<EOF
: *</dt>
			<dd>
				
EOF;
$html .= ($tpl->check_allowed_method('form','get_textbox')?$tplvars['form']->get_textbox('user_email','',40,255):'');
$html .= <<<EOF

				
EOF;
if((isset($tplvars['account_activation']) && $tplvars['account_activation'] == 'email')) {
$html .= <<<EOF

				<div class="bs_desc">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('correct_email'):'');
$html .= <<<EOF
</div>
				
EOF;
}
$html .= <<<EOF

			</dd>
		</dl>
		
EOF;
$add_fields_c = -1;
foreach($tplvars['add_fields'] as $tplvars['field']) {
$add_fields_c++;

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

		<dl>
			<dt>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('email_display_mode'):'');
$html .= <<<EOF
:</dt>
			<dd>
				
EOF;
$html .= ($tpl->check_allowed_method('form','get_combobox')?$tplvars['form']->get_combobox('email_display_mode',$tplvars['email_display_mode_options'],'default'):'');
$html .= <<<EOF

				<div class="bs_desc">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('email_jumble_mode_desc'):'');
$html .= <<<EOF
</div>
			</dd>
		</dl>
		
EOF;
if((isset($tplvars['enable_board_emails']) && $tplvars['enable_board_emails'])) {
$html .= <<<EOF

		<dl>
			<dt>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('allow_board_emails'):'');
$html .= <<<EOF
:</dt>
			<dd>
				
EOF;
$html .= ($tpl->check_allowed_method('form','get_radio_yesno')?$tplvars['form']->get_radio_yesno('allow_board_emails',1):'');
$html .= <<<EOF

				<div class="bs_desc">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('allow_board_emails_desc'):'');
$html .= <<<EOF
</div>
			</dd>
		</dl>
		
EOF;
}
$html .= <<<EOF

		
EOF;
if((isset($tplvars['enable_pms']) && $tplvars['enable_pms'])) {
$html .= <<<EOF

		<dl>
			<dt>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('allowpms'):'');
$html .= <<<EOF
:</dt>
			<dd>
EOF;
$html .= ($tpl->check_allowed_method('form','get_radio_yesno')?$tplvars['form']->get_radio_yesno('enable_pms',1):'');
$html .= <<<EOF
</dd>
		</dl>
		
EOF;
}
$html .= <<<EOF

		
EOF;
if((isset($tplvars['enable_security_code']) && $tplvars['enable_security_code'])) {
$html .= <<<EOF

		<dl>
			<dt>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('security_code'):'');
$html .= <<<EOF
:</dt>
			<dd>
				<img src="
EOF;
$html .= $tplvars['security_code_img'];
$html .= <<<EOF
" style="padding-bottom: 5px; cursor: pointer;" onclick="reloadImage(this);" alt="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('reload_sec_image'):'');
$html .= <<<EOF
" title="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('reload_sec_image'):'');
$html .= <<<EOF
" />
				<br clear="all" />
				<input type="text" name="
EOF;
$html .= $tplvars['sec_code_field'];
$html .= <<<EOF
" size="15" maxlength="10" />
				<div class="bs_desc">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('security_code_desc'):'');
$html .= <<<EOF
</div>
			</dd>
		</dl>
		
EOF;
}
$html .= <<<EOF

		<div class="bs_left" style="margin-top: 1px; font-weight: normal;">
			<b>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('register_agreement_title'):'');
$html .= <<<EOF
:</b><br />
			
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('register_agreement_text'):'');
$html .= <<<EOF
<br /><br />
			<input type="checkbox" style="background-color: #DBDBDB;" id="agree" name="agree_to_terms"
				   onclick="checkAgreement(this,'submit');" />
			<label for="agree">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('agree_to_terms'):'');
$html .= <<<EOF
</label>
		</div>
	</fieldset>
</div>
<center>
	<input type="submit" id="submit" name="submit" value="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('register'):'');
$html .= <<<EOF
" />
	<input type="button" value="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('back'):'');
$html .= <<<EOF
" onclick="history.back()" />
</center>
</form>

<script type="text/javascript">
<!--
var button = document.getElementById('submit');
button.disabled = 'disabled';
button.style.color = '#BBBBBB';
//-->
</script>


EOF;
}
$html .= <<<EOF


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