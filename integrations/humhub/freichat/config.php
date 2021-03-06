<?php

namespace humhub\modules\freichat;

use humhub\widgets\TopMenu;

return [
    'id' => 'freichat',
    'class' => 'humhub\modules\freichat\Module',
    'namespace' => 'humhub\modules\freichat',
    'events' => [
        [
            'class' => \humhub\modules\dashboard\widgets\Sidebar::class,
            'event' => \humhub\modules\dashboard\widgets\Sidebar::EVENT_INIT,
            'callback' => [
                'humhub\modules\freichat\Events',
                'loadFreiChat'
            ]
        ],
        [
            'class' => TopMenu::class,
            'event' => TopMenu::EVENT_INIT,
            'callback' => ['humhub\modules\freichat\Events', 'onTopMenuInit']
        ],
        [
            'class' => \humhub\components\ModuleManager::class,
            'event' => \humhub\components\ModuleManager::EVENT_AFTER_MODULE_ENABLE,
            'callback' => [
                'humhub\modules\freichat\Events',
                'saveToken'
            ]
        ]
    ]
];
?>
