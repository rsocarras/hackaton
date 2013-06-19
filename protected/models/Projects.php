<?php

/**
 * This is the model class for table "projects".
 *
 * The followings are the available columns in table 'projects':
 * @property integer $id
 * @property string $title
 * @property string $description_short
 * @property string $description_large
 * @property string $url
 * @property string $facebook
 * @property string $twitter
 * @property string $youtube
 * @property string $googleplus
 * @property string $datecreate
 * @property string $datemodify
 * @property string $url_logo
 * @property integer $users_id
 * @property integer $projects_status_id
 *
 * The followings are the available model relations:
 * @property Milestone[] $milestones
 * @property Users $users
 * @property ProjectsStatus $projectsStatus
 * @property Task[] $tasks
 * @property Users[] $users1
 */
class Projects extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Projects the static model class
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
		return 'projects';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title, description_short, users_id, projects_status_id', 'required'),
			array('users_id, projects_status_id', 'numerical', 'integerOnly'=>true),
			array('title, description_short', 'length', 'max'=>120),
			array('url, facebook, twitter, youtube, googleplus', 'length', 'max'=>45),
			array('description_large, datecreate, datemodify, url_logo', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, title, description_short, description_large, url, facebook, twitter, youtube, googleplus, datecreate, datemodify, url_logo, users_id, projects_status_id', 'safe', 'on'=>'search'),
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
			'milestones' => array(self::HAS_MANY, 'Milestone', 'projects_id'),
			'users' => array(self::BELONGS_TO, 'Users', 'users_id'),
			'projectsStatus' => array(self::BELONGS_TO, 'ProjectsStatus', 'projects_status_id'),
			'tasks' => array(self::HAS_MANY, 'Task', 'projects_id'),
			'users1' => array(self::MANY_MANY, 'Users', 'users_has_proyectos(proyectos_id, users_id)'),
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
			'description_short' => 'Description Short',
			'description_large' => 'Description Large',
			'url' => 'Url',
			'facebook' => 'Facebook',
			'twitter' => 'Twitter',
			'youtube' => 'Youtube',
			'googleplus' => 'Googleplus',
			'datecreate' => 'Datecreate',
			'datemodify' => 'Datemodify',
			'url_logo' => 'Url Logo',
			'users_id' => 'Users',
			'projects_status_id' => 'Projects Status',
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
		$criteria->compare('description_short',$this->description_short,true);
		$criteria->compare('description_large',$this->description_large,true);
		$criteria->compare('url',$this->url,true);
		$criteria->compare('facebook',$this->facebook,true);
		$criteria->compare('twitter',$this->twitter,true);
		$criteria->compare('youtube',$this->youtube,true);
		$criteria->compare('googleplus',$this->googleplus,true);
		$criteria->compare('datecreate',$this->datecreate,true);
		$criteria->compare('datemodify',$this->datemodify,true);
		$criteria->compare('url_logo',$this->url_logo,true);
		$criteria->compare('users_id',$this->users_id);
		$criteria->compare('projects_status_id',$this->projects_status_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}