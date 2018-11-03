<?php
	/**
	*封装文件上传的函数
	*$file:上传的文件内容
	*$path:自定义的一个文件夹(保存上传的文件)
	*$arr:限制上传的文件类型
	*$size:上传的文件大小
	*/

function fileup($file,$path="./upload",
	$arr=["image/jpeg","image/png","image/gif"],$size=0){
	//声明一个数组专门用来返回执行的结果信息
	$result=['info'=>'','error'=>false];
	//获取到上传的错误号
	$error=$file["error"];
	if($error!=0){
		switch($error){
			case 1: $result["info"]="文件大小超出了post限制";break; 
			case 2: $result["info"]="文件大小超出了表单限制";break; 
			case 3: $result["info"]="部分文件上传失败";break; 
			case 4: $result["info"]="没有文件上传";break; 
			case 6: $result["info"]="找不到临时文件";break; 
			case 7: $result["info"]="文件写入失败";break; 
		}
		return $result;
	}

	//检测文件类型是否符合要求
	$tmp=$file["tmp_name"];
	$finfo=finfo_open(FILEINFO_MIME);
	//image/jpeg;charset=binary
	$type=finfo_file($finfo,$tmp);
	$type=explode(";",$type)[0];
	if(!in_array($type,$arr)){
		$result["info"]="当前文件不符合上传要求";
		return $result;
	}


	//检测上传文件大小
	if($size>0 && $file["size"]>$size){
		$result["info"]="上传文件过大";
		return $result;
	}

	//判断是否是上传的文件
	//is_uploaded_file() 判断是否是上传的文件
	if(!is_uploaded_file($file["tmp_name"])){
		$result["info"]="不是上传的文件";
		return $result;
	}
	//执行文件移动到指定的目录
	$name=$file["name"];
	//截取扩展名
	$type=pathinfo($name,PATHINFO_EXTENSION);   
	//随机生成文件名
	$filename=uniqid().time().".".$type;
	//自动的每天生成一个文件夹
	$timename=date("Y-m-d",time());
	//拼接文件夹
	$pathdir=rtrim($path,"/")."/".$timename;
	//判断文件夹是否存在,不存在就创建
	if(!is_dir($pathdir)){
		mkdir($pathdir);
	}
	//生成一个保存的文件全名
	$fullpath=$pathdir."/".$filename;
	//将上传的文件移动到指定目录中
	if(move_uploaded_file($tmp,$fullpath)){
		$result["info"]="文件移动成功";
		$result["error"]=true;
		return $result;
	}else{
		$result["info"]="文件移动失败";
		return $result;
	}
	
}
?>