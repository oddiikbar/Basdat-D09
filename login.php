<?php
//misc
function loadLoginForm() {
	global $usernameErrorMsg, $passwordErrorMsg, $usernameValue, $passwordValue;

	$action = htmlspecialchars ( $_SERVER ['PHP_SELF'] );

	$LoginFormHtml = "
  <section id='form-signin'>
	<header>
	<h3>Log in</h3>
	</header>
	<form id='LoginForm' class='form-signin' method='POST' action='$action'>
	<label id='sr-only'>Username:</label>
  <input class='form-control' id='LoginUsernameField' type='text' name='username' placeholder='Username'>
  <span class='requiredForm'>" . $usernameErrorMsg . "</span>
  <br>
	<label id='sr-only'>Password:</label> <input class='form-control' id='LoginPasswordField' type='password' name='password' placeholder='Password'><span class='requiredForm'>" . $passwordErrorMsg . "</span><br>
	<input class='btn btn-lg button-primary btn-block' id='LoginSubmitButton' type='submit' value='Log In' name='login'>
	</form>
	</section>
	";

	echo $LoginFormHtml;
}
function redirectGuest() {
	if (! isset ( $_SESSION ["loggedUser"] )) {
		header ( 'Location: login.php' );
	}
}
function redirectUser() {
	if (isset ( $_SESSION ["loggedUser"] )) {
		header ( 'Location: home.php' );
	}
}
function loginDummy() {
  // header ('Location: Inventori/');
	if (isset ( $_SESSION ["loggedUser"] )) {
		$_SESSION ["loggedUser"]="dummy";
		header ( 'Location: /booking/lihat/index.php' );
	}
}

function loadLoginDummy() {
	global $usernameErrorMsg, $passwordErrorMsg, $usernameValue, $passwordValue;

	$action = htmlspecialchars ( $_SERVER ['PHP_SELF'] );

	$LoginFormHtml = "
  <div class='one-half column' style='margin: 5% 0%'>
	<form id='LoginForm' class='form-signin u-full-width' method='POST' action='booking/'>
	<label id='sr-only'>Username:</label>
  <input class='form-control u-full-width' id='LoginUsernameField' type='text' name='username' placeholder='Username'><span class='requiredForm'>" . $usernameErrorMsg . "</span>
	<label id='sr-only'>Password:</label>
  <input class='form-control u-full-width' id='LoginPasswordField' type='password' name='password' placeholder='Password'><span class='requiredForm'>" . $passwordErrorMsg . "</span>
	<input class='btn btn-lg button-primary' id='LoginSubmitButton' type='submit' value='Log In' name='login'>
	</form>
  </div>
	";

	echo $LoginFormHtml;
}
?>
