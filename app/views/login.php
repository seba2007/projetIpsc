<?php
  require 'includes/header.php';
?>

	<form id="contact" action="login.php" method="post">
		<h2>Login</h2>
        <div class="form_settings">
            <p><span>Email Address</span><input class="contact" type="text" name="mail" value="" /></p>
            <p><span>Password</span><input class="contact" type="password" name="password" value="" /></p>
            <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="contact_submitted" value="send" /></p>
        </div>
    </form>
<?php
  require 'includes/footer.php';
?>