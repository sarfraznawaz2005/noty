<?php

return [
    //////////////////////////////////////////////////////////////////////////////////////
    // NOTE: Full list of options for noty can be seen here: https://ned.im/noty/#/options
    //////////////////////////////////////////////////////////////////////////////////////

    // default type: alert, success, error, warning, info
    'type' => 'info',

    // top, topLeft, topCenter, topRight, center, centerLeft, centerRight, bottom, bottomLeft, bottomCenter, bottomRight
    'layout' => 'topRight',

    // relax, mint, sunset, metroui, semanticui, bootstrap-v3, bootstrap-v4
    'theme' => 'metroui',

    // false, 1000, 3000, 5000, etc. Delay for closing event in milliseconds (ms). Set 'false' for sticky notifications.
    'timeout' => 3000,

    // true, false - Displays a progress bar if timeout is not false.
    'progressBar' => true,

    // "click" or "button" or both.
    'closeWith' => ['click', 'button'],

    // Animations: Animate.css must be included
    'animation' => [
        'open' => 'animated bounceInRight',
        'close' => 'animated bounceOutRight',
    ],

    // Sound Options
    'sounds' => [
        // Array of audio sources e.g 'some.wav'
        'sources' => [],
        // Integer value between 0-1 e.g 0.5
        'volume' => 0.5,
        // There are two conditions for now: 'docVisible' & 'docHidden'. You can use one of them or both
        'conditions' => [],
    ],

    'docTitle' => [
        // There are two conditions for now: 'docVisible' & 'docHidden'. You can use one of them or both.
        'conditions' => []
    ],

    'modal' => false,

    // adds notification to the beginning of queue when set to true
    'force' => false,

    // default but you can also specify your own value
    'queue' => 'global',

    // max notifications to be disabled for a queue
    'maxVisible' => 5,

    // If true closes all visible notifications and shows itself. If string(queueName) closes all visible notification on this queue and shows itself.
    'killer' => true,

    // Custom container selector string. Like '.my-custom-container'. Layout parameter will be ignored.
    'container' => false,

    // You can use this id with querySelectors. Generated automatically if false.
    'id' => false,
];
