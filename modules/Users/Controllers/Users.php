<?php

declare(strict_types=1);

namespace Users\Controllers;

use App\Controllers\BaseController;

class Users extends BaseController
{
  public function index()
  {
    return view('Users\Views\index');
  }
}
