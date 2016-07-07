<?php
function FWS_TPL_themes_mliebgott_templates_userdetails_htm($tpl,$number) {
$locale = FWS_Props::get()->locale();
$tplvars = $tpl->get_variables('userdetails.htm',$number);

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
			$(document).ready(function(){
				$("#userdetail-tabs li:eq(0) a").tab('show');
				
			})
		</script>
		<div class="col-lg-12 col-sm-12 col-xs-12 heading">
			<h3>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('userdetails'):'');
$html .= <<<EOF
</h3>
		</div>
		<div class="col-lg-12 col-sm-12 col-xs-12">
			<div class="col-lg-2 col-sm-2 col-xs-12 text-center">
				
EOF;
if((isset($tplvars['enable_avatars']) && $tplvars['enable_avatars'])) {
$html .= <<<EOF

					<img src="
EOF;
$html .= $tplvars['avatar_url'];
$html .= <<<EOF
" class="img-circle">
				
EOF;
}
$html .= <<<EOF

				<div>
					<div class="btn-group top10" role="group">
						
EOF;
$html .= $tplvars['options'];
$html .= <<<EOF

					</div>
					
					<div class="top10">
						
EOF;
if((isset($tplvars['enable_diagram']) && $tplvars['enable_diagram'])) {
$html .= <<<EOF

							
EOF;
$html .= $tplvars['experience_diagram'];
$html .= <<<EOF

						
EOF;
}
$html .= <<<EOF

					</div>
				</div>
			</div>
			<div class="col-lg-10 col-sm-10 col-xs-12">
				<ul class="nav nav-tabs" role="tablist" id="userdetail-tabs">
					<li role="presentation" class="active">
						<a href="#userdetails" data-toggle="tab">
							
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('userdetails'):'');
$html .= <<<EOF

						</a>
					</li>
					<li role="presentation">
						<a href="#statistics" data-toggle="tab">
							
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('statistics'):'');
$html .= <<<EOF

						</a>
					</li>
					<li role="presentation">
						<a href="#lastactivities" data-toggle="tab">
							
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('lastactivity'):'');
$html .= <<<EOF

						</a>
					</li>
				</ul>
				
				<div class="tab-content">
					<div class="tab-pane fade in active" id="userdetails">
						<div class="col-lg-6 col-sm-6 col-xs-12 top10">
							<table class="table table-striped table-bordered">
								<tr>
									<td class="col-md-3"><b>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('name'):'');
$html .= <<<EOF
</b></td>
									<td>
EOF;
$html .= $tplvars['user_name'];
$html .= <<<EOF
</td>
								</tr>
								<tr>
									<td class="col-md-3"><b>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('email'):'');
$html .= <<<EOF
</b></td>
									<td>
EOF;
$html .= $tplvars['user_email'];
$html .= <<<EOF
</td>
								</tr>
								
EOF;
$add_fields_c = -1;
foreach($tplvars['add_fields'] as $tplvars['field']) {
$add_fields_c++;

$html .= <<<EOF

									<tr>
										<td class="col-md-3"><b>
EOF;
$html .= $tplvars['field']['field_name'];
$html .= <<<EOF
</b></td>
										<td>
EOF;
$html .= $tplvars['field']['field_value'];
$html .= <<<EOF
</td>
								</tr>
								
EOF;
}
$html .= <<<EOF

							</table>
						</div>
					</div>
					
					<div class="tab-pane fade" id="statistics">
						<div class="col-lg-6 col-sm-6 col-xs-12 top10">
							<table class="table table-striped table-bordered">
								
EOF;
if((isset($tplvars['enable_user_ranks']) && $tplvars['enable_user_ranks'])) {
$html .= <<<EOF

									<tr>
										<td class="col-md-3"><b>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('rank'):'');
$html .= <<<EOF
:</b></td>
										<td>
EOF;
$html .= $tplvars['user_rank'];
$html .= <<<EOF
</td>
									</tr>
								
