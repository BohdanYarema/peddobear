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
        $this->getMeta($page);
        return $this->render('index', [
            'page' => $page
        ]);
    }

    /**
     * Displays contactpage.
     *
     * @return string
     */
    public function actionContact()
    {
        $page = Page::find()->where(['slug' => 'contact'])->one();
        $this->getMeta($page);
        return $this->render('contact', [
            'page' => $page
        ]);
    }

    /**
     * Displays aboutpage.
     *
     * @return string
     */
    public function actionAbout()
    {
        $page = Page::find()->where(['slug' => 'about'])->one();
        $this->getMeta($page);
        return $this->render('about', [
            'page' => $page
        ]);
    }

    /**
     * Displays cartpage.
     *
     * @return string
     */
    public function actionCart()
    {
        $page = Page::find()->where(['slug' => 'cart'])->one();
        $this->getMeta($page);
        return $this->render('cart', [
            'page' => $page
        ]);
    }


    /**
     * Displays cartpage.
     *
     * @return string
     */
    public function actionPayment()
    {
        $page = Page::find()->where(['slug' => 'payment'])->one();
        $this->getMeta($page);
        return $this->render('payment', [
            'page' => $page
        ]);
    }

    /**
     * Displays cartpage.
     *
     * @return string
     */
    public function actionNotify()
    {
        $page = Page::find()->where(['slug' => 'notify'])->one();
        $this->getMeta($page);
        return $this->render('notify', [
            'page' => $page
        ]);
    }


    /**
     * Displays cartpage.
     *
     * @return string
     */
    public function actionSuccess()
    {
        $page = Page::find()->where(['slug' => 'success'])->one();
        $this->getMeta($page);
        return $this->render('success', [
            'page' => $page
        ]);
    }

    /**
     * Displays cartpage.
     *
     * @return string
     */
    public function actionShop()
    {
        $model = Shop::find()->where(['status' => 1])->all();
        $page = Page::find()->where(['slug' => 'shop'])->one();
        $this->getMeta($page);
        return $this->render('shop', [
            'model' => $model,
            'page' => $page
        ]);
    }

    /**
     * Displays cartpage.
     *
     * @return string
     */
    public function actionSpecial()
    {
        $model = Shop::find()->where(['status' => 2])->all();
        $page = Page::find()->where(['slug' => 'special'])->one();
        $this->getMeta($page);
        return $this->render('special', [
            'model' => $model,
            'page' => $page
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
        if($model !== null){
            \Yii::$app->view->title = $model->locale->title;
            \Yii::$app->view->registerMetaTag(['name'       => 'title', 'content'           => $model->locale->meta_title]);
            \Yii::$app->view->registerMetaTag(['name'       => 'description', 'content'     => $model->locale->meta_description]);
            \Yii::$app->view->registerMetaTag(['name'       => 'keywords', 'content'        => $model->locale->meta_keywords]);
            \Yii::$app->view->registerMetaTag(['property'   => 'og:title', 'content'        => $model->locale->meta_title]);
            \Yii::$app->view->registerMetaTag(['property'   => 'og:type', 'content'         => 'website']);
            \Yii::$app->view->registerMetaTag(['property'   => 'og:description', 'content'  => $model->locale->meta_description]);
            \Yii::$app->view->registerMetaTag(['property'   => 'og:image', 'content'        => $model->meta_image_base_url.'/'.$model->meta_image_path]);
            \Yii::$app->view->registerMetaTag(['property'   => 'og:site_name', 'content'    => 'Peddobear']);
            \Yii::$app->view->registerMetaTag(['property'   => 'og:url', 'content'          => Url::canonical()]);


            \Yii::$app->view->registerMetaTag(['name' => 'twitter:url', 'content'           => Url::canonical()]);
            \Yii::$app->view->registerMetaTag(['name' => 'twitter:card', 'content'          => 'summary']);
            \Yii::$app->view->registerMetaTag(['name' => 'twitter:title', 'content'         => $model->locale->meta_title]);
            \Yii::$app->view->registerMetaTag(['name' => 'twitter:description', 'content'   => $model->locale->meta_description]);
            \Yii::$app->view->registerMetaTag(['name' => 'twitter:image', 'content'         => $model->meta_image_base_url.'/'.$model->meta_image_path]);
        }

        return true;
    }
}
