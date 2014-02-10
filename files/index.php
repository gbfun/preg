<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/front.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $_O['keywords']; ?>" />
<meta name="Description" content="<?php echo $_O['description']; ?>" />
<title><?php echo $_O['title']; //前端固定，一般通过后台赋值 ?></title>
<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="<?php echo $_O['wwy_css_path']; ?>" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="datas/js/transport.js"></script>
<script type="text/javascript" src="datas/js/utils.js"></script>
<script type="text/javascript" src="<?php echo $_O['wwy_js_path']; ?>common.js"></script>
<!-- InstanceBeginEditable name="head" -->
<style type="text/css">

</style>
<!-- InstanceEndEditable -->
</head>

<body>
    <?php echo $this->fetch('library/pageheader.php'); ?>
    
    <!--当前位置 start-->
    <div class="block box">
     <div id="ur_here">
         <?php echo $_O['lang']['ur_here']; ?><?php echo $_O['ur_here']; //模板自定义 ?>
     </div>
    </div>
    <!--当前位置 end-->
    <div class="blank"></div>
    
		<!-- InstanceBeginEditable name="main" -->
<div class="block clearfix">
  <!--left start-->
  <div class="AreaL">
  	<!-- #RegionBegin name="左边区域" -->
    <?php echo $this->fetch('library/category_tree.php'); ?>  
    
    <?php assign_cat_goods(array('cat_id' => 3, 'num' => 5)) ?>
	<?php echo $this->fetch('library/cat_goods.php'); ?>
    <!-- #RegionEnd -->
  </div>
  <!--left end--> 

  <!--right start-->
  <div class="AreaR">
  	<!-- #RegionBegin name="右边主区域" -->
  	<?php assign_cat_goods(array('cat_id' => 3, 'num' => 5)) ?>
	<?php echo $this->fetch('library/cat_goods.php'); ?>
    
    <?php assign_cat_goods(array('cat_id' => 4, 'num' => 5)) ?>
	<?php echo $this->fetch('library/cat_goods.php'); ?>
    
    <?php assign_cat_goods(array('cat_id' => 6, 'num' => 5)) ?>
	<?php echo $this->fetch('library/cat_goods.php'); ?>
	<!-- #RegionEnd -->  
  </div>
  <!--right end-->        
</div> 
<div class="blank5"></div>         
        <!-- InstanceEndEditable -->
    
    <?php echo $this->fetch('library/pagefooter.php'); ?>
    <?php echo $this->fetch('library/loader.php'); ?>
</body>
<!-- InstanceEnd --></html>