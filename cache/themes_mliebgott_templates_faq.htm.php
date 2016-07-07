<?php
function FWS_TPL_themes_mliebgott_templates_faq_htm($tpl,$number) {
$locale = FWS_Props::get()->locale();
$tplvars = $tpl->get_variables('faq.htm',$number);

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

		<div class="panel panel-default">
			<div class="panel-heading">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('faq_desc'):'');
$html .= <<<EOF
</div>
			<div class="panel-body">
				<ul class="list-group">
					
EOF;
$faq_titles_c = -1;
foreach($tplvars['faq_titles'] as $tplvars['fnumber'] => $tplvars['ftitle']) {
$faq_titles_c++;

$html .= <<<EOF

						<li class="list-group-item">
							<a href="#f_
EOF;
$html .= $tplvars['fnumber'];
$html .= <<<EOF
">
EOF;
$html .= $tplvars['ftitle']['title'];
$html .= <<<EOF
</a>
						</li>
					
EOF;
}
$html .= <<<EOF

				</ul>
			</div>
		</div>

		
EOF;
$faqs_c = -1;
foreach($tplvars['faqs'] as $tplvars['fnumber'] => $tplvars['faq']) {
$faqs_c++;

$html .= <<<EOF

			<div class="col-lg-12 col-sm-12 col-xs-12 no-padding-left no-padding-right">
				<div class="panel panel-default" id="f_
EOF;
$html .= $tplvars['fnumber'];
$html .= <<<EOF
">
					<div class="panel-heading">
EOF;
$html .= $tplvars['faq']['title'];
$html .= <<<EOF
</div>
					<div class="panel-body">
						<div class="col-lg-12 col-sm-12 col-xs-12">
							
EOF;
$html .= $tplvars['faq']['text'];
$html .= <<<EOF

						</div>
						
EOF;
if((isset($tplvars['faq']['show_ranks']) && $tplvars['faq']['show_ranks'])) {
$html .= <<<EOF

							<div class="row col-lg-6 col-sm-6 col-xs-12">
								<table class="table">
									<tbody>
										<tr>
											<td colspan="3" class="text-center"><b>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('userranks'):'');
$html .= <<<EOF
</b></td>
										</tr>
										
EOF;
$faq_ranks_c = -1;
foreach($tplvars['faq']['ranks'] as $tplvars['rank']) {
$faq_ranks_c++;

$html .= <<<EOF

											<tr>
												<td class="cell-stat"><b>
EOF;
$html .= $tplvars['rank']['title'];
$html .= <<<EOF
</b></td>
												<td class="cell-stat">
EOF;
$html .= $tplvars['rank']['points'];
$html .= <<<EOF
</td>
												<td class="cell-stat-2x text-right">
EOF;
$html .= $tplvars['rank']['image'];
$html .= <<<EOF
</td>
											</tr>
										
EOF;
}
$html .= <<<EOF

									</tbody>
								</table>
							</div>
						
EOF;
}
$html .= <<<EOF

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
}
$html .= <<<EOF



EOF;
$html .= $tpl->parse_template("inc_footer.htm",false);
$html .= <<<EOF

EOF;
return $html;
}
?>