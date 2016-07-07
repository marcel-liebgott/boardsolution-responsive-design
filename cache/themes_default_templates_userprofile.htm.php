<?php
function FWS_TPL_themes_default_templates_userprofile_htm($tpl,$number) {
$locale = FWS_Props::get()->locale();
$tplvars = $tpl->get_variables('userprofile.htm',$number);

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


<div>
	<div class="bs_border bs_profile_left">
		<h1 class="bs_topic">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('options'):'');
$html .= <<<EOF
</h1>
		<ul class="bs_none_list">
			<li class="bs_left">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('profile'):'');
$html .= <<<EOF
</li>
			<li class="bs_main">
			&rarr; <a href="
EOF;
$html .= ($tpl->check_allowed_method('gurl','simple_url')?$tplvars['gurl']->simple_url(0,'&amp;$URL_SUB=infos'):'');
$html .= <<<EOF
">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('personal_info'):'');
$html .= <<<EOF
</a>
			</li>
			
EOF;
if((isset($tplvars['enable_signatures']) && $tplvars['enable_signatures'] == 1)) {
$html .= <<<EOF

			<li class="bs_main">
			&rarr; <a href="
EOF;
$html .= ($tpl->check_allowed_method('gurl','simple_url')?$tplvars['gurl']->simple_url(0,'&amp;$URL_SUB=signature'):'');
$html .= <<<EOF
">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('signature'):'');
$html .= <<<EOF
</a>
			</li>
			
EOF;
}
$html .= <<<EOF

			<li class="bs_main">
			&rarr; <a href="
EOF;
$html .= ($tpl->check_allowed_method('gurl','simple_url')?$tplvars['gurl']->simple_url(0,'&amp;$URL_SUB=config'):'');
$html .= <<<EOF
">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('profileconfig'):'');
$html .= <<<EOF
</a>
			</li>
			
EOF;
if((isset($tplvars['enable_avatars']) && $tplvars['enable_avatars'] == 1)) {
$html .= <<<EOF

			<li class="bs_main">
			&rarr; <a href="
EOF;
$html .= ($tpl->check_allowed_method('gurl','simple_url')?$tplvars['gurl']->simple_url(0,'&amp;$URL_SUB=avatars'):'');
$html .= <<<EOF
">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('avatars'):'');
$html .= <<<EOF
</a>
			</li>
			
EOF;
}
$html .= <<<EOF

			
EOF;
if((isset($tplvars['allow_pw_change']) && $tplvars['allow_pw_change'])) {
$html .= <<<EOF

			<li class="bs_main">
			&rarr; <a href="
EOF;
$html .= ($tpl->check_allowed_method('gurl','simple_url')?$tplvars['gurl']->simple_url(0,'&amp;$URL_SUB=chpw'):'');
$html .= <<<EOF
">
EOF;
$html .= $tplvars['user_pw_change_title'];
$html .= <<<EOF
</a>
			</li>
			
EOF;
}
$html .= <<<EOF

			<li class="bs_main">
			&rarr; <a href="
EOF;
$html .= ($tpl->check_allowed_method('gurl','simple_url')?$tplvars['gurl']->simple_url(0,'&amp;$URL_SUB=favforums'):'');
$html .= <<<EOF
">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('favorite_forums'):'');
$html .= <<<EOF
</a>
			</li>
			
EOF;
if((isset($tplvars['enable_email_notification']) && $tplvars['enable_email_notification'] == 1)) {
$html .= <<<EOF

			<li class="bs_left">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('subscriptions'):'');
$html .= <<<EOF
</li>
			
EOF;
}
$html .= <<<EOF

			
EOF;
if((isset($tplvars['subscribe_forums_perm']) && $tplvars['subscribe_forums_perm'])) {
$html .= <<<EOF

			<li class="bs_main">
			&rarr; <a href="
EOF;
$html .= ($tpl->check_allowed_method('gurl','simple_url')?$tplvars['gurl']->simple_url(0,'&amp;$URL_SUB=forums'):'');
$html .= <<<EOF
">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('forums'):'');
$html .= <<<EOF
</a>
			</li>
			
EOF;
}
$html .= <<<EOF

			
EOF;
if((isset($tplvars['enable_email_notification']) && $tplvars['enable_email_notification'] == 1)) {
$html .= <<<EOF

			<li class="bs_main">
			&rarr; <a href="
EOF;
$html .= ($tpl->check_allowed_method('gurl','simple_url')?$tplvars['gurl']->simple_url(0,'&amp;$URL_SUB=topics'):'');
$html .= <<<EOF
">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('threads'):'');
$html .= <<<EOF
</a>
			</li>
			
EOF;
}
$html .= <<<EOF

			
EOF;
if((isset($tplvars['guserenablepm']) && $tplvars['guserenablepm'])) {
$html .= <<<EOF

			<li class="bs_left">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('privatemessages'):'');
