<?php
	require_once "../model/loginModel.php";
	function tchLogin($teacher_id, $teacher_psw)
	{
		$lgModel = new loginModel();

		$teacher_id_turn=htmlspecialchars($teacher_id);
		$tch_psw_encrypted = $teacher_psw;//MD5($teacher_psw);

		$reState=$lgModel->searchTchInfo($teacher_id_turn, $tch_psw_encrypted);//得到返回码
		
		switch ($reState['state']) {
			case 1://登陆成功
				/*
				session_start();
				$_SESSION['tch_name']=$reState['tch_name'];
				$_SESSION['tch_id']=$teacher_id;
				*/
				header("location: ../index.php");
				break;
			case 2://账户名不存在
				header("location: ../login.php?lgState=2");
				break;
			case 3://密码错误
				echo "wrong password";
				break;
		}
	}

?>