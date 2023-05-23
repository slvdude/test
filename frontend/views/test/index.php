<?php
/** @var yii\web\View $this */
/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */
/* @var $model app\models\QueueStatuses */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
<h1>test/index</h1>


<?php
$form = ActiveForm::begin([
    'id' => 'test-form',
    'options' => ['class' => 'form-horizontal'],
]) ?>
<?= $form->field($model, 's_name') ?>
<?= $form->field($model, 'c_name') ?>
<?= $form->field($model, 'c_id') ?>
<?= $form->field($model, 'a_type') ?>
<?= $form->field($model, 'direction') ?>
<?= $form->field($model, 'activation') ?>
<?= $form->field($model, 'c_state') ?>
<?= $form->field($model, 'control') ?>

<div class="form-group">
    <div class="col-lg-offset-1 col-lg-11">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    </div>
</div>
<?php ActiveForm::end() ?>
