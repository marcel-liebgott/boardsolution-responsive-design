<?php
function FWS_TPL_themes_default_templates_topics_htm($tpl,$number) {
$locale = FWS_Props::get()->locale();
$tplvars = $tpl->get_variables('topics.htm',$number);

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
if((isset($tplvars['latest_topics_top']) && $tplvars['latest_topics_top']) && (isset($tplvars['sub_forum']) && $tplvars['sub_forum'])) {
$html .= <<<EOF


EOF;
$html .= $tpl->parse_template("inc_topics.htm",false);
$html .= <<<EOF

<br />

EOF;
}
$html .= <<<EOF


<div style="padding-bottom: 0.3em;">
	<div style="float: left;">
		<b>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('moderators'):'');
$html .= <<<EOF
:</b> 
EOF;
$html .= $tplvars['moderators'];
$html .= <<<EOF

	</div>
	<div style="float: right; width: 50%;">
		
EOF;
if((isset($tplvars['display_event']) && $tplvars['display_event'])) {
$html .= <<<EOF

		<a class="bs_button_big" title="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('createnewevent'):'');
$html .= <<<EOF
" href="
EOF;
$html .= ($tpl->check_allowed_method('gurl','simple_url')?$tplvars['gurl']->simple_url('new_event','&amp;$URL_FID='.$tplvars['fid']):'');
$html .= <<<EOF
">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('newevent'):'');
$html .= <<<EOF
</a>
		
EOF;
}
$html .= <<<EOF

		
EOF;
if((isset($tplvars['display_poll']) && $tplvars['display_poll'])) {
$html .= <<<EOF

		<a class="bs_button_big" title="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('createnewpoll'):'');
$html .= <<<EOF
" href="
EOF;
$html .= ($tpl->check_allowed_method('gurl','simple_url')?$tplvars['gurl']->simple_url('new_poll','&amp;$URL_FID='.$tplvars['fid']):'');
$html .= <<<EOF
">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('newpoll'):'');
$html .= <<<EOF
</a>
		
EOF;
}
$html .= <<<EOF

		
EOF;
if((isset($tplvars['display_topic']) && $tplvars['display_topic'])) {
$html .= <<<EOF

		<a class="bs_button_big" title="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('createnewthread'):'');
$html .= <<<EOF
" href="
EOF;
$html .= ($tpl->check_allowed_method('gurl','simple_url')?$tplvars['gurl']->simple_url('new_topic','&amp;$URL_FID='.$tplvars['fid']):'');
$html .= <<<EOF
">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('newthread'):'');
$html .= <<<EOF
</a>
		
EOF;
}
$html .= <<<EOF

	</div>
	<br style="clear: both;" />
</div>


EOF;
if((isset($tplvars['sub_forum']) && $tplvars['sub_forum'])) {
$html .= <<<EOF

<div class="bs_padbottom">

EOF;
$html .= $tpl->parse_template("inc_forums.htm",false);
$html .= <<<EOF

</div>

EOF;
}
$html .= <<<EOF



EOF;
if((isset($tplvars['contains_topics']) && $tplvars['contains_topics'])) {
$html .= <<<EOF


EOF;
$html .= $tpl->parse_template("inc_topic_action_js.htm",false);
$html .= <<<EOF



EOF;
$html .= $tpl->parse_template("inc_topics.htm",false);
$html .= <<<EOF


<div style="padding-top: 0.3em;">
	<div style="padding-left: 20px; float: left;">
		
EOF;
if((isset($tplvars['display_topic_actions']) && $tplvars['display_topic_actions'])) {
$html .= <<<EOF

		<img src="
EOF;
$html .= ($tpl->check_allowed_method('guser','get_theme_item_path')?$tplvars['guser']->get_theme_item_path('images/thread_option.gif'):'');
$html .= <<<EOF
" alt="" />
		
EOF;
$html .= $tplvars['topic_action_combo'];
$html .= <<<EOF

		<input type="submit" onclick="performModAction(getModActionURL());" value="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('performaction'):'');
$html .= <<<EOF
" /> |
		<a href="javascript:invertSelection('id_',0);">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('invertmark'):'');
$html .= <<<EOF
</a>
		
EOF;
} else {
$html .= <<<EOF

		&nbsp;
		
EOF;
}
$html .= <<<EOF

	</div>
	<div style="float: right; width: 50%;">
		
