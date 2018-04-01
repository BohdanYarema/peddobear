<?php

namespace app\controllers;

use app\models\CartModel;
use app\models\Shop;
use app\modules\models\Page;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use yii\helpers\Url;

class SiteController extends Controller
{
    public function beforeAction($action)
    {
        if (in_array($action->id, ['success', 'notify'])) {
            $this->enableCsrfValidation = false;
        }
        return parent::beforeAction($action);
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
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $page = Page::find()->where(['slug' => 'index'])->one();
        return $this->render('index', [
            'page' => $page
        ]);
    }

    /**
     * Displays contactpage.
     *
     * @return string
     */
    public function actionContacts()
    {
        return $this->render('contacts');
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
    public function actionPayment()
    {
        return $this->render('payment');
    }

    /**
     * Displays cartpage.
     *
     * @return string
     */
    public function actionNotify()
    {
        return $this->render('notify');
    }


    /**
     * Displays cartpage.
     *
     * @return string
     */
    public function actionSuccess()
    {
        return $this->render('success');
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
            return $model->addToCart(Yii::$app->request->post('id'), Yii::$app->request->post('count'));
        }
    }


    /**
     * Displays radio.
     *
     * @return string
     */
    public function actionRadio()
    {
        if (Yii::$app->request->isAjax){
            \Yii::$app->getResponse()->format = Response::FORMAT_JSON;

            return CartModel::getSumm();
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
            return $model->deleteFormCart(Yii::$app->request->post('id'));
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


    /**
     * @return boolean
     */
    public function getMeta($model)
    {
        \Yii::$app->view->title = $model->locale->title;
        \Yii::$app->view->registerMetaTag(['name'       => 'title', 'content'           => $model->locale->meta_title]);
        \Yii::$app->view->registerMetaTag(['name'       => 'description', 'content'     => $model->locale->meta_description]);
        \Yii::$app->view->registerMetaTag(['name'       => 'keywords', 'content'        => $model->locale->meta_keywords]);
        \Yii::$app->view->registerMetaTag(['property'   => 'og:title', 'content'        => $model->locale->meta_title]);
        \Yii::$app->view->registerMetaTag(['property'   => 'og:type', 'content'         => 'website']);
        \Yii::$app->view->registerMetaTag(['property'   => 'og:description', 'content'  => $model->locale->meta_description]);
        \Yii::$app->view->registerMetaTag(['property'   => 'og:image', 'content'        => $model->locale->meta_image_base_url.'/'.$model->locale->meta_image_path]);
        \Yii::$app->view->registerMetaTag(['property'   => 'og:site_name', 'content'    => 'Peddobear']);
        \Yii::$app->view->registerMetaTag(['property'   => 'og:url', 'content'          => Url::canonical()]);


        \Yii::$app->view->registerMetaTag(['name' => 'twitter:url', 'content'           => Url::canonical()]);
        \Yii::$app->view->registerMetaTag(['name' => 'twitter:card', 'content'          => 'summary']);
        \Yii::$app->view->registerMetaTag(['name' => 'twitter:title', 'content'         => $model->locale->meta_title]);
        \Yii::$app->view->registerMetaTag(['name' => 'twitter:description', 'content'   => $model->locale->meta_description]);
        \Yii::$app->view->registerMetaTag(['name' => 'twitter:image', 'content'         => $model->locale->meta_image_base_url.'/'.$model->locale->meta_image_path]);

        return true;
    }
}
