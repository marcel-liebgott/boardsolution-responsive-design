<?php
function FWS_TPL_themes_default_templates_inc_forums_htm($tpl,$number) {
$locale = FWS_Props::get()->locale();
$tplvars = $tpl->get_variables('inc_forums.htm',$number);

$html = "";
$html .=<<<EOF

EOF;
if((isset($tplvars['forums']) && $tplvars['forums'])) {
$html .= <<<EOF

<div class="bs_border">
	<h1 class="bs_topic">
EOF;
$html .= $tplvars['title'];
$html .= <<<EOF
</h1>
	<table width="100%" cellpadding="2" cellspacing="1">
		<tr>
			<th class="bs_coldesc" align="left">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('name'):'');
$html .= <<<EOF
</th>
			<th width="8%" class="bs_coldesc">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('threads'):'');
$html .= <<<EOF
</th>
			<th width="8%" class="bs_coldesc">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('posts'):'');
$html .= <<<EOF
</th>
			<th width="22%" class="bs_coldesc">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('lastpost'):'');
$html .= <<<EOF
</th>
		</tr>
	</table>

	
EOF;
$forums_c = -1;
foreach($tplvars['forums'] as $tplvars['forum']) {
$forums_c++;

$html .= <<<EOF

	
EOF;
if((isset($tplvars['forum']['close_clap_forum']) && $tplvars['forum']['close_clap_forum'])) {
$html .= <<<EOF

	</div>
	
EOF;
}
$html .= <<<EOF

	
	
EOF;
if((isset($tplvars['forum']['contains_forums']) && $tplvars['forum']['contains_forums'])) {
$html .= <<<EOF

	<!--  forum containing forums - START -->
	<table width="100%" cellpadding="2" cellspacing="1">
		<tr>
			
EOF;
$forum_path_images_c = -1;
foreach($tplvars['forum']['path_images'] as $tplvars['pimage']) {
$forum_path_images_c++;

$html .= <<<EOF

			<td valign="top" height="20" width="20">
EOF;
$html .= $tplvars['pimage']['image'];
$html .= <<<EOF
</td>
			
EOF;
}
$html .= <<<EOF

			<td height="20" class="bs_categories">
			
EOF;
if((isset($tplvars['forum']['clap_forum']) && $tplvars['forum']['clap_forum'])) {
$html .= <<<EOF

			&nbsp;<a href="
EOF;
$html .= $tplvars['forum']['clap_forum_url'];
$html .= <<<EOF
" onclick="clapForum('
EOF;
$html .= $tplvars['forum']['forum_id'];
$html .= <<<EOF
','
EOF;
$html .= $tplvars['forum']['cookie_prefix'];
$html .= <<<EOF
'); return false;" title="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('hidethisforum'):'');
$html .= <<<EOF
"><img id="cross_
EOF;
$html .= $tplvars['forum']['forum_id'];
$html .= <<<EOF
" src="
EOF;
$html .= $tplvars['forum']['img_ins'];
$html .= <<<EOF
" style="vertical-align: middle;" alt="Toggle" /></a>
			<a href="
EOF;
$html .= $tplvars['forum']['forum_url'];
$html .= <<<EOF
">
EOF;
$html .= $tplvars['forum']['forum_name_ins'];
$html .= <<<EOF
</a>
			
EOF;
} else {
$html .= <<<EOF

			&nbsp;&nbsp;<a href="
EOF;
$html .= $tplvars['forum']['forum_url'];
$html .= <<<EOF
">
EOF;
$html .= $tplvars['forum']['forum_name_ins'];
$html .= <<<EOF
</a>
			
EOF;
}
$html .= <<<EOF

			</td>
		</tr>
	</table>
	<!--  forum containing forums - ENDE -->
	
	
EOF;
if((isset($tplvars['forum']['clap_forum']) && $tplvars['forum']['clap_forum'])) {
$html .= <<<EOF

	<div style="display: 
EOF;
$html .= $tplvars['forum']['display_rubrik'];
$html .= <<<EOF
;" id="subForums_
EOF;
$html .= $tplvars['forum']['forum_id'];
$html .= <<<EOF
">
	
EOF;
}
$html .= <<<EOF

	
EOF;
} else {
$html .= <<<EOF

	<!-- forum containing threads - START -->
	<table width="100%" cellpadding="2" cellspacing="1">
		<tr>
			
EOF;
$forum_path_images_c = -1;
foreach($tplvars['forum']['path_images'] as $tplvars['pimage']) {
$forum_path_images_c++;

$html .= <<<EOF

			<td valign="top" height="28" width="20">
EOF;
$html .= $tplvars['pimage']['image'];
$html .= <<<EOF
</td>
			
EOF;
}
$html .= <<<EOF

			<td width="40" class="bs_forums" align="center">
EOF;
$html .= $tplvars['forum']['alreadyread'];
$html .= <<<EOF
</td>
			<td class="bs_forums">
			<a href="
EOF;
$html .= $tplvars['forum']['forum_url'];
$html .= <<<EOF
">
EOF;
$html .= $tplvars['forum']['forum_name_ins'];
$html .= <<<EOF
</a>
			<div class="bs_forums_small">
			
EOF;
$html .= $tplvars['forum']['beschr_ins'];
$html .= <<<EOF
<br />
			
EOF;
if((isset($tplvars['enable_moderators']) && $tplvars['enable_moderators'])) {
$html .= <<<EOF

			<b>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('moderators'):'');
$html .= <<<EOF
:</b> 
EOF;
$html .= $tplvars['forum']['mods_ins'];
$html .= <<<EOF
<br />
			
EOF;
}
$html .= <<<EOF

			
EOF;
if((isset($tplvars['forum']['sub_forums']) && $tplvars['forum']['sub_forums'])) {
$html .= <<<EOF

			<b>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('subdirs'):'');
$html .= <<<EOF
:</b> 
EOF;
$html .= $tplvars['forum']['sub_forums'];
$html .= <<<EOF

			
EOF;
}
$html .= <<<EOF

			</div>
			</td>
			<td width="8%" class="bs_forums_small" align="center">
EOF;
$html .= $tplvars['forum']['thread_count'];
$html .= <<<EOF
</td>
			<td width="8%" class="bs_forums_small" align="center">
EOF;
$html .= $tplvars['forum']['post_count'];
$html .= <<<EOF
</td>
			<td width="22%" class="bs_forums_small">
			
EOF;
if((isset($tplvars['forum']['lastpost']) && $tplvars['forum']['lastpost'] == false)) {
$html .= <<<EOF

			-
			
EOF;
} else {
$html .= <<<EOF

			
EOF;
$html .= $tplvars['forum']['lastpost']['date'];
$html .= <<<EOF
<br />
			
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('From'):'');
$html .= <<<EOF
: 
EOF;
$html .= $tplvars['forum']['lastpost']['username'];
$html .= <<<EOF
<br />
			
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('totopic'):'');
$html .= <<<EOF
:
			<a title="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('gotolastpost'):'');
