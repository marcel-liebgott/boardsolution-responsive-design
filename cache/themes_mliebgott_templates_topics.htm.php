<?php
function FWS_TPL_themes_mliebgott_templates_topics_htm($tpl,$number) {
$locale = FWS_Props::get()->locale();
$tplvars = $tpl->get_variables('topics.htm',$number);

$html = "";
$html .=<<<EOF

EOF;
$html .= $tpl->parse_template("inc_header.htm",false);
$html .= <<<EOF



EOF;
if((isset($tplvars['action_result']) && $tplvars['action_result'] < 1)) {
$html .= <<<EOF

   
EOF;
if((isset($tplvars['module_error']) && $tplvars['module_error'] == false)) {
$html .= <<<EOF

      
EOF;
if((isset($tplvars['latest_topics_top']) && $tplvars['latest_topics_top']) && (isset($tplvars['sub_forum']) && $tplvars['sub_forum'])) {
$html .= <<<EOF

         
EOF;
$html .= $tpl->parse_template("inc_topics.htm",false);
$html .= <<<EOF

         <br />
      
EOF;
}
$html .= <<<EOF


      
EOF;
if((isset($tplvars['sub_forum']) && $tplvars['sub_forum'])) {
$html .= <<<EOF

         <div class="bs_padbottom">
            
EOF;
$html .= $tpl->parse_template("inc_forums.htm",false);
$html .= <<<EOF

         </div>
      
EOF;
}
$html .= <<<EOF


      
EOF;
if((isset($tplvars['contains_topics']) && $tplvars['contains_topics'])) {
$html .= <<<EOF

         
EOF;
$html .= $tpl->parse_template("inc_topic_action_js.htm",false);
$html .= <<<EOF


         
EOF;
$html .= $tpl->parse_template("inc_topics.htm",false);
$html .= <<<EOF


            <div class="col-lg-4 col-sm-4 col-xs-12">
               <div class="panel panel-default">
                  <div class="panel-heading">Admin Option</div>
                  <div class="panel-body">
                     
EOF;
if((isset($tplvars['display_topic_actions']) && $tplvars['display_topic_actions'])) {
$html .= <<<EOF

                        <div class="input-group">
                           <span class="input-group-addon" id="action">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('options'):'');
$html .= <<<EOF
:</span>
                           
EOF;
$html .= $tplvars['topic_action_combo'];
$html .= <<<EOF

                        </div>
                        <button class="btn btn-default btn-xs" role="button" type="submit" onclick="performModAction(getModActionURL());" class="form-control">
                           
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('performaction'):'');
$html .= <<<EOF

                        </button>
                        <br>
                        <small>
                           <a href="javascript:invertSelection('id_',0);">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('invertmark'):'');
$html .= <<<EOF
</a>
                        </small>
                     
EOF;
} else {
$html .= <<<EOF

                        &nbsp;
                     
EOF;
}
$html .= <<<EOF

                  </div>
               </div>
               
				<div class="panel panel-default">
					<div class="panel-heading">Aktionen</div>
					<div class="panel-body">
						<ul class="bottom-options">
							
EOF;
if((isset($tplvars['display_topic']) && $tplvars['display_topic'])) {
$html .= <<<EOF

								<li>
									<div class="button-with-addon">
										<i class="fa fa-comment"></i>
										<a title="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('createnewthread'):'');
$html .= <<<EOF
" href="
EOF;
$html .= ($tpl->check_allowed_method('gurl','simple_url')?$tplvars['gurl']->simple_url('new_topic','&amp;$URL_FID='.$tplvars['fid']):'');
$html .= <<<EOF
">
											<button class="btn btn-default btn-sm">
												
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('newthread'):'');
$html .= <<<EOF

											</button>
										</a>
									</div>
								</li>
							
EOF;
}
$html .= <<<EOF

							
EOF;
if((isset($tplvars['display_poll']) && $tplvars['display_poll'])) {
$html .= <<<EOF

								<li>
									<div class="button-with-addon">
										<i class="fa fa-bar-chart"></i>
										<a title="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('createnewpoll'):'');
$html .= <<<EOF
" href="
EOF;
$html .= ($tpl->check_allowed_method('gurl','simple_url')?$tplvars['gurl']->simple_url('new_topic','&amp;$URL_FID='.$tplvars['fid']):'');
$html .= <<<EOF
">
											<button class="btn btn-default btn-sm">
												
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('newpoll'):'');
$html .= <<<EOF

											</button>
										</a>
									</div>
								</li>
							
