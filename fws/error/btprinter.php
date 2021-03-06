<?php
/**
 * Contains the backtrace-printer-interface
 * 
 * @package			FrameWorkSolution
 * @subpackage	error
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
 * The interface for all backtrace-printers
 *
 * @package			FrameWorkSolution
 * @subpackage	error
 * @author			Nils Asmussen <nils@script-solution.de>
 */
interface FWS_Error_BTPrinter
{
	/**
	 * Should print the given backtrace
	 *
	 * @param array $backtrace the backtrace in the following form:
	 * 	<code>
	 * 	array(
	 * 		'path' => <path>,
	 * 		'file' => <file>,
	 * 		'line' => <line>,
	 * 		'method' => <method>,
	 * 		'function' => <function>,
	 * 		'filepart' => array(
	 * 			<lineNumber> => <line>,
	 * 			...
	 * 		)
	 * 	)
	 * 	</code>
	 * 	Note that all elements are optional!
	 * @return string the backtrace
	 */
	public function print_backtrace($backtrace);
}
?>