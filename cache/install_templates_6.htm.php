<?php
function FWS_TPL_install_templates_6_htm($tpl,$number) {
$locale = FWS_Props::get()->locale();
$tplvars = $tpl->get_variables('6.htm',$number);

$html = "";
$html .=<<<EOF

EOF;
$html .= $tpl->parse_template("inc_header.htm",false);
$html .= <<<EOF



EOF;
if((isset($tplvars['module_error']) && $tplvars['module_error'] == false)) {
$html .= <<<EOF

<form method="post" action="index.php">
<div class="bs_border">
	<h1 class="bs_topic">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('information'):'');
$html .= <<<EOF
</h1>
	<div class="bs_main" style="text-align: center;">
	<b>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('installation_complete'):'');
$html .= <<<EOF
</b><br />
	
	
EOF;
if((isset($tplvars['type']) && $tplvars['type'] == 'update')) {
$html .= <<<EOF

	<div class="bs_padtop bs_padbottom">
		<span style="font-size: 12px; color: #FF0000;">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('important_tasks'):'');
$html .= <<<EOF
</span>
	</div>
	
EOF;
}
$html .= <<<EOF

	
	<div class="bs_padtop">
		<input id="submit_btn" type="submit" value="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('toboard'):'');
$html .= <<<EOF
"
			
EOF;
if((isset($tplvars['type']) && $tplvars['type'] == 'update')) {
$html .= <<<EOF
disabled="disabled" 
EOF;
}
$html .= <<<EOF
/>
	</div>
	</div>
</div>
</form>


EOF;
if((isset($tplvars['type']) && $tplvars['type'] == 'update')) {
$html .= <<<EOF

<script type="text/javascript">
<!--
function countDown(id,title,seconds)
{
	var d = document.getElementById(id);
	if(seconds > 0)
	{
		d.value = title + " " + seconds + "...";
		d.style.color = '#CCCCCC';
		window.setTimeout('countDown("' + id + '","' + title + '",' + (seconds - 1) + ')',1000);
	}
	else
	{
		d.value = title;
		d.style.color = '#000000';
		d.disabled = false;
	}
}

countDown("submit_btn","
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('toboard'):'');
$html .= <<<EOF
",10);
//-->
</script>

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