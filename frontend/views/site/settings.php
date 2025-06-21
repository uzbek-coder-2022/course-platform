<?php
use common\models\User;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use yii\grid\GridView;
use yii\data\ActiveDataProvider;
use yii\widgets\LinkPager;

/** @var yii\web\View $this */
/** @var  title */

$this->title = 'Tahrirlash';
?>

<style>
    .container {
        padding: 0;
    }

    .main-info {
        position: relative;
        height: 100px;

        > div {
            z-index: 2;
        }
    }

    .user-image img {
        position: absolute;
        top: 30px;
        left: 30px;
        width: 100px;
        height: 100px;
        border-radius: 50%;
    }

    .user-fullname {
        position: absolute;
        top: 40px;
        left: 150px;
        font-size: 1.5rem;
        color: white;
    }

    .user-username {
        position: absolute;
        top: 80px;
        left: 150px;
    }

    .main-info::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 80px;
        border-radius: 0.5rem;
        background-color: #99beff;
        z-index: 0;
    }

    .main-content, .edit-info  {
        margin: 0;
        padding: 1rem 1rem;
        border-radius: 0.5rem;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }

    .main-content p {
        color: #666;
        line-height: 1.6;
    }

    a {
        text-decoration: none;
    }
</style>

<div class="site-user">
    <div class="main-content">
        <div class="container">
            <div class="main-info d-flex flex-row align-items-baseline justify-content-around">
                <div class="user-image">
                    <img src="image/web.jpg" alt="">
                </div>
                <div class="user-fullname">
                    <b>Teshaboyev Bolta</b>
                </div>
                <div class="user-username">
                    <i>foydalanuvchi_nomi</i>
                </div>
            </div>

            <div class="d-flex flex-row justify-content-end">
                <a href="<?= Url::to(['/site/user']) ?>">
                    <button class="btn btn-outline-primary">
                        Ortga qaytish
                    </button>
                </a>
            </div>
        </div>
    </div>
    <div class="extra-content">
        <div class="container mt-4">
            <div class="row">
                <div class="col-md-12">
                    <div class="edit-info">
                        <div class="card-body">
                            <h5 class="card-title mb-4">Ma'lumotlarni tahrirlash</h5>
                            <form>
                                <div class="mb-3">
                                    <label for="userPhoto" class="form-label">Foydalanuvchi rasmi</label>
                                    <input class="form-control" type="file" id="userPhoto">
                                </div>

                                <div class="mb-3">
                                    <label for="firstName" class="form-label">Ism</label>
                                    <input type="text" class="form-control" id="firstName" placeholder="Ismingizni kiriting">
                                </div>

                                <div class="mb-3">
                                    <label for="lastName" class="form-label">Familiya</label>
                                    <input type="text" class="form-control" id="lastName" placeholder="Familiyangizni kiriting">
                                </div>

                                <div class="mb-3">
                                    <label for="email" class="form-label">Elektron pochta</label>
                                    <input type="email" class="form-control" id="email" placeholder="example@gmail.com">
                                </div>

                                <div class="mb-3">
                                    <label for="phone" class="form-label">Telefon raqam</label>
                                    <input type="tel" class="form-control" id="phone" placeholder="+998 90 123 45 67">
                                </div>

                                <div class="mb-3">
                                    <label for="bio" class="form-label">O'zi haqida</label>
                                    <textarea class="form-control" id="bio" rows="3" placeholder="O'zingiz haqida qisqacha yozing..."></textarea>
                                </div>

                                <div class="mb-3">
                                    <label for="telegram" class="form-label">Telegram havolasi</label>
                                    <input type="url" class="form-control" id="telegram" placeholder="https://t.me/username">
                                </div>

                                <button type="submit" class="btn btn-primary">Saqlash</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

