<?php
function FWS_TPL_themes_default_templates_new_topic_htm($tpl,$number) {
$locale = FWS_Props::get()->locale();
$tplvars = $tpl->get_variables('new_topic.htm',$number);

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
$html .= $tpl->parse_template("inc_post_preview.htm",false);
$html .= <<<EOF


<form method="post" enctype="multipart/form-data" action="
EOF;
$html .= $tplvars['target_url'];
$html .= <<<EOF
" onsubmit="BS_refresh_text();">
<input type="hidden" name="action_type" value="
EOF;
$html .= $tplvars['action_type'];
$html .= <<<EOF
" />
<div class="bs_border">
	<h1 class="bs_topic">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('newthread'):'');
$html .= <<<EOF
</h1>
	<fieldset class="bs_form">
		<dl>
			<dt>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('symbol'):'');
$html .= <<<EOF
:</dt>
			<dd>
EOF;
$html .= $tplvars['symbols'];
$html .= <<<EOF
</dd>
		</dl>
		<dl>
			<dt>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('threadname'):'');
$html .= <<<EOF
:</dt>
			<dd>
EOF;
$html .= ($tpl->check_allowed_method('form','get_textbox')?$tplvars['form']->get_textbox('topic_name','','70%'):'');
$html .= <<<EOF
</dd>
		</dl>
		<dl>
			<dt>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('allowposts'):'');
$html .= <<<EOF
:</dt>
			<dd>
EOF;
$html .= ($tpl->check_allowed_method('form','get_radio_yesno')?$tplvars['form']->get_radio_yesno('allow_posts',1):'');
$html .= <<<EOF
</dd>
		</dl>
		
EOF;
if((isset($tplvars['enable_email_notification']) && $tplvars['enable_email_notification'] == 1)) {
$html .= <<<EOF

		<dl>
			<dt>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('enable_email_notification'):'');
$html .= <<<EOF
:</dt>
			<dd>
			
EOF;
$html .= ($tpl->check_allowed_method('form','get_radio_yesno')?$tplvars['form']->get_radio_yesno('subscribe_topic',$tplvars['subscribe_topic_def']):'');
$html .= <<<EOF

			(
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('after_an_reply'):'');
$html .= <<<EOF
)
			</dd>
		</dl>
		
EOF;
}
$html .= <<<EOF

		
EOF;
if((isset($tplvars['important_allowed']) && $tplvars['important_allowed'])) {
$html .= <<<EOF

		<dl>
			<dt>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('important'):'');
$html .= <<<EOF
:</dt>
			<dd>
			
EOF;
$html .= ($tpl->check_allowed_method('form','get_radio_yesno')?$tplvars['form']->get_radio_yesno('important',0):'');
$html .= <<<EOF

			(
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('alwaysshowontop'):'');
$html .= <<<EOF
)
			</dd>
		</dl>
		
EOF;
}
$html .= <<<EOF

		
EOF;
$html .= $tpl->parse_template("inc_post_form.htm",false);
$html .= <<<EOF

	</fieldset>
</div>
<center>
	<input type="button" value="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('back'):'');
$html .= <<<EOF
" onclick="location.href='
EOF;
$html .= $tplvars['back_url'];
$html .= <<<EOF
'" />
	<input type="submit" name="preview" value="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('preview'):'');
$html .= <<<EOF
" />
	<input type="submit" name="submit" value="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('submit'):'');
$html .= <<<EOF
" accesskey="s" />
</center>
</form>


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