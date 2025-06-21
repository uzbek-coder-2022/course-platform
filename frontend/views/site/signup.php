<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var \frontend\models\SignupForm $model */

use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;

$this->registerCssFile("@web/css/login.css");
$this->title = "Ro'yxatdan o'tish";
?>

<style>
    .login {
        > a {
            font-size: 1rem;
            color: #6c757d
        }
    }
</style>

<div class="site-signup">
    <h1><?= Html::encode($this->title) ?></h1>

    <p class="subtitle">Roʻyxatdan oʻtish uchun quyidagi maydonlarni toʻldiring:</p>

    <div class="row">
        <div class="col-lg-12">
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

            <div class="form-floating mb-3">
                <?= $form->field($model, 'first_name', [
                    'template' => '{input}{label}{error}{hint}',
                    'options' => ['class' => 'form-floating'],
                ])->textInput(['autofocus' => true, 'placeholder' => 'Ism', 'class' => 'form-control'])->label('Ism') ?>
            </div>

            <div class="form-floating mb-3">
                <?= $form->field($model, 'last_name', [
                    'template' => '{input}{label}{error}{hint}',
                    'options' => ['class' => 'form-floating'],
                ])->textInput(['placeholder' => 'Familiya', 'class' => 'form-control'])->label('Familiya') ?>
            </div>

            <div class="form-floating mb-3">
                <?= $form->field($model, 'email', [
                    'template' => '{input}{label}{error}{hint}',
                    'options' => ['class' => 'form-floating'],
                ])->textInput(['placeholder' => 'Elektron pochta', 'class' => 'form-control'])->label('Elektron pochta') ?>
            </div>

            <div class="form-floating mb-3">
                <?= $form->field($model, 'phone_number', [
                    'template' => '{input}{label}{error}{hint}',
                    'options' => ['class' => 'form-floating'],
                ])->textInput(['placeholder' => 'Telefon raqam', 'class' => 'form-control'])->label('Telefon raqam') ?>
            </div>

            <div class="form-floating mb-3">
                <?= $form->field($model, 'username', [
                    'template' => '{input}{label}{error}{hint}',
                    'options' => ['class' => 'form-floating'],
                ])->textInput(['placeholder' => 'Foydalanuvchi nomi', 'class' => 'form-control'])->label('Foydalanuvchi nomi') ?>
            </div>

            <div class="form-floating mb-3">
                <?= $form->field($model, 'password', [
                    'template' => '{input}{label}{error}{hint}',
                    'options' => ['class' => 'form-floating'],
                ])->textInput(['placeholder' => 'Parol', 'class' => 'form-control'])->label('Parol') ?>
            </div>

            <div class="form-floating mb-3">
                <?= $form->field($model, 'password_repeat', [
                    'template' => '{input}{label}{error}{hint}',
                    'options' => ['class' => 'form-floating'],
                ])->textInput(['placeholder' => 'Parolni tasdiqlash', 'class' => 'form-control'])->label('Parolni tasdiqlash') ?>
            </div>

            <div class="form-group">
                <?= Html::submitButton("Ro'yxatdan o'tish", ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
            </div>

            <?php ActiveForm::end(); ?>

            <div class="d-flex justify-content-center login mt-3">
                <?= Html::a("Kirish", ['site/login']) ?>
            </div>

        </div>
    </div>
</div>
