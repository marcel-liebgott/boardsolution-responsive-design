<?php
function FWS_TPL_themes_mliebgott_templates_inc_topics_htm($tpl,$number) {
$locale = FWS_Props::get()->locale();
$tplvars = $tpl->get_variables('inc_topics.htm',$number);

$html = "";
$html .=<<<EOF

EOF;
if((isset($tplvars['type']) && $tplvars['type'] != 'contains_cats')) {
$html .= <<<EOF

   <div class="row">
      <div class="col-lg-8 col-sm-8 col-xs-12">
         <div class="panel panel-default">
            <div class="panel-heading">
EOF;
$html .= $tplvars['thread_title'];
$html .= <<<EOF
</div>
            <div class="panel-body">
               <table class="table table-striped">
                  <thead>
                     <tr>
                     	
EOF;
if((isset($tplvars['show_thread_action']) && $tplvars['show_thread_action'])) {
$html .= <<<EOF

                        	<th class="">&nbsp;</th>
                        
EOF;
}
$html .= <<<EOF

                        <th class="cell-stat text-center hidden-xs hidden-sm">&nbsp;</th>
                        <th class="">&nbsp;</th>
                        <th class="">&nbsp;</th>
                        <th class="text-center cell-stat hidden-xs hidden-sm">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('replies'):'');
$html .= <<<EOF
</th>
                        
EOF;
if((isset($tplvars['show_views']) && $tplvars['show_views'])) {
$html .= <<<EOF

                           <th class="text-center cell-stat hidden-xs hidden-sm">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('views'):'');
$html .= <<<EOF
</th>
                        
EOF;
}
$html .= <<<EOF

                        
EOF;
if((isset($tplvars['show_thread_opening']) && $tplvars['show_thread_opening'])) {
$html .= <<<EOF

                           <th class="text-center cell-stat-2x hidden-sm hidden-xs">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('topic_start'):'');
$html .= <<<EOF
</th>
                        
EOF;
}
$html .= <<<EOF

                        <th class="text-center cell-stat-2x hidden-xs">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('lastpost'):'');
$html .= <<<EOF
</th>
                     </tr>
                  </thead>
                  <tbody>
                     
EOF;
if((isset($tplvars['num']) && $tplvars['num'] == 0)) {
$html .= <<<EOF

                     <tr>
                        <td colspan="
EOF;
$html .= $tplvars['total_colspan'];
$html .= <<<EOF
" align="center" class="bs_main">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('no_topics_found'):'');
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

                        
EOF;
if((isset($tplvars['topic']['show_important']) && $tplvars['topic']['show_important'])) {
$html .= <<<EOF

                        <tr>
                           <td colspan="
EOF;
$html .= $tplvars['topic']['important_colspan'];
$html .= <<<EOF
" class="bs_coldesc">
EOF;
$html .= $tplvars['topic']['important_title'];
$html .= <<<EOF
</td>
                        </tr>
                        
EOF;
}
$html .= <<<EOF

                        <tr>
                           
EOF;
if((isset($tplvars['show_thread_action']) && $tplvars['show_thread_action'])) {
$html .= <<<EOF

                           <td width="3%" align="center" class="vertical-center" onclick="var cb = document.getElementById('id_
EOF;
$html .= $tplvars['index'];
$html .= <<<EOF
'); cb.checked = cb.checked ? false : true;">
                              <input id="id_
EOF;
$html .= $tplvars['index'];
$html .= <<<EOF
" type="checkbox" name="selected_topics[]" value="
EOF;
$html .= $tplvars['topic']['topic_id'];
$html .= <<<EOF
" onclick="this.checked = this.checked ? false : true;" />
                           </td>
                           
EOF;
}
$html .= <<<EOF

                           <td class="cell-stat text-center hidden-xs hidden-sm">
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
                           <td width="3%" align="center" class="bs_main">
EOF;
$html .= $tplvars['topic']['thread_pic'];
$html .= <<<EOF
</td>
                           
EOF;
if((isset($tplvars['show_thread_action']) && $tplvars['show_thread_action'])) {
$html .= <<<EOF

                              <td width="43%" class="bs_main">
                           
EOF;
} else {
$html .= <<<EOF

                              <td width="46%" class="bs_main">
                           
EOF;
}
$html .= <<<EOF

                           
                           
EOF;
if((isset($tplvars['topic']['is_unread']) && $tplvars['topic']['is_unread'])) {
$html .= <<<EOF

                              <a title="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('goto_first_unread_post'):'');
$html .= <<<EOF
" href="
EOF;
$html .= $tplvars['topic']['first_unread_url'];
$html .= <<<EOF
">
                              <img src="
EOF;
$html .= ($tpl->check_allowed_method('guser','get_theme_item_path')?$tplvars['guser']->get_theme_item_path('images/unread/first_unread_post.gif'):'');
$html .= <<<EOF
"
                                 alt="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('goto_first_unread_post'):'');
$html .= <<<EOF
" />
                              </a>
                           
EOF;
}
$html .= <<<EOF

                           
EOF;
if((isset($tplvars['topic']['is_important']) && $tplvars['topic']['is_important'])) {
$html .= <<<EOF

                              <b>
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('important'):'');
$html .= <<<EOF
</b>:
                           
EOF;
}
$html .= <<<EOF

                           <a 
EOF;
if((isset($tplvars['topic']['name_complete']) && $tplvars['topic']['name_complete'] != '')) {
$html .= <<<EOF
title="
EOF;
$html .= $tplvars['topic']['name_complete'];
$html .= <<<EOF
" 
EOF;
}
$html .= <<<EOF
href="
EOF;
$html .= $tplvars['topic']['topic_url'];
$html .= <<<EOF
">
                           
