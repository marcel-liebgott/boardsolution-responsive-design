<?php
function FWS_TPL_themes_default_templates_inc_headline_htm($tpl,$number) {
$locale = FWS_Props::get()->locale();
$tplvars = $tpl->get_variables('inc_headline.htm',$number);

$html = "";
$html .=<<<EOF

EOF;
if((isset($tplvars['show_deactivated_notice']) && $tplvars['show_deactivated_notice'])) {
$html .= <<<EOF

<div class="bs_body" style="font-size: 13px; color: #FF0000;">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('board_is_disabled_admin_hint'):'');
$html .= <<<EOF
</div>

EOF;
}
$html .= <<<EOF



EOF;
if((isset($tplvars['gisloggedin']) && $tplvars['gisloggedin'] == false)) {
$html .= <<<EOF

<form method="post" action="
EOF;
$html .= $tplvars['login_url'];
$html .= <<<EOF
">
<input type="hidden" name="login" value="1" />
<input type="hidden" name="action_type" value="
EOF;
$html .= $tplvars['action_type'];
$html .= <<<EOF
" />

EOF;
}
$html .= <<<EOF


<div class="bs_border">
	<div>
		<div class="bs_headline" onclick="document.location.href = '
EOF;
$html .= $tplvars['headline_url'];
$html .= <<<EOF
';"></div>
		<div class="bs_menu_wrapper">
			<ul class="bs_menu">
				
EOF;
$top_links_c = -1;
foreach($tplvars['top_links'] as $tplvars['id'] => $tplvars['link']) {
$top_links_c++;

$html .= <<<EOF

				<li><a href="
EOF;
$html .= $tplvars['link']['url'];
$html .= <<<EOF
">
EOF;
$html .= $tplvars['link']['text'];
$html .= <<<EOF
</a></li>
				
EOF;
}
$html .= <<<EOF

			</ul>
			<br style="clear: both;" />
		</div>
		
		<div class="bs_welcome">
			<ul class="bs_welcome bs_none_list">
				<li class="bs_welcome_left">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('welcome'):'');
$html .= <<<EOF
, <b>
EOF;
$html .= $tplvars['username'];
$html .= <<<EOF
</b>!</li>
				<li class="bs_welcome_right">
EOF;
$html .= $tplvars['current_date'];
$html .= <<<EOF
, 
EOF;
$html .= $tplvars['current_time'];
$html .= <<<EOF
</li>
			</ul>
			<ul class="bs_welcome bs_none_list">
				<li class="bs_welcome_left">
					
EOF;
if((isset($tplvars['gisloggedin']) && $tplvars['gisloggedin'] == false)) {
$html .= <<<EOF

					<b>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('quicklogin'):'');
$html .= <<<EOF
:</b>
					<input style="padding: 1px;" type="text" name="user_login" size="12" value="Username"
							onblur="if(this.value == '') this.value = 'Username';"
							onfocus="if(this.value == 'Username') this.value = '';" />
					<input style="padding: 1px;" type="password" name="pw_login" size="12" value="password"
							onblur="if(this.value == '') this.value = 'password';"
							onfocus="if(this.value == 'password') this.value = '';" />
					<input style="padding: 1px;" type="submit" value="&nbsp;
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('login'):'');
$html .= <<<EOF
&nbsp;" />&nbsp;
					
EOF;
} else {
$html .= <<<EOF

					
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('lastlogin'):'');
$html .= <<<EOF
: 
EOF;
if((isset($tplvars['lastlogin']) && $tplvars['lastlogin'])) {
$html .= <<<EOF

EOF;
$html .= $tplvars['lastlogin'];
$html .= <<<EOF

EOF;
} else {
$html .= <<<EOF
<i>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('notavailable'):'');
$html .= <<<EOF
</i>
EOF;
}
$html .= <<<EOF

					
EOF;
}
$html .= <<<EOF

				</li>
				<li class="bs_welcome_right">
					
EOF;
if((isset($tplvars['enable_portal']) && $tplvars['enable_portal'])) {
$html .= <<<EOF

					<a href="
EOF;
$html .= ($tpl->check_allowed_method('gurl','build_portal_url')?$tplvars['gurl']->build_portal_url():'');
$html .= <<<EOF
" title="
EOF;
$html .= $tplvars['unread_news_title'];
$html .= <<<EOF
">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('portal'):'');
$html .= <<<EOF
</a>
					(
EOF;
if((isset($tplvars['unread_news_count']) && $tplvars['unread_news_count'] > 0)) {
$html .= <<<EOF
<span class="bs_unread">
EOF;
$html .= $tplvars['unread_news_count'];
$html .= <<<EOF
</span>
EOF;
} else {
$html .= <<<EOF
0
EOF;
}
$html .= <<<EOF
)
					&middot;
					
EOF;
}
$html .= <<<EOF

					
					
