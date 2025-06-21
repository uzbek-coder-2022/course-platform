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

$this->registerCssFile("@web/css/animateProgressbar.css");
$this->registerJsFile("@web/js/animateProgressbar.js");

$this->title = 'Shaxsiy ma\'lumotlar';
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

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

    .main-content, .extra-main, .edit-info  {
        margin: 0;
        padding: 1rem 1rem;
        border-radius: 0.5rem;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }

    .main-content p {
        color: #666;
        line-height: 1.6;
    }

    .extra-info {
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
    .earmark {
        color: rgb(126, 34, 206);
        background-color: rgb(250, 245, 255);
    }
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

    @media (max-width: 768px) {
        .nav {
            margin-top: 1rem;
        }
    }

    .course-card {
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        padding: 20px;
        margin-bottom: 20px;
    }

    .icon-circle {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        background-color: rgb(239, 246, 255);
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;

        img {
            width: 40px;
        }
    }

    .progress {
        border-radius: 5px;
    }

    .course-header {
        display: flex;
        align-items: center;
        gap: 10px;
        margin-bottom: 15px;
    }

    .course-title {
        margin: 0;
        font-size: 1.1rem;
        font-weight: 600;
    }

    .continue-link {
        font-size: 0.9rem;
        text-decoration: none;
    }

    .continue-link:hover {
        text-decoration: underline;
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
                <a href="<?= Url::to(['/site/settings']) ?>">
                    <button class="btn btn-outline-primary">
                       Tahrirlash
                    </button>
                </a>
            </div>
        </div>
    </div>
    <div class="extra-content">
        <div class="container mt-4">
            <div class="row">
                <div class="col-md-4 col-lg-3 col-12">
                    <div class="extra-main">
                        <div class="card-body">
                            <div class="extra-info d-flex flex-column align-items-baseline justify-content-around">
                                <p><strong><i class="bi bi-info-circle text-info"></i>O'zi haqida:</strong></p> Logic will get you from A to B, imagination will take you everywhere ♟
                                <p><strong><i class="bi bi-envelope text-warning"></i>Elektron pochta:</strong></p> namuna@gmail.com
                                <p><strong><i class="bi bi-telephone text-success"></i>Telefon raqam:</strong></p> +998 (XX) XXX-XX-XX
                                <p><strong><i class="bi bi-calendar-check text-danger"></i>Ro'yxatdan o'tgan:</strong></p> Jan 18, 2023, 10:17
                                <p><strong><i class="bi bi-telegram text-primary"></i>Telegram:</strong></p> unknown
                                <a href="<?= Url::to(['/site/request-password-reset']) ?>">
                                    <p><strong><i class="bi bi-arrow-up-right"></i>Parolni o'zgartirish</strong></p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-8 col-lg-9 col-12">
                    <ul class="nav nav-tabs" id="progressTabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="completion-tab" data-bs-toggle="tab" data-bs-target="#completion" type="button" role="tab">Tugallangan</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="accuracy-tab" data-bs-toggle="tab" data-bs-target="#progress" type="button" role="tab">Statistika</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="speed-tab" data-bs-toggle="tab" data-bs-target="#diagram" type="button" role="tab">Reyting</button>
                        </li>
                    </ul>

                    <div class="tab-content mt-4">
                        <div class="tab-pane fade show active" id="completion" role="tabpanel">
                            <div class="container">
                                <div class="extra-info activity-card">
                                    <div class="row text-center">
                                        <div class="col activity-item">
                                            <div class="activity-icon video"><i class="bi bi-camera-video"></i></div>
                                            <div class="activity-number">582</div>
                                            <div class="activity-label">ta videodars</div>
                                        </div>
                                        <div class="col activity-item">
                                            <div class="activity-icon earmark"><i class="bi bi-file-earmark"></i></div>
                                            <div class="activity-number">369</div>
                                            <div class="activity-label">ta material</div>
                                        </div>
                                        <div class="col activity-item">
                                            <div class="activity-icon check"><i class="bi bi-clipboard-check"></i></div>
                                            <div class="activity-number">8</div>
                                            <div class="activity-label">ta test</div>
                                        </div>
                                        <div class="col activity-item">
                                            <div class="activity-icon checklist"><i class="bi bi-card-checklist"></i></div>
                                            <div class="activity-number">0</div>
                                            <div class="activity-label">ta kurs</div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="container mt-4">
                                <div class="row">
                                    <div class="top-courses d-flex flex-row align-items-baseline justify-content-end mb-3">
                                        <a href="<?= Url::to(['site/courses']) ?>" class="continue-link">
                                            Barchasini ko'rish
                                        </a>
                                    </div>
                                    <div class="col-12">
                                        <div class="course-card">
                                            <div class="course-header">
                                                <div class="icon-circle">
                                                    <img src="https://upload.wikimedia.org/wikipedia/commons/1/18/ISO_C%2B%2B_Logo.svg" alt="C++" width="25">
                                                </div>
                                                <p class="course-title mb-0">C++</p>
                                            </div>
                                            <div class="text-end">
                                                <a href="#" class="continue-link">Davom etish</a>
                                            </div>
                                            <div class="progress">
                                                <div class="progress-bar bg-primary" data-percent="91"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="course-card">
                                            <div class="course-header">
                                                <div class="icon-circle">
                                                    <img src="https://www.php.net/images/logos/php-logo.svg" alt="PHP" width="25">
                                                </div>
                                                <p class="course-title mb-0">PHP</p>
                                            </div>
                                            <div class="text-end">
                                                <a href="#" class="continue-link">Davom etish</a>
                                            </div>
                                            <div class="progress">
                                                <div class="progress-bar bg-primary" data-percent="50""></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="course-card">
                                            <div class="course-header">
                                                <div class="icon-circle">
                                                    <img src="https://upload.wikimedia.org/wikipedia/commons/6/62/CSS3_logo.svg" alt="CSS" width="25">
                                                </div>
                                                <p class="course-title mb-0">CSS</p>
                                            </div>
                                            <div class="text-end">
                                                <a href="#" class="continue-link">Davom etish</a>
                                            </div>
                                            <div class="progress">
                                                <div class="progress-bar bg-primary" data-percent="7"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="progress" role="tabpanel">
                            <div class="container">
                                <div class="edit-info">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <h5 class="mb-0">Progress</h5>
                                        <select id="chartType" class="form-select w-auto">
                                            <option value="completion">Completion</option>
                                            <option value="accuracy">Accuracy</option>
                                            <option value="speed">Speed</option>
                                        </select>
                                    </div>
                                    <canvas id="radarChart" width="400" height="400"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="diagram" role="tabpanel">
                            <div class="container">
                                <div class="edit-info">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <h5 class="mb-0">Diagramma</h5>
                                        <select id="chartType1" class="form-select w-auto">
                                            <option value="completion">Completion</option>
                                            <option value="accuracy">Accuracy</option>
                                            <option value="speed">Speed</option>
                                        </select>
                                    </div>
                                    <canvas id="barChart" width="400" height="400"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    const labels = ['MySQL', 'PostgreSQL', 'SQL', 'C', 'C++', 'DSA', 'Python', 'Git', 'PHP', 'NumPy'];

    const dataSets = {
        completion: [95, 90, 85, 80, 78, 60, 50, 45, 40, 35],
        accuracy:   [88, 85, 90, 75, 72, 58, 70, 50, 45, 30],
        speed:      [70, 72, 68, 60, 65, 50, 55, 40, 30, 25]
    };

    const ctx = document.getElementById('radarChart').getContext('2d');

    let radarChart = new Chart(ctx, {
        type: 'radar',
        data: {
            labels: labels,
            datasets: [{
                label: 'Completion',
                data: dataSets['completion'],
                backgroundColor: 'rgba(0, 123, 255, 0.3)',
                borderColor: 'rgba(0, 123, 255, 1)',
                borderWidth: 2,
                pointBackgroundColor: 'rgba(0, 123, 255, 1)'
            }]
        },
        options: {
            responsive: true,
            elements: {
                line: { tension: 0.3 }
            },
            scales: {
                r: {
                    angleLines: { display: true },
                    suggestedMin: 0,
                    suggestedMax: 100
                }
            }
        }
    });

    document.getElementById('chartType').addEventListener('change', function() {
        const selected = this.value;
        radarChart.data.datasets[0].data = dataSets[selected];
        radarChart.data.datasets[0].label = selected.charAt(0).toUpperCase() + selected.slice(1);
        radarChart.update();
    });

    // Diagramma
    const ctx1 = document.getElementById('barChart').getContext('2d');

    let barChart = new Chart(ctx1, {
        type: 'bar',
        data: {
            labels: labels,
            datasets: [{
                label: 'Completion',
                data: dataSets['completion'],
                backgroundColor: 'rgba(0, 123, 255, 0.6)',
                borderColor: 'rgba(0, 123, 255, 1)',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true,
                    suggestedMax: 100
                }
            }
        }
    });

    document.getElementById('chartType1').addEventListener('change', function() {
        const selected = this.value;
        barChart.data.datasets[0].data = dataSets[selected];
        barChart.data.datasets[0].label = selected.charAt(0).toUpperCase() + selected.slice(1);
        barChart.update();
    });
</script>

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



