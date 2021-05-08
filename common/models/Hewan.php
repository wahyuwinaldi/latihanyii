<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "hewan".
 *
 * @property int $id
 * @property string|null $nama_hewan
 */
class Hewan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'hewan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            // [['nama_hewan'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_hewan' => 'Nama Hewan',
        ];
    }
}
