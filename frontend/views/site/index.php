<?php

/* @var $this yii\web\View */
use yii\helpers\Url;

$this->title = 'Dashboard';
?>

<style>
    .container {
        padding: 0;
    }

    .top-courses, .search {
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
            margin: 0.5rem 0.5rem 0.7rem 0;
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

    @media (max-width: 768px) {
        #submit {
            display: none;
        }
    }

    .extra-info {
        margin-top: 1rem;
        margin-bottom: 15px;
        color: black;

        p {
            margin: 0;
            margin-top: 1rem;
        }

        strong i {
            margin-right: 0.5rem;
            font-size: 1.3rem;
            color: #0d6efd;
        }
    }

    a {
        text-decoration: none;
    }

    .activity-card {
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .activity-item {
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    .activity-icon {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 4rem;
        height: 4rem;
        font-size: 30px;
        margin-bottom: 10px;
        color: #0d6efd;
        border-radius: 0.5rem;
    }
    /*.earmark {*/
    /*    color: rgb(126, 34, 206);*/
    /*    background-color: rgb(250, 245, 255);*/
    /*}*/
    .video {
        color: rgb(29, 78, 216);
        background-color: rgb(239, 246, 255);
    }
    .check {
        color: rgb(180, 83, 9);
        background-color: rgb(255, 251, 235);
    }
    .checklist {
        color: rgb(21, 128, 61);
        background-color: rgb(240, 253, 244);
    }
    .activity-number {
        font-size: 24px;
        font-weight: bold;
    }
    .activity-label {
        font-size: 14px;
        color: #6c757d;
    }

    ul {
        list-style-type: none;
    }
</style>

<div class="site-index">
    <!-- Carousel with indicators -->
    <div id="coursesCarousel" class="carousel slide" data-bs-ride="carousel">

        <!-- 🔘 Indicators (dots) -->
<!--        <div class="carousel-indicators">-->
<!--            <button type="button" data-bs-target="#coursesCarousel" data-bs-slide-to="0" class="active rounded-circle" aria-current="true" aria-label="Kurs 1"></button>-->
<!--            <button type="button" data-bs-target="#coursesCarousel" data-bs-slide-to="1" class="rounded-circle" aria-label="Kurs 2"></button>-->
<!--            <button type="button" data-bs-target="#coursesCarousel" data-bs-slide-to="2" class="rounded-circle" aria-label="Kurs 3"></button>-->
<!--        </div>-->

        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row justify-content-center">
                    <div class="col-md-12" data-aos="fade-up">
                        <div class="card shadow-sm">
                            <img src="https://picsum.photos/800/300?random=11" class="card-img-top" alt="Kurs rasmi">
                            <div class="card-body">
                                <h4 class="card-title text-primary">Dasturlash Asoslari</h4>
                                <p class="card-text text-muted">Python va C++ asoslarini bosqichma-bosqich o‘rganing. Real loyihalar bilan bilimlarni mustahkamlang.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <div class="row justify-content-center">
                    <div class="col-md-12" data-aos="fade-up">
                        <div class="card shadow-sm">
                            <img src="https://picsum.photos/800/300?random=12" class="card-img-top" alt="Kurs rasmi">
                            <div class="card-body">
                                <h4 class="card-title text-primary">Grafik Dizayn</h4>
                                <p class="card-text text-muted">Photoshop, Figma, Canva orqali dizayn loyihalari. Ko‘rkam va interaktiv ishlanmalar tayyorlang.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <div class="row justify-content-center">
                    <div class="col-md-12" data-aos="fade-up">
                        <div class="card shadow-sm">
                            <img src="https://picsum.photos/800/300?random=13" class="card-img-top" alt="Kurs rasmi">
                            <div class="card-body">
                                <h4 class="card-title text-primary">Ingliz Tili</h4>
                                <p class="card-text text-muted">Grammatika, so‘z boyligi va amaliy mashg‘ulotlar orqali til ko‘nikmalaringizni rivojlantiring.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ⬅️➡️ Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#coursesCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bg-dark rounded-circle"></span>
            <span class="visually-hidden">Oldingi</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#coursesCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon bg-dark rounded-circle"></span>
            <span class="visually-hidden">Keyingi</span>
        </button>
    </div>



    <div class="top-courses" data-aos="fade-up-right">
        <h4>Platforma statistikasi</h4>
    </div>

    <div class="container">
        <div class="extra-info activity-card" data-aos="fade-up-left">
            <div class="row text-center">

                <!--                    <div class="col activity-item">-->
                <!--                        <div class="activity-icon earmark">-->
                <!--                            <i class="bi bi-book" style="font-size: 2rem;"></i>-->
                <!--                        </div>-->
                <!--                        <div class="activity-number">369</div>-->
                <!--                        <div class="activity-label">ta material</div>-->
                <!--                    </div>-->
                <div class="col activity-item">
                    <div class="activity-icon check">
                        <i class="bi bi-book" style="font-size: 2rem;"></i>
                    </div>
                    <div class="activity-number">120</div>
                    <div class="activity-label">ta kurs</div>
                </div>
                <div class="col activity-item">
                    <div class="activity-icon video">
                        <i class="bi bi-people" style="font-size: 2rem;"></i>
                    </div>
                    <div class="activity-number">582</div>
                    <div class="activity-label">ta foydalanuvchi</div>
                </div>
                <div class="col activity-item">
                    <div class="activity-icon checklist">
                        <i class="bi bi-patch-check" style="font-size: 2rem;"></i>
                    </div>
                    <div class="activity-number">1000</div>
                    <div class="activity-label">ta sertifikat berilgan</div>
                </div>
            </div>
        </div>
    </div>

    <section class="top-courses" id="about-platform">
        <div class="container" data-aos="flip-down">
            <div class="row mb-4">
                <div class="col text-center">
                    <h2 class="fw-bold"><i class="bi bi-mortarboard-fill text-primary"></i> EduPlatforma haqida</h2>
                    <p class="text-muted">Zamonaviy bilimlar uchun onlayn ta'lim platformasi</p>
                </div>
            </div>

            <div class="row gy-4 d-flex justify-content-between">
                <div class="col-md-6">
                    <h4 class="fw-semibold mb-3"><i class="bi bi-bullseye text-primary me-2"></i> Nima uchun EduPlatforma?</h4>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><i class="bi bi-laptop me-2 text-primary"></i> Oson va qulay onlayn ta’lim</li>
                        <li class="list-group-item"><i class="bi bi-person-check me-2 text-primary"></i> Tajribali o‘qituvchilar</li>
                        <li class="list-group-item"><i class="bi bi-journals me-2 text-primary"></i> Turli kurslar: dasturlash, dizayn, tillar va boshqalar</li>
                        <li class="list-group-item"><i class="bi bi-phone me-2 text-primary"></i> Har qanday qurilmada ishlaydi</li>
                        <li class="list-group-item"><i class="bi bi-award me-2 text-primary"></i> Sertifikatli ta’lim</li>
                    </ul>
                </div>

                <div class="col-md-6">
                    <h4 class="fw-semibold mb-3"><i class="bi bi-people text-primary me-2"></i> Kimlar uchun?</h4>
                    <p class="text-muted"><i class="bi bi-info-circle text-primary me-2"></i> Platformamiz quyidagi foydalanuvchilar uchun mo‘ljallangan:</p>
                    <ul class="list-group">
                        <li class="list-group-item"><i class="bi bi-code-slash text-primary me-2"></i> Yosh dasturchilar va texnologiyaga qiziquvchilar</li>
                        <li class="list-group-item"><i class="bi bi-bar-chart-line text-primary me-2"></i> Malaka oshirmoqchi bo‘lgan mutaxassislar</li>
                        <li class="list-group-item"><i class="bi bi-translate text-primary me-2"></i> Til o‘rganmoqchi bo‘lganlar</li>
                        <li class="list-group-item"><i class="bi bi-journal-text text-primary me-2"></i> Abituriyentlar va o‘qituvchilar</li>
                    </ul>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col text-center">
                    <h4 class="fw-bold mb-3"><i class="bi bi-rocket-takeoff text-primary me-2"></i> Kelajak sari qadam qo‘ying!</h4>
                    <p class="text-muted mb-4">EduPlatforma orqali siz bilim olishingiz, o‘zingizni rivojlantirishingiz va muvaffaqiyat sari yo‘l ochishingiz mumkin. Kurslaringizni bugunoq boshlang!</p>
                </div>
            </div>
        </div>
    </section>



    <section class="py-4 search">
        <div class="container" data-aos="flip-up">
            <h2 class="text-center mb-3">O'zingizga mos kursni toping</h2>
            <form class="d-flex flex-row justify-content-center gap-2">
                <input type="text" class="form-control flex-grow-1" placeholder="Kurs nomini kiriting..." style="min-width: 250px; max-width: 500px;">
                <button type="submit" class="btn btn-primary"><i class="bi bi-search"></i> <span id="submit">Qidirish</span></button>
            </form>
        </div>
    </section>


    <div class="top-courses d-flex flex-row align-items-baseline justify-content-between" data-aos="fade-up-left">
        <h4>Mashhur kurslarimiz</h4>

        <a href="<?= Url::to(['site/courses']) ?>" class="btn btn-outline-primary">
            Barchasini ko'rish
        </a>
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

        </div>
    </div>
</div>


<script>
    function animateCountUp(el, target, duration) {
        let start = 0;
        const stepTime = Math.max(Math.floor(duration / target), 10);
        const counter = setInterval(() => {
            start++;
            el.innerText = start;
            if (start >= target) clearInterval(counter);
        }, stepTime);
    }

    document.addEventListener("DOMContentLoaded", () => {
        const counters = document.querySelectorAll('.activity-number');
        counters.forEach(el => {
            const target = parseInt(el.innerText);
            el.innerText = "0";
            animateCountUp(el, target, 500);
        });
    });
</script>