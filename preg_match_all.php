<?php
//<*>自定义函数，用于打印信息
function P($data, $is_exit = 1)
{
	header("Content-Type:text/html; charset=utf-8");
	echo "<pre>\n";
	print_r($data);
	echo "</pre><hr/>\n";
	if($is_exit)
	{
		exit();
	}
}

//$pattern = '/<[^>]+>(.*)<\/[^>]+>/U';
//$subject = "<b>example: </b><div align=left>this is a test</div>";
//preg_match_all($pattern, $subject, $matches, PREG_PATTERN_ORDER);
//$count = preg_match_all($pattern, $subject, $matches, PREG_SET_ORDER);
//$count = preg_match_all($pattern, $subject, $matches, PREG_OFFSET_CAPTURE);
//echo $matches[0][0] . ", " . $matches[0][1] . "\n";
//echo $matches[1][0] . ", " . $matches[1][1] . "\n";

//$pattern = '/d([0-9])f/';
//$subject = ",d0f,d1f,d2f,";

//$pattern = '/^[1-9]\d*|0$/';
//$subject = "0";

//$pattern = '/^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/';
//$subject = 'pdodge@126.com';

//$subject = ",d0f,d1f,d2f,";
//$pattern = '/d([0-9])f/';
////$pattern = '/d0f|d1f|d2f/';

//$subject = '<hr/>{$lang.shop_price}<hr/>{$lang.shop_price.shop}<hr/>{$sort_shop_price}<hr/>';
//$pattern = '/\{\$([^\}\.]+)((\.([^\}\.]+))*)\}/';

////$subject = "\$smarty->assign('attribute_linked',    get_same_attribute_goods(\$properties));";
//$subject = "\$smarty->assign('properties',          \$properties['pro']);"; 
//$pattern = '/\$smarty\-\>assign\(\'([^\']*)\'\,\s*(.*)\)\;/';

//$subject = '<div><!-- #RegionBegin name="左边区域" --><!-- #RegionEnd --></div><div><!-- #RegionBegin name="右边主区域" --><!-- #RegionEnd --></div>'; 
//$pattern = '/(<!--\\s*\#RegionBegin\\sname=")([^"]+)("\\s*-->)/';

//$subject = '<?php ?' . '>';
//$pattern = '/\<\?php \?\>/';
//$subject = '<?php assign_cat_goods(3, 5) ?' . '>';
//$pattern = '/\<\?php\\s*assign_cat_goods\((.*)\)\\s*\?\>/';
//$subject = '<?php echo $this->fetch(\'library/cat_goods.php\'); ?' . '>'; 
//$pattern = '/\<\?php\\s*echo\\s*\\$this\-\>fetch\(\'library\/cat_goods\.php\'\)\; \?\>/';
//$subject = '<?php assign_cat_goods(3, 5) ?' . '>
//<?php echo $this->fetch(\'library/cat_goods.php\'); ?' . '>';
$subject = file_get_contents('./files/index.php');
//$pattern = '/\<\?php\\s*assign_([^\(]*)\((.*)\)\\s*\?\>\\s*\<\?php\\s*echo\\s*\\$this\-\>fetch\(\'library\/\1\.php\'\)\;\\s*\?\>/';
$pattern = '/(\<\?php\\s*assign_([^\(]*)\((.*)\)\\s*\?\>\\s*)?\<\?php\\s*echo\\s*\\$this\-\>fetch\(\'(library\/(.*)\.php)\'\)\;\\s*\?\>/';


//$count = preg_match_all($pattern, $subject, $matches, PREG_PATTERN_ORDER^PREG_OFFSET_CAPTURE);
$count = preg_match_all($pattern, $subject, $matches, PREG_SET_ORDER);
if ($count > 0)
{
	foreach ($matches AS $k => $v)
	{
		if (!empty($v[3]))
		{			
			eval('$params = ' . $v[3].';');
			print_r($params);
		}
	}
	//exit();
	echo "\n<hr/>\n";
	
	echo '匹配成功！' . "\n";
	P($matches);
}
else 
{
	echo '匹配失败！' . "\n";
}
?>