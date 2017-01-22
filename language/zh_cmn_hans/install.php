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

// Common installer pages
$lang = array_merge($lang, array(
	'INSTALL_PANEL'	=> '安装面板',
	'SELECT_LANG'	=> '选择语言',

	'STAGE_INSTALL'	=> '安装 phpBB',

	// Introduction page
	'INTRODUCTION_TITLE'	=> '说明',
	'INTRODUCTION_BODY'		=> '欢迎来到phpBB3!<br /><br />phpBB®是世界上使用最为广泛的开源论坛软件。phpBB3是自2000年以来这一系列的最新产品。与之前的版本相比，phpBB3 具有更丰富的功能，更友好的操作界面，并拥有phpBB团队的完整技术支持。phpBB3大幅提升了phpBB2受人欢迎的功能，并且添加了众多用户迫切需要的新特性。我们希望phpBB3能超出您的期待.<br /><br />这个安装系统将全程引导您安装，从旧版升级或者转换不同的论坛(包括phpBB2)到phpBB3。要获取更多的信息，我们推荐您阅读<a href="../docs/INSTALL.html">安装指南</a>。<br /><br />要阅读phpBB3许可或了解如何获得支持及我们的立场，请在旁边的菜单中选择。继续下一步操作，请点击上方相应的标签。',

	// Support page
	'SUPPORT_TITLE'		=> '支持',
	'SUPPORT_BODY'		=> '我们将免费为此次发布的phpBB3稳定版本提供完全的技术支持。这包括:</p><ul><li>安装</li><li>设置</li><li>技术问题</li><li>与软件中潜在的Bug相关的问题</li><li>从先前发布的候选(RC)版本升级至最新版本</li><li>从phpBB 2.0.x 转换至 phpBB3</li><li>从其他的论坛转换至 phpBB3 (请访问 <a href="https://www.phpbb.com/community/viewforum.php?f=486">转换器论坛</a>)</li></ul><p>我们建议还在使用Beta版本的用户立即用最新的版本替换他们的系统.</p><h2>扩展/风格</h2><p>与扩展相关的问题，请发表在相应的 <a href="https://www.phpbb.com/community/viewforum.php?f=451">扩展论坛</a>.<br />与风格，模板和图集相关的问题，请发表在相应的 <a href="https://www.phpbb.com/community/viewforum.php?f=471">风格论坛</a>.<br /><br />如果您的问题与特定的包相关，请直接在相应包的主题后回帖.</p><h2>获得支持</h2><p><a href="https://www.phpbb.com/community/viewtopic.php?f=14&amp;t=571070">phpBB欢迎包</a><br /><a href="https://www.phpbb.com/support/">支持部分</a><br /><a href="https://www.phpbb.com/support/docs/en/3.1/ug/quickstart/">快速开始指南</a><br /><br />为了确保您获得最新版本的相关信息，为什么不<a href="https://www.phpbb.com/support/">订阅我们的邮件列表</a>？<br /><br />',

	// License
	'LICENSE_TITLE'		=> 'General Public License',

	// Install page
	'INSTALL_INTRO'			=> '欢迎安装！',
	'INSTALL_INTRO_BODY'	=> '使用这个选项，就可以在您的服务器上安装 phpBB3。</p><p>为了继续安装，您需要知道您的数据库设置。如果您不清楚这些，请联络您的web空间服务商。没有这些信息安装将不能继续。您需要:</p>
	<ul>
		<li>数据库类型 - 您将使用的数据库。</li>
		<li>数据库服务器主机名或 DSN - 数据库服务器地址。</li>
		<li>数据库服务器端口 - 数据库服务器端口 (一般情况下不需要输入)。</li>
		<li>数据库名称 - 数据库服务器上的数据库名称。</li>
		<li>数据库用户名和密码 - 用于登录并访问上述数据库的用户资料。</li>
	</ul>

	<p><strong>注意:</strong> 如果您使用 SQLite，您应该在DSN框中输入数据库的完整路径并保持用户名和密码空白。为了安全的原因， 您应该确保数据库文件不会存放在一个可以被公众访问的文件夹下。</p>

	<p>phpBB3 支持如下的数据库:</p>
	<ul>
		<li>MySQL 3.23 或更高 (支持MySQLi)</li>
		<li>PostgreSQL 8.3+</li>
		<li>SQLite 3.6.15+</li>
		<li>MS SQL Server 2000 或更高 (直接访问或通过 ODBC)</li>
		<li>MS SQL Server 2005 或更高 (native)</li>
		<li>Oracle</li>
	</ul>

	<p>只有您的服务器支持的数据库才会被显示。',

	'ACP_LINK'	=> '前去 <a href="%1$s">管理员控制面板 ACP</a>',
	
	'INSTALL_PHPBB_INSTALLED'		=> 'phpBB 已经安装过了。',
	'INSTALL_PHPBB_NOT_INSTALLED'	=> 'phpBB 尚未安装。'
));

