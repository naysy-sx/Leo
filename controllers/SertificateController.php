<?php
namespace app\controllers;

use yii\web\Controller;

class SertificateController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionKakRabotaetSertifikat()
    {
        return $this->render('kak-rabotaet-sertifikat');
    }

    public function actionPravilaPolzovaniyaElektronnymSertifikatom()
    {
        return $this->render('pravila-polzovaniya-elektronnym-sertifikatom');
    }

    public function actionProveritSrokDejstviyaIBalansSertifikata()
    {
        return $this->render('proverit-srok-dejstviya-i-balans-sertifikata');
    }
}