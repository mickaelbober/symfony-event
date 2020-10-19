<?php
// src/Events/BasketProductAdded.php
namespace App\Events;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Contracts\EventDispatcher\Event;

class MyEvent extends Event
{
    const NAME = 'bienvenue.utilisateur';

    private $response;
    private $username;

    public function __construct(Response $response, $username)
    {
        $this->response = $response;
        $this->username = $username;
    }

    public function getResponse()
    {
        return $this->response;
    }

    public function getUsername()
    {
        return $this->username;
    }
}
