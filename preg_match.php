<?php
function P($data)
{
	header("Content-Type:text/html; charset=utf-8");
	echo "<pre>\n";
	print_r($data);
	echo "</pre>\n";
	exit;
}

//$subject = ",d0f,d1f,d2f,";
//$pattern = '/d([0-9])f/';

//$subject = "item[]";
//$pattern = '/(.*)(\[([0-9])*\])$/';

//$subject = "2013年4月19日 15:38:11";
//$pattern = '/(\d{2})年(\d{1,2})月(\d{1,2})日\s(\d{1,2}):(\d{1,2}):(\d{1,2})/u';
//$subject = '东8区 今天 05:08 02:00';
//$pattern = '/东8区\s.*(\d{1,2}):(\d{1,2}?)/uU';
//$subject = '服务器时间:2013年04月09日';
//$pattern = '/服务器时间:(\d{4})年(\d{1,2})月(\d{1,2})日/u';

$subject = '/library/cat_goods.php';
$pattern = '/\/library\/(.*?)\.php$/U';

$count = preg_match($pattern, $subject, $matches);
//$count = preg_match($pattern, $subject, $matches, PREG_OFFSET_CAPTURE);
if ($count > 0)
{
	echo '匹配成功！' . "\n";
	P($matches);
}
else 
{
	echo '匹配失败！' . "\n";
}
?> 