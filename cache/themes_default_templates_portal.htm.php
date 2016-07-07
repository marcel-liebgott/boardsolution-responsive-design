<?php
function FWS_TPL_themes_default_templates_portal_htm($tpl,$number) {
$locale = FWS_Props::get()->locale();
$tplvars = $tpl->get_variables('portal.htm',$number);

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
	<div class="bs_portal_left">
		
EOF;
if((isset($tplvars['show_news']) && $tplvars['show_news'])) {
$html .= <<<EOF

		<div class="bs_border">
			<h1 class="bs_topic">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('news'):'');
$html .= <<<EOF
</h1>
			<ul class="bs_none_list">
				
EOF;
if((isset($tplvars['num']) && $tplvars['num'] == 0)) {
$html .= <<<EOF

				<li class="bs_main" style="text-align: center;">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('no_news_found'):'');
$html .= <<<EOF
</li>
				
EOF;
}
$html .= <<<EOF

				
EOF;
$news_list_c = -1;
foreach($tplvars['news_list'] as $tplvars['news']) {
$news_list_c++;

$html .= <<<EOF

				<li class="bs_main" style="padding: 0;">
					<table width="100%" cellpadding="0" cellspacing="0" style="table-layout: fixed;">
						<tr>
							<td class="bs_coldesc">
							<a href="#">
EOF;
$html .= $tplvars['news']['news_icon'];
$html .= <<<EOF
</a>&nbsp;&nbsp;<a href="
EOF;
$html .= $tplvars['news']['topic_url'];
$html .= <<<EOF
">
EOF;
$html .= $tplvars['news']['news_title'];
$html .= <<<EOF
</a>
							</td>
							<td class="bs_coldesc" align="right">
EOF;
$html .= $tplvars['news']['forum_path'];
$html .= <<<EOF
</td>
						</tr>
						<tr>
							<td class="bs_main bs_posts_main_1" valign="top" colspan="2">
							<div style="max-height: 200px; overflow: auto;">
								
EOF;
$html .= $tplvars['news']['text'];
$html .= <<<EOF

							</div>
							</td>
						</tr>
						<tr>
							<td class="bs_coldesc">
							<span style="font-weight: normal;">
								<u>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('From'):'');
$html .= <<<EOF
:</u> <b>
EOF;
$html .= $tplvars['news']['username'];
$html .= <<<EOF
</b>, 
EOF;
$html .= $tplvars['news']['date'];
$html .= <<<EOF

							</span>
							</td>
							<td class="bs_coldesc" align="right" style="font-weight: normal;">
EOF;
$html .= $tplvars['news']['comments'];
$html .= <<<EOF
</td>
						</tr>
					</table>
					
EOF;
if((isset($tplvars['news']['show_separator']) && $tplvars['news']['show_separator'])) {
$html .= <<<EOF

					<div class="bs_post_separator">&nbsp;</div>
					
EOF;
}
$html .= <<<EOF

				</li>
				
EOF;
}
$html .= <<<EOF

			</ul>
		</div>
		<br />
		
EOF;
} else {
$html .= <<<EOF

		
EOF;
if((isset($tplvars['show_latest_topics_full']) && $tplvars['show_latest_topics_full'])) {
$html .= <<<EOF

		
EOF;
$html .= $tpl->parse_template("inc_topics.htm",false);
$html .= <<<EOF

		
EOF;
}
$html .= <<<EOF

		
EOF;
}
$html .= <<<EOF

	</div>
	
	<div class="bs_portal_right">
		<div class="bs_border">
			<h1 class="bs_topic">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('links'):'');
$html .= <<<EOF
</h1>
			<ul class="bs_none_list">
				<li class="bs_main"><a href="
EOF;
$html .= $tplvars['forums_url'];
$html .= <<<EOF
">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('forums'):'');
$html .= <<<EOF
</a></li>
				<li class="bs_coldesc"><b>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('last_active_forums'):'');
$html .= <<<EOF
:</b></li>
				
EOF;
$forums_c = -1;
foreach($tplvars['forums'] as $tplvars['forum']) {
$forums_c++;

$html .= <<<EOF

				<li class="bs_main">
				
EOF;
if((isset($tplvars['forum']['is_unread']) && $tplvars['forum']['is_unread'])) {
$html .= <<<EOF

				<img src="
EOF;
$html .= ($tpl->check_allowed_method('guser','get_theme_item_path')?$tplvars['guser']->get_theme_item_path('images/unread/post_unread.gif'):'');
$html .= <<<EOF
" alt="* " />
				
EOF;
} else {
$html .= <<<EOF

				<img src="
EOF;
$html .= ($tpl->check_allowed_method('guser','get_theme_item_path')?$tplvars['guser']->get_theme_item_path('images/unread/post_read.gif'):'');
$html .= <<<EOF
" alt="" />
				
EOF;
}
$html .= <<<EOF

				
EOF;
$html .= $tplvars['forum']['path'];
$html .= <<<EOF

				</li>
				
EOF;
}
$html .= <<<EOF

				
EOF;
if((count($tplvars['forums']) == 0)) {
$html .= <<<EOF

				<li class="bs_main">
				
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('notavailable'):'');
$html .= <<<EOF

				</li>
				
