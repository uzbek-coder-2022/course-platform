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
        font-size: 1.25rem;
    }

</style>

<div class="site-subject">
    <div class="container">
        <div class="test-name">
            <div class="progress">
                <div class="progress-bar bg-primary" style="width: 50%;">50%</div>
            </div>
        </div>

        <div class="test-main">
            <div class="container">
                <div class="test-body">
                    <h6 class="test-number text-primary">2 - savol (30 talik)</h6>
                    <h5 class="test-text text-muted mb-3">Python qanday dasturlash tili?</h5>
                </div>
            </div>
        </div>

        <div class="test-recent">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="check1">
                <label class="form-check-label" for="check1">Kompilyatorli</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="check2">
                <label class="form-check-label" for="check2">Interpretatorli</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="check3">
                <label class="form-check-label" for="check3">JIT</label>
            </div>
        </div>

    </div>
    <div class="test-manage">
        <div class="d-flex justify-content-end">
            <a href="<?= Url::to(['site/testresult']) ?>" class="btn btn-outline-primary">
                Keyingi test
            </a>
        </div>
    </div>
</div>
</div>
