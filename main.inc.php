<?php
/*
Plugin Name: EasyConfig
Version: 1.0
Description: Parse config_default and edit settings visually.
Plugin URI: https://piwigo.org/ext/index.php?eid=1059
Author: Imfcat
*/

if (!defined('PHPWG_ROOT_PATH')) die('Hacking attempt!');

// Config
define('EASY_CONFIG_DIR', basename(dirname(__FILE__)));
define('EASY_CONFIG_PATH', PHPWG_PLUGINS_PATH . EASY_CONFIG_DIR . '/');
define('DEFAULT_CONFIG_DIR', PHPWG_ROOT_PATH . 'include/config_default.inc.php');
define('CUSTOM_CONFIG_PATH', PHPWG_ROOT_PATH . 'local/config/config_ec.inc.php');

add_event_handler('get_admin_plugin_menu_links', 'easy_config_admin_menu');

function easy_config_admin_menu($menu)
{
    $menu[] = array(
        'NAME' => 'EasyConfig',
        'URL' => get_admin_plugin_menu_link(EASY_CONFIG_PATH . 'admin.php')
    );
    return $menu;
}
