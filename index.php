<?php
umask(0000);

require_once __DIR__.'/../homes/vendor/autoload.php';

$app = new Silex\Application();

require __DIR__.'/../homes/config/prod.php';

require __DIR__.'/../homes/src/app.php';

require __DIR__.'/../homes/src/controllers.php';

$app->run();
