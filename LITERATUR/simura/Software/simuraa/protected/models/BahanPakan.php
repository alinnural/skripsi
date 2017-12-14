<?php

/**
 * This is the model class for table "bahan_pakan".
 *
 * The followings are the available columns in table 'bahan_pakan':
 * @property integer $id_bahan
 * @property string $nama_bahan
 * @property string $jenis_sumber
 * @property double $min_bahan
 * @property double $max_bahan
 * @property double $harga_bahan_default
 */
class BahanPakan extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'bahan_pakan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nama_bahan, jenis_sumber, min_bahan_default, max_bahan_default, harga_bahan_default', 'required'),
			array('min_bahan_default, max_bahan_default, harga_bahan_default', 'numerical'),
			array('nama_bahan', 'length', 'max'=>30),
			array('jenis_sumber', 'length', 'max'=>15),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_bahan, nama_bahan, jenis_sumber, min_bahan_default, max_bahan_default, harga_bahan_default', 'safe', 'on'=>'search'),
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
			'users' => array(self::MANY_MANY, 'User', 'bahan_pakan_custom(id_bahan, id_user)'),
			'forsums' => array(self::MANY_MANY, 'Forsum', 'forsum_bahan(id_bahan, id_forsum)'),
			'nutriens' => array(self::MANY_MANY, 'Nutrien', 'nutrien_bahan(id_bahan, id_nutrien)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_bahan' => 'No. Bahan',
			'nama_bahan' => 'Nama Bahan',
			'jenis_sumber' => 'Jenis Sumber',
			'min_bahan_default' => 'Min Bahan',
			'max_bahan_default' => 'Max Bahan',
			'harga_bahan_default' => 'Harga Bahan',
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

		$criteria->compare('id_bahan',$this->id_bahan);
		$criteria->compare('nama_bahan',$this->nama_bahan,true);
		$criteria->compare('jenis_sumber',$this->jenis_sumber,true);
		$criteria->compare('min_bahan_default',$this->min_bahan_default);
		$criteria->compare('max_bahan_default',$this->max_bahan_default);
		$criteria->compare('harga_bahan_default',$this->harga_bahan_default);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return BahanPakan the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
