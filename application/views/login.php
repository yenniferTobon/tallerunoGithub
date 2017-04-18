<!DOCTYPE HTML>
<html>
	<head>
		<title>Login Usuario</title>
	</title>
	 <body>
	 	<h1>Login</h1>
	 	<?php echo validation_errors(); ?>
	 	<?php echo form_open('LoginController/checkLogin'); ?>

	 	Usermane:<br/>
	 	<input type="text" name="username"/><br/>

	 	Password:<br/>
	 	<input type="text" name="password"/><br/>
	 	<br/>


	 	<input type="submit" value="login" name="submit"/>
	 	</form>
	 </body>	
</html>