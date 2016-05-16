<?php # Script - content.inc.php

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
<h1>联系我们</h1>
<p>该功能尚未完成，您可以通过以下方式联系我们QQ1538682186，QQ2248986565:</p>
<form action="#" method="post">
<div class="form_settings">
<p><span>您的姓名</span><input class="contact" type="text" name="your_name" value="" readonly="true"/></p>
<p><span>您的Email</span><input class="contact" type="text" name="your_email" value="" readonly="true"/></p>
<p><span>您想说的话</span><textarea class="contact textarea" rows="8" cols="50" name="your_enquiry" readonly="true"></textarea></p>
<p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="contact_submitted" value="提交" /></p>
</div>
</form>
<p><br /><br />提醒：该功能尚未完成，作者正在努力赶工中。如果您有好的意见或建议欢迎发送我的邮箱jsczjh@163.com.</p>
</div>
</div>
