<?php
function FWS_TPL_themes_mliebgott_templates_stats_timeline_htm($tpl,$number) {
$locale = FWS_Props::get()->locale();
$tplvars = $tpl->get_variables('stats_timeline.htm',$number);

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

		<div class="col-lg-12 col-sm-12 col-xs-12">
			<ul class="nav nav-tabs" role="tablist" id="stats-tabs">
				<li role="presentation">
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
				<li role="presentation" class="active">
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
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('stats_timeline'):'');
$html .= <<<EOF
</div>
					<div class="panel-body">
						<table class="table table-bordered table-striped">
							<thead>
								<tr>
									<th class="cell-stat text-left">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('periode'):'');
$html .= <<<EOF
</th>
									<th class="cell-stat">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('posts'):'');
$html .= <<<EOF
</th>
									<th class="cell-stat">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('threads'):'');
$html .= <<<EOF
</th>
									<th class="cell-stat">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('user'):'');
$html .= <<<EOF
</th>
								</tr>
							</thead>
							<tbody>
								
EOF;
if((count($tplvars['timeline']) == 0)) {
$html .= <<<EOF

									<tr>
										<td class="bs_main" colspan="4" align="center">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('no_timeline_data'):'');
$html .= <<<EOF
</td>
									</tr>
								
EOF;
}
$html .= <<<EOF

								
EOF;
$timeline_c = -1;
foreach($tplvars['timeline'] as $tplvars['year'] => $tplvars['row']) {
$timeline_c++;

$html .= <<<EOF

									<tr>
										<td>
EOF;
$html .= $tplvars['year'];
$html .= <<<EOF
</td>
										<td class="text-center">
											
EOF;
$html .= $tplvars['row']['total']['posts'];
$html .= <<<EOF
,&nbsp;&nbsp;<img src="
EOF;
$html .= ($tpl->check_allowed_method('guser','get_theme_item_path')?$tplvars['guser']->get_theme_item_path('images/avg.gif'):'');
$html .= <<<EOF
" alt="avg" title="avg" /> 
EOF;
$html .= $tplvars['row']['avg']['posts'];
$html .= <<<EOF

										</td>
										<td class="text-center">
											
EOF;
$html .= $tplvars['row']['total']['topics'];
$html .= <<<EOF
,&nbsp;&nbsp;<img src="
EOF;
$html .= ($tpl->check_allowed_method('guser','get_theme_item_path')?$tplvars['guser']->get_theme_item_path('images/avg.gif'):'');
$html .= <<<EOF
" alt="avg" title="avg" /> 
EOF;
$html .= $tplvars['row']['avg']['topics'];
$html .= <<<EOF

										</td>
										<td class="text-center">
											
EOF;
$html .= $tplvars['row']['total']['user'];
$html .= <<<EOF
,&nbsp;&nbsp;<img src="
EOF;
$html .= ($tpl->check_allowed_method('guser','get_theme_item_path')?$tplvars['guser']->get_theme_item_path('images/avg.gif'):'');
$html .= <<<EOF
" alt="avg" title="avg" /> 
EOF;
$html .= $tplvars['row']['avg']['user'];
$html .= <<<EOF

										</td>
									</tr>
									
EOF;
$row_c = -1;
foreach($tplvars['row'] as $tplvars['month'] => $tplvars['count']) {
$row_c++;

$html .= <<<EOF

										
EOF;
if((isset($tplvars['month']) && $tplvars['month'] != 'total')) {
$html .= <<<EOF

											
EOF;
if((isset($tplvars['month']) && $tplvars['month'] != 'avg')) {
$html .= <<<EOF

											<tr>
												<td>
EOF;
$html .= $tplvars['month'];
$html .= <<<EOF
</td>
												<td>
													<div class="progress">
														<div class="progress-bar" role="progressbar" data-percent="
EOF;
$html .= $tplvars['count']['posts']['percent'];
$html .= <<<EOF
%" aria-valuenow="
EOF;
$html .= $tplvars['count']['posts']['percent'];
$html .= <<<EOF
" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
															
EOF;
$html .= $tplvars['count']['posts']['percent'];
$html .= <<<EOF
%
														</div>
													</div>
												</td>
												<td>
													<div class="progress">
														<div class="progress-bar" role="progressbar" data-percent="
EOF;
$html .= $tplvars['count']['topics']['count'];
$html .= <<<EOF
" aria-valuenow="
EOF;
$html .= $tplvars['count']['topics']['count'];
$html .= <<<EOF
" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
															
EOF;
$html .= $tplvars['count']['topics']['count'];
$html .= <<<EOF
%
														</div>
													</div>
												</td>
												<td>
													<div class="progress">
														<div class="progress-bar" role="progressbar" data-percent="
EOF;
$html .= $tplvars['count']['user']['count'];
$html .= <<<EOF
%" aria-valuenow="
EOF;
$html .= $tplvars['count']['user']['count'];
$html .= <<<EOF
" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
															
EOF;
$html .= $tplvars['count']['user']['count'];
$html .= <<<EOF
%
														</div>
													</div>
												</td>
											</tr>
											
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
}
$html .= <<<EOF

							</tbody>
						</table>
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