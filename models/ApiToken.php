<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\web\HttpException;

/**
 * This is the model class for table "api_token".
 *
 * @property string $token
 * @property int $expired
 * @property int $status
 * @property int $created_at
 * @property int $updated_at
 */
class ApiToken extends \yii\db\ActiveRecord
{
    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'api_token';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status', 'created_at', 'updated_at', 'expired'], 'integer'],
            [['token'], 'safe']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id'                => 'ID',
            'status'            => 'Status',
            'created_at'        => 'Created At',
            'updated_at'        => 'Updated At',
            'token'             => 'Token',
            'expired'           => 'expired'
        ];
    }

    public static function getApiToken(){
        $model = self::findOne(['status' => 1]);
        return $model->token;
    }

    public static function setApiToken(){
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://secure.payu.com/pl/standard/user/oauth/authorize",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => "grant_type=client_credentials&client_id=669539&client_secret=a14bb303c9640a5b899828b67cfe4d7a",
            CURLOPT_HTTPHEADER => array(
                "Cache-Control: no-cache",
                "Content-Type: application/x-www-form-urlencoded",
                "Postman-Token: af566694-3b7c-48c3-a3a1-c09a10ce482e"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            throw new HttpException(401 ,'Api error');
        } else {
            $data = json_decode($response);
            $model          = new ApiToken();
            $model->status  = 1;
            $model->token   = $data->access_token;
            $model->expired = time()+$data->expires_in;
            $model->save();
        }
    }

    public static function checkApiToken(){
        $model = self::findOne(['status' => 1]);
        if ($model->expired > time()){
            return true;
        } else {
            if ($model !== null){
                $model->status = 0;
                $model->save();
            }
            return false;
        }
    }
}