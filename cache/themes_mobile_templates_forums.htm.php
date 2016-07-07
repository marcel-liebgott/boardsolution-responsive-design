<?php
function FWS_TPL_themes_mobile_templates_forums_htm($tpl,$number) {
$locale = FWS_Props::get()->locale();
$tplvars = $tpl->get_variables('forums.htm',$number);

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
if((isset($tplvars['latest_topics_top']) && $tplvars['latest_topics_top'])) {
$html .= <<<EOF

<div class="bs_padbottom_big">

EOF;
$html .= $tpl->parse_template("inc_topics.htm",false);
$html .= <<<EOF

</div>

EOF;
}
$html .= <<<EOF



EOF;
$html .= $tpl->parse_template("inc_forums.htm",false);
$html .= <<<EOF



EOF;
if((isset($tplvars['latest_topics_bottom']) && $tplvars['latest_topics_bottom'])) {
$html .= <<<EOF

<div class="bs_padtop_big">

EOF;
$html .= $tpl->parse_template("inc_topics.htm",false);
$html .= <<<EOF

</div>

EOF;
}
$html .= <<<EOF


<div class="bs_border">
	<div class="bs_main">
		<form method="post" action="
EOF;
$html .= ($tpl->check_allowed_method('gurl','simple_url')?$tplvars['gurl']->simple_url('search'):'');
$html .= <<<EOF
">
		
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('search'):'');
$html .= <<<EOF
: <input type="text" name="keyword" size="15" />
		<input type="submit" name="submit" value="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('go'):'');
$html .= <<<EOF
" />
		</form>
	</div>
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