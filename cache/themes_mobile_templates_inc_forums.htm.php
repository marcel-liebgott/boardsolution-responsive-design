<?php
function FWS_TPL_themes_mobile_templates_inc_forums_htm($tpl,$number) {
$locale = FWS_Props::get()->locale();
$tplvars = $tpl->get_variables('inc_forums.htm',$number);

$html = "";
$html .=<<<EOF

EOF;
if((isset($tplvars['forums']) && $tplvars['forums'])) {
$html .= <<<EOF

<div class="bs_border bs_padtop">
	<h1 class="bs_topic">
EOF;
$html .= $tplvars['title'];
$html .= <<<EOF
</h1>
	
EOF;
$forums_c = -1;
foreach($tplvars['forums'] as $tplvars['forum']) {
$forums_c++;

$html .= <<<EOF

		
EOF;
$forum_path_images_c = -1;
foreach($tplvars['forum']['path_images'] as $tplvars['pimage']) {
$forum_path_images_c++;

$html .= <<<EOF

		<div style="padding-left: 25px;">
		
EOF;
}
$html .= <<<EOF

		
		<ul>
		
EOF;
if((isset($tplvars['forum']['contains_forums']) && $tplvars['forum']['contains_forums'])) {
$html .= <<<EOF

		<li>
			<a href="
EOF;
$html .= $tplvars['forum']['forum_url'];
$html .= <<<EOF
"><b>
EOF;
$html .= $tplvars['forum']['forum_name_ins'];
$html .= <<<EOF
</b></a>
		</li>
		
EOF;
} else {
$html .= <<<EOF

		<li>
			<a 
EOF;
if((isset($tplvars['forum']['is_unread']) && $tplvars['forum']['is_unread'])) {
$html .= <<<EOF
class="bs_unread" 
EOF;
}
$html .= <<<EOF
href="
EOF;
$html .= $tplvars['forum']['forum_url'];
$html .= <<<EOF
">
EOF;
$html .= $tplvars['forum']['forum_name_ins'];
$html .= <<<EOF
</a>
			
EOF;
if((isset($tplvars['forum']['sub_forums']) && $tplvars['forum']['sub_forums'])) {
$html .= <<<EOF

			<div class="bs_forums_small">
			<b>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('subdirs'):'');
$html .= <<<EOF
:</b> 
EOF;
$html .= $tplvars['forum']['sub_forums'];
$html .= <<<EOF

			</div>
			
EOF;
}
$html .= <<<EOF

		</li>
		
EOF;
}
$html .= <<<EOF

		</ul>
	
		
EOF;
$forum_path_images_c = -1;
foreach($tplvars['forum']['path_images'] as $tplvars['pimage']) {
$forum_path_images_c++;

$html .= <<<EOF

		</div>
		
EOF;
}
$html .= <<<EOF

	
EOF;
}
$html .= <<<EOF

</div>

EOF;
}
$html .= <<<EOF

EOF;
return $html;
}
?>