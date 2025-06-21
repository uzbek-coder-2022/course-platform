<?php

namespace frontend\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class ContactForm extends Model
{
    public $name;
    public $email;
    public $subject;
    public $body;
    public $verifyCode;


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'email', 'body'], 'required', 'message' => '{attribute} maydoni to‘ldirilishi shart!'],

            [['subject'], 'required', 'message' => "{attribute} tanlab qo'yilishi shart!"],

            ['email', 'email', 'message' => 'Email manzili noto‘g‘ri formatda kiritilgan!'],

            ['verifyCode', 'captcha', 'message' => 'Tasdiqlash kodi noto‘g‘ri kiritilgan!'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'name' => 'To\'liq ism',
            'email' => 'Elektron pochta',
            'subject' => 'Murojaat turi',
            'body' => 'Xabar matni',
            'verifyCode' => 'Tasdiqlash kodi',
        ];
    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     *
     * @param string $email the target email address
     * @return bool whether the email was sent
     */
    public function sendEmail($email)
    {
        return Yii::$app->mailer->compose()
            ->setTo($email)
            ->setFrom([Yii::$app->params['senderEmail'] => Yii::$app->params['senderName']])
            ->setReplyTo([$this->email => $this->name])
            ->setSubject($this->subject)
            ->setTextBody($this->body)
            ->send();
    }
}
