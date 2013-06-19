<?php

/**
 * This is the model class for table "users".
 *
 * The followings are the available columns in table 'users':
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property string $email
 * @property string $name
 * @property string $account
 * @property string $birthday
 * @property string $datecreate
 * @property string $datemodify
 * @property string $session
 * @property string $note
 * @property integer $users_category_id
 *
 * The followings are the available model relations:
 * @property Comments[] $comments
 * @property Milestone[] $milestones
 * @property Projects[] $projects
 * @property Task[] $tasks
 * @property Task[] $tasks1
 * @property UsersCategory $usersCategory
 */
class Users extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Users the static model class
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
		return 'users';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('username, password, email, name, birthday, users_category_id', 'required'),
			array('users_category_id', 'numerical', 'integerOnly'=>true),
			array('username, email, name', 'length', 'max'=>225),
			array('password', 'length', 'max'=>255),
			array('account, note', 'length', 'max'=>45),
			array('datecreate, datemodify, session', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, username, password, email, name, account, birthday, datecreate, datemodify, session, note, users_category_id', 'safe', 'on'=>'search'),
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
			'comments' => array(self::HAS_MANY, 'Comments', 'users_id'),
			'milestones' => array(self::HAS_MANY, 'Milestone', 'users_id'),
			'projects' => array(self::MANY_MANY, 'Projects', 'users_has_proyectos(users_id, proyectos_id)'),
			'tasks' => array(self::HAS_MANY, 'Task', 'users_id'),
			'tasks1' => array(self::HAS_MANY, 'Task', 'assign'),
			'usersCategory' => array(self::BELONGS_TO, 'UsersCategory', 'users_category_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'username' => 'Username',
			'password' => 'Password',
			'email' => 'Email',
			'name' => 'Name',
			'account' => 'Account',
			'birthday' => 'Birthday',
			'datecreate' => 'Datecreate',
			'datemodify' => 'Datemodify',
			'session' => 'Session',
			'note' => 'Note',
			'users_category_id' => 'Users Category',
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
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('account',$this->account,true);
		$criteria->compare('birthday',$this->birthday,true);
		$criteria->compare('datecreate',$this->datecreate,true);
		$criteria->compare('datemodify',$this->datemodify,true);
		$criteria->compare('session',$this->session,true);
		$criteria->compare('note',$this->note,true);
		$criteria->compare('users_category_id',$this->users_category_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}