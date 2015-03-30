<?php

/**
 * This is the model class for table "emp_helppage".
 *
 * The followings are the available columns in table 'emp_helppage':
 * @property integer $page_id
 * @property string $content
 * @property string $content_uploadedby
 * @property string $createdate
 * @property string $updateddate
 *
 * The followings are the available model relations:
 * @property EmpHelppageTags[] $empHelppageTags
 */
class EmpHelppage extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return EmpHelppage the static model class
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
		return 'emp_helppage';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('content, content_uploadedby, createdate, updateddate', 'required'),
			array('content_uploadedby, createdate, updateddate', 'length', 'max'=>30),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('page_id, content, content_uploadedby, createdate, updateddate', 'safe', 'on'=>'search'),
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
			'empHelppageTags' => array(self::HAS_MANY, 'EmpHelppageTags', 'page_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'page_id' => 'Page',
			'content' => 'Content',
			'content_uploadedby' => 'Content Uploadedby',
			'createdate' => 'Createdate',
			'updateddate' => 'Updateddate',
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

		$criteria->compare('page_id',$this->page_id);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('content_uploadedby',$this->content_uploadedby,true);
		$criteria->compare('createdate',$this->createdate,true);
		$criteria->compare('updateddate',$this->updateddate,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}