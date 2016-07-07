<?php
function FWS_TPL_themes_default_templates_posts_htm($tpl,$number) {
$locale = FWS_Props::get()->locale();
$tplvars = $tpl->get_variables('posts.htm',$number);

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

<script type="text/javascript" src="
EOF;
$html .= ($tpl->check_allowed_method('gjs','get_file')?$tplvars['gjs']->get_file('src/quote.js'):'');
$html .= <<<EOF
"></script>


EOF;
if((isset($tplvars['display_reply']) && $tplvars['display_reply'])) {
$html .= <<<EOF

<div>
	<a id="reply_btn_1" class="bs_button_big" title="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('answer_desc'):'');
$html .= <<<EOF
" href="
EOF;
$html .= $tplvars['reply_url'];
$html .= <<<EOF
" onclick="return quote('
EOF;
$html .= $tplvars['quoteLink'];
$html .= <<<EOF
');">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('answer'):'');
$html .= <<<EOF
</a>
	<br style="clear: both;" />
</div>

EOF;
}
$html .= <<<EOF


<div class="bs_border bs_padtop">
	<div class="bs_topic">
		<table width="100%" cellpadding="0" cellspacing="0">
			<tr>
				<td align="left">
				<a href="javascript:scrollTo(0,50000);"><img src="
EOF;
$html .= ($tpl->check_allowed_method('guser','get_theme_item_path')?$tplvars['guser']->get_theme_item_path('images/tobottom.gif'):'');
$html .= <<<EOF
" alt="" /></a>
				<b>
EOF;
$html .= $tplvars['thread_type_ins'];
$html .= <<<EOF
: 
EOF;
$html .= $tplvars['threadname_ins'];
$html .= <<<EOF
</b>
				[
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('page'):'');
$html .= <<<EOF
 
EOF;
$html .= $tplvars['sasinsert'];
$html .= <<<EOF
]
				</td>
				<td align="right">
				
EOF;
if((isset($tplvars['enable_quick_search']) && $tplvars['enable_quick_search'])) {
$html .= <<<EOF

				<form method="post" action="
EOF;
$html .= ($tpl->check_allowed_method('gurl','simple_url')?$tplvars['gurl']->simple_url('search','&amp;$URL_MODE=topic&amp;$URL_TID='.$tplvars['tid']):'');
$html .= <<<EOF
">
				<label for="keywordtf">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('search_this_topic'):'');
$html .= <<<EOF
:</label>
				<input type="text" style="padding: 1px;" id="keywordtf" name="keyword" size="15" />
				<input type="submit" style="padding: 0px;" name="submit" value="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('go'):'');
$html .= <<<EOF
" />
				</form>
				
EOF;
} else {
$html .= <<<EOF

				&nbsp;
				
EOF;
}
$html .= <<<EOF

				</td>
			</tr>
		</table>
	</div>
	
EOF;
if((isset($tplvars['show_event']) && $tplvars['show_event'])) {
$html .= <<<EOF

	
EOF;
$html .= $tpl->parse_template("inc_event.htm",false);
$html .= <<<EOF

	
EOF;
}
$html .= <<<EOF

	
EOF;
if((isset($tplvars['show_poll']) && $tplvars['show_poll'])) {
$html .= <<<EOF

	
EOF;
$html .= $tpl->parse_template("inc_poll.htm",false);
$html .= <<<EOF

	
EOF;
}
$html .= <<<EOF

</div>
<br />


