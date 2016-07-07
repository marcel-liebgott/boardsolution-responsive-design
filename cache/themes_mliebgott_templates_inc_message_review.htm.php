<?php
function FWS_TPL_themes_mliebgott_templates_inc_message_review_htm($tpl,$number) {
$locale = FWS_Props::get()->locale();
$tplvars = $tpl->get_variables('inc_message_review.htm',$number);

$html = "";
$html .=<<<EOF

EOF;
if((isset($tplvars['messages']) && $tplvars['messages'])) {
$html .= <<<EOF


EOF;
if((isset($tplvars['show_quote']) && $tplvars['show_quote'])) {
$html .= <<<EOF

<script type="text/javascript" src="
EOF;
$html .= ($tpl->check_allowed_method('gjs','get_file')?$tplvars['gjs']->get_file('src/ajax_quote_message.js'):'');
$html .= <<<EOF
"></script>
<script type="text/javascript">
<!--
var qm = new BS_quoteMessageAJAX(
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
,'
EOF;
$html .= $tplvars['field_id'];
$html .= <<<EOF
','
EOF;
$html .= $tplvars['request_url'];
$html .= <<<EOF
');
//-->
</script>

EOF;
}
$html .= <<<EOF


<div class="bs_border">
	<h1 class="bs_topic">
EOF;
$html .= $tplvars['topic_title'];
$html .= <<<EOF
</h1>
	
EOF;
if((isset($tplvars['limit_height']) && $tplvars['limit_height'])) {
$html .= <<<EOF

	<div style="overflow: auto; max-height: 500px; width: 100%;">
	
EOF;
}
$html .= <<<EOF

	<table class="bs_table" cellpadding="2" cellspacing="1" style="table-layout: fixed;">
		
EOF;
$messages_c = -1;
foreach($tplvars['messages'] as $tplvars['message']) {
$messages_c++;

$html .= <<<EOF

		<tr>
			<td width="25%" class="bs_left" valign="top">
				<span id="user_
EOF;
$html .= $tplvars['message']['post_id'];
$html .= <<<EOF
">
EOF;
$html .= $tplvars['message']['user_name'];
$html .= <<<EOF
</span> ,
				<span style="font-weight: normal;">
EOF;
$html .= $tplvars['message']['date'];
$html .= <<<EOF
</span>
				
EOF;
if((isset($tplvars['message']['subject']) && $tplvars['message']['subject'])) {
$html .= <<<EOF

				<div class="bs_padtop_big">
				
EOF;
$html .= $tplvars['message']['subject'];
$html .= <<<EOF

				</div>
				
EOF;
}
$html .= <<<EOF

			</td>
			<td width="75%" class="bs_main" valign="top">
				
EOF;
if((isset($tplvars['show_quote']) && $tplvars['show_quote'])) {
$html .= <<<EOF

				<a class="bs_button" href="javascript:qm.quoteMessage(
EOF;
$html .= $tplvars['message']['post_id'];
$html .= <<<EOF
);">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('quote'):'');
$html .= <<<EOF
</a>
				<br style="clear: both;" />
				
EOF;
}
$html .= <<<EOF

				<div id="post_
EOF;
$html .= $tplvars['message']['post_id'];
$html .= <<<EOF
" class="bs_posts_main_1">
EOF;
$html .= $tplvars['message']['text'];
$html .= <<<EOF
</div>
			</td>
		</tr>
		
EOF;
}
$html .= <<<EOF

	</table>
	
EOF;
if((isset($tplvars['limit_height']) && $tplvars['limit_height'])) {
$html .= <<<EOF

	</div>
	
EOF;
}
$html .= <<<EOF

</div>


EOF;
if((isset($tplvars['page_split']) && $tplvars['page_split'])) {
$html .= <<<EOF

<div class="bs_padtop">
	
EOF;
$html .= $tpl->parse_template("inc_pagination.htm",false);
$html .= <<<EOF

</div>

EOF;
}
$html .= <<<EOF


EOF;
}
$html .= <<<EOF

EOF;
return $html;
}
?>