<?php # Script - progress.inc.php

// 页面重定向:
if (!defined('BASE_URL')) {

    //配置文件中包含的BASE_URL:
    require('../includes/config.inc.php');
    
    //重定向到主页:
    $url = BASE_URL . 'index.php';
    header ("Location: $url");
    exit;
    
} // End of defined() IF.
?>

<!-- insert the page content here -->

<table style="width:100%; border-spacing:0;">
  <tr><th><i>5-10,2016</i></th>
  	  <th><a href="article.php?p=5">php+mysql.后台管理雏形实现</a></th></tr>
  <tr><td><span class="left"><img src="style/graphic.png" alt="example graphic" /></span></td>
  <td>随着网站的逐步发展，站点的数据量将会变得越来越大。一个高效的、可扩展的数据管理方案就变得愈加重要，关系数据库的诞生非常好的解决了这方面的问题。
  	MyPro使用到Mysql存储数据的会是用户数据，还有页面经常更新的展示性内容……</td></tr>
</table>

<table style="width:100%; border-spacing:0;">
  <tr><th><i>5-6,2016</i></th>
  	  <th><a href="article.php?p=4">windows系统下外网无法访问本地服务器问题修复</a></th></tr>
  <tr><td><span class="left"><img src="style/graphic.png" alt="example graphic" /></span></td>
  <td>随着互联网功能的逐渐强大，操作系统也针对各种漏洞完善其安全功能。在Windows操作系统下，如果配置防火墙使得外网能够访问本地成为了MyPro项目率先解决的问题之一。
若防火墙配置不当，可能会造成安全隐患。这里作者修复了MyPro外网无法访问的问题……</td></tr>
</table>

<table style="width:100%; border-spacing:0;">
  <tr><th><i>5-5,2016</i></th>
  	  <th><a href="article.php?p=3">关于编码统一的问题</a></th></tr>
  <tr><td><span class="left"><img src="style/graphic.png" alt="example graphic" /></span></td>
  <td>在存储网站文件的时候需要考虑文件字符编码的问题。如果编码不支持中文，或者编码不统一，在网页显示时就会出现乱码，甚至产生错误。
	    考虑网站整体采用何种字符编码是第一要紧的事情……</td></tr>
</table>

<table style="width:100%; border-spacing:0;">
  <tr><th><i>4-28,2016</i></th>
  	  <th><a href="article.php?p=2">模块化网页</a></th></tr>
  <tr><td><span class="left"><img src="style/graphic.png" alt="example graphic" /></span></td>
  <td>如果我们需要对header和footer进行修改那将是一次浩大的工程。若网页数量少还好，如果有上百张网页，那将个特别繁重的工作。
	于是将header和footer部分与网页正文内容独立开来是个明智的做法。以下介绍一种网页模块化的方法……</td></tr>
</table>

<table style="width:100%; border-spacing:0;">
  <tr><th><i>4-28,2016</i></th>
  	  <th><a href="article.php?p=1">关于静态页面的文件结构问题</a></th></tr>
  <tr><td><span class="left"><img src="style/graphic.png" alt="example graphic" /></span></td>
  <td>由于在开发初期，网站采用静态页面形式，这给信息保存和编辑带来了很大的挑战。这也给网站的维护管理和编辑带来了巨大的挑战。
      如何管理这些页面成了一个难题。该文章提供了一种以PHP为基础的页面管理保存办法……</td></tr>
</table>