// Requirements translation
$lang = array_merge($lang, array(

	// Filesystem requirements
	'FILE_NOT_EXISTS'			=> '文件不存在',
	'FILE_NOT_EXISTS_EXPLAIN'	=> '安装 phpBB ， 文件 %1$s 必须要存在。',
	'FILE_NOT_EXISTS_EXPLAIN_OPTIONAL'		=> '建议 %1$s 文件存在以获取更好的论坛用户体验。',
	'FILE_NOT_WRITABLE'			=> '文件不可写',
	'FILE_NOT_WRITABLE_EXPLAIN'	=> '安装 phpBB ， 文件 %1$s 必须要可写。',
	'FILE_NOT_WRITABLE_EXPLAIN_OPTIONAL'	=> '建议 %1$s 文件可写入，以获取更好的论坛用户体验。',

	'DIRECTORY_NOT_EXISTS'				=> '目录不存在',
	'DIRECTORY_NOT_EXISTS_EXPLAIN'		=> '安装 phpBB ， 目录 %1$s 必须存在。',
	'DIRECTORY_NOT_EXISTS_EXPLAIN_OPTIONAL'		=> '建议 %1$s 目录存在以获取更好的论坛用户体验。',
	'DIRECTORY_NOT_WRITABLE'			=> '目录不可写',
	'DIRECTORY_NOT_WRITABLE_EXPLAIN'	=> '安装 phpBB ， 目录 %1$s 必须要可写。',
	'DIRECTORY_NOT_WRITABLE_EXPLAIN_OPTIONAL'	=> '建议 %1$s 目录可写入，以获取更好的论坛用户体验。',

	// Server requirements
	'PHP_VERSION_REQD'					=> 'PHP 版本',
	'PHP_VERSION_REQD_EXPLAIN'			=> 'phpBB 需要 PHP version 5.4.0 以上。',
	'PHP_GETIMAGESIZE_SUPPORT'			=> 'PHP getimagesize() 函数是必需的',
	'PHP_GETIMAGESIZE_SUPPORT_EXPLAIN'	=> '为了 phpBB 的正常使用，必须要有 getimagesize 函数。',
	'PCRE_UTF_SUPPORT'					=> 'PCRE UTF-8 支持',
	'PCRE_UTF_SUPPORT_EXPLAIN'			=> '如果 PHP 的 PCRE 插件不支持 UTF-8，phpBB 将无法运行。',
	'PHP_JSON_SUPPORT'					=> 'PHP JSON 支持',
	'PHP_JSON_SUPPORT_EXPLAIN'			=> '为了 phpBB 的正常使用， PHP JSON 扩展需要可用。',
	'PHP_XML_SUPPORT'					=> 'PHP XML/DOM 支持',
	'PHP_XML_SUPPORT_EXPLAIN'			=> '为了 phpBB 的正常使用， PHP XML/DOM 扩展需要可用。',
	'PHP_SUPPORTED_DB'					=> '支持的数据库',
	'PHP_SUPPORTED_DB_EXPLAIN'			=> '您必须为PHP提供至少一个兼容的数据库。如果下面没有可用的数据库模块，您应该联络服务供应商，或者查阅相关的PHP安装文档。',

	'RETEST_REQUIREMENTS'	=> '重新检测安装必要条件',

	'STAGE_REQUIREMENTS'	=> '检测安装必要条件'
));

// General error messages
$lang = array_merge($lang, array(
	'INST_ERR_MISSING_DATA'		=> '所有项目都是必填项。',

	'TIMEOUT_DETECTED_TITLE'	=> '安装程序超时',
	'TIMEOUT_DETECTED_MESSAGE'	=> '安装程序超时，您可以试着刷新此页，也许会出现数据崩溃。我们建议您增加超时设置值，或者试着用 CLI 方式安装。',
));

