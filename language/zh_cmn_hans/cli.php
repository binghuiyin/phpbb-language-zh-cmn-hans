<?php
/**
*
* This file is part of the phpBB Forum Software package.
* @简体中文语言　David Yin <https://www.g2soft.net/>
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'CLI_CONFIG_CANNOT_CACHED'			=> '如果配置选项会修改频繁，请加上这个选项。',
	'CLI_CONFIG_CURRENT'				=> '当前配置值，使用0和1表示布尔值',
	'CLI_CONFIG_DELETE_SUCCESS'			=> '成功删除配置 %s。',
	'CLI_CONFIG_NEW'					=> '新的配置值，使用0和1表示布尔值',
	'CLI_CONFIG_NOT_EXISTS'				=> '配置 %s 不存在',
	'CLI_CONFIG_OPTION_NAME'			=> '配置选项的名称',
	'CLI_CONFIG_PRINT_WITHOUT_NEWLINE'	=> '设置这个选项如果打印值时末尾不带新行。',
	'CLI_CONFIG_INCREMENT_BY'			=> '增加的数额',
	'CLI_CONFIG_INCREMENT_SUCCESS'		=> '成功增加配置 %s',
	'CLI_CONFIG_SET_FAILURE'			=> '无法设置配置 %s',
	'CLI_CONFIG_SET_SUCCESS'			=> '成功设置配置 %s',

	'CLI_DESCRIPTION_CRON_LIST'					=> '打印包括已准备和未准备的计划任务列表。',
	'CLI_DESCRIPTION_CRON_RUN'					=> '运行所有已准备之计划任务。',
	'CLI_DESCRIPTION_CRON_RUN_ARGUMENT_1'		=> '要运行的任务名称',
	'CLI_DESCRIPTION_DB_LIST'					=> '列出所有已安装及可安装的变更。',	
	'CLI_DESCRIPTION_DB_MIGRATE'				=> '应用改变更新数据库。',
	'CLI_DESCRIPTION_DB_REVERT'					=> '撤销一项变更。',
	'CLI_DESCRIPTION_DELETE_CONFIG'				=> '删除一个配置选项',
	'CLI_DESCRIPTION_DISABLE_EXTENSION'			=> '禁用指定扩展。',
	'CLI_DESCRIPTION_ENABLE_EXTENSION'			=> '启用指定扩展。',
	'CLI_DESCRIPTION_FIND_MIGRATIONS'			=> '找到不依赖的改变。',
	'CLI_DESCRIPTION_GET_CONFIG'				=> '获取一个配置选项的值',
	'CLI_DESCRIPTION_INCREMENT_CONFIG'			=> '增加一个配置选项的整数值',
	'CLI_DESCRIPTION_LIST_EXTENSIONS'			=> '列出数据库和文件系统中的所有扩展。',

	'CLI_DESCRIPTION_OPTION_ENV'				=> '环境名称',	
	'CLI_DESCRIPTION_OPTION_SAFE_MODE'			=> '安全模式运行(不启用扩展)',
	'CLI_DESCRIPTION_OPTION_SHELL'				=> '开始命令行模式。',
	'CLI_DESCRIPTION_PURGE_EXTENSION'			=> '清除指定的扩展。',
	'CLI_DESCRIPTION_REPARSER_LIST'				=> '列出可解析的文本类型。',
	'CLI_DESCRIPTION_REPARSER_AVAILABLE'		=> '可用的解析：',
	'CLI_DESCRIPTION_REPARSER_REPARSE'			=> '用当前的 text_formatter 服务来戒心储存的文本。',
	'CLI_DESCRIPTION_REPARSER_REPARSE_ARG_1'	=> '要解析的文本类型。留空表示解析所有类型。',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_DRY_RUN'		=> '不要保存任何改变；只打印可能发生的。',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_MIN'	=> '处理最小记录 ID。',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_MAX'	=> '处理最大记录 ID。',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_SIZE'	=> '每一次大约处理的记录数量',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RESUME'		=> '开始从上次停止的地方开始解析。',	
	'CLI_DESCRIPTION_RECALCULATE_EMAIL_HASH'	=> '重新计算用户表中的用户邮件地址哈希值。',
	'CLI_DESCRIPTION_SET_ATOMIC_CONFIG'			=> '只在配置选项的旧值匹配当前值时，才设置它',
	'CLI_DESCRIPTION_SET_CONFIG'				=> '设置一个配置选项的值',

	'CLI_DESCRIPTION_THUMBNAIL_DELETE'		=> '删除所有已有缩略图。',
	'CLI_DESCRIPTION_THUMBNAIL_GENERATE'	=> '生成所有遗漏的缩略图。',
	'CLI_DESCRIPTION_THUMBNAIL_RECREATE'	=> '重新生成所有缩略图。',

	'CLI_DESCRIPTION_UPDATE_CHECK'					=> '检查论坛程序是否已是最新。',
	'CLI_DESCRIPTION_UPDATE_CHECK_ARGUMENT_1'		=> '要检查的扩展名称（如果全部，选择所有扩展）',
	'CLI_DESCRIPTION_UPDATE_CHECK_OPTION_CACHE'		=> '在缓存中运行检查命令',
	'CLI_DESCRIPTION_UPDATE_CHECK_OPTION_STABILITY'	=> '运行命令以只检查稳定版或者非稳定版的扩展。',

	'CLI_ERROR_INVALID_STABILITY' => '"%s" 是非稳定的',

	'CLI_DESCRIPTION_USER_ACTIVATE'				=> '激活 （或冻结） 用户。',
	'CLI_DESCRIPTION_USER_ACTIVATE_USERNAME'	=> '要激活的用户名。',
	'CLI_DESCRIPTION_USER_ACTIVATE_DEACTIVATE'	=> '冻结用户帐号',
	'CLI_DESCRIPTION_USER_ACTIVATE_ACTIVE'		=> '用户已经激活。.',
	'CLI_DESCRIPTION_USER_ACTIVATE_INACTIVE'	=> '用户已经是待激活状态。',
	'CLI_DESCRIPTION_USER_ADD'					=> '添加一个新用户',
	'CLI_DESCRIPTION_USER_ADD_OPTION_USERNAME'	=> '新用户的用户名',
	'CLI_DESCRIPTION_USER_ADD_OPTION_PASSWORD'	=> '新用户的密码',
	'CLI_DESCRIPTION_USER_ADD_OPTION_EMAIL'		=> '新用户的 email',
	'CLI_DESCRIPTION_USER_ADD_OPTION_NOTIFY'	=> '发送新用户账号激活邮件 （默认不发送）',
	'CLI_DESCRIPTION_USER_DELETE'				=> '删除一个用户。',
	'CLI_DESCRIPTION_USER_DELETE_USERNAME'		=> '要删除的用户名',
	'CLI_DESCRIPTION_USER_DELETE_OPTION_POSTS'	=> '删除该用户的所有帖子。不选择的话，该用户的帖子会被保留。',
	'CLI_DESCRIPTION_USER_RECLEAN'				=> '重新清理用户名。',
	
	'CLI_EXTENSION_DISABLE_FAILURE'		=> '无法禁用扩展 %s',
	'CLI_EXTENSION_DISABLE_SUCCESS'		=> '成功禁用扩展 %s',
	'CLI_EXTENSION_ENABLE_FAILURE'		=> '无法启用扩展 %s',
	'CLI_EXTENSION_ENABLE_SUCCESS'		=> '成功启用扩展 %s',
	'CLI_EXTENSION_NAME'				=> '扩展名称',
	'CLI_EXTENSION_PURGE_FAILURE'		=> '无法清除扩展 %s',
	'CLI_EXTENSION_PURGE_SUCCESS'		=> '成功清除扩展 %s',
	'CLI_EXTENSION_UPDATE_FAILURE'		=> '无法更新扩展 %s',
	'CLI_EXTENSION_UPDATE_SUCCESS'		=> '成功更新扩展 %s',
	'CLI_EXTENSION_NOT_FOUND'			=> '没有找到扩展。',
	'CLI_EXTENSIONS_AVAILABLE'			=> '可用的',
	'CLI_EXTENSIONS_DISABLED'			=> '已禁用',
	'CLI_EXTENSIONS_ENABLED'			=> '已启用',

	'CLI_FIXUP_RECALCULATE_EMAIL_HASH_SUCCESS'	=> '成功重新计算所有邮件地址的哈希值。',

	'CLI_MIGRATION_NAME'					=> '变更名字，包括命名空间 （用正斜杠代替反斜杠）。',
	'CLI_MIGRATIONS_AVAILABLE'				=> '可用的变更',
	'CLI_MIGRATIONS_INSTALLED'				=> '已安装的变更',
	'CLI_MIGRATIONS_ONLY_AVAILABLE'		    => '只显示可用的变更',
	'CLI_MIGRATIONS_EMPTY'                  => '没有变更。',

	'CLI_REPARSER_REPARSE_REPARSING'		=> '正在解析 %1$s （范围 %2$d..%3$d）',
	'CLI_REPARSER_REPARSE_REPARSING_START'	=> '正在解析 %s...',
	'CLI_REPARSER_REPARSE_SUCCESS'			=> '成功完成解析',

	// In all the case %1$s is the logical name of the file and %2$s the real name on the filesystem
	// eg: big_image.png (2_a51529ae7932008cf8454a95af84cacd) generated.
	'CLI_THUMBNAIL_DELETED'		=> '%1$s (%2$s) 删除。',
	'CLI_THUMBNAIL_DELETING'	=> '删除缩略图',
	'CLI_THUMBNAIL_SKIPPED'		=> '%1$s (%2$s) 略过。',
	'CLI_THUMBNAIL_GENERATED'	=> '%1$s (%2$s) 生成。',
	'CLI_THUMBNAIL_GENERATING'	=> '生成缩略图',
	'CLI_THUMBNAIL_GENERATING_DONE'	=> '所有的缩略图已重新生成。',
	'CLI_THUMBNAIL_DELETING_DONE'	=> '所有的缩略图已被删除。',

	'CLI_THUMBNAIL_NOTHING_TO_GENERATE'	=> '没有缩略图可生成。',
	'CLI_THUMBNAIL_NOTHING_TO_DELETE'	=> '没有缩略图可生成。',	
	
	
	'CLI_USER_ADD_SUCCESS'		=> '成功添加用户 %s.',
	'CLI_USER_DELETE_CONFIRM'	=> '您确认要删除用户 ‘%s’ 吗？ [y/N]',
	'CLI_USER_RECLEAN_START'	=> '重新清理用户名',
	'CLI_USER_RECLEAN_DONE'		=> [
		0	=> '清理完成。 没有用户名需要清理。',
		1	=> '清理完成。 %d 用户名被清理。',
		2	=> '清理完成。 %d 用户名被清理。',
	],
));	
	// Additional help for commands.
$lang = array_merge($lang, array(
	'CLI_HELP_CRON_RUN'			=> $lang['CLI_DESCRIPTION_CRON_RUN'] . ' 可选项，您可以指定一个任务名来运行特定的cron任务。',
	'CLI_HELP_USER_ACTIVATE'	=> '激活一个用户，或者冻结一个用户使用 <info>--冻结</info> 选项。
可选的发送一个激活email给用户，可以使用  <info>--发送email</info> 选项。',
	'CLI_HELP_USER_ADD'			=> ' <info>%command.name%</info> 命令添加了一个新用户： 
如果这个命令没有附带选项，那么您将被提示输入这些选项。
可选的发送一个email给新用户，可以使用 <info>--send-email</info> 选项。',
	'CLI_HELP_USER_RECLEAN'		=> '重新清理用户名会检查所有储存的用户名，并确认其清洁版本被保存。清理过的用户名是大小写无关的格式，并且是 NFC 标准化和ASCII格式的。',

));
