<?php

/**
 * This is the model class for table "forsum".
 *
 * The followings are the available columns in table 'forsum':
 * @property integer $id_forsum
 * @property string $nama_forsum
 * @property integer $id_user
 * @property string $id_unggas
 *
 * The followings are the available model relations:
 * @property User $idUser
 * @property Unggas $idUnggas
 * @property BahanPakan[] $bahanPakans
 * @property Nutrien[] $nutriens
 */
class Forsum extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'forsum';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nama_forsum, id_user, id_unggas', 'required'),
			array('id_user, id_unggas', 'numerical', 'integerOnly'=>true),
			array('nama_forsum', 'length', 'max'=>30),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_forsum, nama_forsum, id_user, id_unggas', 'safe', 'on'=>'search'),
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
			'idUser' => array(self::BELONGS_TO, 'User', 'id_user'),
			'idUnggas' => array(self::BELONGS_TO, 'Unggas', 'id_unggas'),
			'bahanPakans' => array(self::MANY_MANY, 'BahanPakan', 'forsum_bahan(id_forsum, id_bahan)'),
			'nutriens' => array(self::MANY_MANY, 'Nutrien', 'forsum_nutrien(id_forsum, id_nutrien)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_forsum' => 'Id Forsum',
			'nama_forsum' => 'Nama Forsum',
			'id_user' => 'Id User',
			'id_unggas' => 'Nama Unggas',
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

		$criteria->compare('id_forsum',$this->id_forsum);
		$criteria->compare('nama_forsum', $this->nama_forsum,true);
		$criteria->compare('id_user',$this->id_user);
		$criteria->compare('id_unggas',$this->id_unggas,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Forsum the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
