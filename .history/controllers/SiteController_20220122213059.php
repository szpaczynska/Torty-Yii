<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\NewUser;
use app\models\Cake;
use app\models\Orders;
use yii\db\Query;
use yii\data\ActiveDataProvider;
use app\controllers\ActivDataProvider;

$id_cake_order = 0;
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return ActivDataProvider
     *
     */
    public function actionAbout()
    {
        $dataProvider = new ActivDataProvider([
            'query' => Cake::find()->all()
        ]);

        return $this->render('about', ['dataProvider' => $dataProvider]);
    }

public function actionRegister()
{
    $model = new NewUser();

    if ($model->load(Yii::$app->request->post())) {
        if ($model->validate()) {
            $model->username = $_POST['NewUser']['username'];
            $model->email = $_POST['NewUser']['email'];
            $model->password = password_hash($_POST['NewUser']['password'], PASSWORD_ARGON2I);
            $model->authKey = md5(random_bytes(5));
            $model->accessToken = password_hash(random_bytes(10), PASSWORD_DEFAULT);
            if($model->save()){
                return $this->redirect(['login']);
            }
        }
    }

    return $this->render('register', [
        'model' => $model,
    ]);
}

public function actionCake()
{
    $model = new Cake();

    if ($model->load(Yii::$app->request->post())) {
        if ($model->validate()) {
            $model->name = $_POST['Cake']['name'];
            $model->id_b = $_POST['Cake']['id_b'];
            $model->id_c = $_POST['Cake']['id_c'];
            $model->id_a = $_POST['Cake']['id_a'];
            $model->description = $_POST['Cake']['description'];
            if($model->save()){
                return $this->redirect(['orders']);
            }
        }
    }

    return $this->render('cake', [
        'model' => $model,
    ]);
}


public function actionOrders()
{
    $model = new Orders();

    $query = new Query();
    $query->select('MAX(id)')->from('cakes.cake');
    $command = $query->createCommand();
    $records = $command->queryAll();
    if ($model->load(Yii::$app->request->post())) {
        if ($model->validate()) {
            $model->user_id = $_POST[Yii::$app->user->identity->user_id];
            $model->cake_id = $_POST[$records];
            $model->date = $_POST['Orders']['date'];
            $model->note = $_POST['Orders']['note'];
            if($model->save()){
                return $this->redirect(['koszyk']);
            }
        }
    }

    return $this->render('orders', [
        'model' => $model,
    ]);
}


public function actionKoszyk()
{
    $model = new Orders();

    if ($model->load(Yii::$app->request->post())) {
        if ($model->validate()) {
            if($model->save()){
                return $this->redirect(['index']);
            }
        }
    }

    return $this->render('koszyk', [
        'model' => $model,
    ]);
}








}