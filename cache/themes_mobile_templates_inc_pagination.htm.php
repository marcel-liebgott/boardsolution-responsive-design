<?php
function FWS_TPL_themes_mobile_templates_inc_pagination_htm($tpl,$number) {
$locale = FWS_Props::get()->locale();
$tplvars = $tpl->get_variables('inc_pagination.htm',$number);

$html = "";
$html .=<<<EOF

EOF;
if((isset($tplvars['page']) && $tplvars['page'])) {
$html .= <<<EOF

<div align="center">
	
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

</div>

EOF;
}
$html .= <<<EOF

EOF;
return $html;
}
?>