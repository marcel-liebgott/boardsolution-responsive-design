<?php
function FWS_TPL_themes_mliebgott_templates_portal_htm($tpl,$number) {
$locale = FWS_Props::get()->locale();
$tplvars = $tpl->get_variables('portal.htm',$number);

$html = "";
$html .=<<<EOF

EOF;
$html .= $tpl->parse_template("inc_header.htm",false);
$html .= <<<EOF

   
   
EOF;
if((isset($tplvars['gisloggedin']) && $tplvars['gisloggedin'] == false)) {
$html .= <<<EOF

      <div class="col-lg-12 col-sm-12 col-xs-12 jumbotron">
         <div class="col-lg-10 col-sm-10 col-xs-12">
            <h3>Welcome Guest</h3>
            <p>
               Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore 
               et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. 
               Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, 
               consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, 
               sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no 
               sea takimata sanctus est Lorem ipsum dolor sit amet.
            </p>
         </div>
         <div class="col-lg-2 col-sm-2 col-xs-12">
            <form method="post" action="
EOF;
$html .= $tplvars['target_url'];
$html .= <<<EOF
">
               <input type="hidden" name="action_type" value="
EOF;
$html .= $tplvars['action_type'];
$html .= <<<EOF
" />
               <input type="hidden" name="login" value="1" />
               
               <input type="text" tabindex="1" name="user_login" id="user_login" class="form-control" maxlength="100" placeholder="Username" />
               <input type="password" tabindex="2" name="pw_login" id="pw_login" class="form-control" maxlength="100" placeholder="Password" />
               <a href="
EOF;
$html .= $tplvars['forgotpw_link'];
$html .= <<<EOF
">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('forgetpw'):'');
$html .= <<<EOF
</a> - <a href="
EOF;
$html .= $tplvars['forgotpw_link'];
$html .= <<<EOF
">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('register'):'');
$html .= <<<EOF
</a>
               <button class="btn btn-primary" type="submit">Login</button>
            </form>
         </div>
      </div>
   
EOF;
}
$html .= <<<EOF

   
   <div class="col-lg-8 col-sm-8 col-xs-12">
      
EOF;
if((isset($tplvars['show_news']) && $tplvars['show_news'])) {
$html .= <<<EOF

         <div class="panel panel-default">
            <div class="panel-heading">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('news'):'');
$html .= <<<EOF
</div>
            <div class="panel-body">
               <table class="table forum table-striped">
                  <thead>
                     <th class="cell-stat"></th>
                     <th>Name</th>
                     <th class="cell-stat text-center hidden-xs hidden-sm">
                        
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('From'):'');
$html .= <<<EOF

                     </th>
                     <th class="cell-stat-2x text-center hidden-xs hidden-sm">
                        Time
                     </th>
                  </thead>
                  <tbody>
                     
EOF;
if((isset($tplvars['num']) && $tplvars['num'] == 0)) {
$html .= <<<EOF

                        <tr>
                           <td colspan="4" class="center">
                              
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('no_news_found'):'');
$html .= <<<EOF

                           </td>
                        </tr>
                     
EOF;
}
$html .= <<<EOF

                     
EOF;
$news_list_c = -1;
foreach($tplvars['news_list'] as $tplvars['news']) {
$news_list_c++;

$html .= <<<EOF

                        <tr>
                           <td class="text-center">
                              
EOF;
$html .= $tplvars['news']['news_icon'];
$html .= <<<EOF

                           </td>
                           <td>
                              <h4>
                                 <a href="
EOF;
$html .= $tplvars['news']['topic_url'];
$html .= <<<EOF
">
EOF;
$html .= $tplvars['news']['news_title'];
$html .= <<<EOF
</a>                                 
                                 <br>
                                 <small>
EOF;
$html .= $tplvars['news']['text'];
$html .= <<<EOF
</small>
                                 <br>
                                 <small>
EOF;
$html .= $tplvars['news']['forum_path'];
$html .= <<<EOF
</small>
                              </h4>
                           </td>
                           <td class="text-center hidden-xs hidden-sm">
                              
EOF;
$html .= $tplvars['news']['username'];
$html .= <<<EOF

                           </td>
                           <td class="text-center hidden-xs hiddem-sm">
                              
EOF;
$html .= $tplvars['news']['date'];
$html .= <<<EOF

                           </td>
                        </tr>
                     
EOF;
}
$html .= <<<EOF

                  </tbody>
               </table>
            </div>
         </div>
      
EOF;
}
$html .= <<<EOF

   </div>
   
   <div class="col-lg-4 col-sm-4 col-xs-12">
      <div class="panel panel-default">
         <div class="panel-heading">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('links'):'');
$html .= <<<EOF
</div>
         <div class="panel-body">
            <div class="list-group">
            	<a class="list-group-item" href="
EOF;
$html .= ($tpl->check_allowed_method('gurl','build_portal_url')?$tplvars['gurl']->build_portal_url():'');
$html .= <<<EOF
" title="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('portal'):'');
$html .= <<<EOF
">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('portal'):'');
$html .= <<<EOF
</a>
				<a class="list-group-item" href="
EOF;
$html .= $tplvars['forums_url'];
$html .= <<<EOF
">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('forums'):'');
$html .= <<<EOF
</a>
				
EOF;
if((isset($tplvars['show_feeds']) && $tplvars['show_feeds'])) {
$html .= <<<EOF

					<a class="list-group-item" href="
EOF;
$html .= $tplvars['rss20_feed'];
$html .= <<<EOF
">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('subscribe_news_feed'):'');
$html .= <<<EOF
 [RSS 2.0]</a>
					<a class="list-group-item" href="
EOF;
$html .= $tplvars['atom_feed'];
$html .= <<<EOF
">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('subscribe_news_feed'):'');
$html .= <<<EOF
 [Atom]</a>
				
EOF;
}
$html .= <<<EOF

				<a class="list-group-item" href="
EOF;
$html .= $tplvars['team_url'];
$html .= <<<EOF
">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('the_team'):'');
$html .= <<<EOF
</a>
			</div>
         </div>
      </div>
      
      <div class="col-lg-6 col-md-6 col-xs-3">
         
      </div>
   </div>
   

EOF;
$html .= $tpl->parse_template("inc_footer.htm",false);
$html .= <<<EOF

EOF;
return $html;
}
?>