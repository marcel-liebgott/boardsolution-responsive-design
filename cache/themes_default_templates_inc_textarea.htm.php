<?php
function FWS_TPL_themes_default_templates_inc_textarea_htm($tpl,$number) {
$locale = FWS_Props::get()->locale();
$tplvars = $tpl->get_variables('inc_textarea.htm',$number);

$html = "";
$html .=<<<EOF
<!-- put this here to prevent problems when the applet is the default mode and the user
switches back to simple/advanced mode -->
<script type="text/javascript" src="
EOF;
$html .= ($tpl->check_allowed_method('gjs','get_file')?$tplvars['gjs']->get_file('js/colorpicker.js','fws'):'');
$html .= <<<EOF
"></script>
<script type="text/javascript">
<!--
cp['
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
'] = new FWS_ColorPicker(
	'
EOF;
$html .= $tplvars['gfwspath'];
$html .= <<<EOF
','group_color',
	function(color) {
		popupElementClick(
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
,'color','#' + color);
	},
	function() {
		popups['color
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
'] = 0;
	}
);
//-->
</script>


EOF;
if((isset($tplvars['applet']) && $tplvars['applet'])) {
$html .= <<<EOF

<input id="hiddenText
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
" type="hidden" name="text
EOF;
$html .= $tplvars['name_suffix'];
$html .= <<<EOF
" value="" />
<applet id="bbcode_area
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
" code="bbcodeeditor.gui.WysiwygBBCodeEditor.class"
	alt="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('bbceditor_no_java'):'');
$html .= <<<EOF
" archive="
EOF;
$html .= $tplvars['bspath'];
$html .= <<<EOF
bbceditor/bbcapplet.jar"
	width="100%" height="
EOF;
$html .= $tplvars['textarea_height'] + 150;
$html .= <<<EOF
">
	<param name="path" value="
EOF;
$html .= $tplvars['bspath'];
$html .= <<<EOF
bbceditor/" />
	<param name="bgColor" value="#EBEBEB" />
	<param name="lookAndFeel" value="system" />
	<param name="lang" value="
EOF;
$html .= $tplvars['glang'];
$html .= <<<EOF
" />
	<param name="maxLineLength" value="
EOF;
$html .= $tplvars['max_line_length'];
$html .= <<<EOF
" />
	<param name="displayCodeLineNumbers" value="
EOF;
$html .= $tplvars['code_line_numbers'];
$html .= <<<EOF
" />
	<param name="enabledTags" value="
EOF;
$html .= $tplvars['allowed_tags'];
$html .= <<<EOF
" />
	<param name="fontFamilies" value="
EOF;
$html .= $tplvars['font_families'];
$html .= <<<EOF
" />
	
EOF;
if((isset($tplvars['enable_smileys']) && $tplvars['enable_smileys'])) {
$html .= <<<EOF

	<param name="smileyCount" value="
EOF;
$html .= count($tplvars['smileys']);
$html .= <<<EOF
" />
	
EOF;
$smileys_c = -1;
foreach($tplvars['smileys'] as $tplvars['index'] => $tplvars['smiley']) {
$smileys_c++;

$html .= <<<EOF

	<param name="smileyPrimCode
EOF;
$html .= $tplvars['index'] + 1;
$html .= <<<EOF
" value="
EOF;
$html .= $tplvars['smiley']['primary_code'];
$html .= <<<EOF
" />
	<param name="smileySecCode
EOF;
$html .= $tplvars['index'] + 1;
$html .= <<<EOF
" value="
EOF;
$html .= $tplvars['smiley']['secondary_code'];
$html .= <<<EOF
" />
	<param name="smileyPath
EOF;
$html .= $tplvars['index'] + 1;
$html .= <<<EOF
" value="../images/smileys/
EOF;
$html .= $tplvars['smiley']['smiley_path'];
$html .= <<<EOF
" />
	
EOF;
}
$html .= <<<EOF

	
EOF;
} else {
$html .= <<<EOF

	<param name="smileyCount" value="0" />
	
EOF;
}
$html .= <<<EOF

	<param name="text" value="
EOF;
$html .= $tplvars['applet_text'];
$html .= <<<EOF
" />
	<param name="scriptable" value="true" />
</applet>

EOF;
} else {
$html .= <<<EOF


EOF;
$html .= $tplvars['bbcode_buttons'];
$html .= <<<EOF


<textarea id="bbcode_area
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
" style="width: 90%; min-height: 50px; height: 
EOF;
$html .= $tplvars['textarea_height'];
$html .= <<<EOF
"
	name="text
EOF;
$html .= $tplvars['name_suffix'];
$html .= <<<EOF
" rows="10" cols="10">
EOF;
$html .= $tplvars['text'];
$html .= <<<EOF
</textarea>

EOF;
}
$html .= <<<EOF


<script type="text/javascript" src="
EOF;
$html .= ($tpl->check_allowed_method('gjs','get_file')?$tplvars['gjs']->get_file('src/taresize.js'):'');
$html .= <<<EOF
"></script>
<div id="bbcode_area
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
_resizer" class="bs_coldesc_sep bbcode_area_resizer"
	onmousedown="BS_set_textarea_ids('bbcode_area
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
','bbcode_area
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
_resizer');">&nbsp;</div>


EOF;
if((isset($tplvars['applet']) && $tplvars['applet'] == false) && (isset($tplvars['enable_smileys']) && $tplvars['enable_smileys'])) {
$html .= <<<EOF

<div class="bs_padtop">

EOF;
$smileys_c = -1;
foreach($tplvars['smileys'] as $tplvars['smiley']) {
$smileys_c++;

$html .= <<<EOF


EOF;
if((isset($tplvars['smiley']['is_base']) && $tplvars['smiley']['is_base'])) {
$html .= <<<EOF

<a href="javascript:insertSmiley('bbcode_area
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
','
EOF;
$html .= $tplvars['smiley']['prim_code_insert'];
$html .= <<<EOF
');">
<img alt="
EOF;
$html .= $tplvars['smiley']['primary_code'];
$html .= <<<EOF
" src="
EOF;
$html .= $tplvars['bspath'];
$html .= <<<EOF
images/smileys/
EOF;
$html .= $tplvars['smiley']['smiley_path'];
$html .= <<<EOF
" />
</a>

EOF;
}
$html .= <<<EOF


EOF;
}
$html .= <<<EOF



EOF;
if((isset($tplvars['more_smileys']) && $tplvars['more_smileys'])) {
$html .= <<<EOF

&nbsp;&nbsp;[<a href="javascript:FWS_openDefaultPopup('
EOF;
$html .= $tplvars['smiley_popup_url'];
$html .= <<<EOF
','Smileys',300,
EOF;
$html .= $tplvars['smiley_popup_height'];
$html .= <<<EOF
);">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('showallsmileys'):'');
$html .= <<<EOF
</a>]

EOF;
}
$html .= <<<EOF

</div>

EOF;
}
$html .= <<<EOF

EOF;
return $html;
}
?>