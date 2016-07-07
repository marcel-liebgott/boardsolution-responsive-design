<?php
function FWS_TPL_install_templates_inc_header_htm($tpl,$number) {
$locale = FWS_Props::get()->locale();
$tplvars = $tpl->get_variables('inc_header.htm',$number);

$html = "";
$html .=<<<EOF
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; 
EOF;
$html .= $tplvars['charset'];
$html .= <<<EOF
" />
	<meta http-equiv="Content-Style-Type" content="text/css" />
	
EOF;
if((isset($tplvars['redirect']) && $tplvars['redirect'])) {
$html .= <<<EOF

	<meta http-equiv="refresh" content="
EOF;
$html .= $tplvars['redirect']['time'];
$html .= <<<EOF
; url=
EOF;
$html .= $tplvars['redirect']['url'];
$html .= <<<EOF
" />
	
EOF;
}
$html .= <<<EOF

	<title>
EOF;
$html .= $tplvars['title'];
$html .= <<<EOF
</title>
	<link rel="stylesheet" type="text/css" href="install/templates/style.css" />
	<script type="text/javascript">
	<!--
	function changeActionAndSubmit(formID,action)
	{
		var form = document.getElementById(formID);
		form.action = action;
		form.submit();
	}
	//-->
	</script>
</head>
<body class="bs_body">


EOF;
if((isset($tplvars['step']) && $tplvars['step'] < 5)) {
$html .= <<<EOF

<div class="bs_padbottom">
	<form method="get" action="
EOF;
$html .= $tplvars['target_url'];
$html .= <<<EOF
">
	<input type="hidden" name="action" value="
EOF;
$html .= $tplvars['step'];
$html .= <<<EOF
" />
	<div align="center" class="bs_body">
		Language:
		<select name="lang">
			<option value="">&ndash; Please choose &ndash;</option>
			<option
EOF;
$html .= $tplvars['sel_ger_du'];
$html .= <<<EOF
 value="ger_du">German (Du-Version)</option>
			<option
EOF;
$html .= $tplvars['sel_ger_sie'];
$html .= <<<EOF
 value="ger_sie">German (Sie-Version)</option>
			<option
EOF;
$html .= $tplvars['sel_en'];
$html .= <<<EOF
 value="en">English</option>
		</select>
		<input type="submit" value="Go!" />
	</div>
	</form>
</div>

EOF;
}
$html .= <<<EOF



EOF;
if((isset($tplvars['step']) && $tplvars['step'] < 6)) {
$html .= <<<EOF

<form id="mainForm" method="post" action="
EOF;
$html .= $tplvars['target_url'];
$html .= <<<EOF
">
<input type="hidden" name="step_submit" value="
EOF;
$html .= $tplvars['step'];
$html .= <<<EOF
" />

<div class="bs_padbottom">
	
EOF;
$html .= $tpl->parse_template("inc_navi.htm",false);
$html .= <<<EOF

</div>

EOF;
}
$html .= <<<EOF



EOF;
$html .= $tpl->parse_template("inc_messages.htm",false);
$html .= <<<EOF

EOF;
return $html;
}
?>