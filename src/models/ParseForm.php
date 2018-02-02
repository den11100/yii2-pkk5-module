<?php
namespace muxtor\pkk5module\models;

use yii\base\Model;
use muxtor\pkk5component\Pkk5Component;

/**
 * Signup form
 */
class ParseForm extends Model
{
    public $kadastr;


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['kadastr', 'required'],
            ['kadastr', 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'kadastr' => 'Кадастровый номер',
        ];
    }

    /**
     * Parse
     *
     * @return boolean
     */
    public function parse()
    {
        if (!$this->validate()) {
            return null;
        }
        
        $parse = new Pkk5Component(['cache'=>true]);
        $data = $parse->getInfo($this->kadastr);
        if(!empty($data)){
            $show = [];
            foreach ($data as $key => $value){
                if($value==null OR empty($value)) continue ; //пропустим если пустое данны

                $kadastr = Pkk5kadastr::find()->where(['kadastrnumber'=>$value['kadastrnumber']])->one();

                if($kadastr==null) $kadastr = new Pkk5kadastr();

                $kadastr->kadastrnumber = $value['kadastrnumber'];
                $kadastr->address = $value['address'];
                $kadastr->cost = $value['cost'];
                $kadastr->area = $value['area'];
                $kadastr->save(false);
                $show[]=$kadastr;
            }
            return $show;
        }
        return false;
    }
}
