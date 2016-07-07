<?php
function FWS_TPL_themes_default_templates_inc_bbcode_htm($tpl,$number) {
$locale = FWS_Props::get()->locale();
$tplvars = $tpl->get_variables('inc_bbcode.htm',$number);

$html = "";
$html .=<<<EOF

EOF;
if((isset($tplvars['number']) && $tplvars['number'] == 1)) {
$html .= <<<EOF

<script type="text/javascript" language="Javascript">
<!--

EOF;
$html .= $tplvars['bbcode_data'];
$html .= <<<EOF

//-->
</script>

EOF;
}
$html .= <<<EOF


<ul class="bs_none_list bs_bbcode_helper">
	<li>
		
EOF;
$tplvars['tag'] = 'b';
$html .= <<<EOF

		
EOF;
if((($tpl->check_allowed_method('bbcode','is_allowed')?$tplvars['bbcode']->is_allowed($tplvars['tag']):''))) {
$html .= <<<EOF

		<img id="tag_
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
_
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
" class="bs_bbcode"
			onmouseover="hoverItem(
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
,'tag_
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
_
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
','
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('bbcode_help_'.$tplvars['tag']):'');
$html .= <<<EOF
');"
			onmouseout="unhoverItem(
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
,'tag_
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
_
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
');"
			onclick="insertBBCode(
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
,'
EOF;
$html .= $tplvars['textarea_id'];
$html .= <<<EOF
','[
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
]','
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
',this)"
			src="
EOF;
$html .= ($tpl->check_allowed_method('guser','get_theme_item_path')?$tplvars['guser']->get_theme_item_path('images/bbcode/bold.png',$tplvars['bspath']):'');
$html .= <<<EOF
"
			width="20" height="20"
			alt=" [
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
] " />
		
EOF;
}
$html .= <<<EOF

		
EOF;
$tplvars['tag'] = 'i';
$html .= <<<EOF

		
EOF;
if((($tpl->check_allowed_method('bbcode','is_allowed')?$tplvars['bbcode']->is_allowed($tplvars['tag']):''))) {
$html .= <<<EOF

		<img id="tag_
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
_
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
" class="bs_bbcode"
			onmouseover="hoverItem(
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
,'tag_
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
_
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
','
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('bbcode_help_'.$tplvars['tag']):'');
$html .= <<<EOF
');"
			onmouseout="unhoverItem(
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
,'tag_
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
_
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
');"
			onclick="insertBBCode(
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
,'
EOF;
$html .= $tplvars['textarea_id'];
$html .= <<<EOF
','[
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
]','
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
',this)"
			src="
EOF;
$html .= ($tpl->check_allowed_method('guser','get_theme_item_path')?$tplvars['guser']->get_theme_item_path('images/bbcode/italic.png',$tplvars['bspath']):'');
$html .= <<<EOF
"
			width="20" height="20"
			alt=" [
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
] " />
		
EOF;
}
$html .= <<<EOF

		
EOF;
$tplvars['tag'] = 'u';
$html .= <<<EOF

		
EOF;
if((($tpl->check_allowed_method('bbcode','is_allowed')?$tplvars['bbcode']->is_allowed($tplvars['tag']):''))) {
$html .= <<<EOF

		<img id="tag_
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
_
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
" class="bs_bbcode"
			onmouseover="hoverItem(
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
,'tag_
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
_
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
','
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('bbcode_help_'.$tplvars['tag']):'');
$html .= <<<EOF
');"
			onmouseout="unhoverItem(
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
,'tag_
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
_
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
');"
			onclick="insertBBCode(
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
,'
EOF;
$html .= $tplvars['textarea_id'];
$html .= <<<EOF
','[
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
]','
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
',this)"
			src="
EOF;
$html .= ($tpl->check_allowed_method('guser','get_theme_item_path')?$tplvars['guser']->get_theme_item_path('images/bbcode/underline.png',$tplvars['bspath']):'');
$html .= <<<EOF
"
			width="20" height="20"
			alt=" [
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
] " />
		
EOF;
}
$html .= <<<EOF

		
EOF;
$tplvars['tag'] = 's';
$html .= <<<EOF

		
EOF;
if((($tpl->check_allowed_method('bbcode','is_allowed')?$tplvars['bbcode']->is_allowed($tplvars['tag']):''))) {
$html .= <<<EOF

		<img id="tag_
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
_
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
" class="bs_bbcode"
			onmouseover="hoverItem(
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
,'tag_
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
_
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
','
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('bbcode_help_'.$tplvars['tag']):'');
$html .= <<<EOF
');"
			onmouseout="unhoverItem(
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
,'tag_
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
_
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
');"
			onclick="insertBBCode(
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
,'
EOF;
$html .= $tplvars['textarea_id'];
$html .= <<<EOF
','[
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
]','
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
',this)"
			src="
