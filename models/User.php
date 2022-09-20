<?php

namespace app\models;

use Yii;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string|null $date_registration
 * @property string|null $user_name
 * @property string $email
 * @property string|null $user_password
 * @property int|null $user_status
 * @property string|null $inn
 * @property string|null $company_name
 * @property string|null $address
 * @property int|null $company_data
 * @property string|null $auth_key
 */
class User extends Auth implements IdentityInterface
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date_registration'], 'safe'],
            [['email'], 'required'],
            [['user_status', 'company_data'], 'integer'],
            [['user_name', 'email'], 'string', 'max' => 128],
            [['user_password', 'company_name', 'address'], 'string', 'max' => 255],
            [['inn'], 'string', 'max' => 50],
            [['email'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'date_registration' => 'Date Registration',
            'user_name' => 'User Name',
            'email' => 'Email',
            'user_password' => 'User Password',
            'user_status' => 'User Status',
            'inn' => 'Inn',
            'company_name' => 'Company Name',
            'address' => 'Address',
            'company_data' => 'Company Data',
        ];
    }
}
