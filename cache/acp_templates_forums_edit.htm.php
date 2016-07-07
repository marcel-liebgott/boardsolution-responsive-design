<?php
function FWS_TPL_acp_templates_forums_edit_htm($tpl,$number) {
$locale = FWS_Props::get()->locale();
$tplvars = $tpl->get_variables('forums_edit.htm',$number);

$html = "";
$html .=<<<EOF

EOF;
$html .= $tpl->parse_template("inc_header.htm",false);
$html .= <<<EOF



EOF;
if((isset($tplvars['module_error']) && $tplvars['module_error'] == false)) {
$html .= <<<EOF

<script type="text/javascript" src="
EOF;
$html .= ($tpl->check_allowed_method('gjs','get_file')?$tplvars['gjs']->get_file('acp/src/user_selection.js'):'');
$html .= <<<EOF
"></script>
<script type="text/javascript">
<!--
function toggleForumType()
{
	var cb = FWS_getElement('forum_type');
	var ids = new Array('rowclosed','rowdesc','rowexp','additional','htmlallowed','rightsexplain');
	for(var i = 0;i < ids.length;i++)
	{
		if(cb.value == 'contains_cats')
			FWS_hideElement(ids[i]);
		else
			FWS_showElement(ids[i]);
	}
}
//-->
</script>

<form id="formular" method="post" action="
EOF;
$html .= $tplvars['target_url'];
$html .= <<<EOF
">
<input type="hidden" name="action_type" value="
EOF;
$html .= $tplvars['action_type'];
$html .= <<<EOF
" />
<input type="hidden" id="selectedUsers" name="selectedUsers" value="" />
<div class="a_border">
	<h1 class="a_topic">
EOF;
$html .= $tplvars['form_title'];
$html .= <<<EOF
</h1>
	<fieldset class="a_form">
		<dl>
			<dt>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('name'):'');
$html .= <<<EOF
:</dt>
			<dd>
EOF;
$html .= ($tpl->check_allowed_method('form','get_textbox')?$tplvars['form']->get_textbox('forum_name',$tplvars['default']['forum_name'],30,100):'');
$html .= <<<EOF
</dd>
		</dl>
		<dl>
			<dt>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('parent_forum'):'');
$html .= <<<EOF
:</dt>
			<dd>
EOF;
$html .= $tplvars['parent_combo'];
$html .= <<<EOF
</dd>
		</dl>
		<dl>
			<dt>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('forum_type'):'');
$html .= <<<EOF
:</dt>
			<dd>
EOF;
$html .= $tplvars['forum_type_combo'];
$html .= <<<EOF
</dd>
		</dl>
		<dl id="rowclosed">
			<dt>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('conf_forum_is_closed'):'');
$html .= <<<EOF
:</dt>
			<dd>
				
EOF;
$html .= ($tpl->check_allowed_method('form','get_radio_yesno')?$tplvars['form']->get_radio_yesno('forum_is_closed',$tplvars['default']['forum_is_closed']):'');
$html .= <<<EOF

				<div class="a_desc">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('conf_forum_is_closed_desc'):'');
$html .= <<<EOF
</div>
			</dd>
		</dl>
		<dl id="rowdesc">
			<dt>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('description'):'');
$html .= <<<EOF
: *</dt>
			<dd>
EOF;
$html .= ($tpl->check_allowed_method('form','get_textarea')?$tplvars['form']->get_textarea('description',$tplvars['default']['description'],'90%','100px'):'');
$html .= <<<EOF
</dd>
		</dl>
		<dl id="rowexp">
			<dt>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('increase_experience'):'');
$html .= <<<EOF
:</dt>
			<dd>
				
EOF;
$html .= ($tpl->check_allowed_method('form','get_radio_yesno')?$tplvars['form']->get_radio_yesno('increase_experience',$tplvars['default']['increase_experience']):'');
$html .= <<<EOF

				<div class="a_desc">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('increase_experience_desc'):'');
$html .= <<<EOF
</div>
			</dd>
		</dl>
		<dl>
			<dt>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('display_subforums'):'');
$html .= <<<EOF
:</dt>
			<dd>
				
EOF;
$html .= ($tpl->check_allowed_method('form','get_radio_yesno')?$tplvars['form']->get_radio_yesno('display_subforums',$tplvars['default']['display_subforums']):'');
$html .= <<<EOF

				<div class="a_desc">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('display_subforums_desc'):'');
