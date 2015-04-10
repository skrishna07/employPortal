<?php

class EmpHelppageController extends Controller
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
				'actions'=>array('create','update','view','index','admin'),
				'roles'=>array('general'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('create','update','view','index','admin','delete'),
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
		$model=new EmpHelppage;
		$taglist="";

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['EmpHelppage']))
		{
			$model->attributes=$_POST['EmpHelppage'];
			$date=time();
			
			$model->createdate=date("Y-m-d",$date);
			$model->updateddate=date("Y-m-d",$date);
			$model->save();
			
		$model1=new EmpHelppageTags();
		$model1->attributes=$_POST['EmpHelppage'];
		$tags=$model1->tags;
			$tag=explode(',', $tags);
			
			for($i=0;$i<count($tag);$i++)
			{
			$model2=new EmpHelppageTags();
			//$model->menu_id=$menus[$i];
			$model2->page_id=$model->page_id;
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
			'model'=>$model,'taglist'=>$taglist
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$taglist="";
		$model=$this->loadModel($id);
		$value=EmpHelppageTags::model()->findAllByAttributes( array(
				'page_id'=>$id,
		));
		foreach($value as $value)
		{
			$tags[]=$value->tags;
		}
		
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		$taglist=implode(',', $tags);
		if(isset($_POST['EmpHelppage']))
		{
			$model->attributes=$_POST['EmpHelppage'];
			$date=time();
			$model->updateddate=date("Y-m-d",$date);
			$model2=new EmpHelppageTags();
		$model2->attributes=$_POST['EmpHelppage'];
		$tags=$model2->tags;
			$tag=explode(',', $tags);
			
			for($i=0;$i<count($tag);$i++)
			{
			
			//$model->menu_id=$menus[$i];
			$model2->page_id=$model->page_id;
			$model2->tags=$tag[$i];
			if($model2->save()&&$model->save()){
			$valid = true;
			}else{
				$valid = false;
			}
			
			
			}
				
			if($valid)
				$this->redirect(array('admin'));
			}

		$this->render('update',array(
			'model'=>$model,'taglist'=>$taglist
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
	
	$value=EmpHelppageTags::model()->findAllByAttributes( array(
                        'page_id'=>$id,
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
		$dataProvider=new CActiveDataProvider('EmpHelppage');
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
		$model = EmpHelppage::model()->findAll();
		foreach($model as $value)
		{
			
		$id[]=$value->page_id;
		
			
		}
		$model2=EmpHelppageTags::model()->findAllByAttributes( array(
				'page_id'=>$id,	));
			
		$this->render('admin',array(
				'model'=>$model,'model2'=>$model2
					
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return EmpHelppage the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=EmpHelppage::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}
	public function loadModel1($id)
	{
		$model=EmpHelppageTags::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}
	/**
	 * Performs the AJAX validation.
	 * @param EmpHelppage $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='emp-helppage-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