// Data obtaining translations
$lang = array_merge($lang, array(
	'STAGE_OBTAIN_DATA'	=> '整合安装数据',
	//
	// Admin data
	//
	'STAGE_ADMINISTRATOR'	=> '管理员信息',

	// Form labels
	'ADMIN_CONFIG'				=> '管理员配置',
	'ADMIN_PASSWORD'			=> '管理员密码',
	'ADMIN_PASSWORD_CONFIRM'	=> '确认管理员密码',
	'ADMIN_PASSWORD_EXPLAIN'	=> '请输入一个 6 到 30 位的密码.',
	'ADMIN_USERNAME'			=> '管理员用户名',
	'ADMIN_USERNAME_EXPLAIN'	=> '请输入一个 6 到 20 位的用户名。',

	// Errors
	'INST_ERR_EMAIL_INVALID'		=> '您输入的 email 地址无效。',
	'INST_ERR_PASSWORD_MISMATCH'	=> '您输入的两个密码不一致。',
	'INST_ERR_PASSWORD_TOO_LONG'	=> '您输入的密码太长，请输入最多 30 个字符。',
	'INST_ERR_PASSWORD_TOO_SHORT'	=> '您输入的密码太短，请输入最少 6 个字符。',
	'INST_ERR_USER_TOO_LONG'		=> '您输入的用户名过长，请输入最多 20 个字符。',
	'INST_ERR_USER_TOO_SHORT'		=> '您输入的用户名太短，请输入最少 3 个字符。',

	//
	// Board data
	//
	// Form labels
	'BOARD_CONFIG'		=> '论坛配置',
	'DEFAULT_LANGUAGE'	=> '默认语言',
	'BOARD_NAME'		=> '论坛名称',
	'BOARD_DESCRIPTION'	=> '论坛的简短介绍',

	//
	// Database data
	//
	'STAGE_DATABASE'	=> '数据库设置',

	// Form labels
	'DB_CONFIG'				=> '数据库设置',
	'DBMS'					=> '数据库类型',
	'DB_HOST'				=> '数据库服务器地址或 DSN',
	'DB_HOST_EXPLAIN'		=> 'DSN代表数据源名称，它只与ODBC安装有关。对于PostgreSQL，需要通过UNIX domain socket用localhost或通过TCP用127.0.0.1连接本地服务器。对于SQLite，需要输入数据文件的完整路径。',
	'DB_PORT'				=> '数据库服务器端口',
	'DB_PORT_EXPLAIN'		=> '不用填写，除非您确定服务器监听一个非标准端口。',
	'DB_PASSWORD'			=> '数据库密码',
	'DB_NAME'				=> '数据库名称',
	'DB_USERNAME'			=> '数据库用户名',
	'DATABASE_VERSION'		=> '数据库版本',
	'TABLE_PREFIX'			=> '数据库表名之前缀',
	'TABLE_PREFIX_EXPLAIN'	=> '前缀必须以字母开始，并只包含字母数字和下划线。',

	// Database options
	'DB_OPTION_MSSQL_ODBC'	=> 'MSSQL Server 2000+ via ODBC',
	'DB_OPTION_MSSQLNATIVE'	=> 'MSSQL Server 2005+ [ Native ]',
	'DB_OPTION_MYSQL'		=> 'MySQL',
	'DB_OPTION_MYSQLI'		=> 'MySQL with MySQLi Extension',
	'DB_OPTION_ORACLE'		=> 'Oracle',
	'DB_OPTION_POSTGRES'	=> 'PostgreSQL',
	'DB_OPTION_SQLITE3'		=> 'SQLite 3',

	// Errors
	'INST_ERR_NO_DB'				=> '无法找到指定数据库类型的 PHP 模块',
	'INST_ERR_DB_INVALID_PREFIX'	=> '您输入的前缀无效。必须以字母开头并且只包含字母、数字和下划线。',
	'INST_ERR_PREFIX_TOO_LONG'		=> '您指定的表格前缀过长，上限为 %d 个字符。',
	'INST_ERR_DB_NO_NAME'			=> '没有指定数据库名称。',
	'INST_ERR_DB_FORUM_PATH'		=> '指定的数据库文件位于论坛目录内，您应该把它放在一个无法通过 web 网络访问的位置。',
	'INST_ERR_DB_CONNECT'			=> '连接数据库失败，错误信息如下',
	'INST_ERR_DB_NO_ERROR'			=> '没有得到相应的错误信息。',
	'INST_ERR_PREFIX'				=> '已经存在使用指定前缀的表格，请指定另一个。',
	'INST_ERR_DB_NO_MYSQLI'			=> '服务器内安装的 MySQL 版本与您选择的 “MySQL (使用 MySQLi 扩展)” 选项不兼容，请尝试 “MySQL” 选项。',
	'INST_ERR_DB_NO_SQLITE3'		=> '您安装的SQLite扩展版本太旧，必须升级到至少3.6.15。',
	'INST_ERR_DB_NO_ORACLE'			=> '服务器内安装的 Oracle 版本需要您将参数 <var>NLS_CHARACTERSET</var> 设置为 <var>UTF8</var>。请设置此参数，或将 Oracle 升级至最低 9.2 版。',
	'INST_ERR_DB_NO_POSTGRES'		=> '您选择的数据库不是 <var>UNICODE</var> 或 <var>UTF8</var> 编码，请使用 <var>UNICODE</var> 或 <var>UTF8</var> 编码的数据库。',
	'INST_SCHEMA_FILE_NOT_WRITABLE'	=> 'schema 文件不可写',

	//
	// Email data
	//
	'EMAIL_CONFIG'	=> 'E-mail 配置',

	// Package info
	'PACKAGE_VERSION'					=> '包版本已安装',
	'UPDATE_INCOMPLETE'				=> '你的 phpBB 程序没有正确的升级。',
	'UPDATE_INCOMPLETE_MORE'		=> '请阅读以下信息，来修正错误。',
	'UPDATE_INCOMPLETE_EXPLAIN'		=> '<h1>不完全的更新</h1>

		<p>我们注意到您最近一次的 phpBB 程序更新没有完成。 请访问链接 <a href="%1$s" title="%1$s">数据库更新</a>， 确认 <em>只更新数据库</em> 是被选择的，并点击 <strong>提交</strong>。 不要忘记在成功更新数据库后删除“install”目录。 </p>',
	
	//
	// Server data
	//
	// Form labels
	'SERVER_CONFIG'				=> '服务器配置',
	'SCRIPT_PATH'				=> '脚本路径',
	'SCRIPT_PATH_EXPLAIN'		=> 'phpBB 根目录与域名指向目录的相对路径，例如：<samp>/phpBB3</samp>',

));