EOF;
$html .= ($tpl->check_allowed_method('guser','get_theme_item_path')?$tplvars['guser']->get_theme_item_path('images/bbcode/strike.png',$tplvars['bspath']):'');
$html .= <<<EOF
"
			width="20" height="20"
			alt=" [
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
] " />
		
EOF;
}
$html .= <<<EOF

		
		
EOF;
if((($tpl->check_allowed_method('bbcode','is_allowed')?$tplvars['bbcode']->is_allowed('b','i','u','s'):''))) {
$html .= <<<EOF

		&nbsp;
		
EOF;
}
$html .= <<<EOF

		
		
EOF;
$tplvars['tag'] = 'sub';
$html .= <<<EOF

		
EOF;
if((($tpl->check_allowed_method('bbcode','is_allowed')?$tplvars['bbcode']->is_allowed($tplvars['tag']):''))) {
$html .= <<<EOF

		<img id="tag_
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
_
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
" class="bs_bbcode"
			onmouseover="hoverItem(
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
,'tag_
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
_
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
','
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('bbcode_help_'.$tplvars['tag']):'');
$html .= <<<EOF
');"
			onmouseout="unhoverItem(
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
,'tag_
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
_
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
');"
			onclick="insertBBCode(
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
,'
EOF;
$html .= $tplvars['textarea_id'];
$html .= <<<EOF
','[
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
]','
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
',this)"
			src="
EOF;
$html .= ($tpl->check_allowed_method('guser','get_theme_item_path')?$tplvars['guser']->get_theme_item_path('images/bbcode/subscript.png',$tplvars['bspath']):'');
$html .= <<<EOF
"
			width="20" height="20"
			alt=" [
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
] " />
		
EOF;
}
$html .= <<<EOF

		
EOF;
$tplvars['tag'] = 'sup';
$html .= <<<EOF

		
EOF;
if((($tpl->check_allowed_method('bbcode','is_allowed')?$tplvars['bbcode']->is_allowed($tplvars['tag']):''))) {
$html .= <<<EOF

		<img id="tag_
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
_
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
" class="bs_bbcode"
			onmouseover="hoverItem(
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
,'tag_
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
_
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
','
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('bbcode_help_'.$tplvars['tag']):'');
$html .= <<<EOF
');"
			onmouseout="unhoverItem(
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
,'tag_
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
_
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
');"
			onclick="insertBBCode(
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
,'
EOF;
$html .= $tplvars['textarea_id'];
$html .= <<<EOF
','[
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
]','
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
',this)"
			src="
EOF;
$html .= ($tpl->check_allowed_method('guser','get_theme_item_path')?$tplvars['guser']->get_theme_item_path('images/bbcode/supscript.png',$tplvars['bspath']):'');
$html .= <<<EOF
"
			width="20" height="20"
			alt=" [
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
] " />
		
EOF;
}
$html .= <<<EOF

		
		
EOF;
if((($tpl->check_allowed_method('bbcode','is_allowed')?$tplvars['bbcode']->is_allowed('sub','sup'):''))) {
$html .= <<<EOF

		&nbsp;
		
EOF;
}
$html .= <<<EOF

		
		
EOF;
$tplvars['tag'] = 'left';
$html .= <<<EOF

		
EOF;
if((($tpl->check_allowed_method('bbcode','is_allowed')?$tplvars['bbcode']->is_allowed($tplvars['tag']):''))) {
$html .= <<<EOF

		<img id="tag_
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
_
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
" class="bs_bbcode"
			onmouseover="hoverItem(
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
,'tag_
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
_
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
','
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('bbcode_help_'.$tplvars['tag']):'');
$html .= <<<EOF
');"
			onmouseout="unhoverItem(
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
,'tag_
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
_
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
');"
			onclick="insertBBCode(
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
,'
EOF;
$html .= $tplvars['textarea_id'];
$html .= <<<EOF
','[
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
]','
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
',this)"
			src="
EOF;
$html .= ($tpl->check_allowed_method('guser','get_theme_item_path')?$tplvars['guser']->get_theme_item_path('images/bbcode/left.png',$tplvars['bspath']):'');
$html .= <<<EOF
"
			width="20" height="20"
			alt=" [
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
] " />
		