EOF;
if((isset($tplvars['display_event']) && $tplvars['display_event'])) {
$html .= <<<EOF

		<a class="bs_button_big" title="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('createnewevent'):'');
$html .= <<<EOF
" href="
EOF;
$html .= ($tpl->check_allowed_method('gurl','simple_url')?$tplvars['gurl']->simple_url('new_event','&amp;$URL_FID='.$tplvars['fid']):'');
$html .= <<<EOF
">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('newevent'):'');
$html .= <<<EOF
</a>
		
EOF;
}
$html .= <<<EOF

		
EOF;
if((isset($tplvars['display_poll']) && $tplvars['display_poll'])) {
$html .= <<<EOF

		<a class="bs_button_big" title="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('createnewpoll'):'');
$html .= <<<EOF
" href="
EOF;
$html .= ($tpl->check_allowed_method('gurl','simple_url')?$tplvars['gurl']->simple_url('new_poll','&amp;$URL_FID='.$tplvars['fid']):'');
$html .= <<<EOF
">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('newpoll'):'');
$html .= <<<EOF
</a>
		
EOF;
}
$html .= <<<EOF

		
EOF;
if((isset($tplvars['display_topic']) && $tplvars['display_topic'])) {
$html .= <<<EOF

		<a class="bs_button_big" title="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('createnewthread'):'');
$html .= <<<EOF
" href="
EOF;
$html .= ($tpl->check_allowed_method('gurl','simple_url')?$tplvars['gurl']->simple_url('new_topic','&amp;$URL_FID='.$tplvars['fid']):'');
$html .= <<<EOF
">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('newthread'):'');
$html .= <<<EOF
</a>
		
EOF;
}
$html .= <<<EOF

	</div>
	<br style="clear: both;" />
</div>

<div class="bs_padtop">

EOF;
$html .= $tpl->parse_template("inc_pagination.htm",false);
$html .= <<<EOF

</div>

EOF;
} else {
$html .= <<<EOF


EOF;
$html .= $tpl->parse_template("inc_topics.htm",false);
$html .= <<<EOF


EOF;
}
$html .= <<<EOF



EOF;
if((isset($tplvars['latest_topics_bottom']) && $tplvars['latest_topics_bottom']) && (isset($tplvars['sub_forum']) && $tplvars['sub_forum'])) {
$html .= <<<EOF

<div class="bs_padtop">

EOF;
$html .= $tpl->parse_template("inc_topics.htm",false);
$html .= <<<EOF

</div>

EOF;
}
$html .= <<<EOF



EOF;
if((isset($tplvars['view_useronline_list']) && $tplvars['view_useronline_list'])) {
$html .= <<<EOF

<div class="bs_padtop">

EOF;
$html .= $tpl->parse_template("inc_online_user.htm",false);
$html .= <<<EOF

</div>

EOF;
}
$html .= <<<EOF



EOF;
if((isset($tplvars['contains_topics']) && $tplvars['contains_topics'])) {
$html .= <<<EOF

<form method="get" action="
EOF;
$html .= $tplvars['php_self'];
$html .= <<<EOF
">
<input type="hidden" name="
EOF;
$html .= $tplvars['action_param'];
$html .= <<<EOF
" value="topics" />
<input type="hidden" name="
EOF;
$html .= $tplvars['fid_param'];
$html .= <<<EOF
" value="
EOF;
$html .= $tplvars['fid'];
$html .= <<<EOF
" />

EOF;
$hidden_fields_c = -1;
foreach($tplvars['hidden_fields'] as $tplvars['k'] => $tplvars['v']) {
$hidden_fields_c++;

$html .= <<<EOF

<input type="hidden" name="
EOF;
$html .= $tplvars['k'];
$html .= <<<EOF
" value="
EOF;
$html .= $tplvars['v'];
$html .= <<<EOF
" />

EOF;
}
$html .= <<<EOF

<div class="bs_border bs_padtop">
	<div class="bs_topic">
		<table width="100%" cellpadding="0" cellspacing="0">
			<tr>
				<td width="20%" align="left">
				<a href="
EOF;
$html .= ($tpl->check_allowed_method('gurl','simple_url')?$tplvars['gurl']->simple_url(0,'&amp;$URL_FID='.$tplvars['fid'].'&amp;$URL_KW=clap_options'):'');
$html .= <<<EOF
"
					onclick="clapArea('options_row','clap_img','
EOF;
$html .= $tplvars['cookie_prefix'];
$html .= <<<EOF
topic_options'); return false;">
					<img id="clap_img" src="
EOF;
$html .= ($tpl->check_allowed_method('guser','get_theme_item_path')?$tplvars['guser']->get_theme_item_path('images/cross'.$tplvars['img_type'].'.gif'):'');
$html .= <<<EOF
" alt="Toggle" /></a>
				</td>
				<td width="60%" align="center">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('options'):'');
$html .= <<<EOF
</td>
				<td width="20%">&nbsp;</td>
			</tr>
		</table>
	</div>
	<div class="bs_main" id="options_row"
