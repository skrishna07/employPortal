<?php

class EmpRegistrationController extends Controller
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
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('create','forget','reset'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('index','view','changepassword','admin','update'),
				'roles'=>array('general'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete','update'),
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
		$model=new EmpRegistration;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['EmpRegistration']))
		{
			$model->attributes=$_POST['EmpRegistration'];
		
			
			$date=time();
		
			$model->createdate=date("Y-m-d",$date);
			$model->updatedate=date("Y-m-d",$date);
			
			$model->emp_username =strtolower(substr($model->emp_firstname,0,1).$model->emp_lastname);
			$model->emp_password = "password";
			$uploadedFile=CUploadedFile::getInstance($model,'emp_image');
			$uploadedFile1=CUploadedFile::getInstance($model,'emp_identityproof');
			if(isset($uploadedFile)){
				$model->emp_image=$uploadedFile;
				$model->emp_identityproof=$uploadedFile1;
			}
			if($model->save())
			{
				Yii::app()->user->setFlash('error', "old password and new password same");
			}
			if($model->validate()){
			
			
				$uploadedFile->saveAs(Yii::app()->basePath.Constants::$IMAGES_PATH.$uploadedFile->name);
				$uploadedFile1->saveAs(Yii::app()->basePath.Constants::$IMAGES_PATH.$uploadedFile1->name);
			
			
				$to=$model->emp_email;
				$from='srikrishna.mekala@brasol.com';
				$subject="";
				$message="";
				
				$this->mailsend($to,$from,$subject,$message);
				
				$this->redirect(array('view','id'=>$model->emp_id));
			}
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}
	public function mailsend($to,$from,$subject,$message){
		$mail=Yii::app()->Smtpmail;
		$mail->SetFrom($from, 'From NAme');
		$mail->Subject    = $subject;
		$mail->MsgHTML($message);
		$mail->AddAddress($to, "");
		if(!$mail->Send()) {
			echo "Mailer Error: " . $mail->ErrorInfo;
		}else {
			echo "Message sent!";
		}
		$mail->ClearAddresses(); //clear addresses for next email sending
	}
	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['EmpRegistration']))
		{
			
			$model->attributes=$_POST['EmpRegistration'];
			$date=time();
			$model->updatedate=date("m-d-Y",$date);
			$uploadedFile=CUploadedFile::getInstance($model,'emp_image');
			$uploadedFile1=CUploadedFile::getInstance($model,'emp_identityproof');
			if(isset($uploadedFile)){
				$model->emp_image=$uploadedFile;
				$model->emp_identityproof=$uploadedFile1;
			}
			$model->save();
			if($model->validate()){
					
					
				$uploadedFile->saveAs(Yii::app()->basePath.Constants::$IMAGES_PATH.$uploadedFile->name);
				$uploadedFile1->saveAs(Yii::app()->basePath.Constants::$IMAGES_PATH.$uploadedFile1->name);
					
					
			
				$this->redirect(array('view','id'=>$model->emp_id));
		}
		}
		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('EmpRegistration');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new EmpRegistration('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['EmpRegistration']))
			$model->attributes=$_GET['EmpRegistration'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return EmpRegistration the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=EmpRegistration::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}
	private function randomPassword() {
		$alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
		$pass = array(); //remember to declare $pass as an array
		$alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
		for ($i = 0; $i < 8; $i++) {
			$n = rand(0, $alphaLength);
			$pass[] = $alphabet[$n];
		}
		return implode($pass); //turn the array into a string
	}
	
	
	/**
	 * Performs the AJAX validation.
	 * @param EmpRegistration $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='emp-registration-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
public function actionreset()
 {      
  
   
$model=new EmpRegistration();

 if (isset($_POST['old_password']))
		{
	
		$oldid = $_POST['old_password'];
		$record=EmpRegistration::model()->findByAttributes(array('emp_password' =>$oldid));
		if(empty($record))
		{
					
			Yii::app()->user->setFlash('error', "INVALID PASSWORD");
		
					
			
		}
		else if($_POST['new_password']==$_POST['old_password'])
		{
			Yii::app()->user->setFlash('error', "old password and new password same");
		}
		else if($_POST['new_password']!=$_POST['confirm_password'])
		{
			Yii::app()->user->setFlash('error', "new password and confirm password does not matched");
		}
		else{
		$newPassword = $_POST['new_password'];
		$userid= Yii::app()->user->getState("user_id");
		
		$model=$this->loadModel($userid);
		
		$model->emp_password =$_POST['new_password'];
		if($model->save())
				$this->redirect(array('view','id'=>$model->emp_id));
	
		}
		}
	
	
		$this->render('reset',array(
			'model'=>$model,
		));
	
 }
	
	
	public function actionForget() {
		
			$record=EmpRegistration::model()->findByAttributes(array('emp_email' => Yii::app()->request->getPost('email')));
			if ($record != NULL) {if(isset($_POST['email'])) {
				
				$to=Yii::app()->request->getPost('email');
				$from='srikrishna.mekala@bradsol.com';
				$subject="hello";
				$message="hello";
				
				$this->mailsend($to,$from,$subject,$message);
				
			}
		}
				
		$this->render('password'); //show the view with the password field}}
		Yii::app()->user->setFlash('info', "Enter a valid e-mail!");
		
		}
public function actionDownload($id) {
    $model = EmpRegistration::model()->findByPk($id);
      $path = Yii::app()->basePath.Constants::$IMAGES_PATH.$model->emp_image;
      $f1 = fopen($path,'r');
      $fcontent = stream_get_contents($f1);
      fclose($f1);
      
      $fileName =$model->emp_image;
      
      $f2 = fopen(Yii::app()->basePath.'/downloades/'.$fileName,'c+');
      if(fwrite($f2,$fcontent,strlen($fcontent)))
      {
      	Yii::app()->user->setFlash('success', "successfully downloaded in".Yii::app()->basePath.'/downloades/'.$fileName);
      	$this->redirect(array('view','id'=>$model->emp_id));
      fclose($f2);
      
      }
   }
		
}