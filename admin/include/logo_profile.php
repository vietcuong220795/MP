<?php
@session_start();
?>
<a href="quantri.php"><img id="logo" src="public/layout/resources/images/icons/logo.png" alt="logo CCGSHOP" /></a> 
<!-- Sidebar Profile links -->
<div id="profile-links"> Chào, <a href="#" title="Edit your profile">
<?php echo $_SESSION["ho_ten"] ?></a><br />
<br />
<a href="#" title="View the Site">View the Site</a> | 
<a href="quantri.php?func=exit" title="Sign Out">Sign Out</a> </div>
