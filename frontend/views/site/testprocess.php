<?php
use yii\helpers\Url;

$this->title = 'Test jarayoni';
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

    .test-recent .form-check {
        display: flex;
        align-items: center;
        gap: 10px;
        margin-bottom: 10px;

        label {
            margin-left: 0.25rem;
            font-size: 1.25rem;
        }
    }
</style>

<div class="site-subject">
    <div class="container">
        <div class="test-name">
            <div class="progress">
                <div class="progress-bar bg-primary" style="width: 0%;">0%</div>
            </div>
        </div>

        <div class="test-main">
            <div class="container">
                <div class="test-body">
                    <h6 class="test-number text-primary">1 - savol (30 talik)</h6>
                    <h5 class="test-text text-muted mb-3">Python dasturlash tili qachon yaratilgan?</h5>
                </div>
            </div>
        </div>

        <div class="test-recent">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="radioGroup" id="radio1" value="1">
                <label class="form-check-label" for="radio1">1991-yil</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="radioGroup" id="radio2" value="2">
                <label class="form-check-label" for="radio2">1994-yil</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="radioGroup" id="radio3" value="3">
                <label class="form-check-label" for="radio3">1995-yil</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="radioGroup" id="radio4" value="4">
                <label class="form-check-label" for="radio4">2001-yil</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="radioGroup" id="radio5" value="5">
                <label class="form-check-label" for="radio5">1980-yil</label>
            </div>
        </div>

        </div>
        <div class="test-manage">
            <div class="d-flex justify-content-end">
                <a href="<?= Url::to(['site/testprocess1']) ?>" class="btn btn-outline-primary">
                    Keyingi test
                </a>
            </div>
        </div>
    </div>
</div>