EOF;
}
$html .= <<<EOF

		
EOF;
$tplvars['tag'] = 'center';
$html .= <<<EOF

		
EOF;
if((($tpl->check_allowed_method('bbcode','is_allowed')?$tplvars['bbcode']->is_allowed($tplvars['tag']):''))) {
$html .= <<<EOF

		<img id="tag_
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
_
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
" class="bs_bbcode"
			onmouseover="hoverItem(
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
,'tag_
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
_
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
','
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('bbcode_help_'.$tplvars['tag']):'');
$html .= <<<EOF
');"
			onmouseout="unhoverItem(
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
,'tag_
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
_
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
');"
			onclick="insertBBCode(
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
,'
EOF;
$html .= $tplvars['textarea_id'];
$html .= <<<EOF
','[
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
]','
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
',this)"
			src="
EOF;
$html .= ($tpl->check_allowed_method('guser','get_theme_item_path')?$tplvars['guser']->get_theme_item_path('images/bbcode/center.png',$tplvars['bspath']):'');
$html .= <<<EOF
"
			width="20" height="20"
			alt=" [
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
] " />
		
EOF;
}
$html .= <<<EOF

		
EOF;
$tplvars['tag'] = 'right';
$html .= <<<EOF

		
EOF;
if((($tpl->check_allowed_method('bbcode','is_allowed')?$tplvars['bbcode']->is_allowed($tplvars['tag']):''))) {
$html .= <<<EOF

		<img id="tag_
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
_
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
" class="bs_bbcode"
			onmouseover="hoverItem(
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
,'tag_
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
_
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
','
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('bbcode_help_'.$tplvars['tag']):'');
$html .= <<<EOF
');"
			onmouseout="unhoverItem(
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
,'tag_
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
_
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
');"
			onclick="insertBBCode(
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
,'
EOF;
$html .= $tplvars['textarea_id'];
$html .= <<<EOF
','[
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
]','
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
',this)"
			src="
EOF;
$html .= ($tpl->check_allowed_method('guser','get_theme_item_path')?$tplvars['guser']->get_theme_item_path('images/bbcode/right.png',$tplvars['bspath']):'');
$html .= <<<EOF
"
			width="20" height="20"
			alt=" [
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
] " />
		
EOF;
}
$html .= <<<EOF

		
		
EOF;
if((($tpl->check_allowed_method('bbcode','is_allowed')?$tplvars['bbcode']->is_allowed('left','center','right'):''))) {
$html .= <<<EOF

		&nbsp;
		
EOF;
}
$html .= <<<EOF

		
		
EOF;
$tplvars['tag'] = 'font';
$html .= <<<EOF

		
EOF;
if((($tpl->check_allowed_method('bbcode','is_allowed')?$tplvars['bbcode']->is_allowed($tplvars['tag']):''))) {
$html .= <<<EOF

		<img id="tag_
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
_
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
" class="bs_bbcode"
			onmouseover="hoverItem(
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
,'tag_
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
_
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
','
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('bbcode_help_'.$tplvars['tag']):'');
$html .= <<<EOF
');"
			onmouseout="unhoverItem(
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
,'tag_
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
_
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
');"
			onclick="showPopup(
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
,'
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
');"
			src="
EOF;
$html .= ($tpl->check_allowed_method('guser','get_theme_item_path')?$tplvars['guser']->get_theme_item_path('images/bbcode/font.png',$tplvars['bspath']):'');
$html .= <<<EOF
"
			width="31" height="20"
			alt=" [
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
] " />
		<div class="bs_bbcode_popup" id="tag_
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
_
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
_popup">
			<ul class="bs_none_list">
				
EOF;
$post_fonts_c = -1;
foreach($tplvars['post_fonts'] as $tplvars['fontname']) {
$post_fonts_c++;

$html .= <<<EOF

				<li><a style="font-family: 
EOF;
$html .= $tplvars['fontname'];
$html .= <<<EOF
;" href="javascript:popupElementClick(
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
,'
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
','
EOF;
$html .= $tplvars['fontname'];
$html .= <<<EOF
');">
EOF;
$html .= $tplvars['fontname'];
$html .= <<<EOF
</a></li>
				
EOF;
}
$html .= <<<EOF

			</ul>
		</div>
		
EOF;
}
$html .= <<<EOF

		
		
