<?php
function FWS_TPL_themes_mliebgott_templates_manage_posts_htm($tpl,$number) {
$locale = FWS_Props::get()->locale();
$tplvars = $tpl->get_variables('manage_posts.htm',$number);

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


<script type="text/javascript">
<!--
var firstIsRealFirst = 
EOF;
$html .= $tplvars['is_first_post'];
$html .= <<<EOF
;

function switchToOperation(op)
{
	var operations = new Array('delete','split','merge');
	for(var i = 0;i < operations.length;i++)
	{
		var div = document.getElementById('op_' + operations[i]);
		var link = document.getElementById('link_' + operations[i]);
		if(operations[i] == op)
		{
			if(div != null)
				div.style.display = 'block';
			link.style.fontWeight = 'bold';
		}
		else
		{
			if(div != null)
				div.style.display = 'none';
			link.style.fontWeight = 'normal';
		}
	}
	
	document.getElementById('operation').value = op;
	
	var firstPost = document.getElementById('post_0');
	var at = document.getElementById('action_type');
	switch(op)
	{
		case 'delete':
			if(firstPost && firstIsRealFirst)
				firstPost.disabled = true;
			at.value = '
EOF;
$html .= $tplvars['at_delete'];
$html .= <<<EOF
';
			break;
		case 'merge':
			if(firstPost)
				firstPost.disabled = false;
			at.value = '
EOF;
$html .= $tplvars['at_merge'];
$html .= <<<EOF
';
			break;
		case 'split':
			if(firstPost)
				firstPost.disabled = false;
			at.value = '
EOF;
$html .= $tplvars['at_split'];
$html .= <<<EOF
';
			break;
	}
}

function changeSelection(tdid,cbid)
{
	var cb = document.getElementById(cbid);
	if(!cb.disabled)
	{
		var td = document.getElementById(tdid);
		if(cb.checked)
			cb.checked = false;
		else
			cb.checked = true;
	}
}
//-->
</script>

<form method="post" action="
EOF;
$html .= $tplvars['target_url'];
$html .= <<<EOF
">
<input id="operation" type="hidden" name="mode" value="
EOF;
$html .= $tplvars['operation'];
$html .= <<<EOF
" />
<input id="action_type" type="hidden" name="action_type" value="
EOF;
$html .= $tplvars['action_type'];
$html .= <<<EOF
" />
<div class="bs_border">
	<h1 class="bs_topic">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('manage_posts'):'');
$html .= <<<EOF
</h1>
	<fieldset class="bs_form">
		<dl>
			<dt>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('operation'):'');
$html .= <<<EOF
:</dt>
			<dd>
				<ul>
					
EOF;
if((isset($tplvars['show_delete']) && $tplvars['show_delete'])) {
$html .= <<<EOF

					<li><a id="link_delete" 
EOF;
$html .= $tplvars['delete_bold'];
$html .= <<<EOF
  href="
EOF;
$html .= $tplvars['delete_posts_url'];
$html .= <<<EOF
"
							onclick="switchToOperation('delete'); return false;">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('delete_posts'):'');
$html .= <<<EOF
</a></li>
					
EOF;
}
$html .= <<<EOF

					
EOF;
if((isset($tplvars['show_move']) && $tplvars['show_move'])) {
$html .= <<<EOF

					<li><a id="link_split" 
EOF;
$html .= $tplvars['split_bold'];
$html .= <<<EOF
  href="
EOF;
$html .= $tplvars['split_posts_url'];
$html .= <<<EOF
"
							onclick="switchToOperation('split'); return false;">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('split_posts'):'');
$html .= <<<EOF
</a></li>
					<li><a id="link_merge" 
EOF;
$html .= $tplvars['merge_bold'];
$html .= <<<EOF
  href="
EOF;
$html .= $tplvars['merge_posts_url'];
$html .= <<<EOF
"
							onclick="switchToOperation('merge'); return false;">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('merge_posts'):'');
$html .= <<<EOF
</a></li>
					
EOF;
}
$html .= <<<EOF

				</ul>
			</dd>
		</dl>
		<div id="op_split" style="display: 
EOF;
$html .= $tplvars['display_split'];
$html .= <<<EOF
;">
			<dl>
				<dt>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('split_type'):'');
$html .= <<<EOF
:</dt>
				<dd>
					
EOF;
$html .= ($tpl->check_allowed_method('form','get_combobox')?$tplvars['form']->get_combobox('split_type',$tplvars['merge_split_options'],'selected',false):'');
$html .= <<<EOF

					<div class="bs_desc">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('split_type_desc'):'');
$html .= <<<EOF
</div>
				</dd>
			</dl>
			<dl>
				<dt>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('threadname'):'');
$html .= <<<EOF
:</dt>
				<dd>
					
EOF;
$html .= ($tpl->check_allowed_method('form','get_textbox')?$tplvars['form']->get_textbox('new_topic_name','',40,200):'');
$html .= <<<EOF

					<div class="bs_desc">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('split_topic_name_desc'):'');
