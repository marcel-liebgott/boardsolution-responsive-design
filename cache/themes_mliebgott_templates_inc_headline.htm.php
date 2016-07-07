<?php
function FWS_TPL_themes_mliebgott_templates_inc_headline_htm($tpl,$number) {
$locale = FWS_Props::get()->locale();
$tplvars = $tpl->get_variables('inc_headline.htm',$number);

$html = "";
$html .=<<<EOF

EOF;
if((isset($tplvars['show_deactivated_notice']) && $tplvars['show_deactivated_notice'])) {
$html .= <<<EOF

	<div class="bs_body" style="font-size: 13px; color: #FF0000;">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('board_is_disabled_admin_hint'):'');
$html .= <<<EOF
</div>

EOF;
}
$html .= <<<EOF



EOF;
if((isset($tplvars['gisloggedin']) && $tplvars['gisloggedin'] == false)) {
$html .= <<<EOF

	<form method="post" action="
EOF;
$html .= $tplvars['login_url'];
$html .= <<<EOF
">
		<input type="hidden" name="login" value="1" />
		<input type="hidden" name="action_type" value="
EOF;
$html .= $tplvars['action_type'];
$html .= <<<EOF
" />

EOF;
}
$html .= <<<EOF


<div class="">
	<div>
		</header>
		<div class="bs_headline" onclick="document.location.href = '
EOF;
$html .= $tplvars['headline_url'];
$html .= <<<EOF
';"></div>
		<nav class="navbar navbar-default">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">htwdd|org</a>
			</div>
			
			<div class="collapse navbar-collapse" id="main-nav">
				<ul class="nav navbar-nav">
					
EOF;
$top_links_c = -1;
foreach($tplvars['top_links'] as $tplvars['id'] => $tplvars['link']) {
$top_links_c++;

$html .= <<<EOF

						<li>
							<a href="
EOF;
$html .= $tplvars['link']['url'];
$html .= <<<EOF
">
EOF;
$html .= $tplvars['link']['text'];
$html .= <<<EOF
</a>
						</li>
					
EOF;
}
$html .= <<<EOF

				</ul>
				
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						
EOF;
if((isset($tplvars['gisloggedin']) && $tplvars['gisloggedin'])) {
$html .= <<<EOF

							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
								
EOF;
if((isset($tplvars['notification_count']) && $tplvars['notification_count'] > 0)) {
$html .= <<<EOF

									<span class="badge user-notification-badge">
EOF;
$html .= $tplvars['notification_count'];
$html .= <<<EOF
</span>
								
EOF;
}
$html .= <<<EOF

								
EOF;
$html .= $tplvars['gusername_plain'];
$html .= <<<EOF

								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu nav-user-element">
								<li class="text-center top10">
									<a href="
EOF;
$html .= $tplvars['guser_url'];
$html .= <<<EOF
">
										
EOF;
if((isset($tplvars['guser_avatar']) && $tplvars['guser_avatar'] == ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('nopictureavailable'):''))) {
$html .= <<<EOF

											
EOF;
$html .= $tplvars['gusername_plain'];
$html .= <<<EOF

										
EOF;
} else {
$html .= <<<EOF

											<img src="
EOF;
$html .= $tplvars['guser_avatar'];
$html .= <<<EOF
" class="img-circle" />
										
EOF;
}
$html .= <<<EOF

									</a>
								</li>
								<li>
									<a href="
EOF;
$html .= ($tpl->check_allowed_method('gurl','simple_url')?$tplvars['gurl']->simple_url('userprofile','&amp;$URL_SUB=config'):'');
$html .= <<<EOF
" class="clearfix">
										<span style="float: left;">
											<i class="fa fa-cogs"></i>
											
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('profileconfig'):'');
$html .= <<<EOF

										</span>
									</a>
								</li>
								<li>
									<a href="
EOF;
$html .= ($tpl->check_allowed_method('gurl','simple_url')?$tplvars['gurl']->simple_url('userprofile','&amp;$URL_SUB=pmoverview'):'');
$html .= <<<EOF
" class="clearfix">
										<span style="float: left;">
											<i class="fa fa-envelope"></i>
											
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('pm_long'):'');
$html .= <<<EOF

										</span>
										
EOF;
if((isset($tplvars['unread_pm_count']) && $tplvars['unread_pm_count'] > 0)) {
$html .= <<<EOF

											<span style="float: right;" class="badge user-notification-badge">
EOF;
$html .= $tplvars['unread_pm_count'];
$html .= <<<EOF
</span>
										
EOF;
} else {
$html .= <<<EOF

											0
										
EOF;
}
$html .= <<<EOF

									</a>
								</li>
								
EOF;
if((isset($tplvars['enable_portal']) && $tplvars['enable_portal'])) {
$html .= <<<EOF

									<li>
										<a href="
EOF;
$html .= ($tpl->check_allowed_method('gurl','build_portal_url')?$tplvars['gurl']->build_portal_url():'');
$html .= <<<EOF
" title="
EOF;
$html .= $tplvars['unread_news_title'];
$html .= <<<EOF
" class="clearfix">
											<span style"=float: left;">
												<i class="fa fa-home"></i>
												
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('portal'):'');
$html .= <<<EOF

											</span>
											
