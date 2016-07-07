<?php
function FWS_TPL_themes_mliebgott_templates_inc_forums_htm($tpl,$number) {
$locale = FWS_Props::get()->locale();
$tplvars = $tpl->get_variables('inc_forums.htm',$number);

$html = "";
$html .=<<<EOF

EOF;
if((isset($tplvars['forums']) && $tplvars['forums'])) {
$html .= <<<EOF

	<div class="row">
		<div class="col-lg-8 col-sm-8 col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading">
EOF;
$html .= $tplvars['title'];
$html .= <<<EOF
</div>
				<div class="panel-body">
					<table class="table forum">
						<thead>
							<th>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('name'):'');
$html .= <<<EOF
</th>
							<th class="cell-stat text-center hidden-xs hidden-sm">
								
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('threads'):'');
$html .= <<<EOF

							</th>
							<th class="cell-stat text-center hidden-xs hidden-sm">
								
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('posts'):'');
$html .= <<<EOF

							</th>
							<th class="cell-stat-2x text-center hidden-xs hidden-sm">
								
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('lastpost'):'');
$html .= <<<EOF

							</th>
						</thead>
					</table>
						<tbody>
							
EOF;
if((isset($tplvars['num']) && $tplvars['num'] == 0)) {
$html .= <<<EOF

								<tr>
									<td colspan="5" class="center">
										
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('no_news_found'):'');
$html .= <<<EOF

									</td>
								</tr>
							
EOF;
}
$html .= <<<EOF

							
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

									<table class="table forum nomargin">
										<tr class="forums-name">
											<td class="text-left">
												
EOF;
if((isset($tplvars['forum']['clap_forum']) && $tplvars['forum']['clap_forum'])) {
$html .= <<<EOF

													<i class="fa fa-plus-square-o float-left collapse-forum" data-id="
EOF;
$html .= $tplvars['forum']['forum_id'];
$html .= <<<EOF
"></i>
													<h4>
												
EOF;
} else {
$html .= <<<EOF

													<h4 class="no-margin-left">
												
EOF;
}
$html .= <<<EOF

													<a href="
EOF;
$html .= $tplvars['forum']['forum_url'];
$html .= <<<EOF
">
														
EOF;
$html .= $tplvars['forum']['forum_name_ins'];
$html .= <<<EOF

													</a>
												</h4>
											</td>
											<td class="vertical-center">
EOF;
$html .= $tplvars['forum']['thread_count'];
$html .= <<<EOF
</td>
											<td class="text-center hidden-xs hidden-sm vertical-center">
EOF;
$html .= $tplvars['forum']['post_count'];
$html .= <<<EOF
</td>
											<td class="text-center hidden-xs hiddem-sm vertical-center">
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
											</td>
										</tr>
									</table>
									
EOF;
if((isset($tplvars['forum']['clap_forum']) && $tplvars['forum']['clap_forum'])) {
$html .= <<<EOF

										<div id="subforum_
EOF;
$html .= $tplvars['forum']['forum_id'];
$html .= <<<EOF
" class="show-tr col-lg-12 col-sm-12 col-xs-12">
									
EOF;
}
$html .= <<<EOF

								
EOF;
} else {
$html .= <<<EOF

									<table class="table forum nomargin">
										<tr>
											
EOF;
$forum_path_images_c = -1;
foreach($tplvars['forum']['path_images'] as $tplvars['pimage']) {
$forum_path_images_c++;

$html .= <<<EOF

												<td class="cell-mini-stat">&nbsp;</td>
											
EOF;
}
$html .= <<<EOF

											<td>
												<a href="
EOF;
$html .= $tplvars['forum']['forum_url'];
$html .= <<<EOF
">
EOF;
$html .= $tplvars['forum']['forum_name_ins'];
$html .= <<<EOF
</a>
												<small class="text-muted">
													
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

												</small>
											</td>
											<td class="cell-stat text-center hidden-xs hidden-sm vertical-center">
EOF;
$html .= $tplvars['forum']['thread_count'];
$html .= <<<EOF
</td>
											<td class="cell-stat text-center hidden-xs hidden-sm vertical-center">
EOF;
$html .= $tplvars['forum']['post_count'];
$html .= <<<EOF
</td>
											<td class="cell-stat-2x text-left hidden-xs hidden-sm vertical-center">
											
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

						</tbody>
					</table>
				</div>
			</div>
		</div>
		
		<div class="col-lg-4 col-sm-4 hidden-xs">
			
EOF;
if((isset($tplvars['gisadmin']) && $tplvars['gisadmin'])) {
$html .= <<<EOF

				<div class="panel panel-default">
					<div class="panel-heading">Admin Options</div>
					<div class="panel-body">
					
					</div>
				</div>
			
EOF;
}
$html .= <<<EOF

		</div>
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