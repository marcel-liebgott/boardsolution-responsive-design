<?php
function FWS_TPL_acp_templates_forums_default_htm($tpl,$number) {
$locale = FWS_Props::get()->locale();
$tplvars = $tpl->get_variables('forums_default.htm',$number);

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


<div class="a_block">
	<div class="a_menubar">
		<a href="
EOF;
$html .= ($tpl->check_allowed_method('gurl','simple_acp_url')?$tplvars['gurl']->simple_acp_url(0,'&amp;action=edit'):'');
$html .= <<<EOF
">
		<img src="
EOF;
$html .= $tplvars['gpath'];
$html .= <<<EOF
acp/images/plus.png" alt="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('create_new_forum'):'');
$html .= <<<EOF
" />
		
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('create_new_forum'):'');
$html .= <<<EOF

		</a>
		<a href="
EOF;
$html .= $tplvars['correct_sort_url'];
$html .= <<<EOF
">
		<img src="
EOF;
$html .= $tplvars['gpath'];
$html .= <<<EOF
acp/images/accept.png" alt="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('forum_correct_sort'):'');
$html .= <<<EOF
" />
		
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('forum_correct_sort'):'');
$html .= <<<EOF

		</a>
	</div>
</div>

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
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('acpmod_forums'):'');
$html .= <<<EOF
</h1>
	<table class="a_table" cellpadding="2" cellspacing="1">
		<tr>
			<td width="38%" class="a_coldesc">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('forum_name'):'');
$html .= <<<EOF
</td>
			<td width="40%" class="a_coldesc" align="center">
			<span style="font-size: 9px;">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('thread'):'');
$html .= <<<EOF
 | 
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('poll'):'');
$html .= <<<EOF
 | 
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('event'):'');
$html .= <<<EOF
 | 
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('answer'):'');
$html .= <<<EOF
 | 
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('intern'):'');
$html .= <<<EOF
</span>
			</td>
			<td width="12%" class="a_coldesc" align="center">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('sort'):'');
$html .= <<<EOF
</td>
			<td width="5%" class="a_coldesc" align="center">&nbsp;</td>
			<td width="5%" class="a_coldesc" align="center">&nbsp;</td>
		</tr>
		
EOF;
if((count($tplvars['forums']) == 0)) {
$html .= <<<EOF

		<tr>
			<td class="a_main" align="center" colspan="5">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('no_categories_found'):'');
$html .= <<<EOF
</td>
		</tr>
		
EOF;
}
$html .= <<<EOF

		
EOF;
$forums_c = -1;
foreach($tplvars['forums'] as $tplvars['row'] => $tplvars['forum']) {
$forums_c++;

$html .= <<<EOF

		
EOF;
if((isset($tplvars['forum']['show_separator']) && $tplvars['forum']['show_separator'])) {
$html .= <<<EOF

		<tr>
			<td colspan="5" class="a_coldesc_sep">&nbsp;</td>
		</tr>
		
EOF;
}
$html .= <<<EOF

		<tr id="row_
EOF;
$html .= $tplvars['row'];
$html .= <<<EOF
" class="hlRow">
			<td class="hlCol" style="padding: 2px;" valign="middle">
			<table width="100%" cellpadding="0" cellspacing="0">
				<tr>
					
EOF;
$forum_path_images_c = -1;
foreach($tplvars['forum']['path_images'] as $tplvars['pimage']) {
$forum_path_images_c++;

$html .= <<<EOF

					<td width="25" height="10" valign="top" class="hlCol">
EOF;
$html .= $tplvars['pimage'];
$html .= <<<EOF
</td>
					
EOF;
}
$html .= <<<EOF

					<td style="padding-left: 5px;" valign="top" class="hlCol">
					<img style="margin-bottom: 5px;" title="
EOF;
$html .= $tplvars['forum']['forum_type_title'];
$html .= <<<EOF
"
							src="
EOF;
$html .= $tplvars['gpath'];
$html .= <<<EOF
acp/images/forums/
EOF;
$html .= $tplvars['forum']['forum_type'];
$html .= <<<EOF
.gif" alt="
EOF;
$html .= $tplvars['forum']['forum_type_title'];
$html .= <<<EOF
" />
					<span style="font-size: 10pt;">
EOF;
$html .= $tplvars['forum']['forum_name'];
$html .= <<<EOF
</span>
					</td>
				</tr>
			</table>
				</td>
				<td class="hlCol" align="center">
				<table width="100%" cellpadding="1" cellspacing="0">
					<tr>
						<td width="20%" class="hlCol" style="border-right: 1px solid;" align="center">
						
EOF;
if((isset($tplvars['forum']['permissions']['topic']) && $tplvars['forum']['permissions']['topic'] != '')) {
$html .= <<<EOF

EOF;
$html .= $tplvars['forum']['permissions']['topic'];
$html .= <<<EOF

EOF;
} else {
$html .= <<<EOF
-
EOF;
}
$html .= <<<EOF

						</td>
						<td width="20%" class="hlCol" style="border-right: 1px solid;" align="center">
						
EOF;
if((isset($tplvars['forum']['permissions']['poll']) && $tplvars['forum']['permissions']['poll'] != '')) {
$html .= <<<EOF

EOF;
$html .= $tplvars['forum']['permissions']['poll'];
$html .= <<<EOF

EOF;
} else {
$html .= <<<EOF
-
EOF;
}
$html .= <<<EOF

						</td>
						<td width="20%" class="hlCol" style="border-right: 1px solid;" align="center">
						
EOF;
if((isset($tplvars['forum']['permissions']['event']) && $tplvars['forum']['permissions']['event'] != '')) {
$html .= <<<EOF

EOF;
$html .= $tplvars['forum']['permissions']['event'];
$html .= <<<EOF

EOF;
} else {
$html .= <<<EOF
-
EOF;
}
$html .= <<<EOF

						</td>
						<td width="20%" class="hlCol" style="border-right: 1px solid;" align="center">
						
EOF;
if((isset($tplvars['forum']['permissions']['answer']) && $tplvars['forum']['permissions']['answer'] != '')) {
$html .= <<<EOF

EOF;
$html .= $tplvars['forum']['permissions']['answer'];
$html .= <<<EOF

EOF;
} else {
$html .= <<<EOF
-
EOF;
}
$html .= <<<EOF

						</td>
						<td width="20%" class="hlCol" align="center">
						
EOF;
if((isset($tplvars['forum']['permissions']['intern']) && $tplvars['forum']['permissions']['intern'] != '')) {
$html .= <<<EOF

EOF;
$html .= $tplvars['forum']['permissions']['intern'];
$html .= <<<EOF

EOF;
} else {
$html .= <<<EOF
-
EOF;
}
$html .= <<<EOF

						</td>
					</tr>
				</table>
				</td>
			<td class="hlCol" align="center">
			(
EOF;
$html .= $tplvars['forum']['sortierung'];
$html .= <<<EOF
)

			
EOF;
if((isset($tplvars['forum']['up_index']) && $tplvars['forum']['up_index'] != -1)) {
$html .= <<<EOF

			<a href="
EOF;
$html .= $tplvars['forum']['switch_up_url'];
$html .= <<<EOF
"><img src="
EOF;
$html .= $tplvars['gpath'];
$html .= <<<EOF
acp/images/asc.gif" title="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('forum_up'):'');
$html .= <<<EOF
"
				 alt="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('forum_up'):'');
$html .= <<<EOF
" /></a>
			
EOF;
} else {
$html .= <<<EOF

			<img src="
EOF;
$html .= $tplvars['gpath'];
$html .= <<<EOF
acp/images/up_disabled.gif" title="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('notavailable'):'');
$html .= <<<EOF
" alt="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('notavailable'):'');
$html .= <<<EOF
" />
			
