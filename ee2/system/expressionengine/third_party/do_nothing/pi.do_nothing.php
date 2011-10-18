<?php

/*
=====================================================

RogEE Do Nothing
a plugin for ExpressionEngine 2
by Michael Rog
version 1.0.0

"The Plugin that does Absolutely Nothing" (TM)

Email Michael with questions, feedback, suggestions, bugs, etc.
>> michael@michaelrog.com
>> http://rog.ee

This extension is compatible with NSM Addon Updater:
>> http://ee-garage.com/nsm-addon-updater

Changelog:
>> http://rog.ee/versions/do_nothing
 
=====================================================
*/


if (!defined('APP_VER') || !defined('BASEPATH')) { exit('No direct script access allowed'); }

// ---------------------------------------------
// 	Include config file
//	(I get the version and other info from config.php, so everything stays in sync.)
// ---------------------------------------------

require_once PATH_THIRD.'do_nothing/config.php';

// ---------------------------------------------
//	Plugin infos...
// ---------------------------------------------

$plugin_info = array(
	'pi_name'			=> ROGEE_DN_NAME,
	'pi_version'		=> ROGEE_DN_VERSION,
	'pi_author'			=> "Michael Rog",
	'pi_author_url'		=> ROGEE_DN_DOCS,
	'pi_description'	=> "Passes input content directly to output."
	);

// ---------------------------------------------
//	Okay, here goes nothing...
// ---------------------------------------------

/**
 * Do Nothing class, for ExpressionEngine 2
 *
 * @package		RogEE Do Nothing
 * @author		Michael Rog <michael@michaelrog.com>
 * @copyright	Copyright (c) 2011 Michael Rog
 * @link		http://rog.ee/do_nothing
 */

class Do_nothing {

	var $return_data = "";

	/**
	 * ==============================================
	 * Constructors
	 * ==============================================
	 *
	 * @param str: String input
	 */
	
	function Do_nothing($str = "")
	{
		$this->__construct($str);	
	}
	
	function __construct($str = "")
	{
	
		$this->EE =& get_instance();
		
		if ($str == "")
		{
			$str = $this->EE->TMPL->tagdata;
		}
		
		$this->return_data = $str;
		
	}
  
	/** ----------------------------------------
	/**  Plugin Usage
	/** ----------------------------------------*/
	
	function usage()
	{
		ob_start(); 
		?>
		This plugin does Absolutely Nothing.
		<?php
		$buffer = ob_get_contents();
		
		ob_end_clean(); 
		
		return $buffer;
	}

} // END class Do_nothing()


/* End of file pi.do_nothing.php */ 
/* Location: ./system/expressionengine/third_party/do_nothing/pi.do_nothing.php */