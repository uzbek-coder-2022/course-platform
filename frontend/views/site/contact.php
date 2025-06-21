<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var \frontend\models\ContactForm $model */

use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Aloqa';
?>

<style>
    .site-contact {
        color: black;
        padding-bottom: 40px;
    }

    .container {
        padding: 0;
    }

    .contact-header {
        margin-top: 1rem;
        margin-bottom: 1.25rem;
        padding: 1.5rem;
        width: 100%;
        border-radius: 0.5rem;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }

    .form-container {
        padding: 40px;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }

    .contact-info {
        padding: 40px;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }

    .contact-info h4 {
        margin-bottom: 20px;
    }

    .contact-item {
        margin-bottom: 15px;
        color: black;
    }

    .contact-item strong i {
        margin-right: 0.5rem;
        font-size: 1.3rem;
        color: #0d6efd;
    }

    .contact-item:last-child {
        margin: 0;
    }

    .btn-primary {
        padding: 10px 30px;
    }


    .map-container {
        position: relative;
        width: 100%;
        height: 0;
        padding-bottom: 56.25%;
        margin-top: 1.25rem;
    }

    .map-container iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border: 0;
        border-radius: 0.5rem;
    }

    @media (max-width: 992px) {
        .contact-info {
            margin-top: 1rem;
        }
    }
</style>

<div class="site-contact">
    <div class="container">
        <div class="contact-header">
            <h4><?= Html::encode($this->title) ?></h4>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="form-container">
                    <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                    <div class="form-floating mb-3">
                        <?= $form->field($model, 'name', [
                            'template' => '{input}{label}{error}{hint}',
                            'options' => ['class' => 'form-floating'],
                        ])->textInput([
                            'placeholder' => "To'liq ism",
                            'class' => 'form-control'
                        ])->label("To'liq ism") ?>
                    </div>

                    <div class="form-floating mb-3">
                        <?= $form->field($model, 'email', [
                            'template' => '{input}{label}{error}{hint}',
                            'options' => ['class' => 'form-floating'],
                        ])->textInput([
                            'placeholder' => 'Elektron pochta',
                            'class' => 'form-control'
                        ])->label("Elektron pochta") ?>
                    </div>

                    <div class="form-floating mb-3">
                        <?= $form->field($model, 'subject', [
                            'template' => '{input}{label}{error}{hint}',
                            'options' => ['class' => 'form-floating'],
                        ])->dropDownList(
                            [
                                'shikoyat' => 'Shikoyat',
                                'taklif' => 'Taklif',
                                'savol' => 'Savol',
                                'tashakkur' => 'Tashakkur',
                            ],
                            [
                                'prompt' => 'Tanlang...',
                                'class' => 'form-select',
                                'aria-label' => 'Murojaat turi'
                            ]
                        )->label("Murojaat turi") ?>
                    </div>

                    <div class="form-floating mb-3">
                        <?= $form->field($model, 'body', [
                            'template' => '{input}{label}{error}{hint}',
                            'options' => ['class' => 'form-floating'],
                        ])->textarea([
                            'class' => 'form-control',
                            'style' => 'height: 160px; resize: none;',
                            'placeholder' => 'Xabar matni'
                        ])->label("Xabar matni") ?>
                    </div>

                    <div class="mb-3">
                        <?= $form->field($model, 'verifyCode')->widget(Captcha::class, [
                            'template' => '<div class="row"><div class="col-lg-4">{image}</div><div class="col-lg-8">{input}</div></div>',
                            'options' => ['class' => 'form-control', 'placeholder' => 'Tasdiqlash kodi']
                        ])->label("Tasdiqlash kodi") ?>
                    </div>

                    <div class="form-group d-flex justify-content-end">
                        <?= Html::submitButton('Yuborish', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                    </div>

                    <?php ActiveForm::end(); ?>

                </div>
            </div>

            <div class="col-lg-6">
                <div class="contact-info">
                    <h4>Bog'lanish uchun ma'lumot</h4>

                    <div class="contact-item">
                        <strong>
                            <i class="bi bi-geo-alt"></i>
                            Manzil:
                        </strong><br>
                        <p>Q9QF+63V, Andijon, Andijon Viloyati, Oʻzbekiston</p>
                    </div>

                    <div class="contact-item">
                        <strong>
                            <i class="bi bi-telephone"></i>
                            Telefon:
                        </strong><br>
                        <p>+998 XX XXX-XX-XX</p>
                    </div>

                    <div class="contact-item">
                        <strong>
                            <i class="bi bi-envelope"></i>
                            Elektron pochta:
                        </strong><br>
                        <p>namuna@gmail.com</p>
                    </div>

                    <div class="map-container">
                        <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29290.780891764993!2d72.36662969254996!3d40.79903111160736!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38bcec8187a14f81%3A0x82b53c72a937651f!2sAndijan%20State%20University!5e1!3m2!1sen!2s!4v1750072021946!5m2!1sen!2s"
                                allowfullscreen=""
                                loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>