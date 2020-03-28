<?php

namespace app\controllers;

use app\models\ApiToken;
use app\models\CartModel;
use app\models\Payment;
use app\models\PayMentModel;
use app\models\Shop;
use app\modules\models\Log;
use app\modules\models\Page;
use Codeception\Template\Api;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use yii\helpers\Url;
use app\models\PaymentController;
use app\models\PayPal;

class SiteController extends Controller
{
    public function beforeAction($action)
    {
        if (in_array($action->id, ['success', 'cancel', 'notifypaypal', 'notifypayu'])) {
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
        if (Yii::$app->language == 'xx'){
            return $this->redirect('/en', '301');
        }

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
    public function actionSuccess()
    {
        $page = Page::find()->where(['slug' => 'success'])->one();
        $this->getMeta($page);
        PayMentModel::setCoockie([]);
        CartModel::setEmpty();
        return $this->render('success', [
            'page' => $page
        ]);
    }


    /**
     * Displays cartpage.
     *
     * @return string
     */
    public function actionCancel()
    {
        $page = Page::find()->where(['slug' => 'cancel'])->one();
        $this->getMeta($page);
        PayMentModel::setCoockie([]);
        CartModel::setEmpty();
        return $this->render('cancel', [
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

            $model = new CartModel();
            return $model->setShiping(Yii::$app->request->post('name'));
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
     * Displays addpage.
     *
     * @return string
     */
    public function actionTest()
    {
        return $this->render('test');
    }


    /**
     * Displays paymentpage.
     *
     * @return string
     */
    public function actionPayment()
    {
        $page = Page::find()->where(['slug' => 'payment'])->one();
        $this->getMeta($page);

        $shiping = CartModel::getShiping();


        $model                      = new \app\models\Payment();
        $model->status              = 0;
        $model->currency            = Yii::$app->params['delivery'][Yii::$app->language]['currency'];
        $model->shipping            = Yii::$app->params['delivery'][Yii::$app->language][$shiping];
        $model->summary             = CartModel::getSumm();
        $model->items               = CartModel::getCart();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            switch ($model->payment_type){
                case 0 :{
                    $model->payment_order_id    = Yii::$app->security->generateRandomKey(5)+time();
                    $result = new PaymentController(new PayPal());
                    $model->redirectUrl         = $result->pay($model);
                    break;
                }
            }

            if ($model->save()){
                PayMentModel::setCoockie([]);
                CartModel::setEmpty();
                return $this->redirect(['pay', 'id' => $model->id]);
            }
        }

        return $this->render('payment', [
            'page'  => $page,
            'model' => $model
        ]);
    }

    public function actionPay($id){
        $model = Payment::find()->where(['id' => $id])->one();
        if ($model !== null && $model->status == 0){
            header('location:' . $model->redirectUrl);
            exit();
        } else {
            return $this->redirect(['cancel']);
        }
    }

    public function actionNotifypaypal()
    {
        return $this->render('notify_paypal');
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
            \Yii::$app->view->registerMetaTag(['property'   => 'og:site_name', 'content'    => 'Ted a car']);
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
