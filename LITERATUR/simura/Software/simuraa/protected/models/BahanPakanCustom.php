<?php

/**
 * This is the model class for table "bahan_pakan_custom".
 *
 * The followings are the available columns in table 'bahan_pakan_custom':
 * @property integer $id_bahan_custom
 * @property integer $id_forsum
 * @property integer $id_bahan
 * @property double $min_bahan_custom
 * @property double $max_bahan_custom
 * @property double $harga_bahan_custom
 *
 * The followings are the available model relations:
 * @property Forsum $idForsum
 * @property BahanPakan $idBahan
 */
class BahanPakanCustom extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'bahan_pakan_custom';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_forsum, id_bahan, min_bahan_custom, max_bahan_custom, harga_bahan_custom', 'required'),
			array('id_forsum, id_bahan', 'numerical', 'integerOnly'=>true),
			array('min_bahan_custom, max_bahan_custom, harga_bahan_custom', 'numerical'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_forsum, id_bahan, min_bahan_custom, max_bahan_custom, harga_bahan_custom', 'safe', 'on'=>'search'),
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
			'idForsum' => array(self::BELONGS_TO, 'Forsum', 'id_forsum'),
			'idBahan' => array(self::BELONGS_TO, 'BahanPakan', 'id_bahan'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_forsum' => 'Id Forsum',
			'id_bahan' => 'Id Bahan',
			'min_bahan_custom' => 'Min Bahan Custom',
			'max_bahan_custom' => 'Max Bahan Custom',
			'harga_bahan_custom' => 'Harga Bahan Custom',
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
		$criteria->compare('id_bahan',$this->id_bahan);
		$criteria->compare('min_bahan_custom',$this->min_bahan_custom);
		$criteria->compare('max_bahan_custom',$this->max_bahan_custom);
		$criteria->compare('harga_bahan_custom',$this->harga_bahan_custom);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return BahanPakanCustom the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
