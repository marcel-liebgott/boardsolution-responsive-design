<?php
function FWS_TPL_acp_templates_inc_footer_htm($tpl,$number) {
$locale = FWS_Props::get()->locale();
$tplvars = $tpl->get_variables('inc_footer.htm',$number);

$html = "";
$html .=<<<EOF
</div>


EOF;
if((isset($tplvars['debug']) && $tplvars['debug'] > 0)) {
$html .= <<<EOF

<div class="a_block_pad">
	<b>Debug-Info:</b> 
EOF;
$html .= $tplvars['render_time'];
$html .= <<<EOF
 Sec., 
EOF;
$html .= $tplvars['db_queries'];
$html .= <<<EOF
 DB-Queries, 
EOF;
$html .= $tplvars['mem_usage'];
$html .= <<<EOF
 memory
	
EOF;
if((isset($tplvars['debug']) && $tplvars['debug'] > 1)) {
$html .= <<<EOF

	<div class="a_block">
	
EOF;
$html .= $tplvars['queries'];
$html .= <<<EOF

	</div>
	
EOF;
}
$html .= <<<EOF

</div>

EOF;
}
$html .= <<<EOF


</body>
</html>
EOF;
return $html;
}
?>