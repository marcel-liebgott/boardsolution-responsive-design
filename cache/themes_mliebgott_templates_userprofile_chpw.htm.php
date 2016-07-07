<?php
function FWS_TPL_themes_mliebgott_templates_userprofile_chpw_htm($tpl,$number) {
$locale = FWS_Props::get()->locale();
$tplvars = $tpl->get_variables('userprofile_chpw.htm',$number);

$html = "";
$html .=<<<EOF

EOF;
$html .= $tplvars['js_script'];
$html .= <<<EOF


<form method="post" action="
EOF;
$html .= $tplvars['target_url'];
$html .= <<<EOF
">
	<input type="hidden" name="action_type" value="
EOF;
$html .= $tplvars['action_type'];
$html .= <<<EOF
" />
	<div class="panel panel-default">
		<div class="panel-heading">
			
EOF;
if((isset($tplvars['enable_username_change']) && $tplvars['enable_username_change'])) {
$html .= <<<EOF

				
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('user_n_pw_change'):'');
$html .= <<<EOF

			
EOF;
} else {
$html .= <<<EOF

				
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('pw_change'):'');
$html .= <<<EOF

			
EOF;
}
$html .= <<<EOF

		</div>
		<div class="panel-body">
			
EOF;
if((isset($tplvars['enable_username_change']) && $tplvars['enable_username_change'])) {
$html .= <<<EOF

				<div class="form-group clearfix" role="group">
					<label class="col-sm-3 col-xs-4 control-label no-padding-left">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('name'):'');
$html .= <<<EOF
:</label>
					<div class="col-sm-9 col-xs-8 no-padding-left no-padding-right">
						<input type="text" id="user_name" name="user_name" size="
EOF;
$html .= $tplvars['user_name_size'];
$html .= <<<EOF
" maxlength="
EOF;
$html .= $tplvars['user_name_maxlength'];
$html .= <<<EOF
" class="form-control" value="admin">
						
EOF;
if((isset($tplvars['max_changes_notice']) && $tplvars['max_changes_notice'])) {
$html .= <<<EOF

							<span class="text-muted">
EOF;
$html .= $tplvars['max_changes_notice'];
$html .= <<<EOF
</span>
						
EOF;
}
$html .= <<<EOF

					</div>
				</div>
			
EOF;
}
$html .= <<<EOF

			<div class="form-group clearfix" role="group">
				<label class="col-sm-3 col-xs-4 control-label no-padding-left">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('oldpw'):'');
$html .= <<<EOF
:</label>
				<div class="col-sm-9 col-xs-8 no-padding-left no-padding-right">
					<input type="password" id="current_password" name="current_password" class="form-control" size="
EOF;
$html .= $tplvars['password_size'];
$html .= <<<EOF
" value="" maxlength="
EOF;
$html .= $tplvars['password_maxlength'];
$html .= <<<EOF
">
				</div>
			</div>
			<div class="form-group clearfix" role="group">
				<label class="col-sm-3 col-xs-4 control-label no-padding-left">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('newpw'):'');
$html .= <<<EOF
:</label>
				<div class="col-sm-9 col-xs-8 no-padding-left no-padding-right">
					<input id="pw_field" type="password" name="new_password" size="
EOF;
$html .= $tplvars['password_size'];
$html .= <<<EOF
" class="form-control"
								maxlength="
EOF;
$html .= $tplvars['password_maxlength'];
$html .= <<<EOF
" onkeyup="show_pw_complexity('pw_field','pw_complexity_notice');" />
						<span class="text-muted" id="pw_complexity_notice"></span>
				</div>
			</div>
			<div class="form-group clearfix" role="group">
				<label class="col-sm-3 col-xs-4 control-label no-padding-left">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('newpw'):'');
$html .= <<<EOF
:</label>
				<div class="col-sm-9 col-xs-8 no-padding-left no-padding-right">
					<input type="password" name="new_password_conf" size="
EOF;
$html .= $tplvars['password_size'];
$html .= <<<EOF
" maxlength="
EOF;
$html .= $tplvars['password_maxlength'];
$html .= <<<EOF
" class="form-control"/>
				</div>
			</div>
		</div>
	</div>
	<div class="text-center">
		<div class="btn-group" role="group">
			<input type="submit" name="submit" class="btn btn-default" value="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('save'):'');
$html .= <<<EOF
" />
		</div>
	</div>
</form>
EOF;
return $html;
}
?>