<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
?>
<div class="page-error-404">


    <div class="error-symbol">
        <i class="entypo-attention"></i>
    </div>

    <div class="error-text">
        <h2><?= Html::encode($this->title) ?></h2>
        <p><?= nl2br(Html::encode($message)) ?></p>
    </div>

    <hr />

    <div class="error-text">

        Search Pages:

        <br />
        <br />

        <div class="input-group minimal">
            <div class="input-group-addon">
                <i class="entypo-search"></i>
            </div>

            <input type="text" class="form-control" placeholder="Search anything..." />
        </div>

    </div>

</div>
