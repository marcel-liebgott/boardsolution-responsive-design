<?php
function FWS_TPL_themes_mliebgott_templates_inc_login_htm($tpl,$number) {
$locale = FWS_Props::get()->locale();
$tplvars = $tpl->get_variables('inc_login.htm',$number);

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
<input type="hidden" name="login" value="1" />
<div class="bs_border">
	<h1 class="bs_topic">
EOF;
$html .= $tplvars['title'];
$html .= <<<EOF
</h1>
	
EOF;
if((isset($tplvars['denied_msg']) && $tplvars['denied_msg'] != '')) {
$html .= <<<EOF

	<div class="bs_main">
		<b>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('login_several_reasons'):'');
$html .= <<<EOF
:</b><br />
		
EOF;
$html .= $tplvars['denied_msg'];
$html .= <<<EOF

	</div>
	
EOF;
}
$html .= <<<EOF

	<div class="bs_main">
EOF;
$html .= $tplvars['login_msg'];
$html .= <<<EOF
</div>
	<fieldset class="bs_form">
		<table class="bs_table" cellpadding="2" cellspacing="1">
			<tr>
				<td width="40%" align="right" class="bs_main"><b>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('login'):'');
$html .= <<<EOF
:</b></td>
				<td width="20%" align="center" class="bs_main">
				<input type="text" tabindex="1" name="user_login" style="width: 90%;" maxlength="100" />
				</td>
				<td width="40%" align="right" class="bs_main">
				
EOF;
if((isset($tplvars['show_register_link']) && $tplvars['show_register_link'])) {
$html .= <<<EOF

				<a href="
EOF;
$html .= $tplvars['register_url'];
$html .= <<<EOF
">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('register'):'');
$html .= <<<EOF
</a>
				
EOF;
} else {
$html .= <<<EOF

				&nbsp;
				
EOF;
}
$html .= <<<EOF

				</td>
			</tr>
			<tr>
				<td class="bs_main" align="right"><b>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('password'):'');
$html .= <<<EOF
:</b></td>
				<td align="center" class="bs_main">
				<input type="password" tabindex="2" name="pw_login" style="width: 90%;" maxlength="100" />
				</td>
				<td align="right" class="bs_main">
				
EOF;
if((isset($tplvars['send_pw_url']) && $tplvars['send_pw_url'])) {
$html .= <<<EOF

				<a href="
EOF;
$html .= $tplvars['send_pw_url'];
$html .= <<<EOF
">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('forgetpw'):'');
$html .= <<<EOF
</a>
				
EOF;
} else {
$html .= <<<EOF

				&nbsp;
				
EOF;
}
$html .= <<<EOF

				</td>
			</tr>
			<tr>
				<td colspan="3" class="bs_main" align="center">
				<input type="submit" value="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('login'):'');
$html .= <<<EOF
" />
				<input type="button" value="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('back'):'');
$html .= <<<EOF
" onclick="history.go(-1);" />
				</td>
			</tr>
		</table>
	</fieldset>
</div>
</form>
EOF;
return $html;
}
?>