EOF;
}
$html .= <<<EOF

				<li class="bs_coldesc_sep">&nbsp;</li>
				
EOF;
if((isset($tplvars['gisloggedin']) && $tplvars['gisloggedin'])) {
$html .= <<<EOF

				<li class="bs_main"><a href="
EOF;
$html .= $tplvars['profile_config_url'];
$html .= <<<EOF
">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('profile_config'):'');
$html .= <<<EOF
</a></li>
				
EOF;
}
$html .= <<<EOF

				
EOF;
if((isset($tplvars['gisloggedin']) && $tplvars['gisloggedin']) && (isset($tplvars['guserenablepm']) && $tplvars['guserenablepm'])) {
$html .= <<<EOF

				<li class="bs_main"><a href="
EOF;
$html .= $tplvars['new_pm_url'];
$html .= <<<EOF
">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('compose_new_pm'):'');
$html .= <<<EOF
</a></li>
				
EOF;
}
$html .= <<<EOF

				
EOF;
if((isset($tplvars['show_feeds']) && $tplvars['show_feeds'])) {
$html .= <<<EOF

				<li class="bs_main"><a href="
EOF;
$html .= $tplvars['rss20_feed'];
$html .= <<<EOF
">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('subscribe_news_feed'):'');
$html .= <<<EOF
 [RSS 2.0]</a></li>
				<li class="bs_main"><a href="
EOF;
$html .= $tplvars['atom_feed'];
$html .= <<<EOF
">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('subscribe_news_feed'):'');
$html .= <<<EOF
 [Atom]</a></li>
				
EOF;
}
$html .= <<<EOF

				<li class="bs_main"><a href="
EOF;
$html .= $tplvars['team_url'];
$html .= <<<EOF
">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('the_team'):'');
$html .= <<<EOF
</a></li>
			</ul>
		</div>
		
		
EOF;
if((isset($tplvars['view_useronline_list']) && $tplvars['view_useronline_list'])) {
$html .= <<<EOF

		<div class="bs_border bs_padtop">
			<h1 class="bs_topic">
EOF;
$html .= $tplvars['total_user_online'];
$html .= <<<EOF
</h1>
			<ul class="bs_none_list">
				<li class="bs_main">
EOF;
$html .= $tplvars['online']['conclusion'];
$html .= <<<EOF
</li>
				<li class="bs_main">
				
EOF;
$html .= $tplvars['online']['online_reg'];
$html .= <<<EOF

				<div class="bs_desc" style="padding-top: 10px;">
					<b>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('legend'):'');
$html .= <<<EOF
:</b> 
EOF;
$html .= $tplvars['legend'];
$html .= <<<EOF

				</div>
				</li>
			</ul>
		</div>
		
EOF;
}
$html .= <<<EOF

		
		<div class="bs_border bs_padtop">
			<h1 class="bs_topic"><a href="
EOF;
$html .= $tplvars['calendar_url'];
$html .= <<<EOF
">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('currently'):'');
$html .= <<<EOF
</a></h1>
			<ul class="bs_none_list">
				<li class="bs_main">
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

				</li>
				<li class="bs_main"><b>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('newest_member'):'');
$html .= <<<EOF
:</b> 
EOF;
$html .= $tplvars['newest_member'];
$html .= <<<EOF
</li>
				<li class="bs_main">
				<img src="
EOF;
$html .= ($tpl->check_allowed_method('guser','get_theme_item_path')?$tplvars['guser']->get_theme_item_path('images/thread_type/event.gif'):'');
$html .= <<<EOF
" alt="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('event'):'');
$html .= <<<EOF
" width="15" height="15" />
				<u>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('current_events'):'');
$html .= <<<EOF
:</u>
				<div>
					
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

				</div>
				</li>
				<li class="bs_main">
				<img src="
EOF;
$html .= ($tpl->check_allowed_method('guser','get_theme_item_path')?$tplvars['guser']->get_theme_item_path('images/birthday.gif'):'');
$html .= <<<EOF
" alt="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('birthday'):'');
$html .= <<<EOF
" /> <u>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('todaysbirthdays'):'');
$html .= <<<EOF
:</u>
				<div>
					
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

				</div>
				</li>
			</ul>
		</div>
		
		
