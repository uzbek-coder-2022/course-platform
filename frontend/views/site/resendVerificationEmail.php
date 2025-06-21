<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var \frontend\models\ResendVerificationEmailForm $model */

use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;

$this->registerCssFile("@web/css/login.css");
$this->title = 'Tasdiqlovchi havolani qayta yuborish';
?>

<style>

    .form-floating > .form-control:focus ~ label,
    .form-floating > .form-control:not(:placeholder-shown) ~ label {
        opacity: 1;
        transform: scale(0.85) translateY(-1.2rem) translateX(0.15rem);
    }
</style>

<div class="resend-verification-page">
    <div class="form-wrapper">
        <h1><?= Html::encode($this->title) ?></h1>
        <p>Iltimos, email manzilingizni kiriting. Tasdiqlovchi havola ushbu manzilga yuboriladi:</p>

        <?php $form = ActiveForm::begin(['id' => 'resend-verification-email-form']); ?>

        <div class="form-floating mb-3">
            <?= $form->field($model, 'email', [
                'template' => '{input}{label}{error}{hint}',
                'options' => ['class' => 'form-floating'],
            ])->textInput(['autofocus' => true, 'placeholder' => 'Elektron pochta', 'class' => 'form-control'])->label('Elektron pochta') ?>
        </div>

        <div class="form-group text-center">
            <?= Html::submitButton('Yuborish', ['class' => 'btn btn-primary w-100']) ?>
        </div>

        <?php ActiveForm::end(); ?>
    </div>
</div>
