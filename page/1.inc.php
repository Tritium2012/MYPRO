<?php # Script - progress.inc.php

// 页面重定向:
if (!defined('BASE_URL')) {

    // Need the BASE_URL, defined in the config file:
    require('../includes/config.inc.php');

    // Redirect to the index page:
    $url = BASE_URL . 'article.php';
    header ("Location: $url");
    exit;
    
} // End of defined() IF.
?>

<!-- insert the page content here -->
<h1>关于静态页面的文件结构问题</h1>
<h5>4-28,2016&nbsp;|&nbsp;Tritium2012</h5>
<p>由于在开发初期，网站采用静态页面形式，这给信息保存和编辑带来了很大的挑战。在互联网发展初期，许多大型网站还没有使用动态网页，而使用了静态页面。这就给网站的维护管理和编辑带来了巨大的挑战。
如何管理这些页面成了一个难题。该文章提供了一种以PHP为基础的页面管理保存办法。</p>
<h2>常用web站点目录结构</h2>
<P>这里以PHP文件为例。</P>
<span class="center"><img src="page/image/progress_4282016_01_02.jpg" width=400 height=200 alt="image error" /></span>
<p>以文件夹形式分层管理。这里给出一个实例：</p>
<span class="center"><img src="page/image/progress_4282016_01_01.jpg" width=450 height=250 alt="image error" /></span>
<h2>MyPro静态版的管理方案</h2>
<h5>网站主目录如下：</h5>
<span class="center"><img src="page/image/progress_4282016_01_03.png" width=550 height=200 alt="image error" /></span>
<p>其中html文件为主页的二级目录，这里可以在MyPro主页中直接访问到，所以放在同一个文件下。我们可以把这些文件看成是同一级的，即同一个频道。</p>
<h5>在频道下一级的栏目则用如下结构：</h5>
<span class="center"><img src="page/image/progress_4282016_01_04.png" width=320 height=80 alt="image error" /></span>
<p>这里的image文件下管理该频道使用的图片。这里频道下直接是文章，没有栏目，因此作者只用到两级目录。</p>
<h2>文件命名方法</h2>
<p>文件夹命名采用通用方法，但这里建议使用个性化命名，以防止用户恶意攻击。</p>
<p>文件命名则采用简单的频道+时间+流水号形式以避免重复，图片也用类似命名方法，如第一篇文章的图片，则命名为<i>progress_4282016_01_01</i>,
第一篇文章的第二张图命名为<i>progress_428201_01_02</i>。以此类推。</p>
