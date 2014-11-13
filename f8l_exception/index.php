<?php
session_start(); ?>
<!-- F8L Exception Online Bank | Home -->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>F8L Exception Online Bank | Home</title>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<?php include 'includes/inc_header.php'; ?>
	<h1>Welcome to F8L Exception Online Bank!</h1><hr />
</head>
    
<?php
if (isset($_SESSION['user'])){
    $user       = $_SESSION['user'];
    $loggedin   = TRUE;
    $userstr    = " ($user)";
} else {
    $loggedin   = FALSE;
}

if ($loggedin){
    include 'includes/inc_text_menu.php';
} else {
    include 'includes/inc_loggedin_text_menu.php';
}
?>
    
<body>

<h3>Secure online banking with zero fees</h3>
<img src="artwork/vault.jpg" />
<p>What? You're looking for a secure and reliable online bank to stash your cash in that won't bury you with fees? The F8L Exception Online Bank has it all.
It is free, quick and easy to set up an account, and you can access all your funds conveniently online.</p>
<br />