// Default database schema entries...
$lang = array_merge($lang, array(
	'CONFIG_BOARD_EMAIL_SIG'		=> '非常感谢，论坛管理团队',
	'CONFIG_SITE_DESC'				=> '用于描述您的论坛的一小段文字',
	'CONFIG_SITENAME'				=> '您的论坛',

	'DEFAULT_INSTALL_POST'			=> '这是新安装好的phpBB3论坛中的一个样本帖子。您可以删除这个帖子、这个主题甚至这个版面， 因为一切看起来都运转正常！',

	'FORUMS_FIRST_CATEGORY'			=> '您的第一个分区',
	'FORUMS_TEST_FORUM_DESC'		=> '描述您的第一个版面',
	'FORUMS_TEST_FORUM_TITLE'		=> '您的第一个版面',

	'RANKS_SITE_ADMIN_TITLE'		=> '网站管理员',
	'REPORT_WAREZ'					=> '帖子包含非法或盗版的软件。',
	'REPORT_SPAM'					=> '被举报的帖子唯一的目的就是为网站或某些产品做广告。',
	'REPORT_OFF_TOPIC'				=> '被举报的是跑题文章。',
	'REPORT_OTHER'					=> '举报的原因不符合列举的条目，请输入进一步描述。',

	'SMILIES_ARROW'					=> '箭头',
	'SMILIES_CONFUSED'				=> '疑惑',
	'SMILIES_COOL'					=> '酷！',
	'SMILIES_CRYING'				=> '哭泣或非常伤心',
	'SMILIES_EMARRASSED'			=> '困窘',
	'SMILIES_EVIL'					=> '邪恶或疯狂',
	'SMILIES_EXCLAMATION'			=> '感叹',
	'SMILIES_GEEK'					=> '滑稽',
	'SMILIES_IDEA'					=> '想法',
	'SMILIES_LAUGHING'				=> '大笑',
	'SMILIES_MAD'					=> '抓狂',
	'SMILIES_MR_GREEN'				=> '绿先生',
	'SMILIES_NEUTRAL'				=> '中立',
	'SMILIES_QUESTION'				=> '疑问',
	'SMILIES_RAZZ'					=> '冷笑',
	'SMILIES_ROLLING_EYES'			=> '滴溜的眼睛',
	'SMILIES_SAD'					=> '忧郁',
	'SMILIES_SHOCKED'				=> '震撼',
	'SMILIES_SMILE'					=> '微笑',
	'SMILIES_SURPRISED'				=> '惊讶',
	'SMILIES_TWISTED_EVIL'			=> '扭曲的恶魔',
	'SMILIES_UBER_GEEK'				=> '搞笑',
	'SMILIES_VERY_HAPPY'			=> '特开心',
	'SMILIES_WINK'					=> '眨眼',

	'TOPICS_TOPIC_TITLE'			=> '欢迎来到 phpBB3',
));

// Common navigation items' translation
$lang = array_merge($lang, array(
	'MENU_OVERVIEW'		=> '综合信息',
	'MENU_INTRO'		=> '介绍',
	'MENU_LICENSE'		=> '授权',
	'MENU_SUPPORT'		=> '支持',
));

// Task names
$lang = array_merge($lang, array(
	// Install filesystem
	'TASK_CREATE_CONFIG_FILE'	=> '创建配置文件',

	// Install database
	'TASK_ADD_CONFIG_SETTINGS'		=> '加入配置设定',
	'TASK_ADD_DEFAULT_DATA'			=> '加入默认设定到数据库',
	'TASK_CREATE_DATABASE_SCHEMA_FILE'	=> '创建数据库 schema 文件',
	'TASK_SETUP_DATABASE'				=> '设置数据库',
	'TASK_CREATE_TABLES'				=> '创建数据表',


	// Install data
	'TASK_ADD_BOTS'			=> '添加机器人用户',
	'TASK_ADD_LANGUAGES'	=> '安装可用的语言',
	'TASK_ADD_MODULES'		=> '安装模块',

	// Install finish tasks
	'TASK_INSTALL_EXTENSIONS'	=> '安装扩展包',	
	'TASK_NOTIFY_USER'			=> '发送通知 email',
	'TASK_POPULATE_MIGRATIONS'	=> '使变更生效',



	// Installer general progress messages
	'INSTALLER_FINISHED'	=> '安装成功',
));

// Installer's general messages
$lang = array_merge($lang, array(
	'MODULE_NOT_FOUND'				=> '模块没有找到',
	'MODULE_NOT_FOUND_DESCRIPTION'	=> '模块没有找到，因为 %s 服务没有定义。',

	'TASK_NOT_FOUND'				=> '任务没有找到',
	'TASK_NOT_FOUND_DESCRIPTION'	=> '任务没有找到，因为 %s 服务没有定义。',

	'SKIP_MODULE'	=> '忽略 “%s” 模块',
	'SKIP_TASK'		=> '忽略 “%s” 任务',

	'TASK_SERVICE_INSTALLER_MISSING'	=> '所有安装程序的任务服务应该用“安装程序”启动。',
	'TASK_CLASS_NOT_FOUND'				=> '安装程序的任务服务定义无效。服务名称 “%1$s” 已给定， 所期望的类命名空间是 “%2$s” 。更多信息请查看 task_interface 文档。',

	'INSTALLER_CONFIG_NOT_WRITABLE'	=> '安装程序的配置文件不可写。',
));

