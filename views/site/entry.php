<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<?php $form = ActiveForm::begin(); ?>

<!-- ANTES -->
<?= $form->field($model, 'titulo1') ?>
<!-- DESPUES -->
<!-- <?= $form->field($model, 'titulo1')->textInput()->label('Título (idioma principal)') ?> -->
<?= $form->field($model, 'titulo2') ?>
<?= $form->field($model, 'autor') ?>
<?= $form->field($model, 'director') ?>
<?= $form->field($model, 'resumen1') ?>
<?= $form->field($model, 'resumen2') ?>
<?= $form->field($model, 'idioma') ?>
<?= $form->field($model, 'anyo') ?>
<?= $form->field($model, 'notas') ?>
<?= $form->field($model, 'palClave') ?>
<?= $form->field($model, 'estudio') ?>
<?= $form->field($model, 'centro') ?>
<?= $form->field($model, 'departamento') ?>
<?= $form->field($model, 'esEspecial') ?>
<?= $form->field($model, 'licencia') ?>

<div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
</div>


<?php $form = ActiveForm::end(); ?>