$html .= <<<EOF
</li>
			<li class="bs_main">
			&rarr; <a href="
EOF;
$html .= ($tpl->check_allowed_method('gurl','simple_url')?$tplvars['gurl']->simple_url(0,'&amp;$URL_SUB=pmoverview'):'');
$html .= <<<EOF
">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('overview'):'');
$html .= <<<EOF
</a>
			</li>
			<li class="bs_main">
			&rarr; <a href="
EOF;
$html .= ($tpl->check_allowed_method('gurl','simple_url')?$tplvars['gurl']->simple_url(0,'&amp;$URL_SUB=pminbox'):'');
$html .= <<<EOF
">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('pminbox'):'');
$html .= <<<EOF
</a>
			</li>
			<li class="bs_main">
			&rarr; <a href="
EOF;
$html .= ($tpl->check_allowed_method('gurl','simple_url')?$tplvars['gurl']->simple_url(0,'&amp;$URL_SUB=pmoutbox'):'');
$html .= <<<EOF
">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('pmoutbox'):'');
$html .= <<<EOF
</a>
			</li>
			<li class="bs_main">
			&rarr; <a href="
EOF;
$html .= ($tpl->check_allowed_method('gurl','simple_url')?$tplvars['gurl']->simple_url(0,'&amp;$URL_SUB=pmbanlist'):'');
$html .= <<<EOF
">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('banlist'):'');
$html .= <<<EOF
</a>
			</li>
			<li class="bs_main">
			&rarr; <a href="
EOF;
$html .= ($tpl->check_allowed_method('gurl','simple_url')?$tplvars['gurl']->simple_url(0,'&amp;$URL_SUB=pmsearch'):'');
$html .= <<<EOF
">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('pm_search'):'');
$html .= <<<EOF
</a>
			</li>
			<li class="bs_main">
			&rarr; <a href="
EOF;
$html .= ($tpl->check_allowed_method('gurl','simple_url')?$tplvars['gurl']->simple_url(0,'&amp;$URL_SUB=pmcompose'):'');
$html .= <<<EOF
">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('newpm'):'');
$html .= <<<EOF
</a>
			</li>
			<li class="bs_main">
				<table width="100%" cellpadding="0" cellspacing="1">
					<tr>
						<td class="bs_main">
						
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('pminbox'):'');
$html .= <<<EOF
:
						(
EOF;
$html .= $tplvars['inbox_num'];
$html .= <<<EOF
 / 
EOF;
if((isset($tplvars['max_inbox']) && $tplvars['max_inbox'] == 0)) {
$html .= <<<EOF
<span title="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('unlimited'):'');
$html .= <<<EOF
">&infin;</span>
EOF;
} else {
$html .= <<<EOF

EOF;
$html .= $tplvars['max_inbox'];
$html .= <<<EOF

EOF;
}
$html .= <<<EOF
)
						</td>
					</tr>
					<tr>
						<td style="border: 1px solid #888;">
EOF;
$html .= $tplvars['inbox_status'];
$html .= <<<EOF
</td>
					</tr>
					<tr>
						<td class="bs_main">
						
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('pmoutbox'):'');
$html .= <<<EOF
:
						(
EOF;
$html .= $tplvars['outbox_num'];
$html .= <<<EOF
 / 
EOF;
if((isset($tplvars['max_outbox']) && $tplvars['max_outbox'] == 0)) {
$html .= <<<EOF
<span title="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('unlimited'):'');
$html .= <<<EOF
">&infin;</span>
EOF;
} else {
$html .= <<<EOF

EOF;
$html .= $tplvars['max_outbox'];
$html .= <<<EOF

EOF;
}
$html .= <<<EOF
)
						</td>
					</tr>
					<tr>
						<td style="border: 1px solid #888;">
EOF;
$html .= $tplvars['outbox_status'];
$html .= <<<EOF
</td>
					</tr>
				</table>
			</li>
			
EOF;
}
$html .= <<<EOF

		</ul>
	</div>
	
	<div class="bs_profile_right">
	
EOF;
$html .= $tpl->parse_template($tplvars['content_tpl'],false);
$html .= <<<EOF

	</div>
</div>
<br style="clear: both;" />


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