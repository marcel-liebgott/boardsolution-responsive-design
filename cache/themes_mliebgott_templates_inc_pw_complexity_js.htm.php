<?php
function FWS_TPL_themes_mliebgott_templates_inc_pw_complexity_js_htm($tpl,$number) {
$locale = FWS_Props::get()->locale();
$tplvars = $tpl->get_variables('inc_pw_complexity_js.htm',$number);

$html = "";
$html .=<<<EOF
<script type="text/javascript">
<!--
function show_pw_complexity(fieldID,outputID)
{
	var pw = document.getElementById(fieldID);
	var complexity = analysePassword(pw.value);
	
	var color = null;
	var text = null;
	switch(complexity)
	{
		case 'low':
			color = '#FF0000';
			text = '
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('pw_complexity_low'):'');
$html .= <<<EOF
';
			break;
		case 'medium':
			color = '#FF9900';
			text = '
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('pw_complexity_medium'):'');
$html .= <<<EOF
';
			break;
		case 'high':
			color = '#0000FF';
			text = '
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('pw_complexity_high'):'');
$html .= <<<EOF
';
			break;
		case 'veryhigh':
			color = '#00FF00';
			text = '
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('pw_complexity_veryhigh'):'');
$html .= <<<EOF
';
			break;
	}
	
	var notice_div = document.getElementById(outputID);
	notice_div.innerHTML = text.replace(/%s/,color);
}
//-->
</script>
EOF;
return $html;
}
?>