EOF;
}
$html .= <<<EOF

							
EOF;
if((isset($tplvars['display_event']) && $tplvars['display_event'])) {
$html .= <<<EOF

								<li>
									<div class="button-with-addon">
										<i class="fa fa-calendar"></i>
										<a title="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('createnewevent'):'');
$html .= <<<EOF
" href="
EOF;
$html .= ($tpl->check_allowed_method('gurl','simple_url')?$tplvars['gurl']->simple_url('new_event','&amp;$URL_FID='.$tplvars['fid']):'');
$html .= <<<EOF
">
											<button class="btn btn-default btn-sm">
												
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('newevent'):'');
$html .= <<<EOF

											</button>
										</a>
									</div>
								</li>
							
EOF;
}
$html .= <<<EOF

							
							
EOF;
if((isset($tplvars['mark_read_url']) && $tplvars['mark_read_url'] != "")) {
$html .= <<<EOF

								<li>
									<div class="button-with-addon">
										<i class="fa fa-check"></i>
										<a title="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('mark_forum_read'):'');
$html .= <<<EOF
" href="
EOF;
$html .= $tplvars['mark_read_url'];
$html .= <<<EOF
">
											<button class="btn btn-default btn-sm">
												
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('mark_forum_read'):'');
$html .= <<<EOF

											</button>
										</a>
									</div>
								</li>
							
EOF;
}
$html .= <<<EOF

							
							
EOF;
if((isset($tplvars['subscr_forum_url']) && $tplvars['subscr_forum_url'] != "")) {
$html .= <<<EOF

								<li>
									<div class="button-with-addon">
										<i class="fa fa-bell"></i>
										<a title="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('subscribe_forum'):'');
$html .= <<<EOF
" href="
EOF;
$html .= $tplvars['subscr_forum_url'];
$html .= <<<EOF
">
											<button class="btn btn-default btn-sm">
												
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('subscribe_forum'):'');
$html .= <<<EOF

											</button>
										</a>
									</div>
								</li>
							
EOF;
}
$html .= <<<EOF

						</ul>
                  </div>
               </div>
               
               
EOF;
if((isset($tplvars['contains_topics']) && $tplvars['contains_topics'])) {
$html .= <<<EOF

                  <div class="panel panel-default">
                     <div class="panel-heading">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('options'):'');
$html .= <<<EOF
</div>
                     <div class="panel-body">
                        <div class="hidden-xs">
                           <form class="form-horizontal" method="get" action="
EOF;
$html .= $tplvars['php_self'];
$html .= <<<EOF
">
								<input type="hidden" name="
EOF;
$html .= $tplvars['action_param'];
$html .= <<<EOF
" value="topics" />
								<input type="hidden" name="
EOF;
$html .= $tplvars['fid_param'];
$html .= <<<EOF
" value="
EOF;
$html .= $tplvars['fid'];
$html .= <<<EOF
" />
								
EOF;
$hidden_fields_c = -1;
foreach($tplvars['hidden_fields'] as $tplvars['k'] => $tplvars['v']) {
$hidden_fields_c++;

$html .= <<<EOF

									<input type="hidden" name="
EOF;
$html .= $tplvars['k'];
$html .= <<<EOF
" value="
EOF;
$html .= $tplvars['v'];
$html .= <<<EOF
" />
								
EOF;
}
$html .= <<<EOF

								<ul class="bottom-options">
									<div class="button-with-addon">
										<i class="fa fa-columns"></i>
										<select name="
EOF;
$html .= $tplvars['order_array_ins']['_name'];
$html .= <<<EOF
" id="
EOF;
$html .= $tplvars['order_array_ins']['_name'];
$html .= <<<EOF
">
											
