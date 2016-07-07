<?php
function FWS_TPL_themes_default_templates_inc_delete_message_htm($tpl,$number) {
$locale = FWS_Props::get()->locale();
$tplvars = $tpl->get_variables('inc_delete_message.htm',$number);

$html = "";
$html .=<<<EOF

EOF;
if((isset($tplvars['delete_message']) && $tplvars['delete_message'])) {
$html .= <<<EOF

<form method="post" action="
EOF;
$html .= $tplvars['delete_target'];
$html .= <<<EOF
">
<div class="bs_border bs_padbottom">
<h1 class="bs_topic">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('information'):'');
$html .= <<<EOF
</h1>
	<div class="bs_main" style="text-align: center;">
		
EOF;
$html .= $tplvars['delete_message'];
$html .= <<<EOF

		<div class="bs_padtop_big">
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
</form>

<script type="text/javascript">
<!--
if(!Browser.isIE)
{
	document.getElementById('del_yes').type = 'button';
	document.getElementById('del_no').type = 'button';
}
//-->
</script>

EOF;
}
$html .= <<<EOF

EOF;
return $html;
}
?>