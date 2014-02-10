<?php
//<*>自定义函数，用于打印信息
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
////$pattern = '/d0f|d1f|d2f/';
//$replacement = 'A';

//$b = 'b';
//$subject = 'a[$b]';
////$pattern = '/\[([^\[\]]*)\]/is';
////$pattern = '/\[([^\[\]]*)\]/eis';
////$replacement = "'.'.str_replace('$','\$','\\1')";    //<*>【\$】也会被转义为【$】
////$pattern = '/\[([^\[\]]*)\]/eis';
////$replacement = "'.\\1'";
//$pattern = '/\[([^\[\]]*)\]/is';
//$replacement = '.$1';

//$subject = "\$smarty->assign('attribute_linked',    get_same_attribute_goods(\$properties));";
////$subject = "\$smarty->assign('properties',          \$properties['pro']);"; 
//$pattern = '/\$smarty\-\>assign\(\'([^\']*)\'\,\s*(.*)\)\;/';
//$replacement = '\$_O[\'$1\'] = $2;';

//$subject = '<?php  ?' . '>';
//$pattern = '/(\<\?php\s)(\s\?\>)/';
//$replacement = '$1SUCCESS!$2';

$moduleName = 'Admin';
$subject = 'Admin_CommonController';
$pattern = '/^' . $moduleName . '\_(.*)Controller$/';
//echo $pattern;exit;
$replacement = $moduleName . '_Model_Mapper_$1';

$result = preg_replace($pattern, $replacement, $subject);
echo $result;
//P($result);
?>