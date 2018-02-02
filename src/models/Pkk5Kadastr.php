<?php

namespace muxtor\pkk5module\models;

use Yii;

/**
 * This is the model class for table "{{%pkk5kadastr}}".
 *
 * @property integer $id
 * @property string $kadastrnumber
 * @property string $address
 * @property string $cost
 * @property string $area
 */
class Pkk5kadastr extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%pkk5kadastr}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kadastrnumber'], 'required'],
            [['kadastrnumber', 'cost', 'area'], 'string', 'max' => 64],
            [['address'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kadastrnumber' => 'Кадастровый номер',
            'address' => 'Адрес',
            'cost' => 'Стоимость',
            'area' => 'Площадь',
        ];
    }
}
