<?php
/** 
*
* search [Chinese Simplified]
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
	'ALL_AVAILABLE'			=> '所有可用',
	'ALL_RESULTS'			=> '全部时间',

	'DISPLAY_RESULTS'		=> '显示结果为',

	'FOUND_SEARCH_MATCH'		=> '搜索得到 %d 个符合结果',
	'FOUND_SEARCH_MATCHES'		=> '搜索得到 %d 个符合结果',
	'FOUND_MORE_SEARCH_MATCHES'	=> '搜索得到超过 %d 个符合结果',

	'GLOBAL'				=> '全局公告',

	'IGNORED_TERMS'			=> '忽略',
	'IGNORED_TERMS_EXPLAIN'	=> '您输入的以下字词将由于过于常见而被忽略：<strong>%s</strong>',

	'JUMP_TO_POST'			=> '跳到帖子',
	
	'LOGIN_EXPLAIN_EGOSEARCH'	=> '您需要登录后才能查看您的文章.',
	'LOGIN_EXPLAIN_UNREADSEARCH'=> '您需要登录后才能查看未读文章.',
	'LOGIN_EXPLAIN_NEWPOSTS'	=> '您需要注册并登陆后才能查看自从您上次访问后的新帖子。',

	'MAX_NUM_SEARCH_KEYWORDS_REFINE'   => '您输入了过多的搜索关键词. 允许的最多搜索词为 %1$d 个.',

	'NO_KEYWORDS'			=> '您必须指定至少一个关键词，且每个关键词必须为 %d 到 %d 个字符（包含通配符）。',
	'NO_RECENT_SEARCHES'	=> '没有找到最近的搜索操作',
	'NO_SEARCH'				=> '对不起您不能使用搜索系统。',
	'NO_SEARCH_RESULTS'		=> '没有搜索到符合的结果。',
	'NO_SEARCH_TIME'		=> '对不起您暂时不能使用搜索功能，请过几分钟后再试。',
	'NO_SEARCH_UNREADS'      => '对不起论坛禁止了对未读文章的搜索.',
	'WORD_IN_NO_POST'		=> '没有搜索到任何结果，因为 <strong>%s</strong> 不在任何文章内。',
	'WORDS_IN_NO_POST'		=> '没有搜索到任何结果，因为 <strong>%s</strong> 不在任何文章内。',

	'POST_CHARACTERS'		=> '个字符',

	'RECENT_SEARCHES'		=> '最近的搜索',
	'RESULT_DAYS'			=> '将搜索结果限制到最近的',
	'RESULT_SORT'			=> '将搜索结果按此排序',
	'RETURN_FIRST'			=> '将搜索结果限制为每贴',
	'RETURN_TO_SEARCH_ADV'	=> '返回高级搜索',

	'SEARCHED_FOR'				=> '使用的搜索条件',
	'SEARCHED_TOPIC'			=> '查找的主题',
	'SEARCHED_QUERY'			=> '搜索的查询',
	'SEARCH_ALL_TERMS'			=> '满足全部条件或使用输入的搜索串',
	'SEARCH_ANY_TERMS'			=> '满足任意条件',
	'SEARCH_AUTHOR'				=> '按作者搜索',
	'SEARCH_AUTHOR_EXPLAIN'		=> '使用 * 作为通配符。',
	'SEARCH_FIRST_POST'			=> '只检查主题的第一篇帖子',
	'SEARCH_FORUMS'				=> '搜索版面',
	'SEARCH_FORUMS_EXPLAIN'		=> '选择您想搜索的版面。如果您没有关闭“搜索子版面”选项，选中版面的子版面也会被一并搜索。',
	'SEARCH_IN_RESULTS'			=> '搜索这些结果',
	'SEARCH_KEYWORDS_EXPLAIN'	=> '在必须存在的搜索词前放置 <strong>+</strong> 号，在必须不存在的搜索词前面放置 <strong>-</strong> 号。如果一系列搜索词中只需要出现一个，在括号中间放置搜索词列表，词与词间用 <strong>|</strong> 隔开。使用 * 作为通配符。',
	'SEARCH_MSG_ONLY'			=> '只搜索文章内容',
	'SEARCH_OPTIONS'			=> '搜索选项',
	'SEARCH_QUERY'				=> '搜索文章',
	'SEARCH_SUBFORUMS'			=> '搜索子版面',
	'SEARCH_TITLE_MSG'			=> '搜索文章标题和内容',
	'SEARCH_TITLE_ONLY'			=> '只搜索文章标题',
	'SEARCH_WITHIN'				=> '搜索范围',
	'SORT_ASCENDING'			=> '升序',
	'SORT_AUTHOR'				=> '作者',
	'SORT_DESCENDING'			=> '降序',
	'SORT_FORUM'				=> '版面',
	'SORT_POST_SUBJECT'			=> '文章标题',
	'SORT_TIME'					=> '发表时间',

	'TOO_FEW_AUTHOR_CHARS'	=> '您必须提供至少 %d 个字符来匹配作者名字。',
));

?>