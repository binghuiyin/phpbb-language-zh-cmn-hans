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

$lang = array_merge($lang, array(
	'HELP_FAQ_ATTACHMENTS_ALLOWED_ANSWER'	=> '各个论坛的管理员可以允许或禁止某种附件类型。如果您不确定哪些可以被上载，请联络论坛管理员得到帮助。',
	'HELP_FAQ_ATTACHMENTS_ALLOWED_QUESTION'	=> '这个论坛允许什么样的附件？',
	'HELP_FAQ_ATTACHMENTS_OWN_ANSWER'	=> '如果您想查看您上传附件的列表，打开用户控制面板，点击附件页面链接即可看到。',
	'HELP_FAQ_ATTACHMENTS_OWN_QUESTION'	=> '我怎样才能找到所有我发布的附件？',

	'HELP_FAQ_BLOCK_ATTACHMENTS'	=> '附件',
	'HELP_FAQ_BLOCK_BOOKMARKS'	=> '主题订阅和收藏',
	'HELP_FAQ_BLOCK_FORMATTING'	=> '格式和主题类型',
	'HELP_FAQ_BLOCK_FRIENDS'	=> '好友和损友列表',
	'HELP_FAQ_BLOCK_GROUPS'	=> '用户等级和用户组',
	'HELP_FAQ_BLOCK_ISSUES'	=> 'phpBB Issues',
	'HELP_FAQ_BLOCK_LOGIN'	=> '登录和注册问题',
	'HELP_FAQ_BLOCK_PMS'	=> '私人讯息',
	'HELP_FAQ_BLOCK_POSTING'	=> '发帖问题',
	'HELP_FAQ_BLOCK_SEARCH'	=> '搜索版面',
	'HELP_FAQ_BLOCK_USERSETTINGS'	=> '用户参数和设置',

	'HELP_FAQ_BOOKMARKS_DIFFERENCE_ANSWER'	=> '在 phpBB 3.0 内，收藏主题类似于在浏览器里的书签，当有更新的时候，您不会收到提示。 而在 phpBB 3.1 里面，收藏更像订阅了一个主题，当您收藏的主题有更新的时候，您会收到通知。订阅，当主题或者版面有更新的时候，会通知您。 收藏和订阅的通知选项可以在用户控制面板里找到。',
	'HELP_FAQ_BOOKMARKS_DIFFERENCE_QUESTION'	=> '收藏和订阅有什么区别？',
	'HELP_FAQ_BOOKMARKS_FORUM_ANSWER'	=> '订阅特定板块，点击“订阅板块”链接，在页面底部。',
	'HELP_FAQ_BOOKMARKS_FORUM_QUESTION'	=> '我怎么订阅特定的板块？',
	'HELP_FAQ_BOOKMARKS_REMOVE_ANSWER'	=> '取消订阅，您只需要打开用户管理面板，点击订阅链接后进行退订操作。',
	'HELP_FAQ_BOOKMARKS_REMOVE_QUESTION'	=> '我怎样才能取消订阅？',
	'HELP_FAQ_BOOKMARKS_TOPIC_ANSWER'	=> '订阅或者收藏特定的主题，您可以在该主题的顶部或底部的“主题工具”栏里。<br />在回复时勾选订阅选项同样可以订阅主题。',
	'HELP_FAQ_BOOKMARKS_TOPIC_QUESTION'	=> '我该如何收藏或订阅主题？',

	'HELP_FAQ_FORMATTING_ANNOUNCEMENT_ANSWER'	=> '公告一般包含当前版面的重要信息，对于浏览这个版面的用户需要及时阅读。公告在版面的每一页的顶端显示。和全站公告一样，您是否可以发表公告取决于管理员是否给予您足够的权限。',
	'HELP_FAQ_FORMATTING_ANNOUNCEMENT_QUESTION'	=> '什么是公告？',
	'HELP_FAQ_FORMATTING_BBOCDE_ANSWER'	=> 'BBCode是一种特殊的HTML实现方式，能否使用BBCode由管理员决定 (您也可以在发表帖子的过程中禁用它)。BBCode本身和HTML风格相似，每个标签用方括号 [ 和 ] 而不是 &lt; 和 &gt; 并且这种方式提供更多的显示控制。要得到更多的信息请查看发帖页面中的BBCode帮助。',
	'HELP_FAQ_FORMATTING_BBOCDE_QUESTION'	=> '什么是BBCode？',
	'HELP_FAQ_FORMATTING_GLOBAL_ANNOUNCE_ANSWER'	=> '全站公告包含重要的信息，您应该及时阅读这些公告。全站公告显示在每个版面的顶端和您的用户控制面板。发表全站公告的权限由管理员决定。',
	'HELP_FAQ_FORMATTING_GLOBAL_ANNOUNCE_QUESTION'	=> '什么是全站公告？',
	'HELP_FAQ_FORMATTING_HTML_ANSWER'	=> '不可以。在这个论坛上不允许使用HTML发表帖子。大多数使用HTML生成的格式效果可以通过BBCode实现。',
	'HELP_FAQ_FORMATTING_HTML_QUESTION'	=> '我可以使用HTML吗？',
	'HELP_FAQ_FORMATTING_ICONS_ANSWER'	=> '主题图标由作者选择的，是和主题内容相关的一种小图片。是否可以使用主题图标取决于管理员的设置。',
	'HELP_FAQ_FORMATTING_ICONS_QUESTION'	=> '什么是主题图标？',
	'HELP_FAQ_FORMATTING_IMAGES_ANSWER'	=> '是的，在帖子中可以显示图片。如果管理员允许使用附件，您可以上传图片到论坛上。否则您必须在网上的公开访问服务器存储您的图片，e.g. http://www.example.com/my-picture.gif。而不能直接链接图片到您的本地电脑 (除非您的电脑是一个公众可以访问的服务器)，也不能链接图片到需要访问权限的地址，例如您的hotmail或者雅虎邮箱。要显示链接的图片，请使用BBCode [img] 标签。',
	'HELP_FAQ_FORMATTING_IMAGES_QUESTION'	=> '我可以发表图片吗？',
	'HELP_FAQ_FORMATTING_LOCKED_ANSWER'	=> '锁定的主题将不能回复，任何的投票也都结束。主题的锁定可能有很多原因，如果您不清楚锁定的原因请询问论坛版主或管理员。如果有权限的话，您也可以锁定自己的主题。',
	'HELP_FAQ_FORMATTING_LOCKED_QUESTION'	=> '什么是锁定的主题？',
	'HELP_FAQ_FORMATTING_SMILIES_ANSWER'	=> '表情图标，或者笑脸图标是用于表达表情的一种小图片，用一小段代码，例如 :) 表示快乐，:( 表示不高兴。表情的完整列表可以在发表帖子的界面中看到。请不要在帖子中滥用表情图标，这会让帖子无法阅读。版主或管理员可能会因此修改或删除您的帖子。论坛管理员也可能设置表情图标在帖子中的个数限制。',
	'HELP_FAQ_FORMATTING_SMILIES_QUESTION'	=> '什么是表情图标？',
	'HELP_FAQ_FORMATTING_STICKIES_ANSWER'	=> '置顶主题显示在每个版面的第一页顶端仅次于公告的位置。这些主题一般比较重要，所以您尽可能及时的阅读这些帖子。和公告一样，是否可以发表置顶主题取决于您是否有被管理员授予足够的权限。',
	'HELP_FAQ_FORMATTING_STICKIES_QUESTION'	=> '什么是置顶主题？',

	'HELP_FAQ_FRIENDS_BASIC_ANSWER'	=> '您可以使用这些列表来组织论坛中的其他用户。您的好友会在您的用户控制面板中列出，方便您快速查看在线状态和发送站内短信。另外在模板的支持下，您的好友所发表的文章也会以高亮显示。如果您将某个用户添加进了损友列表，他的帖子将自动对您隐藏。',
	'HELP_FAQ_FRIENDS_BASIC_QUESTION'	=> '什么是我的好友列表和损友列表？',
	'HELP_FAQ_FRIENDS_MANAGE_ANSWER'	=> '您可以通过两种方式添加用户到您的列表。通过浏览用户资料，那里有链接可以点击添加。另外，在您的用户控制面板，您可以可以直接输入用户名来添加。您还可以通过同样的页面删除列表中的用户条目。',
	'HELP_FAQ_FRIENDS_MANAGE_QUESTION'	=> '我该如何于好友或损友列表中添加 / 删除用户？',

	'HELP_FAQ_GROUPS_ADMINISTRATORS_ANSWER'	=> '管理员是整个论坛中拥有最高权限的用户。管理员用户可以从各个方面控制论坛，这些方面包括设置权限，封禁用户，创建用户组或版主，等等。取决于论坛创建者赋予的权限，他们还可以拥有所有版面的版主权限。',
	'HELP_FAQ_GROUPS_ADMINISTRATORS_QUESTION'	=> '什么是管理员？',
	'HELP_FAQ_GROUPS_COLORS_ANSWER'	=> '论坛管理员可以为不同用户组的成员设置不同的颜色。这样方便区分版面上的用户所处的用户组。',
	'HELP_FAQ_GROUPS_COLORS_QUESTION'	=> '为什么某些用户组能显示出不同的颜色？',
	'HELP_FAQ_GROUPS_DEFAULT_ANSWER'	=> '如果您属于多个用户组，您可以设置默认组来显示自己的用户组颜色和用户组级别。论坛管理员可以赋予您在用户控制面板中更改默认用户组的权限。',
	'HELP_FAQ_GROUPS_DEFAULT_QUESTION'	=> '什么是 “默认用户组”？',
	'HELP_FAQ_GROUPS_MODERATORS_ANSWER'	=> '版主是独立的用户或用户组，他们的工作是维护每个版面的日常运作。他们拥有所辖版面内部的编辑/删除/锁定/解锁/移动/分割主题和投票的权力。一般版主会阻止用户发表 <em>跑题文章</em> 或者垃圾文章。',
	'HELP_FAQ_GROUPS_MODERATORS_QUESTION'	=> '什么是版主？',
	'HELP_FAQ_GROUPS_TEAM_ANSWER'	=> '这个页面显示论坛的管理团队人员列表，包含论坛管理员，版主和其所在的版面信息。',
	'HELP_FAQ_GROUPS_TEAM_QUESTION'	=> '什么是 “论坛团队” 链接？',
	'HELP_FAQ_GROUPS_USERGROUPS_ANSWER'	=> '用户组是论坛用于管理用户的一种方式。每个用户可以属于多个用户组 (这与其他的论坛软件不太一样) 并且每个用户组可以设置独立的访问权限。这使得管理员可以很方便的同时管理多个用户，例如版主的权限，使其可以访问私人版面等等。',
	'HELP_FAQ_GROUPS_USERGROUPS_QUESTION'	=> '什么是用户组？',
	'HELP_FAQ_GROUPS_USERGROUPS_JOIN_ANSWER'	=> '要加入一个用户组请点击用户控制面板中的用户组链接，这样您可以看到所有的用户组。并不是所有的用户组都是 <em>开放</em> 的，一些需要申请，一些是关闭的，而另一些甚至是隐藏的。如果是开放的用户组您可以直接点击加入。如果是需要申请的用户组，您需要先申请加入，而后等待用户组领导者批准后才能成为用户组的成员，这个过程中他们可能会询问您加入的原因。如果申请没有被批准，请不要纠缠用户组领导者，他们会告诉您没有批准的原因。',
	'HELP_FAQ_GROUPS_USERGROUPS_JOIN_QUESTION'	=> '组在哪里和我该如何加入一个用户组？',
	'HELP_FAQ_GROUPS_USERGROUPS_LEAD_ANSWER'	=> '当用户组被论坛管理员建立并初始化时，同时会设置一个用户组领导。如果您有兴趣新建一个用户组，请首先站内短信联络论坛管理员。',
	'HELP_FAQ_GROUPS_USERGROUPS_LEAD_QUESTION'	=> '我该如何成为一个用户组的领导者？',


	'HELP_FAQ_ISSUES_ADMIN_ANSWER'	=> '所有论坛用户可使用“联系我们”表单，如果该选项被论坛管理员启用的话。<br />论坛会员也可以使用“团队”链接。',
	'HELP_FAQ_ISSUES_ADMIN_QUESTION'	=> '我怎么联系论坛管理员？',
	'HELP_FAQ_ISSUES_FEATURE_ANSWER'	=> '本软件由 phpBB Limited 编写和授权，如果您认为某个功能需要被添加，请访问 <a href="https://www.phpbb.com/ideas/">phpBB Ideas Centre</a>，在这里您可以投票或建议新功能。',
	'HELP_FAQ_ISSUES_FEATURE_QUESTION'	=> '为什么没有 某某 功能？',
	'HELP_FAQ_ISSUES_LEGAL_ANSWER'	=> '您应该联络这个论坛的管理员。如果您无法知道该联络谁，您应该首先联络论坛的版主询问您需要联络的名单。如果依然没有回复您应该联络这个域名的所有者 (使用 <a href="http://www.google.com/search?q=whois">whois lookup</a>) 或者，如果这个论坛运行于一个免费的服务器 (例如 yahoo，free.fr，f2s.com，等等.)，联络管理者或者服务商的违规管理部门。请注意 phpBB Limited 决没有控制并且无论如何没有相关的责任和义务来管理使用这个论坛的用户行为。对 phpBB 开发组发布任何与phpbb.com网站没有直接关系的法律声明 (服务中断，连带责任，诽谤，等等.) 都是没有任何意义的。如果您给 phpBB 开发组发送任何关于第三方使用此软件的信件，都有可能得到简短的声明或不予回复。',
	'HELP_FAQ_ISSUES_LEGAL_QUESTION'	=> '对于论坛上诽谤，脏话和其他触及法律的事务，我该联络谁？',
	'HELP_FAQ_ISSUES_WHOIS_PHPBB_ANSWER'	=> '这份软件(官方发行的版本)由 <a href="https://www.phpbb.com/">phpBB Limited</a> 制作，发布并持有版权。遵循 GNU General Public License, version 2 (GPL-2.0) 开源协议，可以自由发布，查看链接 <a href="https://www.phpbb.com/about/">About phpBB</a> 以得到更多信息。',
	'HELP_FAQ_ISSUES_WHOIS_PHPBB_QUESTION'	=> '这个论坛程序是谁写的？',

	'HELP_FAQ_LOGIN_AUTO_LOGOUT_ANSWER'	=> '如果您没有勾上 <em>自动登录</em> 选项，您登录论坛后只能在一定时间内保持登录状态。这样能在一定程度上防止您的帐号被他人利用。如果需要保持登录状态请在登录时勾选<em>自动登录</em>框，在公用的计算机上访问论坛时不推荐您这样做，例如在图书馆，网吧，大学计算机实验室等。如果您没有看到自动登录框，那可能是管理员已经禁止了这项功能。',
	'HELP_FAQ_LOGIN_AUTO_LOGOUT_QUESTION'	=> '为什么我登录后会自动退出？',
	'HELP_FAQ_LOGIN_CANNOT_LOGIN_ANSWER'	=> '这种情况有好几种原因。首先，确认您的用户名和密码是否正确。如果是，请联络论坛的管理员确认是否禁用了您的帐号。也有可能是网站的管理员在后台进行了错误的设置，请联络他们修改错误。',
	'HELP_FAQ_LOGIN_CANNOT_LOGIN_QUESTION'	=> '为什么我不能登录？',
	'HELP_FAQ_LOGIN_CANNOT_LOGIN_ANYMORE_ANSWER'	=> '可能是管理员出于某种原因冻结或删除了您的账号。也可能是为了减少数据库大小许多论坛会定期删除一些很久未发帖的用户。如果是这样，请重新注册并且多多参与讨论。',
	'HELP_FAQ_LOGIN_CANNOT_LOGIN_ANYMORE_QUESTION'	=> '我注册过帐号但是现在却无法登录了？！',
	'HELP_FAQ_LOGIN_CANNOT_REGISTER_ANSWER'	=> '这可能是因为网站管理者封禁了您所在的IP地址或禁止了您试图注册的用户名。也可能是因为网站管理者禁止了新用户注册。需要更多的信息请联络论坛管理员。',
	'HELP_FAQ_LOGIN_CANNOT_REGISTER_QUESTION'	=> '为什么我不能注册？',
	'HELP_FAQ_LOGIN_COPPA_ANSWER'	=> 'COPPA，是儿童在线隐私和保护条例的缩写，生效于1998年的美国法律。这项法律要求任何有可能收集年龄小于13周岁的未成年人信息的网站必须持有其监护人的同意书，或者其他形式的合法依据才能收集其身份信息。如果您不能确认此法律是否对您的行为有约束，请联络就近的律师以得到帮助。请注意phpBB Limited 并不会提供任何法律建议，也不为各种法律事件提供观点和帮助，除非以下列出的情形：“对于论坛上诽谤，脏话和其他触及法律的事务，我该联络谁？”	',
	'HELP_FAQ_LOGIN_COPPA_QUESTION'	=> '什么是 COPPA？',
	'HELP_FAQ_LOGIN_DELETE_COOKIES_ANSWER'	=> '“删除所有phpBB在您的电脑上留下的cookies。这些cookie包含您在论坛上的认证信息和您在论坛上的阅读记录等信息。如果您有登录的问题，删除所有的cookies也许可以帮到您。',
	'HELP_FAQ_LOGIN_DELETE_COOKIES_QUESTION'	=> '“清除论坛 cookie” 是什么意思？',
	'HELP_FAQ_LOGIN_LOST_PASSWORD_ANSWER'	=> '不用紧张! 您的密码虽然无法找回，但是可以重设。您到登录页面点击 <em>我忘了自己的密码</em>，按提示的步骤您就可以很快取回您的帐号。',
	'HELP_FAQ_LOGIN_LOST_PASSWORD_QUESTION'	=> '我忘了自己的密码!',
	'HELP_FAQ_LOGIN_REGISTER_ANSWER'	=> '您也许不必注册，这取决于论坛管理员设置是否需要您注册后才能发表帖子。但是注册将给您更多的权限来使用额外的论坛功能例如自定义头像，站内短信，给好友发送email和加入用户组，等等。只需要一点点时间就能完成注册，所以建议您注册一个帐号吧。',
	'HELP_FAQ_LOGIN_REGISTER_QUESTION'	=> '为什么我需要注册？',
	'HELP_FAQ_LOGIN_REGISTER_CONFIRM_ANSWER'	=> '首先确认您输入了正确的用户名和密码。如果都没错，可能会有两个原因。如果论坛支持 COPPA 并且您在注册时点击了 <em>我小于13岁</em> 链接那您必须先按照您收到的提示完成规定的步骤。如果不是这个原因，是否会是因为您的帐号未被激活？ 一些论坛需要新用户在登录前由自己或由管理员激活。当您注册时论坛将告诉您是否需要激活。如果您收到了email就按照其中的步骤完成激活，如果您没有收到email，您需要检查一下您的email地址是否有效。使用激活的原因之一是防止 <em>恶意</em> 用户滥用论坛。如果您确信email地址没错请联络论坛管理员。',
	'HELP_FAQ_LOGIN_REGISTER_CONFIRM_QUESTION'	=> '我注册了但是无法登录!',


	'HELP_FAQ_PMS_CANNOT_SEND_ANSWER'	=> '三个可能的原因: 您还未注册或还未登录，论坛管理员禁止了站内短信，或者论坛管理员取消了您的站内短信权限。如果属于最后一种情况，请联络管理员询问其原因。',
	'HELP_FAQ_PMS_CANNOT_SEND_QUESTION'	=> '我不能发送私人短信!',
	'HELP_FAQ_PMS_SPAM_ANSWER'	=> '我们对这种情况非常抱歉。这个论坛的email系统带有用户发送跟踪系统，您应该给论坛管理员发送email，随信附上您所收到的完整email说明您遭遇到的情况。完整的email非常重要，因为其中包含了email头信息 (发送email的用户的细节)。他们会受到相应的处罚。',
	'HELP_FAQ_PMS_SPAM_QUESTION'	=> '我收到了这个论坛里的成员发给我的垃圾email或者冒犯我的email!',
	'HELP_FAQ_PMS_UNWANTED_ANSWER'	=> '您可以在用户控制面板中通过设定站内短信接收规则来拒绝来自某个用户的短信。如果您收到类似的短信请向管理员投诉，他们有权力禁止这些用户发送站内短信。',
	'HELP_FAQ_PMS_UNWANTED_QUESTION'	=> '我怎么总是收到骚扰短信!',

	'HELP_FAQ_POSTING_BUMP_ANSWER'	=> '点击 “顶起主题” 链接。您可以 “顶起” 主题使其成为版面的第一篇文章。但是如果您看不到这个情况，说明这个功能已经被禁用了或者顶起的时间太短。也可以简单的通过回复主题来顶起它。但是请注意遵守您所访问的版面的规定。',
	'HELP_FAQ_POSTING_BUMP_QUESTION'	=> '我该如何顶起自己的主题？',
	'HELP_FAQ_POSTING_CREATE_ANSWER'	=> '在版面上发表新主题，请点击相应的按钮。要回复一个主题，点击回复按钮。您可能需要注册之后才能发表文章，您所拥有的权限列表显示在版面和文章页面的下方 (比如 <em>您可以发表新主题，您可以参与投票，等等.</em> 这样的列表)。',
	'HELP_FAQ_POSTING_CREATE_QUESTION'	=> '我该如何在版面上发表话题或者回复？',
	'HELP_FAQ_POSTING_DRAFT_ANSWER'	=> '这允许您保存一个未完成帖子以备以后发表。重新装载帖子的功能请到用户控制面板查找。',
	'HELP_FAQ_POSTING_DRAFT_QUESTION'	=> '在发表主题的时候显示的 “保存” 按钮是做什么用的？',
	'HELP_FAQ_POSTING_EDIT_DELETE_ANSWER'	=> '除非您是管理员或版主，您只能编辑或删除您自己的帖子。您可以点击 <em>编辑</em> 按钮编辑一个帖子 (有时必须在发表后的一段时间内) 。如果有人已经回复过这篇帖子，您的修改会在帖子中留下一段修改的痕迹显示在帖子的下方，这将列出您修改的次数和时间。在没有回复的情况下不会显示，在管理员和版主修改的情况下也可能不会显示，除非他们决定留下一段记录说明他们编辑帖子的原因。请注意普通用户发表的帖子，在已经有回复的情况下不能被发帖者删除。',
	'HELP_FAQ_POSTING_EDIT_DELETE_QUESTION'	=> '我该如何编辑或删除一个帖子？',
	'HELP_FAQ_POSTING_FORUM_RESTRICTED_ANSWER'	=> '一些版面是限制访问的。要查看，阅读，发表等等您需要一定的权限。只有版主和论坛管理员才能授予这些权限，您如果有这方面的问题，请联络他们。',
	'HELP_FAQ_POSTING_FORUM_RESTRICTED_QUESTION'	=> '为什么我不能访问这个版面？',
	'HELP_FAQ_POSTING_NO_ATTACHMENTS_ANSWER'	=> '发表附件的功能，可以通过版面/用户/用户组来设置。论坛管理员可能不允许在某些版面粘贴附件，或者只允许论坛管理人员在版面上发表附件。请联络论坛管理员，如果您不清楚为什么他们不开放发表附件的权限。',
	'HELP_FAQ_POSTING_NO_ATTACHMENTS_QUESTION'	=> '为什么我不能添加附件？',
	'HELP_FAQ_POSTING_POLL_ADD_ANSWER'	=> '论坛管理员规定了投票选项的数量。如果您觉得需要更多的选项，那么请联系论坛管理员。',
	'HELP_FAQ_POSTING_POLL_ADD_QUESTION'	=> '为什么我不能增加更多的投票选项？',
	'HELP_FAQ_POSTING_POLL_CREATE_ANSWER'	=> '您可以很容易地创建一个投票，当您发表或者修改文章的时候，如果您有相应的权限，您可以在页面下方看到一个 <em>添加投票</em> 的表单。您需要为投票输入一个标题和至少两个选项 (在问题栏中填写问题并点击 <em>添加选项</em> 按钮。您可以设置投票的时间限制，如果是0，则表示投票没有时间限制。对于投票的选项数目，论坛会有一个限制，这由管理员设置决定。',
	'HELP_FAQ_POSTING_POLL_CREATE_QUESTION'	=> '我该如何创建一个投票？',
	'HELP_FAQ_POSTING_POLL_EDIT_ANSWER'	=> '投票只能由创建者或者版主，管理员修改。要编辑一个投票，点击编辑主题的第一篇帖子。如果还没有人参与投票，用户可以删除投票或编辑投票选项，但是一旦已经有人参与投票，就只有版主和管理员有权限编辑或删除它。这防止某些用户通过后期修改选项歪曲民主意愿。',
	'HELP_FAQ_POSTING_POLL_EDIT_QUESTION'	=> '我该如何编辑或删除一个投票？',
	'HELP_FAQ_POSTING_QUEUE_ANSWER'	=> '论坛管理员可能设置了论坛的帖子必须通过审批才能发表。这也可能是因为您被管理员放入了需要审批文章的会员列表。请联络论坛管理员以得到更多信息。',
	'HELP_FAQ_POSTING_QUEUE_QUESTION'	=> '为什么我的帖子需要审批后才能发表？',
	'HELP_FAQ_POSTING_REPORT_ANSWER'	=> '如果论坛管理员允许举报，请在您想举报的帖子上点击举报的按钮，而后按照提示的步骤完成举报。',
	'HELP_FAQ_POSTING_REPORT_QUESTION'	=> '我该如何向版主举报一个帖子？',
	'HELP_FAQ_POSTING_SIGNATURE_ANSWER'	=> '您必须先创建一个签名档后才能在帖子中添加，您可以在用户控制面板创建签名档。当您创建签名档之后，请在发表帖子的页面中勾选 <em>添加签名档</em> 来添加签名。您也可以在您的个人资料中选中默认添加签名档选项，这样每次发帖时就会自动勾选相应选项。',
	'HELP_FAQ_POSTING_SIGNATURE_QUESTION'	=> '我该如何在我的帖子后添加签名？',
	'HELP_FAQ_POSTING_WARNING_ANSWER'	=> '每个论坛管理员对自己的论坛都有一套规则。如果他们觉得您在版面违反了规定，他们可能会对您发出一个警告。请注意这是论坛管理人员的决定，phpBB开发者和这些警告没有任何关系。',
	'HELP_FAQ_POSTING_WARNING_QUESTION'	=> '为什么我收到了一个警告？',

	'HELP_FAQ_SEARCH_BLANK_ANSWER'	=> '您的搜索返回的结果数量太多以至于服务器无法处理。请使用高级搜索指定更多的条件和关键字再次搜索。',
	'HELP_FAQ_SEARCH_BLANK_QUESTION'	=> '为什么我的搜索返回空白！？',
	'HELP_FAQ_SEARCH_FORUM_ANSWER'	=> '在首页或文章列表，文章浏览的搜索栏中输入关键字就可以查找。点击每页页首的 “高级搜索” 链接将进入高级搜索。',
	'HELP_FAQ_SEARCH_FORUM_QUESTION'	=> '我该如何搜索版面？',
	'HELP_FAQ_SEARCH_MEMBERS_ANSWER'	=> '到 “用户” 页面并点击 “查找一个用户” 。在打开的页面里，输入您所需要查找的线索。',
	'HELP_FAQ_SEARCH_MEMBERS_QUESTION'	=> '我该如何查找某个成员用户？',
	'HELP_FAQ_SEARCH_NO_RESULT_ANSWER'	=> '您的搜索条件可能太模糊，包含了许多常用的字词，这些字词并未被phpBB索引。您可以输入更确切的关键字和更多的限制条件通过高级搜索进行查找。',
	'HELP_FAQ_SEARCH_NO_RESULT_QUESTION'	=> '为什么我的搜索没有结果？',
	'HELP_FAQ_SEARCH_OWN_ANSWER'	=> '您自己的帖子可以通过点击用户控制面板或浏览自己的资料中 “查找用户的帖子” 链接得到。要查找自己的主题，使用高级搜索，并填入自己的用户名和其他合适的条件进行查找。',
	'HELP_FAQ_SEARCH_OWN_QUESTION'	=> '我该如何查找我发表的帖子和主题？',

	'HELP_FAQ_USERSETTINGS_AVATAR_ANSWER'	=> '在浏览帖子时，用户名下可能会有两种图标。第一个是和您的等级相关的图片，一般以星星或方块的形式显示您在这个论坛的头衔。第二个是一个更大的图片，这是用户的头像，一般是因人而异的。',
	'HELP_FAQ_USERSETTINGS_AVATAR_QUESTION'	=> '我的用户名旁边的图片是什麽？',
	'HELP_FAQ_USERSETTINGS_AVATAR_DISPLAY_ANSWER'	=> '在您的控制面板里，“资料”下方您可以添加一个头像使用四种方法之一：Gravatar、相册、远程或上传。由论坛管理员决定启用头像和选择制作头像的方法。如果您不能使用头像，联系论坛管理员。',
	'HELP_FAQ_USERSETTINGS_AVATAR_DISPLAY_QUESTION'	=> '我怎么显示一个头像？',

	'HELP_FAQ_USERSETTINGS_CHANGE_SETTINGS_ANSWER'	=> '您的所有设定 (如果您是注册用户) 都存储在数据库中。要修改它们请点击 <em>用户控制面板</em> 链接 (除了这个以外，一般都显示在每页的页首)。您可以在用户控制面板中更改您的各种偏好设定。',
	'HELP_FAQ_USERSETTINGS_CHANGE_SETTINGS_QUESTION'	=> '我该如何更改设置？',
	'HELP_FAQ_USERSETTINGS_EMAIL_LOGIN_ANSWER'	=> '对不起只有注册用户才能通过论坛发送email给其他用户 (如果管理员启用了email功能)。这主要是为了防止匿名用户使用email系统发送垃圾邮件。',
	'HELP_FAQ_USERSETTINGS_EMAIL_LOGIN_QUESTION'	=> '当我点击用户的email链接时为什么要让我登录？',
	'HELP_FAQ_USERSETTINGS_HIDE_ONLINE_ANSWER'	=> '在用户控制面板 “论坛参数F” 中您可以找到选项 <em>隐藏您的在线状态</em>，如果您选中这个选项 <samp>是</samp>，将只有管理员，版主和您自己能看到您的在线状态。您将会显示为隐藏用户。',
	'HELP_FAQ_USERSETTINGS_HIDE_ONLINE_QUESTION'	=> '我怎样才能使自己的用户名不出现在在线用户列表中？',
	'HELP_FAQ_USERSETTINGS_LANGUAGE_ANSWER'	=> '可能是管理员没有安装您的语言，也有可能是目前还没有人将这个论坛翻译成您的语言。请向论坛管理员咨询是否可以为您安装您使用的语言。如果这个语言的翻译并不存在，您可以尝试创建这个语言的翻译。更多的信息请访问<a href="https://www.phpbb.com/">phpBB</a>&reg; 网站。',
	'HELP_FAQ_USERSETTINGS_LANGUAGE_QUESTION'	=> '我的语言不在列表里!',
	'HELP_FAQ_USERSETTINGS_RANK_ANSWER'	=> '一般您不能直接更改您的等级 (等级一般显示在阅读主题页面中您的用户名下方)。大多数论坛使用等级来区分用户的发帖数或某种特殊身份，例如版主和管理员就是特殊等级。请不要为了提高等级滥用论坛的发帖功能发表没有意义的帖子。这种情况下版主和管理员反而会大量删除您的帖子而降低您的等级。',
	'HELP_FAQ_USERSETTINGS_RANK_QUESTION'	=> '什麽是等级？如何改变我的等级？',
	'HELP_FAQ_USERSETTINGS_SERVERTIME_ANSWER'	=> '如果您确认您已经设置了正确的时区而时间依然错误，那就有可能是服务器的时间设置不正确，请联系管理员修正。如果时间显示相差一个小时，那就可能是因为夏令时，在夏季的月份里时间有可能会和当地时间有一个小时的时间差。',
	'HELP_FAQ_USERSETTINGS_SERVERTIME_QUESTION'	=> '我更改了时区但是时间还是显示错误!',
	'HELP_FAQ_USERSETTINGS_TIMEZONE_ANSWER'	=> '一般很少出现服务器时间不准的情况，您看到的时间不准有可能是因为论坛和您处于不同的时区。如果是这种原因，您可以在个人资料中更改时区，例如伦敦，巴黎，纽约，悉尼，等等。请注意更改时区等操作一般只有注册用户才可以进行。如果您还未注册，就请尽快注册吧。',
	'HELP_FAQ_USERSETTINGS_TIMEZONE_QUESTION'	=> '显示的时间不正确!',
));
