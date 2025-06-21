<?php

/** @var \yii\web\View $this */
/** @var string $content */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;
use yii\helpers\Url;

$route = Yii::$app->controller->id . '/' . Yii::$app->controller->action->id;

$hiddenRoutes = [
    'site/login',
    'site/signup',
    'site/reset-password',
    'site/request-password-reset',
    'site/resend-verification-email',
];

$hideLayout = in_array($route, $hiddenRoutes);

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Particles.js kutubxonasi -->
    <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <style>
        .navbar-nav .nav-link img {
            object-fit: cover;
            border: 1px solid #ddd;
            padding: 0;
        }

        .dropdown-menu {
            padding-top: 0.25rem !important;
            padding-bottom: 0.25rem !important;
            margin-top: 0.2rem !important;
            margin-bottom: 0 !important;
        }

        .dropdown-menu .dropdown-item:hover {
            background-color: #f1f1f1;
            color: #000;
        }
        .dropdown-menu .btn-link {
            color: #212529;
            text-decoration: none;
            width: 100%;
            text-align: left;
            padding: .25rem 1rem;
        }
        .dropdown-menu .btn-link:hover {
            background-color: #f1f1f1;
            color: #000;
        }

        #preloader {
            position: fixed;
            width: 100%;
            height: 100vh;
            background: #1f6dc7 url("image/loading.gif") no-repeat center;
            z-index: 9999;
        }
    </style>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<!-- Particles animatsiyasi uchun konteyner -->
<div id="particles-js" style="position: fixed; width: 100%; height: 100%; z-index: -1;"></div>

<!-- LOADER -->
<div id="preloader"></div>

<?php if (!$hideLayout): ?>
    <header>
        <?php

        NavBar::begin([
            'brandLabel' => Yii::$app->name,
            'brandUrl' => Yii::$app->homeUrl,
            'options' => [
                'class' => 'navbar navbar-expand-md navbar-dark bg-dark fixed-top',
            ],
        ]);

        // Chap tomondagi menyular
        $menuItems = [
            ['label' => 'Asosiy', 'url' => ['/site/dashboard']],
            ['label' => 'Kurslar', 'url' => ['/site/courses']],
            ['label' => 'Aloqa', 'url' => ['/site/contact']],
        ];

        echo Nav::widget([
            'options' => ['class' => 'navbar-nav me-auto mb-2 mb-md-0'],
            'items' => $menuItems,
        ]);

        if (!Yii::$app->user->isGuest) {
            echo Html::tag('div', Html::a('Login', ['/site/login'], ['class' => ['btn btn-link login text-white']]), ['class' => ['d-flex']]);
        } else {
            $user = Yii::$app->user->identity;
            $fullName = Html::encode($user->full_name ?? "user");
            $avatar = 'image/web.jpg';

            echo Html::beginTag('ul', ['class' => 'navbar-nav ms-auto mb-2 mb-md-0']);

            echo Html::beginTag('li', ['class' => 'nav-item dropdown']);
            echo Html::a(
                '<img src="' . $avatar . '" alt="Avatar" class="rounded-circle me-2" width="30" height="30">' .
                '<span class="text-white">' . $fullName . '</span>',
                '#',
                [
                    'class' => 'nav-link dropdown-toggle d-flex align-items-center',
                    'id' => 'navbarDropdown',
                    'role' => 'button',
                    'data-bs-toggle' => 'dropdown',
                    'aria-expanded' => 'false'
                ]
            );

            echo Html::beginTag('ul', ['class' => 'dropdown-menu dropdown-menu-end', 'aria-labelledby' => 'navbarDropdown']);
            echo Html::tag('li', Html::a('Profil ma\'lumotlari', ['/site/user'], ['class' => 'dropdown-item']));
            echo Html::tag('li', Html::beginForm(['/site/logout'], 'post') .
                Html::submitButton('Chiqish', ['class' => 'dropdown-item']) .
                Html::endForm());
            echo Html::endTag('ul');
            echo Html::endTag('li');

            echo Html::endTag('ul');
        }

        NavBar::end();
        ?>
    </header>
<?php endif; ?>

<main role="main" class="flex-shrink-0">
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => $this->params['breadcrumbs'] ?? [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>

<?php if (!$hideLayout): ?>
    <footer class="footer mt-auto py-3 text-muted">
        <div class="container">
            <p class="float-start">&copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?></p>
            <p class="float-end"><?= Yii::powered() ?></p>
        </div>
    </footer>
<?php endif; ?>

<script>
    function loader() {
        let loader1 = document.getElementById("preloader");
        window.addEventListener("load", function() {
            loader1.style.display="none";
        })
    }
    loader();
</script>

<script>
    particlesJS("particles-js", {
        "particles": {
            "number": {
                "value": 80,
                "density": {
                    "enable": true,
                    "value_area": 800
                }
            },
            "color": { "value": "#d17878" },
            "shape": {
                "type": "circle",
                "stroke": { "width": 0, "color": "#000000" }
            },
            "opacity": {
                "value": 0.5,
                "random": false
            },
            "size": {
                "value": 3,
                "random": true
            },
            "line_linked": {
                "enable": true,           // ❗ Chiziqlarni yoqish
                "distance": 150,          // ❗ Zarrachalar orasidagi maksimal masofa
                "color": "#c68b8b",       // ❗ Chiziq rangi
                "opacity": 0.4,           // ❗ Chiziq shaffofligi
                "width": 1                // ❗ Chiziq qalinligi
            },
            "move": {
                "enable": true,
                "speed": 3,
                "direction": "none",
                "random": false,
                "straight": false,
                "out_mode": "out"
            }
        },
        "interactivity": {
            "events": {
                "onhover": { "enable": true, "mode": "grab" },
                "onclick": { "enable": true, "mode": "push" },
                "resize": true
            },
            "modes": {
                "grab": {
                    "distance": 140,
                    "line_linked": { "opacity": 1 }
                }
            }
        },
        "retina_detect": true
    });
</script>

<script>
    AOS.init();
</script>



<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
