<?php
function FWS_TPL_themes_default_templates_inc_header_htm($tpl,$number) {
$locale = FWS_Props::get()->locale();
$tplvars = $tpl->get_variables('inc_header.htm',$number);

$html = "";
$html .=<<<EOF
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>
EOF;
$html .= $tplvars['title'];
$html .= <<<EOF
</title>
<meta name="robots" content="
EOF;
$html .= $tplvars['robots_value'];
$html .= <<<EOF
" />
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
<meta http-equiv="Content-Script-Type" content="text/javascript" />

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
<script type="text/javascript" src="
EOF;
$html .= ($tpl->check_allowed_method('gjs','get_file')?$tplvars['gjs']->get_file('src/functions.js'):'');
$html .= <<<EOF
"></script>
<script type="text/javascript" src="
EOF;
$html .= ($tpl->check_allowed_method('gjs','get_file')?$tplvars['gjs']->get_file('js/imgviewer.js','fws'):'');
$html .= <<<EOF
"></script>

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

<link rel="stylesheet" type="text/css" href="
EOF;
$html .= ($tpl->check_allowed_method('guser','get_theme_item_path')?$tplvars['guser']->get_theme_item_path('advanced.css'):'');
$html .= <<<EOF
" />
<link rel="stylesheet" type="text/css" href="
EOF;
$html .= ($tpl->check_allowed_method('guser','get_theme_item_path')?$tplvars['guser']->get_theme_item_path('basic.css'):'');
$html .= <<<EOF
" />

EOF;
if((isset($tplvars['feeds_enabled']) && $tplvars['feeds_enabled'])) {
$html .= <<<EOF

<link rel="alternate" type="application/rss+xml" title="RSS 2.0 Newsfeed" href="
EOF;
$html .= $tplvars['rss20_feed'];
$html .= <<<EOF
" />
<link rel="alternate" type="application/atom+xml" title="Atom Newsfeed" href="
EOF;
$html .= $tplvars['atom_feed'];
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

<script type="text/javascript">
<!--
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

FWS_configureImageViewer(
	true,80,10,10,10,5,'30px','
EOF;
$html .= ($tpl->check_allowed_method('guser','get_theme_item_path')?$tplvars['guser']->get_theme_item_path("images/wait.gif"):'');
$html .= <<<EOF
',5,
	"
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang("imgviewer_load_error"):'');
$html .= <<<EOF
"
);

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

</head>
<body class="bs_body">

<a id="top"></a>


EOF;
if((isset($tplvars['show_headline']) && $tplvars['show_headline'])) {
$html .= <<<EOF


EOF;
$html .= $tpl->parse_template("inc_headline.htm",false);
$html .= <<<EOF


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