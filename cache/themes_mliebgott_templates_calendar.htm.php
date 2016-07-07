<?php
function FWS_TPL_themes_mliebgott_templates_calendar_htm($tpl,$number) {
$locale = FWS_Props::get()->locale();
$tplvars = $tpl->get_variables('calendar.htm',$number);

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

		<div class="hidden-xs">
			<div class="col-lg-12 col-sm-12 col-xs-12 no-padding-left no-padding-right" style="padding-bottom: 15px;">
				<div style="float: left;">
					<form method="get" action="
EOF;
$html .= $tplvars['target'];
$html .= <<<EOF
">
						
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

						<ul class="list-inline">
							<li>
								<select class="form-control" name="month" id="month">
									
EOF;
$month_combo_array_c = -1;
foreach($tplvars['month_combo_array'] as $tplvars['key'] => $tplvars['value']) {
$month_combo_array_c++;

$html .= <<<EOF

										<option value="
EOF;
$html .= $tplvars['key'];
$html .= <<<EOF
"
											
EOF;
if((isset($tplvars['key']) && isset($tplvars['month_combo_default']) && $tplvars['key'] == $tplvars['month_combo_default'])) {
$html .= <<<EOF
selected="selected"
EOF;
}
$html .= <<<EOF

										>
EOF;
$html .= $tplvars['value'];
$html .= <<<EOF
</option>
									
EOF;
}
$html .= <<<EOF

								</select>
							</li>
							<li>
								<select class="form-control" name="year" id="year">
									
EOF;
$year_combo_array_c = -1;
foreach($tplvars['year_combo_array'] as $tplvars['key'] => $tplvars['value']) {
$year_combo_array_c++;

$html .= <<<EOF

										<option value="
EOF;
$html .= $tplvars['key'];
$html .= <<<EOF
"
											
EOF;
if((isset($tplvars['key']) && isset($tplvars['year_combo_default']) && $tplvars['key'] == $tplvars['year_combo_default'])) {
$html .= <<<EOF
selected="selected"
EOF;
}
$html .= <<<EOF

										>
EOF;
$html .= $tplvars['value'];
$html .= <<<EOF
</option>
									
EOF;
}
$html .= <<<EOF

								</select>
							</li>
							<li>
								<input role="button" type="submit" class="btn btn-default" value="Go!">
							</li>
						</ul>
					</form>
				</div>
					
				<div style="float: right;">
					
EOF;
if((isset($tplvars['view_add_event']) && $tplvars['view_add_event'])) {
$html .= <<<EOF

						<a href="
EOF;
$html .= $tplvars['add_event_url'];
$html .= <<<EOF
">
							<button role="button" class="btn btn-default">
								<i class="fa fa-plus"></i> 
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('add_event'):'');
$html .= <<<EOF

							</button>
						</a>
					
EOF;
}
$html .= <<<EOF

				</div>
			</div>

			<div class="col-lg-3 hidden-sm hidden-xs no-padding-left">
				
EOF;
$months_c = -1;
foreach($tplvars['months'] as $tplvars['month']) {
$months_c++;

$html .= <<<EOF

					<div class="panel panel-default">
						<div class="panel-heading"><a href="
EOF;
$html .= $tplvars['month']['url'];
$html .= <<<EOF
"><i class="fa fa-chevron-right"></i> 
EOF;
$html .= $tplvars['month']['title'];
$html .= <<<EOF
</a></div>
						<div class="panel-body">
							<table class="table table-bordered calendar-preview no-margin-bottom">
								<thead>
									<tr>
										<th class="cell-mini-stat text-center"></th>
										<th class="cell-stat text-center">
EOF;
$html .= $tplvars['wd_short']['0'];
$html .= <<<EOF
</th>
										<th class="cell-stat text-center">
EOF;
$html .= $tplvars['wd_short']['1'];
$html .= <<<EOF
</th>
										<th class="cell-stat text-center">
EOF;
$html .= $tplvars['wd_short']['2'];
$html .= <<<EOF
</th>
										<th class="cell-stat text-center">
EOF;
$html .= $tplvars['wd_short']['3'];
$html .= <<<EOF
</th>
										<th class="cell-stat text-center">
EOF;
$html .= $tplvars['wd_short']['4'];
$html .= <<<EOF
</th>
										<th class="cell-stat text-center">
EOF;
$html .= $tplvars['wd_short']['5'];
$html .= <<<EOF
</th>
										<th class="cell-stat text-center">
EOF;
$html .= $tplvars['wd_short']['6'];
$html .= <<<EOF
</th>
									</tr>
								</thead>
								<tbody>
									
EOF;
$month_weeks_c = -1;
foreach($tplvars['month']['weeks'] as $tplvars['week']) {
$month_weeks_c++;

$html .= <<<EOF

									<tr>
										<td class="text-center">
											<a href="
EOF;
$html .= $tplvars['week']['url'];
$html .= <<<EOF
">&raquo;</a>
										</td>
										
EOF;
$week_days_c = -1;
foreach($tplvars['week']['days'] as $tplvars['day']) {
$week_days_c++;

$html .= <<<EOF

											<td class="cell-stat text-center">
EOF;
$html .= $tplvars['day']['days'];
$html .= <<<EOF
</td>
										
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
}
$html .= <<<EOF

			</div>
				
			<div class="col-lg-9 col-sm-12 no-padding-left no-padding-right">
				
EOF;
$html .= $tpl->parse_template($tplvars['submoduletpl'],false);
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