EOF;
if((count($tplvars['posts']) > 0)) {
$html .= <<<EOF

<div class="bs_border">
	
EOF;
$posts_c = -1;
foreach($tplvars['posts'] as $tplvars['post']) {
$posts_c++;

$html .= <<<EOF

	<a id="b_
EOF;
$html .= $tplvars['post']['bid'];
$html .= <<<EOF
"></a>
	<table class="bs_table" cellpadding="2" cellspacing="1">
		<tr>
			<td class="
EOF;
$html .= $tplvars['post']['posts_bar_class'];
$html .= <<<EOF
" colspan="2">
			<div style="float: left;">
				<a href="#b_
EOF;
$html .= $tplvars['post']['bid'];
$html .= <<<EOF
">
EOF;
$html .= $tplvars['post']['new_post_pic'];
$html .= <<<EOF
</a> <b>
EOF;
$html .= $tplvars['post']['user_name'];
$html .= <<<EOF
</b> , 
EOF;
$html .= $tplvars['post']['post_date'];
$html .= <<<EOF

			</div>
			<div style="float: right;">
				
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('post'):'');
$html .= <<<EOF
 <a href="
EOF;
$html .= $tplvars['post']['post_url'];
$html .= <<<EOF
">#
EOF;
$html .= $tplvars['post']['number'];
$html .= <<<EOF
</a>
				&nbsp;&nbsp;
				<a href="#top" title="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('totop'):'');
$html .= <<<EOF
">
				<img src="
EOF;
$html .= ($tpl->check_allowed_method('guser','get_theme_item_path')?$tplvars['guser']->get_theme_item_path('images/totop.gif'):'');
$html .= <<<EOF
" alt="" />
				</a>
			</div>
			<br style="clear: both;" />
			</td>
		</tr>
		<tr>
			<td valign="top" class="
EOF;
$html .= $tplvars['post']['left_table_class'];
$html .= <<<EOF
" width="28%">
			<table width="100%" cellpadding="1" cellspacing="1">
				
EOF;
if((isset($tplvars['post']['show_avatar']) && $tplvars['post']['show_avatar'])) {
$html .= <<<EOF

				<tr>
					<td class="
EOF;
$html .= $tplvars['post']['left_table_class'];
$html .= <<<EOF
" colspan="2">
					<img alt="" src="
EOF;
$html .= $tplvars['post']['avatar'];
$html .= <<<EOF
" />
					</td>
				</tr>
				
EOF;
}
$html .= <<<EOF

				
EOF;
if((isset($tplvars['view_ip']) && $tplvars['view_ip'])) {
$html .= <<<EOF

				<tr>
					<td class="
EOF;
$html .= $tplvars['post']['left_table_class'];
$html .= <<<EOF
">IP:</td>
					<td class="
EOF;
$html .= $tplvars['post']['left_table_class'];
$html .= <<<EOF
">
EOF;
$html .= $tplvars['post']['user_ip'];
$html .= <<<EOF
</td>
				</tr>
				
EOF;
}
$html .= <<<EOF

				<tr>
					<td class="
EOF;
$html .= $tplvars['post']['left_table_class'];
$html .= <<<EOF
">
EOF;
$html .= $tplvars['post']['rank_title'];
$html .= <<<EOF
:</td>
					<td class="
EOF;
$html .= $tplvars['post']['left_table_class'];
$html .= <<<EOF
">
EOF;
$html .= $tplvars['post']['rank_images'];
$html .= <<<EOF

EOF;
$html .= $tplvars['post']['user_status'];
$html .= <<<EOF
</td>
				</tr>
				
EOF;
if((isset($tplvars['post']['user_id']) && $tplvars['post']['user_id'] != 0)) {
$html .= <<<EOF

				<tr>
					<td class="
EOF;
$html .= $tplvars['post']['left_table_class'];
$html .= <<<EOF
">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('registerdate'):'');
$html .= <<<EOF
:</td>
					<td class="
EOF;
$html .= $tplvars['post']['left_table_class'];
$html .= <<<EOF
">
EOF;
$html .= $tplvars['post']['register_time'];
$html .= <<<EOF
</td>
				</tr>
				
EOF;
}
$html .= <<<EOF

				
EOF;
$post_add_fields_c = -1;
foreach($tplvars['post']['add_fields'] as $tplvars['field']) {
$post_add_fields_c++;

$html .= <<<EOF

				<tr>
					<td class="
EOF;
$html .= $tplvars['post']['left_table_class'];
$html .= <<<EOF
">
EOF;
$html .= $tplvars['field']['field_name'];
$html .= <<<EOF
:</td>
					<td class="
EOF;
$html .= $tplvars['post']['left_table_class'];
$html .= <<<EOF
">
EOF;
$html .= $tplvars['field']['field_value'];
$html .= <<<EOF
</td>
				</tr>
				
EOF;
}
$html .= <<<EOF

				
EOF;
if((isset($tplvars['post']['user_id']) && $tplvars['post']['user_id'] != 0)) {
$html .= <<<EOF

				<tr>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td colspan="2" class="
EOF;
$html .= $tplvars['post']['left_table_class'];
$html .= <<<EOF
">
EOF;
$html .= $tplvars['post']['stats_ins_bottom'];
$html .= <<<EOF
</td>
				</tr>
				
EOF;
} else {
$html .= <<<EOF

				<tr>
					<td class="
EOF;
$html .= $tplvars['post']['left_table_class'];
$html .= <<<EOF
">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('email'):'');
$html .= <<<EOF
:</td>
					<td class="
EOF;
$html .= $tplvars['post']['left_table_class'];
$html .= <<<EOF
">
EOF;
$html .= $tplvars['post']['an_email_ins'];
$html .= <<<EOF
</td>
				</tr>
				
EOF;
}
$html .= <<<EOF

			</table>
			</td>
			<td class="
EOF;
$html .= $tplvars['post']['main_table_class'];
$html .= <<<EOF
" width="72%" valign="top">
			<table width="100%" cellpadding="0" cellspacing="1" style="table-layout: fixed;">
				<tr>
					<td class="
EOF;
$html .= $tplvars['post']['main_table_class'];
$html .= <<<EOF
" width="100%" valign="top">
					
EOF;
$html .= $tplvars['post']['text_ins'];
$html .= <<<EOF

					</td>
				</tr>
			</table>
			</td>
		</tr>
		<tr>
			<td class="
EOF;
$html .= $tplvars['post']['posts_bar_class'];
$html .= <<<EOF
" colspan="2">
			<div style="float: left; width: 50%;">
EOF;
$html .= $tplvars['post']['message_ins'];
$html .= <<<EOF
</div>
			<div style="float: right; width: 49%;">
EOF;
$html .= $tplvars['post']['bottom_ins'];
$html .= <<<EOF
</div>
			<br style="clear: both;" />
			</td>
		</tr>
	</table>
	
EOF;
if((isset($tplvars['post']['show_separator']) && $tplvars['post']['show_separator'])) {
$html .= <<<EOF

	<div class="bs_post_separator">&nbsp;</div>
	
EOF;
}
$html .= <<<EOF

	
EOF;
}
$html .= <<<EOF

