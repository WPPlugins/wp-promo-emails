<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$new_string = preg_replace('/([^\/]+)$/', '$1/', $path);
require_once($new_string .'wp-config.php');
$blogname = get_option('blogname');
$void = htmlspecialchars($_GET["member_0_0_0_0"]);
echo ABSPATH;
?>
<html>
<head>
<title><?php echo $blogname; ?></title>
</head>
<body>
<?php
global $wpdb;
$wpdb->query(
	"UPDATE $wpdb->users SET subscriber ='Z' WHERE user_email ='$void' LIMIT 1 ");
	
?>
<div style="background:#FFF;border:1px solid #ddd;border-radius:6px;max-width:580px;margin:0 auto;padding:34px 0 24px;width:580px;">
<h2>You will be missed</h2>
The following email address <strong>(<?php echo $void;?>)</strong> has been removed from our mailing list.
Thank for visiting with us. We hope you will come back soon and bring a friend.
            <br>
            <br>
            <br>
            Thanks,
            <br>
           <?php echo $blogname;?>
            </div>
</body>
</html>

