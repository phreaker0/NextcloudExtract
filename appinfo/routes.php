<?php
/**
 * Create your routes in here. The name is the lowercase name of the controller
 * without the controller part, the stuff after the hash is the method.
 * e.g. page#index -> OCA\Extract\Controller\PageController->index()
 *
 * The controller class has to be registered in the application.php file since
 * it's instantiated in there
 */
return [
    'routes' => [
       [
            'name' => 'extraction#extract',
            'url'  => 'ajax/extract.php',
            'verb' => 'POST'
        ],
        [
            'name' => 'extraction#extractHereRar',
            'url'  => 'ajax/extractRar.php',
            'verb' => 'POST'
        ],
        [
            'name' => 'extraction#extractHereOthers',
            'url'  => 'ajax/extractOthers.php',
            'verb' => 'POST'
        ],
    ]
];