EOF;
if((isset($tplvars['gisloggedin']) && $tplvars['gisloggedin']) && (isset($tplvars['guserenablepm']) && $tplvars['guserenablepm'])) {
$html .= <<<EOF

					<a title="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('privatemsgs'):'');
$html .= <<<EOF
 (
EOF;
$html .= $tplvars['unread_pm_count'];
$html .= <<<EOF
 
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('newmsgs'):'');
$html .= <<<EOF
)"
					   href="
EOF;
$html .= ($tpl->check_allowed_method('gurl','simple_url')?$tplvars['gurl']->simple_url('userprofile','&amp;$URL_SUB=pmoverview'):'');
$html .= <<<EOF
">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('privatemsgs'):'');
$html .= <<<EOF
</a>
					(
EOF;
if((isset($tplvars['unread_pm_count']) && $tplvars['unread_pm_count'] > 0)) {
$html .= <<<EOF
<span class="bs_unread">
EOF;
$html .= $tplvars['unread_pm_count'];
$html .= <<<EOF
</span>
EOF;
} else {
$html .= <<<EOF
0
EOF;
}
$html .= <<<EOF
) &middot;
					
EOF;
}
$html .= <<<EOF

					
					<a title="
EOF;
$html .= $tplvars['unread_topics_title'];
$html .= <<<EOF
"
					   href="
EOF;
$html .= ($tpl->check_allowed_method('gurl','simple_url')?$tplvars['gurl']->simple_url('unread'):'');
$html .= <<<EOF
">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('unread_threads'):'');
$html .= <<<EOF
</a>
					(
EOF;
if((isset($tplvars['unread_topic_count']) && $tplvars['unread_topic_count'] > 0)) {
$html .= <<<EOF
<span class="bs_unread">
EOF;
$html .= $tplvars['unread_topic_count'];
$html .= <<<EOF
</span>
					<a href="
EOF;
$html .= $tplvars['first_unread_url'];
$html .= <<<EOF
"><img src="
EOF;
$html .= ($tpl->check_allowed_method('guser','get_theme_item_path')?$tplvars['guser']->get_theme_item_path('images/unread/first_unread_post.gif'):'');
$html .= <<<EOF
"
						alt="" /></a>
EOF;
} else {
$html .= <<<EOF
0
EOF;
}
$html .= <<<EOF
) &middot;
					
					
EOF;
if((isset($tplvars['gisloggedin']) && $tplvars['gisloggedin'] == false)) {
$html .= <<<EOF

					
					
EOF;
if((isset($tplvars['forgotpw_link']) && $tplvars['forgotpw_link'] != '')) {
$html .= <<<EOF

					<a href="
EOF;
$html .= $tplvars['forgotpw_link'];
$html .= <<<EOF
">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('forgetpw'):'');
$html .= <<<EOF
</a> &middot;
					
EOF;
}
$html .= <<<EOF

					
EOF;
if((isset($tplvars['resendact_link']) && $tplvars['resendact_link'] != '')) {
$html .= <<<EOF

					<a href="
EOF;
$html .= $tplvars['resendact_link'];
$html .= <<<EOF
">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('resend_activation_link'):'');
$html .= <<<EOF
</a>
					
EOF;
}
$html .= <<<EOF

		
					
EOF;
} else {
$html .= <<<EOF

					
					<a href="
EOF;
$html .= ($tpl->check_allowed_method('gurl','simple_url')?$tplvars['gurl']->simple_url(-1,'&amp;$URL_AT=$ACTION_LOGOUT','&amp;',true):'');
$html .= <<<EOF
">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('logout'):'');
$html .= <<<EOF
</a>
					
					
EOF;
}
$html .= <<<EOF

				</li>
			</ul>
		</div>
	</div>
</div>

EOF;
if((isset($tplvars['gisloggedin']) && $tplvars['gisloggedin'] == false)) {
$html .= <<<EOF

</form>

EOF;
}
$html .= <<<EOF


<div class="bs_body bs_padtop bs_padbottom" style="clear: both;">
	<b>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('position'):'');
$html .= <<<EOF
:</b> 
EOF;
$html .= $tplvars['location'];
$html .= <<<EOF

</div>
EOF;
return $html;
}
?>