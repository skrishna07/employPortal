<?php

/**
 * This is the model class for table "emp_registration".
 *
 * The followings are the available columns in table 'emp_registration':
 * @property integer $emp_id
 * @property string $emp_username
 * @property string $emp_password
 * @property string $emp_firstname
 * @property string $emp_lastname
 * @property string $emp_email
 * @property string $emp_mobno
 * @property string $emp_gender
 * @property string $emp_father_hus_name
 * @property string $emp_dob
 * @property string $emp_image
 * @property string $emp_identityproof
 * @property string $emp_presentaddress
 * @property string $emp_permenentaddress
 * @property string $emp_pancard
 * @property string $emp_passport
 * @property string $emp_role
 * @property string $createdate
 * @property string $updatedate
 */
class EmpRegistration extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return EmpRegistration the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'emp_registration';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('emp_username, emp_password, emp_firstname, emp_lastname, emp_email, emp_mobno, emp_gender, emp_father_hus_name, emp_dob, emp_image, emp_identityproof, emp_presentaddress, emp_permenentaddress, emp_pancard, emp_passport, createdate, updatedate', 'required'),
			array('emp_username, emp_password, emp_firstname, emp_lastname, emp_email, emp_mobno, emp_father_hus_name, emp_dob, emp_image, emp_identityproof, emp_presentaddress, emp_permenentaddress, emp_role, createdate, updatedate', 'length', 'max'=>30),
				array('emp_mobno','numerical', 'integerOnly'=>true),
			
				array('emp_email','email'),
				array('emp_username','unique'),
				array('emp_gender', 'length', 'max'=>1),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('emp_id, emp_username, emp_password, emp_firstname, emp_lastname, emp_email, emp_mobno, emp_gender, emp_father_hus_name, emp_dob, emp_image, emp_identityproof, emp_presentaddress, emp_permenentaddress, emp_pancard, emp_passport, emp_role, createdate, updatedate', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'emp_id' => 'Emp',
			'emp_username' => 'Emp Username',
			'emp_password' => 'Emp Password',
			'emp_firstname' => 'Emp Firstname',
			'emp_lastname' => 'Emp Lastname',
			'emp_email' => 'Emp Email',
			'emp_mobno' => 'Emp Mobno',
			'emp_gender' => 'Emp Gender',
			'emp_father_hus_name' => 'Emp Father Hus Name',
			'emp_dob' => 'Emp Dob',
			'emp_image' => 'Emp Image',
			'emp_identityproof' => 'Emp Identityproof',
			'emp_presentaddress' => 'Emp Presentaddress',
			'emp_permenentaddress' => 'Emp Permenentaddress',
			'emp_pancard' => 'Emp Pancard',
			'emp_passport' => 'Emp Passport',
			'emp_role' => 'Emp Role',
			'createdate' => 'Createdate',
			'updatedate' => 'Updatedate',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('emp_id',$this->emp_id);
		$criteria->compare('emp_username',$this->emp_username,true);
		$criteria->compare('emp_password',$this->emp_password,true);
		$criteria->compare('emp_firstname',$this->emp_firstname,true);
		$criteria->compare('emp_lastname',$this->emp_lastname,true);
		$criteria->compare('emp_email',$this->emp_email,true);
		$criteria->compare('emp_mobno',$this->emp_mobno,true);
		$criteria->compare('emp_gender',$this->emp_gender,true);
		$criteria->compare('emp_father_hus_name',$this->emp_father_hus_name,true);
		$criteria->compare('emp_dob',$this->emp_dob,true);
		$criteria->compare('emp_image',$this->emp_image,true);
		$criteria->compare('emp_identityproof',$this->emp_identityproof,true);
		$criteria->compare('emp_presentaddress',$this->emp_presentaddress,true);
		$criteria->compare('emp_permenentaddress',$this->emp_permenentaddress,true);
		$criteria->compare('emp_pancard',$this->emp_pancard,true);
		$criteria->compare('emp_passport',$this->emp_passport,true);
		$criteria->compare('emp_role',$this->emp_role,true);
		$criteria->compare('createdate',$this->createdate,true);
		$criteria->compare('updatedate',$this->updatedate,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

   
 
 
    //Define the rules for old_password, new_password and repeat_password with changePwd Scenario.
 
   
	
	
	//matching the old password with your existing password.
	
}