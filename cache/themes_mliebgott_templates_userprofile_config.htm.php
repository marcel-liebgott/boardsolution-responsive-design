<?php
function FWS_TPL_themes_mliebgott_templates_userprofile_config_htm($tpl,$number) {
$locale = FWS_Props::get()->locale();
$tplvars = $tpl->get_variables('userprofile_config.htm',$number);

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
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('profileconfig'):'');
$html .= <<<EOF
</h1>
	<fieldset class="bs_form">
		<dl>
			<dt>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('profile_timezone'):'');
$html .= <<<EOF
:</dt>
			<dd>
				
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('timezone_current_time'):'');
$html .= <<<EOF
 
EOF;
$html .= $tplvars['current_time'];
$html .= <<<EOF

				<div class="bs_padtop_big">
					
EOF;
$html .= ($tpl->check_allowed_method('form','get_timezone_combo')?$tplvars['form']->get_timezone_combo():'');
$html .= <<<EOF

					<div class="bs_desc">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('profile_timezone_expl'):'');
$html .= <<<EOF
</div>
				</div>
			</dd>
		</dl>
		
EOF;
if((isset($tplvars['allow_custom_lang']) && $tplvars['allow_custom_lang'] == 1)) {
$html .= <<<EOF

		<dl>
			<dt>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('profile_forum_lang'):'');
$html .= <<<EOF
:</dt>
			<dd>
EOF;
$html .= ($tpl->check_allowed_method('form','get_combobox')?$tplvars['form']->get_combobox('lang',$tplvars['lang_options'],$tplvars['def_lang']):'');
$html .= <<<EOF
</dd>
		</dl>
		
EOF;
}
$html .= <<<EOF

		
EOF;
if((isset($tplvars['allow_custom_style']) && $tplvars['allow_custom_style'] == 1)) {
$html .= <<<EOF

		<dl>
			<dt>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('profile_forum_style'):'');
$html .= <<<EOF
:</dt>
			<dd>
EOF;
$html .= ($tpl->check_allowed_method('form','get_combobox')?$tplvars['form']->get_combobox('theme',$tplvars['theme_options'],$tplvars['def_theme']):'');
$html .= <<<EOF
</dd>
		</dl>
		
EOF;
}
$html .= <<<EOF

		<div class="bs_coldesc_sep">&nbsp;</div>
		<dl>
			<dt>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('email_display_mode'):'');
$html .= <<<EOF
:</dt>
			<dd>
				
EOF;
$html .= ($tpl->check_allowed_method('form','get_combobox')?$tplvars['form']->get_combobox('email_display_mode',$tplvars['email_display_mode_options'],$tplvars['def_email_display_mode']):'');
$html .= <<<EOF

				<div class="bs_desc">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('email_jumble_mode_desc'):'');
$html .= <<<EOF
</div>
			</dd>
		</dl>
		
EOF;
if((isset($tplvars['allow_board_emails']) && $tplvars['allow_board_emails'])) {
$html .= <<<EOF

		<dl>
			<dt>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('allow_board_emails'):'');
$html .= <<<EOF
:</dt>
			<dd>
				
EOF;
$html .= ($tpl->check_allowed_method('form','get_radio_yesno')?$tplvars['form']->get_radio_yesno('allow_board_emails',$tplvars['def_allow_board_emails']):'');
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
if((isset($tplvars['enable_email_notification']) && $tplvars['enable_email_notification'])) {
$html .= <<<EOF

		<dl>
			<dt>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('default_email_notification'):'');
$html .= <<<EOF
:</dt>
			<dd>
				
EOF;
$html .= ($tpl->check_allowed_method('form','get_radio_yesno')?$tplvars['form']->get_radio_yesno('default_email_notification',$tplvars['def_default_email_notification']):'');
$html .= <<<EOF

				<div class="bs_desc">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('default_email_notification_desc'):'');
$html .= <<<EOF
</div>
			</dd>
		</dl>
		<dl>
			<dt>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('email_notification_type'):'');
$html .= <<<EOF
:</dt>
			<dd>
				
EOF;
$html .= ($tpl->check_allowed_method('form','get_combobox')?$tplvars['form']->get_combobox('email_notification_type',$tplvars['email_notification_type_options'],$tplvars['def_email_notification_type']):'');
$html .= <<<EOF

				<div class="bs_desc">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('email_notification_type_desc'):'');
$html .= <<<EOF
</div>
			</dd>
		</dl>
		<dl>
			<dt>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('emails_include_post'):'');
$html .= <<<EOF
:</dt>
			<dd>
				
