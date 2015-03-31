<html>
<head>
	<script language="javascript" src="js/login.js"></script>
	<meta charset="utf-8" />
	<!--<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">-->
	<link rel="stylesheet" href="css/login.css">
	<!-- <script src="bootstrap/js/bootstrap.min.js"></script> -->
	<title>First Webpage</title>
	<!-- <base target="_blank" /> -->

</head>
<body background="src/bg.jpg">
	<div class="container">
		<div class="title">
			<p class="login_title">Welcome to e-class!</p>
			<p class="login_test">sdflk sldfj sdklwl sllsk</p>
			<?php
				if(!empty($_GET['lgState']))
				{
					switch ($_GET['lgState']) {
						case 2:
							echo "<p>ABABABABA</p>";
							break;
						
						default:
							
							break;
					}
				}
			?>
		</div>
		<div class="input">
			<!--<img src="src/login_bg.png" class="login_bg">-->
			<form action="controller/loginController.php?action=login" method="post" onsubmit="return judgeInputNull()">
				<input type="text" maxlength=15 id="input_tid" name="teacher_id" class="login_id" value="input your id" onfocus="clearDefaultTest(this.id,'input your id')" />
				<input type="text" maxlength=15 id="input_tpsw" name="teacher_psw" class="login_psw" value="input your password" onfocus="clearDefaultTest(this.id,'input your password')" />
				<input type="submit" class="login_submit" value="submit">
			</form>
		</div>
	</div>

</body>

</html>

