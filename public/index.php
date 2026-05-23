<?php

declare(strict_types=1);

$app = require dirname(__DIR__) . '/bootstrap/app.php';

$response = $app->handle(
    Core\Http\Request::capture()
);

$response->send();
