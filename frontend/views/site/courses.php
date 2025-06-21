<?php
/** @var yii\web\View $this */

use yii\helpers\Url;

$this->registerCssFile("@web/css/animateProgressbar.css");
$this->registerJsFile("@web/js/animateProgressbar.js");

$this->title = 'Kurslar';
?>

<style>
    .container {
        padding: 0;
    }

    .top-courses {
        margin-top: 1rem;
        padding: 1.5rem;
        width: 100%;
        border-radius: 0.5rem;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }

    h4, h5 {
        margin: 0;
        padding: 0;
    }

    .card-img-top {
        height: 180px;
        object-fit: cover;
    }

    .content-main {
        > span {
            margin-top: 0.5rem;
            margin-right: 0.5rem;
            font-size: 0.75rem;
            border-color: #0d6efd !important;
            pointer-events: none;
            cursor: default;

            > i {
                margin-right: 0.3rem;
            }
        }
    }

    a {
        text-decoration: none;
    }
</style>

<div class="site-courses">
    <div class="container">
        <div class="top-courses d-flex flex-row align-items-baseline justify-content-between">
            <h4>Kurslar</h4>

            <form class="d-flex" method="get">
                <input class="form-control me-2" type="search" placeholder="Kurs nomini qidiring" name="search" value="">
                <button class="btn btn-outline-primary" type="submit">Qidirish</button>
            </form>
        </div>

        <div class="container py-4">
            <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 g-4">

                <div class="col">
                    <a href="<?= Url::to(['site/intro']) ?>">
                        <div class="card h-100" data-aos="fade-up-right">
                            <img src="https://picsum.photos/300/200?random=1" class="card-img-top" alt="Kurs rasmi">
                            <div class="card-body">
                                <h5 class="card-title">Python Asoslari</h5>

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
                        </div>
                    </a>
                </div>

                <div class="col">
                    <div class="card h-100" data-aos="fade-up-right">
                        <img src="https://picsum.photos/300/200?random=2" class="card-img-top" alt="Kurs rasmi">
                        <div class="card-body">
                            <h5 class="card-title">Web Dasturlash</h5>
                            <div class="progress">
                                <div class="progress-bar bg-primary" data-percent="40"></div>
                            </div>
                            <a href="<?= Url::to(['site/about']) ?>" class="continue-link w-100 mt-3 d-flex flex-row justify-content-end">Darsni davom ettirish</a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100" data-aos="fade-up-right">
                        <img src="https://picsum.photos/300/200?random=3" class="card-img-top" alt="Kurs rasmi">
                        <div class="card-body">
                            <h5 class="card-title">Frontend Asoslari</h5>

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
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100" data-aos="fade-up-right">
                        <img src="https://picsum.photos/300/200?random=4" class="card-img-top" alt="Kurs rasmi">
                        <div class="card-body">
                            <h5 class="card-title">C++ Dasturlash</h5>
                            <div class="progress">
                                <div class="progress-bar bg-primary" data-percent="75"></div>
                            </div>
                            <a href="#" class="continue-link w-100 mt-3 d-flex flex-row justify-content-end">Darsni davom ettirish</a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100" data-aos="fade-up-right">
                        <img src="https://picsum.photos/300/200?random=5" class="card-img-top" alt="Kurs rasmi">
                        <div class="card-body">
                            <h5 class="card-title">Mobil Dasturlash</h5>

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
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100" data-aos="fade-up-right">
                        <img src="https://picsum.photos/300/200?random=6" class="card-img-top" alt="Kurs rasmi">
                        <div class="card-body">
                            <h5 class="card-title">Ma'lumotlar Bazasi</h5>
                            <div class="progress">
                                <div class="progress-bar bg-primary" data-percent="60"></div>
                            </div>
                            <a href="#" class="continue-link w-100 mt-3 d-flex flex-row justify-content-end">Darsni davom ettirish</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <nav aria-label="..." class="d-flex justify-content-center">
            <ul class="pagination">
                <li class="page-item disabled">
                    <a class="page-link">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item active">
                    <a class="page-link" href="#" aria-current="page">2</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>
    </div>

</div>
