<?php
function FWS_TPL_themes_mliebgott_templates_team_htm($tpl,$number) {
$locale = FWS_Props::get()->locale();
$tplvars = $tpl->get_variables('team.htm',$number);

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


<script type="text/javascript">
<!--
function toggleForumList(id)
{
	var d = document.getElementById(id);
	d.style.display = d.style.display == 'none' ? 'block' : 'none';
}
//-->
</script>

<div class="bs_border">
	<h1 class="bs_topic">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('administrators'):'');
$html .= <<<EOF
</h1>
	<table class="bs_table" cellpadding="2" cellspacing="1">
		<tr>
		
EOF;
if((isset($tplvars['guserenablepm']) && $tplvars['guserenablepm'])) {
$html .= <<<EOF

			<th width="30%" class="bs_coldesc" align="left">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('username'):'');
$html .= <<<EOF
</th>
			<th width="50%" class="bs_coldesc">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('mod_forums'):'');
$html .= <<<EOF
</th>
			<th width="20%" class="bs_coldesc">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('pm'):'');
$html .= <<<EOF
</th>
		
EOF;
} else {
$html .= <<<EOF

			<th width="30%" class="bs_coldesc" align="left">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('username'):'');
$html .= <<<EOF
</th>
			<th width="70%" class="bs_coldesc">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('mod_forums'):'');
$html .= <<<EOF
</th>
		
EOF;
}
$html .= <<<EOF

		</tr>
		
EOF;
$admins_c = -1;
foreach($tplvars['admins'] as $tplvars['admin']) {
$admins_c++;

$html .= <<<EOF

		<tr>
			<td class="bs_main">
EOF;
$html .= $tplvars['admin']['user_name'];
$html .= <<<EOF
</td>
			<td class="bs_main">
			
EOF;
if((isset($tplvars['admin']['forum_count']) && $tplvars['admin']['forum_count'] > 0)) {
$html .= <<<EOF

			<a href="javascript:toggleForumList('forum_list_
EOF;
$html .= $tplvars['admin']['id'];
$html .= <<<EOF
');">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('mod_forums'):'');
$html .= <<<EOF
 (
EOF;
$html .= $tplvars['admin']['forum_count'];
$html .= <<<EOF
)</a><br />
			<div id="forum_list_
EOF;
$html .= $tplvars['admin']['id'];
$html .= <<<EOF
" style="padding: 2px 0px 0px 10px; display: none;">
			
EOF;
$html .= $tplvars['admin']['forum_list'];
$html .= <<<EOF

			</div>
			
EOF;
} else {
$html .= <<<EOF

			-
			
EOF;
}
$html .= <<<EOF

			</td>
			
EOF;
if((isset($tplvars['guserenablepm']) && $tplvars['guserenablepm'])) {
$html .= <<<EOF

			<td class="bs_main" align="center">
			
EOF;
if((isset($tplvars['show_pm']) && $tplvars['show_pm'])) {
$html .= <<<EOF

			<a class="bs_button" style="float: none;" href="
EOF;
$html .= $tplvars['admin']['pm_url'];
$html .= <<<EOF
">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('pm_short'):'');
$html .= <<<EOF
</a>
			
EOF;
} else {
$html .= <<<EOF

			
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('notavailable'):'');
$html .= <<<EOF

			
EOF;
}
$html .= <<<EOF

			</td>
			
EOF;
}
$html .= <<<EOF

		</tr>
		
EOF;
}
$html .= <<<EOF

	</table>
</div>


EOF;
if((isset($tplvars['mods']) && $tplvars['mods'])) {
$html .= <<<EOF

<div class="bs_border bs_padtop">
	<h1 class="bs_topic">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('moderators'):'');
$html .= <<<EOF
</h1>
	<table class="bs_table" cellpadding="2" cellspacing="1">
		<tr>
		
EOF;
if((isset($tplvars['guserenablepm']) && $tplvars['guserenablepm'])) {
$html .= <<<EOF

			<th width="30%" class="bs_coldesc" align="left">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('username'):'');
$html .= <<<EOF
</th>
			<th width="50%" class="bs_coldesc">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('mod_forums'):'');
$html .= <<<EOF
</th>
			<th width="20%" class="bs_coldesc">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('pm'):'');
$html .= <<<EOF
</th>
		
EOF;
} else {
$html .= <<<EOF

			<th width="30%" class="bs_coldesc" align="left">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('username'):'');
