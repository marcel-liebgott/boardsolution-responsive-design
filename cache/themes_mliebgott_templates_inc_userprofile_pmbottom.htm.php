<?php
function FWS_TPL_themes_mliebgott_templates_inc_userprofile_pmbottom_htm($tpl,$number) {
$locale = FWS_Props::get()->locale();
$tplvars = $tpl->get_variables('inc_userprofile_pmbottom.htm',$number);

$html = "";
$html .=<<<EOF
<div class="bs_padtop">
<img title="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('unread_pm'):'');
$html .= <<<EOF
" alt="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('unread_pm'):'');
$html .= <<<EOF
" src="
EOF;
$html .= ($tpl->check_allowed_method('guser','get_theme_item_path')?$tplvars['guser']->get_theme_item_path('images/unread/pm_unread.gif'):'');
$html .= <<<EOF
" /> = 
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('unread_pm'):'');
$html .= <<<EOF

<br />
<img title="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('read_pm'):'');
$html .= <<<EOF
" alt="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('read_pm'):'');
$html .= <<<EOF
" src="
EOF;
$html .= ($tpl->check_allowed_method('guser','get_theme_item_path')?$tplvars['guser']->get_theme_item_path('images/unread/pm_read.gif'):'');
$html .= <<<EOF
" /> = 
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('read_pm'):'');
$html .= <<<EOF

</div>
EOF;
return $html;
}
?>