EOF;
$html .= ($tpl->check_allowed_method('form','get_radio_yesno')?$tplvars['form']->get_radio_yesno('emails_include_post',$tplvars['def_emails_include_post']):'');
$html .= <<<EOF

				<div class="bs_desc">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('emails_include_post_desc'):'');
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
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('enable_pm_email'):'');
$html .= <<<EOF
:</dt>
			<dd>
				
EOF;
$html .= ($tpl->check_allowed_method('form','get_radio_yesno')?$tplvars['form']->get_radio_yesno('enable_pm_email',$tplvars['def_enable_pm_email']):'');
$html .= <<<EOF

				<div class="bs_desc">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('enable_pm_email_desc'):'');
$html .= <<<EOF
</div>
			</dd>
		</dl>
		
EOF;
}
$html .= <<<EOF

		<div class="bs_coldesc_sep">&nbsp;</div>
		
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
$html .= ($tpl->check_allowed_method('form','get_radio_yesno')?$tplvars['form']->get_radio_yesno('allow_pms',$tplvars['def_allow_pms']):'');
$html .= <<<EOF
</dd>
		</dl>
		
EOF;
}
$html .= <<<EOF

		
EOF;
if((isset($tplvars['ghost_mode_allowed']) && $tplvars['ghost_mode_allowed'])) {
$html .= <<<EOF

		<dl>
			<dt>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('ghost_mode'):'');
$html .= <<<EOF
:</dt>
			<dd>
				
EOF;
$html .= ($tpl->check_allowed_method('form','get_radio_yesno')?$tplvars['form']->get_radio_yesno('ghost_mode',$tplvars['def_ghost_mode']):'');
$html .= <<<EOF

				<div class="bs_desc">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('ghost_mode_exp'):'');
$html .= <<<EOF
</div>
			</dd>
		</dl>
		
EOF;
}
$html .= <<<EOF

		
EOF;
if((isset($tplvars['portal_enabled']) && $tplvars['portal_enabled'])) {
$html .= <<<EOF

		<dl>
			<dt>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('startmodule'):'');
$html .= <<<EOF
:</dt>
			<dd>
				
EOF;
$html .= ($tpl->check_allowed_method('form','get_combobox')?$tplvars['form']->get_combobox('startmodule',$tplvars['startmodule_options'],$tplvars['def_startmodule']):'');
$html .= <<<EOF

				<div class="bs_desc">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('startmodule_desc'):'');
$html .= <<<EOF
</div>
			</dd>
		</dl>
		
EOF;
}
$html .= <<<EOF

		<dl>
			<dt>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('posts_order'):'');
$html .= <<<EOF
:</dt>
			<dd>
				
EOF;
$html .= ($tpl->check_allowed_method('form','get_combobox')?$tplvars['form']->get_combobox('posts_order',$tplvars['posts_order_options'],$tplvars['def_posts_order']):'');
$html .= <<<EOF

				<div class="bs_desc">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('posts_order_desc'):'');
$html .= <<<EOF
</div>
			</dd>
		</dl>
		<dl>
			<dt>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('default_font'):'');
$html .= <<<EOF
:</dt>
			<dd>
				
EOF;
$html .= ($tpl->check_allowed_method('form','get_combobox')?$tplvars['form']->get_combobox('default_font',$tplvars['default_font_options'],$tplvars['def_default_font']):'');
$html .= <<<EOF

				<div class="bs_desc">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('default_font_desc'):'');
$html .= <<<EOF
</div>
			</dd>
		</dl>
		
EOF;
if((isset($tplvars['enable_signatures']) && $tplvars['enable_signatures'])) {
$html .= <<<EOF

		<dl>
			<dt>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('attach_signature'):'');
$html .= <<<EOF
:</dt>
			<dd>
EOF;
$html .= ($tpl->check_allowed_method('form','get_radio_yesno')?$tplvars['form']->get_radio_yesno('attach_signature',$tplvars['def_attach_signature']):'');
$html .= <<<EOF
</dd>
		</dl>
		
EOF;
}
$html .= <<<EOF

		
EOF;
if((isset($tplvars['enable_bbcode']) && $tplvars['enable_bbcode'])) {
$html .= <<<EOF

		<dl>
			<dt>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('bbcode_mode'):'');
$html .= <<<EOF
:</dt>
			<dd>
				
EOF;
$html .= ($tpl->check_allowed_method('form','get_combobox')?$tplvars['form']->get_combobox('bbcode_mode',$tplvars['bbcode_mode_options'],$tplvars['def_bbcode_mode']):'');
$html .= <<<EOF

				<div class="bs_desc">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('bbcode_mode_desc'):'');
$html .= <<<EOF
</div>
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