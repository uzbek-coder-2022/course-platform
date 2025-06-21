<?php

/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Web dasturlashga kirish';
?>

<style>
    .course-title {
        margin-bottom: 2rem;
    }

    .course-name {
        font-size: 3rem;
    }

    .course-progress {
        font-size: 1.3rem;

        > span {
            color: #0d6efd;
            font-weight: 600;
        }
    }

    .course-content {
        > .content-main {
            margin: 1rem 0;

            > span {
                margin-top: 0.5rem;
                margin-right: 1rem;
                font-size: 0.75rem;
                border-color: #0d6efd !important;
                pointer-events: none;
                cursor: default;

                > i {
                    margin-right: 0.3rem;
                }
            }
        }
    }

    .accordion-button.collapsed::after {
        content: '+' !important;
        position: absolute;
        top: 0.2rem !important;
        right: 0.2rem !important;
        background-image: none;
        font-size: 1.5rem;
        margin-left: auto;
        transition: transform 0.2s;
    }

    .accordion-button:not(.collapsed)::after {
        content: '+';
        position: absolute;
        top: 0.4rem !important;
        right: 0 !important;
        font-size: 1.5rem;
        background-image: none;
        transform: rotate(45deg);
    }

    .list-group {
        > a {
            text-decoration: none;
        }
    }

    .list-group-item {
        padding: 1rem 20px;
    }

    .process a {
        margin-left: 1rem;
        padding: 0.4rem 0.75rem;
    }

    .continue-link {
        font-size: 0.9rem;
        text-decoration: none;
    }

    .continue-link:hover {
        text-decoration: underline;
    }

    @media (max-width: 768px) {
        .course-title {
            flex-direction: column;
        }

        .course-content > button {
            font-size: 1rem;
        }
    }
</style>



