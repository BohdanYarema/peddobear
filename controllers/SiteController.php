<?php

namespace app\controllers;

use app\models\CartModel;
use app\models\Payment;
use app\models\PayMentModel;
use app\models\Shop;
use app\modules\models\Log;
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
        if (in_array($action->id, ['success', 'cancel', 'notify'])) {
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

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $this->goPayU($model);
        }

        return $this->render('payment', [
            'page'  => $page,
            'model' => $model
        ]);
    }

    /**
     * Notify page.
     *
     * @return string
     */
    public function actionNotify()
    {
        return $this->render('notify');
    }

    public function goPayPal($model){
        $shiping        = CartModel::getShiping();
        $cart           = CartModel::getCart();
        $count          = 0;

        foreach ($cart as $item) {
            $count += $item->count;
        }

        $paypalEmail    = "Shop@tedacar.eu";
        $paypalURL      = "https://www.paypal.com/cgi-bin/webscr";
        $currency       = Yii::$app->params['delivery'][Yii::$app->language]['currency'];
        $itemName       = "Peddobear purchase";
        $returnUrl      = "http://tedacar.eu/success";
        $cancelUrl      = "http://tedacar.eu/cancel";
        $notifyUrl      = "http://tedacar.eu/notify";
        $price          = CartModel::getSumm() + Yii::$app->params['delivery'][Yii::$app->language][$shiping];

        $querystring = "?business=" . urlencode($paypalEmail) . "&";
        $querystring .= "currency_code=" . urlencode($currency) . "&";
        $querystring .= "cmd=" . urlencode('_xclick') . "&";
        $querystring .= "item_name=" . urlencode($itemName) . "&";
        $querystring .= "amount=". urlencode($price) . "&";
        $querystring .= "custom=". urlencode($model->payment_order_id) . "&";

        $querystring .= "return=" . urlencode(stripslashes($returnUrl)) . "&";
        $querystring .= "cancel_return=" . urlencode(stripslashes($cancelUrl)) . "&";
        $querystring .= "notify_url=" . urlencode($notifyUrl);

        header('location:' . $paypalURL . $querystring);
        exit();
    }

    public function goPayU($model){
        $getUrl = $this->getPauLink($model);
        //header('location:' . $paypalURL . $querystring);
        //exit();
    }

    public function getPauLink($model){
        $shiping        = CartModel::getShiping();
        $cart           = CartModel::getCart();
        $items          = [];

        foreach ($cart as $item) {
            $price      = $item->getEndPrice();
            $items[]    = [
                "name"      => htmlentities($item->locale->title),
                "unitPrice" => $price,
                "quantity"  => $item->count
            ];
        }


        $price          = CartModel::getSumm() + Yii::$app->params['delivery'][Yii::$app->language][$shiping];
        $currency       = Yii::$app->params['delivery'][Yii::$app->language]['currency'];
        $itemName       = "Ted a Car purchase";


        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "https://secure.payu.com/api/v2_1/orders/");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);

        curl_setopt($ch, CURLOPT_POST, TRUE);

        $post = [
            "notifyUrl"     => "http://peddobear.devservice.pro/notify",
            "customerIp"    => "127.0.0.1",
            "merchantPosId" => Yii::$app->params['PayU']['merchantPosId'],
            "description"   => $itemName,
            "currencyCode"  => $currency,
            "totalAmount"   => $price,
            "products"      => $items
        ];

        var_dump($post);
        exit();

        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($post));

        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Content-Type: application/json",
            "Authorization: Bearer ".Yii::$app->params['PayU']['token']
        ));

        $response = curl_exec($ch);
        $err = curl_error($ch);

        curl_close($ch);

        if ($err) {
            return false;
        } else {
            return $response;
        }
    }
}
