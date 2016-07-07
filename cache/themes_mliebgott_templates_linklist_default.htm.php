<?php
function FWS_TPL_themes_mliebgott_templates_linklist_default_htm($tpl,$number) {
$locale = FWS_Props::get()->locale();
$tplvars = $tpl->get_variables('linklist_default.htm',$number);

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

		
EOF;
if((isset($tplvars['num']) && $tplvars['num'] > 0)) {
$html .= <<<EOF

		<div class="panel panel-default">
			<div class="panel-heading">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('linklist'):'');
$html .= <<<EOF
</div>
			<div class="panel-body">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th width="25%" class="bs_coldesc" align="left">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('url'):'');
$html .= <<<EOF
</th>
							<th width="20%" class="bs_coldesc">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('added'):'');
$html .= <<<EOF
</th>
							<th width="7%" class="bs_coldesc">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('clicks'):'');
$html .= <<<EOF
</th>
							<th width="38%" class="bs_coldesc">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('rating'):'');
$html .= <<<EOF
</th>
							<th width="10%" class="bs_coldesc">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('details'):'');
$html .= <<<EOF
</th>
						</tr>
					</thead>
					<tbody>
						
EOF;
$links_c = -1;
foreach($tplvars['links'] as $tplvars['data']) {
$links_c++;

$html .= <<<EOF

							
EOF;
if((isset($tplvars['data']['show_category']) && $tplvars['data']['show_category'])) {
$html .= <<<EOF

								<tr>
									<td colspan="5" class="bs_coldesc">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('category'):'');
$html .= <<<EOF
 &raquo; <u>
EOF;
$html .= $tplvars['data']['category'];
$html .= <<<EOF
</u></td>
								</tr>
							
EOF;
}
$html .= <<<EOF

						<tr>
							<td colspan="5" class="bs_main">
								<table class="table no-margin-bottom">
									<tr>
										<td width="25%">
											<a target="_blank" href="
EOF;
$html .= $tplvars['data']['redirect_url'];
$html .= <<<EOF
">
EOF;
$html .= $tplvars['data']['link_url'];
$html .= <<<EOF
</a>
										</td>										
										<td width="20%" align="center">
											
EOF;
$html .= $tplvars['data']['link_date'];
$html .= <<<EOF
 
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('of'):'');
$html .= <<<EOF
 
EOF;
$html .= $tplvars['data']['user_name'];
$html .= <<<EOF

										</td>
										<td width="7%" align="center">
EOF;
$html .= $tplvars['data']['clicks'];
$html .= <<<EOF
</td>
										<td width="38%">
											<input type="number" class="rating" id="link_rating_
EOF;
$html .= $tplvars['data']['id'];
$html .= <<<EOF
" data-size="xs" data-value="
EOF;
$html .= $tplvars['data']['vote_rating_result'];
$html .= <<<EOF
">
										</td>
										<td width="10%" align="center">
											<i class="fa fa-chevron-down collapse-div" id="
EOF;
$html .= $tplvars['data']['index'];
$html .= <<<EOF
" ></i>
										</td>
									</tr>
								</table>
								<div id="div_
EOF;
$html .= $tplvars['data']['index'];
$html .= <<<EOF
" class="collapse out">
									<table class="table">
										<tbody>
											<tr>
												<td width="52%">
EOF;
$html .= $tplvars['data']['description'];
$html .= <<<EOF
</td>
												<td width="48%" valign="top">
													
EOF;
if((isset($tplvars['data']['can_vote']) && $tplvars['data']['can_vote'])) {
$html .= <<<EOF

														<form method="post" action="
EOF;
$html .= ($tpl->check_allowed_method('gurl','simple_url')?$tplvars['gurl']->simple_url('linklist','&amp;$URL_ID='.$tplvars['data']['id'].'&amp;$URL_AT=$ACTION_VOTE_LINK','&amp;',true):'');
$html .= <<<EOF
">
															<div class="col-sm-4 no-padding-left">
																<label for="link_rating_
EOF;
$html .= $tplvars['data']['id'];
$html .= <<<EOF
">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('yourvote'):'');
$html .= <<<EOF
:</label>
																<select class="form-control" name="link_rating_
EOF;
$html .= $tplvars['data']['id'];
$html .= <<<EOF
" id="link_rating_
EOF;
$html .= $tplvars['data']['id'];
$html .= <<<EOF
">
																	
EOF;
$data_vote_options_rating_c = -1;
foreach($tplvars['data']['vote_options_rating'] as $tplvars['key'] => $tplvars['value']) {
$data_vote_options_rating_c++;

$html .= <<<EOF

																		<option value="{key"}>
EOF;
$html .= $tplvars['value'];
$html .= <<<EOF
</option>
																	
EOF;
}
$html .= <<<EOF

																</select>
																<br>
																<button type="submit" role="button" class="btn btn-default">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('vote'):'');
$html .= <<<EOF
</button>
															</div>
														</form>
													
EOF;
} else {
$html .= <<<EOF

														
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('linklist_already_voted'):'');
$html .= <<<EOF

													
EOF;
}
$html .= <<<EOF

												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</td>
						</tr>
						
EOF;
}
$html .= <<<EOF

					</tbody>
				</table>
			</div>
		</div>

		<div class="bs_padtop">
		
EOF;
$html .= $tpl->parse_template("inc_pagination.htm",false);
$html .= <<<EOF

		</div>

	
EOF;
}
$html .= <<<EOF

		<br />

		
EOF;
if((isset($tplvars['show_add_link']) && $tplvars['show_add_link'])) {
$html .= <<<EOF

			<a class="bs_button_big" href="
EOF;
$html .= $tplvars['add_link_url'];
$html .= <<<EOF
">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('addnewlink'):'');
$html .= <<<EOF
</a>
			<br style="clear: both;" />
		
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