<?php
function FWS_TPL_themes_default_templates_inc_pagination_htm($tpl,$number) {
$locale = FWS_Props::get()->locale();
$tplvars = $tpl->get_variables('inc_pagination.htm',$number);

$html = "";
$html .=<<<EOF

EOF;
if((isset($tplvars['page']) && $tplvars['page'])) {
$html .= <<<EOF

<table width="100%" cellpadding="0" cellspacing="0">
	<tr>
		<!-- START -->
		<td class="bs_body" align="center" width="40">
		
EOF;
if((isset($tplvars['page']) && $tplvars['page'] > 1)) {
$html .= <<<EOF

		<a href="
EOF;
$html .= $tplvars['first_url'];
$html .= <<<EOF
">
		<img title="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('firstpage'):'');
$html .= <<<EOF
" src="
EOF;
$html .= ($tpl->check_allowed_method('guser','get_theme_item_path')?$tplvars['guser']->get_theme_item_path('images/navigation/jmp_to_start.gif'):'');
$html .= <<<EOF
" alt="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('firstpage'):'');
$html .= <<<EOF
" />
		</a>
		
EOF;
} else {
$html .= <<<EOF

		<img src="
EOF;
$html .= ($tpl->check_allowed_method('guser','get_theme_item_path')?$tplvars['guser']->get_theme_item_path('images/navigation/jmp_to_start_disabled.gif'):'');
$html .= <<<EOF
" title="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('notavailable'):'');
$html .= <<<EOF
" alt="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('notavailable'):'');
$html .= <<<EOF
" />
		
EOF;
}
$html .= <<<EOF

		</td>
		
		<!-- PREVIOUS -->
		<td class="bs_body" align="center" width="20">
		
EOF;
if((isset($tplvars['page']) && $tplvars['page'] > 1)) {
$html .= <<<EOF

		<a href="
EOF;
$html .= $tplvars['prev_url'];
$html .= <<<EOF
">
		<img title="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('back'):'');
$html .= <<<EOF
" src="
EOF;
$html .= ($tpl->check_allowed_method('guser','get_theme_item_path')?$tplvars['guser']->get_theme_item_path('images/navigation/prev.gif'):'');
$html .= <<<EOF
" alt="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('back'):'');
$html .= <<<EOF
" />
		</a>
		
EOF;
} else {
$html .= <<<EOF

		<img src="
EOF;
$html .= ($tpl->check_allowed_method('guser','get_theme_item_path')?$tplvars['guser']->get_theme_item_path('images/navigation/prev_disabled.gif'):'');
$html .= <<<EOF
" title="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('notavailable'):'');
$html .= <<<EOF
" alt="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('notavailable'):'');
$html .= <<<EOF
" />
		
EOF;
}
$html .= <<<EOF

		</td>
		
		<!-- PAGES -->
		<td class="bs_body" align="center">
		
EOF;
$numbers_c = -1;
foreach($tplvars['numbers'] as $tplvars['number']) {
$numbers_c++;

$html .= <<<EOF

		
EOF;
if((isset($tplvars['number']['number']) && isset($tplvars['page']) && $tplvars['number']['number'] == $tplvars['page'])) {
$html .= <<<EOF

		<span class="bs_pageno bs_pagecurrent">
EOF;
$html .= $tplvars['number']['number'];
$html .= <<<EOF
</span>
		
EOF;
} else {
$html .= <<<EOF

		
EOF;
if((isset($tplvars['number']['link']) && $tplvars['number']['link'])) {
$html .= <<<EOF

		<span class="bs_pageno"><a href="
EOF;
$html .= $tplvars['number']['link'];
$html .= <<<EOF
">
EOF;
$html .= $tplvars['number']['number'];
$html .= <<<EOF
</a></span>
		
EOF;
} else {
$html .= <<<EOF

		
EOF;
$html .= $tplvars['number']['number'];
$html .= <<<EOF

		
EOF;
}
$html .= <<<EOF

		
EOF;
}
$html .= <<<EOF

		
EOF;
}
$html .= <<<EOF

		&nbsp;&nbsp;&nbsp;
		(
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('viewing'):'');
$html .= <<<EOF
: 
EOF;
$html .= $tplvars['start_item'];
$html .= <<<EOF
 &ndash; 
EOF;
$html .= $tplvars['end_item'];
$html .= <<<EOF
; 
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('total'):'');
$html .= <<<EOF
: 
EOF;
$html .= $tplvars['total_items'];
$html .= <<<EOF
)
		</td>
		
		<!-- NEXT -->
		<td class="bs_body" align="center" width="20">
		
EOF;
if((isset($tplvars['page']) && isset($tplvars['total_pages']) && $tplvars['page'] < $tplvars['total_pages'])) {
$html .= <<<EOF

		<a href="
EOF;
$html .= $tplvars['next_url'];
$html .= <<<EOF
">
		<img title="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('forward'):'');
$html .= <<<EOF
" src="
EOF;
$html .= ($tpl->check_allowed_method('guser','get_theme_item_path')?$tplvars['guser']->get_theme_item_path('images/navigation/next.gif'):'');
$html .= <<<EOF
" alt="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('forward'):'');
$html .= <<<EOF
" />
		</a>
		
EOF;
} else {
$html .= <<<EOF

		<img src="
EOF;
$html .= ($tpl->check_allowed_method('guser','get_theme_item_path')?$tplvars['guser']->get_theme_item_path('images/navigation/next_disabled.gif'):'');
$html .= <<<EOF
" title="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('notavailable'):'');
$html .= <<<EOF
" alt="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('notavailable'):'');
$html .= <<<EOF
" />
		
EOF;
}
$html .= <<<EOF

		</td>
		
		<!-- LAST -->
		<td class="bs_body" align="center" width="40">
		
EOF;
if((isset($tplvars['page']) && isset($tplvars['total_pages']) && $tplvars['page'] < $tplvars['total_pages'])) {
$html .= <<<EOF

		<a href="
EOF;
$html .= $tplvars['last_url'];
$html .= <<<EOF
">
		<img title="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('lastpage'):'');
$html .= <<<EOF
" src="
EOF;
$html .= ($tpl->check_allowed_method('guser','get_theme_item_path')?$tplvars['guser']->get_theme_item_path('images/navigation/jmp_to_end.gif'):'');
$html .= <<<EOF
" alt="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('lastpage'):'');
$html .= <<<EOF
" />
		</a>
		
EOF;
} else {
$html .= <<<EOF

		<img src="
EOF;
$html .= ($tpl->check_allowed_method('guser','get_theme_item_path')?$tplvars['guser']->get_theme_item_path('images/navigation/jmp_to_end_disabled.gif'):'');
$html .= <<<EOF
" title="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('notavailable'):'');
$html .= <<<EOF
" alt="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('notavailable'):'');
$html .= <<<EOF
" />
		
EOF;
}
$html .= <<<EOF

		</td>
	</tr>
</table>

EOF;
}
$html .= <<<EOF

EOF;
return $html;
}
?>