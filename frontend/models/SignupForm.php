<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use common\models\User;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $username;
    public $email;
    public $password;
    public $password_repeat;
    public $first_name;
    public $last_name;
    public $phone_number;

    public function rules()
    {
        return [
            ['username', 'trim'],
            ['username', 'required', 'message' => 'Foydalanuvchi nomi to‘ldirilishi shart!'],
            [
                'username',
                'match',
                'pattern' => '/^[a-zA-Z][a-zA-Z0-9_]*$/',
                'message' => 'Foydalanuvchi nomi harf bilan boshlanishi va faqat harflar, raqamlar yoki pastki chiziq (_) dan iborat bo‘lishi kerak.'
            ],
            ['username', 'string', 'min' => 3, 'max' => 255, 'tooShort' => 'Foydalanuvchi nomi kamida 3 ta belgidan iborat bo‘lishi kerak.'],
            [
                'username',
                'unique',
                'targetClass' => '\common\models\User',
                'filter' => function ($query) {
                    $input = Yii::$app->request->post('SignupForm')['username'] ?? '';
                    $query->andWhere(['LOWER(username)' => mb_strtolower($input)]);
                },
                'message' => 'Bu foydalanuvchi nomi allaqachon band! Katta-kichik harflar farq qilmaydi.'
            ],


            ['email', 'trim'],
            ['email', 'required', 'message' => 'Elektron pochta to‘ldirilishi shart!'],
            ['email', 'email', 'message' => 'Email manzili noto‘g‘ri formatda kiritilgan!'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'Elektron pochtadan allaqachon foydalanilgan!'],

            ['password', 'required', 'message' => 'Parol to‘ldirilishi shart!'],
            ['password', 'string', 'min' => Yii::$app->params['user.passwordMinLength'], 'tooShort' => 'Parol kamida 8 ta belgidan iborat bo‘lishi kerak!'],

            ['password_repeat', 'required', 'message' => 'Parolni takrorlang!'],
            ['password_repeat', 'compare', 'compareAttribute' => 'password', 'message' => 'Parollar bir xil emas!'],

            [['first_name'], 'required', 'message' => 'Ism to‘ldirilishi shart!'],
            [['last_name'], 'required', 'message' => 'Familiya to‘ldirilishi shart!'],
            [['first_name', 'last_name'], 'string', 'max' => 255],

            ['phone_number', 'required', 'message' => 'Telefon raqam to‘ldirilishi shart!'],
            ['phone_number', 'string', 'max' => 20],
            ['phone_number', 'match', 'pattern' => '/^\+998\d{9}$/', 'message' => 'Telefon raqam noto‘g‘ri kiritilgan. Iltimos, +998XXXXXXXXX formatida kiriting.'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'first_name' => "Ism",
            'last_name' => "Familiya",
            'username' => 'Foydalanuvchi nomi',
            'phone_number' => 'Telefon raqam',
            'email' => 'Elektron pochta',
            'password' => 'Parol',
            'password_repeat' => 'Parolni tasdiqlang',
        ];
    }

    public function signup()
    {
        if (!$this->validate()) {
            return null;
        }

        $user = new User();
        $user->username = $this->username;
        $user->email = $this->email;
        $user->first_name = $this->first_name;
        $user->last_name = $this->last_name;
        $user->phone_number = $this->phone_number;
        $user->setPassword($this->password);
        $user->generateAuthKey();
        $user->generateEmailVerificationToken();

        return $user->save() && $this->sendEmail($user);
    }

    protected function sendEmail($user)
    {
        return Yii::$app
            ->mailer
            ->compose(
                ['html' => 'emailVerify-html', 'text' => 'emailVerify-text'],
                ['user' => $user]
            )
            ->setFrom([Yii::$app->params['supportEmail'] => Yii::$app->name . ' robot'])
            ->setTo($this->email)
            ->setSubject('Account registration at ' . Yii::$app->name)
            ->send();
    }
}
