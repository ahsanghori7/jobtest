<?php

class LoginController extends CController
{
    public function actionIndex()
    {
        $model = new LoginForm;

        if (isset($_POST['LoginForm'])) {
            $model->attributes = $_POST['LoginForm'];

            if ($model->validate() && $model->login()) {
                $this->redirect(array('emp/index'));
            }
        }
        if(Yii::app()->user){
            $this->render('index', array('model' => $model));
        }
        

  
    }

    public function actionLogout()
    {
        Yii::app()->user->logout();
        $this->redirect(Yii::app()->homeUrl);
    }
}
