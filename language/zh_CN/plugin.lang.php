<?php
// 界面翻译
$lang['ec_page_title'] = 'EasyConfig 配置编辑器';
$lang['ec_intro'] = '此配置页面基于 config_default.inc.php 文件自动生成。';
$lang['ec_save_path'] = '修改后的值将保存到 local/config/config_ec.inc.php。';
$lang['ec_note'] = '<b>想要正常使用，请在 config.inc.php 中任意位置插入</b> [<code style="color:orange">include_once(\'config_ec.inc.php\');</code>]，可以使用 LocalFiles Editor 编辑';
$lang['ec_value_label'] = '当前值：';
$lang['ec_default_ref'] = '默认参考：';
$lang['ec_revert_label'] = '删除自定义值并恢复默认';
$lang['ec_save_btn'] = '保存修改';
$lang['ec_saved_success'] = '配置已成功保存。';
$lang['ec_saved_error'] = '写入配置文件失败，请检查权限。';

$lang['ec_download_btn'] = '导出配置文件';
$lang['ec_delete_btn'] = '重置配置文件';
$lang['ec_delete_confirm'] = '警告：这将删除配置文件 (config_ec.inc.php) 确定要继续吗？';
$lang['ec_delete_success'] = '配置文件已删除。';
$lang['ec_delete_error'] = '无法删除配置文件。';
$lang['ec_file_not_found'] = '找不到配置文件，无法下载。';

