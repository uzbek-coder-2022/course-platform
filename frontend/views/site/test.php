<?php
use yii\helpers\Url;

$this->title = 'Test';

$status = true;
?>

<style>
    .container {
        padding: 0;
    }

    .test-name, .test-main, .test-recent, .test-manage {
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

    .btn-outline-primary {
        padding: 10px 30px;
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
        background-color: rgb(53, 186, 95);
    }

    .incorrect-answer {
        background-color: rgb(230, 78, 78);
    }
</style>

<div class="site-subject">
    <div class="container">
        <div class="test-name d-flex justify-content-between align-items-baseline">
            <h4>1.1 HTML haqida tushuncha</h4>

            <a href="<?= Url::to(['site/material']) ?>" class="btn btn-outline-primary">
                Keyingi dars
            </a>
        </div>

        <div class="test-main">
            <div class="container">
                <div class="card-body">
                    <p class="card-text text-muted mb-3">Izoh: Bu testda Python dasturlash tili asoslari tekshiriladi.</p>

                    <table class="table table-bordered text-center">
                        <thead class="table-light">
                            <tr>
                                <th>Test soni</th>
                                <th>O‘zlashtirish foizi</th>
                                <th>Bajarish vaqti</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><span class="badge bg-primary">30 ta</span></td>
                                <td><span class="badge bg-success">85%</span></td>
                                <td><span class="badge bg-info">Cheksiz</span></td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="text-end">
                        <a href="<?= Url::to(['site/testprocess'])?>" class="btn btn-outline-primary"><?= ($status) ? 'Qayta ishlash' : 'Testni boshlash' ?></a>
                    </div>
                </div>
            </div>
        </div>

        <?php if ($status): ?>
        <div class="test-recent">
            <div class="container">
                <div class="table-responsive">
                    <table class="table table-striped align-middle text-center caption-top">
                        <caption>So'nggi o'tilgan test natijalari</caption>

                        <thead class="table-primary">
                        <tr>
                            <th>#</th>
                            <th>To‘g‘ri javoblar</th>
                            <th>Foiz</th>
                            <th>Davomiylik</th>
                            <th>Vaqti</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>23 / 30</td>
                            <td><span class="badge correct-answer">76%</span></td>
                            <td>14 daqiqa</td>
                            <td>18/06/2025 10:32:11</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>17 / 30</td>
                            <td><span class="badge incorrect-answer">56%</span></td>
                            <td>12 daqiqa</td>
                            <td>17/06/2025 18:44:52</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>29 / 30</td>
                            <td><span class="badge correct-answer">96%</span></td>
                            <td>9 daqiqa</td>
                            <td>15/06/2025 09:17:03</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>25 / 30</td>
                            <td><span class="badge correct-answer">83%</span></td>
                            <td>13 daqiqa</td>
                            <td>14/06/2025 11:59:22</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>12 / 30</td>
                            <td><span class="badge incorrect-answer">40%</span></td>
                            <td>15 daqiqa</td>
                            <td>13/06/2025 14:22:45</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>30 / 30</td>
                            <td><span class="badge correct-answer">100%</span></td>
                            <td>10 daqiqa</td>
                            <td>12/06/2025 16:11:10</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>18 / 30</td>
                            <td><span class="badge incorrect-answer">60%</span></td>
                            <td>11 daqiqa</td>
                            <td>11/06/2025 13:05:38</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>21 / 30</td>
                            <td><span class="badge correct-answer">70%</span></td>
                            <td>12 daqiqa</td>
                            <td>10/06/2025 08:44:01</td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>15 / 30</td>
                            <td><span class="badge incorrect-answer">50%</span></td>
                            <td>13 daqiqa</td>
                            <td>09/06/2025 20:15:59</td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>26 / 30</td>
                            <td><span class="badge correct-answer">86%</span></td>
                            <td>10 daqiqa</td>
                            <td>08/06/2025 17:32:27</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        <?php endif; ?>

        </div>
        <div class="test-manage">
            <div class="d-flex justify-content-between">
                <a href="<?= Url::to(['site/about']) ?>" class="btn btn-outline-primary">
                    <i class="bi bi-list"></i> Mavzular roʻyxati
                </a>
                <a href="<?= Url::to(['site/material']) ?>" class="btn btn-outline-primary">
                    Keyingi dars
                </a>
            </div>
        </div>
    </div>

</div>