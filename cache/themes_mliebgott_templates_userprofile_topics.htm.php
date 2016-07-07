<?php
function FWS_TPL_themes_mliebgott_templates_userprofile_topics_htm($tpl,$number) {
$locale = FWS_Props::get()->locale();
$tplvars = $tpl->get_variables('userprofile_topics.htm',$number);

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
						<th class="text-left cell-stat-4x" colspan="3">
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
						<td colspan="6" class="text-center">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('no_subscribed_topics'):'');
$html .= <<<EOF
</td>
					</tr>
					
EOF;
}
$html .= <<<EOF

					
EOF;
$topics_c = -1;
foreach($tplvars['topics'] as $tplvars['index'] => $tplvars['topic']) {
$topics_c++;

$html .= <<<EOF

						<tr>
							<td class="text-center cell-stat">
								<img src="
EOF;
$html .= $tplvars['topic']['topic_status']['important_image'];
$html .= <<<EOF
" title="
EOF;
$html .= $tplvars['topic']['topic_status']['important_title'];
$html .= <<<EOF
" alt="
EOF;
$html .= $tplvars['topic']['topic_status']['important_title'];
$html .= <<<EOF
" />
								<img src="
EOF;
$html .= $tplvars['topic']['topic_status']['hot_image'];
$html .= <<<EOF
" title="
EOF;
$html .= $tplvars['topic']['topic_status']['hot_title'];
$html .= <<<EOF
" alt="
EOF;
$html .= $tplvars['topic']['topic_status']['hot_title'];
$html .= <<<EOF
" /><br />
								<img src="
EOF;
$html .= $tplvars['topic']['topic_status']['closed_image'];
$html .= <<<EOF
" title="
EOF;
$html .= $tplvars['topic']['topic_status']['closed_title'];
$html .= <<<EOF
" alt="
EOF;
$html .= $tplvars['topic']['topic_status']['closed_title'];
$html .= <<<EOF
" />
								<img src="
EOF;
$html .= $tplvars['topic']['topic_status']['moved_image'];
$html .= <<<EOF
" title="
EOF;
$html .= $tplvars['topic']['topic_status']['moved_title'];
$html .= <<<EOF
" alt="
EOF;
$html .= $tplvars['topic']['topic_status']['moved_title'];
$html .= <<<EOF
" />
							</td>
							<td class="text-center cell-stat">
EOF;
$html .= $tplvars['topic']['topic_symbol'];
$html .= <<<EOF
</td>
							<td class="text-left">
								
EOF;
$html .= $tplvars['topic']['topic_name'];
$html .= <<<EOF
<br />
								<small">
EOF;
$html .= $tplvars['topic']['position'];
$html .= <<<EOF
</small>
							</td>
							<td class="text-center cell-stat-2x">
EOF;
$html .= $tplvars['topic']['subscribe_date'];
$html .= <<<EOF
</td>
							<td class="text-center cell-stat-2x">
EOF;
$html .= $tplvars['topic']['last_post'];
$html .= <<<EOF
</td>
							<td class="text-center" onclick="var cb = document.getElementById('subscr_
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
$html .= $tplvars['topic']['topic_id'];
$html .= <<<EOF
" onclick="this.checked = this.checked ? false : true;" />
							</td>
						</tr>
					
EOF;
}
$html .= <<<EOF

				</tbody>
				<tfooter>
					<td colspan="6" class="text-right">
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

EOF;
return $html;
}
?>