<?php
function FWS_TPL_acp_templates_index_htm($tpl,$number) {
$locale = FWS_Props::get()->locale();
$tplvars = $tpl->get_variables('index.htm',$number);

$html = "";
$html .=<<<EOF

EOF;
$html .= $tpl->parse_template("inc_header.htm",false);
$html .= <<<EOF



EOF;
if((isset($tplvars['module_error']) && $tplvars['module_error'] == false)) {
$html .= <<<EOF

<div class="a_border">
	<h1 class="a_topic">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('versions'):'');
$html .= <<<EOF
</h1>
	<table class="a_table" cellpadding="2" cellspacing="1">
		<tr>
			<td width="25%" class="a_main"><b>PHP-Version:</b></td>
			<td width="25%" class="a_main">
EOF;
$html .= $tplvars['php_version'];
$html .= <<<EOF
</td>
			<td width="25%" class="a_main"><b>MySQL-Version:</b></td>
			<td width="25%" class="a_main">
EOF;
$html .= $tplvars['mysql_version'];
$html .= <<<EOF
</td>
		</tr>
		<tr>
			<td class="a_main"><b>Boardsolution-Version:</b></td>
			<td class="a_main">
EOF;
$html .= $tplvars['bs_version'];
$html .= <<<EOF
</td>
			<td class="a_main"><b>GD-Library-Version:</b></td>
			<td class="a_main">
EOF;
$html .= $tplvars['gd_version'];
$html .= <<<EOF
</td>
		</tr>
	</table>
</div>


EOF;
if((count($tplvars['tasks']) > 0)) {
$html .= <<<EOF

<div class="a_border a_pad">
	<h1 class="a_topic">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('task_list'):'');
$html .= <<<EOF
</h1>
	<table class="a_table" cellpadding="2" cellspacing="1">
		
EOF;
$tasks_c = -1;
foreach($tplvars['tasks'] as $tplvars['task']) {
$tasks_c++;

$html .= <<<EOF

		<tr>
			<td width="25%" class="a_coldesc">
EOF;
$html .= $tplvars['task']['name'];
$html .= <<<EOF
:</td>
			<td width="75%" class="a_main">
EOF;
$html .= $tplvars['task']['detail'];
$html .= <<<EOF
</td>
		</tr>
		
EOF;
}
$html .= <<<EOF

	</table>
</div>

EOF;
}
$html .= <<<EOF


<div class="a_border a_pad">
	<h1 class="a_topic">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('statistics'):'');
$html .= <<<EOF
</h1>
	<table class="a_table" cellpadding="2" cellspacing="1">
		<tr>
			<td width="30%" class="a_main"><b>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('forums'):'');
$html .= <<<EOF
:</b></td>
			<td width="20%" class="a_main">
EOF;
$html .= $tplvars['stats']['total_forums'];
$html .= <<<EOF
</td>
			<td width="30%" class="a_main"><b>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('threads'):'');
$html .= <<<EOF
:</b></td>
			<td width="20%" class="a_main">
EOF;
$html .= $tplvars['stats']['total_topics'];
$html .= <<<EOF
</td>
		</tr>
		<tr>
			<td class="a_main"><b>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('logins_total'):'');
$html .= <<<EOF
:</b></td>
			<td class="a_main">
EOF;
$html .= $tplvars['stats']['logins_total'];
$html .= <<<EOF
</td>
			<td class="a_main"><b>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('posts_total'):'');
$html .= <<<EOF
:</b></td>
			<td class="a_main">
EOF;
$html .= $tplvars['stats']['posts_total'];
$html .= <<<EOF
</td>
		</tr>
		<tr>
			<td class="a_main"><b>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('logins_today'):'');
$html .= <<<EOF
:</b></td>
			<td class="a_main">
EOF;
$html .= $tplvars['stats']['logins_today'];
$html .= <<<EOF
</td>
			<td class="a_main"><b>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('posts_today'):'');
$html .= <<<EOF
:</b></td>
			<td class="a_main">
EOF;
$html .= $tplvars['stats']['posts_today'];
$html .= <<<EOF
</td>
		</tr>
		<tr>
			<td class="a_main"><b>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('logins_yesterday'):'');
$html .= <<<EOF
:</b></td>
			<td class="a_main">
EOF;
$html .= $tplvars['stats']['logins_yesterday'];
$html .= <<<EOF
</td>
			<td class="a_main"><b>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('posts_yesterday'):'');
$html .= <<<EOF
:</b></td>
			<td class="a_main">
EOF;
$html .= $tplvars['stats']['posts_yesterday'];
$html .= <<<EOF
</td>
		</tr>
		<tr>
			<td class="a_main"><b>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('lastlogin'):'');
$html .= <<<EOF
:</b></td>
			<td class="a_main">
EOF;
$html .= $tplvars['stats']['logins_last'];
$html .= <<<EOF
</td>
			<td class="a_main"><b>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('lastpost'):'');
$html .= <<<EOF
:</b></td>
			<td class="a_main">
EOF;
$html .= $tplvars['stats']['posts_last'];
$html .= <<<EOF
</td>
		</tr>
		<tr>
			<td class="a_main"><b>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('registereduser'):'');
$html .= <<<EOF
:</b></td>
			<td class="a_main">
EOF;
$html .= $tplvars['stats']['total_users'];
$html .= <<<EOF
</td>
			<td class="a_main"><b>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('maxonline'):'');
