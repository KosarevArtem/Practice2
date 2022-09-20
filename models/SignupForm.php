<?php
 
namespace app\models;
 
use Yii;
use yii\base\Model;
use app\models\Users;
 
/**
 * This is the model class for SignupForm.
 *
 * @property int $id
 * @property string $email
 * @property string $user_name
 * @property string $user_password
 * @property string $verification_token
 * @property string $auth_key
 *
 */
class SignupForm extends Model
{
    public $id;
    public $email;
    public $user_name;
    public $user_password;
    public $password_repeat;
    public $user_status;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['user_name', 'trim'],
            ['user_name', 'required', 'message' => 'Поле должно быть заполнено'],
            ['user_name', 'unique', 'targetClass' => User::className(), 'message' => '"Этот логин уже используется"'],
            ['user_name', 'string', 'min' => 2, 'max' => 255],
            ['email', 'trim'],
            ['email', 'required', 'message' => 'Поле должно быть заполнено'],
            ['email', 'email', 'message' => 'Поле должно быть формата "abc@mail.ru"'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => User::className(), 'message' => 'Этот email уже используется'],
            ['user_password', 'required', 'message' => 'Поле должно быть заполнено'],
            ['user_password', 'string', 'min' => 6, 'max' => 64],
            ['password_repeat', 'required', 'message' => 'Поле должно быть заполнено'],
            ['password_repeat', 'compare', 'compareAttribute'=>'user_password', 'message'=>"Пароли не совпадают" ],
            ['user_status', 'trim'],
        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
        if (!$this->validate()) {
            return null;
        }
        
        $user = new User();
        $user->user_name = $this->user_name;
        $user->email = $this->email;
        $user->setPassword($this->user_password);
        $user->generateAuthKey();
        $user->user_status = $this->user_status;
        return $user->save(false) ? $user : null;
    }
}