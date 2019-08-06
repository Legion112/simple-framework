<?php
return [
    '/' => [\App\SiteController::class, 'main'],
    '/about' => [\App\SiteController::class, 'about'],
    '/contact' => [\App\SiteController::class, 'contact'],
    '/book/add-new-book' => [\App\BookController::class, 'create'],
    '/book/view' => [\App\BookController::class, 'view'],
];