EOF;
$tplvars['tag'] = 'color';
$html .= <<<EOF

		
EOF;
if((($tpl->check_allowed_method('bbcode','is_allowed')?$tplvars['bbcode']->is_allowed($tplvars['tag']):''))) {
$html .= <<<EOF

		<img id="tag_
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
_
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
" class="bs_bbcode"
			onmouseover="hoverItem(
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
,'tag_
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
_
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
','
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('bbcode_help_'.$tplvars['tag']):'');
$html .= <<<EOF
');"
			onmouseout="unhoverItem(
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
,'tag_
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
_
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
');"
			onclick="showPopup(
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
,'
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
');"
			src="
EOF;
$html .= ($tpl->check_allowed_method('guser','get_theme_item_path')?$tplvars['guser']->get_theme_item_path('images/bbcode/color.png',$tplvars['bspath']):'');
$html .= <<<EOF
"
			width="31" height="20"
			alt=" [
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
] " />
		
EOF;
}
$html .= <<<EOF

		
		
EOF;
$tplvars['tag'] = 'size';
$html .= <<<EOF

		
EOF;
if((($tpl->check_allowed_method('bbcode','is_allowed')?$tplvars['bbcode']->is_allowed($tplvars['tag']):''))) {
$html .= <<<EOF

		<img id="tag_
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
_
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
" class="bs_bbcode"
			onmouseover="hoverItem(
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
,'tag_
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
_
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
','
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('bbcode_help_'.$tplvars['tag']):'');
$html .= <<<EOF
');"
			onmouseout="unhoverItem(
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
,'tag_
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
_
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
');"
			onclick="showPopup(
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
,'
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
');"
			src="
EOF;
$html .= ($tpl->check_allowed_method('guser','get_theme_item_path')?$tplvars['guser']->get_theme_item_path('images/bbcode/size.png',$tplvars['bspath']):'');
$html .= <<<EOF
"
			width="31" height="20"
			alt=" [
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
] " />
		<div class="bs_bbcode_popup" id="tag_
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
_
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
_popup">
			<ul class="bs_none_list">
				<li><a style="font-size: 8px;" href="javascript:popupElementClick(
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
,'
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
','8');">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('bbcode_size_verysmall'):'');
$html .= <<<EOF
</a></li>
				<li><a style="font-size: 10px;" href="javascript:popupElementClick(
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
,'
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
','10');">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('bbcode_size_small'):'');
$html .= <<<EOF
</a></li>
				<li><a style="font-size: 12px;" href="javascript:popupElementClick(
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
,'
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
','12');">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('bbcode_size_middle'):'');
$html .= <<<EOF
</a></li>
				<li><a style="font-size: 14px;" href="javascript:popupElementClick(
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
,'
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
','14');">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('bbcode_size_big'):'');
$html .= <<<EOF
</a></li>
				<li><a style="font-size: 18px;" href="javascript:popupElementClick(
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
,'
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
','18');">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('bbcode_size_verybig'):'');
$html .= <<<EOF
</a></li>
			</ul>
		</div>
		
EOF;
}
$html .= <<<EOF

	</li>
	<li>
		
EOF;
$tplvars['tag'] = 'quote';
$html .= <<<EOF

		
EOF;
if((($tpl->check_allowed_method('bbcode','is_allowed')?$tplvars['bbcode']->is_allowed($tplvars['tag']):''))) {
$html .= <<<EOF

		<img id="tag_
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
_
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
" class="bs_bbcode"
			onmouseover="hoverItem(
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
,'tag_
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
_
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
','
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('bbcode_help_'.$tplvars['tag']):'');
$html .= <<<EOF
');"
			onmouseout="unhoverItem(
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
,'tag_
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
_
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
');"
			onclick="insertBBCode(
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
,'
EOF;
$html .= $tplvars['textarea_id'];
$html .= <<<EOF
','[
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
]','
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
',this)"
			src="
EOF;
$html .= ($tpl->check_allowed_method('guser','get_theme_item_path')?$tplvars['guser']->get_theme_item_path('images/bbcode/quote.png',$tplvars['bspath']):'');
$html .= <<<EOF
"
			width="20" height="20"
			alt=" [
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
] " />
		
