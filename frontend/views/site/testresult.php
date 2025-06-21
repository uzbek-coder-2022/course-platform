<?php

use yii\helpers\Url;

$this->title = 'Test natijasi';

$status = true;
?>

<style>
    .container {
        padding: 0;
    }

    .test-name, .test-main, .test-recent, .test-rating {
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

    .test-rating {
        > ul {
            margin: 0;
            list-style-type: none;

            li {
                margin: 0 0.25rem;
                font-size: 1.3rem;
            }
        }
    }

    .btn-outline-primary {
        padding: 10px 30px;
    }

    .stars li {
        color: #ccc;
        cursor: pointer;
        transition: color 0.2s ease-in-out;
    }

    .stars li.filled {
        color: gold;
    }

    .toast-container {
        position: fixed;
        padding: 1.5rem;
        top: 1rem;
        right: 1rem;
        z-index: 9999;

        div {
            font-size: 1rem;
        }
    }

    @media (max-width: 768px) {
        .test-name a {
            display: none;
        }
    }

    .test-main {
        td {
            font-size: 1.3rem;
        }
    }

    .correct-answer {
        background-color: rgb(67, 223, 116);
    }

    .incorrect-answer {
        background-color: rgb(230, 78, 78);
    }
</style>

<script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.6.0/dist/confetti.browser.min.js"></script>

<div class="site-subject">
    <div class="container">
        <div class="test-name d-flex justify-content-between align-items-baseline">
            <h4>1.1 HTML haqida tushuncha</h4>
        </div>

        <div class="test-main">
            <div class="container">
                <div class="card-body">
                    <p class="card-text text-muted mb-3">Ushbu testdagi natijangiz o'rganilgan mavzulardagi egallagan asosiy bilim va ko‘nikmalaringizni aks ettiradi.</p>

                    <table class="table table-bordered text-center">
                        <thead class="table-light">
                        <tr>
                            <th>Natijangiz</th>
                            <th>To'g'ri javoblar</th>
                            <th>Davomiylik</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><span class="badge bg-success">63%</span></td>
                            <td><span class="badge bg-primary">19 / 30 ta</span></td>
                            <td><span class="badge bg-info">10 daqiqa</span></td>
                        </tr>
                        </tbody>
                    </table>

                    <div class="text-end">
                        <a href="<?= Url::to(['site/test'])?>" class="btn btn-outline-primary">Testga qaytish</a>
                    </div>
                </div>
            </div>
        </div>


        <div class="test-rating d-flex flex-row align-items-baseline justify-content-between">
            <h5>Testni baholang:</h5>
            <ul class="stars d-flex flex-row gap-2 p-0 m-0">
                <li data-value="1"><i class="bi bi-star"></i></li>
                <li data-value="2"><i class="bi bi-star"></i></li>
                <li data-value="3"><i class="bi bi-star"></i></li>
                <li data-value="4"><i class="bi bi-star"></i></li>
                <li data-value="5"><i class="bi bi-star"></i></li>
            </ul>
        </div>


        <div class="test-recent">
            <p class="card-text text-muted mb-3">Test savollaridagi natijalar:</p>

            <div class="accordion" id="testAccordion">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading1">
                        <button class="accordion-button collapsed correct-answer" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1">
                            1. Xayol turlari
                        </button>
                    </h2>
                    <div id="collapse1" class="accordion-collapse collapse" data-bs-parent="#testAccordion">
                        <div class="accordion-body">
                            <div class="p-2 bg-success text-white rounded">
                                <i class="bi bi-check-circle-fill me-1"></i> tasavvur, xayol, ijodiy xayol, ixtiyoriy va ixtiyorsiz xayol
                            </div>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading2">
                        <button class="accordion-button collapsed incorrect-answer" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2">
                            2. Mexanik esda olib qolish deb nimaga aytiladi?
                        </button>
                    </h2>
                    <div id="collapse2" class="accordion-collapse collapse" data-bs-parent="#testAccordion">
                        <div class="accordion-body">
                            <div class="p-2 bg-danger text-white rounded">
                                <i class="bi bi-x-circle-fill me-1"></i> Javobingiz: biror narsani anglab eslab qolish
                            </div>
                            <div class="mt-2 p-2 bg-light border-start border-4 border-success">
                                <i class="bi bi-info-circle-fill text-success me-1"></i> <strong>To‘g‘ri javob:</strong> ma’nosini tushunmasdan esda olib qolishga
                            </div>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading3">
                        <button class="accordion-button collapsed correct-answer" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3">
                            3. Irodaviy harakatlarning asosiy motivlari nimadan iborat?
                        </button>
                    </h2>
                    <div id="collapse3" class="accordion-collapse collapse" data-bs-parent="#testAccordion">
                        <div class="accordion-body">
                            <div class="p-2 bg-success text-white rounded">
                                <i class="bi bi-check-circle-fill me-1"></i> nimaga intilayotganligini anglash, maqsad va vositalarni tanlash, qarorga kelish, qarorni bajarish
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="toast-container">
        <div id="ratingToast" class="toast align-items-center text-white bg-success border-0" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="d-flex">
                <div class="toast-body" id="toastMessage">
                    Siz baho berdingiz!
                </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Yopish"></button>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const stars = document.querySelectorAll(".stars li");
        const toastEl = document.getElementById("ratingToast");
        const toastMsg = document.getElementById("toastMessage");
        const toast = new bootstrap.Toast(toastEl, { delay: 2000 });

        stars.forEach(star => {
            star.addEventListener("click", () => {
                const rating = parseInt(star.getAttribute("data-value"));

                stars.forEach((s, i) => {
                    const icon = s.querySelector("i");
                    if (i < rating) {
                        s.classList.add("filled");
                        icon.className = "bi bi-star-fill";
                    } else {
                        s.classList.remove("filled");
                        icon.className = "bi bi-star";
                    }
                });

                toastMsg.textContent = `Siz ${rating} ta yulduz baho berdingiz!`;
                toast.show();
            });
        });
    });


    // Animatsiya ishlaydi
    const score = 85;

    const resultTitle = document.getElementById("result-title");

    if (score >= 70) {
        showConfetti();
    }

    function showConfetti() {
        const duration = 2 * 2000;
        const animationEnd = Date.now() + duration;
        const defaults = { startVelocity: 30, spread: 360, ticks: 60, zIndex: 1000 };

        function randomInRange(min, max) {
            return Math.random() * (max - min) + min;
        }

        const interval = setInterval(function () {
            const timeLeft = animationEnd - Date.now();

            if (timeLeft <= 0) {
                return clearInterval(interval);
            }

            const particleCount = 50 * (timeLeft / duration);

            confetti(Object.assign({}, defaults, {
                particleCount,
                origin: { x: randomInRange(0.1, 0.3), y: Math.random() - 0.2 }
            }));

            confetti(Object.assign({}, defaults, {
                particleCount,
                origin: { x: randomInRange(0.7, 0.9), y: Math.random() - 0.2 }
            }));
        }, 250);
    }
</script>