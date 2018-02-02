yii2-pkk5-module
=================


Расширение предназначено для получение и вывести данны с pkk5.rosreestr.ru
Расширение работает с [yii2-pkk5-component](http://github.com/muxtor/yii2-pkk5-component) 
  
Установка
------------------
* Установка пакета с помощью Composer
```
composer require muxtor/yii2-pkk5-module
```

* Выполнить миграцию для создания нужной таблицы в базе данных (консоль):
```
yii migrate --migrationPath=@muxtor/pkk5module/migrations --interactive=0
```

Использование
------------------
```
'modules' => [
        ...
        'pkk5' => [
            'class' => 'muxtor\pkk5module\Module'
        ],
        ...
    ],
```
введите в броузере:
http://yourdomain.com/index.php?r=pkk5