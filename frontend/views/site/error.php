<?php

/** @var yii\web\View $this */
/** @var string $name */
/** @var string $message */
/** @var \yii\web\ErrorHandler $exception */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = $name;

$translatedMessage = 'Nomaʼlum xatolik yuz berdi. Iltimos, keyinroq qaytadan urinib ko‘ring.';

if (str_contains($message, 'Page not found') || $exception->statusCode == 404) {
    $translatedMessage = 'Kechirasiz, so‘ralgan sahifa topilmadi (404).';
} elseif (str_contains($message, 'Forbidden') || $exception->statusCode == 403) {
    $translatedMessage = 'Sizda bu sahifaga kirish uchun ruxsat yo‘q (403).';
} elseif (str_contains($message, 'Internal Server Error') || $exception->statusCode == 500) {
    $translatedMessage = 'Serverda ichki xatolik yuz berdi (500). Iltimos, keyinroq urinib ko‘ring.';
}
?>

<style>
    .error-wrapper {
        margin-top: 100px;
        text-align: center;
    }

    .error-code {
        font-size: 120px;
        font-weight: 700;
        color: #dc3545;
        text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
    }

    .error-message {
        font-size: 24px;
        color: #333;
    }

    .error-description {
        color: #555;
        margin-bottom: 30px;
    }

    .btn-home {
        font-size: 16px;
        padding: 12px 30px;
        border-radius: 30px;
    }

    @media (max-width: 768px) {
        .error-code {
            font-size: 72px;
        }

        .error-message {
            font-size: 20px;
        }
    }
</style>

<div class="container error-wrapper">
    <div class="error-code"><?= Html::encode($exception->statusCode ?? 'Xato') ?></div>
    <div class="error-message"><?= Html::encode($this->title) ?></div>
    <p class="error-description"><?= Html::encode($translatedMessage) ?></p>
    <p>
        Yuqoridagi xatolik sahifani ochishda yoki so‘rovingizni bajarishda yuz berdi.
    </p>
    <p>
        <a href="<?= Url::to([Yii::$app->user->isGuest ? '/site/login' : '/site/dashboard']) ?>"
           class="btn btn-outline-primary btn-home">
            Bosh sahifaga qaytish
        </a>
    </p>
</div>
