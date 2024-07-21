<?php

namespace Users\Config;

use CodeIgniter\Config\BaseConfig;

class Registrar extends BaseConfig
{
  public static function Filters(): array
  {
    return [
      'aliases' => [
        'tokenJWT' => \Users\Filters\TokenJWT::class,
      ],
      'filters' => [
        'tokenJWT' => [
          'before' => [
            'users/*',
          ],
        ],
      ],
    ];
  }
}
