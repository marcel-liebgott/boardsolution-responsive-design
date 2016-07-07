<?php
function FWS_TPL_install_templates_inc_navi_htm($tpl,$number) {
$locale = FWS_Props::get()->locale();
$tplvars = $tpl->get_variables('inc_navi.htm',$number);

$html = "";
$html .=<<<EOF
<table width="100%" cellpadding="0" cellspacing="0">
	<tr>
		<td width="30%">
		<button 
EOF;
if((isset($tplvars['step']) && $tplvars['step'] <= 1) || (isset($tplvars['step']) && $tplvars['step'] > 4)) {
$html .= <<<EOF
disabled="disabled" 
EOF;
}
$html .= <<<EOF

				class="bs_button" onclick="changeActionAndSubmit('mainForm','
EOF;
$html .= $tplvars['back_url'];
$html .= <<<EOF
'); return false;"
				type="submit" name="back" value="back">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('back'):'');
$html .= <<<EOF
</button>
		</td>
		<td width="40%" align="center">
		
EOF;
if((isset($tplvars['step']) && $tplvars['step'] == 2) || (isset($tplvars['step']) && $tplvars['step'] == 3) || (isset($tplvars['step']) && $tplvars['step'] == 4)) {
$html .= <<<EOF

		<button class="bs_button_big" type="submit" value="test">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('refresh'):'');
$html .= <<<EOF
</button>
		
EOF;
} else {
$html .= <<<EOF

		&nbsp;
		
EOF;
}
$html .= <<<EOF

		</td>
		<td width="30%" align="right">
		<button class="bs_button" type="submit" name="forward" value="forward" onclick="changeActionAndSubmit('mainForm','
EOF;
$html .= $tplvars['forward_url'];
$html .= <<<EOF
'); return false;">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('forward'):'');
$html .= <<<EOF
</button>
		</td>
	</tr>
</table>

<script type="text/javascript">
<!--
if(Browser.isIE)
{
	for(tag : document.getElementsByTagName('button'))
	{
		if(tag.getAttribute('name') == 'back' || tag.getAttribute('name') == 'forward')
			tag.setAttribute('name','');
	}
}
//-->
</script>
EOF;
return $html;
}
?>