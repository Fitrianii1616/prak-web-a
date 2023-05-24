<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mahasiswa40".
 *
 * @property int $id
 * @property string $nim
 * @property string $nama
 * @property string $kelas
 */
class Mahasiswa40 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mahasiswa40';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'nim', 'nama', 'kelas'], 'required'],
            [['id'], 'integer'],
            [['nim', 'nama'], 'string', 'max' => 255],
            [['kelas'], 'string', 'max' => 1],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nim' => 'Nim',
            'nama' => 'Nama',
            'kelas' => 'Kelas',
        ];
    }
}