$html .= <<<EOF
</div>
				</dd>
			</dl>
			<dl>
				<dt>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('symbol'):'');
$html .= <<<EOF
:</dt>
				<dd>
					
EOF;
$html .= $tplvars['symbols'];
$html .= <<<EOF

					<div class="bs_desc">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('split_symbol_desc'):'');
$html .= <<<EOF
</div>
				</dd>
			</dl>
			<dl>
				<dt>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('forum'):'');
$html .= <<<EOF
:</dt>
				<dd>
					
EOF;
$html .= $tplvars['forum_combo'];
$html .= <<<EOF

					<div class="bs_desc">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('split_forum_desc'):'');
$html .= <<<EOF
</div>
				</dd>
			</dl>
		</div>
		<div id="op_merge" style="display: 
EOF;
$html .= $tplvars['display_merge'];
$html .= <<<EOF
;">
			<dl>
				<dt>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('merge_type'):'');
$html .= <<<EOF
:</dt>
				<dd>
					
EOF;
$html .= ($tpl->check_allowed_method('form','get_combobox')?$tplvars['form']->get_combobox('merge_type',$tplvars['merge_split_options'],'selected',false):'');
$html .= <<<EOF

					<div class="bs_desc">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('merge_type_desc'):'');
$html .= <<<EOF
</div>
				</dd>
			</dl>
			<dl>
				<dt>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('topic_id'):'');
$html .= <<<EOF
:</dt>
				<dd>
EOF;
$html .= ($tpl->check_allowed_method('form','get_textbox')?$tplvars['form']->get_textbox('topic_id','',10):'');
$html .= <<<EOF
</dd>
			</dl>
		</div>
	</fieldset>
</div>	
<center>
	<input type="button" value="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('back'):'');
$html .= <<<EOF
" onclick="document.location.href = '
EOF;
$html .= $tplvars['back_url'];
$html .= <<<EOF
';" />
	<input type="submit" name="submit" value="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('submit'):'');
$html .= <<<EOF
" />
</center>

<div class="bs_border bs_padtop">
	<h1 class="bs_topic">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('posts'):'');
$html .= <<<EOF
</h1>
	<div class="bs_coldesc" align="center">
		<div style="float: right;"><a href="javascript:invertSelection('post_',1,false);">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('invertmark'):'');
$html .= <<<EOF
</a></div>
		
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('keyword'):'');
$html .= <<<EOF
: <span style="font-weight: normal;"><input type="text" name="keyword" value="
EOF;
$html .= $tplvars['keyword'];
$html .= <<<EOF
" size="15" /></span>&nbsp;,&nbsp;
		
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('time_periode'):'');
$html .= <<<EOF
: <span style="font-weight: normal;">
EOF;
$html .= $tplvars['start_date'];
$html .= <<<EOF
 
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('to'):'');
$html .= <<<EOF
 
EOF;
$html .= $tplvars['end_date'];
$html .= <<<EOF

		<input type="submit" name="change_display" value="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('refresh'):'');
$html .= <<<EOF
" /></span>
	</div>
	<table class="bs_table" cellpadding="0" cellspacing="1">
	
EOF;
$posts_c = -1;
foreach($tplvars['posts'] as $tplvars['index'] => $tplvars['post']) {
$posts_c++;

$html .= <<<EOF

		<tr>
			<td width="25%" class="bs_left" valign="top">
			<span id="user_
EOF;
$html .= $tplvars['post']['post_id'];
$html .= <<<EOF
">
EOF;
$html .= $tplvars['post']['user_name'];
$html .= <<<EOF
</span> , <span style="font-weight: normal;">
EOF;
$html .= $tplvars['post']['date'];
$html .= <<<EOF
</span>
			</td>
			<td width="70%" class="bs_posts_main_1" valign="top">
			<div style="overflow: auto; max-height: 300px;">
EOF;
$html .= $tplvars['post']['text'];
$html .= <<<EOF
</div>
			</td>
			<td id="td_
EOF;
$html .= $tplvars['index'];
$html .= <<<EOF
" width="5%" class="bs_main" align="center" onclick="changeSelection('td_
EOF;
$html .= $tplvars['index'];
$html .= <<<EOF
','post_
EOF;
$html .= $tplvars['index'];
$html .= <<<EOF
');">
			<input id="post_
EOF;
$html .= $tplvars['index'];
$html .= <<<EOF
" onclick="changeSelection('td_
EOF;
$html .= $tplvars['index'];
$html .= <<<EOF
','post_
EOF;
$html .= $tplvars['index'];
$html .= <<<EOF
');" type="checkbox" name="selected_posts[]" 
EOF;
$html .= $tplvars['post']['selected'];
$html .= <<<EOF
 value="
EOF;
$html .= $tplvars['post']['post_id'];
$html .= <<<EOF
" />
			</td>
		</tr>
	
EOF;
}
$html .= <<<EOF

	</table>
</div>
</form>

<script type="text/javascript">
<!--
var op = document.getElementById('operation');
if(op.value == 'delete' && firstIsRealFirst)
	document.getElementById('post_0').disabled = true;
//-->
</script>


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