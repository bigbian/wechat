<?php
class dbModel
{
	private $db_host="localhost";
	private $db_username= "root";
	private $db_password= "";
	private $db_database= "wechat";
	function connectDb(){
		try{
			$db = @mysql_connect($this->db_host,$this->db_username,$this->db_password) or die('无法连接数据库!' . mysql_error());		
		}
		catch(exception $e)
		{
			echo $e->getMessage();
		}
	    mysql_query("set names utf8");
	    mysql_select_db($this->db_database, $db) or die('数据库访问错误'.mysql_error());	
	}
	function closeDb(){
		mysql_close() or die('无法关闭数据库链接！'.mysql_error());
	}
	function query($sql){
		$r=mysql_query($sql);
		if($result = mysql_fetch_array($r))
			return $result;
		else
			return 0;
	}
}

?>
	