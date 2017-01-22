<?php
/**
* acp_permissions_phpbb (phpBB Permission Set) [Chinese Simplified]
*
* @package language
* @version $Id$
* @copyright (c) 2005 phpBB Group
* @简体中文语言　David Yin <https://www.phpbbchinese.com/>
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
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

/**
*	MODDERS PLEASE NOTE
*
*	You are able to put your permission sets into a separate file too by
*	prefixing the new file with permissions_ and putting it into the acp 
*	language folder.
*
*	An example of how the file could look like:
*
*	<code>
*
*	if (empty($lang) || !is_array($lang))
*	{
*		$lang = array();
*	}
*
*	// Adding new category
*	$lang['permission_cat']['bugs'] = 'Bugs';
*
*	// Adding new permission set
*	$lang['permission_type']['bug_'] = 'Bug Permissions';
*
*	// Adding the permissions
*	$lang = array_merge($lang, array(
*		'acl_bug_view'		=> array('lang' => 'Can view bug reports', 'cat' => 'bugs'),
*		'acl_bug_post'		=> array('lang' => 'Can post bugs', 'cat' => 'post'), // Using a phpBB category here
*	));
*
*	</code>
*/

// Define categories and permission types
$lang = array_merge($lang, array(
	'permission_cat'	=> array(
		'actions'		=> '操作',
		'content'		=> '内容',
		'forums'		=> '版面',
		'misc'			=> '杂项',
		'permissions'	=> '权限',
		'pm'			=> '私人短信',
		'polls'			=> '投票',
		'post'			=> '帖子',
		'post_actions'	=> '发帖动作',
		'posting'		=> '发帖',
		'profile'		=> '资料',
		'settings'		=> '设定',
		'topic_actions'	=> '主题操作',
		'user_group'	=> '用户&amp;组',
	),

	// With defining 'global' here we are able to specify what is printed out if the permission is within the global scope.
	'permission_type'	=> array(
		'u_'			=> '用户权限',
		'a_'			=> '管理员权限',
		'm_'			=> '版主权限',
		'f_'			=> '版面权限',
		'global'		=> array(
			'm_'			=> '全局版主权限',
		),
	),
));

// User Permissions
$lang = array_merge($lang, array(
	'acl_u_viewprofile'	=> array('lang' => '可以查看用户资料、成员列表及在线名单', 'cat' => 'profile'),
	'acl_u_chgname'		=> array('lang' => '可以更改用户名称', 'cat' => 'profile'),
	'acl_u_chgpasswd'	=> array('lang' => '可以更改密码', 'cat' => 'profile'),
	'acl_u_chgemail'	=> array('lang' => '可以更改email地址', 'cat' => 'profile'),
	'acl_u_chgavatar'	=> array('lang' => '可以更改头像', 'cat' => 'profile'),
	'acl_u_chggrp'		=> array('lang' => '可以更改默认用户组', 'cat' => 'profile'),

	'acl_u_attach'		=> array('lang' => '可以发表附件', 'cat' => 'post'),
	'acl_u_download'	=> array('lang' => '可以下载附件', 'cat' => 'post'),
	'acl_u_savedrafts'	=> array('lang' => '可以保存草稿', 'cat' => 'post'),
	'acl_u_chgcensors'	=> array('lang' => '可以禁用敏感词过滤', 'cat' => 'post'),
	'acl_u_sig'			=> array('lang' => '可以使用签名档', 'cat' => 'post'),

	'acl_u_sendpm'		=> array('lang' => '可以发送私人短信', 'cat' => 'pm'),
	'acl_u_masspm'		=> array('lang' => '可以群发短信给用户', 'cat' => 'pm'),
	'acl_u_masspm_group'=> array('lang' => '可以群发短信给用户组', 'cat' => 'pm'),
	'acl_u_readpm'		=> array('lang' => '可以阅读私人短信', 'cat' => 'pm'),
	'acl_u_pm_edit'		=> array('lang' => '可以编辑自己的私人短信', 'cat' => 'pm'),
	'acl_u_pm_delete'	=> array('lang' => '可以删除自己的私人短信', 'cat' => 'pm'),
	'acl_u_pm_forward'	=> array('lang' => '可以转发私人短信', 'cat' => 'pm'),
	'acl_u_pm_emailpm'	=> array('lang' => '可以email私人短信', 'cat' => 'pm'),
	'acl_u_pm_printpm'	=> array('lang' => '可以打印私人短信', 'cat' => 'pm'),
	'acl_u_pm_attach'	=> array('lang' => '可以在短信中添加附件', 'cat' => 'pm'),
	'acl_u_pm_download'	=> array('lang' => '可以在短信中下载附件', 'cat' => 'pm'),
	'acl_u_pm_bbcode'	=> array('lang' => '可以在短信中使用BBCode', 'cat' => 'pm'),
	'acl_u_pm_smilies'	=> array('lang' => '可以在短信中使用表情图标', 'cat' => 'pm'),
	'acl_u_pm_img'		=> array('lang' => '可以在短信中粘贴图片', 'cat' => 'pm'),
	'acl_u_pm_flash'	=> array('lang' => '可以在短信中粘贴Flash', 'cat' => 'pm'),

	'acl_u_sendemail'	=> array('lang' => '可以发送email', 'cat' => 'misc'),
	'acl_u_sendim'		=> array('lang' => '可以发送即时消息', 'cat' => 'misc'),
	'acl_u_ignoreflood'	=> array('lang' => '可以不受灌水间隔限制', 'cat' => 'misc'),
	'acl_u_hideonline'	=> array('lang' => '可以隐藏在线状态', 'cat' => 'misc'),
	'acl_u_viewonline'	=> array('lang' => '可以查看在线情况', 'cat' => 'misc'),
	'acl_u_search'		=> array('lang' => '可以搜索论坛', 'cat' => 'misc'),
));

