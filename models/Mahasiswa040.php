<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mahasiswa040".
 *
 * @property int $id040
 * @property string $nim040
 * @property string $nama040
 * @property string $kelas040
 * @property string $status040
 */
class Mahasiswa040 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mahasiswa040';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nim040', 'nama040', 'kelas040', 'status040'], 'required'],
            [['nim040'], 'string', 'max' => 25],
            [['nama040'], 'string', 'max' => 225],
            [['kelas040'], 'string', 'max' => 10],
            [['status040'], 'string', 'max' => 50],
            [['nim040'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id040' => 'Id040',
            'nim040' => 'Nim040',
            'nama040' => 'Nama040',
            'kelas040' => 'Kelas040',
            'status040' => 'Status040',
        ];
    }
}
