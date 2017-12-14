<?php

class ForsumController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';
	public $dataBahan;
	/**
	 * @return array action filters
	 */
	public $label = array("",
					"Jagung Lokal",
					"Jagung Import",
					"Dedak Halus",
					"Bekatul",
					"Pollard",
					"Gaplek",
					"Sorgum",
					"Bungkil Kedelai",
					"Biji Kedelai",
					"Corn Gluten Feed(CGF)",
					"Corn Gluten Meal(CGM)",
					"Bungkil Kacang Tanah",
					"Bungkil Kapuk",
					"Bungkil Kelapa",
					"Bungkil Kelapa Sawit",
					"Meat Bone Meal(MBM)",
					"Tepung Ikan",
					"Tepung Cacing",
					"Tepung Darah",
					"Manure Ayam",
					"Minyak Ikan",
					"CPO",
					"Molases",
					"Garam",
					"Tepung Keong",
					"Kapur",
					"CaCO3",
					"DCP",
					"MCP",
					"L-Lysin",
					"DL-Methionine",
					"Premix",
					"Premix Broiler",
					"Premix Layer",
					);

	public $harga = array("",
					"3800",
					"4000",
					"2300",
					"2200",
					"2500",
					"3000",
					"3000",
					"7500",
					"5000",
					"3500",
					"7000",
					"6000",
					"2000",
					"2500",
					"2800",
					"7000",
					"7500",
					"4000",
					"5000",
					"1000",
					"10000",
					"5000",
					"2000",
					"1500",
					"2500",
					"500",
					"750",
					"20000",
					"15000",
					"50000",
					"70000",
					"30000",
					"40000",
					"50000",
					);

	public $min_bahan = array("",
					"25",
					"25",
					"0",
					"0",
					"0",
					"0",
					"0",
					"5",
					"0",
					"0",
					"0",
					"0",
					"0",
					"0",
					"0",
					"0",
					"0",
					"0",
					"0",
					"0",
					"0",
					"1",
					"0",
					"0.25",
					"0",
					"0",
					"0",
					"0",
					"0",
					"0",
					"0",
					"0.1",
					"0.1",
					"0.1",
					);

	public $max_bahan = array("",
					"50",
					"50",
					"15",
					"15",
					"6",
					"10",
					"15",
					"40",
					"20",
					"7",
					"7",
					"5",
					"3",
					"5",
					"10",
					"7",
					"8",
					"15",
					"3",
					"5",
					"2",
					"4",
					"5",
					"0.5",
					"8",
					"2",
					"2",
					"1",
					"1",
					"0.3",
					"0.3",
					"0.25",
					"0.25",
					"0.25",
					);

	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update', 'pilihbahanpakan', 'hasil', 'forsum', 'bukafile'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id){
		
		$model=new BahanPakanCustom;
		$modelBahan=new BahanPakan;
		$idUnggas= $this->loadModel($id)->id_unggas;
		$modelUnggas = NutrienUnggas::model()->findAllByAttributes(array('id_unggas'=>$idUnggas), array('order'=>'id_nutrien'));

		$webroot = Yii::getPathOfAlias('webroot').DIRECTORY_SEPARATOR;
		$tempFileMinUnggas = $webroot.'minUnggas.dat';
		$tempFileMaxUnggas = $webroot.'maxUnggas.dat';
		$fhMinUnggas = fopen($tempFileMinUnggas, 'w') or die("can't open file");
		$fhMaxUnggas = fopen($tempFileMaxUnggas, 'w') or die("can't open file");
		foreach ($modelUnggas as $key) {

			$dataSemua = $key->getAttributes();
			//print_r($dataSemua);
			$minUnggas= $dataSemua['min_nutrien'];
			$maxUnggas= $dataSemua['max_nutrien'];

			fwrite($fhMinUnggas, $minUnggas."\n");
			//$minUnggas[]=$value;
			
			fwrite($fhMaxUnggas, $maxUnggas."\n");
			//$MaxUnggas[] = $value;			
		}
		fclose($fhMinUnggas);
		fclose($fhMaxUnggas);

		$idBahan = array();
		$harga = array();
		$minBahan = array();
		$maxBahan = array();
		$minUnggas = array();
		$maxUnggas = array();
		
		if(isset($_POST['BahanPakan'])){
			$data = array();
			$dataBahanBaru = $_POST['BahanPakan'];
			$this->render('hasil',array(
				'model'=>$model,
				'data'=>$dataBahanBaru,
				
			));
			}
		else if(isset($_POST['datahitung'])){
			$webroot = Yii::getPathOfAlias('webroot').DIRECTORY_SEPARATOR;
			$tempFileIdBahan = $webroot.'idBahan.dat';
			$tempFileHarga = $webroot.'harga.dat';
			$tempFileMin = $webroot.'min.dat';
			$tempFileMax = $webroot.'max.dat';
			$fhIdBahan = fopen($tempFileIdBahan, 'w') or die("can't open file");
			$fhHarga = fopen($tempFileHarga, 'w') or die("can't open file");
			$fhMin = fopen($tempFileMin, 'w') or die("can't open file");
			$fhMax = fopen($tempFileMax, 'w') or die("can't open file");
						
			foreach($_POST as $key=>$value){
				if(strpos($key, 'idBahan') !==false){
					fwrite($fhIdBahan, $value."\n");
					$idBahan[]=$value;
				}
				if(strpos($key, 'harga') !==false){
					fwrite($fhHarga, $value."\n");
					$harga[] = $value;
				}
				else if(strpos($key, 'min') !==false){
					fwrite($fhMin, $value."\n");
					$minBahan[] = $value;
				}
				else if(strpos($key, 'max') !==false){
					fwrite($fhMax, $value."\n");
					$maxBahan[] = $value;
				}
			}
		
			fclose($fhIdBahan);
			fclose($fhHarga);
			fclose($fhMin);
			fclose($fhMax);
			
			$hasil = array();
			echo shell_exec('python lp.py > dataHasil.dat');
		
			$tempDataHasil = $webroot.'dataHasil.dat';
			$handle = fopen($tempDataHasil, "r");
			$contents = fread($handle, filesize($tempDataHasil));
			fclose($handle);
			$ambilHarga1= explode('fun: ',$contents);
			$ambilHarga2= explode('.',$ambilHarga1[1]);
			$ambilXAll1= explode('x: array([',$contents);
			
			if(count($ambilXAll1)==2)
			{
				$ambilXAll2= explode('])',$ambilXAll1[1]);
				$ambilX= explode(',',$ambilXAll2[0]);
			}
			else 
			{
				$ambilX="tidak";
			}
			
			foreach ($idBahan as $key => $value) {
					$model = new BahanPakanCustom;
					$model->id_forsum = $id;
					$model->id_bahan = $value;
					$model->harga_bahan_custom = $harga[$key];
					$model->min_bahan_custom = $minBahan[$key];
					$model->max_bahan_custom = $maxBahan[$key];
					$model->save();
				}
			$this->render('tampilan',array(
			'data1'=>$ambilHarga2[0],
			'data2'=>$ambilX,
			'idBahan'=>$idBahan,
			'nama'=>$this->label,
			"id"=>$id,
			));

		}
		else if(isset($_POST['id'])){
			echo "bababa";
			foreach ($idBahan as $key => $value) {
					$model = new BahanPakanCustom;
					$model->id_forsum = $id;
					$model->id_bahan = $value;
					$model->harga_bahan_custom = $harga[$key];
					$model->min_bahan_custom = $minBahan[$key];
					$model->max_bahan_custom = $maxBahan[$key];
					echo "bababa";
					$model->save();
				}
		} 

				 else $this->render('view',array(
						'data'=>$this->loadModel($id),
						'modelBahan'=>$modelBahan,
					));
	}

	public function actionHasil()
	{
		$model=new BahanPakanCustom;
		$data = $this->dataBahan;
		if(isset($_POST['id_bahan']))
		{
			$total = count($_POST['id_bahan']);
		    for ($i = 0; $i <= $total; $i++)
		    {
		    	if(isset($_POST['id_bahan'][$i]))
		    	{
		     		$bpcustom = new BahanPakanCustom();
		     		$bpcustom->id_forsum = $_POST['id_forsum'][$i];
		     		echo $id_forsum;
		     		$bpcustom->id_bahan = $_POST['id_bahan'][$i];
		        	$bpcustom->min_bahan_custom = $_POST['min_bahan_custom'][$i];
		        	$bpcustom->max_bahan_custom = $_POST['max_bahan_custom'][$i];
		        	$bpcustom->harga_bahan_custom = $_POST['harga_bahan_custom'][$i];
		         	$bpcustom->save();
		    	}
		    }
		    $this->redirect(array('index'));
		}
		$this->render('hasil',array(
			'model'=>$model,
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Forsum;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Forsum']))
		{
			$model->attributes=$_POST['Forsum'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_forsum));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}
	
	public function actionForsum()
	{
		$this->render('forsum');
	}

	public function actionBukaFile()
	{
		$model=new Forsum('search');
		$modelUnggas=new Unggas;
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Forsum']))
			$model->attributes=$_GET['Forsum'];

		$this->render('bukafile',array(
			'model'=>$model,
			'modelUnggas'=>$modelUnggas,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Forsum']))
		{
			$model->attributes=$_POST['Forsum'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_forsum));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Forsum');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Forsum('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Forsum']))
			$model->attributes=$_GET['Forsum'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/** public function actionPilihbahanpakan()
	{
		
		$dataProvider=new CActiveDataProvider('BahanPakan');
		$this->render('pilihbahanpakan',array(
			'dataProvider'=>$dataProvider,
		));

	}

	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Forsum the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Forsum::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Forsum $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='forsum-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