EOF;
if((isset($tplvars['topic']['is_moved']) && $tplvars['topic']['is_moved'])) {
$html .= <<<EOF

                              <i>
EOF;
$html .= $tplvars['topic']['name'];
$html .= <<<EOF
</i>
                           
EOF;
} else {
$html .= <<<EOF

                              
EOF;
$html .= $tplvars['topic']['name'];
$html .= <<<EOF

                           
EOF;
}
$html .= <<<EOF

                           </a>
                           
EOF;
if((isset($tplvars['topic']['page_split']) && $tplvars['topic']['page_split'])) {
$html .= <<<EOF

                              &nbsp;&nbsp;<span class="bs_desc">
EOF;
$html .= $tplvars['topic']['page_split'];
$html .= <<<EOF
</span>
                           
EOF;
}
$html .= <<<EOF

                           
EOF;
if((isset($tplvars['topic']['show_forum']) && $tplvars['topic']['show_forum'])) {
$html .= <<<EOF

                              <div class="bs_topics_small">
EOF;
$html .= $tplvars['topic']['forum_path'];
$html .= <<<EOF
</div>
                           
EOF;
}
$html .= <<<EOF

                           
EOF;
if((isset($tplvars['topic']['show_relevance']) && $tplvars['topic']['show_relevance'])) {
$html .= <<<EOF

                              <div class="bs_topics_small">
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('relevance'):'');
$html .= <<<EOF
: 
EOF;
$html .= $tplvars['topic']['relevance'];
$html .= <<<EOF
</div>
                           
EOF;
}
$html .= <<<EOF

                           </td>
                           <td class="hidden-xs hidden-sm">
                           
EOF;
if((isset($tplvars['topic']['is_moved']) && $tplvars['topic']['is_moved'])) {
$html .= <<<EOF

                              -
                           
EOF;
} else {
$html .= <<<EOF

                              
EOF;
$html .= $tplvars['topic']['posts'];
$html .= <<<EOF

                           
EOF;
}
$html .= <<<EOF

                           </td>
                           
EOF;
if((isset($tplvars['show_views']) && $tplvars['show_views'])) {
$html .= <<<EOF

                           <td class="hidden-sm hidden-xs">
                              
EOF;
if((isset($tplvars['topic']['is_moved']) && $tplvars['topic']['is_moved'])) {
$html .= <<<EOF

                                 -
                              
EOF;
} else {
$html .= <<<EOF

                                 
EOF;
$html .= $tplvars['topic']['views'];
$html .= <<<EOF

                              
EOF;
}
$html .= <<<EOF

                           </td>
                           
EOF;
}
$html .= <<<EOF

                           
EOF;
if((isset($tplvars['show_thread_opening']) && $tplvars['show_thread_opening'])) {
$html .= <<<EOF

                              <td class="hidden-sm hidden-xs">
                                 
EOF;
if((isset($tplvars['topic']['is_moved']) && $tplvars['topic']['is_moved'])) {
$html .= <<<EOF

                                    -
                                 
EOF;
} else {
$html .= <<<EOF

                                    
EOF;
$html .= $tplvars['topic']['topicstart']['date'];
$html .= <<<EOF
<br />
                                    
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('From'):'');
$html .= <<<EOF
: 
EOF;
$html .= $tplvars['topic']['topicstart']['username'];
$html .= <<<EOF

                                 
EOF;
}
$html .= <<<EOF

                              </td>
                           
EOF;
}
$html .= <<<EOF

                           <td class="hidden-xs">
                              
EOF;
if((isset($tplvars['topic']['is_moved']) && $tplvars['topic']['is_moved'])) {
$html .= <<<EOF

                                 -
                              
EOF;
} else {
$html .= <<<EOF

                                 
EOF;
if((isset($tplvars['topic']['lastpost']) && $tplvars['topic']['lastpost'] == false)) {
$html .= <<<EOF

                                    -
                                 
EOF;
} else {
$html .= <<<EOF

                                    
EOF;
$html .= $tplvars['topic']['lastpost']['date'];
$html .= <<<EOF
<br />
                                    
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('From'):'');
$html .= <<<EOF
: 
EOF;
$html .= $tplvars['topic']['lastpost']['username'];
$html .= <<<EOF

                                    <a title="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('gotolastpost'):'');
$html .= <<<EOF
" href="
EOF;
$html .= $tplvars['topic']['lastpost']['url'];
$html .= <<<EOF
">
                                       <img src="
EOF;
$html .= ($tpl->check_allowed_method('guser','get_theme_item_path')?$tplvars['guser']->get_theme_item_path('images/lastpost.gif'):'');
$html .= <<<EOF
" style="vertical-align: middle;" alt="
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('gotolastpost'):'');
$html .= <<<EOF
" />
                                    </a>
                                 
EOF;
}
$html .= <<<EOF

                              
EOF;
}
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
      </div>

EOF;
} else {
$html .= <<<EOF

   
EOF;
if((isset($tplvars['sub_forum']) && $tplvars['sub_forum'] == false)) {
$html .= <<<EOF

      <div class="bs_border">
         <h1 class="bs_topic">
EOF;
$html .= $tplvars['thread_title'];
$html .= <<<EOF
</h1>
         <div class="bs_main" style="text-align: center;">
            
EOF;
$html .= ($tpl->check_allowed_method('glocale','lang')?$tplvars['glocale']->lang('no_forums_available'):'');
$html .= <<<EOF

         </div>
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