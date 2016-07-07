<?php
function FWS_TPL_themes_mliebgott_templates_posts_htm($tpl,$number) {
$locale = FWS_Props::get()->locale();
$tplvars = $tpl->get_variables('posts.htm',$number);

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

		<script type="text/javascript" src="
EOF;
$html .= ($tpl->check_allowed_method('gjs','get_file')?$tplvars['gjs']->get_file('src/quote.js'):'');
$html .= <<<EOF
"></script>
	
		
EOF;
if((isset($tplvars['show_event']) && $tplvars['show_event'])) {
$html .= <<<EOF

			
EOF;
$html .= $tpl->parse_template("inc_event.htm",false);
$html .= <<<EOF

		
EOF;
}
$html .= <<<EOF

			
EOF;
if((isset($tplvars['show_poll']) && $tplvars['show_poll'])) {
$html .= <<<EOF

				
EOF;
$html .= $tpl->parse_template("inc_poll.htm",false);
$html .= <<<EOF

		
EOF;
}
$html .= <<<EOF

		<br />
	
		<div class="col-lg-12 col-sm-12 col-xs-12 no-padding-left no-padding-right">
			<div class="col-lg-12 col-sm-12 col-xs-12 nopadding">
				<div class="panel panel-default">
					<div class="panel-heading">
EOF;
$html .= $tplvars['thread_type_ins'];
$html .= <<<EOF
: 
EOF;
$html .= $tplvars['threadname_ins'];
$html .= <<<EOF
</div>
					<div class="panel-body">
						
EOF;
if((count($tplvars['posts']) > 0)) {
$html .= <<<EOF

							
EOF;
$posts_c = -1;
foreach($tplvars['posts'] as $tplvars['post']) {
$posts_c++;

$html .= <<<EOF
 
								<div class="row top20">
									<div class="col-lg-2 col-sm-2 hidden-xs text-center">
										
EOF;
if((isset($tplvars['post']['show_avatar']) && $tplvars['post']['show_avatar'])) {
$html .= <<<EOF

											<a href="
EOF;
$html .= $tplvars['post']['user_link'];
$html .= <<<EOF
">
												<img alt="
EOF;
$html .= $tplvars['post']['user_name_plain'];
$html .= <<<EOF
" title="
EOF;
$html .= $tplvars['post']['user_name_plain'];
$html .= <<<EOF
" src="
EOF;
$html .= $tplvars['post']['avatar'];
$html .= <<<EOF
" class="img-circle 
EOF;
if((isset($tplvars['post']['is_user_online']) && $tplvars['post']['is_user_online'])) {
$html .= <<<EOF
user-online
EOF;
} else {
$html .= <<<EOF
user-offline
EOF;
}
$html .= <<<EOF
" />
											</a>
										
EOF;
}
$html .= <<<EOF

										<br>
										
EOF;
$html .= $tplvars['post']['user_name_plain'];
$html .= <<<EOF

										<br>
										<small>
											
EOF;
$html .= $tplvars['post']['rank_images'];
$html .= <<<EOF

EOF;
$html .= $tplvars['post']['user_status'];
$html .= <<<EOF
<br>
											
EOF;
$html .= $tplvars['post']['stats_ins_bottom'];
$html .= <<<EOF

										</small>
									</div>
										
									<div class="col-lg-10 col-sm-10 col-xs-12 box-bordered">
										<div class="panel panel-default">
											<div class="panel-heading clearfix">
												<div class="col-lg-6 col-sm-6 col-xs-6">
													
EOF;
$html .= $tplvars['post']['post_date'];
$html .= <<<EOF

												</div>
												<div class="col-lg-6 col-sm-6 col-xs-6 text-right">
													
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('post'):'');
$html .= <<<EOF
 <a href="
EOF;
$html .= $tplvars['post']['post_url'];
$html .= <<<EOF
">#
EOF;
$html .= $tplvars['post']['number'];
$html .= <<<EOF
</a>
												</div>
											</div>
											<div class="panel-body">
												
EOF;
$html .= $tplvars['post']['text_ins'];
$html .= <<<EOF

											</div>
											<div class="panel-footer clearfix">
												<div class="col-lg-6 col-sm-6">&nbsp;</div>
												<div class="col-xs-6 hidden-lg hidden-sm text-left">
													
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang("From"):'');
$html .= <<<EOF
: 
EOF;
$html .= $tplvars['post']['user_name'];
$html .= <<<EOF

												</div>
												<div class="col-lg-6 col-sm-6 col-xs-6 text-right post-links">
													
EOF;
$post_bottom_array_c = -1;
foreach($tplvars['post']['bottom_array'] as $tplvars['key'] => $tplvars['bottom']) {
$post_bottom_array_c++;

$html .= <<<EOF

														
EOF;
if((isset($tplvars['bottom']['url']) && $tplvars['bottom']['url'])) {
$html .= <<<EOF

															<a href="
EOF;
$html .= $tplvars['bottom']['url'];
$html .= <<<EOF
" title="
EOF;
$html .= $tplvars['bottom']['locale'];
$html .= <<<EOF
"
																
EOF;
if((isset($tplvars['key']) && $tplvars['key'] == "quote_this_post")) {
$html .= <<<EOF

																	id="
EOF;
$html .= $tplvars['bottom']['id'];
$html .= <<<EOF
"
																	onclick="
EOF;
$html .= $tplvars['bottom']['onclick'];
$html .= <<<EOF
"
																
EOF;
}
$html .= <<<EOF

															>
																
EOF;
if((isset($tplvars['key']) && $tplvars['key'] == "delete_topic") || (isset($tplvars['key']) && $tplvars['key'] == "delete_post")) {
$html .= <<<EOF

																	<i class="fa fa-trash"></i>
																
EOF;
}
$html .= <<<EOF

																
																
EOF;
if((isset($tplvars['key']) && $tplvars['key'] == "edit_post")) {
$html .= <<<EOF

																	<i class="fa fa-edit"></i>
																
EOF;
}
$html .= <<<EOF

																
																
EOF;
if((isset($tplvars['key']) && $tplvars['key'] == "quote_this_post")) {
$html .= <<<EOF

																	<i class="fa fa-quote-right"></i>
																
EOF;
}
$html .= <<<EOF

															</a>
														
EOF;
}
$html .= <<<EOF

													
EOF;
}
$html .= <<<EOF

												</div>
											</div>
										</div>
									</div>
								</div>
							
EOF;
}
$html .= <<<EOF

						
EOF;
}
$html .= <<<EOF

						<div class="col-lg-12 col-ms-12 col-xs-12 text-center">
						   
