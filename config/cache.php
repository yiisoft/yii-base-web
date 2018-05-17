<?php

return [
    '__class' => yii\caching\Cache::class,
    'handler' => [
        '__class'   => yii\caching\FileCache::class,
        'keyPrefix' => 'my-project',
    ],
];
