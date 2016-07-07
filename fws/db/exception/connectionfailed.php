<?php
/**
 * Contains the connection-failed-exception
 * 
 * @package			FrameWorkSolution
 * @subpackage	db.exception
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
 * The connection-failed-exception indicates that an error occurred while trying to
 * connect to the database
 * 
 * @package			FrameWorkSolution
 * @subpackage	db.exception
 * @author			Nils Asmussen <nils@script-solution.de>
 */
final class FWS_DB_Exception_ConnectionFailed extends FWS_Exception_Critical
{
	/**
	 * The error-message
	 *
	 * @var string
	 */
	private $_message;
	
	/**
	 * Constructor
	 * 
	 * @param string $message the error-message
	 * @param int $number the error-number, if available
	 */
	public function __construct($message,$number)
	{
		$msg = 'Could not establish the MySQL-connection';
		if($message)
		{
			if($number > 0)
				$msg .= $number.': ';
			$msg .= $message;
		}
		$msg .= "\n".'Please verify the following MySQL-connection-settings!';
		parent::__construct($msg,$number);
		
		$this->_message = $message;
	}

	/**
	 * @return string the mysql-error-message
	 */
	public function get_mysql_error()
	{
		return $this->_message;
	}
}
?>