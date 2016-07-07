<?php
function FWS_TPL_acp_templates_frameset_htm($tpl,$number) {
$locale = FWS_Props::get()->locale();
$tplvars = $tpl->get_variables('frameset.htm',$number);

$html = "";
$html .=<<<EOF
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; 
EOF;
$html .= $tplvars['charset'];
$html .= <<<EOF
" />
<title>
EOF;
$html .= $tplvars['page_title'];
$html .= <<<EOF
</title>
</head>
<frameset cols="200,*">
	<frame src="
EOF;
$html .= $tplvars['navi_file'];
$html .= <<<EOF
" id="navigation" name="navigation" frameborder="0"
			scrolling="auto" />
	<frame src="
EOF;
$html .= $tplvars['content_file'];
$html .= <<<EOF
" id="content" name="content" frameborder="0"
			scrolling="yes" />
</frameset>
</html>
EOF;
return $html;
}
?>