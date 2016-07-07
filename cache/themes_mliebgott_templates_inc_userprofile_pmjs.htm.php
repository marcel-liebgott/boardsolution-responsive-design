<?php
function FWS_TPL_themes_mliebgott_templates_inc_userprofile_pmjs_htm($tpl,$number) {
$locale = FWS_Props::get()->locale();
$tplvars = $tpl->get_variables('inc_userprofile_pmjs.htm',$number);

$html = "";
$html .=<<<EOF
<script type="text/javascript">
<!--
function submitForm()
{
	var combo = document.getElementById('operation');
	var url = '
EOF;
$html .= $tplvars['pm_target_url'];
$html .= <<<EOF
';
	switch(combo.selectedIndex)
	{
	 	case 0:
	 		url += '
EOF;
$html .= $tplvars['delete_add'];
$html .= <<<EOF
';
	 		break;

	 	case 1:
	 		url += '
EOF;
$html .= $tplvars['at_mark_read'];
$html .= <<<EOF
';
	 		break;
	 	
	 	case 2:
	 		url += '
EOF;
$html .= $tplvars['at_mark_unread'];
$html .= <<<EOF
';
	 		break;
	}
	
	var form = document.getElementById('pm_form');
	form.action = url;
	form.submit();
}
//-->
</script>
EOF;
return $html;
}
?>