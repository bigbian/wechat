function clearDefaultTest(eleid,message)
	{
		var obj = document.getElementById(eleid);
		if(obj.value == message)//如果未输入 先清空 再改样式 否则直接改样式
			obj.value="";

		obj.style.fontStyle="normal";
		obj.style.color="black";
		if(obj.id == "input_tpsw")
			obj.type="password";
		
		//失去焦点
		obj.onblur = function(){
			if (obj.value=="") {
				obj.value=message;
				obj.style.fontStyle="italic";
				obj.style.color="gray";
				if(obj.id == "input_tpsw")
					obj.type="text";
			}
		}
	}
	function judgeInputNull()
	{
		var idEle = document.getElementById("input_tid");
		var pswEle = document.getElementById("input_tpsw");
		var id_init = "input your id";
		var psw_init = "input your password";
		if(idEle.value != id_init && pswEle.value != psw_init)
		{
			idEle.style.backgroundColor="white";
			pswEle.style.backgroundColor="white";
			return true;
		}
		else
		{
			if(idEle.value == id_init)
				idEle.style.backgroundColor="lightPink";
			else
				idEle.style.backgroundColor="white";
			if(pswEle.value == psw_init)
				pswEle.style.backgroundColor="lightPink";
			else
				pswEle.style.backgroundColor="white";
			return false;
		}
	}