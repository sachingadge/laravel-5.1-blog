<?php

namespace App\SweetAlert;

use Illuminate\Session\Store;

class LaravelSessionStore implements SessionStore
{
    /**
     * @var Store
     */
    private $session;

    function __construct(Store $session)
    {
        $this->session = $session;
    }


    /**
     * Flash some data into the session
     *
     * @param $name
     * @param $data
     */
    public function flash($name, $data)
    {
        $this->session->flash($name, $data);
    }
}
