<?php

    include 'incs/class_db.php';
    include 'incs/class_home.php';

    $homelib = new homelib();
    if (isset($_POST["login_action"])){
        $message = $homelib-> login();
		$error = $message[0];
		
		$data = $message[1];
		header("Location:index.php");
		die();
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
	<h1>Đăng Nhập</h1>
	<?php echo isset($error['message']) ? $error['message'] : ''; ?>
	<form method="post" action="login.php">
		<table cellspacing="0" cellpadding="5">
			<tr>
				<td>Tên của bạn</td>
				<td><input type="text" name="username" id="username"
					value="<?php echo isset($data['username']) ? $data['username'] : ''; ?>" />
                  <?php echo isset($error['username']) ? $error['username'] : ''; ?>
               </td>
			</tr>
			<tr>
				<td>Mật khẩu của bạn</td>
				<td><input type="password" name="password" id="password"
					value="<?php echo isset($data['password']) ? $data['password'] : ''; ?>" />
                  <?php echo isset($error['password']) ? $error['password'] : ''; ?>
               </td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="login_action" value="Đăng nhập" /></td>
			</tr>
		</table>
	</form>
</body></html>