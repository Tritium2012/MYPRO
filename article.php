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
if($p!=NULL){
    $page_title = 'MyPro-文章'.$p;
    $page = $p.'.inc.php';
}
else{
    $page = '../modules/main.inc.php';
    $page_title = 'MyPro-ALPHA版';
}
        
// Make sure the file exists:
if (!file_exists('./page/' . $page)) {
    $page = '../modules/main.inc.php';
    $page_title = 'MyPro-ALPHA版';
}

// Include the header file:
include('./includes/header.html');

// Include the content-specific module:
// $page is determined from the above switch.
include('./page/' . $page);

// Include the footer file to complete the template:
include('./includes/footer.html');

?>
