<?php
function FWS_TPL_themes_default_templates_forums_htm($tpl,$number) {
$locale = FWS_Props::get()->locale();
$tplvars = $tpl->get_variables('forums.htm',$number);

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



EOF;
if((isset($tplvars['latest_topics_top']) && $tplvars['latest_topics_top'])) {
$html .= <<<EOF

<div class="bs_padbottom_big">

EOF;
$html .= $tpl->parse_template("inc_topics.htm",false);
$html .= <<<EOF

</div>

EOF;
}
$html .= <<<EOF



EOF;
$html .= $tpl->parse_template("inc_forums.htm",false);
$html .= <<<EOF


<div>
	<span style="float: left;">
	<img src="
EOF;
$html .= ($tpl->check_allowed_method('guser','get_theme_item_path')?$tplvars['guser']->get_theme_item_path('images/unread/forum_unread.gif'):'');
$html .= <<<EOF
" alt="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('forum_is_unread'):'');
$html .= <<<EOF
" /> = <span style="line-height: 18px;">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('forum_is_unread'):'');
$html .= <<<EOF
</span>
	</span>
	<span style="float: right;">
	<a href="
EOF;
$html .= ($tpl->check_allowed_method('gurl','simple_url')?$tplvars['gurl']->simple_url(0,'&amp;$URL_AT=$ACTION_CHANGE_READ_STATUS&amp;$URL_LOC=read&amp;$URL_MODE=all','&amp;',true):'');
$html .= <<<EOF
">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('markallasread'):'');
$html .= <<<EOF
</a>
	</span>
	<br style="clear: both;" />
	<span style="float: left;">
	<img src="
EOF;
$html .= ($tpl->check_allowed_method('guser','get_theme_item_path')?$tplvars['guser']->get_theme_item_path('images/unread/forum_read.gif'):'');
$html .= <<<EOF
" alt="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('forum_is_read'):'');
$html .= <<<EOF
" /> = <span style="line-height: 18px;">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('forum_is_read'):'');
$html .= <<<EOF
</span>
	</span>
	<span style="float: right;">
	<a href="
EOF;
$html .= ($tpl->check_allowed_method('gurl','simple_url')?$tplvars['gurl']->simple_url('unread'):'');
$html .= <<<EOF
">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('showunread'):'');
$html .= <<<EOF
</a>
	</span>
	<br style="clear: both;" />
	<span style="float: left;">
	<img src="
EOF;
$html .= ($tpl->check_allowed_method('guser','get_theme_item_path')?$tplvars['guser']->get_theme_item_path('images/unread/forum_read_closed.gif'):'');
$html .= <<<EOF
" alt="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('forum_is_closed_msg'):'');
$html .= <<<EOF
" /> = <span style="line-height: 18px;">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('forum_is_closed_msg'):'');
$html .= <<<EOF
</span>
	</span>
	<span style="float: right;">
	<a href="
EOF;
$html .= ($tpl->check_allowed_method('gurl','simple_url')?$tplvars['gurl']->simple_url('team'):'');
$html .= <<<EOF
">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('the_team'):'');
$html .= <<<EOF
</a>
	</span>
	<br style="clear: both;" />
</div>


EOF;
if((isset($tplvars['view_useronline_list']) && $tplvars['view_useronline_list'])) {
$html .= <<<EOF


EOF;
$html .= $tpl->parse_template("inc_online_user.htm",false);
$html .= <<<EOF


EOF;
}
$html .= <<<EOF



EOF;
if((isset($tplvars['latest_topics_bottom']) && $tplvars['latest_topics_bottom'])) {
$html .= <<<EOF

<div class="bs_padtop_big">

EOF;
$html .= $tpl->parse_template("inc_topics.htm",false);
$html .= <<<EOF

</div>

EOF;
}
$html .= <<<EOF



EOF;
if((isset($tplvars['display_ministats']) && $tplvars['display_ministats'])) {
$html .= <<<EOF


<div class="bs_border bs_padtop_big">
	<table class="bs_table" width="100%" cellpadding="2" cellspacing="1">
		<thead>
			<tr>
				<td class="bs_topic" colspan="2">
				<table width="100%" cellpadding="0" cellspacing="0">
					<tr>
						<td width="20%" style="text-align: left; padding-left: 2px;">
EOF;
$html .= $tplvars['clap_image'];
$html .= <<<EOF
</td>
						<td width="60%" align="center">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('ministats'):'');
$html .= <<<EOF
</td>
						<td width="20%" align="right" style="padding-right: 6px;">
						
EOF;
if((isset($tplvars['show_current_topics_link']) && $tplvars['show_current_topics_link'])) {
$html .= <<<EOF

						<a href="
EOF;
$html .= ($tpl->check_allowed_method('gurl','simple_url')?$tplvars['gurl']->simple_url('latest_topics'):'');
$html .= <<<EOF
">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('current_topics'):'');
$html .= <<<EOF
</a>
						
EOF;
} else {
$html .= <<<EOF

						&nbsp;
						
EOF;
}
$html .= <<<EOF

						</td>
					</tr>
				</table>
				</td>
			</tr>
		</thead>
		<tbody
