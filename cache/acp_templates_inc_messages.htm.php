<?php
function FWS_TPL_acp_templates_inc_messages_htm($tpl,$number) {
$locale = FWS_Props::get()->locale();
$tplvars = $tpl->get_variables('inc_messages.htm',$number);

$html = "";
$html .=<<<EOF

EOF;
if((isset($tplvars['messages']) && $tplvars['messages'])) {
$html .= <<<EOF

<div class="a_border a_pad">
	<h1 class="a_topic">
EOF;
$html .= $tplvars['title'];
$html .= <<<EOF
</h1>
	<div class="a_main" style="text-align: center; padding-top: 2.5em; padding-bottom: 2.5em;">
		
EOF;
if((isset($tplvars['errors']) && $tplvars['errors'])) {
$html .= <<<EOF

		<div style="padding: 0.3em;">
		
EOF;
if((count($tplvars['errors']) == 1)) {
$html .= <<<EOF

		<p>
		<span class="a_msg_error">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('error'):'');
$html .= <<<EOF
:</span>
		
EOF;
$errors_c = -1;
foreach($tplvars['errors'] as $tplvars['error']) {
$errors_c++;

$html .= <<<EOF

		
EOF;
$html .= $tplvars['error'];
$html .= <<<EOF

		
EOF;
}
$html .= <<<EOF

		</p>
		
EOF;
} else {
$html .= <<<EOF

		<div align="left">
			<span class="a_msg_error">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('errors'):'');
$html .= <<<EOF
:</span>
			<ul>
				
EOF;
$errors_c = -1;
foreach($tplvars['errors'] as $tplvars['error']) {
$errors_c++;

$html .= <<<EOF

				<li>
EOF;
$html .= $tplvars['error'];
$html .= <<<EOF
</li>
				
EOF;
}
$html .= <<<EOF

			</ul>
		</div>
		
EOF;
}
$html .= <<<EOF

		</div>
		
EOF;
}
$html .= <<<EOF

		
		
EOF;
if((isset($tplvars['warnings']) && $tplvars['warnings'])) {
$html .= <<<EOF

		<div style="padding: 0.3em;">
		
EOF;
if((count($tplvars['warnings']) == 1)) {
$html .= <<<EOF

		<p>
		<span class="a_msg_warning">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('warning'):'');
$html .= <<<EOF
:</span>
		
EOF;
$warnings_c = -1;
foreach($tplvars['warnings'] as $tplvars['warning']) {
$warnings_c++;

$html .= <<<EOF

		
EOF;
$html .= $tplvars['warning'];
$html .= <<<EOF

		
EOF;
}
$html .= <<<EOF

		</p>
		
EOF;
} else {
$html .= <<<EOF

		<div align="left">
			<span class="a_msg_warning">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('warnings'):'');
$html .= <<<EOF
:</span>
			<ul>
				
EOF;
$warnings_c = -1;
foreach($tplvars['warnings'] as $tplvars['warning']) {
$warnings_c++;

$html .= <<<EOF

				<li>
EOF;
$html .= $tplvars['warning'];
$html .= <<<EOF
</li>
				
EOF;
}
$html .= <<<EOF

			</ul>
		</div>
		
EOF;
}
$html .= <<<EOF

		</div>
		
EOF;
}
$html .= <<<EOF

		
		
EOF;
if((isset($tplvars['notices']) && $tplvars['notices'])) {
$html .= <<<EOF

		<div style="padding: 0.3em;">
		
EOF;
if((count($tplvars['notices']) == 1)) {
$html .= <<<EOF

		<p>
		<span class="a_msg_notice">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('notice'):'');
$html .= <<<EOF
:</span>
		
EOF;
$notices_c = -1;
foreach($tplvars['notices'] as $tplvars['notice']) {
$notices_c++;

$html .= <<<EOF

		
EOF;
$html .= $tplvars['notice'];
$html .= <<<EOF

		
EOF;
}
$html .= <<<EOF

		</p>
		
EOF;
} else {
$html .= <<<EOF

		<div align="left">
			<span class="a_msg_notice">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('notices'):'');
$html .= <<<EOF
:</span>
			<ul>
				
EOF;
$notices_c = -1;
foreach($tplvars['notices'] as $tplvars['notice']) {
$notices_c++;

$html .= <<<EOF

				<li>
EOF;
$html .= $tplvars['notice'];
$html .= <<<EOF
</li>
				
EOF;
}
$html .= <<<EOF

			</ul>
		</div>
		
EOF;
}
$html .= <<<EOF

		</div>
		
EOF;
}
$html .= <<<EOF

		
		
EOF;
if((isset($tplvars['links']) && $tplvars['links'])) {
$html .= <<<EOF

		<p style="padding-top: 0.6em;">
		
EOF;
$links_c = -1;
foreach($tplvars['links'] as $tplvars['name'] => $tplvars['lurl']) {
$links_c++;

$html .= <<<EOF

		
EOF;
if((isset($links_c) && $links_c > 0)) {
$html .= <<<EOF
 &middot; 
EOF;
}
$html .= <<<EOF

		<a href="
EOF;
$html .= $tplvars['lurl'];
$html .= <<<EOF
">
EOF;
$html .= $tplvars['name'];
$html .= <<<EOF
</a>
		
EOF;
}
$html .= <<<EOF

		</p>
		
EOF;
}
$html .= <<<EOF

	</div>
</div>

EOF;
}
$html .= <<<EOF

EOF;
return $html;
}
?>