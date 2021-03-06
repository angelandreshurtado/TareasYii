<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "blognoticia".
 *
 * @property integer $ID
 * @property string $tituloNoticia
 * @property string $contenidoNoticia
 * @property integer $estado
 * @property string $fechaCreacion
 * @property string $authNoticia
 */
class Blognoticia extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'blognoticia';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tituloNoticia', 'contenidoNoticia', 'estado', 'fechaCreacion', 'authNoticia'], 'required'],
            [['contenidoNoticia'], 'string'],
            [['estado'], 'integer'],
            [['fechaCreacion'], 'safe'],
            [['tituloNoticia'], 'string', 'max' => 100],
            [['authNoticia'], 'string', 'max' => 15],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'tituloNoticia' => 'Titulo Noticia',
            'contenidoNoticia' => 'Contenido Noticia',
            'estado' => 'Estado',
            'fechaCreacion' => 'Fecha Creación',
            'authNoticia' => 'Autor',
        ];
    }
}
