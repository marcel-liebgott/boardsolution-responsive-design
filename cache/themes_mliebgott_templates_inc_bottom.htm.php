<?php
function FWS_TPL_themes_mliebgott_templates_inc_bottom_htm($tpl,$number) {
$locale = FWS_Props::get()->locale();
$tplvars = $tpl->get_variables('inc_bottom.htm',$number);

$html = "";
$html .=<<<EOF
<div class="col-lg-12 col-sm-12 col-xs-12 text-center footer">
	Powered by <a target="_blank" href="http://www.boardsolution.de">
EOF;
$html .= $tplvars['bs_version'];
$html .= <<<EOF
</a>
	<br>
	<small>Designed by <a href="http://www.mliebgott.de" target="_blank">mliebgott.de - Marcel Liebgott</a></small>
	<br>
	<br>
	<ul class="list-inline small">
		<li>
			<a href="
EOF;
$html .= ($tpl->check_allowed_method('gurl','simple_url')?$tplvars['gurl']->simple_url('faq'):'');
$html .= <<<EOF
">
				
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('faq'):'');
$html .= <<<EOF

			</a>
		</li>
		<li>Impressum</li>
		<li>Kontakt</li>
	</ul>
</div>
EOF;
return $html;
}
?>