// CLI messages
$lang = array_merge($lang, array(
	'CLI_INSTALL_BOARD'				=> '安装 phpBB',
	'CLI_UPDATE_BOARD'				=> '升级 phpBB',
	'CLI_INSTALL_SHOW_CONFIG'		=> '显示所使用的配置。',
	'CLI_INSTALL_VALIDATE_CONFIG'	=> '验证一个配置文件。',
	'CLI_CONFIG_FILE'				=> '配置文件使用',
	'MISSING_FILE'					=> '无法访问文件 %1$s',
	'MISSING_DATA'					=> '配置文件缺少数据，或者可能包含无效的设置。',
	'INVALID_YAML_FILE'				=> '无法解析 YAML 文件 %1$s',	
	'CONFIGURATION_VALID'			=> '配置文件无效',
));

// Common updater messages
$lang = array_merge($lang, array(
	'UPDATE_INSTALLATION'			=> '升级 phpBB',
	'UPDATE_INSTALLATION_EXPLAIN'	=> '本选项将升级您的phpBB安装到最新版本。<br />在升级处理期间所有的文件都将被检查是否完整。您可以查看文件和升级前的变化。<br /><br />文件自动升级的途径有两条。</p><h2>手动升级</h2><p>这个选项，您只需要下载有改动的文件以确保不会丢失您对其他文件的修改。下载后将文件上载到phpBB目录的相应位置。之后，您可以再次进行文件检查，检查是否将文件放到了正确的位置。</p><h2>通过FTP自动升级</h2><p>这个方法和第一个类似，但是不需要下载有变动的文件和手动上传它们。系统将为您自动做这个工作。用这个方法进行升级您需要知道您的 FTP 登录的详细信息。 一旦完成设置，系统将重新定向到文件检查功能完成系统升级。.<br /><br />',
	'UPDATE_INSTRUCTIONS'			=> '

		<h1>发行公告</h1>

		<p>在升级程序前，请阅读最新版本的发行公告，它包含很多有用的信息。它也包含完整的下载链接和代码变动日志。</p>

		<br />

		<h1>如何使用自动升级程序升级您的论坛</h1>
		<p>下面列出的是推荐的升级方法，它只对自动升级包有效。您也可以采用 INSTALL.html 文档中列出的方式升级。自动升级 phpBB3 的步骤是：</p>

		<ul style="margin-left: 20px; font-size: 1.1em;">
			<li>到 <a href="https://www.phpbb.com/downloads/" title="https://www.phpbb.com/downloads/">phpBB.com 下载页</a>下载 "Automatic Update Package"。<br /><br /></li>
			<li>解压缩档案.<br /><br /></li>
			<li>上传解压完的 "install" 和 "vendor" 文件夹到您的phpBB根目录(config.php文件所在目录)。<br /><br /></li>
		</ul>

		<p>一旦上传普通用户将无法访问论坛，因为有install目录。<br /><br />
		<strong><a href="%1$s" title="%1$s">现在输入install地址开始更新程序</a>。</strong><br />
		<br />
		按向导完成开始更新。完成后更新程序将给您发送一个通知。
		</p>
	',
));

// Updater forms
$lang = array_merge($lang, array(
	// Updater types
	'UPDATE_TYPE'			=> '升级类型',

	'UPDATE_TYPE_ALL'		=> '升级文件系统和数据库',
	'UPDATE_TYPE_DB_ONLY'	=> '只升级数据库',

	// File updater methods
	'UPDATE_FILE_METHOD_TITLE'		=> '文件升级方法',

	'UPDATE_FILE_METHOD'			=> '文件升级方法',
	'UPDATE_FILE_METHOD_DOWNLOAD'	=> '下载修改过后的文件包',
	'UPDATE_FILE_METHOD_FTP'		=> '通过 FTP （自动） 升级文件',
	'UPDATE_FILE_METHOD_FILESYSTEM'	=> '通过直接文件访问 （自动） 升级文件',

	// File updater archives
	'SELECT_DOWNLOAD_FORMAT'	=> '选择下载的文件包格式',

	// FTP settings
	'FTP_SETTINGS'			=> 'FTP 设置',
));

// Requirements messages
$lang = array_merge($lang, array(
	'UPDATE_FILES_NOT_FOUND'	=> '升级目录没有找到，请确认上传了所有相关的文件。',

	'NO_UPDATE_FILES_UP_TO_DATE'	=> '您已经是最新版本了。无需在运行升级工具。如果您想对文件做完整性检测，请确认上传了正确的升级文件。',
	'OLD_UPDATE_FILES'				=> '升级文件是过时的版本。是用来从 phpBB %1$s 升级到 phpBB %2$s 版本的。 但是最新版的 phpBB 是 %3$s。',
	'INCOMPATIBLE_UPDATE_FILES'		=> '升级文件与您安装的版本不兼容。您安装的版本是 %1$s 而升级文件是用于升级 phpBB %2$s 到 %3$s 的。',
));

