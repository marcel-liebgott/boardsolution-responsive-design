<?php
function FWS_TPL_acp_templates_themes_default_htm($tpl,$number) {
$locale = FWS_Props::get()->locale();
$tplvars = $tpl->get_variables('themes_default.htm',$number);

$html = "";
$html .=<<<EOF

EOF;
$html .= $tpl->parse_template("inc_header.htm",false);
$html .= <<<EOF


EOF;
$html .= $tpl->parse_template("inc_delete_message.htm",false);
$html .= <<<EOF



EOF;
if((isset($tplvars['module_error']) && $tplvars['module_error'] == false)) {
$html .= <<<EOF


EOF;
$html .= $tpl->parse_template("inc_js_row_selector.htm",false);
$html .= <<<EOF


<form method="get" action="
EOF;
$html .= $tplvars['search_url'];
$html .= <<<EOF
">

EOF;
$hidden_c = -1;
foreach($tplvars['hidden'] as $tplvars['k'] => $tplvars['v']) {
$hidden_c++;

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

<div class="a_block">
	<div class="a_menubar">
		<div class="a_menubar_left">
			
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('search'):'');
$html .= <<<EOF
:
			<input class="a_searchtb" type="text" name="search" size="20" maxlength="255" value="
EOF;
$html .= $tplvars['search_val'];
$html .= <<<EOF
" />
			<input class="a_searchbtn" type="submit" value="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('search'):'');
$html .= <<<EOF
" />
		</div>
		<div class="a_menubar_right">
			<a href="
EOF;
$html .= ($tpl->check_allowed_method('gurl','simple_acp_url')?$tplvars['gurl']->simple_acp_url(0,'&amp;action=add'):'');
$html .= <<<EOF
">
			<img src="
EOF;
$html .= $tplvars['gpath'];
$html .= <<<EOF
acp/images/plus.png" alt="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('add_theme'):'');
$html .= <<<EOF
" />
			
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('add_theme'):'');
$html .= <<<EOF

			</a>
		</div>
	</div>
</div>
</form>

<form method="post" action="
EOF;
$html .= ($tpl->check_allowed_method('gurl','simple_acp_url')?$tplvars['gurl']->simple_acp_url():'');
$html .= <<<EOF
">
<input type="hidden" name="action_type" value="
EOF;
$html .= $tplvars['at_update'];
$html .= <<<EOF
" />
<div class="a_border a_pad">
	<h1 class="a_topic">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('themes'):'');
$html .= <<<EOF
</h1>
	<table class="a_table" cellpadding="2" cellspacing="1">
		<tr>
			<td width="50%" class="a_coldesc">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('theme_name'):'');
$html .= <<<EOF
</td>
			<td width="40%" class="a_coldesc">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('theme_folder'):'');
$html .= <<<EOF
</td>
			<td width="5%" class="a_coldesc" align="center">&nbsp;</td>
			<td width="5%" class="a_coldesc" align="center">&nbsp;</td>
		</tr>
		
EOF;
if((count($tplvars['themes']) == 0)) {
$html .= <<<EOF

		<tr>
			<td colspan="4" align="center" class="a_main">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('no_themes_found'):'');
$html .= <<<EOF
</td>
		</tr>
		
EOF;
}
$html .= <<<EOF

		
EOF;
$themes_c = -1;
foreach($tplvars['themes'] as $tplvars['row'] => $tplvars['theme']) {
$themes_c++;

$html .= <<<EOF

		<tr id="row_
EOF;
$html .= $tplvars['row'];
$html .= <<<EOF
" class="hlRow">
			<td class="hlCol">
			
EOF;
$html .= ($tpl->check_allowed_method('form','get_textbox')?$tplvars['form']->get_textbox('names['.$tplvars['theme']['id'].']',$tplvars['theme']['theme_name'],30,50):'');
$html .= <<<EOF

			</td>
			<td class="hlCol">
			
EOF;
if((isset($tplvars['theme']['theme_folder']) && $tplvars['theme']['theme_folder'] == 'default')) {
$html .= <<<EOF

			
EOF;
$html .= $tplvars['theme']['theme_folder'];
$html .= <<<EOF

			
EOF;
} else {
$html .= <<<EOF

			
EOF;
$html .= ($tpl->check_allowed_method('form','get_textbox')?$tplvars['form']->get_textbox('folders['.$tplvars['theme']['id'].']',$tplvars['theme']['theme_folder'],20,20):'');
$html .= <<<EOF

			
EOF;
}
$html .= <<<EOF

			</td>
			<td class="hlCol" align="center">
			<a href="
EOF;
$html .= $tplvars['theme']['edit_url'];
$html .= <<<EOF
">
			<img src="
EOF;
$html .= $tplvars['gpath'];
$html .= <<<EOF
acp/images/edit.png" alt="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('edit'):'');
$html .= <<<EOF
" title="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('edit'):'');
$html .= <<<EOF
" />
			</a>
			</td>
			
EOF;
if((isset($tplvars['theme']['theme_folder']) && $tplvars['theme']['theme_folder'] == 'default')) {
$html .= <<<EOF

			<td class="hlCol" align="center">
			-
			<script type="text/javascript">rowHL.setRowDisabled(
EOF;
$html .= $tplvars['row'];
$html .= <<<EOF
);</script>
			</td>
			
EOF;
} else {
$html .= <<<EOF

			<td class="hlCol" align="center" onclick="rowHL.toggleRowSelected(
EOF;
$html .= $tplvars['row'];
$html .= <<<EOF
);">
			<input id="check_
EOF;
$html .= $tplvars['row'];
$html .= <<<EOF
" type="checkbox" name="delete[]" value="
EOF;
$html .= $tplvars['theme']['id'];
$html .= <<<EOF
" />
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
<table width="100%" cellpadding="0" cellspacing="0">
	<tr>
		<td width="40%" class="a_body">&nbsp;</td>
		<td width="20%" align="center" class="a_body">
		<input type="submit" value="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('save'):'');
$html .= <<<EOF
/
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('delete'):'');
$html .= <<<EOF
" />
		</td>
		<td width="40%" align="right" class="a_body">
		<a href="javascript:rowHL.toggleAllSelected();">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('invertmark'):'');
$html .= <<<EOF
</a>
		</td>
	</tr>
</table>
</form>

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