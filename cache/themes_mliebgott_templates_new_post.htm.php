<?php
function FWS_TPL_themes_mliebgott_templates_new_post_htm($tpl,$number) {
$locale = FWS_Props::get()->locale();
$tplvars = $tpl->get_variables('new_post.htm',$number);

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



EOF;
$html .= $tpl->parse_template("inc_post_preview.htm",false);
$html .= <<<EOF


<form method="post" enctype="multipart/form-data" action="
EOF;
$html .= $tplvars['target_url'];
$html .= <<<EOF
" onsubmit="BS_refresh_text();">
<input type="hidden" name="action_type" value="
EOF;
$html .= $tplvars['action_type'];
$html .= <<<EOF
" />
<input type="hidden" name="timestamp" value="
EOF;
$html .= $tplvars['timestamp'];
$html .= <<<EOF
" />
<div class="bs_border">
	<h1 class="bs_topic">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('newentry'):'');
$html .= <<<EOF
</h1>
	<fieldset class="bs_form">
		
EOF;
$html .= $tpl->parse_template("inc_post_form.htm",false);
$html .= <<<EOF

	</fieldset>
</div>
<center>
	<input type="button" value="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('back'):'');
$html .= <<<EOF
" onclick="document.location.href='
EOF;
$html .= $tplvars['back_url'];
$html .= <<<EOF
'" />
	<input type="submit" name="preview" value="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('preview'):'');
$html .= <<<EOF
" />
	<input type="submit" name="submit" value="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('submit'):'');
$html .= <<<EOF
" accesskey="s" />
</center>
</form>

<div class="bs_padtop">

EOF;
$html .= $tpl->parse_template("inc_message_review.htm",false);
$html .= <<<EOF

</div>


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