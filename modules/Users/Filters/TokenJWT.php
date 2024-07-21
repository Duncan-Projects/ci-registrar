<?php
namespace Users\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;


class TokenJWT implements FilterInterface
{
  public function before(RequestInterface $request, $arguments = null)
  {
    echo '<pre>$request: ';
    print_r($request);
    echo '</pre>';

    echo '<pre>$arguments: ';
    print_r($arguments);
    echo '</pre>';
    exit(__FILE__ . ' at line: ' . __LINE__);
  }


  public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
  {
    //
  }
}