$html .= <<<EOF
</th>
			<th width="70%" class="bs_coldesc">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('mod_forums'):'');
$html .= <<<EOF
</th>		
		
EOF;
}
$html .= <<<EOF

		</tr>
		
EOF;
$mods_c = -1;
foreach($tplvars['mods'] as $tplvars['mod']) {
$mods_c++;

$html .= <<<EOF

		<tr>
			<td class="bs_main">
EOF;
$html .= $tplvars['mod']['user_name'];
$html .= <<<EOF
</td>
			<td class="bs_main">
			
EOF;
if((isset($tplvars['mod']['forum_count']) && $tplvars['mod']['forum_count'] > 0)) {
$html .= <<<EOF

			<a href="javascript:toggleForumList('forum_list_
EOF;
$html .= $tplvars['mod']['id'];
$html .= <<<EOF
');">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('mod_forums'):'');
$html .= <<<EOF
 (
EOF;
$html .= $tplvars['mod']['forum_count'];
$html .= <<<EOF
)</a><br />
			<div id="forum_list_
EOF;
$html .= $tplvars['mod']['id'];
$html .= <<<EOF
" style="padding: 2px 0px 0px 10px; display: none;">
			
EOF;
$html .= $tplvars['mod']['forum_list'];
$html .= <<<EOF

			</div>
			
EOF;
} else {
$html .= <<<EOF

			-
			
EOF;
}
$html .= <<<EOF

			</td>
			
EOF;
if((isset($tplvars['guserenablepm']) && $tplvars['guserenablepm'])) {
$html .= <<<EOF

			<td class="bs_main" align="center">
			
EOF;
if((isset($tplvars['show_pm']) && $tplvars['show_pm'])) {
$html .= <<<EOF

			<a class="bs_button" style="float: none;" href="
EOF;
$html .= $tplvars['mod']['pm_url'];
$html .= <<<EOF
">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('pm_short'):'');
$html .= <<<EOF
</a>
			
EOF;
} else {
$html .= <<<EOF

			
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('notavailable'):'');
$html .= <<<EOF

			
EOF;
}
$html .= <<<EOF

			</td>
			
EOF;
}
$html .= <<<EOF

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
$other_c = -1;
foreach($tplvars['other'] as $tplvars['name'] => $tplvars['users']) {
$other_c++;

$html .= <<<EOF

<div class="bs_border bs_padtop">
	<h1 class="bs_topic">
EOF;
$html .= $tplvars['name'];
$html .= <<<EOF
</h1>
	<table class="bs_table" cellpadding="2" cellspacing="1">
		<tr>
		
EOF;
if((isset($tplvars['guserenablepm']) && $tplvars['guserenablepm'])) {
$html .= <<<EOF

			<th width="30%" class="bs_coldesc" align="left">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('username'):'');
$html .= <<<EOF
</th>
			<th width="50%" class="bs_coldesc">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('mod_forums'):'');
$html .= <<<EOF
</th>
			<th width="20%" class="bs_coldesc">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('pm'):'');
$html .= <<<EOF
</th>
		
EOF;
} else {
$html .= <<<EOF

			<th width="30%" class="bs_coldesc" align="left">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('username'):'');
$html .= <<<EOF
</th>
			<th width="70%" class="bs_coldesc">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('mod_forums'):'');
$html .= <<<EOF
</th>
		
EOF;
}
$html .= <<<EOF

		</tr>
		
EOF;
$users_c = -1;
foreach($tplvars['users'] as $tplvars['user']) {
$users_c++;

$html .= <<<EOF

		<tr>
			<td class="bs_main">
EOF;
$html .= $tplvars['user']['user_name'];
$html .= <<<EOF
</td>
			<td class="bs_main">-</td>
			
EOF;
if((isset($tplvars['guserenablepm']) && $tplvars['guserenablepm'])) {
$html .= <<<EOF

			<td class="bs_main" align="center">
			
EOF;
if((isset($tplvars['show_pm']) && $tplvars['show_pm'])) {
$html .= <<<EOF

			<a class="bs_button" style="float: none;" href="
EOF;
$html .= $tplvars['user']['pm_url'];
$html .= <<<EOF
">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('pm_short'):'');
$html .= <<<EOF
</a>
			
EOF;
} else {
$html .= <<<EOF

			
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('notavailable'):'');
$html .= <<<EOF

			
EOF;
}
$html .= <<<EOF

			</td>
			
EOF;
}
$html .= <<<EOF

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