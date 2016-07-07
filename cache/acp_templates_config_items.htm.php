<?php
function FWS_TPL_acp_templates_config_items_htm($tpl,$number) {
$locale = FWS_Props::get()->locale();
$tplvars = $tpl->get_variables('config_items.htm',$number);

$html = "";
$html .=<<<EOF

EOF;
$html .= $tpl->parse_template("inc_header.htm",false);
$html .= <<<EOF



EOF;
if((isset($tplvars['module_error']) && $tplvars['module_error'] == false)) {
$html .= <<<EOF

<form method="get" action="
EOF;
$html .= $tplvars['form_target'];
$html .= <<<EOF
">

EOF;
$hidden_fields_c = -1;
foreach($tplvars['hidden_fields'] as $tplvars['name'] => $tplvars['value']) {
$hidden_fields_c++;

$html .= <<<EOF

<input type="hidden" name="
EOF;
$html .= $tplvars['name'];
$html .= <<<EOF
" value="
EOF;
$html .= $tplvars['value'];
$html .= <<<EOF
" />

EOF;
}
$html .= <<<EOF

<div class="a_border">
	<table class="a_table" cellpadding="2" cellspacing="1">
		<tr>
			<td colspan="
EOF;
$html .= $tplvars['groups_per_line'];
$html .= <<<EOF
" class="a_main">
			<label for="keyword_field">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('search_in_settings'):'');
$html .= <<<EOF
:</label>
			<input type="text" id="keyword_field" name="kw" value="
EOF;
$html .= $tplvars['keyword'];
$html .= <<<EOF
" size="20" maxlength="50" />
			<input type="submit" value="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('search'):'');
$html .= <<<EOF
" />
			<input type="reset" value="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('reset'):'');
$html .= <<<EOF
" onclick="document.location.href = '
EOF;
$html .= ($tpl->check_allowed_method('gurl','simple_acp_url')?$tplvars['gurl']->simple_acp_url():'');
$html .= <<<EOF
';" />
			</td>
		</tr>
		<tr>
			<td colspan="
EOF;
$html .= $tplvars['groups_per_line'];
$html .= <<<EOF
" class="a_coldesc_sep">&nbsp;</td>
		</tr>
		
EOF;
$group_rows_c = -1;
foreach($tplvars['group_rows'] as $tplvars['grouprow']) {
$group_rows_c++;

$html .= <<<EOF

		<tr>
			
EOF;
$grouprow_c = -1;
foreach($tplvars['grouprow'] as $tplvars['group']) {
$grouprow_c++;

$html .= <<<EOF

			<td align="center" width="
EOF;
$html .= $tplvars['groups_width'];
$html .= <<<EOF
%" style="font-size: 1.0em;" class="
EOF;
$html .= $tplvars['group']['class'];
$html .= <<<EOF
">
			<a href="
EOF;
$html .= ($tpl->check_allowed_method('gurl','simple_acp_url')?$tplvars['gurl']->simple_acp_url(0,'&amp;action=items&amp;gid='.$tplvars['group']['id']):'');
$html .= <<<EOF
"><b>
EOF;
$html .= $tplvars['group']['title'];
$html .= <<<EOF
</b></a>
			
EOF;
if((isset($tplvars['group']['description']) && $tplvars['group']['description'])) {
$html .= <<<EOF

			<div class="a_desc">
EOF;
$html .= $tplvars['group']['description'];
$html .= <<<EOF
</div>
			
EOF;
}
$html .= <<<EOF

			</td>
			
EOF;
}
$html .= <<<EOF

		</tr>
		
EOF;
}
$html .= <<<EOF

	</table>
</div>
</form>

<form method="post" action="
EOF;
$html .= $tplvars['form_target'];
$html .= <<<EOF
">
<input type="hidden" name="action_type" value="
EOF;
$html .= $tplvars['action_type'];
$html .= <<<EOF
" />
<div class="a_border a_pad">
	<h1 class="a_topic">
EOF;
$html .= $tplvars['title'];
$html .= <<<EOF
</h1>
	
EOF;
if((count($tplvars['items']) == 0)) {
$html .= <<<EOF

	<div class="a_main">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('no_settings_found'):'');
$html .= <<<EOF
</div>
	
EOF;
} else {
$html .= <<<EOF

	<fieldset class="a_form">
		
EOF;
$items_c = -1;
foreach($tplvars['items'] as $tplvars['item']) {
$items_c++;

$html .= <<<EOF

		
EOF;
if((isset($tplvars['item']['show_sep']) && $tplvars['item']['show_sep'])) {
$html .= <<<EOF

		
EOF;
if((isset($tplvars['item']['separator']) && $tplvars['item']['separator'] == '')) {
$html .= <<<EOF

		<div class="a_coldesc_sep">
EOF;
$html .= $tplvars['item']['separator'];
$html .= <<<EOF
</div>
		
EOF;
} else {
$html .= <<<EOF

		<div class="a_coldesc_sep_text">
EOF;
$html .= $tplvars['item']['separator'];
$html .= <<<EOF
</div>
		
EOF;
}
$html .= <<<EOF

		
EOF;
}
$html .= <<<EOF

		<dl>
			<dt>
				
EOF;
$html .= $tplvars['item']['title'];
$html .= <<<EOF
:
				
EOF;
if((isset($tplvars['item']['affects_messages']) && $tplvars['item']['affects_messages'] == 1)) {
$html .= <<<EOF

				<span style="color: #000080;">*</span>
				
EOF;
}
$html .= <<<EOF

				
EOF;
if((isset($tplvars['item']['affects_messages']) && $tplvars['item']['affects_messages'] == 2)) {
$html .= <<<EOF

				<span style="color: #FF0000;">*</span>
				
EOF;
}
$html .= <<<EOF

			</dt>
			<dd>
				
EOF;
if((isset($tplvars['item']['is_default']) && $tplvars['item']['is_default'] == false)) {
$html .= <<<EOF

				<a style="float: right;" href="
				
EOF;
if((isset($tplvars['view']) && $tplvars['view'] == 'search')) {
$html .= <<<EOF

				
EOF;
$html .= ($tpl->check_allowed_method('gurl','simple_acp_url')?$tplvars['gurl']->simple_acp_url(0,'&amp;action=search&amp;kw='.$tplvars['keyword'].'&amp;id='.$tplvars['item']['id'].'&amp;at='.$tplvars['at']):'');
$html .= <<<EOF

				
EOF;
} else {
$html .= <<<EOF

EOF;
$html .= ($tpl->check_allowed_method('gurl','simple_acp_url')?$tplvars['gurl']->simple_acp_url(0,'&amp;action=items&amp;gid='.$tplvars['gid'].'&amp;id='.$tplvars['item']['id'].'&amp;at='.$tplvars['at']):'');
$html .= <<<EOF

				
EOF;
}
$html .= <<<EOF

				"><img src="
EOF;
$html .= $tplvars['gpath'];
$html .= <<<EOF
acp/images/reset.png" alt="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('revert_setting'):'');
$html .= <<<EOF
" title="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('revert_setting'):'');
$html .= <<<EOF
" /></a>
				
EOF;
}
$html .= <<<EOF

				
EOF;
$html .= $tplvars['item']['content'];
$html .= <<<EOF

				
EOF;
if((isset($tplvars['item']['description']) && $tplvars['item']['description'] != "")) {
$html .= <<<EOF

				<div class="a_desc">
EOF;
$html .= $tplvars['item']['description'];
$html .= <<<EOF
</div>
				
EOF;
}
$html .= <<<EOF

			</dd>
		</dl>
		
EOF;
}
$html .= <<<EOF

	</fieldset>
	
EOF;
}
$html .= <<<EOF

</div>
<center>
	<input type="submit" name="submit" value="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('save'):'');
$html .= <<<EOF
" />
</center>
</form>


EOF;
if((isset($tplvars['display_affects_msgs_hints']) && $tplvars['display_affects_msgs_hints'])) {
$html .= <<<EOF

<p class="a_block_pad">
	<span style="color: #000080;">*</span>: 
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('affects_messages_not_important'):'');
$html .= <<<EOF
<br />
	<span style="color: #FF0000;">*</span>: 
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('affects_messages_important'):'');
$html .= <<<EOF
<br />
</p>

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