// Update files
$lang = array_merge($lang, array(
	'STAGE_UPDATE_FILES'		=> '升级文件',

	// Check files
	'UPDATE_CHECK_FILES'	=> '检查文件',

	// Update file differ
	'FILE_DIFFER_ERROR_FILE_CANNOT_BE_READ'	=> '差异文件无法打开 %s.',

	'UPDATE_FILE_DIFF'		=> '比较文件差异',
	'ALL_FILES_DIFFED'		=> '所有修改过的文件都比较过了。',

	// File status
	'UPDATE_CONTINUE_FILE_UPDATE'	=> '升级文件',

	'DOWNLOAD'							=> '下载',
	'DOWNLOAD_CONFLICTS'				=> '下载合并冲突文件包',
	'DOWNLOAD_CONFLICTS_EXPLAIN'		=> '查找 &lt;&lt;&lt; 并标出冲突',
	'DOWNLOAD_UPDATE_METHOD'			=> '下载已修改的文件包',
	'DOWNLOAD_UPDATE_METHOD_EXPLAIN'	=> '当您下载并解压缩文件包后，您需要上传所有的解压后的文件到 phpBB 安装目录。请上传文件到对应的位置。当您完成所有文件的上传后，请用继续升级。',

	'FILE_ALREADY_UP_TO_DATE'		=> '文件已经是最新的',
	'FILE_DIFF_NOT_ALLOWED'			=> '文件不允许被比较。',
	'FILE_USED'						=> '信息来自于',			// Single file
	'FILES_CONFLICT'				=> '有冲突的文件',
	'FILES_CONFLICT_EXPLAIN'		=> '下面的文件已经修改过，不是旧版本的原始文件。phpBB 认为合并这些文件会产生冲突。请检查冲突并尝试手工的解决，或者选择一种合并的方式继续更新。如果您手工修改消除了冲突，请再次运行文件检查。您也可以选择为每个文件自动首选合并。第一种会导致旧版本文件的冲突代码丢失，而后者会丢失新文件的改变。',
	'FILES_DELETED'					=> '删除的文件',
	'FILES_DELETED_EXPLAIN'			=> '下面的文件在新版里不存在，这些文件不得不在安装过程里删除。',
	'FILES_MODIFIED'				=> '修改的文件',
	'FILES_MODIFIED_EXPLAIN'		=> '下面的文件已经修改，不是旧版本的原始文件。更新文件将合并您修改过的文件。',
	'FILES_NEW'						=> '新文件',
	'FILES_NEW_EXPLAIN'				=> '以下的文件在旧版中不存在，将在安装过程中加入。',
	'FILES_NEW_CONFLICT'			=> '新文件冲突',
	'FILES_NEW_CONFLICT_EXPLAIN'	=> '下面的文件在新版本中第一次加入，但是在对应目录已经存在同名文件，这个文件将被新文件覆盖。',
	'FILES_NOT_MODIFIED'			=> '未修改的文件',
	'FILES_NOT_MODIFIED_EXPLAIN'	=> '下面的文件在老版本的phpBB文件有，在新版本中也没有修改。',
	'FILES_UP_TO_DATE'				=> '已经升级的文件',
	'FILES_UP_TO_DATE_EXPLAIN'		=> '以下的文件已经是最新的，不需要升级。',
	'FILES_VERSION'					=> '文件版本',
	'TOGGLE_DISPLAY'				=> '显示/关闭 文件列表',

	// File updater
	'UPDATE_UPDATING_FILES'	=> '升级文件',

	'UPDATE_FILE_UPDATER_HAS_FAILED'	=> '文件升级 “%1$s“ 失败。 安装程序将试着回退到 “%2$s“。',
	'UPDATE_FILE_UPDATERS_HAVE_FAILED'	=> '文件升级失败。没有回退方法可用。',

	'UPDATE_CONTINUE_UPDATE_PROCESS'	=> '继续升级',
	'UPDATE_RECHECK_UPDATE_FILES'		=> '再次检查文件',
));

// Update database
$lang = array_merge($lang, array(
	'STAGE_UPDATE_DATABASE'		=> '升级数据库',

	'INLINE_UPDATE_SUCCESSFUL'		=> '数据库升级成功。',
	
	'TASK_UPDATE_EXTENSIONS'	=> '升级扩展中',
));

