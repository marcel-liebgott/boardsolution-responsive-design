<?php
/**
 * Contains the base-document-class
 * 
 * @package			Boardsolution
 * @subpackage	src
 *
 * Copyright (C) 2003 - 2012 Nils Asmussen
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
 */

/**
 * The base-document for all documents in Boardsolution
 *
 * @package			Boardsolution
 * @subpackage	src
 * @author			Nils Asmussen <nils@script-solution.de>
 */
abstract class BS_Document extends FWS_Document
{
	/**
	 * @see FWS_Document::finish()
	 */
	protected function finish()
	{
		parent::finish();
		
		$db = FWS_Props::get()->db();
		$db->disconnect();
	}

	/**
	 * @see FWS_Document::prepare_rendering()
	 */
	protected function prepare_rendering()
	{
		$cfg = FWS_Props::get()->cfg();
		$locale = FWS_Props::get()->locale();
		$tpl = FWS_Props::get()->tpl();
		$user = FWS_Props::get()->user();
		$auth = FWS_Props::get()->auth();
		$input = FWS_Props::get()->input();
		
		// mliebgott theme
		$lastlogin = false;
		if($user->is_loggedin())
		{
			if($ll = $input->get_var(BS_COOKIE_PREFIX.'lastlogin','cookie',FWS_Input::INTEGER))
				$lastlogin = FWS_Date::get_date($ll);
			
			$username = $user->get_user_name();
			$username_plain = $user->get_profile_val('user_name');
		}
		
		// load language
		$locale->add_language_file('index');
		
		$tpl->add_global('gisloggedin',$user->is_loggedin());
		$tpl->add_global('gusername',$username);
		$tpl->add_global('guserid',$user->get_user_id());
		$tpl->add_global('gisadmin',$user->is_admin());
		$tpl->add_global('gismod',$auth->is_moderator_in_any_forum());
		$tpl->add_global('glang',$user->get_language());
		$tpl->add_global('gmodule',$this->get_module_name());
		$tpl->add_global('gtheme',$user->get_theme());
		$tpl->add_global('guserenablepm', $cfg['enable_pms'] == 1 && $user->get_profile_val('allow_pms') == 1);
		
		// mliebgott theme		
		$avatar_id = $user->get_profile_val('avatar');
		$avatar_url = BS_UserUtils::get_profile_avatar_url($avatar_id,$user->get_user_id());
		
		$tpl->add_global('guser_avatar', $avatar_url);
		$tpl->add_global('guser_url', BS_UserUtils::get_link_plain($user->get_user_id(),$username));
		$tpl->add_global('gusername_plain',$username_plain);
		$tpl->add_global('glastlogin', $lastlogin);
		$tpl->add_global('genable_portal', $cfg['enable_portal'] == 1);
		
		$tpl->add_global_ref('gauth',$auth);
		$tpl->add_allowed_method('gauth','is_in_any_group');
		
		$this->set_charset(BS_HTML_CHARSET);
		FWS_Path::set_outer($cfg['board_url'].'/');
		
		// run tasks
		$taskcon = new BS_Tasks_Container();
		$taskcon->run_tasks();
		
		parent::prepare_rendering();
	}
}
?>