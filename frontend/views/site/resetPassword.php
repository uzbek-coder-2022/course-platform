<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var \frontend\models\ResetPasswordForm $model */

use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;

$this->title = 'Parolni tiklash';
?>

<style>
    .reset-password-page {
        position: relative;
        background-color: #ffffff;
        color: #000;
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 40px 15px;
    }

    .form-wrapper {
        background: #f9f9f9;
        padding: 40px;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        max-width: 450px;
        width: 100%;
    }

    .form-wrapper h1 {
        font-size: 2rem;
        text-align: center;
        margin-bottom: 1rem;
    }

    .form-wrapper p {
        text-align: center;
        color: #6c757d;
        margin-bottom: 2rem;
    }

    .form-floating > .form-control:focus ~ label,
    .form-floating > .form-control:not(:placeholder-shown) ~ label {
        opacity: 1;
        transform: scale(0.85) translateY(-1.2rem) translateX(0.15rem);
    }
</style>

<div class="reset-password-page">
    <div class="form-wrapper">
        <h1><?= Html::encode($this->title) ?></h1>
        <p>Iltimos, yangi parolingizni kiriting:</p>

        <?php $form = ActiveForm::begin(['id' => 'reset-password-form']); ?>

        <div class="form-floating mb-3">
            <?= $form->field($model, 'password', [
                'template' => '{input}{label}{error}{hint}',
                'options' => ['class' => 'form-floating'],
            ])->passwordInput(['autofocus' => true, 'placeholder' => 'Yangi parol', 'class' => 'form-control'])->label('Yangi parol') ?>
        </div>

        <div class="form-group text-center mt-3">
            <?= Html::submitButton('Saqlash', ['class' => 'btn btn-primary w-100']) ?>
        </div>

        <?php ActiveForm::end(); ?>
    </div>
</div>
