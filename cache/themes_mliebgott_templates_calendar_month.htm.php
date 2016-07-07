<?php
function FWS_TPL_themes_mliebgott_templates_calendar_month_htm($tpl,$number) {
$locale = FWS_Props::get()->locale();
$tplvars = $tpl->get_variables('calendar_month.htm',$number);

$html = "";
$html .=<<<EOF
<div class="panel panel-default">
	<div class="panel-heading">
		<a href="
EOF;
$html .= $tplvars['back'];
$html .= <<<EOF
">
			<i class="fa fa-chevron-left"></i>
		</a> 
		
EOF;
$html .= $tplvars['title'];
$html .= <<<EOF

		<a href="
EOF;
$html .= $tplvars['forward'];
$html .= <<<EOF
">
			<i class="fa fa-chevron-right"></i>
		</a>
	</div>
	<div class="panel-body">
		<table class="table table-bordered calendar no-margin-bottom">
			<thead>
				<tr>
					<th class="cell-mini-stat text-left"></th>
					<th class="cell-stat-2x text-center">
EOF;
$html .= $tplvars['wd_detail']['0'];
$html .= <<<EOF
</th>
					<th class="cell-stat-2x text-center">
EOF;
$html .= $tplvars['wd_detail']['1'];
$html .= <<<EOF
</th>
					<th class="cell-stat-2x text-center">
EOF;
$html .= $tplvars['wd_detail']['2'];
$html .= <<<EOF
</th>
					<th class="cell-stat-2x text-center">
EOF;
$html .= $tplvars['wd_detail']['3'];
$html .= <<<EOF
</th>
					<th class="cell-stat-2x text-center">
EOF;
$html .= $tplvars['wd_detail']['4'];
$html .= <<<EOF
</th>
					<th class="cell-stat-2x text-center">
EOF;
$html .= $tplvars['wd_detail']['5'];
$html .= <<<EOF
</th>
					<th class="cell-stat-2x text-center">
EOF;
$html .= $tplvars['wd_detail']['6'];
$html .= <<<EOF
</th>
				</tr>
			</thead>
			<tbody>
				
EOF;
$weeks_c = -1;
foreach($tplvars['weeks'] as $tplvars['week']) {
$weeks_c++;

$html .= <<<EOF

					<tr>
						<td class="vertical-center calendar-week-arrow" onmouseover="this.style.cursor='pointer';" onmouseout="this.style.cursor='default';" onclick="document.location.href='
EOF;
$html .= $tplvars['week']['url'];
$html .= <<<EOF
'">
							<a href="
EOF;
$html .= $tplvars['week']['url'];
$html .= <<<EOF
"><i class="fa fa-chevron-right"></i></a>
						</td>
						
EOF;
$week_days_c = -1;
foreach($tplvars['week']['days'] as $tplvars['day']) {
$week_days_c++;

$html .= <<<EOF

							
EOF;
if((isset($tplvars['day']['isempty']) && $tplvars['day']['isempty'])) {
$html .= <<<EOF

								<td>&nbsp;</td>
							
EOF;
} else {
$html .= <<<EOF

								<td class="calendar-day">
									<table class="table">
										<tbody>
											<tr>
												<td class="calendar-day-desc">
													
EOF;
if((isset($tplvars['view_add_event']) && $tplvars['view_add_event'])) {
$html .= <<<EOF

														<div style="float: right;">
															<a href="
EOF;
$html .= ($tpl->check_allowed_method('gurl','simple_url')?$tplvars['gurl']->simple_url(0,'&amp;$URL_SUB=editevent&amp;$URL_DAY='.$tplvars['day']['timestamp']):'');
$html .= <<<EOF
">
																<i class="fa fa-plus" alt="+" title="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('add_event'):'');
$html .= <<<EOF
"></i>
															</a>
														</div>
													
EOF;
}
$html .= <<<EOF

													<span class="text-muted">
EOF;
$html .= $tplvars['day']['day'];
$html .= <<<EOF
</span>
												</td>
											</tr>
											<tr>
												<td>
													<div>
														
EOF;
if((count($tplvars['day']['event']['bd']) == 0) && (count($tplvars['day']['event']['ev']) == 0)) {
$html .= <<<EOF

															&nbsp;
														
EOF;
} else {
$html .= <<<EOF

															
EOF;
$day_event_bd_c = -1;
foreach($tplvars['day']['event']['bd'] as $tplvars['bd']) {
$day_event_bd_c++;

$html .= <<<EOF

																<div>
																	<i class="fa fa-birthday-cake"></i>
																	
EOF;
$html .= $tplvars['bd']['username'];
$html .= <<<EOF
 (
EOF;
$html .= $tplvars['bd']['age'];
$html .= <<<EOF
)
																</div>
															
EOF;
}
$html .= <<<EOF

															
															
EOF;
$day_event_ev_c = -1;
foreach($tplvars['day']['event']['ev'] as $tplvars['ev']) {
$day_event_ev_c++;

$html .= <<<EOF

																<div>
																	<i class="fa fa-clock-o"></i>
																	<a title="
EOF;
$html .= $tplvars['ev']['name_complete'];
$html .= <<<EOF
" href="
EOF;
$html .= $tplvars['ev']['url'];
$html .= <<<EOF
">
EOF;
$html .= $tplvars['ev']['name'];
$html .= <<<EOF
</a>
																</div>
															
EOF;
}
$html .= <<<EOF

															
															
EOF;
if((isset($tplvars['day']['event']['toomany']) && $tplvars['day']['event']['toomany'] != '')) {
$html .= <<<EOF

																<div><a href="
EOF;
$html .= $tplvars['d']['event']['toomany'];
$html .= <<<EOF
">...</a></div>
															
EOF;
}
$html .= <<<EOF

														
EOF;
}
$html .= <<<EOF

													</div>
												</td>
											</tr>
										</tbody>
									</table>
								</td>
							
EOF;
}
$html .= <<<EOF

						
EOF;
}
$html .= <<<EOF

					</tr>
				
EOF;
}
$html .= <<<EOF

			</tbody>
		</table>
	</div>
</div>

EOF;
return $html;
}
?>