<?php
/**
*
* acp_language [Chinese Simplified]
*
* @package language
* @version $Id$
* @copyright (c) 2005 phpBB Group
* @简体中文语言　David Yin <https://www.phpbbchinese.com/>
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'ACP_FILES'						=> '管理语言文件',
	'ACP_LANGUAGE_PACKS_EXPLAIN'	=> '这里您可以安装/删除语言包, 默认的语言包在前面用星号标记',

	'EMAIL_FILES'			=> 'Email模板',

	'FILE_CONTENTS'				=> '文件内容',
	'FILE_FROM_STORAGE'			=> '存储文件夹中的文件',

	'HELP_FILES'				=> '帮助文件',

	'INSTALLED_LANGUAGE_PACKS'	=> '已安装的语言包',
	'INVALID_LANGUAGE_PACK'		=> '选中的语言包无效. 请校验语言包并重新上载.',
	'INVALID_UPLOAD_METHOD'		=> '选中的上载方式无效, 请选择其他方式.',

	'LANGUAGE_DETAILS_UPDATED'			=> '语言细节更新完成.',
	'LANGUAGE_ENTRIES'					=> '语言条目',
	'LANGUAGE_ENTRIES_EXPLAIN'			=> '这里您可以改变现有的语言包或尚未翻译的条目.<br /><strong>注意:</strong> 一旦您更改语言文件, 改动将存储在一个单独的文件夹中用于下载. 变化对于用户是不可见的, 除非您上载覆盖原来的语言文件.',
	'LANGUAGE_FILES'					=> '语言文件',
	'LANGUAGE_KEY'						=> '语言字键',
	'LANGUAGE_PACK_ALREADY_INSTALLED'	=> '这个语言包已经安装过了.',
	'LANGUAGE_PACK_DELETED'				=> '语言包 <strong>%s</strong> 已经被删除. 所有使用这个语言的用户将被重置到论坛默认语言.',
	'LANGUAGE_PACK_DETAILS'				=> '语言包细节',
	'LANGUAGE_PACK_INSTALLED'			=> '语言包 <strong>%s</strong> 安装完成.',
	'LANGUAGE_PACK_CPF_UPDATE'			=> '自定义区域的语言包复制了默认的语言。如果需要请修改它们。',
	'LANGUAGE_PACK_ISO'					=> 'ISO',
	'LANGUAGE_PACK_LOCALNAME'			=> '本地名称',
	'LANGUAGE_PACK_NAME'				=> '名称',
	'LANGUAGE_PACK_NOT_EXIST'			=> '选中的语言包不存在.',
	'LANGUAGE_PACK_USED_BY'				=> '使用者 (包括机器人)',
	'LANGUAGE_VARIABLE'					=> '语言变量',
	'LANG_AUTHOR'						=> '语言包作者',
	'LANG_ENGLISH_NAME'					=> '英文名称',
	'LANG_ISO_CODE'						=> 'ISO 代号',
	'LANG_LOCAL_NAME'					=> '本地名称',

	'MISSING_LANGUAGE_FILE'		=> '丢失语言文件: <strong style="color:red">%s</strong>',
	'MISSING_LANG_VARIABLES'	=> '丢失语言变量',
	'MODS_FILES'				=> 'MOD语言文件',

	'NO_FILE_SELECTED'				=> '您没有指定一个语言文件.',
	'NO_LANG_ID'					=> '您没有指定一个语言包.',
	'NO_REMOVE_DEFAULT_LANG'		=> '您不能删除默认的语言包.<br />如果您确实想删除它, 请先设置另一种语言为默认语言.',
	'NO_UNINSTALLED_LANGUAGE_PACKS'	=> '没有未安装的语言包',

	'REMOVE_FROM_STORAGE_FOLDER'		=> '从存储文件夹种删除',

	'SELECT_DOWNLOAD_FORMAT'	=> '选择下载格式',
	'SUBMIT_AND_DOWNLOAD'		=> '提交并下载文件',
	'SUBMIT_AND_UPLOAD'			=> '提交并上载文件',

	'THOSE_MISSING_LANG_FILES'			=> '位于 %s 语言文件夹中的语言文件缺少如下文件',
	'THOSE_MISSING_LANG_VARIABLES'		=> '在 <strong>%s</strong> 语言包中缺少如下语言变量',

	'UNINSTALLED_LANGUAGE_PACKS'	=> '未安装的语言包',

	'UNABLE_TO_WRITE_FILE'		=> '文件无法写入 %s.',
	'UPLOAD_COMPLETED'			=> '上载完成.',
	'UPLOAD_FAILED'				=> '上载因为未知的原因失败. 您可能需要手动替换相关文件.',
	'UPLOAD_METHOD'				=> '上载方式',
	'UPLOAD_SETTINGS'			=> '上载设定',

	'WRONG_LANGUAGE_FILE'		=> '选中的语言包无效.',
));

?>