EOF;
}
$html .= <<<EOF

		
EOF;
$tplvars['tag'] = 'code';
$html .= <<<EOF

		
EOF;
if((($tpl->check_allowed_method('bbcode','is_allowed')?$tplvars['bbcode']->is_allowed($tplvars['tag']):''))) {
$html .= <<<EOF

		<img id="tag_
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
_
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
" class="bs_bbcode"
			onmouseover="hoverItem(
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
,'tag_
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
_
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
','
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('bbcode_help_'.$tplvars['tag']):'');
$html .= <<<EOF
');"
			onmouseout="unhoverItem(
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
,'tag_
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
_
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
');"
			onclick="showPopup(
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
,'
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
');"
			src="
EOF;
$html .= ($tpl->check_allowed_method('guser','get_theme_item_path')?$tplvars['guser']->get_theme_item_path('images/bbcode/code2.png',$tplvars['bspath']):'');
$html .= <<<EOF
"
			width="31" height="20"
			alt=" [
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
] " />
		<div class="bs_bbcode_popup" id="tag_
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
_
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
_popup">
			<ul class="bs_none_list">
				<li><a href="javascript:popupElementClick(
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
,'
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
','');"><i>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('default'):'');
$html .= <<<EOF
</i></a></li>
				
EOF;
$hllangs_c = -1;
foreach($tplvars['hllangs'] as $tplvars['lid'] => $tplvars['lang']) {
$hllangs_c++;

$html .= <<<EOF

				<li><a href="javascript:popupElementClick(
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
,'
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
','
EOF;
$html .= $tplvars['lid'];
$html .= <<<EOF
');">
EOF;
$html .= $tplvars['lang']['name'];
$html .= <<<EOF
</a></li>
				
EOF;
}
$html .= <<<EOF

			</ul>
		</div>
		
EOF;
}
$html .= <<<EOF

		
EOF;
$tplvars['tag'] = 'list';
$html .= <<<EOF

		
EOF;
if((($tpl->check_allowed_method('bbcode','is_allowed')?$tplvars['bbcode']->is_allowed($tplvars['tag']):''))) {
$html .= <<<EOF

		<img id="tag_
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
_
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
" class="bs_bbcode"
			onmouseover="hoverItem(
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
,'tag_
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
_
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
','
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('bbcode_help_'.$tplvars['tag']):'');
$html .= <<<EOF
');"
			onmouseout="unhoverItem(
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
,'tag_
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
_
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
');"
			onclick="showPopup(
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
,'
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
');"
			src="
EOF;
$html .= ($tpl->check_allowed_method('guser','get_theme_item_path')?$tplvars['guser']->get_theme_item_path('images/bbcode/list.png',$tplvars['bspath']):'');
$html .= <<<EOF
"
			width="31" height="20"
			alt=" [
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
] " />
		<div class="bs_bbcode_popup" id="tag_
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
_
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
_popup">
			<ul class="bs_none_list">
				<li><a href="javascript:popupElementClick(
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
,'
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
','');"><i>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('bbcode_list_default'):'');
$html .= <<<EOF
</i></a></li>
				<li><a href="javascript:popupElementClick(
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
,'
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
','circle');">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('bbcode_list_circle'):'');
$html .= <<<EOF
</a></li>
				<li><a href="javascript:popupElementClick(
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
,'
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
','square');">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('bbcode_list_square'):'');
$html .= <<<EOF
</a></li>
				<li><a href="javascript:popupElementClick(
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
,'
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
','disc');">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('bbcode_list_disc'):'');
$html .= <<<EOF
</a></li>
				<li><a href="javascript:popupElementClick(
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
,'
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
','1');">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('bbcode_list_1'):'');
$html .= <<<EOF
</a></li>
				<li><a href="javascript:popupElementClick(
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
,'
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
','i');">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('bbcode_list_i'):'');
$html .= <<<EOF
</a></li>
				<li><a href="javascript:popupElementClick(
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
,'
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
','I');">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('bbcode_list_I'):'');
$html .= <<<EOF
</a></li>
				<li><a href="javascript:popupElementClick(
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
,'
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
','a');">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('bbcode_list_a'):'');
$html .= <<<EOF
</a></li>
				<li><a href="javascript:popupElementClick(
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
,'
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
','A');">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('bbcode_list_A'):'');
$html .= <<<EOF
</a></li>
			</ul>
		</div>
		
EOF;
}
$html .= <<<EOF

		
		
EOF;
if((($tpl->check_allowed_method('bbcode','is_allowed')?$tplvars['bbcode']->is_allowed('quote','code','list'):''))) {
$html .= <<<EOF

		&nbsp;
		
EOF;
}
$html .= <<<EOF

		
		
