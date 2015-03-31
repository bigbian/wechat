<?php
	require_once "dbModel.php";

	class loginModel extends dbModel
	{
		function __construct()
		{
			$this->connectDb();
		}
		function __destruct()
		{
			$this->closeDb();
		}
		public function searchTchInfo($tid, $tpsw)
		{
			$sql = "SELECT teacher_name, teacher_psw
					from teacher_info
					where teacher_id = '$tid' ";
			$result = $this->query($sql);
			if($result!=0)//找到teacher_id
			{
				if($tpsw == $result['teacher_psw'])//密码相同 登陆成功
				{
					$re_array = array('tch_name' => $result['teacher_name'], 'state' => 1);
					return $re_array;
				}
				else//密码错误
				{
					$re_array = array('state' => 3);
					return $re_array;
				}
			}
			else//账户名不存在
			{
				$re_array = array('state' => 2);
				return $re_array;
			}
		}

	}
	
?>