EOF;
$html .= $tplvars['ministats_params'];
$html .= <<<EOF
>
			<tr>
				<td width="50%" class="bs_main">
				<b>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('lastactivity'):'');
$html .= <<<EOF
:</b>
				
EOF;
if((isset($tplvars['lastlogin']) && $tplvars['lastlogin'] == '')) {
$html .= <<<EOF

				<i>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('unknown'):'');
$html .= <<<EOF
</i>
				
EOF;
} else {
$html .= <<<EOF

				
EOF;
$html .= $tplvars['lastlogin'];
$html .= <<<EOF

				
EOF;
}
$html .= <<<EOF

				</td>
				<td width="50%" class="bs_main">
				<b><span title="
EOF;
$html .= $tplvars['current_events_desc'];
$html .= <<<EOF
">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('current_events'):'');
$html .= <<<EOF
:</span></b>
				
EOF;
if((count($tplvars['events']['list']) > 0)) {
$html .= <<<EOF

				
EOF;
$events_list_c = -1;
foreach($tplvars['events']['list'] as $tplvars['ev']) {
$events_list_c++;

$html .= <<<EOF

				<a href="
EOF;
$html .= $tplvars['ev']['url'];
$html .= <<<EOF
" 
EOF;
if((isset($tplvars['ev']['title_complete']) && $tplvars['ev']['title_complete'] != '')) {
$html .= <<<EOF
title="
EOF;
$html .= $tplvars['ev']['title_complete'];
$html .= <<<EOF
" 
EOF;
}
$html .= <<<EOF
>
EOF;
$html .= $tplvars['ev']['title'];
$html .= <<<EOF
</a>
				(
EOF;
$html .= $tplvars['ev']['date'];
$html .= <<<EOF
)
				
EOF;
if((isset($events_list_c) && $events_list_c != count($tplvars['events']['list']) - 1)) {
$html .= <<<EOF

				,
				
EOF;
}
$html .= <<<EOF
 
				
EOF;
}
$html .= <<<EOF

				
EOF;
if((isset($tplvars['events']['more']) && $tplvars['events']['more'])) {
$html .= <<<EOF

				<a href="
EOF;
$html .= ($tpl->check_allowed_method('gurl','simple_url')?$tplvars['gurl']->simple_url('calendar'):'');
$html .= <<<EOF
">...</a>
				
EOF;
}
$html .= <<<EOF

				
EOF;
} else {
$html .= <<<EOF

				<i>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('none'):'');
$html .= <<<EOF
</i>
				
EOF;
}
$html .= <<<EOF

				</td>
			</tr>
			<tr>
				<td width="50%" class="bs_main"><b>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('newest_member'):'');
$html .= <<<EOF
:</b> 
EOF;
$html .= $tplvars['newest_member'];
$html .= <<<EOF
</td>
				<td width="50%" class="bs_main">
				<b>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('todaysbirthdays'):'');
$html .= <<<EOF
:</b>
				
EOF;
if((count($tplvars['birthdays']['list']) > 0)) {
$html .= <<<EOF

				
EOF;
$birthdays_list_c = -1;
foreach($tplvars['birthdays']['list'] as $tplvars['bd']) {
$birthdays_list_c++;

$html .= <<<EOF

				
EOF;
$html .= $tplvars['bd']['username'];
$html .= <<<EOF
 (
EOF;
$html .= $tplvars['bd']['age'];
$html .= <<<EOF
)
				
EOF;
if((isset($birthdays_list_c) && $birthdays_list_c != count($tplvars['birthdays']['list']) - 1)) {
$html .= <<<EOF

				,
				
EOF;
}
$html .= <<<EOF
 
				
EOF;
}
$html .= <<<EOF

				
EOF;
if((isset($tplvars['birthdays']['more']) && $tplvars['birthdays']['more'])) {
$html .= <<<EOF

				<a href="
EOF;
$html .= ($tpl->check_allowed_method('gurl','simple_url')?$tplvars['gurl']->simple_url('calendar'):'');
$html .= <<<EOF
">...</a>
				
EOF;
}
$html .= <<<EOF

				
EOF;
} else {
$html .= <<<EOF

				<i>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('none'):'');
$html .= <<<EOF
</i>
				
EOF;
}
$html .= <<<EOF

				</td>
			</tr>
			<tr>
				<td colspan="2" class="bs_main"><b>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('total'):'');
$html .= <<<EOF
:</b> 
EOF;
$html .= $tplvars['statistics_ins'];
$html .= <<<EOF
</td>
			</tr>
		</tbody>
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