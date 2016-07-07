<?php
function FWS_TPL_themes_mliebgott_templates_inc_attachments_htm($tpl,$number) {
$locale = FWS_Props::get()->locale();
$tplvars = $tpl->get_variables('inc_attachments.htm',$number);

$html = "";
$html .=<<<EOF
	
EOF;
if((isset($tplvars['attachment_limits']) && $tplvars['attachment_limits'])) {
$html .= <<<EOF

	<dl>
		<dt>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('attachment'):'');
$html .= <<<EOF
:</dt>
		<dd>
			<fieldset class="bs_subform">
				
EOF;
if((isset($tplvars['hint']) && $tplvars['hint'])) {
$html .= <<<EOF

				<div>
EOF;
$html .= $tplvars['hint'];
$html .= <<<EOF
</div>
				
EOF;
}
$html .= <<<EOF

				<dl>
					<dt>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('attached_files'):'');
$html .= <<<EOF
:</dt>
					<dd>
					
EOF;
if((isset($tplvars['show_attachments']) && $tplvars['show_attachments'])) {
$html .= <<<EOF

					<table width="100%" cellpadding="1" cellspacing="0">
						
EOF;
$attachments_c = -1;
foreach($tplvars['attachments'] as $tplvars['attachment']) {
$attachments_c++;

$html .= <<<EOF

						<tr>
							<td width="40%" class="bs_main_no_pad">
EOF;
$html .= $tplvars['attachment']['attached_file'];
$html .= <<<EOF
</td>
							<td width="60%" class="bs_main_no_pad">
EOF;
$html .= $tplvars['attachment']['input_stuff'];
$html .= <<<EOF
</td>
						</tr>
						
EOF;
}
$html .= <<<EOF

					</table>
					
EOF;
} else {
$html .= <<<EOF

					-
					
EOF;
}
$html .= <<<EOF

					</dd>
				</dl>
				<hr style="color: #888;" align="left" size="1" width="80%" />
				<dl>
					<dt>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('attach_new_file'):'');
$html .= <<<EOF
:</dt>
					<dd>
						<input type="file" name="attachment" size="35" />
						<input type="submit" name="add_attachment" value="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('upload'):'');
$html .= <<<EOF
" />
					</dd>
				</dl>
				<div class="bs_desc">
EOF;
$html .= $tplvars['attachment_limits'];
$html .= <<<EOF
</div>
			</fieldset>
		</dd>
	</dl>
	
EOF;
}
$html .= <<<EOF

EOF;
return $html;
}
?>