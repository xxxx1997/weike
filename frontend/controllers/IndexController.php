<?php
namespace frontend\controllers;

use Yii;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * Site controller
 */
class IndexController extends Controller
{
    /**
     * @inheritdoc
     */
    public function actionIndex(){
		return $this->render("index");
    }
	 public function actionLogin(){
		return $this->render("login");
    }
	//任务大厅
	public function actionTask_list(){
		return $this->render("task_list");
	}
	//发布任务
	public function actionRelease(){
		return $this->render("release");
	}
}
?>
