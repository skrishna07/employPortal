<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bradsol/style.css" media="screen, projection" />
	
	
	
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bradsol/jquery.dataTables.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bradsol/dataTables.responsive.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bradsol/bootstrap.min.css" media="screen, projection" />
	
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/script.js"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-latest.min.js" type="text/javascript"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.min.js" type="text/javascript"></script>
	<script type="text/javascript" charset="utf8"  src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.dataTables.js"></script>
	
	
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

    <div class="header-bs">
<div class="logo"><img class="img-responsive" src="<?php echo Yii::app()->request->baseUrl; ?>/img/bradsol.jpg" alt=""/></div>
	   <div class="ads">
	   
   <div id='cssmenu' style="margin-top:43px;">
		<ul>
		<li class='active'><a href='<?php echo $this->createUrl('site/index')?>'><span>Home</span></a></li>
	 <li class='has-sub'><a href='#'><span>Registration</span></a>
      <ul>
          <li><a href='<?php echo $this->createUrl('empRegistration/create')?>'><span>Create </span></a></li>
           <li><a href='<?php echo $this->createUrl('empRegistration/index')?>'><span>View </span></a></li>
           <li><a href='<?php echo $this->createUrl('empRegistration/admin')?>'><span>Search </span></a></li>
           
        
      </ul>
  	 </li>
  	  <li class='has-sub'><a href='#'><span>Documents</span></a>
      <ul>
          <li><a href='<?php echo $this->createUrl('empDocument/create')?>'><span>Create </span></a></li>
           <li><a href='<?php echo $this->createUrl('empDocument/index')?>'><span>View </span></a></li>
           <li><a href='<?php echo $this->createUrl('empDocument/admin')?>'><span>Search </span></a></li>
           
        
      </ul>
  	 </li>
  	  <li class='has-sub'><a href='#'><span>Helppage</span></a>
      <ul>
          <li><a href='<?php echo $this->createUrl('empHelppage/create')?>'><span>Create </span></a></li>
           <li><a href='<?php echo $this->createUrl('empHelppage/index')?>'><span>View </span></a></li>
           <li><a href='<?php echo $this->createUrl('empHelppage/admin')?>'><span>Search </span></a></li>
           
        
      </ul>
  	 </li>
  	 
	</ul>
	</div>
   
	   </div>
	   <div class="sign_in">
	   
 <?php if(Yii::app()->user->isGuest){?>
<div class="sign-in-absolute">
 
 <p><a href="<?php echo $this->createUrl('site/login')?>"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/signin.png" /></a></p>
</div>
<?php }else{?>
<div class="roe buttons"> 
        <?php echo CHtml::link('resetpassword',array('Empregistration/reset')); ?>
    </div>
<div class="logout-not-absolute">
<p>Welcome back !</p>



<p><a class="logout" href="<?php echo $this->createUrl('site/logout')?>"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/logout.png" /></a></p>
</div>
<?php }?>
	   
	   
	  
	    </div>
		<div style="clear:both;"></div>
	</div>
	
  
   
     


<div class="breadcroumb">
<span>
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>
</span>
</div>
<div class="container-fluid">
	<div class="col-md-3 left-body-sidemenu left-side-menu-margin-top">
	<?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'Operations',
		));
		$this->widget('zii.widgets.CMenu', array(
			'items'=>$this->menu,
			'htmlOptions'=>array('class'=>'operations'),
		));
		$this->endWidget();
	?>
	</div>
	<div class="col-md-9 body-content">
		
	<div class="col-md-12">
	
	<?php echo $content; ?>
	</div>
	
	
	

	</div>
	</div>
	<div class="footer">
	<div class="container-fluid">
	<div class="col-md-2 side-menu">
	
	</div>
	<div class="col-md-8 body-content">
	<p style="color:#fff; text-align:center;padding-top:10px;">Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/></p>
		
	</div>
	<div class="col-md-2 right-side-ads">
	
	
	</div>
	</div>
	</div>



</body>
</html>
