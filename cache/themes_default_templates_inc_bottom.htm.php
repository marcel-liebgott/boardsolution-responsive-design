<?php
function FWS_TPL_themes_default_templates_inc_bottom_htm($tpl,$number) {
$locale = FWS_Props::get()->locale();
$tplvars = $tpl->get_variables('inc_bottom.htm',$number);

$html = "";
$html .=<<<EOF
<script type="text/javascript">
<!--
function boardJumpRedirect(location)
{
	switch(location)
	{
		case 'index':
			document.location.href = '
EOF;
$html .= ($tpl->check_allowed_method('gurl','build_forums_url')?$tplvars['gurl']->build_forums_url('&'):'');
$html .= <<<EOF
';
			break;
		case 'admin':
			document.location.href = '
EOF;
$html .= ($tpl->check_allowed_method('gurl','build_admin_url')?$tplvars['gurl']->build_admin_url('&'):'');
$html .= <<<EOF
';
			break;
		case 'portal':
			document.location.href = '
EOF;
$html .= ($tpl->check_allowed_method('gurl','build_portal_url')?$tplvars['gurl']->build_portal_url('&'):'');
$html .= <<<EOF
';
			break;
		case 'memberlist':
			document.location.href = '
EOF;
$html .= ($tpl->check_allowed_method('gurl','simple_url')?$tplvars['gurl']->simple_url('memberlist','','&'):'');
$html .= <<<EOF
';
			break;
		case 'linklist':
			document.location.href = '
EOF;
$html .= ($tpl->check_allowed_method('gurl','simple_url')?$tplvars['gurl']->simple_url('linklist','','&'):'');
$html .= <<<EOF
';
			break;
		case 'faq':
			document.location.href = '
EOF;
$html .= ($tpl->check_allowed_method('gurl','simple_url')?$tplvars['gurl']->simple_url('faq','','&'):'');
$html .= <<<EOF
';
			break;
		case 'stats':
			document.location.href = '
EOF;
$html .= ($tpl->check_allowed_method('gurl','simple_url')?$tplvars['gurl']->simple_url('stats','','&'):'');
$html .= <<<EOF
';
			break;
		case 'calendar':
			document.location.href = '
EOF;
$html .= ($tpl->check_allowed_method('gurl','simple_url')?$tplvars['gurl']->simple_url('calendar','','&'):'');
$html .= <<<EOF
';
			break;
		case 'search':
			document.location.href = '
EOF;
$html .= ($tpl->check_allowed_method('gurl','simple_url')?$tplvars['gurl']->simple_url('search','','&'):'');
$html .= <<<EOF
';
			break;
		case 'profile':
			document.location.href = '
EOF;
$html .= ($tpl->check_allowed_method('gurl','simple_url')?$tplvars['gurl']->simple_url('userprofile','&$URL_SUB=infos','&'):'');
$html .= <<<EOF
';
			break;
		
EOF;
if((isset($tplvars['guserenablepm']) && $tplvars['guserenablepm'])) {
$html .= <<<EOF

		case 'pms':
			document.location.href = '
EOF;
$html .= ($tpl->check_allowed_method('gurl','simple_url')?$tplvars['gurl']->simple_url('userprofile','&$URL_SUB=pmoverview','&'):'');
$html .= <<<EOF
';
			break;
		
EOF;
}
$html .= <<<EOF

		case 'register':
			document.location.href = '
EOF;
$html .= $tplvars['register_url'];
$html .= <<<EOF
';
			break;
		case 'unread':
			document.location.href = '
EOF;
$html .= ($tpl->check_allowed_method('gurl','simple_url')?$tplvars['gurl']->simple_url('unread','','&'):'');
$html .= <<<EOF
';
			break;
		case 'team':
			document.location.href = '
EOF;
$html .= ($tpl->check_allowed_method('gurl','simple_url')?$tplvars['gurl']->simple_url('team','','&'):'');
$html .= <<<EOF
';
			break;
		case 'userloc':
			document.location.href = '
EOF;
$html .= ($tpl->check_allowed_method('gurl','simple_url')?$tplvars['gurl']->simple_url('user_locations','','&'):'');
$html .= <<<EOF
';
			break;
		default:
			var parts = location.split('_');
			if(parts.length == 2 && parts[0] == 'f' && Number(parts[1]))
			{
				var base = '
EOF;
$html .= ($tpl->check_allowed_method('gurl','build_topics_url')?$tplvars['gurl']->build_topics_url('_s_',0,'&'):'');
$html .= <<<EOF
';
				document.location.href = base.replace('_s_',parts[1]);
			}
			break;
	}
}
//-->
</script>

<form method="post" action="
EOF;
$html .= ($tpl->check_allowed_method('gurl','simple_url')?$tplvars['gurl']->simple_url('redirect','&amp;$URL_LOC=forum_jump'):'');
$html .= <<<EOF
">
<div class="bs_border bs_padtop">
	<div class="bs_bottom">
		<ul class="bs_none_list bs_bottom">
			<li class="bs_bottom bs_bottom_left">
EOF;
$html .= $tplvars['insert_time'];
$html .= <<<EOF
</li>
			<li class="bs_bottom bs_bottom_center">
			Powered by <a target="_blank" href="http://www.boardsolution.de">
EOF;
$html .= $tplvars['bs_version'];
$html .= <<<EOF
</a>
			</li>
			<li class="bs_bottom bs_bottom_right">
				<select name="forum_jump" onchange="boardJumpRedirect(this.options[this.selectedIndex].value)">
					<option value=""> - - - - - - [ 
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('boardjump'):'');
$html .= <<<EOF
 ] - - - - - - </option>
					<option value="index">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('forums'):'');
$html .= <<<EOF
</option>
					
EOF;
$options_c = -1;
foreach($tplvars['options'] as $tplvars['k'] => $tplvars['v']) {
$options_c++;

$html .= <<<EOF

					<option value="
EOF;
$html .= $tplvars['k'];
$html .= <<<EOF
">
EOF;
$html .= $tplvars['v'];
$html .= <<<EOF
</option>
					
EOF;
}
$html .= <<<EOF

					<option value="">--------------------------------------</option>
					
EOF;
$forums_c = -1;
foreach($tplvars['forums'] as $tplvars['forum']) {
$forums_c++;

$html .= <<<EOF

					<option value="f_
EOF;
$html .= $tplvars['forum']['forum_id'];
$html .= <<<EOF
">
EOF;
$html .= $tplvars['forum']['forum_name'];
$html .= <<<EOF
</option>
					
EOF;
}
$html .= <<<EOF

				</select>
				<input type="submit" value="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('go'):'');
$html .= <<<EOF
" />
			</li>
		</ul>
	</div>
</div>

</form>

EOF;
return $html;
}
?>