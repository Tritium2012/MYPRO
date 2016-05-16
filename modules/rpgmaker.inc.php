<?php # Script - rpgmaker.inc.php

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
<h1>RPGMAKER MV项目</h1>
<p>日本KADOKAWA以于2015年圣诞节后推出支持手机和Mac等多种平台的PC/Mac用RPG游戏制作工具《RPG制作大师MV》</p>
<p>RPGMaker-MV目前支持HTML5网页测试，因此该项目已经能很好的融合到网页中来。想要更多关于RPGMaker-MV信息，请登录<a href="http://steamcommunity.com/app/363890" target="_blank">Steam官方平台RPGMaker MV</a>，查看更多内容。</p>
<p>以下为RPGMaker-MV百度贴吧链接地址：<a href="http://tieba.baidu.com/f?kw=rpgmakermv&ie=utf-8" target="_blank">百度贴吧</a>。</p>
<span class="center"><img src="image/rpgmakerMV.png" alt="image error" /></span>
<h2>RPGMAKER MV原创作品-红雀</h2>
<p>RPGMAKER MV原创作品-红雀为作者个人自制的demo作，目前已经完成并测试成功第一章节。</p>
<p>玩家可直接<a href="http://mytritium.picp.net:8088/Game/Demo/index.html" target="_blank">开始游戏</a>。无需登录。</p>
<p>作品“红雀”尚处于开发阶段，已完成第一章节。该项目会陆续更新发布，请小伙伴们关心留意。</p>
<p>注意：在服务器开放时间以外将无法进入游戏。如果您需要PC/Mac版本游戏内容，请<a href="index.php?p=contact">联系我们</a></p>