EOF;
$html .= $tpl->parse_template("inc_pagination.htm",false);
$html .= <<<EOF

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
		
		<!-- 
		
EOF;
if((isset($tplvars['view_useronline_list']) && $tplvars['view_useronline_list'])) {
$html .= <<<EOF

			<div class="bs_padtop_big">
				
EOF;
$html .= $tpl->parse_template("inc_online_user.htm",false);
$html .= <<<EOF

			</div>
		
EOF;
}
$html .= <<<EOF

		-->
		
		
EOF;
if((isset($tplvars['show_bottom_bar']) && $tplvars['show_bottom_bar'])) {
$html .= <<<EOF

			
EOF;
$html .= $tpl->parse_template("inc_topic_action_js.htm",false);
$html .= <<<EOF

			<script type="text/javascript">
				<!--
				function performModAction()
				{
					document.location.href = getModActionURL().replace('__ID__','
EOF;
$html .= $tplvars['tid'];
$html .= <<<EOF
');
				}
				//-->
			</script>
			<div class="col-lg-12 col-sm-12 col-xs-12 no-padding-left no-padding-right">
				<div class="panel panel-default">
					<div class="panel-heading">
						
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('options'):'');
$html .= <<<EOF

					</div>
					<div class="panel-body clearfix">
						<div class="col-lg-6 col-sm-6 col-xs-12">
							
EOF;
if((isset($tplvars['display_topic_actions']) && $tplvars['display_topic_actions'])) {
$html .= <<<EOF

								<b>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('topic_actions'):'');
$html .= <<<EOF
:</b><br>
								
EOF;
$html .= $tplvars['topic_action_combo'];
$html .= <<<EOF

							
EOF;
} else {
$html .= <<<EOF

								&nbsp;
							
EOF;
}
$html .= <<<EOF

						</div>
						<div class="col-lg-6 col-sm-6 col-xs-12">
							<b>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('options'):'');
