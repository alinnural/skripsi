<?php

/**
 * This is the model class for table "nutrien_unggas".
 *
 * The followings are the available columns in table 'nutrien_unggas':
 * @property string $id_unggas
 * @property string $id_nutrien
 * @property double $min_nutrien
 * @property double $max_nutrien
 */
class NutrienUnggas extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'nutrien_unggas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_unggas, id_nutrien, min_nutrien, max_nutrien', 'required'),
			array('min_nutrien, max_nutrien', 'numerical'),
			array('id_nutrien, id_unggas', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_unggas, id_nutrien, min_nutrien, max_nutrien', 'safe', 'on'=>'search'),
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
			'id_unggas' => 'Id Unggas',
			'id_nutrien' => 'Id Nutrien',
			'min_nutrien' => 'Minimal Nutrien',
			'max_nutrien' => 'Maksimal Nutrien',
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

		$criteria->compare('id_unggas',$this->id_unggas,true);
		$criteria->compare('id_nutrien',$this->id_nutrien,true);
		$criteria->compare('min_nutrien',$this->min_nutrien);
		$criteria->compare('max_nutrien',$this->max_nutrien);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return NutrienUnggas the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