// Forum Permissions
$lang = array_merge($lang, array(
	'acl_f_list'		=> array('lang' => '可以看见版面', 'cat' => 'post'),
	'acl_f_read'		=> array('lang' => '可以浏览版面', 'cat' => 'post'),
	'acl_f_post'		=> array('lang' => '可以发表新主题', 'cat' => 'post'),
	'acl_f_reply'		=> array('lang' => '可以回复主题', 'cat' => 'post'),
	'acl_f_icons'		=> array('lang' => '可以使用主题图标', 'cat' => 'post'),
	'acl_f_announce'	=> array('lang' => '可以发布公告', 'cat' => 'post'),
	'acl_f_sticky'		=> array('lang' => '可以发布置顶帖子', 'cat' => 'post'),

	'acl_f_poll'		=> array('lang' => '可以创建投票', 'cat' => 'polls'),
	'acl_f_vote'		=> array('lang' => '可以参与投票', 'cat' => 'polls'),
	'acl_f_votechg'		=> array('lang' => '可以更改存在的投票', 'cat' => 'polls'),

	'acl_f_attach'		=> array('lang' => '可以发表附件', 'cat' => 'content'),
	'acl_f_download'	=> array('lang' => '可以下载文件', 'cat' => 'content'),
	'acl_f_sigs'		=> array('lang' => '可以使用签名档', 'cat' => 'content'),
	'acl_f_bbcode'		=> array('lang' => '可以使用BBCode', 'cat' => 'content'),
	'acl_f_smilies'		=> array('lang' => '可以使用表情图标', 'cat' => 'content'),
	'acl_f_img'			=> array('lang' => '可以发表图片', 'cat' => 'content'),
	'acl_f_flash'		=> array('lang' => '可以发表Flash', 'cat' => 'content'),

	'acl_f_edit'		=> array('lang' => '可以编辑自己的帖子', 'cat' => 'actions'),
	'acl_f_delete'		=> array('lang' => '可以删除自己的帖子', 'cat' => 'actions'),
	'acl_f_user_lock'	=> array('lang' => '可以锁定自己的主题', 'cat' => 'actions'),
	'acl_f_bump'		=> array('lang' => '可以顶主题', 'cat' => 'actions'),
	'acl_f_report'		=> array('lang' => '可以举报帖子', 'cat' => 'actions'),
	'acl_f_subscribe'	=> array('lang' => '可以订阅版面', 'cat' => 'actions'),
	'acl_f_print'		=> array('lang' => '可以打印主题', 'cat' => 'actions'),
	'acl_f_email'		=> array('lang' => '可以email主题', 'cat' => 'actions'),

	'acl_f_search'		=> array('lang' => '可以搜索版面', 'cat' => 'misc'),
	'acl_f_ignoreflood' => array('lang' => '可以不受灌水间隔限制', 'cat' => 'misc'),
	'acl_f_postcount'	=> array('lang' => '增加帖子数<br /><em>请注意这个设定只对新帖子有效.</em>', 'cat' => 'misc'),
	'acl_f_noapprove'	=> array('lang' => '可以不经审阅发表主题', 'cat' => 'misc'),
));

// Moderator Permissions
$lang = array_merge($lang, array(
	'acl_m_edit'		=> array('lang' => '可以编辑帖子', 'cat' => 'post_actions'),
	'acl_m_delete'		=> array('lang' => '可以删除帖子', 'cat' => 'post_actions'),
	'acl_m_approve'		=> array('lang' => '可以审阅帖子', 'cat' => 'post_actions'),
	'acl_m_report'		=> array('lang' => '可以关闭和删除举报', 'cat' => 'post_actions'),
	'acl_m_chgposter'	=> array('lang' => '可以更改帖子作者', 'cat' => 'post_actions'),

	'acl_m_move'	=> array('lang' => '可以移动主题', 'cat' => 'topic_actions'),
	'acl_m_lock'	=> array('lang' => '可以锁定主题', 'cat' => 'topic_actions'),
	'acl_m_split'	=> array('lang' => '可以分割主题', 'cat' => 'topic_actions'),
	'acl_m_merge'	=> array('lang' => '可以合并主题', 'cat' => 'topic_actions'),

	'acl_m_info'	=> array('lang' => '可以查看主题细节', 'cat' => 'misc'),
	'acl_m_warn'	=> array('lang' => '可以签发警告<br /><em>这是全局设置，与版面无关。</em>', 'cat' => 'misc'), // This moderator setting is only global (and not local)
	'acl_m_ban'		=> array('lang' => '可以管理封禁<br /><em>这是全局设置，与版面无关。</em>', 'cat' => 'misc'), // This moderator setting is only global (and not local)
));

