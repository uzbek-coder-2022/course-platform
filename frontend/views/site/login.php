<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var \common\models\LoginForm $model */

use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;

$this->registerCssFile("@web/css/login.css");


$this->title = 'Tizimga kirish';
?>

<style>
    .login-container {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .btn-primary {
        width: 100%;
        padding: 10px;
        font-weight: 600;
    }

    .form-links {
        margin-top: 15px;
        font-size: 0.9rem;
        color: #6c757d;
    }

    .form-links a {
        color: #0d6efd;
        text-decoration: none;
    }

    .form-links a:hover {
        text-decoration: underline;
    }

    .form-floating > .form-control:focus ~ label,
    .form-floating > .form-control:not(:placeholder-shown) ~ label {
        opacity: 0.65;
        transform: scale(0.85) translateY(-1.5rem) translateX(0.15rem);
    }

    .signup {
        > a {
            font-size: 1rem;
            color: #6c757d
        }
    }
</style>

<div class="site-login login-container">
    <div class="login-box">

        <h1><?= Html::encode($this->title) ?></h1>
        <p class="subtitle">Tizimga kirish uchun foydalanuvchi nomi va parolingizni kiriting.</p>

        <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

        <div class="form-floating mb-3">
            <?= $form->field($model, 'username', [
                'template' => '{input}{label}{error}{hint}',
                'options' => ['class' => 'form-floating'],
            ])->textInput(['autofocus' => true, 'placeholder' => 'Foydalanuvchi nomi', 'class' => 'form-control'])->label('Foydalanuvchi nomi') ?>
        </div>

        <div class="form-floating mb-3">
            <?= $form->field($model, 'password', [
                'template' => '{input}{label}{error}{hint}',
                'options' => ['class' => 'form-floating'],
            ])->textInput(['placeholder' => 'Parol', 'class' => 'form-control'])->label('Parol') ?>
        </div>

        <div class="form-check mb-3">
            <?= Html::activeCheckbox($model, 'rememberMe', [
                'class' => 'form-check-input',
                'label' => 'Meni eslab qol'
            ]) ?>
        </div>

        <div class="form-group">
            <?= Html::submitButton('Kirish', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
        </div>

        <?php ActiveForm::end(); ?>

        <div class="form-links mt-3">
            <div>
                Parolingizni unutdingizmi? <?= Html::a('Qayta tiklash', ['site/request-password-reset']) ?>
            </div>
            <div>
                Emailingizni tasdiqlash uchun xat kelmadimi? <?= Html::a('Qayta yuborish', ['site/resend-verification-email']) ?>
            </div>
            <div class="d-flex justify-content-center signup">
                <?= Html::a("Ro'yxatdan o'tish", ['site/signup']) ?>
            </div>
        </div>

    </div>
</div>