EOF;
}
$html .= <<<EOF


			
EOF;
if((isset($tplvars['forum']['down_index']) && $tplvars['forum']['down_index'] != -1)) {
$html .= <<<EOF

			<a href="
EOF;
$html .= $tplvars['forum']['switch_down_url'];
$html .= <<<EOF
"><img src="
EOF;
$html .= $tplvars['gpath'];
$html .= <<<EOF
acp/images/desc.gif" title="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('forum_down'):'');
$html .= <<<EOF
"
				 alt="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('forum_down'):'');
$html .= <<<EOF
" /></a>
			
EOF;
} else {
$html .= <<<EOF

			<img src="
EOF;
$html .= $tplvars['gpath'];
$html .= <<<EOF
acp/images/down_disabled.gif" title="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('notavailable'):'');
$html .= <<<EOF
" alt="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('notavailable'):'');
$html .= <<<EOF
" />
			
EOF;
}
$html .= <<<EOF

			</td>
			<td class="hlCol" align="center">
			<a href="
EOF;
$html .= $tplvars['forum']['options_url'];
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
$html .= $tplvars['forum']['fid'];
$html .= <<<EOF
" />
			</td>
		</tr>
		
EOF;
}
$html .= <<<EOF

	</table>
</div>
<table width="100%" cellpadding="0" cellspacing="0">
	<tr>
		<td width="35%" class="a_body">&nbsp;</td>
		<td width="30%" class="a_body" align="center">
		
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('marked'):'');
$html .= <<<EOF
:
		<select name="action_type">
			<option value="">&ndash; 
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('no_action'):'');
$html .= <<<EOF
 &ndash;</option>
			<option value="delete">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('delete'):'');
$html .= <<<EOF
</option>
			<option value="empty">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('empty_forum'):'');
$html .= <<<EOF
</option>
		</select>
		<input type="submit" value="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('submit'):'');
$html .= <<<EOF
" /></td>
		<td width="35%" class="a_body" align="right">
		<a href="javascript:rowHL.toggleAllSelected();">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('invertmark'):'');
$html .= <<<EOF
</a>
		</td>
	</tr>
</table>
</form>

<p class="a_block_pad"><u>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('shortcuts'):'');
$html .= <<<EOF
</u>:<br />
	
EOF;
$shortcuts_c = -1;
foreach($tplvars['shortcuts'] as $tplvars['shortcut'] => $tplvars['groupname']) {
$shortcuts_c++;

$html .= <<<EOF

	<b>
EOF;
$html .= $tplvars['groupname'];
$html .= <<<EOF
</b> = 
EOF;
$html .= $tplvars['shortcut'];
$html .= <<<EOF
<br />
	
EOF;
}
$html .= <<<EOF

</p>


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