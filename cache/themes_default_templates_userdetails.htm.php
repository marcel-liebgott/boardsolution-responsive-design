<?php
function FWS_TPL_themes_default_templates_userdetails_htm($tpl,$number) {
$locale = FWS_Props::get()->locale();
$tplvars = $tpl->get_variables('userdetails.htm',$number);

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


<div class="bs_border">	
	<h1 class="bs_topic">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('userdetails'):'');
$html .= <<<EOF
</h1>
	<table class="bs_table" cellpadding="2" cellspacing="1">
		<tr>
			<td width="20%" class="bs_left">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('name'):'');
$html .= <<<EOF
:</td>
			<td width="
EOF;
$html .= $tplvars['width'];
$html .= <<<EOF
%" class="bs_main">
EOF;
$html .= $tplvars['user_name'];
$html .= <<<EOF
</td>
			
EOF;
if((isset($tplvars['enable_avatars']) && $tplvars['enable_avatars'])) {
$html .= <<<EOF

			<td width="35%" class="bs_main" align="center" rowspan="
EOF;
$html .= $tplvars['rowspan'];
$html .= <<<EOF
">
EOF;
$html .= $tplvars['avatar'];
$html .= <<<EOF
</td>
			
EOF;
}
$html .= <<<EOF

		</tr>
		<tr>
			<td class="bs_left" valign="top">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('email'):'');
$html .= <<<EOF
:</td>
			<td class="bs_main">
EOF;
$html .= $tplvars['user_email'];
$html .= <<<EOF
</td>
		</tr>
		
EOF;
$add_fields_c = -1;
foreach($tplvars['add_fields'] as $tplvars['field']) {
$add_fields_c++;

$html .= <<<EOF

		<tr>
			<td class="bs_left" valign="top">
EOF;
$html .= $tplvars['field']['field_name'];
$html .= <<<EOF
:</td>
			<td class="bs_main">
EOF;
$html .= $tplvars['field']['field_value'];
$html .= <<<EOF
</td>
		</tr>
		
EOF;
}
$html .= <<<EOF

		
EOF;
if((isset($tplvars['enable_signatures']) && $tplvars['enable_signatures'])) {
$html .= <<<EOF

		<tr>
			<td class="bs_left" valign="top">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('signature'):'');
$html .= <<<EOF
:</td>
			<td class="bs_main"
EOF;
$html .= $tplvars['colspan'];
$html .= <<<EOF
>
			<div class="bs_signature">
EOF;
$html .= $tplvars['signature'];
$html .= <<<EOF
</div>
			</td>
		</tr>
		
EOF;
}
$html .= <<<EOF

		<tr>
			<td class="bs_left" valign="top">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('statistics'):'');
$html .= <<<EOF
:</td>
			<td class="bs_main"
EOF;
$html .= $tplvars['colspan'];
$html .= <<<EOF
>
			<table width="100%" cellpadding="2" cellspacing="0">
			 	
EOF;
if((isset($tplvars['enable_user_ranks']) && $tplvars['enable_user_ranks'])) {
$html .= <<<EOF

				<tr>
					<td align="right" width="20%"><b>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('rank'):'');
$html .= <<<EOF
:</b></td>
					<td width="80%">
EOF;
$html .= $tplvars['user_rank'];
$html .= <<<EOF
</td>
				</tr>
				
EOF;
}
$html .= <<<EOF

				
EOF;
if((isset($tplvars['enable_diagram']) && $tplvars['enable_diagram'])) {
$html .= <<<EOF

				<tr>
					<td align="right"><b>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('experience'):'');
$html .= <<<EOF
:</b></td>
					<td>
EOF;
$html .= $tplvars['experience_diagram'];
$html .= <<<EOF
</td>
				</tr>
				
EOF;
}
$html .= <<<EOF

				<tr>
					<td align="right"><b>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('logins'):'');
$html .= <<<EOF
:</b></td>
					<td>
EOF;
$html .= $tplvars['user_data']['logins'];
$html .= <<<EOF
</td>
				</tr>
				<tr>
					<td align="right"><b>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('lastlogin'):'');