</div>

EOF;
}
$html .= <<<EOF


<div class="bs_padtop">
	<div style="float: left; width: 50%;">
		
EOF;
if((isset($tplvars['enable_email_notification']) && $tplvars['enable_email_notification'])) {
$html .= <<<EOF

		<a class="bs_button_big" style="float: left;" title="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('subscribe_desc'):'');
$html .= <<<EOF
"
			 href="
EOF;
$html .= ($tpl->check_allowed_method('gurl','simple_url')?$tplvars['gurl']->simple_url(0,'&amp;$URL_AT=$ACTION_SUBSCRIBE_TOPIC&amp;$URL_FID='.$tplvars['fid'].'&amp;$URL_TID='.$tplvars['tid'],'&amp;',true):'');
$html .= <<<EOF
"
			 >
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('subscribe_to_topic'):'');
$html .= <<<EOF
</a>
		
EOF;
}
$html .= <<<EOF

		<a class="bs_button_big" style="float: left;" title="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('print_desc'):'');
$html .= <<<EOF
"
			 href="
EOF;
$html .= $tplvars['print_url'];
$html .= <<<EOF
" onclick="FWS_openDefaultPopup('
EOF;
$html .= $tplvars['print_url'];
$html .= <<<EOF
','
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('print_topic'):'');
$html .= <<<EOF
',950,700); return false;"
			 >
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('print_topic'):'');
$html .= <<<EOF
</a>
	</div>
	<div style="float: right; width: 50%;">
		
EOF;
if((isset($tplvars['display_reply']) && $tplvars['display_reply'])) {
$html .= <<<EOF

		<a id="reply_btn_2" class="bs_button_big" title="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('answer_desc'):'');
$html .= <<<EOF
" href="
EOF;
$html .= $tplvars['reply_url'];
$html .= <<<EOF
" onclick="return quote('
EOF;
$html .= $tplvars['quoteLink'];
$html .= <<<EOF
');">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('answer'):'');
$html .= <<<EOF
</a>
		
EOF;
if((isset($tplvars['gisloggedin']) && $tplvars['gisloggedin'])) {
$html .= <<<EOF

		<a class="bs_button_big" href="javascript:toggleQuickReply();">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('quick_reply'):'');
$html .= <<<EOF
</a>
		
EOF;
}
$html .= <<<EOF

		
EOF;
}
$html .= <<<EOF

	</div>
	<br style="clear: both;" />
</div>