$html .= <<<EOF
:</b></td>
			<td class="a_main">
EOF;
$html .= $tplvars['stats']['max_online'];
$html .= <<<EOF
</td>
		</tr>
		<tr>
			<td class="a_coldesc_sep" colspan="4">&nbsp;</td>
		</tr>
		<tr>
			<td class="a_main"><b>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('database_size'):'');
$html .= <<<EOF
:</b></td>
			<td class="a_main">
EOF;
$html .= $tplvars['stats']['database_size'];
$html .= <<<EOF
</td>
			<td class="a_main"><b>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('upload_dir_size'):'');
$html .= <<<EOF
:</b></td>
			<td class="a_main">
EOF;
$html .= $tplvars['stats']['upload_dir_size'];
$html .= <<<EOF
</td>
		</tr>
		<tr>
			<td class="a_main"><b>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('smiley_dir_size'):'');
$html .= <<<EOF
:</b></td>
			<td class="a_main">
EOF;
$html .= $tplvars['stats']['smiley_dir_size'];
$html .= <<<EOF
</td>
			<td class="a_main"><b>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('avatar_dir_size'):'');
$html .= <<<EOF
:</b></td>
			<td class="a_main">
EOF;
$html .= $tplvars['stats']['avatar_dir_size'];
$html .= <<<EOF
</td>
		</tr>
	</table>
</div>

<div class="a_border a_pad">
	<h1 class="a_topic"><a href="
EOF;
$html .= $tplvars['phpinfo_url'];
$html .= <<<EOF
">PHP - 
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('configuration'):'');
$html .= <<<EOF
</a></h1>
	<table class="a_table" cellpadding="2" cellspacing="1">
		<tr>
			<td width="25%" class="a_main"><b>safe_mode:</b></td>
			<td width="25%" class="a_main">
EOF;
$html .= $tplvars['safe_mode'];
$html .= <<<EOF
</td>
			<td width="25%" class="a_main"><b>open_basedir:</b></td>
			<td width="25%" class="a_main">
EOF;
$html .= $tplvars['open_basedir'];
$html .= <<<EOF
</td>
		</tr>
		<tr>
			<td class="a_main"><b>max_execution_time:</b></td>
			<td class="a_main">
EOF;
$html .= $tplvars['max_execution_time'];
$html .= <<<EOF
</td>
			<td class="a_main"><b>memory_limit:</b></td>
			<td class="a_main">
EOF;
$html .= $tplvars['memory_limit'];
$html .= <<<EOF
</td>
		</tr>
		<tr>
			<td class="a_main"><b>error_reporting:</b></td>
			<td class="a_main">
EOF;
$html .= $tplvars['error_reporting'];
$html .= <<<EOF
</td>
			<td class="a_main"><b>display_errors:</b></td>
			<td class="a_main">
EOF;
$html .= $tplvars['display_errors'];
$html .= <<<EOF
</td>
		</tr>
		<tr>
			<td class="a_main"><b>register_globals:</b></td>
			<td class="a_main">
EOF;
$html .= $tplvars['register_globals'];
$html .= <<<EOF
</td>
			<td class="a_main"><b>magic_quotes_gpc:</b></td>
			<td class="a_main">
EOF;
$html .= $tplvars['magic_quotes_gpc'];
$html .= <<<EOF
</td>
		</tr>
		<tr>
			<td class="a_main"><b>file_uploads:</b></td>
			<td class="a_main">
EOF;
$html .= $tplvars['file_uploads'];
$html .= <<<EOF
</td>
			<td class="a_main"><b>upload_max_filesize:</b></td>
			<td class="a_main">
EOF;
$html .= $tplvars['upload_max_filesize'];
$html .= <<<EOF
</td>
		</tr>
	</table>
</div>

<div class="a_border a_pad">
	<h1 class="a_topic">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('online_user'):'');
$html .= <<<EOF
</h1>
	<table class="a_table" cellpadding="2" cellspacing="1">
		<tr>
			<td width="13%" class="a_coldesc">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('username'):'');
$html .= <<<EOF
</td>
			<td width="35%" class="a_coldesc">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('location'):'');
$html .= <<<EOF
</td>
			<td width="12%" class="a_coldesc" align="center">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('user_ip'):'');
$html .= <<<EOF
</td>
			<td width="25%" class="a_coldesc" align="center">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('user_agent'):'');
$html .= <<<EOF
</td>
			<td width="15%" class="a_coldesc" align="center">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('date'):'');
$html .= <<<EOF
</td>
		</tr>
		
EOF;
$online_user_c = -1;
foreach($tplvars['online_user'] as $tplvars['user']) {
$online_user_c++;

$html .= <<<EOF

		<tr>
			<td class="a_main">
EOF;
$html .= $tplvars['user']['name'];
$html .= <<<EOF
</td>
			<td class="a_main">
EOF;
$html .= $tplvars['user']['location'];
$html .= <<<EOF
</td>
			<td class="a_main" align="center">
EOF;
$html .= $tplvars['user']['ip'];
$html .= <<<EOF
</td>
			<td class="a_main" align="center">
EOF;
$html .= $tplvars['user']['agent'];
$html .= <<<EOF
</td>
			<td class="a_main" align="center">
EOF;
$html .= $tplvars['user']['date'];
$html .= <<<EOF
</td>
		</tr>
		
EOF;
}
$html .= <<<EOF

	</table>
</div>

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