$html .= <<<EOF
</div>
			</dd>
		</dl>
	</fieldset>
</div>
<center>
	<input type="button" value="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('save'):'');
$html .= <<<EOF
"
		onclick="transferSelectedUser('user_intern','selectedUsers','formular');" />
	<input type="button" value="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('back'):'');
$html .= <<<EOF
"
		onclick="document.location.href = '
EOF;
$html .= ($tpl->check_allowed_method('gurl','simple_acp_url')?$tplvars['gurl']->simple_acp_url():'');
$html .= <<<EOF
';" />
</center>

<p class="a_block_pad" id="htmlallowed">* = 
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('html_allowed'):'');
$html .= <<<EOF
</p>

<p class="a_block a_pad_double" id="rightsexplain">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('forum_rights_explain'):'');
$html .= <<<EOF
</p>

<div id="additional">
	<div class="a_border a_pad">
		<h1 class="a_topic">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('forum_rights'):'');
$html .= <<<EOF
</h1>
		<fieldset class="a_form">
			<dl>
				<dt>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('permission_thread'):'');
$html .= <<<EOF
:</dt>
				<dd>
					<table width="100%" cellpadding="0" cellspacing="0">
						
EOF;
$permission_thread_c = -1;
foreach($tplvars['permission_thread'] as $tplvars['group']) {
$permission_thread_c++;

$html .= <<<EOF

						<tr>
							<td class="a_main" width="30%">
EOF;
$html .= $tplvars['group']['title'];
$html .= <<<EOF
:</td>
							<td class="a_main" width="70%">
EOF;
$html .= ($tpl->check_allowed_method('form','get_radio_yesno')?$tplvars['form']->get_radio_yesno('permission_thread['.$tplvars['group']['id'].']',$tplvars['group']['value']):'');
$html .= <<<EOF
</td>
						</tr>
						
EOF;
}
$html .= <<<EOF

					</table>
				</dd>
			</dl>
			<dl>
				<dt>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('permission_poll'):'');
$html .= <<<EOF
:</dt>
				<dd>
					<table width="100%" cellpadding="0" cellspacing="0">
						
EOF;
$permission_poll_c = -1;
foreach($tplvars['permission_poll'] as $tplvars['group']) {
$permission_poll_c++;

$html .= <<<EOF

						<tr>
							<td class="a_main" width="30%">
EOF;
$html .= $tplvars['group']['title'];
$html .= <<<EOF
:</td>
							<td class="a_main" width="70%">
EOF;
$html .= ($tpl->check_allowed_method('form','get_radio_yesno')?$tplvars['form']->get_radio_yesno('permission_poll['.$tplvars['group']['id'].']',$tplvars['group']['value']):'');
$html .= <<<EOF
</td>
						</tr>
						
EOF;
}
$html .= <<<EOF

					</table>
				</dd>
			</dl>
			<dl>
				<dt>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('permission_event'):'');
$html .= <<<EOF
:</dt>
				<dd>
					<table width="100%" cellpadding="0" cellspacing="0">
						
EOF;
$permission_event_c = -1;
foreach($tplvars['permission_event'] as $tplvars['group']) {
$permission_event_c++;

$html .= <<<EOF

						<tr>
							<td class="a_main" width="30%">
EOF;
$html .= $tplvars['group']['title'];
$html .= <<<EOF
:</td>
							<td class="a_main" width="70%">
EOF;
$html .= ($tpl->check_allowed_method('form','get_radio_yesno')?$tplvars['form']->get_radio_yesno('permission_event['.$tplvars['group']['id'].']',$tplvars['group']['value']):'');
$html .= <<<EOF
</td>
						</tr>
						
EOF;
}
$html .= <<<EOF

					</table>
				</dd>
			</dl>
			<dl>
				<dt>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('permission_post'):'');
$html .= <<<EOF
:</dt>
				<dd>
					<table width="100%" cellpadding="0" cellspacing="0">
						
