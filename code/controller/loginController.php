<?php
	require_once "action/loginAction.php";
	header("Content-Type: text/html; charset=utf-8");

	$action=$_GET['action'];
	switch ($action) {
		case 'login':
			if(!isset($_POST['teacher_id']) || !isset($_POST['teacher_psw']))
			{
				exit('非法访问！！');
			}
			$teacher_id=$_POST['teacher_id'];
			$teacher_psw=$_POST['teacher_psw'];
			tchLogin($teacher_id, $teacher_psw);
			//echo "<form id='id&psw' type='hidden' action='../model/loginModel.php' method='post'><input type='hidden' name='tid' value='$teacher_id'/><input type='hidden' name='tpsw_encrypted' value='$tch_psw_encrypted'></form>";
			//echo "<script>document.getElementById('id&psw').submit();</script>";

			break;
		
		default:
			
			break;
	}


?>