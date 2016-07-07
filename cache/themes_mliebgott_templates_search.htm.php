<?php
function FWS_TPL_themes_mliebgott_templates_search_htm($tpl,$number) {
$locale = FWS_Props::get()->locale();
$tplvars = $tpl->get_variables('search.htm',$number);

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
if((isset($tplvars['result_num']) && $tplvars['result_num'] > 0)) {
$html .= <<<EOF



EOF;
$html .= $tpl->parse_template($tplvars['result_tpl'],false);
$html .= <<<EOF



EOF;
} else {
$html .= <<<EOF

<script type="text/javascript" src="
EOF;
$html .= ($tpl->check_allowed_method('gjs','get_file')?$tplvars['gjs']->get_file('src/ajax_user_matches.js'):'');
$html .= <<<EOF
"></script>

<form action="
EOF;
$html .= $tplvars['target_url'];
$html .= <<<EOF
" method="post">
<div class="bs_border">
	<h1 class="bs_topic">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('search'):'');
$html .= <<<EOF
</h1>
	<fieldset class="bs_form">
		<dl>
			<dt>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('searchkeyword'):'');
$html .= <<<EOF
:</dt>
			<dd>
				
EOF;
$html .= ($tpl->check_allowed_method('form','get_textbox')?$tplvars['form']->get_textbox('keyword',$tplvars['keyword'],'80%',100):'');
$html .= <<<EOF

				<br />
				
EOF;
$html .= ($tpl->check_allowed_method('form','get_radio_boxes')?$tplvars['form']->get_radio_boxes('keyword_mode',$tplvars['keyword_mode_options'],'and'):'');
$html .= <<<EOF

				<div class="bs_desc bs_padtop">
EOF;
$html .= $tplvars['search_explain_keyword'];
$html .= <<<EOF
</div>
			</dd>
		</dl>
		<div class="bs_coldesc_sep">&nbsp;</div>
		<dl>
			<dt>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('search_posts_of_user'):'');
$html .= <<<EOF
:</dt>
			<dd>
				<input id="user_name_input" autocomplete="off" type="text" style="width: 80%;"
						maxlength="100" name="un" value="
EOF;
$html .= $tplvars['user_name'];
$html .= <<<EOF
" />
				<div class="bs_desc bs_padtop">
EOF;
$html .= $tplvars['search_explain_user'];
$html .= <<<EOF
</div>
			</dd>
		</dl>
		<dl>
			<dt>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('in'):'');
$html .= <<<EOF
 
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('forum'):'');
$html .= <<<EOF
:</dt>
			<dd>
EOF;
$html .= $tplvars['forum_combo'];
$html .= <<<EOF
</dd>
		</dl>
		<dl>
			<dt>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('orderby'):'');
$html .= <<<EOF
:</dt>
			<dd>
				
EOF;
$html .= ($tpl->check_allowed_method('form','get_combobox')?$tplvars['form']->get_combobox('order',$tplvars['order_options'],$tplvars['order']):'');
$html .= <<<EOF
&nbsp;
EOF;
$html .= ($tpl->check_allowed_method('form','get_combobox')?$tplvars['form']->get_combobox('ad',$tplvars['ad_options'],$tplvars['ad']):'');
$html .= <<<EOF

			</dd>
		</dl>
		<dl>
			<dt>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('result_type'):'');
$html .= <<<EOF
:</dt>
			<dd>
				
EOF;
$html .= ($tpl->check_allowed_method('form','get_combobox')?$tplvars['form']->get_combobox('result_type',$tplvars['result_type_options'],'posts'):'');
$html .= <<<EOF

			</dd>
		</dl>
		<dl>
			<dt>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('maximal'):'');
$html .= <<<EOF
:</dt>
			<dd>
				
EOF;
$html .= ($tpl->check_allowed_method('form','get_combobox')?$tplvars['form']->get_combobox('limit',$tplvars['limit_options'],$tplvars['limit']):'');
$html .= <<<EOF
 
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('results'):'');
$html .= <<<EOF

			</dd>
		</dl>
	</fieldset>
</div>
<center>
	<input type="submit" name="submit" value="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('search'):'');
$html .= <<<EOF
" />
</center>
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
');
//-->
</script>

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