<?php
// UI Interface
$lang['ec_page_title'] = 'EasyConfig Editor';
$lang['ec_intro'] = 'This configuration page is automatically generated based on the config_default.inc.php file.';
$lang['ec_save_path'] = 'Modifications are saved to local/config/config_ec.inc.php.';
$lang['ec_input_hint'] = '<b>Note: There is no need to include quotation marks when entering values.</b>Input supports true, false, numbers, or strings. For arrays, use PHP array() syntax.';
$lang['ec_note'] = '<b>To use it correctly, insert</b> <code style="color:orange">include_once(\'config_ec.inc.php\');</code> <b>anywhere in config.inc</b>, Can be edited using LocalFiles Editor.';
$lang['ec_value_label'] = 'Value:';
$lang['ec_default_ref'] = 'Default reference:';
$lang['ec_revert_label'] = 'Delete custom value and revert to default';
$lang['ec_save_btn'] = 'Save Changes';
$lang['ec_saved_success'] = 'Configuration saved successfully.';
$lang['ec_saved_error'] = 'Failed to write configuration file.';

// Config descriptions
// Format: $lang['conf_desc_VARIABLE_NAME'] = "Description...";
$lang['conf_desc_'] = '';
$lang['conf_desc_picture_ext'] = 'picture_ext : file extensions for picture file, must be a subset of file_ext.<br>Specific note for SVG support: do not add \'svg\' in picture_ext, have it only in file_ext';
?>