// Admin Permissions
$lang = array_merge($lang, array(
	'acl_a_board'		=> array('lang' => '可以修改论坛设置/检查更新', 'cat' => 'settings'),
	'acl_a_server'		=> array('lang' => '可以修改服务器/通讯设置', 'cat' => 'settings'),
	'acl_a_jabber'		=> array('lang' => '可以修改Jabber设定', 'cat' => 'settings'),
	'acl_a_phpinfo'		=> array('lang' => '可以查看php设定', 'cat' => 'settings'),

	'acl_a_forum'		=> array('lang' => '可以管理版面', 'cat' => 'forums'),
	'acl_a_forumadd'	=> array('lang' => '可以添加新版面', 'cat' => 'forums'),
	'acl_a_forumdel'	=> array('lang' => '可以删除版面', 'cat' => 'forums'),
	'acl_a_prune'		=> array('lang' => '可以裁减版面', 'cat' => 'forums'),

	'acl_a_icons'		=> array('lang' => '可以修改主题图标和表情图标', 'cat' => 'posting'),
	'acl_a_words'		=> array('lang' => '可以修改敏感词设定', 'cat' => 'posting'),
	'acl_a_bbcode'		=> array('lang' => '可以设定BBCode标签', 'cat' => 'posting'),
	'acl_a_attach'		=> array('lang' => '可以修改附件相关设定', 'cat' => 'posting'),

	'acl_a_user'		=> array('lang' => '可以管理用户<br /><em>这包括在在线用户列表中查看用户浏览器版本.</em>', 'cat' => 'user_group'),
	'acl_a_userdel'		=> array('lang' => '可以删除/修剪用户', 'cat' => 'user_group'),
	'acl_a_group'		=> array('lang' => '可以管理用户组', 'cat' => 'user_group'),
	'acl_a_groupadd'	=> array('lang' => '可以添加新用户组', 'cat' => 'user_group'),
	'acl_a_groupdel'	=> array('lang' => '可以删除用户组', 'cat' => 'user_group'),
	'acl_a_ranks'		=> array('lang' => '可以管理等级', 'cat' => 'user_group'),
	'acl_a_profile'		=> array('lang' => '可以管理自定义用户资料', 'cat' => 'user_group'),
	'acl_a_names'		=> array('lang' => '可以管理禁用用户名', 'cat' => 'user_group'),
	'acl_a_ban'			=> array('lang' => '可以管理封禁', 'cat' => 'user_group'),

	'acl_a_viewauth'	=> array('lang' => '可以查看权限掩码', 'cat' => 'permissions'),
	'acl_a_authgroups'	=> array('lang' => '可以修改单独的组权限', 'cat' => 'permissions'),
	'acl_a_authusers'	=> array('lang' => '可以修改单独的用户权限', 'cat' => 'permissions'),
	'acl_a_fauth'		=> array('lang' => '可以修改版面权限类', 'cat' => 'permissions'),
	'acl_a_mauth'		=> array('lang' => '可以修改版主权限类', 'cat' => 'permissions'),
	'acl_a_aauth'		=> array('lang' => '可以修改管理员权限类', 'cat' => 'permissions'),
	'acl_a_uauth'		=> array('lang' => '可以修改用户权限类', 'cat' => 'permissions'),
	'acl_a_roles'		=> array('lang' => '可以管理角色', 'cat' => 'permissions'),
	'acl_a_switchperm'	=> array('lang' => '可以使用其他权限', 'cat' => 'permissions'),

	'acl_a_styles'		=> array('lang' => '可以管理风格', 'cat' => 'misc'),
	'acl_a_viewlogs'	=> array('lang' => '可以查看日志', 'cat' => 'misc'),
	'acl_a_clearlogs'	=> array('lang' => '可以清空日志', 'cat' => 'misc'),
	'acl_a_modules'		=> array('lang' => '可以管理模块', 'cat' => 'misc'),
	'acl_a_language'	=> array('lang' => '可以管理语言包', 'cat' => 'misc'),
	'acl_a_email'		=> array('lang' => '可以群发email', 'cat' => 'misc'),
	'acl_a_bots'		=> array('lang' => '可以管理机器人用户', 'cat' => 'misc'),
	'acl_a_reasons'		=> array('lang' => '可以管理举报/否决原因', 'cat' => 'misc'),
	'acl_a_backup'		=> array('lang' => '可以备份/恢复数据库', 'cat' => 'misc'),
	'acl_a_search'		=> array('lang' => '可以管理搜索后端和设定', 'cat' => 'misc'),
));

?>