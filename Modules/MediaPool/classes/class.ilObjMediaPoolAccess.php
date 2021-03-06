<?php

/* Copyright (c) 1998-2012 ILIAS open source, Extended GPL, see docs/LICENSE */

include_once("./Services/Object/classes/class.ilObjectAccess.php");

/**
* Class ilObjMediaPoolAccess
*
*
* @author 		Alex Killing <alex.killing@gmx.de>
* @version $Id: class.ilObjMediaPoolAccess.php 37317 2012-10-03 12:57:24Z akill $
*
* @ingroup ModulesMediaPool
*/
class ilObjMediaPoolAccess extends ilObjectAccess
{

	/**
	 * get commands
	 * 
	 * this method returns an array of all possible commands/permission combinations
	 * 
	 * example:	
	 * $commands = array
	 *	(
	 *		array("permission" => "read", "cmd" => "view", "lang_var" => "show"),
	 *		array("permission" => "write", "cmd" => "edit", "lang_var" => "edit"),
	 *	);
	 */
	function _getCommands()
	{
		$commands = array
		(
			array("permission" => "read", "cmd" => "", "lang_var" => "show",
				"default" => true),
			array("permission" => "write", "cmd" => "", "lang_var" => "edit_content",
				"default" => false),
			array("permission" => "write", "cmd" => "edit", "lang_var" => "settings",
				"default" => false)
		);
		
		return $commands;
	}

}

?>
