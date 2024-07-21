<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->group('', ['namespace' => 'Users\Controllers'], static function ($routes) {
  $routes->get('users', [\Users\Controllers\Users::class, 'index']);
});