EOF;
if((isset($tplvars['unread_news_count']) && $tplvars['unread_news_count'] > 0)) {
$html .= <<<EOF

												<span style="float: right;" class="badge user-notification-badge">
EOF;
$html .= $tplvars['unread_news_count'];
$html .= <<<EOF
</span>
											
EOF;
}
$html .= <<<EOF

										</a>
									</li>
								
EOF;
}
$html .= <<<EOF

								<li>
									<a title="
EOF;
$html .= $tplvars['unread_topics_title'];
$html .= <<<EOF
" href="
EOF;
$html .= ($tpl->check_allowed_method('gurl','simple_url')?$tplvars['gurl']->simple_url('unread'):'');
$html .= <<<EOF
" class="clearfix">
										<span style="float: left;">
											<i class="fa fa-bell"></i>
											
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('unread_threads'):'');
$html .= <<<EOF

										</span>
										
EOF;
if((isset($tplvars['unread_topic_count']) && $tplvars['unread_topic_count'] > 0)) {
$html .= <<<EOF

											<span style="float: right;" class="badge user-notification-badge">
EOF;
$html .= $tplvars['unread_topic_count'];
$html .= <<<EOF
</span>	
										
EOF;
}
$html .= <<<EOF

									</a>
								</li>
								<li>
									<a href="
EOF;
$html .= ($tpl->check_allowed_method('gurl','simple_url')?$tplvars['gurl']->simple_url(-1,'&amp;$URL_AT=$ACTION_LOGOUT','&amp;',true):'');
$html .= <<<EOF
" class="clearfix">
										<span style="float: left;">
											<i class="fa fa-sign-out"></i>
											
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('logout'):'');
$html .= <<<EOF

										</span>
									</a>
								</li>
							</ul>
						
EOF;
} else {
$html .= <<<EOF

							
EOF;
if((isset($tplvars['gisloggedin']) && $tplvars['gisloggedin'] == false)) {
$html .= <<<EOF

								<li>
									<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('login'):'');
$html .= <<<EOF
</a>
									<div class="dropdown-menu">
										<div class="col-sm-12 nav-login-form">
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
												<input type="hidden" name="login" value="1" />
												<div class="form-group">
													<input type="text" name="user_login" class="form-control" maxlength="100" />
												</div>

												<div class="form-group">
													<input type="password" name="pw_login" class="form-control" maxlength="100" />
												</div>

												<div class="form-group">
													<button type="submit" class="btn btn-block btn-default">Sign in</button>
												</div>
											</form>
										</div>
									</div>
								</li>
							
EOF;
}
$html .= <<<EOF

						
EOF;
}
$html .= <<<EOF

					</li>
				</ul>
			</div>
		</nav>
		
		<!--
		<div class="bs_welcome">
			<ul class="bs_welcome bs_none_list">
				<li class="bs_welcome_left">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('welcome'):'');
$html .= <<<EOF
, <b>
EOF;
$html .= $tplvars['username'];
$html .= <<<EOF
</b>!</li>
				<li class="bs_welcome_right">
EOF;
$html .= $tplvars['current_date'];
$html .= <<<EOF
, 
EOF;
$html .= $tplvars['current_time'];
$html .= <<<EOF
</li>
			</ul>
			<ul class="bs_welcome bs_none_list">
				<li class="bs_welcome_left">
					
EOF;
if((isset($tplvars['gisloggedin']) && $tplvars['gisloggedin'] == false)) {
$html .= <<<EOF

					<b>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('quicklogin'):'');
$html .= <<<EOF
:</b>
					<input style="padding: 1px;" type="text" name="user_login" size="12" value="Username"
							onblur="if(this.value == '') this.value = 'Username';"
							onfocus="if(this.value == 'Username') this.value = '';" />
					<input style="padding: 1px;" type="password" name="pw_login" size="12" value="password"
							onblur="if(this.value == '') this.value = 'password';"
							onfocus="if(this.value == 'password') this.value = '';" />
					<input style="padding: 1px;" type="submit" value="&nbsp;
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('login'):'');
$html .= <<<EOF
&nbsp;" />&nbsp;
					
EOF;
} else {
$html .= <<<EOF

					
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('lastlogin'):'');
$html .= <<<EOF
: 
EOF;
if((isset($tplvars['lastlogin']) && $tplvars['lastlogin'])) {
$html .= <<<EOF

EOF;
$html .= $tplvars['lastlogin'];
$html .= <<<EOF

EOF;
} else {
$html .= <<<EOF
<i>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('notavailable'):'');
$html .= <<<EOF
</i>
EOF;
}
$html .= <<<EOF

					
EOF;
}
$html .= <<<EOF

				</li>
				<li class="bs_welcome_right">
					