EOF;
}
$html .= <<<EOF

								<tr>
									<td class="col-md-3"><b>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('logins'):'');
$html .= <<<EOF
:</b></td>
									<td>
EOF;
$html .= $tplvars['user_data']['logins'];
$html .= <<<EOF
</td>
								</tr>
								<tr>
									<td class="col-md-3"><b>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('lastlogin'):'');
$html .= <<<EOF
:</b></td>
									<td>
EOF;
$html .= $tplvars['lastlogin'];
$html .= <<<EOF
</td>
								</tr>
								
EOF;
if((isset($tplvars['enable_post_count']) && $tplvars['enable_post_count'])) {
$html .= <<<EOF

									<tr>
										<td class="col-md-3"><b>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('posts'):'');
$html .= <<<EOF
:</b></td>
										<td>
EOF;
$html .= $tplvars['user_data']['posts'];
$html .= <<<EOF
</td>
									</tr>
									<tr>
										<td class="col-md-3"><b>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('points'):'');
$html .= <<<EOF
:</b></td>
										<td>
EOF;
$html .= $tplvars['user_data']['exppoints'];
$html .= <<<EOF
</td>
									</tr>
									<tr>
										<td class="col-md-3"><b>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('postsperday'):'');
$html .= <<<EOF
:</b></td>
										<td>
EOF;
$html .= $tplvars['posts_per_day'];
$html .= <<<EOF
</td>
									</tr>
								
EOF;
}
$html .= <<<EOF

								<tr>
									<td class="col-md-2"><b>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('registeredsince'):'');
$html .= <<<EOF
:</b></td>
									<td>
EOF;
$html .= $tplvars['register_date'];
$html .= <<<EOF
</td>
								</tr>
								<tr>
									<td class="col-md-2"><b>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('user_groups'):'');
$html .= <<<EOF
:</b></td>
									<td>
EOF;
$html .= $tplvars['user_groups'];
$html .= <<<EOF
</td>
								</tr>
							</table>
						</div>
					</div>
					
					<div class="tab-pane fade" id="lastactivities">
						<div class="col-lg-6 col-sm-6 col-xs-12 top10">
							<div class="list-group">
								
EOF;
if((isset($tplvars['last_posts']) && $tplvars['last_posts'] !== false)) {
$html .= <<<EOF

									
EOF;
if((count($tplvars['last_posts']) == 0)) {
$html .= <<<EOF

										<div class="list-group-item">
											<i>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('none'):'');
$html .= <<<EOF
</i>
										</div>
									
EOF;
} else {
$html .= <<<EOF

										
EOF;
$last_posts_c = -1;
foreach($tplvars['last_posts'] as $tplvars['lp']) {
$last_posts_c++;

$html .= <<<EOF

											<div class="list-group-item">
												<span class="col-md-4 text-muted">
EOF;
$html .= $tplvars['lp']['date'];
$html .= <<<EOF
</span>
												<span>
													
EOF;
$html .= $tplvars['lp']['forum_path'];
$html .= <<<EOF
 &raquo; <a href="
EOF;
$html .= $tplvars['lp']['topic_url'];
$html .= <<<EOF
">
EOF;
$html .= $tplvars['lp']['topic_name'];
$html .= <<<EOF
</a>
												</span>
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

							</div>
								
							
EOF;
if((isset($tplvars['enable_search']) && $tplvars['enable_search'] == 1)) {
$html .= <<<EOF

								<div class="bs_padtop">
									<a href="
EOF;
$html .= $tplvars['search_for_user_posts_url'];
$html .= <<<EOF
">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('show_all_posts_of_user'):'');
$html .= <<<EOF
</a><br />
									<a href="
EOF;
$html .= $tplvars['search_for_user_topics_url'];
$html .= <<<EOF
">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('show_all_topics_of_user'):'');
$html .= <<<EOF
</a>
								</div>
							
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



EOF;
$html .= $tpl->parse_template("inc_footer.htm",false);
$html .= <<<EOF

EOF;
return $html;
}
?>