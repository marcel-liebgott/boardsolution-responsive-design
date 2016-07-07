<?php
function FWS_TPL_themes_mliebgott_templates_memberlist_htm($tpl,$number) {
$locale = FWS_Props::get()->locale();
$tplvars = $tpl->get_variables('memberlist.htm',$number);

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
			<div class="panel panel-default">
				<div class="panel-heading">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('memberlist'):'');
$html .= <<<EOF
</div>
				<div class="panel-body">
					<div class="col-lg-12 col-sm-12 col-xs-12">
						<table class="table table-bordered table-striped">
							<thead>
								<tr>
									<th class="cell-stat-3x">
EOF;
$html .= $tplvars['name_col_custom'];
$html .= <<<EOF
</th>
									<th class="cell-stat-2x">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('email'):'');
$html .= <<<EOF
</th>
									
EOF;
if((isset($tplvars['guserenablepm']) && $tplvars['guserenablepm'])) {
$html .= <<<EOF

										<th class="cell-stat">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('pm'):'');
$html .= <<<EOF
</th>
									
EOF;
}
$html .= <<<EOF

									
EOF;
if((isset($tplvars['enable_post_count']) && $tplvars['enable_post_count'])) {
$html .= <<<EOF

										<th class="cell-stat">
EOF;
$html .= $tplvars['posts_col_custom'];
$html .= <<<EOF
</th>
									
EOF;
}
$html .= <<<EOF

									<th class="cell-stat-2x">
EOF;
$html .= $tplvars['usergroup_col_custom'];
$html .= <<<EOF
</th>
									<th class="cell-stat-2x hidden-xs">
EOF;
$html .= $tplvars['lastlogin_col_custom'];
$html .= <<<EOF
</th>
									<th class="cell-stat-2x hidden-xs">
EOF;
$html .= $tplvars['register_col_custom'];
$html .= <<<EOF
</th>
								</tr>
							</thead>
							<tbody>
								
EOF;
if((isset($tplvars['user']) && $tplvars['user'] == false)) {
$html .= <<<EOF

									<tr>
										<td colspan="
EOF;
$html .= $tplvars['colspan'];
$html .= <<<EOF
" align="center" class="bs_main">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('no_user_found'):'');
$html .= <<<EOF
</td>
									</tr>
								
EOF;
}
$html .= <<<EOF
					
								
EOF;
$user_c = -1;
foreach($tplvars['user'] as $tplvars['data']) {
$user_c++;

$html .= <<<EOF

									<tr>
										<td>
EOF;
$html .= $tplvars['data']['user_name'];
$html .= <<<EOF
</td>
										<td class="text-center">
EOF;
$html .= $tplvars['data']['email'];
$html .= <<<EOF
</td>
										
EOF;
if((isset($tplvars['guserenablepm']) && $tplvars['guserenablepm'])) {
$html .= <<<EOF

											<td class="text-center">
												
EOF;
if((isset($tplvars['data']['allow_pms']) && $tplvars['data']['allow_pms'])) {
$html .= <<<EOF

												<a style="float: none;" title="
EOF;
$html .= $tplvars['data']['send_pm_title'];
$html .= <<<EOF
" class="bs_button" href="
EOF;
$html .= ($tpl->check_allowed_method('gurl','simple_url')?$tplvars['gurl']->simple_url('userprofile','&amp;$URL_SUB=pmcompose&amp;$URL_ID='.$tplvars['data']['user_id']):'');
$html .= <<<EOF
">
													<i class="fa fa-envelope"></i>
												</a>
												
EOF;
} else {
$html .= <<<EOF

													
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('notavailable'):'');
$html .= <<<EOF

												
EOF;
}
$html .= <<<EOF

											</td>
										
EOF;
}
$html .= <<<EOF

										
EOF;
if((isset($tplvars['enable_post_count']) && $tplvars['enable_post_count'])) {
$html .= <<<EOF

											<td class="text-center">
EOF;
$html .= $tplvars['data']['posts'];
$html .= <<<EOF
</td>
										
EOF;
}
$html .= <<<EOF

										<td>
EOF;
$html .= $tplvars['data']['user_group'];
$html .= <<<EOF
</td>
										<td class="hidden-xs">
EOF;
$html .= $tplvars['data']['lastlogin'];
$html .= <<<EOF
</td>
										<td class="hidden-xs">
EOF;
$html .= $tplvars['data']['register_date'];
$html .= <<<EOF
</td>
									</tr>
									
EOF;
}
$html .= <<<EOF

							</tbody>
						</table>
						
EOF;
$html .= $tpl->parse_template("inc_pagination.htm",false);
$html .= <<<EOF

					</div>
				</div>
			</div>
			
			<script type="text/javascript" src="
EOF;
$html .= ($tpl->check_allowed_method('gjs','get_file')?$tplvars['gjs']->get_file('src/ajax_user_matches.js'):'');
$html .= <<<EOF
"></script>

			<form method="get" action="
