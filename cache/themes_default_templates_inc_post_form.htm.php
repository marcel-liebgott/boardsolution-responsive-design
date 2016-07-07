<?php
function FWS_TPL_themes_default_templates_inc_post_form_htm($tpl,$number) {
$locale = FWS_Props::get()->locale();
$tplvars = $tpl->get_variables('inc_post_form.htm',$number);

$html = "";
$html .=<<<EOF
	
EOF;
if((isset($tplvars['number']) && $tplvars['number'] == 1)) {
$html .= <<<EOF

	
EOF;
if((isset($tplvars['gisloggedin']) && $tplvars['gisloggedin'] == false)) {
$html .= <<<EOF

	<dl>
		<dt>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('yourname'):'');
$html .= <<<EOF
:</dt>
		<dd>
			<input type="text" name="user_name" size="30" maxlength="
EOF;
$html .= $tplvars['user_maxlength'];
$html .= <<<EOF
" value="
EOF;
$html .= $tplvars['user_name_value'];
$html .= <<<EOF
" />
		</dd>
	</dl>
	<dl>
		<dt>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('youremail'):'');
$html .= <<<EOF
:</dt>
		<dd><input type="text" name="email_adr" size="40" value="
EOF;
$html .= $tplvars['email_value'];
$html .= <<<EOF
" /></dd>
	</dl>
	
EOF;
if((isset($tplvars['enable_security_code']) && $tplvars['enable_security_code'])) {
$html .= <<<EOF

	<dl>
		<dt>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('security_code'):'');
$html .= <<<EOF
:</dt>
		<dd>
		<img src="
EOF;
$html .= $tplvars['security_code_img'];
$html .= <<<EOF
" style="padding-bottom: 5px; cursor: pointer;" onclick="reloadImage(this);" alt="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('reload_sec_image'):'');
$html .= <<<EOF
" title="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('reload_sec_image'):'');
$html .= <<<EOF
" />
		<br clear="all" />
		<input type="text"  name="
EOF;
$html .= $tplvars['sec_code_field'];
$html .= <<<EOF
" size="15" maxlength="10" />
		<br />
		<div class="bs_desc">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('security_code_desc'):'');
$html .= <<<EOF
</div>
		</dd>
	</dl>
	
EOF;
}
$html .= <<<EOF

	
EOF;
}
$html .= <<<EOF

	
EOF;
}
$html .= <<<EOF

	<dl>
		<dt>
			
EOF;
$html .= $tplvars['post_title'];
$html .= <<<EOF

			<br /><br />
			<span class="bs_desc">
			
EOF;
$html .= $tplvars['bbcode_activated'];
$html .= <<<EOF
<br />
			
EOF;
$html .= $tplvars['smileys_activated'];
$html .= <<<EOF
<br />
			
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('html_not_activated'):'');
$html .= <<<EOF

			</span>
		</dt>
		<dd>
			<div style="padding-left: 0.5em;">
				<div style="padding-bottom: 0.3em;">
					
EOF;
if((isset($tplvars['number']) && $tplvars['number'] == 1)) {
$html .= <<<EOF

					<script type="text/javascript" src="
EOF;
$html .= ($tpl->check_allowed_method('gjs','get_file')?$tplvars['gjs']->get_file('src/bbcode.js'):'');
$html .= <<<EOF
"></script>
					<script type="text/javascript" src="
EOF;
$html .= ($tpl->check_allowed_method('gjs','get_file')?$tplvars['gjs']->get_file('src/ajax_get_post_form.js'):'');
$html .= <<<EOF
"></script>
					<script type="text/javascript">
					<!--
					var BBCodeModes = new Array();
					var postForms = new Array();
					function BS_refresh_text()
					{
						for(var no in BBCodeModes)
						{
							if(BBCodeModes[no] == 'applet')
							{
								var applet = document.getElementById('bbcode_area' + no);
								var text = '';
								// the IE seems not to be able to call self-written methods of the applet.
								// therefore we use toString to get the text. that works :) 
								if(applet.toString || typeof applet.toString == 'function')
									text = applet.toString();
								document.getElementById('hiddenText' + no).value = text;
							}
						}
					}
					//-->
					</script>
					
EOF;
}
$html .= <<<EOF

					<script type="text/javascript">
					<!--
					BBCodeModes['
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
'] = "
EOF;
$html .= $tplvars['bbcode_mode'];
$html .= <<<EOF
";
					postForms['
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
'] = new BS_getPostFormAJAXConstr(
						'post_form_
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
','bbcode_area
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
','
EOF;
$html .= $tplvars['gpath'];
$html .= <<<EOF
','
EOF;
$html .= $tplvars['get_post_form_url'];
$html .= <<<EOF
'
					);
					//-->
					</script>
					<input type="radio" name="bbcode_mode_
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
" id="bbcode_mode_simple_
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
"
						onclick="changeBBCodeMode(
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
,'simple',postForms['
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
']);" value="simple"
EOF;
$html .= $tplvars['bb_si_checked'];
$html .= <<<EOF
 />
					<label for="bbcode_mode_simple_
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('bbcode_mode_simple'):'');
$html .= <<<EOF
</label>
					
EOF;
if((isset($tplvars['bbcode_enabled']) && $tplvars['bbcode_enabled'])) {
$html .= <<<EOF

					&nbsp;&nbsp;
					<input type="radio" name="bbcode_mode_
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
" id="bbcode_mode_advanced_
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
"
						onclick="changeBBCodeMode(
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
,'advanced',postForms['
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
']);" value="advanced"
EOF;
$html .= $tplvars['bb_ad_checked'];
$html .= <<<EOF
 />
					<label for="bbcode_mode_advanced_
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('bbcode_mode_advanced'):'');
$html .= <<<EOF
</label>
					
EOF;
}
$html .= <<<EOF

					
EOF;
if((isset($tplvars['applet_enabled']) && $tplvars['applet_enabled'])) {
$html .= <<<EOF

					&nbsp;&nbsp;
					<input type="radio" name="bbcode_mode_
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
" id="bbcode_mode_applet_
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
"
						onclick="changeBBCodeMode(
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
,'applet',postForms['
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
']);" value="applet"
EOF;
$html .= $tplvars['bb_app_checked'];
$html .= <<<EOF
 />
					<label for="bbcode_mode_applet_
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('bbcode_mode_applet'):'');
$html .= <<<EOF
</label>
					
EOF;
}
$html .= <<<EOF

				</div>
				<div id="post_form_
EOF;
$html .= $tplvars['number'];
$html .= <<<EOF
">
					
EOF;
$html .= $tplvars['textarea'];
$html .= <<<EOF

				</div>
				
EOF;
$html .= $tplvars['toggle_smbb'];
$html .= <<<EOF

			</div>
		</dd>
	</dl>
	
EOF;
$html .= $tpl->parse_template("inc_attachments.htm",false);
$html .= <<<EOF

EOF;
return $html;
}
?>