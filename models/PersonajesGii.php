<?php

namespace app\models;

/**
 * This is the model class for table "personajes".
 *
 * @property int $id
 * @property string $nombre
 * @property string $rol
 */
class PersonajesGii extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'personajes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'rol'], 'required'],
            [['nombre', 'rol'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'rol' => 'Rol',
        ];
    }
}
