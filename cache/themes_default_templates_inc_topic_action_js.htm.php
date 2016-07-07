<?php
function FWS_TPL_themes_default_templates_inc_topic_action_js_htm($tpl,$number) {
$locale = FWS_Props::get()->locale();
$tplvars = $tpl->get_variables('inc_topic_action_js.htm',$number);

$html = "";
$html .=<<<EOF
<script type="text/javascript">
<!--
function getModActionURL()
{
	var comboBox = document.getElementById('topic_action');
	if(comboBox.value != "")
	{
		switch(comboBox.value)
		{
			case "edit":
				return "
EOF;
$html .= ($tpl->check_allowed_method('gurl','simple_url')?$tplvars['gurl']->simple_url('edit_topic','&$URL_FID='.$tplvars['fid'].'&$URL_ID=__ID__','&'):'');
$html .= <<<EOF
";
			case "delete":
				return "
EOF;
$html .= ($tpl->check_allowed_method('gurl','simple_url')?$tplvars['gurl']->simple_url('delete_topics','&$URL_FID='.$tplvars['fid'].'&$URL_ID=__ID__','&'):'');
$html .= <<<EOF
";
			case "move":
				return "
EOF;
$html .= ($tpl->check_allowed_method('gurl','simple_url')?$tplvars['gurl']->simple_url('move_topics','&$URL_FID='.$tplvars['fid'].'&$URL_ID=__ID__','&'):'');
$html .= <<<EOF
";
			case "open":
				return "
EOF;
$html .= ($tpl->check_allowed_method('gurl','simple_url')?$tplvars['gurl']->simple_url('openclose_topics','&$URL_MODE=open&$URL_FID='.$tplvars['fid'].'&$URL_ID=__ID__','&'):'');
$html .= <<<EOF
";
			case "close":
				return "
EOF;
$html .= ($tpl->check_allowed_method('gurl','simple_url')?$tplvars['gurl']->simple_url('openclose_topics','&$URL_MODE=close&$URL_FID='.$tplvars['fid'].'&$URL_ID=__ID__','&'):'');
$html .= <<<EOF
";
			case "lock":
				return "
EOF;
$html .= ($tpl->check_allowed_method('gurl','simple_url')?$tplvars['gurl']->simple_url('lock_topics','&$URL_FID='.$tplvars['fid'].'&$URL_ID=__ID__','&'):'');
$html .= <<<EOF
";
			case "mark_read":
				return "
EOF;
$html .= ($tpl->check_allowed_method('gurl','simple_url')?$tplvars['gurl']->simple_url(0,'&$URL_AT=$ACTION_CHANGE_READ_STATUS&$URL_LOC=read&$URL_MODE=topics&$URL_FID='.$tplvars['fid'].'&$URL_SITE='.$tplvars['site'].'&$URL_ID=__ID__','&',true):'');
$html .= <<<EOF
";
			case "mark_unread":
				return "
EOF;
$html .= ($tpl->check_allowed_method('gurl','simple_url')?$tplvars['gurl']->simple_url(0,'&$URL_AT=$ACTION_CHANGE_READ_STATUS&$URL_LOC=unread&$URL_MODE=topics&$URL_FID='.$tplvars['fid'].'&$URL_SITE='.$tplvars['site'].'&$URL_ID=__ID__','&',true):'');
$html .= <<<EOF
";
		}
	}

	return "";
}
//-->
</script>
EOF;
return $html;
}
?>