EOF;
$html .= $tplvars['search_target'];
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

				
				<div class="panel panel-default">
					<div class="panel-heading">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('search'):'');
$html .= <<<EOF
</div>
					<div class="panel-body">
						<div class="col-lg-6 col-sm-6 col-xs-12">
							<h4>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('general'):'');
$html .= <<<EOF
</h4>
							<div class="form-group">
								<label>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('name'):'');
$html .= <<<EOF
:</label>
								<input id="user_name_input" aria-describedby="user_name_input" autocomplete="off" type="text" size="30" maxlength="30" class="form-control" name="
EOF;
$html .= $tplvars['name_param'];
$html .= <<<EOF
" value="
EOF;
$html .= $tplvars['name_value'];
$html .= <<<EOF
" />
							</div>
							<div class="form-group">
								<label>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('email'):'');
$html .= <<<EOF
:</label>
								<input id="user_email_input" aria-describedby="user_email_input" autocomplete="off" type="text" size="30" maxlength="30" class="form-control" name="
EOF;
$html .= $tplvars['email_param'];
$html .= <<<EOF
" value="
EOF;
$html .= $tplvars['email_value'];
$html .= <<<EOF
" />
							</div>
							<div class="form-group">
								<label>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('group'):'');
$html .= <<<EOF
:</label>
								<select class="form-control" id="msg__" aria-describedby="user_group_input" name="msg[]" size="
EOF;
$html .= $tplvars['sum_user_groups'];
$html .= <<<EOF
" multiple="multiple">
									
EOF;
$user_group_combo_array_c = -1;
foreach($tplvars['user_group_combo_array'] as $tplvars['gid'] => $tplvars['gname']) {
$user_group_combo_array_c++;

$html .= <<<EOF

										<option value="
EOF;
$html .= $tplvars['gid'];
$html .= <<<EOF
"
										
EOF;
$selected_user_groups_c = -1;
foreach($tplvars['selected_user_groups'] as $tplvars['sgid']) {
$selected_user_groups_c++;

$html .= <<<EOF

											
EOF;
if((isset($tplvars['gid']) && isset($tplvars['sgid']) && $tplvars['gid'] == $tplvars['sgid'])) {
$html .= <<<EOF

												selected="selected"
											
EOF;
}
$html .= <<<EOF

										
EOF;
}
$html .= <<<EOF

										>
EOF;
$html .= $tplvars['gname'];
$html .= <<<EOF
</option>
									
EOF;
}
$html .= <<<EOF

								</select>
							</div>
							<div class="form-group">
								<label>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('just_moderators'):'');
$html .= <<<EOF
:</label>
								<br>
								<div class="btn-group" data-toggle-name="just_moderator" data-input-name="msm_">
									<button type="button" value="1" class="btn" data-toggle="button">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('yes'):'');
$html .= <<<EOF
</button>
									<button type="button" value="0" class="btn" data-toggle="button" autofocus="true">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('no'):'');
$html .= <<<EOF
</button>
									<input type="hidden" id="just_moderator" name="msm_0" value="0">
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-sm-6 col-xs-12">
							<h4>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('activity'):'');
$html .= <<<EOF
</h4>
							<div class="form-group">
								<label>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('posts'):'');
$html .= <<<EOF
:</label>
								<div class="input-group">
									<span class="input-group-addon" id="user_posts_from_input">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('From'):'');
$html .= <<<EOF
</span>
									<input id="user_posts_from_input" aria-describedby="user_posts_from_input" autocomplete="off" type="text" size="5" maxlength="10" class="form-control" name="
EOF;
$html .= $tplvars['from_posts_param'];
$html .= <<<EOF
" value="
EOF;
$html .= $tplvars['from_posts_value'];
$html .= <<<EOF
" />
									<span class="input-group-addon" id="user_posts_to_input">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('to'):'');
$html .= <<<EOF
</span>
									<input id="user_posts_to_input" aria-describedby="user_posts_to_input" autocomplete="off" type="text" size="5" maxlength="10" class="form-control" name="
EOF;
$html .= $tplvars['to_posts_param'];
$html .= <<<EOF
" value="
EOF;
$html .= $tplvars['to_posts_value'];
$html .= <<<EOF
" />
								</div>
							</div>
							<div class="form-group">
								<label>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('points'):'');
$html .= <<<EOF
:</label>
								<div class="input-group">
									<span class="input-group-addon" id="user_points_from_input">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('From'):'');
$html .= <<<EOF
</span>
									<input id="user_points_from_input" aria-describedby="user_points_from_input" autocomplete="off" type="text" size="5" maxlength="10" class="form-control" name="
EOF;
$html .= $tplvars['from_points_param'];
$html .= <<<EOF
" value="
EOF;
$html .= $tplvars['from_points_value'];
$html .= <<<EOF
" />
									<span class="input-group-addon" id="user_points_to_input">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('to'):'');