EOF;
if((isset($tplvars['gisloggedin']) && $tplvars['gisloggedin'])) {
$html .= <<<EOF

<script type="text/javascript">
<!--
function toggleQuickReply()
{
	var d = document.getElementById('quickReply');
	if(d != null)
		d.style.display = d.style.display == 'block' ? 'none' : 'block';
}
var BBCodeModes = new Array();
BBCodeModes['1'] = 'simple';
//-->
</script>
<script type="text/javascript" src="
EOF;
$html .= ($tpl->check_allowed_method('gjs','get_file')?$tplvars['gjs']->get_file('src/bbcode.js'):'');
$html .= <<<EOF
"></script>
<script type="text/javascript" src="
EOF;
$html .= ($tpl->check_allowed_method('gjs','get_file')?$tplvars['gjs']->get_file('src/ajax_quote_message.js'):'');
$html .= <<<EOF
"></script>
<div id="quickReply" style="display: none;">
<form method="post" action="
EOF;
$html .= ($tpl->check_allowed_method('gurl','simple_url')?$tplvars['gurl']->simple_url('new_post','&amp;$URL_FID='.$tplvars['fid'].'&amp;$URL_TID='.$tplvars['tid']):'');
$html .= <<<EOF
">
<input type="hidden" name="action_type" value="
EOF;
$html .= $tplvars['quick_reply_action_type'];
$html .= <<<EOF
" />
<input type="hidden" name="timestamp" value="
EOF;
$html .= $tplvars['timestamp'];
$html .= <<<EOF
" />
<div class="bs_border bs_padtop">
	<h1 class="bs_topic">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('quick_reply'):'');
$html .= <<<EOF
</h1>
	<fieldset class="bs_form">
		<dl>
			<dt>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('text'):'');
$html .= <<<EOF
:</dt>
			<dd>
				<textarea id="quickReply_text" name="text" cols="50" rows="15" style="width: 90%;"></textarea>
				<div class="bs_padtop">
					<input type="checkbox" id="ubb" name="use_bbcode" value="checked" checked="checked" />
					<label for="ubb">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('use_bbcode'):'');
$html .= <<<EOF
</label><br />
					<input type="checkbox" id="usm" name="use_smileys" value="checked" checked="checked" />
					<label for="usm">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('use_smileys'):'');
$html .= <<<EOF
</label>
				</div>
			</dd>
		</dl>
	</fieldset>
</div>
<center>
	<input type="submit" name="preview" value="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('preview'):'');
$html .= <<<EOF
" />
	<input type="submit" name="submit" value="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('submit'):'');
$html .= <<<EOF
" />
</center>
</form>
</div>

EOF;
}
$html .= <<<EOF


<div class="bs_padtop">

EOF;
$html .= $tpl->parse_template("inc_pagination.htm",false);
$html .= <<<EOF

</div>


EOF;
if((isset($tplvars['view_useronline_list']) && $tplvars['view_useronline_list'])) {
$html .= <<<EOF

<div class="bs_padtop_big">

EOF;
$html .= $tpl->parse_template("inc_online_user.htm",false);
$html .= <<<EOF

</div>

EOF;
}
$html .= <<<EOF



EOF;
if((isset($tplvars['show_bottom_bar']) && $tplvars['show_bottom_bar'])) {
$html .= <<<EOF


EOF;
$html .= $tpl->parse_template("inc_topic_action_js.htm",false);
$html .= <<<EOF

<script type="text/javascript">
<!--
function performModAction()
{
	document.location.href = getModActionURL().replace('__ID__','
EOF;
$html .= $tplvars['tid'];
$html .= <<<EOF
');
}
//-->
</script>
<div class="bs_border bs_padtop">
	<div class="bs_main">
		<div style="float: left;">
			
EOF;
if((isset($tplvars['display_topic_actions']) && $tplvars['display_topic_actions'])) {
$html .= <<<EOF

			
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('topic_actions'):'');
$html .= <<<EOF
: 
EOF;
$html .= $tplvars['topic_action_combo'];
$html .= <<<EOF

			
EOF;
} else {
$html .= <<<EOF

			&nbsp;
			
EOF;
}
$html .= <<<EOF

		</div>
		<div style="float: right;">
			
EOF;
if((isset($tplvars['display_post_actions']) && $tplvars['display_post_actions'])) {
$html .= <<<EOF

			<a href="
EOF;
$html .= ($tpl->check_allowed_method('gurl','simple_url')?$tplvars['gurl']->simple_url('manage_posts','&amp;$URL_FID='.$tplvars['fid'].'&amp;$URL_TID='.$tplvars['tid']):'');
$html .= <<<EOF
">
EOF;
$html .= $tplvars['manage_posts_title'];
$html .= <<<EOF
</a>
			
EOF;
} else {
$html .= <<<EOF

			&nbsp;
			
EOF;
}
$html .= <<<EOF

		</div>
		<br style="clear: both;" />
	</div>
</div>

EOF;
}
$html .= <<<EOF



EOF;
if((isset($tplvars['similar_topics']) && $tplvars['similar_topics'])) {
$html .= <<<EOF

<div class="bs_padtop_big">

EOF;
$html .= $tpl->parse_template("inc_topics.htm",false);
$html .= <<<EOF

</div>

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