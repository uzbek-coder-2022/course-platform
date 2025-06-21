<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var \frontend\models\ContactForm $model */

use yii\helpers\Url;

$this->title = 'Material';
?>

<style>
    .container {
        padding: 0;
    }

    .subject-name, .subject-material, .subject-manage, .subject-rating {
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

    .subject-rating {
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

    .video-container iframe {
        border: 0;
        border-radius: 0.5rem;
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

    .pdf-viewer {
        width: 100%;
        height: 75vh;
        border: none;
    }

    @media (max-width: 768px) {
        .subject-name a {
            display: none;
        }
    }
</style>

<div class="site-subject">
    <div class="container">
        <div class="subject-name d-flex justify-content-between align-items-baseline">
            <h4>1.1 HTML haqida tushuncha</h4>

            <a href="<?= Url::to(['site/subject']) ?>" class="btn btn-outline-primary">
                Keyingi dars
            </a>
        </div>
        <div class="subject-material">
            <iframe
                class="pdf-viewer"
                src="https://mozilla.github.io/pdf.js/web/viewer.html?file=https://mozilla.github.io/pdf.js/web/compressed.tracemonkey-pldi-09.pdf">
            </iframe>
        </div>
        <div class="subject-manage">
            <div class="d-flex justify-content-between">
                <a href="<?= Url::to(['site/about']) ?>" class="btn btn-outline-primary">
                    <i class="bi bi-list"></i> Mavzular roʻyxati
                </a>
                <a href="<?= Url::to(['site/subject']) ?>" class="btn btn-outline-primary">
                    Keyingi dars
                </a>
            </div>
        </div>
        <div class="subject-rating d-flex flex-row align-items-baseline justify-content-between">
            <h5>Materialni baholang:</h5>
            <ul class="stars d-flex flex-row gap-2 p-0 m-0">
                <li data-value="1"><i class="bi bi-star"></i></li>
                <li data-value="2"><i class="bi bi-star"></i></li>
                <li data-value="3"><i class="bi bi-star"></i></li>
                <li data-value="4"><i class="bi bi-star"></i></li>
                <li data-value="5"><i class="bi bi-star"></i></li>
            </ul>
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
</script>
