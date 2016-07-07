<?php
function FWS_TPL_acp_templates_inc_header_htm($tpl,$number) {
$locale = FWS_Props::get()->locale();
$tplvars = $tpl->get_variables('inc_header.htm',$number);

$html = "";
$html .=<<<EOF
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>
EOF;
$html .= $tplvars['title'];
$html .= <<<EOF
</title>
<meta http-equiv="Content-Type" content="
EOF;
$html .= $tplvars['mimetype'];
$html .= <<<EOF
; 
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


EOF;
if((isset($tplvars['gisloggedin']) && $tplvars['gisloggedin'] == false)) {
$html .= <<<EOF

<script type="text/javascript" language="javascript">
<!--
	parent.location.href = 'admin.php';
//-->
</script>

EOF;
}
$html .= <<<EOF

<script type="text/javascript" src="
EOF;
$html .= ($tpl->check_allowed_method('gjs','get_file')?$tplvars['gjs']->get_file('src/functions.js'):'');
$html .= <<<EOF
"></script>
<script type="text/javascript" src="
EOF;
$html .= ($tpl->check_allowed_method('gjs','get_file')?$tplvars['gjs']->get_file('js/basic.js','fws'):'');
$html .= <<<EOF
"></script>
<script type="text/javascript" src="
EOF;
$html .= ($tpl->check_allowed_method('gjs','get_file')?$tplvars['gjs']->get_file('js/ajax.js','fws'):'');
$html .= <<<EOF
"></script>

EOF;
$jsfiles_c = -1;
foreach($tplvars['jsfiles'] as $tplvars['file']) {
$jsfiles_c++;

$html .= <<<EOF

<script type="
EOF;
$html .= $tplvars['file']['type'];
$html .= <<<EOF
" src="
EOF;
$html .= $tplvars['file']['src'];
$html .= <<<EOF
"></script>

EOF;
}
$html .= <<<EOF

<script type="text/javascript">
<!--
function setCookie(name,value,lifetime)
{
	document.cookie = escape(name) + "=" + escape(value) +
		(lifetime ? ";expires=" + (new Date((new Date()).getTime() + (1000 * lifetime))).toGMTString() : "") +
		";path=
EOF;
$html .= $tplvars['cookie_path'];
$html .= <<<EOF
;domain=
EOF;
$html .= $tplvars['cookie_domain'];
$html .= <<<EOF
";
}

var myAjax = new FWS_Ajax();
myAjax.setMimeType('text/plain; 
EOF;
$html .= $tplvars['charset'];
$html .= <<<EOF
');
myAjax.setEventHandler('onstart',function() {
	FWS_displayWaitBar('ajax_wait_bar');
});
myAjax.setEventHandler('onfinish',function() {
	FWS_hideElement('ajax_wait_bar');
});
//-->
</script>

EOF;
$jsblocks_c = -1;
foreach($tplvars['jsblocks'] as $tplvars['block']) {
$jsblocks_c++;

$html .= <<<EOF

<script type="
EOF;
$html .= $tplvars['block']['type'];
$html .= <<<EOF
">
<!--

EOF;
$html .= $tplvars['block']['code'];
$html .= <<<EOF

//-->
</script>

EOF;
}
$html .= <<<EOF


<link rel="stylesheet" type="text/css" href="
EOF;
$html .= $tplvars['gpath'];
$html .= <<<EOF
acp/templates/style.css" />

EOF;
$cssfiles_c = -1;
foreach($tplvars['cssfiles'] as $tplvars['file']) {
$cssfiles_c++;

$html .= <<<EOF

<link rel="stylesheet" type="
EOF;
$html .= $tplvars['file']['type'];
$html .= <<<EOF
" href="
EOF;
$html .= $tplvars['file']['src'];
$html .= <<<EOF
" />

EOF;
}
$html .= <<<EOF

<style type="text/css">
div.bs_signature {
	
EOF;
if((isset($tplvars['sig_max_height']) && $tplvars['sig_max_height'] > 0)) {
$html .= <<<EOF

	height: expression( this.scrollHeight > 
EOF;
$html .= $tplvars['sig_max_height'] - 1;
$html .= <<<EOF
 ? "
EOF;
$html .= $tplvars['sig_max_height'];
$html .= <<<EOF
px" : "auto" );
	max-height: 
EOF;
$html .= $tplvars['sig_max_height'];
$html .= <<<EOF
px;
	overflow: hidden;
	
EOF;
}
$html .= <<<EOF

}
</style>

EOF;
$cssblocks_c = -1;
foreach($tplvars['cssblocks'] as $tplvars['block']) {
$cssblocks_c++;

$html .= <<<EOF

<style type="
EOF;
$html .= $tplvars['block']['type'];
$html .= <<<EOF
">

EOF;
$html .= $tplvars['block']['code'];
$html .= <<<EOF

</style>

EOF;
}
$html .= <<<EOF

</head>
<body>


EOF;
if((isset($tplvars['position']) && $tplvars['position'] != '')) {
$html .= <<<EOF

<div id="position">
<b>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('position'):'');
$html .= <<<EOF
:</b> 
EOF;
$html .= $tplvars['position'];
$html .= <<<EOF

</div>

EOF;
}
$html .= <<<EOF



EOF;
$html .= $tpl->parse_template("inc_messages.htm",false);
$html .= <<<EOF


<div class="a_block_pad">
EOF;
return $html;
}
?>