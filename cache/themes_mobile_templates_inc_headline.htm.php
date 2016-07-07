<?php
function FWS_TPL_themes_mobile_templates_inc_headline_htm($tpl,$number) {
$locale = FWS_Props::get()->locale();
$tplvars = $tpl->get_variables('inc_headline.htm',$number);

$html = "";
$html .=<<<EOF
<div class="bs_border bs_padbottom">
	<div class="bs_main">
		<div>
			
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('welcome'):'');
$html .= <<<EOF
, <b>
EOF;
$html .= $tplvars['username_plain'];
$html .= <<<EOF
</b>!
			
EOF;
if((isset($tplvars['gisloggedin']) && $tplvars['gisloggedin'])) {
$html .= <<<EOF

			<div style="float: right;">
				<a href="
EOF;
$html .= ($tpl->check_allowed_method('gurl','simple_url')?$tplvars['gurl']->simple_url(-1,'&amp;$URL_AT=$ACTION_LOGOUT','&amp;',true):'');
$html .= <<<EOF
">
				
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('logout'):'');
$html .= <<<EOF
</a>
			</div>
			
EOF;
}
$html .= <<<EOF

		</div>
		
EOF;
if((isset($tplvars['gisloggedin']) && $tplvars['gisloggedin'] == false)) {
$html .= <<<EOF

		<div>
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
			<input style="padding: 1px;" type="text" name="user_login" size="10" value="Username"
					onblur="if(this.value == '') this.value = 'Username';"
					onfocus="if(this.value == 'Username') this.value = '';" />
			<input style="padding: 1px;" type="password" name="pw_login" size="10" value="password"
					onblur="if(this.value == '') this.value = 'password';"
					onfocus="if(this.value == 'password') this.value = '';" />
			<input style="padding: 1px;" type="submit" value="&nbsp;
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('login'):'');
$html .= <<<EOF
&nbsp;" />
			</form>
		</div>
		
EOF;
}
$html .= <<<EOF

		<div>
			
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
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('pms'):'');
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
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('unread_threads_short'):'');
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
$top_links_c = -1;
foreach($tplvars['top_links'] as $tplvars['id'] => $tplvars['link']) {
$top_links_c++;

$html .= <<<EOF

			
EOF;
if((isset($tplvars['link']['text']) && $tplvars['link']['text'] == ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('profile'):''))) {
$html .= <<<EOF

			<a href="
EOF;
$html .= $tplvars['link']['url'];
$html .= <<<EOF
">
EOF;
$html .= $tplvars['link']['text'];
$html .= <<<EOF
</a> &middot;
			
EOF;
}
$html .= <<<EOF

			
EOF;
if((isset($tplvars['link']['text']) && $tplvars['link']['text'] == ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('search'):''))) {
$html .= <<<EOF

			<a href="
EOF;
$html .= $tplvars['link']['url'];
$html .= <<<EOF
">
EOF;
$html .= $tplvars['link']['text'];
$html .= <<<EOF
</a>
			
EOF;
}
$html .= <<<EOF

			
EOF;
}
$html .= <<<EOF

		</div>
	</div>
</div>

<div class="bs_border bs_padbottom">
	<div class="bs_main">
		
EOF;
$breadcrumbs_c = -1;
foreach($tplvars['breadcrumbs'] as $tplvars['bc']) {
$breadcrumbs_c++;

$html .= <<<EOF

		<div style="margin-left: 
EOF;
$html .= $breadcrumbs_c * 10;
$html .= <<<EOF
px;">
			&bull; <a href="
EOF;
$html .= $tplvars['bc']['1'];
$html .= <<<EOF
">
EOF;
$html .= $tplvars['bc']['0'];
$html .= <<<EOF
</a>
		</div>
		
EOF;
}
$html .= <<<EOF

	</div>
</div>
EOF;
return $html;
}
?>