<?php
function FWS_TPL_themes_mliebgott_templates_userprofile_avatars_htm($tpl,$number) {
$locale = FWS_Props::get()->locale();
$tplvars = $tpl->get_variables('userprofile_avatars.htm',$number);

$html = "";
$html .=<<<EOF

EOF;
$html .= $tpl->parse_template("inc_delete_message.htm",false);
$html .= <<<EOF


<form method="post" action="
EOF;
$html .= $tplvars['target_url'];
$html .= <<<EOF
">
<div class="bs_border">
	<h1 class="bs_topic">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('availableavatars'):'');
$html .= <<<EOF
</h1>
	<table class="bs_table" cellpadding="2" cellspacing="1">
		<tr>
			<th width="35%" class="bs_coldesc" align="left">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('name'):'');
$html .= <<<EOF
</th>
			<th width="15%" class="bs_coldesc">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('preview'):'');
$html .= <<<EOF
</th>
			<th width="20%" class="bs_coldesc">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('owner'):'');
$html .= <<<EOF
</th>
			<th width="18%" class="bs_coldesc">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('use'):'');
$html .= <<<EOF
</th>
			<th width="12%" class="bs_coldesc">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('delete'):'');
$html .= <<<EOF
</th>
		</tr>
		
EOF;
if((isset($tplvars['num']) && $tplvars['num'] == 0)) {
$html .= <<<EOF

		<tr>
			<td colspan="5" class="bs_main" align="center">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('no_avatars_found'):'');
$html .= <<<EOF
</td>
		</tr>
		
EOF;
}
$html .= <<<EOF

		
EOF;
$avatars_c = -1;
foreach($tplvars['avatars'] as $tplvars['index'] => $tplvars['avatar']) {
$avatars_c++;

$html .= <<<EOF

		<tr>
			<td class="bs_main">
EOF;
$html .= $tplvars['avatar']['display_path'];
$html .= <<<EOF
</td>
			<td class="bs_main" align="center">
			<img src="
EOF;
$html .= $tplvars['avatar']['avatar_path'];
$html .= <<<EOF
" width="50" height="50" alt="" />
			</td>
			<td class="bs_main" align="center">
EOF;
$html .= $tplvars['avatar']['user_name'];
$html .= <<<EOF
</td>
			<td class="bs_main" align="center"><a href="
EOF;
$html .= $tplvars['avatar']['use_url'];
$html .= <<<EOF
">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('use'):'');
$html .= <<<EOF
</a></td>
			<td class="bs_main" align="center"
				onclick="var cb = document.getElementById('avatar_
EOF;
$html .= $tplvars['index'];
$html .= <<<EOF
'); cb.checked = cb.checked ? false : true;">
			
EOF;
$html .= $tplvars['avatar']['delete'];
$html .= <<<EOF

			</td>
		</tr>
		
EOF;
}
$html .= <<<EOF

	</table>
</div>

<table width="100%" cellpadding="0" cellspacing="0">
	<tr>
		<td width="30%">&nbsp;</td>
		<td width="40%" align="center"><input type="submit" value="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('delete'):'');
$html .= <<<EOF
" /></td>
		<td width="30%" align="right">
		<a href="Javascript:invertSelection('avatar_');">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('invertmark'):'');
$html .= <<<EOF
</a>
		</td>
	</tr>
</table>
</form>

<div class="bs_padtop">

EOF;
$html .= $tpl->parse_template("inc_pagination.htm",false);
$html .= <<<EOF

</div>

<form method="post" enctype="multipart/form-data" action="
EOF;
$html .= $tplvars['target_url'];
$html .= <<<EOF
">
<input type="hidden" name="action_type" value="
EOF;
$html .= $tplvars['action_type'];
$html .= <<<EOF
" />
<div class="bs_border bs_padtop_big">
	<h1 class="bs_topic">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('options'):'');
$html .= <<<EOF
</h1>
	<table class="bs_table" cellpadding="2" cellspacing="1">
		<tr>
			<td width="50%" class="bs_main" valign="top">
			<b>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('current_avatar'):'');
$html .= <<<EOF
</b>:
			<div class="bs_padtop_big">
				
EOF;
$html .= $tplvars['current_avatar'];
$html .= <<<EOF

				
EOF;
$html .= $tplvars['delete_avatar'];
$html .= <<<EOF

			</div>
			</td>
			<td width="50%" class="bs_main" valign="top">
			<b>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('uploadavatar'):'');
$html .= <<<EOF
</b>:<br />
			- 
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('max'):'');
$html .= <<<EOF
 
EOF;
$html .= $tplvars['CFG']['profile_max_img_size'];
$html .= <<<EOF

			
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('pixel'):'');
$html .= <<<EOF
 | 
EOF;
$html .= $tplvars['CFG']['profile_max_img_filesize'];
$html .= <<<EOF
KB<br />
			- 
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('maximal'):'');
$html .= <<<EOF
 
EOF;
$html .= $tplvars['CFG']['profile_max_avatars'];
$html .= <<<EOF
 
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('avatars'):'');
$html .= <<<EOF
<br />
			- jpeg, jpg, gif, png
			<div class="bs_padtop_big">
				<input type="file" name="bild_upload" size="35" />
				<input type="submit" name="submit" value="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('upload'):'');
$html .= <<<EOF
" />
			</div>
			</td>
		</tr>
	</table>
</div>
</form>
EOF;
return $html;
}
?>