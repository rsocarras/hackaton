<?php

/**
 * This is the model class for table "milestone".
 *
 * The followings are the available columns in table 'milestone':
 * @property integer $id
 * @property string $title
 * @property string $description
 * @property string $due_date
 * @property string $datecreate
 * @property string $datemodify
 * @property string $status
 * @property integer $users_id
 * @property integer $projects_id
 *
 * The followings are the available model relations:
 * @property Users $users
 * @property Projects $projects
 */
class Milestone extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Milestone the static model class
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
		return 'milestone';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title, description, users_id, projects_id', 'required'),
			array('users_id, projects_id', 'numerical', 'integerOnly'=>true),
			array('title, description, status', 'length', 'max'=>45),
			array('due_date, datecreate, datemodify', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, title, description, due_date, datecreate, datemodify, status, users_id, projects_id', 'safe', 'on'=>'search'),
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
			'users' => array(self::BELONGS_TO, 'Users', 'users_id'),
			'projects' => array(self::BELONGS_TO, 'Projects', 'projects_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'title' => 'Title',
			'description' => 'Description',
			'due_date' => 'Due Date',
			'datecreate' => 'Datecreate',
			'datemodify' => 'Datemodify',
			'status' => 'Status',
			'users_id' => 'Users',
			'projects_id' => 'Projects',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('due_date',$this->due_date,true);
		$criteria->compare('datecreate',$this->datecreate,true);
		$criteria->compare('datemodify',$this->datemodify,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('users_id',$this->users_id);
		$criteria->compare('projects_id',$this->projects_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}