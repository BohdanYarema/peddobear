<?php

namespace app\controllers;

use app\models\CartModel;
use app\models\Shop;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

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
     * Displays aboutpage.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    /**
     * Displays cartpage.
     *
     * @return string
     */
    public function actionCart()
    {
        return $this->render('cart');
    }

    /**
     * Displays cartpage.
     *
     * @return string
     */
    public function actionShop()
    {
        $model = Shop::find()->where(['status' => 1])->all();
        return $this->render('shop', [
            'model' => $model
        ]);
    }

    /**
     * Displays cartpage.
     *
     * @return string
     */
    public function actionSpecials()
    {
        $model = Shop::find()->where(['status' => 2])->all();
        return $this->render('specials', [
            'model' => $model
        ]);
    }

    /**
     * Displays testpage.
     *
     * @return string
     */
    public function actionTest()
    {
        $cart = new CartModel();

        return $this->render('test', [
            'cart' => $cart->getCookie()
        ]);
    }


    /**
     * Displays addpage.
     *
     * @return string
     */
    public function actionAdd()
    {
        if (Yii::$app->request->isAjax){
            \Yii::$app->getResponse()->format = Response::FORMAT_JSON;

            $model = new CartModel();
            $model->addToCart(Yii::$app->request->post('id'), Yii::$app->request->post('count'));
            print_r($model->getCookie());
        }
    }

    /**
     * Displays addpage.
     *
     * @return string
     */
    public function actionDelete()
    {
        if (Yii::$app->request->isAjax){
            \Yii::$app->getResponse()->format = Response::FORMAT_JSON;

            $model = new CartModel();
            $model->deleteFormCart(Yii::$app->request->post('id'));
            print_r($model->getCookie());
        }
    }


    /**
     * Displays addpage.
     *
     * @return string
     */
    public function actionGet()
    {
        if (Yii::$app->request->isAjax){
            \Yii::$app->getResponse()->format = Response::FORMAT_JSON;
            print_r(CartModel::getCookie());
        }
    }
}
