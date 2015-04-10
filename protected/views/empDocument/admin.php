<?php
/* @var $this EmpDocumentController */
/* @var $model EmpDocument */

$this->breadcrumbs=array(
	'Emp Documents'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List EmpDocument', 'url'=>array('index')),
	array('label'=>'Create EmpDocument', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#emp-document-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Emp Documents</h1>


<html>
<head>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bradsol/jquery.dataTables.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bradsol/dataTables.responsive.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bradsol/bootstrap.min.css" media="screen, projection" />
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-latest.min.js" type="text/javascript"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.min.js" type="text/javascript"></script>
	<script type="text/javascript" charset="utf8"  src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.dataTables.js"></script>
	
	
<script type="text/javascript">
$(document).ready( function () {
    $('#table_id').DataTable({
    	responsive: true});
} );
</script>



<script type="text/javascript">
$(document).ready(function() {
	$(".download").on('click', function () {
	alert("jenje");
		var url = $('#appURL').val();
	
	    
	    var id = $(this).data('id');
       
	    $.ajax({
	   type: "POST",
	   data: {id:id},
	   url:url,
	   success: function(msg){
		   alert('success')
		   window.location.reload();
	   }
	});
	});
});
</script>

<script type="text/javascript">
$(document).ready(function() {
	$(".delete_sin").on('click', function () {
	
	
		var url = $('#app1URL').val();
	
	    
	    var id = $(this).data('id');
       
	    $.ajax({
	   type: "POST",
	   data: {id:id},
	   url:url,
	   success: function(msg){
		   alert('success')
		   window.location.reload();
	   }
	});
	});
});
</script>
</head>
<body>

<input type="hidden" id="appURL"  value="<?php echo $this->createUrl

('empDocument/downloadFiles')?>"/>

<input type="hidden" id="app1URL"  value="<?php echo $this->createUrl

('empDocument/delete')?>"/>
<table id="table_id" class="display">
    <thead>
        <tr>
        
            <th>id </th>
            <th>document</th>
            <th>tags</th>
            <th>uploaded</th>
            <th>createdate</th>
            <th>updatedate</th>
           <th>options</th>
       
        </tr>
    </thead>
    <tbody>
  
  <?php foreach($model as $value)
  {
  	?>
  <tr>
            <td><?php echo $value->doc_id?></td>
             <td><?php echo $value->document?></td>
            
             <td> <?php  
            
               foreach($model2 as $value2)
               {
               	if($value->doc_id==$value2->doc_id)
               	{
                echo $value2->tags.","; 
               	}
               	
               }
               ?>
               </td>
               
            <td><?php echo $value->doc_uploadedby?></td>
             <td><?php echo $value->createdate?></td>
               <td><?php echo $value->updatedate?></td>
           <td><a href="view/<?php echo $value->doc_id?>"><img style="width:25px;height:25px" src="<?php echo Yii::app()->request->baseUrl; ?>/img/view.jpg"/></a><br>
               <a href="" data-id="<?php echo $value->doc_id?>" class="delete_sin"><img style="width:25px;height:25px" src="<?php echo Yii::app()->request->baseUrl; ?>/img/delete.jpg"/></a><br>
               <a href="update/id/<?php echo $value->doc_id?>"><img style="width:25px;height:25px" src="<?php echo Yii::app()->request->baseUrl; ?>/img/update.jpg"/></a><br>
                            </td>
               
              </tr>
               
    <?php 
  }
    ?>
    
          
       
        
  
 
    </tbody>
</table>

</body>
</html>