EOF;
$order_array_ins_c = -1;
foreach($tplvars['order_array_ins'] as $tplvars['k'] => $tplvars['v']) {
$order_array_ins_c++;

$html .= <<<EOF

												
EOF;
if((isset($tplvars['k']) && $tplvars['k'] != "_name") && (isset($tplvars['k']) && $tplvars['k'] != "_default")) {
$html .= <<<EOF

													<option value="
EOF;
$html .= $tplvars['k'];
$html .= <<<EOF
"
EOF;
if((isset($tplvars['k']) && isset($tplvars['order_array_ins']['_default']) && $tplvars['k'] == $tplvars['order_array_ins']['_default'])) {
$html .= <<<EOF
selected="selected"
EOF;
}
$html .= <<<EOF
>
EOF;
$html .= $tplvars['v'];
$html .= <<<EOF
</option>
												
EOF;
}
$html .= <<<EOF

											
EOF;
}
$html .= <<<EOF

										</select>
									</div>
								<li>
							  </ul>
                              
EOF;
if((isset($tplvars['number_of_threads']) && $tplvars['number_of_threads'] > 0)) {
$html .= <<<EOF

								<select name="
EOF;
$html .= $tplvars['order_array_ins']['_name'];
$html .= <<<EOF
" id="
EOF;
$html .= $tplvars['order_array_ins']['_name'];
$html .= <<<EOF
">
									
EOF;
$order_array_ins_c = -1;
foreach($tplvars['order_array_ins'] as $tplvars['k'] => $tplvars['v']) {
$order_array_ins_c++;

$html .= <<<EOF

										
EOF;
if((isset($tplvars['k']) && $tplvars['k'] != "_name") && (isset($tplvars['k']) && $tplvars['k'] != "_default")) {
$html .= <<<EOF

											<option value="
EOF;
$html .= $tplvars['k'];
$html .= <<<EOF
"
EOF;
if((isset($tplvars['k']) && isset($tplvars['order_array_ins']['_default']) && $tplvars['k'] == $tplvars['order_array_ins']['_default'])) {
$html .= <<<EOF
selected="selected"
EOF;
}
$html .= <<<EOF
>
EOF;
$html .= $tplvars['v'];
$html .= <<<EOF
</option>
										
EOF;
}
$html .= <<<EOF

									
EOF;
}
$html .= <<<EOF

								</select>
                                 <div class="form-group">
                                    <label class="control-label col-sm-3 small" id="column">Spalte:</label>
                                    <div class="col-sm-9">
                                       
EOF;
$html .= $tplvars['order_ins'];
$html .= <<<EOF

                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label class="control-label col-sm-3 small" id="column">Sortierung:</label>
                                    <div class="col-sm-9">
                                       
EOF;
$html .= $tplvars['ascdesc_ins'];
$html .= <<<EOF

                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label class="control-label col-sm-3 small" id="column">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('threadsperpage'):'');
$html .= <<<EOF
:</label>
                                    <div class="col-sm-6">
                                       
EOF;
$html .= $tplvars['tps_ins'];
$html .= <<<EOF

                                    </div>
                                    <button class="btn btn-default" type="submit"><small>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('show'):'');
$html .= <<<EOF
</small></button>
                                 </div>
                              
EOF;
}
$html .= <<<EOF

                           </form>
                           <hr>
                           <div class="col-lg-6 hidden-xs hidden-sm small">
                              <img src="
EOF;
$html .= ($tpl->check_allowed_method('guser','get_theme_item_path')?$tplvars['guser']->get_theme_item_path('images/thread_status/important_en.gif'):'');
$html .= <<<EOF
" alt="" />
                              <img src="
EOF;
$html .= ($tpl->check_allowed_method('guser','get_theme_item_path')?$tplvars['guser']->get_theme_item_path('images/thread_status/important_dis.gif'):'');
$html .= <<<EOF
" alt="" /> =
                              
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('important_desc'):'');
$html .= <<<EOF

                              <br>
                              <img src="
