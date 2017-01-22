<?php
/**
*
* acp_search [Chinese Simplified]
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
	'ACP_SEARCH_INDEX_EXPLAIN'				=> '这里您可以管理内容索引. 因为一般只使用一个后台, 您可以删除所有不用的索引. 在改变搜索设置(例如最小/最大字符串长度)后, 建议重新生成索引以体现修改.',
	'ACP_SEARCH_SETTINGS_EXPLAIN'			=> '这里您可以设置如何使用搜索和检索帖子. 您可以设置选项限制搜索动作的处理器负载. 一部分设定和和搜索引擎的设定是一样的.',

	'COMMON_WORD_THRESHOLD'					=> '词频阈值',
	'COMMON_WORD_THRESHOLD_EXPLAIN'			=> '在所有的帖子中都频繁出现的单词将被识别为高频词. 高频词在搜索中将被忽略. 设置0则取消这项功能. 只有当帖子数大于100时这个设置才能生效. 调整过词频阈值后需要重新建立索引',
	'CONFIRM_SEARCH_BACKEND'				=> '您确认更换搜索后端吗? 更换后您需要重新创建索引. 如果您不打算再切换回旧的后端, 您可以删除原先的索引以释放空间.',
	'CONTINUE_DELETING_INDEX'				=> '继续前次的索引删除',
	'CONTINUE_DELETING_INDEX_EXPLAIN'		=> '存在一个已经开始的索引删除. 要访问索引页面您必须先完成它.',
	'CONTINUE_INDEXING'						=> '继续前次的索引生成',
	'CONTINUE_INDEXING_EXPLAIN'				=> '存在一个已经开始的索引生成. 要访问索引页面您必须先完成它.',
	'CREATE_INDEX'							=> '创建索引',

	'DELETE_INDEX'							=> '删除索引',
	'DELETING_INDEX_IN_PROGRESS'			=> '删除索引进行中',
	'DELETING_INDEX_IN_PROGRESS_EXPLAIN'	=> '搜索后端正在清除索引, 这需要几分钟的时间.',

	'FULLTEXT_MYSQL_INCOMPATIBLE_VERSION'	=> 'MySQL全文检索后端只能在MySQL4或更高的版本中使用.',
	'FULLTEXT_MYSQL_NOT_SUPPORTED'				=> 'MySQL全文索引只能用于MyISAM或InnoDB表. 需要MySQL 5.6.4 或更新版本来在InnoDB表中全文索引.',
	'FULLTEXT_MYSQL_TOTAL_POSTS'			=> '索引帖子总数',
	'FULLTEXT_MYSQL_MBSTRING'				=> '支持非拉丁 UTF-8 字符使用mbstring:',
	'FULLTEXT_MYSQL_PCRE'					=> '支持非拉丁 UTF-8 字符使用 PCRE:',
	'FULLTEXT_MYSQL_MBSTRING_EXPLAIN'		=> '如果PCRE没有unicode字符属性, 搜索后端会尝试使用mbstring的正则表达式机制.',
	'FULLTEXT_MYSQL_PCRE_EXPLAIN'			=> '这个搜索后端需要使用PCRE unicode字符属性, 这只在PHP 版本 4.4, 5.1 或更高中可用, 如果您需要搜索非拉丁字符.',
	'FULLTEXT_MYSQL_MIN_SEARCH_CHARS_EXPLAIN'   => '至少需要达到这个长度的词才会被检索. 您必须更改mysql的设定才能修改此值.',
	'FULLTEXT_MYSQL_MAX_SEARCH_CHARS_EXPLAIN'   => '不超过这个长度的词才会被检索. 您必须更改mysql的设定才能修改此值.',

	'GENERAL_SEARCH_SETTINGS'				=> '综合搜索设定',
	'GO_TO_SEARCH_INDEX'					=> '前往索引页面',

	'INDEX_STATS'							=> '索引统计',
	'INDEXING_IN_PROGRESS'					=> '索引进行中',
	'INDEXING_IN_PROGRESS_EXPLAIN'			=> '搜索后端正在检索论坛的所有帖子. 取决于论坛数据量的大小, 这可能需要几分钟的时间.',

	'LIMIT_SEARCH_LOAD'						=> '搜索页面系统负载限制',
	'LIMIT_SEARCH_LOAD_EXPLAIN'				=> '如果一分钟内系统负载超过这个值, 搜索页面将不可用, 1.0 约等于100% 的处理器负载. 这个功能只在基于UNIX/Linux系统的服务器上有效.',

	'MAX_SEARCH_CHARS'						=> '索引的最大字符长度',
	'MAX_SEARCH_CHARS_EXPLAIN'				=> '大于这个长度的短语将不会被检索.',
	'MAX_NUM_SEARCH_KEYWORDS'            => '搜索关键词的数目上限',
    'MAX_NUM_SEARCH_KEYWORDS_EXPLAIN'      => '用于限制用户用于搜索的关键词的个数. 填写0则不作限制.',
	'MIN_SEARCH_CHARS'						=> '索引的最小字符长度',
	'MIN_SEARCH_CHARS_EXPLAIN'				=> '小于这个长度的短语将不会被检索.',
	'MIN_SEARCH_AUTHOR_CHARS'				=> '最小用户名长度',
	'MIN_SEARCH_AUTHOR_CHARS_EXPLAIN'		=> '用户在搜索作者姓名时必须输入的字符串长度. 如果作者用户名长度小于这个数字, 您仍然可以输入完整用户名搜索用户的帖子.',

	'PROGRESS_BAR'							=> '进度条',

	'SEARCH_GUEST_INTERVAL'					=> '游客搜索间隔',
	'SEARCH_GUEST_INTERVAL_EXPLAIN'			=> '在多次搜索中游客必须等待的间隔时间(秒).',
	'SEARCH_INDEX_CREATE_REDIRECT'			=> '所有id不高于 %1$d 的帖子都已经建立索引, 这一操作中处理了 %2$d 个帖子.<br />速度接近 %3$.1f 帖子每秒.<br />索引正在进行中…',
	'SEARCH_INDEX_DELETE_REDIRECT'			=> '所有id不高于 %1$d 的帖子都已经从搜索索引中删除.<br />删除正在进行中…',
	'SEARCH_INDEX_CREATED'					=> '已经对数据库中的所有帖子建立了索引.',
	'SEARCH_INDEX_REMOVED'					=> '成功清除了这个后端的索引数据.',
	'SEARCH_INTERVAL'						=> '用户搜索间隔',
	'SEARCH_INTERVAL_EXPLAIN'				=> '用户搜索的最短间隔时间(秒).',
	'SEARCH_STORE_RESULTS'					=> '搜索结果缓存时间',
	'SEARCH_STORE_RESULTS_EXPLAIN'			=> '缓存的结果在这个时间(秒)后将失效. 设置为0则禁用缓存.',
	'SEARCH_TYPE'							=> '搜索后端',
	'SEARCH_TYPE_EXPLAIN'					=> 'phpBB允许您选择用于全文检索的后端类型. 默认后端是phpBB自带的全文检索.',
	'SWITCHED_SEARCH_BACKEND'				=> '您已经更换了检索后端. 要使用新的后端, 您必须确认新的后端包含建好的索引.',

	'TOTAL_WORDS'							=> '已检索关键词总数',
	'TOTAL_MATCHES'							=> '与帖子索引关联的关键词总数',

	'YES_SEARCH'							=> '启用检索功能',
	'YES_SEARCH_EXPLAIN'					=> '允许用户使用搜索功能, 包括用户搜索.',
	'YES_SEARCH_UPDATE'						=> '启用全文更新',
	'YES_SEARCH_UPDATE_EXPLAIN'				=> '当文章发表时更新全文索引, 如果禁用检索这个功能将停用.',
));

?>