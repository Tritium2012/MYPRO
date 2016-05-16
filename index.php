<?php # Script - index.php

//配置文件
require('includes/config.inc.php');

// 验证页面显示:
if (isset($_GET['p'])) {
    $p = $_GET['p'];
} elseif (isset($_POST['p'])) { // Forms
    $p = $_POST['p'];
} else {
    $p = NULL;
}

// 要显示的页面:
switch ($p) {

    case 'notice':
        $page = 'notice.inc.php';
        $page_title = 'MyPro-公告';
        break;
    
    case 'mypro':
        $page = 'mypro.inc.php';
        $page_title = 'MyPro-MYPRO计划';
        break;
    
    case 'rpgmaker':
        $page = 'rpgmaker.inc.php';
        $page_title = 'MyPro-RPGMQKWE';
        break;

    case 'progress':
        $page = 'progress.inc.php';
        $page_title = 'MyPro-进度报告';
        break;
        
    case 'contact':
        $page = 'contact.inc.php';
        $page_title = 'MyPro-联系我们';
        break;
    
    // Default is to include the main page.
    default:
        $page = 'main.inc.php';
        $page_title = 'MyPro-ALPHA版';
        break;
        
} // End of main switch.

// Make sure the file exists:
if (!file_exists('./modules/' . $page)) {
    $page = 'main.inc.php';
    $page_title = 'MyPro-ALPHA版';
}

// Include the header file:
include('./includes/header.html');

// Include the content-specific module:
// $page is determined from the above switch.
include('./modules/' . $page);

// Include the footer file to complete the template:
include('./includes/footer.html');

?>
