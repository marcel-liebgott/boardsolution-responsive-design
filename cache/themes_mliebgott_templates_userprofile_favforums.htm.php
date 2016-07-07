<?php
function FWS_TPL_themes_mliebgott_templates_userprofile_favforums_htm($tpl,$number) {
$locale = FWS_Props::get()->locale();
$tplvars = $tpl->get_variables('userprofile_favforums.htm',$number);

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
<div class="bs_border">
	<h1 class="bs_topic">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('favorite_forums'):'');
$html .= <<<EOF
</h1>
	<table width="100%" cellpadding="2" cellspacing="1">
		<tr>
			<th width="65%" class="bs_coldesc" align="left">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('forum'):'');
$html .= <<<EOF
</th>
			<th width="35%" class="bs_coldesc">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('favorite'):'');
$html .= <<<EOF
</th>
		</tr>
	</table>
	
	
EOF;
if((count($tplvars['forums']) == 0)) {
$html .= <<<EOF

	<div class="bs_main" align="center">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('no_forums_available'):'');
$html .= <<<EOF
</div>
	
EOF;
}
$html .= <<<EOF

	
EOF;
$forums_c = -1;
foreach($tplvars['forums'] as $tplvars['forum']) {
$forums_c++;

$html .= <<<EOF

	<table width="100%" cellpadding="2" cellspacing="1">
		<tr>
			
EOF;
$forum_path_images_c = -1;
foreach($tplvars['forum']['path_images'] as $tplvars['pimage']) {
$forum_path_images_c++;

$html .= <<<EOF

			<td valign="top" height="18" width="20">
EOF;
$html .= $tplvars['pimage'];
$html .= <<<EOF
</td>
			
EOF;
}
$html .= <<<EOF

			
EOF;
if((isset($tplvars['forum']['contains_forums']) && $tplvars['forum']['contains_forums'])) {
$html .= <<<EOF

			<td height="18" class="bs_coldesc">
			<a href="
EOF;
$html .= $tplvars['forum']['forum_url'];
$html .= <<<EOF
">
EOF;
$html .= $tplvars['forum']['name'];
$html .= <<<EOF
</a>
			</td>
			
EOF;
} else {
$html .= <<<EOF

			<td height="18" class="bs_main"><a href="
EOF;
$html .= $tplvars['forum']['forum_url'];
$html .= <<<EOF
">
EOF;
$html .= $tplvars['forum']['name'];
$html .= <<<EOF
</a></td>
			<td class="bs_main" width="35%" align="center"
				onclick="var cb = document.getElementById('fav_
EOF;
$html .= $tplvars['forum']['index'];
$html .= <<<EOF
'); cb.checked = cb.checked ? false : true;">
			<input type="checkbox" id="fav_
EOF;
$html .= $tplvars['forum']['index'];
$html .= <<<EOF
" name="favorite[
EOF;
$html .= $tplvars['forum']['id'];
$html .= <<<EOF
]" value="1"
				onclick="this.checked = this.checked ? false : true;" 
EOF;
if((isset($tplvars['forum']['selected']) && $tplvars['forum']['selected'])) {
$html .= <<<EOF
checked="checked" 
EOF;
}
$html .= <<<EOF
/>
			</td>
			
EOF;
}
$html .= <<<EOF

		</tr>
	</table>
	
EOF;
}
$html .= <<<EOF

</div>

<table width="100%" cellpadding="0" cellspacing="0">
	<tr>
		<td width="30%">&nbsp;</td>
		<td width="40%" align="center"><input type="submit" value="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('submit'):'');
$html .= <<<EOF
" /></td>
		<td width="30%" align="right">
		<a href="Javascript:invertSelection('fav_');">
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
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('favorite_forums_notice'):'');
$html .= <<<EOF

</div>
EOF;
return $html;
}
?>