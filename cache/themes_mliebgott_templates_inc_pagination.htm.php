<?php
function FWS_TPL_themes_mliebgott_templates_inc_pagination_htm($tpl,$number) {
$locale = FWS_Props::get()->locale();
$tplvars = $tpl->get_variables('inc_pagination.htm',$number);

$html = "";
$html .=<<<EOF

EOF;
if((isset($tplvars['page']) && $tplvars['page'])) {
$html .= <<<EOF

	<div class="text-center">
		<nav>
			<ul class="pagination">
				<!-- first page -->
				<li>
					<a href="#" aria-label="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('firstpage'):'');
$html .= <<<EOF
">
						<span aria-hidden="true">&laquo;</span>
					</a>
				</li>
				
				<!-- page -->
				
EOF;
$numbers_c = -1;
foreach($tplvars['numbers'] as $tplvars['number']) {
$numbers_c++;

$html .= <<<EOF

					
EOF;
if((isset($tplvars['number']['number']) && isset($tplvars['page']) && $tplvars['number']['number'] == $tplvars['page'])) {
$html .= <<<EOF

						<li class="active">
							<a href="#">
EOF;
$html .= $tplvars['number']['number'];
$html .= <<<EOF
<span class="sr-only">(current)</span></a>
						</li>
					
EOF;
} else {
$html .= <<<EOF

						
EOF;
if((isset($tplvars['number']['link']) && $tplvars['number']['link'])) {
$html .= <<<EOF

							<li>
								<a href="
EOF;
$html .= $tplvars['number']['link'];
$html .= <<<EOF
">
EOF;
$html .= $tplvars['number']['number'];
$html .= <<<EOF
</a>
							</li>
						
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

				
				<!--  last page -->
				<li>
					<a href="#" aria-label="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('lastpage'):'');
$html .= <<<EOF
">
						<span aria-hidden="true">&raquo;</span>
					</a>
				</li>
			</ul>
		</nav>
	</div>

EOF;
}
$html .= <<<EOF

EOF;
return $html;
}
?>