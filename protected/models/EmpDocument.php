<?php

/**
 * This is the model class for table "emp_document".
 *
 * The followings are the available columns in table 'emp_document':
 * @property integer $doc_id
 * @property string $document
 * @property string $doc_uploadedby
 * @property string $createdate
 * @property string $updatedate
 *
 * The followings are the available model relations:
 * @property EmpDocTags[] $empDocTags
 */
class EmpDocument extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return EmpDocument the static model class
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
		return 'emp_document';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('document, doc_uploadedby, createdate, updatedate', 'required'),
			array('document, doc_uploadedby, createdate, updatedate', 'length', 'max'=>30),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('doc_id, document, doc_uploadedby, createdate, updatedate', 'safe', 'on'=>'search'),
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
			'empDocTags' => array(self::HAS_MANY, 'EmpDocTags', 'doc_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'doc_id' => 'Doc',
			'document' => 'Document',
			'doc_uploadedby' => 'Doc Uploadedby',
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

		$criteria->compare('doc_id',$this->doc_id);
		$criteria->compare('document',$this->document,true);
		
		
		$criteria->compare('doc_uploadedby',$this->doc_uploadedby,true);
		$criteria->compare('createdate',$this->createdate,true);
		$criteria->compare('updatedate',$this->updatedate,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}