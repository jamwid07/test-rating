<?php

/* @var $this yii\web\View */
/** @var \common\models\RatingCount[] $users */

$this->title = 'Главная страница';
?>
<div class="site-index">
    <div class="body-content">
        <div class="row">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>№</th>
                    <th>Имя</th>
                    <th>Фамилия</th>
                    <th>Оценки выше 7</th>
                    <th>Оценка ниже 7</th>
                </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $key => $user) :?>
                    <tr>
                        <td><?= $key+1 ?></td>
                        <td><?= $user->first_name ?></td>
                        <td><?= $user->last_name ?></td>
                        <td><?= $user->upActionCount?></td>
                        <td><?= $user->downActionCount?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <div class="col-sm-12">
                <a href="/action/fake" class="btn btn-success">Генерировать новые действия</a>
            </div>
        </div>
    </div>
</div>
