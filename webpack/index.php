<?php
/**
 * Created by PhpStorm.
 * User: Tucker
 * Date: 5/8/2017
 * Time: 1:51 PM
 */

if(session_status() !== PHP_SESSION_ACTIVE) {
	session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<base href="<?php echo dirname($_SERVER["PHP_SELF"]) . "/"; ?>" />

		<title>Angular Hello World</title>
	</head>
	<body>
		<!-- This custom tag much match your Angular @Component selector name in app/app.component.ts -->
		<angular-hello-world-app>Loading&hellip;</angular-hello-world-app>
	</body>
</html>