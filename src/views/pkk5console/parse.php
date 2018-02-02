<?php
/**
 * Created by PhpStorm.
 * User: Ulugbek
 * Date: 02.02.2018
 * Time: 15:48
 */

if(!empty($data)){
    $rows = [];
    foreach ($data as $key => $kadastr){
        $header = ['Кадастровый номер', 'Адрес', 'Стоимость','Площадь'];
        $rows[] = [
            $kadastr->kadastrnumber,
            $kadastr->address,
            $kadastr->cost,
            $kadastr->area
        ];
    }
    echo \yii\console\widgets\Table::widget([
        'headers' => $header,
        'rows' => $rows
    ]);
}else{
    echo "no result \n\r";
}

echo sprintf('Execution time: %0.0f ms',\Yii::getLogger()->getElapsedTime()*1000);
