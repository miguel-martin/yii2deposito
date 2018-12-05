<?php

namespace app\models;

use Yii;
use yii\base\Model;         // utilizada habitualmente para representar modelos no asociados a BD's
// use yii\db\ActiveRecord  // utilizada habitualmente para representar modelos que se corresponden con tablas

class DatosTrabajo extends Model
{
    public $titulo1;        // contendrá el título principal (normalmente, en castellano)
    public $titulo2;        // contendrá el título traducido (normalmente, en inglés)
    public $autor;          // contendrá el nombre y apellidos del autor
    public $director;       // contendrá el nombre y apellidos del director/tutor
    public $resumen1;       // contendrá el resumen en el idioma principal (normalmente, en castellano)
    public $resumen2;       // contendrá el resumen traducido (normalmente, en inglés)
    public $idioma;         // contendrá el idioma principal en que está redactado el trabajo
    public $anyo;           // contendrá el año de la defensa del Trabajo 
    public $notas;          // contendrá notas adicionales que el autor desee hacer constar
    public $palClave;       // contendrá una palabra clave
    public $estudio;        // contendrá el estudio
    public $centro;         // contendrá el centro responsable del estudio
    public $departamento;   // contendrá el departamento asociado al estudio
    public $esEspecial;     // contendrá un booleano indicando si es un trabajo "especial" (acompañado de materiales físicos)
    public $licencia;       // contendrá el valor de la licencia que ha indicado el autor


    /**
     * Método que devuelve un conjunto de reglas para validar los datos. 
     * Esto permitirá que podamos llamar al método "validate" del modelo tal que así:
     *      $model = new DatosTrabajo();
     *      $model->autor = "Miguel"
     *      $model->email = "email@unizar.es"
     *      if ($model->validate()){
     *      {
     *        // Bien!!
     *      } else {
     *        // Fallo! 
     *        use $model->getErrors()
     *      }
     *
     */
    public function rules()
    {
        return [
            [['titulo1', 'autor', 'email'], 'required'],    // titulo, autor e email son obligatorios
            ['email', 'email'],                             // email debe ser una dirección de correo sintáticamente correcta
            // comprobar que son strings de longitud entre 10 y 100
            [['titulo1', 'titulo2','autor'], 'string', 'length' => [10, 100]],
        ];
    }

    public function attributeLabels()
    {
        return[
            'titulo1' => 'Título (idioma principal)',
            'titulo2' => 'Título (idioma secundario)',
            'autor' => 'Autor',
            'director' => 'Director',
            'resumen1' => 'Resumen (idioma principal)',
            'resumen2' => 'Resumen (idioma secundario)',
            'idioma' => 'Idioma',
            'anyo' => 'Año',
            'notas' => 'Notas',
            'palClave' => 'Palabra clave',
            'estudio' => 'Grado / Máster',
            'centro' => 'Centro',
            'departamento' => 'Departamento',
            'esEspecial' => '¿Es un trabajo especial? (Incluye materiales físicos adicionales)',
            'licencia' => 'Licencia',
        ];
    }
}