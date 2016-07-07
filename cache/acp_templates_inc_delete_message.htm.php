<?php
function FWS_TPL_acp_templates_inc_delete_message_htm($tpl,$number) {
$locale = FWS_Props::get()->locale();
$tplvars = $tpl->get_variables('inc_delete_message.htm',$number);

$html = "";
$html .=<<<EOF

EOF;
if((isset($tplvars['delete_message']) && $tplvars['delete_message'])) {
$html .= <<<EOF

<div class="a_border a_pad_bottom">
	<h1 class="a_topic">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('information'):'');
$html .= <<<EOF
</h1>
	<div class="a_main" style="text-align: center;">
		
EOF;
$html .= $tplvars['delete_message'];
$html .= <<<EOF

		<div class="a_pad_double">
			<input id="del_yes" type="submit" style="width: 50px;" name="option_yes"
					value="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('yes'):'');
$html .= <<<EOF
" onclick="document.location.href = '
EOF;
$html .= $tplvars['yes_url'];
$html .= <<<EOF
';" />
			&nbsp;
			<input id="del_no" type="submit" style="width: 50px;" name="option_no"
					value="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('no'):'');
$html .= <<<EOF
" onclick="document.location.href = '
EOF;
$html .= $tplvars['no_url'];
$html .= <<<EOF
';" />
		</div>
	</div>
</div>

EOF;
}
$html .= <<<EOF

EOF;
return $html;
}
?>