$html .= <<<EOF
" href="
EOF;
$html .= $tplvars['forum']['lastpost']['lastpost_url'];
$html .= <<<EOF
">
			<img src="
EOF;
$html .= ($tpl->check_allowed_method('guser','get_theme_item_path')?$tplvars['guser']->get_theme_item_path('images/lastpost.gif'):'');
$html .= <<<EOF
" alt="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('gotolastpost'):'');
$html .= <<<EOF
" style="vertical-align: middle;" />
			</a>
			<a title="
EOF;
$html .= $tplvars['forum']['lastpost']['topic_complete'];
$html .= <<<EOF
" href="
EOF;
$html .= $tplvars['forum']['lastpost']['topic_url'];
$html .= <<<EOF
">
EOF;
$html .= $tplvars['forum']['lastpost']['topic'];
$html .= <<<EOF
</a>
			
EOF;
}
$html .= <<<EOF

			</td>
		</tr>
	</table>
	<!--  forum containing threads - ENDE -->
	
EOF;
}
$html .= <<<EOF

	
EOF;
}
$html .= <<<EOF

	
	
EOF;
if((isset($tplvars['clap_forum_bottom']) && $tplvars['clap_forum_bottom'])) {
$html .= <<<EOF

	</div>
	
EOF;
}
$html .= <<<EOF

</div>

<script type="text/javascript" language="Javascript">
<!--
var global_cookie = '
EOF;
$html .= $tplvars['forum_cookie'];
$html .= <<<EOF
';
//-->
</script>

EOF;
}
$html .= <<<EOF

EOF;
return $html;
}
?>