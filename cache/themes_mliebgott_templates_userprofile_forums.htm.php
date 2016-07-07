<?php
function FWS_TPL_themes_mliebgott_templates_userprofile_forums_htm($tpl,$number) {
$locale = FWS_Props::get()->locale();
$tplvars = $tpl->get_variables('userprofile_forums.htm',$number);

$html = "";
$html .=<<<EOF

EOF;
$html .= $tpl->parse_template("inc_delete_message.htm",false);
$html .= <<<EOF


<form method="post" action="
EOF;
$html .= $tplvars['target_url'];
$html .= <<<EOF
">
	<div class="panel panel-default">
		<div class="panel-heading">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('subscribed_topics'):'');
$html .= <<<EOF
</div>
		<div class="panel-body">
			<table class="table table-bordered table-striped">
				<thead>
					<tr>
						<th class="text-left cell-stat-4x">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('thread'):'');
$html .= <<<EOF
</th>
						<th class="cell-stat text-center">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('subscribe_date'):'');
$html .= <<<EOF
</th>
						<th class="cell-mini-stat text-center">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('lastpost'):'');
$html .= <<<EOF
</th>
						<th class="cell-mini-stat text-center">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('delete'):'');
$html .= <<<EOF
</th>
					</tr>
				</head>
				<tbody>
					
EOF;
if((isset($tplvars['num']) && $tplvars['num'] == 0)) {
$html .= <<<EOF

					<tr>
						<td colspan="4" align="center" class="bs_main">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('no_subscribed_forums'):'');
$html .= <<<EOF
</td>
					</tr>
					
EOF;
}
$html .= <<<EOF

					
EOF;
$forums_c = -1;
foreach($tplvars['forums'] as $tplvars['index'] => $tplvars['forum']) {
$forums_c++;

$html .= <<<EOF

						<tr>
							<td class="bs_main">
EOF;
$html .= $tplvars['forum']['position'];
$html .= <<<EOF
</td>
							<td class="bs_main" align="center">
EOF;
$html .= $tplvars['forum']['subscribe_date'];
$html .= <<<EOF
</td>
							<td class="bs_main" align="center">
EOF;
$html .= $tplvars['forum']['last_post'];
$html .= <<<EOF
</td>
							<td class="bs_main" align="center"
									onclick="var cb = document.getElementById('subscr_
EOF;
$html .= $tplvars['index'];
$html .= <<<EOF
'); cb.checked = cb.checked ? false : true;">
							<input type="checkbox" id="subscr_
EOF;
$html .= $tplvars['index'];
$html .= <<<EOF
" name="delete[]" value="
EOF;
$html .= $tplvars['forum']['id'];
$html .= <<<EOF
"
										 onclick="this.checked = this.checked ? false : true;" />
							</td>
						</tr>
					
EOF;
}
$html .= <<<EOF

				</tbody>
				<tfooter>
					<td colspan="4" class="text-right">
						<a href="Javascript:invertSelection('subscr_');">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('invertmark'):'');
$html .= <<<EOF
</a>
					</td>
				</tfooter>
			</table>
		</div>
	</div>
	
	<div class="col-lg-12 col-sm-12 col-xs-12 text-center">
		<div class="btn-group" role="group">
			<input type="submit" class="btn btn-default" value="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('delete'):'');
$html .= <<<EOF
" />
		</div>
	</div>
</form>


EOF;
$html .= $tpl->parse_template("inc_pagination.htm",false);
$html .= <<<EOF


<div class="bs_padtop_big" align="right">
	<a href="
EOF;
$html .= $tplvars['subscribe_all_url'];
$html .= <<<EOF
">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('subscribe_to_all_forums'):'');
$html .= <<<EOF
</a>
</div>
EOF;
return $html;
}
?>