EOF;
$tplvars['tag'] = 'url';
$html .= <<<EOF

		
EOF;
if((($tpl->check_allowed_method('bbcode','is_allowed')?$tplvars['bbcode']->is_allowed($tplvars['tag']):''))) {
$html .= <<<EOF

		<img id="tag_
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
_
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
" class="bs_bbcode"
			onmouseover="hoverItem(
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
,'tag_
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
_
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
','
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('bbcode_help_'.$tplvars['tag']):'');
$html .= <<<EOF
');"
			onmouseout="unhoverItem(
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
,'tag_
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
_
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
');"
			onclick="insertBBCode(
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
,'
EOF;
$html .= $tplvars['textarea_id'];
$html .= <<<EOF
','[
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
]','
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
',this)"
			src="
EOF;
$html .= ($tpl->check_allowed_method('guser','get_theme_item_path')?$tplvars['guser']->get_theme_item_path('images/bbcode/link.png',$tplvars['bspath']):'');
$html .= <<<EOF
"
			width="20" height="20"
			alt=" [
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
] " />
		
EOF;
}
$html .= <<<EOF

		
EOF;
$tplvars['tag'] = 'mail';
$html .= <<<EOF

		
EOF;
if((($tpl->check_allowed_method('bbcode','is_allowed')?$tplvars['bbcode']->is_allowed($tplvars['tag']):''))) {
$html .= <<<EOF

		<img id="tag_
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
_
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
" class="bs_bbcode"
			onmouseover="hoverItem(
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
,'tag_
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
_
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
','
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('bbcode_help_'.$tplvars['tag']):'');
$html .= <<<EOF
');"
			onmouseout="unhoverItem(
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
,'tag_
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
_
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
');"
			onclick="insertBBCode(
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
,'
EOF;
$html .= $tplvars['textarea_id'];
$html .= <<<EOF
','[
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
]','
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
',this)"
			src="
EOF;
$html .= ($tpl->check_allowed_method('guser','get_theme_item_path')?$tplvars['guser']->get_theme_item_path('images/bbcode/mail.png',$tplvars['bspath']):'');
$html .= <<<EOF
"
			width="20" height="20"
			alt=" [
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
] " />
		
EOF;
}
$html .= <<<EOF

		
EOF;
$tplvars['tag'] = 'img';
$html .= <<<EOF

		
EOF;
if((($tpl->check_allowed_method('bbcode','is_allowed')?$tplvars['bbcode']->is_allowed($tplvars['tag']):''))) {
$html .= <<<EOF

		<img id="tag_
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
_
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
" class="bs_bbcode"
			onmouseover="hoverItem(
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
,'tag_
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
_
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
','
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('bbcode_help_'.$tplvars['tag']):'');
$html .= <<<EOF
');"
			onmouseout="unhoverItem(
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
,'tag_
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
_
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
');"
			onclick="insertBBCode(
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
,'
EOF;
$html .= $tplvars['textarea_id'];
$html .= <<<EOF
','[
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
]','
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
',this)"
			src="
EOF;
$html .= ($tpl->check_allowed_method('guser','get_theme_item_path')?$tplvars['guser']->get_theme_item_path('images/bbcode/image.png',$tplvars['bspath']):'');
$html .= <<<EOF
"
			width="20" height="20"
			alt=" [
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
] " />
		
EOF;
}
$html .= <<<EOF

		
		
EOF;
if((($tpl->check_allowed_method('bbcode','is_allowed')?$tplvars['bbcode']->is_allowed('url','mail','img'):''))) {
$html .= <<<EOF

		&nbsp;
		
EOF;
}
$html .= <<<EOF

		
		
EOF;
$tplvars['tag'] = 'closeall';
$html .= <<<EOF

		<input id="helper_
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
_
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
" type="button" class="bs_bbcode"
		 onmouseout="unhoverItem(
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
,'helper_
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
_
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
');"
		 onmouseover="hoverItem(
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
,'helper_
EOF;
$html .= $tplvars['tag'];
$html .= <<<EOF
_
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
','
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('bbcode_help_'.$tplvars['tag']):'');
$html .= <<<EOF
');"
		 value="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('bbcode_element_closeall'):'');
$html .= <<<EOF
"
		 onclick="closeBBCodeTags(
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
,'
EOF;
$html .= $tplvars['textarea_id'];
$html .= <<<EOF
');" />
	</li>
</ul>
<input type="text" readonly="readonly" class="bs_bbcode_notice" id="bbc_explain_
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
" style="width: 90%;" />
EOF;
return $html;
}
?>