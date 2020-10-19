<?php

namespace App\Controller;

use App\Events\MyEvent;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * @route("/hello-world", name="hello-world", methods={"GET"})
     */
    public function helloWord(): Response
    {
        return new Response('<h1>Hello World</h1>');
    }

    /**
     * @route("/hello-world/{name}", name="hello-world-name", methods={"GET"})
     */
    public function helloWorldWithArguments(EventDispatcherInterface $eventDispatcher, $name): Response
    {
        $response = new Response('<h1>Hello ' . ucfirst($name) . '</h1>');
        $myEvent = new MyEvent($response, $name);
        $eventDispatcher->dispatch($myEvent, MyEvent::NAME);
        return $myEvent->getResponse();
    }
}