// Converter
$lang = array_merge($lang, array(
	// Common converter messages
	'CONVERT_NOT_EXIST'			=> '指定的转换程序不存在.',
	'DEV_NO_TEST_FILE'			=> '在转换器中没有指定test_file变量的值。如果您是转换器的使用者，您不应该看到这个错误，请联络转换器的作者并报告这个错误。如果您是转换器的作者，您必须指定一个源论坛中存在的文件名称，使得路径校验能正常进行。',
	'COULD_NOT_FIND_PATH'		=> '无法找到您以前论坛的路径。 请检查您的设定并再试一次。<br />» 指定的路径是 %s',
	'CONFIG_PHPBB_EMPTY'		=> '缺少 phpBB3 的配置信息“%s”。',

	'MAKE_FOLDER_WRITABLE'		=> '请首先确保此文件夹存在并且可以被网络服务器写入，然后重试：<br />»<strong>%s</strong>。',
	'MAKE_FOLDERS_WRITABLE'		=> '请首先确保这些文件夹存在并且可以被网络服务器写入，然后重试：<br />»<strong>%s</strong>。',

	'INSTALL_TEST'				=> '重新检测',

	'NO_TABLES_FOUND'			=> '没有找到任何表格。',
	'TABLES_MISSING'			=> 'Could not find these tables<br />» <strong>%s</strong>.',
	'CHECK_TABLE_PREFIX'		=> '请检查您的表单前缀后重试。',

	// Conversion in progress
	'CONTINUE_CONVERT'			=> '继续转换',
	'CONTINUE_CONVERT_BODY'		=> '检测到曾经进行过转换，您可以选择进行重新转换还是继续上一次的转换。',
	'CONVERT_NEW_CONVERSION'	=> '重新转换',
	'CONTINUE_OLD_CONVERSION'	=> '继续进行之前的转换',

	// Start conversion
	'SUB_INTRO'					=> '简介',
	'CONVERT_INTRO'				=> '欢迎使用 phpBB 统一转换框架',
	'CONVERT_INTRO_BODY'		=> '这里您可以从其它（已安装）的论坛导入数据，下表列出的是所有可用的转换模块。如果其中没有您想要的转换模块，请访问我们的网站，那里可能会提供更多的转换模块下载。',
	'AVAILABLE_CONVERTORS'		=> '可用的转换程序',
	'NO_CONVERTORS'				=> '没有可用的转换程序。',
	'CONVERT_OPTIONS'			=> '选项',
	'SOFTWARE'					=> '论坛软件',
	'VERSION'					=> '转换',
	'CONVERT'					=> 'Convert',

	// Settings
	'STAGE_SETTINGS'			=> '设置',
	'TABLE_PREFIX_SAME'			=> '表格前缀是转换之前所使用的。<br />»  之前所使用的表格前缀是 %s',
	'DEFAULT_PREFIX_IS'			=> '根据提供的前缀，转换程序无法找到可用的表单。请确认您在输入的是数据库中原来论坛的表单。%1$s 默认的表单前缀是 <strong>%2$s</strong>。',
	'SPECIFY_OPTIONS'			=> '指定转换选项',
	'FORUM_PATH'				=> '论坛路径',
	'FORUM_PATH_EXPLAIN'		=> '这是在磁盘上对应于您<strong>现在的phpBB3根目录</strong>的原论坛 <strong>相对</strong> 路径。',
	'REFRESH_PAGE'				=> '刷新页面以继续转换',
	'REFRESH_PAGE_EXPLAIN'		=> '如果设置为“是”，转换程序将会在完成每一步之后刷新页面，然后继续。如果这是您为了测试目的而进行的第一次转换，我们建议您将此设置为“No”。',

	// Conversion
	'STAGE_IN_PROGRESS'			=> '转换进行中',

	'AUTHOR_NOTES'				=> '作者提示<br />» %s',
	'STARTING_CONVERT'			=> '开始转换操作',
	'CONFIG_CONVERT'			=> '正在转换配置内容',
	'DONE'						=> '完成',
	'PREPROCESS_STEP'			=> '正在执行转换前准备工作',
	'FILLING_TABLE'				=> '正在填充表格：<strong>%s</strong>',
	'FILLING_TABLES'			=> '正在填充表格',
	'DB_ERR_INSERT'				=> '执行 <code>INSERT</code> 语句时发生错误。',
	'DB_ERR_LAST'				=> '执行 <var>query_last</var> 时发生错误。',
	'DB_ERR_QUERY_FIRST'		=> '执行 <var>query_first</var> 时发生错误。',
	'DB_ERR_QUERY_FIRST_TABLE'	=> '执行 <var>query_first</var> 时发生错误：%s (“%s”)。',
	'DB_ERR_SELECT'				=> '执行 <code>SELECT</code> 语句时发生错误。',
	'STEP_PERCENT_COMPLETED'	=> '第 <strong>%d</strong> 步 / 共 <strong>%d</strong> 步',
	'FINAL_STEP'				=> '正在执行最后步骤',
	'SYNC_FORUMS'				=> '开始同步版面',
	'SYNC_POST_COUNT'			=> '正在同步帖子',
	'SYNC_POST_COUNT_ID'		=> '正在同步<var>序号</var>为 %1$s 到 %2$s 的帖子。',
	'SYNC_TOPICS'				=> '开始同步主题',
	'SYNC_TOPIC_ID'				=> '正在同步主题：<var>topic_id</var> %1$s 至 %2$s。',
	'PROCESS_LAST'				=> '正在执行最后的指令',
	'UPDATE_TOPICS_POSTED'		=> '正在生成主题发布信息',
	'UPDATE_TOPICS_POSTED_ERR'	=> '生成主题发布信息时发生错误。您可以在转换结束后到管理员控制面板中重试这个操作。',
	'CONTINUE_LAST'				=> '继续进行最后步骤',
	'CLEAN_VERIFY'				=> '正在清理并校验最终结构',
	'NOT_UNDERSTAND'			=> '无法理解 %s #%d，表格 %s (“%s”)。',
	'NAMING_CONFLICT'			=> '命名冲突：%s 与 %s 都是别名<br /><br />%s',

	// Finish conversion
	'CONVERT_COMPLETE'			=> '转换完成',
	'CONVERT_COMPLETE_EXPLAIN'	=> '您已经将您的论坛成功转换为 phpBB 3.2，您现在可以登录并<a href="../">访问您的论坛</a>。请在开启新论坛前确认参数都已经正确设置，并删除了install安装目录。别忘了phpBB 的在线使用帮助有<a href="https://www.phpbb.com/support/docs/en/3.2/ug/">文档</a>和<a href="https://www.phpbb.com/community/viewforum.php?f=466">支持论坛</a>。',

	'CONV_ERROR_ATTACH_FTP_DIR'			=> '原论坛允许附件使用FTP上载，请禁用FTP上载并确认设定了有效的上载目录，所有附件将被拷贝到这个新的 web 可访问的目录。这些完成后，请重新开始转换程序。',
	'CONV_ERROR_CONFIG_EMPTY'			=> '转换程序没有可用的配置信息。',
	'CONV_ERROR_FORUM_ACCESS'			=> '无法得到版面的访问信息。',
	'CONV_ERROR_GET_CATEGORIES'			=> '无法得到分区信息。',
	'CONV_ERROR_GET_CONFIG'				=> '无法获取您的版面设置信息。',
	'CONV_ERROR_COULD_NOT_READ'			=> '无法读取 “%s”。',
	'CONV_ERROR_GROUP_ACCESS'			=> '无法得到用户组权限信息。',
	'CONV_ERROR_INCONSISTENT_GROUPS'	=> '在add_bots()中检测到用户组表单中的矛盾数据 - 如果手工设置过您需要添加所有特殊用户组。',
	'CONV_ERROR_INSERT_BOT'				=> '无法在用户表中添加bot。',
	'CONV_ERROR_INSERT_BOTGROUP'		=> '无法在bots表中添加bot。',
	'CONV_ERROR_INSERT_USER_GROUP'		=> '无法在用户组表中添加用户。',
	'CONV_ERROR_MESSAGE_PARSER'			=> '内容解析错误',
	'CONV_ERROR_NO_AVATAR_PATH'			=> '开发者注意: 您必须指定 $convertor[\'avatar_path\'] 以使用 %s。',
	'CONV_ERROR_NO_FORUM_PATH'			=> '指向源论坛的相对路径未指定。',
	'CONV_ERROR_NO_GALLERY_PATH'		=> '开发者注意: 您必须指定 $convertor[\'avatar_gallery_path\'] 以使用 %s。',
	'CONV_ERROR_NO_GROUP'				=> '用户组 "%1$s" 在 %2$s 中无法找到。',
	'CONV_ERROR_NO_RANKS_PATH'			=> '开发者注意: 您必须指定 $convertor[\'ranks_path\'] 以使用 %s。',
	'CONV_ERROR_NO_SMILIES_PATH'		=> '开发者注意: 您必须指定 $convertor[\'smilies_path\'] 以使用 %s。',
	'CONV_ERROR_NO_UPLOAD_DIR'			=> '开发者注意: 您必须指定 $convertor[\'upload_path\'] 以使用 %s。',
	'CONV_ERROR_PERM_SETTING'			=> '无法添加/更改权限设置。',
	'CONV_ERROR_PM_COUNT'				=> '无法选择文件夹短信数量。',
	'CONV_ERROR_REPLACE_CATEGORY'		=> '无法用新版面替换旧分区。',
	'CONV_ERROR_REPLACE_FORUM'			=> '无法在新版面替换旧版面。',
	'CONV_ERROR_USER_ACCESS'			=> '无法得到用户权限信息。',
	'CONV_ERROR_WRONG_GROUP'			=> '错误的用户组 "%1$s" 定义在 %2$s。',
	'CONV_OPTIONS_BODY'					=> '这个页面用于收集访问原论坛所需要的数据。输入原论坛数据库参数，转换程序不会对原数据库作任何更改。原论坛必须暂时停用以确保转换过程中的数据一致性。',
	'CONV_SAVED_MESSAGES'				=> '保存信息',

	'PRE_CONVERT_COMPLETE'			=> '全部的转换准备步骤都已成功完成，您现在可以开始进行实际的转换操作。请注意您可能需要手工修改一些东西。转换完成后，请特别检查一下赋予的权限，重建搜索索引，并确认文件都正确复制好了，比如头像文件和表情符号。',
));
