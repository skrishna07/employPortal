<?php

class EmpDocumentController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/main';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','index','view','admin','download','DownloadFiles'),
				'roles'=>array('general',),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete','update','download','DownloadFiles'),
				'roles'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new EmpDocument();
		//$model1=new EmpDocTags();
		$tagsList = "";
		
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['EmpDocument']))
		{
	
			$model->attributes=$_POST['EmpDocument'];
			$date=time();
			
			$model->createdate=date("Y-m-d",$date);
			$model->updatedate=date("Y-m-d",$date);
			$uploadedFile=CUploadedFile::getInstance($model,'document');
			
			if(isset($uploadedFile)){
				$model->document=$uploadedFile;
			}
			$model->save();
			if($model->validate()){
			
			
				$uploadedFile->saveAs(Yii::app()->basePath.Constants::$FILES_PATH.$uploadedFile->name);
			}
			$model2=new EmpDocTags();
			$model2->attributes=$_POST['EmpDocument'];
		$tags=$model2->tags;
			$tag=explode(',', $tags);
			
			for($i=0;$i<count($tag);$i++)
			{
			
			//$model->menu_id=$menus[$i];
			$model2->doc_id=$model->doc_id;
			$model2->tags=$tag[$i];
			if($model2->save()){
			$valid = true;
			}else{
				$valid = false;
			}	
			
			
			}
				
			if($valid)
				$this->redirect(array('admin'));
			}
		
		$this->render('create',array(
			'model'=>$model,'tagsList'=>$tagsList
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$tags=array();
		$model=$this->loadModel($id);
		$tagsList="";
		$value=EmpDocTags::model()->findAllByAttributes( array(
				'doc_id'=>$id,
		));
		foreach($value as $value)
		{
			$tags[]=$value->tags;
			
		}
		$tagsList=implode(',', $tags);
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['EmpDocument']))
		{
			$model->attributes=$_POST['EmpDocument'];
			$date=time();
			
			
			$model->updatedate=date("Y-m-d",$date);
			
			$uploadedFile=CUploadedFile::getInstance($model,'document');
				
			if(isset($uploadedFile)){
				$model->document=$uploadedFile;
			}
			$model->save();
			if($model->validate()){
					
					
				$uploadedFile->saveAs(Yii::app()->basePath.Constants::$FILES_PATH.$uploadedFile->name);
			}
			$model2=new EmpDocTags();
			$model2->attributes=$_POST['EmpDocument'];
			$tags=$model2->tags;
			$tag=explode(',', $tags);
		
		
			
			
			for($i=0;$i<count($tag);$i++)
			{
			
			//$model->menu_id=$menus[$i];
			$model2->doc_id=$model->doc_id;
			$model2->tags=$tag[$i];
			if($model2->save()){
			$valid = true;
			}else{
				$valid = false;
			}
			
			
			}
				
			if($valid)
				$this->redirect(array('admin'));
			}
	

		$this->render('update',array(
			'model'=>$model,
			'tagsList'=>$tagsList
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	
	public function actionDelete()
		{
		if (isset($_POST['id']))
		{
	
		$id = $_POST['id'];
	
	$value=EmpDocTags::model()->findAllByAttributes( array(
                        'doc_id'=>$id,
                ));
	foreach($value as $value)
	{
	$tag_id=$value->tag_id;
	$this->loadModel1($tag_id)->delete();
	}
		
		$this->loadModel($id)->delete();
	
	
	
	
		}
		}
		
	

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('EmpDocument');
		$data=new CActiveDataProvider('EmpDocTags');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$id=array();
		$model = EmpDocument::model()->findAll();
		foreach($model as $value)
		{
			
		$id[]=$value->doc_id;
		
			
		}
		$model2=EmpDocTags::model()->findAllByAttributes( array(
				'doc_id'=>$id,	));
			
		$this->render('admin',array(
				'model'=>$model,'model2'=>$model2
					
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return EmpDocument the loaded model
	 * @throws CHttpException
	 */
	public function loadModel1($id)
	{
		$model=EmpDocTags::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}
	public function loadModel($id)
	{
		$model=EmpDocument::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param EmpDocument $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='emp-document-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
	
public function actionDownload() {
	$id = $_POST['id'];
    $model = EmpDocument::model()->findByPk($id);
      $path = Yii::app()->basePath.Constants::$FILES_PATH.$model->document;
      $f1 = fopen($path,'r');
      $fcontent = stream_get_contents($f1);
      fclose($f1);
      
      $fileName =$model->document;
      
      $f2 = fopen(Yii::app()->basePath.'/downloades/'.$fileName,'c+');
     // if(fwrite($f2,$fcontent,strlen($fcontent)))
     // {
      	//Yii::app()->user->setFlash('success', "successfully downloaded in".Yii::app()->basePath.'/downloades/'.$fileName);
      	//$this->redirect(array('view','id'=>$model->doc_id));
      //fclose($f2);
      
     // }
    
     
   }
   public function actionDownloadFiles($id)
   {
   	
   	$model = EmpDocument::model()->findByPk($id);
   	$src = Yii::app()->basePath.Constants::$FILES_PATH.$model->document;
   	if(@file_exists($src)) {
   		$path_parts = @pathinfo($src);
   		//$mime = $this->__get_mime($path_parts['extension']);
   		header('Content-Description: File Transfer');
   		header('Content-Type: application/octet-stream');
   		//header('Content-Type: '.$mime);
   		header('Content-Disposition: attachment; filename='.basename($src));
   		header('Content-Transfer-Encoding: binary');
   		header('Expires: 0');
   		header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
   		header('Pragma: public');
   		header('Content-Length: ' . filesize($src));
   		ob_clean();
   		flush();
   		readfile($src);
   	}
   	 else {
   		header("HTTP/1.0 404 Not Found");
   		exit();
   	}
   
   }
}