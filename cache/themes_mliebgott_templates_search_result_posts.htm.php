<?php
function FWS_TPL_themes_mliebgott_templates_search_result_posts_htm($tpl,$number) {
$locale = FWS_Props::get()->locale();
$tplvars = $tpl->get_variables('search_result_posts.htm',$number);

$html = "";
$html .=<<<EOF
<div class="bs_border">
	<table class="bs_table" cellpadding="2" cellspacing="1">
		<tr>
			<td colspan="2" class="bs_topic">
			<table width="100%" cellpadding="0" cellspacing="0">
				<tr>
					<td width="25%" align="left">
EOF;
$html .= $tplvars['small_page_split'];
$html .= <<<EOF
</td>
					<td width="50%" align="center"><b>
EOF;
$html .= $tplvars['result_title'];
$html .= <<<EOF
</b></td>
					<td width="25%" align="right">
					<a href="
EOF;
$html .= $tplvars['publish_result_url'];
$html .= <<<EOF
"><img 
						src="
EOF;
$html .= ($tpl->check_allowed_method('guser','get_theme_item_path')?$tplvars['guser']->get_theme_item_path('images/world.gif'):'');
$html .= <<<EOF
"
						alt="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('publish_search_result'):'');
$html .= <<<EOF
"
						title="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('publish_search_result'):'');
$html .= <<<EOF
" /></a>
					</td>
				</tr>
			</table>
			</td>
		</tr>
		
EOF;
$posts_c = -1;
foreach($tplvars['posts'] as $tplvars['post']) {
$posts_c++;

$html .= <<<EOF

		<tr>
			<td width="25%" class="
EOF;
$html .= $tplvars['post']['posts_var_class'];
$html .= <<<EOF
" valign="top">
			<b>
EOF;
$html .= $tplvars['post']['user_name'];
$html .= <<<EOF
</b> , <span style="font-weight: normal;">
EOF;
$html .= $tplvars['post']['date'];
$html .= <<<EOF
</span>
			</td>
			<td width="75%" class="
EOF;
$html .= $tplvars['post']['posts_var_class'];
$html .= <<<EOF
">
			<b>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('position'):'');
$html .= <<<EOF
:</b> 
EOF;
$html .= $tplvars['post']['location'];
$html .= <<<EOF

			
EOF;
if((isset($tplvars['post']['relevance']) && $tplvars['post']['relevance'])) {
$html .= <<<EOF

			&nbsp;&nbsp;(
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('relevance'):'');
$html .= <<<EOF
: 
EOF;
$html .= $tplvars['post']['relevance'];
$html .= <<<EOF
)
			
EOF;
}
$html .= <<<EOF

			</td>
		</tr>
		<tr>
			<td class="
EOF;
$html .= $tplvars['post']['posts_left_class'];
$html .= <<<EOF
" valign="top">
			
EOF;
if((isset($tplvars['post']['avatar']) && $tplvars['post']['avatar'] != '')) {
$html .= <<<EOF

			<img src="
EOF;
$html .= $tplvars['post']['avatar'];
$html .= <<<EOF
" alt="" />
			
EOF;
}
$html .= <<<EOF

			<div><b>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('user_group'):'');
$html .= <<<EOF
:</b> 
EOF;
$html .= $tplvars['post']['user_group'];
$html .= <<<EOF
</div>
			</td>
			<td class="
EOF;
$html .= $tplvars['post']['posts_main_class'];
$html .= <<<EOF
" valign="top">
			<table width="100%" cellpadding="0" cellspacing="0" style="table-layout: fixed;">
				<tr>
					<td>
					<div style="overflow: auto; max-height: 300px;">
						
EOF;
$html .= $tplvars['post']['text'];
$html .= <<<EOF

					</div>
					</td>
				</tr>
			</table>
			</td>
		</tr>
		
EOF;
if((isset($tplvars['post']['show_separator']) && $tplvars['post']['show_separator'])) {
$html .= <<<EOF

		<tr>
			<td colspan="2" class="bs_post_separator">&nbsp;</td>
		</tr>
		
EOF;
}
$html .= <<<EOF

		
EOF;
}
$html .= <<<EOF

	</table>
</div>

<div class="bs_padtop">

EOF;
$html .= $tpl->parse_template("inc_pagination.htm",false);
$html .= <<<EOF

</div>
EOF;
return $html;
}
?>