EOF;
if((isset($tplvars['enable_portal']) && $tplvars['enable_portal'])) {
$html .= <<<EOF

					<a href="
EOF;
$html .= ($tpl->check_allowed_method('gurl','build_portal_url')?$tplvars['gurl']->build_portal_url():'');
$html .= <<<EOF
" title="
EOF;
$html .= $tplvars['unread_news_title'];
$html .= <<<EOF
">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('portal'):'');
$html .= <<<EOF
</a>
					(
EOF;
if((isset($tplvars['unread_news_count']) && $tplvars['unread_news_count'] > 0)) {
$html .= <<<EOF
<span class="bs_unread">
EOF;
$html .= $tplvars['unread_news_count'];
$html .= <<<EOF
</span>
EOF;
} else {
$html .= <<<EOF
0
EOF;
}
$html .= <<<EOF
)
					&middot;
					
EOF;
}
$html .= <<<EOF

					
					
EOF;
if((isset($tplvars['gisloggedin']) && $tplvars['gisloggedin']) && (isset($tplvars['guserenablepm']) && $tplvars['guserenablepm'])) {
$html .= <<<EOF

					<a title="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('privatemsgs'):'');
$html .= <<<EOF
 (
EOF;
$html .= $tplvars['unread_pm_count'];
$html .= <<<EOF
 
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('newmsgs'):'');
$html .= <<<EOF
)"
					   href="
EOF;
$html .= ($tpl->check_allowed_method('gurl','simple_url')?$tplvars['gurl']->simple_url('userprofile','&amp;$URL_SUB=pmoverview'):'');
$html .= <<<EOF
">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('privatemsgs'):'');
$html .= <<<EOF
</a>
					(
EOF;
if((isset($tplvars['unread_pm_count']) && $tplvars['unread_pm_count'] > 0)) {
$html .= <<<EOF
<span class="bs_unread">
EOF;
$html .= $tplvars['unread_pm_count'];
$html .= <<<EOF
</span>
EOF;
} else {
$html .= <<<EOF
0
EOF;
}
$html .= <<<EOF
) &middot;
					
EOF;
}
$html .= <<<EOF

					
					<a title="
EOF;
$html .= $tplvars['unread_topics_title'];
$html .= <<<EOF
"
					   href="
EOF;
$html .= ($tpl->check_allowed_method('gurl','simple_url')?$tplvars['gurl']->simple_url('unread'):'');
$html .= <<<EOF
">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('unread_threads'):'');
$html .= <<<EOF
</a>
					(
EOF;
if((isset($tplvars['unread_topic_count']) && $tplvars['unread_topic_count'] > 0)) {
$html .= <<<EOF
<span class="bs_unread">
EOF;
$html .= $tplvars['unread_topic_count'];
$html .= <<<EOF
</span>
					<a href="
EOF;
$html .= $tplvars['first_unread_url'];
$html .= <<<EOF
"><img src="
EOF;
$html .= ($tpl->check_allowed_method('guser','get_theme_item_path')?$tplvars['guser']->get_theme_item_path('images/unread/first_unread_post.gif'):'');
$html .= <<<EOF
"
						alt="" /></a>
EOF;
} else {
$html .= <<<EOF
0
EOF;
}
$html .= <<<EOF
) &middot;
					
					
EOF;
if((isset($tplvars['gisloggedin']) && $tplvars['gisloggedin'] == false)) {
$html .= <<<EOF

					
					
EOF;
if((isset($tplvars['forgotpw_link']) && $tplvars['forgotpw_link'] != '')) {
$html .= <<<EOF

					<a href="
EOF;
$html .= $tplvars['forgotpw_link'];
$html .= <<<EOF
">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('forgetpw'):'');
$html .= <<<EOF
</a> &middot;
					
EOF;
}
$html .= <<<EOF

					
EOF;
if((isset($tplvars['resendact_link']) && $tplvars['resendact_link'] != '')) {
$html .= <<<EOF

					<a href="
EOF;
$html .= $tplvars['resendact_link'];
$html .= <<<EOF
">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('resend_activation_link'):'');
$html .= <<<EOF
</a>
					
EOF;
}
$html .= <<<EOF

		
					
EOF;
} else {
$html .= <<<EOF

					
					<a href="
EOF;
$html .= ($tpl->check_allowed_method('gurl','simple_url')?$tplvars['gurl']->simple_url(-1,'&amp;$URL_AT=$ACTION_LOGOUT','&amp;',true):'');
$html .= <<<EOF
">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('logout'):'');
$html .= <<<EOF
</a>
					
					
EOF;
}
$html .= <<<EOF

				</li>
			</ul>
			-->
		</div>
	</div>
</div>

EOF;
if((isset($tplvars['gisloggedin']) && $tplvars['gisloggedin'] == false)) {
$html .= <<<EOF

</form>

EOF;
}
$html .= <<<EOF


<div class="breadcrumb">
	<b>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('position'):'');
$html .= <<<EOF
:</b> 
EOF;
$html .= $tplvars['location'];
$html .= <<<EOF

</div>
EOF;
return $html;
}
?>