<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mahasiswa_040".
 *
 * @property int $id
 * @property string $nim
 * @property string $nama
 * @property string $kelas
 * @property string $jurusan
 */
class Mahasiswa040 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mahasiswa_040';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nim', 'nama', 'kelas', 'jurusan'], 'required'],
            [['nim'], 'string', 'max' => 11],
            [['nama'], 'string', 'max' => 30],
            [['kelas'], 'string', 'max' => 1],
            [['jurusan'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nim' => 'No. Induk Mahasiswa',
            'nama' => 'Nama',
            'kelas' => 'Kelas',
            'jurusan' => 'Jurusan',
        ];
    }

    public function getProfil040()
    {
        //same as above
        return $this->hasOne(Profil040::class, ['id' => 'id']);
    }
}