EOF;
$permission_post_c = -1;
foreach($tplvars['permission_post'] as $tplvars['group']) {
$permission_post_c++;

$html .= <<<EOF

						<tr>
							<td class="a_main" width="30%">
EOF;
$html .= $tplvars['group']['title'];
$html .= <<<EOF
:</td>
							<td class="a_main" width="70%">
EOF;
$html .= ($tpl->check_allowed_method('form','get_radio_yesno')?$tplvars['form']->get_radio_yesno('permission_post['.$tplvars['group']['id'].']',$tplvars['group']['value']):'');
$html .= <<<EOF
</td>
						</tr>
						
EOF;
}
$html .= <<<EOF

					</table>
				</dd>
			</dl>
		</fieldset>
	</div>
	<center>
		<input type="button" value="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('save'):'');
$html .= <<<EOF
"
			onclick="transferSelectedUser('user_intern','selectedUsers','formular');" />
		<input type="button" value="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('back'):'');
$html .= <<<EOF
"
			onclick="document.location.href = '
EOF;
$html .= ($tpl->check_allowed_method('gurl','simple_acp_url')?$tplvars['gurl']->simple_acp_url():'');
$html .= <<<EOF
';" />
	</center>
</div>

<div class="a_border a_pad">
	<h1 class="a_topic">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('forum_intern_access'):'');
$html .= <<<EOF
</h1>
	<fieldset class="a_form">
		<dl>
			<dt>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('forum_is_intern'):'');
$html .= <<<EOF
:</dt>
			<dd>
				
EOF;
$html .= ($tpl->check_allowed_method('form','get_radio_yesno')?$tplvars['form']->get_radio_yesno('is_intern',$tplvars['default']['forum_is_intern']):'');
$html .= <<<EOF

				<div class="a_desc">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('forum_is_intern_desc'):'');
$html .= <<<EOF
</div>
			</dd>
		</dl>
		<dl>
			<dt>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('access'):'');
$html .= <<<EOF
:</dt>
			<dd>
				<table width="100%" cellpadding="2" cellspacing="0">
					<tr>
						<td class="a_main" width="60%" align="center"><u>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('user_groups'):'');
$html .= <<<EOF
</u></td>
						<td class="a_main" width="40%" colspan="2" align="center"><u>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('user'):'');
$html .= <<<EOF
</u></td>
					</tr>
					<tr>
						<td class="a_main" align="center" valign="top">
						<table width="100%" cellpadding="2" cellspacing="0">
							
EOF;
$usergroups_c = -1;
foreach($tplvars['usergroups'] as $tplvars['group']) {
$usergroups_c++;

$html .= <<<EOF

							<tr>
								<td class="a_main" align="left">
EOF;
$html .= $tplvars['group']['title'];
$html .= <<<EOF
:</td>
								<td class="a_main">
EOF;
$html .= ($tpl->check_allowed_method('form','get_radio_yesno')?$tplvars['form']->get_radio_yesno('group_access['.$tplvars['group']['id'].']',$tplvars['group']['value']):'');
$html .= <<<EOF
</td>
							</tr>
							
EOF;
}
$html .= <<<EOF

						</table>
						<br />
						<div class="a_desc" align="left">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('intern_forums_hint'):'');
$html .= <<<EOF
</div>
						</td>
						<td class="a_main" valign="top">
						
EOF;
$html .= $tplvars['user_combo'];
$html .= <<<EOF

						<br />
						<input style="width: 100%;" type="button" value="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('add_user'):'');
$html .= <<<EOF
" onclick="FWS_openDefaultPopup('
EOF;
$html .= $tplvars['search_url'];
$html .= <<<EOF
','UserSuche',800,700);" /><br />
						<input style="width: 100%;" type="button" value="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('remove_selected'):'');
$html .= <<<EOF
" onclick="removeMarkedUser('user_intern');" />
						</td>
					</tr>
				</table>
			</dd>
		</dl>
	</fieldset>
</div>
<center>
	<input type="button" value="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('save'):'');
$html .= <<<EOF
" onclick="transferSelectedUser('user_intern','selectedUsers','formular');" />
	<input type="button" value="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('back'):'');
$html .= <<<EOF
" onclick="document.location.href = '
EOF;
$html .= ($tpl->check_allowed_method('gurl','simple_acp_url')?$tplvars['gurl']->simple_acp_url():'');
$html .= <<<EOF
';" />
</center>
</form>

<script type="text/javascript">
<!--
toggleForumType();
//-->
</script>

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