<?php

/**
 * This is the model class for table "user".
 *
 * The followings are the available columns in table 'user':
 * @property integer $id_user
 * @property string $username
 * @property string $password
 * @property string $email
 * @property string $nama_lengkap
 * @property string $alamat_rumah
 * @property string $nomor_telepon
 * @property string $perusahaan
 * @property string $image
 *
 * The followings are the available model relations:
 * @property BahanPakan[] $bahanPakans
 * @property Forsum[] $forsums
 */
class User extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */

	public function tableName()
	{
		return 'user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	//public $iimage;
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('username, password, email, nama_lengkap, alamat_rumah, nomor_telepon, perusahaan', 'required'),
			array('username, password', 'length', 'max'=>20),
			array('email, nama_lengkap', 'length', 'max'=>50),
			array('alamat_rumah', 'length', 'max'=>200),
			array('nomor_telepon', 'length', 'max'=>15),
			array('perusahaan', 'length', 'max'=>200),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_user, username, password, email, nama_lengkap, alamat_rumah, nomor_telepon, perusahaan', 'safe', 'on'=>'search'),
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
			'bahanPakans' => array(self::MANY_MANY, 'BahanPakan', 'bahan_pakan_custom(id_user, id_bahan)'),
			'forsums' => array(self::HAS_MANY, 'Forsum', 'id_user'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_user' => 'Id User',
			'username' => 'Username',
			'password' => 'Password',
			'email' => 'Email',
			'nama_lengkap' => 'Nama Lengkap',
			'alamat_rumah' => 'Alamat Rumah',
			'nomor_telepon' => 'Nomor Telepon',
			'perusahaan' => 'Perusahaan',
			//'image' => 'Foto Profil',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_user',$this->id_user);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('nama_lengkap',$this->nama_lengkap,true);
		$criteria->compare('alamat_rumah',$this->alamat_rumah,true);
		$criteria->compare('nomor_telepon',$this->nomor_telepon,true);
		$criteria->compare('perusahaan',$this->perusahaan,true);
		//$criteria->compare('image', $this->image, true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
