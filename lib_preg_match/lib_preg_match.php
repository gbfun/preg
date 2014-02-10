<?php 
function  preg_match_name($subject)
{
	$pattern_name = '/^[\x{4e00}-\x{9fa5}]{1,5}$|^[A-Za-z][A-Za-z ]{0,8}[A-Za-z]$|^[A-Za-z]{1,10}$/u';
	$count        = preg_match($pattern_name, $subject);
	return $count;
}

function preg_match_username($subject)
{
	$pattern_username = '/^[a-zA-Z][a-zA-Z0-9_]{4,15}$/';
	$count            = preg_match($pattern_username, $subject);	
	return $count;
}


function preg_match_email($subject)
{
	$pattern_email = '/^([a-zA-Z0-9]+)([\-\._][a-zA-Z0-9]+)*@([a-zA-Z0-9]+)([\-\.][a-zA-Z0-9]+)*(\.[a-z]+)$/';
	$count         = preg_match($pattern_email, $subject);
	return $count;
}

function preg_match_password($subject)
{
	$result = strlen($subject) >= 6 && strlen($subject) <= 32;
	
	$pattern_password_1 = '/[a-zA-Z]+/';
	$count1             = preg_match($pattern_password_1, $subject);

	$pattern_password_2 = '/[0-9]+/';
	$count2             = preg_match($pattern_password_2, $subject);
	
	$result = $result && $count1 && $count2;
	
	return $result;
}

function preg_match_date($subject)
{
	$pattern_date = '/^(\d{4})\-(0[1-9]|1[0-2])\-(0[1-9]|[1-2][0-9]|3[0-1])$/';
	$count        = preg_match($pattern_date, $subject);
	return $count;
}

function preg_match_time($subject)
{
	$pattern_time = '/^\d{2}:\d{2}$/';
	$count        = preg_match($pattern_time, $subject);
	return $count;
}

function preg_match_date_time($subject)
{
	$pattern_date_time = '/^\d{4}\-\d{2}\-\d{2} \d{2}:\d{2}$/';
	$count             = preg_match($pattern_date_time, $subject);
	return $count;
}

function preg_match_qq($subject)
{
	$pattern_qq = '/^[1-9][0-9]{4,}$/';
	$count      = preg_match($pattern_qq, $subject);
	return $count;
}

function preg_match_telephone($subject)
{
	$pattern_telephone = '/^\d{4}-\d{7,8}$|^\d{3}-\d{8}$/';
	$count             = preg_match($pattern_telephone, $subject);
	return $count;
}

function preg_match_mobilephone($subject)
{
	$pattern_mobilephone = '/^((\(\d{3}\))|(\d{3}\-))?\d{11}$|^\d{9}$/';
	$count               = preg_match($pattern_mobilephone, $subject);
	return $count;
}

function preg_match_id_number($subject)
{
	$pattern_id_number = '/^\d{17}[\d|X]$|^\d{15}$/';
	$count             = preg_match($pattern_id_number, $subject);
	return $count;
}


/**
 * 执行函数
 */
//姓名
//$type  = '姓名';
//$name1 = '一二三四五';
//$name2 = 'Bill Gates';
//$count = preg_match_name($name1);

//用户名
//$type     = '用户名';
//$username = 'Steve_Jobs';
//$count    = preg_match_username($username);

//Email
//$type  = 'Email';
//$email = 'gbfun-01.02_03@163-01-02.net.com.cn';
//$count = preg_match_email($email);

//password
$type     = 'password';
$password = 'password';
$count    = preg_match_password($password);

//日期
//$type  = '日期';
//$date  = '2012-02-15';
//$count = preg_match_date($date);

//时间
//$type  = '时间';
//$time  = '12:00';
//$count = preg_match_time($time);

//日期时间
//$type      = '日期时间';
//$date_time = '2012-02-15 12:00';
//$count     = preg_match_date_time($date_time);

//QQ
//$type  = 'QQ';
//$qq    = '305611450';
//$count = preg_match_qq($qq);

//固定电话号码
//$type  = '固定电话';
//$telephone = '0511-4405222';
//$count = preg_match_telephone($telephone);

//手机号码
//$type        = '手机号码';
//$mobilephone = '086-15070979003';
//$count       = preg_match_mobilephone($mobilephone);

//身份证号码
//$type      = '身份证号码';
//$id_number = '55555555555555555X';
//$count     = preg_match_id_number($id_number);
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>preg_match</title>
</head>
<body>
<?php 
if ($count)
{
	echo '匹配<b><font color=red>' . $type. '</font></b>成功！';
}
else 
{
	echo '匹配<b><font color=red>' . $type. '</font></b>失败！';
}
?>
</body>
</html>


