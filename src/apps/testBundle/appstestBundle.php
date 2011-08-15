<?php

namespace apps\testBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class appstestBundle extends Bundle
{
  public function indexAction($name)
    {
        return new Response('<html><body>Hello '.$name.'!</body></html>');
    }
}
