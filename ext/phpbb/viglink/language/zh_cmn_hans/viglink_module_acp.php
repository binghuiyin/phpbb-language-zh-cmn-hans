<?php
/**
 *
 * VigLink extension for the phpBB Forum Software package.
 * @简体中文语言　David Yin <https://www.g2soft.net/>
 *
 * @copyright (c) 2014 phpBB Limited <https://www.phpbb.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
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
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//


$lang = array_merge($lang, array(
	'ACP_VIGLINK_SETTINGS'			=> 'VigLink 设置',
	'ACP_VIGLINK_SETTINGS_EXPLAIN'	=> 'VigLink 是一个第三方服务，可以把用户所发布的链接在不影响用户体验的条件下转化成有收益的链接。当用户点击你的一个指向产品或者服务的外部链接，并且完成购买，商家会支付 VigLink 一定的佣金，其中有一部分会被捐赠给 phpBB 项目，这样你也就支持了我们的开源组织并确保我们持续的财政安全。',
	'ACP_VIGLINK_SETTINGS_CHANGE'	=> '你可以在任何时候修改这部分的 “<a href="%1$s">VigLink 设置</a>”。',
	'ACP_VIGLINK_ENABLE'			=> '启用 VigLink',
	'ACP_VIGLINK_ENABLE_EXPLAIN'	=> '启用 VigLink 服务。',
	'ACP_VIGLINK_EARNINGS'			=> '可选： 收取您自己的收入。',
	'ACP_VIGLINK_EARNINGS_EXPLAIN'  => '您可以通过注册 VigLink Convert 账户，来收取您自己的收入。',
	'ACP_VIGLINK_DISABLED_PHPBB'	=> 'VigLink 服务已被停用。',
	'ACP_VIGLINK_CLAIM'				=> '收取您自己的收入',
	'ACP_VIGLINK_CLAIM_EXPLAIN'		=> '您可以不捐献通过 VigLink 的可收益链接赚取的收入给 phpBB 项目，转而收取这部分作为自己论坛的收入。点击 “Convert account” 来 申请注册一个 “VigLink Convert”，你就可以管理自己的账户。 ',
	'ACP_VIGLINK_CONVERT_ACCOUNT'	=> 'Convert 账户',
	'ACP_VIGLINK_NO_CONVERT_LINK'	=> 'VigLink convert 账户链接无法取得。'
));
