<?php

namespace Sarfraznawaz2005\Noty;

use Illuminate\Session\Store;

class SessionStore
{
    private $session;

    public function __construct(Store $session)
    {
        $this->session = $session;
    }

    public function flash($name, $data = [])
    {
        $this->session->flash($name, $data);
    }
}