$html .= <<<EOF
:</b></td>
					<td>
EOF;
$html .= $tplvars['lastlogin'];
$html .= <<<EOF
</td>
				</tr>
				
EOF;
if((isset($tplvars['enable_post_count']) && $tplvars['enable_post_count'])) {
$html .= <<<EOF

				<tr>
					<td align="right"><b>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('posts'):'');
$html .= <<<EOF
:</b></td>
					<td>
EOF;
$html .= $tplvars['user_data']['posts'];
$html .= <<<EOF
</td>
				</tr>
				<tr>
					<td align="right"><b>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('points'):'');
$html .= <<<EOF
:</b></td>
					<td>
EOF;
$html .= $tplvars['user_data']['exppoints'];
$html .= <<<EOF
</td>
				</tr>
				<tr>
					<td align="right"><b>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('postsperday'):'');
$html .= <<<EOF
:</b></td>
					<td>
EOF;
$html .= $tplvars['posts_per_day'];
$html .= <<<EOF
</td>
				</tr>
				
EOF;
}
$html .= <<<EOF

				<tr>
					<td align="right"><b>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('registeredsince'):'');
$html .= <<<EOF
:</b></td>
					<td>
EOF;
$html .= $tplvars['register_date'];
$html .= <<<EOF
</td>
				</tr>
				<tr>
					<td align="right"><b>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('user_groups'):'');
$html .= <<<EOF
:</b></td>
					<td>
EOF;
$html .= $tplvars['user_groups'];
$html .= <<<EOF
</td>
				</tr>
			</table>
			</td>
		</tr>
		<tr>
			<td class="bs_left" valign="top">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('lastactivity'):'');
$html .= <<<EOF
:</td>
			<td class="bs_main"
EOF;
$html .= $tplvars['colspan'];
$html .= <<<EOF
>
			
EOF;
if((isset($tplvars['last_posts']) && $tplvars['last_posts'] !== false)) {
$html .= <<<EOF

			
EOF;
if((count($tplvars['last_posts']) == 0)) {
$html .= <<<EOF

			<i>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('none'):'');
$html .= <<<EOF
</i>
			
EOF;
} else {
$html .= <<<EOF

			<ul>
				
EOF;
$last_posts_c = -1;
foreach($tplvars['last_posts'] as $tplvars['lp']) {
$last_posts_c++;

$html .= <<<EOF

				<li>
EOF;
$html .= $tplvars['lp']['date'];
$html .= <<<EOF
: 
EOF;
$html .= $tplvars['lp']['forum_path'];
$html .= <<<EOF
 &raquo; <a href="
EOF;
$html .= $tplvars['lp']['topic_url'];
$html .= <<<EOF
">
EOF;
$html .= $tplvars['lp']['topic_name'];
$html .= <<<EOF
</a></li>
				
EOF;
}
$html .= <<<EOF

			</ul>
			
EOF;
}
$html .= <<<EOF

			
EOF;
}
$html .= <<<EOF

			
			
EOF;
if((isset($tplvars['enable_search']) && $tplvars['enable_search'] == 1)) {
$html .= <<<EOF

			<div class="bs_padtop">
				<a href="
EOF;
$html .= $tplvars['search_for_user_posts_url'];
$html .= <<<EOF
">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('show_all_posts_of_user'):'');
$html .= <<<EOF
</a><br />
				<a href="
EOF;
$html .= $tplvars['search_for_user_topics_url'];
$html .= <<<EOF
">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('show_all_topics_of_user'):'');
$html .= <<<EOF
</a>
			</div>
			
EOF;
}
$html .= <<<EOF

			</td>
		</tr>
		<tr>
			<td class="bs_left">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('options'):'');
$html .= <<<EOF
:</td>
			<td class="bs_main"
EOF;
$html .= $tplvars['colspan'];
$html .= <<<EOF
>
EOF;
$html .= $tplvars['options'];
$html .= <<<EOF
</td>
		</tr>
	</table>
</div>

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