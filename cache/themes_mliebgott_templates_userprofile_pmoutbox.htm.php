<?php
function FWS_TPL_themes_mliebgott_templates_userprofile_pmoutbox_htm($tpl,$number) {
$locale = FWS_Props::get()->locale();
$tplvars = $tpl->get_variables('userprofile_pmoutbox.htm',$number);

$html = "";
$html .=<<<EOF

EOF;
if((isset($tplvars['mode']) && $tplvars['mode'] != 'overview')) {
$html .= <<<EOF


EOF;
$html .= $tpl->parse_template("inc_delete_message.htm",false);
$html .= <<<EOF


EOF;
}
$html .= <<<EOF


<form method="post" action="
EOF;
$html .= $tplvars['outbox_url'];
$html .= <<<EOF
">
<div class="bs_border">
	<h1 class="bs_topic">
EOF;
$html .= $tplvars['title'];
$html .= <<<EOF

EOF;
if((isset($tplvars['outbox_num']) && $tplvars['outbox_num'] != '')) {
$html .= <<<EOF
 (
EOF;
$html .= $tplvars['outbox_num'];
$html .= <<<EOF
)
EOF;
}
$html .= <<<EOF
</h1>
	<table class="bs_table" cellpadding="2" cellspacing="1">
		<tr>
			<th width="5%" class="bs_coldesc">&nbsp;</th>
			<th width="43%" class="bs_coldesc" align="left">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('subject'):'');
$html .= <<<EOF
</th>
			<th width="20%" class="bs_coldesc" align="left">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('receiver'):'');
$html .= <<<EOF
</th>
			<th width="32%" class="bs_coldesc">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('date'):'');
$html .= <<<EOF
</th>
		</tr>
		
EOF;
if((isset($tplvars['num']) && $tplvars['num'] == 0)) {
$html .= <<<EOF

		<tr>
			<td colspan="5" class="bs_main" align="center">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('no_pms_found'):'');
$html .= <<<EOF
</td>
		</tr>
		
EOF;
}
$html .= <<<EOF

		
EOF;
$pms_c = -1;
foreach($tplvars['pms'] as $tplvars['index'] => $tplvars['pm']) {
$pms_c++;

$html .= <<<EOF

		<tr>
			<td class="bs_main" align="center"
					onclick="var cb = document.getElementById('outbox_
EOF;
$html .= $tplvars['index'];
$html .= <<<EOF
'); cb.checked = cb.checked ? false : true;">
			<input type="checkbox" id="outbox_
EOF;
$html .= $tplvars['index'];
$html .= <<<EOF
" name="delete[]" value="
EOF;
$html .= $tplvars['pm']['pm_id'];
$html .= <<<EOF
"
						 onclick="this.checked = this.checked ? false : true;" />
			</td>
			<td class="bs_main">
			<img title="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('read_pm'):'');
$html .= <<<EOF
" alt="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('read_pm'):'');
$html .= <<<EOF
" src="
EOF;
$html .= $tplvars['pm']['status_picture'];
$html .= <<<EOF
" />
			
EOF;
$html .= $tplvars['pm']['prefix'];
$html .= <<<EOF
<a title="
EOF;
$html .= $tplvars['pm']['complete_title'];
$html .= <<<EOF
" href="
EOF;
$html .= $tplvars['pm']['details_link'];
$html .= <<<EOF
">
EOF;
$html .= $tplvars['pm']['pm_title'];
$html .= <<<EOF
</a>
			</td>
			<td class="bs_main">
EOF;
$html .= $tplvars['pm']['sender'];
$html .= <<<EOF
</td>
			<td class="bs_main" align="center">
EOF;
$html .= $tplvars['pm']['date'];
$html .= <<<EOF
</td>
		</tr>
		
EOF;
}
$html .= <<<EOF

	</table>
</div>

<div style="padding-left: 25px;">
	<img src="
EOF;
$html .= ($tpl->check_allowed_method('guser','get_theme_item_path')?$tplvars['guser']->get_theme_item_path('images/thread_option.gif'):'');
$html .= <<<EOF
" alt="" />
	<select name="operation">
		<option value="delete">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('delete'):'');
$html .= <<<EOF
</option>
	</select>
	<input type="submit" value="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('submit'):'');
$html .= <<<EOF
" />
	&nbsp;|&nbsp;<a href="Javascript:invertSelection('outbox_')">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('invertmark'):'');
$html .= <<<EOF
</a>
</div>
</form>

<div class="bs_padtop_big">

EOF;
$html .= $tpl->parse_template("inc_pagination.htm",false);
$html .= <<<EOF

</div>
EOF;
return $html;
}
?>