<?php # Script - notice.inc.php

// 页面重定向:
if (!defined('BASE_URL')) {

    // Need the BASE_URL, defined in the config file:
    require('../includes/config.inc.php');
    
    // Redirect to the index page:
    $url = BASE_URL . 'index.php';
    header ("Location: $url");
    exit;
    
} // End of defined() IF.
?>

<!-- insert the page content here -->
<h1>页面测试公告</h1>
<p>该网页处于公开测试阶段！开放时间为:</p>
<p><strong>每周1至周6，傍晚19点至晚上21点</strong>。</p>
<p>开放时间内可访问网站主页<a href="http://mytritium.picp.net:8088/MyPage/">MYPRO</a>。在开放时间以外访问无效！</p>
<h2>责任声明</h2>
<p>在开发期间，作者将对MyPro网站建设和维护负责。杜绝一切网络攻击行为，若有出现服务器将记录在案。作者有权对黑客攻击者进行举报。</p>
<P>网站建设期间内，作者公开源包括</P>
<ul>
 <li>项目建设进度</li>
 <li>项目完成中使用到的第三方插件</li>
 <li>项目完成中使用到的专利源码</li>
 <li>项目完成中使用到的开发软件及开发环境</li>
</ul>
<p>如在测试中发现任何BUG，或您有好的改进意见欢迎<a href="index.php?p=contact">联系我们</a>。</p>
<h2>网站建设说明</h2>
<p>网站从web服务器搭建、页面开发、到后台数据库，均有作者独立完成。若有帮助，作者将列出给予帮助的人的名字（需匿名除外）</p>
<p>网站建设规划周期未定，如果遇到特殊困难，网站无法再预定时间进行公开测试，作者将会进行特殊说明。</p>
<p>MyPro首页将给出网站建设进度及待完成项目进度，如有变更会在第二天公开测试中说明。</p>
<p>网站建设公开测试以非盈利为目的，旨在提高作者技术水平。欢迎大家监督。</p>
<h2>正在进行的项目</h2>
<p>目前正在进行的公开测试项目MyPro第一期测试项目为：</p>
<table style="width:100%; border-spacing:0;">
 <tr><th>项目名称</th><th>项目内容</th></tr>
 <tr><td>网站建设</td><td>搭建完善网站，数据库，完成站内逻辑等</td></tr>
 <tr><td>MyPro</td><td>我的项目网页建设及更新维护工作</td></tr>
 <tr><td>RPGMAKER</td><td>RPGMAKER MV系列作品更新</td></tr>
</table>
<h2>项目公告</h2>
<h4>MyPro-Alpha版</h4>
<p>MyPro-Alpha动态版已发布。当前开放功能区块有“主页”，“公告”，“MyPro项目”，“RPGMAKER”，“进度报告”，“联系我们”。</p>
<p>详细请看<a href="index.php?p=mypro">MyPro计划</a>。</p>
<h4>RPGMAKER MV-独立作品《红/雀》</h4>
<p>RPGMAKER MV为制作RPG游戏的一款专业软件。作者独立完成的Demo作“红雀”发布。<i><a href="http://mytritium.picp.net:8088/Game/Demo/index.html" target="_blank">我要试玩！</a></i></p>
<p>详细请看<a href="index.php?p=rpgmaker">RPGMAKER</a>。</p>