$html .= <<<EOF
</span>
									<input id="user_points_to_input" aria-describedby="user_points_to_input" autocomplete="off" type="text" size="5" maxlength="10" class="form-control" name="
EOF;
$html .= $tplvars['to_points_param'];
$html .= <<<EOF
" value="
EOF;
$html .= $tplvars['to_points_value'];
$html .= <<<EOF
" />
								</div>
							</div>
							<div class="form-group">
								<label>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('registeredsince'):'');
$html .= <<<EOF
:</label>
								<div class="input-group">
									<span class="input-group-addon" id="user_register_between_input">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('between'):'');
$html .= <<<EOF
</span>
									<input id="user_registered_between_input" aria-describedby="user_register_between_input" autocomplete="off" name="msfr" type="text" pattern="(0[1-9]|1[0-9]|2[0-9]|3[01]).(0[1-9]|1[012]).[0-9][0-9][0-9][0-9]" class="form-control" name="
EOF;
$html .= $tplvars['from_reg_param'];
$html .= <<<EOF
" value="
EOF;
$html .= $tplvars['from_reg_value'];
$html .= <<<EOF
" />
									<span class="input-group-addon" id="user_registered_and_input">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('and'):'');
$html .= <<<EOF
</span>
									<input id="user_registered_and_input" aria-describedby="user_registered_and_input" autocomplete="off" name="mstr" type="text" pattern="(0[1-9]|1[0-9]|2[0-9]|3[01]).(0[1-9]|1[012]).[0-9][0-9][0-9][0-9]" class="form-control" name="
EOF;
$html .= $tplvars['to_reg_param'];
$html .= <<<EOF
" value="
EOF;
$html .= $tplvars['to_reg_value'];
$html .= <<<EOF
" />
								</div>
							</div>
							<div class="form-group">
								<label >
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('lastlogin'):'');
$html .= <<<EOF
:</label>
								<div class="input-group">
									<span class="input-group-addon" id="user_last_login_between_input">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('between'):'');
$html .= <<<EOF
</span>
									<input id="user_last_login_between_input" aria-describedby="user_last_login_between_input" autocomplete="off" name="msfl" type="text" pattern="(0[1-9]|1[0-9]|2[0-9]|3[01]).(0[1-9]|1[012]).[0-9][0-9][0-9][0-9]" class="form-control" name="
EOF;
$html .= $tplvars['from_lastlogin_param'];
$html .= <<<EOF
" value="
EOF;
$html .= $tplvars['from_lastlogin_value'];
$html .= <<<EOF
" />
									<span class="input-group-addon" id="user_last_login_and_input">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('and'):'');
$html .= <<<EOF
</span>
									<input id="user_last_login_and_input" aria-describedby="user_last_login_and_input" autocomplete="off" name="mstl" type="text" pattern="(0[1-9]|1[0-9]|2[0-9]|3[01]).(0[1-9]|1[012]).[0-9][0-9][0-9][0-9]" class="form-control" name="
EOF;
$html .= $tplvars['to_lastlogin_param'];
$html .= <<<EOF
" value="
EOF;
$html .= $tplvars['to_lastlogin_value'];
$html .= <<<EOF
" />
								</div>
							</div>
						</div>
						
						<div class="col-lg-12 col-sm-12 col-xs-12 text-center">
							<input class="btn btn-default" type="button" value="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('reset'):'');
$html .= <<<EOF
" onclick="document.location.href = '
EOF;
$html .= $tplvars['reset_url'];
$html .= <<<EOF
';" />
							<input class="btn btn-default" type="submit" value="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('search'):'');
$html .= <<<EOF
" />
						</div>
					</div>
				</div>
			</form>

			<script type="text/javascript">
			<!--
			new BS_AJAXUserSearch('
EOF;
$html .= $tplvars['gpath'];
$html .= <<<EOF
','user_name_input','
EOF;
$html .= $tplvars['action_param'];
$html .= <<<EOF
','
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('matching_user'):'');
$html .= <<<EOF
',
				'
EOF;
$html .= ($tpl->check_allowed_method('guser','get_theme_item_path')?$tplvars['guser']->get_theme_item_path("images/wait.gif"):'');
$html .= <<<EOF
',false);
			//-->
			
			$(document).ready(function($){
				 $('div.btn-group[data-toggle-name]').each(function(){
					var group = $(this);
					var form = group.parents('form').eq(0);
					var name = group.attr('data-toggle-name');
					var hidden_input_name = group.attr('data-input-name');
					var hidden = $('input[id="' + name + '"]', form);
					
					$('button', group).each(function(){
						var button = $(this);
						button.on('click', function(){
							hidden.val($(this).val());
							hidden.attr('name', hidden_input_name + $(this).val());
						});
						
						if(button.val() == hidden.val()){
							button.addClass('active');
						}
					});
				});
			});
			</script>
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