
<?php
get_header();
?>

<div class="container">
<br>
<div class="row">
<div class="col-md-8">
<font color="#79cc8f">
<?php
if (isset($_POST['submit'])) {
    $flag = 1;
    if ($_POST['yourname'] == '') {
        $flag = 0;
        echo "Please Enter Your Name<br>";
    } else if (!preg_match('/[a-zA-Z_x7f-xff][a-zA-Z0-9_x7f-xff]*/', $_POST['yourname'])) {
        $flag = 0;
        echo "Please Enter Valid Name<br>";
    }
    if ($_POST['email'] == '') {
        $flag = 0;
        echo "Please Enter E-mail<br>";
    } else if (!eregi("^[_a-z0-9-]+(.[_a-z0-9-]+)*@[a-z0-9-]+(.[a-z0-9-]+)*(.[a-z]{2,3})$", $_POST['email'])) {
        $flag = 0;
        echo "Please Enter Valid E-Mail<br>";
    }
    if ($_POST['subject'] == '') {
        $flag = 0;
        echo "Please Enter Subject<br>";
    }
    if ($_POST['message'] == '') {
        $flag = 0;
        echo "Please Enter Message";
    }
    if (empty($_POST)) {
        print 'Sorry, your nonce did not verify.';
        exit;
    } else {
        if ($flag == 1) {
            //echo "Mail is sending;";
			//echo get_option("admin_email");
            wp_mail(get_option("admin_email"), trim($_POST[yourname]) . " sent you a message from " . get_option("blogname"), stripslashes(trim($_POST[message])), "From: " . trim($_POST[yourname]) . " <" . trim($_POST[email]) . ">\r\nReply-To:" . trim($_POST[email]));
            echo "<p align='center' style='color:white'>Mail Successfully Sent</p>";
        }
    }
}
?>
</font>

<font color="white">
<form method="post" id="contactus_form">
Your Name:<br><input style="color: #000;" type="text" name="yourname" id="yourname" rows="1" value="" />
<br /><br />
Your Email:<br><input  style="color: #000;" type="text" name="email" id="email" rows="1" value="" />
<br /><br />
Subject:<br><input  style="color: #000;" type="text" name="subject" id="subject" rows="1" value=""></p>
<br /><br />
Leave a Message:<br><textarea name="message" id="message" style="color: #000; width: 500px; height:300px;"></textarea>
<br /><br />
<input class="btn btn-info" type="submit" name="submit" id="submit" value="Send"/>
</form>
</font>

<br>
</div>
<?php //get_sidebar(); 
?>	
</div>
</div>
<?php
get_footer();
?>
