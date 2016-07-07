<?php
function FWS_TPL_themes_mobile_templates_topics_htm($tpl,$number) {
$locale = FWS_Props::get()->locale();
$tplvars = $tpl->get_variables('topics.htm',$number);

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
if((isset($tplvars['latest_topics_top']) && $tplvars['latest_topics_top']) && (isset($tplvars['sub_forum']) && $tplvars['sub_forum'])) {
$html .= <<<EOF


EOF;
$html .= $tpl->parse_template("inc_topics.htm",false);
$html .= <<<EOF

<br />

EOF;
}
$html .= <<<EOF


<div>
	<div style="float: right;">
		
EOF;
if((isset($tplvars['display_topic']) && $tplvars['display_topic'])) {
$html .= <<<EOF

		<a class="bs_button_big" title="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('createnewthread'):'');
$html .= <<<EOF
" href="
EOF;
$html .= ($tpl->check_allowed_method('gurl','simple_url')?$tplvars['gurl']->simple_url('new_topic','&amp;$URL_FID='.$tplvars['fid']):'');
$html .= <<<EOF
">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('newthread'):'');
$html .= <<<EOF
</a>
		
EOF;
}
$html .= <<<EOF

	</div>
	<br style="clear: both;" />
</div>


EOF;
if((isset($tplvars['sub_forums']) && $tplvars['sub_forums'])) {
$html .= <<<EOF

<div class="bs_padbottom">

EOF;
$html .= $tpl->parse_template("inc_forums.htm",false);
$html .= <<<EOF

</div>

EOF;
}
$html .= <<<EOF



EOF;
if((isset($tplvars['contains_topics']) && $tplvars['contains_topics'])) {
$html .= <<<EOF


EOF;
$html .= $tpl->parse_template("inc_topics.htm",false);
$html .= <<<EOF


<div class="bs_padtop">

EOF;
$html .= $tpl->parse_template("inc_pagination.htm",false);
$html .= <<<EOF

</div>

EOF;
} else {
$html .= <<<EOF


EOF;
$html .= $tpl->parse_template("inc_topics.htm",false);
$html .= <<<EOF


EOF;
}
$html .= <<<EOF



EOF;
if((isset($tplvars['latest_topics_bottom']) && $tplvars['latest_topics_bottom']) && (isset($tplvars['sub_forum']) && $tplvars['sub_forum'])) {
$html .= <<<EOF

<div class="bs_padtop">

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