<?php
// src/EventSubscriber/MyEventSubscriber
namespace App\EventSubscriber;

use App\Events\MyEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class MyEventSubscriber implements EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        return [
            MyEvent::NAME => [
                ['doSomething', 0],
            ]
        ];
    }

    public function doSomething(MyEvent $myEvent)
    {
        $response = $myEvent->getResponse();
        $content = $response->getContent();
        $content .= '<p>Bienvenue parmi nous ' . $myEvent->getUsername() . ' !</p>';
        $response->setContent($content);
    }
}
