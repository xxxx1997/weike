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
use app\models\WeikeUser;
use yii\web\Session;

class LoginController extends Controller{
	public function actionRegist(){
		return $this->render("regist");
	}
        public function actionLogin(){
                return $this->render("login");
        }
        public function actionRegist_do(){
                //var_dump($_POST);
                //die;
            $username=$_POST["txt_account"];
            $password=$_POST["pwd_password"];
            $email=$_POST["txt_email"];
            //echo $username;
            //echo $password;
            //echo $email;
           // die;
            $model = new WeikeUser();
            $model->user_name = $username;
            $model->user_password=md5($password);
            $model->email=$email;
            $add=$model->insert();
            if($add){
                echo "<script>location.href='index.php?r=login/login'</script>";
            }else{
                echo "<script>location.href='index.php?r=login/regist'</script>";
            }
            
        }
        public function actionLogin_do(){
            $username=$_POST["txt_account"];
            //echo $username;
            $password= md5($_POST["pwd_password"]);
           //echo $password;
           //die;
            //die;
            $sql = "select * from weike_user where user_name = '".$username."'";
            //echo $sql;
            //die;
            $data=WeikeUser::findBySql($sql)->one();
           // echo $data['user_password'];
            //die;
            if($data['user_password']==$password){
                
                $session = new Session();
                $session->open();
                $session['name']=$username;
                //die;
               echo "<script>location.href='index.php?r=index'</script>";
            }else{
                echo "<script>location.href='index.php?r=login/login'</script>";
            }
            
           //var_dump($data);
            
         
            
            
        }
}
?>