// 配置项描述翻译映射
// 格式: $lang['conf_desc_VARIABLE_NAME'] = "描述...";
$lang['conf_desc_'] = '';
// +-----------------------------------------------------------------------+
// |                                 misc                                  |
// +-----------------------------------------------------------------------+
$lang['conf_desc_picture_ext'] = '图片文件的扩展名，必须是 file_ext 的子集。<br>Specific note for SVG support: do not add \'svg\' in picture_ext, have it only in file_ext';
$lang['conf_desc_file_ext'] = "允许的文件扩展名（区分大小写）
<br>* 如果您启用了“eps”文件扩展名，请确保在ImageMagick策略中已授权此文件类型
<br>* 如果您希望允许上传file_ext文件，请不要忘记将 \$conf['upload_form_all_types'] 设置为 true";
$lang['conf_desc_enable_formats'] = 'Piwigo 是否应搜索多种格式？';
$lang['conf_desc_format_ext'] = '文件格式的扩展名，例如照片（或其他任何文件）的附加版本。格式位于子目录 pwg_format 中。';
$lang['conf_desc_top_number'] = '显示“最佳评分”和“最受欢迎”类别的数量';
$lang['conf_desc_anti-flood_time'] = '两条评论之间的秒数：0 表示禁用';
$lang['conf_desc_comment_spam_reject'] = '符合条件的垃圾评论不会被记录（设置为 false 将会记录它们，但需要管理员验证）';
$lang['conf_desc_comment_spam_max_links'] = '评论中链接的最大数量，超过此数量将被视为垃圾信息';
$lang['conf_desc_calendar_datefield'] = '用于日历类别的“images”表的日期字段';
$lang['conf_desc_calendar_show_any'] = '日历在 年/月/周/日 导航栏中显示了一个额外的“任意”按钮';
$lang['conf_desc_calendar_show_empty'] = '即使没有相应的元素，日历仍会显示 月/周/天';
$lang['conf_desc_newcat_default_commentable'] = '在创建时，类别是否可评论？';
$lang['conf_desc_newcat_default_visible'] = '在创建时，类别是否可见？<br>注意：如果父类别不可见，该类别将自动创建为不可见状态。(invisible = locked)';
$lang['conf_desc_newcat_default_status'] = '在创建时，类别是公开还是私有？<br>注意：如果父类别是私有的，则该类别将自动创建为私有。';
$lang['conf_desc_newcat_default_position'] = '在创建时，相册应显示在首位还是末位？';
$lang['conf_desc_light_album_manager_threshold'] = 'Piwigo 应该在多少相册数量以上使用轻量级相册管理器';
$lang['conf_desc_level_separator'] = "用于将类别层级与子层级分隔的字符字符串。建议使用：' / ', ' &raquo; ', ' &rarr; ', ' - ', ' &gt;'";
$lang['conf_desc_paginate_pages_around'] = '在分页导航栏中，当前页前后应显示多少页？';
$lang['conf_desc_show_version'] = '是否在每个页面底部显示 Piwigo 的版本？';
$lang['conf_desc_meta_ref'] = 'meta_ref 用于引用多个已合并页面或元素的集合<br>设置为 false 可避免在 Google 和其他搜索引擎中被引用。';
$lang['conf_desc_links'] = '菜单中要添加的外部链接列表。如果数组为空，主页上将不会显示“链接”框。';
$lang['conf_desc_random_index_redirect'] = '在 index.php 上未定义任何部分时使用的“内部”链接列表。';
$lang['conf_desc_header_notes'] = "在所有页眉页面上显示的注释列表。<br>例如：\$conf['header_notes'] = array('Test', 'Hello');";
$lang['conf_desc_show_thumbnail_caption'] = '是否要在缩略图页面上显示缩略图说明';
$lang['conf_desc_allow_random_representative'] = '您是否希望 Piwigo 在每次重新加载时，在类别元素中搜索一个新的代表？<br>如果设置为 false，则会随机或手动选择一个元素来代表其类别，并且只要管理员不更改，它将一直保持为该类别的代表。<br>注意：将此参数设置为 true 会消耗较多 CPU 资源。每次将此参数的值从 false 改为 true 时，管理员必须在 [管理员 > 常规 > 维护] 页面更新类别信息。';
$lang['conf_desc_representative_cache_on_level'] = '如果某个缩略图被选为代表，但其隐私等级高于当前用户，Piwigo 将随机选择另一张缩略图。是否应该将该缩略图存储在缓存中，以避免下一次页面刷新时再次执行耗时的 SQL 查询？';
$lang['conf_desc_representative_cache_on_subcats'] = '如果一个类别（即相册）仅包含子类别，Piwigo 会在子类别的代表性照片中随机选择一个缩略图。我们是否应将此缩略图存储在缓存中，以避免在下次页面刷新时再次执行“略微消耗性能”的 SQL 查询？';
$lang['conf_desc_allow_html_descriptions'] = '授权管理员在类别和元素描述中使用 HTML。';
$lang['conf_desc_available_permission_levels'] = '管理界面中提供的图像级权限';
$lang['conf_desc_check_upgrade_feed'] = '检查是否需要升级数据库。<br>设置为 true 时，如果需要升级数据库，系统将强烈建议您进行升级。<br>此配置参数在 BSF 分支中设置为 true，而在其他地方设置为 false。';
$lang['conf_desc_rate_items'] = '图片的可用评分标准';
$lang['conf_desc_default_redirect_method'] = "定义默认使用的方法（'http' 或 'html' 以进行重定向）";
$lang['conf_desc_double_password_type_in_admin'] = '在管理员的用户管理面板中使用双重密码类型';
$lang['conf_desc_insensitive_case_logon'] = '用户注册时登录名是否区分大小写。<br>例如：如果设置为 true，则登录名 "user" 将等同于 "User" 或 "USER" 或 "user" 等等…… 并且无法使用这些登录名变体来创建新的用户账户。';
$lang['conf_desc_uniqueness_mode'] = "在添加照片时，使用哪种方法检查唯一性？可以使用'md5sum'或 'filename'";
$lang['conf_desc_graphics_library'] = "用于调整图像大小的库。值可以是 'auto'、'imagick'、'ext_imagick' 或 'gd'。如果值为 'auto'，将按此顺序选择库。如果所选库不可用，将会选择其他库。";
$lang['conf_desc_ext_imagick_dir'] = "如果使用的库是 ImageMagick 的外部安装版本（'ext_imagick'），在此定义 ImageMagick 路径。";
$lang['conf_desc_comments_page_nb_comments'] = "在comments.php页面上默认显示多少用户评论。使用'all'可以显示所有用户评论而不进行分页。默认的可用值为 array(5,10,20,50,'all')，但您也可以设置任何其他数字值。";
$lang['conf_desc_update_notify_check_period'] = '多久检查一次 Piwigo 新版本？单位为秒。仅当 Piwigo 有访问时才会进行检查。设置为0可禁用更新检查。';
$lang['conf_desc_update_notify_reminder_period'] = '多久提醒一次有新版本可用？例如，第一次通知是在2017年5月5日针对2.9.1发送的，我们应在多少秒后再次发送？设为0表示禁用。';
$lang['conf_desc_send_piwigo_infos'] = '每周一次，Piwigo 匿名发送技术数据和一般统计信息，例如照片数量或使用的插件列表。这有助于 piwigo.org 更好地了解 Piwigo 的使用情况。通过这种方式，开发者可以专注于最重要的功能。';
$lang['conf_desc_album_description_on_all_pages'] = '相册描述应该显示在所有页面上(true)？还是仅显示在第一页(false)？';
$lang['conf_desc_stat_compare_year_displayed'] = '历史比较模式中显示的年份数量（用于年份图表）';
$lang['conf_desc_linked_album_search_limit'] = '关联相册搜索限制';
$lang['conf_desc_fs_quick_check_period'] = '多旧检查一次文件系统中缺失的照片。仅在管理页面进行。<br>考虑到 fs_quick_check 总是在仪表板和维护页面上执行。此设置仅适用于其他任何管理页面。0 表示禁用。';
$lang['conf_desc_pdf_viewer_filesize_threshold'] = '这对应于我们不再显示网页浏览器 PDF 查看器的阈值。单位为 MB（兆字节）。';
// +-----------------------------------------------------------------------+
// |                                 email                                 |
// +-----------------------------------------------------------------------+
$lang['conf_desc_send_bcc_mail_webmaster'] = '向网站管理员发送密件抄送邮件。调试时设置为 true。';
$lang['conf_desc_mail_sender_name'] = '定义发件人邮件名称：如果值为空，则使用图库标题';
$lang['conf_desc_mail_sender_email'] = '定义发件人邮箱：如果值为空，则使用网站管理员邮箱';
$lang['conf_desc_mail_allow_html'] = '设置为 true 以允许 text/html 格式的电子邮件';
$lang['conf_desc_smtp_host'] = 'SMTP 配置（如果允许通过 fsockopen 函数使用 SMTP 端口，则有效）<br>SMTP 服务器主机';
$lang['conf_desc_smtp_user'] = 'SMTP用户名';
$lang['conf_desc_smtp_password'] = 'SMTP密码';
$lang['conf_desc_smtp_secure'] = "SMTP协议<br>'ssl' 或 'tls'";
// +-----------------------------------------------------------------------+
// |                               metadata                                |
// +-----------------------------------------------------------------------+
$lang['conf_desc_show_iptc'] = '在 picture.php 上显示 IPTC 元数据';
$lang['conf_desc_show_iptc_mapping'] = '';
$lang['conf_desc_use_iptc'] = '在与文件元数据进行数据库同步时使用IPTC数据';
$lang['conf_desc_use_iptc_mapping'] = '';
$lang['conf_desc_show_exif'] = '在 picture.php 上显示 EXIF 元数据（可选择表格或行格式显示）';
$lang['conf_desc_show_exif_fields'] = '';
$lang['conf_desc_use_exif'] = '在进行文件元数据的数据库同步时使用 EXIF 数据';
$lang['conf_desc_use_exif_mapping'] = '';
$lang['conf_desc_allow_html_in_metadata'] = '如果照片的来源不安全（用户上传），是否移除 HTML 标签以避免 XSS（恶意执行的代码脚本）';
$lang['conf_desc_metadata_keyword_separator_regex'] = '决定哪些字符可以用作关键词分隔符（适用于 EXIF 和 IPTC）。逗号 "," 不能从此列表中移除。';
// +-----------------------------------------------------------------------+
// |                               sessions                                |
// +-----------------------------------------------------------------------+
$lang['conf_desc_session_use_cookies'] = '指定使用 Cookie 在客户端存储会话 ID';
$lang['conf_desc_session_use_only_cookies'] = '指定仅使用 cookie 在客户端存储会话 ID';
$lang['conf_desc_session_use_trans_sid'] = '请勿使用透明会话 ID 支持';
$lang['conf_desc_session_name'] = '指定用于作为 Cookie 名称的会话名称';
$lang['conf_desc_session_save_handler'] = 'session_save_handler: 注释下面的行以使用文件处理器进行会话管理。';
$lang['conf_desc_authorize_remembering'] = '允许用户长时间保持登录状态。它会在客户端创建一个 Cookie。';
$lang['conf_desc_remember_me_name'] = '指定用于保持登录状态的 cookie 名称';
$lang['conf_desc_remember_me_length'] = '用于保持登录的 Cookie 有效期，以秒为单位。';
$lang['conf_desc_session_length'] = '普通会话的有效时间，以秒为单位。';
$lang['conf_desc_session_use_ip_address'] = '通过使用IP地址的一部分来防止会话劫持';
$lang['conf_desc_session_gc_probability'] = '每生成一页时，启动会话垃圾回收器的概率。整数值在 1 到 100 之间，单位为百分比。设置为 0 可禁用，并使用系统默认行为（在类 Debian 系统上，默认是不删除会话）。';
// +-----------------------------------------------------------------------+
// |                            debug/performance                          |
// +-----------------------------------------------------------------------+
$lang['conf_desc_api_key_duration'] = 'API 密钥创建的可用持续时间选项（以天为单位）。在创建新 API 密钥时，将在选择下拉菜单中显示的预定义持续时间数组。使用 \'custom\' 允许用户通过日期选择器输入设置特定的过期日期。';
$lang['conf_desc_lounge_activate_threshold'] = '超过一定数量的照片后，单张照片会被添加到休息区，这是一个临时区域，照片在被“发布”之前会在此等待。默认数量为5万张照片。';
$lang['conf_desc_lounge_max_duration'] = '当最早的照片达到此时长时，休息室会自动清空（照片会被推送到各自的相册）。休息室也可以提前清空，方式为手动操作或在上传结束时清空。单位为秒。默认值为5分钟。';
$lang['conf_desc_show_queries'] = '用于调试目的，显示查询和执行时间';
$lang['conf_desc_show_gt'] = '在每页底部显示生成时间';
$lang['conf_desc_debug_l10n'] = '每次访问未设置的语言键时显示警告信息';
$lang['conf_desc_debug_template'] = '激活模板调试<br>将会弹出一个新窗口';
$lang['conf_desc_debug_mail'] = '将已发送邮件的副本保存到本地数据目录';
$lang['conf_desc_die_on_sql_error'] = '如果 SQL 查询失败，是否应该停止所有操作？';
$lang['conf_desc_compiled_template_cache_language'] = '如果为true，在模板编译期间会替换一些语言字符串（而不是在模板输出时）。这将带来更好的性能。然而，语言文件中的任何更改都不会生效，直到您从管理员维护菜单中清除已编译的模板';
$lang['conf_desc_template_compile_check'] = '告诉 Smarty 是否检查重新编译。除非模板发生更改，否则不需要重新编译。设置为 false 可以提升性能。';
$lang['conf_desc_template_force_compile'] = '使 Smarty 在每次调用时都重新编译模板。这是对开发和调试都很方便。它绝不应用于生产环境。';
$lang['conf_desc_template_combine_files'] = '启用 javascript / css 文件合并';
$lang['conf_desc_show_php_errors'] = "设置需要输出的PHP错误等级（有关可能的值，请参考 INI 'error_reporting'），设置为空值 '' 可禁用";
$lang['conf_desc_show_php_errors_on_frontend'] = '将 display_errors PHP 选项设置为 true，PHP 错误和警告信息会在浏览器中显示。<br>如果设置为 false，则错误信息将保存在服务器的 PHP 日志中，前提是 show_php_errors 已被启用。如果在本地配置中关闭了以下设置，但前端仍显示错误，请检查服务器 PHP 配置中的 display_errors 设置';
// +-----------------------------------------------------------------------+
// |                            authentication                             |
// +-----------------------------------------------------------------------+
$lang['conf_desc_apache_authentication'] = '是否使用 Apache 认证作为参考而不是用户表？';
$lang['conf_desc_users_table'] = '哪个表是用户的参考表？可以是不同于 Piwigo 表的表。如果您决定使用默认表以外的其他表，需要通过删除一些数据来准备数据库';
$lang['conf_desc_external_authentification'] = "如果使用外部认证，请将此配置改为true;";
$lang['conf_desc_user_fields'] = '';
$lang['conf_desc_password_hash'] = '函数对明文用户密码进行哈希处理，以便存储到数据库中。该函数只接受一个参数：the clear password。';
$lang['conf_desc_password_verify'] = '用于将密码与其哈希值进行验证的函数。该函数接收两个必填参数：clear password, hashed password 与一个可选参数 user_id。user_id 用于在 Piwigo 2.5 中使用新哈希更新密码。参考 include/functions_user.inc.php 中的 pwg_password_verify 函数';
$lang['conf_desc_guest_id'] = '匿名用户的ID';
$lang['conf_desc_default_user_id'] = '用于默认值的用户ID';
$lang['conf_desc_browser_language'] = '注册过程以及访客/普通会员从浏览器获取语言。如果语言不可用，将使用之前的 PHPWG_DEFAULT_LANGUAGE';
$lang['conf_desc_guest_access'] = '访客有权限访问吗？（这不是安全功能，也请将你的类别设置为“私密”）。如果为 false，将会从 index.php 重定向到 identification.php';
$lang['conf_desc_password_reset_duration'] = '定义密码重置链接的有效时长（以秒为单位）。默认值为一小时（3600秒）。';
$lang['conf_desc_password_activation_duration'] = '定义密码激活链接的有效时长（以秒为单位）。默认值为72小时（259200秒）。';
// +-----------------------------------------------------------------------+
// |                               history                                 |
// +-----------------------------------------------------------------------+
$lang['conf_desc_nb_logs_page'] = '每页显示多少条日志';
$lang['conf_desc_history_autopurge_every'] = '每经过 N 条新历史记录时，执行自动清理。频率越高，需要删除的行数越少。设置为 0 可禁用此功能。';
$lang['conf_desc_history_autopurge_keep_lines'] = '在自动清除历史记录时要保留多少条？设置为0以禁用。';
$lang['conf_desc_history_autopurge_blocksize'] = '关于历史自动清除，一次最多应该删除多少行？';
// +-----------------------------------------------------------------------+
// |                                 urls                                  |
// +-----------------------------------------------------------------------+
$lang['conf_desc_gallery_url'] = '你可以为画廊的主页设置一个特定的 URL。这是用于非常特定的情况，当你将画廊移动到新的目录或新的域名时，你无需更改此设置。';
$lang['conf_desc_question_mark_in_urls'] = '生成的 URL 包含一个 ? 符号。只有当服务器能够翻译 PATH_INFO 变量时，才能将其改为 false（这取决于服务器的 AcceptPathInfo 指令配置）';
$lang['conf_desc_php_extension_in_urls'] = '如果为 false，为图片和分类生成的 URL 将不包含 .php 扩展名。 这只在 .htaccess 定义了 Options MultiViews 参数或 URL 重写规则生效时有效。';
$lang['conf_desc_category_url_style'] = "可以是'id'（默认）或'id-name'。'id-name'表示类别名称的简化ASCII表示将出现在网址中";
$lang['conf_desc_picture_url_style'] = "可以是'id'（默认）或'id-file'或'file'。'id-file'或‘file’意味着文件名（不包括扩展名）将出现在URL中。请注意，如果选择‘file’，将会发生一次额外的SQL查询。请注意，如果选择‘file’且文件名不唯一，可能会遇到导航问题。";
$lang['conf_desc_tag_url_style'] = "可以是 'id-tag'（默认）或'id'或'tag'。请注意，如果选择 'tag'，且标签的 URL（ASCII）表示形式不唯一，所有具有相同 URL 表示的标签都会显示出来";
$lang['conf_desc_url_port'] = "在 URL 中强制指定端口（例如 ':80' 或 ':443'）
<br>* 'none' : 不添加任何端口，无论检测到什么协议
<br>* 'auto' : 尝试根据 \$_SERVER 变量智能添加端口
<br>* 123 : 在 URL 主机旁添加 ':123'";
// +-----------------------------------------------------------------------+
// |                                 tags                                  |
// +-----------------------------------------------------------------------+
$lang['conf_desc_full_tag_cloud_items_number'] = '在标签云中显示的标签数量。(只显示最常用的标签)';
$lang['conf_desc_menubar_tag_cloud_items_number'] = '在菜单栏的标签云中显示的标签数量。(只显示最常出现的标签)';
$lang['conf_desc_menubar_tag_cloud_content'] = "菜单栏标签云内容，用于菜单栏中的标签云。
<br>'always_all'：标签云始终显示用户可用的所有标签
<br>'current_only'：标签云始终显示当前图片的标签
<br>'all_or_current'：当图片被显示时，标签云显示它们的标签；
当没有图片显示时，显示用户可用的所有标签。";
$lang['conf_desc_content_tag_cloud_items_number'] = '在内容页面的标签云中显示的相关标签数量，当当前部分不是一组标签时。只显示最常用的标签';
$lang['conf_desc_tags_levels'] = '用于显示的级别数量。每个级别都绑定到一个 CSS 类 tagLevelX。';
$lang['conf_desc_tags_default_display_mode'] = "按字母分组标签还是默认显示标签云？<br>'letters' or 'cloud'";
$lang['conf_desc_tag_letters_column_number'] = '按字母显示时标签的列数';
// +-----------------------------------------------------------------------+
// | Related albums                                                        |
// +-----------------------------------------------------------------------+
$lang['conf_desc_related_albums_maximum_items_to_compute'] = '超过此数量后，不要尝试查找相关相册。如果项目太多，SQL 查询会变慢且结果无关，因为显示太多相关专辑。';
$lang['conf_desc_related_albums_display_limit'] = '一旦找到相关的相册，在菜单栏显示多少个？（关联最多的）';
// +-----------------------------------------------------------------------+
// | Notification by mail                                                  |
// +-----------------------------------------------------------------------+
$lang['conf_desc_nbm_default_value_user_enabled'] = 'nbm 用户的默认值';
$lang['conf_desc_nbm_list_all_enabled_users_to_send'] = '快速搜索列表用户（列出所有人而无需查看消息）。更快但使用起来不那么有趣';
$lang['conf_desc_nbm_max_treatment_timeout_percent'] = '在一次发送邮件过程中使用的最长时间。超时延迟比率。';
$lang['conf_desc_nbm_treatment_timeout_default'] = '如果超时无法与 nbm_max_treatment_timeout_percent 结合使用，默认使用该参数';
$lang['conf_desc_recent_post_dates'] = '在 get_recent_post_dates 中用于两种通知的参数';
$lang['conf_desc_rss_feed_author'] = '在 RSS 源 <author> 元素中显示的作者';
$lang['conf_desc_auth_key_duration'] = '身份验证密钥的有效时间，单位为秒。默认 3 天。<br>设置为 0 可禁用。';
// +-----------------------------------------------------------------------+
// | Set admin layout                                                      |
// +-----------------------------------------------------------------------+
$lang['conf_desc_admin_theme'] = '设置管理员布局';
$lang['conf_desc_enable_plugins'] = '我们应该加载活动插件吗？true=是，false=否';
$lang['conf_desc_allow_web_services'] = '允许使用网络服务（true）或完全禁止（false）';
$lang['conf_desc_ws_max_images_per_page'] = '每次调用 Web 服务返回的最大图片数量';
$lang['conf_desc_ws_max_users_per_page'] = '每次调用 Web 服务返回的最大用户数';
$lang['conf_desc_show_newsletter_subscription'] = '显示一个链接以订阅 Piwigo 通讯公告';
$lang['conf_desc_show_piwigo_latest_news'] = '获取并显示 piwigo.org 的最新新闻';
$lang['conf_desc_dashboard_check_for_updates'] = '每次显示仪表板时，检查 Piwigo 或扩展是否有可用更新';
$lang['conf_desc_dashboard_activity_nb_weeks'] = '仪表板上活动图表显示的周数';
$lang['conf_desc_activity_display_connections'] = "在 管理员>用户>活动 页面上，我们是否应该显示连接/断开连接？
<br>'all' = 不过滤，显示所有
<br>'admins_only' = 仅显示管理员用户的连接
<br>'none' = 甚至不显示管理员用户的连接";
$lang['conf_desc_album_move_delay_before_auto_opening'] = '在相册移动页面，拖动相册时，自动打开相册前等待的时间（毫秒）。默认是3秒。';
$lang['conf_desc_show_template_in_side_menu'] = '此变量用于在侧边菜单中显示或隐藏模板选项卡';
$lang['conf_desc_add_cache_to_storage_chart'] = "如果为'true'，则将最后计算的缓存大小添加到仪表板存储图表中。<br>若要重新计算，请使用 工具 -> 维护，刷新。<br>若要禁用，请设置为 false。";
// +-----------------------------------------------------------------------+
// | Filter                                                                |
// +-----------------------------------------------------------------------+
$lang['conf_desc_filter_pages'] = '包含每个页面的配置';
// +-----------------------------------------------------------------------+
// | Slideshow                                                             |
// +-----------------------------------------------------------------------+
$lang['conf_desc_slideshow_period_min'] = '最小范围';
$lang['conf_desc_slideshow_period_max'] = '最大范围';
$lang['conf_desc_slideshow_period_step'] = '最小值和最大值之间的步数';
$lang['conf_desc_slideshow_period'] = '自动幻灯片播放过程中加载新页面前的等待时间（秒）';
$lang['conf_desc_slideshow_repeat'] = '幻灯片循环显示图片';
$lang['conf_desc_light_slideshow'] = '是否在幻灯片模式下使用 slideshow.tpl，而不是 picture.tpl';
$lang['conf_desc_data_location'] = '本地数据目录用于存储数据，例如已编译的模板、插件变量、合并的 css/javascript 或调整大小的图像。请注意必须的末尾斜杠。';
$lang['conf_desc_upload_dir'] = '默认上传路径，此路径必须相对于 Piwigo 安装目录（可以在安装目录之外，只要你的网络服务器可以访问即可）。';
$lang['conf_desc_no_photo_yet_url'] = '当用户的相册中还没有照片时，应该引导他去哪里？';
$lang['conf_desc_themes_dir'] = '包含主题的目录';
$lang['conf_desc_enable_synchronization'] = '启用添加照片的同步方法';
$lang['conf_desc_enable_core_update'] = '在管理页面启用 Piwigo 核心更新';
$lang['conf_desc_enable_extensions_install'] = '允许从管理页面安装/更新插件、主题和语言';
$lang['conf_desc_sync_chars_regex'] = '文件/目录在同步时允许使用字符<br>默认表达式是限制性但安全且理智的，仅适用于ASCII字母数字和连字符减号、下划线和点。';
$lang['conf_desc_sync_exclude_folders'] = '同步期间排除的文件夹名称';
$lang['conf_desc_alternative_pem_url'] = 'PEM url (default is http://piwigo.org/ext)';
$lang['conf_desc_pem_plugins_category'] = 'categories ID on PEM';
$lang['conf_desc_pem_themes_category'] = 'categories ID on PEM';
$lang['conf_desc_pem_languages_category'] = 'categories ID on PEM';
$lang['conf_desc_upload_form_automatic_rotation'] = '根据 EXIF 的“方向”标签，我们是否应该旋转在上传表单中添加的照片或通过 pwg.images.addSimple 网络 API 方法添加的照片？';
$lang['conf_desc_derivative_url_style'] = "0: '自动', 1: 'derivative', 2: '脚本'";
$lang['conf_desc_chmod_value'] = '';
$lang['conf_desc_derivative_default_size'] = "'small', 'medium' or 'large'";
$lang['conf_desc_derivatives_strip_metadata_threshold'] = '对于低于多大尺寸（以像素为单位，即宽*高）的图片，从衍生文件中移除EXIF/IPTC等元数据？';
$lang['conf_desc_animated_webp_compression_quality'] = '对于动画 WebP 文件，为了避免生成过大的衍生文件，请设置特定的质量，不同于 derivatives.resize_quality';
$lang['conf_desc_max_requests'] = '同时进行的最大 Ajax 请求数，用于实时生成缩略图';
$lang['conf_desc_original_url_protection'] = "原始网址保护<br>'', 'images', 'all'";
$lang['conf_desc_inheritance_by_default'] = '创建新相册时的默认行为：新相册是否应继承其父相册的组/用户权限？请注意，该配置仅用于FTP同步，且如果在创建相册时未明确传输该选项，则不会使用。';
$lang['conf_desc_tiff_representative_ext'] = "您上传的 TIF 照片将有一个 JPEG 或 PNG 文件格式的副本<br>'png' or 'jpg'";
$lang['conf_desc_upload_form_all_types'] = '在上传表单中，让用户只上传 picture_exts 还是允许上传所有 file_exts？<br>对于某些文件类型，Piwigo 会尝试生成 pwg_representative（TIFF、视频、PDF）';
$lang['conf_desc_upload_form_chunk_size'] = '块的大小，以千字节为单位。高速连接在使用较高值（如5000）时性能会更好。';
$lang['conf_desc_upload_form_max_file_size'] = '上传表单中文件的最大大小，单位为 MB 兆字节。';
$lang['conf_desc_ffmpeg_dir'] = '如果我们尝试为视频生成 pwg_representative，我们使用 ffmpeg。如果 Web 用户看不到 "ffmpeg"，你可以定义 "ffmpeg" 可执行文件所在目录的完整路径。';
$lang['conf_desc_batch_manager_images_per_page_global'] = '批处理管理器：Piwigo 在全局模式下默认应显示多少张图片。必须是以下值之一 <br>(20, 50, 100)';
$lang['conf_desc_batch_manager_images_per_page_unit'] = '批量管理器：在单元模式下 Piwigo 默认应显示多少张图片。必须在以下值中选择<br>(5, 10, 50)';
$lang['conf_desc_checksum_compute_blocksize'] = 'Piwigo 应一次计算多少个缺失的 md5sum。';
$lang['conf_desc_quick_search_include_sub_albums'] = '快速搜索引擎：包括所有匹配相册的子相册中的照片。例如，如果搜索“bear”，则显示“bear/grizzly”中的照片。当数值更改时，删除 _data/cache 目录中的数据库缓存文件';
// +-----------------------------------------------------------------------+
// |                                 log                                   |
// +-----------------------------------------------------------------------+
$lang['conf_desc_log_dir'] = "日志目录，相对于 \$conf['data_location']";
$lang['conf_desc_log_level'] = '日志级别<br>(OFF, CRITICAL, ERROR, WARNING, NOTICE, INFO, DEBUG)';
$lang['conf_desc_log_archive_days'] = '日志文件保留多少天';
// +-----------------------------------------------------------------------+
// | Proxy Settings                                                        |
// +-----------------------------------------------------------------------+
$lang['conf_desc_use_proxy'] = '如果 Piwigo 需要通过 HTTP 代理连接到互联网，请将此项设置为 true';
$lang['conf_desc_proxy_server'] = '代理连接字符串';
$lang['conf_desc_proxy_auth'] = '如果 HTTP 代理需要身份验证，请在此设置用户名和密码<br>例如：用户名:密码';


?>