<?php
function FWS_TPL_themes_mliebgott_templates_stats_default_htm($tpl,$number) {
$locale = FWS_Props::get()->locale();
$tplvars = $tpl->get_variables('stats_default.htm',$number);

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

		<div class="col-lg-12 col-sm-12 col-xs-12 no-padding-left no-padding-right">
			<ul class="nav nav-tabs" role="tablist" id="stats-tabs">
				<li role="presentation" class="active">
					<a href="
EOF;
$html .= ($tpl->check_allowed_method('gurl','simple_url')?$tplvars['gurl']->simple_url(0):'');
$html .= <<<EOF
">
						
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('general'):'');
$html .= <<<EOF

					</a>
				</li>
				<li role="presentation">
					<a href="
EOF;
$html .= ($tpl->check_allowed_method('gurl','simple_url')?$tplvars['gurl']->simple_url(0,'&amp;$URL_SUB=timeline'):'');
$html .= <<<EOF
">
						
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('stats_timeline'):'');
$html .= <<<EOF

					</a>
				</li>
			</ul>
				
			<div class="tab-content">
				<div class="tab-pane fade in active" id="stats">
					<div class="panel panel-default">
						<div class="panel-heading">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('general_statistics'):'');
$html .= <<<EOF
</div>
						<div class="panel-body">
							<table class="table table-bordered table-striped">
								<tbody>
									<tr>
										<td class="cell-stat"><b>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('forums'):'');
$html .= <<<EOF
:</b></td>
										<td class="cell-stat-3x">
EOF;
$html .= $tplvars['general']['total_forums'];
$html .= <<<EOF
</td>
										<td class="cell-stat"><b>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('threads'):'');
$html .= <<<EOF
:</b></td>
										<td class="cell-stat-3x">
EOF;
$html .= $tplvars['general']['total_topics'];
$html .= <<<EOF
</td>
									</tr>
									<tr>
										<td><b>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('logins_total'):'');
$html .= <<<EOF
:</b></td>
										<td>
EOF;
$html .= $tplvars['general']['logins_total'];
$html .= <<<EOF
</td>
										<td><b>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('posts_total'):'');
$html .= <<<EOF
:</b></td>
										<td>
EOF;
$html .= $tplvars['general']['posts_total'];
$html .= <<<EOF
</td>
									</tr>
									<tr>
										<td><b>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('logins_today'):'');
$html .= <<<EOF
:</b></td>
										<td>
EOF;
$html .= $tplvars['general']['logins_today'];
$html .= <<<EOF
</td>
										<td><b>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('posts_today'):'');
$html .= <<<EOF
:</b></td>
										<td>
EOF;
$html .= $tplvars['general']['posts_today'];
$html .= <<<EOF
</td>
									</tr>
									<tr>
										<td><b>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('logins_yesterday'):'');
$html .= <<<EOF
:</b></td>
										<td>
EOF;
$html .= $tplvars['general']['logins_yesterday'];
$html .= <<<EOF
</td>
										<td><b>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('posts_yesterday'):'');
$html .= <<<EOF
:</b></td>
										<td>
EOF;
$html .= $tplvars['general']['posts_yesterday'];
$html .= <<<EOF
</td>
									</tr>
									<tr>
										<td><b>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('lastlogin'):'');
$html .= <<<EOF
:</b></td>
										<td>
EOF;
$html .= $tplvars['general']['logins_last'];
$html .= <<<EOF
</td>
										<td><b>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('lastpost'):'');
$html .= <<<EOF
:</b></td>
										<td>
EOF;
$html .= $tplvars['general']['posts_last'];
$html .= <<<EOF
</td>
									</tr>
									<tr>
										<td><b>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('registereduser'):'');
$html .= <<<EOF
:</b></td>
										<td>
EOF;
$html .= $tplvars['general']['total_users'];
$html .= <<<EOF
</td>
										<td><b>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('maxonline'):'');
$html .= <<<EOF
:</b></td>
										<td>
EOF;
$html .= $tplvars['general']['max_online'];
$html .= <<<EOF
</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>

					
EOF;
$stats_c = -1;
foreach($tplvars['stats'] as $tplvars['statsdata']) {
$stats_c++;

$html .= <<<EOF

						<div class="col-lg-6 col-sm-6 col-xs-12 no-padding-left no-padding-right">
							<div class="panel panel-default">
								<div class="panel-heading">
EOF;
$html .= $tplvars['statsdata']['title'];
$html .= <<<EOF
</div>
								<div class="panel-body">
									<table class="table table-bordered table-striped">
										<tbody>
											
EOF;
if((count($tplvars['statsdata']['data']) == 0)) {
$html .= <<<EOF

												<tr>
													<td colspan="4" class="text-center">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('error_num'):'');
$html .= <<<EOF
</td>
												</tr>
											
EOF;
}
$html .= <<<EOF

											
EOF;
$statsdata_data_c = -1;
foreach($tplvars['statsdata']['data'] as $tplvars['row']) {
$statsdata_data_c++;

$html .= <<<EOF

												<tr>
													<td class="cell-mini-stat text-center">
EOF;
$html .= $tplvars['row']['x_var'];
$html .= <<<EOF
</td>
													<td class="cell-stat">
EOF;
if((isset($tplvars['row']['is_current']) && $tplvars['row']['is_current'])) {
$html .= <<<EOF
<b>
EOF;
$html .= $tplvars['row']['user'];
$html .= <<<EOF
</b>
EOF;
} else {
$html .= <<<EOF

EOF;
$html .= $tplvars['row']['user'];
$html .= <<<EOF

EOF;
}
$html .= <<<EOF
</td>
													<td class="cell-stat-3x vertical-center">
														<div class="progress">
															<div class="progress-bar" role="progressbar" data-percent="
EOF;
$html .= $tplvars['row']['img_percent'];
$html .= <<<EOF
%" aria-valuenow="
EOF;
$html .= $tplvars['row']['img_percent'];
$html .= <<<EOF
" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
																
EOF;
$html .= $tplvars['row']['img_percent'];
$html .= <<<EOF
%
															</div>
														</div>
													</td>
													<td class="cell-stat-2x text-left">
EOF;
$html .= $tplvars['row']['text'];
$html .= <<<EOF
</td>
												</tr>
											
EOF;
}
$html .= <<<EOF

										</tbody>
									</table>
								</div>
							</div>
						</div>
					
EOF;
}
$html .= <<<EOF

					
					
EOF;
if((isset($tplvars['own_stats_image']) && $tplvars['own_stats_image'] != '')) {
$html .= <<<EOF

						<div class="col-lg-12 col-sm-12 col-xs-12 no-padding-left no-padding-right">
							<div class="panel panel-default">
								<div class="panel-heading">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('own_stats'):'');
$html .= <<<EOF
</div>
								<div class="panel-body text-center">
									<img src="
EOF;
$html .= $tplvars['own_stats_image'];
$html .= <<<EOF
" alt="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('own_stats'):'');
$html .= <<<EOF
" title="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('own_stats'):'');
$html .= <<<EOF
" />
								</div>
							</div>
						</div>
					
EOF;
}
$html .= <<<EOF

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