$html .= <<<EOF
</b>
							<br>
							<ul class="bottom-options">
								
EOF;
if((isset($tplvars['display_reply']) && $tplvars['display_reply'])) {
$html .= <<<EOF

									<li>
										<div class="button-with-addon">
											<i class="fa fa-reply"></i>
											<a title="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('answer_desc'):'');
$html .= <<<EOF
" href="
EOF;
$html .= $tplvars['reply_url'];
$html .= <<<EOF
" onclick="return quote('
EOF;
$html .= $tplvars['quoteLink'];
$html .= <<<EOF
');">
												<button class="btn btn-default btn-sm">
													
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('answer'):'');
$html .= <<<EOF

												</button>
											</a>
										</div>
									</li>
									
EOF;
if((isset($tplvars['gisloggedin']) && $tplvars['gisloggedin'])) {
$html .= <<<EOF

										<li>
											<div class="button-with-addon">
												<i class="fa fa-reply-all" class="input-group-addon"></i>
												<a href="javascript:toggleQuickReply();" title="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('quick_reply_desc'):'');
$html .= <<<EOF
">
													<button class="btn btn-default btn-sm">
														
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('quick_reply'):'');
$html .= <<<EOF

													</button>
												</a>
											</div>
										</li>
									
EOF;
}
$html .= <<<EOF

								
EOF;
}
$html .= <<<EOF

								
								
EOF;
if((isset($tplvars['display_topic_actions']) && $tplvars['display_topic_actions'])) {
$html .= <<<EOF

									<li>
										<div class="button-with-addon">
											<i class="fa fa-reorder" class="input-group-addon"></i>
											<a title="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('print_desc'):'');
$html .= <<<EOF
" href="{gurl.simple_url('manage_posts','&amp;$URL_FID='~fid~'&amp;$URL_TID='~tid)">
												<button class="btn btn-default btn-sm">
													
EOF;
$html .= $tplvars['manage_posts_title'];
$html .= <<<EOF

												</button>
											</a>
										</div>
									</li>
								
EOF;
}
$html .= <<<EOF

								
								
EOF;
if((isset($tplvars['enable_email_notification']) && $tplvars['enable_email_notification'])) {
$html .= <<<EOF

									<li>
										<div class="button-with-addon">
											<i class="fa fa-newspaper-o" class="input-group-addon"></i>
											<a title="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('subscribe_desc'):'');
$html .= <<<EOF
" href="
EOF;
$html .= ($tpl->check_allowed_method('gurl','simple_url')?$tplvars['gurl']->simple_url(0,'&amp;$URL_AT=$ACTION_SUBSCRIBE_TOPIC&amp;$URL_FID='.$tplvars['fid'].'&amp;$URL_TID='.$tplvars['tid'],'&amp;',true):'');
$html .= <<<EOF
">
												<button class="btn btn-default btn-sm">
													
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('subscribe_to_topic'):'');
$html .= <<<EOF

												</button>
											</a>
										</div>
									</li>
								
EOF;
}
$html .= <<<EOF

								<li>
									<div class="button-with-addon">
										<i class="fa fa-print" class="input-group-addon"></i>
										<a title="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('print_desc'):'');
$html .= <<<EOF
" href="
EOF;
$html .= $tplvars['print_url'];
$html .= <<<EOF
" onclick="FWS_openDefaultPopup('
EOF;
$html .= $tplvars['print_url'];
$html .= <<<EOF
','
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('print_topic'):'');
$html .= <<<EOF
',950,700); return false;">
											<button class="btn btn-default btn-sm">
												
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('print_topic'):'');
$html .= <<<EOF

											</button>
										</a>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		
EOF;
}
$html .= <<<EOF

		
		<!-- 
		
EOF;
if((isset($tplvars['similar_topics']) && $tplvars['similar_topics'])) {
$html .= <<<EOF

			<div class="bs_padtop_big">
				
EOF;
$html .= $tpl->parse_template("inc_topics.htm",false);
$html .= <<<EOF

			</div>
		
EOF;
}
$html .= <<<EOF

		-->
	
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