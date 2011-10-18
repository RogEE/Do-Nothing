<?php

/**
 * RogEE Do Nothing - config file
 *
 * @package		RogEE Do Nothing
 * @author		Michael Rog <michael@michaelrog.com>
 * @copyright	Copyright (c) 2010 Michael Rog
 * @link		http://rog.ee/do_nothing
 */

if ( ! defined('ROGEE_DN_VERSION') )
{
	define('ROGEE_DN_NAME', 'RogEE Do Nothing');
	define('ROGEE_DN_VERSION', '1.0.0');
	define('ROGEE_DN_DOCS', 'http://rog.ee/do_nothing');
}

$config['name'] = ROGEE_DN_NAME;
$config['version'] = ROGEE_DN_VERSION;
$config['nsm_addon_updater']['versions_xml'] = 'http://rog.ee/versions/do_nothing';



/* End of file config.php */
/* Location: ./system/expressionengine/third_party/do_nothing/config.php */