EOF;
$html .= $tplvars['hide_options'];
$html .= <<<EOF
>
		<table width="100%" cellpadding="2" cellspacing="1">
			<tr>
				<td width="65%" valign="bottom">
				<table width="100%" cellpadding="2" cellspacing="0">
					
EOF;
if((isset($tplvars['number_of_threads']) && $tplvars['number_of_threads'] > 0)) {
$html .= <<<EOF

					<tr>
						<td colspan="2" class="bs_main">
						
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('orderthreadsby'):'');
$html .= <<<EOF
:
						
EOF;
$html .= $tplvars['order_ins'];
$html .= <<<EOF

						
EOF;
$html .= $tplvars['ascdesc_ins'];
$html .= <<<EOF

						
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('and'):'');
$html .= <<<EOF

						
EOF;
$html .= $tplvars['tps_ins'];
$html .= <<<EOF

						
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('threadsperpage'):'');
$html .= <<<EOF

						<input type="submit" value="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('show'):'');
$html .= <<<EOF
" />
						</td>
					</tr>
					
EOF;
}
$html .= <<<EOF

					<tr>
						<td class="bs_main" width="50%">
						<img src="
EOF;
$html .= ($tpl->check_allowed_method('guser','get_theme_item_path')?$tplvars['guser']->get_theme_item_path('images/thread_status/important_en.gif'):'');
$html .= <<<EOF
" alt="" />
						<img src="
EOF;
$html .= ($tpl->check_allowed_method('guser','get_theme_item_path')?$tplvars['guser']->get_theme_item_path('images/thread_status/important_dis.gif'):'');
$html .= <<<EOF
" alt="" /> =
						
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('important_desc'):'');
$html .= <<<EOF

						</td>
						<td class="bs_main" width="50%">
						<img src="
EOF;
$html .= ($tpl->check_allowed_method('guser','get_theme_item_path')?$tplvars['guser']->get_theme_item_path('images/thread_status/hot_en.gif'):'');
$html .= <<<EOF
" alt="" />
						<img src="
EOF;
$html .= ($tpl->check_allowed_method('guser','get_theme_item_path')?$tplvars['guser']->get_theme_item_path('images/thread_status/hot_dis.gif'):'');
$html .= <<<EOF
" alt="" /> =
						
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('hot_desc'):'');
$html .= <<<EOF

						</td>
					</tr>
					<tr>
						<td class="bs_main" width="50%">
						<img src="
EOF;
$html .= ($tpl->check_allowed_method('guser','get_theme_item_path')?$tplvars['guser']->get_theme_item_path('images/thread_status/closed_en.gif'):'');
$html .= <<<EOF
" alt="" />
						<img src="
EOF;
$html .= ($tpl->check_allowed_method('guser','get_theme_item_path')?$tplvars['guser']->get_theme_item_path('images/thread_status/closed_dis.gif'):'');
$html .= <<<EOF
" alt="" /> =
						
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('closed_desc'):'');
$html .= <<<EOF

						</td>
						<td class="bs_main" width="50%">
						<img src="
EOF;
$html .= ($tpl->check_allowed_method('guser','get_theme_item_path')?$tplvars['guser']->get_theme_item_path('images/thread_status/moved_en.gif'):'');
$html .= <<<EOF
" alt="" />
						<img src="
EOF;
$html .= ($tpl->check_allowed_method('guser','get_theme_item_path')?$tplvars['guser']->get_theme_item_path('images/thread_status/moved_dis.gif'):'');
$html .= <<<EOF
" alt="" /> =
						
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('moved_desc'):'');
$html .= <<<EOF

						</td>
					</tr>
					<tr>
						<td class="bs_main" colspan="2">
						<img src="
EOF;
$html .= ($tpl->check_allowed_method('guser','get_theme_item_path')?$tplvars['guser']->get_theme_item_path('images/thread_status/read_explain.gif'):'');
$html .= <<<EOF
" alt="" />
						<img src="
EOF;
$html .= ($tpl->check_allowed_method('guser','get_theme_item_path')?$tplvars['guser']->get_theme_item_path('images/thread_status/unread_explain.gif'):'');
$html .= <<<EOF
" alt="" /> =
						
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('unread_desc'):'');
$html .= <<<EOF

						</td>
					</tr>
				</table>
				</td>
				<td width="35%" class="bs_main_no_pad" align="right" valign="top">
				<u><b>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('youroptions'):'');
$html .= <<<EOF
:</b></u><br />
				
EOF;
$options_c = -1;
foreach($tplvars['options'] as $tplvars['option']) {
$options_c++;

$html .= <<<EOF

				
EOF;
$html .= $tplvars['option'];
$html .= <<<EOF
<br />
				
EOF;
}
$html .= <<<EOF

				</td>
			</tr>
		</table>
	</div>
</div>
</form>

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