<?php
if (!defined('PHPWG_ROOT_PATH')) die('Hacking attempt!');

function plugin_install($plugin_id, $plugin_version, &$errors)
{
    // 检查是否可写
    $config_dir = PHPWG_ROOT_PATH . 'local/config';
    if (is_dir($config_dir) && !is_writable($config_dir)) {
        $errors[] = "EasyConfig: Directory " . $config_dir . " is not writable.";
    }
}

function plugin_activate($plugin_id, $plugin_version, &$errors) {}

function plugin_deactivate($plugin_id) {}

function plugin_uninstall($plugin_id) {}
