<?php # Script - main.inc.php

// 页面重定向:
if (!defined('BASE_URL')) {

    // 配置文件中包含的BASE_URL:
    require('../includes/config.inc.php');
    
    // 重定向到主页:
    $url = BASE_URL . 'index.php';
    header ("Location: $url");
    exit;
    
} // End of defined() IF.
?>

<!-- insert the page content here -->
<h1>欢迎来到MyPro</h1>
<p>该网页为HTML5搭建的非官方、非盈利、个人展示用网页。如果您需要得到更多额外信息欢迎联系作者QQ1538682186，新浪微博@Tritium2012。</p>
<p>该站点为自主搭建，访问量过多时会造成页面刷新延迟，访问失败等情况，一切属于正常。如访问失败，请稍后访问。</p>
<p>该站点提供作者上传的测试用项目，欢迎各位小伙伴帮助测试并留下您宝贵的意见或建议。如果您有好的想法请告诉作者，发送邮件至jsczjh@163.com。</p>
<p>该站点由Apache提供web服务，<a href="http://hsk.oray.com/" target="_blank">花生壳</a>提供外网映射服务，网页模板为Colour Blue。如果您需要更多页面模板信息，请访问<a href="http://www.html5webtemplates.co.uk/">HTML5webtemplates</a>。</p>
<h2>网页支持浏览器</h2>
<p>该网页处于测试阶段，尚支持浏览器:</p>
<ul>
<li>Internet Explorer 8</li>
<li>Internet Explorer 7</li>
<li>FireFox 3.5</li>
<li>Google Chrome 6</li>
<li>Safari 4</li>
</ul>
<p>点击这里<a href="http://mytritium.picp.net:8088/management/">进入后台管理</a>。</p>
<p><strong>注意：后台管理系统尚在建设中，数据库服务器可能处于关闭状态！后台管理网页仅供浏览使用！</strong></p>
      
