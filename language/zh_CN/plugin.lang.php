<?php
// 界面翻译
$lang['ec_page_title'] = 'EasyConfig 配置编辑器';
$lang['ec_intro'] = '此配置页面基于 config_default.inc.php 文件自动生成。';
$lang['ec_save_path'] = '修改后的值将保存到 local/config/config_ec.inc.php。';
$lang['ec_input_hint'] = '<b>注意：输入值时无需携带引号。</b>输入框支持 true, false, 数字或字符串。如果是数组，请严格按照 PHP array() 语法书写。';
$lang['ec_note'] = '<b>想要正确使用，请在 config.inc 中任意位置插入</b> [<code style="color:orange">include_once(\'config_ec.inc.php\');</code>]，可以使用 LocalFiles Editor 编辑';
$lang['ec_value_label'] = '当前值：';
$lang['ec_default_ref'] = '默认参考：';
$lang['ec_revert_label'] = '删除自定义值并恢复默认';
$lang['ec_save_btn'] = '保存修改';
$lang['ec_saved_success'] = '配置已成功保存。';
$lang['ec_saved_error'] = '写入配置文件失败，请检查权限。';

// 配置项描述翻译映射
// 格式: $lang['conf_desc_VARIABLE_NAME'] = "描述...";
$lang['conf_desc_'] = '';
$lang['conf_desc_picture_ext'] = '图片文件的扩展名，必须是 file_ext 的子集。<br>Specific note for SVG support: do not add \'svg\' in picture_ext, have it only in file_ext';
$lang['conf_desc_enable_formats'] = 'Piwigo 是否应搜索多种格式？';
$lang['conf_desc_format_ext'] = '文件格式的扩展名，例如照片（或其他任何文件）的附加版本。格式位于子目录 pwg_format 中。';
$lang['conf_desc_top_number'] = '显示“最佳评分”和“最受欢迎”类别的数量';
$lang['conf_desc_show_version'] = '是否在每个页面底部显示 Piwigo 的版本？';
$lang['conf_desc_graphics_library'] = '用于图像缩放的库。值可以是 \'auto\'、\'imagick\'、\'ext_imagick\' 或 \'gd\'。如果值为 \'auto\'，将按此顺序选择库。如果所选库不可用，将会选择其他库。';
$lang['conf_desc_mail_sender_name'] = '定义发件人邮件名称：如果值为空，则使用图库标题';
$lang['conf_desc_mail_sender_email'] = '定义发件人邮箱：如果值为空，则使用网站管理员邮箱';
$lang['conf_desc_smtp_secure'] = '\'ssl\' 或 \'tls\'';
$lang['conf_desc_upload_form_all_types'] = '在上传表单中，让用户只上传 picture_exts 还是允许上传所有 file_exts？<br>对于某些文件类型，Piwigo 会尝试生成 pwg_representative（TIFF、视频、PDF）';
?>