<?php
use yii\helpers\Html;
?>
<p>Has introducido la siguiente información:</p>

<ul>
    <li><label>Título (idioma principal)</label>: <?= Html::encode($model->titulo1) ?></li>
    <li><label>Título (idioma secundario)</label>: <?= Html::encode($model->titulo2) ?></li>
    <li><label>Autor</label>: <?= Html::encode($model->autor) ?></li>
    <li><label>Director</label>: <?= Html::encode($model->director) ?></li>
    <li><label>Resumen (idioma principal)</label>: <?= Html::encode($model->resumen1) ?></li>
    <li><label>Resumen (idioma secundario)</label>: <?= Html::encode($model->resumen2) ?></li>
    <li><label>Idioma</label>: <?= Html::encode($model->idioma) ?></li>
    <li><label>Año</label>: <?= Html::encode($model->anyo) ?></li>
    <li><label>Notas</label>: <?= Html::encode($model->notas) ?></li>
    <li><label>Palabra clave</label>: <?= Html::encode($model->palClave) ?></li>
    <li><label>Estudio</label>: <?= Html::encode($model->estudio) ?></li>
    <li><label>Centro</label>: <?= Html::encode($model->centro) ?></li>
    <li><label>Departamento</label>: <?= Html::encode($model->departamento) ?></li>
    <li><label>¿Trabajo especial?</label>: <?= Html::encode($model->esEspecial) ?></li>
    <li><label>Licencia</label>: <?= Html::encode($model->licencia) ?></li>
</ul>