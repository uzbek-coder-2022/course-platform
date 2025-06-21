<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var \frontend\models\PasswordResetRequestForm $model */

use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;

$this->registerCssFile("@web/css/login.css");
$this->title = 'Parolni tiklash';
?>

<div class="site-request-password-reset d-flex align-items-center">
    <div class="form-container">
        <div class="contact-header">
            <h1><?= Html::encode($this->title) ?></h1>
            <p>Iltimos, elektron pochtangizni kiriting. Parolni tiklash havolasi sizga yuboriladi.</p>
        </div>

        <?php $form = ActiveForm::begin(['id' => 'request-password-reset-form']); ?>

        <div class="form-floating mb-3">
            <?= $form->field($model, 'email', [
                'template' => '{input}{label}{error}{hint}',
                'options' => ['class' => 'form-floating'],
            ])->textInput(['autofocus' => true, 'placeholder' => 'Elektron pochta', 'class' => 'form-control'])->label('Elektron pochta') ?>
        </div>

        <div class="form-group mt-3">
            <?= Html::submitButton('Yuborish', ['class' => 'btn btn-primary w-100']) ?>
        </div>

        <?php ActiveForm::end(); ?>
    </div>
</div>