<div class="site-about">
    <div class="course-title d-flex align-items-center justify-content-around">
        <div>
            <h1 class="course-name"><?= Html::encode($this->title) ?></h1>
            <p class="course-progress">Siz kursni <span>15%</span> tugatdingiz!</p>
        </div>
        <img src="image/web.png" alt="Salom" style="max-width: 400px; border-radius: 10px">
    </div>
    <hr>
    <div class="course-content position-relative">
        <div class="container d-flex flex-row justify-content-between align-items-baseline" style="padding: 0">
            <h3 class="content-header">Kurs tarkibi</h3>
            <div class="process">
                <a href="<?= Url::to(['site/subject']) ?>" class="btn btn-outline-primary btn-lg">Davom etish</a>
            </div>
        </div>
        <div class="content-main">
            <span class="btn btn-outline-primary">
                <i class="bi bi-camera-video"></i>
                30 ta
            </span>
            <span class="btn btn-outline-primary">
                <i class="bi bi-clock"></i>
                10 soat
            </span>
            <span class="btn btn-outline-primary">
                <i class="bi bi-file-earmark"></i>
                10 ta
            </span>
            <span class="btn btn-outline-primary">
                <i class="bi bi-clipboard-check"></i>
                7 ta
            </span>
        </div>
    </div>

    <div class="accordion" id="accordionPanelsStayOpenExample">
        <div class="accordion" id="accordionCourse">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button position-relative fs-3 d-flex flex-column align-items-start collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="false" aria-controls="panelsStayOpen-collapseOne">
                        <div class="accordion-header-title d-flex justify-content-between w-100">
                            <div class="text d-flex">
                                <span class="text-secondary px-3">01</span>
                                <span>HTML</span>
                            </div>
                            <div class="percent px-3">
                                <span>75%</span>
                            </div>
                        </div>
                        <div class="accordion-header-progress px-3 mt-3" style="width: 100%">
                            <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar w-75"></div>
                            </div>
                        </div>
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionCourse">
                    <div class="accordion-body">
                        <div class="card w-100">
                            <ul class="list-group list-group-flush">
                                <a href="<?= Url::to(['site/subject']) ?>">
                                    <li class="list-group-item continue-link">
                                        <div class="accordion-header-title d-flex justify-content-between w-100">
                                            <div class="text d-flex">
                                                <i class="bi bi-camera-video"></i>
                                                <span class="text-secondary px-2">1.1</span>
                                                <span>HTML haqida tushuncha</span>
                                            </div>
                                            <div class="percent px-3">
                                                <span class="badge rounded-pill text-bg-success">Yakunlangan</span>
                                            </div>
                                        </div>
                                    </li>
                                </a>
                                <a href="<?= Url::to(['site/subject']) ?>">
                                    <li class="list-group-item continue-link">
                                        <div class="accordion-header-title d-flex justify-content-between w-100">
                                            <div class="text d-flex">
                                                <i class="bi bi-play-circle"></i>
                                                <span class="text-secondary px-2">1.2</span>
                                                <span>Formatlash teglari bilan tanishuv</span>
                                            </div>
                                            <div class="percent px-3">
                                                <span class="badge rounded-pill text-bg-warning">Davom etmoqda</span>
                                            </div>
                                        </div>
                                    </li>
                                </a>

                                <a href="<?= Url::to(['site/test']) ?>">
                                    <li class="list-group-item continue-link">
                                        <div class="accordion-header-title d-flex justify-content-between w-100">
                                            <div class="text d-flex">
                                                <i class="bi bi-clipboard-check"></i>
                                                <span class="text-secondary px-2">1.3</span>
                                                <span>Test</span>
                                            </div>
                                            <div class="percent px-3">
                                                <span class="badge rounded-pill text-bg-secondary">Ishlanmagan</span>
                                            </div>
                                        </div>
                                    </li>
                                </a>
                                <a href="<?= Url::to(['site/material']) ?>">
                                    <li class="list-group-item continue-link">
                                        <div class="accordion-header-title d-flex justify-content-between w-100">
                                            <div class="text d-flex">
                                                <i class="bi bi-file-earmark"></i>
                                                <span class="text-secondary px-2">1.4</span>
                                                <span>Materiallar</span>
                                            </div>
                                            <div class="percent px-3">
                                                <span class="badge rounded-pill text-bg-info">Ko'rilmagan</span>
                                            </div>
                                        </div>
                                    </li>
                                </a>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button position-relative fs-3 d-flex flex-column align-items-start collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                        <div class="accordion-header-title d-flex justify-content-between w-100">
                            <div class="text d-flex">
                                <span class="text-secondary px-3">02</span>
                                <span>CSS</span>
                            </div>
                            <div class="percent px-3">
                                <span>0%</span>
                            </div>
                        </div>
                        <div class="accordion-header-progress px-3 mt-3" style="width: 100%">
                            <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar"></div>
                            </div>
                        </div>
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionCourse">
                    <div class="accordion-body">
                        <div class="card w-100">
                            <ul class="list-group list-group-flush">
                                <a href="https://youtu.be/9dUhZq9dkHM?si=wHBZ-3oZuNyR7jM6">
                                    <li class="list-group-item">
                                        <div class="accordion-header-title d-flex justify-content-between w-100">
                                            <div class="text d-flex">
                                                <i class="bi bi-camera-video"></i>
                                                <span class="text-secondary px-2">1.1</span>
                                                <span>HTML haqida tushuncha</span>
                                            </div>
                                            <div class="percent px-3">
                                                <span class="badge rounded-pill text-bg-success">Yakunlangan</span>
                                            </div>
                                        </div>
                                    </li>
                                </a>
                                <a href="https://youtu.be/o2ghjG7a5ik?si=957LGWe1bdbRCMWn">
                                    <li class="list-group-item">
                                        <div class="accordion-header-title d-flex justify-content-between w-100">
                                            <div class="text d-flex">
                                                <i class="bi bi-play-circle"></i>
                                                <span class="text-secondary px-2">1.2</span>
                                                <span>Formatlash teglari bilan tanishuv</span>
                                            </div>
                                            <div class="percent px-3">
                                                <span class="badge rounded-pill text-bg-warning">Davom etmoqda</span>
                                            </div>
                                        </div>
                                    </li>
                                </a>
                                <li class="list-group-item">
                                    <div class="accordion-header-title d-flex justify-content-between w-100">
                                        <div class="text d-flex">
                                            <i class="bi bi-clipboard-check"></i>
                                            <span class="text-secondary px-2">1.3</span>
                                            <span>Test</span>
                                        </div>
                                        <div class="percent px-3">
                                            <span class="badge rounded-pill text-bg-secondary">Ishlanmagan</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="accordion-header-title d-flex justify-content-between w-100">
                                        <div class="text d-flex">
                                            <i class="bi bi-file-earmark"></i>
                                            <span class="text-secondary px-2">1.4</span>
                                            <span>Materiallar</span>
                                        </div>
                                        <div class="percent px-3">
                                            <span class="badge rounded-pill text-bg-info">Ko'rilmagan</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button position-relative fs-3 d-flex flex-column align-items-start collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                        <div class="accordion-header-title d-flex justify-content-between w-100">
                            <div class="text d-flex">
                                <span class="text-secondary px-3">03</span>
                                <span>JS</span>
                            </div>
                            <div class="percent px-3">
                                <span>0%</span>
                            </div>
                        </div>
                        <div class="accordion-header-progress px-3 mt-3" style="width: 100%">
                            <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar"></div>
                            </div>
                        </div>
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionCourse">
                    <div class="accordion-body">
                        <div class="card w-100">
                            <ul class="list-group list-group-flush">
                                <a href="https://youtu.be/9dUhZq9dkHM?si=wHBZ-3oZuNyR7jM6">
                                    <li class="list-group-item">
                                        <div class="accordion-header-title d-flex justify-content-between w-100">
                                            <div class="text d-flex">
                                                <i class="bi bi-camera-video"></i>
                                                <span class="text-secondary px-2">1.1</span>
                                                <span>HTML haqida tushuncha</span>
                                            </div>
                                            <div class="percent px-3">
                                                <span class="badge rounded-pill text-bg-success">Yakunlangan</span>
                                            </div>
                                        </div>
                                    </li>
                                </a>
                                <a href="https://youtu.be/o2ghjG7a5ik?si=957LGWe1bdbRCMWn">
                                    <li class="list-group-item">
                                        <div class="accordion-header-title d-flex justify-content-between w-100">
                                            <div class="text d-flex">
                                                <i class="bi bi-play-circle"></i>
                                                <span class="text-secondary px-2">1.2</span>
                                                <span>Formatlash teglari bilan tanishuv</span>
                                            </div>
                                            <div class="percent px-3">
                                                <span class="badge rounded-pill text-bg-warning">Davom etmoqda</span>
                                            </div>
                                        </div>
                                    </li>
                                </a>
                                <li class="list-group-item">
                                    <div class="accordion-header-title d-flex justify-content-between w-100">
                                        <div class="text d-flex">
                                            <i class="bi bi-clipboard-check"></i>
                                            <span class="text-secondary px-2">1.3</span>
                                            <span>Test</span>
                                        </div>
                                        <div class="percent px-3">
                                            <span class="badge rounded-pill text-bg-secondary">Ishlanmagan</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="accordion-header-title d-flex justify-content-between w-100">
                                        <div class="text d-flex">
                                            <i class="bi bi-file-earmark"></i>
                                            <span class="text-secondary px-2">1.4</span>
                                            <span>Materiallar</span>
                                        </div>
                                        <div class="percent px-3">
                                            <span class="badge rounded-pill text-bg-info">Ko'rilmagan</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
