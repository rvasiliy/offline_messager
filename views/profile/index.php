<?php

use yii\helpers\Html;

$this->title = 'Профиль';
?>
<div class="profile-index">
    <h1><?= Html::encode($this->title); ?></h1>

    <div class="row">
        <div class="col-lg-12">
            <table class="table table-striped">
                <tr>
                    <th>Имя</th>
                    <td><?= $model->nickname; ?></td>
                </tr>
                <tr>
                    <th>Контакты</th>
                    <td>
                        <?= Html::a('Перейти', ['recipient/index'], ['class' => 'btn btn-primary']); ?>
                    </td>
                </tr>
                <tr>
                    <th>Переписка</th>
                    <td>
                        <!-- todo вставить кнопку "Перейти" -->
                    </td>
                </tr>
            </table>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <?= Html::a('Редактировать профиль', ['profile/update'], ['class' => 'btn btn-primary']); ?>
        </div>
    </div>
</div>