EOF;
$html .= ($tpl->check_allowed_method('guser','get_theme_item_path')?$tplvars['guser']->get_theme_item_path('images/thread_status/hot_en.gif'):'');
$html .= <<<EOF
" alt="" />
                              <img src="
EOF;
$html .= ($tpl->check_allowed_method('guser','get_theme_item_path')?$tplvars['guser']->get_theme_item_path('images/thread_status/hot_dis.gif'):'');
$html .= <<<EOF
" alt="" /> =
                              
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('hot_desc'):'');
$html .= <<<EOF

                              <br>
                              <img src="
EOF;
$html .= ($tpl->check_allowed_method('guser','get_theme_item_path')?$tplvars['guser']->get_theme_item_path('images/thread_status/closed_en.gif'):'');
$html .= <<<EOF
" alt="" />
                              <img src="
EOF;
$html .= ($tpl->check_allowed_method('guser','get_theme_item_path')?$tplvars['guser']->get_theme_item_path('images/thread_status/closed_dis.gif'):'');
$html .= <<<EOF
" alt="" /> =
                              
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('closed_desc'):'');
$html .= <<<EOF

                              <br>
                              <img src="
EOF;
$html .= ($tpl->check_allowed_method('guser','get_theme_item_path')?$tplvars['guser']->get_theme_item_path('images/thread_status/moved_en.gif'):'');
$html .= <<<EOF
" alt="" />
                              <img src="
EOF;
$html .= ($tpl->check_allowed_method('guser','get_theme_item_path')?$tplvars['guser']->get_theme_item_path('images/thread_status/moved_dis.gif'):'');
$html .= <<<EOF
" alt="" /> =
                              
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('moved_desc'):'');
$html .= <<<EOF

                              <br>
                              <img src="
EOF;
$html .= ($tpl->check_allowed_method('guser','get_theme_item_path')?$tplvars['guser']->get_theme_item_path('images/thread_status/read_explain.gif'):'');
$html .= <<<EOF
" alt="" />
                              <img src="
EOF;
$html .= ($tpl->check_allowed_method('guser','get_theme_item_path')?$tplvars['guser']->get_theme_item_path('images/thread_status/unread_explain.gif'):'');
$html .= <<<EOF
" alt="" /> =
                              
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('unread_desc'):'');
$html .= <<<EOF

                           </div>
                           <div class="col-lg-6 hidden-xs hidden-sm small">
                              <b>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('youroptions'):'');
$html .= <<<EOF
</b>
                              <br>
                              
EOF;
$options_c = -1;
foreach($tplvars['options'] as $tplvars['option']) {
$options_c++;

$html .= <<<EOF

                                 
EOF;
$html .= $tplvars['option'];
$html .= <<<EOF
<br />
                              
EOF;
}
$html .= <<<EOF

                           </div>
                        </div>
                     </div>
                  </div>
               
EOF;
}
$html .= <<<EOF

            </div>
         </div>
      
EOF;
} else {
$html .= <<<EOF

         
EOF;
$html .= $tpl->parse_template("inc_topics.htm",false);
$html .= <<<EOF

      
EOF;
}
$html .= <<<EOF


      <!--
      
EOF;
if((isset($tplvars['latest_topics_bottom']) && $tplvars['latest_topics_bottom']) && (isset($tplvars['sub_forum']) && $tplvars['sub_forum'])) {
$html .= <<<EOF

         <div class="bs_padtop">
            
EOF;
$html .= $tpl->parse_template("inc_topics.htm",false);
$html .= <<<EOF

         </div>
      
EOF;
}
$html .= <<<EOF

      -->

      <!--
      
EOF;
if((isset($tplvars['view_useronline_list']) && $tplvars['view_useronline_list'])) {
$html .= <<<EOF

         <div class="bs_padtop">
            
EOF;
$html .= $tpl->parse_template("inc_online_user.htm",false);
$html .= <<<EOF

         </div>
      
EOF;
}
$html .= <<<EOF

      -->
   
EOF;
}
$html .= <<<EOF


EOF;
}
$html .= <<<EOF



EOF;
$html .= $tpl->parse_template("inc_footer.htm",false);
$html .= <<<EOF

EOF;
return $html;
}
?>