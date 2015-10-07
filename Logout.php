<?php
session_start();
if(isset($_SESSION['userlogin']))
{
	unset($_SESSION['userlogin']);
	unset($_SESSION['user_id']);
}
session_destroy();

?>
			<script type="text/javascript">
			window.location = "login.php";
			</script>
