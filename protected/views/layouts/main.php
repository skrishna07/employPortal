<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-latest.min.js" type="text/javascript"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/script.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->

	<!-- <div id="mainmenu">
		<?php 
// 		$this->widget('zii.widgets.CMenu',array(
// 			'items'=>array(
// 				array('label'=>'Home', 'url'=>array('/site/index')),
// 				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
// 				array('label'=>'Contact', 'url'=>array('/site/contact')),
// 				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
// 				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
// 			),
// 		)); 
?>
	</div>mainmenu -->
	
	<div id='cssmenu'>
		<ul>
		<li class='active'><a href='<?php echo $this->createUrl('site/index')?>'><span>Home</span></a></li>
	<li class='has-sub'><a href='#'><span>Pages</span></a>
      <ul>
          <li><a href='<?php echo $this->createUrl('cfPages/create')?>'><span>Create Page</span></a></li>
           <li><a href='<?php echo $this->createUrl('cfPages/index')?>'><span>View Page</span></a></li>
           <li class='last'><a href='<?php echo $this->createUrl('cfPages/admin')?>'><span>Search Page</span></a></li>
      </ul>
  	 </li>
  	 <li class='has-sub'><a href='#'><span>Filters</span></a>
      <ul>
          <li><a href='<?php echo $this->createUrl('cfFilters/create')?>'><span>Create Filter</span></a></li>
           <li><a href='<?php echo $this->createUrl('cfFilters/index')?>'><span>View Filter</span></a></li>
           <li class='last'><a href='<?php echo $this->createUrl('cfFilters/admin')?>'><span>Search Filter</span></a></li>
      </ul>
  	 </li>
  	 <li class='has-sub'><a href='#'><span>Catalogue</span></a>
      <ul>
          <li><a href='<?php echo $this->createUrl('cfCatalogue/create')?>'><span>Create Catalogue</span></a></li>
           <li><a href='<?php echo $this->createUrl('cfCatalogue/index')?>'><span>View Catalogue</span></a></li>
           <li><a href='<?php echo $this->createUrl('cfCatalogue/admin')?>'><span>Search Catalogue</span></a></li>
           
          <!--   <li class='has-sub'><a href='#'><span>Images</span></a>
	      <ul>
	          <li><a href='<?php //echo $this->createUrl('cfImages/create')?>'><span>Add Image to Catalogue</span></a></li>
	           <li><a href='<?php //echo $this->createUrl('cfImages/index')?>'><span>View Images</span></a></li>
	           <li class='last'><a href='<?php //echo $this->createUrl('cfImages/admin')?>'><span>Search Images</span></a></li>
	      </ul>
	  	 </li>
	  	 <li class='has-sub'><a href='#'><span>Videos</span></a>
	      <ul>
	          <li><a href='<?php //echo $this->createUrl('cfVideos/create')?>'><span>Add Video to Catalogue</span></a></li>
	           <li><a href='<?php //echo $this->createUrl('cfVideos/index')?>'><span>View Videos</span></a></li>
	           <li class='last'><a href='<?php //echo $this->createUrl('cfVideos/admin')?>'><span>Search Videos</span></a></li>
	      </ul>
	  	 </li>
-->	  	 
      </ul>
  	 </li>
  	 
	</ul>
	</div>
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
