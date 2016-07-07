<?php
function FWS_TPL_themes_mliebgott_templates_userprofile_pminbox_htm($tpl,$number) {
$locale = FWS_Props::get()->locale();
$tplvars = $tpl->get_variables('userprofile_pminbox.htm',$number);

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



EOF;
$html .= $tpl->parse_template("inc_userprofile_pmjs.htm",false);
$html .= <<<EOF


<form id="pm_form" method="post" action="
EOF;
$html .= $tplvars['inbox_url'];
$html .= <<<EOF
">
<div class="bs_border">
	<h1 class="bs_topic">
EOF;
$html .= $tplvars['title'];
$html .= <<<EOF

EOF;
if((isset($tplvars['inbox_num']) && $tplvars['inbox_num'] != '')) {
$html .= <<<EOF
 (
EOF;
$html .= $tplvars['inbox_num'];
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
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('sender'):'');
$html .= <<<EOF
</th>
			<th width="20%" class="bs_coldesc">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('date'):'');
$html .= <<<EOF
</th>
			<th width="12%" class="bs_coldesc">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('answer'):'');
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
				onclick="var cb = document.getElementById('inbox_
EOF;
$html .= $tplvars['index'];
$html .= <<<EOF
'); cb.checked = cb.checked ? false : true;">
			<input type="checkbox" id="inbox_
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
$html .= $tplvars['pm']['status_title'];
$html .= <<<EOF
" alt="
EOF;
$html .= $tplvars['pm']['status_title'];
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
			<td class="bs_main" align="center">
EOF;
$html .= $tplvars['pm']['reply'];
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
	<select id="operation" name="operation">
		<option value="delete">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('delete'):'');
$html .= <<<EOF
</option>
		<option value="mark_read">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('mark_pms_read'):'');
$html .= <<<EOF
</option>
		<option value="mark_unread">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('mark_pms_unread'):'');
$html .= <<<EOF
</option>
	</select>
	<input id="inbox_submit_btn" type="submit" onclick="submitForm();" value="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('submit'):'');
$html .= <<<EOF
" />
	&nbsp;|&nbsp;<a href="Javascript:invertSelection('inbox_')">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('invertmark'):'');
$html .= <<<EOF
</a>
</div>
</form>

<script type="text/javascript">
<!--
if(!Browser.isIE)
	document.getElementById('inbox_submit_btn').type = 'button';
//-->
</script>


EOF;
if((isset($tplvars['mode']) && $tplvars['mode'] != "overview")) {
$html .= <<<EOF


EOF;
$html .= $tpl->parse_template("inc_userprofile_pmbottom.htm",false);
$html .= <<<EOF


EOF;
}
$html .= <<<EOF


<div class="bs_padtop_big">

EOF;
$html .= $tpl->parse_template("inc_pagination.htm",false);
$html .= <<<EOF

</div>
EOF;
return $html;
}
?>