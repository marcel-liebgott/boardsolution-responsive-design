<?php
function FWS_TPL_themes_mliebgott_templates_inc_user_info_panel_htm($tpl,$number) {
$locale = FWS_Props::get()->locale();
$tplvars = $tpl->get_variables('inc_user_info_panel.htm',$number);

$html = "";
$html .=<<<EOF
<div class="panel panel-default">
	<div class="panel-heading">Informationen</div>
	<div class="panel-body">
		
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('welcome'):'');
$html .= <<<EOF
, <b>
EOF;
if((isset($tplvars['gisloggedin']) && $tplvars['gisloggedin'])) {
$html .= <<<EOF

EOF;
$html .= $tplvars['gusername'];
$html .= <<<EOF

EOF;
} else {
$html .= <<<EOF

EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('guest'):'');
$html .= <<<EOF

EOF;
}
$html .= <<<EOF
</b>!
		
EOF;
if((isset($tplvars['gisloggedin']) && $tplvars['gisloggedin'])) {
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

		<br>
		
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('lastlogin'):'');
$html .= <<<EOF
: 
			
EOF;
if((isset($tplvars['lastlogin']) && $tplvars['lastlogin'])) {
$html .= <<<EOF

				
EOF;
$html .= $tplvars['glastlogin'];
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

		<br>
		
EOF;
if((isset($tplvars['genable_portal']) && $tplvars['genable_portal'])) {
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
			<br>
		
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
)
			<br>
		
EOF;
}
$html .= <<<EOF

		
		<a title="
EOF;
$html .= $tplvars['unread_topics_title'];
$html .= <<<EOF
" href="
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
)
	</div>
</div>
EOF;
return $html;
}
?>