<?php
function FWS_TPL_acp_templates_navi_htm($tpl,$number) {
$locale = FWS_Props::get()->locale();
$tplvars = $tpl->get_variables('navi.htm',$number);

$html = "";
$html .=<<<EOF
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; 
EOF;
$html .= $tplvars['charset'];
$html .= <<<EOF
" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<script type="text/javascript" language="javascript" src="
EOF;
$html .= ($tpl->check_allowed_method('gjs','get_file')?$tplvars['gjs']->get_file('js/basic.js','fws'):'');
$html .= <<<EOF
"></script>

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

<script type="text/javascript" language="javascript">
<!--
function open_close(cat_id,img_id,path)
{
	display =(document.getElementById(cat_id).style.display == 'none') ? 'block' : 'none';
	document.getElementById(cat_id).style.display = display;
	document.images[img_id].src = path + "images/cross" + ((display == "block") ? 'open' : 'closed') + ".gif";
}

var selected = -1;

function ChangeSelection(id,default_class,selected_class)
{
	if(selected != -1)
		FWS_removeClassName(document.getElementById("item_" + selected),selected_class);
	
	FWS_addClassName(document.getElementById("item_" + id),selected_class);
	selected = id;
}
//-->
</script>
<style type="text/css">
body {
	font-family: verdana, tahoma, arial, helvetica, sans-serif;
	font-size: 0.65em;
	color: #000;
	background-color: #bbb;
	margin: 0;
	margin-right: 1px;
}

img {
	border: 0;
}

ul {
	list-style: none;
	margin: 0;
	padding: 0;
}
li {
	margin: 0;
	padding: 0;
}

li.cat a.cat {
	padding-top: 0.2em;
	padding-bottom: 0;
	display: block;
	background-image: url(acp/images/topic.gif);
	background-repeat: repeat-x;
	border: 1px solid #444;
	height: 16px;
	color: #fff;
	font-weight: bold;
	text-decoration: none;
}

li.cat img {
	vertical-align: middle;
}

li.sub a {
	padding-top: 1px;
	padding-left: 0.3em;
	display: block;
	height: 15px;
	color: #000;
	font-weight: bold;
	text-decoration: none;
}
li.sub a:hover {
	background-color: #fff;
}

a.border {
	border-bottom: 1px dashed #000;
}
a.selected {
	background-color: #FFBE5C;
}

</style>
<title>
EOF;
$html .= $tplvars['page_title'];
$html .= <<<EOF
</title>
</head>
<body>

<ul>
	
EOF;
$categories_c = -1;
foreach($tplvars['categories'] as $tplvars['category']) {
$categories_c++;

$html .= <<<EOF

	<li class="cat">
		<a class="cat" href="#" onclick="open_close('cat_
EOF;
$html .= $tplvars['category']['id'];
$html .= <<<EOF
','img_
EOF;
$html .= $tplvars['category']['id'];
$html .= <<<EOF
','
EOF;
$html .= $tplvars['gpath'];
$html .= <<<EOF
acp/');">
		<img id="img_
EOF;
$html .= $tplvars['category']['id'];
$html .= <<<EOF
" src="
EOF;
$html .= $tplvars['gpath'];
$html .= <<<EOF
acp/images/crossopen.gif" alt="+/-" /> 
EOF;
$html .= $tplvars['category']['title'];
$html .= <<<EOF

		</a>
		<ul id="cat_
EOF;
$html .= $tplvars['category']['id'];
$html .= <<<EOF
">
		
EOF;
$category_modules_c = -1;
foreach($tplvars['category']['modules'] as $tplvars['module']) {
$category_modules_c++;

$html .= <<<EOF

		<li class="sub">
			<a id="item_
EOF;
$html .= $tplvars['module']['id'];
$html .= <<<EOF
" 
EOF;
if((isset($category_modules_c) && $category_modules_c < count($tplvars['category']['modules']) - 1) || (isset($categories_c) && $categories_c == count($tplvars['categories']) - 1)) {
$html .= <<<EOF
class="border"
EOF;
}
$html .= <<<EOF

			onclick="ChangeSelection(
EOF;
$html .= $tplvars['module']['id'];
$html .= <<<EOF
,'border','selected'); 
EOF;
$html .= $tplvars['module']['javascript'];
$html .= <<<EOF
" 
EOF;
$html .= $tplvars['module']['frame'];
$html .= <<<EOF
 href="
EOF;
$html .= $tplvars['module']['url'];
$html .= <<<EOF
">&rarr; 
EOF;
$html .= $tplvars['module']['title'];
$html .= <<<EOF
</a>
		</li>
		
EOF;
}
$html .= <<<EOF

		</ul>
	</li>
	
EOF;
}
$html .= <<<EOF

</ul>

</body>
</html>
EOF;
return $html;
}
?>