EOF;
if((isset($tplvars['show_latest_topics']) && $tplvars['show_latest_topics'])) {
$html .= <<<EOF

		<div class="bs_border bs_padtop">
			<h1 class="bs_topic"><a href="
EOF;
$html .= $tplvars['current_topics_url'];
$html .= <<<EOF
">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('current_topics'):'');
$html .= <<<EOF
</a></h1>
			<table class="bs_table" width="100%" cellpadding="2" cellspacing="1">
				
EOF;
if((isset($tplvars['topics']) && $tplvars['topics'] == false)) {
$html .= <<<EOF

				<tr>
					<td class="bs_main" colspan="2" align="center">
					
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('no_topics_found'):'');
$html .= <<<EOF

					</td>
				</tr>
				
EOF;
}
$html .= <<<EOF

				
EOF;
$topics_c = -1;
foreach($tplvars['topics'] as $tplvars['topic']) {
$topics_c++;

$html .= <<<EOF

				<tr>
					<td class="bs_main" width="5%">
EOF;
$html .= $tplvars['topic']['topic_symbol'];
$html .= <<<EOF
</td>
					<td class="bs_main" width="95%">
					
EOF;
if((isset($tplvars['topic']['is_unread']) && $tplvars['topic']['is_unread'])) {
$html .= <<<EOF

					<a title="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('goto_first_unread_post'):'');
$html .= <<<EOF
" href="
EOF;
$html .= $tplvars['topic']['first_unread_url'];
$html .= <<<EOF
">
					<img src="
EOF;
$html .= ($tpl->check_allowed_method('guser','get_theme_item_path')?$tplvars['guser']->get_theme_item_path('images/unread/first_unread_post.gif'):'');
$html .= <<<EOF
"
						alt="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('goto_first_unread_post'):'');
$html .= <<<EOF
" /></a>
					
EOF;
}
$html .= <<<EOF

					
EOF;
if((isset($tplvars['topic']['is_important']) && $tplvars['topic']['is_important'])) {
$html .= <<<EOF

					<b>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('important'):'');
$html .= <<<EOF
</b>: 
					
EOF;
}
$html .= <<<EOF

					<a 
EOF;
if((isset($tplvars['topic']['name_complete']) && $tplvars['topic']['name_complete'] != '')) {
$html .= <<<EOF
title="
EOF;
$html .= $tplvars['topic']['name_complete'];
$html .= <<<EOF
" 
EOF;
}
$html .= <<<EOF
href="
EOF;
$html .= $tplvars['topic']['url'];
$html .= <<<EOF
">
					
EOF;
if((isset($tplvars['topic']['is_unread']) && $tplvars['topic']['is_unread'])) {
$html .= <<<EOF

					<b>
EOF;
$html .= $tplvars['topic']['name'];
$html .= <<<EOF
</b>
					
EOF;
} else {
$html .= <<<EOF

					
EOF;
$html .= $tplvars['topic']['name'];
$html .= <<<EOF

					
EOF;
}
$html .= <<<EOF

					</a>
					
					<div style="font-size: 0.9em;">
						<u>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('lastpost'):'');
$html .= <<<EOF
:</u>
						
EOF;
if((isset($tplvars['topic']['lastpost']) && $tplvars['topic']['lastpost'] == false)) {
$html .= <<<EOF

						-
						
EOF;
} else {
$html .= <<<EOF

						
EOF;
$html .= $tplvars['topic']['lastpost']['username'];
$html .= <<<EOF
, 
EOF;
$html .= $tplvars['topic']['lastpost']['date'];
$html .= <<<EOF

						<a title="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('gotolastpost'):'');
$html .= <<<EOF
" href="
EOF;
$html .= $tplvars['topic']['lastpost']['url'];
$html .= <<<EOF
">
						<img style="vertical-align: middle;" src="
EOF;
$html .= ($tpl->check_allowed_method('guser','get_theme_item_path')?$tplvars['guser']->get_theme_item_path('images/lastpost.gif'):'');
$html .= <<<EOF
" alt="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('gotolastpost'):'');
$html .= <<<EOF
" />
						</a>
						
EOF;
}
$html .= <<<EOF

					</div>
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

		
		<form method="post" action="
EOF;
$html .= $tplvars['search_url'];
$html .= <<<EOF
">
		<div class="bs_border bs_padtop">
			<h1 class="bs_topic"><a href="
EOF;
$html .= $tplvars['search_url'];
$html .= <<<EOF
">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('search'):'');
$html .= <<<EOF
</a></h1>
			<ul class="bs_none_list">
				<li class="bs_main">
				<label for="search_field">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('searchkeyword'):'');
$html .= <<<EOF
:</label>
				<input id="search_field" type="text" size="15" maxlength="100" name="keyword" style="width: 40%;" />
				<input type="submit" name="submit" value="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('search'):'');
$html .= <<<EOF
" />
				</li>
			</ul>
		</div>
		</form>
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