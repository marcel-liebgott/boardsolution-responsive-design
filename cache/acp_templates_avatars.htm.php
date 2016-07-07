<?php
function FWS_TPL_acp_templates_avatars_htm($tpl,$number) {
$locale = FWS_Props::get()->locale();
$tplvars = $tpl->get_variables('avatars.htm',$number);

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
	<div>
		
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('import_avatars_desc'):'');
$html .= <<<EOF

	</div>
	<div class="a_menubar a_pad">
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
$html .= ($tpl->check_allowed_method('gurl','simple_acp_url')?$tplvars['gurl']->simple_acp_url(0,'&amp;at='.$tplvars['action_type_import']):'');
$html .= <<<EOF
">
			<img src="
EOF;
$html .= $tplvars['gpath'];
$html .= <<<EOF
acp/images/plus.png" alt="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('import_avatars'):'');
$html .= <<<EOF
" />
			
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('import_avatars'):'');
$html .= <<<EOF

			</a>
		</div>
	</div>
</div>
</form>

<form name="avatars" method="post" action="
EOF;
$html .= ($tpl->check_allowed_method('gurl','simple_acp_url')?$tplvars['gurl']->simple_acp_url():'');
$html .= <<<EOF
">
<div class="a_border a_pad">
	<h1 class="a_topic">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('avatars'):'');
$html .= <<<EOF
</h1>
	<table class="a_table" cellpadding="2" cellspacing="1">
		<tr>
			<td width="30%" class="a_coldesc">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('preview'):'');
$html .= <<<EOF
</td>
			<td width="30%" class="a_coldesc">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('filename'):'');
$html .= <<<EOF
</td>
			<td width="35%" class="a_coldesc" align="center">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('owner'):'');
$html .= <<<EOF
</td>
			<td width="5%" class="a_coldesc" align="center">&nbsp;</td>
		</tr>
		
EOF;
if((count($tplvars['avatars']) == 0)) {
$html .= <<<EOF

		<tr>
			<td colspan="4" class="a_main" align="center">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('no_avatars_found'):'');
$html .= <<<EOF
</td>
		</tr>
		
EOF;
}
$html .= <<<EOF

		
EOF;
$avatars_c = -1;
foreach($tplvars['avatars'] as $tplvars['row'] => $tplvars['avatar']) {
$avatars_c++;

$html .= <<<EOF

		<tr id="row_
EOF;
$html .= $tplvars['row'];
$html .= <<<EOF
" class="hlRow">
			<td class="hlCol">
			<img src="
EOF;
$html .= $tplvars['gpath'];
$html .= <<<EOF
images/avatars/
EOF;
$html .= $tplvars['avatar']['av_pfad'];
$html .= <<<EOF
" alt="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('preview'):'');
$html .= <<<EOF
" height="40" />
			</td>
			<td class="hlCol">
EOF;
$html .= $tplvars['avatar']['av_pfad'];
$html .= <<<EOF
</td>
			<td class="hlCol" align="center">
EOF;
$html .= $tplvars['avatar']['owner'];
$html .= <<<EOF
</td>
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
$html .= $tplvars['avatar']['id'];
$html .= <<<EOF
" />
			</td>
		</tr>
		
EOF;
}
$html .= <<<EOF

	</table>
</div>
<table width="100%" cellspacing="0" cellpadding="0">
	<tr>
		<td width="40%" class="a_body">&nbsp;</td>
		<td width="20%" align="center" class="a_body">
		
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('marked'):'');
$html .= <<<EOF
: <input type="submit" value="
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

<div class="a_pad">
	
EOF;
$html .= $tpl->parse_template("inc_pagination.htm",false);
$html .= <<<EOF

</div>

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