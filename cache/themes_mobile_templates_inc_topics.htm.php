<?php
function FWS_TPL_themes_mobile_templates_inc_topics_htm($tpl,$number) {
$locale = FWS_Props::get()->locale();
$tplvars = $tpl->get_variables('inc_topics.htm',$number);

$html = "";
$html .=<<<EOF

EOF;
if((isset($tplvars['type']) && $tplvars['type'] != 'contains_cats')) {
$html .= <<<EOF

<div class="bs_border">
	<h1 class="bs_topic">
EOF;
$html .= $tplvars['thread_title'];
$html .= <<<EOF
</h1>
	<ul>
	
EOF;
if((isset($tplvars['num']) && $tplvars['num'] == 0)) {
$html .= <<<EOF

	<div class="bs_main">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('no_topics_found'):'');
$html .= <<<EOF
</div>
	
EOF;
}
$html .= <<<EOF

	
EOF;
$topics_c = -1;
foreach($tplvars['topics'] as $tplvars['index'] => $tplvars['topic']) {
$topics_c++;

$html .= <<<EOF

		<li>
			
EOF;
if((isset($tplvars['topic']['is_important']) && $tplvars['topic']['is_important'])) {
$html .= <<<EOF

			<b>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('important'):'');
$html .= <<<EOF
</b>:
			
EOF;
}
$html .= <<<EOF

			<a 
EOF;
if((isset($tplvars['topic']['is_unread']) && $tplvars['topic']['is_unread'])) {
$html .= <<<EOF
 class="bs_unread"
EOF;
}
$html .= <<<EOF

				
EOF;
if((isset($tplvars['topic']['name_complete']) && $tplvars['topic']['name_complete'] != '')) {
$html .= <<<EOF
title="
EOF;
$html .= $tplvars['topic']['name_complete'];
$html .= <<<EOF
" 
EOF;
}
$html .= <<<EOF
href="
EOF;
$html .= $tplvars['topic']['topic_url'];
$html .= <<<EOF
">
			
EOF;
if((isset($tplvars['topic']['is_moved']) && $tplvars['topic']['is_moved'])) {
$html .= <<<EOF

			<i>
EOF;
$html .= $tplvars['topic']['name'];
$html .= <<<EOF
</i>
			
EOF;
} else {
$html .= <<<EOF

			
EOF;
$html .= $tplvars['topic']['name'];
$html .= <<<EOF

			
EOF;
}
$html .= <<<EOF

			</a>
			
EOF;
if((isset($tplvars['topic']['page_split']) && $tplvars['topic']['page_split'])) {
$html .= <<<EOF

			&nbsp;&nbsp;<span class="bs_desc">
EOF;
$html .= $tplvars['topic']['page_split'];
$html .= <<<EOF
</span>
			
EOF;
}
$html .= <<<EOF

		</li>
	
EOF;
}
$html .= <<<EOF

	</ul>
</div>

EOF;
} else {
$html .= <<<EOF


EOF;
if((isset($tplvars['sub_forum']) && $tplvars['sub_forum'] == false)) {
$html .= <<<EOF

<div class="bs_border">
	<h1 class="bs_topic">
EOF;
$html .= $tplvars['thread_title'];
$html .= <<<EOF
</h1>
	<div class="bs_main" style="text-align: center;">
		
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('no_forums_available'):'');
$html .= <<<EOF

	</div>
</div>

EOF;
}
$html .= <<<EOF


EOF;
}
$html .= <<<EOF

EOF;
return $html;
}
?>